<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1525a61a3301f5a07d62f2684d4314e26bd55aa823260813fee4101103f4ce7 extends Twig_Template
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
        $__internal_a2a169d1fea11a3c728a5d7ac1a452d676d59a02b6da2f3e7f9fe6b5f249e64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a169d1fea11a3c728a5d7ac1a452d676d59a02b6da2f3e7f9fe6b5f249e64b->enter($__internal_a2a169d1fea11a3c728a5d7ac1a452d676d59a02b6da2f3e7f9fe6b5f249e64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_30b654cccc67b1b71102a905f831770df77ab88bbfa733dae9db33f28a574da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b654cccc67b1b71102a905f831770df77ab88bbfa733dae9db33f28a574da1->enter($__internal_30b654cccc67b1b71102a905f831770df77ab88bbfa733dae9db33f28a574da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a2a169d1fea11a3c728a5d7ac1a452d676d59a02b6da2f3e7f9fe6b5f249e64b->leave($__internal_a2a169d1fea11a3c728a5d7ac1a452d676d59a02b6da2f3e7f9fe6b5f249e64b_prof);

        
        $__internal_30b654cccc67b1b71102a905f831770df77ab88bbfa733dae9db33f28a574da1->leave($__internal_30b654cccc67b1b71102a905f831770df77ab88bbfa733dae9db33f28a574da1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
