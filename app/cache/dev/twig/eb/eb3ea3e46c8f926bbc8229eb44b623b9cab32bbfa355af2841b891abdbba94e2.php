<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_8e434b1ef1989ff2879231ccb5874460889237cf7400932f44df1079a498e974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fef3a300824e552235aef2ea32c901e71077f06ac30067e07e2b86f44833fdc = $this->env->getExtension("native_profiler");
        $__internal_0fef3a300824e552235aef2ea32c901e71077f06ac30067e07e2b86f44833fdc->enter($__internal_0fef3a300824e552235aef2ea32c901e71077f06ac30067e07e2b86f44833fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fef3a300824e552235aef2ea32c901e71077f06ac30067e07e2b86f44833fdc->leave($__internal_0fef3a300824e552235aef2ea32c901e71077f06ac30067e07e2b86f44833fdc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_96543dfe1ee0bdfc2d72226e9192077518f999ec44cb54f0339d9a51184fde01 = $this->env->getExtension("native_profiler");
        $__internal_96543dfe1ee0bdfc2d72226e9192077518f999ec44cb54f0339d9a51184fde01->enter($__internal_96543dfe1ee0bdfc2d72226e9192077518f999ec44cb54f0339d9a51184fde01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_96543dfe1ee0bdfc2d72226e9192077518f999ec44cb54f0339d9a51184fde01->leave($__internal_96543dfe1ee0bdfc2d72226e9192077518f999ec44cb54f0339d9a51184fde01_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
