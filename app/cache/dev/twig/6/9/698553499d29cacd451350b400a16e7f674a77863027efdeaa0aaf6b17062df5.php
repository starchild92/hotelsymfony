<?php

/* LIHotelBundle:Compensacion:index.html.twig */
class __TwigTemplate_31464a1fd66e04e4010b529d1940c5a42b9aa0f70fa395d0a8083068ab31b473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Compensacion:index.html.twig", 1);
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
        $__internal_2fd8e3afc4e5882b22371e01f070df93d4ecb491f77f3f76aca166c42ed25172 = $this->env->getExtension("native_profiler");
        $__internal_2fd8e3afc4e5882b22371e01f070df93d4ecb491f77f3f76aca166c42ed25172->enter($__internal_2fd8e3afc4e5882b22371e01f070df93d4ecb491f77f3f76aca166c42ed25172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Compensacion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd8e3afc4e5882b22371e01f070df93d4ecb491f77f3f76aca166c42ed25172->leave($__internal_2fd8e3afc4e5882b22371e01f070df93d4ecb491f77f3f76aca166c42ed25172_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_693eacc7e939f0cc9db670abc97acf106dfccabfeadf80002db0c37d6bf65ac3 = $this->env->getExtension("native_profiler");
        $__internal_693eacc7e939f0cc9db670abc97acf106dfccabfeadf80002db0c37d6bf65ac3->enter($__internal_693eacc7e939f0cc9db670abc97acf106dfccabfeadf80002db0c37d6bf65ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Compensacion list</h1>
    </div>
    <table class=\"table table-striped records_list\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cobro Porcentual</th>
                <th>(.. de</th>
                <th>.. hasta]</th>
                <th>(.. de</th>
                <th>.. hasta]</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compensacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "porcentaje", array()), "html", null, true);
            echo "%</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deDias", array()), "html", null, true);
            echo " días</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aDias", array()), "html", null, true);
            echo " días</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deHoras", array()), "html", null, true);
            echo " hrs</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aHoras", array()), "html", null, true);
            echo " hrs</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compensacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compensacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("compensacion_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_693eacc7e939f0cc9db670abc97acf106dfccabfeadf80002db0c37d6bf65ac3->leave($__internal_693eacc7e939f0cc9db670abc97acf106dfccabfeadf80002db0c37d6bf65ac3_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Compensacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  113 => 41,  101 => 35,  95 => 32,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Compensacion list</h1>*/
/*     </div>*/
/*     <table class="table table-striped records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Cobro Porcentual</th>*/
/*                 <th>(.. de</th>*/
/*                 <th>.. hasta]</th>*/
/*                 <th>(.. de</th>*/
/*                 <th>.. hasta]</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('compensacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.porcentaje }}%</td>*/
/*                 <td>{{ entity.deDias }} días</td>*/
/*                 <td>{{ entity.aDias }} días</td>*/
/*                 <td>{{ entity.deHoras }} hrs</td>*/
/*                 <td>{{ entity.aHoras }} hrs</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('compensacion_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('compensacion_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('compensacion_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
