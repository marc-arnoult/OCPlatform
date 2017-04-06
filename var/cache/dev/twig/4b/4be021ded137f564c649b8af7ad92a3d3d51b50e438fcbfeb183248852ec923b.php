<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ab21dcc6286500afd891e04a6108da091a610407550dcd122451ff8e3d76f613 extends Twig_Template
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
        $__internal_623ac55fd4615177d214755c0acbee35928d5d28ad6c15cb751fd66d41caded2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623ac55fd4615177d214755c0acbee35928d5d28ad6c15cb751fd66d41caded2->enter($__internal_623ac55fd4615177d214755c0acbee35928d5d28ad6c15cb751fd66d41caded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1d78b52b0a5e6d16a4d2f7b32bb21ccd8fc5fbb21bd6132e0fad6b6ee1a2dda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d78b52b0a5e6d16a4d2f7b32bb21ccd8fc5fbb21bd6132e0fad6b6ee1a2dda3->enter($__internal_1d78b52b0a5e6d16a4d2f7b32bb21ccd8fc5fbb21bd6132e0fad6b6ee1a2dda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_623ac55fd4615177d214755c0acbee35928d5d28ad6c15cb751fd66d41caded2->leave($__internal_623ac55fd4615177d214755c0acbee35928d5d28ad6c15cb751fd66d41caded2_prof);

        
        $__internal_1d78b52b0a5e6d16a4d2f7b32bb21ccd8fc5fbb21bd6132e0fad6b6ee1a2dda3->leave($__internal_1d78b52b0a5e6d16a4d2f7b32bb21ccd8fc5fbb21bd6132e0fad6b6ee1a2dda3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
