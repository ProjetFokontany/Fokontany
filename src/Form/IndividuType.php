<?php

namespace App\Form;

use App\Entity\Individu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\SituationMatrimoniale;
use App\Entity\NiveauEtude;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Foyer;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class IndividuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $date = new \DateTime();
        $year = $date->format('Y'); // This variable get the current year

        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class,[
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme'
                ]
            ])
            ->add('numero_cin')
            ->add('fonction')
            ->add('date_naiss', BirthdayType::class, [
            ])
            ->add('id_situation_matrimoniale', EntityType::class, [
                'class' => SituationMatrimoniale::class,
                'choice_label' => 'libelle',
                'label' => 'Situation matrimoniale'

            ])
            ->add('id_niveau_etude', EntityType::class, [
                'class' => NiveauEtude::class,
                'choice_label' => 'libelle',
                'label' => 'Niveau d\'etude'
            ])
            ->add('id_foyer', EntityType::class, [
                'class' => Foyer::class,
                'choice_label' => 'pere',
                'label' => 'Foyer'
            ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Individu::class,
        ]);
    }
}
