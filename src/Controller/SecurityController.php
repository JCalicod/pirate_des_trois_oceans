<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use App\Service\SecurityServices;
use App\Service\UserServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController {
    private $securityServices;
    private $em;
    private $userServices;

    /**
     * SecurityController constructor.
     * @param SecurityServices $securityServices
     */
    public function __construct(SecurityServices $securityServices, EntityManagerInterface $em, UserServices $userServices) {
        $this->securityServices = $securityServices;
        $this->em = $em;
        $this->userServices = $userServices;
    }

    /**
     * @Route("/capitaine/{id}", name="app_profile", requirements={"id": "\d+"})
     */
    public function profile(User $user) {
        $ranking = $this->userServices->getRanking($user);
        $nb_users = count($this->em->getRepository(User::class)->findAll());
        $power = $this->userServices->getPower($user);

        return $this->render('profile.html.twig', [
            'user' => $user,
            'ranking' => $ranking,
            'nb_users' => $nb_users,
            'power' => $power
        ]);
    }

    /**
     * @Route("/en-ligne", name="app_logged")
     */
    public function logged() {
        $logged = $this->em->getRepository(User::class)->findLogged();

        return $this->render('logged.html.twig', [
            'logged' => $logged
        ]);
    }

    /**
     * @Route("/inscription", name="app_signup")
     */
    public function signup(Request $request) {
        $error = null;
        $user = new User();
        $form = $this->createForm(SignUpType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                if ($result = $this->securityServices->registration($data)) {
                    /** @var User $godfather */
                    $godfather = $this->em->getRepository(User::class)->findOneBy(['username' => $data['godfather']]);
                    if ($godfather) {
                        $godfather->setGold($godfather->getGold() + 1000);
                        $this->em->persist($godfather);
                    }
                    $this->em->persist($result['ship']);
                    $this->em->persist($result['den']);
                    $this->em->persist($result['user']);
                    $this->em->flush();

                    $this->addFlash('success', 'Votre pirate a bien été créé, vous pouvez dès à présent vous connecter, capitaine !');
                } else {
                    $error = $this->securityServices->getError();
                    $this->addFlash('danger', $error);
                }
            }
            else {
                foreach($form->getErrors(true, false) as $er) {
                    $this->addFlash('danger', $er->__toString());
                }
            }
        }

        return $this->render('signup.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $nb_users = count($this->em->getRepository(User::class)->findAll());
        $logged = $this->em->getRepository(User::class)->findLogged();
        $ranking = $this->userServices->getTop20();

        return $this->render('index.html.twig', [
            'nb_users' => $nb_users,
            'last_username' => $lastUsername,
            'error' => $error,
            'logged' => $logged,
            'ranking' => $ranking
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout() {
    }
}
