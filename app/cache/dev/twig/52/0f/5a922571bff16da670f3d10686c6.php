<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_520f5a922571bff16da670f3d10686c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attr"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  137 => 29,  134 => 27,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  99 => 20,  93 => 19,  79 => 17,  72 => 16,  55 => 15,  49 => 11,  44 => 9,  40 => 8,  32 => 6,  28 => 5,  23 => 4,  19 => 1,  87 => 18,  75 => 35,  73 => 34,  67 => 30,  65 => 29,  61 => 27,  58 => 26,  50 => 9,  45 => 7,  39 => 5,  36 => 7,  30 => 2,);
    }
}
