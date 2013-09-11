<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_f6080262bc37757307e6ded6a0643662 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "trace"), "type") . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace"), "file")) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "trace"), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace-";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "'); switchIcons('icon-";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "-open', 'icon-";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "-close'); return false;\">
        <img class=\"toggle\" id=\"icon-";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("inline") : ("none"));
            echo "\" />
        <img class=\"toggle\" id=\"icon-";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("none") : ("inline"));
            echo "\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace-";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "-") . $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  56 => 9,  50 => 8,  41 => 9,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  54 => 21,  40 => 8,  22 => 2,  24 => 3,  19 => 1,  541 => 226,  538 => 225,  534 => 224,  531 => 223,  526 => 220,  522 => 217,  519 => 216,  515 => 212,  512 => 211,  507 => 208,  504 => 207,  500 => 205,  491 => 202,  488 => 201,  483 => 200,  480 => 199,  474 => 194,  472 => 193,  470 => 192,  468 => 191,  466 => 190,  462 => 188,  459 => 187,  455 => 140,  452 => 139,  446 => 4,  434 => 233,  430 => 232,  424 => 230,  422 => 229,  418 => 227,  415 => 225,  413 => 223,  407 => 220,  403 => 218,  401 => 216,  396 => 213,  394 => 211,  391 => 210,  389 => 207,  386 => 206,  384 => 199,  380 => 197,  378 => 187,  364 => 176,  351 => 168,  344 => 166,  337 => 164,  331 => 163,  324 => 161,  317 => 159,  310 => 157,  303 => 155,  296 => 153,  288 => 147,  277 => 144,  273 => 142,  268 => 141,  266 => 139,  251 => 126,  249 => 125,  225 => 103,  223 => 102,  209 => 90,  207 => 89,  160 => 49,  136 => 56,  68 => 14,  64 => 12,  55 => 13,  51 => 12,  47 => 8,  43 => 8,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 11,  42 => 8,  39 => 6,  33 => 5,  31 => 5,  28 => 3,);
    }
}
