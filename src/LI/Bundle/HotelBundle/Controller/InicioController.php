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

        $login = new Login();
        $form2 = $this->createForm(new LoginType(), $login);

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
            'form2' => $form2->createView()
	    ));
    }

    public function sesionAction(){
        $login = new Login();
        $form2 = $this->createForm(new LoginType(), $login);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form2->bind($request);

            if ($form2->isValid()) {
                $mail = $form2->get('mail')->getData();
                $password = $form2->get('password')->getData();

                 $em = $this->getDoctrine()
                   ->getEntityManager();

                $user = $em->getRepository('LIHotelBundle:Login')
                            ->validarCuenta($mail, $password);

               if ($user == null) {
                    $this->get('session')->getFlashBag()->set('errorsesion', 'Lo sentimos, usted no está registrado');
                    return $this->redirect($this->generateUrl('LIHotelBundle_registro'));
                }else{
                    //discriminarlos por el tipo de usuario
                    return new Response('<html><body>'.$user[0]->getMail().' '.$user[0]->getCuenta().'</body></html>');
                }
            }
        }
    }

}
