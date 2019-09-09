<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4f0cb139ff0b45ae536b442c6542851f7a00cf48c758ff2999724553039cb30b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc0244533df8b9dfdeb48c55733def4e667152a55a4c2f26df88ffc4e5d38ba = $this->env->getExtension("native_profiler");
        $__internal_3dc0244533df8b9dfdeb48c55733def4e667152a55a4c2f26df88ffc4e5d38ba->enter($__internal_3dc0244533df8b9dfdeb48c55733def4e667152a55a4c2f26df88ffc4e5d38ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc0244533df8b9dfdeb48c55733def4e667152a55a4c2f26df88ffc4e5d38ba->leave($__internal_3dc0244533df8b9dfdeb48c55733def4e667152a55a4c2f26df88ffc4e5d38ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52a6043ec9d7547b9677a1853ebe8839437a840ce9ce316410df7cb69aa2c424 = $this->env->getExtension("native_profiler");
        $__internal_52a6043ec9d7547b9677a1853ebe8839437a840ce9ce316410df7cb69aa2c424->enter($__internal_52a6043ec9d7547b9677a1853ebe8839437a840ce9ce316410df7cb69aa2c424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52a6043ec9d7547b9677a1853ebe8839437a840ce9ce316410df7cb69aa2c424->leave($__internal_52a6043ec9d7547b9677a1853ebe8839437a840ce9ce316410df7cb69aa2c424_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2ff030dd270318040ed5ad3200071d86772e6d80b6d9ccc3b3b4020947b5ee = $this->env->getExtension("native_profiler");
        $__internal_7d2ff030dd270318040ed5ad3200071d86772e6d80b6d9ccc3b3b4020947b5ee->enter($__internal_7d2ff030dd270318040ed5ad3200071d86772e6d80b6d9ccc3b3b4020947b5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d2ff030dd270318040ed5ad3200071d86772e6d80b6d9ccc3b3b4020947b5ee->leave($__internal_7d2ff030dd270318040ed5ad3200071d86772e6d80b6d9ccc3b3b4020947b5ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b3cfb81acdab82843fc64944ee94b8f4a27470dfbdda3d767613995100f23a = $this->env->getExtension("native_profiler");
        $__internal_67b3cfb81acdab82843fc64944ee94b8f4a27470dfbdda3d767613995100f23a->enter($__internal_67b3cfb81acdab82843fc64944ee94b8f4a27470dfbdda3d767613995100f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_67b3cfb81acdab82843fc64944ee94b8f4a27470dfbdda3d767613995100f23a->leave($__internal_67b3cfb81acdab82843fc64944ee94b8f4a27470dfbdda3d767613995100f23a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
