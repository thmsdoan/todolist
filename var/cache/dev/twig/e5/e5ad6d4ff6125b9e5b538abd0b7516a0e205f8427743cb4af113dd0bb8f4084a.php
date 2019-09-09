<?php

/* base.html.twig */
class __TwigTemplate_8df6d3d640382cda509fc995a602b608dd899c7b20b83b7f2a794abf6ff38cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_055c7e69a12c9ab5f0c3730fab4b92bf7f965ceb3932f74521e49ceb52d5b1ca = $this->env->getExtension("native_profiler");
        $__internal_055c7e69a12c9ab5f0c3730fab4b92bf7f965ceb3932f74521e49ceb52d5b1ca->enter($__internal_055c7e69a12c9ab5f0c3730fab4b92bf7f965ceb3932f74521e49ceb52d5b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/starter-template/\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"/todolist/web\">Todo List</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/todolist/web\">Home<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/todolist/web/todo/create\">Add Todo</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 38
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "                </div>
            </div>
        </main>
        <!-- /.container --> 

        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>

</html>";
        
        $__internal_055c7e69a12c9ab5f0c3730fab4b92bf7f965ceb3932f74521e49ceb52d5b1ca->leave($__internal_055c7e69a12c9ab5f0c3730fab4b92bf7f965ceb3932f74521e49ceb52d5b1ca_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_51494d2499ecec4530cfa2e9dca3b884c12a3c580a2e2508697ec94dd7ed2f62 = $this->env->getExtension("native_profiler");
        $__internal_51494d2499ecec4530cfa2e9dca3b884c12a3c580a2e2508697ec94dd7ed2f62->enter($__internal_51494d2499ecec4530cfa2e9dca3b884c12a3c580a2e2508697ec94dd7ed2f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51494d2499ecec4530cfa2e9dca3b884c12a3c580a2e2508697ec94dd7ed2f62->leave($__internal_51494d2499ecec4530cfa2e9dca3b884c12a3c580a2e2508697ec94dd7ed2f62_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2d441eb8b7516b7e9ce3c25f1bcbb4cdb3c679b07a5f49d5a6c3a5e679867d0 = $this->env->getExtension("native_profiler");
        $__internal_a2d441eb8b7516b7e9ce3c25f1bcbb4cdb3c679b07a5f49d5a6c3a5e679867d0->enter($__internal_a2d441eb8b7516b7e9ce3c25f1bcbb4cdb3c679b07a5f49d5a6c3a5e679867d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2d441eb8b7516b7e9ce3c25f1bcbb4cdb3c679b07a5f49d5a6c3a5e679867d0->leave($__internal_a2d441eb8b7516b7e9ce3c25f1bcbb4cdb3c679b07a5f49d5a6c3a5e679867d0_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a610a51cce5766827df3a6ea609e2583345b0c12e154b4d940d0fadab9f4fc5 = $this->env->getExtension("native_profiler");
        $__internal_2a610a51cce5766827df3a6ea609e2583345b0c12e154b4d940d0fadab9f4fc5->enter($__internal_2a610a51cce5766827df3a6ea609e2583345b0c12e154b4d940d0fadab9f4fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a610a51cce5766827df3a6ea609e2583345b0c12e154b4d940d0fadab9f4fc5->leave($__internal_2a610a51cce5766827df3a6ea609e2583345b0c12e154b4d940d0fadab9f4fc5_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bc9b8107f76f26482ef6b49381ce28deae3a252434407849bdc49f0eb164682 = $this->env->getExtension("native_profiler");
        $__internal_5bc9b8107f76f26482ef6b49381ce28deae3a252434407849bdc49f0eb164682->enter($__internal_5bc9b8107f76f26482ef6b49381ce28deae3a252434407849bdc49f0eb164682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5bc9b8107f76f26482ef6b49381ce28deae3a252434407849bdc49f0eb164682->leave($__internal_5bc9b8107f76f26482ef6b49381ce28deae3a252434407849bdc49f0eb164682_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  121 => 40,  110 => 13,  98 => 9,  89 => 47,  87 => 46,  80 => 41,  78 => 40,  73 => 38,  45 => 14,  43 => 13,  36 => 9,  26 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">*/
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*         <nav class="navbar navbar-expand-md navbar-dark bg-dark">*/
/*             <a class="navbar-brand" href="/todolist/web">Todo List</a>*/
/*             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">*/
/*                 <span class="navbar-toggler-icon"></span>*/
/*             </button>*/
/*             <div class="collapse navbar-collapse" id="navbarsExampleDefault">*/
/*                 <ul class="navbar-nav mr-auto">*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link" href="/todolist/web">Home<span class="sr-only">(current)</span></a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link" href="/todolist/web/todo/create">Add Todo</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <main role="main" class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </main>*/
/*         <!-- /.container --> */
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
