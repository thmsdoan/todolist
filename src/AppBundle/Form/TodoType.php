<?php

namespace AppBundle\Form;

use App\Entity\Todo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TodoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add(
            'name',
            TextType::class,
            array(
            'attr' => array(
                'class' => 'form-control',
                'style' => 'margin-bottom:15px'
                )
            )
        )
            ->add(
                'category',
                TextType::class,
                array(
                'attr' => array(
                    'class' => 'form-control',
                    'style' => 'margin-bottom:15px'
                )
            )
        )
            ->add(
                'description',
                TextareaType::class,
                array(
            'attr' => array(
                'class' => 'form-control',
                'style' => 'margin-bottom:15px'
                )
            )
        )
            ->add(
                'priority',
                ChoiceType::class,
                array(
            'choices' => array(
                'Incomplete' => 'Incomplete',
                'In Progress' => 'In Progress',
                'Completed'=>'Completed'),
                'attr' => array(
                    'class' => 'form-control',
                    'style' => 'margin-bottom:15px'
                )
            )
        )
            ->add(
                'due_date',
                DateTimeType::class,
                array('attr' => array(
                    'widget' => 'single-text',
                    'style' => 'margin-bottom:30px'
                )
            )
        );
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Todo'
        ));
    }
}
