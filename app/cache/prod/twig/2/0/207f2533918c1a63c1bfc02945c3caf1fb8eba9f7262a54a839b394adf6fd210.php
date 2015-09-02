<?php

/* ::base.html.twig */
class __TwigTemplate_207f2533918c1a63c1bfc02945c3caf1fb8eba9f7262a54a839b394adf6fd210 extends Twig_Template
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
            <nav class=\"navbar navbar-inverse navbar-static-top\">
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
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "LIHotelBundle_homepage")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "LIHotelBundle_consultar")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "LIHotelBundle_registro")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\">Registro</a></li>
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\"><button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px; margin-left:10px\">Iniciar Sesión</button></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
    <div class=\"container\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <div id=\"london\"></div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/LOGO UC.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"70\" height=\"85\">
                            <h5>Universidad de Carabobo</h5>
                        </div><!-- /.col-md-6 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img src=\"";
        // line 58
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
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/symfony2.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"90\" height=\"90\">
                        </div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Break a leg!\" class=\"img-circle\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/luis.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
                            <h5>Luis Pérez</h5>
                        </div><!-- /.col-md-4 -->
                        <div class=\"col-md-6 col-xs-6\">
                        <img data-toggle=\"tooltip\" title=\"Some people want to set the world on fire.\" class=\"img-circle\" src=\"";
        // line 77
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/fonts/Raleway-Medium.ttf"), "html", null, true);
        echo "') format('truetype');
        }
        @font-face{
          font-family: \"Arya-Regular\";
          src: url('";
        // line 97
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

    // line 46
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 46,  224 => 13,  219 => 9,  213 => 5,  198 => 97,  191 => 93,  172 => 77,  165 => 73,  155 => 66,  144 => 58,  137 => 54,  128 => 47,  126 => 46,  115 => 38,  107 => 37,  99 => 36,  91 => 35,  84 => 31,  73 => 23,  69 => 22,  59 => 14,  57 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
