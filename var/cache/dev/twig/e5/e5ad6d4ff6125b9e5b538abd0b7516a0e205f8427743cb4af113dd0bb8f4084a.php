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
        $__internal_b69dbd04a38ac86b4e033153e3b27642274d2e89c45d5c38e1f73fd03ef7a398 = $this->env->getExtension("native_profiler");
        $__internal_b69dbd04a38ac86b4e033153e3b27642274d2e89c45d5c38e1f73fd03ef7a398->enter($__internal_b69dbd04a38ac86b4e033153e3b27642274d2e89c45d5c38e1f73fd03ef7a398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 39
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 40
                echo "                            <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                                ";
                // line 41
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                </div>
            </div>
        </main>
        <!-- /.container --> 

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>

</html>";
        
        $__internal_b69dbd04a38ac86b4e033153e3b27642274d2e89c45d5c38e1f73fd03ef7a398->leave($__internal_b69dbd04a38ac86b4e033153e3b27642274d2e89c45d5c38e1f73fd03ef7a398_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d58ca9da3cfedb77ca923e0b543b36646cf3d8617c5e4ef136037678a367e5e = $this->env->getExtension("native_profiler");
        $__internal_7d58ca9da3cfedb77ca923e0b543b36646cf3d8617c5e4ef136037678a367e5e->enter($__internal_7d58ca9da3cfedb77ca923e0b543b36646cf3d8617c5e4ef136037678a367e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d58ca9da3cfedb77ca923e0b543b36646cf3d8617c5e4ef136037678a367e5e->leave($__internal_7d58ca9da3cfedb77ca923e0b543b36646cf3d8617c5e4ef136037678a367e5e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b38473f65b0c79c82d7e5eca8f5d22325240056ba9d105a8df3583a2fd8ddcb = $this->env->getExtension("native_profiler");
        $__internal_4b38473f65b0c79c82d7e5eca8f5d22325240056ba9d105a8df3583a2fd8ddcb->enter($__internal_4b38473f65b0c79c82d7e5eca8f5d22325240056ba9d105a8df3583a2fd8ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4b38473f65b0c79c82d7e5eca8f5d22325240056ba9d105a8df3583a2fd8ddcb->leave($__internal_4b38473f65b0c79c82d7e5eca8f5d22325240056ba9d105a8df3583a2fd8ddcb_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_c01a5fdb5e13675850c7d81ffaaa924f0b38385ee77fd611cb564f16e31b4314 = $this->env->getExtension("native_profiler");
        $__internal_c01a5fdb5e13675850c7d81ffaaa924f0b38385ee77fd611cb564f16e31b4314->enter($__internal_c01a5fdb5e13675850c7d81ffaaa924f0b38385ee77fd611cb564f16e31b4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c01a5fdb5e13675850c7d81ffaaa924f0b38385ee77fd611cb564f16e31b4314->leave($__internal_c01a5fdb5e13675850c7d81ffaaa924f0b38385ee77fd611cb564f16e31b4314_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57012313693cbb6abf347f80906e2a70b85db9238f8c52fa46ae5daa48fdbfdf = $this->env->getExtension("native_profiler");
        $__internal_57012313693cbb6abf347f80906e2a70b85db9238f8c52fa46ae5daa48fdbfdf->enter($__internal_57012313693cbb6abf347f80906e2a70b85db9238f8c52fa46ae5daa48fdbfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57012313693cbb6abf347f80906e2a70b85db9238f8c52fa46ae5daa48fdbfdf->leave($__internal_57012313693cbb6abf347f80906e2a70b85db9238f8c52fa46ae5daa48fdbfdf_prof);

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
        return array (  157 => 51,  146 => 45,  135 => 13,  123 => 9,  114 => 52,  112 => 51,  105 => 46,  102 => 45,  96 => 44,  87 => 41,  82 => 40,  77 => 39,  73 => 38,  45 => 14,  43 => 13,  36 => 9,  26 => 1,);
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
/*                     {% for label, flashes in app.session.flashbag.all %}*/
/*                         {% for flash in flashes %}*/
/*                             <div class="flash-{{ label }}">*/
/*                                 {{ flash }}*/
/*                             </div>*/
/*                         {% endfor %}*/
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
