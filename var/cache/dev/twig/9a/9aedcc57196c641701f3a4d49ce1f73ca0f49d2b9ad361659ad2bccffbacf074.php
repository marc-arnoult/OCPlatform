<?php

/* ::base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b6426f42eb6e0e504593268d57256f7727010752de27b78eb45c527aa3c1f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6426f42eb6e0e504593268d57256f7727010752de27b78eb45c527aa3c1f20->enter($__internal_8b6426f42eb6e0e504593268d57256f7727010752de27b78eb45c527aa3c1f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_91aa76ae8c71a2b977938f41b9a25c693db72fc12cd0b4561fc36c8ebcbdff89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aa76ae8c71a2b977938f41b9a25c693db72fc12cd0b4561fc36c8ebcbdff89->enter($__internal_91aa76ae8c71a2b977938f41b9a25c693db72fc12cd0b4561fc36c8ebcbdff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8b6426f42eb6e0e504593268d57256f7727010752de27b78eb45c527aa3c1f20->leave($__internal_8b6426f42eb6e0e504593268d57256f7727010752de27b78eb45c527aa3c1f20_prof);

        
        $__internal_91aa76ae8c71a2b977938f41b9a25c693db72fc12cd0b4561fc36c8ebcbdff89->leave($__internal_91aa76ae8c71a2b977938f41b9a25c693db72fc12cd0b4561fc36c8ebcbdff89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f8d05cd5d943c175fdbdc6a31cd6d29e3b20f5d6ef1bc56ee7a49d4d75fb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f8d05cd5d943c175fdbdc6a31cd6d29e3b20f5d6ef1bc56ee7a49d4d75fb50->enter($__internal_75f8d05cd5d943c175fdbdc6a31cd6d29e3b20f5d6ef1bc56ee7a49d4d75fb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d113227eaacd82242abaf88493ea7f4b82f29fbaa29a77b76cf927edef5075ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d113227eaacd82242abaf88493ea7f4b82f29fbaa29a77b76cf927edef5075ea->enter($__internal_d113227eaacd82242abaf88493ea7f4b82f29fbaa29a77b76cf927edef5075ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d113227eaacd82242abaf88493ea7f4b82f29fbaa29a77b76cf927edef5075ea->leave($__internal_d113227eaacd82242abaf88493ea7f4b82f29fbaa29a77b76cf927edef5075ea_prof);

        
        $__internal_75f8d05cd5d943c175fdbdc6a31cd6d29e3b20f5d6ef1bc56ee7a49d4d75fb50->leave($__internal_75f8d05cd5d943c175fdbdc6a31cd6d29e3b20f5d6ef1bc56ee7a49d4d75fb50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_caad7877c824cac7510aeb2e7a71a57cce349a83776f2f3b60997bf065a5067d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caad7877c824cac7510aeb2e7a71a57cce349a83776f2f3b60997bf065a5067d->enter($__internal_caad7877c824cac7510aeb2e7a71a57cce349a83776f2f3b60997bf065a5067d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e46200f2831b3198b09a21157fe9f44deb0c3a42a5a8545196bb632a62f46016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46200f2831b3198b09a21157fe9f44deb0c3a42a5a8545196bb632a62f46016->enter($__internal_e46200f2831b3198b09a21157fe9f44deb0c3a42a5a8545196bb632a62f46016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e46200f2831b3198b09a21157fe9f44deb0c3a42a5a8545196bb632a62f46016->leave($__internal_e46200f2831b3198b09a21157fe9f44deb0c3a42a5a8545196bb632a62f46016_prof);

        
        $__internal_caad7877c824cac7510aeb2e7a71a57cce349a83776f2f3b60997bf065a5067d->leave($__internal_caad7877c824cac7510aeb2e7a71a57cce349a83776f2f3b60997bf065a5067d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_821fa325e168c6ed80e8d366e27dfb4e7ba888b3baacf9e8813e8dd24f13d074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821fa325e168c6ed80e8d366e27dfb4e7ba888b3baacf9e8813e8dd24f13d074->enter($__internal_821fa325e168c6ed80e8d366e27dfb4e7ba888b3baacf9e8813e8dd24f13d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_081ee2bd52fb790c20a6adce9bbb67d1cccd4c8f3c581a7be7e22a15f48215c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081ee2bd52fb790c20a6adce9bbb67d1cccd4c8f3c581a7be7e22a15f48215c9->enter($__internal_081ee2bd52fb790c20a6adce9bbb67d1cccd4c8f3c581a7be7e22a15f48215c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_081ee2bd52fb790c20a6adce9bbb67d1cccd4c8f3c581a7be7e22a15f48215c9->leave($__internal_081ee2bd52fb790c20a6adce9bbb67d1cccd4c8f3c581a7be7e22a15f48215c9_prof);

        
        $__internal_821fa325e168c6ed80e8d366e27dfb4e7ba888b3baacf9e8813e8dd24f13d074->leave($__internal_821fa325e168c6ed80e8d366e27dfb4e7ba888b3baacf9e8813e8dd24f13d074_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_619306e8861d60e062c4707b940c0609c6b03208fc824adac3ee12697f3d28c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619306e8861d60e062c4707b940c0609c6b03208fc824adac3ee12697f3d28c1->enter($__internal_619306e8861d60e062c4707b940c0609c6b03208fc824adac3ee12697f3d28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3db676990d2a191b4aed4c8f8ed6c5b1adfd56446cf31a560f3d8f326cd9fb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db676990d2a191b4aed4c8f8ed6c5b1adfd56446cf31a560f3d8f326cd9fb76->enter($__internal_3db676990d2a191b4aed4c8f8ed6c5b1adfd56446cf31a560f3d8f326cd9fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3db676990d2a191b4aed4c8f8ed6c5b1adfd56446cf31a560f3d8f326cd9fb76->leave($__internal_3db676990d2a191b4aed4c8f8ed6c5b1adfd56446cf31a560f3d8f326cd9fb76_prof);

        
        $__internal_619306e8861d60e062c4707b940c0609c6b03208fc824adac3ee12697f3d28c1->leave($__internal_619306e8861d60e062c4707b940c0609c6b03208fc824adac3ee12697f3d28c1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/marc/site/cours-symfony/Symfony/app/Resources/views/base.html.twig");
    }
}
