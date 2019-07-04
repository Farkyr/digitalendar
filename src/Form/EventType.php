<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('pictureFile', FileType::class, [
                'mapped' => false,
                'required' => false,
            ])
            ->add('city')
            ->add('description')
            ->add('dateStart', DateType::class, [
                'label' => 'Date de début'
            ])
            ->add('dateEnd', DateType::class, [
                'label' => 'Date de fin'
            ])
            ->add('url')
            ->add('price')
            ->add('language');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}