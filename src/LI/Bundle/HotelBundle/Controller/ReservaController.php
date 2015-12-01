<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Reserva;
use LI\Bundle\HotelBundle\Form\ReservaType;
use LI\Bundle\HotelBundle\Form\ReservaUsuarioType;

use LI\Bundle\HotelBundle\Entity\Factura;
use LI\Bundle\HotelBundle\Form\FacturaType;

use Symfony\Component\Form\FormBuilderInterface;


/**
 * Reserva controller.
 *
 */
class ReservaController extends Controller
{
	public function es_admin()
	{
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			return in_array('ROLE_ADMIN', $roles);
		}
		return false;
	}
	/**
	 * Lists all Reserva entities.
	 */
	public function indexAction()
	{
		$securityContext = $this->container->get('security.context');
		if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {

			$user = $this->getUser();
			$roles = $user->getRoles();
			$em = $this->getDoctrine()->getManager();

			$entities = $em->getRepository('LIHotelBundle:Reserva')->findAll();

			return $this->render('LIHotelBundle:Reserva:index.html.twig', array(
			'entities' => $entities,
			'user' => $user
			));
		}else{
			return $this->render('LIHotelBundle:Inicio:index.html.twig');
		}
	}

	public function comprobarFechas($id, $fecha, $dias, $reservas)
	{
		$puede = true;
		$dias = $dias - 1;
		$fecha_inicio = new \DateTime($fecha->format('Y-m-d'));
		$fecha_final = new \DateTime($fecha_inicio->format('Y-m-d'));
		$fecha_final->add(new \DateInterval('P'.$dias.'D'));
		
		//$dias = $dias + 1;
		//throw $this->createNotFoundException($dias.' dias '.$fecha_inicio->format('Y-M-d')." a ".$fecha_final->format('Y-M-d'));

		foreach ($reservas as $reserva) {
			if ($id != $reserva->getId()) {

				$dias_reserva = $reserva->getDiasReserva() - 1;
				$fecha_reserva = $reserva->getFechaDesde();
				$fecha_inicio_ = new \DateTime($fecha_reserva->format('Y-m-d'));
				$fecha_final_ = new \DateTime($fecha_inicio_->format('Y-m-d'));
				$fecha_final_->add(new \DateInterval('P'.$dias_reserva.'D'));
				
				//$dias_reserva = $reserva->getDiasReserva();
				//throw $this->createNotFoundException($dias_reserva.' dias '.$fecha_inicio_->format('Y-M-d')." a ".$fecha_final_->format('Y-M-d'));

				if ($fecha_inicio > $fecha_inicio_ && $fecha_inicio < $fecha_final_) { $puede = false; 
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'La fecha que ha elegido esta contenida dentro de otra reserva.');
				}
				if ($fecha_final > $fecha_inicio_ && $fecha_final < $fecha_final_) { $puede = false; 
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'La fecha que ha elegido esta contenida dentro de otra reserva.');
				}
				if ($fecha_inicio_ > $fecha_inicio && $fecha_inicio_ < $fecha_final) { $puede = false; 
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'La fecha que ha elegido esta contenida dentro de otra reserva.');
				}
				if ($fecha_inicio == $fecha_inicio_) { $puede = false;
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'El dia de inicio ya está reservada, eliga el día anterior al '.$fecha_inicio->format('d \\d\\e M \\d\\e\\l Y'));
				}
				if ($fecha_inicio == $fecha_final_) { $puede = false; 
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'Trate de elegir menos días porque ya esta reservada en los últimos dias.');
				}
				if ($fecha_final == $fecha_inicio_) { $puede = false;
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'El dia de final de su reserva '.$fecha_final->format('d \\d\\e M \\d\\e\\l Y').' coincide casualmente con el inicio de otra reserva para esta habitación.');
				}
				if ($fecha_final == $fecha_final_) { $puede = false; 
					$session = $this->get('session');
					$session->getFlashBag()->add('reserva_error', 'Trate de elegir menos días porque ya esta reservada en los últimos dias.');
				}
			}
		}

		return $puede;
	}

	public function comprobarCantidad($tipo, $categoria, $personas_reserva)
	{
		$em = $this->getDoctrine()->getManager();
		$cantidad = $em->getRepository('LIHotelBundle:OcupacionHabitacion')->obtener_ocupacion($tipo, $categoria);
		foreach ($cantidad as $key) {
			if ($key->getCantidadPersonasHabitacion() >= $personas_reserva ) {
				return true;
			}
			$session = $this->get('session');
			$session->getFlashBag()->add('reserva_error', 'La cantidad de personas que ha especificado es demasido alta. Como alternativa puede rentar mas habitaciones. Solo se permiten un máximo de '.$key->getCantidadPersonasHabitacion().' personas para esta habitación.');
			return false;
		}
	}

	/*VERIFICA SI UNA HABITACIÓN ESTÁ DISPONIBLE PARA RESERVAR*/
	public function habitacion_disponible($habitacion)
	{
		if ($habitacion->getEstado() == 'Indispuesta') { return false; }
		return true;
	}

	/**
	 * Creates a new Reserva entity.
	 */
	public function createAction(Request $request)
	{
		$entity = new Reserva();
		$form = $this->createCreateForm($entity);
		$form->handleRequest($request);
		$session = $this->get('session');
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				if ($form->isValid())
				{
					$em = $this->getDoctrine()->getManager();
					if ($this->habitacion_disponible($entity->getHabitacion()))
					{
						/**
							VERIFICANDO QUE DADA LA FECHA DE RESERVA SE PUEDA RESERVAR
						**/
						$res_invol = $em->getRepository('LIHotelBundle:Reserva')->reservas_habitacion($entity->getHabitacion()->getId());
						$var = $this->comprobarFechas($entity->getId(), $entity->getFechaDesde(), $entity->getDiasReserva(), $res_invol);
						if (!$var) {
							$session->getFlashBag()->add('reserva_error', 'La habitacion que selecciono no se encuentra disponible en la fecha seleccionada. Revise las reservas de esta habitación para obtener mas detalles.');
						}
						if( $var 
							&& $this->comprobarCantidad($entity->getHabitacion()->getTipo()->getTipoHabitacion()->getId(), $entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getId(), $entity->getCantidadPersonas()+$entity->getCantidadNinos()))
						{
							$factura = new Factura();
							$factura->setReserva($entity);
							$factura->setDiasReserva($entity->getDiasReserva());
							$factura->setFecha($entity->getFechaDesde());

							/**
								CALCULAR USANDO LOS DÍAS, EL TIPO Y CATEGORIA COMO COSTO INICIAL
								SIN LOS CONSUMIBLES
							**/
							$factura->setCostoTotal(
								$entity->getDiasReserva() * 
								$entity->getHabitacion()->getTipo()->getTipoHabitacion()->getPrecio() * 
								$entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getPrecio()
							);

							$em->persist($factura);
							$entity->setFactura($factura);
							$entity->setcodigoReserva('RES'.date('dmY').date('His'));
							/** 
								EL CODIGO DE LA RESERVA ESTA COMPUESTA
								RES(DIA MES AÑO)(HORA MINUTOS SEGUNDOS)
							**/

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
						}else{
							//No se puede reservar
							return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
								'entity' => $entity,
								'form'   => $form->createView(),
							));
							//throw $this->createNotFoundException('No se puede hacer la reserva en la fecha que especifico');
						}
					}else{
						$session->getFlashBag()->add('reserva_error', 'La habitación que ha seleccionado no está disponible por tiempo indefinido.');
						return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
							'entity' => $entity,
							'form'   => $form->createView(),
						));
					}
				}
				$session->getFlashBag()->add('reserva_error', 'Hay un error con la fecha en el formulario.');
				return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
					'entity' => $entity,
					'form'   => $form->createView(),
				));
				throw $this->createNotFoundException('Form Invalido');
			}else{
				/** 
					ROLE_USER 
				**/
				//throw $this->createNotFoundException('WILD WILD');

				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();

					$res_invol = $em->getRepository('LIHotelBundle:Reserva')->reservas_habitacion($entity->getHabitacion()->getId());
					$var = $this->comprobarFechas($entity->getId(), $entity->getFechaDesde(), $entity->getDiasReserva(), $res_invol);
					if (!$var) {
						$session->getFlashBag()->add('reserva', 'La habitacion que selecciono no se encuentra disponible en la fecha seleccionada. Revise las reservas de esta habitación para obtener mas detalles.');
					}
					if( $var && $this->comprobarCantidad($entity->getHabitacion()->getTipo()->getTipoHabitacion()->getId(), $entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getId(), $entity->getCantidadPersonas()+$entity->getCantidadNinos()))
					{
					
						$factura = new Factura();
						$factura->setReserva($entity);
						$factura->setDiasReserva($entity->getDiasReserva());
						$factura->setFecha($entity->getFechaDesde());

						$factura->setCostoTotal(
								$entity->getDiasReserva() * 
								$entity->getHabitacion()->getTipo()->getTipoHabitacion()->getPrecio() * 
								$entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getPrecio()
							);

						$em->persist($factura);
						$entity->setFactura($factura);
						$cliente = $em->getRepository('LIHotelBundle:Usuario')->find($user->getId());
						$entity->setCliente($cliente);

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
						
						return $this->redirect($this->generateUrl('user_reserva_show', array('id' => $entity->getId())));
					}else{
						$this->get('session')->getFlashBag()->set('reserva_error', 'No se puede hacer la reserva en la fecha que especifico. Bien puede que la habitación ya este reservada en algun periodo de tiempo igual al que has seleccionado.');
						return $this->render('LIHotelBundle:Reserva:newuser.html.twig', array(
							'entity' => $entity,
							'form'   => $form->createView(),
						));
					}
				}

				$this->get('session')->getFlashBag()->set('reserva_error', 'El formulario no ha superado la is_valid()');
				return $this->render('LIHotelBundle:Reserva:newuser.html.twig', array(
					'entity' => $entity,
					'form'   => $form->createView(),
				));
			}
		}
	}

	/**
	 * Creates a form to create a Reserva entity.
	 * @param Reserva $entity The entity
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createCreateForm(Reserva $entity)
	{
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				$form = $this->createForm(new ReservaType(), $entity, array(
					'action' => $this->generateUrl('reserva_create'),
					'method' => 'POST',
				));
			}else{
				$form = $this->createForm(new ReservaUsuarioType(), $entity, array(
					'action' => $this->generateUrl('reserva_create'),
					'method' => 'POST',
				));
			}
		}

		$form->add('submit', 'submit', array('label' => 'Crear Nueva Reserva', 'attr' => array('class' => 'btn btn-block btn-info')));

		return $form;
	}

	/**
	 * Displays a form to create a new Reserva entity.
	 */
	public function newAction()
	{
		$entity = new Reserva();
		$form = $this->createCreateForm($entity);

		return $this->render('LIHotelBundle:Reserva:new.html.twig', array(
			'entity' => $entity,
			'form'   => $form->createView(),
		));
	}

	/**
	 * Finds and displays a Reserva entity.
	 */
	public function showAction($id)
	{
		$user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Reserva entity.');
		}
		$user = $this->getUser();
		$deleteForm = $this->createDeleteForm($id);

		return $this->render('LIHotelBundle:Reserva:show.html.twig', array(
			'entity'      => $entity,
			'delete_form' => $deleteForm->createView(),
			'user' => $user
		));
	}

	/**
	 * Displays a form to edit an existing Reserva entity.
	 */
	public function editAction($id)
	{
		$user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
		$em = $this->getDoctrine()->getManager();

		$entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);
		if ($entity->getEstadoReserva() != 'Cancelada') {

			if (!$entity) {
				throw $this->createNotFoundException('Unable to find Reserva entity.');
			}

			$editForm = $this->createEditForm($entity);
			$deleteForm = $this->createDeleteForm($id);
			$user = $this->getUser();

			return $this->render('LIHotelBundle:Reserva:edit.html.twig', array(
				'entity'      => $entity,
				'edit_form'   => $editForm->createView(),
				'delete_form' => $deleteForm->createView(),
				'user' => $user,
			));
		}else{
			$this->get('session')->getFlashBag()->set('reserva_info', 'Esta reserva, ha sido cancelada, por este motivo no puede ser modificada. Si lo desea puede generar otra reserva con las mismas caracteristicas.');
			return $this->showAction($id);
		}
	}

	/**
	* Creates a form to edit a Reserva entity.
	* @param Reserva $entity The entity
	* @return \Symfony\Component\Form\Form The form
	*/
	private function createEditForm(Reserva $entity)
	{
		$form = $this->createForm(new ReservaType(), $entity, array(
			'action' => $this->generateUrl('reserva_update', array('id' => $entity->getId())),
			'method' => 'PUT',
		));

		$form->add('submit', 'submit', array('label' => 'Actualizar Reserva', 'attr' => array('class' => 'btn btn-info btn-block')));

		return $form;
	}
	/**
	 * Edits an existing Reserva entity.
	 */
	public function updateAction(Request $request, $id)
	{
		$user = $this->getUser(); if ($user == '') { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
		$em = $this->getDoctrine()->getManager();
		$session = $this->get('session');
		$entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Reserva entity.');
		}

		$deleteForm = $this->createDeleteForm($id);
		$editForm = $this->createEditForm($entity);
		$editForm->handleRequest($request);

		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				$res_invol = $em->getRepository('LIHotelBundle:Reserva')->reservas_habitacion($entity->getHabitacion()->getId());
				if($this->comprobarFechas($entity->getId(), $entity->getFechaDesde(), $entity->getDiasReserva(), $res_invol)
					&& $this->comprobarCantidad($entity->getHabitacion()->getTipo()->getTipoHabitacion()->getId(), $entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getId(), $entity->getCantidadPersonas()+$entity->getCantidadNinos()))
				{
					
					if ($editForm->isValid()) {
						$factura = $em->getRepository('LIHotelBundle:Factura')->find($entity->getFactura()->getId());
						$factura->setDiasReserva($entity->getDiasReserva());
						$em->persist($factura);
						$em->flush();
						$session->getFlashBag()->add('reserva_bien', 'Se ha modificado con exito la reserva.');
						
						return $this->redirect($this->generateUrl('reserva_edit', array('id' => $id)));
					}
				}
				
				return $this->render('LIHotelBundle:Reserva:edit.html.twig', array(
					'entity'      => $entity,
					'edit_form'   => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
				));
			}else{
				$res_invol = $em->getRepository('LIHotelBundle:Reserva')->reservas_habitacion($entity->getHabitacion()->getId());
				if( $this->comprobarFechas($entity->getId(), $entity->getFechaDesde(), $entity->getDiasReserva(), $res_invol)
				 	&& $this->comprobarCantidad($entity->getHabitacion()->getTipo()->getTipoHabitacion()->getId(), $entity->getHabitacion()->getTipo()->getCategoriaHabitacion()->getId(), $entity->getCantidadPersonas()+$entity->getCantidadNinos()))
				{
					if ($editForm->isValid()) {
						//$em->flush();

						$cliente = $em->getRepository('LIHotelBundle:Usuario')->find($user->getId());
						$factura = $em->getRepository('LIHotelBundle:Factura')->find($entity->getFactura()->getId());
						$factura->setDiasReserva($entity->getDiasReserva());
						$entity->setCliente($cliente);
						$em->persist($factura);
						$em->persist($entity);
						$em->flush();

						$session->getFlashBag()->add('reserva_bien', 'Se ha modificado satisfactoriamente la reserva.');
					}else{
						$session->getFlashBag()->add('reserva_error', 'Ha ocurrido un error en el formulario');	
					}
				}

				return $this->redirect($this->generateUrl('user_reserva_edit', array('id' => $id)));
			}
		}
	}
	/**
	 * Deletes a Reserva entity.
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

			/**
				ELIMIANNDO LA FACTURA DE LA RESERVA ANTES DE ELEIMINAR LA RESERVA
			**/
			$factura = $entity->getFactura();
			$factura->setReserva(NULL);
			$entity->setFactura(NULL);

			/**
				LIBERANDO LA HABITACIÓN
			**/
			$entity->getHabitacion()->setEstado('Libre');

			$em->remove($entity);
			$em->remove($factura);
			$em->flush();
		}

		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				return $this->redirect($this->generateUrl('reserva'));
			}else{
				return $this->indexuserAction();
			}
		}
	}

	/**
	 * Creates a form to delete a Reserva entity by id.
	 * @param mixed $id The entity id
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm($id)
	{
		return $this->createFormBuilder()
			->setAction($this->generateUrl('reserva_delete', array('id' => $id)))
			->setMethod('DELETE')
			->add('submit', 'submit', array('label' => 'Eliminar Reserva', 'attr' => array('class'=>'btn btn-danger btn-block')))
			->getForm()
		;
	}

	/**
	 * Lists all Reserva entities.
	 */
	public function indexuserAction()
	{
		$securityContext = $this->container->get('security.context');
		if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {

			$user = $this->getUser();
			$roles = $user->getRoles();
			$em = $this->getDoctrine()->getManager();

			$entities = $em->getRepository('LIHotelBundle:Reserva')->reservas_usuario($user->getId());

			return $this->render('LIHotelBundle:Reserva:indexuser.html.twig', array(
			'entities' => $entities,
			'user' => $user
			));
		}else{
			return $this->render('LIHotelBundle:Inicio:index.html.twig');
		}
	}

	public function newuserAction()
	{
		$user = $this->getUser();
		$entity = new Reserva();
		$form   = $this->createCreateForm($entity);

		return $this->render('LIHotelBundle:Reserva:newuser.html.twig', array(
			'entity' => $entity,
			'form'   => $form->createView(),
			'user' => $user
		));
	}

	public function showuserAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Reserva entity.');
		}
		$user = $this->getUser();
		$deleteForm = $this->createDeleteForm($id);

		return $this->render('LIHotelBundle:Reserva:showuser.html.twig', array(
			'entity'      => $entity,
			'delete_form' => $deleteForm->createView(),
			'user' => $user
		));
	}

	public function edituserAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('LIHotelBundle:Reserva')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Reserva entity.');
		}

		$editForm = $this->createEditForm($entity);
		$deleteForm = $this->createDeleteForm($id);
		$user = $this->getUser();

		return $this->render('LIHotelBundle:Reserva:edituser.html.twig', array(
			'entity'      => $entity,
			'edit_form'   => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
			'user' => $user,
		));
	}

	public function concretarAction(Request $request)
	{
		$form = $this->createFormBuilder()
			->add('codigo_reserva', 'text', array(
				'label' => false,
				'attr' => array(
					'class' => 'form-control input-lg',
					'aria-describedby' => 'basic-addon1')))
			->setMethod('POST')
			->setAction($this->generateUrl('reserva_concretar'))
			->add('reset', 'reset', array(
				'label'	=>	'Limpiar',
				'attr'	=> array('class' =>	'btn-default btn-block')
				))
			->add('submit', 'submit', array(
				'label'	=> 	'Concretar Reserva',
				'attr'	=> array('class'	=> 	'btn-success btn-block')
				))
			->getForm();

		$form->handleRequest($request);
		if ($form->isValid()) {
			$session = $this->get('session');
			$data = $form->getData();
			 /**
			 	VERIFICAR SI EL CODIGO ASOCIADO A LA RESERVA EXISTE
			 		MODIFICAR EL ESTADO DE LA HABITACIÓN A OCUPADA.
			 		MODIFICAR EL ESTADO DE LA RESERVACION A CONCRETADA
			 **/
			$em = $this->getDoctrine()->getManager();
			if($em->getRepository('LIHotelBundle:Reserva')->reservas_existe_codigo($data['codigo_reserva']))
			{
				$reservas = $em->getRepository('LIHotelBundle:Reserva')->reservas_obtener_codigo($data['codigo_reserva']);
				if($reservas[0]->getEstadoReserva() == 'Concretada')
				{
					$session->getFlashBag()->add('concretar_info', 'Esta reserva ya ha sido concretada.');
				}else{
					foreach ($reservas as $reserva) {
						$reserva->setEstadoReserva('Concretada');
						$reserva->getHabitacion()->setEstado('Ocupada');
					}
					$em->persist($reserva);
					$em->flush();

					$session->getFlashBag()->add('concretar_buenos', 'Se ha concretado tu reservación, haz hecho check in con nosotros! Yay... ya puede dirigirse a su habitación.');
				}
			}else{
				$session->getFlashBag()->add('concretar_malos', 'Tal vez estás en drogas! Ese código no existe.');
				return $this->render('LIHotelBundle:Reserva:concretar.html.twig', array(
					'form' => $form->createView(),
				));
			}

		}
		
		return $this->render('LIHotelBundle:Reserva:concretar.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function concretarAutoAction($codigo)
	{
		$user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
		$em = $this->getDoctrine()->getManager();
		$session = $this->get('session');
		if($em->getRepository('LIHotelBundle:Reserva')->reservas_existe_codigo($codigo))
		{
			$reservas = $em->getRepository('LIHotelBundle:Reserva')->reservas_obtener_codigo($codigo);
			if($reservas[0]->getEstadoReserva() == 'Concretada')
			{
				$session->getFlashBag()->add('reserva_info', 'Esta reserva ya ha sido concretada.');
			}else{
				foreach ($reservas as $reserva) {
					$reserva->setEstadoReserva('Concretada');
					$reserva->getHabitacion()->setEstado('Ocupada');
				}
				$em->persist($reserva);
				$em->flush();

				$session->getFlashBag()->add('reserva_buenos', 'Se ha concretado tu reservación, haz hecho check in con nosotros! Yay... ya puede dirigirse a su habitación.');
			}
		}else{
			$session->getFlashBag()->add('reserva_malos', 'Tal vez estás en drogas! Ese código no existe.');	
		}
		return $this->showAction($reservas[0]->getId());
	}

	public function cancelarAction($codigo)
	{
		$user = $this->getUser(); if ($user == '' || !$this->es_admin()) { return $this->redirect($this->generateUrl('LIHotelBundle_homepage')); }
		$em = $this->getDoctrine()->getManager();
		$session = $this->get('session');
		if($em->getRepository('LIHotelBundle:Reserva')->reservas_existe_codigo($codigo))
		{
			$reservas = $em->getRepository('LIHotelBundle:Reserva')->reservas_obtener_codigo($codigo);
			if($reservas[0]->getEstadoReserva() == 'Cancelada')
			{
				$session->getFlashBag()->add('reserva_info', 'Esta reserva ya ha sido cancelada.');
			}else{
				foreach ($reservas as $reserva) {
					$reserva->setEstadoReserva('Cancelada');
					$reserva->getHabitacion()->setEstado('Libre');
				}
				$em->persist($reserva);
				$em->flush();

				$session->getFlashBag()->add('reserva_buenos', 'Se ha cancelado la reserva. lamentamos que haya tenido que ser asi.');
			}
		}else{
			$session->getFlashBag()->add('reserva_malos', 'Tal vez estás en drogas! Ese código no existe.');
		}
		return $this->showAction($reservas[0]->getId());
	}

}
