<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37f668905e2e7628dce9aaebcfb0172ba9ea505753ed820d901e53bf77fbdfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a56943f55a4fe24512d4b386752fe596bc44185430727037aba775498d200bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a56943f55a4fe24512d4b386752fe596bc44185430727037aba775498d200bc->enter($__internal_7a56943f55a4fe24512d4b386752fe596bc44185430727037aba775498d200bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_89ad2cd3c879e70a7cc53653e964b05e6cbdfa3fdbdb1a24c53f480092678044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ad2cd3c879e70a7cc53653e964b05e6cbdfa3fdbdb1a24c53f480092678044->enter($__internal_89ad2cd3c879e70a7cc53653e964b05e6cbdfa3fdbdb1a24c53f480092678044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a56943f55a4fe24512d4b386752fe596bc44185430727037aba775498d200bc->leave($__internal_7a56943f55a4fe24512d4b386752fe596bc44185430727037aba775498d200bc_prof);

        
        $__internal_89ad2cd3c879e70a7cc53653e964b05e6cbdfa3fdbdb1a24c53f480092678044->leave($__internal_89ad2cd3c879e70a7cc53653e964b05e6cbdfa3fdbdb1a24c53f480092678044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d85d0c19b6ec3f6d5f2d9e970b2ee89efce6bb68697e5496d77e5b9570acaf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d85d0c19b6ec3f6d5f2d9e970b2ee89efce6bb68697e5496d77e5b9570acaf3->enter($__internal_3d85d0c19b6ec3f6d5f2d9e970b2ee89efce6bb68697e5496d77e5b9570acaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2db6d85ae668a5c67800dc47c5e93f60f3c9bd296219c6176e2ad3f9dafa0ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db6d85ae668a5c67800dc47c5e93f60f3c9bd296219c6176e2ad3f9dafa0ff2->enter($__internal_2db6d85ae668a5c67800dc47c5e93f60f3c9bd296219c6176e2ad3f9dafa0ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2db6d85ae668a5c67800dc47c5e93f60f3c9bd296219c6176e2ad3f9dafa0ff2->leave($__internal_2db6d85ae668a5c67800dc47c5e93f60f3c9bd296219c6176e2ad3f9dafa0ff2_prof);

        
        $__internal_3d85d0c19b6ec3f6d5f2d9e970b2ee89efce6bb68697e5496d77e5b9570acaf3->leave($__internal_3d85d0c19b6ec3f6d5f2d9e970b2ee89efce6bb68697e5496d77e5b9570acaf3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98e4b6017586c0aed52065936dcaf009e065eda8342d37648f0afde03413e742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e4b6017586c0aed52065936dcaf009e065eda8342d37648f0afde03413e742->enter($__internal_98e4b6017586c0aed52065936dcaf009e065eda8342d37648f0afde03413e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a837f4adc6b350a33094caf1d6479345934250f9fac262bd99ca30269984a09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a837f4adc6b350a33094caf1d6479345934250f9fac262bd99ca30269984a09d->enter($__internal_a837f4adc6b350a33094caf1d6479345934250f9fac262bd99ca30269984a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a837f4adc6b350a33094caf1d6479345934250f9fac262bd99ca30269984a09d->leave($__internal_a837f4adc6b350a33094caf1d6479345934250f9fac262bd99ca30269984a09d_prof);

        
        $__internal_98e4b6017586c0aed52065936dcaf009e065eda8342d37648f0afde03413e742->leave($__internal_98e4b6017586c0aed52065936dcaf009e065eda8342d37648f0afde03413e742_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
