<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Compensacion;
use LI\Bundle\HotelBundle\Form\CompensacionType;

/**
 * Compensacion controller.
 *
 */
class CompensacionController extends Controller
{

    /**
     * Lists all Compensacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LIHotelBundle:Compensacion')->findAll();

        return $this->render('LIHotelBundle:Compensacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Compensacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Compensacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('compensacion_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:Compensacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Compensacion entity.
     *
     * @param Compensacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Compensacion $entity)
    {
        $form = $this->createForm(new CompensacionType(), $entity, array(
            'action' => $this->generateUrl('compensacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Compensacion entity.
     *
     */
    public function newAction()
    {
        $entity = new Compensacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:Compensacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Compensacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Compensacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Compensacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Compensacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Compensacion')->find($id);

        if (!$entity) {
            $session = $this->get('session');
            $session->getFlashBag()->add('administrador_malos', 'No existe el elemento que está solicitando.');
            return $this->redirect($this->generateUrl('_admin'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Compensacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Compensacion entity.
    *
    * @param Compensacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Compensacion $entity)
    {
        $form = $this->createForm(new CompensacionType(), $entity, array(
            'action' => $this->generateUrl('compensacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Compensacion', 'attr' => array('class' => 'btn btn-info btn-block')));

        return $form;
    }
    /**
     * Edits an existing Compensacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Compensacion')->find($id);

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

            return $this->redirect($this->generateUrl('compensacion_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:Compensacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Compensacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Compensacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Compensacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('compensacion'));
    }

    /**
     * Creates a form to delete a Compensacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compensacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Compensacion', 'attr' => array('class' => 'btn btn-block btn-danger')))
            ->getForm()
        ;
    }
}
