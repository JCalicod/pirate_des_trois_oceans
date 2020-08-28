<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 20/08/2020
 * Time: 14:29
 */

namespace App\Service;


use App\Entity\Clues;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class TreasureServices
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return string
     */
    private function getRandomWord(): string
    {
        $words = [
            'mer',
            'ile',
            'cap',
            'mat',
            'bois',
            'cuir',
            'arme',
            'vent',
            'sabre',
            'canon',
            'ocean',
            'vague',
            'pirate',
            'tortue',
            'tresor',
            'navire',
            'matelot',
            'pillage',
            'voilier',
            'fregate',
            'ilshenar',
            'naviguer',
            'abordage',
            'pavillon',
            'canonnier',
            'cuisinier',
            'capitaine',
            'boucanier',
            'braconnage',
            'chirurgien',
            'aventurier',
            'gouvernail',
            'explorateur',
            'charpentier',
            'moussaillon',
            'appareiller',
            'aiguilletage'

        ];

        return $words[array_rand($words)];
    }

    /**
     * @return array
     */
    private function getAllPositions(): array
    {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21];
    }

    /**
     * @param $value
     * @param array $array
     * @param User $user
     * @return array
     */
    private function createClue($value, array $array, User $user): array
    {
        // On calcule la nouvelle position de l'indice
        $index = array_rand($array);
        $position = $array[$index];
        unset($array[$index]);
        $array = array_values($array);

        // On crée l'indice
        $clue = new Clues();
        $clue->setClue($value);
        $clue->setPosition($position);
        $clue->setUser($user);
        $clue->setDiscovered(false);
        $this->em->persist($clue);

        return $array;
    }

    /**
     * @param User $user
     */
    public function removeTreasureClues(User $user): void
    {
        $clues = $this->em->getRepository(Clues::class)->findBy(['user' => $user]);
        foreach ($clues as $clue) {
            $this->em->remove($clue);
        }
    }

    /**
     * @param User $user
     * @throws \Exception
     */
    public function createTreasure(User $user): void
    {
        $this->removeTreasureClues($user);

        $treasure_word = $this->getRandomWord();
        $length = strlen($treasure_word);
        $letters = str_split($treasure_word);
        $positions = $this->getAllPositions();
        $treasure_position = random_int(1, 21);
        $user->setTreasureWord($treasure_word);
        $user->setTreasurePosition($treasure_position);

        // Les indices sur le mot
        for ($i = 0; $i < $length; $i++) {
            // Lettre de l'indice
            $letter_pos = array_rand($letters);
            $letter = $letters[$letter_pos];
            unset($letters[$letter_pos]);
            $letters = array_values($letters);

            // Position de l'indice
            $positions = $this->createClue($letter, $positions, $user);
        }

        $positions = $this->createClue($treasure_position, $positions, $user);

        $this->createClue($length, $positions, $user);
    }
}