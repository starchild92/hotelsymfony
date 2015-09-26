<?php

/* LIHotelBundle:Inicio:index.html.twig */
class __TwigTemplate_74b2ce2d347ed5e2533df693853666d57d089cfd54699cbd6faea2e7a81092aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::base.html.twig", "LIHotelBundle:Inicio:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIHotelBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- =================== Carousel =================== -->
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
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_4.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>Example headline.</h1>
\t\t\t\t\t\t<p>Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-default\" href=\"#\" role=\"button\">Sign up today</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"second-slide\" src=\"";
        // line 25
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
        // line 35
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
        // line 45
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
\t</div>
\t<!-- =================== Carousel =================== -->

\t<div class=\"container marketing\" style=\"margin-bottom: 20px\">
\t\t<!-- START THE FEATURETTES -->
\t\t<hr class=\"featurette-divider-little\">
\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">El lugar más remoto para su descanso <span class=\"text-muted\">o ¡Ocultar un cadáver!</span></h2>
\t\t\t\t<p class=\"lead\">Rodeado de un valle de montañas rocosas y con la civilización más cercana a 700k, nuestro hotel es el más inóspito después del 'Overlook' de 'The Shinning', además somos visitados cada 6 meses por un grupo del ISIS.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<img class=\"featurette-image img-responsive img-rounded center-block\" alt=\"Generic placeholder image\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/image_1.jpeg"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<!-- /END THE FEATURETTES -->
\t</div>
";
    }

    // line 81
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 82
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 82,  127 => 81,  117 => 75,  84 => 45,  71 => 35,  58 => 25,  45 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }
}
