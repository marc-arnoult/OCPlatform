<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_649a726114e9ad95b89d7f5771391a85a90a385287e55e24920a7148e0454577 extends Twig_Template
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
        $__internal_5cb53ce5df312edddda961f41f52400c3f30b6b0bfe94096c80c370241f6b056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb53ce5df312edddda961f41f52400c3f30b6b0bfe94096c80c370241f6b056->enter($__internal_5cb53ce5df312edddda961f41f52400c3f30b6b0bfe94096c80c370241f6b056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0838ed9e8f96371115535bc6240c6ea375e275c55f0b7c03a70b48296e8070c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0838ed9e8f96371115535bc6240c6ea375e275c55f0b7c03a70b48296e8070c1->enter($__internal_0838ed9e8f96371115535bc6240c6ea375e275c55f0b7c03a70b48296e8070c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5cb53ce5df312edddda961f41f52400c3f30b6b0bfe94096c80c370241f6b056->leave($__internal_5cb53ce5df312edddda961f41f52400c3f30b6b0bfe94096c80c370241f6b056_prof);

        
        $__internal_0838ed9e8f96371115535bc6240c6ea375e275c55f0b7c03a70b48296e8070c1->leave($__internal_0838ed9e8f96371115535bc6240c6ea375e275c55f0b7c03a70b48296e8070c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
