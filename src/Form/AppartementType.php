<?php

namespace App\Form;

use App\Entity\Appartements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Quartiers;

class AppartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
            ->add('latitude')
            ->add('longitude')
            ->add('nombre_foyer')
            ->add('id_quartier', EntityType::class, [
                'class' => Quartiers::class,
                'choice_label' => 'libelle',
                'label' => 'Quartier'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appartements::class,
        ]);
    }
}
