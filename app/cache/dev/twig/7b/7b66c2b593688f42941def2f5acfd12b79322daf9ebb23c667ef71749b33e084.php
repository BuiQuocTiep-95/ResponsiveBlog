<?php

/* CvutFitBiWT1BlogUiBundle:Form:checkbox.html.twig */
class __TwigTemplate_0740042401d433a05b3e7b666ac6d4ae671ada7e3368558a39ae6e6c7a417a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d313d2b12e1102fce9ed442d947a2e17b030579f7c35928bd2f2d811a1e8fb = $this->env->getExtension("native_profiler");
        $__internal_c3d313d2b12e1102fce9ed442d947a2e17b030579f7c35928bd2f2d811a1e8fb->enter($__internal_c3d313d2b12e1102fce9ed442d947a2e17b030579f7c35928bd2f2d811a1e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Form:checkbox.html.twig"));

        // line 1
        $this->displayBlock('checkbox_widget', $context, $blocks);
        
        $__internal_c3d313d2b12e1102fce9ed442d947a2e17b030579f7c35928bd2f2d811a1e8fb->leave($__internal_c3d313d2b12e1102fce9ed442d947a2e17b030579f7c35928bd2f2d811a1e8fb_prof);

    }

    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2bede026c6e2e868a154bb578fb2bc4fa39c4a998b1690045b4eeba400ca0eb6 = $this->env->getExtension("native_profiler");
        $__internal_2bede026c6e2e868a154bb578fb2bc4fa39c4a998b1690045b4eeba400ca0eb6->enter($__internal_2bede026c6e2e868a154bb578fb2bc4fa39c4a998b1690045b4eeba400ca0eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "</label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2bede026c6e2e868a154bb578fb2bc4fa39c4a998b1690045b4eeba400ca0eb6->leave($__internal_2bede026c6e2e868a154bb578fb2bc4fa39c4a998b1690045b4eeba400ca0eb6_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Form:checkbox.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         <label  for="{{ id }}"><input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*         {{ label|trans }}</label>*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
