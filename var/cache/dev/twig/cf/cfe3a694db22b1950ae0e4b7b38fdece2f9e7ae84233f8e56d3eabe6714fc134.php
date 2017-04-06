<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_439babb4dd694130755fe84d4f6f45cedc5495227eefcfcfb935f592abc1cfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_154e2541e0ed9d43b1c8bcd2485f9bdb3dd202a82eff469213f81e772af995dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154e2541e0ed9d43b1c8bcd2485f9bdb3dd202a82eff469213f81e772af995dc->enter($__internal_154e2541e0ed9d43b1c8bcd2485f9bdb3dd202a82eff469213f81e772af995dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ce20ebe7ef870baa889646fe1c4b80342b41265228e4cdce5faf3c39725ea74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce20ebe7ef870baa889646fe1c4b80342b41265228e4cdce5faf3c39725ea74d->enter($__internal_ce20ebe7ef870baa889646fe1c4b80342b41265228e4cdce5faf3c39725ea74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_154e2541e0ed9d43b1c8bcd2485f9bdb3dd202a82eff469213f81e772af995dc->leave($__internal_154e2541e0ed9d43b1c8bcd2485f9bdb3dd202a82eff469213f81e772af995dc_prof);

        
        $__internal_ce20ebe7ef870baa889646fe1c4b80342b41265228e4cdce5faf3c39725ea74d->leave($__internal_ce20ebe7ef870baa889646fe1c4b80342b41265228e4cdce5faf3c39725ea74d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9529014b87a412c0f03dd5492196e4a5865e9f27346513ef53f41e3967aed60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9529014b87a412c0f03dd5492196e4a5865e9f27346513ef53f41e3967aed60->enter($__internal_e9529014b87a412c0f03dd5492196e4a5865e9f27346513ef53f41e3967aed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62d08622cb55323c73798b60e300a9c3dba70c709e813d4312a6ec6b29ab967a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d08622cb55323c73798b60e300a9c3dba70c709e813d4312a6ec6b29ab967a->enter($__internal_62d08622cb55323c73798b60e300a9c3dba70c709e813d4312a6ec6b29ab967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_62d08622cb55323c73798b60e300a9c3dba70c709e813d4312a6ec6b29ab967a->leave($__internal_62d08622cb55323c73798b60e300a9c3dba70c709e813d4312a6ec6b29ab967a_prof);

        
        $__internal_e9529014b87a412c0f03dd5492196e4a5865e9f27346513ef53f41e3967aed60->leave($__internal_e9529014b87a412c0f03dd5492196e4a5865e9f27346513ef53f41e3967aed60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
