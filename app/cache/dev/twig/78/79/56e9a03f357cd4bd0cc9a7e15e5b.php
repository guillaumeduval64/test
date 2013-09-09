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
        return array (  31 => 3,  26 => 2,  20 => 1,  420 => 145,  417 => 144,  413 => 143,  410 => 142,  405 => 139,  401 => 136,  398 => 135,  394 => 131,  391 => 130,  386 => 127,  383 => 126,  379 => 124,  376 => 123,  369 => 118,  366 => 117,  362 => 72,  359 => 71,  353 => 4,  341 => 152,  337 => 151,  331 => 149,  329 => 148,  325 => 146,  322 => 144,  320 => 142,  314 => 139,  310 => 137,  308 => 135,  303 => 132,  301 => 130,  298 => 129,  296 => 126,  293 => 125,  291 => 123,  288 => 122,  286 => 117,  279 => 112,  270 => 109,  266 => 107,  262 => 106,  255 => 102,  242 => 94,  235 => 92,  228 => 90,  215 => 87,  208 => 85,  201 => 83,  187 => 79,  179 => 73,  177 => 71,  146 => 47,  122 => 25,  65 => 18,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  222 => 89,  206 => 82,  202 => 79,  194 => 81,  189 => 71,  180 => 68,  176 => 67,  173 => 66,  168 => 65,  164 => 63,  156 => 58,  152 => 57,  143 => 51,  137 => 48,  132 => 46,  128 => 45,  119 => 39,  113 => 36,  109 => 35,  100 => 29,  96 => 28,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 19,  64 => 15,  58 => 11,  52 => 9,  50 => 8,  40 => 6,  37 => 5,  29 => 1,);
    }
}
