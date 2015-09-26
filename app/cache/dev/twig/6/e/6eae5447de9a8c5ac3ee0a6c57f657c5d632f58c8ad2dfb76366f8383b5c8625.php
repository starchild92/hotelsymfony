<?php

/* LIHotelBundle:Tipo:index.html.twig */
class __TwigTemplate_9a461ca4c17a880c2effdd39e65bc23ddc77bd126b03f193788fa4d761cb4d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Tipo:index.html.twig", 1);
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
        $__internal_7b033b3dde06d54cf3c235fc3a02c984a1c6692296790b554a206084d9d12bbc = $this->env->getExtension("native_profiler");
        $__internal_7b033b3dde06d54cf3c235fc3a02c984a1c6692296790b554a206084d9d12bbc->enter($__internal_7b033b3dde06d54cf3c235fc3a02c984a1c6692296790b554a206084d9d12bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Tipo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b033b3dde06d54cf3c235fc3a02c984a1c6692296790b554a206084d9d12bbc->leave($__internal_7b033b3dde06d54cf3c235fc3a02c984a1c6692296790b554a206084d9d12bbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22dc00626f9a20c97c000a4a61c7057ed8aa99dc8184cbd2c3648463adb2d82f = $this->env->getExtension("native_profiler");
        $__internal_22dc00626f9a20c97c000a4a61c7057ed8aa99dc8184cbd2c3648463adb2d82f->enter($__internal_22dc00626f9a20c97c000a4a61c7057ed8aa99dc8184cbd2c3648463adb2d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Tipo Habitación <small>como está compuesta cada habitación, máximo 30 habitaciones</small></h1>

    <table class=\" table records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipohabitacion</th>
                <th>Categoriahabitacion</th>
                <th>Precio</th>
                <th>Espaciointerno</th>
                <th>Servicios</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoHabitacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categoriaHabitacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "espacioInterno", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "servicios", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("tipo_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_22dc00626f9a20c97c000a4a61c7057ed8aa99dc8184cbd2c3648463adb2d82f->leave($__internal_22dc00626f9a20c97c000a4a61c7057ed8aa99dc8184cbd2c3648463adb2d82f_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Tipo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Tipo Habitación <small>como está compuesta cada habitación, máximo 30 habitaciones</small></h1>*/
/* */
/*     <table class=" table records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Tipohabitacion</th>*/
/*                 <th>Categoriahabitacion</th>*/
/*                 <th>Precio</th>*/
/*                 <th>Espaciointerno</th>*/
/*                 <th>Servicios</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tipo_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.tipoHabitacion }}</td>*/
/*                 <td>{{ entity.categoriaHabitacion }}</td>*/
/*                 <td>{{ entity.precio }}</td>*/
/*                 <td>{{ entity.espacioInterno }}</td>*/
/*                 <td>{{ entity.servicios }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('tipo_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('tipo_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('tipo_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
