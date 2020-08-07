<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 28/04/2020
 * Time: 22:32
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SendMessageType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('receiver', TextType::class, [
                'attr' => [
                    'placeholder' => 'Destinataire'
                ]
            ])
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'Titre du message'
                ]])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'rows' => '6',
                    'placeholder' => 'Message'
                ]
            ])
            ->add('save', SubmitType::class, ['label' => 'Envoyer un message'])
        ;
    }

}