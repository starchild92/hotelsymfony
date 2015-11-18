<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoriaHabitacion')
            ->add('tipoHabitacion')
            ->add('espacioInterno')
            ->add('servicios',
                    'collection', array(
                        'type' => new ServicioType(),
                        'cascade_validation' => true,
                        'attr' => array('class' => 'servicios'),
                        'allow_add'=>'true',
                        'by_reference'=>'false',
                        'allow_delete' =>'true',
                        'data_class' => null,
                        'label' => 'Servicios Disponibles en la Habitación'))
            ->add('bebidasMinibar',
                    'collection',array(
                        'type'=> new BebidaType(),
                        'cascade_validation' => true,
                        'attr' => array('class' => 'tags'),
                        'allow_add'=>'true',
                        'by_reference'=>'false',
                        'allow_delete' =>'true',
                        'data_class' => null,
                        'label' => 'Bebidas del Minibar'
                        )
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Tipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_tipo';
    }
}
