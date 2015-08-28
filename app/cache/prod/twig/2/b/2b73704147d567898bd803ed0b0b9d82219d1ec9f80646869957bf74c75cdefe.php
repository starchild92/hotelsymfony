<?php

/* LIHotelBundle::base.html.twig */
class __TwigTemplate_2b73704147d567898bd803ed0b0b9d82219d1ec9f80646869957bf74c75cdefe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LIHotelBundle::base.html.twig", 1);
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
        echo "    <div class=\"navbar-wrapper\">
        <div class=\"container\">
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">
                        <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 10
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_inicio");
        echo "\">Inicio</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                        <li><a href=\"#\">Registro</a></li>
                        <button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px;\">Iniciar Sesión</button>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img class=\"first-slide\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_4.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img class=\"second-slide\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_1.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img class=\"third-slide\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_2.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img class=\"third-slide\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/big_3.jpg"), "html", null, true);
        echo "\" alt=\"Fourth slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div><!-- /.carousel -->

    <div class=\"container marketing\" style=\"margin-bottom: 20px\">
        <!-- START THE FEATURETTES -->
        <hr class=\"featurette-divider-little\">
        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">El lugar más remoto para su descanso <span class=\"text-muted\">o ¡ocultar un cadaver!</span></h2>
                <p class=\"lead\">Rodeado de un valle de montañas rocosas y con la civilización más cercana a 700k, nuestro hotel es el más inóspito después del 'Overlook' de 'The Shinning', además somos visitados cada 6 meses por un grupo del ISIS.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-responsive center-block\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/image_1.jpeg"), "html", null, true);
        echo "\">
            </div>
        </div>
        <!-- /END THE FEATURETTES -->
    </div>
";
    }

    // line 111
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 112
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/css/carousel.css"), "html", null, true);
        echo "\">
";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  188 => 117,  183 => 116,  180 => 115,  174 => 113,  169 => 112,  166 => 111,  156 => 104,  124 => 75,  111 => 65,  98 => 55,  85 => 45,  60 => 23,  56 => 22,  41 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
