<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Controller\TokenD;

class FormHMovil extends AbstractType  {
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
                ->add('cinco', CheckboxType::class,['required' => false])
                ->add('cuatro', CheckboxType::class,['required' => false])
                ->add('tres', CheckboxType::class,['required' => false])
                ->add('save1', SubmitType::class,['label' => 'Aplicar'])
                
                ->add('Melia', CheckboxType::class,['required' => false])
                ->add('Iberostar', CheckboxType::class,['required' => false])
                ->add('Roc',CheckboxType::class,['required' => false])
                ->add('BlueDiamond', CheckboxType::class,['required' => false])
                ->add('Solways', CheckboxType::class,['required' => false])
                ->add('Paradisus', CheckboxType::class,['required' => false])
                ->add('save2', SubmitType::class,['label' => 'Aplicar'])
                
                ->add('bajo',CheckboxType::class,['required' => false])
                ->add('economico', CheckboxType::class,['required' => false])
                ->add('medio', CheckboxType::class,['required' => false])
                ->add('alto', CheckboxType::class,['required' => false])
                ->add('lujoso', CheckboxType::class,['required' => false])
                ->add('muycaro', CheckboxType::class,['required' => false])
                ->add('save3', SubmitType::class,['label' => 'Aplicar']);
                
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => TokenD::class,]);
    } 
}
