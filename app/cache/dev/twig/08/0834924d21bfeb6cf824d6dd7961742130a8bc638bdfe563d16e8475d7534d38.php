<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1cc5e14b34687eccb952bbc4b8b1d20639a513abd2ebc303f7632d466cdc0e65 extends Twig_Template
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
        $__internal_7cd2b4fb53ebea17f40d7b1df71c88d98bcc723ee361eaff8d443779ddd4eec3 = $this->env->getExtension("native_profiler");
        $__internal_7cd2b4fb53ebea17f40d7b1df71c88d98bcc723ee361eaff8d443779ddd4eec3->enter($__internal_7cd2b4fb53ebea17f40d7b1df71c88d98bcc723ee361eaff8d443779ddd4eec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd2b4fb53ebea17f40d7b1df71c88d98bcc723ee361eaff8d443779ddd4eec3->leave($__internal_7cd2b4fb53ebea17f40d7b1df71c88d98bcc723ee361eaff8d443779ddd4eec3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92add9b094bc7e12edd17eaa964de300d0cf7d200d52567659bf82f37dadd2e5 = $this->env->getExtension("native_profiler");
        $__internal_92add9b094bc7e12edd17eaa964de300d0cf7d200d52567659bf82f37dadd2e5->enter($__internal_92add9b094bc7e12edd17eaa964de300d0cf7d200d52567659bf82f37dadd2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_92add9b094bc7e12edd17eaa964de300d0cf7d200d52567659bf82f37dadd2e5->leave($__internal_92add9b094bc7e12edd17eaa964de300d0cf7d200d52567659bf82f37dadd2e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fec93d6f826c10209b914e98cccf57d4ad23bfbec412db331e536568f29c4e0b = $this->env->getExtension("native_profiler");
        $__internal_fec93d6f826c10209b914e98cccf57d4ad23bfbec412db331e536568f29c4e0b->enter($__internal_fec93d6f826c10209b914e98cccf57d4ad23bfbec412db331e536568f29c4e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fec93d6f826c10209b914e98cccf57d4ad23bfbec412db331e536568f29c4e0b->leave($__internal_fec93d6f826c10209b914e98cccf57d4ad23bfbec412db331e536568f29c4e0b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21fa457efc79b7d5a7830ddddd94046ba134f1e6a5a6a0629ebd9000d2eac7da = $this->env->getExtension("native_profiler");
        $__internal_21fa457efc79b7d5a7830ddddd94046ba134f1e6a5a6a0629ebd9000d2eac7da->enter($__internal_21fa457efc79b7d5a7830ddddd94046ba134f1e6a5a6a0629ebd9000d2eac7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_21fa457efc79b7d5a7830ddddd94046ba134f1e6a5a6a0629ebd9000d2eac7da->leave($__internal_21fa457efc79b7d5a7830ddddd94046ba134f1e6a5a6a0629ebd9000d2eac7da_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
