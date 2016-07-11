<?php

/* CvutFitBiWT1BlogUiBundle:Post:index.html.twig */
class __TwigTemplate_f9d392155ec84ba1942b15f29c86e8c5c76a30e61c95e8109fc73255ec3b9994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CvutFitBiWT1BlogUi/base.html.twig", "CvutFitBiWT1BlogUiBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CvutFitBiWT1BlogUi/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824719d38304602613bcf7df14cc48f177a5fd06c4b79df6171928a8eea7e374 = $this->env->getExtension("native_profiler");
        $__internal_824719d38304602613bcf7df14cc48f177a5fd06c4b79df6171928a8eea7e374->enter($__internal_824719d38304602613bcf7df14cc48f177a5fd06c4b79df6171928a8eea7e374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Post:index.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), array(0 => "@CvutFitBiWT1BlogUi/Form/checkbox.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824719d38304602613bcf7df14cc48f177a5fd06c4b79df6171928a8eea7e374->leave($__internal_824719d38304602613bcf7df14cc48f177a5fd06c4b79df6171928a8eea7e374_prof);

    }

    // line 5
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_68fa01a4a366c710931376f874889f39a1194e2efacf40c0b22259c3951d036d = $this->env->getExtension("native_profiler");
        $__internal_68fa01a4a366c710931376f874889f39a1194e2efacf40c0b22259c3951d036d->enter($__internal_68fa01a4a366c710931376f874889f39a1194e2efacf40c0b22259c3951d036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "WT1 - Blog";
        
        $__internal_68fa01a4a366c710931376f874889f39a1194e2efacf40c0b22259c3951d036d->leave($__internal_68fa01a4a366c710931376f874889f39a1194e2efacf40c0b22259c3951d036d_prof);

    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        $__internal_a92a19e3eb46d9b11b497f60d4b3d708f4869643b0ebbb2ce471c4c94ec64554 = $this->env->getExtension("native_profiler");
        $__internal_a92a19e3eb46d9b11b497f60d4b3d708f4869643b0ebbb2ce471c4c94ec64554->enter($__internal_a92a19e3eb46d9b11b497f60d4b3d708f4869643b0ebbb2ce471c4c94ec64554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo "Příspěvky";
        
        $__internal_a92a19e3eb46d9b11b497f60d4b3d708f4869643b0ebbb2ce471c4c94ec64554->leave($__internal_a92a19e3eb46d9b11b497f60d4b3d708f4869643b0ebbb2ce471c4c94ec64554_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d1664dcb689f635d1269915480dd91ae32a165e895c998ebdf4062c1561f002 = $this->env->getExtension("native_profiler");
        $__internal_2d1664dcb689f635d1269915480dd91ae32a165e895c998ebdf4062c1561f002->enter($__internal_2d1664dcb689f635d1269915480dd91ae32a165e895c998ebdf4062c1561f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "        <div class=\"card blue-grey darken-1 postPreview\">
            <div class=\"card-content flow-text\">
                <h2 class=\"orange-text\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</h2>
                <p class=\"white-text\">autor: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "author", array()), "name", array()), "html", null, true);
            echo "</p>
                <p class=\"white-text\">zveřejněno: ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "publishFrom", array())), "html", null, true);
            echo "</p>
                <p class=\"white-text\">";
            // line 17
            if ($this->getAttribute($context["row"], "private", array())) {
                echo " soukromé
                      ";
            } else {
                // line 18
                echo " veřejné";
            }
            echo "</p>
                <h3 class=\"orange-text\">Obsah</h3>
                <p id=\"";
            // line 20
            echo twig_escape_filter($this->env, ("post" . $this->getAttribute($context["row"], "id", array())), "html", null, true);
            echo "\" class=\"white-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "text", array()), "html", null, true);
            echo "</p>
                <div class=\"card-action right-align\">
                    <a class=\"preview waves-effect waves-teal btn-flat orange-text\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">Náhled</a>
                    <a class=\"waves-effect waves-teal btn-flat orange-text\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_detail", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
            echo "\">Více</a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <div class=\"white-text\" id=\"preview\" title=\"Náhled\">
        <p></p>
    </div>

    ";
        // line 33
        if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > 1)) {
            // line 34
            echo "        <ul class=\"pagination center-align\">
            ";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") != 1)) {
                // line 36
                echo "                <li class=\"waves-effect\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") - 1)))), "html", null, true);
                echo "\"><i class=\"material-icons\">chevron_left</i></a></li>
            ";
            } else {
                // line 38
                echo "                <li class=\"disabled\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") - 1)))), "html", null, true);
                echo "\"><i class=\"material-icons\">chevron_left</i></a></li>
            ";
            }
            // line 40
            echo "
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
                // line 42
                echo "                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") != $context["number"])) {
                    // line 43
                    echo "                    <li class=\"waves-effect\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => $context["number"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["number"], "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 45
                    echo "                    <li class=\"active orange white-text \">";
                    echo twig_escape_filter($this->env, $context["number"], "html", null, true);
                    echo "</li>
                ";
                }
                // line 47
                echo "
                ";
                // line 48
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 49
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") != $context["number"])) {
                        // line 50
                        echo "                        <li class=\"waves-effect\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") + 1)))), "html", null, true);
                        echo "\"><i class=\"material-icons\">chevron_right</i></a></li>
                    ";
                    } else {
                        // line 52
                        echo "                        <li class=\"disabled\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method") + 1)))), "html", null, true);
                        echo "\"><i class=\"material-icons\">chevron_right</i></a></li>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
        </ul>
    ";
        }
        // line 59
        echo "
";
        
        $__internal_2d1664dcb689f635d1269915480dd91ae32a165e895c998ebdf4062c1561f002->leave($__internal_2d1664dcb689f635d1269915480dd91ae32a165e895c998ebdf4062c1561f002_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8910c34fef09f81cdd146298e41a2cf0650ab895b7384a125469c9fa9d11450e = $this->env->getExtension("native_profiler");
        $__internal_8910c34fef09f81cdd146298e41a2cf0650ab895b7384a125469c9fa9d11450e->enter($__internal_8910c34fef09f81cdd146298e41a2cf0650ab895b7384a125469c9fa9d11450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "    <ul>
        ";
        // line 64
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 65
            echo "            <li><a class=\"btn orange darken-1\" href=\"";
            echo $this->env->getExtension('routing')->getPath("new_post");
            echo "\">Nový příspěvek</a></li>
        ";
        }
        // line 67
        echo "    </ul>
    ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'form_start');
        echo "
    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "authors", array()), 'label');
        echo "
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "authors", array()), 'widget');
        echo "
    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "month", array()), 'row');
        echo "
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "tags", array()), 'row');
        echo "
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "private", array()), 'row');
        echo "
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "published", array()), 'row');
        echo "
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'errors');
        echo "
    <div class=\"right-align\">
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "save", array()), 'row');
        echo "
    </div>
    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'form_end');
        echo "
";
        
        $__internal_8910c34fef09f81cdd146298e41a2cf0650ab895b7384a125469c9fa9d11450e->leave($__internal_8910c34fef09f81cdd146298e41a2cf0650ab895b7384a125469c9fa9d11450e_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 79,  292 => 77,  287 => 75,  283 => 74,  279 => 73,  275 => 72,  271 => 71,  267 => 70,  263 => 69,  259 => 68,  256 => 67,  250 => 65,  248 => 64,  245 => 63,  239 => 62,  231 => 59,  226 => 56,  212 => 55,  209 => 54,  203 => 52,  197 => 50,  194 => 49,  192 => 48,  189 => 47,  183 => 45,  175 => 43,  172 => 42,  155 => 41,  152 => 40,  146 => 38,  140 => 36,  138 => 35,  135 => 34,  133 => 33,  126 => 28,  115 => 23,  111 => 22,  104 => 20,  98 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 12,  73 => 11,  70 => 10,  64 => 9,  52 => 7,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }
}
/* {% extends '@CvutFitBiWT1BlogUi/base.html.twig' %}*/
/* */
/* {% form_theme form_filter '@CvutFitBiWT1BlogUi/Form/checkbox.html.twig' %}*/
/* */
/* {% block page_name %}WT1 - Blog{% endblock %}*/
/* */
/* {% block h1 %}Příspěvky{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% for row in posts %}*/
/*         <div class="card blue-grey darken-1 postPreview">*/
/*             <div class="card-content flow-text">*/
/*                 <h2 class="orange-text">{{ row.title }}</h2>*/
/*                 <p class="white-text">autor: {{ row.author.name }}</p>*/
/*                 <p class="white-text">zveřejněno: {{ row.publishFrom | date }}</p>*/
/*                 <p class="white-text">{% if row.private %} soukromé*/
/*                       {% else %} veřejné{% endif %}</p>*/
/*                 <h3 class="orange-text">Obsah</h3>*/
/*                 <p id="{{ "post#{row.id}" }}" class="white-text">{{ row.text }}</p>*/
/*                 <div class="card-action right-align">*/
/*                     <a class="preview waves-effect waves-teal btn-flat orange-text" id="{{ "#{row.id}" }}">Náhled</a>*/
/*                     <a class="waves-effect waves-teal btn-flat orange-text" href="{{ path('post_detail', {'id': row.id}) }}">Více</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="white-text" id="preview" title="Náhled">*/
/*         <p></p>*/
/*     </div>*/
/* */
/*     {% if pages > 1 %}*/
/*         <ul class="pagination center-align">*/
/*             {% if app.request.get('page',1)!=1 %}*/
/*                 <li class="waves-effect"><a href="{{ path('home',app.request.query.all | merge({'page': app.request.get('page',1)-1 })) }}"><i class="material-icons">chevron_left</i></a></li>*/
/*             {% else %}*/
/*                 <li class="disabled"><a href="{{ path('home',app.request.query.all | merge({'page': app.request.get('page',1)-1 })) }}"><i class="material-icons">chevron_left</i></a></li>*/
/*             {% endif %}*/
/* */
/*             {% for number in 1..pages %}*/
/*                 {% if app.request.get('page',1)!=number %}*/
/*                     <li class="waves-effect"><a href="{{ path('home',app.request.query.all | merge({'page': number})) }}">{{ number }}</a></li>*/
/*                 {% else %}*/
/*                     <li class="active orange white-text ">{{ number }}</li>*/
/*                 {% endif %}*/
/* */
/*                 {% if loop.last %}*/
/*                     {% if app.request.get('page',1)!=number %}*/
/*                         <li class="waves-effect"><a href="{{ path('home',app.request.query.all | merge({'page': app.request.get('page',1)+1 })) }}"><i class="material-icons">chevron_right</i></a></li>*/
/*                     {% else %}*/
/*                         <li class="disabled"><a href="{{ path('home',app.request.query.all | merge({'page': app.request.get('page',1)+1 })) }}"><i class="material-icons">chevron_right</i></a></li>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*         </ul>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <ul>*/
/*         {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')%}*/
/*             <li><a class="btn orange darken-1" href="{{ path('new_post') }}">Nový příspěvek</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     {{ form_start(form_filter) }}*/
/*     {{ form_label(form_filter.authors) }}*/
/*     {{ form_widget(form_filter.authors) }}*/
/*     {{ form_row(form_filter.month) }}*/
/*     {{ form_row(form_filter.tags) }}*/
/*     {{ form_row(form_filter.private) }}*/
/*     {{ form_row(form_filter.published) }}*/
/*     {{ form_errors(form_filter) }}*/
/*     <div class="right-align">*/
/*         {{ form_row(form_filter.save) }}*/
/*     </div>*/
/*     {{ form_end(form_filter) }}*/
/* {% endblock %}*/
