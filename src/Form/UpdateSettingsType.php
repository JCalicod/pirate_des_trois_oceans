<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 12/05/2020
 * Time: 21:10
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;

class UpdateSettingsType extends AbstractType {
    private $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('avatar', ChoiceType::class, [
                'choices' => [
                    '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20'
                ]
            ])
            ->add('old_password', PasswordType::class, [
                'required' => false
            ])
            ->add('password', PasswordType::class, [
                'required' => false
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'data' => $this->user->getDescription()
            ])
            ->add('save', SubmitType::class, [
                    'label' => 'Valider',
                    'attr' => [
                        'class' => 'validation'
                    ]
                ]
            )
        ;
    }
}