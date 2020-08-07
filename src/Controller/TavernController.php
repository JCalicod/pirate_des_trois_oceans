<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 04/05/2020
 * Time: 16:24
 */

namespace App\Controller;


use App\Entity\Tavern;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class TavernController
 * @package App\Controller
 * @Route("/taverne")
 * @IsGranted("ROLE_USER")
 */
class TavernController extends AbstractController {
    private $em;
    private $user;

    public function __construct(EntityManagerInterface $em, Security $security) {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
    }

    /**
     * @Route("/refresh", name="app_tavern_refresh")
     */
    public function refresh(Request $request) {
        // Appel AJAX
        if ($request->isXmlHttpRequest()) {
            $messages = $this->em->getRepository(Tavern::class)->findLastMessages();

            return $this->render('authenticated/include/tavern-all-messages.html.twig', [
                'messages' => $messages
            ]);

        }
    }

    /**
     * @Route("/send-message", name="app_tavern_send_message")
     */
    public function addMessage(Request $request) {
        // Appel AJAX
        if ($request->isXmlHttpRequest()) {
            $message = $request->get('message');

            if ($message && strlen($message) <= 70) {
                $tavern = new Tavern();
                $tavern->setOwner($this->user);
                $tavern->setMessage($message);
                $this->em->persist($tavern);
                $this->em->flush();

                return $this->render('authenticated/include/tavern-message.html.twig', [
                    'tavern' => $tavern
                ]);
            }
            else {
                return new Response('');
            }
        }
    }

    /**
     * @Route("/", name="app_tavern")
     */
    public function tavern() {
        $messages = $this->em->getRepository(Tavern::class)->findLastMessages();
        return $this->render('authenticated/tavern.html.twig', [
            'messages' => $messages
        ]);
    }
}