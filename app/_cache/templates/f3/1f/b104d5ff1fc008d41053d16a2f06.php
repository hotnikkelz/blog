<?php

/* partials/nav_articles.html */
class __TwigTemplate_f31fb104d5ff1fc008d41053d16a2f06 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2 class=\"widget__heading\">Archives</h2>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 3
            echo "  ";
            if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children")) {
                // line 4
                echo "  \t<nav class=\"widget__archives\">
\t    <ul>
\t    ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 7
                    echo "\t        <li><a href=\"";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "page_title");
                    echo "</a></li>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 9
                echo "\t    </ul>
\t</nav>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/nav_articles.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
