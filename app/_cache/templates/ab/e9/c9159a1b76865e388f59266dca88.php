<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "        <section class=\"main clearfix\">
            <div class=\"wrapper\">
                <div class=\"teasers\">
                    ";
        // line 5
        $this->env->loadTemplate("partials/list_posts.html")->display($context);
        // line 6
        echo "                </div> <!-- /.teasers -->

                ";
        // line 8
        $this->env->loadTemplate("partials/sidebar.html")->display($context);
        // line 9
        echo "            </div>
        </section>

";
        // line 12
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
