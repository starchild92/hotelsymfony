<?php

/* LIHotelBundle::base.html.twig */
class __TwigTemplate_fb03ff8f35df8ec3673b8a43e5448aeff8f1869b02c7d5cfb6a837a4f6c3fa3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0039020d33fc32472503f26dcf34120e144247f770caaca725be384b74c3fbd3 = $this->env->getExtension("native_profiler");
        $__internal_0039020d33fc32472503f26dcf34120e144247f770caaca725be384b74c3fbd3->enter($__internal_0039020d33fc32472503f26dcf34120e144247f770caaca725be384b74c3fbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/modalSesion.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>

    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-fixed-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">
                            <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\">
                        </a>
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand brandname\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Hotel Symfony</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <a class=\"btn btn-success\" data-toggle=\"modal\" id=\"Modal\" data-target=\"#ModalSesion\">Iniciar Sesión</a>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Inicio</a></li>
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\">Registro</a></li>
                            <li></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- Modal del Inicio de Sesion -->
    <div class=\"modal fade\" id=\"ModalSesion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
        <div class=\"modal-dialog modal-sm\" style=\"width: 400px;\">
            <div class=\"modal-content\" style=\"padding:10px 10px 10px 10px;\">
                <div class=\"row\">
                    <div class=\"col-sm-12 text-center\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/brandimage.png"), "html", null, true);
        echo "\">
                    <h3 class=\"text-center\">Iniciar Sesión</h3>
                    <form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_sesion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'enctype');
        echo " class=\"usuario\">
                        ";
        // line 61
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 62
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "_token", array()), 'widget');
        echo "

                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mail", array()), 'row', array("attr" => array("autocomplete" => "off")));
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "password", array()), 'row', array("attr" => array("autocomplete" => "off")));
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "

                        <button type=\"button submit\" class=\"btn btn-primary btn-block pull-right\">
                            <span class=\"glyphicon glyphicon-user pull-left\" aria-hidden=\"true\"></span> Continuar ... 
                        </button>
                        <p class=\"text-right\"><small>¿No puede entrar en su cuenta?</small></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal del Inicio de Sesion -->

    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "
    <div class=\"container\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <div id=\"london\"></div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/LOGO UC.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"70\" height=\"85\">
                            <h5>Universidad de Carabobo</h5>
                        </div><!-- /.col-md-6 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/LOGO FACYT.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"80\" height=\"85\">
                            <h5>Facultad Experimental de Ciencias y Tecnología</h5>
                        </div><!-- /.col-md-6 -->
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-12\">
                        <img data-toggle=\"tooltip\" title=\"Jajaja, Necesitas tiempo, tutoriales y mucha lectura para dominarme!\" class=\"img-circle\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/symfony2.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"90\" height=\"90\">
                        </div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Break a leg!\" class=\"img-circle\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/luis.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
                            <h5>Luis Pérez</h5>
                        </div><!-- /.col-md-4 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Some people want to set the world on fire.\" class=\"img-circle\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/ivo.jpg"), "html", null, true);
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
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/fonts/Raleway-Medium.ttf"), "html", null, true);
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
        
        $__internal_0039020d33fc32472503f26dcf34120e144247f770caaca725be384b74c3fbd3->leave($__internal_0039020d33fc32472503f26dcf34120e144247f770caaca725be384b74c3fbd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6023cd050b16d30394e7bef3f3fba08d5f2054b9c1b98d748069ef26a304b07e = $this->env->getExtension("native_profiler");
        $__internal_6023cd050b16d30394e7bef3f3fba08d5f2054b9c1b98d748069ef26a304b07e->enter($__internal_6023cd050b16d30394e7bef3f3fba08d5f2054b9c1b98d748069ef26a304b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel Symfony";
        
        $__internal_6023cd050b16d30394e7bef3f3fba08d5f2054b9c1b98d748069ef26a304b07e->leave($__internal_6023cd050b16d30394e7bef3f3fba08d5f2054b9c1b98d748069ef26a304b07e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_245a07a8b650fb0f69adb5fd661b89ad865ac4cf18b4cb926fbe77cab4b34b44 = $this->env->getExtension("native_profiler");
        $__internal_245a07a8b650fb0f69adb5fd661b89ad865ac4cf18b4cb926fbe77cab4b34b44->enter($__internal_245a07a8b650fb0f69adb5fd661b89ad865ac4cf18b4cb926fbe77cab4b34b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_245a07a8b650fb0f69adb5fd661b89ad865ac4cf18b4cb926fbe77cab4b34b44->leave($__internal_245a07a8b650fb0f69adb5fd661b89ad865ac4cf18b4cb926fbe77cab4b34b44_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f02c7e9a3f9a6f7f52c18f82251e3441722069103e861d5fbe590ab601573d5 = $this->env->getExtension("native_profiler");
        $__internal_3f02c7e9a3f9a6f7f52c18f82251e3441722069103e861d5fbe590ab601573d5->enter($__internal_3f02c7e9a3f9a6f7f52c18f82251e3441722069103e861d5fbe590ab601573d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f02c7e9a3f9a6f7f52c18f82251e3441722069103e861d5fbe590ab601573d5->leave($__internal_3f02c7e9a3f9a6f7f52c18f82251e3441722069103e861d5fbe590ab601573d5_prof);

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
        return array (  283 => 81,  272 => 11,  260 => 5,  242 => 128,  223 => 112,  216 => 108,  206 => 101,  195 => 93,  188 => 89,  179 => 82,  177 => 81,  160 => 67,  156 => 66,  152 => 65,  147 => 63,  142 => 62,  140 => 61,  134 => 60,  129 => 58,  110 => 42,  106 => 41,  102 => 40,  92 => 33,  81 => 25,  77 => 24,  65 => 15,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Hotel Symfony{% endblock %}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('bundles/lihotel/images/icon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/bootstrap.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/bootstrap-theme.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/lihotel/css/carousel.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*         <script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/lihotel/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/lihotel/js/modalSesion.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/* */
/*     <div class="navbar-wrapper">*/
/*         <div class="container">*/
/*             <nav class="navbar navbar-default navbar-fixed-top">*/
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
/*                             <a class="btn btn-success" data-toggle="modal" id="Modal" data-target="#ModalSesion">Iniciar Sesión</a>*/
/*                         </form>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li><a href="{{ path('LIHotelBundle_homepage') }}">Inicio</a></li>*/
/*                             <li><a href="{{ path('LIHotelBundle_consultar') }}">Consultar</a></li>*/
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
/*     <!-- Modal del Inicio de Sesion -->*/
/*     <div class="modal fade" id="ModalSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*         <div class="modal-dialog modal-sm" style="width: 400px;">*/
/*             <div class="modal-content" style="padding:10px 10px 10px 10px;">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12 text-center">*/
/*                     <img src="{{ asset('bundles/lihotel/images/brandimage.png') }}">*/
/*                     <h3 class="text-center">Iniciar Sesión</h3>*/
/*                     <form action="{{ path('LIHotelBundle_sesion') }}" method="post" {{ form_enctype(form2) }} class="usuario">*/
/*                         {% form_theme form2 'bootstrap_3_layout.html.twig'  %}*/
/*                         {{ form_errors(form2) }}*/
/*                         {{ form_widget(form2._token) }}*/
/* */
/*                         {{ form_row(form2.mail, {'attr':{'autocomplete':'off'}}) }}*/
/*                         {{ form_row(form2.password, {'attr':{'autocomplete':'off'}}) }}*/
/*                         {{ form_rest(form2) }}*/
/* */
/*                         <button type="button submit" class="btn btn-primary btn-block pull-right">*/
/*                             <span class="glyphicon glyphicon-user pull-left" aria-hidden="true"></span> Continuar ... */
/*                         </button>*/
/*                         <p class="text-right"><small>¿No puede entrar en su cuenta?</small></p>*/
/*                     </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Modal del Inicio de Sesion -->*/
/* */
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
/*         body{*/
/*             font-family: Raleway-Regular;*/
/*         }*/
/*     </style>*/
/*     <script>*/
/*     $(document).ready(function(){*/
/*         $('[data-toggle="tooltip"]').tooltip();   */
/*     });*/
/*     </script>*/
