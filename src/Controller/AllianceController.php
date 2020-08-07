<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 13/06/2020
 * Time: 16:56
 */

namespace App\Controller;


use App\Entity\Alliance;
use App\Entity\AllianceHistory;
use App\Entity\AllianceMember;
use App\Entity\Lands;
use App\Entity\User;
use App\Form\AllianceBoard\ExcludeMemberType;
use App\Form\AllianceBoard\LeaveType;
use App\Form\AllianceBoard\UpdateAdvertType;
use App\Form\AllianceBoard\UpdateChiefType;
use App\Form\AllianceBoard\UpdatePirateCodeType;
use App\Form\AllianceBoard\UpdatePresentationType;
use App\Form\AllianceBoard\UpdateStatusAndPowerType;
use App\Form\CreateAllianceType;
use App\Form\JoinAllianceType;
use App\Service\AllianceServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class AllianceController
 * @package App\Controller
 * @Route("/alliance")
 * @IsGranted("ROLE_USER")
 */
class AllianceController extends AbstractController
{
    private $em;
    private $user;
    private $alliance;
    private $allianceServices;

    public function __construct(EntityManagerInterface $em, Security $security, AllianceServices $allianceServices)
    {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->alliance = $this->user->getAlliance();
        $this->allianceServices = $allianceServices;
    }

    /**
     * @param Request $request
     * @return array
     */
    private function getBoardForms(Request $request): array
    {
        $forms = [
            'updateChief' => $this->createForm(UpdateChiefType::class),
            'excludeMember' => $this->createForm(ExcludeMemberType::class),
            'updatePresentation' => $this->createForm(UpdatePresentationType::class),
            'updatePirateCode' => $this->createForm(UpdatePirateCodeType::class),
            'updateAdvert' => $this->createForm(UpdateAdvertType::class),
            'updateStatusAndPower' => $this->createForm(UpdateStatusAndPowerType::class),
            'leave' => $this->createForm(LeaveType::class)
        ];

        foreach ($forms as $key => $form) {
            /** @FormInterface $form */
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                if ($this->user == $this->alliance->getLeader()) {
                    switch ($key) {
                        case 'updateChief':
                            $this->allianceServices->updateChief($form);
                            break;
                        case 'excludeMember':
                            $this->allianceServices->excludeMember($form);
                            break;
                        case 'updatePresentation':
                            $this->allianceServices->updatePresentation($form);
                            break;
                        case 'updatePirateCode':
                            $this->allianceServices->updatePirateCode($form);
                            break;
                        case 'updateAdvert':
                            $this->allianceServices->updateAdvert($form);
                            break;
                        case 'updateStatusAndPower':
                            $this->allianceServices->updateStatusAndPower($form);
                            break;
                    }
                }
                if ($key == 'leave') {
                    if ($this->allianceServices->leave()) {
                        $this->alliance = null;
                        return [];
                    }
                }
            }
        }

        return [
            'updateChief' => $forms['updateChief']->createView(),
            'excludeMember' => $forms['excludeMember']->createView(),
            'updatePresentation' => $forms['updatePresentation']->createView(),
            'updatePirateCode' => $forms['updatePirateCode']->createView(),
            'updateAdvert' => $forms['updateAdvert']->createView(),
            'updateStatusAndPower' => $forms['updateStatusAndPower']->createView(),
            'leave' => $forms['leave']->createView()
        ];
    }

    /**
     * @Route("/repaire", name="app_alliance_board")
     */
    public function board(Request $request)
    {
        if (!$this->alliance) {
            return $this->redirectToRoute('app_alliance');
        }

        $forms = $this->getBoardForms($request);

        if (!$this->alliance) {
            return $this->redirectToRoute('app_alliance');
        }

        if ($success = $this->allianceServices->getSuccess()) {
            $this->addFlash('success', $success);
        }
        if ($error = $this->allianceServices->getError()) {
            $this->addFlash('danger', $error);
        }

        $lands = $this->em->getRepository(Lands::class)->findAll();
        $ranking = [];
        foreach ($lands as $land) {
            $ranking[$land->getId()] = $this->em->getRepository(Lands::class)->getLandBestAlliances($land);
        }
        $points = $this->em->getRepository(Lands::class)->getAlliancePointsByLand($this->alliance);
        $logs = $this->em->getRepository(AllianceHistory::class)->findBy(['alliance' => $this->alliance], ['id' => 'DESC']);

        return $this->render('authenticated/alliance_board.html.twig', [
            'alliance' => $this->alliance,
            'lands' => $lands,
            'ranking' => $ranking,
            'points' => $points,
            'logs' => $logs,
            'forms' => $forms
        ]);
    }

    /**
     * @Route("/join", name="app_alliance_join")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function join(Request $request)
    {
        if ($this->alliance) {
            return $this->redirectToRoute('app_alliance_board');
        }

        $form = $this->createForm(JoinAllianceType::class)->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Alliance $alliance */
            $alliance = $form->getData()['alliance'];
            if (count($alliance->getAllianceMembers()) < 10) {
                if ($alliance->getOpen()) {
                    if ($alliance->getRequiredPower() <= $this->user->getTotalPower()) {
                        $alliance->addUser($this->user);
                        $alliance->addAllianceMember($this->allianceServices->createAllianceMember($this->user, $alliance));
                        $this->allianceServices->createLog($alliance, 'inout', $this->user->getUsername() . ' a rejoint l\'Alliance.');
                        $this->em->persist($alliance);
                        $this->em->flush();

                        $this->addFlash('success', 'Vous avez bien rejoint l\'Alliance "' . $alliance->getName() . '"');
                    }
                    else {
                        $this->addFlash('danger', 'Vous ne possédez pas la puissance requise pour rejoindre cette alliance.');
                    }
                }
                else {
                    $this->addFlash('danger', 'Cette alliance ne recrute pas actuellement.');
                }
            }
            else {
                $this->addFlash('danger', 'Cette alliance ne peut plus recruter.');
            }
        }
        return $this->redirectToRoute('app_alliance');
    }

    /**
     * @Route("/", name="app_alliance")
     * @return Response
     */
    public function home(Request $request)
    {
        if ($this->alliance) {
            return $this->redirectToRoute('app_alliance_board');
        }
        $alliance = new Alliance();
        $form = $this->createForm(CreateAllianceType::class, $alliance);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                // Si l'utilisateur n'a pas encore d'alliance
                if (!$this->alliance) {
                    if ($this->user->getGold() >= 20000) {
                        $this->allianceServices->createAlliance($alliance);
                        return $this->redirectToRoute('app_alliance_board');
                    }
                    else {
                        $this->addFlash('danger', 'Vous n\'avez pas l\'or nécessaire.');
                    }
                }
                else {
                    $this->addFlash('danger', 'Vous faites déjà partie d\'une alliance.');
                }
            }
            else {
                foreach($form->getErrors(true, false) as $er) {
                    $this->addFlash('danger', $er->__toString());
                }
            }
        }
        $alliances = $this->em->getRepository(Alliance::class)->findAvailableAlliances();
        $joinForm = $this->createForm(JoinAllianceType::class);

        return $this->render('authenticated/alliance.html.twig', [
            'form' => $form->createView(),
            'joinForm' => $joinForm->createView(),
            'alliances' => $alliances
        ]);
    }
}