<?php

/* LIHotelBundle:Bebida:show.html.twig */
class __TwigTemplate_d2b02286987ee554cd9cf4aabaec44c1d4a9b9f8c2d61dd158b5de27e7ef961e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Bebida:show.html.twig", 1);
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
        $__internal_e36d1815f7acf0818a261ad2f90d54096990298c453db2ef831b43e6968c2e66 = $this->env->getExtension("native_profiler");
        $__internal_e36d1815f7acf0818a261ad2f90d54096990298c453db2ef831b43e6968c2e66->enter($__internal_e36d1815f7acf0818a261ad2f90d54096990298c453db2ef831b43e6968c2e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Bebida:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e36d1815f7acf0818a261ad2f90d54096990298c453db2ef831b43e6968c2e66->leave($__internal_e36d1815f7acf0818a261ad2f90d54096990298c453db2ef831b43e6968c2e66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ef2dffe6fc37f6ea1eca97c7da18b79542d249dbc7e1ebb4e82388526e5b9ff = $this->env->getExtension("native_profiler");
        $__internal_4ef2dffe6fc37f6ea1eca97c7da18b79542d249dbc7e1ebb4e82388526e5b9ff->enter($__internal_4ef2dffe6fc37f6ea1eca97c7da18b79542d249dbc7e1ebb4e82388526e5b9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Bebida</h1>
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
                <th>Tipobebida</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoBebida", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoriahabitacion</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaHabitacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marca", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("bebida");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bebida_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
        
        $__internal_4ef2dffe6fc37f6ea1eca97c7da18b79542d249dbc7e1ebb4e82388526e5b9ff->leave($__internal_4ef2dffe6fc37f6ea1eca97c7da18b79542d249dbc7e1ebb4e82388526e5b9ff_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Bebida:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  97 => 41,  89 => 36,  79 => 29,  72 => 25,  65 => 21,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Bebida</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipobebida</th>*/
/*                 <td>{{ entity.tipoBebida }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categoriahabitacion</th>*/
/*                 <td>{{ entity.categoriaHabitacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio</th>*/
/*                 <td>{{ entity.precio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Marca</th>*/
/*                 <td>{{ entity.marca }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('bebida') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('bebida_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
