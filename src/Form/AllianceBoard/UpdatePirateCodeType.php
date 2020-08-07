<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 24/06/2020
 * Time: 23:47
 */

namespace App\Form\AllianceBoard;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;

class UpdatePirateCodeType extends AbstractType
{
    private $alliance;

    public function __construct(Security $security)
    {
        $this->alliance = $security->getUser()->getAlliance();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pirate_code', TextType::class, [
                'label' => '',
                'data' => $this->alliance->getPirateCode()
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