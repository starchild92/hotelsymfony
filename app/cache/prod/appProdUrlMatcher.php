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

        if (0 === strpos($pathinfo, '/factura')) {
            // factura
            if (rtrim($pathinfo, '/') === '/factura') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'factura');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::indexAction',  '_route' => 'factura',);
            }

            // factura_show
            if (preg_match('#^/factura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::showAction',));
            }

            // factura_new
            if ($pathinfo === '/factura/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::newAction',  '_route' => 'factura_new',);
            }

            // factura_create
            if ($pathinfo === '/factura/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_factura_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::createAction',  '_route' => 'factura_create',);
            }
            not_factura_create:

            // factura_edit
            if (preg_match('#^/factura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::editAction',));
            }

            // factura_update
            if (preg_match('#^/factura/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_factura_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::updateAction',));
            }
            not_factura_update:

            // factura_delete
            if (preg_match('#^/factura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_factura_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\FacturaController::deleteAction',));
            }
            not_factura_delete:

        }

        if (0 === strpos($pathinfo, '/compensacion')) {
            // compensacion
            if (rtrim($pathinfo, '/') === '/compensacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'compensacion');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::indexAction',  '_route' => 'compensacion',);
            }

            // compensacion_show
            if (preg_match('#^/compensacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::showAction',));
            }

            // compensacion_new
            if ($pathinfo === '/compensacion/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::newAction',  '_route' => 'compensacion_new',);
            }

            // compensacion_create
            if ($pathinfo === '/compensacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_compensacion_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::createAction',  '_route' => 'compensacion_create',);
            }
            not_compensacion_create:

            // compensacion_edit
            if (preg_match('#^/compensacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::editAction',));
            }

            // compensacion_update
            if (preg_match('#^/compensacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_compensacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::updateAction',));
            }
            not_compensacion_update:

            // compensacion_delete
            if (preg_match('#^/compensacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_compensacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::deleteAction',));
            }
            not_compensacion_delete:

        }

        if (0 === strpos($pathinfo, '/reserva')) {
            // reserva
            if (rtrim($pathinfo, '/') === '/reserva') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reserva');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::indexAction',  '_route' => 'reserva',);
            }

            // reserva_show
            if (preg_match('#^/reserva/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::showAction',));
            }

            // reserva_new
            if ($pathinfo === '/reserva/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::newAction',  '_route' => 'reserva_new',);
            }

            // reserva_create
            if ($pathinfo === '/reserva/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reserva_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::createAction',  '_route' => 'reserva_create',);
            }
            not_reserva_create:

            // reserva_edit
            if (preg_match('#^/reserva/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::editAction',));
            }

            // reserva_update
            if (preg_match('#^/reserva/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_reserva_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::updateAction',));
            }
            not_reserva_update:

            // reserva_delete
            if (preg_match('#^/reserva/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_reserva_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::deleteAction',));
            }
            not_reserva_delete:

        }

        if (0 === strpos($pathinfo, '/bebida')) {
            // bebida
            if (rtrim($pathinfo, '/') === '/bebida') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bebida');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::indexAction',  '_route' => 'bebida',);
            }

            // bebida_show
            if (preg_match('#^/bebida/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::showAction',));
            }

            // bebida_new
            if ($pathinfo === '/bebida/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::newAction',  '_route' => 'bebida_new',);
            }

            // bebida_create
            if ($pathinfo === '/bebida/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bebida_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::createAction',  '_route' => 'bebida_create',);
            }
            not_bebida_create:

            // bebida_edit
            if (preg_match('#^/bebida/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::editAction',));
            }

            // bebida_update
            if (preg_match('#^/bebida/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_bebida_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::updateAction',));
            }
            not_bebida_update:

            // bebida_delete
            if (preg_match('#^/bebida/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_bebida_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::deleteAction',));
            }
            not_bebida_delete:

        }

        if (0 === strpos($pathinfo, '/llamada')) {
            // llamada
            if (rtrim($pathinfo, '/') === '/llamada') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'llamada');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::indexAction',  '_route' => 'llamada',);
            }

            // llamada_show
            if (preg_match('#^/llamada/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::showAction',));
            }

            // llamada_new
            if ($pathinfo === '/llamada/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::newAction',  '_route' => 'llamada_new',);
            }

            // llamada_create
            if ($pathinfo === '/llamada/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_llamada_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::createAction',  '_route' => 'llamada_create',);
            }
            not_llamada_create:

            // llamada_edit
            if (preg_match('#^/llamada/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::editAction',));
            }

            // llamada_update
            if (preg_match('#^/llamada/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_llamada_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::updateAction',));
            }
            not_llamada_update:

            // llamada_delete
            if (preg_match('#^/llamada/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_llamada_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::deleteAction',));
            }
            not_llamada_delete:

        }

        if (0 === strpos($pathinfo, '/categoriahabitacion')) {
            // categoriahabitacion
            if (rtrim($pathinfo, '/') === '/categoriahabitacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoriahabitacion');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::indexAction',  '_route' => 'categoriahabitacion',);
            }

            // categoriahabitacion_show
            if (preg_match('#^/categoriahabitacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::showAction',));
            }

            // categoriahabitacion_new
            if ($pathinfo === '/categoriahabitacion/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::newAction',  '_route' => 'categoriahabitacion_new',);
            }

            // categoriahabitacion_create
            if ($pathinfo === '/categoriahabitacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoriahabitacion_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::createAction',  '_route' => 'categoriahabitacion_create',);
            }
            not_categoriahabitacion_create:

            // categoriahabitacion_edit
            if (preg_match('#^/categoriahabitacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::editAction',));
            }

            // categoriahabitacion_update
            if (preg_match('#^/categoriahabitacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categoriahabitacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::updateAction',));
            }
            not_categoriahabitacion_update:

            // categoriahabitacion_delete
            if (preg_match('#^/categoriahabitacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categoriahabitacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::deleteAction',));
            }
            not_categoriahabitacion_delete:

        }

        if (0 === strpos($pathinfo, '/tipo')) {
            if (0 === strpos($pathinfo, '/tipohabitacion')) {
                // tipohabitacion
                if (rtrim($pathinfo, '/') === '/tipohabitacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipohabitacion');
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::indexAction',  '_route' => 'tipohabitacion',);
                }

                // tipohabitacion_show
                if (preg_match('#^/tipohabitacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::showAction',));
                }

                // tipohabitacion_new
                if ($pathinfo === '/tipohabitacion/new') {
                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::newAction',  '_route' => 'tipohabitacion_new',);
                }

                // tipohabitacion_create
                if ($pathinfo === '/tipohabitacion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipohabitacion_create;
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::createAction',  '_route' => 'tipohabitacion_create',);
                }
                not_tipohabitacion_create:

                // tipohabitacion_edit
                if (preg_match('#^/tipohabitacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::editAction',));
                }

                // tipohabitacion_update
                if (preg_match('#^/tipohabitacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipohabitacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::updateAction',));
                }
                not_tipohabitacion_update:

                // tipohabitacion_delete
                if (preg_match('#^/tipohabitacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipohabitacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::deleteAction',));
                }
                not_tipohabitacion_delete:

            }

            // tipo
            if (rtrim($pathinfo, '/') === '/tipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipo');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::indexAction',  '_route' => 'tipo',);
            }

            // tipo_show
            if (preg_match('#^/tipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::showAction',));
            }

            // tipo_new
            if ($pathinfo === '/tipo/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::newAction',  '_route' => 'tipo_new',);
            }

            // tipo_create
            if ($pathinfo === '/tipo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipo_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::createAction',  '_route' => 'tipo_create',);
            }
            not_tipo_create:

            // tipo_edit
            if (preg_match('#^/tipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::editAction',));
            }

            // tipo_update
            if (preg_match('#^/tipo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::updateAction',));
            }
            not_tipo_update:

            // tipo_delete
            if (preg_match('#^/tipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::deleteAction',));
            }
            not_tipo_delete:

        }

        if (0 === strpos($pathinfo, '/habitacion')) {
            // habitacion
            if (rtrim($pathinfo, '/') === '/habitacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'habitacion');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::indexAction',  '_route' => 'habitacion',);
            }

            // habitacion_show
            if (preg_match('#^/habitacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::showAction',));
            }

            // habitacion_new
            if ($pathinfo === '/habitacion/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::newAction',  '_route' => 'habitacion_new',);
            }

            // habitacion_create
            if ($pathinfo === '/habitacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_habitacion_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::createAction',  '_route' => 'habitacion_create',);
            }
            not_habitacion_create:

            // habitacion_edit
            if (preg_match('#^/habitacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::editAction',));
            }

            // habitacion_update
            if (preg_match('#^/habitacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_habitacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::updateAction',));
            }
            not_habitacion_update:

            // habitacion_delete
            if (preg_match('#^/habitacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_habitacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\HabitacionController::deleteAction',));
            }
            not_habitacion_delete:

        }

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
