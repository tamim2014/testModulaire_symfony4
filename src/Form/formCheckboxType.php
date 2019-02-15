<?php

namespace App\Form;

use App\Entity\TestCheckBox;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class formCheckboxType extends AbstractType
{   
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $entity=new TestCheckBox();
        $builder
            ->add('nom_test2')

            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
        
            ->add('cocher', CheckboxType::class, [
                'label'    => 'envois?',
                'required' => false,
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TestCheckBox::class,
        ]);
    }
}
