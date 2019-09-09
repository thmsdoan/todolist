<?php

/* todo/create.html.twig */
class __TwigTemplate_de5dd074892485d3843d5404c4d1dc405d66028671241fc12764e433cdb12c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a1917c298442c0fb8732571237c62123742397477c93fdcab2ebf0cacc8c88d = $this->env->getExtension("native_profiler");
        $__internal_4a1917c298442c0fb8732571237c62123742397477c93fdcab2ebf0cacc8c88d->enter($__internal_4a1917c298442c0fb8732571237c62123742397477c93fdcab2ebf0cacc8c88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1917c298442c0fb8732571237c62123742397477c93fdcab2ebf0cacc8c88d->leave($__internal_4a1917c298442c0fb8732571237c62123742397477c93fdcab2ebf0cacc8c88d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c17b324a6afb473f5c1801a5ed03600a663e9a30cd139975f3e382149637ea0 = $this->env->getExtension("native_profiler");
        $__internal_5c17b324a6afb473f5c1801a5ed03600a663e9a30cd139975f3e382149637ea0->enter($__internal_5c17b324a6afb473f5c1801a5ed03600a663e9a30cd139975f3e382149637ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<p><h2 class=\"page-header\">Add Todo</h2><p>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_5c17b324a6afb473f5c1801a5ed03600a663e9a30cd139975f3e382149637ea0->leave($__internal_5c17b324a6afb473f5c1801a5ed03600a663e9a30cd139975f3e382149637ea0_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <p><h2 class="page-header">Add Todo</h2><p>*/
/* {{ form(form) }}*/
/* {% endblock %}*/
