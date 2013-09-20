<?php

/* MyAppApBundle:Estimation:voir.html.twig */
class __TwigTemplate_22dc578ec8a84d2fe622c02578ed3cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'principalNote' => array($this, 'block_principalNote'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppApBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 8
    public function block_principalNote($context, array $blocks = array())
    {
        // line 9
        echo "    <div>
        <button>    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Prev")), "html", null, true);
        echo "\" class=\"icon-arrow-left-2\"> Précèdent</a></button>
<b>État: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "etat"), "html", null, true);
        echo " </b>
  <button><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Next")), "html", null, true);
        echo "\" class=\"icon-arrow-right-2\"> Suivant</a><button>
</div>
<div class= \"info-client\">
<div class=\"right-map\">
<table id=\"map\">
            <tr>
                <td>
                    ";
        // line 19
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer($this->getContext($context, "map"));
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "
                </td>
            </tr>
            </table>
            </div>
            <div class=\"client\">
                               <h6><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
    <h6>Créé par: ";
        // line 27
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    <h6>Service demandés: ";
        // line 28
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
        echo "</h6>
<address>
<b><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
        echo "</a></b><br>
  ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "street"), "html", null, true);
        echo "<br>
  ";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "pc")), "html", null, true);
        echo "<br>

";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "client"), "phones"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "p"), "phoneType"), "phoneType")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "phone"), "html", null, true);
            echo "
    <br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        Aucun Téléphone.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<br>
<a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "</a>
</address>
    </div>
    <pre id=\"note\">Notes: <a rel=\"modal-profile\" href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Note Client\"/></a></pre>
                    
";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notes"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 47
            echo "    <span class=\"dateSpan\"><b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "created"), "d/m/y"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "type"), "html", null, true);
            echo "</b></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "note")), "html", null, true);
            echo "<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>

";
    }

    // line 57
    public function block_right($context, array $blocks = array())
    {
        // line 58
        echo "<div >

      <div>  <pre id=\"vertical\">Services<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute($this->getContext($context, "client"), "id")), array("map" => $this->getContext($context, "map"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></pre>
</div>
      <div >
<table id=\"tbestimation\">

    
";
        // line 66
        if ($this->getContext($context, "clientServices")) {
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientServices"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 68
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute($this->getContext($context, "s"), "id"), "id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 75
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "s", true), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 76
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"  width=\"100px\" height=\"100px\" /></span></td>
        ";
                } else {
                    // line 78
                    echo "        <td/>
 ";
                }
                // line 80
                echo "        </tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "        <tr>
            <td>Aucun Services trouvés</td>
        </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "    </table>
 ";
        }
        // line 89
        echo "
              </div>
              </div>

<div>

             <pre id=\"vertical\">Contrats<a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></pre>

     ";
        // line 97
        if ($this->getContext($context, "clientservicestest")) {
            // line 98
            echo "<table id=\"tbestimation\">
";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientservicestest"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 100
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute($this->getContext($context, "co"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 107
                if (($this->getAttribute($this->getContext($context, "co"), "date") != null)) {
                    // line 108
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 110
                    echo "                <td>N/A</td>
            ";
                }
                // line 112
                echo "         </tr>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 114
                echo "    <tr>
        <td>Aucunes contrats trouvées</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "    </table> 
";
        }
        // line 119
        echo "   
        </div>
        
<h2>Ajouter une note:</h2>

    <form action=\"\" method=\"post\" ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'enctype');
        echo ">
    ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'widget');
        echo "
    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'rest');
        echo "
    <input type=\"submit\" />
</form>
        </div>
</table>   
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Estimation:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 126,  371 => 125,  367 => 124,  360 => 119,  356 => 118,  347 => 114,  341 => 112,  337 => 110,  331 => 108,  329 => 107,  323 => 106,  318 => 104,  314 => 103,  310 => 102,  306 => 101,  303 => 100,  298 => 99,  295 => 98,  293 => 97,  286 => 95,  278 => 89,  274 => 87,  264 => 82,  258 => 80,  254 => 78,  246 => 76,  244 => 75,  237 => 73,  233 => 72,  229 => 71,  225 => 70,  221 => 69,  218 => 68,  213 => 67,  211 => 66,  200 => 60,  196 => 58,  193 => 57,  187 => 53,  178 => 49,  166 => 47,  161 => 46,  156 => 44,  148 => 41,  145 => 40,  138 => 38,  127 => 35,  122 => 34,  115 => 32,  109 => 31,  101 => 30,  96 => 28,  90 => 27,  84 => 26,  75 => 20,  71 => 19,  61 => 12,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  42 => 5,  39 => 4,  31 => 2,);
    }
}
