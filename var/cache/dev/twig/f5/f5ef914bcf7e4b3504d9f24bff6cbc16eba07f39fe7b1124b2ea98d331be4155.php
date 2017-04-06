<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c9d1b5eb893d45f011b462503c840f22713ac80a6ee06cdffc93c51227ba15cf extends Twig_Template
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
        $__internal_06e305007695918fab1a95c364f5c6b5e0795b0b15ccc41d41fec66532cf1252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e305007695918fab1a95c364f5c6b5e0795b0b15ccc41d41fec66532cf1252->enter($__internal_06e305007695918fab1a95c364f5c6b5e0795b0b15ccc41d41fec66532cf1252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7c192057fd865ba4817f64012b1726241cfe1767707b3cd433bb4b544abc9ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c192057fd865ba4817f64012b1726241cfe1767707b3cd433bb4b544abc9ccd->enter($__internal_7c192057fd865ba4817f64012b1726241cfe1767707b3cd433bb4b544abc9ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_06e305007695918fab1a95c364f5c6b5e0795b0b15ccc41d41fec66532cf1252->leave($__internal_06e305007695918fab1a95c364f5c6b5e0795b0b15ccc41d41fec66532cf1252_prof);

        
        $__internal_7c192057fd865ba4817f64012b1726241cfe1767707b3cd433bb4b544abc9ccd->leave($__internal_7c192057fd865ba4817f64012b1726241cfe1767707b3cd433bb4b544abc9ccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
