<?php

/* CvutFitBiWT1BlogUiBundle:Post:detail.html.twig */
class __TwigTemplate_5a1b00dd86d0edbcf02bfb9a8e103057d9d494c63836826365ea3e972c2062b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CvutFitBiWT1BlogUi/base.html.twig", "CvutFitBiWT1BlogUiBundle:Post:detail.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'solution' => array($this, 'block_solution'),
            'formComment' => array($this, 'block_formComment'),
            'newComment' => array($this, 'block_newComment'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CvutFitBiWT1BlogUi/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6288773fb3aa47d84068e78a6f8bb58451d473b91f2e61ce6ab72159228e85ed = $this->env->getExtension("native_profiler");
        $__internal_6288773fb3aa47d84068e78a6f8bb58451d473b91f2e61ce6ab72159228e85ed->enter($__internal_6288773fb3aa47d84068e78a6f8bb58451d473b91f2e61ce6ab72159228e85ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Post:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6288773fb3aa47d84068e78a6f8bb58451d473b91f2e61ce6ab72159228e85ed->leave($__internal_6288773fb3aa47d84068e78a6f8bb58451d473b91f2e61ce6ab72159228e85ed_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_4b1870cb5a87a5fdf214c21350811ad68afa60e4b00ce92f2a5e7a6a832858ce = $this->env->getExtension("native_profiler");
        $__internal_4b1870cb5a87a5fdf214c21350811ad68afa60e4b00ce92f2a5e7a6a832858ce->enter($__internal_4b1870cb5a87a5fdf214c21350811ad68afa60e4b00ce92f2a5e7a6a832858ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo " ";
        
        $__internal_4b1870cb5a87a5fdf214c21350811ad68afa60e4b00ce92f2a5e7a6a832858ce->leave($__internal_4b1870cb5a87a5fdf214c21350811ad68afa60e4b00ce92f2a5e7a6a832858ce_prof);

    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        $__internal_3480a8a2464c770ec34c175bbd95f8621ccfbe9a9e5c82ec047aa434720965a5 = $this->env->getExtension("native_profiler");
        $__internal_3480a8a2464c770ec34c175bbd95f8621ccfbe9a9e5c82ec047aa434720965a5->enter($__internal_3480a8a2464c770ec34c175bbd95f8621ccfbe9a9e5c82ec047aa434720965a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        echo " Detail příspěvku ";
        
        $__internal_3480a8a2464c770ec34c175bbd95f8621ccfbe9a9e5c82ec047aa434720965a5->leave($__internal_3480a8a2464c770ec34c175bbd95f8621ccfbe9a9e5c82ec047aa434720965a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_78314b1c9e32a50eaf372f8ec5560645c2d0befff8ddd0b95d27aab5625d9a5c = $this->env->getExtension("native_profiler");
        $__internal_78314b1c9e32a50eaf372f8ec5560645c2d0befff8ddd0b95d27aab5625d9a5c->enter($__internal_78314b1c9e32a50eaf372f8ec5560645c2d0befff8ddd0b95d27aab5625d9a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"card blue-grey darken-1\">

        <div class=\"card-content white-text\">

            <div>
                <h2 class=\"orange-text darken-2\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h2>
                <p>autor: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "name", array()), "html", null, true);
        echo "</p>
                <p>zveřejněno: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publishFrom", array())), "html", null, true);
        echo "</p>
                <p>";
        // line 17
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "private", array())) {
            echo " soukromé
                      ";
        } else {
            // line 18
            echo " veřejné";
        }
        echo "</p>
            </div>

            <h3 class=\"orange-text darken-2\">Obsah</h3>
            <p class=\"flow-text\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "text", array()), "html", null, true);
        echo "</p>

            ";
        // line 24
        if ( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()), "empty", array())) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 26
                echo "                    ";
                if ($this->getAttribute($context["file"], "preview", array(), "any", true, true)) {
                    // line 27
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("image", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                    echo "\"><img class=\"img-thumbnail\" alt=\"uploaded image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                    echo "\" /></a>
                    ";
                }
                // line 29
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()), "isEmpty", array())) {
        }
        // line 33
        echo "            <ul id=\"files\">
                ";
        // line 34
        if ( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()), "isEmpty", array())) {
            echo " <li class=\"orange-text darken-2\">Priloha: </li> ";
        }
        // line 35
        echo "                ";
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
            // line 36
            echo "                    <li>
                        <a class=\"light-blue-text\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
            echo "</a>";
            // line 38
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 39
                echo ",
                        ";
            }
            // line 41
            echo "                    </li>

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
        // line 44
        echo "            </ul>
        </div>

    </div>

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 50
            echo "        <div class=\"chip teal lighten-1 white-text\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo " </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        <section id=\"comments\">

        <h4>Komentáře</h4>

        ";
        // line 57
        if (twig_test_empty($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()))) {
            // line 58
            echo "            <p>Žádné komentáře nejsou k dispozici.</p>

        ";
        } else {
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 62
                echo "            <div class=\"card blue-grey lighten-1 white-text comment\">
                <h5 class=\"orange-text darken-3\"> ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "name", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array())), "html", null, true);
                echo " </h5>
                <div class=\"container\"> <p> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
                echo " </p> </div>

                ";
                // line 66
                if ( !$this->getAttribute($this->getAttribute($context["comment"], "files", array()), "isEmpty", array())) {
                    // line 67
                    echo "
                    ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "files", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 69
                        echo "                        ";
                        if ($this->getAttribute($context["file"], "preview", array(), "any", true, true)) {
                            // line 70
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("image", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                            echo "\"><img class=\"img-thumbnail\" alt=\"uploaded image\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                            echo "\" /></a>
                        ";
                        }
                        // line 72
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "
                    <div>
                    ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "files", array()));
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
                        // line 76
                        echo "                        ";
                        $this->displayBlock('solution', $context, $blocks);
                        // line 83
                        echo "                    ";
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
                    // line 84
                    echo "                    </div>
                ";
                }
                // line 86
                echo "
                <div class=\"right commentButtons\">
                    <a class=\"btn\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reply_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Odpovědět</a>
                    <a class=\"btn\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Upravit</a>
                    <a class=\"btn\" href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Smazat</a>
                </div>
            </div>

            ";
                // line 94
                $this->displayBlock('formComment', $context, $blocks);
                // line 96
                echo "
            ";
                // line 97
                if ( !twig_test_empty($this->getAttribute($context["comment"], "children", array()))) {
                    // line 98
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 99
                        echo "                    <div class=\"card blue-grey lighten-1 white-text comment reply\">

                        <h5 class=\"orange-text darken-3\"> ";
                        // line 101
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "author", array()), "name", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "created", array())), "html", null, true);
                        echo " </h5>
                        <p> ";
                        // line 102
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "text", array()), "html", null, true);
                        echo " </p>

                        ";
                        // line 104
                        if ( !$this->getAttribute($this->getAttribute($context["reply"], "files", array()), "isEmpty", array())) {
                            // line 105
                            echo "
                            ";
                            // line 106
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reply"], "files", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                                // line 107
                                echo "                                ";
                                if ($this->getAttribute($context["file"], "preview", array(), "any", true, true)) {
                                    // line 108
                                    echo "                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("image", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                                    echo "\"><img class=\"img-thumbnail\" alt=\"uploaded image\" src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                                    echo "\" /></a>
                                ";
                                }
                                // line 110
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 111
                            echo "
                            <div>
                                ";
                            // line 113
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reply"], "files", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                                // line 114
                                echo "                                    ";
                                if ( !$this->getAttribute($context["file"], "preview", array(), "any", true, true)) {
                                    // line 115
                                    echo "
                                        <a href=\"";
                                    // line 116
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                                    echo "</a>

                                    ";
                                }
                                // line 119
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 120
                            echo "                            </div>
                        ";
                        }
                        // line 122
                        echo "
                        <div class=\"right commentButtons\">
                            <a class=\"btn\" href=\"";
                        // line 124
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                        echo "\">Upravit</a>
                            <a class=\"btn\" href=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                        echo "\">Smazat</a>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "            ";
                }
                // line 130
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
        ";
        }
        // line 134
        echo "
        ";
        // line 135
        $this->displayBlock('newComment', $context, $blocks);
        // line 153
        echo "        </div>
    </section>

";
        
        $__internal_78314b1c9e32a50eaf372f8ec5560645c2d0befff8ddd0b95d27aab5625d9a5c->leave($__internal_78314b1c9e32a50eaf372f8ec5560645c2d0befff8ddd0b95d27aab5625d9a5c_prof);

    }

    // line 76
    public function block_solution($context, array $blocks = array())
    {
        $__internal_1f1a89faa918fd3e1ee3a8c287ded3a0c6d4983e337f2f742fbb96fef4acf675 = $this->env->getExtension("native_profiler");
        $__internal_1f1a89faa918fd3e1ee3a8c287ded3a0c6d4983e337f2f742fbb96fef4acf675->enter($__internal_1f1a89faa918fd3e1ee3a8c287ded3a0c6d4983e337f2f742fbb96fef4acf675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solution"));

        // line 77
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file", array("id" => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "name", array()), "html", null, true);
        echo "</a>";
        // line 78
        if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last", array())) {
            // line 79
            echo ",

                        ";
        }
        // line 82
        echo "                        ";
        
        $__internal_1f1a89faa918fd3e1ee3a8c287ded3a0c6d4983e337f2f742fbb96fef4acf675->leave($__internal_1f1a89faa918fd3e1ee3a8c287ded3a0c6d4983e337f2f742fbb96fef4acf675_prof);

    }

    // line 94
    public function block_formComment($context, array $blocks = array())
    {
        $__internal_a4ec558704d3b45d4072030d5f1ef4f8853d0cf48c0f6cb4ef7f5642bdfac5fd = $this->env->getExtension("native_profiler");
        $__internal_a4ec558704d3b45d4072030d5f1ef4f8853d0cf48c0f6cb4ef7f5642bdfac5fd->enter($__internal_a4ec558704d3b45d4072030d5f1ef4f8853d0cf48c0f6cb4ef7f5642bdfac5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formComment"));

        // line 95
        echo "            ";
        
        $__internal_a4ec558704d3b45d4072030d5f1ef4f8853d0cf48c0f6cb4ef7f5642bdfac5fd->leave($__internal_a4ec558704d3b45d4072030d5f1ef4f8853d0cf48c0f6cb4ef7f5642bdfac5fd_prof);

    }

    // line 135
    public function block_newComment($context, array $blocks = array())
    {
        $__internal_f7e64e611e7588644755f7ee89c5eca7836030781f790529c766f3baee0cd7af = $this->env->getExtension("native_profiler");
        $__internal_f7e64e611e7588644755f7ee89c5eca7836030781f790529c766f3baee0cd7af->enter($__internal_f7e64e611e7588644755f7ee89c5eca7836030781f790529c766f3baee0cd7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newComment"));

        // line 136
        echo "        <div class=\"container\">
        <h5>Přidat nový komentář</h5>

            ";
        // line 139
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "text", array()), 'row');
        echo "
            <div>
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 143
            echo "                    <div class=\"file-path-wrapper\">
                        ";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["file"], 'widget', array("attr" => array("multiple" => "multiple")));
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </div>
            <div class=\"right-align\">
                ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "save", array()), 'row');
        echo "
            </div>
            ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), 'form_end');
        echo "
        ";
        
        $__internal_f7e64e611e7588644755f7ee89c5eca7836030781f790529c766f3baee0cd7af->leave($__internal_f7e64e611e7588644755f7ee89c5eca7836030781f790529c766f3baee0cd7af_prof);

    }

    // line 158
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c27c1f995a288c241ac39d8384c2ce328e192ebeb8804d5a9d1c86f2de453dfe = $this->env->getExtension("native_profiler");
        $__internal_c27c1f995a288c241ac39d8384c2ce328e192ebeb8804d5a9d1c86f2de453dfe->enter($__internal_c27c1f995a288c241ac39d8384c2ce328e192ebeb8804d5a9d1c86f2de453dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 159
        echo "    <ul>
        ";
        // line 160
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo "<li><a class=\"btn orange darken-1\" href=\"";
            echo $this->env->getExtension('routing')->getPath("new_post");
            echo "\">Nový příspěvek</a></li>";
        }
        // line 161
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("edit", (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
            echo "<li><a class=\"btn orange darken-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_update", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Upravit příspěvek</a></li>";
        }
        // line 162
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "files", array()), "empty", array()) && $this->env->getExtension('security')->isGranted("edit", (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))) {
            echo "<li><a class=\"btn orange darken-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_files_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Smazat přílohy</a></li>";
        }
        // line 163
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("edit", (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
            echo "<li><a class=\"btn orange darken-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Smazat příspěvek</a></li>";
        }
        // line 164
        echo "    </ul>

";
        
        $__internal_c27c1f995a288c241ac39d8384c2ce328e192ebeb8804d5a9d1c86f2de453dfe->leave($__internal_c27c1f995a288c241ac39d8384c2ce328e192ebeb8804d5a9d1c86f2de453dfe_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Post:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 164,  613 => 163,  606 => 162,  599 => 161,  593 => 160,  590 => 159,  584 => 158,  575 => 151,  570 => 149,  566 => 147,  557 => 144,  554 => 143,  550 => 142,  545 => 140,  541 => 139,  536 => 136,  530 => 135,  523 => 95,  517 => 94,  510 => 82,  505 => 79,  503 => 78,  497 => 77,  491 => 76,  481 => 153,  479 => 135,  476 => 134,  472 => 132,  457 => 130,  454 => 129,  444 => 125,  440 => 124,  436 => 122,  432 => 120,  426 => 119,  418 => 116,  415 => 115,  412 => 114,  408 => 113,  404 => 111,  398 => 110,  390 => 108,  387 => 107,  383 => 106,  380 => 105,  378 => 104,  373 => 102,  367 => 101,  363 => 99,  358 => 98,  356 => 97,  353 => 96,  351 => 94,  344 => 90,  340 => 89,  336 => 88,  332 => 86,  328 => 84,  314 => 83,  311 => 76,  294 => 75,  290 => 73,  284 => 72,  276 => 70,  273 => 69,  269 => 68,  266 => 67,  264 => 66,  259 => 64,  253 => 63,  250 => 62,  232 => 61,  227 => 58,  225 => 57,  218 => 52,  209 => 50,  205 => 49,  198 => 44,  182 => 41,  178 => 39,  176 => 38,  171 => 37,  168 => 36,  150 => 35,  146 => 34,  143 => 33,  140 => 32,  137 => 31,  134 => 30,  128 => 29,  120 => 27,  117 => 26,  112 => 25,  110 => 24,  105 => 22,  97 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  72 => 8,  66 => 7,  54 => 5,  40 => 3,  11 => 1,);
    }
}
/* {% extends '@CvutFitBiWT1BlogUi/base.html.twig' %}*/
/* */
/* {% block page_name %} {{ post.title }} {% endblock %}*/
/* */
/* {% block h1 %} Detail příspěvku {%  endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="card blue-grey darken-1">*/
/* */
/*         <div class="card-content white-text">*/
/* */
/*             <div>*/
/*                 <h2 class="orange-text darken-2">{{ post.title }}</h2>*/
/*                 <p>autor: {{ post.author.name }}</p>*/
/*                 <p>zveřejněno: {{ post.publishFrom | date }}</p>*/
/*                 <p>{% if post.private %} soukromé*/
/*                       {% else %} veřejné{% endif %}</p>*/
/*             </div>*/
/* */
/*             <h3 class="orange-text darken-2">Obsah</h3>*/
/*             <p class="flow-text">{{ post.text }}</p>*/
/* */
/*             {% if not post.files.empty %}*/
/*                 {% for file in post.files %}*/
/*                     {% if file.preview is defined %}*/
/*                         <a href="{{ path('image',{'id': file.id}) }}"><img class="img-thumbnail" alt="uploaded image" src="{{ path('preview',{'id': file.id}) }}" /></a>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             {% if not post.files.isEmpty %}{% endif %}*/
/*             <ul id="files">*/
/*                 {% if not post.files.isEmpty %} <li class="orange-text darken-2">Priloha: </li> {% endif %}*/
/*                 {% for file in post.files %}*/
/*                     <li>*/
/*                         <a class="light-blue-text" href="{{ path('file',{'id': file.id}) }}">{{ file.name }}</a>*/
/*                         {%- if not loop.last -%}*/
/*                             ,*/
/*                         {% endif %}*/
/*                     </li>*/
/* */
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     {% for tag in post.tags %}*/
/*         <div class="chip teal lighten-1 white-text"> {{ tag.title }} </div>*/
/*     {% endfor %}*/
/* */
/*         <section id="comments">*/
/* */
/*         <h4>Komentáře</h4>*/
/* */
/*         {% if post.comments is empty %}*/
/*             <p>Žádné komentáře nejsou k dispozici.</p>*/
/* */
/*         {% else %}*/
/*         {% for comment in post.comments %}*/
/*             <div class="card blue-grey lighten-1 white-text comment">*/
/*                 <h5 class="orange-text darken-3"> {{ comment.author.name }}, {{ comment.created | date }} </h5>*/
/*                 <div class="container"> <p> {{ comment.text }} </p> </div>*/
/* */
/*                 {% if not comment.files.isEmpty %}*/
/* */
/*                     {% for file in comment.files %}*/
/*                         {% if file.preview is defined %}*/
/*                             <a href="{{ path('image',{'id': file.id}) }}"><img class="img-thumbnail" alt="uploaded image" src="{{ path('preview',{'id': file.id}) }}" /></a>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                     <div>*/
/*                     {% for file in comment.files %}*/
/*                         {% block solution %}*/
/*                             <a href="{{ path('file',{'id': file.id}) }}">{{ file.name }}</a>*/
/*                         {%- if not loop.last -%}*/
/*                             ,*/
/* */
/*                         {%  endif %}*/
/*                         {% endblock %}*/
/*                     {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <div class="right commentButtons">*/
/*                     <a class="btn" href="{{ path('reply_comment', {'id': comment.id}) }}">Odpovědět</a>*/
/*                     <a class="btn" href="{{ path('update_comment', {'id': comment.id}) }}">Upravit</a>*/
/*                     <a class="btn" href="{{ path('delete_comment', {'id': comment.id}) }}">Smazat</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% block formComment %}*/
/*             {% endblock %}*/
/* */
/*             {% if not comment.children is empty %}*/
/*                 {% for reply in comment.children %}*/
/*                     <div class="card blue-grey lighten-1 white-text comment reply">*/
/* */
/*                         <h5 class="orange-text darken-3"> {{ reply.author.name }}, {{ reply.created | date }} </h5>*/
/*                         <p> {{ reply.text }} </p>*/
/* */
/*                         {% if not reply.files.isEmpty %}*/
/* */
/*                             {% for file in reply.files %}*/
/*                                 {% if file.preview is defined %}*/
/*                                     <a href="{{ path('image',{'id': file.id}) }}"><img class="img-thumbnail" alt="uploaded image" src="{{ path('preview',{'id': file.id}) }}" /></a>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* */
/*                             <div>*/
/*                                 {% for file in reply.files %}*/
/*                                     {% if not file.preview is defined %}*/
/* */
/*                                         <a href="{{ path('file',{'id': file.id}) }}">{{ file.name }}</a>*/
/* */
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="right commentButtons">*/
/*                             <a class="btn" href="{{ path('update_comment', {'id': comment.id}) }}">Upravit</a>*/
/*                             <a class="btn" href="{{ path('delete_comment', {'id': comment.id}) }}">Smazat</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*         {% endif %}*/
/* */
/*         {% block newComment %}*/
/*         <div class="container">*/
/*         <h5>Přidat nový komentář</h5>*/
/* */
/*             {{ form_start(form_comment, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*             {{ form_row(form_comment.text) }}*/
/*             <div>*/
/*                 {% for file in form_comment.files %}*/
/*                     <div class="file-path-wrapper">*/
/*                         {{ form_widget(file, {'attr': {'multiple': 'multiple'}}) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="right-align">*/
/*                 {{ form_row(form_comment.save) }}*/
/*             </div>*/
/*             {{ form_end(form_comment) }}*/
/*         {% endblock %}*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <ul>*/
/*         {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')%}<li><a class="btn orange darken-1" href="{{ path('new_post') }}">Nový příspěvek</a></li>{% endif %}*/
/*         {% if is_granted('edit', post) %}<li><a class="btn orange darken-1" href="{{ path('post_update', { 'id': post.id }) }}">Upravit příspěvek</a></li>{% endif %}*/
/*         {% if not post.files.empty and is_granted('edit', post) %}<li><a class="btn orange darken-1" href="{{ path('post_files_delete', {'id': post.id}) }}">Smazat přílohy</a></li>{% endif %}*/
/*         {% if is_granted('edit', post) %}<li><a class="btn orange darken-1" href="{{ path('post_delete', {'id': post.id}) }}">Smazat příspěvek</a></li>{% endif %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
