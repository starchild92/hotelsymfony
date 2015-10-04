<?php

namespace LI\Bundle\HotelBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LI\Bundle\HotelBundle\Entity\Usuario;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{

    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userManager = $this->get('fos_user.user_manager');
        $entities = $userManager->findUsers();

        //$entities = $em->getRepository('LIHotelBundle:Usuario')->findAll();

        return $this->render('LIHotelBundle:Usuario:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LIHotelBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        return $this->render('LIHotelBundle:Usuario:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
