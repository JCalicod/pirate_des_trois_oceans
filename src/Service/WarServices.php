<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 25/05/2020
 * Time: 22:06
 */

namespace App\Service;


use App\Entity\AllianceWar;
use App\Entity\Den;
use App\Entity\Lands;
use App\Entity\Ship;
use App\Entity\User;
use App\Entity\War;
use App\Repository\WarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class WarServices {
    private $em;
    private $error;
    private $success;
    private $user;
    private $shipServices;
    private $userServices;
    private $warRepository;

    private $resources_ratio;
    private $seaman_ratio;
    private $gunner_ratio;

    private $destruction_ratio;
    private $flight_ratio;
    private $crew_lost_ratio;

    private $position;
    private $attacker;
    private $defender;
    private $victory;
    private $theft;
    private $capture;
    private $npc;

    public function __construct(EntityManagerInterface $em, ShipServices $shipServices, UserServices $userServices, WarRepository $warRepository) {
        $this->em = $em;
        $this->error = null;
        $this->success = null;
        $this->user = null;
        $this->shipServices = $shipServices;
        $this->userServices = $userServices;
        $this->warRepository = $warRepository;

        $this->resources_ratio = 1;
        $this->seaman_ratio = 1;
        $this->gunner_ratio = 1;

        $this->destruction_ratio = 1;
        $this->flight_ratio = 1;
        $this->crew_lost_ratio = 1;

        $this->position = null;
        $this->attacker = [];
        $this->defender = [];
        $this->victory = false;
        $this->theft = [];
        $this->capture = false;
        $this->npc = false;
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
    public function getAttacker() : array {
        return $this->attacker;
    }

    /**
     * @return array
     */
    public function getDefender() : array {
        return $this->defender;
    }

    /**
     * @return User|null
     */
    public function getDefenderUser() : ?User {
        return $this->defender['user'];
    }

    /**
     * @return array
     */
    public function getTheft() : array {
        return $this->theft;
    }

    /**
     * @return bool
     */
    public function getVictory() : bool {
        return $this->victory;
    }

    /**
     * @return bool
     */
    public function getNPC() : bool {
        return $this->npc;
    }

    /**
     * @return int
     */
    private function getNbSunk() : int {
        return count($this->attacker['sunk']) + count($this->defender['sunk']);
    }

    /**
     * @return int|null
     * @throws \Exception
     */
    private function getPoints(): ?int {
        // Si on attaque un joueur et qu'on possède une alliance
        if (!$this->npc && $this->user->getAlliance()) {
            return random_int(90, 110);
        }
        return null;
    }


    /**
     * @throws \Exception
     */
    private function addWarStat() : void {
        ($this->capture) ? ($capture = 1) : ($capture = 0);
        $track = new War();
        $track->setPosition($this->position);
        $track->setSunk($this->getNbSunk());
        $track->setCaptured($capture);
        $track->setAttacker($this->user);
        if ($this->victory) {
            $track->setWin(true);
        }
        if ($this->defender['user']) {
            $track->setDefender($this->defender['user']);
        }
        $this->em->persist($track);
        if (($this->user->getAlliance() || ($this->defender['user'] && $this->defender['user']->getAlliance())) && $this->defender['user']) {
            $allianceTrack = new AllianceWar();
            $allianceTrack->setPoints($this->getPoints());
            $allianceTrack->setWar($track);
            $this->em->persist($allianceTrack);
        }
    }

    /**
     * @param Ship $ship
     * @return int
     */
    private function getShipCrewPower(Ship $ship) : int {
        $seaman_power = 0;
        $gunner_power = 0;
        $seaman = $ship->getSeaman();
        $gunner = $ship->getGunner();
        $arsenal = $ship->getArsenal();
        $gun = $ship->getGun();

        // S'il n'y a pas assez de canon pour chaque canonnier
        if ($gun < $gunner) {
            $gunner_power += ($gun * 50) + (($gunner - $gun) * 1);
        }
        // S'il y a un canon pour chaque canonnier
        else {
            $gunner_power += $gunner * 50;
        }
        $gunner_power *= $this->gunner_ratio;

        // S'il n'y a pas assez d'épées pour chaque matelot
        if ($arsenal < $seaman) {
            $seaman_power += ($arsenal * 3) + (($seaman - $arsenal) * 1);
        }
        // S'il y a une épée pour chaque matelot
        else {
            $seaman_power += $seaman * 3;
        }
        $seaman_power *= $this->seaman_ratio;

        return $gunner_power + $seaman_power;
    }

    /**
     * @param $ships
     * @return int
     */
    private function getFleetCrewPower($ships) : int {
        $power = 0;
        $moral_sum = 0;

        foreach ($ships as $ship) {
            $power += $this->getShipCrewPower($ship);
            $moral_sum += $ship->getMoral();
        }
        $moral_avg = ($moral_sum / count($ships)) / 100;
        $power *= $moral_avg;
        return round($power);
    }

    /**
     * @param $ships
     * @param Lands $land
     * @param bool $attacker
     * @return array
     */
    private function getFleetAtLand($ships, Lands $land, $attacker = true) : array {
        $fleet = [];

        foreach($ships as $ship) {
            if ($ship->getPosition()->getId() == $land->getId()) {
                if (($attacker && !($ship instanceof Den)) || !$attacker) {
                    $fleet[] = $ship;
                }
            }
        }
        return $fleet;
    }

    /**
     * @param Request $request
     * @return bool
     */
    private function checkFormInputsExistence(Request $request) : bool {
        if ($request->request->get('orders') && $request->request->get('instructions') &&
            $request->request->get('target') && $request->request->get('position') &&
            $request->request->get('sinner') && $request->request->get('trader') &&
            $request->request->get('warrior')) {
            return true;
        }
        return false;
    }

    /**
     * @param Request $request
     * @return array
     */
    private function getFormData(Request $request) : array {
        return [
            'orders' => $request->request->get('orders'),
            'instructions' => $request->request->get('instructions'),
            'target' => $request->request->get('target'),
            'position' => $request->request->get('position'),
            'sinner' => $request->request->get('sinner'),
            'trader' => $request->request->get('trader'),
            'warrior' => $request->request->get('warrior')
        ];
    }

    /**
     * @param array $data
     */
    private function setOrdersInstructions(array $data) {
        // Orders ratio
        if ($data['orders'] == 'normal') {
            $this->resources_ratio = 1;
            $this->seaman_ratio = 1;
            $this->gunner_ratio = 1;
        }
        else if ($data['orders'] == 'abordage') {
            $this->resources_ratio = 1;
            $this->seaman_ratio = 1.3;
            $this->gunner_ratio = 0.7;
        }
        else {
            $this->resources_ratio = 1;
            $this->seaman_ratio = 0.7;
            $this->gunner_ratio = 1.3;
        }

        // Instructions ratio
        if ($data['instructions'] == 'destruction') {
            $this->destruction_ratio = 1.3;
            $this->flight_ratio = 1;
            $this->crew_lost_ratio = 1;
        }
        else if ($data['instructions'] == 'immobilization') {
            $this->destruction_ratio = 1;
            $this->flight_ratio = 1.3;
            $this->crew_lost_ratio = 0.7;
        }
        else {
            $this->destruction_ratio = 0.7;
            $this->flight_ratio = 1.3;
            $this->crew_lost_ratio = 1.3;
        }
    }

    /**
     * @param array $data
     * @return bool
     */
    private function checkOrdersAndRandom(array $data) : bool {
        if (in_array($data['orders'], ['normal', 'abordage', 'guns']) &&
            in_array($data['instructions'], ['destruction', 'immobilization', 'massacre']) &&
            ctype_digit($data['sinner']) && ctype_digit($data['trader']) && ctype_digit($data['warrior']) &&
            $data['sinner'] >= 1 && $data['sinner'] <= 3 && $data['trader'] >= 1 && $data['trader'] <= 3 &&
            $data['warrior'] >= 1 && $data['warrior'] <= 3) {
            $this->setOrdersInstructions($data);
            return true;
        }
        return false;
    }

    /**
     * @param array $data
     * @param $user
     * @return bool
     */
    private function checkWarPosition(array $data, $user) : bool {
        if ($land = $this->em->getRepository(Lands::class)->find($data['position'])) {
            foreach($user->getShips() as $ship) {
                if ($ship->getPosition()->getId() == $land->getId() && !($ship instanceof Den)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param bool $attacker
     * @return int
     */
    private function calculateStructureLost($attacker = true) : int {
        if ($attacker) {
            $lost = $this->defender['power'] / count($this->attacker['save']);
            $lost = round($lost / ($this->getAverageFleetLevel($this->defender['save']) * 5));
        }
        else {
            $lost = $this->attacker['power'] / count($this->defender['save']);
            $lost = round($lost / ($this->getAverageFleetLevel($this->attacker['save']) * 5));
        }
        ($lost > 60) ? ($lost = 60) : ($lost = $lost);
        return $lost;
    }

    /**
     * @param array $fleet
     * @return int
     */
    private function getAverageFleetLevel(array $fleet) : int {
        $sum = 0;
        foreach ($fleet as $ship) {
            $sum += $ship->getLevel();
        }
        return round($sum / count($fleet));
    }

    /**
     * @param string $npc
     * @return array
     * @throws \Exception
     */
    private function getNPCData(string $npc) : array {
        if ($npc == 'sinner') {
            return [
                'ratio' => 0.2,
                'min_gold' => 60,
                'max_gold' => 120,
                'names' => ['Requin', 'Marin', 'Appat', 'Canne'],
                'resources' => [
                    'food' => ['min' => 5, 'max' => 10],
                    'alcohol' => ['min' => 5, 'max' => 10]
                ]
            ];
        }
        else if ($npc == 'trader') {
            return [
                'ratio' => 0.5,
                'min_gold' => 240,
                'max_gold' => 480,
                'names' => ['Tresor', 'Saphir', 'Emeraude', 'Topaze'],
                'resources' => [
                    'gemstone' => ['min' => 5, 'max' => 10],
                    'jewellery' => ['min' => 5, 'max' => 10],
                    'stuff' => ['min' => 5, 'max' => 10],
                    'fur' => ['min' => 5, 'max' => 10],
                    'manuscript' => ['min' => 5, 'max' => 10],
                    'spice' => ['min' => 5, 'max' => 10]
                ]
            ];
        }
        else {
            return [
                'ratio' => 0.7,
                'min_gold' => 120,
                'max_gold' => 240,
                'names' => ['Intrepide', 'Vaillant', 'Robuste', 'Forge'],
                'resources' => [
                    'arsenal' => ['min' => 5, 'max' => 10],
                    'gun' => ['min' => 5, 'max' => 10]
                ]
            ];
        }
    }

    /**
     * @param string $type
     * @param int $nb
     * @param int $level
     * @throws \Exception
     */
    private function getNPCStats(string $type, int $nb, int $level) : void {
        $opponent = [
            'user' => null,
            'type' => $type,
            'name' => '',
            'fleet' => []
        ];
        if ($type == 'sinner') {
            $opponent['name'] = 'Village de Pêcheurs';
        }
        else if ($type == 'trader') {
            $opponent['name'] = 'Flotte Marchande';
        }
        else {
            $opponent['name'] = 'Navires de Guerre';
        }
        $data = $this->getNPCData($type);
        $opponent['gold'] = random_int($data['min_gold'], $data['max_gold']);

        for ($i = 0; $i < $nb; $i++) {
            $index = random_int(0, count($data['names']) - 1);
            $ship = new Ship();
            $ship->setName($data['names'][$index]);
            $ship->setAvatar(random_int(1, 3));
            $ship->setLevel($level);
            $ship->setStructure(100 - random_int(20, 60));
            $ship->setSeaman(intval(ceil($data['ratio'] * $level * 10)));
            $ship->setGunner(intval(ceil($data['ratio'] * $level)));
            $ship->setArsenal($ship->getSeaman());
            $ship->setGun($ship->getGunner());
            $ship->setPosition($this->position);

            // Ressources
            foreach ($data['resources'] as $key => $value) {
                $setter = 'set' . strtoupper($key[0]) . substr($key, 1);
                $ship->$setter(random_int($data['resources'][$key]['min'], $data['resources'][$key]['max']));
            }
            array_splice($data['names'], $index, 1);
            $opponent['fleet'][] = $ship;
        }
        $this->defender = $opponent;
    }

    /**
     * @param Ship $captured
     */
    private function captureShip(Ship $captured) {
        // On calcule à quel endroit on positionne le navire
        $last_ship = $this->em->getRepository(Ship::class)->findOneBy(['owner' => $this->user], ['display_order' => 'DESC']);
        $order = $last_ship->getDisplayOrder() + 1;
        $captured->setDisplayOrder($order);
        $captured->setOwner($this->user);
        $captured->setLevel(1);
        $captured->setXp(0);
        $this->user->addShip($captured);
        $this->em->persist($captured);

        $this->capture = true;
    }

    private function saveFleets() {
        $this->attacker['save'] = [];
        foreach ($this->attacker['fleet'] as $ship) {
            $this->attacker['save'][] = clone $ship;
        }

        $this->defender['save'] = [];
        foreach ($this->defender['fleet'] as $ship) {
            $this->defender['save'][] = clone $ship;
        }

    }

    /**
     * @throws \Exception
     */
    private function NPCLost() : void {
        $opponent_structure_lost = $this->calculateStructureLost(false);
        $opponent_structure_lost = round($opponent_structure_lost * $this->destruction_ratio);
        foreach ($this->defender['fleet'] as $ship) {
            /** @var Ship $ship */
            // Si le navire adverse n'est pas coulé
            if ($ship->getStructure() >= $opponent_structure_lost) {
                $ship->setStructure($ship->getStructure() - $opponent_structure_lost);
                // Capture ou non du navire
                if (count($this->user->getShips()) < 11 && !$this->capture && $this->victory) {
                    // Navire potentiellement capturable
                    $flight_chance = random_int(2, 10);
                    $flight_chance = round($flight_chance * $this->flight_ratio);
                    // Navire capturé
                    if ($flight_chance > 8) {
                        $this->captureShip($ship);
                        $this->defender['captured'] = $ship->getId();
                    }
                }
                $ship->setSeaman($ship->getSeaman() - round($ship->getSeaman() * $opponent_structure_lost / 100 * $this->crew_lost_ratio));
                $ship->setGunner($ship->getGunner() - round($ship->getGunner() * $opponent_structure_lost / 100 * $this->crew_lost_ratio));
            }
            // Si le navire adverse est coulé
            else {
                $ship->setStructure(0);
                $ship->setSeaman(0);
                $ship->setGunner(0);
            }
        }
    }

    /**
     * @param Ship $ship
     * @param array $fleet
     * @throws \Exception
     */
    private function sunkShip(Ship $ship, array $fleet) {
        $owner = null;
        foreach($fleet as $ship) {
            /** @var Ship $ship */
            $owner = $ship->getOwner();
            break;
        }
        $order = $ship->getDisplayOrder();
        // Si ce n'est pas le repaire, on change les ordres
        if (!$ship instanceof Den) {
            if (count($fleet) > 2) {
                for ($i = 0; $i < count($fleet); $i++) {
                    if ($fleet[$i]->getDisplayOrder() > $order) {
                        $fleet[$i]->setDisplayOrder($fleet[$i]->getDisplayOrder() - 1);
                        $this->em->persist($fleet[$i]);
                    }
                }
            }
            else {
                $bark = new Ship();
                $bark->setName('Barque');
                $bark->setAvatar(random_int(1, 3));
                $bark->setPosition($this->position);
                $bark->setDisplayOrder(2);
                /** @var Ship $fleet[0] */
                if ($owner == $this->user) {
                    $bark->setOwner($this->user);
                    $this->user->addShip($bark);
                    $this->em->persist($bark);
                    $this->em->persist($this->user);
                }
                else if (!$this->npc) {
                    $bark->setOwner($this->defender['user']);
                    $this->defender['user']->addShip($bark);
                    $this->em->persist($bark);
                    $this->em->persist($this->defender['user']);
                }
            }
        }
        // Si c'est le repaire, on doit en recréer un
        else {
            // On crée un nouveau repaire
            $den = new Den();
            $den->setName('Repaire');
            $den->setPosition($this->position);
            $den->setDisplayOrder($order);
            /** @var Ship $fleet[0] */
            if ($owner == $this->user) {
                $den->setOwner($this->user);
                $this->user->addShip($den);
                $this->em->persist($den);
                $this->em->persist($this->user);
            }
            else if (!$this->npc) {
                $den->setOwner($this->defender['user']);
                $this->defender['user']->addShip($den);
                $this->em->persist($den);
                $this->em->persist($this->defender['user']);
            }
        }
        $this->em->remove($ship);
    }

    private function sunk() : void {
        $this->attacker['sunk'] = [];
        $this->defender['sunk'] = [];
        foreach ($this->attacker['fleet'] as $ship) {
            if ($ship->getStructure() <= 0) {
                $this->attacker['sunk'][] = $ship->getId();
                $this->sunkShip($ship, $this->attacker['fleet']);
            }
        }
        foreach ($this->defender['fleet'] as $ship) {
            if ($ship->getStructure() <= 0) {
                $this->defender['sunk'][] = $ship->getId();
                $this->sunkShip($ship, $this->defender['fleet']);
            }
        }
    }

    /**
     * @param Ship $ship
     * @param array $lost
     * @return array
     */
    private function saveCrew(Ship $ship, array $lost) : array {
        if ($ship->getSurgeon() > 0 && $lost['surgeon'] < $ship->getSurgeon()) {
            while (($key = array_rand($lost)) != 'surgeon') {
                continue;
            }
            if ($lost[$key] > 0) {
                $lost[$key] -= ($ship->getSurgeon() - $lost['surgeon']);
                if ($lost[$key] < 0) {
                    $lost[$key] = 0;
                }
            }
        }
        return $lost;
    }

    /**
     * @param int $structure_lost
     * @param bool $attacker
     * @throws \Exception
     */
    private function userCrewLost(int $structure_lost, bool $attacker = true) {
        if ($attacker) {
            $nb = count($this->attacker['fleet']);
            foreach ($this->attacker['fleet'] as $ship) {
                /** @var Ship $ship */
                $lost = [
                    'seaman' => round(min(round($this->defender['power'] / 10 / 10), $ship->getSeaman())/$nb),
                    'explorer' => round(min(round($this->defender['power'] / 10 / 30), $ship->getExplorer())/$nb),
                    'gunner' => round(min(round($this->defender['power'] / 10 / 50), $ship->getGunner())/$nb),
                    'cook' => round(min(round($this->defender['power'] / 10 / 100), $ship->getCook())/$nb),
                    'carpenter' => round(min(round($this->defender['power'] / 10 / 100), $ship->getCarpenter())/$nb),
                    'surgeon' => round(min(round($this->defender['power'] / 10 / 300), $ship->getSurgeon())/$nb)
                ];
                $lost = $this->saveCrew($ship, $lost);

                /** @var Ship $ship */
                if ($structure_lost >= $ship->getStructure()) {
                    $ship->setStructure(0);
                }
                else {
                    $ship->setStructure($ship->getStructure() - $structure_lost);
                }
                $ship->setSeaman($ship->getSeaman() - $lost['seaman']);
                $ship->setExplorer($ship->getExplorer() - $lost['explorer']);
                $ship->setGunner($ship->getGunner() - $lost['gunner']);
                $ship->setCook($ship->getCook() - $lost['cook']);
                $ship->setCarpenter($ship->getCarpenter() - $lost['carpenter']);
                $ship->setSurgeon($ship->getSurgeon() - $lost['surgeon']);

                $this->attacker['lost'][] = [
                    'structure' => $structure_lost,
                    'seaman' => $lost['seaman'],
                    'explorer' => $lost['explorer'],
                    'gunner' => $lost['gunner'],
                    'cook' => $lost['cook'],
                    'carpenter' => $lost['carpenter'],
                    'surgeon' => $lost['surgeon']
                ];

                $this->shipServices->updateMoral($ship, -3);

                $this->em->persist($ship);
            }
        }
        else {
            $nb = count($this->defender['fleet']);
            foreach ($this->defender['fleet'] as $ship) {
                /** @var Ship $ship */
                $lost = [
                    'seaman' => round(min(round($this->attacker['power'] / 10 / 10), $ship->getSeaman())/$nb),
                    'explorer' => round(min(round($this->attacker['power'] / 10 / 30), $ship->getExplorer())/$nb),
                    'gunner' => round(min(round($this->attacker['power'] / 10 / 50), $ship->getGunner())/$nb),
                    'cook' => round(min(round($this->attacker['power'] / 10 / 100), $ship->getCook())/$nb),
                    'carpenter' => round(min(round($this->attacker['power'] / 10 / 100), $ship->getCarpenter())/$nb),
                    'surgeon' => round(min(round($this->attacker['power'] / 10 / 300), $ship->getSurgeon())/$nb)
                ];
                $lost = $this->saveCrew($ship, $lost);

                /** @var Ship $ship */
                if ($structure_lost >= $ship->getStructure()) {
                    $ship->setStructure(0);
                }
                else {
                    $ship->setStructure($ship->getStructure() - $structure_lost);
                }
                $ship->setSeaman($ship->getSeaman() - $lost['seaman']);
                $ship->setExplorer($ship->getExplorer() - $lost['explorer']);
                $ship->setGunner($ship->getGunner() - $lost['gunner']);
                $ship->setCook($ship->getCook() - $lost['cook']);
                $ship->setCarpenter($ship->getCarpenter() - $lost['carpenter']);
                $ship->setSurgeon($ship->getSurgeon() - $lost['surgeon']);

                $this->defender['lost'][] = [
                    'structure' => $structure_lost,
                    'seaman' => $lost['seaman'],
                    'explorer' => $lost['explorer'],
                    'gunner' => $lost['gunner'],
                    'cook' => $lost['cook'],
                    'carpenter' => $lost['carpenter'],
                    'surgeon' => $lost['surgeon']
                ];

                $this->shipServices->updateMoral($ship, -3);

                $this->em->persist($ship);
            }
        }
    }

    /**
     * @param bool $attacker
     * @throws \Exception
     */
    private function userLost($attacker = true) {
        // On calcule la structure perdue par l'utilisateur
        $structure_lost = $this->calculateStructureLost($attacker);
        $this->userCrewLost($structure_lost, $attacker);
    }


    /**
     * @return array
     */
    private function getResourceNames() : array {
        return [
            'gun', 'arsenal', 'food', 'alcohol', 'wood', 'copper',
            'gemstone', 'jewellery', 'stuff', 'fur', 'manuscript', 'spice'
        ];
    }

    /**
     * @param bool $npc
     */
    private function resourcesTheft(bool $npc = false) : void {
        // On boucle sur les navires ennemis pour calculer les ressources pillées
        foreach ($this->defender['fleet'] as $key => $defenderShip) {
            $quantity = [];
            $total_resource = [];
            $total = 0;

            foreach ($this->getResourceNames() as $name) {
                // Si on attaque un navire PNJ ou si on attaque un navire qui n'est pas un repaire
                if ($npc || (!$npc && !($defenderShip instanceof Den))) {
                    if (!array_key_exists($name, $total_resource)) {
                        $total_resource[$name] = 0;
                    }
                    $getter = 'get' . strtoupper($name[0]) . substr($name, 1);
                    $setter = 'set' . strtoupper($name[0]) . substr($name, 1);
                    // Le navire a perdu 1 dixième de chanque ressource
                    $quantity[$key][$name] = round($defenderShip->$getter() / 10);
                    // Perte des ressources
                    $defenderShip->$setter($defenderShip->$getter() - $quantity[$key][$name]);
                    $total_resource[$name] += $quantity[$key][$name];
                    $total += $quantity[$key][$name];

                    if (!$npc) {
                        $this->em->persist($defenderShip);
                    }
                }
            }
        }

        // On boucle sur les navires de l'attaquant pour voir si on peut y placer les ressources volées
        foreach ($this->attacker['fleet'] as $key => $attackerShip) {
            foreach ($this->getResourceNames() as $name) {
                $free_space = $this->shipServices->getMarchandisesFreeSpace($attackerShip);
                $getter = 'get' . strtoupper($name[0]) . substr($name, 1);
                $setter = 'set' . strtoupper($name[0]) . substr($name, 1);
                // Si le navire peut récolter toutes ces ressources
                if ($free_space >= $total_resource[$name]) {
                    $attackerShip->$setter($attackerShip->$getter() + $total_resource[$name]);
                    $total_resource[$name] = 0;
                }
                else {
                    // Sinon, s'il y a au moins un peu de place, on remplit ce qu'on peut
                    if ($free_space > 0) {
                        $attackerShip->$setter($attackerShip->$getter() + $free_space);
                        $total_resource[$name] -= $free_space;
                    }
                }
                $this->em->persist($attackerShip);
            }
        }
        
        // NPC
        if (array_key_exists('gold', $this->defender)) {
            $gold = $this->defender['gold'];
        }
        // Utilisateur
        else {
            $gold = round($this->defender['user']->getGold() / 10);
            $this->defender['user']->setGold($this->defender['user']->getGold() - $gold);
            $this->em->persist($this->defender['user']);
        }
        $this->user->setGold($this->user->getGold() + $gold);
        $this->theft['gold'] = $gold;
        $this->em->persist($this->user);
    }

    /**
     * @param array $fleet
     * @param int $quantity
     */
    private function gainXP(array $fleet, int $quantity) {
        for ($i = 0; $i < count($fleet); $i++) {
            $this->attacker['gain_xp'] = $quantity;
            $this->shipServices->gainXP($fleet[$i], $quantity);
            $this->em->persist($fleet[$i]);
        }
    }

    /**
     * @param User $user
     * @param Lands $position
     * @param array $data
     * @throws \Exception
     */
    private function attackNPC(User $user, Lands $position, array $data) {
        // User attacker fleet
        $this->attacker['fleet'] = $this->getFleetAtLand($user->getShips(), $position);
        $average_level = $this->getAverageFleetLevel($this->attacker['fleet']);
        $this->getNPCStats($data['target'], intval($data[$data['target']]), $average_level);

        // On compare les puissances pour désigner le vainqueur
        $this->attacker['power'] = $this->getFleetCrewPower($this->attacker['fleet']);
        $this->defender['power'] = $this->getFleetCrewPower($this->defender['fleet']);
        if ($this->attacker['power'] >= $this->defender['power']) {
            $this->victory = true;
            $user->setVictories($user->getVictories() + 1);
        }
        else {
            $user->setDefeats($user->getDefeats() + 1);
        }

        // On enregistre l'état de base des navires
        $this->saveFleets();

        // Pertes du PNJ
        $this->NPCLost();
        // Pertes de l'utilisateur
        $this->userLost();

        $xp = 2;
        if ($this->victory) {
            $this->resourcesTheft(true);
            if ($data['target'] == 'sinner') {
                $xp = 7;
            }
            if ($data['target'] == 'trader') {
                $xp = 10;
            }
            else {
                $xp = 15;
            }
        }

        $this->gainXP($this->attacker['fleet'], $xp);
        $user->setPa($user->getPa() - 1);
        $this->sunk();
        $this->addWarStat();
        $this->em->persist($this->user);
        $this->em->flush();
    }

    /**
     * @param User $attacker
     * @param User $defender
     * @param Lands $position
     * @param array $data
     * @throws \Exception
     */
    private function attackUser(User $attacker, User $defender, Lands $position, array $data) {
        $this->defender['user'] = $defender;
        // Flotte de l'attaquant et du défenseur
        $this->attacker['fleet'] = $this->getFleetAtLand($attacker->getShips(), $position);
        $this->defender['fleet'] = $this->getFleetAtLand($defender->getShips(), $position, false);

        $this->attacker['power'] = $this->getFleetCrewPower($this->attacker['fleet']);
        $this->defender['power'] = $this->getFleetCrewPower($this->defender['fleet']);
        // On compare les puissances pour désigner le vainqueur
        if ($this->attacker['power'] >= $this->defender['power']) {
            $this->victory = true;
            $attacker->setVictories($attacker->getVictories() + 1);
            $defender->setDefeats($defender->getDefeats() + 1);
        }
        else {
            $defender->setVictories($defender->getVictories() + 1);
            $attacker->setDefeats($attacker->getDefeats() + 1);
        }

        // On enregistre l'état de base des navires
        $this->saveFleets();

        // Pertes de l'attaquant
        $this->userLost();
        // Pertes du défenseur
        $this->userLost(false);

        $xp = 5;
        if ($this->victory) {
            $this->resourcesTheft();
            $xp = 15;
        }
        $this->gainXP($this->attacker['fleet'], $xp);
        $attacker->setPa($attacker->getPa() - 1);
        $this->sunk();
        $this->addWarStat();
        $this->em->persist($attacker);
        $this->em->persist($defender);
        $this->em->flush();
    }

    /**
     * @param User $user
     * @param array $data
     * @param Lands $position
     * @return bool
     * @throws \Exception
     */
    private function checkTarget(User $user, array $data, Lands $position) : bool {
        $this->user = $user;
        $this->position = $position;
        if (in_array($data['target'], ['sinner', 'trader', 'warrior'])) {
            $this->npc = true;
            $this->attackNPC($user, $position, $data);
            return true;
        }
        else {
            // Si l'adversaire est un joueur existant
            /** @var User $opponent */
            if ($opponent = $this->em->getRepository(User::class)->find($data['target'])) {
                if (!$opponent->getAlliance() || ($opponent->getAlliance() && $opponent->getAlliance() != $user->getAlliance())) {
                    $has_ship_at_land = false;
                    foreach ($opponent->getShips() as $ship) {
                        if ($ship->getPosition()->getId() == $position->getId()) {
                            $has_ship_at_land = true;
                        }
                    }
                    // Si l'adversaire a bien des navires sur ce territoire
                    if ($has_ship_at_land) {
                        // On vérifie si l'adversaire n'a pas trop ou pas assez de puissance pour une bataille
                        if ($this->checkPowerToAttack($position, $user, $opponent)) {
                            if (count($this->warRepository->lastAttacks($opponent)) < 2) {
                                $this->attackUser($user, $opponent, $position, $data);
                                return true;
                            } else {
                                $this->setError('Ce capitaine a déjà reçu trop d\'attaques pour aujourd\'hui.. Vous décidez de l\'épargner.');
                            }
                        } else {
                            $this->setError('Vous ne pouvez affronter que les flottes possédant entre la moitié et le double de la puissance de votre flotte sur ce territoire.');
                        }
                    } else {
                        $this->setError('Vous ne possédez aucun navire sur ce territoire.');
                    }
                }
                else {
                    $this->setError('Vous ne pouvez pas attaquer un capitaine appartenant à votre alliance.');
                }
            }
            else {
                $this->setError('Cet utilisateur n\'existe pas.');
            }
        }
        return false;
    }

    /**
     * @param Request $request
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function attack(Request $request, User $user) : bool {
        // On vérifie si les input existent
        if ($this->checkFormInputsExistence($request)) {
            $data = $this->getFormData($request);
            // On vérifie l'ordre et l'instruction
            if ($this->checkOrdersAndRandom($data)) {
                // On vérifie les PA
                if ($user->getPa() > 0) {
                    // On vérifie la position reçue
                    if ($this->checkWarPosition($data, $user)) {
                        /** @var Lands $position */
                        $position = $this->em->getRepository(Lands::class)->find($data['position']);
                        // On vérifie si l'adversaire a bien des navires sur ce territoire
                        return $this->checkTarget($user, $data, $position);
                    }
                    else {
                        $this->setError('Vous ne possédez pas de navire sur ce territoire.');
                    }
                }
                else {
                    $this->setError('Vous n\'avez plus assez de PA.');
                }
            }
            else {
                $this->setError('Les ordres et instructions données à votre flotte sont erronées.');
            }
        }
        else {
            $this->setError('Le formulaire est erroné.');
        }
        return false;
    }

    /**
     * @param Lands $position
     * @param $attacker
     * @param $defender
     * @return bool
     */
    private function checkPowerToAttack(Lands $position, $attacker, $defender) : bool {
        $attacker_power = $this->userServices->getPower($attacker, $position->getId(), false);
        $defender_power = $this->userServices->getPower($defender, $position->getId());
        if (($defender_power * 2) >= $attacker_power && ($attacker_power * 2) >= $defender_power) {
            return true;
        }
        return false;
    }

    /**
     * @param Lands $position
     * @param $player
     * @return array
     * @throws \Exception
     */
    public function getOponentsAtPosition(Lands $position, $player) : array {
        $oponents = [];

        $users = $this->em->getRepository(User::class)->findAll();
        foreach ($users as $user) {
            // Si on a pas plus de 2 fois la puissance adverse et pas moins de la moitié
            if ($this->checkPowerToAttack($position, $player, $user) && count($this->warRepository->lastAttacks($user)) < 2) {
                // Si le joueur n'a pas d'alliance ou s'il e a une mais qu'elle est différente de l'opposant
                if (!$player->getAlliance() || ($player->getAlliance() && $player->getAlliance() != $user->getAlliance())) {
                    $nb_ships_at_pos = 0;
                    $den = false;
                    foreach ($user->getShips() as $ship) {
                        if ($ship->getOwner()->getId() != $player->getId()) {
                            if ($ship->getPosition() == $position) {
                                $nb_ships_at_pos++;
                                if ($ship instanceof Den) {
                                    $den = true;
                                }
                            }
                        }
                    }
                    if ($nb_ships_at_pos > 0) {
                        $oponents[] = [
                            'id' => $user->getId(),
                            'username' => $user->getUsername(),
                            'alliance' => $user->getAlliance(),
                            'number' => $nb_ships_at_pos,
                            'den' => $den
                        ];
                    }
                }
            }
        }

        return $oponents;
    }
}