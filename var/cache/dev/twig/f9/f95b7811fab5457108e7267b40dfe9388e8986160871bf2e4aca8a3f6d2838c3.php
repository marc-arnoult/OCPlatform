<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7cb28722fc81072767ef30164a5c2fc3a5408131907d67e9047632071ccd62b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb28722fc81072767ef30164a5c2fc3a5408131907d67e9047632071ccd62b5->enter($__internal_7cb28722fc81072767ef30164a5c2fc3a5408131907d67e9047632071ccd62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_103eab797bdae45789a6b412f91be589be08a98e9f38567ac03a4f5fc412bed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103eab797bdae45789a6b412f91be589be08a98e9f38567ac03a4f5fc412bed1->enter($__internal_103eab797bdae45789a6b412f91be589be08a98e9f38567ac03a4f5fc412bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb28722fc81072767ef30164a5c2fc3a5408131907d67e9047632071ccd62b5->leave($__internal_7cb28722fc81072767ef30164a5c2fc3a5408131907d67e9047632071ccd62b5_prof);

        
        $__internal_103eab797bdae45789a6b412f91be589be08a98e9f38567ac03a4f5fc412bed1->leave($__internal_103eab797bdae45789a6b412f91be589be08a98e9f38567ac03a4f5fc412bed1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0c2847bee0edfc180e60040308d15ae8d105274ba2dc5f2cef38e7f22b614d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c2847bee0edfc180e60040308d15ae8d105274ba2dc5f2cef38e7f22b614d5->enter($__internal_b0c2847bee0edfc180e60040308d15ae8d105274ba2dc5f2cef38e7f22b614d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_299aa16592a6a9d06a613a24ea4a6c081d17dd09c8f1eed9ab1afdf0bd9c5ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299aa16592a6a9d06a613a24ea4a6c081d17dd09c8f1eed9ab1afdf0bd9c5ca6->enter($__internal_299aa16592a6a9d06a613a24ea4a6c081d17dd09c8f1eed9ab1afdf0bd9c5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_299aa16592a6a9d06a613a24ea4a6c081d17dd09c8f1eed9ab1afdf0bd9c5ca6->leave($__internal_299aa16592a6a9d06a613a24ea4a6c081d17dd09c8f1eed9ab1afdf0bd9c5ca6_prof);

        
        $__internal_b0c2847bee0edfc180e60040308d15ae8d105274ba2dc5f2cef38e7f22b614d5->leave($__internal_b0c2847bee0edfc180e60040308d15ae8d105274ba2dc5f2cef38e7f22b614d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1824a711f53b5ff44e712414c32e75f8b6a47d9365714833e9c1f68d9f587dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1824a711f53b5ff44e712414c32e75f8b6a47d9365714833e9c1f68d9f587dad->enter($__internal_1824a711f53b5ff44e712414c32e75f8b6a47d9365714833e9c1f68d9f587dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4760e58e97bc04c29ebde5eb7cd7f61c2517eb74b109d6ea5114f456acad6296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4760e58e97bc04c29ebde5eb7cd7f61c2517eb74b109d6ea5114f456acad6296->enter($__internal_4760e58e97bc04c29ebde5eb7cd7f61c2517eb74b109d6ea5114f456acad6296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4760e58e97bc04c29ebde5eb7cd7f61c2517eb74b109d6ea5114f456acad6296->leave($__internal_4760e58e97bc04c29ebde5eb7cd7f61c2517eb74b109d6ea5114f456acad6296_prof);

        
        $__internal_1824a711f53b5ff44e712414c32e75f8b6a47d9365714833e9c1f68d9f587dad->leave($__internal_1824a711f53b5ff44e712414c32e75f8b6a47d9365714833e9c1f68d9f587dad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d49ea981351e5c019a3253ce624318c28e19a9b3d358d705315252cefca2bbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49ea981351e5c019a3253ce624318c28e19a9b3d358d705315252cefca2bbee->enter($__internal_d49ea981351e5c019a3253ce624318c28e19a9b3d358d705315252cefca2bbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fce877a72751e12e1a0d3d4901c2b0591b173661d4f70bcd9b6bae3cf7c007ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce877a72751e12e1a0d3d4901c2b0591b173661d4f70bcd9b6bae3cf7c007ab->enter($__internal_fce877a72751e12e1a0d3d4901c2b0591b173661d4f70bcd9b6bae3cf7c007ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fce877a72751e12e1a0d3d4901c2b0591b173661d4f70bcd9b6bae3cf7c007ab->leave($__internal_fce877a72751e12e1a0d3d4901c2b0591b173661d4f70bcd9b6bae3cf7c007ab_prof);

        
        $__internal_d49ea981351e5c019a3253ce624318c28e19a9b3d358d705315252cefca2bbee->leave($__internal_d49ea981351e5c019a3253ce624318c28e19a9b3d358d705315252cefca2bbee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
