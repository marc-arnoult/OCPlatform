<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2919079727d4c0081f9ea66c16c5f15aaccc8a6ee6975ab8487472aa858d6c7d extends Twig_Template
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
        $__internal_9e054cc937f71b1cde1f4a427c37364cfeb174ae83e87167ae99b92c02776a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e054cc937f71b1cde1f4a427c37364cfeb174ae83e87167ae99b92c02776a6c->enter($__internal_9e054cc937f71b1cde1f4a427c37364cfeb174ae83e87167ae99b92c02776a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2bd5db760b3116440b10998a9032cdb5e5981273d7ada7c66d2c7cc3f6e29081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd5db760b3116440b10998a9032cdb5e5981273d7ada7c66d2c7cc3f6e29081->enter($__internal_2bd5db760b3116440b10998a9032cdb5e5981273d7ada7c66d2c7cc3f6e29081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9e054cc937f71b1cde1f4a427c37364cfeb174ae83e87167ae99b92c02776a6c->leave($__internal_9e054cc937f71b1cde1f4a427c37364cfeb174ae83e87167ae99b92c02776a6c_prof);

        
        $__internal_2bd5db760b3116440b10998a9032cdb5e5981273d7ada7c66d2c7cc3f6e29081->leave($__internal_2bd5db760b3116440b10998a9032cdb5e5981273d7ada7c66d2c7cc3f6e29081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
