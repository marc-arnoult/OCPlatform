<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_27a14dc2bfef375141ad2a11215d385dc8f936bf01588520927377aafb5b6f7b extends Twig_Template
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
        $__internal_4dd261e1afc15ab02e85fa71ab036e4e49b333e3414459323dcc487842a5b430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd261e1afc15ab02e85fa71ab036e4e49b333e3414459323dcc487842a5b430->enter($__internal_4dd261e1afc15ab02e85fa71ab036e4e49b333e3414459323dcc487842a5b430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b36624476ad553a7a13996e1caeb54d9045af86e8bece720d5cc563161b2b209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36624476ad553a7a13996e1caeb54d9045af86e8bece720d5cc563161b2b209->enter($__internal_b36624476ad553a7a13996e1caeb54d9045af86e8bece720d5cc563161b2b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4dd261e1afc15ab02e85fa71ab036e4e49b333e3414459323dcc487842a5b430->leave($__internal_4dd261e1afc15ab02e85fa71ab036e4e49b333e3414459323dcc487842a5b430_prof);

        
        $__internal_b36624476ad553a7a13996e1caeb54d9045af86e8bece720d5cc563161b2b209->leave($__internal_b36624476ad553a7a13996e1caeb54d9045af86e8bece720d5cc563161b2b209_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
