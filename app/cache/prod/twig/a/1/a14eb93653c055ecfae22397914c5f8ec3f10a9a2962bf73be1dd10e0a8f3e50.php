<?php

/* LIHotelBundle:Inicio:registro.html.twig */
class __TwigTemplate_a14eb93653c055ecfae22397914c5f8ec3f10a9a2962bf73be1dd10e0a8f3e50 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Hotel Symfony - Registro";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">
                            <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/icon.ico"), "html", null, true);
        echo "\">
                        </a>
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand brandname\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Hotel Symfony</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_homepage");
        echo "\">Inicio</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_consultar");
        echo "\">Consultar</a></li>
                            <li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\">Registro</a></li>
                            <button type=\"button\" class=\"btn btn-success navbar-btn\" style=\"margin-right:10px; margin-left:10px\">Iniciar Sesión</button>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class=\"container\" style=\"padding-top: 60px;\">
        <div class=\"page-header\">
            <h1>Registrese
            <small>y forme parte de la cadena de hoteles más increible!</small></h1>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-6 col-xs-6\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                      <strong> ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</strong>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"usuario\">
                    ";
        // line 49
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 50
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "autocomplete" => "off")));
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Apellido", "autocomplete" => "off")));
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row', array("attr" => array("type" => "text", "placeholder" => "Correo Electronico", "autocomplete" => "off")));
        echo "
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clave", array()), 'widget', array("attr" => array("placeholder" => "Password", "autocomplete" => "off")));
        echo "
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget', array("attr" => array("placeholder" => "Edad", "autocomplete" => "off")));
        echo "

                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    <button type=\"button submit\" class=\"btn btn-success col-md-6 pull-right\">
                        <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Registrarse
                    </button>
                </form>
            </div>
            <div class=\"col-md-4 col-md-6 col-xs-6\">
                <center><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/signup-icon.png"), "html", null, true);
        echo "\" width=\"200px\" height=\"200px\"></center>
            </div>
        </div>
    </div>
";
    }

    // line 72
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 73
        echo "    <style type=\"text/css\">
        .usuario > input{
            margin-bottom: 10px;
        }
    </style>
";
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
        return array (  171 => 73,  168 => 72,  159 => 66,  148 => 58,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  121 => 50,  119 => 49,  112 => 48,  103 => 45,  99 => 43,  95 => 42,  76 => 26,  72 => 25,  68 => 24,  61 => 20,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
