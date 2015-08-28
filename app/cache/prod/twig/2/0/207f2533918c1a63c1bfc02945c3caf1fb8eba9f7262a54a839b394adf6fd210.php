<?php

/* base.html.twig */
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
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">
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
                        <a class=\"navbar-brand brandname\" href=\"#\">Hotel Symfony</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">--Inicio--</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px;\">Iniciar Sesión</button>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
    <div class=\"container\" style=\"margin-bottom: 20px\">
            <div id=\"london\"></div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <center>
                        <div class=\"col-md-6\">
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/LOGO UC.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"70\" height=\"85\">
                            <h5>Universidad de Carabobo</h5>
                        </div><!-- /.col-md-4 -->
                        <div class=\"col-md-6\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/LOGO FACYT.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"80\" height=\"85\">
                            <h5>Facultad Experimental de Ciencias y Tecnología</h5>
                        </div><!-- /.col-md-4 -->
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-12\">
                        <img class=\"img-circle\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/symfony2.png"), "html", null, true);
        echo "\" alt=\"rude\" width=\"90\" height=\"90\">
                        </div><!-- /.col-md-4 --><br>Int. al uso de Frameworks <br>para el Desarrollo de Apps Web<br>Prof. Luis León<br>
                    </center>
                </div>
                <div class=\"col-md-4\" id=\"lado\">
                    <center>
                        <div class=\"col-md-5\">
                        <img data-toggle=\"tooltip\" title=\"Break a leg!\" class=\"img-circle\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/luis.jpg"), "html", null, true);
        echo "\" alt=\"rude\" width=\"85\" height=\"85\">
                            <h5>Luis Pérez</h5>
                        </div><!-- /.col-md-4 -->
                        <div class=\"col-md-5\">
                        <img data-toggle=\"tooltip\" title=\"Some people want to set the world on fire.\" class=\"img-circle\" src=\"";
        // line 76
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/fonts/Raleway-Medium.ttf"), "html", null, true);
        echo "') format('truetype');
        }
        @font-face{
          font-family: \"Arya-Regular\";
          src: url('";
        // line 96
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
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 45,  200 => 14,  195 => 10,  189 => 5,  174 => 96,  167 => 92,  148 => 76,  141 => 72,  131 => 65,  120 => 57,  113 => 53,  104 => 46,  102 => 45,  90 => 36,  86 => 35,  71 => 23,  61 => 15,  59 => 14,  55 => 13,  51 => 12,  48 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
