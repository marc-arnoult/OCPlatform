<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_02fe47fdd4604ba9d5baeb22e3ca82f2aa72ae15cc686e24e6bda415f5967a09 extends Twig_Template
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
        $__internal_218efcf12c81f6d68fc1187c3aa1d46c0e9909f5f7ce15b3b2fc13f8424c5777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218efcf12c81f6d68fc1187c3aa1d46c0e9909f5f7ce15b3b2fc13f8424c5777->enter($__internal_218efcf12c81f6d68fc1187c3aa1d46c0e9909f5f7ce15b3b2fc13f8424c5777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a76c0f97933e0eb2f82685ca72112512764bb3e652123e2f03c340a7f08cc91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76c0f97933e0eb2f82685ca72112512764bb3e652123e2f03c340a7f08cc91f->enter($__internal_a76c0f97933e0eb2f82685ca72112512764bb3e652123e2f03c340a7f08cc91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_218efcf12c81f6d68fc1187c3aa1d46c0e9909f5f7ce15b3b2fc13f8424c5777->leave($__internal_218efcf12c81f6d68fc1187c3aa1d46c0e9909f5f7ce15b3b2fc13f8424c5777_prof);

        
        $__internal_a76c0f97933e0eb2f82685ca72112512764bb3e652123e2f03c340a7f08cc91f->leave($__internal_a76c0f97933e0eb2f82685ca72112512764bb3e652123e2f03c340a7f08cc91f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
