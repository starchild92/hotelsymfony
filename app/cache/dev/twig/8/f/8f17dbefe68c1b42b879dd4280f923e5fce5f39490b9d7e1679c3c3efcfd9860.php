<?php

/* LIHotelBundle:Inicio:consultar.html.twig */
class __TwigTemplate_8f17dbefe68c1b42b879dd4280f923e5fce5f39490b9d7e1679c3c3efcfd9860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::base.html.twig", "LIHotelBundle:Inicio:consultar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Hotel Symfony - Consultar";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">
                            <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 12
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
        // line 20
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Hotel Symfony</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\">Registro</a></li>
                            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\"><button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px; margin-left:10px\">Iniciar Sesión</button></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class=\"container\" style=\"padding-top: 60px;\">
        <div class=\"page-header\">
            <h1>Consultar <small>las habitaciones disponibles</small></h1>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 col-xs-4\">
                <div class=\"page-header\" style=\"margin-top:0px;\">
                    <h3 style=\"margin-top:0px;\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>  Fecha</h3>
                </div>
                <article>
                <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
                amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
                Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
                urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
                tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
                condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
                vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
                lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere cubilia Curae.</p>
            </article>
            </div>
            <div class=\"col-md-8 col-xs-8\">
                <article>
                <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
                amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
                Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
                urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
                tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
                condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
                vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
                lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere cubilia Curae.</p>
            </article>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Inicio:consultar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  75 => 26,  71 => 25,  67 => 24,  60 => 20,  49 => 12,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
