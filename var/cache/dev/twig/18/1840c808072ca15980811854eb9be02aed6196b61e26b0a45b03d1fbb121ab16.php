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
        $__internal_c09c6b873674265feba069608ed21d64af2221b57317c8ea2f25741b8ac632bf = $this->env->getExtension("native_profiler");
        $__internal_c09c6b873674265feba069608ed21d64af2221b57317c8ea2f25741b8ac632bf->enter($__internal_c09c6b873674265feba069608ed21d64af2221b57317c8ea2f25741b8ac632bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09c6b873674265feba069608ed21d64af2221b57317c8ea2f25741b8ac632bf->leave($__internal_c09c6b873674265feba069608ed21d64af2221b57317c8ea2f25741b8ac632bf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_128fe868b021711e84e97fd623ff15656e4cb9e421c5ee5ac7ed4a66e7f2f659 = $this->env->getExtension("native_profiler");
        $__internal_128fe868b021711e84e97fd623ff15656e4cb9e421c5ee5ac7ed4a66e7f2f659->enter($__internal_128fe868b021711e84e97fd623ff15656e4cb9e421c5ee5ac7ed4a66e7f2f659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
        <h2 class=\"page-header\">Add Todo</h2>
    <br>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_128fe868b021711e84e97fd623ff15656e4cb9e421c5ee5ac7ed4a66e7f2f659->leave($__internal_128fe868b021711e84e97fd623ff15656e4cb9e421c5ee5ac7ed4a66e7f2f659_prof);

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
        return array (  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <br>*/
/*         <h2 class="page-header">Add Todo</h2>*/
/*     <br>*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
