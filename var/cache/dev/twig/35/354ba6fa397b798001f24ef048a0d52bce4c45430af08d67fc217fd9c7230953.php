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
        $__internal_0bfcaaf6726f72147063f05bcf127b37a890da9611b29a8bdbb87c6f40b174a2 = $this->env->getExtension("native_profiler");
        $__internal_0bfcaaf6726f72147063f05bcf127b37a890da9611b29a8bdbb87c6f40b174a2->enter($__internal_0bfcaaf6726f72147063f05bcf127b37a890da9611b29a8bdbb87c6f40b174a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfcaaf6726f72147063f05bcf127b37a890da9611b29a8bdbb87c6f40b174a2->leave($__internal_0bfcaaf6726f72147063f05bcf127b37a890da9611b29a8bdbb87c6f40b174a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2304176762bf1033e24c9f5aab0930716617b5fc145c879a62a930d2057d5f6 = $this->env->getExtension("native_profiler");
        $__internal_c2304176762bf1033e24c9f5aab0930716617b5fc145c879a62a930d2057d5f6->enter($__internal_c2304176762bf1033e24c9f5aab0930716617b5fc145c879a62a930d2057d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c2304176762bf1033e24c9f5aab0930716617b5fc145c879a62a930d2057d5f6->leave($__internal_c2304176762bf1033e24c9f5aab0930716617b5fc145c879a62a930d2057d5f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ea6cc7dd5cc2bbe6909888d4fbd1ba46615e2e4e403b32af5f9b70423908902 = $this->env->getExtension("native_profiler");
        $__internal_5ea6cc7dd5cc2bbe6909888d4fbd1ba46615e2e4e403b32af5f9b70423908902->enter($__internal_5ea6cc7dd5cc2bbe6909888d4fbd1ba46615e2e4e403b32af5f9b70423908902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ea6cc7dd5cc2bbe6909888d4fbd1ba46615e2e4e403b32af5f9b70423908902->leave($__internal_5ea6cc7dd5cc2bbe6909888d4fbd1ba46615e2e4e403b32af5f9b70423908902_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7931282e2bdedea6e8ce6e370d8fcb12d42e7b3dac164d6d5f169152a0d07d31 = $this->env->getExtension("native_profiler");
        $__internal_7931282e2bdedea6e8ce6e370d8fcb12d42e7b3dac164d6d5f169152a0d07d31->enter($__internal_7931282e2bdedea6e8ce6e370d8fcb12d42e7b3dac164d6d5f169152a0d07d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7931282e2bdedea6e8ce6e370d8fcb12d42e7b3dac164d6d5f169152a0d07d31->leave($__internal_7931282e2bdedea6e8ce6e370d8fcb12d42e7b3dac164d6d5f169152a0d07d31_prof);

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
