<?php

/* LIHotelBundle:Compensacion:new.html.twig */
class __TwigTemplate_5a104871538b8877d9bf1bcd8a31faed852d6e89653335961e380c6ac70746a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Compensacion:new.html.twig", 1);
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
        $__internal_66e1cf706c76d2777142eab2c19e7530e2ec03ac82c8ae95e03336b979a1809a = $this->env->getExtension("native_profiler");
        $__internal_66e1cf706c76d2777142eab2c19e7530e2ec03ac82c8ae95e03336b979a1809a->enter($__internal_66e1cf706c76d2777142eab2c19e7530e2ec03ac82c8ae95e03336b979a1809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Compensacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e1cf706c76d2777142eab2c19e7530e2ec03ac82c8ae95e03336b979a1809a->leave($__internal_66e1cf706c76d2777142eab2c19e7530e2ec03ac82c8ae95e03336b979a1809a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c342b205bb68fe21c2592217bc43420e954e574f30fae0796faa33af4ee194f0 = $this->env->getExtension("native_profiler");
        $__internal_c342b205bb68fe21c2592217bc43420e954e574f30fae0796faa33af4ee194f0->enter($__internal_c342b205bb68fe21c2592217bc43420e954e574f30fae0796faa33af4ee194f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
\t\t<h1>Compensacion creation</h1>
\t</div>

\t";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 10
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

\t<ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("compensacion");
        echo "\">
\t            Back to the list
\t        </a>
\t    </li>
\t</ul>
</div>
";
        
        $__internal_c342b205bb68fe21c2592217bc43420e954e574f30fae0796faa33af4ee194f0->leave($__internal_c342b205bb68fe21c2592217bc43420e954e574f30fae0796faa33af4ee194f0_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Compensacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/* 		<h1>Compensacion creation</h1>*/
/* 	</div>*/
/* */
/* 	{% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* 	{{ form(form) }}*/
/* */
/* 	<ul class="record_actions">*/
/* 	    <li>*/
/* 	        <a href="{{ path('compensacion') }}">*/
/* 	            Back to the list*/
/* 	        </a>*/
/* 	    </li>*/
/* 	</ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
