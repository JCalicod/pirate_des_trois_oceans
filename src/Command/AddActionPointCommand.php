<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/08/2020
 * Time: 12:56
 */

namespace App\Command;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddActionPointCommand extends Command
{
    protected static $defaultName = 'pa:add';
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add action point.')
            ->setHelp('This command add an action point to all players if they have less than 30 action points.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Adding Action Point to all players',
            '==================================',
            ''
        ]);

        $players = $this->em->getRepository(User::class)->findAll();

        foreach ($players as $player) {
            if (($pa = $player->getPa()) < 30) {
                $player->setPa($pa + 1);
                $output->writeln([$player->getUsername(), '']);
            }
            $this->em->persist($player);
        }
        $this->em->flush();

        $output->writeln([
            '==================================',
            'Finished'
        ]);
    }
}