<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2af994afc1a590952d7500cbef3cccd31c51acf2cb9beff593cb81aaa88ebd9 extends Twig_Template
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
        $__internal_8e0cff177583e938150027808d1749d63b5300fe70bdf0ee49aea6abb8afc99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0cff177583e938150027808d1749d63b5300fe70bdf0ee49aea6abb8afc99b->enter($__internal_8e0cff177583e938150027808d1749d63b5300fe70bdf0ee49aea6abb8afc99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7130516c4cb970f8e10aba942ef25dc62e2982d7c9d0bda746d457cce4bedfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7130516c4cb970f8e10aba942ef25dc62e2982d7c9d0bda746d457cce4bedfcf->enter($__internal_7130516c4cb970f8e10aba942ef25dc62e2982d7c9d0bda746d457cce4bedfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8e0cff177583e938150027808d1749d63b5300fe70bdf0ee49aea6abb8afc99b->leave($__internal_8e0cff177583e938150027808d1749d63b5300fe70bdf0ee49aea6abb8afc99b_prof);

        
        $__internal_7130516c4cb970f8e10aba942ef25dc62e2982d7c9d0bda746d457cce4bedfcf->leave($__internal_7130516c4cb970f8e10aba942ef25dc62e2982d7c9d0bda746d457cce4bedfcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
