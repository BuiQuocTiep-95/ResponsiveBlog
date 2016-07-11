<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_c72d0fa323a29901c4ace4b01621cfbc2a54bc734ad0d9173e3ec80704b888dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ccb5360985ba1938c2cd6f8e1254e729e39ee3940bf29ed0f993ecb92909f01 = $this->env->getExtension("native_profiler");
        $__internal_0ccb5360985ba1938c2cd6f8e1254e729e39ee3940bf29ed0f993ecb92909f01->enter($__internal_0ccb5360985ba1938c2cd6f8e1254e729e39ee3940bf29ed0f993ecb92909f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ccb5360985ba1938c2cd6f8e1254e729e39ee3940bf29ed0f993ecb92909f01->leave($__internal_0ccb5360985ba1938c2cd6f8e1254e729e39ee3940bf29ed0f993ecb92909f01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c026f6a9ab2f720c1390b91fbeff70d055eeea15526d473e939447550cdf63ce = $this->env->getExtension("native_profiler");
        $__internal_c026f6a9ab2f720c1390b91fbeff70d055eeea15526d473e939447550cdf63ce->enter($__internal_c026f6a9ab2f720c1390b91fbeff70d055eeea15526d473e939447550cdf63ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c026f6a9ab2f720c1390b91fbeff70d055eeea15526d473e939447550cdf63ce->leave($__internal_c026f6a9ab2f720c1390b91fbeff70d055eeea15526d473e939447550cdf63ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9462b5e6985a298b5775a9a3d255fb2eeb13584a08ec059ff2a24a7bffad3ebf = $this->env->getExtension("native_profiler");
        $__internal_9462b5e6985a298b5775a9a3d255fb2eeb13584a08ec059ff2a24a7bffad3ebf->enter($__internal_9462b5e6985a298b5775a9a3d255fb2eeb13584a08ec059ff2a24a7bffad3ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9462b5e6985a298b5775a9a3d255fb2eeb13584a08ec059ff2a24a7bffad3ebf->leave($__internal_9462b5e6985a298b5775a9a3d255fb2eeb13584a08ec059ff2a24a7bffad3ebf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3764f3697fdb010b382dcdd19b51aedc08f2b8c3bbf03da981c897ac03a9acb8 = $this->env->getExtension("native_profiler");
        $__internal_3764f3697fdb010b382dcdd19b51aedc08f2b8c3bbf03da981c897ac03a9acb8->enter($__internal_3764f3697fdb010b382dcdd19b51aedc08f2b8c3bbf03da981c897ac03a9acb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_3764f3697fdb010b382dcdd19b51aedc08f2b8c3bbf03da981c897ac03a9acb8->leave($__internal_3764f3697fdb010b382dcdd19b51aedc08f2b8c3bbf03da981c897ac03a9acb8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_42b44c4c05d10d06e946efadf99b83a9e4065e3a9a15a42108d71954cb646b20 = $this->env->getExtension("native_profiler");
        $__internal_42b44c4c05d10d06e946efadf99b83a9e4065e3a9a15a42108d71954cb646b20->enter($__internal_42b44c4c05d10d06e946efadf99b83a9e4065e3a9a15a42108d71954cb646b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_42b44c4c05d10d06e946efadf99b83a9e4065e3a9a15a42108d71954cb646b20->leave($__internal_42b44c4c05d10d06e946efadf99b83a9e4065e3a9a15a42108d71954cb646b20_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
