<?php

/* LIHotelBundle:TipoHabitacion:show.html.twig */
class __TwigTemplate_7d79ba761bdc04f92659929e8dc7622c61e1e072a724ce962f51eb811cd017a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:TipoHabitacion:show.html.twig", 1);
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
        $__internal_c9b1b8aa367d2ee4d458921e9f7ebdf00779852d58ef908ea3297c4a4b058bd4 = $this->env->getExtension("native_profiler");
        $__internal_c9b1b8aa367d2ee4d458921e9f7ebdf00779852d58ef908ea3297c4a4b058bd4->enter($__internal_c9b1b8aa367d2ee4d458921e9f7ebdf00779852d58ef908ea3297c4a4b058bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:TipoHabitacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b1b8aa367d2ee4d458921e9f7ebdf00779852d58ef908ea3297c4a4b058bd4->leave($__internal_c9b1b8aa367d2ee4d458921e9f7ebdf00779852d58ef908ea3297c4a4b058bd4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c3fb8ffe40ab98ff60feb9fd0757911d675ea2181e458c0ca81864440752224 = $this->env->getExtension("native_profiler");
        $__internal_4c3fb8ffe40ab98ff60feb9fd0757911d675ea2181e458c0ca81864440752224->enter($__internal_4c3fb8ffe40ab98ff60feb9fd0757911d675ea2181e458c0ca81864440752224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoHabitacion</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tipohabitacion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipohabitacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_4c3fb8ffe40ab98ff60feb9fd0757911d675ea2181e458c0ca81864440752224->leave($__internal_4c3fb8ffe40ab98ff60feb9fd0757911d675ea2181e458c0ca81864440752224_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:TipoHabitacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TipoHabitacion</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio</th>*/
/*                 <td>{{ entity.precio }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('tipohabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('tipohabitacion_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
