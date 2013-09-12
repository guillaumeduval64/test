<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_139949136691e3ad20149c398987e145 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  30 => 3,  488 => 186,  485 => 185,  481 => 184,  478 => 183,  473 => 180,  469 => 177,  466 => 176,  462 => 172,  459 => 171,  454 => 168,  451 => 167,  447 => 165,  438 => 162,  435 => 161,  430 => 160,  427 => 159,  423 => 118,  420 => 117,  414 => 4,  402 => 193,  398 => 192,  392 => 190,  390 => 189,  386 => 187,  383 => 185,  381 => 183,  375 => 180,  371 => 178,  369 => 176,  364 => 173,  362 => 171,  359 => 170,  357 => 167,  354 => 166,  352 => 159,  344 => 154,  331 => 146,  324 => 144,  317 => 142,  311 => 141,  304 => 139,  297 => 137,  290 => 135,  283 => 133,  276 => 131,  268 => 125,  257 => 122,  253 => 120,  248 => 119,  246 => 117,  238 => 111,  236 => 110,  228 => 104,  226 => 103,  218 => 97,  216 => 96,  208 => 90,  206 => 89,  159 => 49,  135 => 27,  67 => 20,  63 => 14,  54 => 21,  50 => 8,  46 => 7,  42 => 14,  37 => 5,  33 => 10,  28 => 1,);
    }
}
