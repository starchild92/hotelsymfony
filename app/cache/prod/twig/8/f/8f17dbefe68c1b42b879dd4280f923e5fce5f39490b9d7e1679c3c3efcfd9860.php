<?php

/* LIHotelBundle:Inicio:consultar.html.twig */
class __TwigTemplate_8f17dbefe68c1b42b879dd4280f923e5fce5f39490b9d7e1679c3c3efcfd9860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LIHotelBundle:Inicio:consultar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
        echo "    <div class=\"container\" style=\"padding-top: 60px;\">
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
