<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5056df37cd35ddfe5da27c18801041ddc89e17b8ad0332e01f64f6ebf60396d3 extends Twig_Template
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
        $__internal_2b109f376e634fe84b2515384a6b0847ace3bfb817fb0fa46985e6757f0fe885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b109f376e634fe84b2515384a6b0847ace3bfb817fb0fa46985e6757f0fe885->enter($__internal_2b109f376e634fe84b2515384a6b0847ace3bfb817fb0fa46985e6757f0fe885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_26b265953b049f1ae0778d18a551716b2b2f813737655dedf85374be5b28d295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b265953b049f1ae0778d18a551716b2b2f813737655dedf85374be5b28d295->enter($__internal_26b265953b049f1ae0778d18a551716b2b2f813737655dedf85374be5b28d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2b109f376e634fe84b2515384a6b0847ace3bfb817fb0fa46985e6757f0fe885->leave($__internal_2b109f376e634fe84b2515384a6b0847ace3bfb817fb0fa46985e6757f0fe885_prof);

        
        $__internal_26b265953b049f1ae0778d18a551716b2b2f813737655dedf85374be5b28d295->leave($__internal_26b265953b049f1ae0778d18a551716b2b2f813737655dedf85374be5b28d295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
