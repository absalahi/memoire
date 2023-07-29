<?php

namespace App\Form;

use App\Entity\Dossier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CreerDossierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom',TextType::class,[
        
                "label" => "Prenom",
                "attr" => [
                    "class" =>"form-control border-input"
                ]
            ])
            ->add('nom', TextType::class,[

                "label" => "Nom",
                "attr" => [
                    "class"=>"form-control border-input"
                ]
            ])
            ->add('date_naiss', DateType::class,[

                "label" => "Date_naiss",
                "attr" => [
                    "class" =>"form-control border-input"
                ]
                
            ])
            ->add('lieu_naiss', TextType::class,[

                "label" => "Lieu_naiss",
                "attr" => [
                    "class"=>"form-control border-input"
                ]
            ])
            ->add('sexe', TextType::class,[
                "label" => "Sexe",
                "attr" => [
                    "class"=>"form-control border-input"
                ]
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
