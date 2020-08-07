<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/08/2020
 * Time: 16:46
 */

namespace App\Command;


use App\Entity\Trade;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateTradeRateCommand extends Command
{
    protected static $defaultName = 'trade-rate:update';
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Update daily trade rate.')
            ->setHelp('This command update daily trade rate.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Updating daily trade rate',
            '=========================',
            ''
        ]);

        $trade = $this->em->getRepository(Trade::class)->findAll();
        if (count($trade) == 0) {
            $trade = new Trade();

        }
        else {
            $trade = $trade[0];
        }
        $trade->setAmount(0);
        $trade = $this->setTradeRateAndDescription($trade);
        $this->em->persist($trade);
        $this->em->flush();

        $output->writeln([
            'Rate: ' . $trade->getRate(),
            '',
            'Description: ' . $trade->getDescription(),
            '',
            '=========================',
            'Finished',
            ''
        ]);
    }

    /**
     * @param Trade $trade
     * @return Trade
     */
    private function setTradeRateAndDescription(Trade $trade): Trade
    {
        $descriptions = [
            50 => 'Aujourd\'hui, on vend à un excellent prix !',
            60 => 'Aujourd\'hui, on vend à un très bon prix !',
            70 => 'Aujourd\'hui, on vend à un bon prix !',
            80 => 'Aujourd\'hui, on achète à un bon prix !',
            90 => 'Aujourd\'hui, on achète à un très bon prix !',
            100 => 'Aujourd\'hui, on achète à un excellent prix !'
        ];
        $rate = array_rand($descriptions);
        $trade->setRate($rate);
        $trade->setDescription($descriptions[$rate]);
        return $trade;
    }
}