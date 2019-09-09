<?php

/* :todo:details.html.twig */
class __TwigTemplate_7d6ee1d59912e3700a09637afcb9384ef485679cc21932a505387a9351c8fe6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:details.html.twig", 1);
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
        $__internal_b797b3f1780cad600bda8db7112d7668d818e95783a8f4c2a16e44fe986cbc88 = $this->env->getExtension("native_profiler");
        $__internal_b797b3f1780cad600bda8db7112d7668d818e95783a8f4c2a16e44fe986cbc88->enter($__internal_b797b3f1780cad600bda8db7112d7668d818e95783a8f4c2a16e44fe986cbc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b797b3f1780cad600bda8db7112d7668d818e95783a8f4c2a16e44fe986cbc88->leave($__internal_b797b3f1780cad600bda8db7112d7668d818e95783a8f4c2a16e44fe986cbc88_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_48c336362a79c279a460f4c1dfe122a9a07e3ac9fac2aadfea0f6b2286192f18 = $this->env->getExtension("native_profiler");
        $__internal_48c336362a79c279a460f4c1dfe122a9a07e3ac9fac2aadfea0f6b2286192f18->enter($__internal_48c336362a79c279a460f4c1dfe122a9a07e3ac9fac2aadfea0f6b2286192f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <a class=\"btn btn-primary\" href=\"/todolist/web\">Back To Todos</a>
    <hr>
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
        
        $__internal_48c336362a79c279a460f4c1dfe122a9a07e3ac9fac2aadfea0f6b2286192f18->leave($__internal_48c336362a79c279a460f4c1dfe122a9a07e3ac9fac2aadfea0f6b2286192f18_prof);

    }

    public function getTemplateName()
    {
        return ":todo:details.html.twig";
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
/*     <hr>*/
/*     <h2 class="page-header">{{todo.name}}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{todo.category}}</li>*/
/*         <li class="list-group-item">Priority: {{todo.priority}}</li>*/
/*         <li class="list-group-item">Description: {{todo.description}}</li>*/
/*         <li class="list-group-item">Due: <strong>{{todo.dueDate|date('F j, Y, g:i a')}}</strong></li>*/
/*     </ul>*/
/* {% endblock %}*/
