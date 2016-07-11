<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6bc7ae1b8c917cdb4f9b66f9bfdaedb00cd03c993906f26007815680fe5d92f4 extends Twig_Template
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
        $__internal_78d88c6a101a0c5ffa56d94468b5e0b725b417e94835ba8e8a076d5a203370aa = $this->env->getExtension("native_profiler");
        $__internal_78d88c6a101a0c5ffa56d94468b5e0b725b417e94835ba8e8a076d5a203370aa->enter($__internal_78d88c6a101a0c5ffa56d94468b5e0b725b417e94835ba8e8a076d5a203370aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_78d88c6a101a0c5ffa56d94468b5e0b725b417e94835ba8e8a076d5a203370aa->leave($__internal_78d88c6a101a0c5ffa56d94468b5e0b725b417e94835ba8e8a076d5a203370aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
