<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_cfc281957affe760700d03ddb0be7e8d39c7872eaac2adebd74b98c052471095 extends Twig_Template
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
        $__internal_5c2582a7e6017a1611099b933a578d4d214ca2886aef49cb500b0b844d8002ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2582a7e6017a1611099b933a578d4d214ca2886aef49cb500b0b844d8002ad->enter($__internal_5c2582a7e6017a1611099b933a578d4d214ca2886aef49cb500b0b844d8002ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f163f80dd8ba4c1c513361fc7c85c81ded2740117006ef871f869389980e4713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f163f80dd8ba4c1c513361fc7c85c81ded2740117006ef871f869389980e4713->enter($__internal_f163f80dd8ba4c1c513361fc7c85c81ded2740117006ef871f869389980e4713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5c2582a7e6017a1611099b933a578d4d214ca2886aef49cb500b0b844d8002ad->leave($__internal_5c2582a7e6017a1611099b933a578d4d214ca2886aef49cb500b0b844d8002ad_prof);

        
        $__internal_f163f80dd8ba4c1c513361fc7c85c81ded2740117006ef871f869389980e4713->leave($__internal_f163f80dd8ba4c1c513361fc7c85c81ded2740117006ef871f869389980e4713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
