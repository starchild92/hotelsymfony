<?php

/* LIHotelBundle:CategoriaHabitacion:new.html.twig */
class __TwigTemplate_f2384b2419415e53b865f5f2d319bc58cedb34b3643ccae14163d40e0cdba0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:CategoriaHabitacion:new.html.twig", 1);
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
        $__internal_fc4b5068dcc05ec36f75696c47bb365bda7db15099892f9e2bd12d28c1140bae = $this->env->getExtension("native_profiler");
        $__internal_fc4b5068dcc05ec36f75696c47bb365bda7db15099892f9e2bd12d28c1140bae->enter($__internal_fc4b5068dcc05ec36f75696c47bb365bda7db15099892f9e2bd12d28c1140bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:CategoriaHabitacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4b5068dcc05ec36f75696c47bb365bda7db15099892f9e2bd12d28c1140bae->leave($__internal_fc4b5068dcc05ec36f75696c47bb365bda7db15099892f9e2bd12d28c1140bae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcc1188cebaa8485ec21e3a228e34ad70d700b0f87d0d54f617b2aeebc082a5e = $this->env->getExtension("native_profiler");
        $__internal_bcc1188cebaa8485ec21e3a228e34ad70d700b0f87d0d54f617b2aeebc082a5e->enter($__internal_bcc1188cebaa8485ec21e3a228e34ad70d700b0f87d0d54f617b2aeebc082a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CategoriaHabitacion creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("categoriahabitacion");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_bcc1188cebaa8485ec21e3a228e34ad70d700b0f87d0d54f617b2aeebc082a5e->leave($__internal_bcc1188cebaa8485ec21e3a228e34ad70d700b0f87d0d54f617b2aeebc082a5e_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:CategoriaHabitacion:new.html.twig";
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
/*     <h1>CategoriaHabitacion creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('categoriahabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
