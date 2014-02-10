<?php

/* MyAppApBundle:Note:liste.html.twig */
class __TwigTemplate_682c5dfbb07af1244a54c2d529f91869 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notes"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 2
            echo "    <span class=\"dateSpan\"><b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "created"), "d/m/y"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "type"), "html", null, true);
            echo "</b></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "note")), "html", null, true);
            echo "<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Note:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  357 => 126,  353 => 125,  344 => 121,  338 => 119,  334 => 117,  328 => 115,  326 => 114,  320 => 113,  315 => 111,  311 => 110,  307 => 109,  303 => 108,  300 => 107,  295 => 106,  292 => 105,  290 => 104,  283 => 102,  279 => 100,  275 => 98,  271 => 96,  263 => 93,  255 => 91,  253 => 90,  246 => 88,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  226 => 82,  222 => 81,  219 => 80,  217 => 79,  210 => 77,  207 => 76,  204 => 75,  197 => 70,  195 => 69,  187 => 64,  183 => 63,  172 => 57,  168 => 56,  160 => 53,  157 => 52,  150 => 50,  139 => 47,  134 => 46,  127 => 44,  121 => 43,  104 => 29,  100 => 28,  89 => 21,  83 => 16,  79 => 15,  75 => 14,  67 => 13,  64 => 12,  61 => 11,  54 => 9,  51 => 8,  44 => 6,  41 => 5,  36 => 4,  33 => 2,);
    }
}
