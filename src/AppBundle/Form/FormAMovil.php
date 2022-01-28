<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Controller\TokenC;

class FormAMovil extends  AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
                ->add('Economico', CheckboxType::class,['required' => false])
                ->add('Medio', CheckboxType::class,['required' => false])
                ->add('for4', CheckboxType::class,['required' => false])
                ->add('SUV', CheckboxType::class,['required' => false])
                ->add('EPremium', HiddenType::class,['required' => false])
                ->add('EPremiumPlus', HiddenType::class,['required' => false])
                ->add('FLujo',HiddenType::class,['required' => false])
                ->add('save1', SubmitType::class, ['label' => 'Aplicar'])
                ->add('Cubacar', HiddenType::class,['required' => false])
                ->add('Havanautos', HiddenType::class,['required' => false])
                ->add('RentacarVIA',HiddenType::class,['required' => false])
                ->add('manual', CheckboxType::class,['required' => false])
                ->add('automatica', CheckboxType::class,['required' => false])
                ->add('save2', SubmitType::class, ['label' => 'Aplicar'])
                ->add('pobre', CheckboxType::class,['required' => false])
                ->add('barato', CheckboxType::class,['required' => false])
                ->add('caro', CheckboxType::class,['required' => false])
                ->add('save3', SubmitType::class, ['label' => 'Aplicar']);
                
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => TokenC::class,]);
    } 
}
