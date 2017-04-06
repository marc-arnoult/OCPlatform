<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1cd7c5f205026ed6c821ab0c7ac3f72e7401bb0b041eb8fbca2252352ca93772 extends Twig_Template
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
        $__internal_44d29f9c754ada5ee29890d0799613caf075cf0b4881247ac74be443f2945791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d29f9c754ada5ee29890d0799613caf075cf0b4881247ac74be443f2945791->enter($__internal_44d29f9c754ada5ee29890d0799613caf075cf0b4881247ac74be443f2945791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_91d6ef22bacb9aa457734285961377aaadfdbfc571470688874517240748c22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d6ef22bacb9aa457734285961377aaadfdbfc571470688874517240748c22f->enter($__internal_91d6ef22bacb9aa457734285961377aaadfdbfc571470688874517240748c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_44d29f9c754ada5ee29890d0799613caf075cf0b4881247ac74be443f2945791->leave($__internal_44d29f9c754ada5ee29890d0799613caf075cf0b4881247ac74be443f2945791_prof);

        
        $__internal_91d6ef22bacb9aa457734285961377aaadfdbfc571470688874517240748c22f->leave($__internal_91d6ef22bacb9aa457734285961377aaadfdbfc571470688874517240748c22f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
