<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Llamada;
use LI\Bundle\HotelBundle\Form\LlamadaType;

/**
 * Llamada controller.
 *
 */
class LlamadaController extends Controller
{

    /**
     * Lists all Llamada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:Llamada')->findAll();

        return $this->render('LIHotelBundle:Llamada:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Llamada entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Llamada();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('llamada_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:Llamada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Llamada entity.
     *
     * @param Llamada $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Llamada $entity)
    {
        $form = $this->createForm(new LlamadaType(), $entity, array(
            'action' => $this->generateUrl('llamada_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Llamada entity.
     *
     */
    public function newAction()
    {
        $entity = new Llamada();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:Llamada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Llamada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Llamada')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Llamada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Llamada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Llamada')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Llamada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Llamada entity.
    *
    * @param Llamada $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Llamada $entity)
    {
        $form = $this->createForm(new LlamadaType(), $entity, array(
            'action' => $this->generateUrl('llamada_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Llamada', 'attr' => array('class' => 'btn btn-block btn-info')));

        return $form;
    }
    /**
     * Edits an existing Llamada entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Llamada')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('llamada_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:Llamada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Llamada entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Llamada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Llamada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('llamada'));
    }

    /**
     * Creates a form to delete a Llamada entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('llamada_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Llamada', 'attr' => array('class' => 'btn btn-block btn-danger')))
            ->getForm()
        ;
    }
}
