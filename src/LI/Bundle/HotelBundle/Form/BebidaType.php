<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BebidaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoBebida','choice', array(
                   'choices'  => array(
                    'Selecciona'=>'Selecciona un tipo',
                    'Cerveza' => 'Cerveza',
                    'Vino' => 'Vino',
                    'Refresco' => 'Refresco',
                    'Alcohol' => 'Alcohol',
            ), 'label'=>'Tipo de Bebida'))
            ->add('precio')
            ->add('cantidad')
            ->add('marca')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Bebida'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_bebida';
    }
}
