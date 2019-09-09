<?php

/* todo/index.html.twig */
class __TwigTemplate_112b8f151fcc4a3b13c1bdf0767b2ec1177fe07a93267b92a8ae8d6dbe858b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
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
        $__internal_9c8519ac158e5e91581b7e818b8ed97663a08c88132a116a139ee952132885ea = $this->env->getExtension("native_profiler");
        $__internal_9c8519ac158e5e91581b7e818b8ed97663a08c88132a116a139ee952132885ea->enter($__internal_9c8519ac158e5e91581b7e818b8ed97663a08c88132a116a139ee952132885ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8519ac158e5e91581b7e818b8ed97663a08c88132a116a139ee952132885ea->leave($__internal_9c8519ac158e5e91581b7e818b8ed97663a08c88132a116a139ee952132885ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c583aa1213a759dedf6ae2b2bdcb1317b7ad25667859429df96bba67a508f64d = $this->env->getExtension("native_profiler");
        $__internal_c583aa1213a759dedf6ae2b2bdcb1317b7ad25667859429df96bba67a508f64d->enter($__internal_c583aa1213a759dedf6ae2b2bdcb1317b7ad25667859429df96bba67a508f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <h2 class=\"page-header\">Latest Todos</h2>
    <br>
    <table class=\"table table-striped\">
       <thead>
          <tr>
              <th scope=\"col\">Created</th>
              <th scope=\"col\">Todo</th>
              <th scope=\"col\">Due Date</th>
          </tr>
       </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"todo/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                        <a href=\"todo/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                        <a href=\"todo/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_c583aa1213a759dedf6ae2b2bdcb1317b7ad25667859429df96bba67a508f64d->leave($__internal_c583aa1213a759dedf6ae2b2bdcb1317b7ad25667859429df96bba67a508f64d_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  82 => 23,  78 => 22,  74 => 21,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <br>*/
/*     <h2 class="page-header">Latest Todos</h2>*/
/*     <br>*/
/*     <table class="table table-striped">*/
/*        <thead>*/
/*           <tr>*/
/*               <th scope="col">Created</th>*/
/*               <th scope="col">Todo</th>*/
/*               <th scope="col">Due Date</th>*/
/*           </tr>*/
/*        </thead>*/
/*         <tbody>*/
/*             {% for todo in todos %}*/
/*                 <tr>*/
/*                     <td>{{todo.createDate|date('F j, Y, g:i a')}}</td>*/
/*                     <td>{{todo.name}}</td>*/
/*                     <td>{{todo.dueDate|date('F j, Y, g:i a')}}</td>*/
/*                     <td>*/
/*                         <a href="todo/details/{{todo.id}}" class="btn btn-success">View</a>*/
/*                         <a href="todo/edit/{{todo.id}}" class="btn btn-primary">Edit</a>*/
/*                         <a href="todo/delete/{{todo.id}}" class="btn btn-danger">Delete</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
