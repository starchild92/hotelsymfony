<?php

/* LIHotelBundle:Llamada:new.html.twig */
class __TwigTemplate_4246dac9bd80d256c0897284138ba98b8192ffc9b16c62ec8c5094436ba8e5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Llamada:new.html.twig", 1);
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
        $__internal_1d74631a3579594f7442867e73da08546694f74532ca95b91b286db28d2c85ac = $this->env->getExtension("native_profiler");
        $__internal_1d74631a3579594f7442867e73da08546694f74532ca95b91b286db28d2c85ac->enter($__internal_1d74631a3579594f7442867e73da08546694f74532ca95b91b286db28d2c85ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Llamada:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d74631a3579594f7442867e73da08546694f74532ca95b91b286db28d2c85ac->leave($__internal_1d74631a3579594f7442867e73da08546694f74532ca95b91b286db28d2c85ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43cadbff85dc97438d6ba9bf924d7e06bf5dcafbbdc0af11ac3a1596e5af21e6 = $this->env->getExtension("native_profiler");
        $__internal_43cadbff85dc97438d6ba9bf924d7e06bf5dcafbbdc0af11ac3a1596e5af21e6->enter($__internal_43cadbff85dc97438d6ba9bf924d7e06bf5dcafbbdc0af11ac3a1596e5af21e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
    \t<h1>Llamada creation</h1>
\t</div>
\t";
        // line 8
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 9
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("llamada");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
</div>
";
        
        $__internal_43cadbff85dc97438d6ba9bf924d7e06bf5dcafbbdc0af11ac3a1596e5af21e6->leave($__internal_43cadbff85dc97438d6ba9bf924d7e06bf5dcafbbdc0af11ac3a1596e5af21e6_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Llamada:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*     	<h1>Llamada creation</h1>*/
/* 	</div>*/
/* 	{% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('llamada') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
