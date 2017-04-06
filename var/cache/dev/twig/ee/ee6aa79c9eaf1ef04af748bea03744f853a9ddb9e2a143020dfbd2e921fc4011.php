<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_483b197cf204587a66b12757e2b423e735d38a1e01b0f178ecd0e641d12e72e9 extends Twig_Template
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
        $__internal_6107f06a1ca11103046e0fcc2179b33eac9ed79492f754e97a3bc11a0bfdfa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6107f06a1ca11103046e0fcc2179b33eac9ed79492f754e97a3bc11a0bfdfa6a->enter($__internal_6107f06a1ca11103046e0fcc2179b33eac9ed79492f754e97a3bc11a0bfdfa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f96c1dcf032cabb25e239e253bafae75fd31afc8bd333202d346d65a53bc9fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96c1dcf032cabb25e239e253bafae75fd31afc8bd333202d346d65a53bc9fe3->enter($__internal_f96c1dcf032cabb25e239e253bafae75fd31afc8bd333202d346d65a53bc9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6107f06a1ca11103046e0fcc2179b33eac9ed79492f754e97a3bc11a0bfdfa6a->leave($__internal_6107f06a1ca11103046e0fcc2179b33eac9ed79492f754e97a3bc11a0bfdfa6a_prof);

        
        $__internal_f96c1dcf032cabb25e239e253bafae75fd31afc8bd333202d346d65a53bc9fe3->leave($__internal_f96c1dcf032cabb25e239e253bafae75fd31afc8bd333202d346d65a53bc9fe3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
