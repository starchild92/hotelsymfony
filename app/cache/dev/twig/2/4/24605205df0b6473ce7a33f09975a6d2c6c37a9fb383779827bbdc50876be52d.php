<?php

/* LIHotelBundle:Habitacion:new.html.twig */
class __TwigTemplate_08a4998194dba8f005e83833d7ed386463f28c0fe2277c2cbe4b158f147ac5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Habitacion:new.html.twig", 1);
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
        $__internal_35f2cfe911c4c96a41736dbb7fbc2303e1beb3652b1a353caa2cbde66117105e = $this->env->getExtension("native_profiler");
        $__internal_35f2cfe911c4c96a41736dbb7fbc2303e1beb3652b1a353caa2cbde66117105e->enter($__internal_35f2cfe911c4c96a41736dbb7fbc2303e1beb3652b1a353caa2cbde66117105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Habitacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f2cfe911c4c96a41736dbb7fbc2303e1beb3652b1a353caa2cbde66117105e->leave($__internal_35f2cfe911c4c96a41736dbb7fbc2303e1beb3652b1a353caa2cbde66117105e_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5879e035c951f2b563b740671064f42a729e743f8e8e9ee5f776b359dae9cc87 = $this->env->getExtension("native_profiler");
        $__internal_5879e035c951f2b563b740671064f42a729e743f8e8e9ee5f776b359dae9cc87->enter($__internal_5879e035c951f2b563b740671064f42a729e743f8e8e9ee5f776b359dae9cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/TipoFormulario.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5879e035c951f2b563b740671064f42a729e743f8e8e9ee5f776b359dae9cc87->leave($__internal_5879e035c951f2b563b740671064f42a729e743f8e8e9ee5f776b359dae9cc87_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_837409613aca62c18f3dda784846555860454e2cc34ecaa397ee9bebba80340a = $this->env->getExtension("native_profiler");
        $__internal_837409613aca62c18f3dda784846555860454e2cc34ecaa397ee9bebba80340a->enter($__internal_837409613aca62c18f3dda784846555860454e2cc34ecaa397ee9bebba80340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
    \t<h1>Habitacion creation</h1>
    </div>

    ";
        // line 12
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 13
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("habitacion");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
</div>
";
        
        $__internal_837409613aca62c18f3dda784846555860454e2cc34ecaa397ee9bebba80340a->leave($__internal_837409613aca62c18f3dda784846555860454e2cc34ecaa397ee9bebba80340a_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Habitacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  70 => 13,  68 => 12,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/lihotel/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/lihotel/js/TipoFormulario.js') }}"></script>*/
/* {% endblock %}*/
/* {% block body -%}*/
/* <div class="col-lg-12 col-sm-12 col-xs-12">*/
/*     <div class="page-header">*/
/*     	<h1>Habitacion creation</h1>*/
/*     </div>*/
/* */
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('habitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
