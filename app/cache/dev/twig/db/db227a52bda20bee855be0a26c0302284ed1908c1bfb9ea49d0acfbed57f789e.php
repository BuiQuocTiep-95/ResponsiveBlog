<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_963b39f56b12eef6146bc33b13f39d3316d298b7cb78407e8e26e2a64c1959f3 extends Twig_Template
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
        $__internal_eb3a7a4bb48599f0f21db9320637151a0a38f4570b7b5b742dc194e1b89c355d = $this->env->getExtension("native_profiler");
        $__internal_eb3a7a4bb48599f0f21db9320637151a0a38f4570b7b5b742dc194e1b89c355d->enter($__internal_eb3a7a4bb48599f0f21db9320637151a0a38f4570b7b5b742dc194e1b89c355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eb3a7a4bb48599f0f21db9320637151a0a38f4570b7b5b742dc194e1b89c355d->leave($__internal_eb3a7a4bb48599f0f21db9320637151a0a38f4570b7b5b742dc194e1b89c355d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
