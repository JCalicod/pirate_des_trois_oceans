<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 03/08/2020
 * Time: 00:28
 */

namespace App\Controller;


use App\Service\PoachingServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class PoachingController
 * @package App\Controller
 * @Route("/braconnage")
 * @IsGranted("ROLE_USER")
 */
class PoachingController extends AbstractController
{
    private $em;
    private $user;
    private $poachingServices;

    public function __construct(EntityManagerInterface $em, Security $security, PoachingServices $poachingServices)
    {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->poachingServices = $poachingServices;
    }

    /**
     * @Route("/", name="app_poach")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function poach(Request $request)
    {
        if ($this->poachingServices->poach()) {
            $this->addFlash('success', $this->poachingServices->getSuccess());
        }
        else {
            $this->addFlash('danger', $this->poachingServices->getError());
        }
        return $this->render('authenticated/poaching/poach.html.twig', []);
    }
}