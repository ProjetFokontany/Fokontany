<?php

namespace App\Form;

use App\Entity\Individu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IndividuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('date_naiss')
            ->add('fonction')
            ->add('numero_cin')
            ->add('id_niveau_etude')
            ->add('id_situation_matrimoniale')
            ->add('id_foyer')
            ->add('sexe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Individu::class,
        ]);
    }
}
