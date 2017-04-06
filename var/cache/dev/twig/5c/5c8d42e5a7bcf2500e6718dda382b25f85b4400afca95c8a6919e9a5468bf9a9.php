<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11148cd946ddc855793cd1d60500c40ac9b1bf7a7b2d256fdd955d5d31a385d5 extends Twig_Template
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
        $__internal_35e53fd7b1c89927f45b8624d0a785c4fc49ea85cb6ce900cbf8a202ac3c2b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e53fd7b1c89927f45b8624d0a785c4fc49ea85cb6ce900cbf8a202ac3c2b86->enter($__internal_35e53fd7b1c89927f45b8624d0a785c4fc49ea85cb6ce900cbf8a202ac3c2b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6f7e43dac975dc352ef7f0eda9947f5769ef6c58f03cd83c76e52a1761ca8cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7e43dac975dc352ef7f0eda9947f5769ef6c58f03cd83c76e52a1761ca8cf4->enter($__internal_6f7e43dac975dc352ef7f0eda9947f5769ef6c58f03cd83c76e52a1761ca8cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35e53fd7b1c89927f45b8624d0a785c4fc49ea85cb6ce900cbf8a202ac3c2b86->leave($__internal_35e53fd7b1c89927f45b8624d0a785c4fc49ea85cb6ce900cbf8a202ac3c2b86_prof);

        
        $__internal_6f7e43dac975dc352ef7f0eda9947f5769ef6c58f03cd83c76e52a1761ca8cf4->leave($__internal_6f7e43dac975dc352ef7f0eda9947f5769ef6c58f03cd83c76e52a1761ca8cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
