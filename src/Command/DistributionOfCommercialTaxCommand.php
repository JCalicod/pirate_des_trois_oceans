<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 09/08/2020
 * Time: 11:36
 */

namespace App\Command;


use App\Entity\Alliance;
use App\Entity\AllianceWar;
use App\Entity\Lands;
use App\Entity\Trade;
use App\Service\MessagingServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DistributionOfCommercialTaxCommand extends Command
{
    protected static $defaultName = 'commercial-tax:distribution';
    private $em;
    private $messagingServices;

    public function __construct(EntityManagerInterface $em, MessagingServices $messagingServices)
    {
        parent::__construct();
        $this->em = $em;
        $this->messagingServices = $messagingServices;
    }

    protected function configure()
    {
        $this
            ->setDescription('Distribution of commercial tax.')
            ->setHelp('This command distribute commercial tax to alliances with highest points on different lands. Then, it erase all data in AllianceWar.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rewards = [];
        $lands = $this->em->getRepository(Lands::class)->findAll();
        // On parcourt tous les territoires
        foreach ($lands as $land) {
            // On récupère les meilleures alliances sur ce territoire
            $points = $this->em->getRepository(Lands::class)->getLandBestAlliances($land);
            if (count($points) > 0) {
                $alliance_id = $points[0]['alliance_id'];
                // Ajout du pourcentage à l'alliance
                if (array_key_exists($alliance_id, $rewards)) {
                    $rewards[$alliance_id] += $land->getPercentage();
                }
                else {
                    $rewards[$alliance_id] = $land->getPercentage();
                }
            }
        }

        // On récupère la taxe commerciale du jour
        $tax = $this->em->getRepository(Trade::class)->findAll()[0]->getAmount();
        foreach ($rewards as $key => $percentage) {
            /** @var Alliance $alliance */
            $alliance = $this->em->getRepository(Alliance::class)->find($key);
            $members = $alliance->getUsers();
            $gain = floor($tax * $percentage / 100);
            $each_gain = floor($gain / count($members));
            $tax = $tax - $gain;
            foreach ($members as $member) {
                $member->addGold($each_gain);
                $this->messagingServices->sendMessage(
                    [
                        'title' => 'Taxe Commerciale',
                        'message' => 'Vous avez perçu <b>' .  number_format(intval($each_gain), 2, '', ' ') . ' PO</b> grâce à la prise de territoires de votre Alliance.',
                        'receiver' => $member->getUsername()
                    ]
                );
                $this->em->persist($member);
            }
        }

        // On supprime les données de guerre d'alliance
        $wars = $this->em->getRepository(AllianceWar::class)->findAll();
        foreach ($wars as $war) {
            $this->em->remove($war);
        }

        $this->em->flush();
    }

}