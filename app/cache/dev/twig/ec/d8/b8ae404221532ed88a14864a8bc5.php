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
        return array (  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  24 => 4,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  32 => 12,  22 => 2,  43 => 8,  51 => 15,  47 => 15,  41 => 9,  27 => 4,  40 => 8,  36 => 7,  26 => 5,  19 => 1,  452 => 150,  449 => 149,  445 => 148,  442 => 147,  437 => 144,  433 => 141,  430 => 140,  426 => 136,  423 => 135,  418 => 132,  415 => 131,  411 => 129,  402 => 126,  399 => 125,  394 => 124,  391 => 123,  387 => 82,  384 => 81,  378 => 4,  366 => 157,  362 => 156,  356 => 154,  354 => 153,  350 => 151,  347 => 149,  345 => 147,  339 => 144,  335 => 142,  333 => 140,  328 => 137,  326 => 135,  323 => 134,  321 => 131,  318 => 130,  316 => 123,  308 => 118,  295 => 110,  288 => 108,  281 => 106,  275 => 105,  268 => 103,  261 => 101,  254 => 99,  247 => 97,  240 => 95,  232 => 89,  221 => 86,  217 => 84,  212 => 83,  210 => 81,  203 => 76,  201 => 92,  195 => 71,  193 => 70,  188 => 67,  186 => 66,  182 => 64,  180 => 63,  151 => 63,  135 => 27,  67 => 20,  63 => 14,  54 => 21,  50 => 8,  37 => 11,  38 => 13,  35 => 4,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 16,  53 => 13,  46 => 7,  42 => 14,  39 => 6,  33 => 10,  31 => 5,  28 => 1,);
    }
}