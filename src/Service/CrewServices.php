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
use Symfony\Component\Security\Core\Security;

class CrewServices {
    private $em;
    private $error;
    private $user;
    private $shipServices;

    /**
     * UserServices constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em, Security $security, ShipServices $shipServices) {
        $this->em = $em;
        $this->error = '';
        $this->user = $security->getUser();
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

    /**
     * @return array
     */
    public function getAllShipsAllRecruitsCost(): array
    {
        $recruits = [
            'cost' => 0
        ];
        $ships = $this->user->getShips();
        foreach ($ships as $ship) {
            $recruits[$ship->getId()]['seaman'] = 0;
            if (($seaman = $this->shipServices->getUnitFreeSpace('seaman', $ship)) > 0) {
                $recruits[$ship->getId()]['seaman'] = $seaman;
                $recruits['cost'] += $seaman * 100;
            }

            $recruits[$ship->getId()]['explorer'] = 0;
            if (($explorer = $this->shipServices->getUnitFreeSpace('explorer', $ship)) > 0) {
                $recruits[$ship->getId()]['explorer'] = $explorer;
                $recruits['cost'] += $explorer * 200;
            }

            $recruits[$ship->getId()]['gunner'] = 0;
            if (($gunner = $this->shipServices->getUnitFreeSpace('gunner', $ship)) > 0) {
                $recruits[$ship->getId()]['gunner'] = $gunner;
                $recruits['cost'] += $gunner * 500;
            }

            $recruits[$ship->getId()]['cook'] = 0;
            if (($cook = $this->shipServices->getUnitFreeSpace('cook', $ship)) > 0) {
                $recruits[$ship->getId()]['cook'] = $cook;
                $recruits['cost'] += $cook   * 1000;
            }

            $recruits[$ship->getId()]['carpenter'] = 0;
            if (($carpenter = $this->shipServices->getUnitFreeSpace('carpenter', $ship)) > 0) {
                $recruits[$ship->getId()]['carpenter'] = $carpenter;
                $recruits['cost'] += $carpenter * 2000;
            }

            $recruits[$ship->getId()]['surgeon'] = 0;
            if (($surgeon = $this->shipServices->getUnitFreeSpace('surgeon', $ship)) > 0) {
                $recruits[$ship->getId()]['surgeon'] = $surgeon;
                $recruits['cost'] += $surgeon * 5000;
            }
        }

        return $recruits;
    }

    public function recruitAll(): void
    {
        $recruits = $this->getAllShipsAllRecruitsCost();
        if (($recruits['cost']) > 0) {
            if ($recruits['cost'] <= $this->user->getGold()) {
                foreach ($this->user->getShips() as $ship) {
                    $ship->setSeaman($ship->getSeaman() + $recruits[$ship->getId()]['seaman']);
                    $ship->setExplorer($ship->getExplorer() + $recruits[$ship->getId()]['explorer']);
                    $ship->setGunner($ship->getGunner() + $recruits[$ship->getId()]['gunner']);
                    $ship->setCook($ship->getCook() + $recruits[$ship->getId()]['cook']);
                    $ship->setCarpenter($ship->getCarpenter() + $recruits[$ship->getId()]['carpenter']);
                    $ship->setSurgeon($ship->getSurgeon() + $recruits[$ship->getId()]['surgeon']);

                    $this->em->persist($ship);
                }
                $this->user->setGold($this->user->getGold() - $recruits['cost']);
                $this->em->persist($this->user);
                $this->em->flush();
            }
            else {
                $this->setError('Vous ne possédez pas l\'or nécessaire pour acheter toutes ces recrues.');
            }
        }
        else {
            $this->setError('L\'équipage de vos navires est déjà au max.');
        }
    }
}