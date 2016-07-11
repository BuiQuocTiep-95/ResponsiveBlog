<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6e106f143210ff4c224fe66093f6f690c88e8d171e939db7c6294838f889371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f804c8f294b76412a2560206aae188475717a9aac0a99241095d1cbe86aaf61 = $this->env->getExtension("native_profiler");
        $__internal_2f804c8f294b76412a2560206aae188475717a9aac0a99241095d1cbe86aaf61->enter($__internal_2f804c8f294b76412a2560206aae188475717a9aac0a99241095d1cbe86aaf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f804c8f294b76412a2560206aae188475717a9aac0a99241095d1cbe86aaf61->leave($__internal_2f804c8f294b76412a2560206aae188475717a9aac0a99241095d1cbe86aaf61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_976101964453c4c020ff83b1a7b0836528bdecc72f57b14fd296bfba11477e23 = $this->env->getExtension("native_profiler");
        $__internal_976101964453c4c020ff83b1a7b0836528bdecc72f57b14fd296bfba11477e23->enter($__internal_976101964453c4c020ff83b1a7b0836528bdecc72f57b14fd296bfba11477e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_976101964453c4c020ff83b1a7b0836528bdecc72f57b14fd296bfba11477e23->leave($__internal_976101964453c4c020ff83b1a7b0836528bdecc72f57b14fd296bfba11477e23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df0aa1082e3232cdd5a5da18bf8e5ee1b3ed6c197337fe9479ad0cf0e0a141d = $this->env->getExtension("native_profiler");
        $__internal_7df0aa1082e3232cdd5a5da18bf8e5ee1b3ed6c197337fe9479ad0cf0e0a141d->enter($__internal_7df0aa1082e3232cdd5a5da18bf8e5ee1b3ed6c197337fe9479ad0cf0e0a141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7df0aa1082e3232cdd5a5da18bf8e5ee1b3ed6c197337fe9479ad0cf0e0a141d->leave($__internal_7df0aa1082e3232cdd5a5da18bf8e5ee1b3ed6c197337fe9479ad0cf0e0a141d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
