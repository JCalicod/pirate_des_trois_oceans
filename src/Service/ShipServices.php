<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 01/05/2020
 * Time: 18:31
 */

namespace App\Service;


use App\Entity\Den;
use App\Entity\Lands;
use App\Entity\Ship;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ShipServices {
    private $em;
    private $error;
    private $success;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
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
     * @param array $ships_id
     * @return array
     */
    private function getShipsWithIDArray(array $ships_id) : array {
        $ships = [];
        foreach ($ships_id as $id) {
            $ships[] = $this->em->getRepository(Ship::class)->find($id);
        }
        return $ships;
    }

    /**
     * @param array $ships
     * @param $user
     * @return bool
     */
    private function shipsBelongsToUser(array $ships, $user) : bool {
        foreach ($ships as $ship) {
            $entity = $this->em->getRepository(Ship::class)->findOneBy(['id' => $ship, 'owner' => $user]);
            if (!$entity) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     */
    private function checkActionForm(array $data) : bool {
        if (array_key_exists('ship', $data) && is_array($data['ship'])) {
            return true;
        }
        return false;
    }

    /**
     * @param array $ships
     * @param $user
     */
    private function upgradeAction(array $ships, $user) {
        $upgrade = true;
        while ($upgrade) {
            $shipDone = 0;
            foreach ($ships as $ship) {
                if ($ship->getWood() >= 10 && $ship->getCopper() >= 10 && $user->getGold() >= 100) {
                    $ship->setWood($ship->getWood() - 10);
                    $ship->setCopper($ship->getCopper() - 10);
                    $this->gainXP($ship, 5);
                    $user->setGold($user->getGold() - 100);
                }
                else {
                    $shipDone++;
                }
            }
            if ($shipDone == count($ships)) {
                $upgrade = false;
            }
        }

        foreach ($ships as $ship) {
            $this->em->persist($ship);
        }
        $this->em->persist($user);
        $this->em->flush();

        $this->setSuccess('Les navires sélectionnés ont bien été améliorés.');
    }

    /**
     * @param array $ships
     * @param $user
     * @return bool
     */
    private function userHasEnoughGoldToUpgrade(array $ships, $user) : bool {
        $cost = 100 * count($ships);
        if ($user->getGold() < $cost) {
            return false;
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function allShipsHaveEnoughResourcesToUpgrade(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getWood() < 10 || $ship->getCopper() < 10) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param Request $request
     * @param $user
     */
    public function upgrade(Request $request, $user) {
        // On vérifie les variables reçues par le formulaire
        if ($this->checkActionForm($request->request->all())) {
            // On vérifie si le navire appartient à l'utilisateur
            if ($this->shipsBelongsToUser($request->request->get('ship'), $user)) {
                $ships = $this->getShipsWithIDArray($request->request->get('ship'));
                // On vérifie s'il y a au moins un cuisinier sur chaque navire
                if ($this->allShipsHaveCarpenter($ships)) {
                    // On vérifie les ressources à bord
                    if ($this->allShipsHaveEnoughResourcesToUpgrade($ships)) {
                        // On vérifie si l'utilisateur a assez d'or pour augmenter d'au moins un xp chaque navire
                        if ($this->userHasEnoughGoldToUpgrade($ships, $user)) {
                            // On peut réparer
                            $this->upgradeAction($ships, $user);
                        }
                        $this->setError('Vous n\'avez même pas assez d\'or pour augmenter d\'un point de moral l\'équipage sur chaque navire sélectionné.');
                    }
                    else {
                        $this->setError('Au moins un des navires sélectionnés ne possède pas assez de boix et de cuir pour être amélioré.');
                    }
                }
                else {
                    $this->setError('Chaque navire sélectionné doit posséder au moins un charpentier à bord.');
                }
            }
            else {
                $this->setError('Ces navires ne vous appartiennent pas..');
            }
        }
        else {
            $this->setError('Aucun navire n\'a été sélectionné.');
        }
    }

    /**
     * @param array $ships
     * @param $user
     */
    private function feedAction(array $ships, $user) {
        $feed = true;
        while ($feed) {
            $shipDone = 0;
            foreach ($ships as $ship) {
                if ($ship->getFood() >= $ship->getLevel() && $ship->getAlcohol() >= $ship->getLevel() &&
                    $user->getGold() >= 20 && $ship->getMoral() < 100) {
                    $ship->setFood($ship->getFood() - $ship->getLevel());
                    $ship->setAlcohol($ship->getAlcohol() - $ship->getLevel());
                    $ship->setMoral($ship->getMoral() + 1);
                    $user->setGold($user->getGold() - 20);
                }
                else {
                    $shipDone++;
                }
            }
            if ($shipDone == count($ships)) {
                $feed = false;
            }
        }

        foreach ($ships as $ship) {
            $this->em->persist($ship);
        }
        $this->em->persist($user);
        $this->em->flush();

        $this->setSuccess('L\'équipage des navires sélectionnés a bien été nourri.');
    }

    /**
     * @param array $ships
     * @param $user
     * @return bool
     */
    private function userHasEnoughGoldToAction(array $ships, $user) : bool {
        $cost = 20 * count($ships);
        if ($user->getGold() < $cost) {
            return false;
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function allShipsHaveEnoughResourcesToFeed(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getFood() < $ship->getLevel() || $ship->getAlcohol() < $ship->getLevel()) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function allShipsHaveCook(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getCook() == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function needMoral(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getMoral() == 100) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param Request $request
     * @param $user
     */
    public function feed(Request $request, $user) {
        // On vérifie les variables reçues par le formulaire
        if ($this->checkActionForm($request->request->all())) {
            // On vérifie si le navire appartient à l'utilisateur
            if ($this->shipsBelongsToUser($request->request->get('ship'), $user)) {
                $ships = $this->getShipsWithIDArray($request->request->get('ship'));
                // On vérifie le moral
                if ($this->needMoral($ships)) {
                    // On vérifie s'il y a au moins un cuisinier sur chaque navire
                    if ($this->allShipsHaveCook($ships)) {
                        // On vérifie les ressources à bord
                        if ($this->allShipsHaveEnoughResourcesToFeed($ships)) {
                            // On vérifie si l'utilisateur a assez d'or pour augmenter d'au moins un point de moral sur chaque navire
                            if ($this->userHasEnoughGoldToAction($ships, $user)) {
                                // On peut réparer
                                $this->feedAction($ships, $user);
                            }
                            $this->setError('Vous n\'avez même pas assez d\'or pour augmenter d\'un point de moral l\'équipage sur chaque navire sélectionné.');
                        }
                        else {
                            $this->setError('Au moins un des navires sélectionnés ne possède pas assez de nourriture et d\'alcool pour remonter le moral de son équipage.');
                        }
                    }
                    else {
                        $this->setError('Chaque navire sélectionné doit posséder au moins un cuisinier à bord.');
                    }
                }
                else {
                    $this->setError('Au moins un équipage des navires sélectionnés a déjà son moral au max.');
                }
            }
            else {
                $this->setError('Ces navires ne vous appartiennent pas..');
            }
        }
        else {
            $this->setError('Aucun navire n\'a été sélectionné.');
        }
    }

    /**
     * @param array $ships
     * @param $user
     */
    private function repairAction(array $ships, $user) {
        $repair = true;
        while ($repair) {
            $shipDone = 0;
            foreach ($ships as $ship) {
                if ($ship->getWood() >= $ship->getLevel() && $ship->getCopper() >= $ship->getLevel() &&
                    $user->getGold() >= 20 && $ship->getStructure() < 100) {
                    $ship->setWood($ship->getWood() - $ship->getLevel());
                    $ship->setCopper($ship->getCopper() - $ship->getLevel());
                    $ship->setStructure($ship->getStructure() + 1);
                    $user->setGold($user->getGold() - 20);
                }
                else {
                    $shipDone++;
                }
            }
            if ($shipDone == count($ships)) {
                $repair = false;
            }
        }

        foreach ($ships as $ship) {
            $this->em->persist($ship);
        }
        $this->em->persist($user);
        $this->em->flush();

        $this->setSuccess('Les réparations ont bien été effectuées.');
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function allShipsHaveEnoughResourcesToRepair(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getWood() < $ship->getLevel() || $ship->getCopper() < $ship->getLevel()) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function allShipsHaveCarpenter(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getCarpenter() == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $ships
     * @return bool
     */
    private function needRepair(array $ships) : bool {
        foreach ($ships as $ship) {
            if ($ship->getStructure() == 100) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param Request $request
     * @param $user
     */
    public function repair(Request $request, $user) {
        // On vérifie les variables reçues par le formulaire
        if ($this->checkActionForm($request->request->all())) {
            // On vérifie si le navire appartient à l'utilisateur
            if ($this->shipsBelongsToUser($request->request->get('ship'), $user)) {
                $ships = $this->getShipsWithIDArray($request->request->get('ship'));
                // On vérifie la structure
                if ($this->needRepair($ships)) {
                    // On vérifie s'il y a au moins un carpentier sur chaque navire
                    if ($this->allShipsHaveCarpenter($ships)) {
                        // On vérifie les ressources à bord
                        if ($this->allShipsHaveEnoughResourcesToRepair($ships)) {
                            // On vérifie si l'utilisateur a assez d'or pour réparer au moins un point de structure sur chaque navire
                            if ($this->userHasEnoughGoldToAction($ships, $user)) {
                                // On peut réparer
                                $this->repairAction($ships, $user);
                            }
                            $this->setError('Vous n\'avez même pas assez d\'or pour réparer un point de structure sur chaque navire sélectionné.');
                        }
                        else {
                            $this->setError('Au moins un des navires sélectionnés ne possède pas assez de bois et de cuir pour être réparé.');
                        }
                    }
                    else {
                        $this->setError('Chaque navire sélectionné doit posséder au moins un charpentier à bord.');
                    }
                }
                else {
                    $this->setError('Au moins un des navires sélectionnés ne nécessite aucune réparation.');
                }
            }
            else {
                $this->setError('Ces navires ne vous appartiennent pas..');
            }
        }
        else {
            $this->setError('Aucun navire n\'a été sélectionné.');
        }
    }

    /**
     * @return array
     */
    private function getTransferExpectations() : array {
        return [
            'source', 'target', 'seaman', 'explorer', 'gunner', 'cook', 'carpenter', 'surgeon', 'gun', 'food', 'wood',
            'arsenal', 'alcohol', 'copper', 'gemstone', 'stuff', 'manuscript', 'jewellery', 'fur', 'spice'
        ];
    }

    /**
     * @param Request $request
     * @param Ship $source
     * @param Ship $target
     */
    public function transferAction(Request $request, Ship $source, Ship $target) {
        $data = $request->request->all();
        $expectations = $this->getTransferExpectations();
        foreach ($data as $key => $value) {
            if (in_array($key, $expectations) && $key != 'source' && $key != 'target') {
                $set = 'set' . strtoupper($key[0]) . substr($key, 1);
                $get = 'get' . strtoupper($key[0]) . substr($key, 1);
                $source->$set($source->$get() - $request->request->get($key));
                $target->$set($target->$get() + $request->request->get($key));
            }
        }
        $this->em->persist($source);
        $this->em->persist($target);
        $this->em->flush();

        $this->setSuccess('Le transfert a bien été fait.');
    }

    /**
     * @param Request $request
     * @param Ship $source
     * @param Ship $target
     * @return bool
     */
    private function checktransferMerchandises(Request $request, Ship $source, Ship $target) : bool {
        $gun = $request->request->get('gun');
        $food = $request->request->get('food');
        $wood = $request->request->get('wood');
        $arsenal = $request->request->get('arsenal');
        $alcohol = $request->request->get('alcohol');
        $copper = $request->request->get('copper');
        $gemstone = $request->request->get('gemstone');
        $stuff = $request->request->get('stuff');
        $manuscript = $request->request->get('manuscript');
        $jewellery = $request->request->get('jewellery');
        $fur = $request->request->get('fur');
        $spice = $request->request->get('spice');

        // On vérifie l'équipage à bord du navire source
        if ($source->getGun() >= $gun && $source->getFood() >= $food && $source->getWood() >= $wood &&
            $source->getArsenal() >= $arsenal && $source->getAlcohol() >= $alcohol && $source->getCopper() >= $copper &&
            $source->getGemstone() >= $gemstone && $source->getStuff() >= $stuff && $source->getManuscript() >= $manuscript &&
            $source->getJewellery() >= $jewellery && $source->getFur() >= $fur && $source->getSpice() >= $spice) {
            // On vérifie la place dans le navire cible
            if ($this->getMarchandisesFreeSpace($target) >=
                ($gun + $food + $wood + $arsenal + $alcohol + $copper + $gemstone + $stuff + $manuscript + $jewellery + $fur + $spice)) {
                return true;
            }
            else {
                $this->setError('Il n\'y a pas assez de place dans le navire cible pour autant de marchandises.');
            }
        }
        else {
            $this->setError('Le navire source ne possède pas autant de marchandises à bord.');
        }
        return false;
    }

    /**
     * @param Request $request
     * @param Ship $source
     * @param Ship $target
     * @return bool
     */
    private function checktransferCrew(Request $request, Ship $source, Ship $target) : bool {
        $seaman = $request->request->get('seaman');
        $explorer = $request->request->get('explorer');
        $gunner = $request->request->get('gunner');
        $cook = $request->request->get('cook');
        $carpenter = $request->request->get('carpenter');
        $surgeon = $request->request->get('surgeon');

        // On vérifie l'équipage à bord du navire source
        if ($source->getSeaman() >= $seaman && $source->getExplorer() >= $explorer && $source->getGunner() >= $gunner &&
            $source->getCook() >= $cook && $source->getCarpenter() >= $carpenter && $source->getSurgeon() >= $surgeon) {
            // On vérifie la place dans le navire cible
            if ($this->getUnitFreeSpace('seaman', $target) >= $seaman && $this->getUnitFreeSpace('explorer', $target) >= $explorer &&
                $this->getUnitFreeSpace('gunner', $target) >= $gunner && $this->getUnitFreeSpace('cook', $target) >= $cook &&
                $this->getUnitFreeSpace('carpenter', $target) >= $carpenter && $this->getUnitFreeSpace('surgeon', $target) >= $surgeon) {
                return true;
            }
            else {
                $this->setError('Il n\'y a pas assez de place dans le navire cible pour autant d\'équipage.');
            }
        }
        else {
            $this->setError('Le navire source ne possède pas autant d\'équipage à bord.');
        }
        return false;
    }

    /**
     * @param Ship $source
     * @param Ship $target
     * @return bool
     */
    private function checkTransferShipPositions(Ship $source, Ship $target) : bool {
        if ($source->getPosition()->getId() == $target->getPosition()->getId()) {
            return true;
        }
        return false;
    }

    /**
     * @param Request $request
     * @param $user
     * @return bool
     */
    private function checkTransferShipsOwner(Request $request, $user) : bool {
        /** @var Ship $source */
        $source = $this->em->getRepository(Ship::class)->find($request->request->get('source'));
        /** @var Ship $target */
        $target = $this->em->getRepository(Ship::class)->find($request->request->get('target'));

        if ($source && $target && $source->getOwner() == $user && $target->getOwner() == $user) {
            return true;
        }
        return false;
    }

    /**
     * @param array $variables
     * @return bool
     */
    private function checkTransferForm(array $variables) : bool {
        $expectations = $this->getTransferExpectations();

        foreach ($expectations as $elem) {
            // On vérifie que tous les champs existent et sont des entiers positifs
            if (!array_key_exists($elem, $variables) || !ctype_digit($variables[$elem])) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param Request $request
     * @param $user
     */
    public function transfer(Request $request, $user) {
        // On vérifie les variables reçues par le formulaire
        if ($this->checkTransferForm($request->request->all())) {
            // On vérifie que les navires appartiennent bien à l'utilisateur
            if ($this->checkTransferShipsOwner($request, $user)) {
                /** @var Ship $source */
                $source = $this->em->getRepository(Ship::class)->find($request->request->get('source'));
                /** @var Ship $target */
                $target = $this->em->getRepository(Ship::class)->find($request->request->get('target'));
                // On vérifie que les navires sont bien différents
                if ($source->getId() != $target->getId()) {
                    // On vérifie que les navires sont au même endroit
                    if ($this->checkTransferShipPositions($source, $target)) {
                        // On vérifie qu'il y a assez d'équipage à la source et que la cible peut accueillir assez d'équipage
                        if ($this->checktransferCrew($request, $source, $target)) {
                            // On vérifie qu'il y a assez de marchandises à la source et que la cible peut accueillir assez de marchandises
                            if ($this->checktransferMerchandises($request, $source, $target)) {
                                // On transfère
                                $this->transferAction($request, $source, $target);
                            }
                        }
                    }
                    else {
                        $this->setError('Les navires ne sont pas sur le même territoire.');
                    }
                }
                else {
                    $this->setError('Il faut choisir deux navires différents pour le transfert de marchandises.');
                }
            }
            else {
                $this->setError('Ces navires ne vous appartiennent pas.');
            }
        }
        else {
            $this->setError('Le formulaire est erroné.');
        }
    }

    /**
     * @param $user
     * @param Ship $ship
     * @param string $name
     */
    public function rename($user, Ship $ship, string $name) {
        if ($ship->getOwner() == $user) {
            if (strlen($name) >= 3 && strlen($name) <= 20 && !preg_match('/[^A-Za-z0-9]/', $name)) {
                $ship->setName($name);
                $this->em->persist($ship);
                $this->em->flush();
                $this->setSuccess('Votre navire a bien été renommé');
            }
            else {
                $this->setError('Le nom de navire doit comporter entre 3 et 20 caractères et contenir uniquement des caractères alphanumériques.');
            }
        }
        else {
            $this->setError('Vous ne possédez pas ce navire.');
        }
    }

    /**
     * @param $ships
     * @return array
     */
    public function getDifferentExplorerPositions($ships) : array {
        $positions = [];
        foreach ($ships as $ship) {
            if (!$ship instanceof Den) {
                if ($ship->getExplorer() > 0 && !in_array($ship->getPosition(), $positions)) {
                    $positions[] = $ship->getPosition();
                }
            }
        }
        return $positions;
    }

    /**
     * @param Ship $ship
     * @param int $quantity
     */
    public function updateMoral(Ship $ship, int $quantity) {
        if (($ship->getMoral() + $quantity) <= 0) {
            $ship->setMoral(0);
        }
        else if (($ship->getMoral() + $quantity) >= 100) {
            $ship->setMoral(100);
        }
        else {
            $ship->setMoral($ship->getMoral() + $quantity);
        }
    }

    /**
     * @return int
     */
    public function getGunPrice() : int {
        return 100;
    }

    /**
     * @return int
     */
    public function getArsenalPrice() : int {
        return 100;
    }

    /**
     * @return int
     */
    public function getFoodPrice() : int {
        return 1;
    }

    /**
     * @return int
     */
    public function getAlcoholPrice() : int {
        return 1;
    }

    /**
     * @return int
     */
    public function getWoodPrice() : int {
        return 50;
    }

    /**
     * @return int
     */
    public function getCopperPrice() : int {
        return 50;
    }

    /**
     * @return int
     */
    public function getGemstonePrice() : int {
        return 200;
    }

    /**
     * @return int
     */
    public function getJewelleryPrice() : int {
        return 200;
    }

    /**
     * @return int
     */
    public function getStuffPrice() : int {
        return 10;
    }

    /**
     * @return int
     */
    public function getFurPrice() : int {
        return 10;
    }

    /**
     * @return int
     */
    public function getManuscriptPrice() : int {
        return 10;
    }

    /**
     * @return int
     */
    public function getSpicePrice() : int {
        return 10;
    }

    /**
     * @param $key
     * @param $quantity
     * @return int
     */
    public function getItemPrice($key, $quantity) : int {
        $getItemPrice = 'get' . strtoupper($key[0]) . substr($key, 1) . 'Price';
        return $quantity * $this->$getItemPrice();
    }

    /**
     * @param Ship $ship
     * @param int $quantity
     */
    public function gainXP(Ship $ship, int $quantity) {
        $ship->setXp($ship->getXp() + $quantity);
        if ($this->getMaxXP($ship) <= $ship->getXp()) {
            $ship->setLevel($ship->getLevel() + 1);
        }
    }

    /**
     * @param Ship $ship
     * @return int
     */
    public function getMaxMerchandises(Ship $ship) : int {
        if ($ship instanceof Den) {
            return $ship->getLevel() * 2000;
        }
        return $ship->getLevel() * 1000;
    }

    /**
     * @param Ship $ship
     * @return int
     */
    public function getMarchandises(Ship $ship) : int {
        return $ship->getGun() + $ship->getArsenal() + $ship->getFood() + $ship->getAlcohol() +
            $ship->getWood() + $ship->getCopper() + $ship->getGemstone() + $ship->getJewellery() +
            $ship->getStuff() + $ship->getFur() + $ship->getManuscript() + $ship->getSpice();
    }

    /**
     * @param Ship $ship
     * @return int
     */
    public function getMarchandisesFreeSpace(Ship $ship) : int {
        return $this->getMaxMerchandises($ship) - $this->getMarchandises($ship);
    }

    /**
     * @param Ship $ship
     * @return int
     */
    public function getMaxXP(Ship $ship) : int {
        return 50 * pow($ship->getLevel(), 2);
    }

    /**
     * @param int $fleet_position
     * @param $ships
     * @return array
     */
    public function getLandFleet(int $fleet_position, $ships) : array {
        $land_fleet = [];
        foreach ($ships as $ship) {
            if ($ship->getPosition()->getId() == $fleet_position &&  !($ship instanceof Den)) {
                array_push($land_fleet, $ship);
            }
        }
        return $land_fleet;
    }

    /**
     * @param $ships
     * @param int $land_id
     * @return array
     */
    public function getUserShipsByLand($ships, int $land_id) : array {
        $data = [];
        if ($land = $this->em->getRepository(Lands::class)->find($land_id)) {
            foreach ($ships as $ship) {
                if ($ship->getPosition()->getId() == $land->getId()) {
                    $data[] = $ship->getPosition();
                }
            }
        }
        return $data;
    }

    /**
     * @param $ships
     * @return array
     */
    public function getUserShipsLands($ships) : array {
        $lands = [];
        foreach ($ships as $ship) {
            if (!in_array($ship->getPosition(), $lands) && !($ship instanceof Den)) {
                $lands[] = $ship->getPosition();
            }
        }
        return $lands;
    }

    /**
     * @param $ships
     * @return array
     */
    public function getActualAndMaxCrew($ships) : array {
        $data = [];

        foreach ($ships as $ship) {
            $data[$ship->getId()] = [
                'seaman' => [
                    'actual' => $ship->getSeaman(),
                    'max' => $this->getUnitMaxCrew('seaman', $ship->getLevel())
                ],
                'explorer' => [
                    'actual' => $ship->getExplorer(),
                    'max' => $this->getUnitMaxCrew('explorer', $ship->getLevel())
                ],
                'gunner' => [
                    'actual' => $ship->getGunner(),
                    'max' => $this->getUnitMaxCrew('gunner', $ship->getLevel())
                ],
                'cook' => [
                    'actual' => $ship->getCook(),
                    'max' => $this->getUnitMaxCrew('cook', $ship->getLevel())
                ],
                'carpenter' => [
                    'actual' => $ship->getCarpenter(),
                    'max' => $this->getUnitMaxCrew('carpenter', $ship->getLevel())
                ],
                'surgeon' => [
                    'actual' => $ship->getSurgeon(),
                    'max' => $this->getUnitMaxCrew('surgeon', $ship->getLevel())
                ]
            ];
        }
        return $data;
    }

    /**
     * @param string $recruit
     * @param Ship $ship
     * @return int
     */
    public function getUnitFreeSpace(string $recruit, Ship $ship) : int {
        switch ($recruit) {
            case 'seaman':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getSeaman();
                break;
            case 'explorer':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getExplorer();
                break;
            case 'gunner':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getGunner();
                break;
            case 'cook':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getCook();
                break;
            case 'carpenter':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getCarpenter();
                break;
            case 'surgeon':
                return $this->getUnitMaxCrew($recruit, $ship->getLevel()) - $ship->getSurgeon();
                break;
        }
        return 0;
    }

    /**
     * @param string $recruit
     * @param int $level
     * @return int
     */
    public function getUnitMaxCrew(string $recruit, int $level) : int {
        switch ($recruit) {
            case 'seaman':
                return $level * 10;
                break;
            case 'explorer':
                return $level * 2;
                break;
            case 'gunner':
                return $level * 1;
                break;
            case 'cook':
                return ceil($level / 10);
                break;
            case 'carpenter':
                return ceil($level / 10);
                break;
            case 'surgeon':
                return ceil($level / 50);
                break;
        }

        return 0;
    }

}