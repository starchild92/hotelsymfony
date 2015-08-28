<?php

/* default/index.html.twig */
class __TwigTemplate_635677bac68bf4e764e132c9cb4e46e7c237c21a7ecd1790064a69d025aba1b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"navbar-wrapper\">
\t\t<div class=\"container\">
\t\t<nav class=\"navbar navbar-inverse navbar-static-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t        <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\">
\t\t\t\t      </a>
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand brandname\" href=\"#\">Hotel Symfony</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">Inicio</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Consultar</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Registro</a></li>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px;\">Iniciar Sesión</button>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t</div>
\t</div>

\t<!-- Carousel
\t================================================== -->
\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<!-- Indicators -->
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t</ol>
\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t<div class=\"item active\">
\t\t\t\t<img class=\"first-slide\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_4.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>Example headline.</h1>
\t\t\t\t\t\t<p>Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Sign up today</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"second-slide\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_1.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>Another example headline.</h1>
\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"third-slide\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_2.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>One more for good measure.</h1>
\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"third-slide\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_3.jpg"), "html", null, true);
        echo "\" alt=\"Fourth slide\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>One more for good measure.</h1>
\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div
\t\t</div>
\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
\t</div><!-- /.carousel -->

\t<div class=\"container marketing\" style=\"margin-bottom: 20px\">
\t\t<!-- START THE FEATURETTES -->
\t\t<hr class=\"featurette-divider-little\">
\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">El lugar más remoto para su descanso <span class=\"text-muted\">o ¡ocultar un cadaver!</span></h2>
\t\t\t\t<p class=\"lead\">Rodeado de un valle de montañas rocosas y con la civilización más cercana a 700k, nuestro hotel es el más inóspito después del 'Overlook' de 'The Shinning', además somos visitados cada 6 meses por un grupo del ISIS.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<img class=\"featurette-image img-responsive center-block\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/image_1.jpeg"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<!-- /END THE FEATURETTES -->
\t</div>
";
    }

    // line 111
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 112
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/bootstrap.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 117,  177 => 116,  174 => 115,  168 => 113,  163 => 112,  160 => 111,  150 => 104,  118 => 75,  105 => 65,  92 => 55,  79 => 45,  41 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
