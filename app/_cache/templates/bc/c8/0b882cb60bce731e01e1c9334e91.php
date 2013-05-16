<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
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
        echo "        <section class=\"main\">
            <div class=\"wrapper\">
                <h1>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title");
        echo "</h1>
                <div class=\"teasers\">
                    ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
                </div> <!-- /.teasers -->

                <aside class=\"widget archives\">
                    <h2 class=\"widget__heading\">Contact Me</h2>
                    <p>Email:";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "</p>
                    <p>G+:plus/google/akini</p>
                    <p>Facebook: facebook.com/akini</p>
                </aside>
            </div>
        </section>

";
        // line 18
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
