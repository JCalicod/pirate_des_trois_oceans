<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 21:44
 */

namespace App\Service;


use App\Entity\Den;
use App\Entity\Lands;
use App\Entity\Treasure;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

class UserServices
{
    private $em;
    private $passwordEncoder;
    private $error;
    private $success;
    private $current_user;

    /**
     * UserServices constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em, UserPasswordEncoderInterface $passwordEncoder, Security $security)
    {
        $this->em = $em;
        $this->passwordEncoder = $passwordEncoder;
        $this->error = null;
        $this->success = null;
        $this->current_user = $security->getUser();
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
     * @param Request $request
     * @param $user
     * @param FormInterface $form
     * @return bool
     */
    public function updateSettings(Request $request, $user, FormInterface $form): bool
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            // La modification du mot de passe est optionnelle
            if (strlen($data['password']) > 0 || strlen($data['old_password']) > 0) {
                if ($this->passwordEncoder->isPasswordValid($user, $data['old_password'])) {
                    if ($data['password'] != $data['old_password']) {
                        if (strlen($data['password']) >= 3) {
                            $user->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));
                        } else {
                            $this->setError('Votre mot de passe doit faire au minimum 3 caractères.');
                            return false;
                        }
                    } else {
                        $this->setError('Vous devez renseigner un mot de passe différent.');
                        return false;
                    }
                } else {
                    $this->setError('Le mot de passe renseigné n\'est pas le bon.');
                    return false;
                }
            }
            // La modification de la description est optionnelle
            if (strlen($data['description']) >= 3 && strlen($data['description']) <= 500) {
                $user->setDescription($data['description']);
            }
            else {
                $this->setError('La description doit contenir entre 3 et 500 caractères.');
                return false;
            }
            $user->setAvatar($data['avatar']);
            $this->em->persist($user);
            $this->em->flush();

            $this->setSuccess('Vos informations ont bien été mises à jour.');
            return true;
        }
        return false;
    }

    /**
     * @param $ships
     * @param int $position
     * @return bool
     */
    private function hasSeamanOnThisPosition($ships, int $position): bool
    {
        foreach ($ships as $ship) {
            if ($ship->getPosition()->getId() == $position && $ship->getSeaman() > 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param $ships
     * @return array
     */
    public function getMovableFleet($ships): array
    {
        $positions = [];
        $movable = [];
        foreach ($ships as $ship) {
            if (!$ship instanceof Den) {
                if (!in_array($ship->getPosition()->getId(), $positions)) {
                    array_push($positions, $ship->getPosition()->getId());
                }
            }
        }
        sort($positions);
        foreach ($positions as $pos) {
            if ($this->hasSeamanOnThisPosition($ships, $pos)) {
                array_push($movable, $this->em->getRepository(Lands::class)->find($pos));
            }
        }
        return $movable;
    }

    /**
     * @param array $ships
     * @return array
     */
    public function orderShipsByPosition($ships): array
    {
        $order = [];
        foreach ($ships as $ship) {
            if (!$ship instanceof Den) {
                $key = $ship->getPosition()->getId() . '. ' . $ship->getPosition()->getName();
                $value = $ship->getName() . ' Niv.' . $ship->getLevel();
                if (!array_key_exists($key, $order)) {
                    $order[$key] = [$value];
                } else {
                    array_push($order[$key], $value);
                }
            }
        }
        return $order;
    }

    /**
     * @return array
     */
    public function getTop20(): array
    {
        $ranking = [];
        $users = $this->em->getRepository(User::class)->findAll();
        foreach ($users as $user) {
            $ranking[] = [
                'id' => $user->getId(),
                'power' => $this->getPower($user),
                'username' => $user->getUsername(),
                'avatar' => $user->getAvatar(),
                'activity' => $user->isActiveNow()
            ];
        }

        array_multisort(array_column($ranking, 'power'), SORT_DESC, $ranking);
        return array_slice($ranking, 0, 20);
    }

    /**
     * @param User $user
     * @return int
     */
    public function getRanking(User $user): int
    {
        $ranking = 1;
        $power = $this->getPower($user);
        $userList = $this->em->getRepository(User::class)->findAll();

        foreach ($userList as $oponent) {
            if ($this->getPower($oponent) > $power) {
                $ranking++;
            }
        }
        return $ranking;
    }

    /**
     * @param User $user
     * @param int|null $position
     * @param bool $den
     * @return int
     */
    public function getPower(User $user, int $position = null, bool $den = true): int
    {
        $power = 0;
        foreach ($user->getShips() as $ship) {
            if (($position && $position == $ship->getPosition()->getId()) || !$position) {
                if ($den || !($ship instanceof Den)) {
                    $power += 500 * $ship->getLevel();
                }
            }
        }
        $power += intval($user->getGold() / 1000);
        return $power;
    }

    /**
     * @param User $user
     * @return int
     */
    public function getFullCrew(User $user): int
    {
        $crew = 0;
        foreach ($user->getShips() as $ship) {
            $crew += $ship->getSeaman() + $ship->getExplorer() + $ship->getGunner() + $ship->getCook() + $ship->getCarpenter() + $ship->getSurgeon();
        }
        return $crew;
    }

    /**
     * @param array $data
     * @return object|null
     */
    public function spy(array $data): ?User
    {
        if ($user = $this->em->getRepository(User::class)->findOneBy(['username' => $data['username']])) {
            if ($user != $this->current_user) {
                // Si le joueur possède un perroquet maudit, on ne peut pas l'espionner
                if (!($this->em->getRepository(Treasure::class)->userHasItem($user, 'Perroquet Maudit'))) {
                    // Si l'utilisateur souhaitant espionner possède une longue-vue, il ne paye pas l'espionnage
                    if ($this->em->getRepository(Treasure::class)->userHasItem($this->current_user, 'Longue-vue Enchantée')) {
                        return $user;
                    }
                    else {
                        if ($this->current_user->getGold() >= 15000) {
                            $this->current_user->withdrawGold(15000);
                            $this->em->persist($this->current_user);
                            $this->em->flush();
                            return $user;
                        }
                        else {
                            $this->setError('Vous ne possédez pas l\'argent requis pour espionner ce joueur.');
                        }
                    }
                }
                else {
                    $this->setError('Ce pirate ne peut être espionné pour le moment..');
                }
            } else {
                $this->setError('Vous ne pouvez pas vous espionner.');
            }
        } else {
            $this->setError('Cet utilisateur n\'existe pas.');
        }
        return null;
    }
}