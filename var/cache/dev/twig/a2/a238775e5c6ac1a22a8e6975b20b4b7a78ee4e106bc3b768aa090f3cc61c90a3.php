<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6234ed2d1b80a3d025fbc947a015147b38dd903d27074f48fada43ff754e9afd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa41fe0a4e3a5584c1dadf8773c552cac0e8f4f4a36c5a2b6ab8e15527cc1ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa41fe0a4e3a5584c1dadf8773c552cac0e8f4f4a36c5a2b6ab8e15527cc1ff7->enter($__internal_aa41fe0a4e3a5584c1dadf8773c552cac0e8f4f4a36c5a2b6ab8e15527cc1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7ecb44b15d75bbe7cc7f89244db7e8eb96f2ae930af9f08959dac298ed558fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecb44b15d75bbe7cc7f89244db7e8eb96f2ae930af9f08959dac298ed558fbe->enter($__internal_7ecb44b15d75bbe7cc7f89244db7e8eb96f2ae930af9f08959dac298ed558fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa41fe0a4e3a5584c1dadf8773c552cac0e8f4f4a36c5a2b6ab8e15527cc1ff7->leave($__internal_aa41fe0a4e3a5584c1dadf8773c552cac0e8f4f4a36c5a2b6ab8e15527cc1ff7_prof);

        
        $__internal_7ecb44b15d75bbe7cc7f89244db7e8eb96f2ae930af9f08959dac298ed558fbe->leave($__internal_7ecb44b15d75bbe7cc7f89244db7e8eb96f2ae930af9f08959dac298ed558fbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2153303fadd70284dcc41bcafdbb88331d72369d38194ddcc8058e403e7fdef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2153303fadd70284dcc41bcafdbb88331d72369d38194ddcc8058e403e7fdef8->enter($__internal_2153303fadd70284dcc41bcafdbb88331d72369d38194ddcc8058e403e7fdef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5f7ecc556ab00ff6533819a2846a4c9487732ee1f33f7f052c1edf9962ee86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f7ecc556ab00ff6533819a2846a4c9487732ee1f33f7f052c1edf9962ee86f->enter($__internal_d5f7ecc556ab00ff6533819a2846a4c9487732ee1f33f7f052c1edf9962ee86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d5f7ecc556ab00ff6533819a2846a4c9487732ee1f33f7f052c1edf9962ee86f->leave($__internal_d5f7ecc556ab00ff6533819a2846a4c9487732ee1f33f7f052c1edf9962ee86f_prof);

        
        $__internal_2153303fadd70284dcc41bcafdbb88331d72369d38194ddcc8058e403e7fdef8->leave($__internal_2153303fadd70284dcc41bcafdbb88331d72369d38194ddcc8058e403e7fdef8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_577da5c7e277c42e2bdb3251b803eb3cffcd375652a4c868072c6801fa362a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577da5c7e277c42e2bdb3251b803eb3cffcd375652a4c868072c6801fa362a9f->enter($__internal_577da5c7e277c42e2bdb3251b803eb3cffcd375652a4c868072c6801fa362a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d04f76e4eec59dc60df0fdbf7deeb14aa4c72ad76e742e3d0db24e5701cad261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04f76e4eec59dc60df0fdbf7deeb14aa4c72ad76e742e3d0db24e5701cad261->enter($__internal_d04f76e4eec59dc60df0fdbf7deeb14aa4c72ad76e742e3d0db24e5701cad261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d04f76e4eec59dc60df0fdbf7deeb14aa4c72ad76e742e3d0db24e5701cad261->leave($__internal_d04f76e4eec59dc60df0fdbf7deeb14aa4c72ad76e742e3d0db24e5701cad261_prof);

        
        $__internal_577da5c7e277c42e2bdb3251b803eb3cffcd375652a4c868072c6801fa362a9f->leave($__internal_577da5c7e277c42e2bdb3251b803eb3cffcd375652a4c868072c6801fa362a9f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
