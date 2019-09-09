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
        $__internal_46a7345ee3d4c72e792c6c4d897efbaaf4ca19bacf8147076d5279992ef73ee1 = $this->env->getExtension("native_profiler");
        $__internal_46a7345ee3d4c72e792c6c4d897efbaaf4ca19bacf8147076d5279992ef73ee1->enter($__internal_46a7345ee3d4c72e792c6c4d897efbaaf4ca19bacf8147076d5279992ef73ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a7345ee3d4c72e792c6c4d897efbaaf4ca19bacf8147076d5279992ef73ee1->leave($__internal_46a7345ee3d4c72e792c6c4d897efbaaf4ca19bacf8147076d5279992ef73ee1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_be5fbf2d5c08b21c9aa17c036c308318bb138da8f2346949e0fef5bf2d5ee284 = $this->env->getExtension("native_profiler");
        $__internal_be5fbf2d5c08b21c9aa17c036c308318bb138da8f2346949e0fef5bf2d5ee284->enter($__internal_be5fbf2d5c08b21c9aa17c036c308318bb138da8f2346949e0fef5bf2d5ee284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
        <h2 class=\"page-header\">Edit Todo</h2>
    <br>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_be5fbf2d5c08b21c9aa17c036c308318bb138da8f2346949e0fef5bf2d5ee284->leave($__internal_be5fbf2d5c08b21c9aa17c036c308318bb138da8f2346949e0fef5bf2d5ee284_prof);

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
        return array (  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <br>*/
/*         <h2 class="page-header">Edit Todo</h2>*/
/*     <br>*/
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
