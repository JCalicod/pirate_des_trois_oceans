<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 30/04/2020
 * Time: 23:39
 */

namespace App\Controller;


use App\Entity\Ship;
use App\Entity\User;
use App\Form\EnrollCrewType;
use App\Service\CrewServices;
use App\Service\ShipServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class CrewController
 * @package App\Controller
 * @Route("/equipage")
 * @IsGranted("ROLE_USER")
 */
class CrewController extends AbstractController {
    private $em;
    private $user;
    private $crewServices;
    private $shipServices;

    public function __construct(EntityManagerInterface $em, Security $security, CrewServices $crewServices, ShipServices $shipServices) {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->crewServices = $crewServices;
        $this->shipServices = $shipServices;
    }

    /**
     * @Route("/crew-data", name="app_ship_crew_data")
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function getShipCrewData(Request $request) {
        // Appel AJAX
        if ($request->isXmlHttpRequest()) {
            $shipID = $request->get('shipID');

            /** @var Ship $ship */
            $ship = $this->em->getRepository(Ship::class)->find($shipID);
            if ($ship && $ship->getOwner()->getId() == $this->user->getId()) {
                $crewData = $this->shipServices->getActualAndMaxCrew($ship);
                return new JsonResponse($crewData);
            }
            else {
                return $this->render('authenticated/include/flash-ajax.html.twig', [
                    'type' => 'danger',
                    'message' => 'Le navire renseigné n\'existe pas.'
                ]);
            }
        }

        return $this->redirectToRoute('app_crew_show');
    }

    /**
     * @Route("/", name="app_crew_show")
     */
    public function recruit(Request $request) {
        $form = $this->createForm(EnrollCrewType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if ($this->crewServices->checkRecruit($data, $this->user)){
                $this->crewServices->recruit($data, $this->user);
                $this->addFlash('success', 'Les recrues ont bien rejoint votre navire.');
                unset($form);
                $form = $this->createForm(EnrollCrewType::class);
            }
            else {
                $this->addFlash('danger', $this->crewServices->getError());
            }
        }

        $crewData = $this->shipServices->getActualAndMaxCrew($this->user->getShips());

        return $this->render('authenticated/crew.html.twig', [
            'form' => $form->createView(),
            'crewData' => $crewData
        ]);
    }
}