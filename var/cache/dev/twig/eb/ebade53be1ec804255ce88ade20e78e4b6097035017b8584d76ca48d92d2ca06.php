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
        $__internal_16b7e24768f91d6646c48ae013fb32010ca20b48527e9ba34d98c432d83e473d = $this->env->getExtension("native_profiler");
        $__internal_16b7e24768f91d6646c48ae013fb32010ca20b48527e9ba34d98c432d83e473d->enter($__internal_16b7e24768f91d6646c48ae013fb32010ca20b48527e9ba34d98c432d83e473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b7e24768f91d6646c48ae013fb32010ca20b48527e9ba34d98c432d83e473d->leave($__internal_16b7e24768f91d6646c48ae013fb32010ca20b48527e9ba34d98c432d83e473d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5efc7a743c99d0ff7e0926cbf054c7a93fc6cc2a57ae275ca34b6b1afad0c00 = $this->env->getExtension("native_profiler");
        $__internal_f5efc7a743c99d0ff7e0926cbf054c7a93fc6cc2a57ae275ca34b6b1afad0c00->enter($__internal_f5efc7a743c99d0ff7e0926cbf054c7a93fc6cc2a57ae275ca34b6b1afad0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<p><a class=\"btn btn-primary\" href=\"/todolist/web\">Back To Todos</a>
<hr>
<h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
<ul class=\"list-group\">
    <li class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
    <li class=\"list-group-item\">Priority: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
    <li class=\"list-group-item\">Description: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo " </li>
    <li class=\"list-group-item\">";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong> </li>
</ul>
";
        
        $__internal_f5efc7a743c99d0ff7e0926cbf054c7a93fc6cc2a57ae275ca34b6b1afad0c00->leave($__internal_f5efc7a743c99d0ff7e0926cbf054c7a93fc6cc2a57ae275ca34b6b1afad0c00_prof);

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
        return array (  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <p><a class="btn btn-primary" href="/todolist/web">Back To Todos</a>*/
/* <hr>*/
/* <h2 class="page-header">{{todo.name}}</h2>*/
/* <ul class="list-group">*/
/*     <li class="list-group-item">Category: {{todo.category}}</li>*/
/*     <li class="list-group-item">Priority: {{todo.priority}}</li>*/
/*     <li class="list-group-item">Description: {{todo.description}} </li>*/
/*     <li class="list-group-item">{{todo.dueDate|date('F j, Y, g:i a')}}</strong> </li>*/
/* </ul>*/
/* {% endblock %}*/
