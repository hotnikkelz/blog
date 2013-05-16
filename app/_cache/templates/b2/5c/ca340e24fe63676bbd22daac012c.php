<?php

/* partials/link_next.html */
class __TwigTemplate_b25cca340e24fe63676bbd22daac012c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "    <span class=\"link_next\"><a href=\"";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "url");
            echo "\">";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "page_title");
            echo "</a> &rarr;</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/link_next.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
