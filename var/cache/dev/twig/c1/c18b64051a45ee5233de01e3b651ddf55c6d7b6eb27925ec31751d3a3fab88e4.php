<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_72e86c22b9ef3a7dd334477894772cafea95a7be56b3c6bf095443eac127e837 extends Twig_Template
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
        $__internal_9d36f135cf583e142daa9cdddff1c370beb2db2c03baef05dd3d0457bd4ced67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d36f135cf583e142daa9cdddff1c370beb2db2c03baef05dd3d0457bd4ced67->enter($__internal_9d36f135cf583e142daa9cdddff1c370beb2db2c03baef05dd3d0457bd4ced67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fc4187519dc4397a785eec0dd69e324a54b9a677a9d519fd781ea7e7fe1842a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4187519dc4397a785eec0dd69e324a54b9a677a9d519fd781ea7e7fe1842a7->enter($__internal_fc4187519dc4397a785eec0dd69e324a54b9a677a9d519fd781ea7e7fe1842a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9d36f135cf583e142daa9cdddff1c370beb2db2c03baef05dd3d0457bd4ced67->leave($__internal_9d36f135cf583e142daa9cdddff1c370beb2db2c03baef05dd3d0457bd4ced67_prof);

        
        $__internal_fc4187519dc4397a785eec0dd69e324a54b9a677a9d519fd781ea7e7fe1842a7->leave($__internal_fc4187519dc4397a785eec0dd69e324a54b9a677a9d519fd781ea7e7fe1842a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
