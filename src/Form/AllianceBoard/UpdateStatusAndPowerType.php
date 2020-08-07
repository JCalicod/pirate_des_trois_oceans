<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 25/06/2020
 * Time: 19:43
 */

namespace App\Form\AllianceBoard;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;

class UpdateStatusAndPowerType extends AbstractType
{
    private $alliance;

    public function __construct(Security $security)
    {
        $this->alliance = $security->getUser()->getAlliance();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('open', ChoiceType::class, [
                'choices' => [
                    'Recrutement Ouvert' => true,
                    'Recrutement Fermé' => false
                ],
                'data' => $this->alliance->getOpen()
            ])
            ->add('required_power', IntegerType::class, [
                'data' => $this->alliance->getRequiredPower(),
                'attr' => ['min' => 0]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'mini-validation'
                ]
            ])
        ;
    }
}