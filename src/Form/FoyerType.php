<?php

namespace App\Form;

use App\Entity\Foyer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Appartements;
use App\Entity\Quartiers;

class FoyerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pere')
            ->add('mere')
            ->add('nombre')
            ->add('revenu_pere')
            ->add('revenu_mere')
            ->add('id_appartement', EntityType::class, [
                'class' => Appartements::class,
                'choice_label' => 'adresse',
                'label' => 'Appartement'
            ])
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
            'data_class' => Foyer::class,
        ]);
    }
}
