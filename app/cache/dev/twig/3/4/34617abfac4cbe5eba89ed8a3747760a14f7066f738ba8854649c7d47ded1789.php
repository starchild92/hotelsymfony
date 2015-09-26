<?php

/* LIHotelBundle:Llamada:show.html.twig */
class __TwigTemplate_0e9e4f05fe192c73cc1376cb494fcabe4a9b5998fa3e32968515fc127affba9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Llamada:show.html.twig", 1);
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
        $__internal_0fb87531f4343f5fe96155636e0a2aeea610224cd2d5da6dbb588392a5a2396a = $this->env->getExtension("native_profiler");
        $__internal_0fb87531f4343f5fe96155636e0a2aeea610224cd2d5da6dbb588392a5a2396a->enter($__internal_0fb87531f4343f5fe96155636e0a2aeea610224cd2d5da6dbb588392a5a2396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Llamada:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb87531f4343f5fe96155636e0a2aeea610224cd2d5da6dbb588392a5a2396a->leave($__internal_0fb87531f4343f5fe96155636e0a2aeea610224cd2d5da6dbb588392a5a2396a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01669076e0247d7b2a5b268e880f0833f410cb5b5bbbe37e0b72b3d5c2739985 = $this->env->getExtension("native_profiler");
        $__internal_01669076e0247d7b2a5b268e880f0833f410cb5b5bbbe37e0b72b3d5c2739985->enter($__internal_01669076e0247d7b2a5b268e880f0833f410cb5b5bbbe37e0b72b3d5c2739985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Llamada</h1>
    </div>

    <table class=\"table table-striped record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Costo</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "costo", array()), "html", null, true);
        echo " Bs</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("llamada");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("llamada_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
        
        $__internal_01669076e0247d7b2a5b268e880f0833f410cb5b5bbbe37e0b72b3d5c2739985->leave($__internal_01669076e0247d7b2a5b268e880f0833f410cb5b5bbbe37e0b72b3d5c2739985_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Llamada:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  83 => 33,  75 => 28,  65 => 21,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Llamada</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ entity.tipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Costo</th>*/
/*                 <td>{{ entity.costo }} Bs</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('llamada') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('llamada_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
