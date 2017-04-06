<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_db688c6560cb5c6970dec47f82619ccf7023653b63fbf5b810231de242d038d6 extends Twig_Template
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
        $__internal_f6d30a31e3050a152031e51dd57140df1cc2c3d2f3d615c8689ff1749372ff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d30a31e3050a152031e51dd57140df1cc2c3d2f3d615c8689ff1749372ff12->enter($__internal_f6d30a31e3050a152031e51dd57140df1cc2c3d2f3d615c8689ff1749372ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b1352c7f36f2dd5244edef5eb5336d4d29ec7b51f5451c398cf8d4aa4b79d497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1352c7f36f2dd5244edef5eb5336d4d29ec7b51f5451c398cf8d4aa4b79d497->enter($__internal_b1352c7f36f2dd5244edef5eb5336d4d29ec7b51f5451c398cf8d4aa4b79d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f6d30a31e3050a152031e51dd57140df1cc2c3d2f3d615c8689ff1749372ff12->leave($__internal_f6d30a31e3050a152031e51dd57140df1cc2c3d2f3d615c8689ff1749372ff12_prof);

        
        $__internal_b1352c7f36f2dd5244edef5eb5336d4d29ec7b51f5451c398cf8d4aa4b79d497->leave($__internal_b1352c7f36f2dd5244edef5eb5336d4d29ec7b51f5451c398cf8d4aa4b79d497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
