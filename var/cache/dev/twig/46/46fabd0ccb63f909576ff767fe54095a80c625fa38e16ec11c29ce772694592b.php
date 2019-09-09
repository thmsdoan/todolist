<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f0cb139ff0b45ae536b442c6542851f7a00cf48c758ff2999724553039cb30b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f963dfb9cc439dcceb534b8d8116e0a4253bfd9f90e9690256a6972bf5ece99 = $this->env->getExtension("native_profiler");
        $__internal_9f963dfb9cc439dcceb534b8d8116e0a4253bfd9f90e9690256a6972bf5ece99->enter($__internal_9f963dfb9cc439dcceb534b8d8116e0a4253bfd9f90e9690256a6972bf5ece99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f963dfb9cc439dcceb534b8d8116e0a4253bfd9f90e9690256a6972bf5ece99->leave($__internal_9f963dfb9cc439dcceb534b8d8116e0a4253bfd9f90e9690256a6972bf5ece99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a65a381d9269165e436feb37de5e780a146ff0dceb0ff1370aebbfb049e3930 = $this->env->getExtension("native_profiler");
        $__internal_0a65a381d9269165e436feb37de5e780a146ff0dceb0ff1370aebbfb049e3930->enter($__internal_0a65a381d9269165e436feb37de5e780a146ff0dceb0ff1370aebbfb049e3930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a65a381d9269165e436feb37de5e780a146ff0dceb0ff1370aebbfb049e3930->leave($__internal_0a65a381d9269165e436feb37de5e780a146ff0dceb0ff1370aebbfb049e3930_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce673bf25e511008149b2f78c2e931a95291e204be91712a9e96727ba015f33a = $this->env->getExtension("native_profiler");
        $__internal_ce673bf25e511008149b2f78c2e931a95291e204be91712a9e96727ba015f33a->enter($__internal_ce673bf25e511008149b2f78c2e931a95291e204be91712a9e96727ba015f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce673bf25e511008149b2f78c2e931a95291e204be91712a9e96727ba015f33a->leave($__internal_ce673bf25e511008149b2f78c2e931a95291e204be91712a9e96727ba015f33a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6e2dded1918e09974f311d1946e83a54edad3fde38a9437d7733fdd52be390 = $this->env->getExtension("native_profiler");
        $__internal_cc6e2dded1918e09974f311d1946e83a54edad3fde38a9437d7733fdd52be390->enter($__internal_cc6e2dded1918e09974f311d1946e83a54edad3fde38a9437d7733fdd52be390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc6e2dded1918e09974f311d1946e83a54edad3fde38a9437d7733fdd52be390->leave($__internal_cc6e2dded1918e09974f311d1946e83a54edad3fde38a9437d7733fdd52be390_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
