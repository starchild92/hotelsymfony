<?php

/* LIHotelBundle:CategoriaHabitacion:show.html.twig */
class __TwigTemplate_d0945a045c58ac163c62f87778ab967f735adf772145f22c6f057856b6dd91b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:CategoriaHabitacion:show.html.twig", 1);
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
        $__internal_19f968d7853b1478861c0c6f67f913565415dd46d76bc32d3a4b44d8e8eaa258 = $this->env->getExtension("native_profiler");
        $__internal_19f968d7853b1478861c0c6f67f913565415dd46d76bc32d3a4b44d8e8eaa258->enter($__internal_19f968d7853b1478861c0c6f67f913565415dd46d76bc32d3a4b44d8e8eaa258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:CategoriaHabitacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f968d7853b1478861c0c6f67f913565415dd46d76bc32d3a4b44d8e8eaa258->leave($__internal_19f968d7853b1478861c0c6f67f913565415dd46d76bc32d3a4b44d8e8eaa258_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c7a120e55f7cec5113efcb4e63a14e5fd7e06714121a727753812557c7be77 = $this->env->getExtension("native_profiler");
        $__internal_a0c7a120e55f7cec5113efcb4e63a14e5fd7e06714121a727753812557c7be77->enter($__internal_a0c7a120e55f7cec5113efcb4e63a14e5fd7e06714121a727753812557c7be77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CategoriaHabitacion</h1>

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
        echo $this->env->getExtension('routing')->getPath("categoriahabitacion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoriahabitacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_a0c7a120e55f7cec5113efcb4e63a14e5fd7e06714121a727753812557c7be77->leave($__internal_a0c7a120e55f7cec5113efcb4e63a14e5fd7e06714121a727753812557c7be77_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:CategoriaHabitacion:show.html.twig";
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
/*     <h1>CategoriaHabitacion</h1>*/
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
/*         <a href="{{ path('categoriahabitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('categoriahabitacion_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
