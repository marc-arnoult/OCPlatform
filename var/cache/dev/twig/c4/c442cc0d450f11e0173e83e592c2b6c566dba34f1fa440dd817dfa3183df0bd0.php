<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd94edd8a045875b07481df56b2c40bde00dae3addef2b02f43bce2c92b6a189 extends Twig_Template
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
        $__internal_b05d825818c7d25f370a4cd33ad7c76a7e8a42a3e110ef36ab44d0d02ecdda92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05d825818c7d25f370a4cd33ad7c76a7e8a42a3e110ef36ab44d0d02ecdda92->enter($__internal_b05d825818c7d25f370a4cd33ad7c76a7e8a42a3e110ef36ab44d0d02ecdda92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_49fc8bd603c78b8860d9b5cef07486c94dd5309fa6c46d42309ef2fd7c178286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fc8bd603c78b8860d9b5cef07486c94dd5309fa6c46d42309ef2fd7c178286->enter($__internal_49fc8bd603c78b8860d9b5cef07486c94dd5309fa6c46d42309ef2fd7c178286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b05d825818c7d25f370a4cd33ad7c76a7e8a42a3e110ef36ab44d0d02ecdda92->leave($__internal_b05d825818c7d25f370a4cd33ad7c76a7e8a42a3e110ef36ab44d0d02ecdda92_prof);

        
        $__internal_49fc8bd603c78b8860d9b5cef07486c94dd5309fa6c46d42309ef2fd7c178286->leave($__internal_49fc8bd603c78b8860d9b5cef07486c94dd5309fa6c46d42309ef2fd7c178286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
