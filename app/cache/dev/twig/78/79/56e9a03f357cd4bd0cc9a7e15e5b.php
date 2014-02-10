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
        return array (  26 => 2,  20 => 1,  48 => 9,  35 => 5,  24 => 3,  22 => 2,  19 => 1,  750 => 293,  747 => 292,  743 => 291,  740 => 290,  735 => 287,  731 => 259,  728 => 258,  724 => 254,  721 => 253,  716 => 250,  713 => 249,  702 => 244,  699 => 243,  694 => 239,  689 => 235,  684 => 196,  679 => 189,  674 => 188,  649 => 302,  639 => 294,  636 => 292,  634 => 290,  628 => 287,  619 => 281,  596 => 260,  594 => 258,  589 => 255,  587 => 253,  584 => 252,  582 => 249,  578 => 247,  576 => 243,  572 => 241,  570 => 239,  566 => 237,  564 => 235,  556 => 229,  545 => 226,  538 => 225,  534 => 224,  530 => 222,  528 => 221,  500 => 196,  490 => 189,  486 => 188,  362 => 69,  356 => 68,  350 => 67,  344 => 66,  338 => 65,  332 => 64,  326 => 63,  320 => 62,  314 => 61,  299 => 48,  88 => 33,  84 => 22,  76 => 17,  71 => 15,  63 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 8,  36 => 4,  94 => 31,  82 => 21,  80 => 20,  73 => 17,  67 => 14,  61 => 13,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  31 => 3,);
    }
}
