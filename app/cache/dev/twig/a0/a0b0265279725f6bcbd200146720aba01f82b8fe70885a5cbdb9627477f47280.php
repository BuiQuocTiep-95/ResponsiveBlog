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
        $__internal_a8c5915cdd89330538123657be7bb28e66a30488acd834b5f0a3f44d70521947 = $this->env->getExtension("native_profiler");
        $__internal_a8c5915cdd89330538123657be7bb28e66a30488acd834b5f0a3f44d70521947->enter($__internal_a8c5915cdd89330538123657be7bb28e66a30488acd834b5f0a3f44d70521947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c5915cdd89330538123657be7bb28e66a30488acd834b5f0a3f44d70521947->leave($__internal_a8c5915cdd89330538123657be7bb28e66a30488acd834b5f0a3f44d70521947_prof);

    }

    // line 3
    public function block_page_name($context, array $blocks = array())
    {
        $__internal_f45c51d8c60ef3e1310e7109bb5f3cd8b08a70589140476a3c078483388737f2 = $this->env->getExtension("native_profiler");
        $__internal_f45c51d8c60ef3e1310e7109bb5f3cd8b08a70589140476a3c078483388737f2->enter($__internal_f45c51d8c60ef3e1310e7109bb5f3cd8b08a70589140476a3c078483388737f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_name"));

        echo "Detail příspěvku | Úprava ";
        
        $__internal_f45c51d8c60ef3e1310e7109bb5f3cd8b08a70589140476a3c078483388737f2->leave($__internal_f45c51d8c60ef3e1310e7109bb5f3cd8b08a70589140476a3c078483388737f2_prof);

    }

    // line 5
    public function block_formComment($context, array $blocks = array())
    {
        $__internal_2aca747f5fd22aa279bcb011cab6674d7c2e74305d8550fac4f42720c281f761 = $this->env->getExtension("native_profiler");
        $__internal_2aca747f5fd22aa279bcb011cab6674d7c2e74305d8550fac4f42720c281f761->enter($__internal_2aca747f5fd22aa279bcb011cab6674d7c2e74305d8550fac4f42720c281f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formComment"));

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
        echo "    ";
        
        $__internal_2aca747f5fd22aa279bcb011cab6674d7c2e74305d8550fac4f42720c281f761->leave($__internal_2aca747f5fd22aa279bcb011cab6674d7c2e74305d8550fac4f42720c281f761_prof);

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
        return array (  87 => 21,  80 => 17,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
