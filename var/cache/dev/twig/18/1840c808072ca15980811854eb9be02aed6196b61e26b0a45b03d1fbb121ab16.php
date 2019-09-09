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
        $__internal_61a2cfbe9903ccdd5c2963b103e2e91f117d75d5e161beeaa60fa1f50dab7e55 = $this->env->getExtension("native_profiler");
        $__internal_61a2cfbe9903ccdd5c2963b103e2e91f117d75d5e161beeaa60fa1f50dab7e55->enter($__internal_61a2cfbe9903ccdd5c2963b103e2e91f117d75d5e161beeaa60fa1f50dab7e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a2cfbe9903ccdd5c2963b103e2e91f117d75d5e161beeaa60fa1f50dab7e55->leave($__internal_61a2cfbe9903ccdd5c2963b103e2e91f117d75d5e161beeaa60fa1f50dab7e55_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c833276c9093613ef049e27363eca04d7e7cc49745d44697e49e879f000cf66 = $this->env->getExtension("native_profiler");
        $__internal_8c833276c9093613ef049e27363eca04d7e7cc49745d44697e49e879f000cf66->enter($__internal_8c833276c9093613ef049e27363eca04d7e7cc49745d44697e49e879f000cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
        <h2 class=\"page-header\">Add Todo</h2>
    <br>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_8c833276c9093613ef049e27363eca04d7e7cc49745d44697e49e879f000cf66->leave($__internal_8c833276c9093613ef049e27363eca04d7e7cc49745d44697e49e879f000cf66_prof);

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
