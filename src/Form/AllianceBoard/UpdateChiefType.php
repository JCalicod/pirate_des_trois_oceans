<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 23/06/2020
 * Time: 21:38
 */

namespace App\Form\AllianceBoard;


use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;

class UpdateChiefType extends AbstractType
{
    private $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chief', EntityType::class, [
                'class' => User::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.alliance = :alliance')
                        ->setParameter('alliance', $this->user->getAlliance())
                        ->andWhere('u != :chief')
                        ->setParameter('chief', $this->user)
                        ;
                } ,
                'choice_label' => 'username',
                'data' => $this->user->getUsername(),
                'label' => ''
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Nommer',
                'attr' => [
                    'class' => 'mini-validation'
                ]
            ])
        ;
    }

}