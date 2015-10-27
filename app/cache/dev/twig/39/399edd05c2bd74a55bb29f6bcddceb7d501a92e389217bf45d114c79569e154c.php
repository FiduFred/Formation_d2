<?php

/* ::menu.html.twig */
class __TwigTemplate_6397db696d15df166503bce6bde498ac788161ac05a0a6455614a806bfde284f extends Twig_Template
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
        $__internal_34c921a6edc2223f7474bad663e67878a91c9f8019e33115f2c6c004fedaf435 = $this->env->getExtension("native_profiler");
        $__internal_34c921a6edc2223f7474bad663e67878a91c9f8019e33115f2c6c004fedaf435->enter($__internal_34c921a6edc2223f7474bad663e67878a91c9f8019e33115f2c6c004fedaf435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">

    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Home</a>
    </li>

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Computers <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("computer_debug");
        echo "\">Debug</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">List</a></li>
        </ul>
    </li>

</ul>
";
        
        $__internal_34c921a6edc2223f7474bad663e67878a91c9f8019e33115f2c6c004fedaf435->leave($__internal_34c921a6edc2223f7474bad663e67878a91c9f8019e33115f2c6c004fedaf435_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 10,  27 => 4,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* */
/*     <li>*/
/*         <a href="{{ path('app_homepage') }}"><span class="glyphicon glyphicon-home"></span> Home</a>*/
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computers <span class="caret"></span></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('computer_debug') }}">Debug</a></li>*/
/*             <li><a href="{{ path('computer') }}">List</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
