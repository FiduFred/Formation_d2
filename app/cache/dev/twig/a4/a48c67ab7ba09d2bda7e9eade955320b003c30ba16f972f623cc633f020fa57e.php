<?php

/* ParkBundle::base.html.twig */
class __TwigTemplate_385ef4e232fad6774ef27713f60bc0cc9419fb032ca48e3ac7fe339519ab750d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d606fdcfcea0e0023ed78a47bd97e7efaf6db8de4658de29dd3e26975565cff = $this->env->getExtension("native_profiler");
        $__internal_9d606fdcfcea0e0023ed78a47bd97e7efaf6db8de4658de29dd3e26975565cff->enter($__internal_9d606fdcfcea0e0023ed78a47bd97e7efaf6db8de4658de29dd3e26975565cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d606fdcfcea0e0023ed78a47bd97e7efaf6db8de4658de29dd3e26975565cff->leave($__internal_9d606fdcfcea0e0023ed78a47bd97e7efaf6db8de4658de29dd3e26975565cff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46e20ef45cd4cbe3d9f038cd6189b5ff39310410b27c9540755a131a5d7fff4b = $this->env->getExtension("native_profiler");
        $__internal_46e20ef45cd4cbe3d9f038cd6189b5ff39310410b27c9540755a131a5d7fff4b->enter($__internal_46e20ef45cd4cbe3d9f038cd6189b5ff39310410b27c9540755a131a5d7fff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Manage Park
";
        
        $__internal_46e20ef45cd4cbe3d9f038cd6189b5ff39310410b27c9540755a131a5d7fff4b->leave($__internal_46e20ef45cd4cbe3d9f038cd6189b5ff39310410b27c9540755a131a5d7fff4b_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - Manage Park*/
/* {% endblock %}*/
