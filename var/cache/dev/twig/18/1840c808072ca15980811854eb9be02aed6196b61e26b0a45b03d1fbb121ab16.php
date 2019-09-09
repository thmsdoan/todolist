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
        $__internal_aac105a8d2c799e572e3bea3e1a9b2a7cbe309d2374042933f84dacd1c3aefdd = $this->env->getExtension("native_profiler");
        $__internal_aac105a8d2c799e572e3bea3e1a9b2a7cbe309d2374042933f84dacd1c3aefdd->enter($__internal_aac105a8d2c799e572e3bea3e1a9b2a7cbe309d2374042933f84dacd1c3aefdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac105a8d2c799e572e3bea3e1a9b2a7cbe309d2374042933f84dacd1c3aefdd->leave($__internal_aac105a8d2c799e572e3bea3e1a9b2a7cbe309d2374042933f84dacd1c3aefdd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96e61f0dbea5205bd68e1dbe5273187e9b3b519934d1ef23b1a055aa3a7bf752 = $this->env->getExtension("native_profiler");
        $__internal_96e61f0dbea5205bd68e1dbe5273187e9b3b519934d1ef23b1a055aa3a7bf752->enter($__internal_96e61f0dbea5205bd68e1dbe5273187e9b3b519934d1ef23b1a055aa3a7bf752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
        <h2 class=\"page-header\">Add Todo</h2>
    <br>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_96e61f0dbea5205bd68e1dbe5273187e9b3b519934d1ef23b1a055aa3a7bf752->leave($__internal_96e61f0dbea5205bd68e1dbe5273187e9b3b519934d1ef23b1a055aa3a7bf752_prof);

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
