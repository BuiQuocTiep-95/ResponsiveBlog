<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_62020fee01ef8f33540d2ecf9e5be79f01deeb6a67fb6bc413e5bdc13722e7d5 extends Twig_Template
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
        $__internal_cb9b7ce223d63b5bf4a235e5f75b0e21d7515249d1e3cd2514ab815c7913eaf1 = $this->env->getExtension("native_profiler");
        $__internal_cb9b7ce223d63b5bf4a235e5f75b0e21d7515249d1e3cd2514ab815c7913eaf1->enter($__internal_cb9b7ce223d63b5bf4a235e5f75b0e21d7515249d1e3cd2514ab815c7913eaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb9b7ce223d63b5bf4a235e5f75b0e21d7515249d1e3cd2514ab815c7913eaf1->leave($__internal_cb9b7ce223d63b5bf4a235e5f75b0e21d7515249d1e3cd2514ab815c7913eaf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
