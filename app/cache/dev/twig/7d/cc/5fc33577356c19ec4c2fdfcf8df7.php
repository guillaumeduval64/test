<?php

/* MyAppApBundle:Dashboard:nbEstimation.html.twig */
class __TwigTemplate_7dcc5fc33577356c19ec4c2fdfcf8df7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbEstimationWeek"]) ? $context["nbEstimationWeek"] : $this->getContext($context, "nbEstimationWeek")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbEstimationMonth"]) ? $context["nbEstimationMonth"] : $this->getContext($context, "nbEstimationMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbEstimation"]) ? $context["nbEstimation"] : $this->getContext($context, "nbEstimation")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbEstimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  526 => 211,  523 => 210,  519 => 209,  516 => 208,  511 => 205,  507 => 202,  504 => 201,  500 => 197,  497 => 196,  492 => 193,  489 => 192,  485 => 190,  476 => 187,  473 => 186,  468 => 185,  465 => 184,  459 => 179,  457 => 178,  455 => 177,  453 => 176,  451 => 175,  447 => 173,  444 => 172,  440 => 125,  437 => 124,  431 => 4,  419 => 218,  415 => 217,  409 => 215,  407 => 214,  403 => 212,  400 => 210,  398 => 208,  392 => 205,  388 => 203,  386 => 201,  381 => 198,  379 => 196,  376 => 195,  374 => 192,  371 => 191,  369 => 184,  365 => 182,  363 => 172,  349 => 161,  336 => 153,  329 => 151,  322 => 149,  316 => 148,  309 => 146,  302 => 144,  295 => 142,  288 => 140,  281 => 138,  273 => 132,  262 => 129,  258 => 127,  253 => 126,  251 => 124,  229 => 104,  227 => 103,  219 => 97,  217 => 96,  209 => 90,  207 => 89,  160 => 49,  136 => 27,  68 => 20,  64 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
