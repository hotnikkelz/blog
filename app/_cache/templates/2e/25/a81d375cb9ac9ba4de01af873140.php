<?php

/* partials/header.html */
class __TwigTemplate_2e25a81d375cb9ac9ba4de01af873140 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description");
        echo "\">
        <meta name=\"author\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/css/normalize.css\">
        <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/css/style.less\">
        <script src=\"";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/js/less.js\"></script>
        <script src=\"js/vendor/modernizr-2.6.2.min.js\"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <div class=\"wrapper\">
                <h1 class=\"site-logo\"><a href=\"";
        // line 29
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">Nooblet's Blog</a></h1>
                <h2 class=\"tagline\">Android Frustrations and Tips</h2>
            </div>
        </header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
