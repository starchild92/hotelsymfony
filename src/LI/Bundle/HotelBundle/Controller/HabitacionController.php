<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Habitacion;
use LI\Bundle\HotelBundle\Form\HabitacionType;

/**
 * Habitacion controller.
 *
 */
class HabitacionController extends Controller
{
    public function es_admin(){
        $user = $this->getUser();
        if ($user != null) {
            $roles = $user->getRoles();
            return in_array('ROLE_ADMIN', $roles);
        }
        return false;
    }
    /**
     * Lists all Habitacion entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:Habitacion')->findAll();

        return $this->render('LIHotelBundle:Habitacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Habitacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = $this->getUser(); if ($user == '') { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $entity = new Habitacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $tipo = $entity->getTipo();
            $bebidas = $tipo->getbebidasMinibar();
            $servicios = $tipo->getServicios();

            if($bebidas != null){
                foreach ($bebidas as $bebida) {
                    $bebida->settipoHabitacion($tipo);
                }
            }else{
                $this->get('session')
                    ->getFlashBag()
                    ->add('msj_habitacion', 'No has agregado bebidas al minibar.');
            }

            if($servicios != null){
                foreach ($servicios as $servicio) {
                    $servicio->setTipo($tipo);
                }
            }else{
                $this->get('session')
                    ->getFlashBag()
                    ->add('msj_habitacion', 'No has agregado ningun servicio.');
            }

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('habitacion_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:Habitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Habitacion entity.
     *
     * @param Habitacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Habitacion $entity)
    {
        $form = $this->createForm(new HabitacionType(), $entity, array(
            'action' => $this->generateUrl('habitacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear Nueva Habitación', 'attr' => array('class'=>'btn btn-block btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Habitacion entity.
     *
     */
    public function newAction()
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $entity = new Habitacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:Habitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
}

    /**
     * Finds and displays a Habitacion entity.
     *
     */
    public function showAction($id)
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe esta habitación.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $user = $this->getUser();
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Habitacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'user' => $user
        ));
    }

    /**
     * Displays a form to edit an existing Habitacion entity.
     *
     */
    public function editAction($id)
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        if ($this->es_admin()) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

            if (!$entity) {
                $session = $this->get('session');
                $session->getFlashBag()->add('administrador_malos', 'No existe esta habitación.');
                return $this->redirect($this->generateUrl('_admin'));
            }

            $editForm = $this->createEditForm($entity);
            $deleteForm = $this->createDeleteForm($id);

            return $this->render('LIHotelBundle:Habitacion:edit.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->redirect($this->generateUrl('LIHotelBundle_homepage'));
    }

    /**
    * Creates a form to edit a Habitacion entity.
    *
    * @param Habitacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Habitacion $entity)
    {
        $form = $this->createForm(new HabitacionType(), $entity, array(
            'action' => $this->generateUrl('habitacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            /*'attr'   => array('class' => 'form-inline')*/
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Habitación', 'attr' => array('class' => 'btn btn-info btn-block')));
        $form->add('estado','choice', array(
                   'choices'  => array(
                    'Libre' => 'Libre',
                    'Ocupada' => 'Ocupada',
                    'Reservada' => 'Reservada',
                    'Indispuesta' => 'Indispuesta'
            ),
                   'disabled' => 'disabled'));

        return $form;
    }
    /**
     * Edits an existing Habitacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            $session->getFlashBag()->add('administrador_malos', 'No existe esta habitación.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $tipo = $entity->getTipo();
            $bebidas = $tipo->getbebidasMinibar();
            $servicios = $tipo->getServicios();

            foreach ($bebidas as $bebida) {
                $bebida->settipoHabitacion($tipo);
            }

            foreach ($servicios as $servicio) {
                $servicio->setTipo($tipo);
            }

            $em->flush();
            $session->getFlashBag()->add('habitacion_buenos', 'Se ha modificado los datos de la habitacion con exito.');
            return $this->redirect($this->generateUrl('habitacion_edit', array('id' => $id)));
        }

        //Añadir mensaje aqui "Se ha creado satisfactoriamente la nueva habitación"
        return $this->render('LIHotelBundle:Habitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Habitacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

            if (!$entity) {
                $session = $this->get('session');
                $session->getFlashBag()->add('administrador_malos', 'No existe esta habitación.');
                return $this->redirect($this->generateUrl('_admin'));
            }

            $em->remove($entity);
            $em->flush();
            $session = $this->get('session');
            $session->getFlashBag()->add('habitacion_buenos', 'Se ha eliminado con exito la habitación y todo lo relacionado con ella.');
        }

        return $this->redirect($this->generateUrl('habitacion'));
    }

    /**
     * Creates a form to delete a Habitacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habitacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Habitación', 'attr' => array('class'=>'btn btn-block btn-danger')))
            ->getForm()
        ;
    }

    public function showuserAction($id)
    {
        $user = $this->getUser(); if ($user == '') { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('usuario_malos', 'No existe esta habitación.');
            return $this->redirect($this->generateUrl('_user'));
        }

        $user = $this->getUser();

        return $this->render('LIHotelBundle:Habitacion:showuser.html.twig', array(
            'entity'      => $entity,
            'user' => $user
        ));
    }

    public function indexuserAction(){
        $user = $this->getUser(); if ($user == '') { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $entities = $em->getRepository('LIHotelBundle:Habitacion')->findAll();
        return $this->render('LIHotelBundle:Habitacion:indexuser.html.twig', array(
            'entities' => $entities,
            'user' => $user
        ));
    }

}
