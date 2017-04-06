<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4564bbb0347b172a7ba17d471009da9217922626401aee43e1cf2c6cedb9bb71 extends Twig_Template
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
        $__internal_9e7ed63017737700954324c995e56916bec40e09a158d0cbd5803749537b55a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7ed63017737700954324c995e56916bec40e09a158d0cbd5803749537b55a4->enter($__internal_9e7ed63017737700954324c995e56916bec40e09a158d0cbd5803749537b55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_03ddd33193c214abf7509f4ee0eb21f59d111b40ae2a7a92b8bdf55611704778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ddd33193c214abf7509f4ee0eb21f59d111b40ae2a7a92b8bdf55611704778->enter($__internal_03ddd33193c214abf7509f4ee0eb21f59d111b40ae2a7a92b8bdf55611704778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9e7ed63017737700954324c995e56916bec40e09a158d0cbd5803749537b55a4->leave($__internal_9e7ed63017737700954324c995e56916bec40e09a158d0cbd5803749537b55a4_prof);

        
        $__internal_03ddd33193c214abf7509f4ee0eb21f59d111b40ae2a7a92b8bdf55611704778->leave($__internal_03ddd33193c214abf7509f4ee0eb21f59d111b40ae2a7a92b8bdf55611704778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
