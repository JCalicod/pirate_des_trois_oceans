<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 15/06/2020
 * Time: 12:31
 */

namespace App\Service;


use App\Entity\Alliance;
use App\Entity\AllianceHistory;
use App\Entity\AllianceMember;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Core\Security;

class AllianceServices
{
    private $em;
    private $user;
    private $success;
    private $error;
    private $alliance;

    public function __construct(EntityManagerInterface $em, Security $security)
    {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->success = null;
        $this->error = null;
        $this->alliance = $this->user->getAlliance();
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error)
    {
        $this->error = $error;
    }

    /**
     * @return string|null
     */
    public function getSuccess(): ?string
    {
        return $this->success;
    }

    /**
     * @param string $success
     */
    public function setSuccess(string $success)
    {
        $this->success = $success;
    }

    /**
     * @param Alliance $alliance
     * @param string $type
     * @param string $content
     */
    public function createLog(Alliance $alliance, string $type, string $content): void
    {
        $log = new AllianceHistory();
        $log->setAlliance($alliance);
        $log->setType($type);
        $log->setContent($content);
        $this->em->persist($log);
    }

    /**
     * @param User $user
     * @param Alliance $alliance
     * @return AllianceMember
     */
    public function createAllianceMember(User $user, Alliance $alliance): AllianceMember
    {
        $member = new AllianceMember();
        $member->setRole('USER');
        $member->setAlliance($alliance);
        $member->setUser($user);

        $this->em->persist($member);

        return $member;
    }

    /**
     * @param User $user
     */
    private function leaveAction(User $user): void
    {
        $member = $this->em->getRepository(AllianceMember::class)->findOneBy(['user' => $user]);
        $this->em->remove($member);
        $this->alliance->removeUser($user);
        $this->em->persist($this->alliance);
    }

    private function removeAlliance(): void
    {
        // Suppression des logs
        $logs = $this->em->getRepository(AllianceHistory::class)->findBy(['alliance' => $this->alliance]);
        foreach ($logs as $log) {
            $this->em->remove($log);
        }
        // Suppression du lien "membres"
        $members = $this->em->getRepository(AllianceMember::class)->findBy(['alliance' => $this->alliance]);
        foreach ($members as $member) {
            $this->em->remove($member);
        }
        // Suppression du lien "users"
        $users = $this->em->getRepository(User::class)->findBy(['alliance' => $this->alliance]);
        foreach ($users as $user) {
            $user->setAlliance(null);
            $this->em->persist($user);
        }
        // Suppression de l'alliance
        $this->em->remove($this->alliance);

        $this->em->flush();
    }

    /**
     * @return bool
     */
    public function leave(): bool
    {
        // Si le chef veut quitter l'alliance
        if ($this->alliance->getLeader() == $this->user) {
            // S'il est le seul de l'Alliance, alors il peut quitter et l'Alliance sera détruite
            if (count($this->alliance->getAllianceMembers()) == 1) {
                $this->removeAlliance();
                return true;
            }
            // Sinon, il doit d'abord nommer un membre Chef
            else {
                $this->setError('Vous devez nommer un membre Chef avant de quitter l\'Alliance.');
                return false;
            }
        }
        // Si un simple membre veut quitter l'alliance
        $this->createLog($this->alliance, 'inout', $this->user->getUsername() . ' a quitté l\'Alliance.');
        $this->leaveAction($this->user);
        $this->em->flush();

        return true;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function updateStatusAndPower(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('required_power', $data)) {
            $required_power = $data['required_power'];
            $open = $data['open'];
            if ($required_power >= 0 and $required_power <= 1000000) {
                if (!is_null($open)) {
                    $this->alliance->setOpen($open);
                    $this->alliance->setRequiredPower($required_power);
                    $this->createLog($this->alliance, 'status', 'La Gestion du Recrutement a été mise à jour.');
                    $this->em->persist($this->alliance);
                    $this->em->flush();
                    $this->setSuccess('La Gestion du Recrutement a été mise à jour avec succès.');
                    return true;
                }
                else {
                    $this->setError('Veuillez renseigner un Status');
                }
            }
            else {
                $this->setError('La Puissance requise doit se situer entre 0 et 1 000 000.');
            }
        }
        else {
            $this->setError('Vous devez renseigner un Status et une Puissance minimale.');
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function updateAdvert(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('advert', $data) && $advert = $data['advert']) {
            if (strlen($advert) <= 255) {
                $this->alliance->setAdvert($advert);
                $this->createLog($this->alliance, 'advert',  'Une Annonce a été rédigée.');
                // On met à jour la visibilité du message pour chaque membre
                foreach ($this->alliance->getUsers() as $user) {
                    $user->setShowAllianceAdvert(true);
                    $this->em->persist($user);
                }
                $this->em->persist($this->alliance);
                $this->em->flush();
                $this->setSuccess('L\'Annonce a été rédigée avec succès.');
                return true;
            }
            else {
                $this->setError('L\'Annonce doit contenir au maximum 255 caractères.');
            }
        }
        else {
            $this->setError('Vous devez renseigner l\'Annonce.');
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function updatePirateCode(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('pirate_code', $data) && $code = $data['pirate_code']) {
            if (strlen($code) >= 10 and strlen($code) <= 1500) {
                $this->alliance->setPirateCode($code);
                $this->createLog($this->alliance, 'content',  'Le Code du Pirate a été modifié.');
                $this->em->persist($this->alliance);
                $this->em->flush();
                $this->setSuccess('Le Code du Pirate a été modifiée avec succès.');
                return true;
            }
            else {
                $this->setError('Le Code du Pirate doit contenir entre 10 et 1 500 caractères.');
            }
        }
        else {
            $this->setError('Vous devez renseigner le Code du Pirate.');
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function updatePresentation(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('description', $data) && $description = $data['description']) {
            if (strlen($description) >= 10 and strlen($description) <= 1500) {
                $this->alliance->setDescription($description);
                $this->createLog($this->alliance, 'content',  'La description a été modifiée.');
                $this->em->persist($this->alliance);
                $this->em->flush();
                $this->setSuccess('La Description a été modifiée avec succès.');
                return true;
            }
            else {
                $this->setError('Le description doit contenir entre 10 et 1 500 caractères.');
            }
        }
        else {
            $this->setError('Vous devez renseigner une description.');
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function excludeMember(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('member', $data) && $member = $data['member']) {
            if ($member != $this->user) {
                if ($member->getAlliance() == $this->alliance) {
                    $this->createLog($this->alliance, 'inout', $member->getUsername() . ' a été exclu de l\'Alliance.');
                    $this->leaveAction($member);
                    $this->em->flush();
                    $this->setSuccess('Ce Pirate a bien été exclu de l\'Alliance.');
                    return true;
                } else {
                    $this->setError('Ce pirate ne fait pas partie de votre alliance.');
                }
            }
            else {
                $this->setError('Vous ne pouvez pas vous exclure.');
            }
        }
        else {
            $this->setError('Vous devez renseigner un membre de l\'Alliance.');
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @return bool
     */
    public function updateChief(FormInterface $form): bool
    {
        $data = $form->getData();
        if (array_key_exists('chief', $data) && $chief = $data['chief']) {
            if ($chief != $this->user) {
                if ($chief->getAlliance() == $this->alliance) {
                    $this->alliance->updateLeader($chief);
                    $this->createLog($this->alliance, 'chief', $chief->getUsername() . ' devient le nouveau Chef de l\'Alliance.');
                    $this->em->persist($this->alliance->getLeader());
                    $this->em->flush();
                    $this->setSuccess('L\'Alliance est à présent dirigée par ' . $chief->getUsername() . '.');
                    return true;
                } else {
                    $this->setError('Ce pirate ne fait pas partie de votre alliance.');
                }
            }
            else {
                $this->setError('Vous êtes déjà dirigeant de l\'Alliance.');
            }
        }
        else {
            $this->setError('Vous devez renseigner un Chef.');
        }
        return false;
    }

    /**
     * @param Alliance $alliance
     */
    public function createAlliance(Alliance $alliance)
    {
        $allianceMember = new AllianceMember();
        $allianceMember->setAlliance($alliance);
        $allianceMember->setUser($this->user);
        $allianceMember->setRole('ADMIN');
        $this->user->setAlliance($alliance);
        $this->user->setGold($this->user->getGold() - 20000);
        $this->em->persist($alliance);
        $this->em->persist($allianceMember);
        $content = $this->user->getUsername() . ' a créé l\'alliance <span class="font-weight-bold alliance-' . $alliance->getColor() . '">[' . $alliance->getAbbreviation() . ']</span>.';
        $this->createLog($alliance, 'inout', $content);
        $this->em->flush();
    }

    public function closeAdvert(): void
    {
        $this->user->setShowAllianceAdvert(false);
        $this->em->persist($this->user);
        $this->em->flush();
    }
}