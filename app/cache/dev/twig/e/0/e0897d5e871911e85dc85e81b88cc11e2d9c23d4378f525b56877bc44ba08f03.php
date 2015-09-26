<?php

/* LIHotelBundle:Factura:index.html.twig */
class __TwigTemplate_636d2ca9655d3a385c10d9c4d0a61508220852084d5195b116f0261e10e0a5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Factura:index.html.twig", 1);
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
        $__internal_13cc4f24519cccbcb936015f3a77f42b8a21ef205a48dc7f62e64904de39f89a = $this->env->getExtension("native_profiler");
        $__internal_13cc4f24519cccbcb936015f3a77f42b8a21ef205a48dc7f62e64904de39f89a->enter($__internal_13cc4f24519cccbcb936015f3a77f42b8a21ef205a48dc7f62e64904de39f89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Factura:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cc4f24519cccbcb936015f3a77f42b8a21ef205a48dc7f62e64904de39f89a->leave($__internal_13cc4f24519cccbcb936015f3a77f42b8a21ef205a48dc7f62e64904de39f89a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55245eed4de1d00a64987eda1ef85846a93f1bed884fc92ef4a201987f17369f = $this->env->getExtension("native_profiler");
        $__internal_55245eed4de1d00a64987eda1ef85846a93f1bed884fc92ef4a201987f17369f->enter($__internal_55245eed4de1d00a64987eda1ef85846a93f1bed884fc92ef4a201987f17369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Factura list</h1>
    </div>

    <table class=\"table table-striped records_list\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dias de Reserva</th>
                <th>Costo Total</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "diasReserva", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "costoTotal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cliente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("factura_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>  
";
        
        $__internal_55245eed4de1d00a64987eda1ef85846a93f1bed884fc92ef4a201987f17369f->leave($__internal_55245eed4de1d00a64987eda1ef85846a93f1bed884fc92ef4a201987f17369f_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Factura:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  111 => 40,  99 => 34,  93 => 31,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Factura list</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Dias de Reserva</th>*/
/*                 <th>Costo Total</th>*/
/*                 <th>Cliente</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('factura_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.diasReserva }}</td>*/
/*                 <td>{{ entity.costoTotal }}</td>*/
/*                 <td>{{ entity.cliente }}</td>*/
/*                 <td>{% if entity.fecha %}{{ entity.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('factura_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('factura_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('factura_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>  */
/* {% endblock %}*/
/* */
