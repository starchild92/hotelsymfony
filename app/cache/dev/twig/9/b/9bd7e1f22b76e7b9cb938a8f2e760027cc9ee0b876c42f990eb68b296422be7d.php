<?php

/* LIHotelBundle:Habitacion:index.html.twig */
class __TwigTemplate_b40ca4802fa67f6484fd980a1497662f5ac122bdbd6f26c47f90d2c45c878b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Habitacion:index.html.twig", 1);
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
        $__internal_b1afac00a186f177c98a6efefe547a2385f756925e9d64a6824b88990ec07586 = $this->env->getExtension("native_profiler");
        $__internal_b1afac00a186f177c98a6efefe547a2385f756925e9d64a6824b88990ec07586->enter($__internal_b1afac00a186f177c98a6efefe547a2385f756925e9d64a6824b88990ec07586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Habitacion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1afac00a186f177c98a6efefe547a2385f756925e9d64a6824b88990ec07586->leave($__internal_b1afac00a186f177c98a6efefe547a2385f756925e9d64a6824b88990ec07586_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c01f13d9a4d68a440e0bc5eb9cda7d2681f0979d59721219df43dd4fd88cded = $this->env->getExtension("native_profiler");
        $__internal_2c01f13d9a4d68a440e0bc5eb9cda7d2681f0979d59721219df43dd4fd88cded->enter($__internal_2c01f13d9a4d68a440e0bc5eb9cda7d2681f0979d59721219df43dd4fd88cded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Habitacion list</h1>
    </div>

    <table class=\"table table-striped records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Caracteristicas de la Habitación</th>
                <th>Numero</th>
                <th>Nombre</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>
                    <table class=\"table\">
                        <tr>
                            <td>Categoria</td>
                            <td>Tipo</td>
                        </tr>
                        <tr>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "tipo", array()), "categoriaHabitacion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "tipo", array()), "tipoHabitacion", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td>Descripción</td>
                            <td>Servicios</td>
                            <td>Cant. Bebidas</td>
                        </tr>
                        <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "tipo", array()), "espacioInterno", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "tipo", array()), "servicios", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "tipo", array()), "bebidasMinibar", array())), "html", null, true);
            echo "</td></tr>
                    </table>
                </td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 60
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("habitacion_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_2c01f13d9a4d68a440e0bc5eb9cda7d2681f0979d59721219df43dd4fd88cded->leave($__internal_2c01f13d9a4d68a440e0bc5eb9cda7d2681f0979d59721219df43dd4fd88cded_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Habitacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  141 => 60,  129 => 54,  123 => 51,  116 => 47,  112 => 46,  106 => 43,  102 => 42,  98 => 41,  87 => 33,  83 => 32,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Habitacion list</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Caracteristicas de la Habitación</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('habitacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.estado }}</td>*/
/*                 <td>*/
/*                     <table class="table">*/
/*                         <tr>*/
/*                             <td>Categoria</td>*/
/*                             <td>Tipo</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>{{ entity.tipo.categoriaHabitacion }}</td>*/
/*                             <td>{{ entity.tipo.tipoHabitacion }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Descripción</td>*/
/*                             <td>Servicios</td>*/
/*                             <td>Cant. Bebidas</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                         <td>{{ entity.tipo.espacioInterno }}</td>*/
/*                         <td>{{ entity.tipo.servicios }}</td>*/
/*                         <td>{{ entity.tipo.bebidasMinibar|length }}</td></tr>*/
/*                     </table>*/
/*                 </td>*/
/*                 <td>{{ entity.numero }}</td>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('habitacion_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('habitacion_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('habitacion_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
