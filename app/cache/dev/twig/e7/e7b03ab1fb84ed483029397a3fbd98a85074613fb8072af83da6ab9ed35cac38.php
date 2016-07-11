<?php

/* CvutFitBiWT1BlogUiBundle:Comment:update.html.twig */
class __TwigTemplate_f3b2bb0b31d931a74f3b4fc2182904768ccc1e7d158a121de81e9ee2325b380e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CvutFitBiWT1BlogUiBundle:Post:detail.html.twig", "CvutFitBiWT1BlogUiBundle:Comment:update.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'formComment' => array($this, 'block_formComment'),
            'solution' => array($this, 'block_solution'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CvutFitBiWT1BlogUiBundle:Post:detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb15426d0875beb2a176f841ca938dbe4551b59d3a4fd74fcebae76b595dbb0f = $this->env->getExtension("native_profiler");
        $__internal_cb15426d0875beb2a176f841ca938dbe4551b59d3a4fd74fcebae76b595dbb0f->enter($__internal_cb15426d0875beb2a176f841ca938dbe4551b59d3a4fd74fcebae76b595dbb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Comment:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb15426d0875beb2a176f841ca938dbe4551b59d3a4fd74fcebae76b595dbb0f->leave($__internal_cb15426d0875beb2a176f841ca938dbe4551b59d3a4fd74fcebae76b595dbb0f_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_b2f3a4bf116464242a18c95ad64ac50da5a5cf67713bf8404af0977dfb9b8b71 = $this->env->getExtension("native_profiler");
        $__internal_b2f3a4bf116464242a18c95ad64ac50da5a5cf67713bf8404af0977dfb9b8b71->enter($__internal_b2f3a4bf116464242a18c95ad64ac50da5a5cf67713bf8404af0977dfb9b8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Detail příspěvku | Úprava ";
        
        $__internal_b2f3a4bf116464242a18c95ad64ac50da5a5cf67713bf8404af0977dfb9b8b71->leave($__internal_b2f3a4bf116464242a18c95ad64ac50da5a5cf67713bf8404af0977dfb9b8b71_prof);

    }

    // line 5
    public function block_formComment($context, array $blocks = array())
    {
        $__internal_acfcdb72c4c83f0409e4be479905d0ceed324d3c896191c02b98e7e232e136af = $this->env->getExtension("native_profiler");
        $__internal_acfcdb72c4c83f0409e4be479905d0ceed324d3c896191c02b98e7e232e136af->enter($__internal_acfcdb72c4c83f0409e4be479905d0ceed324d3c896191c02b98e7e232e136af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formComment"));

        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            // line 7
            echo "        <div class=\"commentForm\">
            <h5>Úprava komentáře</h5>

            <form method=\"post\" enctype=\"multipart/form-data\">
                ";
            // line 11
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
            echo "
                ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "text", array()), 'row');
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "files", array()), 0, array(), "array"), 'widget');
            echo "
                <div class=\"right-align\">
                    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "save", array()), 'widget');
            echo "
                </div>
                ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), 'form_end');
            echo "
            </form>
        </div>
    ";
        }
        // line 21
        echo "
";
        
        $__internal_acfcdb72c4c83f0409e4be479905d0ceed324d3c896191c02b98e7e232e136af->leave($__internal_acfcdb72c4c83f0409e4be479905d0ceed324d3c896191c02b98e7e232e136af_prof);

    }

    // line 24
    public function block_solution($context, array $blocks = array())
    {
        $__internal_72dc6b5f2504cf519e8a23ad24a1e5d13fb311421d5dc04698e3e27923130343 = $this->env->getExtension("native_profiler");
        $__internal_72dc6b5f2504cf519e8a23ad24a1e5d13fb311421d5dc04698e3e27923130343->enter($__internal_72dc6b5f2504cf519e8a23ad24a1e5d13fb311421d5dc04698e3e27923130343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solution"));

        
        $__internal_72dc6b5f2504cf519e8a23ad24a1e5d13fb311421d5dc04698e3e27923130343->leave($__internal_72dc6b5f2504cf519e8a23ad24a1e5d13fb311421d5dc04698e3e27923130343_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Comment:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  88 => 21,  81 => 17,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'CvutFitBiWT1BlogUiBundle:Post:detail.html.twig' %}*/
/* */
/* {% block page_name %}Detail příspěvku | Úprava {% endblock %}*/
/* */
/* {% block formComment %}*/
/*     {% if comment.id == id %}*/
/*         <div class="commentForm">*/
/*             <h5>Úprava komentáře</h5>*/
/* */
/*             <form method="post" enctype="multipart/form-data">*/
/*                 {{ form_start(form_comment, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*                 {{ form_row(form_comment.text) }}*/
/*                 {{ form_widget(form_comment.files[0]) }}*/
/*                 <div class="right-align">*/
/*                     {{ form_widget(form_comment.save) }}*/
/*                 </div>*/
/*                 {{ form_end(form_comment) }}*/
/*             </form>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block solution %}*/
/* {% endblock %}*/
/* */
