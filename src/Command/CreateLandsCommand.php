<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/07/2020
 * Time: 17:44
 */

namespace App\Command;


use App\Entity\Lands;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateLandsCommand extends Command
{
    protected static $defaultName = 'lands:create';
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Create Lands.')
            ->setHelp('This command allows you to create Lands')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Land Creator',
            '============',
            ''
        ]);

        $lands = $this->getLands();

        for ($i = 0; $i < count($lands); $i++) {
            $output->writeln([
                $lands[$i]['name'],
                '============',
                ''
            ]);
            $land = new Lands();
            $land->setName($lands[$i]['name']);
            $land->setPercentage($lands[$i]['percentage']);
            $land->setDescription($lands[$i]['description']);
            $land->setX($lands[$i]['x']);
            $land->setY($lands[$i]['y']);

            $this->em->persist($land);
        }
        $this->em->flush();
    }

    private function getLands(): array
    {
        return [
            [
                'name' => 'Banquise',
                'percentage' => 4,
                'description' => '
                    La banquise est une vaste étendue de glace composée de deux parties : la banquise pérenne, où la glace 
                    date de plusieurs années, et la banquise saisonnière, où la glace ne date que de quelques mois. 
                    Nombreux sont ceux s’étant aventurés sur cette terre de glace sans y revenir. 
                    Mirages, monstres et autochtones, de nombreuses légendes entourent la banquise.
                ',
                'x' => 1,
                'y' => 1
            ], [
                'name' => 'Montagnes Blanches',
                'percentage' => 4,
                'description' => '
                    Les Montagnes Blanches sont un ensemble de 9 montagnes formant une frontière naturelle entre les 
                    îles tropicales et les territoires enneigés du Grand Nord. Si vous vous perdez dans les montagnes, 
                    vous pourrez peut-être trouver la cité perdue de Kanghar, lieu mystique où toutes les races 
                    vivraient en paix. On dit cependant que la cité ne se montre qu’à ceux ayant tout perdu et ayant abandonné tout espoir.
                ',
                'x' => 2,
                'y' => 1
            ], [
                'name' => 'Terres du Nord',
                'percentage' => 4,
                'description' => '
                    Les Terres du Nord forment un vaste territoire contrôlé par les Inuits, population sachant très bien 
                    se battre sur terre comme sur mer et détestant les pirates. Ayant peu d’agriculture sur leur territoire, 
                    les inuits sont des commerçants avisés et des contacts partout dans IlShenar. 
                    Méfiez-vous avant de les attaquer, la capitale Darkhan possède une puissante flotte, et n’est jamais 
                    tombée face à ses ennemis.
                ',
                'x' => 3,
                'y' => 1
            ], [
                'name' => 'Terres Glacées',
                'percentage' => 4,
                'description' => '',
                'x' => 4,
                'y' => 1
            ],
            [
                'name' => 'Forêt Mystique',
                'percentage' => 4,
                'description' => '',
                'x' => 1,
                'y' => 2
            ],
            [
                'name' => 'Ile Volcanique',
                'percentage' => 4,
                'description' => '',
                'x' => 2,
                'y' => 2
            ],
            [
                'name' => 'Marécages',
                'percentage' => 4,
                'description' => '',
                'x' => 4,
                'y' => 2
            ],
            [
                'name' => 'Forêt de Jade',
                'percentage' => 4,
                'description' => '',
                'x' => 5,
                'y' => 2
            ],
            [
                'name' => 'Golfe des Naufragés',
                'percentage' => 4,
                'description' => '',
                'x' => 1,
                'y' => 3
            ],
            [
                'name' => 'Montagnes Grises',
                'percentage' => 4,
                'description' => '',
                'x' => 2,
                'y' => 3
            ],
            [
                'name' => 'Plaines de Drimmor',
                'percentage' => 4,
                'description' => '',
                'x' => 4,
                'y' => 3
            ],
            [
                'name' => 'Monts Lance-Pierre',
                'percentage' => 4,
                'description' => '',
                'x' => 5,
                'y' => 3
            ],
            [
                'name' => 'Forêt Morte',
                'percentage' => 4,
                'description' => '',
                'x' => 1,
                'y' => 4
            ],
            [
                'name' => 'Jungle',
                'percentage' => 4,
                'description' => '',
                'x' => 2,
                'y' => 4
            ],
            [
                'name' => 'Ile aux Forbans',
                'percentage' => 4,
                'description' => '',
                'x' => 3,
                'y' => 4
            ],
            [
                'name' => 'Baie des Tortues',
                'percentage' => 4,
                'description' => '',
                'x' => 4,
                'y' => 4
            ],
            [
                'name' => 'Forêt Tropicale',
                'percentage' => 4,
                'description' => '',
                'x' => 5,
                'y' => 4
            ],
            [
                'name' => 'Désert',
                'percentage' => 4,
                'description' => '',
                'x' => 1,
                'y' => 5
            ],
            [
                'name' => 'Oasis',
                'percentage' => 4,
                'description' => '',
                'x' => 2,
                'y' => 5
            ],
            [
                'name' => 'Terres du Sud',
                'percentage' => 4,
                'description' => '',
                'x' => 4,
                'y' => 5
            ],
            [
                'name' => 'Ile Assaron',
                'percentage' => 4,
                'description' => '',
                'x' => 5,
                'y' => 5
            ],
        ];
    }
}