<?php

/* LIHotelBundle:TipoHabitacion:new.html.twig */
class __TwigTemplate_6f0338619ffabf01aca9064403df5445e9e0bfdc407774c51882dbc5a7a89339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:TipoHabitacion:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIHotelBundle::adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd45e0475fefa9d8d115a9f8b2fd62a9cec9810a5f4f772eaf8120aba2c41403 = $this->env->getExtension("native_profiler");
        $__internal_fd45e0475fefa9d8d115a9f8b2fd62a9cec9810a5f4f772eaf8120aba2c41403->enter($__internal_fd45e0475fefa9d8d115a9f8b2fd62a9cec9810a5f4f772eaf8120aba2c41403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:TipoHabitacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd45e0475fefa9d8d115a9f8b2fd62a9cec9810a5f4f772eaf8120aba2c41403->leave($__internal_fd45e0475fefa9d8d115a9f8b2fd62a9cec9810a5f4f772eaf8120aba2c41403_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6247fb2d799ea28c7a505d8ad7f0c652657419fdebc182c1ecf05a5a042380 = $this->env->getExtension("native_profiler");
        $__internal_fe6247fb2d799ea28c7a505d8ad7f0c652657419fdebc182c1ecf05a5a042380->enter($__internal_fe6247fb2d799ea28c7a505d8ad7f0c652657419fdebc182c1ecf05a5a042380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoHabitacion creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tipohabitacion");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_fe6247fb2d799ea28c7a505d8ad7f0c652657419fdebc182c1ecf05a5a042380->leave($__internal_fe6247fb2d799ea28c7a505d8ad7f0c652657419fdebc182c1ecf05a5a042380_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:TipoHabitacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TipoHabitacion creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('tipohabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
