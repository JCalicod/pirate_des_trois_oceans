<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 13/06/2020
 * Time: 19:23
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateAllianceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom',
                    'maxlength' => 30
                ]
            ])
            ->add('abbreviation', TextType::class, [
                'label' => 'Initiales (4 Lettres)',
                'attr' => [
                    'placeholder' => 'Initiales (4 Lettres)',
                    'maxlength' => 4
                ]
            ])
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'green' => 'green',
                    'purple' => 'purple',
                    'red' => 'red',
                    'blue' => 'blue',
                    'black' => 'black',
                    'yellow' => 'yellow',
                    'orange' => 'orange'
                ],
                'expanded' => true,
                'multiple' => false,
                'label_attr' => ['class' => 'radio-inline'],
                'label' => 'Couleur',
                'attr' => [
                    'class' => 'mt-2'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Description',
                    'maxlength' => 1500
                ]
            ])
            ->add('save', SubmitType::class, [
                    'label' => 'Créer l\'Alliance (20 000 PO)',
                    'attr' => [
                        'class' => 'validation'
                    ]
                ]
            )
        ;
    }

}