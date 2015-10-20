<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Reserva;
use LI\Bundle\HotelBundle\Form\ReservaType;

use LI\Bundle\HotelBundle\Entity\Factura;
use LI\Bundle\HotelBundle\Form\FacturaType;

/**
 * Reserva controller.
 *
 */
class ReservaController extends Controller
{

    /**
     * Lists all Reserva entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $roles = $user->getRoles();

        $em = $this->getDoctrine()->getManager();

        if (in_array('ROLE_ADMIN', $roles)) {
            $entities = $em->getRepository('LIHotelBundle:Reserva')->findAll();
        }else{
            $entities = $em->getRepository('LIHotelBundle:Reserva')->reservas_usuario($user->getId());
        }

        return $this->render('LIHotelBundle:Reserva:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Reserva entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reserva();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $factura = new Factura();
            $factura->setReserva($entity);
            $factura->setDiasReserva($entity->getDiasReserva());
            $factura->setFecha($entity->getFechaDesde());

            $factura->setCostoTotal(1); //calcular usando el tipo y reserva, como costo inicial sin los consumibles

            $em->persist($factura);
            $entity->setcodigoReserva('RES'.date('dmY').date('His'));

            //cambiando el estado de la habitacion
            if ($entity->getEstadoReserva() == 'Concretada') {
                $habitacion = $entity->getHabitacion();
                $habitacion->setEstado('Ocupada');
            }else{
                if ($entity->getEstadoReserva() == 'Por Concretar') {
                    $habitacion = $entity->getHabitacion();
                    $habitacion->setEstado('Reservada');
                }
            }
            
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('reserva_show', array('id' => $entity->getId())));
        }

        return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reserva entity.
     *
     * @param Reserva $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reserva $entity)
    {
        $form = $this->createForm(new ReservaType(), $entity, array(
            'action' => $this->generateUrl('reserva_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reserva entity.
     *
     */
    public function newAction()
    {
        $entity = new Reserva();
        $form   = $this->createCreateForm($entity);

        return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reserva entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reserva entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Reserva:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reserva entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reserva entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LIHotelBundle:Reserva:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reserva entity.
    *
    * @param Reserva $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reserva $entity)
    {
        $form = $this->createForm(new ReservaType(), $entity, array(
            'action' => $this->generateUrl('reserva_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reserva entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reserva entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reserva_edit', array('id' => $id)));
        }

        return $this->render('LIHotelBundle:Reserva:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reserva entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reserva entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reserva'));
    }

    /**
     * Creates a form to delete a Reserva entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reserva_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
