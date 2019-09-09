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
        $__internal_7e07ad53728e3338624dea88e0065b34b153cf677fdfd4946330ef220a36a8fb = $this->env->getExtension("native_profiler");
        $__internal_7e07ad53728e3338624dea88e0065b34b153cf677fdfd4946330ef220a36a8fb->enter($__internal_7e07ad53728e3338624dea88e0065b34b153cf677fdfd4946330ef220a36a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e07ad53728e3338624dea88e0065b34b153cf677fdfd4946330ef220a36a8fb->leave($__internal_7e07ad53728e3338624dea88e0065b34b153cf677fdfd4946330ef220a36a8fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_013da8ea07a8e171ff3ad3a1dc5f2a03af84275324858e4e0b0d66bf5d11fdfa = $this->env->getExtension("native_profiler");
        $__internal_013da8ea07a8e171ff3ad3a1dc5f2a03af84275324858e4e0b0d66bf5d11fdfa->enter($__internal_013da8ea07a8e171ff3ad3a1dc5f2a03af84275324858e4e0b0d66bf5d11fdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_013da8ea07a8e171ff3ad3a1dc5f2a03af84275324858e4e0b0d66bf5d11fdfa->leave($__internal_013da8ea07a8e171ff3ad3a1dc5f2a03af84275324858e4e0b0d66bf5d11fdfa_prof);

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
