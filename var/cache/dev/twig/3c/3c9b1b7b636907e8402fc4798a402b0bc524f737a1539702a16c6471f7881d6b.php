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
        $__internal_bdee23a09cb8de01f9d8362626630cefe959924030e09166ab63ef46fdc3c6b2 = $this->env->getExtension("native_profiler");
        $__internal_bdee23a09cb8de01f9d8362626630cefe959924030e09166ab63ef46fdc3c6b2->enter($__internal_bdee23a09cb8de01f9d8362626630cefe959924030e09166ab63ef46fdc3c6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdee23a09cb8de01f9d8362626630cefe959924030e09166ab63ef46fdc3c6b2->leave($__internal_bdee23a09cb8de01f9d8362626630cefe959924030e09166ab63ef46fdc3c6b2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b31eabb4f3c7fe33ef2aabb300ec163f85f2e3296c068e927986ba1021e16336 = $this->env->getExtension("native_profiler");
        $__internal_b31eabb4f3c7fe33ef2aabb300ec163f85f2e3296c068e927986ba1021e16336->enter($__internal_b31eabb4f3c7fe33ef2aabb300ec163f85f2e3296c068e927986ba1021e16336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <p><h2 class=\"page-header\">Latest Todos</h2><p>
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"todo/details/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                <a href=\"todo/edit/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                <a href=\"todo/delete/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "   </tbody>
</table>
";
        
        $__internal_b31eabb4f3c7fe33ef2aabb300ec163f85f2e3296c068e927986ba1021e16336->leave($__internal_b31eabb4f3c7fe33ef2aabb300ec163f85f2e3296c068e927986ba1021e16336_prof);

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
        return array (  90 => 25,  80 => 21,  76 => 20,  72 => 19,  67 => 17,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <p><h2 class="page-header">Latest Todos</h2><p>*/
/*     <table class="table table-striped">*/
/*        <thead>*/
/*           <tr>*/
/*               <th scope="col">Created</th>*/
/*               <th scope="col">Todo</th>*/
/*               <th scope="col">Due Date</th>*/
/*           </tr>*/
/*        </thead>*/
/*     <tbody>*/
/*     {% for todo in todos %}*/
/*         <tr>*/
/*             <td>{{todo.createDate|date('F j, Y, g:i a')}}</td>*/
/*             <td>{{todo.name}}</td>*/
/*             <td>{{todo.dueDate|date('F j, Y, g:i a')}}</td>*/
/*             <td>*/
/*                 <a href="todo/details/{{todo.id}}" class="btn btn-success">View</a>*/
/*                 <a href="todo/edit/{{todo.id}}" class="btn btn-primary">Edit</a>*/
/*                 <a href="todo/delete/{{todo.id}}" class="btn btn-danger">Delete</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*    </tbody>*/
/* </table>*/
/* {% endblock %}*/
