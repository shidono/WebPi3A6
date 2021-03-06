<?php

namespace App\Form;

use App\Entity\Psycho;
use App\Entity\Simple;
use App\Entity\Suivi;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuiviType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class,[
                'label'=>'Nom du psy : ',
                'attr'=>[
                    'placeholder'=>'Nom du psy',
                    'class' => 'form-control',
                    'readonly' => true,
                    'value' => 'mgkpsy'
                ]
            ])
            ->add('client',TextType::class,[
                'label'=>'Nom du client : ',
                'attr'=>[
                    'placeholder'=>'Nom du client',
                    'class' => 'form-control'
                ]
            ])
            ->add('titreS',TextType::class,[
                'label'=>'Titre : ',
                'attr'=>[
                    'placeholder'=>'Titre du suivi',
                    'class' => 'form-control'
                ]
            ])
            ->add('dateDs',DateType::class,[
                'widget' => 'single_text',
                'label'=> 'Date debut : ',
                'attr'=>[
                    'placeholder'=>'Nom du client',
                    'class' => 'form-control',
                    'value' => '2011-09-29'
                ]

            ])
            ->add('dateFs',DateType::class,[
                'widget' => 'single_text',
                'label'=> 'Date fin : ',
                'attr'=>[
                    'placeholder'=>'Nom du client',
                    'class' => 'form-control',
                    'value' => '2011-09-29'
                ]
            ])
            ->add('tempsDs',TimeType::class,[
                'widget' => 'single_text',
                'label'=> 'Temps debut : ',
                'attr'=>[
                    'placeholder'=>'Nom du client',
                    'class' => 'form-control',
                    'value' => '01:00:00'
                ]
            ])
            ->add('tempsFs',TimeType::class,[
                'widget' => 'single_text',
                'label'=> 'Temps fin : ',
                'attr'=>[
                    'placeholder'=>'Nom du client',
                    'class' => 'form-control',
                    'value' =>'02:00:00'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Suivi::class,
        ]);
    }
}
