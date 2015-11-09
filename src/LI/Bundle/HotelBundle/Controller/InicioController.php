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
                }else{
                    //return $this->render('LIHotelBundle:Inicio:index.html.twig', array('user' => $user));
                    return $this->render('LIHotelBundle:Inicio:index.html.twig');
                }
            }
        }

        return $this->render('LIHotelBundle:Inicio:index.html.twig');
    }

    public function indexUserAction()
    {
        return $this->render('LIHotelBundle:Inicio:index.html.twig');
    }

    public function adminAction(){
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

                $por_c = 0;
                $con = 0;
                $can = 0;
                $cant_usuarios = sizeof($usuarios);
                foreach ($reservas as $reserva) {
                    $estado = $reserva->getEstadoReserva();
                    if ($estado == 'Por Concretar'){
                        $por_c = $por_c+1;
                    }
                    if ($estado == 'Concretada'){
                        $con = $con+1;
                    }
                    if ($estado == 'Cancelada'){
                        $can = $can+1;
                    }
                }
                $admins = 0;
                $users = 0;
                foreach ($usuarios as $u) {
                    $roles = $u->getRoles();
                    if (in_array('ROLE_ADMIN', $roles)) {
                        $admins = $admins+1;
                    }else{
                        $users = $users+1;
                    }
                }

                return $this->render('LIHotelBundle:Inicio:inicioAdmin.html.twig', array(
                'user' => $user,
                'por_concretar' => $por_c,
                'concretadas' => $con,
                'canceladas' => $can,
                'admins' => $admins,
                'users' => $users,
                'cant_habitaciones' => sizeof($habitaciones)));

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
