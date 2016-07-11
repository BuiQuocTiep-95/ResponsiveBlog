<?php

/* ::base.html.twig */
class __TwigTemplate_745cf8cc90e87fe436bae8c0cf0a5ca8d58f170f57864a622a6fadc7ad23c58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a2fd99da8d52b47635a718779b5232b5fb06b5d1c4b4beff3b8afd6d3e31af6 = $this->env->getExtension("native_profiler");
        $__internal_5a2fd99da8d52b47635a718779b5232b5fb06b5d1c4b4beff3b8afd6d3e31af6->enter($__internal_5a2fd99da8d52b47635a718779b5232b5fb06b5d1c4b4beff3b8afd6d3e31af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a2fd99da8d52b47635a718779b5232b5fb06b5d1c4b4beff3b8afd6d3e31af6->leave($__internal_5a2fd99da8d52b47635a718779b5232b5fb06b5d1c4b4beff3b8afd6d3e31af6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f45e3eba59abc9313ce6478b8fe4bde4c7a57bc9158b391b7de45f21e4ae41 = $this->env->getExtension("native_profiler");
        $__internal_08f45e3eba59abc9313ce6478b8fe4bde4c7a57bc9158b391b7de45f21e4ae41->enter($__internal_08f45e3eba59abc9313ce6478b8fe4bde4c7a57bc9158b391b7de45f21e4ae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_08f45e3eba59abc9313ce6478b8fe4bde4c7a57bc9158b391b7de45f21e4ae41->leave($__internal_08f45e3eba59abc9313ce6478b8fe4bde4c7a57bc9158b391b7de45f21e4ae41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f2bff98335ebcb8e3fea40ea5c9d53b4dfb62cf2d7a0184aa3a4dad51146aae = $this->env->getExtension("native_profiler");
        $__internal_4f2bff98335ebcb8e3fea40ea5c9d53b4dfb62cf2d7a0184aa3a4dad51146aae->enter($__internal_4f2bff98335ebcb8e3fea40ea5c9d53b4dfb62cf2d7a0184aa3a4dad51146aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f2bff98335ebcb8e3fea40ea5c9d53b4dfb62cf2d7a0184aa3a4dad51146aae->leave($__internal_4f2bff98335ebcb8e3fea40ea5c9d53b4dfb62cf2d7a0184aa3a4dad51146aae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_815a5871909a36d4776957c37398f4ff401364bfa29a67237bc6c2e1ae525bf3 = $this->env->getExtension("native_profiler");
        $__internal_815a5871909a36d4776957c37398f4ff401364bfa29a67237bc6c2e1ae525bf3->enter($__internal_815a5871909a36d4776957c37398f4ff401364bfa29a67237bc6c2e1ae525bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_815a5871909a36d4776957c37398f4ff401364bfa29a67237bc6c2e1ae525bf3->leave($__internal_815a5871909a36d4776957c37398f4ff401364bfa29a67237bc6c2e1ae525bf3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d80cc95e4ec0b0395c352ec4e1580b715a82bf920d6ce8ba9f8c6813dcf1552 = $this->env->getExtension("native_profiler");
        $__internal_4d80cc95e4ec0b0395c352ec4e1580b715a82bf920d6ce8ba9f8c6813dcf1552->enter($__internal_4d80cc95e4ec0b0395c352ec4e1580b715a82bf920d6ce8ba9f8c6813dcf1552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4d80cc95e4ec0b0395c352ec4e1580b715a82bf920d6ce8ba9f8c6813dcf1552->leave($__internal_4d80cc95e4ec0b0395c352ec4e1580b715a82bf920d6ce8ba9f8c6813dcf1552_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
