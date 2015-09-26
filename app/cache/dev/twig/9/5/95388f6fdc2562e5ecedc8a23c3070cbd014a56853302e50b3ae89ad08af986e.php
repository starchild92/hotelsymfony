<?php

/* LIHotelBundle:Reserva:new.html.twig */
class __TwigTemplate_322222933787ad0fb0ee70cdaf410e838f47bad046036d21f5ce5241af38f89a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::adminBase.html.twig", "LIHotelBundle:Reserva:new.html.twig", 1);
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
        $__internal_1259dda19964de5630315f72f44d4326180e3b7531dd410b746593efdbe05c60 = $this->env->getExtension("native_profiler");
        $__internal_1259dda19964de5630315f72f44d4326180e3b7531dd410b746593efdbe05c60->enter($__internal_1259dda19964de5630315f72f44d4326180e3b7531dd410b746593efdbe05c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Reserva:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1259dda19964de5630315f72f44d4326180e3b7531dd410b746593efdbe05c60->leave($__internal_1259dda19964de5630315f72f44d4326180e3b7531dd410b746593efdbe05c60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d4c81be7fc4ea826871fdf266f593101330d94a49fac1690e1ee6e705741f3 = $this->env->getExtension("native_profiler");
        $__internal_91d4c81be7fc4ea826871fdf266f593101330d94a49fac1690e1ee6e705741f3->enter($__internal_91d4c81be7fc4ea826871fdf266f593101330d94a49fac1690e1ee6e705741f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Reserva creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("reserva");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_91d4c81be7fc4ea826871fdf266f593101330d94a49fac1690e1ee6e705741f3->leave($__internal_91d4c81be7fc4ea826871fdf266f593101330d94a49fac1690e1ee6e705741f3_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Reserva:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::adminBase.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Reserva creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('reserva') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
