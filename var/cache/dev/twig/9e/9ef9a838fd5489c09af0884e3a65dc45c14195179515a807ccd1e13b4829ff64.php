<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7327538189c56aaeb1355365ef104871292efa945038fe0958a5a2947819ebec extends Twig_Template
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
        $__internal_c0f99808bde8d382716eb089e239c9333a5bfcd2435dbf0642038bc95db4762f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f99808bde8d382716eb089e239c9333a5bfcd2435dbf0642038bc95db4762f->enter($__internal_c0f99808bde8d382716eb089e239c9333a5bfcd2435dbf0642038bc95db4762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_143b547129cec0325b954459f4447c1f0889abe99b9fda319660d6373fa6e336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143b547129cec0325b954459f4447c1f0889abe99b9fda319660d6373fa6e336->enter($__internal_143b547129cec0325b954459f4447c1f0889abe99b9fda319660d6373fa6e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c0f99808bde8d382716eb089e239c9333a5bfcd2435dbf0642038bc95db4762f->leave($__internal_c0f99808bde8d382716eb089e239c9333a5bfcd2435dbf0642038bc95db4762f_prof);

        
        $__internal_143b547129cec0325b954459f4447c1f0889abe99b9fda319660d6373fa6e336->leave($__internal_143b547129cec0325b954459f4447c1f0889abe99b9fda319660d6373fa6e336_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
