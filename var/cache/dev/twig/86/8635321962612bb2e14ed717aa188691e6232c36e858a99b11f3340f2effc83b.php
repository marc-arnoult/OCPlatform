<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f44077459a34304bb17588a895f3a44c016cc0955be6875e45f6570bdd1956c5 extends Twig_Template
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
        $__internal_69bd2ac4bc8f6a121ec1bfb9f0f236140e653481deaa41800291c74781736887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bd2ac4bc8f6a121ec1bfb9f0f236140e653481deaa41800291c74781736887->enter($__internal_69bd2ac4bc8f6a121ec1bfb9f0f236140e653481deaa41800291c74781736887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_73845ba5d3f4c1b8eb49a3dba8a0ad5f62271267172970cfb33605d11b046b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73845ba5d3f4c1b8eb49a3dba8a0ad5f62271267172970cfb33605d11b046b58->enter($__internal_73845ba5d3f4c1b8eb49a3dba8a0ad5f62271267172970cfb33605d11b046b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_69bd2ac4bc8f6a121ec1bfb9f0f236140e653481deaa41800291c74781736887->leave($__internal_69bd2ac4bc8f6a121ec1bfb9f0f236140e653481deaa41800291c74781736887_prof);

        
        $__internal_73845ba5d3f4c1b8eb49a3dba8a0ad5f62271267172970cfb33605d11b046b58->leave($__internal_73845ba5d3f4c1b8eb49a3dba8a0ad5f62271267172970cfb33605d11b046b58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
