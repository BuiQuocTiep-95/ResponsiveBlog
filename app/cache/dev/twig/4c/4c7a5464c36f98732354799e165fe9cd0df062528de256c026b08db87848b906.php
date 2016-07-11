<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_82aa70d212ea65769c3929113d02fdb6c5ead92dfdc6f9837519f09f36a193a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_311dddb8e2db6411b6a956b84022741656b9f9e2e9e6a579f94d90316ea52fa3 = $this->env->getExtension("native_profiler");
        $__internal_311dddb8e2db6411b6a956b84022741656b9f9e2e9e6a579f94d90316ea52fa3->enter($__internal_311dddb8e2db6411b6a956b84022741656b9f9e2e9e6a579f94d90316ea52fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311dddb8e2db6411b6a956b84022741656b9f9e2e9e6a579f94d90316ea52fa3->leave($__internal_311dddb8e2db6411b6a956b84022741656b9f9e2e9e6a579f94d90316ea52fa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8798b697ad1e34e53bb90faef6f83c65e497f7dad855fec68b4fdd12d14bd526 = $this->env->getExtension("native_profiler");
        $__internal_8798b697ad1e34e53bb90faef6f83c65e497f7dad855fec68b4fdd12d14bd526->enter($__internal_8798b697ad1e34e53bb90faef6f83c65e497f7dad855fec68b4fdd12d14bd526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8798b697ad1e34e53bb90faef6f83c65e497f7dad855fec68b4fdd12d14bd526->leave($__internal_8798b697ad1e34e53bb90faef6f83c65e497f7dad855fec68b4fdd12d14bd526_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48d6157abde0c095a7352e6e704f98fbfc6c1aae2e88941cdb8472431e2e1b2d = $this->env->getExtension("native_profiler");
        $__internal_48d6157abde0c095a7352e6e704f98fbfc6c1aae2e88941cdb8472431e2e1b2d->enter($__internal_48d6157abde0c095a7352e6e704f98fbfc6c1aae2e88941cdb8472431e2e1b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48d6157abde0c095a7352e6e704f98fbfc6c1aae2e88941cdb8472431e2e1b2d->leave($__internal_48d6157abde0c095a7352e6e704f98fbfc6c1aae2e88941cdb8472431e2e1b2d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97b45f7f326f83bdae77f752fa36ec671fdad45a8f1c5f193d1244d74a49e91e = $this->env->getExtension("native_profiler");
        $__internal_97b45f7f326f83bdae77f752fa36ec671fdad45a8f1c5f193d1244d74a49e91e->enter($__internal_97b45f7f326f83bdae77f752fa36ec671fdad45a8f1c5f193d1244d74a49e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_97b45f7f326f83bdae77f752fa36ec671fdad45a8f1c5f193d1244d74a49e91e->leave($__internal_97b45f7f326f83bdae77f752fa36ec671fdad45a8f1c5f193d1244d74a49e91e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
