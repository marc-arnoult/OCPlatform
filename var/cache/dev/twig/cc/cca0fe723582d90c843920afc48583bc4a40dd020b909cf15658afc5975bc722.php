<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2f1cf9d90b5c49c44bcc37eccfd709d11f969115bd692bb6db9545ded866b5f8 extends Twig_Template
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
        $__internal_9f7054ec9c7c63063ecd9f1078cf3b898053773a0e81279717ccced29675c4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7054ec9c7c63063ecd9f1078cf3b898053773a0e81279717ccced29675c4eb->enter($__internal_9f7054ec9c7c63063ecd9f1078cf3b898053773a0e81279717ccced29675c4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ffc4a3416868713f5f375d3228e19754e481b3f0088202feade755d65b3acfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc4a3416868713f5f375d3228e19754e481b3f0088202feade755d65b3acfc4->enter($__internal_ffc4a3416868713f5f375d3228e19754e481b3f0088202feade755d65b3acfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9f7054ec9c7c63063ecd9f1078cf3b898053773a0e81279717ccced29675c4eb->leave($__internal_9f7054ec9c7c63063ecd9f1078cf3b898053773a0e81279717ccced29675c4eb_prof);

        
        $__internal_ffc4a3416868713f5f375d3228e19754e481b3f0088202feade755d65b3acfc4->leave($__internal_ffc4a3416868713f5f375d3228e19754e481b3f0088202feade755d65b3acfc4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
