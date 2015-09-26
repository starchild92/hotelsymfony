<?php

/* LIHotelBundle:CategoriaHabitacion:edit.html.twig */
class __TwigTemplate_7c70499c7645175d53e7fb2764f5692fbd06d12341fd73f28a75ee208dd4b34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:CategoriaHabitacion:edit.html.twig", 1);
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
        $__internal_f8b44371aa2c5a9c6f386861be313685ccbec42ef188b6ae2bf5f203934f2b95 = $this->env->getExtension("native_profiler");
        $__internal_f8b44371aa2c5a9c6f386861be313685ccbec42ef188b6ae2bf5f203934f2b95->enter($__internal_f8b44371aa2c5a9c6f386861be313685ccbec42ef188b6ae2bf5f203934f2b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:CategoriaHabitacion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b44371aa2c5a9c6f386861be313685ccbec42ef188b6ae2bf5f203934f2b95->leave($__internal_f8b44371aa2c5a9c6f386861be313685ccbec42ef188b6ae2bf5f203934f2b95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a5b75c35821f3fb06eda4e865c72d8067c653ec1e772050270864ab7e832500 = $this->env->getExtension("native_profiler");
        $__internal_8a5b75c35821f3fb06eda4e865c72d8067c653ec1e772050270864ab7e832500->enter($__internal_8a5b75c35821f3fb06eda4e865c72d8067c653ec1e772050270864ab7e832500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CategoriaHabitacion edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_8a5b75c35821f3fb06eda4e865c72d8067c653ec1e772050270864ab7e832500->leave($__internal_8a5b75c35821f3fb06eda4e865c72d8067c653ec1e772050270864ab7e832500_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:CategoriaHabitacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>CategoriaHabitacion edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('categoriahabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
