<?php

/* CvutFitBiWT1BlogUiBundle:Post:update.html.twig */
class __TwigTemplate_834cac5062f997ef5bb80d4e71d7cca5852ba7463c53c283dc4edf83ca42a4d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CvutFitBiWT1BlogUi/Post/new.html.twig", "CvutFitBiWT1BlogUiBundle:Post:update.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CvutFitBiWT1BlogUi/Post/new.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16bd0b32e39411bff5c4c6aea0b0472c87635b338a133cb65b7e3e65272140a9 = $this->env->getExtension("native_profiler");
        $__internal_16bd0b32e39411bff5c4c6aea0b0472c87635b338a133cb65b7e3e65272140a9->enter($__internal_16bd0b32e39411bff5c4c6aea0b0472c87635b338a133cb65b7e3e65272140a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Post:update.html.twig"));

        // line 7
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), array(0 => "@CvutFitBiWT1BlogUi/Form/checkbox.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bd0b32e39411bff5c4c6aea0b0472c87635b338a133cb65b7e3e65272140a9->leave($__internal_16bd0b32e39411bff5c4c6aea0b0472c87635b338a133cb65b7e3e65272140a9_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_056f77202fc4bc517a9cd9d99d26fa50c9faf7902215a63f51f7bade6577453a = $this->env->getExtension("native_profiler");
        $__internal_056f77202fc4bc517a9cd9d99d26fa50c9faf7902215a63f51f7bade6577453a->enter($__internal_056f77202fc4bc517a9cd9d99d26fa50c9faf7902215a63f51f7bade6577453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Úprava příspěvku";
        
        $__internal_056f77202fc4bc517a9cd9d99d26fa50c9faf7902215a63f51f7bade6577453a->leave($__internal_056f77202fc4bc517a9cd9d99d26fa50c9faf7902215a63f51f7bade6577453a_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_3b6243a06262ac7a17d0d0c97ae3ab4b55bb0aac09ec77d6300b1de71cc2981f = $this->env->getExtension("native_profiler");
        $__internal_3b6243a06262ac7a17d0d0c97ae3ab4b55bb0aac09ec77d6300b1de71cc2981f->enter($__internal_3b6243a06262ac7a17d0d0c97ae3ab4b55bb0aac09ec77d6300b1de71cc2981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Úprava příspěvku";
        
        $__internal_3b6243a06262ac7a17d0d0c97ae3ab4b55bb0aac09ec77d6300b1de71cc2981f->leave($__internal_3b6243a06262ac7a17d0d0c97ae3ab4b55bb0aac09ec77d6300b1de71cc2981f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_79edd05ff09fdb89b25283af1270078a9e1858e03988ec6d21a3d92fa33393cc = $this->env->getExtension("native_profiler");
        $__internal_79edd05ff09fdb89b25283af1270078a9e1858e03988ec6d21a3d92fa33393cc->enter($__internal_79edd05ff09fdb89b25283af1270078a9e1858e03988ec6d21a3d92fa33393cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "


    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "title", array()), 'row');
        echo "
    ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "author", array()), "name", array()), 'row');
            echo "#} ";
        }
        // line 16
        echo "    ";
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
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "private", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "text", array()), 'row');
        echo "

    <ul class=\"tags\" data-prototype=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
        ";
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
            echo "            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "title", array()), 'row');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "files", array()), 'row');
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'errors');
        echo "
    <div class=\"right-align\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), "save", array()), 'row');
        echo "
    </div>
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_post"]) ? $context["form_post"] : $this->getContext($context, "form_post")), 'form_end');
        echo "

";
        
        $__internal_79edd05ff09fdb89b25283af1270078a9e1858e03988ec6d21a3d92fa33393cc->leave($__internal_79edd05ff09fdb89b25283af1270078a9e1858e03988ec6d21a3d92fa33393cc_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ed1c779a492d48e31a4313d3da002c093d156f2226f0933d8db89d41f1b6e31a = $this->env->getExtension("native_profiler");
        $__internal_ed1c779a492d48e31a4313d3da002c093d156f2226f0933d8db89d41f1b6e31a->enter($__internal_ed1c779a492d48e31a4313d3da002c093d156f2226f0933d8db89d41f1b6e31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "    <ul>
        ";
        // line 45
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 46
            echo "            <li><a class=\"btn orange darken-1\" href=\"";
            echo $this->env->getExtension('routing')->getPath("new_post");
            echo "\">Nový příspěvek</a></li>
        ";
        }
        // line 48
        echo "        ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()), "empty", array())) {
            // line 49
            echo "            <li><a class=\"btn orange darken-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_files_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Smazat přílohy</a></li>
        ";
        }
        // line 51
        echo "        <li><a class=\"btn orange darken-1\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Smazat příspěvek</a></li>
    </ul>
";
        
        $__internal_ed1c779a492d48e31a4313d3da002c093d156f2226f0933d8db89d41f1b6e31a->leave($__internal_ed1c779a492d48e31a4313d3da002c093d156f2226f0933d8db89d41f1b6e31a_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Post:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 51,  184 => 49,  181 => 48,  175 => 46,  173 => 45,  170 => 44,  164 => 43,  154 => 38,  149 => 36,  144 => 34,  140 => 33,  137 => 32,  128 => 30,  123 => 29,  119 => 27,  114 => 25,  110 => 24,  105 => 22,  100 => 20,  95 => 18,  89 => 16,  83 => 15,  79 => 14,  75 => 13,  70 => 10,  64 => 9,  52 => 5,  40 => 3,  33 => 1,  31 => 7,  11 => 1,);
    }
}
/* {% extends '@CvutFitBiWT1BlogUi/Post/new.html.twig' %}*/
/* */
/* {% block page_name %}Úprava příspěvku{% endblock %}*/
/* */
/* {% block h1 %}Úprava příspěvku{% endblock %}*/
/* */
/* {% form_theme form_post '@CvutFitBiWT1BlogUi/Form/checkbox.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     {{ form_start(form_post, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*     {{ form_row(form_post.title) }}*/
/*     {% if is_granted('ROLE_ADMIN') %} {{ form_row(form_post.author.name) }}#} {% endif %}*/
/*     {{ form_label(form_post.publishFrom) }}*/
/*     <div class="formDate">*/
/*         {{ form_widget(form_post.publishFrom) }}*/
/*     </div>*/
/*     {{ form_label(form_post.publishTo) }}*/
/*     <div class="formDate">*/
/*         {{ form_widget(form_post.publishTo) }}*/
/*     </div>*/
/*     {{ form_row(form_post.private) }}*/
/*     {{ form_row(form_post.text) }}*/
/* */
/*     <ul class="tags" data-prototype="{{ form_widget(form_post.tags.vars.prototype) | e }}">*/
/*         {# iterate over each existing tag and render its only field: name #}*/
/*         {% for tag in form_post.tags %}*/
/*             <li>{{ form_row(tag.title) }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     {{ form_row(form_post.files) }}*/
/*     {{ form_errors(form_post) }}*/
/*     <div class="right-align">*/
/*         {{ form_row(form_post.save) }}*/
/*     </div>*/
/*     {{ form_end(form_post) }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar %}*/
/*     <ul>*/
/*         {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')%}*/
/*             <li><a class="btn orange darken-1" href="{{ path('new_post') }}">Nový příspěvek</a></li>*/
/*         {% endif %}*/
/*         {% if not post.files.empty %}*/
/*             <li><a class="btn orange darken-1" href="{{ path('post_files_delete', {'id': post.id}) }}">Smazat přílohy</a></li>*/
/*         {% endif %}*/
/*         <li><a class="btn orange darken-1" href="{{ path('post_delete', {'id': post.id}) }}">Smazat příspěvek</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
