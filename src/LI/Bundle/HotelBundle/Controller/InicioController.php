<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LI\Bundle\HotelBundle\Entity\Usuario;
use LI\Bundle\HotelBundle\Entity\Login;
use LI\Bundle\HotelBundle\Form\UsuarioType;
use LI\Bundle\HotelBundle\Form\LoginType;
use Symfony\Component\HttpFoundation\Session\Session;

class InicioController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->getUser();
        if ($user != null) {
            $roles = $user->getRoles();
            if (in_array('ROLE_ADMIN', $roles)) {
                return $this->redirect($this->generateUrl('_admin', array(
                'user' => $user)));
            }else{
                return $this->render('LIHotelBundle:Inicio:index.html.twig', array(
                'user' => $user));
            }
        }

        return $this->render('LIHotelBundle:Inicio:index.html.twig');
    }

    public function adminAction(){
        $user = $this->getUser();
        if ($user != null) {
            $roles = $user->getRoles();
            if (in_array('ROLE_ADMIN', $roles)) {
                return $this->render('LIHotelBundle:Inicio:inicioAdmin.html.twig', array(
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

    public function registroAction(){
    	$usuario = new Usuario();
	    $form = $this->createForm(new UsuarioType(), $usuario);


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

	    return $this->render('LIHotelBundle:Inicio:registro.html.twig', array(
	        'form' => $form->createView(),
	    ));
    }

}
