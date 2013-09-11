<?php

/* MyAppApBundle:Dashboard:nbClient.html.twig */
class __TwigTemplate_4c63378789b50fdb28b8caf19fcbf412 extends Twig_Template
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
        echo "<td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClient"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  541 => 226,  538 => 225,  534 => 224,  531 => 223,  526 => 220,  522 => 217,  519 => 216,  515 => 212,  512 => 211,  507 => 208,  504 => 207,  500 => 205,  491 => 202,  488 => 201,  483 => 200,  480 => 199,  474 => 194,  472 => 193,  470 => 192,  468 => 191,  466 => 190,  462 => 188,  459 => 187,  455 => 140,  452 => 139,  446 => 4,  434 => 233,  430 => 232,  424 => 230,  422 => 229,  418 => 227,  415 => 225,  413 => 223,  407 => 220,  403 => 218,  401 => 216,  396 => 213,  394 => 211,  391 => 210,  389 => 207,  386 => 206,  384 => 199,  380 => 197,  378 => 187,  364 => 176,  351 => 168,  344 => 166,  337 => 164,  331 => 163,  324 => 161,  317 => 159,  310 => 157,  303 => 155,  296 => 153,  288 => 147,  277 => 144,  273 => 142,  268 => 141,  266 => 139,  251 => 126,  249 => 125,  225 => 103,  223 => 102,  209 => 90,  207 => 89,  160 => 49,  136 => 27,  68 => 20,  64 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
