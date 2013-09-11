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
        return array (  31 => 3,  26 => 2,  20 => 1,  441 => 152,  438 => 151,  434 => 150,  431 => 149,  426 => 146,  422 => 143,  419 => 142,  415 => 138,  412 => 137,  407 => 134,  404 => 133,  400 => 131,  391 => 128,  388 => 127,  383 => 126,  380 => 125,  373 => 120,  370 => 119,  366 => 72,  363 => 71,  357 => 4,  345 => 159,  341 => 158,  335 => 156,  333 => 155,  329 => 153,  326 => 151,  324 => 149,  318 => 146,  314 => 144,  312 => 142,  307 => 139,  305 => 137,  302 => 136,  300 => 133,  297 => 132,  295 => 125,  292 => 124,  290 => 119,  277 => 109,  273 => 107,  262 => 104,  258 => 102,  254 => 101,  242 => 94,  235 => 92,  228 => 90,  222 => 89,  215 => 87,  208 => 85,  201 => 83,  194 => 81,  187 => 79,  179 => 73,  177 => 71,  146 => 47,  122 => 25,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  29 => 1,  87 => 45,  75 => 35,  73 => 34,  67 => 30,  65 => 18,  61 => 13,  58 => 26,  50 => 9,  45 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
