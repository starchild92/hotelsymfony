<?php

/* LIHotelBundle:Reserva:index.html.twig */
class __TwigTemplate_98ab796dc0d3b58635460a5d17ac09ba41f50cef4e1e51fd38371a6abd3f75e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Reserva:index.html.twig", 1);
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
        $__internal_2b4d2fd471e9bc46bbcc8bb34161bcb881ab7f6785d24a9316f02d87d1d84c59 = $this->env->getExtension("native_profiler");
        $__internal_2b4d2fd471e9bc46bbcc8bb34161bcb881ab7f6785d24a9316f02d87d1d84c59->enter($__internal_2b4d2fd471e9bc46bbcc8bb34161bcb881ab7f6785d24a9316f02d87d1d84c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Reserva:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4d2fd471e9bc46bbcc8bb34161bcb881ab7f6785d24a9316f02d87d1d84c59->leave($__internal_2b4d2fd471e9bc46bbcc8bb34161bcb881ab7f6785d24a9316f02d87d1d84c59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1864a6ceaaaf850b9d121f99bd4cb98a38f4bb0f483e8ae4c0e21b235c4ee624 = $this->env->getExtension("native_profiler");
        $__internal_1864a6ceaaaf850b9d121f99bd4cb98a38f4bb0f483e8ae4c0e21b235c4ee624->enter($__internal_1864a6ceaaaf850b9d121f99bd4cb98a38f4bb0f483e8ae4c0e21b235c4ee624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Reserva list</h1>

    <table class=\"table records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estadoreserva</th>
                <th>Habitacion</th>
                <th>Cliente</th>
                <th>Cantidadpersonas</th>
                <th>Diasreserva</th>
                <th>fecha</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserva_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoReserva", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "habitacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cliente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadPersonas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "diasReserva", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserva_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserva_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("reserva_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_1864a6ceaaaf850b9d121f99bd4cb98a38f4bb0f483e8ae4c0e21b235c4ee624->leave($__internal_1864a6ceaaaf850b9d121f99bd4cb98a38f4bb0f483e8ae4c0e21b235c4ee624_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Reserva:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Reserva list</h1>*/
/* */
/*     <table class="table records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Estadoreserva</th>*/
/*                 <th>Habitacion</th>*/
/*                 <th>Cliente</th>*/
/*                 <th>Cantidadpersonas</th>*/
/*                 <th>Diasreserva</th>*/
/*                 <th>fecha</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('reserva_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.estadoReserva }}</td>*/
/*                 <td>{{ entity.habitacion }}</td>*/
/*                 <td>{{ entity.cliente }}</td>*/
/*                 <td>{{ entity.cantidadPersonas }}</td>*/
/*                 <td>{{ entity.diasReserva }}</td>*/
/*                 <td>{{ entity.fecha }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('reserva_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('reserva_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('reserva_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
