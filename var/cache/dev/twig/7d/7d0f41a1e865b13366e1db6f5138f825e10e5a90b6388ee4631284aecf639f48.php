<?php

/* todo/edit.html.twig */
class __TwigTemplate_44edb7d172f96504e0674114e872f34b7f347c95af6c41b6851c76129591a901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_fc332d65d7ef0d69a7adac3181ab71f95813b2876a3b1a376f3e4974e7e314a7 = $this->env->getExtension("native_profiler");
        $__internal_fc332d65d7ef0d69a7adac3181ab71f95813b2876a3b1a376f3e4974e7e314a7->enter($__internal_fc332d65d7ef0d69a7adac3181ab71f95813b2876a3b1a376f3e4974e7e314a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc332d65d7ef0d69a7adac3181ab71f95813b2876a3b1a376f3e4974e7e314a7->leave($__internal_fc332d65d7ef0d69a7adac3181ab71f95813b2876a3b1a376f3e4974e7e314a7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd39642780a53d68a68cc836d192ca7c9f4063c524a00c0aa0e932465b18a2f = $this->env->getExtension("native_profiler");
        $__internal_dbd39642780a53d68a68cc836d192ca7c9f4063c524a00c0aa0e932465b18a2f->enter($__internal_dbd39642780a53d68a68cc836d192ca7c9f4063c524a00c0aa0e932465b18a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<p><h2 class=\"page-header\">Edit Todo</h2><p>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dbd39642780a53d68a68cc836d192ca7c9f4063c524a00c0aa0e932465b18a2f->leave($__internal_dbd39642780a53d68a68cc836d192ca7c9f4063c524a00c0aa0e932465b18a2f_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <p><h2 class="page-header">Edit Todo</h2><p>*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
