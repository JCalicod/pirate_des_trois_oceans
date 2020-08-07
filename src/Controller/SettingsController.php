<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 11/05/2020
 * Time: 21:11
 */

namespace App\Controller;


use App\Entity\User;
use App\Form\UpdateSettingsType;
use App\Service\UserServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class TavernController
 * @package App\Controller
 * @Route("/profil")
 * @IsGranted("ROLE_USER")
 */
class SettingsController extends AbstractController {
    private $em;
    private $user;
    private $userServices;

    public function __construct(EntityManagerInterface $em, Security $security, UserServices $userServices) {
        $this->em = $em;
        $this->user = $security->getUser();
        $this->userServices = $userServices;
    }

    /**
     * @Route("/", name="app_settings")
     */
    public function settings(Request $request) {
        $form = $this->createForm(UpdateSettingsType::class);
        if ($this->userServices->updatePassword($request, $this->user, $form)) {
            if ($error = $this->userServices->getError()) {
                $this->addFlash('danger', $error);
            }
            else if ($success = $this->userServices->getSuccess()) {
                $this->addFlash('success', $success);
            }
        }

        $godchildren = $this->em->getRepository(User::class)->findBy(['godfather' => $this->user], ['registration' => 'DESC']);
        $godchildren_power = [];
        foreach ($godchildren as $godchild) {
            $godchildren_power[] = $this->userServices->getPower($godchild);
        }
        return $this->render('authenticated/settings.html.twig', [
            'user' => $this->user,
            'godchildren' => $godchildren,
            'godchildren_power' => $godchildren_power,
            'form' => $form->createView()
        ]);
    }
}