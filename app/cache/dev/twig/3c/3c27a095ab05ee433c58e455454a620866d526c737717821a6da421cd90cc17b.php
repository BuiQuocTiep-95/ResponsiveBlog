<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8e2be620cac432b0d53911ab12038238b515266edc276a664b6d1548b447f311 extends Twig_Template
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
        $__internal_83f8a69aa11a1b70c94391e01aa41be1f65f1cc388a52fdd97140c28e8963ed3 = $this->env->getExtension("native_profiler");
        $__internal_83f8a69aa11a1b70c94391e01aa41be1f65f1cc388a52fdd97140c28e8963ed3->enter($__internal_83f8a69aa11a1b70c94391e01aa41be1f65f1cc388a52fdd97140c28e8963ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_83f8a69aa11a1b70c94391e01aa41be1f65f1cc388a52fdd97140c28e8963ed3->leave($__internal_83f8a69aa11a1b70c94391e01aa41be1f65f1cc388a52fdd97140c28e8963ed3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
