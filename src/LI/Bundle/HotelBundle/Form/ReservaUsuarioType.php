<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;

class ReservaUsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estadoReserva','choice', array(
                   'choices'  => array(
                    'Por Concretar' => 'Por Concretar',
            )))
            ->add('codigoReserva', 'hidden')
            ->add('habitacion')
            ->add('cantidadPersonas')
            ->add('cantidadNinos')
            ->add('diasReserva')
            ->add('fecha_desde', 'date', array(
                'years' => range(date('Y'), date('Y')),
                'months' => range(date('m'), date('m') +2),
                'format' => 'dd MMMM yyyy',
                'label' => 'Fecha de Inicio de la Reserva',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Reserva',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_reserva';
    }
}
