<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5676358a40fab78136bbd2be0aa1cebce8bf74e34dcc906a98c692b2dab37f9b extends Twig_Template
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
        $__internal_0ab2ec679106d4686cd40b46ef1ea76cdaab6e171cbeee5ea1bd0948951ac72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab2ec679106d4686cd40b46ef1ea76cdaab6e171cbeee5ea1bd0948951ac72f->enter($__internal_0ab2ec679106d4686cd40b46ef1ea76cdaab6e171cbeee5ea1bd0948951ac72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bee4b7b605e664875b663630b23baa7f4cc87fea830176c214df2bfb264408f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee4b7b605e664875b663630b23baa7f4cc87fea830176c214df2bfb264408f7->enter($__internal_bee4b7b605e664875b663630b23baa7f4cc87fea830176c214df2bfb264408f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0ab2ec679106d4686cd40b46ef1ea76cdaab6e171cbeee5ea1bd0948951ac72f->leave($__internal_0ab2ec679106d4686cd40b46ef1ea76cdaab6e171cbeee5ea1bd0948951ac72f_prof);

        
        $__internal_bee4b7b605e664875b663630b23baa7f4cc87fea830176c214df2bfb264408f7->leave($__internal_bee4b7b605e664875b663630b23baa7f4cc87fea830176c214df2bfb264408f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
