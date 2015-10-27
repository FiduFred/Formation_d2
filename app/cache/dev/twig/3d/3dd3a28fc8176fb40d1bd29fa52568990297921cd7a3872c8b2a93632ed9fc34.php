<?php

/* ParkBundle:Computer:index.html.twig */
class __TwigTemplate_1f95fa0f2b1800951fa437fae7609babbfa44daf94f79396bb950e3ec26246f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ParkBundle::base.html.twig", "ParkBundle:Computer:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ParkBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91e6562355486083264825048b71637fc4f894afafaac06a4faea8f4825ec4a7 = $this->env->getExtension("native_profiler");
        $__internal_91e6562355486083264825048b71637fc4f894afafaac06a4faea8f4825ec4a7->enter($__internal_91e6562355486083264825048b71637fc4f894afafaac06a4faea8f4825ec4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e6562355486083264825048b71637fc4f894afafaac06a4faea8f4825ec4a7->leave($__internal_91e6562355486083264825048b71637fc4f894afafaac06a4faea8f4825ec4a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5bfa42f94aa01dae3adbe835dccbc210f4c92d97e8630a2a32f67d19dacb48f = $this->env->getExtension("native_profiler");
        $__internal_c5bfa42f94aa01dae3adbe835dccbc210f4c92d97e8630a2a32f67d19dacb48f->enter($__internal_c5bfa42f94aa01dae3adbe835dccbc210f4c92d97e8630a2a32f67d19dacb48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Computer list
";
        
        $__internal_c5bfa42f94aa01dae3adbe835dccbc210f4c92d97e8630a2a32f67d19dacb48f->leave($__internal_c5bfa42f94aa01dae3adbe835dccbc210f4c92d97e8630a2a32f67d19dacb48f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_449315a51d95ae52464a6fc8a2620ba561636255591be4b371677c2b6107b7a5 = $this->env->getExtension("native_profiler");
        $__internal_449315a51d95ae52464a6fc8a2620ba561636255591be4b371677c2b6107b7a5->enter($__internal_449315a51d95ae52464a6fc8a2620ba561636255591be4b371677c2b6107b7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"page-header\">
        <h1>Computer list</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-striped\">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Ip</th>
                        <th>Enabled</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["computers"]) ? $context["computers"] : $this->getContext($context, "computers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["computer"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "ip", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo $this->env->getExtension('park_computer_status_extension')->renderComputerStatus($this->env, $this->getAttribute($context["computer"], "enabled", array()));
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                    <tr>
                        <td colspan=\"6\">No computer found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['computer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>

            </table>
        </div>
    </div>

";
        
        $__internal_449315a51d95ae52464a6fc8a2620ba561636255591be4b371677c2b6107b7a5->leave($__internal_449315a51d95ae52464a6fc8a2620ba561636255591be4b371677c2b6107b7a5_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Computer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  105 => 35,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  82 => 28,  77 => 27,  57 => 9,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ParkBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - Computer list*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div class="page-header">*/
/*         <h1>Computer list</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <table class="table table-striped">*/
/* */
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Name</th>*/
/*                         <th>Ip</th>*/
/*                         <th>Enabled</th>*/
/*                     </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% for computer in computers %}*/
/*                     <tr>*/
/*                         <td>{{ computer.id }}</td>*/
/*                         <td>{{ computer.name }}</td>*/
/*                         <td>{{ computer.ip }}</td>*/
/*                         <td>{{ computer.enabled|computer_status }}</td>*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td colspan="6">No computer found</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
