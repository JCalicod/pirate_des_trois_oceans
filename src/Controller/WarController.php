<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 23/05/2020
 * Time: 00:47
 */

namespace App\Controller;

use App\Entity\Lands;
use App\Service\MessagingServices;
use App\Service\ShipServices;
use App\Service\WarServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class ShipsController
 * @package App\Controller
 * @Route("/guerre")
 * @IsGranted("ROLE_USER")
 */
class WarController extends AbstractController {
    private $em;
    private $user;
    private $shipServices;
    private $warServices;
    private $messagingServices;

    public function __construct(EntityManagerInterface $em, Security $security, ShipServices $shipServices, WarServices $warServices, MessagingServices $messagingServices) {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->shipServices = $shipServices;
        $this->warServices = $warServices;
        $this->messagingServices = $messagingServices;
    }

    /**
     * @Route("/resultat", name="app_war_action")
     */
    public function warAction(Request $request) {
        if ($request->request->get('attack')) {
            $report = [];
            $this->warServices->attack($request, $this->user);
            if ($error = $this->warServices->getError()) {
                $this->addFlash('danger', $error);
            }
            else {
                $attacker = $this->warServices->getAttacker();
                $defender = $this->warServices->getDefender();
                $victory = $this->warServices->getVictory();
                $theft = $this->warServices->getTheft();
                if ($this->warServices->getNPC()) {
                    return $this->render('authenticated/war_report_npc.html.twig', [
                        'attacker' => $attacker,
                        'defender' => $defender,
                        'victory' => $victory,
                        'theft' => $theft
                    ]);
                }
                else {
                    // Envoie du message à l'opposant
                    $this->messagingServices->sendMessage(
                        [
                            'title' => 'Rapport de Guerre',
                            'message' =>
                                $this->renderView('authenticated/include/messaging-report.html.twig', [
                                    'attacker' => $attacker,
                                    'defender' => $defender,
                                    'victory' => $victory,
                                    'theft' => $theft
                                ]),
                            'receiver' => $this->warServices->getDefenderUser()->getUsername()
                        ]
                    );

                    return $this->render('authenticated/war_report.html.twig', [
                        'attacker' => $attacker,
                        'defender' => $defender,
                        'victory' => $victory,
                        'theft' => $theft
                    ]);
                }
            }
        }
        return $this->redirectToRoute('app_war');
    }

    /**
     * @Route("/", name="app_war")
     */
    public function warHome(Request $request) {
        $selected = null;
        $lands = $this->shipServices->getUserShipsLands($this->user->getShips());
        $oponents = $this->warServices->getOponentsAtPosition($lands[0], $this->user);

        // Si l'utilisateur fait une recherche par territoire
        if ($search = $request->request->get('search') && $choice = $request->request->get('choice')) {
            // Si l'utilisateur a bien au moins un navire sur ce territoire
            if (count($this->shipServices->getUserShipsByLand($this->user->getShips(), $choice)) > 0) {
                $selected = $choice;
                $current_land = $this->em->getRepository(Lands::class)->find($choice);
                $oponents = $this->warServices->getOponentsAtPosition($current_land, $this->user);
            }
            else {
                $this->addFlash('danger', 'Vous ne possédez pas de navire sur ce territoire');
            }
        }


        return $this->render('authenticated/war.html.twig', [
            'lands' => $lands,
            'oponents' => $oponents,
            'selected' => $selected
        ]);
    }
}