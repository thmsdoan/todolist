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
        $__internal_f3e44d41f3efef9e53e43928483762c714b55ae1f047c31c1eef2a85b42cd476 = $this->env->getExtension("native_profiler");
        $__internal_f3e44d41f3efef9e53e43928483762c714b55ae1f047c31c1eef2a85b42cd476->enter($__internal_f3e44d41f3efef9e53e43928483762c714b55ae1f047c31c1eef2a85b42cd476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <a class=\"nav-link\" href=\"/todolist/web\">Home <span class=\"sr-only\">(current)</span></a>
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 39
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "                </div>
            </div>
        </main>
        <!-- /.container --> 

        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>

</html>";
        
        $__internal_f3e44d41f3efef9e53e43928483762c714b55ae1f047c31c1eef2a85b42cd476->leave($__internal_f3e44d41f3efef9e53e43928483762c714b55ae1f047c31c1eef2a85b42cd476_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc2138a31c055471be3ebb5e2860d21ddef47ffd7d23f53d58819aba6861c9f4 = $this->env->getExtension("native_profiler");
        $__internal_fc2138a31c055471be3ebb5e2860d21ddef47ffd7d23f53d58819aba6861c9f4->enter($__internal_fc2138a31c055471be3ebb5e2860d21ddef47ffd7d23f53d58819aba6861c9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc2138a31c055471be3ebb5e2860d21ddef47ffd7d23f53d58819aba6861c9f4->leave($__internal_fc2138a31c055471be3ebb5e2860d21ddef47ffd7d23f53d58819aba6861c9f4_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19de68615cda5600a2c96b3a8b924359de65d095553e0faef2bb3c0d2b290dbe = $this->env->getExtension("native_profiler");
        $__internal_19de68615cda5600a2c96b3a8b924359de65d095553e0faef2bb3c0d2b290dbe->enter($__internal_19de68615cda5600a2c96b3a8b924359de65d095553e0faef2bb3c0d2b290dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19de68615cda5600a2c96b3a8b924359de65d095553e0faef2bb3c0d2b290dbe->leave($__internal_19de68615cda5600a2c96b3a8b924359de65d095553e0faef2bb3c0d2b290dbe_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_62942ee95bdd55f2a18ad05ffd630e11fb82e404443252f27a9c746ce0eb33e2 = $this->env->getExtension("native_profiler");
        $__internal_62942ee95bdd55f2a18ad05ffd630e11fb82e404443252f27a9c746ce0eb33e2->enter($__internal_62942ee95bdd55f2a18ad05ffd630e11fb82e404443252f27a9c746ce0eb33e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62942ee95bdd55f2a18ad05ffd630e11fb82e404443252f27a9c746ce0eb33e2->leave($__internal_62942ee95bdd55f2a18ad05ffd630e11fb82e404443252f27a9c746ce0eb33e2_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7740016d2dc7856cedba5394c42c0754d52628e36485c60a2d91f3eae7e30561 = $this->env->getExtension("native_profiler");
        $__internal_7740016d2dc7856cedba5394c42c0754d52628e36485c60a2d91f3eae7e30561->enter($__internal_7740016d2dc7856cedba5394c42c0754d52628e36485c60a2d91f3eae7e30561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7740016d2dc7856cedba5394c42c0754d52628e36485c60a2d91f3eae7e30561->leave($__internal_7740016d2dc7856cedba5394c42c0754d52628e36485c60a2d91f3eae7e30561_prof);

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
        return array (  155 => 50,  144 => 44,  133 => 13,  121 => 9,  112 => 51,  110 => 50,  103 => 45,  100 => 44,  91 => 42,  86 => 41,  77 => 39,  73 => 38,  45 => 14,  43 => 13,  36 => 9,  26 => 1,);
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
/*                         <a class="nav-link" href="/todolist/web">Home <span class="sr-only">(current)</span></a>*/
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
/*                     {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                         <div class="alert alert-success">{{flash_message}}</div>*/
/*                     {% endfor %}*/
/*                     {% for flash_message in app.session.flashbag.get('error') %}*/
/*                         <div class="alert alert-danger">{{flash_message}}</div>*/
/*                     {% endfor %}*/
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
