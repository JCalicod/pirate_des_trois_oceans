<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 01:18
 */

namespace App\Service;


use App\Entity\Clues;
use App\Entity\Den;
use App\Entity\Lands;
use App\Entity\Ship;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityServices {
    private $encoder;
    private $em;
    private $treasureServices;
    private $error;

    public function __construct(UserPasswordEncoderInterface $encoder, EntityManagerInterface $em, TreasureServices $treasureServices) {
        $this->encoder = $encoder;
        $this->em = $em;
        $this->treasureServices = $treasureServices;
        $this->error = '';
    }

    /**
     * @return string
     */
    public function getError() : string {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error) {
        $this->error = $error;
    }

    /**
     * @param array $data
     * @param User $user
     * @return array|null
     * @throws \Exception
     */
    public function checkShip(array $data, User $user) : ?array {
        if (strlen($data['ship_name']) >= 3 && strlen($data['ship_name']) <= 20 && !preg_match('/[^A-Za-z0-9]/', $data['ship_name'])) {
            $ship = new Ship();
            $ship->setName($data['ship_name']);
            $land = $this->em->getRepository(Lands::class)->find($data['position']);
            $ship->setPosition($land);
            $ship->setDisplayOrder(2);
            $ship->setAvatar(random_int(1, 3));
            $user->addShip($ship);

            $den = new Den();
            $den->setName('Repaire');
            $den->setPosition($land);
            $den->setDisplayOrder(1);
            $user->addShip($den);

            $this->treasureServices->createTreasure($user);

            $user->setIp($_SERVER['REMOTE_ADDR']);

            return ['ship' => $ship, 'den' => $den, 'user' => $user];
        }
        else {
            $this->setError('Le nom de navire doit comporter entre 3 et 20 caractères et contenir uniquement des caractères alphanumériques.');
        }
        return null;
    }

    /**
     * @param array $data
     * @param User $user
     * @return array|null
     * @throws \Exception
     */
    public function checkEmail(array $data, User $user)  {
        if (!$this->em->getRepository(User::class)->findOneBy(['email_address' => $data['email_address']])) {
            $user->setEmailAddress($data['email_address']);
            if ($data['godfather']) {
                /** @var User $godfather */
                $godfather = $this->em->getRepository(User::class)->findOneBy(['username' => $data['godfather']]);
                if ($godfather) {
                    $user->setGodfather($godfather);
                    $user->setRoles(["ROLE_USER"]);

                    return $this->checkShip($data, $user);
                }
                else {
                    $this->setError('L\'utilisateur renseigné comme parrain n\'existe pas.');
                }
            }
            else {
                $user->setRoles(["ROLE_USER"]);

                return $this->checkShip($data, $user);
            }
        }
        else {
            $this->setError('Cette adresse mail est déjà utilisée.');
        }
        return null;
    }

    /**
     * @param array $data
     * @param User $user
     * @return array|null
     * @throws \Exception
     */
    public function checkPassword(array $data, User $user) {
        if (strlen($data['password']) >= 3) {
            $encodedPassword = $this->encoder->encodePassword($user, $data['password']);
            $user->setPassword($encodedPassword);

            return $this->checkEmail($data, $user);
        }
        else {
            $this->setError('Le mot de passe doit contenir au moins 3 caractères.');
        }
        return null;
    }

    /**
     * @param array $data
     * @param User $user
     * @return array|null
     * @throws \Exception
     */
    public function checkUsername(array $data, User $user) {
        if (strlen($data['username']) >= 3 && strlen($data['username']) <= 20) {
            if (!$this->em->getRepository(User::class)->findOneBy(['username' => $data['username']])) {
                $user->setUsername($data['username']);
                $user->setAvatar($data['avatar']);
                return $this->checkPassword($data, $user);
            }
            else {
                $this->setError('Ce pseudo est déjà utilisé.');
            }
        }
        else {
            $this->setError('Le pseudo doit contenir entre 3 et 20 caractères.');
        }
        return null;
    }

    /**
     * @param array $data
     * @return array|null
     * @throws \Exception
     */
    public function registration(array $data) : ?array {
        $user = new User();
        return $this->checkUsername($data, $user);
    }

}