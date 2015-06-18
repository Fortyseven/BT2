<?php

/* header_menu.html */
class __TwigTemplate_d2967a606e854ce724a0e8db2928599f066e1b5add791bb2b7d8e273916435f1 extends Twig_Template
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
        $__internal_82150c97047f23c744c73e63a696832826e38bec7362b27a2be92aeb1f8725ae = $this->env->getExtension("native_profiler");
        $__internal_82150c97047f23c744c73e63a696832826e38bec7362b27a2be92aeb1f8725ae->enter($__internal_82150c97047f23c744c73e63a696832826e38bec7362b27a2be92aeb1f8725ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header_menu.html"));

        // line 1
        echo "<div id=\"HeaderMenu\">
    <div id=\"HeaderMenuContainer\">
        <div id=\"HeaderMenuLogo\"><img style=\"vertical-align: top\" src=\"/images/logo512.png\"></div>
        <ul>
            <li id=\"MenuGames\"><a href=\"games\">Games</a></li>
            <li id=\"MenuWeb\" class=\"selected\"><a href=\"web\">Web</a></li>
            <li id=\"MenuMobile\"><a href=\"mobile\">Mobile</a></li>
            <li id=\"MenuOther\"><a href=\"other\">Other</a></li>
            <li id=\"MenuBlog\"><a href=\"http://bytestemplar.blogspot.com/\">Blog</a></li>
            <li id=\"MenuAbout\"><a href=\"about\">About</a></li>
        </ul>
    </div>
</div>";
        
        $__internal_82150c97047f23c744c73e63a696832826e38bec7362b27a2be92aeb1f8725ae->leave($__internal_82150c97047f23c744c73e63a696832826e38bec7362b27a2be92aeb1f8725ae_prof);

    }

    public function getTemplateName()
    {
        return "header_menu.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
