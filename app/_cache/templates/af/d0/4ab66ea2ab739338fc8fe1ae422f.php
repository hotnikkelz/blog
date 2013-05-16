<?php

/* partials/sidebar.html */
class __TwigTemplate_afd04ab66ea2ab739338fc8fe1ae422f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"sidebar\">
    <div class=\"widget\">
        ";
        // line 3
        $this->env->loadTemplate("partials/nav_articles.html")->display($context);
        // line 4
        echo "    </div>
    
</aside>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
