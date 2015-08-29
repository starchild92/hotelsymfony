<?php

/* :default:index.html.twig */
class __TwigTemplate_635677bac68bf4e764e132c9cb4e46e7c237c21a7ecd1790064a69d025aba1b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }
}
