<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb52fb8c12bb8a8af4991af2185c4148d653716c30be4f496c03d565c3494ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb52fb8c12bb8a8af4991af2185c4148d653716c30be4f496c03d565c3494ec2->enter($__internal_cb52fb8c12bb8a8af4991af2185c4148d653716c30be4f496c03d565c3494ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b39ac9b5a3bb57f76333d010712394a831cab30cdea28f5e2d51079816b32f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39ac9b5a3bb57f76333d010712394a831cab30cdea28f5e2d51079816b32f82->enter($__internal_b39ac9b5a3bb57f76333d010712394a831cab30cdea28f5e2d51079816b32f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb52fb8c12bb8a8af4991af2185c4148d653716c30be4f496c03d565c3494ec2->leave($__internal_cb52fb8c12bb8a8af4991af2185c4148d653716c30be4f496c03d565c3494ec2_prof);

        
        $__internal_b39ac9b5a3bb57f76333d010712394a831cab30cdea28f5e2d51079816b32f82->leave($__internal_b39ac9b5a3bb57f76333d010712394a831cab30cdea28f5e2d51079816b32f82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26e8ba689f40a223ef831845e2f7997fac4ee09d6347cbe9669aca2c85f4ae5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e8ba689f40a223ef831845e2f7997fac4ee09d6347cbe9669aca2c85f4ae5e->enter($__internal_26e8ba689f40a223ef831845e2f7997fac4ee09d6347cbe9669aca2c85f4ae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10d965ee999125a04f78325705350cd3292d7be4cd3be7292ac36a8719c5f268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d965ee999125a04f78325705350cd3292d7be4cd3be7292ac36a8719c5f268->enter($__internal_10d965ee999125a04f78325705350cd3292d7be4cd3be7292ac36a8719c5f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10d965ee999125a04f78325705350cd3292d7be4cd3be7292ac36a8719c5f268->leave($__internal_10d965ee999125a04f78325705350cd3292d7be4cd3be7292ac36a8719c5f268_prof);

        
        $__internal_26e8ba689f40a223ef831845e2f7997fac4ee09d6347cbe9669aca2c85f4ae5e->leave($__internal_26e8ba689f40a223ef831845e2f7997fac4ee09d6347cbe9669aca2c85f4ae5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b40e12b4ae98c4543babdd3b6bfbf1d9cf9386c5732bcbc238e06f05e10a92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b40e12b4ae98c4543babdd3b6bfbf1d9cf9386c5732bcbc238e06f05e10a92d->enter($__internal_9b40e12b4ae98c4543babdd3b6bfbf1d9cf9386c5732bcbc238e06f05e10a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c91bafc814d4a2014a87852eca16d8f9dbfa344b75d7b28691a7ccf8295c5251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91bafc814d4a2014a87852eca16d8f9dbfa344b75d7b28691a7ccf8295c5251->enter($__internal_c91bafc814d4a2014a87852eca16d8f9dbfa344b75d7b28691a7ccf8295c5251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c91bafc814d4a2014a87852eca16d8f9dbfa344b75d7b28691a7ccf8295c5251->leave($__internal_c91bafc814d4a2014a87852eca16d8f9dbfa344b75d7b28691a7ccf8295c5251_prof);

        
        $__internal_9b40e12b4ae98c4543babdd3b6bfbf1d9cf9386c5732bcbc238e06f05e10a92d->leave($__internal_9b40e12b4ae98c4543babdd3b6bfbf1d9cf9386c5732bcbc238e06f05e10a92d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_161ab0aa19eef6ed65a35fbb03b00a9fc533b82f7118ae81c6c49aed1c7c4dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161ab0aa19eef6ed65a35fbb03b00a9fc533b82f7118ae81c6c49aed1c7c4dcd->enter($__internal_161ab0aa19eef6ed65a35fbb03b00a9fc533b82f7118ae81c6c49aed1c7c4dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04242cafe59199799421f6751aad41410adb019f6d100edd784df14f89616dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04242cafe59199799421f6751aad41410adb019f6d100edd784df14f89616dd7->enter($__internal_04242cafe59199799421f6751aad41410adb019f6d100edd784df14f89616dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04242cafe59199799421f6751aad41410adb019f6d100edd784df14f89616dd7->leave($__internal_04242cafe59199799421f6751aad41410adb019f6d100edd784df14f89616dd7_prof);

        
        $__internal_161ab0aa19eef6ed65a35fbb03b00a9fc533b82f7118ae81c6c49aed1c7c4dcd->leave($__internal_161ab0aa19eef6ed65a35fbb03b00a9fc533b82f7118ae81c6c49aed1c7c4dcd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
