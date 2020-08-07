<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/06/2020
 * Time: 01:39
 */

namespace App\Form\AllianceBoard;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class LeaveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('save', SubmitType::class, [
                'label' => 'Quitter l\'Alliance',
                'attr' => [
                    'class' => 'validation'
                 ]
            ]);
    }
}