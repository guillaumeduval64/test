<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_c096bd531dd330dc13e1e16a5bd2abf9 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ($this->getContext($context, "current") != $this->getContext($context, "first")))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "first")))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ($this->getContext($context, "current") != $this->getContext($context, "last")))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "last")))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  100 => 33,  62 => 19,  59 => 18,  52 => 16,  41 => 11,  27 => 5,  140 => 30,  137 => 29,  113 => 23,  93 => 19,  72 => 16,  49 => 11,  44 => 9,  32 => 7,  23 => 4,  173 => 82,  155 => 69,  142 => 65,  130 => 61,  112 => 49,  97 => 43,  88 => 37,  82 => 34,  78 => 33,  54 => 21,  46 => 13,  19 => 2,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  390 => 43,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  276 => 378,  271 => 371,  268 => 370,  266 => 363,  263 => 362,  260 => 360,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  243 => 324,  240 => 323,  238 => 309,  233 => 301,  230 => 300,  227 => 298,  225 => 295,  220 => 287,  217 => 286,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  202 => 263,  199 => 262,  197 => 246,  191 => 243,  189 => 237,  186 => 236,  184 => 230,  181 => 229,  176 => 220,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 71,  156 => 192,  154 => 186,  151 => 185,  149 => 179,  144 => 173,  141 => 172,  139 => 64,  136 => 165,  134 => 27,  131 => 157,  124 => 129,  121 => 55,  119 => 114,  116 => 113,  109 => 22,  106 => 46,  104 => 87,  101 => 44,  89 => 28,  86 => 27,  84 => 41,  81 => 40,  79 => 25,  74 => 20,  64 => 3,  129 => 145,  126 => 144,  123 => 33,  120 => 32,  117 => 24,  114 => 39,  111 => 107,  108 => 36,  105 => 35,  102 => 26,  99 => 20,  96 => 67,  94 => 30,  91 => 29,  76 => 31,  71 => 19,  69 => 27,  66 => 12,  57 => 8,  53 => 7,  42 => 3,  40 => 8,  37 => 1,  33 => 22,  28 => 5,  24 => 4,  22 => 3,  31 => 11,  26 => 2,  20 => 1,  441 => 152,  438 => 151,  434 => 150,  431 => 149,  426 => 58,  422 => 143,  419 => 142,  415 => 138,  412 => 137,  407 => 134,  404 => 133,  400 => 47,  391 => 128,  388 => 42,  383 => 126,  380 => 125,  373 => 120,  370 => 119,  366 => 33,  363 => 32,  357 => 4,  345 => 159,  341 => 158,  335 => 21,  333 => 155,  329 => 153,  326 => 151,  324 => 149,  318 => 146,  314 => 144,  312 => 142,  307 => 139,  305 => 137,  302 => 136,  300 => 133,  297 => 132,  295 => 125,  292 => 124,  290 => 5,  277 => 109,  273 => 377,  262 => 104,  258 => 351,  254 => 101,  242 => 94,  235 => 308,  228 => 90,  222 => 294,  215 => 277,  208 => 85,  201 => 83,  194 => 245,  187 => 79,  179 => 221,  177 => 85,  146 => 66,  122 => 25,  55 => 17,  51 => 9,  47 => 4,  43 => 12,  38 => 10,  34 => 4,  29 => 6,  87 => 18,  75 => 35,  73 => 23,  67 => 30,  65 => 20,  61 => 2,  58 => 22,  50 => 20,  45 => 7,  39 => 5,  36 => 7,  30 => 21,);
    }
}
