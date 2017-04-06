<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4cd8584726b4cbf296055e79b04044973c6c2263a7a920197d8904fd438803e extends Twig_Template
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
        $__internal_d2380a74197662b2e8284a66b822342db6d158d58f93c9df270f38af6cf581df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2380a74197662b2e8284a66b822342db6d158d58f93c9df270f38af6cf581df->enter($__internal_d2380a74197662b2e8284a66b822342db6d158d58f93c9df270f38af6cf581df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a88a3cddfc5ea104aae91d376578aa00f8eda638333a52156a60374f106e5d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88a3cddfc5ea104aae91d376578aa00f8eda638333a52156a60374f106e5d89->enter($__internal_a88a3cddfc5ea104aae91d376578aa00f8eda638333a52156a60374f106e5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d2380a74197662b2e8284a66b822342db6d158d58f93c9df270f38af6cf581df->leave($__internal_d2380a74197662b2e8284a66b822342db6d158d58f93c9df270f38af6cf581df_prof);

        
        $__internal_a88a3cddfc5ea104aae91d376578aa00f8eda638333a52156a60374f106e5d89->leave($__internal_a88a3cddfc5ea104aae91d376578aa00f8eda638333a52156a60374f106e5d89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
