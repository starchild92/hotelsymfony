<?php

/* LIHotelBundle:Tipo:new.html.twig */
class __TwigTemplate_3b3abc2ca9d37e8a2755e60178c644613ce359cbdb4c5e27a2f608384bf46ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Tipo:new.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIHotelBundle::adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4a0a8912f094faf2e17511ab5fc9cf4d2bcda4bfa92195a9354a66063d843c2 = $this->env->getExtension("native_profiler");
        $__internal_a4a0a8912f094faf2e17511ab5fc9cf4d2bcda4bfa92195a9354a66063d843c2->enter($__internal_a4a0a8912f094faf2e17511ab5fc9cf4d2bcda4bfa92195a9354a66063d843c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Tipo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a0a8912f094faf2e17511ab5fc9cf4d2bcda4bfa92195a9354a66063d843c2->leave($__internal_a4a0a8912f094faf2e17511ab5fc9cf4d2bcda4bfa92195a9354a66063d843c2_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dec194328bf5422d3f45421d573ea993408fa45e9dd52c032600240859530f9 = $this->env->getExtension("native_profiler");
        $__internal_4dec194328bf5422d3f45421d573ea993408fa45e9dd52c032600240859530f9->enter($__internal_4dec194328bf5422d3f45421d573ea993408fa45e9dd52c032600240859530f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/TipoFormulario.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4dec194328bf5422d3f45421d573ea993408fa45e9dd52c032600240859530f9->leave($__internal_4dec194328bf5422d3f45421d573ea993408fa45e9dd52c032600240859530f9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6bb4bdfebccd35b3ccb35ef5f8fe9558a75d130d36ae367e7cae07e0f645a56 = $this->env->getExtension("native_profiler");
        $__internal_c6bb4bdfebccd35b3ccb35ef5f8fe9558a75d130d36ae367e7cae07e0f645a56->enter($__internal_c6bb4bdfebccd35b3ccb35ef5f8fe9558a75d130d36ae367e7cae07e0f645a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Tipo Habitación <small>como está compuesta cada habitación, máximo 30 habitaciones</small></h1>


    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tipo");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_c6bb4bdfebccd35b3ccb35ef5f8fe9558a75d130d36ae367e7cae07e0f645a56->leave($__internal_c6bb4bdfebccd35b3ccb35ef5f8fe9558a75d130d36ae367e7cae07e0f645a56_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Tipo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  66 => 10,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* {% block javascripts %}*/
/* 	<script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/lihotel/js/TipoFormulario.js') }}"></script>*/
/* {% endblock %}*/
/* {% block body -%}*/
/*         <h1>Tipo Habitación <small>como está compuesta cada habitación, máximo 30 habitaciones</small></h1>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('tipo') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
