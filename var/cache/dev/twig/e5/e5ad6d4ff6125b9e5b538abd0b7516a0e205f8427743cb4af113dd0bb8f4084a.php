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
        $__internal_b65a20bd43ee201f43eb123946d7a05d4388d737e3f6721c8f8feab73d1521f8 = $this->env->getExtension("native_profiler");
        $__internal_b65a20bd43ee201f43eb123946d7a05d4388d737e3f6721c8f8feab73d1521f8->enter($__internal_b65a20bd43ee201f43eb123946d7a05d4388d737e3f6721c8f8feab73d1521f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "               <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 40
            echo "               <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "               ";
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </div>
         </div>
      </main>
      <!-- /.container --> 
      ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "   </body>
</html>";
        
        $__internal_b65a20bd43ee201f43eb123946d7a05d4388d737e3f6721c8f8feab73d1521f8->leave($__internal_b65a20bd43ee201f43eb123946d7a05d4388d737e3f6721c8f8feab73d1521f8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_30119ed7d54bf4b281144490ff9ed7ff83c8fff58fc4d0e5f093631a3c1d19af = $this->env->getExtension("native_profiler");
        $__internal_30119ed7d54bf4b281144490ff9ed7ff83c8fff58fc4d0e5f093631a3c1d19af->enter($__internal_30119ed7d54bf4b281144490ff9ed7ff83c8fff58fc4d0e5f093631a3c1d19af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30119ed7d54bf4b281144490ff9ed7ff83c8fff58fc4d0e5f093631a3c1d19af->leave($__internal_30119ed7d54bf4b281144490ff9ed7ff83c8fff58fc4d0e5f093631a3c1d19af_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a51014dadbffacec8ae32dc46248cfb620d95f18b70cda91183856aa17a7d224 = $this->env->getExtension("native_profiler");
        $__internal_a51014dadbffacec8ae32dc46248cfb620d95f18b70cda91183856aa17a7d224->enter($__internal_a51014dadbffacec8ae32dc46248cfb620d95f18b70cda91183856aa17a7d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a51014dadbffacec8ae32dc46248cfb620d95f18b70cda91183856aa17a7d224->leave($__internal_a51014dadbffacec8ae32dc46248cfb620d95f18b70cda91183856aa17a7d224_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3df0409b4b3aebddfab26ce6a8fcfaa43de96707158ca79624083611d5becc3 = $this->env->getExtension("native_profiler");
        $__internal_e3df0409b4b3aebddfab26ce6a8fcfaa43de96707158ca79624083611d5becc3->enter($__internal_e3df0409b4b3aebddfab26ce6a8fcfaa43de96707158ca79624083611d5becc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3df0409b4b3aebddfab26ce6a8fcfaa43de96707158ca79624083611d5becc3->leave($__internal_e3df0409b4b3aebddfab26ce6a8fcfaa43de96707158ca79624083611d5becc3_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3213a3ded543ef4857235783614a1445e589aeffa39304fbd062e49d0dfad2aa = $this->env->getExtension("native_profiler");
        $__internal_3213a3ded543ef4857235783614a1445e589aeffa39304fbd062e49d0dfad2aa->enter($__internal_3213a3ded543ef4857235783614a1445e589aeffa39304fbd062e49d0dfad2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3213a3ded543ef4857235783614a1445e589aeffa39304fbd062e49d0dfad2aa->leave($__internal_3213a3ded543ef4857235783614a1445e589aeffa39304fbd062e49d0dfad2aa_prof);

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
        return array (  151 => 47,  140 => 42,  129 => 13,  117 => 9,  109 => 48,  107 => 47,  101 => 43,  98 => 42,  89 => 40,  84 => 39,  75 => 37,  71 => 36,  45 => 14,  43 => 13,  36 => 9,  26 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/*    <head>*/
/*       <meta charset="utf-8">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*       <meta name="description" content="">*/
/*       <meta name="author" content="">*/
/*       <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">*/
/*       <title>{% block title %}Welcome!{% endblock %}</title>*/
/*       <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">*/
/*       <!-- Bootstrap core CSS -->*/
/*       <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">*/
/*       {% block stylesheets %}{% endblock %}*/
/*       <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*    </head>*/
/*    <body>*/
/*       <nav class="navbar navbar-expand-md navbar-dark bg-dark">*/
/*          <a class="navbar-brand" href="/todolist/web">Todo List</a>*/
/*          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">*/
/*          <span class="navbar-toggler-icon"></span>*/
/*          </button>*/
/*          <div class="collapse navbar-collapse" id="navbarsExampleDefault">*/
/*             <ul class="navbar-nav mr-auto">*/
/*                <li class="nav-item">*/
/*                   <a class="nav-link" href="/todolist/web">Home <span class="sr-only">(current)</span></a>*/
/*                </li>*/
/*                <li class="nav-item">*/
/*                   <a class="nav-link" href="/todolist/web/todo/create">Add Todo</a>*/
/*                </li>*/
/*             </ul>*/
/*          </div>*/
/*       </nav>*/
/*       <main role="main" class="container">*/
/*          <div class="row">*/
/*             <div class="col-md-12">*/
/*                {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                <div class="alert alert-success">{{flash_message}}</div>*/
/*                {% endfor %}*/
/*                {% for flash_message in app.session.flashbag.get('error') %}*/
/*                <div class="alert alert-danger">{{flash_message}}</div>*/
/*                {% endfor %}*/
/*                {% block body %}{% endblock %}*/
/*             </div>*/
/*          </div>*/
/*       </main>*/
/*       <!-- /.container --> */
/*       {% block javascripts %}{% endblock %}*/
/*    </body>*/
/* </html>*/
