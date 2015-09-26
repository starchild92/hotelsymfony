<?php

/* LIHotelBundle:Bebida:index.html.twig */
class __TwigTemplate_225dc05456816bf4769c01436933a2bd883d43b7ae4be3b9e5d4efd93b170f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Bebida:index.html.twig", 1);
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
        $__internal_f74cb9b293bac73736948b917955be30017873a49144a4c0f8462e9769af6db4 = $this->env->getExtension("native_profiler");
        $__internal_f74cb9b293bac73736948b917955be30017873a49144a4c0f8462e9769af6db4->enter($__internal_f74cb9b293bac73736948b917955be30017873a49144a4c0f8462e9769af6db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Bebida:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74cb9b293bac73736948b917955be30017873a49144a4c0f8462e9769af6db4->leave($__internal_f74cb9b293bac73736948b917955be30017873a49144a4c0f8462e9769af6db4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d85e6b6aa023fcf772a46dd76af6a9b3ff2faa99a33d426f57f2dd213b3911f = $this->env->getExtension("native_profiler");
        $__internal_3d85e6b6aa023fcf772a46dd76af6a9b3ff2faa99a33d426f57f2dd213b3911f->enter($__internal_3d85e6b6aa023fcf772a46dd76af6a9b3ff2faa99a33d426f57f2dd213b3911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Bebida list</h1>
    </div>

    <table class=\"table table-striped records_list\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo Bebida</th>
                <th>Precio Bebida</th>
                <th>Marca Bebida</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bebida_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoBebida", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precio", array()), "html", null, true);
            echo " Bs</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bebida_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bebida_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 38
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("bebida_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_3d85e6b6aa023fcf772a46dd76af6a9b3ff2faa99a33d426f57f2dd213b3911f->leave($__internal_3d85e6b6aa023fcf772a46dd76af6a9b3ff2faa99a33d426f57f2dd213b3911f_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Bebida:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  104 => 38,  92 => 32,  86 => 29,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Bebida list</h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Tipo Bebida</th>*/
/*                 <th>Precio Bebida</th>*/
/*                 <th>Marca Bebida</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('bebida_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.tipoBebida }}</td>*/
/*                 <td>{{ entity.precio }} Bs</td>*/
/*                 <td>{{ entity.marca }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('bebida_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('bebida_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('bebida_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
