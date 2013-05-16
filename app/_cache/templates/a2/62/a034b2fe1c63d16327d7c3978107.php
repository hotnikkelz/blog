<?php

/* partials/list_posts.html */
class __TwigTemplate_a262a034b2fe1c63d16327d7c3978107 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children")) {
                // line 3
                echo " 
    ";
                // line 4
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 5
                    echo "<article>
    <h1 class=\"post-title\"><a href=\"";
                    // line 6
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "page_title");
                    echo "</a></h1>

    <p class=\"meta\">by <a href=\"#\">";
                    // line 8
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "author");
                    echo "</a> on <a href=\"#\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date");
                    echo "</a> with <a href=\"";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">4 comments</a></p>

    ";
                    // line 10
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "intro");
                    echo "
    <a href=\"";
                    // line 11
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\" class=\"readmore\">Read Article →</a>
    
</article>
<hr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 16
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/list_posts.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
