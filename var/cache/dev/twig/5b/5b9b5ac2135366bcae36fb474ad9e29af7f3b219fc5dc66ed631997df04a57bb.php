<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5976661a6a8ff4f557e6cc64ba11986b2678b302275d9a9286d58000dfd2b928 extends Twig_Template
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
        $__internal_ef5f79f64c8bd389de9ff49e6620c74ccaa35270d5389b3ec5b95fbc7f3417f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5f79f64c8bd389de9ff49e6620c74ccaa35270d5389b3ec5b95fbc7f3417f0->enter($__internal_ef5f79f64c8bd389de9ff49e6620c74ccaa35270d5389b3ec5b95fbc7f3417f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_225a663145e5c80bda57c30cf51919b292b2129c89475cab90dc4cd4c543418f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225a663145e5c80bda57c30cf51919b292b2129c89475cab90dc4cd4c543418f->enter($__internal_225a663145e5c80bda57c30cf51919b292b2129c89475cab90dc4cd4c543418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ef5f79f64c8bd389de9ff49e6620c74ccaa35270d5389b3ec5b95fbc7f3417f0->leave($__internal_ef5f79f64c8bd389de9ff49e6620c74ccaa35270d5389b3ec5b95fbc7f3417f0_prof);

        
        $__internal_225a663145e5c80bda57c30cf51919b292b2129c89475cab90dc4cd4c543418f->leave($__internal_225a663145e5c80bda57c30cf51919b292b2129c89475cab90dc4cd4c543418f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
