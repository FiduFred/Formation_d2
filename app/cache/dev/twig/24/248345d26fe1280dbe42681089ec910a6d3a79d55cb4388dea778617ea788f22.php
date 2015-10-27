<?php

/* ParkBundle:Computer:Status/index.html.twig */
class __TwigTemplate_1f371278d365304292b095ed72c98026e6a6e69333f173f6a1f6a675276ce66b extends Twig_Template
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
        $__internal_5f8c89faf3fb4e894d7313419bad7862797be4924d9f128d2b6e3fed26769550 = $this->env->getExtension("native_profiler");
        $__internal_5f8c89faf3fb4e894d7313419bad7862797be4924d9f128d2b6e3fed26769550->enter($__internal_5f8c89faf3fb4e894d7313419bad7862797be4924d9f128d2b6e3fed26769550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:Status/index.html.twig"));

        // line 1
        echo "<span class=\"glyphicon glyphicon-";
        echo (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) ? ("ok") : ("remove"));
        echo " color-";
        echo (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) ? ("green") : ("red"));
        echo "\" aria-hidden=\"true\"></span>


";
        
        $__internal_5f8c89faf3fb4e894d7313419bad7862797be4924d9f128d2b6e3fed26769550->leave($__internal_5f8c89faf3fb4e894d7313419bad7862797be4924d9f128d2b6e3fed26769550_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Computer:Status/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="glyphicon glyphicon-{{ status ? 'ok' : 'remove' }} color-{{ status ? 'green' : 'red' }}" aria-hidden="true"></span>*/
/* */
/* */
/* */
