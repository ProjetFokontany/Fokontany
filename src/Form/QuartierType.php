<?php

namespace App\Form;

use App\Entity\Quartiers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Fokontany;

class QuartierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('localisation')
            ->add('nombre_foyer')
            ->add('nombre_appartement')
            ->add('id_fokontany', EntityType::class, [
                'class' => Fokontany::class,
                'choice_label' => 'libelle',
                'label' => 'Fokontany'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Quartiers::class,
        ]);
    }
}
