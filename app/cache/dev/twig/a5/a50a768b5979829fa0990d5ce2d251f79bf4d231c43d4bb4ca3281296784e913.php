<?php

/* CvutFitBiWT1BlogUiBundle:Post:delete_files.html.twig */
class __TwigTemplate_4709bad2a736725a9709b69b909afa808e4ca848211185386c277dd6d0e222fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CvutFitBiWT1BlogUiBundle::base.html.twig", "CvutFitBiWT1BlogUiBundle:Post:delete_files.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CvutFitBiWT1BlogUiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b05cbf9e7df56f54e3ec85aa2f2bad72b7b3fec1e2cd34bc641f366805c7e22c = $this->env->getExtension("native_profiler");
        $__internal_b05cbf9e7df56f54e3ec85aa2f2bad72b7b3fec1e2cd34bc641f366805c7e22c->enter($__internal_b05cbf9e7df56f54e3ec85aa2f2bad72b7b3fec1e2cd34bc641f366805c7e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Post:delete_files.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05cbf9e7df56f54e3ec85aa2f2bad72b7b3fec1e2cd34bc641f366805c7e22c->leave($__internal_b05cbf9e7df56f54e3ec85aa2f2bad72b7b3fec1e2cd34bc641f366805c7e22c_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_1b81f2bafc0d6dbca11bdb4f6c92fa8531b5e3e44f9ce95ef848e555c025e7ea = $this->env->getExtension("native_profiler");
        $__internal_1b81f2bafc0d6dbca11bdb4f6c92fa8531b5e3e44f9ce95ef848e555c025e7ea->enter($__internal_1b81f2bafc0d6dbca11bdb4f6c92fa8531b5e3e44f9ce95ef848e555c025e7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Smazání přílohy";
        
        $__internal_1b81f2bafc0d6dbca11bdb4f6c92fa8531b5e3e44f9ce95ef848e555c025e7ea->leave($__internal_1b81f2bafc0d6dbca11bdb4f6c92fa8531b5e3e44f9ce95ef848e555c025e7ea_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_620cc7430e36a4c3a1fa18834c63a944226310048dc247c942db7783521fdc42 = $this->env->getExtension("native_profiler");
        $__internal_620cc7430e36a4c3a1fa18834c63a944226310048dc247c942db7783521fdc42->enter($__internal_620cc7430e36a4c3a1fa18834c63a944226310048dc247c942db7783521fdc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo " Smazání přílohy ";
        
        $__internal_620cc7430e36a4c3a1fa18834c63a944226310048dc247c942db7783521fdc42->leave($__internal_620cc7430e36a4c3a1fa18834c63a944226310048dc247c942db7783521fdc42_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_691ea3ed753207a29454205480b39107c932943b6e962ef367e6b5e4d4ddd3f5 = $this->env->getExtension("native_profiler");
        $__internal_691ea3ed753207a29454205480b39107c932943b6e962ef367e6b5e4d4ddd3f5->enter($__internal_691ea3ed753207a29454205480b39107c932943b6e962ef367e6b5e4d4ddd3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            echo "    <div class=\"card blue-grey darken-1 orange-text darken\">
        <div class=\"card-content\">
            <h4 >";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
            echo "</h4>
            ";
            // line 13
            if ($this->getAttribute($context["file"], "preview", array(), "any", true, true)) {
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("image", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                echo "\"><img class=\"img-thumbnail\" alt=\"uploaded image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                echo "\" /></a>
            ";
            } else {
                // line 16
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                echo "</a>
            ";
            }
            // line 18
            echo "            <div class=\"right-align card-action\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file_delete", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
            echo "\">Smazat</a>
            </div>
        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_691ea3ed753207a29454205480b39107c932943b6e962ef367e6b5e4d4ddd3f5->leave($__internal_691ea3ed753207a29454205480b39107c932943b6e962ef367e6b5e4d4ddd3f5_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6339a3d959d4a3bde813d87b361fb2653c2fdd8156b3bd9677f719ff757fdb6b = $this->env->getExtension("native_profiler");
        $__internal_6339a3d959d4a3bde813d87b361fb2653c2fdd8156b3bd9677f719ff757fdb6b->enter($__internal_6339a3d959d4a3bde813d87b361fb2653c2fdd8156b3bd9677f719ff757fdb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    <ul>
        ";
        // line 29
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 30
            echo "            <li><a class=\"btn orange darken-1\" href=\"";
            echo $this->env->getExtension('routing')->getPath("new_post");
            echo "\">Nový příspěvek</a></li>
        ";
        }
        // line 32
        echo "        <li><a class=\"btn orange darken-1\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_update", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Upravit příspěvek</a></li>
        <li><a class=\"btn orange darken-1\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Smazat příspěvek</a></li>
    </ul>
";
        
        $__internal_6339a3d959d4a3bde813d87b361fb2653c2fdd8156b3bd9677f719ff757fdb6b->leave($__internal_6339a3d959d4a3bde813d87b361fb2653c2fdd8156b3bd9677f719ff757fdb6b_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Post:delete_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 33,  162 => 32,  156 => 30,  154 => 29,  151 => 28,  145 => 27,  137 => 24,  118 => 19,  115 => 18,  107 => 16,  99 => 14,  97 => 13,  91 => 12,  87 => 10,  70 => 9,  67 => 8,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'CvutFitBiWT1BlogUiBundle::base.html.twig' %}*/
/* */
/* {% block page_name %}Smazání přílohy{% endblock %}*/
/* */
/* {% block h1 %} Smazání přílohy {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% for file in post.files %}*/
/*     <div class="card blue-grey darken-1 orange-text darken">*/
/*         <div class="card-content">*/
/*             <h4 >{{ loop.index }}. {{ file.name }}</h4>*/
/*             {% if file.preview is defined %}*/
/*                 <a href="{{ path('image',{'id': file.id}) }}"><img class="img-thumbnail" alt="uploaded image" src="{{ path('preview',{'id': file.id}) }}" /></a>*/
/*             {% else %}*/
/*                 <a href="{{ path('file',{'id': file.id}) }}">{{ file.name }}</a>*/
/*             {% endif %}*/
/*             <div class="right-align card-action">*/
/*                 <a href="{{ path('file_delete', {'id': file.id}) }}">Smazat</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <ul>*/
/*         {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')%}*/
/*             <li><a class="btn orange darken-1" href="{{ path('new_post') }}">Nový příspěvek</a></li>*/
/*         {% endif %}*/
/*         <li><a class="btn orange darken-1" href="{{ path('post_update', {'id': post.id}) }}">Upravit příspěvek</a></li>*/
/*         <li><a class="btn orange darken-1" href="{{ path('post_delete', {'id': post.id}) }}">Smazat příspěvek</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
