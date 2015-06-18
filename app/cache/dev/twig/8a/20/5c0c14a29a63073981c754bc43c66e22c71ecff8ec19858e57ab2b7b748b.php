<?php

/* ::base.html.twig */
class __TwigTemplate_8a205c0c14a29a63073981c754bc43c66e22c71ecff8ec19858e57ab2b7b748b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21a06b964959906a40b33125ca003a62efadc86d239bf93f4fa9677466e0a448 = $this->env->getExtension("native_profiler");
        $__internal_21a06b964959906a40b33125ca003a62efadc86d239bf93f4fa9677466e0a448->enter($__internal_21a06b964959906a40b33125ca003a62efadc86d239bf93f4fa9677466e0a448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <link rel=\"stylesheet\" href=\"/bower_components/bootstrap/dist/css/bootstrap.min.css\"/>

    <link rel=\"stylesheet\" href=\"/css/main.css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"/css/mobile.css\" media=\"screen and (max-width:700px)\"/>
    <link rel=\"stylesheet\" href=\"/css/desktop.css\" media=\"screen and (min-width:701px)\"/>

    <link rel=\"icon\" href=\"/images/favicon.png\" sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"/images/favicon.png\" sizes=\"48x48\"/>

</head>
<body>
    ";
        // line 18
        echo twig_include($this->env, $context, "header_menu.html");
        echo "
    <div id=\"Content\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo twig_include($this->env, $context, "footer.html");
        echo "
</body>
</html>
";
        
        $__internal_21a06b964959906a40b33125ca003a62efadc86d239bf93f4fa9677466e0a448->leave($__internal_21a06b964959906a40b33125ca003a62efadc86d239bf93f4fa9677466e0a448_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ecc749ed5a741aaf673c9a24a763d3c7159be49f2fe7614bee41cae841aeb13 = $this->env->getExtension("native_profiler");
        $__internal_9ecc749ed5a741aaf673c9a24a763d3c7159be49f2fe7614bee41cae841aeb13->enter($__internal_9ecc749ed5a741aaf673c9a24a763d3c7159be49f2fe7614bee41cae841aeb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bytes Templar";
        
        $__internal_9ecc749ed5a741aaf673c9a24a763d3c7159be49f2fe7614bee41cae841aeb13->leave($__internal_9ecc749ed5a741aaf673c9a24a763d3c7159be49f2fe7614bee41cae841aeb13_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05d031815755c219e9b129b5063ece97714ad9d726358791b218d7e4d4f6dcf = $this->env->getExtension("native_profiler");
        $__internal_d05d031815755c219e9b129b5063ece97714ad9d726358791b218d7e4d4f6dcf->enter($__internal_d05d031815755c219e9b129b5063ece97714ad9d726358791b218d7e4d4f6dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_d05d031815755c219e9b129b5063ece97714ad9d726358791b218d7e4d4f6dcf->leave($__internal_d05d031815755c219e9b129b5063ece97714ad9d726358791b218d7e4d4f6dcf_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54b409743e25fea3fec629471004cd1ed3f04901df7e067dd361bdc53ca9d2e7 = $this->env->getExtension("native_profiler");
        $__internal_54b409743e25fea3fec629471004cd1ed3f04901df7e067dd361bdc53ca9d2e7->enter($__internal_54b409743e25fea3fec629471004cd1ed3f04901df7e067dd361bdc53ca9d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2169e10_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2169e10_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2169e10_jquery.min_1.js");
            // line 25
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "2169e10_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2169e10_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2169e10_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "2169e10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2169e10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2169e10.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
        
        $__internal_54b409743e25fea3fec629471004cd1ed3f04901df7e067dd361bdc53ca9d2e7->leave($__internal_54b409743e25fea3fec629471004cd1ed3f04901df7e067dd361bdc53ca9d2e7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 27,  107 => 25,  102 => 24,  96 => 23,  89 => 21,  83 => 20,  71 => 5,  59 => 28,  57 => 23,  54 => 22,  52 => 20,  47 => 18,  31 => 5,  25 => 1,);
    }
}
