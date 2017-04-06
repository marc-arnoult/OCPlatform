<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5a5e50c2c435d3d0b639e08e65f7d45416a064deb9badbcd8d488815526acb26 extends Twig_Template
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
        $__internal_c309ac5c728e6c3e801a15457dba41e510ba18dc9e93b41719ada424ac9e5a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c309ac5c728e6c3e801a15457dba41e510ba18dc9e93b41719ada424ac9e5a76->enter($__internal_c309ac5c728e6c3e801a15457dba41e510ba18dc9e93b41719ada424ac9e5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f99cae976b660df4110c7168ac0a2bfba4fd041c32902a08dfb9de01a59a7243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99cae976b660df4110c7168ac0a2bfba4fd041c32902a08dfb9de01a59a7243->enter($__internal_f99cae976b660df4110c7168ac0a2bfba4fd041c32902a08dfb9de01a59a7243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c309ac5c728e6c3e801a15457dba41e510ba18dc9e93b41719ada424ac9e5a76->leave($__internal_c309ac5c728e6c3e801a15457dba41e510ba18dc9e93b41719ada424ac9e5a76_prof);

        
        $__internal_f99cae976b660df4110c7168ac0a2bfba4fd041c32902a08dfb9de01a59a7243->leave($__internal_f99cae976b660df4110c7168ac0a2bfba4fd041c32902a08dfb9de01a59a7243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
