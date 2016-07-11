<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b23f6518cf85530302d93dce21e15abc64e73145feacf5c62ab0239669878e8c extends Twig_Template
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
        $__internal_cdf68c10ffad4f958e615623e31b92a7f7cbd311ec17e868894230976abd2986 = $this->env->getExtension("native_profiler");
        $__internal_cdf68c10ffad4f958e615623e31b92a7f7cbd311ec17e868894230976abd2986->enter($__internal_cdf68c10ffad4f958e615623e31b92a7f7cbd311ec17e868894230976abd2986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cdf68c10ffad4f958e615623e31b92a7f7cbd311ec17e868894230976abd2986->leave($__internal_cdf68c10ffad4f958e615623e31b92a7f7cbd311ec17e868894230976abd2986_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
