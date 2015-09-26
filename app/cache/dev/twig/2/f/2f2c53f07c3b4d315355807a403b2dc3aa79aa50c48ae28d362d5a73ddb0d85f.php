<?php

/* LIHotelBundle::adminBase.html.twig */
class __TwigTemplate_c35eb99e7bc02cb9ce3e02239697c0b8debf3e87bbd6bbb063d7b3bc03588192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3a093de387b4abe339a585835bd5a6c26b566381c3a46e93ae610391a7ca32 = $this->env->getExtension("native_profiler");
        $__internal_cb3a093de387b4abe339a585835bd5a6c26b566381c3a46e93ae610391a7ca32->enter($__internal_cb3a093de387b4abe339a585835bd5a6c26b566381c3a46e93ae610391a7ca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle::adminBase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
\t\t<style type=\"text/css\"> body { padding-top: 70px; font-family: Raleway-Regular; } </style>
\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/modalSesion.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "\t</head>
\t<body>

\t<div class=\"navbar-wrapper\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand brandname\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Hotel Symfony</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\">Facturas</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("compensacion");
        echo "\">Compensaciones</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("reserva");
        echo "\">Reservas</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("bebida");
        echo "\">Bebidas</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("llamada");
        echo "\">Llamadas</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Habitaciones <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Operaciones de Consulta</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("habitacion");
        echo "\">Est. Habitaciones</a></li>
\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Tareas Administrativas</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("tipo");
        echo "\">Crear Nuevo Tipo Habitación</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("tipohabitacion");
        echo "\">Tipos de Habitación</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("categoriahabitacion");
        echo "\">Categorias de Habitación</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</nav>
\t\t</div>
\t</div>

\t<div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid\" style=\"margin-bottom: 20px; margin-top: 20px;\">
\t\t\t<div id=\"london\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/LOGO UC.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"70\" height=\"85\">
\t\t\t\t\t\t\t<h5>Universidad de Carabobo</h5>
\t\t\t\t\t\t</div><!-- /.col-md-6 -->
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/LOGO FACYT.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"80\" height=\"85\">
\t\t\t\t\t\t\t<h5>Facultad Experimental de Ciencias y Tecnología</h5>
\t\t\t\t\t\t</div><!-- /.col-md-6 -->
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\" id=\"lado\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<img data-toggle=\"tooltip\" title=\"Jajaja, Necesitas tiempo, tutoriales y mucha lectura para dominarme!\" class=\"img-circle\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/symfony2.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"90\" height=\"90\">
\t\t\t\t\t\t</div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\" id=\"lado\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<img data-toggle=\"tooltip\" title=\"Break a leg!\" class=\"img-circle\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/luis.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
\t\t\t\t\t\t\t<h5>Luis Pérez</h5>
\t\t\t\t\t\t</div><!-- /.col-md-4 -->
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t<img data-toggle=\"tooltip\" title=\"Some people want to set the world on fire.\" class=\"img-circle\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/ivo.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
\t\t\t\t\t\t\t<h5>Ivonne Ortega</h5>
\t\t\t\t\t\t</div><!-- /.col-md-4 -->
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t</body>
</html>
<style type=\"text/css\">
\t@font-face{
\t  font-family: \"Raleway-Regular\";
\t  src: url('";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/fonts/Raleway-Medium.ttf"), "html", null, true);
        echo "') format('truetype');
\t}
\th5{ text-align: center; }
\t#london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }
\t#lado{ border-left: 1px solid #eeeeee; }
</style>
<script>
\$(document).ready(function(){
\t\$('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>";
        
        $__internal_cb3a093de387b4abe339a585835bd5a6c26b566381c3a46e93ae610391a7ca32->leave($__internal_cb3a093de387b4abe339a585835bd5a6c26b566381c3a46e93ae610391a7ca32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce4bb4dba5343855deb5e70b761dab63c54176de7d8f5c4f68ea3227336535a7 = $this->env->getExtension("native_profiler");
        $__internal_ce4bb4dba5343855deb5e70b761dab63c54176de7d8f5c4f68ea3227336535a7->enter($__internal_ce4bb4dba5343855deb5e70b761dab63c54176de7d8f5c4f68ea3227336535a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel Symfony - Administrativo";
        
        $__internal_ce4bb4dba5343855deb5e70b761dab63c54176de7d8f5c4f68ea3227336535a7->leave($__internal_ce4bb4dba5343855deb5e70b761dab63c54176de7d8f5c4f68ea3227336535a7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a2754603cd789e68865793ccf76a5c3cc124d59068e11891f6ac73b0d1219ee = $this->env->getExtension("native_profiler");
        $__internal_3a2754603cd789e68865793ccf76a5c3cc124d59068e11891f6ac73b0d1219ee->enter($__internal_3a2754603cd789e68865793ccf76a5c3cc124d59068e11891f6ac73b0d1219ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3a2754603cd789e68865793ccf76a5c3cc124d59068e11891f6ac73b0d1219ee->leave($__internal_3a2754603cd789e68865793ccf76a5c3cc124d59068e11891f6ac73b0d1219ee_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fb36e5d011abfc60f8dde16a751c8a36ec9de97ddf7e47d5ef993fe59660db0 = $this->env->getExtension("native_profiler");
        $__internal_3fb36e5d011abfc60f8dde16a751c8a36ec9de97ddf7e47d5ef993fe59660db0->enter($__internal_3fb36e5d011abfc60f8dde16a751c8a36ec9de97ddf7e47d5ef993fe59660db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3fb36e5d011abfc60f8dde16a751c8a36ec9de97ddf7e47d5ef993fe59660db0->leave($__internal_3fb36e5d011abfc60f8dde16a751c8a36ec9de97ddf7e47d5ef993fe59660db0_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_60a2ac68580b1274fc6e7fb7f223e4fc46f49f774e35818b408c11a02a67ed8a = $this->env->getExtension("native_profiler");
        $__internal_60a2ac68580b1274fc6e7fb7f223e4fc46f49f774e35818b408c11a02a67ed8a->enter($__internal_60a2ac68580b1274fc6e7fb7f223e4fc46f49f774e35818b408c11a02a67ed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60a2ac68580b1274fc6e7fb7f223e4fc46f49f774e35818b408c11a02a67ed8a->leave($__internal_60a2ac68580b1274fc6e7fb7f223e4fc46f49f774e35818b408c11a02a67ed8a_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle::adminBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 65,  262 => 17,  251 => 12,  239 => 5,  221 => 110,  206 => 98,  199 => 94,  189 => 87,  178 => 79,  171 => 75,  160 => 66,  158 => 65,  143 => 53,  139 => 52,  135 => 51,  129 => 48,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  98 => 35,  87 => 27,  83 => 26,  73 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<title>{% block title %}Hotel Symfony - Administrativo{% endblock %}</title>*/
/* 		*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('bundles/lihotel/images/icon.ico') }}" />*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/bootstrap.css') }}">*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/bootstrap-theme.css') }}">*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/carousel.css') }}">*/
/* 		<style type="text/css"> body { padding-top: 70px; font-family: Raleway-Regular; } </style>*/
/* 		{% block stylesheets %}{% endblock %}*/
/* */
/* 		<script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/* 		<script src="{{ asset('bundles/lihotel/js/bootstrap.min.js') }}"></script>*/
/* 		<script src="{{ asset('bundles/lihotel/js/modalSesion.js') }}"></script>*/
/* 		{% block javascripts %}{% endblock %}*/
/* 	</head>*/
/* 	<body>*/
/* */
/* 	<div class="navbar-wrapper">*/
/* 		<div class="container">*/
/* 			<nav class="navbar navbar-inverse navbar-fixed-top">*/
/* 			  <div class="container">*/
/* 				<div class="navbar-header">*/
/* 						<a class="navbar-brand" href="{{ path('LIHotelBundle_homepage') }}">*/
/* 							<img width="20" height="20" alt="Brand" src="{{ asset('bundles/lihotel/images/icon.ico') }}">*/
/* 						</a>*/
/* 						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 							<span class="sr-only">Toggle navigation</span>*/
/* 							<span class="icon-bar"></span>*/
/* 							<span class="icon-bar"></span>*/
/* 							<span class="icon-bar"></span>*/
/* 						</button>*/
/* 						<a class="navbar-brand brandname" href="{{ path('LIHotelBundle_homepage') }}">Hotel Symfony</a>*/
/* 					</div>*/
/* 					<div id="navbar" class="navbar-collapse collapse">*/
/* 						<ul class="nav navbar-nav navbar-right">*/
/* 							<li><a href="{{ path('factura') }}">Facturas</a></li>*/
/* 							<li><a href="{{ path('compensacion') }}">Compensaciones</a></li>*/
/* 							<li><a href="{{ path('reserva') }}">Reservas</a></li>*/
/* 							<li><a href="{{ path('bebida') }}">Bebidas</a></li>*/
/* 							<li><a href="{{ path('llamada') }}">Llamadas</a></li>*/
/* 							<li class="dropdown">*/
/* 								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones <span class="caret"></span></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li class="dropdown-header">Operaciones de Consulta</li>*/
/* 									<li><a href="{{ path('habitacion') }}">Est. Habitaciones</a></li>*/
/* 									<li role="separator" class="divider"></li>*/
/* 									<li class="dropdown-header">Tareas Administrativas</li>*/
/* 									<li><a href="{{ path('tipo') }}">Crear Nuevo Tipo Habitación</a></li>*/
/* 									<li><a href="{{ path('tipohabitacion') }}">Tipos de Habitación</a></li>*/
/* 									<li><a href="{{ path('categoriahabitacion') }}">Categorias de Habitación</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 			  </div>*/
/* 			</nav>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="container">*/
/*         <div class="row">*/
/* 			{% block body %}{% endblock %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="container-fluid" style="margin-bottom: 20px; margin-top: 20px;">*/
/* 			<div id="london"></div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-4">*/
/* 					<center>*/
/* 						<div class="col-md-6 col-xs-6">*/
/* 						<img src="{{ asset('bundles/lihotel/images/LOGO UC.png') }}" alt="rude" width="70" height="85">*/
/* 							<h5>Universidad de Carabobo</h5>*/
/* 						</div><!-- /.col-md-6 -->*/
/* 						<div class="col-md-6 col-xs-6">*/
/* 						<img src="{{ asset('bundles/lihotel/images/LOGO FACYT.png') }}" alt="rude" width="80" height="85">*/
/* 							<h5>Facultad Experimental de Ciencias y Tecnología</h5>*/
/* 						</div><!-- /.col-md-6 -->*/
/* 					</center>*/
/* 				</div>*/
/* 				<div class="col-md-4" id="lado">*/
/* 					<center>*/
/* 						<div class="col-md-12">*/
/* 						<img data-toggle="tooltip" title="Jajaja, Necesitas tiempo, tutoriales y mucha lectura para dominarme!" class="img-circle" src="{{ asset('bundles/lihotel/images/symfony2.png') }}" alt="rude" width="90" height="90">*/
/* 						</div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>*/
/* 					</center>*/
/* 				</div>*/
/* 				<div class="col-md-4" id="lado">*/
/* 					<center>*/
/* 						<div class="col-md-6 col-xs-6">*/
/* 						<img data-toggle="tooltip" title="Break a leg!" class="img-circle" src="{{ asset('bundles/lihotel/images/luis.jpg') }}" alt="rude" width="85" height="85">*/
/* 							<h5>Luis Pérez</h5>*/
/* 						</div><!-- /.col-md-4 -->*/
/* 						<div class="col-md-6 col-xs-6">*/
/* 						<img data-toggle="tooltip" title="Some people want to set the world on fire." class="img-circle" src="{{ asset('bundles/lihotel/images/ivo.jpg') }}" alt="rude" width="85" height="85">*/
/* 							<h5>Ivonne Ortega</h5>*/
/* 						</div><!-- /.col-md-4 -->*/
/* 					</center>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* 	</body>*/
/* </html>*/
/* <style type="text/css">*/
/* 	@font-face{*/
/* 	  font-family: "Raleway-Regular";*/
/* 	  src: url('{{ asset('bundles/lihotel/fonts/Raleway-Medium.ttf') }}') format('truetype');*/
/* 	}*/
/* 	h5{ text-align: center; }*/
/* 	#london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }*/
/* 	#lado{ border-left: 1px solid #eeeeee; }*/
/* </style>*/
/* <script>*/
/* $(document).ready(function(){*/
/* 	$('[data-toggle="tooltip"]').tooltip();   */
/* });*/
/* </script>*/
