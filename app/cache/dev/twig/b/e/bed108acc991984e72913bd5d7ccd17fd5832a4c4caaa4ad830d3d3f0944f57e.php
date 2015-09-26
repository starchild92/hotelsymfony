<?php

/* LIHotelBundle:Compensacion:show.html.twig */
class __TwigTemplate_b3068e5ca77a408c2732e3562624cc13084612b712f00d2c2e5fada7fbcb8947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Compensacion:show.html.twig", 1);
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
        $__internal_13f412f4ef75aa349ebf29c3f4b8bea73c67d748450a7a1028eb6aca8ca75b39 = $this->env->getExtension("native_profiler");
        $__internal_13f412f4ef75aa349ebf29c3f4b8bea73c67d748450a7a1028eb6aca8ca75b39->enter($__internal_13f412f4ef75aa349ebf29c3f4b8bea73c67d748450a7a1028eb6aca8ca75b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Compensacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f412f4ef75aa349ebf29c3f4b8bea73c67d748450a7a1028eb6aca8ca75b39->leave($__internal_13f412f4ef75aa349ebf29c3f4b8bea73c67d748450a7a1028eb6aca8ca75b39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c80eecbdd4ae36551670635e50c9ef034a4263b765fee3bc1e41976bbf89dad = $this->env->getExtension("native_profiler");
        $__internal_8c80eecbdd4ae36551670635e50c9ef034a4263b765fee3bc1e41976bbf89dad->enter($__internal_8c80eecbdd4ae36551670635e50c9ef034a4263b765fee3bc1e41976bbf89dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Compensacion</h1>
    </div>
    <table class=\"table table-striped record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Porcentaje</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "porcentaje", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dedias</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deDias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adias</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aDias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dehoras</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deHoras", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ahoras</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aHoras", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("compensacion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compensacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 48
        $this->env->getExtension('form')->renderer->setTheme((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), array(0 => "bootstrap_3_layout.html.twig"));
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
</div>
";
        
        $__internal_8c80eecbdd4ae36551670635e50c9ef034a4263b765fee3bc1e41976bbf89dad->leave($__internal_8c80eecbdd4ae36551670635e50c9ef034a4263b765fee3bc1e41976bbf89dad_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Compensacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  103 => 44,  95 => 39,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  57 => 16,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Compensacion</h1>*/
/*     </div>*/
/*     <table class="table table-striped record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Porcentaje</th>*/
/*                 <td>{{ entity.porcentaje }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dedias</th>*/
/*                 <td>{{ entity.deDias }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adias</th>*/
/*                 <td>{{ entity.aDias }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dehoras</th>*/
/*                 <td>{{ entity.deHoras }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ahoras</th>*/
/*                 <td>{{ entity.aHoras }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('compensacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('compensacion_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{% form_theme delete_form 'bootstrap_3_layout.html.twig' %}{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
