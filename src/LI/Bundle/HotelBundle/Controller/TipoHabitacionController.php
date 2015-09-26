<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\TipoHabitacion;
use LI\Bundle\HotelBundle\Form\TipoHabitacionType;

/**
 * TipoHabitacion controller.
 *
 */
class TipoHabitacionController extends Controller
{

    /**
     * Lists all TipoHabitacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:TipoHabitacion')->findAll();

        return $this->render('LIHotelBundle:TipoHabitacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoHabitacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoHabitacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipohabitacion_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:TipoHabitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoHabitacion entity.
     *
     * @param TipoHabitacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoHabitacion $entity)
    {
        $form = $this->createForm(new TipoHabitacionType(), $entity, array(
            'action' => $this->generateUrl('tipohabitacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoHabitacion entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoHabitacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:TipoHabitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoHabitacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:TipoHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoHabitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:TipoHabitacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoHabitacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:TipoHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoHabitacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:TipoHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoHabitacion entity.
    *
    * @param TipoHabitacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoHabitacion $entity)
    {
        $form = $this->createForm(new TipoHabitacionType(), $entity, array(
            'action' => $this->generateUrl('tipohabitacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoHabitacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:TipoHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoHabitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipohabitacion_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:TipoHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoHabitacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:TipoHabitacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoHabitacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipohabitacion'));
    }

    /**
     * Creates a form to delete a TipoHabitacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipohabitacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
