<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/admin/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/admin/usuario/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/admin/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

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

        if (0 === strpos($pathinfo, '/admin/compensacion')) {
            // compensacion
            if (rtrim($pathinfo, '/') === '/admin/compensacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'compensacion');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::indexAction',  '_route' => 'compensacion',);
            }

            // compensacion_show
            if (preg_match('#^/admin/compensacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::showAction',));
            }

            // compensacion_new
            if ($pathinfo === '/admin/compensacion/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::newAction',  '_route' => 'compensacion_new',);
            }

            // compensacion_create
            if ($pathinfo === '/admin/compensacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_compensacion_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::createAction',  '_route' => 'compensacion_create',);
            }
            not_compensacion_create:

            // compensacion_edit
            if (preg_match('#^/admin/compensacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::editAction',));
            }

            // compensacion_update
            if (preg_match('#^/admin/compensacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_compensacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::updateAction',));
            }
            not_compensacion_update:

            // compensacion_delete
            if (preg_match('#^/admin/compensacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_compensacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compensacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CompensacionController::deleteAction',));
            }
            not_compensacion_delete:

        }

        if (0 === strpos($pathinfo, '/user/reserva')) {
            // reserva
            if (rtrim($pathinfo, '/') === '/user/reserva') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reserva');
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::indexAction',  '_route' => 'reserva',);
            }

            // reserva_show
            if (preg_match('#^/user/reserva/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::showAction',));
            }

            // reserva_new
            if ($pathinfo === '/user/reserva/new') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::newAction',  '_route' => 'reserva_new',);
            }

            // reserva_create
            if ($pathinfo === '/user/reserva/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reserva_create;
                }

                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::createAction',  '_route' => 'reserva_create',);
            }
            not_reserva_create:

            // reserva_edit
            if (preg_match('#^/user/reserva/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::editAction',));
            }

            // reserva_update
            if (preg_match('#^/user/reserva/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_reserva_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::updateAction',));
            }
            not_reserva_update:

            // reserva_delete
            if (preg_match('#^/user/reserva/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_reserva_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\ReservaController::deleteAction',));
            }
            not_reserva_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/bebida')) {
                // bebida
                if (rtrim($pathinfo, '/') === '/admin/bebida') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bebida');
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::indexAction',  '_route' => 'bebida',);
                }

                // bebida_show
                if (preg_match('#^/admin/bebida/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::showAction',));
                }

                // bebida_new
                if ($pathinfo === '/admin/bebida/new') {
                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::newAction',  '_route' => 'bebida_new',);
                }

                // bebida_create
                if ($pathinfo === '/admin/bebida/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bebida_create;
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::createAction',  '_route' => 'bebida_create',);
                }
                not_bebida_create:

                // bebida_edit
                if (preg_match('#^/admin/bebida/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::editAction',));
                }

                // bebida_update
                if (preg_match('#^/admin/bebida/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_bebida_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::updateAction',));
                }
                not_bebida_update:

                // bebida_delete
                if (preg_match('#^/admin/bebida/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_bebida_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bebida_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\BebidaController::deleteAction',));
                }
                not_bebida_delete:

            }

            if (0 === strpos($pathinfo, '/admin/llamada')) {
                // llamada
                if (rtrim($pathinfo, '/') === '/admin/llamada') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'llamada');
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::indexAction',  '_route' => 'llamada',);
                }

                // llamada_show
                if (preg_match('#^/admin/llamada/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::showAction',));
                }

                // llamada_new
                if ($pathinfo === '/admin/llamada/new') {
                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::newAction',  '_route' => 'llamada_new',);
                }

                // llamada_create
                if ($pathinfo === '/admin/llamada/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_llamada_create;
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::createAction',  '_route' => 'llamada_create',);
                }
                not_llamada_create:

                // llamada_edit
                if (preg_match('#^/admin/llamada/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::editAction',));
                }

                // llamada_update
                if (preg_match('#^/admin/llamada/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_llamada_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::updateAction',));
                }
                not_llamada_update:

                // llamada_delete
                if (preg_match('#^/admin/llamada/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_llamada_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'llamada_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\LlamadaController::deleteAction',));
                }
                not_llamada_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categoriahabitacion')) {
                // categoriahabitacion
                if (rtrim($pathinfo, '/') === '/admin/categoriahabitacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoriahabitacion');
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::indexAction',  '_route' => 'categoriahabitacion',);
                }

                // categoriahabitacion_show
                if (preg_match('#^/admin/categoriahabitacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::showAction',));
                }

                // categoriahabitacion_new
                if ($pathinfo === '/admin/categoriahabitacion/new') {
                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::newAction',  '_route' => 'categoriahabitacion_new',);
                }

                // categoriahabitacion_create
                if ($pathinfo === '/admin/categoriahabitacion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categoriahabitacion_create;
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::createAction',  '_route' => 'categoriahabitacion_create',);
                }
                not_categoriahabitacion_create:

                // categoriahabitacion_edit
                if (preg_match('#^/admin/categoriahabitacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::editAction',));
                }

                // categoriahabitacion_update
                if (preg_match('#^/admin/categoriahabitacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_categoriahabitacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::updateAction',));
                }
                not_categoriahabitacion_update:

                // categoriahabitacion_delete
                if (preg_match('#^/admin/categoriahabitacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_categoriahabitacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriahabitacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\CategoriaHabitacionController::deleteAction',));
                }
                not_categoriahabitacion_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tipo')) {
                if (0 === strpos($pathinfo, '/admin/tipohabitacion')) {
                    // tipohabitacion
                    if (rtrim($pathinfo, '/') === '/admin/tipohabitacion') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipohabitacion');
                        }

                        return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::indexAction',  '_route' => 'tipohabitacion',);
                    }

                    // tipohabitacion_show
                    if (preg_match('#^/admin/tipohabitacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::showAction',));
                    }

                    // tipohabitacion_new
                    if ($pathinfo === '/admin/tipohabitacion/new') {
                        return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::newAction',  '_route' => 'tipohabitacion_new',);
                    }

                    // tipohabitacion_create
                    if ($pathinfo === '/admin/tipohabitacion/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipohabitacion_create;
                        }

                        return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::createAction',  '_route' => 'tipohabitacion_create',);
                    }
                    not_tipohabitacion_create:

                    // tipohabitacion_edit
                    if (preg_match('#^/admin/tipohabitacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::editAction',));
                    }

                    // tipohabitacion_update
                    if (preg_match('#^/admin/tipohabitacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_tipohabitacion_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::updateAction',));
                    }
                    not_tipohabitacion_update:

                    // tipohabitacion_delete
                    if (preg_match('#^/admin/tipohabitacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_tipohabitacion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipohabitacion_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoHabitacionController::deleteAction',));
                    }
                    not_tipohabitacion_delete:

                }

                // tipo
                if (rtrim($pathinfo, '/') === '/admin/tipo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipo');
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::indexAction',  '_route' => 'tipo',);
                }

                // tipo_show
                if (preg_match('#^/admin/tipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_show')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::showAction',));
                }

                // tipo_new
                if ($pathinfo === '/admin/tipo/new') {
                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::newAction',  '_route' => 'tipo_new',);
                }

                // tipo_create
                if ($pathinfo === '/admin/tipo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipo_create;
                    }

                    return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::createAction',  '_route' => 'tipo_create',);
                }
                not_tipo_create:

                // tipo_edit
                if (preg_match('#^/admin/tipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_edit')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::editAction',));
                }

                // tipo_update
                if (preg_match('#^/admin/tipo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_update')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::updateAction',));
                }
                not_tipo_update:

                // tipo_delete
                if (preg_match('#^/admin/tipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_delete')), array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\TipoController::deleteAction',));
                }
                not_tipo_delete:

            }

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
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'LIHotelBundle_homepage');
            }

            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::indexAction',  '_route' => 'LIHotelBundle_homepage',);
        }

        // LIHotelBundle_consultar
        if ($pathinfo === '/consultar') {
            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::consultarAction',  '_route' => 'LIHotelBundle_consultar',);
        }

        if (0 === strpos($pathinfo, '/registro')) {
            // LIHotelBundle_registro
            if ($pathinfo === '/registro') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::registroAction',  '_route' => 'LIHotelBundle_registro',);
            }

            // LIHotelBundle_registro_admin
            if ($pathinfo === '/registroAdmin') {
                return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::registro_adminAction',  '_route' => 'LIHotelBundle_registro_admin',);
            }

        }

        // _admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::adminAction',  '_route' => '_admin',);
        }

        // _user
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'LI\\Bundle\\HotelBundle\\Controller\\InicioController::userAction',  '_route' => '_user',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
