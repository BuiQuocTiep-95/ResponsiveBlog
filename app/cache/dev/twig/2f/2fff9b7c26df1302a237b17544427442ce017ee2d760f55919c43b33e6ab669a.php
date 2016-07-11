<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ffdccab139314034a912c106e1573cde9243e5dbb84643961f494e2f37338557 extends Twig_Template
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
        $__internal_0f559d7fc03158f4d21852127f1a22704d6a36ab6999a03ca85b4e32f0b91274 = $this->env->getExtension("native_profiler");
        $__internal_0f559d7fc03158f4d21852127f1a22704d6a36ab6999a03ca85b4e32f0b91274->enter($__internal_0f559d7fc03158f4d21852127f1a22704d6a36ab6999a03ca85b4e32f0b91274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0f559d7fc03158f4d21852127f1a22704d6a36ab6999a03ca85b4e32f0b91274->leave($__internal_0f559d7fc03158f4d21852127f1a22704d6a36ab6999a03ca85b4e32f0b91274_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
