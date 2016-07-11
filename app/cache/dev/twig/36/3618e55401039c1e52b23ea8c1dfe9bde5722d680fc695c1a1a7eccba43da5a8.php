<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dd25afcd0751cdad7b90ead382e6163af9203ddbc799d5f69fa32ab372edc3ec extends Twig_Template
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
        $__internal_e73b0e91765da4a322540b0e5472369360a1066bb13c4ec1c4527cfe34a3680c = $this->env->getExtension("native_profiler");
        $__internal_e73b0e91765da4a322540b0e5472369360a1066bb13c4ec1c4527cfe34a3680c->enter($__internal_e73b0e91765da4a322540b0e5472369360a1066bb13c4ec1c4527cfe34a3680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e73b0e91765da4a322540b0e5472369360a1066bb13c4ec1c4527cfe34a3680c->leave($__internal_e73b0e91765da4a322540b0e5472369360a1066bb13c4ec1c4527cfe34a3680c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
