<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_72bce4d65b6dacaa7fdab4f6ff71c2f6 extends Twig_Template
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
    ";
        // line 2
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("none") : ("inline"));
            echo "\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "i" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 7,  24 => 3,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 24,  62 => 23,  51 => 20,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 41,  78 => 40,  44 => 9,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  452 => 150,  449 => 149,  445 => 148,  442 => 147,  437 => 144,  433 => 141,  430 => 140,  426 => 136,  423 => 135,  418 => 132,  415 => 131,  411 => 129,  402 => 126,  399 => 125,  394 => 124,  391 => 123,  387 => 82,  384 => 81,  378 => 4,  366 => 157,  362 => 156,  356 => 154,  354 => 153,  350 => 151,  347 => 149,  345 => 147,  339 => 144,  335 => 142,  333 => 140,  328 => 137,  326 => 135,  323 => 134,  321 => 131,  318 => 130,  316 => 123,  308 => 118,  295 => 110,  288 => 108,  281 => 106,  275 => 105,  268 => 103,  261 => 101,  254 => 99,  247 => 97,  240 => 95,  232 => 89,  221 => 86,  217 => 84,  212 => 83,  210 => 81,  203 => 76,  201 => 92,  195 => 71,  193 => 70,  188 => 67,  186 => 66,  182 => 64,  180 => 63,  151 => 63,  135 => 27,  67 => 20,  63 => 14,  54 => 21,  50 => 8,  37 => 5,  38 => 6,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 12,  53 => 13,  46 => 10,  42 => 7,  39 => 6,  33 => 5,  31 => 4,  28 => 1,);
    }
}
