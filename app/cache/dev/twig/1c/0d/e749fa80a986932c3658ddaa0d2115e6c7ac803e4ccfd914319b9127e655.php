<?php

/* SiteBundle:AppEntry:show.html.twig */
class __TwigTemplate_1c0de749fa80a986932c3658ddaa0d2115e6c7ac803e4ccfd914319b9127e655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SiteBundle:AppEntry:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e7d830888916072db67e102b2f8c6febeb2801768b69d310ec83245a82be654 = $this->env->getExtension("native_profiler");
        $__internal_6e7d830888916072db67e102b2f8c6febeb2801768b69d310ec83245a82be654->enter($__internal_6e7d830888916072db67e102b2f8c6febeb2801768b69d310ec83245a82be654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:AppEntry:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e7d830888916072db67e102b2f8c6febeb2801768b69d310ec83245a82be654->leave($__internal_6e7d830888916072db67e102b2f8c6febeb2801768b69d310ec83245a82be654_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0ab14f1ffd7aeffa43bed04cb2c30f1fcd010ae334626fa72d1350a231d768 = $this->env->getExtension("native_profiler");
        $__internal_ed0ab14f1ffd7aeffa43bed04cb2c30f1fcd010ae334626fa72d1350a231d768->enter($__internal_ed0ab14f1ffd7aeffa43bed04cb2c30f1fcd010ae334626fa72d1350a231d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AppEntry</h1>

    <div id=\"AppEntry_View\">
        <div class=\"view_row\">
            <div class=\"label\">Id</div>
            <div class=\"value\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"view_row\">
            <div class=\"label\">Type</div>
            <div class=\"value\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entrytype", array()), "name", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"view_row\">
            <div class=\"label\">Name</div>
            <div class=\"value\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"view_row\">
            <div class=\"label\">Short Name</div>
            <div class=\"value\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shortName", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"view_row\">
            <div class=\"label\">Description</div>
            <div class=\"value\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 27
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "extra", array())) {
            // line 28
            echo "            <div class=\"view_row\">
                <div class=\"label\">Extra</div>
                <div class=\"value\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "extra", array()), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"view_row\">
            <div class=\"label\">Release Date</div>
            ";
        // line 35
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "releasedate", array())) {
            // line 36
            echo "                <div class=\"value\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "releaseDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 38
            echo "                <div class=\"value\">TBA</div>
            ";
        }
        // line 40
        echo "        </div>
    </div>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("appentry");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("appentry_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
        
        $__internal_ed0ab14f1ffd7aeffa43bed04cb2c30f1fcd010ae334626fa72d1350a231d768->leave($__internal_ed0ab14f1ffd7aeffa43bed04cb2c30f1fcd010ae334626fa72d1350a231d768_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:AppEntry:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  123 => 50,  115 => 45,  108 => 40,  104 => 38,  98 => 36,  96 => 35,  92 => 33,  86 => 30,  82 => 28,  80 => 27,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
