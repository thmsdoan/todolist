<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_026ae1988ca44fc13e856f0c97e3fc460a2dc505bf8b13baaac5587b9e73c040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20bda9998fbb1c2765c9a887b9cae1194ac716cebe5edfa4a4a3bb37fa5aa82b = $this->env->getExtension("native_profiler");
        $__internal_20bda9998fbb1c2765c9a887b9cae1194ac716cebe5edfa4a4a3bb37fa5aa82b->enter($__internal_20bda9998fbb1c2765c9a887b9cae1194ac716cebe5edfa4a4a3bb37fa5aa82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bda9998fbb1c2765c9a887b9cae1194ac716cebe5edfa4a4a3bb37fa5aa82b->leave($__internal_20bda9998fbb1c2765c9a887b9cae1194ac716cebe5edfa4a4a3bb37fa5aa82b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57cb48a003b0ca2e95cdc41ee0dc06ad1b52b94ad3220b9bfaae2969b155b04e = $this->env->getExtension("native_profiler");
        $__internal_57cb48a003b0ca2e95cdc41ee0dc06ad1b52b94ad3220b9bfaae2969b155b04e->enter($__internal_57cb48a003b0ca2e95cdc41ee0dc06ad1b52b94ad3220b9bfaae2969b155b04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57cb48a003b0ca2e95cdc41ee0dc06ad1b52b94ad3220b9bfaae2969b155b04e->leave($__internal_57cb48a003b0ca2e95cdc41ee0dc06ad1b52b94ad3220b9bfaae2969b155b04e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d813b4ac9208d1736ed96ab7de980c66a441e4b663bcc05043f2275997a3a0c0 = $this->env->getExtension("native_profiler");
        $__internal_d813b4ac9208d1736ed96ab7de980c66a441e4b663bcc05043f2275997a3a0c0->enter($__internal_d813b4ac9208d1736ed96ab7de980c66a441e4b663bcc05043f2275997a3a0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d813b4ac9208d1736ed96ab7de980c66a441e4b663bcc05043f2275997a3a0c0->leave($__internal_d813b4ac9208d1736ed96ab7de980c66a441e4b663bcc05043f2275997a3a0c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acc5160d94be77bbf0a848761b57d836633d87e1dd4f3e97f38f1b48a13d61b3 = $this->env->getExtension("native_profiler");
        $__internal_acc5160d94be77bbf0a848761b57d836633d87e1dd4f3e97f38f1b48a13d61b3->enter($__internal_acc5160d94be77bbf0a848761b57d836633d87e1dd4f3e97f38f1b48a13d61b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_acc5160d94be77bbf0a848761b57d836633d87e1dd4f3e97f38f1b48a13d61b3->leave($__internal_acc5160d94be77bbf0a848761b57d836633d87e1dd4f3e97f38f1b48a13d61b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
