<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d98e059dec94411996bf41f2474b2307753580b1e1cce53146d32434edb61019 extends Twig_Template
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
        $__internal_9b2b1fd08a5895e5b83c8bb0c0b93c08d7c968ad44d60d5b6c228daf676dcc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2b1fd08a5895e5b83c8bb0c0b93c08d7c968ad44d60d5b6c228daf676dcc22->enter($__internal_9b2b1fd08a5895e5b83c8bb0c0b93c08d7c968ad44d60d5b6c228daf676dcc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5e8516aab8af6fe665404e866b97d5e71201b89292a2c238732ed57378769a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8516aab8af6fe665404e866b97d5e71201b89292a2c238732ed57378769a53->enter($__internal_5e8516aab8af6fe665404e866b97d5e71201b89292a2c238732ed57378769a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9b2b1fd08a5895e5b83c8bb0c0b93c08d7c968ad44d60d5b6c228daf676dcc22->leave($__internal_9b2b1fd08a5895e5b83c8bb0c0b93c08d7c968ad44d60d5b6c228daf676dcc22_prof);

        
        $__internal_5e8516aab8af6fe665404e866b97d5e71201b89292a2c238732ed57378769a53->leave($__internal_5e8516aab8af6fe665404e866b97d5e71201b89292a2c238732ed57378769a53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
