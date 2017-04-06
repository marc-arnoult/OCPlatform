<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_88ad4b6c43b01afc3dfd326c43db95c94382b9621b67d2f97f244a859524ede7 extends Twig_Template
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
        $__internal_5509b8870496071682aea4d194de14d29e155630abe6b694b4c30ad3c048b3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5509b8870496071682aea4d194de14d29e155630abe6b694b4c30ad3c048b3bc->enter($__internal_5509b8870496071682aea4d194de14d29e155630abe6b694b4c30ad3c048b3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_44b4bf7d2ab8d0630118fd67ef029c2cec2ce6d5c4f5ceb54670ac7a608a27a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b4bf7d2ab8d0630118fd67ef029c2cec2ce6d5c4f5ceb54670ac7a608a27a9->enter($__internal_44b4bf7d2ab8d0630118fd67ef029c2cec2ce6d5c4f5ceb54670ac7a608a27a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5509b8870496071682aea4d194de14d29e155630abe6b694b4c30ad3c048b3bc->leave($__internal_5509b8870496071682aea4d194de14d29e155630abe6b694b4c30ad3c048b3bc_prof);

        
        $__internal_44b4bf7d2ab8d0630118fd67ef029c2cec2ce6d5c4f5ceb54670ac7a608a27a9->leave($__internal_44b4bf7d2ab8d0630118fd67ef029c2cec2ce6d5c4f5ceb54670ac7a608a27a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
