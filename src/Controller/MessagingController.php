<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 28/04/2020
 * Time: 00:21
 */

namespace App\Controller;


use App\Entity\Messaging;
use App\Entity\User;
use App\Form\SendMessageType;
use App\Service\MessagingServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MessagingController
 * @package App\Controller
 * @Route("/messages")
 * @IsGranted("ROLE_USER")
 */
class MessagingController extends AbstractController {
    private $em;
    private $user;
    private $messagingServices;

    public function __construct(EntityManagerInterface $em, Security $security, MessagingServices $messagingServices) {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->messagingServices = $messagingServices;
    }

    /**
     * @Route("/", name="app_messaging")
     */
    public function messagesList(Request $request) {
        $form = $this->createForm(SendMessageType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if ($this->messagingServices->checkMessage($data, $this->user)) {
                $this->messagingServices->sendMessage($data, $this->user);

                $this->addFlash('success', 'Votre message a bien été envoyé à ' . $data['receiver'] . '.');
            }
            else {
                $this->addFlash('danger', $this->messagingServices->getError());
            }
        }
        $messages = $this->em->getRepository(Messaging::class)->findBy(['receiver' => $this->user], ['message_date' => 'DESC'], 50);
        $this->messagingServices->seeNewMessages($messages);


        return $this->render('authenticated/messaging.html.twig', [
            'form' => $form->createView(),
            'messages' => $messages
        ]);
    }
}