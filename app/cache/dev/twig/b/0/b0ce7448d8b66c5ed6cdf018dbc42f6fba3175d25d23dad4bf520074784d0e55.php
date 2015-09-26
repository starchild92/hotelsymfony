<?php

/* LIHotelBundle:Llamada:index.html.twig */
class __TwigTemplate_6e450c4771a3c3f2c060d0eee4afc1bd6b3085381d8e1b6dfad955966f1798a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Llamada:index.html.twig", 1);
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
        $__internal_f88f5b5961f1a6025b2416d30514a730b665a3f6c7b136834e7c2bac71977aa4 = $this->env->getExtension("native_profiler");
        $__internal_f88f5b5961f1a6025b2416d30514a730b665a3f6c7b136834e7c2bac71977aa4->enter($__internal_f88f5b5961f1a6025b2416d30514a730b665a3f6c7b136834e7c2bac71977aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Llamada:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88f5b5961f1a6025b2416d30514a730b665a3f6c7b136834e7c2bac71977aa4->leave($__internal_f88f5b5961f1a6025b2416d30514a730b665a3f6c7b136834e7c2bac71977aa4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfd04a827c9339ac5c4eda70e1af340d65080af7d08c4f5c9f52de379b125319 = $this->env->getExtension("native_profiler");
        $__internal_bfd04a827c9339ac5c4eda70e1af340d65080af7d08c4f5c9f52de379b125319->enter($__internal_bfd04a827c9339ac5c4eda70e1af340d65080af7d08c4f5c9f52de379b125319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
      <h1>LLamadas <small>valores de los tipos de llamadas por minuto</small></h1>
    </div>

    <table class=\"table table-striped records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo</th>
                <th>Costo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("llamada_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "costo", array()), "html", null, true);
            echo " Bs. por Minuto</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("llamada_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("llamada_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 36
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("llamada_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_bfd04a827c9339ac5c4eda70e1af340d65080af7d08c4f5c9f52de379b125319->leave($__internal_bfd04a827c9339ac5c4eda70e1af340d65080af7d08c4f5c9f52de379b125319_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Llamada:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  99 => 36,  87 => 30,  81 => 27,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*       <h1>LLamadas <small>valores de los tipos de llamadas por minuto</small></h1>*/
/*     </div>*/
/* */
/*     <table class="table table-striped records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Costo</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('llamada_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.tipo }}</td>*/
/*                 <td>{{ entity.costo }} Bs. por Minuto</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('llamada_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('llamada_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('llamada_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
