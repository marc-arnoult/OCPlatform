<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_81af507a7ea12d70a823f5e96361d0e343d20806cf1d8437f43b7f3f4d4568c8 extends Twig_Template
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
        $__internal_396e1d721dc772cdc9261e899208386327f0fda7bf7f36cfb8b0a4a66963b7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396e1d721dc772cdc9261e899208386327f0fda7bf7f36cfb8b0a4a66963b7ad->enter($__internal_396e1d721dc772cdc9261e899208386327f0fda7bf7f36cfb8b0a4a66963b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ce2e9381f3960aaf302a4ad966e3dcf1390e604cf075228f5f862361cebcb9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2e9381f3960aaf302a4ad966e3dcf1390e604cf075228f5f862361cebcb9eb->enter($__internal_ce2e9381f3960aaf302a4ad966e3dcf1390e604cf075228f5f862361cebcb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_396e1d721dc772cdc9261e899208386327f0fda7bf7f36cfb8b0a4a66963b7ad->leave($__internal_396e1d721dc772cdc9261e899208386327f0fda7bf7f36cfb8b0a4a66963b7ad_prof);

        
        $__internal_ce2e9381f3960aaf302a4ad966e3dcf1390e604cf075228f5f862361cebcb9eb->leave($__internal_ce2e9381f3960aaf302a4ad966e3dcf1390e604cf075228f5f862361cebcb9eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
