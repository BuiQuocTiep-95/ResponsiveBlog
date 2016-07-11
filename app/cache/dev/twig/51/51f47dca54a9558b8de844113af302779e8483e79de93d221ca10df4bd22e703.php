<?php

/* CvutFitBiWT1BlogUiBundle:Security:login.html.twig */
class __TwigTemplate_61206ac9c074f4149ef34e8dbf46f8b1207f9d83c57ff5475b806e394d3b211c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CvutFitBiWT1BlogUi/base.html.twig", "CvutFitBiWT1BlogUiBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CvutFitBiWT1BlogUi/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b19b4c4943528124844e8491d1eeb206c398332bfb22021802933ed5e07fb37 = $this->env->getExtension("native_profiler");
        $__internal_8b19b4c4943528124844e8491d1eeb206c398332bfb22021802933ed5e07fb37->enter($__internal_8b19b4c4943528124844e8491d1eeb206c398332bfb22021802933ed5e07fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b19b4c4943528124844e8491d1eeb206c398332bfb22021802933ed5e07fb37->leave($__internal_8b19b4c4943528124844e8491d1eeb206c398332bfb22021802933ed5e07fb37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21600c1023f3622b8735a962a49f11cd8dca609961e261b9d79da52f6f3c95a7 = $this->env->getExtension("native_profiler");
        $__internal_21600c1023f3622b8735a962a49f11cd8dca609961e261b9d79da52f6f3c95a7->enter($__internal_21600c1023f3622b8735a962a49f11cd8dca609961e261b9d79da52f6f3c95a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button class=\"button\" type=\"submit\">login</button>
</form>

";
        
        $__internal_21600c1023f3622b8735a962a49f11cd8dca609961e261b9d79da52f6f3c95a7->leave($__internal_21600c1023f3622b8735a962a49f11cd8dca609961e261b9d79da52f6f3c95a7_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@CvutFitBiWT1BlogUi/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     <button class="button" type="submit">login</button>*/
/* </form>*/
/* */
/* {% endblock %}*/
