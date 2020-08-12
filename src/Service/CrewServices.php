<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 01/05/2020
 * Time: 18:08
 */

namespace App\Service;


use App\Entity\Ship;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class CrewServices {
    private $em;
    private $error;
    private $shipServices;

    /**
     * UserServices constructor.
     * @param EntityManagerInterface $em
     */
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
     * @param $data
     * @return int
     */
    private function getPrice($data) : int {
        return $data['seaman'] * 100 + $data['explorer'] * 200 + $data['gunner'] * 500 + $data['cook'] * 1000 + $data['carpenter'] * 2000 + $data['surgeon'] * 5000;
    }

    /**
     * @param $data
     * @param User $user
     */
    public function recruit($data, User $user) {
        /** @var Ship $ship */
        $ship = $data['ships'];

        $ship->setSeaman($ship->getSeaman() + $data['seaman']);
        $ship->setExplorer($ship->getExplorer() + $data['explorer']);
        $ship->setGunner($ship->getGunner() + $data['gunner']);
        $ship->setCook($ship->getCook() + $data['cook']);
        $ship->setCarpenter($ship->getCarpenter() + $data['carpenter']);
        $ship->setSurgeon($ship->getSurgeon() + $data['surgeon']);

        $user->setGold($user->getGold() - $this->getPrice($data));

        $this->em->persist($ship);
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * @param $data
     * @param Ship $ship
     * @return bool
     */
    private function checkShipFreeSpace($data, Ship $ship) : bool {
        if ($this->shipServices->getUnitFreeSpace('seaman', $ship) >= $data['seaman']) {
            if ($this->shipServices->getUnitFreeSpace('explorer', $ship) >= $data['explorer']) {
                if ($this->shipServices->getUnitFreeSpace('gunner', $ship) >= $data['gunner']) {
                    if ($this->shipServices->getUnitFreeSpace('cook', $ship) >= $data['cook']) {
                        if ($this->shipServices->getUnitFreeSpace('carpenter', $ship) >= $data['carpenter']) {
                            if ($this->shipServices->getUnitFreeSpace('surgeon', $ship) >= $data['surgeon']) {
                                return true;
                            }
                            else {
                                $this->setError('Vous ne pouvez pas avoir autant de chirurgiens sur ce navire.');
                            }
                        }
                        else {
                            $this->setError('Vous ne pouvez pas avoir autant de charpentiers sur ce navire.');
                        }
                    }
                    else {
                        $this->setError('Vous ne pouvez pas avoir autant de cuisiniers sur ce navire.');
                    }
                }
                else {
                    $this->setError('Vous ne pouvez pas avoir autant de canonniers sur ce navire.');
                }
            }
            else {
                $this->setError('Vous ne pouvez pas avoir autant d\'explorateurs sur ce navire.');
            }
        }
        else {
            $this->setError('Vous ne pouvez pas avoir autant de matelots sur ce navire.');
        }
        return false;
    }

    /**
     * @param $data
     * @param User $user
     * @param Ship $ship
     * @return bool
     */
    private function checkBudget($data, User $user, Ship $ship) : bool {
        $price = $this->getPrice($data);

        if ($user->getGold() >= $price) {
            return $this->checkShipFreeSpace($data, $ship);
        }
        else {
            $this->setError('Vous ne possédez pas les ' . number_format($price, 2, ',', ' ') . ' Pièces d\'or requises.');
        }
        return false;
    }

    /**
     * @param $data
     * @param User $user
     * @return bool
     */
    public function checkRecruit($data, User $user) : bool {
        $ship = $data['ships'];

        if ($data['seaman'] > 0 || $data['explorer'] > 0 || $data['gunner'] > 0 || $data['cook'] > 0 || $data['carpenter'] > 0 || $data['surgeon'] > 0) {
            if ($data['seaman'] >= 0 && $data['explorer'] >= 0 && $data['gunner'] >= 0 && $data['cook'] >= 0 && $data['carpenter'] >= 0 && $data['surgeon'] >= 0) {
                return $this->checkBudget($data, $user, $ship);
            }
            else {
                $this->setError('Vous ne pouvez pas renseigner de valeur négative');
            }
        }
        else {
            $this->setError('Vous devez renseigner au moins une valeur positive');
        }
        return false;
    }
}