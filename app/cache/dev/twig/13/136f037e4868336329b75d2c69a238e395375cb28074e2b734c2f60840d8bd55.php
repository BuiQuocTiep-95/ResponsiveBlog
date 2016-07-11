<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2fc31252bf02993e0106967667b91a3ff89a58a676500b0821564df68b46e4fb extends Twig_Template
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
        $__internal_a3bbdd02ebadee8deea8337a4a5bbe24a503dd9ba94957c2a66ad0924afe0584 = $this->env->getExtension("native_profiler");
        $__internal_a3bbdd02ebadee8deea8337a4a5bbe24a503dd9ba94957c2a66ad0924afe0584->enter($__internal_a3bbdd02ebadee8deea8337a4a5bbe24a503dd9ba94957c2a66ad0924afe0584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a3bbdd02ebadee8deea8337a4a5bbe24a503dd9ba94957c2a66ad0924afe0584->leave($__internal_a3bbdd02ebadee8deea8337a4a5bbe24a503dd9ba94957c2a66ad0924afe0584_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
