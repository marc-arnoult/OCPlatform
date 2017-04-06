<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2b862ac6c2dbcc245bd37b96112245747335c672e73677a420556821d1a3cb83 extends Twig_Template
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
        $__internal_abac8ba9e0e125df4933046390f7038ac00f2a8d8598043e6f1323e770f5d561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abac8ba9e0e125df4933046390f7038ac00f2a8d8598043e6f1323e770f5d561->enter($__internal_abac8ba9e0e125df4933046390f7038ac00f2a8d8598043e6f1323e770f5d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_bb43cfcec92669b05beb70ba92ab25febc334544e93c6a7dd74518488e7243e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb43cfcec92669b05beb70ba92ab25febc334544e93c6a7dd74518488e7243e1->enter($__internal_bb43cfcec92669b05beb70ba92ab25febc334544e93c6a7dd74518488e7243e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_abac8ba9e0e125df4933046390f7038ac00f2a8d8598043e6f1323e770f5d561->leave($__internal_abac8ba9e0e125df4933046390f7038ac00f2a8d8598043e6f1323e770f5d561_prof);

        
        $__internal_bb43cfcec92669b05beb70ba92ab25febc334544e93c6a7dd74518488e7243e1->leave($__internal_bb43cfcec92669b05beb70ba92ab25febc334544e93c6a7dd74518488e7243e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
