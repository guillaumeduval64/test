<?php

/* IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig */
class __TwigTemplate_7af762cc293a1ef60115efec30fc2daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'places_autocomplete_widget' => array($this, 'block_places_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,  87 => 45,  75 => 35,  73 => 34,  67 => 30,  65 => 29,  61 => 27,  58 => 26,  50 => 9,  45 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
