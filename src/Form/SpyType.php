<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 04/07/2020
 * Time: 18:34
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SpyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'attr' => [
                    'placeholder' => 'Pseudo',
                    'class' => 'input-white mb-2'
                ]
            ])
            ->add('spy', SubmitType::class, [
                'label' => 'Espionner',
                'attr' => [
                    'class' => 'validation'
                ]
            ])
        ;
    }
}