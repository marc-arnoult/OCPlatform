<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4ad2d6449a54b396adc7eb7f6a55caf3172798308c5253e76ab521f69e740f9 extends Twig_Template
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
        $__internal_c77a31c42410d243fecbb1391a729acc7d124c94c8f5c70d124fcbd07b1ab9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77a31c42410d243fecbb1391a729acc7d124c94c8f5c70d124fcbd07b1ab9f8->enter($__internal_c77a31c42410d243fecbb1391a729acc7d124c94c8f5c70d124fcbd07b1ab9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5227d60e273fe5e1b9426e23d83630669bb0bb1cd076d1f4723f4f2c1340e329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5227d60e273fe5e1b9426e23d83630669bb0bb1cd076d1f4723f4f2c1340e329->enter($__internal_5227d60e273fe5e1b9426e23d83630669bb0bb1cd076d1f4723f4f2c1340e329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c77a31c42410d243fecbb1391a729acc7d124c94c8f5c70d124fcbd07b1ab9f8->leave($__internal_c77a31c42410d243fecbb1391a729acc7d124c94c8f5c70d124fcbd07b1ab9f8_prof);

        
        $__internal_5227d60e273fe5e1b9426e23d83630669bb0bb1cd076d1f4723f4f2c1340e329->leave($__internal_5227d60e273fe5e1b9426e23d83630669bb0bb1cd076d1f4723f4f2c1340e329_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
