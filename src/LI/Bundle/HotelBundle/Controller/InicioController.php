<?php

namespace LI\Bundle\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LI\Bundle\HotelBundle\Entity\Usuario;
use LI\Bundle\HotelBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Session\Session;

class InicioController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );
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
	        'form' => $form->createView()
	    ));
    }

}
