<?php

/* LIHotelBundle:Tipo:show.html.twig */
class __TwigTemplate_d44b9cf431599bea62a48714b6b3507e2d63cd184468b8c9887316f35e782f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Tipo:show.html.twig", 1);
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
        $__internal_d8ba4f64ef3532403f986e7daec855e69d5364b91e23280ca46baa496feaf36c = $this->env->getExtension("native_profiler");
        $__internal_d8ba4f64ef3532403f986e7daec855e69d5364b91e23280ca46baa496feaf36c->enter($__internal_d8ba4f64ef3532403f986e7daec855e69d5364b91e23280ca46baa496feaf36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Tipo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ba4f64ef3532403f986e7daec855e69d5364b91e23280ca46baa496feaf36c->leave($__internal_d8ba4f64ef3532403f986e7daec855e69d5364b91e23280ca46baa496feaf36c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb3a63f8f317b38c7e7d3b92ab06c398ebab69b6bbae4a45945458433ce77442 = $this->env->getExtension("native_profiler");
        $__internal_cb3a63f8f317b38c7e7d3b92ab06c398ebab69b6bbae4a45945458433ce77442->enter($__internal_cb3a63f8f317b38c7e7d3b92ab06c398ebab69b6bbae4a45945458433ce77442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Tipo</h1>

\t<table class=\"record_properties\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Tipohabitacion</th>
\t\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoHabitacion", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Categoriahabitacion</th>
\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaHabitacion", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Precio</th>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Espaciointerno</th>
\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "espacioInterno", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Servicios</th>
\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "servicios", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Bebidasminibar</th>
\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bebidas"]) ? $context["bebidas"] : $this->getContext($context, "bebidas")));
        foreach ($context['_seq'] as $context["_key"] => $context["bebida"]) {
            // line 35
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "marca", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "cantidad", array()), "html", null, true);
            echo " unidades</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "precio", array()), "html", null, true);
            echo " Bs</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "tipoBebida", array()), "html", null, true);
            echo " unidades</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bebida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</tr>
\t\t</tbody>
\t</table>

\t\t<ul class=\"record_actions\">
\t<li>
\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("tipo");
        echo "\">
\t\t\tBack to the list
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
\t\t\tEdit
\t\t</a>
\t</li>
\t<li>";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_cb3a63f8f317b38c7e7d3b92ab06c398ebab69b6bbae4a45945458433ce77442->leave($__internal_cb3a63f8f317b38c7e7d3b92ab06c398ebab69b6bbae4a45945458433ce77442_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Tipo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  134 => 53,  126 => 48,  118 => 42,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  94 => 35,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* 	<h1>Tipo</h1>*/
/* */
/* 	<table class="record_properties">*/
/* 		<tbody>*/
/* 			<tr>*/
/* 				<th>Id</th>*/
/* 				<td>{{ entity.id }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Tipohabitacion</th>*/
/* 				<td>{{ entity.tipoHabitacion }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Categoriahabitacion</th>*/
/* 				<td>{{ entity.categoriaHabitacion }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Precio</th>*/
/* 				<td>{{ entity.precio }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Espaciointerno</th>*/
/* 				<td>{{ entity.espacioInterno }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Servicios</th>*/
/* 				<td>{{ entity.servicios }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Bebidasminibar</th>*/
/* 				{% for bebida in bebidas %}*/
/* 				<tr>*/
/* 					<td>{{ bebida.marca }}</td>*/
/* 					<td>{{ bebida.cantidad }} unidades</td>*/
/* 					<td>{{ bebida.precio }} Bs</td>*/
/* 					<td>{{ bebida.tipoBebida }} unidades</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* 			</tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* 		<ul class="record_actions">*/
/* 	<li>*/
/* 		<a href="{{ path('tipo') }}">*/
/* 			Back to the list*/
/* 		</a>*/
/* 	</li>*/
/* 	<li>*/
/* 		<a href="{{ path('tipo_edit', { 'id': entity.id }) }}">*/
/* 			Edit*/
/* 		</a>*/
/* 	</li>*/
/* 	<li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
