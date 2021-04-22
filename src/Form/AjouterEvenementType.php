<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjouterEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreEv')
            ->add('typeEv')
            ->add('emplacementEv')
            ->add('dateDev')
            ->add('dateFev')
            ->add('tempsDev')
            ->add('tempsFev')
            ->add('ageMin')
            ->add('ageMax')
            ->add('idAct')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
