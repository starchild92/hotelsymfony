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
        echo "    <div class=\"container\" style=\"padding-top: 60px;\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-6\">
                <div class=\"page-header\">
                    <h1>Inicie Sesión</h1>
                </div>
                <div class=\"col-lg-12 col-md-12\">
                    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errorsesion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                          <strong> ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</strong>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6\"><center><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/signup-icon.png"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"></center></div>
                        <div class=\"col-lg-6 col-md-6\"><p>Consulte todo lo referente a sus reservas, verifique sus consumos y descubra nuestros descuentos como miembro del hotel.</p></div>
                    </div>
                    <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_sesion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'enctype');
        echo " class=\"usuario\">
                        ";
        // line 24
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 25
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "_token", array()), 'widget');
        echo "

                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mail", array()), 'row', array("attr" => array("autocomplete" => "off")));
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "password", array()), 'row', array("attr" => array("autocomplete" => "off")));
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "

                        <button type=\"button submit\" class=\"btn btn-primary btn-block pull-right\">
                            <span class=\"glyphicon glyphicon-user pull-left\" aria-hidden=\"true\"></span> Iniciar Sesión
                        </button>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"page-header\">
                    <h1>Regístrese</h1>
                </div>
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
        echo "                <div class=\"col-md-8 col-md-8\">
                    <form action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("LIHotelBundle_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"usuario\">
                        ";
        // line 50
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 51
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "autocomplete" => "off")));
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Apellido", "autocomplete" => "off")));
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row', array("attr" => array("type" => "text", "placeholder" => "Correo Electronico", "autocomplete" => "off")));
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clave", array()), 'widget', array("attr" => array("placeholder" => "Contraseña", "autocomplete" => "off")));
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_nac", array()), 'row', array("attr" => array("placeholder" => "Edad", "autocomplete" => "off")));
        echo "

                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                        <button type=\"button submit\" class=\"btn btn-success btn-block pull-right\">
                            <span class=\"glyphicon glyphicon-hand-right pull-left\" aria-hidden=\"true\"></span> Enviar Registro
                        </button>
                    </form>
                </div>
                <div class=\"col-md-4 col-md-4\">
                    <center><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lihotel/images/signup-icon.png"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"></center>
                    <p>No sea un gran tonto y regístrese, descubra todos los beneficios de formar parte de nuestra exclusiva y singular cadena.</p>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 77
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
        return array (  199 => 77,  196 => 76,  185 => 68,  174 => 60,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  153 => 54,  148 => 52,  143 => 51,  141 => 50,  135 => 49,  132 => 48,  123 => 45,  119 => 43,  115 => 42,  100 => 30,  96 => 29,  92 => 28,  87 => 26,  82 => 25,  80 => 24,  74 => 23,  68 => 20,  65 => 19,  56 => 16,  52 => 14,  48 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
