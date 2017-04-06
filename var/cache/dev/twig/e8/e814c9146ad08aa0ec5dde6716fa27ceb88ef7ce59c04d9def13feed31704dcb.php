<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_acfe819b6f4a7232b54f39cdbb3388fd6f0d690a404297663cb5171468e5c743 extends Twig_Template
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
        $__internal_e39d91d13b66d5f735b2c59a1e75bd14810597df5e0fe3278c5b4f97a2fbe449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39d91d13b66d5f735b2c59a1e75bd14810597df5e0fe3278c5b4f97a2fbe449->enter($__internal_e39d91d13b66d5f735b2c59a1e75bd14810597df5e0fe3278c5b4f97a2fbe449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_467eb9191b5a1caa9ad5f268392f502f5c2d15b03fff0a19896322f031b77455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467eb9191b5a1caa9ad5f268392f502f5c2d15b03fff0a19896322f031b77455->enter($__internal_467eb9191b5a1caa9ad5f268392f502f5c2d15b03fff0a19896322f031b77455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e39d91d13b66d5f735b2c59a1e75bd14810597df5e0fe3278c5b4f97a2fbe449->leave($__internal_e39d91d13b66d5f735b2c59a1e75bd14810597df5e0fe3278c5b4f97a2fbe449_prof);

        
        $__internal_467eb9191b5a1caa9ad5f268392f502f5c2d15b03fff0a19896322f031b77455->leave($__internal_467eb9191b5a1caa9ad5f268392f502f5c2d15b03fff0a19896322f031b77455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
