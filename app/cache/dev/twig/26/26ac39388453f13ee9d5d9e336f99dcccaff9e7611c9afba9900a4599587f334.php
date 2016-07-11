<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_246a5a1fddb5c87abb16183c01adee89d2dda4d43789443edaecc7bd3c7c748d extends Twig_Template
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
        $__internal_6a8d3bdad71d4b70db25725dbe9bd2905dd4f0e402bf42a89822c8d8b5b7588c = $this->env->getExtension("native_profiler");
        $__internal_6a8d3bdad71d4b70db25725dbe9bd2905dd4f0e402bf42a89822c8d8b5b7588c->enter($__internal_6a8d3bdad71d4b70db25725dbe9bd2905dd4f0e402bf42a89822c8d8b5b7588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6a8d3bdad71d4b70db25725dbe9bd2905dd4f0e402bf42a89822c8d8b5b7588c->leave($__internal_6a8d3bdad71d4b70db25725dbe9bd2905dd4f0e402bf42a89822c8d8b5b7588c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
