<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_26d84ac4a45cb43d70c92b1f75afeb473f852183b354ad1e2ed39b3a5764453a extends Twig_Template
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
        $__internal_92cda888e68ddd943f0a1f016a6a9112f91b0f0e39b4285af95f5514ffbaf67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cda888e68ddd943f0a1f016a6a9112f91b0f0e39b4285af95f5514ffbaf67b->enter($__internal_92cda888e68ddd943f0a1f016a6a9112f91b0f0e39b4285af95f5514ffbaf67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_333acbadba47723a353e207c77c4d15aa0e61ea594cf5c6dd579bef475a12a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333acbadba47723a353e207c77c4d15aa0e61ea594cf5c6dd579bef475a12a7c->enter($__internal_333acbadba47723a353e207c77c4d15aa0e61ea594cf5c6dd579bef475a12a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_92cda888e68ddd943f0a1f016a6a9112f91b0f0e39b4285af95f5514ffbaf67b->leave($__internal_92cda888e68ddd943f0a1f016a6a9112f91b0f0e39b4285af95f5514ffbaf67b_prof);

        
        $__internal_333acbadba47723a353e207c77c4d15aa0e61ea594cf5c6dd579bef475a12a7c->leave($__internal_333acbadba47723a353e207c77c4d15aa0e61ea594cf5c6dd579bef475a12a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
