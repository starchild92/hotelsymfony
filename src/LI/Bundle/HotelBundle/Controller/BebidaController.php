<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Bebida;
use LI\Bundle\HotelBundle\Form\BebidaType;

/**
 * Bebida controller.
 *
 */
class BebidaController extends Controller
{

    /**
     * Lists all Bebida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:Bebida')->findAll();

        return $this->render('LIHotelBundle:Bebida:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Bebida entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Bebida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bebida_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:Bebida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Bebida entity.
     *
     * @param Bebida $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bebida $entity)
    {
        $form = $this->createForm(new BebidaType(), $entity, array(
            'action' => $this->generateUrl('bebida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Bebida entity.
     *
     */
    public function newAction()
    {
        $entity = new Bebida();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:Bebida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bebida entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Bebida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bebida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Bebida:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bebida entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Bebida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bebida entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Bebida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Bebida entity.
    *
    * @param Bebida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bebida $entity)
    {
        $form = $this->createForm(new BebidaType(), $entity, array(
            'action' => $this->generateUrl('bebida_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Bebida entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Bebida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bebida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bebida_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:Bebida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bebida entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Bebida')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bebida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bebida'));
    }

    /**
     * Creates a form to delete a Bebida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bebida_delete', array('id' => $id)))
            ->setMethod('Eliminar')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
