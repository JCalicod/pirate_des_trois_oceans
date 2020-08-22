<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 22/08/2020
 * Time: 19:04
 */

namespace App\Form;


use App\Entity\Lands;
use App\Entity\Ship;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;

class ProposeTreasureCodeType extends AbstractType
{
    private $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, [
                'attr' => [
                    'placeholder' => 'Code à trouver'
                ]
            ])
            ->add('position', EntityType::class, [
                'class' => Lands::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->join(Ship::class, 's', 'WITH', 's.position = l')
                        ->where('s.owner = :owner')
                        ->setParameter('owner', $this->user)
                        ->andWhere('s.explorer > :explorer')
                        ->setParameter('explorer', 0)
                        ->distinct()
                    ;
                },
                'label' => ''
            ])
            ->add('propose', SubmitType::class, [
                'label' => 'Proposer',
                'attr' => [
                    'class' => 'propose'
                ]
            ])
        ;
    }
}