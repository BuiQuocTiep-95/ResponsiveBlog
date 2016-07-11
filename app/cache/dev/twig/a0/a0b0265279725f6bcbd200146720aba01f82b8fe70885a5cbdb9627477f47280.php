<?php

/* CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig */
class __TwigTemplate_57404847f5fd057765d00443409d50019cae81640e7efc9ed0dc24a3e8249fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CvutFitBiWT1BlogUiBundle:Post:detail.html.twig", "CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig", 1);
        $this->blocks = array(
            'page_name' => array($this, 'block_page_name'),
            'formComment' => array($this, 'block_formComment'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CvutFitBiWT1BlogUiBundle:Post:detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21f695b1dae21253acd38f9edf95503285243115119cffb8ce1e333d57912425 = $this->env->getExtension("native_profiler");
        $__internal_21f695b1dae21253acd38f9edf95503285243115119cffb8ce1e333d57912425->enter($__internal_21f695b1dae21253acd38f9edf95503285243115119cffb8ce1e333d57912425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f695b1dae21253acd38f9edf95503285243115119cffb8ce1e333d57912425->leave($__internal_21f695b1dae21253acd38f9edf95503285243115119cffb8ce1e333d57912425_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_ccf25b4007828d9976f754204ad8c34ae168b9153fa2a43651cd6df3dd33d288 = $this->env->getExtension("native_profiler");
        $__internal_ccf25b4007828d9976f754204ad8c34ae168b9153fa2a43651cd6df3dd33d288->enter($__internal_ccf25b4007828d9976f754204ad8c34ae168b9153fa2a43651cd6df3dd33d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Detail příspěvku | Úprava ";
        
        $__internal_ccf25b4007828d9976f754204ad8c34ae168b9153fa2a43651cd6df3dd33d288->leave($__internal_ccf25b4007828d9976f754204ad8c34ae168b9153fa2a43651cd6df3dd33d288_prof);

    }

    // line 5
    public function block_formComment($context, array $blocks = array())
    {
        $__internal_81ae2018a1924da5bcfe35bbeab8d2a3a56a2f980d078fd7154cb07fe3163d9e = $this->env->getExtension("native_profiler");
        $__internal_81ae2018a1924da5bcfe35bbeab8d2a3a56a2f980d078fd7154cb07fe3163d9e->enter($__internal_81ae2018a1924da5bcfe35bbeab8d2a3a56a2f980d078fd7154cb07fe3163d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formComment"));

        // line 6
        echo "        ";
        if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            // line 7
            echo "            <div class=\"commentForm\">
                <h5>Odpoveď</h5>

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
        echo "    ";
        
        $__internal_81ae2018a1924da5bcfe35bbeab8d2a3a56a2f980d078fd7154cb07fe3163d9e->leave($__internal_81ae2018a1924da5bcfe35bbeab8d2a3a56a2f980d078fd7154cb07fe3163d9e_prof);

    }

    public function getTemplateName()
    {
        return "CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  84 => 18,  79 => 16,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'CvutFitBiWT1BlogUiBundle:Post:detail.html.twig' %}*/
/* */
/* {% block page_name %}Detail příspěvku | Úprava {% endblock %}*/
/* */
/*     {% block formComment %}*/
/*         {% if comment.id == id %}*/
/*             <div class="commentForm">*/
/*                 <h5>Odpoveď</h5>*/
/* */
/*                 <form method="post" enctype="multipart/form-data">*/
/*                     {{ form_start(form_comment, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*                     {{ form_row(form_comment.author.name) }}*/
/*                     {{ form_row(form_comment.text) }}*/
/*                     {{ form_widget(form_comment.files[0]) }}*/
/*                     <div class="right-align">*/
/*                         {{ form_widget(form_comment.save) }}*/
/*                     </div>*/
/*                     {{ form_end(form_comment) }}*/
/*                 </form>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/* */
