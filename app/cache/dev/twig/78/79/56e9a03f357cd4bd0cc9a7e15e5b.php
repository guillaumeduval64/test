<?php

/* IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig */
class __TwigTemplate_787956e9a03f357cd4bd0cc9a7e15e5b extends Twig_Template
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
        echo $this->getContext($context, "html");
        echo "
    ";
        // line 3
        echo $this->getContext($context, "javascripts");
        echo "
";
    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,  87 => 32,  75 => 22,  73 => 21,  70 => 20,  68 => 19,  61 => 16,  52 => 10,  47 => 8,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
