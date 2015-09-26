<?php

/* LIHotelBundle::base.html.twig */
class __TwigTemplate_3d357daeb066b5bfde8cab81a973d1f65c8696fcf63f318cf4738e4e6873bc14 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/bootstrap.css"), "html", null, true);
        echo "\"><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </head>
    <body>

    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">
                            <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\">
                        </a>
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand brandname\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Hotel Symfony</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\" class=\"btn btn-success\">Iniciar Sesión</a>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"active\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\">Registro</a></li>
                            <li></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
    <div class=\"container\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <div id=\"london\"></div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/LOGO UC.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"70\" height=\"85\">
                            <h5>Universidad de Carabobo</h5>
                        </div><!-- /.col-md-6 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/LOGO FACYT.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"80\" height=\"85\">
                            <h5>Facultad Experimental de Ciencias y Tecnología</h5>
                        </div><!-- /.col-md-6 -->
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-12\">
                        <img data-toggle=\"tooltip\" title=\"Jajaja, Necesitas tiempo, tutoriales y mucha lectura para dominarme!\" class=\"img-circle\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/symfony2.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"90\" height=\"90\">
                        </div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Break a leg!\" class=\"img-circle\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/luis.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
                            <h5>Luis Pérez</h5>
                        </div><!-- /.col-md-4 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Some people want to set the world on fire.\" class=\"img-circle\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/ivo.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
                            <h5>Ivonne Ortega</h5>
                        </div><!-- /.col-md-4 -->
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>

    <style type=\"text/css\">
        h5{ text-align: center; }
        #london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }
        #lado{ border-left: 1px solid #eeeeee; }
        @font-face{
          font-family: \"Raleway-Regular\";
          src: url('";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/fonts/Raleway-Medium.ttf"), "html", null, true);
        echo "') format('truetype');
        }
        @font-face{
          font-family: \"Arya-Regular\";
          src: url('";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/fonts/Arya-Regular.ttf"), "html", null, true);
        echo "') format('truetype');
        }
        body{
            font-family: Raleway-Regular;
        }
    </style>
    <script>
    \$(document).ready(function(){
        \$('[data-toggle=\"tooltip\"]').tooltip();   
    });
    </script>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Hotel Symfony";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LIHotelBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 50,  216 => 13,  211 => 9,  205 => 5,  190 => 101,  183 => 97,  164 => 81,  157 => 77,  147 => 70,  136 => 62,  129 => 58,  120 => 51,  118 => 50,  105 => 40,  101 => 39,  97 => 38,  91 => 35,  84 => 31,  73 => 23,  69 => 22,  59 => 14,  57 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Hotel Symfony{% endblock %}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('bundles/lihotel/images/icon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/bootstrap.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/carousel.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*         <script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/lihotel/js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/*     <div class="navbar-wrapper">*/
/*         <div class="container">*/
/*             <nav class="navbar navbar-default navbar-static-top">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <a class="navbar-brand" href="{{ path('LIHotelBundle_homepage') }}">*/
/*                             <img width="20" height="20" alt="Brand" src="{{ asset('bundles/lihotel/images/icon.ico') }}">*/
/*                         </a>*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand brandname" href="{{ path('LIHotelBundle_homepage') }}">Hotel Symfony</a>*/
/*                     </div>*/
/*                     <div id="navbar" class="navbar-collapse collapse">*/
/*                         <form class="navbar-form navbar-right" role="search">*/
/*                             <a href="{{ path('LIHotelBundle_registro') }}" class="btn btn-success">Iniciar Sesión</a>*/
/*                         </form>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li><a href="{{ path('LIHotelBundle_homepage') }}">Inicio</a></li>*/
/*                             <li class="active"><a href="{{ path('LIHotelBundle_consultar') }}">Consultar</a></li>*/
/*                             <li><a href="{{ path('LIHotelBundle_registro') }}">Registro</a></li>*/
/*                             <li></li>*/
/*                         </ul>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     {% block body %}{% endblock %}*/
/* */
/*     <div class="container" style="margin-bottom: 20px; margin-top: 20px;">*/
/*             <div id="london"></div>*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <center>*/
/*                         <div class="col-md-6 col-xs-6">*/
/*                         <img src="{{ asset('bundles/lihotel/images/LOGO UC.png') }}" alt="rude" width="70" height="85">*/
/*                             <h5>Universidad de Carabobo</h5>*/
/*                         </div><!-- /.col-md-6 -->*/
/*                         <div class="col-md-6 col-xs-6">*/
/*                         <img src="{{ asset('bundles/lihotel/images/LOGO FACYT.png') }}" alt="rude" width="80" height="85">*/
/*                             <h5>Facultad Experimental de Ciencias y Tecnología</h5>*/
/*                         </div><!-- /.col-md-6 -->*/
/*                     </center>*/
/*                 </div>*/
/*                 <div class="col-md-4" id="lado">*/
/*                     <center>*/
/*                         <div class="col-md-12">*/
/*                         <img data-toggle="tooltip" title="Jajaja, Necesitas tiempo, tutoriales y mucha lectura para dominarme!" class="img-circle" src="{{ asset('bundles/lihotel/images/symfony2.png') }}" alt="rude" width="90" height="90">*/
/*                         </div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>*/
/*                     </center>*/
/*                 </div>*/
/*                 <div class="col-md-4" id="lado">*/
/*                     <center>*/
/*                         <div class="col-md-6 col-xs-6">*/
/*                         <img data-toggle="tooltip" title="Break a leg!" class="img-circle" src="{{ asset('bundles/lihotel/images/luis.jpg') }}" alt="rude" width="85" height="85">*/
/*                             <h5>Luis Pérez</h5>*/
/*                         </div><!-- /.col-md-4 -->*/
/*                         <div class="col-md-6 col-xs-6">*/
/*                         <img data-toggle="tooltip" title="Some people want to set the world on fire." class="img-circle" src="{{ asset('bundles/lihotel/images/ivo.jpg') }}" alt="rude" width="85" height="85">*/
/*                             <h5>Ivonne Ortega</h5>*/
/*                         </div><!-- /.col-md-4 -->*/
/*                     </center>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/*     <style type="text/css">*/
/*         h5{ text-align: center; }*/
/*         #london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }*/
/*         #lado{ border-left: 1px solid #eeeeee; }*/
/*         @font-face{*/
/*           font-family: "Raleway-Regular";*/
/*           src: url('{{ asset('bundles/lihotel/fonts/Raleway-Medium.ttf') }}') format('truetype');*/
/*         }*/
/*         @font-face{*/
/*           font-family: "Arya-Regular";*/
/*           src: url('{{ asset('bundles/lihotel/fonts/Arya-Regular.ttf') }}') format('truetype');*/
/*         }*/
/*         body{*/
/*             font-family: Raleway-Regular;*/
/*         }*/
/*     </style>*/
/*     <script>*/
/*     $(document).ready(function(){*/
/*         $('[data-toggle="tooltip"]').tooltip();   */
/*     });*/
/*     </script>*/
