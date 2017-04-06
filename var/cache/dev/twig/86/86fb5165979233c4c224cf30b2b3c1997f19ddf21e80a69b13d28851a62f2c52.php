<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_108768bd00bc12379c9ba14ea8d6b197bd65f53a08fd61f7c36f9ac7a18866d4 extends Twig_Template
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
        $__internal_1b7d95e470ce404e7a2efc97685c53526cf5befe1ec665d068d780f099d3de9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7d95e470ce404e7a2efc97685c53526cf5befe1ec665d068d780f099d3de9f->enter($__internal_1b7d95e470ce404e7a2efc97685c53526cf5befe1ec665d068d780f099d3de9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c0879af6951d90413d68d4216b0246ab942dc0909aac1e7aac1bce5075669d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0879af6951d90413d68d4216b0246ab942dc0909aac1e7aac1bce5075669d09->enter($__internal_c0879af6951d90413d68d4216b0246ab942dc0909aac1e7aac1bce5075669d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b7d95e470ce404e7a2efc97685c53526cf5befe1ec665d068d780f099d3de9f->leave($__internal_1b7d95e470ce404e7a2efc97685c53526cf5befe1ec665d068d780f099d3de9f_prof);

        
        $__internal_c0879af6951d90413d68d4216b0246ab942dc0909aac1e7aac1bce5075669d09->leave($__internal_c0879af6951d90413d68d4216b0246ab942dc0909aac1e7aac1bce5075669d09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
