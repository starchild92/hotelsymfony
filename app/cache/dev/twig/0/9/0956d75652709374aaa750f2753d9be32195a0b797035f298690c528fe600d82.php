<?php

/* LIHotelBundle:Habitacion:edit.html.twig */
class __TwigTemplate_d5cbdfc9bc7f46566021c5acdb2720919407517c12d89a8680218085a1904212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Habitacion:edit.html.twig", 1);
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
        $__internal_8ae9137c04d2a613383bcdc713e030b1eddd638ab68e4998886ce753a79d1ed6 = $this->env->getExtension("native_profiler");
        $__internal_8ae9137c04d2a613383bcdc713e030b1eddd638ab68e4998886ce753a79d1ed6->enter($__internal_8ae9137c04d2a613383bcdc713e030b1eddd638ab68e4998886ce753a79d1ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Habitacion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae9137c04d2a613383bcdc713e030b1eddd638ab68e4998886ce753a79d1ed6->leave($__internal_8ae9137c04d2a613383bcdc713e030b1eddd638ab68e4998886ce753a79d1ed6_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e130cbbb8ea1ebe02da49fb523bdfc7198567246054828638bfee0053b0ea73 = $this->env->getExtension("native_profiler");
        $__internal_8e130cbbb8ea1ebe02da49fb523bdfc7198567246054828638bfee0053b0ea73->enter($__internal_8e130cbbb8ea1ebe02da49fb523bdfc7198567246054828638bfee0053b0ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/js/TipoFormulario.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8e130cbbb8ea1ebe02da49fb523bdfc7198567246054828638bfee0053b0ea73->leave($__internal_8e130cbbb8ea1ebe02da49fb523bdfc7198567246054828638bfee0053b0ea73_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b798d259169b30bc6621bd556e97e796af96868f797a9acb610477f89576db1 = $this->env->getExtension("native_profiler");
        $__internal_6b798d259169b30bc6621bd556e97e796af96868f797a9acb610477f89576db1->enter($__internal_6b798d259169b30bc6621bd556e97e796af96868f797a9acb610477f89576db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"col-lg-12 col-sm-12 col-xs-12\">
    <div class=\"page-header\">
    \t<h1>Habitacion edit</h1>
    </div>

    ";
        // line 12
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 13
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
        
        $__internal_6b798d259169b30bc6621bd556e97e796af96868f797a9acb610477f89576db1->leave($__internal_6b798d259169b30bc6621bd556e97e796af96868f797a9acb610477f89576db1_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Habitacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  78 => 17,  70 => 13,  68 => 12,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*     	<h1>Habitacion edit</h1>*/
/*     </div>*/
/* */
/*     {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('habitacion') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
