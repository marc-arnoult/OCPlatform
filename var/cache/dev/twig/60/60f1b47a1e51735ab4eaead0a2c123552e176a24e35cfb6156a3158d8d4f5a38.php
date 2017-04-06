<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dfd18cca4f478316a15a30b274128c5a94e2eabab242eb22444292b111f156c9 extends Twig_Template
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
        $__internal_27b07f3ab4cb4d1856d4b811092a70d9d7586af98d89b5dcc3c912e4875504c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b07f3ab4cb4d1856d4b811092a70d9d7586af98d89b5dcc3c912e4875504c5->enter($__internal_27b07f3ab4cb4d1856d4b811092a70d9d7586af98d89b5dcc3c912e4875504c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c8bda2b889c60a2c9973c1f724ce149c3ff751335ffe67f2186243c53c2bc16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bda2b889c60a2c9973c1f724ce149c3ff751335ffe67f2186243c53c2bc16e->enter($__internal_c8bda2b889c60a2c9973c1f724ce149c3ff751335ffe67f2186243c53c2bc16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_27b07f3ab4cb4d1856d4b811092a70d9d7586af98d89b5dcc3c912e4875504c5->leave($__internal_27b07f3ab4cb4d1856d4b811092a70d9d7586af98d89b5dcc3c912e4875504c5_prof);

        
        $__internal_c8bda2b889c60a2c9973c1f724ce149c3ff751335ffe67f2186243c53c2bc16e->leave($__internal_c8bda2b889c60a2c9973c1f724ce149c3ff751335ffe67f2186243c53c2bc16e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
