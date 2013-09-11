<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_ecd8b8ae404221532ed88a14864a8bc5 extends Twig_Template
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
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "message"), "html", null, true);
            echo "
";
            // line 15
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => $this->getContext($context, "e")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  87 => 20,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  56 => 9,  50 => 8,  41 => 9,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  54 => 21,  40 => 8,  22 => 2,  24 => 4,  19 => 1,  541 => 226,  538 => 225,  534 => 224,  531 => 223,  526 => 220,  522 => 217,  519 => 216,  515 => 212,  512 => 211,  507 => 208,  504 => 207,  500 => 205,  491 => 202,  488 => 201,  483 => 200,  480 => 199,  474 => 194,  472 => 193,  470 => 192,  468 => 191,  466 => 190,  462 => 188,  459 => 187,  455 => 140,  452 => 139,  446 => 4,  434 => 233,  430 => 232,  424 => 230,  422 => 229,  418 => 227,  415 => 225,  413 => 223,  407 => 220,  403 => 218,  401 => 216,  396 => 213,  394 => 211,  391 => 210,  389 => 207,  386 => 206,  384 => 199,  380 => 197,  378 => 187,  364 => 176,  351 => 168,  344 => 166,  337 => 164,  331 => 163,  324 => 161,  317 => 159,  310 => 157,  303 => 155,  296 => 153,  288 => 147,  277 => 144,  273 => 142,  268 => 141,  266 => 139,  251 => 126,  249 => 125,  225 => 103,  223 => 102,  209 => 90,  207 => 89,  160 => 49,  136 => 56,  68 => 14,  64 => 12,  55 => 13,  51 => 15,  47 => 8,  43 => 8,  34 => 4,  29 => 1,  38 => 13,  35 => 4,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 16,  53 => 13,  46 => 7,  42 => 14,  39 => 6,  33 => 10,  31 => 5,  28 => 3,);
    }
}
