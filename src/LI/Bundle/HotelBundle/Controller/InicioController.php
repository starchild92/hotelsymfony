<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LI\Bundle\HotelBundle\Entity\Usuario;
use LI\Bundle\HotelBundle\Entity\Login;
use LI\Bundle\HotelBundle\Form\UsuarioUserType;
use LI\Bundle\HotelBundle\Form\UsuarioConPasswordType;
use LI\Bundle\HotelBundle\Form\UsuarioType;
use LI\Bundle\HotelBundle\Form\LoginType;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Validator\Constraints\DateTime;

class InicioController extends Controller
{
	public function indexAction()
	{
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				return $this->redirect($this->generateUrl('_admin'));
			}else{
				if (in_array('ROLE_USER', $roles)) {
					return $this->redirect($this->generateUrl('_user'));
				}
			}
		}

		return $this->render('LIHotelBundle:Inicio:index.html.twig');
	}

	public function indexUserAction(){
		return $this->render('LIHotelBundle:Inicio:index.html.twig');
	}

	public function adminAction()
	{
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_ADMIN', $roles)) {
				
				//Obtener datos de las reservas
				$em = $this->getDoctrine()->getManager();
				$reservas = $em->getRepository('LIHotelBundle:Reserva')->findAll();
				$habitaciones = $em->getRepository('LIHotelBundle:Habitacion')->findAll();
				
				$userManager = $this->get('fos_user.user_manager');
				$usuarios = $userManager->findUsers();

				/**
					BUSCAR LAS RESERVAS QUE YA CADUCARON Y EL ESTADO ES POR CONCRETAR,
					AGREGARLAS EN UN FLASHBAG Y MOSTRARLO EN LA VISTA
					LA INTERFAZ DE ESOS MENSAJES ES
						<span class="labelalert labelalert-primary">labelalert-primary</span>
						<span class="labelalert labelalert-atencion">labelalert-atencion</span>
						<span class="labelalert labelalert-grave">labelalert-grave</span>
						<span class="labelalert labelalert-normal">labelalert-normal</span>
				**/
				$por_c = 0; $con = 0; $can = 0;
				$cant_usuarios = sizeof($usuarios);
				$session = $this->get('session');
				$hoy = new \DateTime('today');
				

				foreach ($reservas as $reserva) {
					$estado = $reserva->getEstadoReserva();
					if ($estado == 'Por Concretar'){
						$por_c = $por_c+1;

						/** OBTENIENDO LAS RESERVAS QUE NO SE CONCRETARON EN LA FECHA PREVISTA **/
						$fecha2 = $reserva->getFechadesde();
						$interval = $hoy->diff($fecha2);
						$off = $interval->format('%R%a');

						if ($off < 0) {
							$off = $off * (-1);
							$session->getFlashBag()
								->add('grave', array(
									'id'		=> $reserva->getId(),
									'codigo'	=> $reserva->getCodigoreserva(),
									'dias'		=> $off
									)
								);
						}

						if ($fecha2 == $hoy) {
							$session->getFlashBag()->add('informacion', array(
								'id' => $reserva->getId(),
								'codigo' => $reserva->getCodigoreserva()
							));
						}

					}
					if ($estado == 'Concretada'){ $con = $con + 1; }
					if ($estado == 'Cancelada'){ $can = $can + 1; }
				}
				$admins = 0; $users = 0;
				foreach ($usuarios as $u) {
					$roles = $u->getRoles();
					if (in_array('ROLE_ADMIN', $roles)) {
						$admins = $admins+1;
					}else{
						$users = $users+1;
					}
				}
				$libres = $reservadas = $ocupadas = 0;
				foreach ($habitaciones as $key) {
					if ($key->getEstado() == 'Libre') { $libres = $libres + 1; }
					if ($key->getEstado() == 'Ocupada' || $key->getEstado() == 'Indispuesta') { $ocupadas = $ocupadas + 1; }
					if ($key->getEstado() == 'Reservada') { $reservadas = $reservadas + 1; }
				}

				return $this->render('LIHotelBundle:Inicio:inicioAdmin.html.twig', array(
					'session' => $session,
					'user' => $user,
					'por_concretar' => $por_c,
					'concretadas' => $con,
					'canceladas' => $can,
					'admins' => $admins,
					'users' => $users,
					'cant_habitaciones' => sizeof($habitaciones),
					'habitaciones_libres' => $libres,
					'habitaciones_reservadas' => $reservadas,
					'habitaciones_ocupadas' => $ocupadas
				));

			}else{
				return $this->redirect($this->generateUrl('LIHotelBundle_homepage'));
			}
		}
		return $this->redirect($this->generateUrl('fos_user_security_login'));
	}

	public function userAction(){
		$user = $this->getUser();
		if ($user != null) {
			$roles = $user->getRoles();
			if (in_array('ROLE_USER', $roles)) {
				return $this->render('LIHotelBundle:Inicio:inicioUser.html.twig', array(
				'user' => $user));
			}else{
				return $this->redirect($this->generateUrl('LIHotelBundle_homepage'));
			}
		}
		return $this->redirect($this->generateUrl('fos_user_security_login'));
	}

	public function consultarAction(){
		return $this->render('LIHotelBundle:Inicio:consultar.html.twig');
	}

	/*Para el registro de nuevos usuarios desde la pagina web*/
	public function registroAction(){
		$usuario = new Usuario();
		$form = $this->createForm(new UsuarioUserType(), $usuario);


		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$usuario->setEnabled(true);
				$em->persist($usuario);
				$em->flush();

				$this->get('session')->getFlashBag()->set('error', 'Gracias por registrarte, ya puedes hacer reservas!');
				
				$user = $this->getUser();
				if ($user != null) {
					$this->indexAction();
				}
				return $this->redirect($this->generateUrl('LIHotelBundle_registro'));
			}
		}

		return $this->render('LIHotelBundle:Inicio:registro.html.twig', array(
			'form' => $form->createView(),
		));
	}

	/*Para registrar nuevos usuarios desde la vista de administrador*/
	public function registro_adminAction(){
		$usuario = new Usuario();
		$form = $this->createForm(new UsuarioConPasswordType(), $usuario);

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()
					   ->getEntityManager();
				$em->persist($usuario);
				$em->flush();

				$this->get('session')->getFlashBag()->set('error', 'Gracias por registrarte, ya puedes hacer reservas!');
				return $this->redirect($this->generateUrl('LIHotelBundle_registro'));
			}
		}

		return $this->render('LIHotelBundle:Inicio:registroAdmin.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function reporteDiarioAction()
	{
		return $this->render('LIHotelBundle:Inicio:reporteDiario.html.twig');
	}

}
