<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 28/04/2020
 * Time: 22:32
 */

namespace App\Form;


use App\Entity\Ship;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;

class EnrollCrewType extends AbstractType {
    private $user;

    public function __construct(EntityManagerInterface $em, Security $security) {
        $this->user = $em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('ships', EntityType::class, [
                'class' => Ship::class,
                'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('s')
                    ->where('s.owner = :owner')->setParameter('owner', $this->user);
                },
                'attr' => ['class' => 'input-white']
            ])
            ->add('seaman', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('explorer', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('gunner', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('cook', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('carpenter', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('surgeon', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0, 'class' => 'little-input']])
            ->add('save', SubmitType::class, ['label' => 'Recruter'])
        ;
    }

}