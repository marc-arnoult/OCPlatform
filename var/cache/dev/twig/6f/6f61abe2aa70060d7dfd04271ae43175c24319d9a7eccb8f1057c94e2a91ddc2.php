<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_27a8cb69c9534f670bbfcce0618b07763f5006116351320413eeef4ff1a0a0b4 extends Twig_Template
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
        $__internal_b7907928b9ada80543bbec8e210ef3d3014731348b54123c27937b97879bc908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7907928b9ada80543bbec8e210ef3d3014731348b54123c27937b97879bc908->enter($__internal_b7907928b9ada80543bbec8e210ef3d3014731348b54123c27937b97879bc908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2f2497c193194dbd6e0e83ec9f0dd45b00591286dd6a7d9c020d99eecfa68aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2497c193194dbd6e0e83ec9f0dd45b00591286dd6a7d9c020d99eecfa68aa8->enter($__internal_2f2497c193194dbd6e0e83ec9f0dd45b00591286dd6a7d9c020d99eecfa68aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7907928b9ada80543bbec8e210ef3d3014731348b54123c27937b97879bc908->leave($__internal_b7907928b9ada80543bbec8e210ef3d3014731348b54123c27937b97879bc908_prof);

        
        $__internal_2f2497c193194dbd6e0e83ec9f0dd45b00591286dd6a7d9c020d99eecfa68aa8->leave($__internal_2f2497c193194dbd6e0e83ec9f0dd45b00591286dd6a7d9c020d99eecfa68aa8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
