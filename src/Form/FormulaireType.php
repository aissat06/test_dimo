<?php

namespace App\Form;

use App\Entity\Formulaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCF')
            ->add('prenomCF')
            ->add('adresseCF')
            ->add('telephoneCF')
            ->add('emailCF')
            ->add('typeB')
            ->add('anneeC')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formulaire::class,
        ]);
    }
}
