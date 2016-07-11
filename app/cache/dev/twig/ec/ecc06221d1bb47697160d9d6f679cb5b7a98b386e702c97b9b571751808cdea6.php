<?php

/* CvutFitBiWT1BlogUiBundle:Post:new.html.twig */
class __TwigTemplate_cd080b05d26bf220284c4e45795d9ccc1c67f581506ccf8e2f9bd99cba890885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CvutFitBiWT1BlogUiBundle::base.html.twig", "CvutFitBiWT1BlogUiBundle:Post:new.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'javascript' => array($this, 'block_javascript'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CvutFitBiWT1BlogUiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af36310b7338dfbdb680e121297f777cdfbe7c2919415f0a0ff0a45cf922f035 = $this->env->getExtension("native_profiler");
        $__internal_af36310b7338dfbdb680e121297f777cdfbe7c2919415f0a0ff0a45cf922f035->enter($__internal_af36310b7338dfbdb680e121297f777cdfbe7c2919415f0a0ff0a45cf922f035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Post:new.html.twig"));

        // line 8
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), array(0 => "@CvutFitBiWT1BlogUi/Form/checkbox.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af36310b7338dfbdb680e121297f777cdfbe7c2919415f0a0ff0a45cf922f035->leave($__internal_af36310b7338dfbdb680e121297f777cdfbe7c2919415f0a0ff0a45cf922f035_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_10dd7fdfcf597e2d32f85112ccb3c796e80d4b79da157e34bcf67e4b026386b9 = $this->env->getExtension("native_profiler");
        $__internal_10dd7fdfcf597e2d32f85112ccb3c796e80d4b79da157e34bcf67e4b026386b9->enter($__internal_10dd7fdfcf597e2d32f85112ccb3c796e80d4b79da157e34bcf67e4b026386b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Nový příspěvek";
        
        $__internal_10dd7fdfcf597e2d32f85112ccb3c796e80d4b79da157e34bcf67e4b026386b9->leave($__internal_10dd7fdfcf597e2d32f85112ccb3c796e80d4b79da157e34bcf67e4b026386b9_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d7a3cebfdd43200d6be68a055d0cad4d3c915608b2b644ead13bcaf796732bba = $this->env->getExtension("native_profiler");
        $__internal_d7a3cebfdd43200d6be68a055d0cad4d3c915608b2b644ead13bcaf796732bba->enter($__internal_d7a3cebfdd43200d6be68a055d0cad4d3c915608b2b644ead13bcaf796732bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_d7a3cebfdd43200d6be68a055d0cad4d3c915608b2b644ead13bcaf796732bba->leave($__internal_d7a3cebfdd43200d6be68a055d0cad4d3c915608b2b644ead13bcaf796732bba_prof);

    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        $__internal_c0ff190541ec912ebff9c2d7e31a3c52b82091c320d0c4331349801f2d882f3b = $this->env->getExtension("native_profiler");
        $__internal_c0ff190541ec912ebff9c2d7e31a3c52b82091c320d0c4331349801f2d882f3b->enter($__internal_c0ff190541ec912ebff9c2d7e31a3c52b82091c320d0c4331349801f2d882f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Nový příspěvek ";
        
        $__internal_c0ff190541ec912ebff9c2d7e31a3c52b82091c320d0c4331349801f2d882f3b->leave($__internal_c0ff190541ec912ebff9c2d7e31a3c52b82091c320d0c4331349801f2d882f3b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f0b9c40fb3836e920a7a06e37778486f2b75660b2f2919e4af84eec6fbb4a4 = $this->env->getExtension("native_profiler");
        $__internal_04f0b9c40fb3836e920a7a06e37778486f2b75660b2f2919e4af84eec6fbb4a4->enter($__internal_04f0b9c40fb3836e920a7a06e37778486f2b75660b2f2919e4af84eec6fbb4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "title", array()), 'row');
        echo "
        ";
        // line 16
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "publishFrom", array()), 'label');
        echo "
        <div class=\"formDate\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "publishFrom", array()), 'widget');
        echo "
        </div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "publishTo", array()), 'label');
        echo "
        <div class=\"formDate\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "publishTo", array()), 'widget');
        echo "
        </div>
        <p>
                <input type=\"checkbox\" id=\"form_post_private\" />
                <label for=\"form_post_private\">Osobni</label>
        </p>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "text", array()), 'row');
        echo "

        <ul class=\"tags\" data-prototype=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                ";
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 33
            echo "                        <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "title", array()), 'row');
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </ul>

        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "files", array()), 'row');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "save", array()), 'row');
        echo "
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'form_end');
        echo "

";
        
        $__internal_04f0b9c40fb3836e920a7a06e37778486f2b75660b2f2919e4af84eec6fbb4a4->leave($__internal_04f0b9c40fb3836e920a7a06e37778486f2b75660b2f2919e4af84eec6fbb4a4_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 35,  129 => 33,  124 => 32,  120 => 30,  115 => 28,  106 => 22,  101 => 20,  96 => 18,  90 => 16,  86 => 14,  81 => 13,  75 => 12,  63 => 10,  52 => 5,  40 => 3,  33 => 1,  31 => 8,  11 => 1,);
    }
}
/* {% extends 'CvutFitBiWT1BlogUiBundle::base.html.twig' %}*/
/* */
/* {% block page_name %}Nový příspěvek{% endblock %}*/
/* */
/* {% block javascript %}*/
/* {% endblock %}*/
/* */
/* {% form_theme form_post '@CvutFitBiWT1BlogUi/Form/checkbox.html.twig' %}*/
/* */
/* {%  block h1 %}Nový příspěvek {% endblock %}*/
/* */
/* {% block body %}*/
/*         {{ form_start(form_post, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*         {{ form_row(form_post.title) }}*/
/*         {#{{ form_row(form_post.author.name) }}#}*/
/*         {{ form_label(form_post.publishFrom) }}*/
/*         <div class="formDate">*/
/*                 {{ form_widget(form_post.publishFrom) }}*/
/*         </div>*/
/*         {{ form_label(form_post.publishTo) }}*/
/*         <div class="formDate">*/
/*                 {{ form_widget(form_post.publishTo) }}*/
/*         </div>*/
/*         <p>*/
/*                 <input type="checkbox" id="form_post_private" />*/
/*                 <label for="form_post_private">Osobni</label>*/
/*         </p>*/
/*         {{ form_row(form_post.text) }}*/
/* */
/*         <ul class="tags" data-prototype="{{ form_widget(form_post.tags.vars.prototype) | e }}">*/
/*                 {# iterate over each existing tag and render its only field: name #}*/
/*                 {% for tag in form_post.tags %}*/
/*                         <li>{{ form_row(tag.title) }}</li>*/
/*                 {% endfor %}*/
/*         </ul>*/
/* */
/*         {{ form_row(form_post.files) }}*/
/*         {{ form_errors(form_post) }}*/
/*         {{ form_row(form_post.save) }}*/
/*         {{ form_end(form_post) }}*/
/* */
/* {% endblock %}*/
