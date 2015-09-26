<?php

/* LIHotelBundle:CategoriaHabitacion:index.html.twig */
class __TwigTemplate_2b88a8951625983199747c352f9dcb7d98e43a41fefbc96df136e8ee27fe1c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:CategoriaHabitacion:index.html.twig", 1);
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
        $__internal_a8526bce988d9d036cc0ed35f0f1ebf40be39b6dc929f7995b84d176efefd3e2 = $this->env->getExtension("native_profiler");
        $__internal_a8526bce988d9d036cc0ed35f0f1ebf40be39b6dc929f7995b84d176efefd3e2->enter($__internal_a8526bce988d9d036cc0ed35f0f1ebf40be39b6dc929f7995b84d176efefd3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:CategoriaHabitacion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8526bce988d9d036cc0ed35f0f1ebf40be39b6dc929f7995b84d176efefd3e2->leave($__internal_a8526bce988d9d036cc0ed35f0f1ebf40be39b6dc929f7995b84d176efefd3e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7672f8f4c3a2102e2acb64c5a8171966bd9fc5050a469bba799030e4a27ba95f = $this->env->getExtension("native_profiler");
        $__internal_7672f8f4c3a2102e2acb64c5a8171966bd9fc5050a469bba799030e4a27ba95f->enter($__internal_7672f8f4c3a2102e2acb64c5a8171966bd9fc5050a469bba799030e4a27ba95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CategoriaHabitacion list</h1>

    <table class=\"table records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoriahabitacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precio", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoriahabitacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoriahabitacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("categoriahabitacion_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_7672f8f4c3a2102e2acb64c5a8171966bd9fc5050a469bba799030e4a27ba95f->leave($__internal_7672f8f4c3a2102e2acb64c5a8171966bd9fc5050a469bba799030e4a27ba95f_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:CategoriaHabitacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>CategoriaHabitacion list</h1>*/
/* */
/*     <table class="table records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Precio</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('categoriahabitacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*                 <td>{{ entity.precio }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('categoriahabitacion_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('categoriahabitacion_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('categoriahabitacion_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
