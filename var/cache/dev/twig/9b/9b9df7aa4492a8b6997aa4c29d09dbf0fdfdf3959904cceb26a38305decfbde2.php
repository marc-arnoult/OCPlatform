<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_02e82817eba516ee8b0104632d3428a786a93df59bab57737fbd191ef93dbbb8 extends Twig_Template
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
        $__internal_d12697111bf0480539cdfd64cc3c2b362cf9e4bf6d3769159aa7aecc1655d69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12697111bf0480539cdfd64cc3c2b362cf9e4bf6d3769159aa7aecc1655d69a->enter($__internal_d12697111bf0480539cdfd64cc3c2b362cf9e4bf6d3769159aa7aecc1655d69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_34c3abf86627836048a0d604ed19ac1024d5f92b6bf7bec713e73966484c76c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c3abf86627836048a0d604ed19ac1024d5f92b6bf7bec713e73966484c76c5->enter($__internal_34c3abf86627836048a0d604ed19ac1024d5f92b6bf7bec713e73966484c76c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d12697111bf0480539cdfd64cc3c2b362cf9e4bf6d3769159aa7aecc1655d69a->leave($__internal_d12697111bf0480539cdfd64cc3c2b362cf9e4bf6d3769159aa7aecc1655d69a_prof);

        
        $__internal_34c3abf86627836048a0d604ed19ac1024d5f92b6bf7bec713e73966484c76c5->leave($__internal_34c3abf86627836048a0d604ed19ac1024d5f92b6bf7bec713e73966484c76c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
