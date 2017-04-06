<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_562be9ca48bb7b9e7a2d0d2a53db65db1a26a6ceda2e7afd82b9b4ab8a63e54e extends Twig_Template
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
        $__internal_36470730d4a6b9be67a7f5e140e6dba62cc62ec1c3da1272071cb34bcc8f7778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36470730d4a6b9be67a7f5e140e6dba62cc62ec1c3da1272071cb34bcc8f7778->enter($__internal_36470730d4a6b9be67a7f5e140e6dba62cc62ec1c3da1272071cb34bcc8f7778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_027205bfbeb1cca2160d96e92418a5893528fb88c3911a3cea8d41b5d65c75c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027205bfbeb1cca2160d96e92418a5893528fb88c3911a3cea8d41b5d65c75c7->enter($__internal_027205bfbeb1cca2160d96e92418a5893528fb88c3911a3cea8d41b5d65c75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_36470730d4a6b9be67a7f5e140e6dba62cc62ec1c3da1272071cb34bcc8f7778->leave($__internal_36470730d4a6b9be67a7f5e140e6dba62cc62ec1c3da1272071cb34bcc8f7778_prof);

        
        $__internal_027205bfbeb1cca2160d96e92418a5893528fb88c3911a3cea8d41b5d65c75c7->leave($__internal_027205bfbeb1cca2160d96e92418a5893528fb88c3911a3cea8d41b5d65c75c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
