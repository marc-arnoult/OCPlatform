<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_48fd95720911e6965718a61ede18421169d22f4fd684e4f2367a484ce961a7e9 extends Twig_Template
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
        $__internal_a9153d34f99da58857eadb5f95c70355a58e301456ad3ad18f25a6eb9df8bf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9153d34f99da58857eadb5f95c70355a58e301456ad3ad18f25a6eb9df8bf3e->enter($__internal_a9153d34f99da58857eadb5f95c70355a58e301456ad3ad18f25a6eb9df8bf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b3ff0b0dd6531e8f77b4f256a8bd726c550f2a7cb79c13d599324556fd554031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ff0b0dd6531e8f77b4f256a8bd726c550f2a7cb79c13d599324556fd554031->enter($__internal_b3ff0b0dd6531e8f77b4f256a8bd726c550f2a7cb79c13d599324556fd554031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a9153d34f99da58857eadb5f95c70355a58e301456ad3ad18f25a6eb9df8bf3e->leave($__internal_a9153d34f99da58857eadb5f95c70355a58e301456ad3ad18f25a6eb9df8bf3e_prof);

        
        $__internal_b3ff0b0dd6531e8f77b4f256a8bd726c550f2a7cb79c13d599324556fd554031->leave($__internal_b3ff0b0dd6531e8f77b4f256a8bd726c550f2a7cb79c13d599324556fd554031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
