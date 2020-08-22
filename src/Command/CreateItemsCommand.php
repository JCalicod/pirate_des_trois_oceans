<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/08/2020
 * Time: 12:56
 */

namespace App\Command;


use App\Entity\Item;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateItemsCommand extends Command
{
    protected static $defaultName = 'items:create';
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates items for treasures.')
            ->setHelp('This command creates items if they do not exist yet.')
        ;
    }

    /**
     * @return array
     */
    protected function getTreasureItems(): array
    {
        return [
            1 => [
                'name' => 'Tentacule de Kraken',
                'description' => 'Vous permet de doubler le nombre de PA que vous gagnez toutes les 10 minutes.',
                'icon' => 'kraken_tentacle.png'
            ],
            2 => [
                'name' => 'Longue-vue Enchantée',
                'description' => 'Vous permet d\'espionner gratuitement et sans être repéré.',
                'icon' => 'field_glass.png'
            ],
            3 => [
                'name' => 'Amulette Magique',
                'description' => 'Vous rend invulnérable, aucun joueur ne peut vous attaquer.',
                'icon' => 'magic_amulet.png'
            ],
            4 => [
                'name' => 'Perroquet Maudit',
                'description' => 'Vous permet d\'empêcher les autres joueurs de vous espionner.',
                'icon' => 'cursed_parrot.png'
            ],
            5 => [
                'name' => 'Crochet des Trois Océans',
                'description' => 'Vous permet de dérober de la moitié de l\'Or d\'un joueur par jour.',
                'icon' => 'three_oceans_hook.png'
            ]
        ];
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Creation of treasure items',
            '==================================',
            ''
        ]);

        $items = $this->getTreasureItems();

        foreach ($items as $item)
        {
            // Si l'item n'existe pas déjà, on le crée
            if (!$this->em->getRepository(Item::class)->findBy(['name' => $item['name']])) {
                $new_item = new Item();
                $new_item->setName($item['name']);
                $new_item->setDescription($item['description']);
                $new_item->setIcon($item['icon']);
                $this->em->persist($new_item);
            }
        }
        $this->em->flush();

        $output->writeln([
            '==================================',
            'Finished'
        ]);
    }
}