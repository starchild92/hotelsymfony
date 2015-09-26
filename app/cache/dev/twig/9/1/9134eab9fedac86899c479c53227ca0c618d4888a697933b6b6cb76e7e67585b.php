<?php

/* LIHotelBundle:Factura:new.html.twig */
class __TwigTemplate_76c52d1d6500e2757ba8c0dfb5924216e3955b5c8e64756729e651ebf2c20f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Factura:new.html.twig", 1);
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
        $__internal_2e5e9374920cd82bf41a4da1ab89055a32a28eba29fe14e4227abb574a04427a = $this->env->getExtension("native_profiler");
        $__internal_2e5e9374920cd82bf41a4da1ab89055a32a28eba29fe14e4227abb574a04427a->enter($__internal_2e5e9374920cd82bf41a4da1ab89055a32a28eba29fe14e4227abb574a04427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Factura:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5e9374920cd82bf41a4da1ab89055a32a28eba29fe14e4227abb574a04427a->leave($__internal_2e5e9374920cd82bf41a4da1ab89055a32a28eba29fe14e4227abb574a04427a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c011511f568cd4a8afb3bb06219f1e07c78d5cb31b97a35f48f09a972d9466fa = $this->env->getExtension("native_profiler");
        $__internal_c011511f568cd4a8afb3bb06219f1e07c78d5cb31b97a35f48f09a972d9466fa->enter($__internal_c011511f568cd4a8afb3bb06219f1e07c78d5cb31b97a35f48f09a972d9466fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 col-xs-12\">
                <div class=\"page-header\">
    \t\t\t\t<h1>Factura creation</h1>
    \t\t\t</div>
    \t\t\t";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 11
        echo "    \t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    \t\t\t<ul class=\"record_actions\">
\t\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\">
\t\t\t\tBack to the list
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t</ul>
    \t\t</div>
    \t</div>
    </div>
";
        
        $__internal_c011511f568cd4a8afb3bb06219f1e07c78d5cb31b97a35f48f09a972d9466fa->leave($__internal_c011511f568cd4a8afb3bb06219f1e07c78d5cb31b97a35f48f09a972d9466fa_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* 	<div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*                 <div class="page-header">*/
/*     				<h1>Factura creation</h1>*/
/*     			</div>*/
/*     			{% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     			{{ form(form) }}*/
/* */
/*     			<ul class="record_actions">*/
/* 				<li>*/
/* 				<a href="{{ path('factura') }}">*/
/* 				Back to the list*/
/* 				</a>*/
/* 				</li>*/
/* 				</ul>*/
/*     		</div>*/
/*     	</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
