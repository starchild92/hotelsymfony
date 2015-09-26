<?php

/* LIHotelBundle:Bebida:edit.html.twig */
class __TwigTemplate_18528bcb751e5948020045debc2f8f2a2387883e59019a543d03d466174588d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Bebida:edit.html.twig", 1);
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
        $__internal_7f20c63adde9540131ffd6bce78abc9dd89e33a16e3bc518098fc0e3b5cb2d61 = $this->env->getExtension("native_profiler");
        $__internal_7f20c63adde9540131ffd6bce78abc9dd89e33a16e3bc518098fc0e3b5cb2d61->enter($__internal_7f20c63adde9540131ffd6bce78abc9dd89e33a16e3bc518098fc0e3b5cb2d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Bebida:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f20c63adde9540131ffd6bce78abc9dd89e33a16e3bc518098fc0e3b5cb2d61->leave($__internal_7f20c63adde9540131ffd6bce78abc9dd89e33a16e3bc518098fc0e3b5cb2d61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_524eae585746fad6dd1201f29635df92e402a6a77932506f35250cd3063660ef = $this->env->getExtension("native_profiler");
        $__internal_524eae585746fad6dd1201f29635df92e402a6a77932506f35250cd3063660ef->enter($__internal_524eae585746fad6dd1201f29635df92e402a6a77932506f35250cd3063660ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
        <h1>Bebida edit</h1>
    </div>

    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 10
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("bebida");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
\t</ul>
</div>
";
        
        $__internal_524eae585746fad6dd1201f29635df92e402a6a77932506f35250cd3063660ef->leave($__internal_524eae585746fad6dd1201f29635df92e402a6a77932506f35250cd3063660ef_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Bebida:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  57 => 14,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*         <h1>Bebida edit</h1>*/
/*     </div>*/
/* */
/*     {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('bebida') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* 	</ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
