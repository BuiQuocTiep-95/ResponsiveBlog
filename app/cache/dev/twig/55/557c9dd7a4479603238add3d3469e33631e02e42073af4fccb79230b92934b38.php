<?php

/* CvutFitBiWT1BlogUiBundle:File:image.html.twig */
class __TwigTemplate_23f64bde978cb0acd75e0e39ef46503ac53bd8fa31ef7d6ac7a1a86ae0b2d3bb extends Twig_Template
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
        $__internal_5c87407ab9b67eb8bb86edfdfd4f73acbe1e41f2339f73a1b7e906667115223c = $this->env->getExtension("native_profiler");
        $__internal_5c87407ab9b67eb8bb86edfdfd4f73acbe1e41f2339f73a1b7e906667115223c->enter($__internal_5c87407ab9b67eb8bb86edfdfd4f73acbe1e41f2339f73a1b7e906667115223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:File:image.html.twig"));

        // line 1
        echo "<img alt=\"Embedded Image\" src=\"data:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "internetMediaType", array()), "html", null, true);
        echo ";base64,";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "data", array()), "html", null, true);
        echo "\" />";
        
        $__internal_5c87407ab9b67eb8bb86edfdfd4f73acbe1e41f2339f73a1b7e906667115223c->leave($__internal_5c87407ab9b67eb8bb86edfdfd4f73acbe1e41f2339f73a1b7e906667115223c_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:File:image.html.twig";
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
/* <img alt="Embedded Image" src="data:{{ image.internetMediaType }};base64,{{ image.data }}" />*/
