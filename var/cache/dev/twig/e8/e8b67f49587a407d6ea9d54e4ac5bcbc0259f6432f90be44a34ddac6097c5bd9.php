<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_31e75ea6b2308dc608333d25712b8e086fef7ffa0334094b8469fa4a2d250976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e75ea6b2308dc608333d25712b8e086fef7ffa0334094b8469fa4a2d250976->enter($__internal_31e75ea6b2308dc608333d25712b8e086fef7ffa0334094b8469fa4a2d250976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c297cbba1df8ccabea4087ff938f5b88c73311cf7b9034b5e8c69492b5db6275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c297cbba1df8ccabea4087ff938f5b88c73311cf7b9034b5e8c69492b5db6275->enter($__internal_c297cbba1df8ccabea4087ff938f5b88c73311cf7b9034b5e8c69492b5db6275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e75ea6b2308dc608333d25712b8e086fef7ffa0334094b8469fa4a2d250976->leave($__internal_31e75ea6b2308dc608333d25712b8e086fef7ffa0334094b8469fa4a2d250976_prof);

        
        $__internal_c297cbba1df8ccabea4087ff938f5b88c73311cf7b9034b5e8c69492b5db6275->leave($__internal_c297cbba1df8ccabea4087ff938f5b88c73311cf7b9034b5e8c69492b5db6275_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb85789b8cb038515a6b578347bfd20b81eacb522620331e25ebe17112284f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb85789b8cb038515a6b578347bfd20b81eacb522620331e25ebe17112284f44->enter($__internal_fb85789b8cb038515a6b578347bfd20b81eacb522620331e25ebe17112284f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3f4a89fe5df0e03d892dc4c22aec4331ae0e09e3d4f1feaae6a49977b3decc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f4a89fe5df0e03d892dc4c22aec4331ae0e09e3d4f1feaae6a49977b3decc2->enter($__internal_a3f4a89fe5df0e03d892dc4c22aec4331ae0e09e3d4f1feaae6a49977b3decc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a3f4a89fe5df0e03d892dc4c22aec4331ae0e09e3d4f1feaae6a49977b3decc2->leave($__internal_a3f4a89fe5df0e03d892dc4c22aec4331ae0e09e3d4f1feaae6a49977b3decc2_prof);

        
        $__internal_fb85789b8cb038515a6b578347bfd20b81eacb522620331e25ebe17112284f44->leave($__internal_fb85789b8cb038515a6b578347bfd20b81eacb522620331e25ebe17112284f44_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a0b00866159343e6306d0ea34a0fdd2727f05c9c6b7e96b3f8e34ecc9b4c930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0b00866159343e6306d0ea34a0fdd2727f05c9c6b7e96b3f8e34ecc9b4c930->enter($__internal_0a0b00866159343e6306d0ea34a0fdd2727f05c9c6b7e96b3f8e34ecc9b4c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa5f59d41643e57f04124d8a1ecb3d87e0e6af3fa4f36b8c779d23bd1b7a8bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5f59d41643e57f04124d8a1ecb3d87e0e6af3fa4f36b8c779d23bd1b7a8bff->enter($__internal_aa5f59d41643e57f04124d8a1ecb3d87e0e6af3fa4f36b8c779d23bd1b7a8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa5f59d41643e57f04124d8a1ecb3d87e0e6af3fa4f36b8c779d23bd1b7a8bff->leave($__internal_aa5f59d41643e57f04124d8a1ecb3d87e0e6af3fa4f36b8c779d23bd1b7a8bff_prof);

        
        $__internal_0a0b00866159343e6306d0ea34a0fdd2727f05c9c6b7e96b3f8e34ecc9b4c930->leave($__internal_0a0b00866159343e6306d0ea34a0fdd2727f05c9c6b7e96b3f8e34ecc9b4c930_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8d758cd48175e99c819f11378ccbee3b3e4d8510be23c34cba75f0ba7d19bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d758cd48175e99c819f11378ccbee3b3e4d8510be23c34cba75f0ba7d19bf4->enter($__internal_b8d758cd48175e99c819f11378ccbee3b3e4d8510be23c34cba75f0ba7d19bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9619f0c95a79e58e4411e00eb5162687269cb59a76a3a29af85ea948a110e632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9619f0c95a79e58e4411e00eb5162687269cb59a76a3a29af85ea948a110e632->enter($__internal_9619f0c95a79e58e4411e00eb5162687269cb59a76a3a29af85ea948a110e632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9619f0c95a79e58e4411e00eb5162687269cb59a76a3a29af85ea948a110e632->leave($__internal_9619f0c95a79e58e4411e00eb5162687269cb59a76a3a29af85ea948a110e632_prof);

        
        $__internal_b8d758cd48175e99c819f11378ccbee3b3e4d8510be23c34cba75f0ba7d19bf4->leave($__internal_b8d758cd48175e99c819f11378ccbee3b3e4d8510be23c34cba75f0ba7d19bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
