<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4372f575d57aac305cd82da1036187d1e8d2dee7fb55c077b7a6b12c346cbec3 extends Twig_Template
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
        $__internal_d16b8da9db08f96d84f3d3fb57c2b1270a0b68b50e717563daa20ae1f4ccc4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16b8da9db08f96d84f3d3fb57c2b1270a0b68b50e717563daa20ae1f4ccc4f7->enter($__internal_d16b8da9db08f96d84f3d3fb57c2b1270a0b68b50e717563daa20ae1f4ccc4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4337300e5ff2c6b15ade1bcf94f9bd7dcfb8dcea3a8d9a301d4b5e766645b222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4337300e5ff2c6b15ade1bcf94f9bd7dcfb8dcea3a8d9a301d4b5e766645b222->enter($__internal_4337300e5ff2c6b15ade1bcf94f9bd7dcfb8dcea3a8d9a301d4b5e766645b222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d16b8da9db08f96d84f3d3fb57c2b1270a0b68b50e717563daa20ae1f4ccc4f7->leave($__internal_d16b8da9db08f96d84f3d3fb57c2b1270a0b68b50e717563daa20ae1f4ccc4f7_prof);

        
        $__internal_4337300e5ff2c6b15ade1bcf94f9bd7dcfb8dcea3a8d9a301d4b5e766645b222->leave($__internal_4337300e5ff2c6b15ade1bcf94f9bd7dcfb8dcea3a8d9a301d4b5e766645b222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
