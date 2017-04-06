<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0525e73710e966f774f6e30b0e64a9190e0ecc342637bb72ca2d8b51e7996982 extends Twig_Template
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
        $__internal_034dd10558f85ef2e0af1a946ef93ac7c5ef5d944eef4c8e0c0e1a5430202d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034dd10558f85ef2e0af1a946ef93ac7c5ef5d944eef4c8e0c0e1a5430202d5e->enter($__internal_034dd10558f85ef2e0af1a946ef93ac7c5ef5d944eef4c8e0c0e1a5430202d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_15e90754757b8693197af211f818d459dec4f7fa70b380ff20c59c64bc69103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e90754757b8693197af211f818d459dec4f7fa70b380ff20c59c64bc69103c->enter($__internal_15e90754757b8693197af211f818d459dec4f7fa70b380ff20c59c64bc69103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_034dd10558f85ef2e0af1a946ef93ac7c5ef5d944eef4c8e0c0e1a5430202d5e->leave($__internal_034dd10558f85ef2e0af1a946ef93ac7c5ef5d944eef4c8e0c0e1a5430202d5e_prof);

        
        $__internal_15e90754757b8693197af211f818d459dec4f7fa70b380ff20c59c64bc69103c->leave($__internal_15e90754757b8693197af211f818d459dec4f7fa70b380ff20c59c64bc69103c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
