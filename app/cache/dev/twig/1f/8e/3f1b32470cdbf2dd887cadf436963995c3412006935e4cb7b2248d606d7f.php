<?php

/* SiteBundle:AppEntry:index.html.twig */
class __TwigTemplate_1f8e3f1b32470cdbf2dd887cadf436963995c3412006935e4cb7b2248d606d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SiteBundle:AppEntry:index.html.twig", 1);
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
        $__internal_232504dd210cebba002d966da3259c2c41ac43c0f81feba17d7ec8eef8216547 = $this->env->getExtension("native_profiler");
        $__internal_232504dd210cebba002d966da3259c2c41ac43c0f81feba17d7ec8eef8216547->enter($__internal_232504dd210cebba002d966da3259c2c41ac43c0f81feba17d7ec8eef8216547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:AppEntry:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232504dd210cebba002d966da3259c2c41ac43c0f81feba17d7ec8eef8216547->leave($__internal_232504dd210cebba002d966da3259c2c41ac43c0f81feba17d7ec8eef8216547_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_828fd0bfbe0a7a7460ba4a9e09a09ff4970a133aa181f963961398221e4322ac = $this->env->getExtension("native_profiler");
        $__internal_828fd0bfbe0a7a7460ba4a9e09a09ff4970a133aa181f963961398221e4322ac->enter($__internal_828fd0bfbe0a7a7460ba4a9e09a09ff4970a133aa181f963961398221e4322ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"AdminAppNewEntryBtn\" class=\"button\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("appentry_new");
        echo "\">Create a new entry</a>
    </div>
    <h1>Applications</h1>

    <div id=\"AdminAppList\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "            <div class=\"card entry\">
                <div style=\"float:right\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "entrytype", array()), "name", array()), "html", null, true);
            echo "</div>
                <div><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("appentry_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></div>
                <div class=\"name\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo " <span>(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "shortName", array()), "html", null, true);
            echo ")</span></div>
                <div>";
            // line 15
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["entity"], "description", array()), 0, 40) . "..."), "html", null, true);
            echo "</div>
                <div>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "extra", array()), "html", null, true);
            echo "</div>
                <div>";
            // line 17
            if ($this->getAttribute($context["entity"], "releaseDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "releaseDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</div>

                <div class=\"links\">
                    ";
            // line 20
            if (($this->getAttribute($this->getAttribute($context["entity"], "links", array()), "count", array()) > 0)) {
                // line 21
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "links", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 22
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "description", array()), "html", null, true);
                    echo "</a></li>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
            } else {
                // line 26
                echo "                        No links.
                    ";
            }
            // line 28
            echo "                </div>

                <div class=\"options\">
                    <div class=\"button\" ><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("appentry_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a></div>
                    <div class=\"button\" ><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("appentry_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a></div>
                </div>
                <div class=\"clear\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    </div>
";
        
        $__internal_828fd0bfbe0a7a7460ba4a9e09a09ff4970a133aa181f963961398221e4322ac->leave($__internal_828fd0bfbe0a7a7460ba4a9e09a09ff4970a133aa181f963961398221e4322ac_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:AppEntry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  125 => 32,  121 => 31,  116 => 28,  112 => 26,  109 => 25,  97 => 22,  92 => 21,  90 => 20,  82 => 17,  78 => 16,  74 => 15,  68 => 14,  62 => 13,  58 => 12,  55 => 11,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
