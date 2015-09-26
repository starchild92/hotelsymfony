<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_34a8a8769e04b55d58fdb28e4f97970d22d4d25c1acbcc549e1842baf9247ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6e6eb29bac0fbffd5a8aeeae5ca642aee5bdcea80073f92da172af66cf05643 = $this->env->getExtension("native_profiler");
        $__internal_e6e6eb29bac0fbffd5a8aeeae5ca642aee5bdcea80073f92da172af66cf05643->enter($__internal_e6e6eb29bac0fbffd5a8aeeae5ca642aee5bdcea80073f92da172af66cf05643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e6eb29bac0fbffd5a8aeeae5ca642aee5bdcea80073f92da172af66cf05643->leave($__internal_e6e6eb29bac0fbffd5a8aeeae5ca642aee5bdcea80073f92da172af66cf05643_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63f7395bdedf9f70ea62a8f8b601ec68cf095e30a68ce47cec14e1c3084c2215 = $this->env->getExtension("native_profiler");
        $__internal_63f7395bdedf9f70ea62a8f8b601ec68cf095e30a68ce47cec14e1c3084c2215->enter($__internal_63f7395bdedf9f70ea62a8f8b601ec68cf095e30a68ce47cec14e1c3084c2215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63f7395bdedf9f70ea62a8f8b601ec68cf095e30a68ce47cec14e1c3084c2215->leave($__internal_63f7395bdedf9f70ea62a8f8b601ec68cf095e30a68ce47cec14e1c3084c2215_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b23f80a4d21c55830d89758030b86cd743a982822778e2aef944c496aee5f11 = $this->env->getExtension("native_profiler");
        $__internal_4b23f80a4d21c55830d89758030b86cd743a982822778e2aef944c496aee5f11->enter($__internal_4b23f80a4d21c55830d89758030b86cd743a982822778e2aef944c496aee5f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b23f80a4d21c55830d89758030b86cd743a982822778e2aef944c496aee5f11->leave($__internal_4b23f80a4d21c55830d89758030b86cd743a982822778e2aef944c496aee5f11_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d507de791d10e17e1bb1f3112378c8348a7bd17e0956dabc6f27aa9f24fb1e = $this->env->getExtension("native_profiler");
        $__internal_e6d507de791d10e17e1bb1f3112378c8348a7bd17e0956dabc6f27aa9f24fb1e->enter($__internal_e6d507de791d10e17e1bb1f3112378c8348a7bd17e0956dabc6f27aa9f24fb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e6d507de791d10e17e1bb1f3112378c8348a7bd17e0956dabc6f27aa9f24fb1e->leave($__internal_e6d507de791d10e17e1bb1f3112378c8348a7bd17e0956dabc6f27aa9f24fb1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
