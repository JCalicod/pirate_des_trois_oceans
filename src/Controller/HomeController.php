<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 20:05
 */

namespace App\Controller;


use App\Entity\Den;
use App\Entity\Messaging;
use App\Entity\Ship;
use App\Entity\User;
use App\Form\SpyType;
use App\Service\MessagingServices;
use App\Service\ShipServices;
use App\Service\TravelServices;
use App\Service\UserServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @Route("/accueil")
 * @IsGranted("ROLE_USER")
 */
class HomeController extends AbstractController {
    private $em;
    private $user;
    private $userServices;
    private $shipServices;
    private $travelServices;
    private $messagingServices;

    public function __construct(EntityManagerInterface $em, UserServices $userServices, TravelServices $travelServices, Security $security, ShipServices $shipServices, MessagingServices $messagingServices) {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->userServices = $userServices;
        $this->travelServices = $travelServices;
        $this->shipServices = $shipServices;
        $this->messagingServices = $messagingServices;
    }

    /**
     * @param Request $request
     * @Route("/travel", name="app_travel")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function travel(Request $request) {
        if ($request->get('travel')) {
            $fleet_position = $request->get('fleet_position');
            $target_position = $request->get('target_position');
            // Si l'utilisateur a au moins 1 PA
            if ($this->travelServices->checkPA($this->user)) {
                // Déplacement d'un navire seul
                if (substr($fleet_position, 0, 4) == 'ship') {
                    // On enlève "ship" pour garder uniquement l'id du navire
                    $ship_id = intval(substr($fleet_position, 4));
                    if ($this->travelServices->checkTargetPosition($target_position, $ship_id, $this->user) &&
                        $this->travelServices->checkSeaman($ship_id)) {
                        $this->travelServices->moveShip($ship_id, $target_position, $this->user);
                        $this->addFlash('success', 'Votre navire s\'est bien déplacé.');
                    }
                }
                // Déplacement d'une flotte
                else {
                    $fleet_position = intval($fleet_position);
                    if ($this->travelServices->checkPositions($fleet_position, $target_position) &&
                        $this->travelServices->checkFleet($fleet_position, $this->user->getShips())) {
                        $this->travelServices->moveFleet($fleet_position, $target_position, $this->user);
                        $this->addFlash('success', 'Votre flotte s\'est bien déplacée.');
                    }
                }
            }
            $error = $this->travelServices->getError();
            if (strlen($error) > 0)
                $this->addFlash('danger', $error);

        }
        return $this->redirectToRoute('app_home');
    }

    /**
     * @Route("/", name="app_home")
     */
    public function home() {
        $nb_new_messages = count($this->em->getRepository(Messaging::class)->findBy(['receiver' => $this->user, 'seen' => false]));
        $crew = $this->userServices->getFullCrew($this->user);
        $power = $this->userServices->getPower($this->user);
        $ranking = $this->userServices->getRanking($this->user);
        $nb_users = count($this->em->getRepository(User::class)->findAll());
        $movable_fleet = $this->userServices->getMovableFleet($this->user->getShips());
        $pos_order = $this->userServices->orderShipsByPosition($this->user->getShips());
        $den = $this->em->getRepository(Den::class)->findOneBy(['owner' => $this->user]);
        $logged = $this->em->getRepository(User::class)->findLogged();
        $explorer_positions = $this->shipServices->getDifferentExplorerPositions($this->user->getShips());
        $spyForm = $this->createForm(SpyType::class);

        return $this->render('authenticated/home.html.twig', [
            'crew' => $crew,
            'power' => $power,
            'ranking' => $ranking,
            'nb_users' => $nb_users,
            'nb_new_messages' => $nb_new_messages,
            'movable_fleet' => $movable_fleet,
            'pos_order' => $pos_order,
            'den' => $den,
            'logged' => $logged,
            'explorer_positions' => $explorer_positions,
            'spyForm' => $spyForm->createView()
        ]);
    }

    /**
     * @Route("/espionnage", name="app_spy")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function spy(Request $request)
    {
        $form = $this->createForm(SpyType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!($user = $this->userServices->spy($form->getData()))) {
                $this->addFlash('danger', $this->userServices->getError());
                return $this->redirectToRoute('app_home');
            }
            $ranking = $this->userServices->getRanking($user);
            $nb_users = count($this->em->getRepository(User::class)->findAll());
            $this->messagingServices->sendMessage(
                [
                    'title' => 'Rapport d\'Espionnage',
                    'message' => 'Attention capitaine, nous savons de source sûre qu\'un certain <b>' . $this->user->getUsername() . '</b> vous espionne..',
                    'receiver' => $user->getUsername()
                ]
            );
            return $this->render('authenticated/spy.html.twig', [
                'user' => $user,
                'ranking' => $ranking,
                'nb_users' => $nb_users
            ]);
        }
        return $this->redirectToRoute('app_home');
    }
}