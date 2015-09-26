<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // LIHotelBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_LIHotelBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'LIHotelBundle_homepage');
            }

            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::indexAction',  '_route' => 'LIHotelBundle_homepage',);
        }
        not_LIHotelBundle_homepage:

        // LIHotelBundle_consultar
        if ($pathinfo === '/consultar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_LIHotelBundle_consultar;
            }

            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::consultarAction',  '_route' => 'LIHotelBundle_consultar',);
        }
        not_LIHotelBundle_consultar:

        // LIHotelBundle_registro
        if ($pathinfo === '/registro') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_LIHotelBundle_registro;
            }

            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::registroAction',  '_route' => 'LIHotelBundle_registro',);
        }
        not_LIHotelBundle_registro:

        // LIHotelBundle_sesion
        if ($pathinfo === '/sesion') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_LIHotelBundle_sesion;
            }

            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::sesionAction',  '_route' => 'LIHotelBundle_sesion',);
        }
        not_LIHotelBundle_sesion:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}