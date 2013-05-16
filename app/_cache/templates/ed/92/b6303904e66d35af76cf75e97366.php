<?php

/* post.html */
class __TwigTemplate_ed92b6303904e66d35af76cf75e97366 extends Twig_Template
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
                <div class=\"single post\">
                    <article>
                        <h1 class=\"post-title\">";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title");
        echo "</h1>

                        <p class=\"meta\">by <a href=\"#\">";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "author");
        echo "</a> on <a href=\"#\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date");
        echo "</a> with <a href=\"\">4 comments</a></p>

                        ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
                        
                        
                    </article>
                    <hr>
                    <div class=\"post-nav\">
                    
                        ";
        // line 17
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings")) {
            // line 18
            echo "                            ";
            $this->env->loadTemplate("partials/link_prev.html")->display($context);
            // line 19
            echo "                            ";
            $this->env->loadTemplate("partials/link_next.html")->display($context);
            // line 20
            echo "                        ";
        }
        // line 21
        echo "                        
                    </div>
                </div>

                ";
        // line 25
        $this->env->loadTemplate("partials/sidebar.html")->display($context);
        // line 26
        echo "            </div>
        </section>
        

        
        

";
        // line 33
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
