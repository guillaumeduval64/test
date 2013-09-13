<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_1e6aa65587d5e361a2841382fb65f763 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  29 => 4,  26 => 3,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 29,  75 => 28,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  41 => 9,  24 => 2,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 35,  86 => 28,  69 => 25,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  452 => 150,  449 => 149,  445 => 148,  442 => 147,  437 => 144,  433 => 141,  430 => 140,  426 => 136,  423 => 135,  418 => 132,  415 => 131,  411 => 129,  402 => 126,  399 => 125,  394 => 124,  391 => 123,  387 => 82,  384 => 81,  378 => 4,  366 => 157,  362 => 156,  356 => 154,  354 => 153,  350 => 151,  347 => 149,  345 => 147,  339 => 144,  335 => 142,  333 => 140,  328 => 137,  326 => 135,  323 => 134,  321 => 131,  318 => 130,  316 => 123,  308 => 118,  295 => 110,  288 => 108,  281 => 106,  275 => 105,  268 => 103,  261 => 101,  254 => 99,  247 => 97,  240 => 95,  232 => 89,  221 => 86,  217 => 84,  212 => 83,  210 => 81,  203 => 76,  201 => 92,  195 => 71,  193 => 70,  188 => 67,  186 => 66,  182 => 64,  180 => 63,  151 => 63,  135 => 27,  67 => 20,  63 => 14,  54 => 21,  50 => 15,  37 => 5,  38 => 13,  35 => 7,  30 => 5,  83 => 30,  74 => 25,  65 => 19,  57 => 16,  53 => 13,  46 => 14,  42 => 12,  39 => 6,  33 => 6,  31 => 5,  28 => 1,);
    }
}
