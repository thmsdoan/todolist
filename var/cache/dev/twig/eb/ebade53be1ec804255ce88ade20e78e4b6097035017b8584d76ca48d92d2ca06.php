<?php

/* todo/details.html.twig */
class __TwigTemplate_7d6ee1d59912e3700a09637afcb9384ef485679cc21932a505387a9351c8fe6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
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
        $__internal_a857d5f7a01c043b5f095ee3790642aab1853eb1625e814ea6220948f46ba2f9 = $this->env->getExtension("native_profiler");
        $__internal_a857d5f7a01c043b5f095ee3790642aab1853eb1625e814ea6220948f46ba2f9->enter($__internal_a857d5f7a01c043b5f095ee3790642aab1853eb1625e814ea6220948f46ba2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a857d5f7a01c043b5f095ee3790642aab1853eb1625e814ea6220948f46ba2f9->leave($__internal_a857d5f7a01c043b5f095ee3790642aab1853eb1625e814ea6220948f46ba2f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef1100f479cad80a60251e9685f516c09c607a2dfaf38d3d7f8f9d049f6e53fc = $this->env->getExtension("native_profiler");
        $__internal_ef1100f479cad80a60251e9685f516c09c607a2dfaf38d3d7f8f9d049f6e53fc->enter($__internal_ef1100f479cad80a60251e9685f516c09c607a2dfaf38d3d7f8f9d049f6e53fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <a class=\"btn btn-primary\" href=\"/todolist/web\">Back To Todos</a>
    <hr></hr>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Description: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: <strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
";
        
        $__internal_ef1100f479cad80a60251e9685f516c09c607a2dfaf38d3d7f8f9d049f6e53fc->leave($__internal_ef1100f479cad80a60251e9685f516c09c607a2dfaf38d3d7f8f9d049f6e53fc_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <br>*/
/*     <a class="btn btn-primary" href="/todolist/web">Back To Todos</a>*/
/*     <hr></hr>*/
/*     <h2 class="page-header">{{todo.name}}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{todo.category}}</li>*/
/*         <li class="list-group-item">Priority: {{todo.priority}}</li>*/
/*         <li class="list-group-item">Description: {{todo.description}}</li>*/
/*         <li class="list-group-item">Due: <strong>{{todo.dueDate|date('F j, Y, g:i a')}}</strong></li>*/
/*     </ul>*/
/* {% endblock %}*/
