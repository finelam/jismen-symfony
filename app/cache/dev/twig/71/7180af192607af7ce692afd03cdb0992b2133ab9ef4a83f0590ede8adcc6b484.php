<?php

/* base.html.twig */
class __TwigTemplate_7bf17f032cf5b5ddbafff15b9637edab0b0558a63eaa58ff912160bb6e00a87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09990792a370e60058d24c83a003a7617729bbef6320ae81fa4ed55f1d4ce807 = $this->env->getExtension("native_profiler");
        $__internal_09990792a370e60058d24c83a003a7617729bbef6320ae81fa4ed55f1d4ce807->enter($__internal_09990792a370e60058d24c83a003a7617729bbef6320ae81fa4ed55f1d4ce807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_09990792a370e60058d24c83a003a7617729bbef6320ae81fa4ed55f1d4ce807->leave($__internal_09990792a370e60058d24c83a003a7617729bbef6320ae81fa4ed55f1d4ce807_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d94c499d0d30c3d420f93f8e9fdac32052addaf299486c3b07063894ab0f5e = $this->env->getExtension("native_profiler");
        $__internal_03d94c499d0d30c3d420f93f8e9fdac32052addaf299486c3b07063894ab0f5e->enter($__internal_03d94c499d0d30c3d420f93f8e9fdac32052addaf299486c3b07063894ab0f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03d94c499d0d30c3d420f93f8e9fdac32052addaf299486c3b07063894ab0f5e->leave($__internal_03d94c499d0d30c3d420f93f8e9fdac32052addaf299486c3b07063894ab0f5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55ee7bb816ed896ec543b9d1dd40e3d0050fea32c48633277aa48c741d860fd0 = $this->env->getExtension("native_profiler");
        $__internal_55ee7bb816ed896ec543b9d1dd40e3d0050fea32c48633277aa48c741d860fd0->enter($__internal_55ee7bb816ed896ec543b9d1dd40e3d0050fea32c48633277aa48c741d860fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55ee7bb816ed896ec543b9d1dd40e3d0050fea32c48633277aa48c741d860fd0->leave($__internal_55ee7bb816ed896ec543b9d1dd40e3d0050fea32c48633277aa48c741d860fd0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e695bcc1d7ee802ee64e31e1be928c7de72352b44630f37675558088fd94a729 = $this->env->getExtension("native_profiler");
        $__internal_e695bcc1d7ee802ee64e31e1be928c7de72352b44630f37675558088fd94a729->enter($__internal_e695bcc1d7ee802ee64e31e1be928c7de72352b44630f37675558088fd94a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e695bcc1d7ee802ee64e31e1be928c7de72352b44630f37675558088fd94a729->leave($__internal_e695bcc1d7ee802ee64e31e1be928c7de72352b44630f37675558088fd94a729_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_786e5bffda9c641f46baef8f409bcc4d652ff937b1296d4a9074f5e7c660224e = $this->env->getExtension("native_profiler");
        $__internal_786e5bffda9c641f46baef8f409bcc4d652ff937b1296d4a9074f5e7c660224e->enter($__internal_786e5bffda9c641f46baef8f409bcc4d652ff937b1296d4a9074f5e7c660224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_786e5bffda9c641f46baef8f409bcc4d652ff937b1296d4a9074f5e7c660224e->leave($__internal_786e5bffda9c641f46baef8f409bcc4d652ff937b1296d4a9074f5e7c660224e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
