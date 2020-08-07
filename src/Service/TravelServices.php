<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 03/05/2020
 * Time: 21:03
 */

namespace App\Service;


use App\Entity\Den;
use App\Entity\Lands;
use App\Entity\Ship;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class TravelServices {
    private $em;
    private $error;
    private $shipServices;

    public function __construct(EntityManagerInterface $em, ShipServices $shipServices) {
        $this->em = $em;
        $this->error = '';
        $this->shipServices = $shipServices;
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
     * @param int $ship_id
     * @param int $target_position
     * @param $user
     */
    public function moveShip(int $ship_id, int $target_position, $user) {
        /** @var Lands $target_land */
        $target_land = $this->em->getRepository(Lands::class)->find($target_position);
        /** @var Ship $ship */
        $ship = $this->em->getRepository(Ship::class)->find($ship_id);
        $ship->setPosition($target_land);
        $this->shipServices->gainXP($ship, 2);
        $this->shipServices->updateMoral($ship, -1);
        $user->setPa($user->getPa() - 1);

        $this->em->persist($ship);
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * @param int $fleet_position
     * @param int $target_position
     * @param $user
     */
    public function moveFleet(int $fleet_position, int $target_position, $user) {
        $fleet = $this->shipServices->getLandFleet($fleet_position, $user->getShips());
        $target_land = $this->em->getRepository(Lands::class)->find($target_position);
        foreach ($fleet as $ship) {
            if ($ship->getSeaman() > 0) {
                $ship->setPosition($target_land);
                $this->shipServices->gainXP($ship, 2);
                $this->shipServices->updateMoral($ship, -1);
                $this->em->persist($ship);
            }
        }
        $user->setPa($user->getPa() - 1);
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * @param int $ship_id
     * @return bool
     */
    public function checkSeaman(int $ship_id) : bool {
        /** @var Ship $ship */
        $ship = $this->em->getRepository(Ship::class)->find($ship_id);

        if ($ship->getSeaman() > 0)
            return true;
        $this->setError('Ce navire ne peut pas se déplacer car aucun matelot ne se trouve à bord.');
        return false;
    }

    /**
     * @param int $fleet_position
     * @param $ships
     * @return bool
     */
    public function checkFleet(int $fleet_position, $ships) : bool {
        $fleet = $this->shipServices->getLandFleet($fleet_position, $ships);
        if(count($fleet) > 0) {
            $seamans = 0;
            foreach ($fleet as $ship) {
                $seamans += $ship->getSeaman();
            }
            if ($seamans > 0)
                return true;
            $this->setError('Cette flotte ne peut pas se déplacer car aucun de ses navires ne possède de matelot.');
        }
        else {
            $this->setError('Aucun de vos navires se situent sur ce territoire.');
        }
        return false;
    }

    /**
     * @param int $target_position
     * @param int $ship_id
     * @parem $user
     * @return bool
     */
    public function checkTargetPosition(int $target_position, int $ship_id, $user) : bool {
        /** @var Lands $target_land */
        $target_land = $this->em->getRepository(Lands::class)->find($target_position);
        /** @var Ship $ship */
        $ship = $this->em->getRepository(Ship::class)->find($ship_id);
        if ($target_land) {
            if ($ship) {
                if ((!$ship instanceof Den)) {
                    if ($target_land->getId() != $ship->getPosition()->getId()) {
                        if ($ship->getOwner()->getUsername() == $user->getUsername()) {
                            return true;
                        }
                        else {
                            $this->setError('Ce navire ne vous appartient pas.');
                        }
                    }
                    else {
                        $this->setError('ce navire se situe déjà sur ce territoire.');
                    }
                }
                else {
                    $this->setError('Vous ne pouvez pas déplacer votre repaire.');
                }
            }
            else {
                $this->setError('Ce navire n\'existe pas.');
            }
        }
        else {
            $this->setError('Vous ne pouvez pas voyager en dehors d\'Ilshenar');
        }
        return false;
    }

    /**
     * @param int $fleet_position
     * @param int $target_position
     * @return bool
     */
    public function checkPositions(int $fleet_position, int $target_position) : bool {
        $actuel_land = $this->em->getRepository(Lands::class)->find($fleet_position);
        $target_land = $this->em->getRepository(Lands::class)->find($target_position);
        if ($actuel_land && $target_land && $fleet_position != $target_position)
            return true;
        $this->setError('Vous ne pouvez pas vous déplacez vers le même endroit ou en dehors d\'Ilshenar..');
        return false;
    }

    /**
     * @param $user
     * @return bool
     */
    public function checkPA($user) : bool {
        if ($user->getPa() > 0)
            return true;
        $this->setError('Vous n\'avez plus assez de PA pour cette action.');
        return false;
    }
}