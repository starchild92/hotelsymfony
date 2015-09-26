<?php

/* LIHotelBundle:Inicio:registro.html.twig */
class __TwigTemplate_eee2c6f012e956bf4b1d35d54f881a0090b6984a0342027d906cc109464362d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIHotelBundle::base.html.twig", "LIHotelBundle:Inicio:registro.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIHotelBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a70da2930881ac3d7a0a494b87ed6fd8a280d986e8ee3ed5fcbab94485615b = $this->env->getExtension("native_profiler");
        $__internal_05a70da2930881ac3d7a0a494b87ed6fd8a280d986e8ee3ed5fcbab94485615b->enter($__internal_05a70da2930881ac3d7a0a494b87ed6fd8a280d986e8ee3ed5fcbab94485615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIHotelBundle:Inicio:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a70da2930881ac3d7a0a494b87ed6fd8a280d986e8ee3ed5fcbab94485615b->leave($__internal_05a70da2930881ac3d7a0a494b87ed6fd8a280d986e8ee3ed5fcbab94485615b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48bc4335604a93ac5270f7916d8a4c5754f63912ea034a075b8511edb84e1a7a = $this->env->getExtension("native_profiler");
        $__internal_48bc4335604a93ac5270f7916d8a4c5754f63912ea034a075b8511edb84e1a7a->enter($__internal_48bc4335604a93ac5270f7916d8a4c5754f63912ea034a075b8511edb84e1a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel Symfony - Registro";
        
        $__internal_48bc4335604a93ac5270f7916d8a4c5754f63912ea034a075b8511edb84e1a7a->leave($__internal_48bc4335604a93ac5270f7916d8a4c5754f63912ea034a075b8511edb84e1a7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73ed354b1ca6a2c3da955d54dba8f75f4db0594cb0cd57d38f0cee450d32013f = $this->env->getExtension("native_profiler");
        $__internal_73ed354b1ca6a2c3da955d54dba8f75f4db0594cb0cd57d38f0cee450d32013f->enter($__internal_73ed354b1ca6a2c3da955d54dba8f75f4db0594cb0cd57d38f0cee450d32013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"padding-top: 60px;\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"page-header\">
                    <h1>Regístrese</h1>
                </div>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                      <strong> ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</strong>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-8\">
                        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"usuario\">
                            ";
        // line 21
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 22
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "autocomplete" => "off")));
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Apellido", "autocomplete" => "off")));
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row', array("attr" => array("type" => "text", "placeholder" => "Correo Electronico", "autocomplete" => "off")));
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clave", array()), 'widget', array("attr" => array("placeholder" => "Contraseña", "autocomplete" => "off")));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_nac", array()), 'row', array("attr" => array("placeholder" => "Edad", "autocomplete" => "off")));
        echo "

                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                            <button type=\"button submit\" class=\"btn btn-success btn-block pull-right\">
                                <span class=\"glyphicon glyphicon-hand-right pull-left\" aria-hidden=\"true\"></span> Enviar Registro
                            </button>
                        </form>
                    </div>
                    <div class=\"col-lg-4 col-md-4\">
                        <center><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lihotel/images/signup-icon.png"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"></center>
                        <p>No sea un gran tonto y regístrese, descubra todos los beneficios de formar parte de nuestra exclusiva y singular cadena.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_73ed354b1ca6a2c3da955d54dba8f75f4db0594cb0cd57d38f0cee450d32013f->leave($__internal_73ed354b1ca6a2c3da955d54dba8f75f4db0594cb0cd57d38f0cee450d32013f_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbe8c843c281a20e040abbbface52b23fe24ed78b7ecd0b23d70db28cc356f23 = $this->env->getExtension("native_profiler");
        $__internal_dbe8c843c281a20e040abbbface52b23fe24ed78b7ecd0b23d70db28cc356f23->enter($__internal_dbe8c843c281a20e040abbbface52b23fe24ed78b7ecd0b23d70db28cc356f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 49
        echo "    <style type=\"text/css\">
        .usuario > input{
            margin-bottom: 10px;
        }
    </style>
";
        
        $__internal_dbe8c843c281a20e040abbbface52b23fe24ed78b7ecd0b23d70db28cc356f23->leave($__internal_dbe8c843c281a20e040abbbface52b23fe24ed78b7ecd0b23d70db28cc356f23_prof);

    }

    public function getTemplateName()
    {
        return "LIHotelBundle:Inicio:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  148 => 48,  133 => 39,  122 => 31,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  96 => 23,  91 => 22,  89 => 21,  83 => 20,  79 => 18,  70 => 15,  66 => 13,  62 => 12,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'LIHotelBundle::base.html.twig' %}*/
/* */
/* {% block title %}Hotel Symfony - Registro{% endblock%}*/
/* */
/* {% block body %}*/
/*     <div class="container" style="padding-top: 60px;">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 col-md-12">*/
/*                 <div class="page-header">*/
/*                     <h1>Regístrese</h1>*/
/*                 </div>*/
/*                 {% for flashMessage in app.session.flashbag.get('error') %}*/
/*                     <div class="alert alert-success alert-dismissible" role="alert">*/
/*                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                       <strong> {{ flashMessage }}</strong>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 col-md-8">*/
/*                         <form action="{{ path('LIHotelBundle_registro') }}" method="post" {{ form_enctype(form) }} class="usuario">*/
/*                             {% form_theme form 'bootstrap_3_layout.html.twig'  %}*/
/*                             {{ form_errors(form) }}*/
/*                             {{ form_row(form._token) }}*/
/* */
/*                             {{ form_widget(form.nombre, {'attr':{'placeholder':'Nombre', 'autocomplete':'off'}}) }}*/
/*                             {{ form_widget(form.apellido, {'attr':{'placeholder':'Apellido', 'autocomplete':'off'}}) }}*/
/*                             {{ form_row(form.mail, {'attr': {'type':'text', 'placeholder':'Correo Electronico', 'autocomplete':'off'}}) }}*/
/*                             {{ form_widget(form.clave, {'attr':{'placeholder':'Contraseña', 'autocomplete':'off'}}) }}*/
/*                             {{ form_row(form.fecha_nac, {'attr':{'placeholder':'Edad', 'autocomplete':'off'}}) }}*/
/* */
/*                             {{ form_rest(form) }}*/
/* */
/*                             <button type="button submit" class="btn btn-success btn-block pull-right">*/
/*                                 <span class="glyphicon glyphicon-hand-right pull-left" aria-hidden="true"></span> Enviar Registro*/
/*                             </button>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4">*/
/*                         <center><img src="{{ asset('bundles/lihotel/images/signup-icon.png') }}" width="100px" height="100px"></center>*/
/*                         <p>No sea un gran tonto y regístrese, descubra todos los beneficios de formar parte de nuestra exclusiva y singular cadena.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style type="text/css">*/
/*         .usuario > input{*/
/*             margin-bottom: 10px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
