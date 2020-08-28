<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 01/08/2020
 * Time: 10:45
 */

namespace App\Service;


use App\Entity\Clues;
use App\Entity\Den;
use App\Entity\Item;
use App\Entity\Lands;
use App\Entity\Ship;
use App\Entity\Treasure;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;

class ExplorationServices
{
    private $em;
    private $user;
    private $requestStack;
    private $shipServices;
    private $treasureServices;
    private $clue = null;
    private $treasure = null;
    private $error;
    private $success;

    /**
     * ExplorationServices constructor.
     * @param EntityManagerInterface $em
     * @param Security $security
     * @param RequestStack $requestStack
     * @param ShipServices $shipServices
     * @param TreasureServices $treasureServices
     */
    public function __construct(EntityManagerInterface $em, Security $security, RequestStack $requestStack, ShipServices $shipServices, TreasureServices $treasureServices) {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->requestStack = $requestStack;
        $this->shipServices = $shipServices;
        $this->treasureServices = $treasureServices;
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
     * @param Clues $clue
     */
    public function setClue(Clues $clue): void
    {
        $this->clue = $clue;
    }

    /**
     * @return Clues|null
     */
    public function getClue(): ?Clues
    {
        return $this->clue;
    }

    /**
     * @param Treasure $treasure
     */
    public function setTreasure(Treasure $treasure): void
    {
        $this->treasure = $treasure;
    }

    /**
     * @return Treasure|null
     */
    public function getTreasure(): ?Treasure
    {
        return $this->treasure;
    }

    /**
     * @param Treasure $treasure
     * @return bool
     * @throws \Exception
     */
    public function checkTreasureActivation(Treasure $treasure): bool
    {
        // Vérification du propriétaire
        if ($treasure->getOwner() == $this->user) {
            // Vérification de l'activation
            if (!$treasure->getIsActive()) {
                $item = $treasure->getItem();
                /*
                    On vérifie qu'aucun trésor identique n'est déjà activé => les trésors de même items ne sont pas
                    cumulables
                */
                if (!$this->em->getRepository(Treasure::class)->findOneBy(['owner' => $this->user, 'is_active' => true, 'item' => $item])) {
                    $treasure->setIsActive(true);
                    $treasure->setDateOfUse(new \DateTime('now', New \DateTimeZone('Europe/Paris')));
                    $this->em->persist($treasure);
                    $this->em->flush();

                    return true;
                }
                else {
                    $this->setError('Un trésor du même type est déjà activé.');
                }
            }
            else {
                $this->setError('Ce trésor est déjà activé.');
            }
        }
        else {
            $this->setError('Ce trésor ne vous appartient pas.');
        }
        return false;
    }

    /**
     * @throws \Exception
     */
    public function findTreasure(): void
    {
        $items = $this->em->getRepository(Item::class)->findAll();
        $item = $items[array_rand($items)];
        $duration = random_int(3, 7);

        $treasure = new Treasure();
        $treasure->setOwner($this->user);
        $treasure->setItem($item);
        $treasure->setDays($duration);

        $this->treasure = $treasure;

        $this->treasureServices->createTreasure($this->user);

        $this->em->persist($treasure);
    }

    /**
     * @param $position
     * @return bool
     */
    private function hasExplorerAtPos($position): bool
    {
        if ($land = $this->em->getRepository(Lands::class)->find($position)) {
            $ships = $this->user->getShips();
            foreach ($ships as $ship) {
                /** @var Ship $ship */
                if (!$ship instanceof Den && $ship->getPosition() == $land && $ship->getExplorer() > 0) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function checkCode(array $data): bool
    {
        $this->user->setPa($this->user->getPa() - 1);
        if (array_key_exists('code', $data) && array_key_exists('position', $data)) {
            if ($this->hasExplorerAtPos($data['position'])) {
                if (strtoupper($this->user->getTreasureWord()) == strtoupper($data['code']) && $this->user->getTreasurePosition() == $data['position']->getId()) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param Lands $land
     */
    private function checkClue(Lands $land): void
    {
        /** @var Clues $clue */
        $clue = $this->em->getRepository(Clues::class)->findOneBy(['user' => $this->user, 'position' => $land->getId(), 'discovered' => false]);
        if ($clue) {
            $this->setClue($clue);
            $clue->setDiscovered(true);
            $this->em->persist($clue);
        }
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
                $total = ['wood' => 0, 'food' => 0, 'alcohol' => 0, 'gold' => 0];
                foreach ($ships as $ship) {
                    $nb_explorers = $ship->getExplorer();

                    $gold = random_int(10, 20) * $nb_explorers;
                    $wood = random_int(2, 4) * $nb_explorers;
                    $food = random_int(2, 4) * $nb_explorers;
                    $alcohol = random_int(2, 4) * $nb_explorers;

                    $total['gold'] += $gold;

                    if ($wood > 0 && $this->shipServices->getMarchandisesFreeSpace($ship) >= $wood) {
                        $ship->setWood($ship->getWood() + $wood);
                        $total['wood'] += $wood;
                        $wood = 0;
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

                $this->setSuccess('Votre équipage part en exploration et récolte <span class="brown-text">' . $total['wood'] . ' morceaux de Bois</span>, <span class="green-text">' . $total['food'] . ' portions de Nourriture</span>, <span class="green-text">' . $total['alcohol'] . ' portions d\'Alcool</span> ainsi que <span class="gold-dark">' . $total['gold'] . ' Pièces d\'Or</span>.');

                $this->user->addGold($total['gold']);
                $this->user->setPa($this->user->getPa() - 1);
                $this->em->persist($this->user);

                $this->checkClue($land);

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
    public function explore(): bool
    {
        $request = $this->requestStack->getCurrentRequest();
        if ($request->get('explore')) {
            return $this->checkPosition($request);
        }
        else {
            $this->setError('Formulaire tronqué.');
        }
        return false;
    }
}