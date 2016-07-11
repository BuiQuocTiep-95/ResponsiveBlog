<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_745469e5de21be06b8c661c99b840ff7e2a682feb9c771d15ad0abf847ca18aa extends Twig_Template
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
        $__internal_fd51c3875c9070cc08f00940e2a575f157682145eabf55afb95227723ad3af47 = $this->env->getExtension("native_profiler");
        $__internal_fd51c3875c9070cc08f00940e2a575f157682145eabf55afb95227723ad3af47->enter($__internal_fd51c3875c9070cc08f00940e2a575f157682145eabf55afb95227723ad3af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fd51c3875c9070cc08f00940e2a575f157682145eabf55afb95227723ad3af47->leave($__internal_fd51c3875c9070cc08f00940e2a575f157682145eabf55afb95227723ad3af47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
