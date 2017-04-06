<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e19945631fbccf073be34e34efbbb6682d7b6a5587abb5ecd23dd7bdcb80521a extends Twig_Template
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
        $__internal_0475a266d02b65aa995bc1bd6d8ea0c794dbfaa4dca622306968ab7ad5a27a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0475a266d02b65aa995bc1bd6d8ea0c794dbfaa4dca622306968ab7ad5a27a72->enter($__internal_0475a266d02b65aa995bc1bd6d8ea0c794dbfaa4dca622306968ab7ad5a27a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_979fcf7b671c1d55828c0ee75c3134badb7d8fd7da54ac3ece99cdd2d0eaebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979fcf7b671c1d55828c0ee75c3134badb7d8fd7da54ac3ece99cdd2d0eaebaf->enter($__internal_979fcf7b671c1d55828c0ee75c3134badb7d8fd7da54ac3ece99cdd2d0eaebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0475a266d02b65aa995bc1bd6d8ea0c794dbfaa4dca622306968ab7ad5a27a72->leave($__internal_0475a266d02b65aa995bc1bd6d8ea0c794dbfaa4dca622306968ab7ad5a27a72_prof);

        
        $__internal_979fcf7b671c1d55828c0ee75c3134badb7d8fd7da54ac3ece99cdd2d0eaebaf->leave($__internal_979fcf7b671c1d55828c0ee75c3134badb7d8fd7da54ac3ece99cdd2d0eaebaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
