<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a0cb5a7d7ffd83f2d1a15872436da9b7be55c926a954cee6968cc997f80a2d86 extends Twig_Template
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
        $__internal_7f71804fa0b5631fc65fa60c38e3cd1243e40e785e54fe5548eb7b6e81071772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f71804fa0b5631fc65fa60c38e3cd1243e40e785e54fe5548eb7b6e81071772->enter($__internal_7f71804fa0b5631fc65fa60c38e3cd1243e40e785e54fe5548eb7b6e81071772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d9194803f540a143e2a2579c2098fb3d85b497844d93da50bff05b38b1cfb5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9194803f540a143e2a2579c2098fb3d85b497844d93da50bff05b38b1cfb5f1->enter($__internal_d9194803f540a143e2a2579c2098fb3d85b497844d93da50bff05b38b1cfb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7f71804fa0b5631fc65fa60c38e3cd1243e40e785e54fe5548eb7b6e81071772->leave($__internal_7f71804fa0b5631fc65fa60c38e3cd1243e40e785e54fe5548eb7b6e81071772_prof);

        
        $__internal_d9194803f540a143e2a2579c2098fb3d85b497844d93da50bff05b38b1cfb5f1->leave($__internal_d9194803f540a143e2a2579c2098fb3d85b497844d93da50bff05b38b1cfb5f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
