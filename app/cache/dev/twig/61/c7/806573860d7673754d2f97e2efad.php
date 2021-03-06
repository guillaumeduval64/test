<?php

/* MyAppApBundle:Client:liste.html.twig */
class __TwigTemplate_61c7806573860d7673754d2f97e2efad extends Twig_Template
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
        echo "        <table class=\"centrer\">
<tr>
";
        // line 4
        echo "    <th><h3>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Flag", "c.noticeClient");
        echo "</h3></th>
    <th>";
        // line 5
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Date", "c.created");
        echo "</th>
    <th>";
        // line 6
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Rappel", "c.date");
        echo "</th>
    <th>";
        // line 7
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), $this->env->getExtension('translator')->trans("client.nom"), "c.nom");
        echo "</th>
    <th>Service</th>
    <th>Total</th>
    <th>";
        // line 10
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Ville", "a.city");
        echo "</th>
</tr>
                        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 13
            echo "                            <tr ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                <td>";
            // line 14
            if ($this->getAttribute($this->getContext($context, "client"), "flag")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/flamme.png"), "html", null, true);
                echo "\" title=\"Attention\"/>";
            }
            echo "</td>
                                <td><span class=\"cbp-vm-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "created"), "d/m/y"), "html", null, true);
            echo "</span></td>
                                <td>";
            // line 16
            if (($this->getAttribute($this->getContext($context, "client"), "date") != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "date"), "d/m/y"), "html", null, true);
            }
            echo "</td>
                                <td><h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
            echo "</h3></a></td>
                                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
            echo "</td>
                                <td class=\"cbp-vm-price\">\$</td>
                                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city"), "html", null, true);
            echo "</td>
                                <td><a class=\"cbp-vm-icon cbp-vm-add\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">Voir</a></td>
                                <td><a class=\"cbp-vm-icon cbp-vm-add\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>

                </div>
            </div><!-- /main -->
        </div><!-- /container -->";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  42 => 10,  28 => 5,  108 => 22,  105 => 35,  103 => 34,  100 => 20,  65 => 20,  62 => 19,  46 => 13,  38 => 10,  32 => 6,  27 => 5,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  744 => 161,  742 => 160,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  645 => 120,  640 => 119,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  342 => 23,  337 => 22,  335 => 21,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  276 => 378,  273 => 377,  271 => 371,  268 => 370,  266 => 363,  263 => 362,  260 => 360,  258 => 351,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  233 => 301,  230 => 300,  227 => 298,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  202 => 263,  199 => 262,  197 => 246,  194 => 245,  191 => 243,  186 => 236,  184 => 230,  181 => 229,  179 => 221,  174 => 214,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  149 => 179,  146 => 178,  139 => 166,  136 => 165,  134 => 158,  131 => 157,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  104 => 21,  101 => 86,  99 => 68,  96 => 67,  91 => 29,  89 => 17,  86 => 27,  81 => 40,  79 => 15,  74 => 20,  69 => 13,  66 => 12,  189 => 237,  180 => 52,  176 => 220,  171 => 213,  169 => 207,  166 => 206,  144 => 173,  141 => 172,  138 => 40,  135 => 39,  132 => 38,  129 => 145,  126 => 144,  123 => 35,  120 => 34,  117 => 33,  114 => 39,  111 => 107,  109 => 102,  106 => 101,  95 => 18,  83 => 16,  78 => 17,  64 => 13,  60 => 7,  54 => 4,  44 => 1,  34 => 29,  29 => 6,  25 => 13,  23 => 4,  26 => 2,  20 => 1,  48 => 9,  35 => 5,  24 => 4,  22 => 3,  19 => 1,  750 => 293,  747 => 162,  743 => 291,  740 => 159,  735 => 287,  731 => 259,  728 => 258,  724 => 254,  721 => 253,  716 => 250,  713 => 249,  702 => 244,  699 => 243,  694 => 239,  689 => 235,  684 => 196,  679 => 189,  674 => 132,  649 => 121,  639 => 294,  636 => 292,  634 => 117,  628 => 287,  619 => 281,  596 => 260,  594 => 258,  589 => 104,  587 => 103,  584 => 102,  582 => 249,  578 => 247,  576 => 243,  572 => 241,  570 => 239,  566 => 237,  564 => 235,  556 => 229,  545 => 226,  538 => 90,  534 => 224,  530 => 222,  528 => 221,  500 => 80,  490 => 189,  486 => 188,  362 => 69,  356 => 68,  350 => 26,  344 => 24,  338 => 65,  332 => 20,  326 => 63,  320 => 62,  314 => 61,  299 => 8,  88 => 33,  84 => 41,  76 => 31,  71 => 14,  63 => 13,  59 => 18,  55 => 17,  49 => 3,  45 => 7,  41 => 11,  36 => 7,  94 => 30,  82 => 21,  80 => 20,  73 => 23,  67 => 14,  61 => 2,  52 => 16,  47 => 12,  43 => 12,  40 => 48,  37 => 3,  31 => 28,);
    }
}
