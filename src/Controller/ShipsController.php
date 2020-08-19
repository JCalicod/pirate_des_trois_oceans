<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 13/05/2020
 * Time: 01:34
 */

namespace App\Controller;


use App\Entity\Ship;
use App\Service\ShipServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class ShipsController
 * @package App\Controller
 * @Route("/navires")
 * @IsGranted("ROLE_USER")
 */
class ShipsController extends AbstractController {
    private $em;
    private $shipServices;
    private $user;

    public function __construct(EntityManagerInterface $em, ShipServices $shipServices, Security $security) {
        $this->em = $em;
        $this->shipServices = $shipServices;
        $this->user = $security->getUser();
    }

    /**
     * @param Request $request
     * @Route("/action", name="app_ships_action")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function shipAction(Request $request) {
        if ($action = $request->request->get('action') && $choice = $request->request->get('choice')) {
            if ($choice == 'repair') {
                $this->shipServices->repair($request, $this->user);
            }
            else if ($choice == 'moral') {
                $this->shipServices->feed($request, $this->user);
            }
            else if ($choice == 'upgrade') {
                $this->shipServices->upgrade($request, $this->user);
            }
            else {
                $this->addFlash('danger', 'Le formulaire est erroné.');
            }

            if ($success = $this->shipServices->getSuccess()) {
                $this->addFlash('success', $success);
            }
            else if ($error = $this->shipServices->getError()) {
                $this->addFlash('danger', $error);
            }
        }
        return $this->redirectToRoute('app_ships');
    }

    /**
     * @param Request $request
     * @Route("/transfer", name="app_ships_transfer")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function shipTransfer(Request $request) {
        if ($request->request->get('transfer')) {
            $this->shipServices->transfer($request, $this->user);
            if ($success = $this->shipServices->getSuccess()) {
                $this->addFlash('success', $success);
            }
            else if ($error = $this->shipServices->getError()) {
                $this->addFlash('danger', $error);
            }
        }
        return $this->redirectToRoute('app_ships');
    }

    /**
     * @Route("/rename/{id}", name="app_ship_rename", requirements={"id": "\d+"})
     */
    public function shipRename(Ship $ship, Request $request) {
        if ($request->request->get('rename') && ($name = $request->request->get('name'))) {
            $this->shipServices->rename($this->user, $ship, $name);
            if ($success = $this->shipServices->getSuccess()) {
                $this->addFlash('success', $success);
            }
            else if ($error = $this->shipServices->getError()) {
                $this->addFlash('danger', $error);
            }
        }
        return $this->redirectToRoute('app_ships');
    }

    /**
     * @Route("/order-move-up/{id}", name="app_ship_order_move_up", requirements={"id": "\d+"})
     */
    public function shipOrderMoveUp(Ship $ship) {
        if ($ship && $ship->getDisplayOrder() > 1) {
            $new_pos = $ship->getDisplayOrder() - 1;
            /** @var Ship $ship_to_move_up */
            $ship_to_move_up = $this->em->getRepository(Ship::class)->findOneBy(['owner' => $this->user, 'display_order' => $new_pos]);
            if ($ship_to_move_up) {
                $ship_to_move_up->setDisplayOrder($new_pos + 1);
                $ship->setDisplayOrder($new_pos);
                $this->em->persist($ship_to_move_up);
                $this->em->persist($ship);
                $this->em->flush();
            }
        }
        return $this->redirectToRoute('app_ships');
    }

    /**
     * @Route("/order-move-down/{id}", name="app_ship_order_move_down", requirements={"id": "\d+"})
     */
    public function shipOrderMoveDown(Ship $ship) {
        if ($ship && $ship->getDisplayOrder() < count($this->user->getShips())) {
            $new_pos = $ship->getDisplayOrder() + 1;
            /** @var Ship $ship_to_move_down */
            $ship_to_move_down = $this->em->getRepository(Ship::class)->findOneBy(['owner' => $this->user, 'display_order' => $new_pos]);
            if ($ship_to_move_down) {
                $ship_to_move_down->setDisplayOrder($new_pos - 1);
                $ship->setDisplayOrder($new_pos);
                $this->em->persist($ship_to_move_down);
                $this->em->persist($ship);
                $this->em->flush();
            }
        }
        return $this->redirectToRoute('app_ships');
    }

    /**
     * @Route("/", name="app_ships")
     */
    public function showShips() {
        $ships = $this->em->getRepository(Ship::class)->findBy(['owner' => $this->user], ['display_order' => 'ASC']);
        return $this->render('authenticated/ships.html.twig', [
            'user' => $this->user,
            'ships' => $ships
        ]);
    }
}