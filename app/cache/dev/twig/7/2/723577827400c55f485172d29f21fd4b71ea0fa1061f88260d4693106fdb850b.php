<?php

/* LIHotelBundle:TipoHabitacion:edit.html.twig */
class __TwigTemplate_c9abb96c44f2010c0474997c77d23fbfc29cb4db594668220a246a2b9e596853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:TipoHabitacion:edit.html.twig", 1);
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
        $__internal_e34cb2f6331f8bae21a6e32ba2b0058c09e5d3d489a32bbe7d9c95d5bc051a2f = $this->env->getExtension("native_profiler");
        $__internal_e34cb2f6331f8bae21a6e32ba2b0058c09e5d3d489a32bbe7d9c95d5bc051a2f->enter($__internal_e34cb2f6331f8bae21a6e32ba2b0058c09e5d3d489a32bbe7d9c95d5bc051a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:TipoHabitacion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34cb2f6331f8bae21a6e32ba2b0058c09e5d3d489a32bbe7d9c95d5bc051a2f->leave($__internal_e34cb2f6331f8bae21a6e32ba2b0058c09e5d3d489a32bbe7d9c95d5bc051a2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b638e6f061f672969423293f1a2692e39f53f4476c032d582c772a2ef29b4710 = $this->env->getExtension("native_profiler");
        $__internal_b638e6f061f672969423293f1a2692e39f53f4476c032d582c772a2ef29b4710->enter($__internal_b638e6f061f672969423293f1a2692e39f53f4476c032d582c772a2ef29b4710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoHabitacion edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b638e6f061f672969423293f1a2692e39f53f4476c032d582c772a2ef29b4710->leave($__internal_b638e6f061f672969423293f1a2692e39f53f4476c032d582c772a2ef29b4710_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:TipoHabitacion:edit.html.twig";
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
/*     <h1>TipoHabitacion edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('tipohabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
