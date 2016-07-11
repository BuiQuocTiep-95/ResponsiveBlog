<?php

/* CvutFitBiWT1BlogUiBundle::base.html.twig */
class __TwigTemplate_f044607b3691adaca892d6b0b99f4023c11c188735e1d6d6c7edfe355b65dad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_name' => array($this, 'block_page_name'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9146b68828d2e346137a39c492883e7e701c83b59e419f1ba286b549dead54fe = $this->env->getExtension("native_profiler");
        $__internal_9146b68828d2e346137a39c492883e7e701c83b59e419f1ba286b549dead54fe->enter($__internal_9146b68828d2e346137a39c492883e7e701c83b59e419f1ba286b549dead54fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle::base.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    ";
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"blog\">
    <meta name=\"description\" content=\"BI-WT1\" />

    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cvutfitbiwt1blogui/js/jquery-2.2.0.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cvutfitbiwt1blogui/jquery-ui-1.11.4.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function() {
            \$('select').material_select();
        });
    </script>
    ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "

    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
    <title>";
        // line 46
        $this->displayBlock('page_name', $context, $blocks);
        echo "</title>

</head>

<body>

    <header class=\"navbar-fixed flow-text\">
    ";
        // line 54
        echo "
        <nav class=\"teal darken-1\">
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"> <img id=\"logo\" class=\"brand-logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cvutfitbiwt1blogui/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"> </a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Úvodní stránka</a></li>
                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">O mně</a></li>
                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Kontakty</a></li>
                ";
        // line 62
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            echo " <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Odhlásit</a></li>
                ";
        } else {
            // line 63
            echo " <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Přihlásit</a></li>
                ";
        }
        // line 65
        echo "            </ul>
        </nav>
    </header>

<div class=\"container\" id=\"content\">

    <div class=\"flow-text\">
        <h1 class=\"center-align\" >";
        // line 72
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
    </div>

    <article class=\"content-left flow-text\">
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "    </article>

    <aside class=\"content-right\">
        ";
        // line 81
        $this->displayBlock('sidebar', $context, $blocks);
        // line 83
        echo "    </aside>
</div>

<footer class=\"page-footer blue-grey lighten-2\">
    <div class=\"footer-copyright\">
        <div class=\"container white-text\">
            &copy; Bui Quoc Tiep 2015
        </div>
    </div>
</footer>

</body>

</html>";
        
        $__internal_9146b68828d2e346137a39c492883e7e701c83b59e419f1ba286b549dead54fe->leave($__internal_9146b68828d2e346137a39c492883e7e701c83b59e419f1ba286b549dead54fe_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7d11e5478024c412527309fde61bb65cea53f2eb3671650b7e628d9adb42e47 = $this->env->getExtension("native_profiler");
        $__internal_d7d11e5478024c412527309fde61bb65cea53f2eb3671650b7e628d9adb42e47->enter($__internal_d7d11e5478024c412527309fde61bb65cea53f2eb3671650b7e628d9adb42e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1fec440_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fec440_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1fec440_addTag_1.js");
            // line 19
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "1fec440"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fec440") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1fec440.js");
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c545447_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c545447_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c545447_index_1.js");
            // line 22
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "c545447"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c545447") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c545447.js");
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "40b1005_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40b1005_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/40b1005_materialize_1.js");
            // line 25
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "40b1005"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_40b1005") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/40b1005.js");
            echo "        <script defer src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
        
        $__internal_d7d11e5478024c412527309fde61bb65cea53f2eb3671650b7e628d9adb42e47->leave($__internal_d7d11e5478024c412527309fde61bb65cea53f2eb3671650b7e628d9adb42e47_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c55cadb1a2bd08203cd682c162afcc24c70b79cd8c39e76c11c19b09a726137 = $this->env->getExtension("native_profiler");
        $__internal_6c55cadb1a2bd08203cd682c162afcc24c70b79cd8c39e76c11c19b09a726137->enter($__internal_6c55cadb1a2bd08203cd682c162afcc24c70b79cd8c39e76c11c19b09a726137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "27e1206_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27e1206_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/27e1206_normalize_1.css");
            // line 32
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "27e1206"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27e1206") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/27e1206.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d87370c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d87370c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d87370c_materialize_1.css");
            // line 35
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "d87370c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d87370c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d87370c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e503752_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e503752_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e503752_jquery-ui_1.css");
            // line 38
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "e503752"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e503752") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e503752.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "30696da_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30696da_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/30696da_main_1.css");
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "30696da"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30696da") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/30696da.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        
        $__internal_6c55cadb1a2bd08203cd682c162afcc24c70b79cd8c39e76c11c19b09a726137->leave($__internal_6c55cadb1a2bd08203cd682c162afcc24c70b79cd8c39e76c11c19b09a726137_prof);

    }

    // line 46
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_615807f02c98e6237d95f1c4a41c3232bbd6cc109740bfcc439a8047cf0b83c9 = $this->env->getExtension("native_profiler");
        $__internal_615807f02c98e6237d95f1c4a41c3232bbd6cc109740bfcc439a8047cf0b83c9->enter($__internal_615807f02c98e6237d95f1c4a41c3232bbd6cc109740bfcc439a8047cf0b83c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "BI-WT1 | Blog";
        
        $__internal_615807f02c98e6237d95f1c4a41c3232bbd6cc109740bfcc439a8047cf0b83c9->leave($__internal_615807f02c98e6237d95f1c4a41c3232bbd6cc109740bfcc439a8047cf0b83c9_prof);

    }

    // line 72
    public function block_h1($context, array $blocks = array())
    {
        $__internal_22f00ed8b1e1ac95375fc5773e0f17ad74cc2e0b002d6d73668fa53fb1f73a6d = $this->env->getExtension("native_profiler");
        $__internal_22f00ed8b1e1ac95375fc5773e0f17ad74cc2e0b002d6d73668fa53fb1f73a6d->enter($__internal_22f00ed8b1e1ac95375fc5773e0f17ad74cc2e0b002d6d73668fa53fb1f73a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h1"));

        
        $__internal_22f00ed8b1e1ac95375fc5773e0f17ad74cc2e0b002d6d73668fa53fb1f73a6d->leave($__internal_22f00ed8b1e1ac95375fc5773e0f17ad74cc2e0b002d6d73668fa53fb1f73a6d_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_411633739eba996c68004cc9af80361d35b9aeed31779ed55909d4e411609b07 = $this->env->getExtension("native_profiler");
        $__internal_411633739eba996c68004cc9af80361d35b9aeed31779ed55909d4e411609b07->enter($__internal_411633739eba996c68004cc9af80361d35b9aeed31779ed55909d4e411609b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "        ";
        
        $__internal_411633739eba996c68004cc9af80361d35b9aeed31779ed55909d4e411609b07->leave($__internal_411633739eba996c68004cc9af80361d35b9aeed31779ed55909d4e411609b07_prof);

    }

    // line 81
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_80248f37ed1f9adcd6cb7e73cc6c3fbde19120748592b32067b45af17da2bb30 = $this->env->getExtension("native_profiler");
        $__internal_80248f37ed1f9adcd6cb7e73cc6c3fbde19120748592b32067b45af17da2bb30->enter($__internal_80248f37ed1f9adcd6cb7e73cc6c3fbde19120748592b32067b45af17da2bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 82
        echo "        ";
        
        $__internal_80248f37ed1f9adcd6cb7e73cc6c3fbde19120748592b32067b45af17da2bb30->leave($__internal_80248f37ed1f9adcd6cb7e73cc6c3fbde19120748592b32067b45af17da2bb30_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 82,  355 => 81,  348 => 77,  342 => 76,  331 => 72,  319 => 46,  311 => 43,  297 => 41,  292 => 40,  278 => 38,  273 => 37,  259 => 35,  254 => 34,  240 => 32,  235 => 31,  229 => 30,  222 => 27,  208 => 25,  203 => 24,  189 => 22,  184 => 21,  170 => 19,  165 => 18,  159 => 17,  139 => 83,  137 => 81,  132 => 78,  130 => 76,  123 => 72,  114 => 65,  108 => 63,  101 => 62,  97 => 61,  93 => 60,  89 => 59,  85 => 58,  78 => 56,  74 => 54,  64 => 46,  61 => 45,  59 => 30,  55 => 28,  53 => 17,  43 => 10,  39 => 9,  33 => 5,  28 => 1,);
    }
}
/* <!doctype html>*/
/* <html>*/
/* <head>*/
/*     {# insert meta informations #}*/
/*     <meta charset="utf-8">*/
/*     <meta name="keywords" content="blog">*/
/*     <meta name="description" content="BI-WT1" />*/
/* */
/*     <script type="text/javascript" src="{{ asset('bundles/cvutfitbiwt1blogui/js/jquery-2.2.0.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/cvutfitbiwt1blogui/jquery-ui-1.11.4.custom/jquery-ui.js') }}"></script>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('select').material_select();*/
/*         });*/
/*     </script>*/
/*     {% block javascripts %}*/
/*         {% javascripts 'bundles/cvutfitbiwt1blogui/js/addTag.js' %}*/
/*         <script defer src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         {% javascripts 'bundles/cvutfitbiwt1blogui/js/index.js' %}*/
/*         <script defer src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         {% javascripts '@CvutFitBiWT1BlogUiBundle/Resources/public/js/materialize.js' %}*/
/*         <script defer src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* */
/* */
/*     {% block stylesheets %}*/
/*         {% stylesheets '@CvutFitBiWT1BlogUiBundle/Resources/public/css/normalize.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@CvutFitBiWT1BlogUiBundle/Resources/public/css/materialize.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets 'bundles/cvutfitbiwt1blogui/jquery-ui-1.11.4.custom/jquery-ui.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@CvutFitBiWT1BlogUiBundle/Resources/public/css/main.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     {% endblock %}*/
/* */
/*     <title>{% block page_name %}BI-WT1 | Blog{% endblock %}</title>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <header class="navbar-fixed flow-text">*/
/*     {#logo - use image from img/logo.png using assets. Wrap it in a link with href to homepage#}*/
/* */
/*         <nav class="teal darken-1">*/
/*             <a href="{{ path('home') }}"> <img id="logo" class="brand-logo" src="{{ asset('bundles/cvutfitbiwt1blogui/images/logo.png') }}" alt="logo"> </a>*/
/*             <ul id="nav-mobile" class="right hide-on-med-and-down">*/
/*                 <li><a href="{{ path('home') }}">Úvodní stránka</a></li>*/
/*                 <li><a href="{{ path('home') }}">Blog</a></li>*/
/*                 <li><a href="{{ path('home') }}">O mně</a></li>*/
/*                 <li><a href="{{ path('home') }}">Kontakty</a></li>*/
/*                 {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_USER')%} <li><a href="{{ path('logout') }}">Odhlásit</a></li>*/
/*                 {% else %} <li><a href="{{ path('login') }}">Přihlásit</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/* <div class="container" id="content">*/
/* */
/*     <div class="flow-text">*/
/*         <h1 class="center-align" >{% block h1 %}{% endblock %}</h1>*/
/*     </div>*/
/* */
/*     <article class="content-left flow-text">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </article>*/
/* */
/*     <aside class="content-right">*/
/*         {% block sidebar %}*/
/*         {% endblock %}*/
/*     </aside>*/
/* </div>*/
/* */
/* <footer class="page-footer blue-grey lighten-2">*/
/*     <div class="footer-copyright">*/
/*         <div class="container white-text">*/
/*             &copy; Bui Quoc Tiep 2015*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* </body>*/
/* */
/* </html>*/
