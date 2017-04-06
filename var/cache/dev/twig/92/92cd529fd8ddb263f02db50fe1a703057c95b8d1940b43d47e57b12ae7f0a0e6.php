<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9fe76bd1c2f3bda8d87e9c28cbe4da71db0d8b271dd71a98eb5ec2a2aa1717fa extends Twig_Template
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
        $__internal_3428b17be6b86c32f6cb32671d7eba477f2939c163749b2b3e93f5171dc71372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3428b17be6b86c32f6cb32671d7eba477f2939c163749b2b3e93f5171dc71372->enter($__internal_3428b17be6b86c32f6cb32671d7eba477f2939c163749b2b3e93f5171dc71372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a85b56389c2fa950cde9a328028c059bcb6ba6823e4b8ef6f3ca82d2dc815577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85b56389c2fa950cde9a328028c059bcb6ba6823e4b8ef6f3ca82d2dc815577->enter($__internal_a85b56389c2fa950cde9a328028c059bcb6ba6823e4b8ef6f3ca82d2dc815577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3428b17be6b86c32f6cb32671d7eba477f2939c163749b2b3e93f5171dc71372->leave($__internal_3428b17be6b86c32f6cb32671d7eba477f2939c163749b2b3e93f5171dc71372_prof);

        
        $__internal_a85b56389c2fa950cde9a328028c059bcb6ba6823e4b8ef6f3ca82d2dc815577->leave($__internal_a85b56389c2fa950cde9a328028c059bcb6ba6823e4b8ef6f3ca82d2dc815577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
