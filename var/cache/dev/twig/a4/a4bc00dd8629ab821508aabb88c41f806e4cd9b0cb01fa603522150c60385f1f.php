<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a661ebe73fff3d18a348cf3043f93fbb24469c839d6b205865544eb9ecb6155 extends Twig_Template
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
        $__internal_648b4fc9e6d26947823e378b2e5825f08f94e215553d41457b6861cf98a45019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648b4fc9e6d26947823e378b2e5825f08f94e215553d41457b6861cf98a45019->enter($__internal_648b4fc9e6d26947823e378b2e5825f08f94e215553d41457b6861cf98a45019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_daee0da5f27dec223820be83430ebb1367c2491ead2780c8921e2e140a86111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daee0da5f27dec223820be83430ebb1367c2491ead2780c8921e2e140a86111c->enter($__internal_daee0da5f27dec223820be83430ebb1367c2491ead2780c8921e2e140a86111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_648b4fc9e6d26947823e378b2e5825f08f94e215553d41457b6861cf98a45019->leave($__internal_648b4fc9e6d26947823e378b2e5825f08f94e215553d41457b6861cf98a45019_prof);

        
        $__internal_daee0da5f27dec223820be83430ebb1367c2491ead2780c8921e2e140a86111c->leave($__internal_daee0da5f27dec223820be83430ebb1367c2491ead2780c8921e2e140a86111c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
