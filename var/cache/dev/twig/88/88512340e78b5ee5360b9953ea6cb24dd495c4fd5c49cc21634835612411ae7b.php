<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9cdd3f8a4cea117afd5817428ba1c79d7bfddb675cfef2859e23d941b66a5f08 extends Twig_Template
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
        $__internal_e9fdf2c3583d5c499b751aa858eceffdd7324bc52bf1371eda8b78deee1cd0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fdf2c3583d5c499b751aa858eceffdd7324bc52bf1371eda8b78deee1cd0fb->enter($__internal_e9fdf2c3583d5c499b751aa858eceffdd7324bc52bf1371eda8b78deee1cd0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9e3a6467db3df81b84439cc7e999e05c47d2831674a224323a40f3a3248ac1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3a6467db3df81b84439cc7e999e05c47d2831674a224323a40f3a3248ac1a5->enter($__internal_9e3a6467db3df81b84439cc7e999e05c47d2831674a224323a40f3a3248ac1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9fdf2c3583d5c499b751aa858eceffdd7324bc52bf1371eda8b78deee1cd0fb->leave($__internal_e9fdf2c3583d5c499b751aa858eceffdd7324bc52bf1371eda8b78deee1cd0fb_prof);

        
        $__internal_9e3a6467db3df81b84439cc7e999e05c47d2831674a224323a40f3a3248ac1a5->leave($__internal_9e3a6467db3df81b84439cc7e999e05c47d2831674a224323a40f3a3248ac1a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
