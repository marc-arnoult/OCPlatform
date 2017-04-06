<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9eb9427f0681f6c757aa23cac29e88c7097157c7b3953dd68cb0443bf377623f extends Twig_Template
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
        $__internal_cbaaaafb1fed6bd4370704057872c667d58495c3307eee3d534704aea76ff45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaaaafb1fed6bd4370704057872c667d58495c3307eee3d534704aea76ff45d->enter($__internal_cbaaaafb1fed6bd4370704057872c667d58495c3307eee3d534704aea76ff45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_8f295330d7c847780febcc12e192552ac8cb9f42bff061304e45d63b096af519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f295330d7c847780febcc12e192552ac8cb9f42bff061304e45d63b096af519->enter($__internal_8f295330d7c847780febcc12e192552ac8cb9f42bff061304e45d63b096af519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_cbaaaafb1fed6bd4370704057872c667d58495c3307eee3d534704aea76ff45d->leave($__internal_cbaaaafb1fed6bd4370704057872c667d58495c3307eee3d534704aea76ff45d_prof);

        
        $__internal_8f295330d7c847780febcc12e192552ac8cb9f42bff061304e45d63b096af519->leave($__internal_8f295330d7c847780febcc12e192552ac8cb9f42bff061304e45d63b096af519_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
