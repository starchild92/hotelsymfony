<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail', null, array('label' => 'Correo Electronico'))
            ->add('password', 'password', array('label' => 'Contraseña'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Login'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_login';
    }
}
