<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5eb63d96677a21639954da9108f1567df19051b0d7181ffa3f808bc478e3eb35 extends Twig_Template
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
        $__internal_788f63bb34f88efa80bd54bc26c734c3123284026ec52b7c811cd0596b6d27f7 = $this->env->getExtension("native_profiler");
        $__internal_788f63bb34f88efa80bd54bc26c734c3123284026ec52b7c811cd0596b6d27f7->enter($__internal_788f63bb34f88efa80bd54bc26c734c3123284026ec52b7c811cd0596b6d27f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_788f63bb34f88efa80bd54bc26c734c3123284026ec52b7c811cd0596b6d27f7->leave($__internal_788f63bb34f88efa80bd54bc26c734c3123284026ec52b7c811cd0596b6d27f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_66d356d8137b0ddb045cc294a91731a3317827f8ddb64e880ef405c2229df444 = $this->env->getExtension("native_profiler");
        $__internal_66d356d8137b0ddb045cc294a91731a3317827f8ddb64e880ef405c2229df444->enter($__internal_66d356d8137b0ddb045cc294a91731a3317827f8ddb64e880ef405c2229df444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_66d356d8137b0ddb045cc294a91731a3317827f8ddb64e880ef405c2229df444->leave($__internal_66d356d8137b0ddb045cc294a91731a3317827f8ddb64e880ef405c2229df444_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
