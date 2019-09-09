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
        $__internal_67b9c14fc855ceaefa80a3031ffa5cf6707f9bc932e1f3288e72b3a7afa08614 = $this->env->getExtension("native_profiler");
        $__internal_67b9c14fc855ceaefa80a3031ffa5cf6707f9bc932e1f3288e72b3a7afa08614->enter($__internal_67b9c14fc855ceaefa80a3031ffa5cf6707f9bc932e1f3288e72b3a7afa08614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_67b9c14fc855ceaefa80a3031ffa5cf6707f9bc932e1f3288e72b3a7afa08614->leave($__internal_67b9c14fc855ceaefa80a3031ffa5cf6707f9bc932e1f3288e72b3a7afa08614_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_76777c1c2d0625d6fef44ed2c80e9d6f83bf231101b9d09e8baf64a6bae805bb = $this->env->getExtension("native_profiler");
        $__internal_76777c1c2d0625d6fef44ed2c80e9d6f83bf231101b9d09e8baf64a6bae805bb->enter($__internal_76777c1c2d0625d6fef44ed2c80e9d6f83bf231101b9d09e8baf64a6bae805bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_76777c1c2d0625d6fef44ed2c80e9d6f83bf231101b9d09e8baf64a6bae805bb->leave($__internal_76777c1c2d0625d6fef44ed2c80e9d6f83bf231101b9d09e8baf64a6bae805bb_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_642732141d8a1e15743e1fba19000738b587d8a7c5fc4537eb9e97049d247729 = $this->env->getExtension("native_profiler");
        $__internal_642732141d8a1e15743e1fba19000738b587d8a7c5fc4537eb9e97049d247729->enter($__internal_642732141d8a1e15743e1fba19000738b587d8a7c5fc4537eb9e97049d247729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_642732141d8a1e15743e1fba19000738b587d8a7c5fc4537eb9e97049d247729->leave($__internal_642732141d8a1e15743e1fba19000738b587d8a7c5fc4537eb9e97049d247729_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a488fcc36bc8bf24faa7fc55e6dbac5c9f73a144e71c2ebadc9a5a472fb6c11 = $this->env->getExtension("native_profiler");
        $__internal_6a488fcc36bc8bf24faa7fc55e6dbac5c9f73a144e71c2ebadc9a5a472fb6c11->enter($__internal_6a488fcc36bc8bf24faa7fc55e6dbac5c9f73a144e71c2ebadc9a5a472fb6c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a488fcc36bc8bf24faa7fc55e6dbac5c9f73a144e71c2ebadc9a5a472fb6c11->leave($__internal_6a488fcc36bc8bf24faa7fc55e6dbac5c9f73a144e71c2ebadc9a5a472fb6c11_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2bae99bc1d332d866b73741b9458f3c3bb22f9802505c31b8be23268455cf77 = $this->env->getExtension("native_profiler");
        $__internal_b2bae99bc1d332d866b73741b9458f3c3bb22f9802505c31b8be23268455cf77->enter($__internal_b2bae99bc1d332d866b73741b9458f3c3bb22f9802505c31b8be23268455cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b2bae99bc1d332d866b73741b9458f3c3bb22f9802505c31b8be23268455cf77->leave($__internal_b2bae99bc1d332d866b73741b9458f3c3bb22f9802505c31b8be23268455cf77_prof);

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
