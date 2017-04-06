<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ccdcaf32110dc132b014b139663e1da2e16a65f4a922b53bacf8af576f4e01da extends Twig_Template
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
        $__internal_d82168ad22e033a76882215cd62cba947622c1ade38fa4e0468954de937c3bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82168ad22e033a76882215cd62cba947622c1ade38fa4e0468954de937c3bf3->enter($__internal_d82168ad22e033a76882215cd62cba947622c1ade38fa4e0468954de937c3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1dd3c9d0567b501bd62a12e208ae75215171a90f34ddfcc9fb56fe7088aa503f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd3c9d0567b501bd62a12e208ae75215171a90f34ddfcc9fb56fe7088aa503f->enter($__internal_1dd3c9d0567b501bd62a12e208ae75215171a90f34ddfcc9fb56fe7088aa503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d82168ad22e033a76882215cd62cba947622c1ade38fa4e0468954de937c3bf3->leave($__internal_d82168ad22e033a76882215cd62cba947622c1ade38fa4e0468954de937c3bf3_prof);

        
        $__internal_1dd3c9d0567b501bd62a12e208ae75215171a90f34ddfcc9fb56fe7088aa503f->leave($__internal_1dd3c9d0567b501bd62a12e208ae75215171a90f34ddfcc9fb56fe7088aa503f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
