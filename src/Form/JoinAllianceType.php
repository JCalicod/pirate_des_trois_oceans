<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 29/06/2020
 * Time: 00:04
 */

namespace App\Form;


use App\Entity\Alliance;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class JoinAllianceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('alliance', EntityType::class, [
                'class' => Alliance::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.open = :open')
                        ->setParameter('open', true);
                },
                'choice_label' => 'name',
                'label' => ' ',
                'attr' => [
                    'class' => 'alliance-select'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Rejoindre',
                'attr' => [
                    'class' => 'choose-alliance'
                ]
            ])
        ;
    }
}