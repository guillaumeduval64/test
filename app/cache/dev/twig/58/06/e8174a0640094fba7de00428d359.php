<?php

/* MyAppApBundle:Client:liste.html.twig */
class __TwigTemplate_5806e8174a0640094fba7de00428d359 extends Twig_Template
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
        echo "<table class=\"centrer\">
<tr>
";
        // line 4
        echo "    <th>";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Flag", "c.flag");
        echo "</th>
    <th>";
        // line 5
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date", "c.created");
        echo "</th>
    <th>";
        // line 6
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Rappel", "c.date");
        echo "</th>
    <th>";
        // line 7
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("client.nom"), "c.nom");
        echo "</th>
    <th>";
        // line 8
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("client.prenom"), "c.prenom");
        echo "</th>
    <th>";
        // line 9
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("client.telephone"), "c.phoneNumber");
        echo "</th>
    <th>Service</th>
    <th>";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Ville", "a.city");
        echo "</th>
</tr>

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
            // line 16
            echo "<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 17
            if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "flag")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/flamme.png"), "html", null, true);
                echo "\" title=\"Attention\"/>";
            }
            echo "</td>
    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "created"), "d/m/y"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 19
            if (($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "date") != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "date"), "d/m/y"), "html", null, true);
            }
            echo "</td>
    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom"), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phoneNumber"), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "service"), "type")), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "city"), "city"), "html", null, true);
            echo "</td>
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
        // line 27
        echo "</table>
";
        // line 29
        echo "<div class=\"navigation\">
    ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>";
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
        return array (  140 => 30,  117 => 24,  113 => 23,  93 => 19,  72 => 16,  55 => 15,  49 => 11,  44 => 9,  40 => 8,  32 => 6,  28 => 5,  23 => 4,  137 => 29,  120 => 51,  105 => 21,  92 => 38,  88 => 37,  82 => 34,  78 => 33,  54 => 21,  46 => 19,  38 => 15,  31 => 11,  19 => 1,  1357 => 388,  1348 => 387,  1346 => 386,  1343 => 385,  1327 => 381,  1320 => 380,  1318 => 379,  1315 => 378,  1292 => 374,  1267 => 373,  1265 => 372,  1262 => 371,  1250 => 366,  1245 => 365,  1243 => 364,  1240 => 363,  1231 => 357,  1225 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1212 => 351,  1205 => 346,  1196 => 344,  1192 => 343,  1189 => 342,  1186 => 341,  1184 => 340,  1181 => 339,  1173 => 335,  1171 => 334,  1168 => 333,  1162 => 329,  1156 => 327,  1153 => 326,  1151 => 325,  1148 => 324,  1139 => 319,  1137 => 318,  1114 => 317,  1111 => 316,  1108 => 315,  1105 => 314,  1102 => 313,  1099 => 312,  1096 => 311,  1094 => 310,  1091 => 309,  1084 => 305,  1080 => 304,  1075 => 303,  1073 => 302,  1070 => 301,  1063 => 296,  1060 => 295,  1052 => 290,  1049 => 289,  1047 => 288,  1044 => 287,  1036 => 282,  1032 => 281,  1028 => 280,  1025 => 279,  1023 => 278,  1020 => 277,  1012 => 273,  1010 => 269,  1008 => 268,  1005 => 267,  1000 => 263,  978 => 258,  975 => 257,  972 => 256,  969 => 255,  966 => 254,  963 => 253,  960 => 252,  957 => 251,  954 => 250,  951 => 249,  948 => 248,  946 => 247,  943 => 246,  935 => 240,  932 => 239,  930 => 238,  927 => 237,  919 => 233,  916 => 232,  914 => 231,  911 => 230,  899 => 226,  896 => 225,  893 => 224,  890 => 223,  888 => 222,  885 => 221,  877 => 217,  874 => 216,  872 => 215,  869 => 214,  861 => 210,  858 => 209,  856 => 208,  853 => 207,  845 => 203,  842 => 202,  840 => 201,  837 => 200,  829 => 196,  826 => 195,  824 => 194,  821 => 193,  813 => 189,  810 => 188,  808 => 187,  805 => 186,  797 => 182,  794 => 181,  792 => 180,  789 => 179,  781 => 175,  779 => 174,  776 => 173,  768 => 169,  765 => 168,  763 => 167,  760 => 166,  752 => 162,  749 => 161,  747 => 160,  745 => 159,  742 => 158,  735 => 153,  725 => 152,  720 => 151,  717 => 150,  711 => 148,  708 => 147,  706 => 146,  703 => 145,  695 => 139,  693 => 138,  692 => 137,  691 => 136,  690 => 135,  685 => 134,  679 => 132,  676 => 131,  674 => 130,  671 => 129,  662 => 123,  658 => 122,  654 => 121,  650 => 120,  645 => 119,  639 => 117,  636 => 116,  634 => 115,  631 => 114,  615 => 110,  613 => 109,  610 => 108,  594 => 104,  592 => 103,  589 => 102,  572 => 98,  560 => 96,  553 => 93,  551 => 92,  546 => 91,  543 => 90,  525 => 89,  523 => 88,  520 => 87,  511 => 82,  508 => 81,  505 => 80,  499 => 78,  497 => 77,  492 => 76,  489 => 75,  486 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  276 => 378,  273 => 377,  271 => 371,  268 => 370,  266 => 363,  263 => 362,  260 => 360,  258 => 351,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  233 => 301,  230 => 300,  227 => 298,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  202 => 263,  199 => 262,  197 => 246,  194 => 245,  191 => 243,  189 => 237,  186 => 236,  184 => 230,  181 => 229,  179 => 221,  176 => 220,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  149 => 179,  146 => 178,  144 => 66,  141 => 172,  139 => 166,  136 => 165,  134 => 27,  131 => 157,  129 => 57,  126 => 144,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  114 => 48,  111 => 107,  109 => 22,  106 => 101,  104 => 87,  101 => 86,  99 => 20,  96 => 39,  94 => 57,  91 => 56,  89 => 47,  86 => 46,  84 => 41,  81 => 40,  79 => 17,  76 => 31,  74 => 20,  71 => 19,  69 => 27,  66 => 12,  64 => 3,  87 => 18,  75 => 35,  73 => 34,  67 => 30,  65 => 26,  61 => 2,  58 => 22,  50 => 20,  45 => 7,  39 => 5,  36 => 7,  30 => 2,);
    }
}
