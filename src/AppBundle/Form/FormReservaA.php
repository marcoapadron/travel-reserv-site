<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class FormReservaA extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
                ->add('fechaRecogida', DateType::class,['widget'=>'single_text'])
                ->add('horaRecogida', TimeType::class,['widget'=>'single_text'])
                ->add('fechaEntrega', DateType::class,['widget'=>'single_text'])
                ->add('horaEntrega', TimeType::class,['widget'=>'single_text'])
                ->add('region', ChoiceType::class,[
                    'choices'=>[
                        "-"=>NULL,
                        'La Habana'=>'La Habana',
                        'Pinar del Rio'=>'Pinar del Rio',
                        'Artemisa'=>'Artemisa',
                        'Mayabeque'=>'Mayabeque',
                        'Varadero'=>'Varadero',
                        'Villa Clara'=>'Villa Clara',
                        'Cien Fuegos'=>'Cien Fuegos',
                        'Santi Spiritus'=>'Santi Spiritus',
                        'Ciego de Avila'=>'Ciego de Avila',
                        'Camaguey'=>'Camaguey',
                        'Las Tunas'=>'Las Tunas',
                        'Holgin'=>'Holgin',
                        'Gramma'=>'Gramma',
                        'Santiago de Cuba'=>'Santiago de Cuba',
                        'Guantanamo'=>'Guantanamo',
                    ]])
                ->add('lugar', ChoiceType::class,['choices'=>["-"=>NULL,'Aeropuerto'=>'Aeropuerto','Ciudad'=>'Ciudad']])
                ->add('sillaBebe', ChoiceType::class,['choices'=>['No'=>False,'1'=>True]])
                ->add('conductorExtra', ChoiceType::class,['choices'=>['No'=>0,'1'=>1,'2'=>2],'required'   => false])
                ->add('nombre', TextType::class)
                ->add('apellido', TextType::class)
                ->add('email', EmailType::class)
                ->add('aerolinea', TextType::class)
                ->add('identidad', TextType::class,['required'=> false])
                ->add('vuelo', TextType::class)
                ->add('save', SubmitType::class, ['label' => 'Reservar Auto']);
    }
}