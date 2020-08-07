<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 00:10
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SignUpType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('avatar', ChoiceType::class, [
                'choices' => [
                    '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20'
                ]
            ])
            ->add('username', TextType::class, [
                'label' => 'Pseudo'
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'first_name' => 'pass',
                'second_name' => 'confirm',
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmation']
            ])
            ->add('email_address', EmailType::class, [
                'label' => 'Adresse Mail'
            ])
            ->add('godfather', TextType::class, [
                'required' => false,
                'label' => 'Parrain'
            ])
            ->add('ship_name', TextType::class, [
                'label' => 'Nom du Navire'
            ])
            ->add('position', ChoiceType::class, [
                'choices' => [
                    '1 - Banquise' => '1',
                    '2 - Montagnes Blanches' => '2',
                    '3 - Terres du Nord' => '3',
                    '4 - Terres Glacées' => '4',
                    '5 - Forêt Mystique' => '5',
                    '6 - Ile Volcanique' => '6',
                    '7 - Marécages' => '7',
                    '8 - Forêt de Jade' => '8',
                    '9 - Golfe des Naufragés' => '9',
                    '10 - Montagnes Grises' => '10',
                    '11 - Plaines de Drimmor' => '11',
                    '12 - Monts Lance-Pierre' => '12',
                    '13 - Forêt Morte' => '13',
                    '14 - Jungle' => '14',
                    '15 - Ile aux Forbans' => '15',
                    '16 - Baie des Tortues' => '16',
                    '17 - Forêt Tropicale' => '17',
                    '18 - Désert' => '18',
                    '19 - Oasis' => '19',
                    '20 - Terres du Sud' => '20',
                    '21 - Ile Assaron' => '21'
                ]
            ])
            ->add('save', SubmitType::class, ['label' => 'Jouer Maintenant'])
        ;
    }
}