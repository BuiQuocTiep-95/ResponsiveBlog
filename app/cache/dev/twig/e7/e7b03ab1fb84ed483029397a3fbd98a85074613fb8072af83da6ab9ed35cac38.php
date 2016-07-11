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
        $__internal_a8637902e3a17d6440a849bbbecbbcce7530106952dec80fa8033131a3eec602 = $this->env->getExtension("native_profiler");
        $__internal_a8637902e3a17d6440a849bbbecbbcce7530106952dec80fa8033131a3eec602->enter($__internal_a8637902e3a17d6440a849bbbecbbcce7530106952dec80fa8033131a3eec602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Comment:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8637902e3a17d6440a849bbbecbbcce7530106952dec80fa8033131a3eec602->leave($__internal_a8637902e3a17d6440a849bbbecbbcce7530106952dec80fa8033131a3eec602_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_add72d807590935b2a21c3585c219185bc46bf65118bf1c5471e4cc50153bbc4 = $this->env->getExtension("native_profiler");
        $__internal_add72d807590935b2a21c3585c219185bc46bf65118bf1c5471e4cc50153bbc4->enter($__internal_add72d807590935b2a21c3585c219185bc46bf65118bf1c5471e4cc50153bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Detail příspěvku | Úprava ";
        
        $__internal_add72d807590935b2a21c3585c219185bc46bf65118bf1c5471e4cc50153bbc4->leave($__internal_add72d807590935b2a21c3585c219185bc46bf65118bf1c5471e4cc50153bbc4_prof);

    }

    // line 5
    public function block_formComment($context, array $blocks = array())
    {
        $__internal_e0cf6ace65cc03fe3d42ee953205ca9093063d4eaec2ac6ab172a74d3c84ec51 = $this->env->getExtension("native_profiler");
        $__internal_e0cf6ace65cc03fe3d42ee953205ca9093063d4eaec2ac6ab172a74d3c84ec51->enter($__internal_e0cf6ace65cc03fe3d42ee953205ca9093063d4eaec2ac6ab172a74d3c84ec51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formComment"));

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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "author", array()), "name", array()), 'row');
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "text", array()), 'row');
            echo "
                ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "files", array()), 0, array(), "array"), 'widget');
            echo "
                <div class=\"right-align\">
                    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), "save", array()), 'widget');
            echo "
                </div>
                ";
            // line 18
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_comment"]) ? $context["form_comment"] : $this->getContext($context, "form_comment")), 'form_end');
            echo "
            </form>
        </div>
    ";
        }
        // line 22
        echo "
";
        
        $__internal_e0cf6ace65cc03fe3d42ee953205ca9093063d4eaec2ac6ab172a74d3c84ec51->leave($__internal_e0cf6ace65cc03fe3d42ee953205ca9093063d4eaec2ac6ab172a74d3c84ec51_prof);

    }

    // line 25
    public function block_solution($context, array $blocks = array())
    {
        $__internal_11112233b53808f213a7e62f0a11a3b61b4464b0dafeeb2354f791a085f6b1f3 = $this->env->getExtension("native_profiler");
        $__internal_11112233b53808f213a7e62f0a11a3b61b4464b0dafeeb2354f791a085f6b1f3->enter($__internal_11112233b53808f213a7e62f0a11a3b61b4464b0dafeeb2354f791a085f6b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solution"));

        
        $__internal_11112233b53808f213a7e62f0a11a3b61b4464b0dafeeb2354f791a085f6b1f3->leave($__internal_11112233b53808f213a7e62f0a11a3b61b4464b0dafeeb2354f791a085f6b1f3_prof);

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
        return array (  100 => 25,  92 => 22,  85 => 18,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 {{ form_row(form_comment.author.name) }}*/
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
