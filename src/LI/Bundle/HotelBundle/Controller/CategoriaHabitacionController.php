<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\CategoriaHabitacion;
use LI\Bundle\HotelBundle\Form\CategoriaHabitacionType;

/**
 * CategoriaHabitacion controller.
 *
 */
class CategoriaHabitacionController extends Controller
{

    /**
     * Lists all CategoriaHabitacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:CategoriaHabitacion')->findAll();

        return $this->render('LIHotelBundle:CategoriaHabitacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CategoriaHabitacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CategoriaHabitacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoriahabitacion_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:CategoriaHabitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CategoriaHabitacion entity.
     *
     * @param CategoriaHabitacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CategoriaHabitacion $entity)
    {
        $form = $this->createForm(new CategoriaHabitacionType(), $entity, array(
            'action' => $this->generateUrl('categoriahabitacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CategoriaHabitacion entity.
     *
     */
    public function newAction()
    {
        $entity = new CategoriaHabitacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:CategoriaHabitacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoriaHabitacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:CategoriaHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaHabitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:CategoriaHabitacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CategoriaHabitacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:CategoriaHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaHabitacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:CategoriaHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CategoriaHabitacion entity.
    *
    * @param CategoriaHabitacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CategoriaHabitacion $entity)
    {
        $form = $this->createForm(new CategoriaHabitacionType(), $entity, array(
            'action' => $this->generateUrl('categoriahabitacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CategoriaHabitacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:CategoriaHabitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaHabitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categoriahabitacion_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:CategoriaHabitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CategoriaHabitacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:CategoriaHabitacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategoriaHabitacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoriahabitacion'));
    }

    /**
     * Creates a form to delete a CategoriaHabitacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoriahabitacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}