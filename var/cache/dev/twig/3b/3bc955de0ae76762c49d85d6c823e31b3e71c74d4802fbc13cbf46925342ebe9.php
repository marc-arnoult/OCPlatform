<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_fcf1994925ed13ae50ceaaa9fa1630895b6d8f504524ff1d777acdd3b5e606fa extends Twig_Template
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
        $__internal_18455a7159d6970d0ae45404620657508944d1a952cf81e0aae95e2428360774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18455a7159d6970d0ae45404620657508944d1a952cf81e0aae95e2428360774->enter($__internal_18455a7159d6970d0ae45404620657508944d1a952cf81e0aae95e2428360774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4b46f521556085e7fe43c9782522c67da9b8c06c7b7618b12bb569af60246a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b46f521556085e7fe43c9782522c67da9b8c06c7b7618b12bb569af60246a05->enter($__internal_4b46f521556085e7fe43c9782522c67da9b8c06c7b7618b12bb569af60246a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_18455a7159d6970d0ae45404620657508944d1a952cf81e0aae95e2428360774->leave($__internal_18455a7159d6970d0ae45404620657508944d1a952cf81e0aae95e2428360774_prof);

        
        $__internal_4b46f521556085e7fe43c9782522c67da9b8c06c7b7618b12bb569af60246a05->leave($__internal_4b46f521556085e7fe43c9782522c67da9b8c06c7b7618b12bb569af60246a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
