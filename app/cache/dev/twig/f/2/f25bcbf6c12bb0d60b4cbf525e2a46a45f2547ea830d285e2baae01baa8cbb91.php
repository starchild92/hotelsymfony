<?php

/* LIHotelBundle:Tipo:edit.html.twig */
class __TwigTemplate_f9bf67671793dbdadfbe8daf8fafbcbd216aa7fbbbb715c7a026d9ee5222f450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Tipo:edit.html.twig", 1);
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
        $__internal_6a3c8d2585d8afe63538e6e4e2ba0af94fa6531820df98242c3b7c3b5b903603 = $this->env->getExtension("native_profiler");
        $__internal_6a3c8d2585d8afe63538e6e4e2ba0af94fa6531820df98242c3b7c3b5b903603->enter($__internal_6a3c8d2585d8afe63538e6e4e2ba0af94fa6531820df98242c3b7c3b5b903603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Tipo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3c8d2585d8afe63538e6e4e2ba0af94fa6531820df98242c3b7c3b5b903603->leave($__internal_6a3c8d2585d8afe63538e6e4e2ba0af94fa6531820df98242c3b7c3b5b903603_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1879653f780423f2822a9e595e6d1a0a33a9450bc2d3a6e0a9944059b6c66b12 = $this->env->getExtension("native_profiler");
        $__internal_1879653f780423f2822a9e595e6d1a0a33a9450bc2d3a6e0a9944059b6c66b12->enter($__internal_1879653f780423f2822a9e595e6d1a0a33a9450bc2d3a6e0a9944059b6c66b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/TipoFormularioEdit.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1879653f780423f2822a9e595e6d1a0a33a9450bc2d3a6e0a9944059b6c66b12->leave($__internal_1879653f780423f2822a9e595e6d1a0a33a9450bc2d3a6e0a9944059b6c66b12_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_418cb6a1c18001a79bc79f2dbfe380ac1b1bdd1f53a287b1c20d72fa11ebcdc6 = $this->env->getExtension("native_profiler");
        $__internal_418cb6a1c18001a79bc79f2dbfe380ac1b1bdd1f53a287b1c20d72fa11ebcdc6->enter($__internal_418cb6a1c18001a79bc79f2dbfe380ac1b1bdd1f53a287b1c20d72fa11ebcdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Tipo edit</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tipo");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_418cb6a1c18001a79bc79f2dbfe380ac1b1bdd1f53a287b1c20d72fa11ebcdc6->leave($__internal_418cb6a1c18001a79bc79f2dbfe380ac1b1bdd1f53a287b1c20d72fa11ebcdc6_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Tipo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  72 => 13,  65 => 9,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* {% block javascripts %}*/
/* 	<script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/lihotel/js/TipoFormularioEdit.js') }}"></script>*/
/* {% endblock %}*/
/* {% block body -%}*/
/*     <h1>Tipo edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('tipo') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
