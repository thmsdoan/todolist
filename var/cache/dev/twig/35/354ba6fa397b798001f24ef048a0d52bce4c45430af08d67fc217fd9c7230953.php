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
        $__internal_f11764eb63b69539e4184be79bbe45410b7d03a775ad9be0831f180efffe98ed = $this->env->getExtension("native_profiler");
        $__internal_f11764eb63b69539e4184be79bbe45410b7d03a775ad9be0831f180efffe98ed->enter($__internal_f11764eb63b69539e4184be79bbe45410b7d03a775ad9be0831f180efffe98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11764eb63b69539e4184be79bbe45410b7d03a775ad9be0831f180efffe98ed->leave($__internal_f11764eb63b69539e4184be79bbe45410b7d03a775ad9be0831f180efffe98ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d328dbb91b5e2191d1533f7cc8bf3a2d36fa878c15095b77669534118361fad1 = $this->env->getExtension("native_profiler");
        $__internal_d328dbb91b5e2191d1533f7cc8bf3a2d36fa878c15095b77669534118361fad1->enter($__internal_d328dbb91b5e2191d1533f7cc8bf3a2d36fa878c15095b77669534118361fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d328dbb91b5e2191d1533f7cc8bf3a2d36fa878c15095b77669534118361fad1->leave($__internal_d328dbb91b5e2191d1533f7cc8bf3a2d36fa878c15095b77669534118361fad1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd6da98263310c8e2c0053f80b9584e4be4fe722689102ce47f9b7fadcb64cc0 = $this->env->getExtension("native_profiler");
        $__internal_dd6da98263310c8e2c0053f80b9584e4be4fe722689102ce47f9b7fadcb64cc0->enter($__internal_dd6da98263310c8e2c0053f80b9584e4be4fe722689102ce47f9b7fadcb64cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd6da98263310c8e2c0053f80b9584e4be4fe722689102ce47f9b7fadcb64cc0->leave($__internal_dd6da98263310c8e2c0053f80b9584e4be4fe722689102ce47f9b7fadcb64cc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d25a5c0cfa9de30a8defe700df16cf75e51dbb5178f1ded4183968bac993f2f8 = $this->env->getExtension("native_profiler");
        $__internal_d25a5c0cfa9de30a8defe700df16cf75e51dbb5178f1ded4183968bac993f2f8->enter($__internal_d25a5c0cfa9de30a8defe700df16cf75e51dbb5178f1ded4183968bac993f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d25a5c0cfa9de30a8defe700df16cf75e51dbb5178f1ded4183968bac993f2f8->leave($__internal_d25a5c0cfa9de30a8defe700df16cf75e51dbb5178f1ded4183968bac993f2f8_prof);

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
