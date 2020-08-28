<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/08/2020
 * Time: 12:56
 */

namespace App\Command;


use App\Entity\Item;
use App\Entity\Treasure;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckTreasuresValidityCommand extends Command
{
    protected static $defaultName = 'treasures:check-validity';
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Check treasures validity.')
            ->setHelp('This command check the validity of treasures and remove them if there are expired.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Checking validity',
            '==================================',
            ''
        ]);

        $treasures = $this->em->getRepository(Treasure::class)->findAll();
        foreach ($treasures as $treasure) {
            if ($treasure->getIsActive()) {
                if (intval(date_diff($treasure->getDateOfUse(), new \DateTime('now'))->format('%d')) >= $treasure->getDays()) {
                    $this->em->remove($treasure);
                    $output->writeln([
                        $treasure->getOwner()->getUsername() . '\'s ' . $treasure->getItem()->getName() . ' removal. '
                    ]);
                }
            }
        }

        $this->em->flush();

        $output->writeln([
            '==================================',
            'Finished'
        ]);
    }
}