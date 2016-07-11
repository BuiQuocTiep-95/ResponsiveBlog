<?php

/* CvutFitBiWT1BlogUiBundle:Angular:index.html.twig */
class __TwigTemplate_5d6c41857aaea0d25b991a7dc796c80425d13691b9be1bcc153eafaa775c5335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaeece6d60fa87d743e3c60f8c8894d7f98586e2011f5e1608d00c7823a1d8e9 = $this->env->getExtension("native_profiler");
        $__internal_aaeece6d60fa87d743e3c60f8c8894d7f98586e2011f5e1608d00c7823a1d8e9->enter($__internal_aaeece6d60fa87d743e3c60f8c8894d7f98586e2011f5e1608d00c7823a1d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Angular:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html ng-app=\"blog\">
\t<head>
\t\t";
        // line 5
        echo "\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"keywords\" content=\"blog\">
\t\t<meta name=\"description\" content=\"BI-WT1\" />
\t\t";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f5e3e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e3e5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f5e3e5c_normalize_1.css");
            // line 11
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t";
            // asset "f5e3e5c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e3e5c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f5e3e5c_modal_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t";
            // asset "f5e3e5c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e3e5c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f5e3e5c_materialize_3.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t";
            // asset "f5e3e5c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e3e5c_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f5e3e5c_main_4.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t";
        } else {
            // asset "f5e3e5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e3e5c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f5e3e5c.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
\t\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef3773e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_angular.min_1.js");
            // line 22
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "ef3773e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_route_2.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "ef3773e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_angular-resources_3.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "ef3773e_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_services_4.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "ef3773e_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_controllers_5.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "ef3773e_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e_app_6.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "ef3773e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef3773e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/ef3773e.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\t\t<title>BI-WT2 | Blog</title>
\t</head>

\t<body>
\t\t<header class=\"navbar-fixed flow-text\">
\t\t\t<nav class=\"teal darken-1\">
\t\t\t\t";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0eebbdf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eebbdf_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/0eebbdf_logo_1.png");
            // line 31
            echo "\t\t\t\t<a href=\"/\"><img alt=\"logo\" class=\"brand-logo left-align\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></a>
\t\t\t\t";
        } else {
            // asset "0eebbdf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eebbdf") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/0eebbdf.png");
            echo "\t\t\t\t<a href=\"/\"><img alt=\"logo\" class=\"brand-logo left-align\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></a>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 33
        echo "\t\t\t</nav>
\t\t</header>

\t\t<div class=\"flow-text\"><h1 class=\"center-align\" >WT2-Blog</h1></div>

\t\t<div class=\"container\" id=\"content\" ng-view>
\t\t</div>

\t\t<footer class=\"container\">
\t\t</footer>
\t</body>
</html>";
        
        $__internal_aaeece6d60fa87d743e3c60f8c8894d7f98586e2011f5e1608d00c7823a1d8e9->leave($__internal_aaeece6d60fa87d743e3c60f8c8894d7f98586e2011f5e1608d00c7823a1d8e9_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Angular:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  131 => 31,  127 => 30,  119 => 24,  75 => 22,  71 => 14,  68 => 13,  36 => 11,  32 => 8,  27 => 5,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html ng-app="blog">*/
/* 	<head>*/
/* 		{# insert meta informations #}*/
/* 		<meta charset="utf-8">*/
/* 		<meta name="keywords" content="blog">*/
/* 		<meta name="description" content="BI-WT1" />*/
/* 		{% stylesheets '@CvutFitBiWT1BlogUiBundle/Resources/public/css/normalize.css'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/css/modal.css' 'bundles/cvutfitbiwt1blogui/css/materialize.css'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/css/main.css' %}*/
/* 		<link rel="stylesheet" href="{{ asset_url }}">*/
/* 		{% endstylesheets %}*/
/* */
/* 		{% javascripts*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/angular.min.js'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/route.js'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/angular-resources.js'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/services.js'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/controllers.js'*/
/* 		'@CvutFitBiWT1BlogUiBundle/Resources/public/js/app.js'*/
/* 		%}*/
/* 		<script type="text/javascript" src="{{ asset_url }}"></script>*/
/* 		{% endjavascripts %}*/
/* 		<title>BI-WT2 | Blog</title>*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		<header class="navbar-fixed flow-text">*/
/* 			<nav class="teal darken-1">*/
/* 				{% image '@CvutFitBiWT1BlogUiBundle/Resources/public/images/logo.png' %}*/
/* 				<a href="/"><img alt="logo" class="brand-logo left-align" src="{{ asset_url }}"/></a>*/
/* 				{% endimage %}*/
/* 			</nav>*/
/* 		</header>*/
/* */
/* 		<div class="flow-text"><h1 class="center-align" >WT2-Blog</h1></div>*/
/* */
/* 		<div class="container" id="content" ng-view>*/
/* 		</div>*/
/* */
/* 		<footer class="container">*/
/* 		</footer>*/
/* 	</body>*/
/* </html>*/
