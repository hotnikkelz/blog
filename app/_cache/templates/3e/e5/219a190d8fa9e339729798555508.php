<?php

/* partials/link_prev.html */
class __TwigTemplate_3ee5219a190d8fa9e339729798555508 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "previous_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "  <span class=\"link_prev\">&larr; <a href=\"";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "url");
            echo "\">";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "page_title");
            echo "</a></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/link_prev.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
