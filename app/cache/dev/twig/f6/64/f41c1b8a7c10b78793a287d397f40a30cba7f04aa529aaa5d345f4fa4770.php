<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f664f41c1b8a7c10b78793a287d397f40a30cba7f04aa529aaa5d345f4fa4770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b90d1f247b7014b9218dc99e03d9cbe9371f7b8a73dc1c26295def8f847ce02 = $this->env->getExtension("native_profiler");
        $__internal_6b90d1f247b7014b9218dc99e03d9cbe9371f7b8a73dc1c26295def8f847ce02->enter($__internal_6b90d1f247b7014b9218dc99e03d9cbe9371f7b8a73dc1c26295def8f847ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b90d1f247b7014b9218dc99e03d9cbe9371f7b8a73dc1c26295def8f847ce02->leave($__internal_6b90d1f247b7014b9218dc99e03d9cbe9371f7b8a73dc1c26295def8f847ce02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03b155210b285fdb303fb66a41bde75b8868b0f9ecb56e7dfca6dd171584303d = $this->env->getExtension("native_profiler");
        $__internal_03b155210b285fdb303fb66a41bde75b8868b0f9ecb56e7dfca6dd171584303d->enter($__internal_03b155210b285fdb303fb66a41bde75b8868b0f9ecb56e7dfca6dd171584303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03b155210b285fdb303fb66a41bde75b8868b0f9ecb56e7dfca6dd171584303d->leave($__internal_03b155210b285fdb303fb66a41bde75b8868b0f9ecb56e7dfca6dd171584303d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a91ccd6b0791cdbea819d9b65efe416c3ab4020a583fc1f365ff683c6d5b0d37 = $this->env->getExtension("native_profiler");
        $__internal_a91ccd6b0791cdbea819d9b65efe416c3ab4020a583fc1f365ff683c6d5b0d37->enter($__internal_a91ccd6b0791cdbea819d9b65efe416c3ab4020a583fc1f365ff683c6d5b0d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a91ccd6b0791cdbea819d9b65efe416c3ab4020a583fc1f365ff683c6d5b0d37->leave($__internal_a91ccd6b0791cdbea819d9b65efe416c3ab4020a583fc1f365ff683c6d5b0d37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87baeb3a1cfce5ac6f94e86fdca19bf44d28d65ecdbd7dcae69c9fc4fd33e77d = $this->env->getExtension("native_profiler");
        $__internal_87baeb3a1cfce5ac6f94e86fdca19bf44d28d65ecdbd7dcae69c9fc4fd33e77d->enter($__internal_87baeb3a1cfce5ac6f94e86fdca19bf44d28d65ecdbd7dcae69c9fc4fd33e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_87baeb3a1cfce5ac6f94e86fdca19bf44d28d65ecdbd7dcae69c9fc4fd33e77d->leave($__internal_87baeb3a1cfce5ac6f94e86fdca19bf44d28d65ecdbd7dcae69c9fc4fd33e77d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
