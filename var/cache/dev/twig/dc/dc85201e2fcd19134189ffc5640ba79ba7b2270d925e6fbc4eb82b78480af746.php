<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_4cb70ae05c372cf99862889c7fd53c0e6a30ac5a02995b32820c1fb300c8489b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4278b0bd0f6bbf2692a85e788d12ad2ed9e12e374aa46e7e62405ac9f12f615f = $this->env->getExtension("native_profiler");
        $__internal_4278b0bd0f6bbf2692a85e788d12ad2ed9e12e374aa46e7e62405ac9f12f615f->enter($__internal_4278b0bd0f6bbf2692a85e788d12ad2ed9e12e374aa46e7e62405ac9f12f615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4278b0bd0f6bbf2692a85e788d12ad2ed9e12e374aa46e7e62405ac9f12f615f->leave($__internal_4278b0bd0f6bbf2692a85e788d12ad2ed9e12e374aa46e7e62405ac9f12f615f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
