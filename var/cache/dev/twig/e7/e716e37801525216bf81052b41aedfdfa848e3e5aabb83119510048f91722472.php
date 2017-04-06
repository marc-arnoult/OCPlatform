<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9d79f3e9208511f9246141a0c42bd305a39ab6d6b3d69fdaf779a129d19daad7 extends Twig_Template
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
        $__internal_68b69b48681fa3cbecfd2b950f60b20ff4e995bf421511739874b9844122be2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b69b48681fa3cbecfd2b950f60b20ff4e995bf421511739874b9844122be2d->enter($__internal_68b69b48681fa3cbecfd2b950f60b20ff4e995bf421511739874b9844122be2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_faffc9bb0ef0f2ffebbcd1fb334821631ca8b08bd2dbcb357aab057bd5f7b0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faffc9bb0ef0f2ffebbcd1fb334821631ca8b08bd2dbcb357aab057bd5f7b0ed->enter($__internal_faffc9bb0ef0f2ffebbcd1fb334821631ca8b08bd2dbcb357aab057bd5f7b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_68b69b48681fa3cbecfd2b950f60b20ff4e995bf421511739874b9844122be2d->leave($__internal_68b69b48681fa3cbecfd2b950f60b20ff4e995bf421511739874b9844122be2d_prof);

        
        $__internal_faffc9bb0ef0f2ffebbcd1fb334821631ca8b08bd2dbcb357aab057bd5f7b0ed->leave($__internal_faffc9bb0ef0f2ffebbcd1fb334821631ca8b08bd2dbcb357aab057bd5f7b0ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
