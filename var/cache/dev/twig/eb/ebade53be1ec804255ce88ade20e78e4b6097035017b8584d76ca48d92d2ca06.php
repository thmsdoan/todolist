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
        $__internal_b13216cf8ccdaab064ef920b55faf08fd08b28a70dbdd7fc021d21b379204bbf = $this->env->getExtension("native_profiler");
        $__internal_b13216cf8ccdaab064ef920b55faf08fd08b28a70dbdd7fc021d21b379204bbf->enter($__internal_b13216cf8ccdaab064ef920b55faf08fd08b28a70dbdd7fc021d21b379204bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13216cf8ccdaab064ef920b55faf08fd08b28a70dbdd7fc021d21b379204bbf->leave($__internal_b13216cf8ccdaab064ef920b55faf08fd08b28a70dbdd7fc021d21b379204bbf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_290b620297850cbed9fd16db6ed618af297e00c8ba35342cb3c05df049a8fef3 = $this->env->getExtension("native_profiler");
        $__internal_290b620297850cbed9fd16db6ed618af297e00c8ba35342cb3c05df049a8fef3->enter($__internal_290b620297850cbed9fd16db6ed618af297e00c8ba35342cb3c05df049a8fef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_290b620297850cbed9fd16db6ed618af297e00c8ba35342cb3c05df049a8fef3->leave($__internal_290b620297850cbed9fd16db6ed618af297e00c8ba35342cb3c05df049a8fef3_prof);

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
/*     <hr>*/
/*     <h2 class="page-header">{{todo.name}}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{todo.category}}</li>*/
/*         <li class="list-group-item">Priority: {{todo.priority}}</li>*/
/*         <li class="list-group-item">Description: {{todo.description}}</li>*/
/*         <li class="list-group-item">Due: <strong>{{todo.dueDate|date('F j, Y, g:i a')}}</strong></li>*/
/*     </ul>*/
/* {% endblock %}*/
