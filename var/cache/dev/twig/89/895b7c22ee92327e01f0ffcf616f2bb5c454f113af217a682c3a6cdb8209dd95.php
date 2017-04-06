<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_f99820e5cbf28f585d6bb998237db9b3e1ceba884e5041fb30760ca1c6cb714a extends Twig_Template
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
        $__internal_e44b0f58b6c8be317c13685e5759a43ea871588520f1c26a75708e9f38145f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44b0f58b6c8be317c13685e5759a43ea871588520f1c26a75708e9f38145f9d->enter($__internal_e44b0f58b6c8be317c13685e5759a43ea871588520f1c26a75708e9f38145f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_6809c8a147e416d3cb1ddcc6349c1d37f8099f390d103b08b7dd1daa210072c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6809c8a147e416d3cb1ddcc6349c1d37f8099f390d103b08b7dd1daa210072c0->enter($__internal_6809c8a147e416d3cb1ddcc6349c1d37f8099f390d103b08b7dd1daa210072c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec Openclassrooms !</title>
    </head>
    <body>
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " et page ";
        echo twig_escape_filter($this->env, ($context["page"] ?? $this->getContext($context, "page")), "html", null, true);
        echo "</h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Alias autem corporis eligendi facere facilis inventore magni modi molestiae nobis nulla optio porro praesentium qui,
        reprehenderit repudiandae saepe totam ut voluptatem!
    </p>
    </body>
</html>";
        
        $__internal_e44b0f58b6c8be317c13685e5759a43ea871588520f1c26a75708e9f38145f9d->leave($__internal_e44b0f58b6c8be317c13685e5759a43ea871588520f1c26a75708e9f38145f9d_prof);

        
        $__internal_6809c8a147e416d3cb1ddcc6349c1d37f8099f390d103b08b7dd1daa210072c0->leave($__internal_6809c8a147e416d3cb1ddcc6349c1d37f8099f390d103b08b7dd1daa210072c0_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec Openclassrooms !</title>
    </head>
    <body>
    <h1>Hello {{ nom }} et page {{ page }}</h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Alias autem corporis eligendi facere facilis inventore magni modi molestiae nobis nulla optio porro praesentium qui,
        reprehenderit repudiandae saepe totam ut voluptatem!
    </p>
    </body>
</html>", "OCPlatformBundle:Advert:index.html.twig", "/Users/marc/site/cours-symfony/Symfony/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
