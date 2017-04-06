<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b6991726562a754abea0300e6d209728accf2bd9e29b42a8c773899a9d32afc0 extends Twig_Template
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
        $__internal_c8e4711ddce7e98b8e9997dd9a5cc473b5d0294b1aa541c6326d762bf1076d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e4711ddce7e98b8e9997dd9a5cc473b5d0294b1aa541c6326d762bf1076d8f->enter($__internal_c8e4711ddce7e98b8e9997dd9a5cc473b5d0294b1aa541c6326d762bf1076d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a9507b5a5f52420e20f290998018241668ba9f3b446502328895d84761654ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9507b5a5f52420e20f290998018241668ba9f3b446502328895d84761654ff3->enter($__internal_a9507b5a5f52420e20f290998018241668ba9f3b446502328895d84761654ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_c8e4711ddce7e98b8e9997dd9a5cc473b5d0294b1aa541c6326d762bf1076d8f->leave($__internal_c8e4711ddce7e98b8e9997dd9a5cc473b5d0294b1aa541c6326d762bf1076d8f_prof);

        
        $__internal_a9507b5a5f52420e20f290998018241668ba9f3b446502328895d84761654ff3->leave($__internal_a9507b5a5f52420e20f290998018241668ba9f3b446502328895d84761654ff3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
