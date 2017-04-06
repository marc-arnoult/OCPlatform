<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_008cdc2257fcd3fbc5ae5ed4c8dcfb742e184ed2ea67c98ced25babbd76d79e5 extends Twig_Template
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
        $__internal_1697c2cddcfe8080d98fce1962d7a62c21795fb5875365804b3dec38bb35a048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1697c2cddcfe8080d98fce1962d7a62c21795fb5875365804b3dec38bb35a048->enter($__internal_1697c2cddcfe8080d98fce1962d7a62c21795fb5875365804b3dec38bb35a048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5b525064caf8593f7e417d17ae7bb3b72e3db74dba030bd21562da2b37b4c167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b525064caf8593f7e417d17ae7bb3b72e3db74dba030bd21562da2b37b4c167->enter($__internal_5b525064caf8593f7e417d17ae7bb3b72e3db74dba030bd21562da2b37b4c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1697c2cddcfe8080d98fce1962d7a62c21795fb5875365804b3dec38bb35a048->leave($__internal_1697c2cddcfe8080d98fce1962d7a62c21795fb5875365804b3dec38bb35a048_prof);

        
        $__internal_5b525064caf8593f7e417d17ae7bb3b72e3db74dba030bd21562da2b37b4c167->leave($__internal_5b525064caf8593f7e417d17ae7bb3b72e3db74dba030bd21562da2b37b4c167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
