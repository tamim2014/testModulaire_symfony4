<?php

namespace App\Form;

use App\Entity\Lot;
use App\Entity\Passeport2;
use App\Entity\Observation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PasseportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('montant') 
            
            ->add('observation', EntityType::class, [
                'class' => Observation::class,
                'choice_label' => 'Label'             
            ])
            
            ->add('lot', EntityType::class,  [ 
                'class' => Lot::class,            
                'choice_label' => 'numero'             
            ])       
               
            ->add('date_export', DateType::class, [
                // renders it as a single text box (source: symfony.com/doc/current/reference/forms/types/date.html)
                'widget' => 'single_text',
            ])
            ->add('date_expedie', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('date_arrive', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('date_livraison', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('dossier_expedie', ChoiceType::class, array(
                //source: https://www.codeproject.com/Articles/1182172/Display-Checkbox-Group-Properly-in-Twig
                'mapped' => false,
                'required' => false,
                'expanded' => true,
                'multiple' => true,          
                'choices' => ['Envoi' => 'Envois'],             
           ))
           ->add('passeport_arrive', ChoiceType::class, array(
                'mapped' => false,
                'required' => false,
                'expanded' => true,
                'multiple' => true,          
                'choices' => ['Retour' => 'Retours'],             
           ))
           ->add('passeport_livre', ChoiceType::class, array(
                'mapped' => false,
                'required' => false,
                'expanded' => true,
                'multiple' => true,          
                'choices' => ['Distrib' => 'Distribué']             
           ))

           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Passeport2::class,
        ]);
    }
}
