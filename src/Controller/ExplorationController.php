<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 01/08/2020
 * Time: 10:22
 */

namespace App\Controller;


use App\Entity\Clues;
use App\Service\ExplorationServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/tresors", name="treasure_hunt")
     */
    public function treasureHunt()
    {
        $clues = $this->em->getRepository(Clues::class)->findBy(['user' => $this->user, 'discovered' => true]);
        return $this->render('authenticated/exploration/treasure_hunt.html.twig', [
            'clues' => $clues
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