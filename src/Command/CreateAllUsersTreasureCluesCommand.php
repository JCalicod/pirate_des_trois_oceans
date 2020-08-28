<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/08/2020
 * Time: 12:56
 */

namespace App\Command;


use App\Entity\Treasure;
use App\Entity\User;
use App\Service\TreasureServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateAllUsersTreasureCluesCommand extends Command
{
    protected static $defaultName = 'clues:create';
    private $em;
    private $treasureServices;

    public function __construct(EntityManagerInterface $em, TreasureServices $treasureServices)
    {
        parent::__construct();
        $this->em = $em;
        $this->treasureServices = $treasureServices;
    }

    protected function configure()
    {
        $this
            ->setDescription('Create treasure clues.')
            ->setHelp('This command creates treasure clues for all current users.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Creating treasure clues',
            '==================================',
            ''
        ]);

        $players = $this->em->getRepository(User::class)->findAll();

        foreach ($players as $player) {
            $this->treasureServices->createTreasure($player);
            $this->em->persist($player);
        }
        $this->em->flush();

        $output->writeln([
            '==================================',
            'Finished'
        ]);
    }
}