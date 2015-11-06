<?php

namespace LI\Bundle\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $permissions = array(
            'ROLE_USER'        => 'Usuario',
            'ROLE_ADMIN' => 'Administrador'
        );

        $builder
            ->add('nombre', 'text', array(
                'label' => 'Nombre'))
            ->add('apellido', 'text', array(
                'label' => 'Apellido'))
            ->add('fecha_nac', 'date', array(
                'label' => 'Fecha de Nacimiento',
                'years' => range(date('Y') -18, date('Y') -115)
            ))
            ->add('enabled', 'choice', array(
                'label' => 'Estado',
                'choices'   => array(
                    '1' => 'Activo',
                    '0' => 'Inactivo')))
            ->add('roles','choice',array(
                    'label'   => 'Elija el Rol',
                    'choices' => $permissions,
                    'multiple' => true
                ))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LI\Bundle\HotelBundle\Entity\Usuario',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'li_bundle_hotelbundle_usuario';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}
