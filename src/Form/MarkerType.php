<?php

namespace App\Form;

use App\Entity\Marker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MarkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('markerTitle')
            ->add('markerImage')
            ->add('markerEmail')
            ->add('tel')
            ->add('longitude')
            ->add('latitude')
            ->add('markerSlug')
            ->add('markerDescription')
            ->add('street')
            ->add('zipCode')
            ->add('filters')
            ->add('userAdmin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Marker::class,
        ]);
    }
}
