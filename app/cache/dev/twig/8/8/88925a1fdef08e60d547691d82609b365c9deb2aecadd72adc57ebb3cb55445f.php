<?php

/* LIHotelBundle:Habitacion:show.html.twig */
class __TwigTemplate_f58c0723c8d1a76d96ac30506157779df0c7af04fb132b0e3d044f36ec48e86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Habitacion:show.html.twig", 1);
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
        $__internal_4a6e84f411d4bfce515097ede207aaf93632c2da91fe1da4a8f1ab6c176099a5 = $this->env->getExtension("native_profiler");
        $__internal_4a6e84f411d4bfce515097ede207aaf93632c2da91fe1da4a8f1ab6c176099a5->enter($__internal_4a6e84f411d4bfce515097ede207aaf93632c2da91fe1da4a8f1ab6c176099a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Habitacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6e84f411d4bfce515097ede207aaf93632c2da91fe1da4a8f1ab6c176099a5->leave($__internal_4a6e84f411d4bfce515097ede207aaf93632c2da91fe1da4a8f1ab6c176099a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd51a573f6833decf14b04490a39d7b5e43cbcc37b33630e0da76a2f8f7cd02 = $this->env->getExtension("native_profiler");
        $__internal_4dd51a573f6833decf14b04490a39d7b5e43cbcc37b33630e0da76a2f8f7cd02->enter($__internal_4dd51a573f6833decf14b04490a39d7b5e43cbcc37b33630e0da76a2f8f7cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Habitacion</h1>
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
                <th>Estado</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Tipo</th>
                            <th>Espacio Interno</th>
                            <th>Servicios</th>
                            <th>Bebidas del Minibar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "categoriaHabitacion", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "tipoHabitacion", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "espacioInterno", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "servicios", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "bebidasMinibar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bebida"]) {
            // line 37
            echo "                                <tr>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "marca", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "cantidad", array()), "html", null, true);
            echo " unidades</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "precio", array()), "html", null, true);
            echo " Bs</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bebida"], "tipoBebida", array()), "html", null, true);
            echo " unidades</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bebida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</td>
                        </tr>
                    </tbody>
                </table>   
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("habitacion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
        
        $__internal_4dd51a573f6833decf14b04490a39d7b5e43cbcc37b33630e0da76a2f8f7cd02->leave($__internal_4dd51a573f6833decf14b04490a39d7b5e43cbcc37b33630e0da76a2f8f7cd02_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Habitacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 70,  154 => 66,  146 => 61,  136 => 54,  129 => 50,  120 => 43,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Habitacion</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado</th>*/
/*                 <td>{{ entity.estado }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <table class="table">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Categoria</th>*/
/*                             <th>Tipo</th>*/
/*                             <th>Espacio Interno</th>*/
/*                             <th>Servicios</th>*/
/*                             <th>Bebidas del Minibar</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>{{ entity.tipo.categoriaHabitacion }}</td>*/
/*                             <td>{{ entity.tipo.tipoHabitacion }}</td>*/
/*                             <td>{{ entity.tipo.espacioInterno }}</td>*/
/*                             <td>{{ entity.tipo.servicios }}</td>*/
/*                             <td>{% for bebida in entity.tipo.bebidasMinibar %}*/
/*                                 <tr>*/
/*                                 <td>{{ bebida.marca }}</td>*/
/*                                 <td>{{ bebida.cantidad }} unidades</td>*/
/*                                 <td>{{ bebida.precio }} Bs</td>*/
/*                                 <td>{{ bebida.tipoBebida }} unidades</td>*/
/*                             </tr>*/
/*                             {% endfor %}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>   */
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <td>{{ entity.numero }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('habitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('habitacion_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
