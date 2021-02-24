<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 08/05/2020
 * Time: 01:49
 */

namespace App\Service;


use App\Entity\Den;
use App\Entity\Ship;
use App\Entity\Trade;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

class TradeServices {
    private $em;
    private $shipServices;
    private $user;
    private $error;
    private $success;

    public function __construct(EntityManagerInterface $em, ShipServices $shipServices, Security $security) {
        $this->em = $em;
        $this->shipServices = $shipServices;
        $this->user = $security->getUser();
        $this->error = null;
        $this->success = null;
    }

    /**
     * @return string|null
     */
    public function getError() : ?string {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error) {
        $this->error = $error;
    }

    /**
     * @return string|null
     */
    public function getSuccess() : ?string {
        return $this->success;
    }

    /**
     * @param string $success
     */
    public function setSuccess(string $success) {
        $this->success = $success;
    }

    /**
     * @return array
     */
    private function getKeys() : array {
        return [
            'gun',
            'arsenal',
            'food',
            'alcohol',
            'wood',
            'copper',
            'gemstone',
            'jewellery',
            'stuff',
            'fur',
            'manuscript',
            'spice'
        ];
    }

    /**
     * @param Den $den
     * @param array $items
     * @return bool
     */
    private function checkDenItems(Den $den, array $items) : bool {
        $keys = $this->getKeys();
        foreach ($keys as $key) {
            if ($items[$key]['quantity'] > 0) {
                $getItem = 'get' . strtoupper($key[0]) . substr($key, 1);
                if ($den->$getItem() < $items[$key]['quantity']) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * @param array $items
     * @return int
     */
    private function getTotalPrice(array $items) : int {
        $sum = 0;
        $keys = $this->getKeys();
        foreach ($keys as $key) {
            $sum += $this->shipServices->getItemPrice($key, $items[$key]['quantity']);
        }
        return $sum;
    }

    /**
     * @param Den $den
     * @param array $items
     * @return bool
     */
    private function checkAvailableSpace(Den $den, array $items) : bool {
        $sum = 0;
        $keys = $this->getKeys();
        foreach ($keys as $key) {
            $sum += $items[$key]['quantity'];
        }
        if ($sum <= $this->shipServices->getMarchandisesFreeSpace($den)) {
            return true;
        }
        return false;
    }

    /**
     * @param array $items
     * @return bool
     */
    private function checkQuantities(array $items) : bool {
        $keys = $this->getKeys();
        foreach ($keys as $key) {
            if (!array_key_exists('quantity', $items[$key]) || !ctype_digit($items[$key]['quantity'])) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $items
     * @return bool
     */
    private function checkKeys(array $items) : bool {
        $keys = $this->getKeys();

        foreach ($keys as $key) {
            if (!array_key_exists($key, $items)) {
                return false;
            }
        }
        return true;
    }

    public function sell($user, array $items) {
        /** @var Den $den */
        $den = $this->em->getRepository(Den::class)->findOneBy(['owner' => $user]);

        // Vérification du tableau transmis
        if ($this->checkKeys($items)) {
            // Vérification des valeurs (nombres entiers non négatifs)
            if ($this->checkQuantities($items)) {
                // Vérification des stocks
                if ($this->checkDenItems($den, $items)) {
                    // Vente des marchandises
                    $keys = $this->getKeys();
                    // Suppression des marchandises du repaire pirate
                    foreach ($keys as $key) {
                        if ($items[$key]['quantity'] > 0) {
                            $getItem = 'get' . strtoupper($key[0]) . substr($key, 1);
                            $setItem = 'set' . strtoupper($key[0]) . substr($key, 1);
                            $den->$setItem($den->$getItem() - $items[$key]['quantity']);
                        }
                    }
                    // Gain d'or
                    $totalPrice = $this->getTotalPrice($items);
                    $trade = $this->em->getRepository(Trade::class)->findAll()[0];
                    $totalPrice *= ($trade->getRate() / 100);
                    $user->setGold($user->getGold() + $totalPrice);

                    $this->em->persist($den);
                    $this->em->persist($user);
                    $this->em->flush();

                    $this->setSuccess('Les marchandises ont bien été vendues.');
                }
                else {
                    $this->setError('Vous ne possédez pas autant de ressources dans votre repaire.');
                }
            }
            else {
                $this->setError('Vous ne pouvez pas renseigner de valeur négative.');
            }
        }
        else {
            $this->setError('Il y a une erreur dans les données transmises.');
        }
    }

    /**
     * @param $user
     * @param array $items
     */
    public function buy($user, array $items) {
        /** @var Den $den */
        $den = $this->em->getRepository(Den::class)->findOneBy(['owner' => $user]);

        // Vérification du tableau transmis
        if ($this->checkKeys($items)) {
            // Vérification des valeurs (nombres entiers non négatifs)
            if ($this->checkQuantities($items)) {
                // Vérification de la place disponible sur le repaire
                if ($this->checkAvailableSpace($den, $items)) {
                    // Vérification de lu prix
                    $totalPrice = $this->getTotalPrice($items);
                    $trade = $this->em->getRepository(Trade::class)->findAll()[0];
                    $totalPrice = round($totalPrice * ($trade->getRate() / 100));
                    $totalPrice = $totalPrice + round($totalPrice / 10 * ($trade->getRate() / 100));

                    if ($user->getGold() >= $totalPrice) {
                        // Achat des marchandises
                        $keys = $this->getKeys();
                        // Ajout des marchandises au repaire du pirate
                        foreach ($keys as $key) {
                            if ($items[$key]['quantity'] > 0) {
                                $getItem = 'get' . strtoupper($key[0]) . substr($key, 1);
                                $setItem = 'set' . strtoupper($key[0]) . substr($key, 1);
                                $den->$setItem($den->$getItem() + $items[$key]['quantity']);
                            }
                        }
                        // Retrait de l'or au pirate
                        $user->setGold($user->getGold() - $totalPrice);
                        // Ajout de l'or au commerce
                        /** @var Trade $trade */
                        $trade->setAmount($trade->getAmount() + $totalPrice);

                        $this->em->persist($den);
                        $this->em->persist($user);
                        $this->em->persist($trade);
                        $this->em->flush();

                        $this->setSuccess('Les marchandises ont bien été transférées dans votre Repaire.');
                    }
                    else {
                        $this->setError('Vous n\'avez pas assez d\'or pour acheter ces marchandises.');
                    }
                }
                else {
                    $this->setError('Il n\'y a pas assez d\'espace libre dans votre repaire.');
                }
            }
            else {
                $this->setError('Vous ne pouvez pas renseigner de valeur négative.');
            }
        }
        else {
            $this->setError('Il y a une erreur dans les données transmises.');
        }
    }

    /**
     * @return array
     */
    public function getDenValues(): array
    {
        /** @var Den $den */
        $den = $this->em->getRepository(Den::class)->findOneBy(['owner' => $this->user]);

        return [
            'gun' => $den->getGun(),
            'arsenal' => $den->getArsenal(),
            'food' => $den->getFood(),
            'alcohol' => $den->getAlcohol(),
            'wood' => $den->getWood(),
            'copper' => $den->getCopper(),
            'gemstone' => $den->getGemstone(),
            'jewellery' => $den->getJewellery(),
            'stuff' => $den->getStuff(),
            'fur' => $den->getFur(),
            'manuscript' => $den->getManuscript(),
            'spice' => $den->getSpice()
        ];
    }
}