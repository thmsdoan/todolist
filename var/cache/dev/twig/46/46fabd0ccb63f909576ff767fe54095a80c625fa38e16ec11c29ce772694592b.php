<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f0cb139ff0b45ae536b442c6542851f7a00cf48c758ff2999724553039cb30b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8b86ad10a4399ce337d8599ec2f375aded97225b1893caaf7b6bc22207c76eec = $this->env->getExtension("native_profiler");
        $__internal_8b86ad10a4399ce337d8599ec2f375aded97225b1893caaf7b6bc22207c76eec->enter($__internal_8b86ad10a4399ce337d8599ec2f375aded97225b1893caaf7b6bc22207c76eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b86ad10a4399ce337d8599ec2f375aded97225b1893caaf7b6bc22207c76eec->leave($__internal_8b86ad10a4399ce337d8599ec2f375aded97225b1893caaf7b6bc22207c76eec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8882b33ec639f7516d8a739d42889d2b1dc11c0fa0af8b61edf9218e735995d1 = $this->env->getExtension("native_profiler");
        $__internal_8882b33ec639f7516d8a739d42889d2b1dc11c0fa0af8b61edf9218e735995d1->enter($__internal_8882b33ec639f7516d8a739d42889d2b1dc11c0fa0af8b61edf9218e735995d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8882b33ec639f7516d8a739d42889d2b1dc11c0fa0af8b61edf9218e735995d1->leave($__internal_8882b33ec639f7516d8a739d42889d2b1dc11c0fa0af8b61edf9218e735995d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0858fd246664bd3351b645c6b724197a75a5c871ac0d71971058bf1ecff27af9 = $this->env->getExtension("native_profiler");
        $__internal_0858fd246664bd3351b645c6b724197a75a5c871ac0d71971058bf1ecff27af9->enter($__internal_0858fd246664bd3351b645c6b724197a75a5c871ac0d71971058bf1ecff27af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0858fd246664bd3351b645c6b724197a75a5c871ac0d71971058bf1ecff27af9->leave($__internal_0858fd246664bd3351b645c6b724197a75a5c871ac0d71971058bf1ecff27af9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5615d0452a83cfe6d535b339db68983eb9c1a10197b5809ba51d5bb36d4ff05f = $this->env->getExtension("native_profiler");
        $__internal_5615d0452a83cfe6d535b339db68983eb9c1a10197b5809ba51d5bb36d4ff05f->enter($__internal_5615d0452a83cfe6d535b339db68983eb9c1a10197b5809ba51d5bb36d4ff05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5615d0452a83cfe6d535b339db68983eb9c1a10197b5809ba51d5bb36d4ff05f->leave($__internal_5615d0452a83cfe6d535b339db68983eb9c1a10197b5809ba51d5bb36d4ff05f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
