<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompensacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('porcentaje')
            ->add('deDias', 'text', array('label' => 'Dias Despúes al Cobro de la Compensación'))
            ->add('aDias', 'text', array('label' => 'Dias Anteriores al Cobro de la Compensación'))
            ->add('deHoras', 'text', array('label' => 'Horas Despúes al Cobro de la Compensación'))
            ->add('aHoras', 'text', array('label' => 'Horas Anteriores al Cobro de la Compensación'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Compensacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_compensacion';
    }
}
