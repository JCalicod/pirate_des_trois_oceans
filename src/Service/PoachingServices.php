<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 03/08/2020
 * Time: 00:28
 */

namespace App\Service;


use App\Entity\Lands;
use App\Entity\Ship;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;

class PoachingServices
{
    private $em;
    private $user;
    private $requestStack;
    private $shipServices;
    private $error;
    private $success;

    /**
     * ExplorationServices constructor.
     * @param EntityManagerInterface $em
     * @param Security $security
     * @param RequestStack $requestStack
     */
    public function __construct(EntityManagerInterface $em, Security $security, RequestStack $requestStack, ShipServices $shipServices) {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->requestStack = $requestStack;
        $this->shipServices = $shipServices;
        $this->error = '';
        $this->success = '';
    }

    /**
     * @param string $error
     */
    public function setError(string $error)
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $success
     */
    public function setSuccess(string $success)
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getSuccess(): string
    {
        return $this->success;
    }

    /**
     * @param Lands $land
     * @return bool
     * @throws \Exception
     */
    private function checkShips(Lands $land): bool
    {
        $ships = $this->em->getRepository(Ship::class)->findUserShipsWithExplorers($this->user, $land);
        if (count($ships) > 0) {
            if ($this->user->getPa() > 0) {
                $nb_explorers = 0;
                $total = ['copper' => 0, 'food' => 0, 'alcohol' => 0, 'gold' => 0];
                foreach ($ships as $ship) {
                    $nb_explorers = $ship->getExplorer();

                    $gold = random_int(10, 20) * $nb_explorers;
                    $copper = random_int(2, 4) * $nb_explorers;
                    $food = random_int(2, 4) * $nb_explorers;
                    $alcohol = random_int(2, 4) * $nb_explorers;

                    $total['gold'] += $gold;

                    if ($copper > 0 && $this->shipServices->getMarchandisesFreeSpace($ship) >= $copper) {
                        $ship->setCopper($ship->getCopper() + $copper);
                        $total['copper'] += $copper;
                        $copper = 0;
                    }
                    if ($food > 0 && $this->shipServices->getMarchandisesFreeSpace($ship) >= $food) {
                        $ship->setFood($ship->getFood() + $food);
                        $total['food'] += $food;
                        $food = 0;
                    }
                    if ($alcohol > 0 && $this->shipServices->getMarchandisesFreeSpace($ship) >= $alcohol) {
                        $ship->setAlcohol($ship->getAlcohol() + $alcohol);
                        $total['alcohol'] += $alcohol;
                        $alcohol = 0;
                    }
                    $this->shipServices->gainXP($ship, 2);
                    $this->em->persist($ship);
                }

                $this->setSuccess('Votre équipage part braconner et récolte <span class="brown-text">' . $total['copper'] . ' morceaux de Cuir</span>, <span class="green-text">' . $total['food'] . ' portions de Nourriture</span>, <span class="green-text">' . $total['alcohol'] . ' portions d\'Alcool</span> ainsi que <span class="gold-dark">' . $total['gold'] . ' Pièces d\'Or</span>.');

                $this->user->addGold($total['gold']);
                $this->user->setPa($this->user->getPa() - 1);
                $this->em->persist($this->user);
                $this->em->flush();

                return true;
            }
            else {
                $this->setError('Vous n\'avez plus assez de Points d\'Action pour cette action.');
            }
        }
        else {
            $this->setError('Vous ne possédez aucun explorateur sur ce territoire.');
        }
        return false;
    }

    /**
     * @param Request|null $request
     * @return bool
     * @throws \Exception
     */
    private function checkPosition(?Request $request): bool
    {
        $position = $request->get('land');
        if (is_string($position) && $land = $this->em->getRepository(Lands::class)->find($position)) {
            return $this->checkShips($land);
        }
        else {
            $this->setError('Le territoire indiqué n\'existe pas.');
        }
        return false;
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function poach(): bool
    {
        $request = $this->requestStack->getCurrentRequest();
        if ($request->get('poach')) {
            return $this->checkPosition($request);
        }
        else {
            $this->setError('Formulaire tronqué.');
        }
        return false;
    }
}