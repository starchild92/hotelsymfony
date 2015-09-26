<?php

/* LIHotelBundle:Bebida:new.html.twig */
class __TwigTemplate_d1421b75a480cc3827472c1933148e0f50643a174411ed8521ebdedfcad35d80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Bebida:new.html.twig", 1);
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
        $__internal_365ce04c71f909a8074bff0a5a0277221729cf4ab991777c61d9c1b1e535ebbf = $this->env->getExtension("native_profiler");
        $__internal_365ce04c71f909a8074bff0a5a0277221729cf4ab991777c61d9c1b1e535ebbf->enter($__internal_365ce04c71f909a8074bff0a5a0277221729cf4ab991777c61d9c1b1e535ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Bebida:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365ce04c71f909a8074bff0a5a0277221729cf4ab991777c61d9c1b1e535ebbf->leave($__internal_365ce04c71f909a8074bff0a5a0277221729cf4ab991777c61d9c1b1e535ebbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8982684ad7fe1c93ce8b19d655de65a9f5a750676ff51820fa13b95b5699b7b = $this->env->getExtension("native_profiler");
        $__internal_d8982684ad7fe1c93ce8b19d655de65a9f5a750676ff51820fa13b95b5699b7b->enter($__internal_d8982684ad7fe1c93ce8b19d655de65a9f5a750676ff51820fa13b95b5699b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Bebida creation</h1>
    </div>
    ";
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
        echo $this->env->getExtension('routing')->getPath("bebida");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
</div>
";
        
        $__internal_d8982684ad7fe1c93ce8b19d655de65a9f5a750676ff51820fa13b95b5699b7b->leave($__internal_d8982684ad7fe1c93ce8b19d655de65a9f5a750676ff51820fa13b95b5699b7b_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Bebida:new.html.twig";
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
/*         <h1>Bebida creation</h1>*/
/*     </div>*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('bebida') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
