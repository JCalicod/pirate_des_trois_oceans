<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 01/08/2020
 * Time: 10:22
 */

namespace App\Controller;


use App\Entity\Clues;
use App\Entity\Treasure;
use App\Form\ProposeTreasureCodeType;
use App\Service\ExplorationServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

/**
 * Class ExplorationController
 * @package App\Controller
 * @Route("/exploration")
 * @IsGranted("ROLE_USER")
 */
class ExplorationController extends AbstractController
{
    private $em;
    private $user;
    private $explorationServices;

    public function __construct(EntityManagerInterface $em, Security $security, ExplorationServices $explorationServices)
    {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->explorationServices = $explorationServices;
    }

    /**
     * @Route("/tresors/activate/{id}", name="activate_treasure")
     * @param Treasure $treasure
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function activateTreasure(Treasure $treasure, Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            if ($this->explorationServices->checkTreasureActivation($treasure)) {
                return new JsonResponse('Trésor activé avec succès.', JsonResponse::HTTP_OK);
            }
            else {
                return new JsonResponse($this->explorationServices->getError(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        else {
            return new JsonResponse('Cette méthode ne peut être appelée que via AJAX.', JsonResponse::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * @Route("/tresors", name="treasure_hunt")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function treasureHunt(Request $request)
    {
        $treasure = null;
        $form = $this->createForm(ProposeTreasureCodeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if ($this->explorationServices->checkCode($data)) {
                $this->explorationServices->findTreasure();
                $treasure = $this->explorationServices->getTreasure();
            }
            else {
                $this->addFlash('danger', 'Le code entré sur ce territoire ne permet pas de découvrir le trésor cherché.');
            }
            $this->em->persist($this->user);
            $this->em->flush();
        }

        $clues = $this->em->getRepository(Clues::class)->findBy(['user' => $this->user, 'discovered' => true]);

        $treasures = $this->em->getRepository(Treasure::class)->findBy(['owner' => $this->user]);

        return $this->render('authenticated/exploration/treasure_hunt.html.twig', [
            'clues' => $clues,
            'treasure' => $treasure,
            'treasures' => $treasures,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/", name="app_explore")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function explore(Request $request)
    {
        $clue = null;
        if ($this->explorationServices->explore()) {
            $clue = $this->explorationServices->getClue();
            $this->addFlash('success', $this->explorationServices->getSuccess());
        }
        else {
            $this->addFlash('danger', $this->explorationServices->getError());
        }
        return $this->render('authenticated/exploration/explore.html.twig', [
            'clue' => $clue
        ]);
    }
}