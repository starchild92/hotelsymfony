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

    /**
     * Lists all Habitacion entities.
     *
     */
    public function indexAction()
    {
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
        $entity = new Habitacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $tipo = $entity->getTipo();
            $bebidas = $tipo->getbebidasMinibar();

            foreach ($bebidas as $bebida) {
                $bebida->settipoHabitacion($tipo);
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

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Habitacion entity.
     *
     */
    public function newAction()
    {
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
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Habitacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Habitacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Habitacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
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
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Habitacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $tipo = $entity->getTipo();
            $bebidas = $tipo->getbebidasMinibar();

            foreach ($bebidas as $bebida) {
                $bebida->settipoHabitacion($tipo);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('habitacion_edit', array('id' => $id)));
        }

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
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Habitacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Habitacion entity.');
            }

            $em->remove($entity);
            $em->flush();
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
            ->setMethod('Eliminar')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
