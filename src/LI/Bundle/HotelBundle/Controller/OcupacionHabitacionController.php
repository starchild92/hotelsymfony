<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\OcupacionHabitacion;
use LI\Bundle\HotelBundle\Form\OcupacionHabitacionType;

/**
 * OcupacionHabitacion controller.
 *
 */
class OcupacionHabitacionController extends Controller
{

    /**
     * Lists all OcupacionHabitacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->findAll();

        return $this->render('LIHotelBundle:OcupacionHabitacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new OcupacionHabitacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OcupacionHabitacion();
        $session = $this->get('session');
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $categoria = $entity->getCategoriaHabitacion()->getNombre();
        $tipo = $entity->getTipoHabitacion()->getNombre();

        $entities = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->findAll();

        $puede_insertar = true;
        foreach ($entities as $key) {
            if ($key->getCategoriaHabitacion()->getNombre() == $categoria
                && $key->getTipoHabitacion()->getNombre() == $tipo) {
                $puede_insertar = false;
                $a = $key->getTipoHabitacion()->getNombre();
                $b = $key->getCategoriaHabitacion()->getNombre();
            }
        }

        if (!$puede_insertar) {
            // mensaje de no pudo insertar porque ya existe esa combinacion de tipo y categoria
            $session->getFlashBag()->add('ocupacion_malos', 'La configuración de tipo '.$tipo.' y categoría '.$categoria.' ya existe. Si deseas modificarla ve a todas y elige la que deseas editar.');
            return $this->render('LIHotelBundle:OcupacionHabitacion:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView(),
            ));
        }

        if ($form->isValid() && $puede_insertar) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            $session->getFlashBag()->add('ocupacion_buenos', 'La configuración de tipo '.$tipo.' y categoría '.$categoria.', se ha agregado satisfactoriamente');

            return $this->indexAction();
        }
    }

    /**
     * Creates a form to create a OcupacionHabitacion entity.
     *
     * @param OcupacionHabitacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OcupacionHabitacion $entity)
    {
        $form = $this->createForm(new OcupacionHabitacionType(), $entity, array(
            'action' => $this->generateUrl('ocupacionhabitacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new OcupacionHabitacion entity.
     *
     */
    public function newAction()
    {
        $entity = new OcupacionHabitacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:OcupacionHabitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OcupacionHabitacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:OcupacionHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OcupacionHabitacion entity.
    *
    * @param OcupacionHabitacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OcupacionHabitacion $entity)
    {
        $form = $this->createForm(new OcupacionHabitacionType(), $entity, array(
            'action' => $this->generateUrl('ocupacionhabitacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Ocupacion', 'attr' => array('class' => 'btn btn-block btn-info')));

        return $form;
    }
    /**
     * Edits an existing OcupacionHabitacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $entity = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $categoria = $entity->getCategoriaHabitacion()->getNombre();
        $tipo = $entity->getTipoHabitacion()->getNombre();

        $entities = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->findAll();

        $puede_insertar = true;
        foreach ($entities as $key) {
            if ($key->getCategoriaHabitacion()->getNombre() == $categoria
                && $key->getTipoHabitacion()->getNombre() == $tipo && $entity->getId() != $id) {
                $puede_insertar = false;
                $a = $key->getTipoHabitacion()->getNombre();
                $b = $key->getCategoriaHabitacion()->getNombre();
            }
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if (!$puede_insertar) {
            $session->getFlashBag()->add('ocupacion_malos', 'La configuración de tipo '.$tipo.' y categoría '.$categoria.' ya existe. Si deseas modificarla ve a todas y elige la que deseas editar.');
            return $this->render('LIHotelBundle:OcupacionHabitacion:edit.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }

        if ($editForm->isValid()) {
            $em->flush();
            $session->getFlashBag()->add('ocupacion_buenos', 'Se han guardado los cambios satisfactoriamente.');
            return $this->indexAction();
        }

        return $this->render('LIHotelBundle:OcupacionHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OcupacionHabitacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OcupacionHabitacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ocupacionhabitacion'));
    }

    /**
     * Creates a form to delete a OcupacionHabitacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ocupacionhabitacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Ocupación', 'attr' => array('class' => 'btn btn-danger btn-block')))
            ->getForm()
        ;
    }
}
