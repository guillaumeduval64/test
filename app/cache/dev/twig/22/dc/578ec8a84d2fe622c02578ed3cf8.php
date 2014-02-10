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
            'previous' => array($this, 'block_previous'),
            'next' => array($this, 'block_next'),
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
        // line 3
        echo "    Fiche client:
";
    }

    // line 5
    public function block_previous($context, array $blocks = array())
    {
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a>
";
    }

    // line 8
    public function block_next($context, array $blocks = array())
    {
        // line 9
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a>
";
    }

    // line 11
    public function block_recherche($context, array $blocks = array())
    {
        // line 12
        echo "
                         <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Prev")), "html", null, true);
        echo "\" class=\"icon-arrow-left-2\"></a>
                        <span>État: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "etat"), "html", null, true);
        echo "</span>
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Next")), "html", null, true);
        echo "\" class=\"icon-arrow-right-2\"></a>
";
    }

    // line 21
    public function block_principalNote($context, array $blocks = array())
    {
        echo "   


                    <div class=\"right-map\">
<table id=\"map\">
            <tr>
                <td>
                    ";
        // line 28
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer($this->getContext($context, "map"));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "
                </td>
            </tr>
            </table>
            </div>





<div class= \"info-client\">

            <div class=\"client\">
 <address>
  ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "street"), "html", null, true);
        echo "<br>
  ";
        // line 44
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "pc")), "html", null, true);
        echo "<br>
 </address>
";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "client"), "phones"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 47
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
            // line 50
            echo "        Aucun Téléphone.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<br>
<a href=\"mailto:";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "</a>
</address>

<h6>Service demandés: ";
        // line 56
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
        echo "</h6>                        
    <h6>Créé par: ";
        // line 57
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    </div>
    <div id=\"note\">
    <pre id=\"note\">Note</pre>


<form action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'widget');
        echo "
    <input type=\"submit\" value=\"Ajouter\" />
</form>
<div class=\"loading\"></div>
<div id=\"resultats_notes\"> 
    ";
        // line 69
        $this->env->loadTemplate("MyAppApBundle:Note:liste.html.twig")->display(array_merge($context, array("notes" => $this->getContext($context, "notes"))));
        // line 70
        echo "</div>
</div>              

";
    }

    // line 75
    public function block_right($context, array $blocks = array())
    {
        // line 76
        echo "<div id=\"services\">
  <h2>Services<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute($this->getContext($context, "client"), "id")), array("map" => $this->getContext($context, "map"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></h2>

";
        // line 79
        if ($this->getContext($context, "clientServices")) {
            // line 80
            echo "<table>
";
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientServices"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 82
                echo "
        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute($this->getContext($context, "s"), "id"), "id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 90
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "s", true), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 91
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"  width=\"100px\" height=\"100px\" /></span></td>
         ";
                }
                // line 93
                echo "
        </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "</table>
";
        } else {
            // line 98
            echo "Aucun Services trouvés
 ";
        }
        // line 100
        echo "        

             <h2>Contrats<a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></h2>

       ";
        // line 104
        if ($this->getContext($context, "clientservicestest")) {
            // line 105
            echo "<table id=\"tbestimation\">
";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientservicestest"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 107
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 108
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute($this->getContext($context, "co"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 114
                if (($this->getAttribute($this->getContext($context, "co"), "date") != null)) {
                    // line 115
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 117
                    echo "                <td>N/A</td>
            ";
                }
                // line 119
                echo "         </tr>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 121
                echo "    <tr>
        <td>Aucunes contrats trouvées</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    </table> 
";
        }
        // line 126
        echo "   
</div>
                </div>
            </div><!-- /main -->
        </div><!-- /container -->

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
        return array (  357 => 126,  353 => 125,  344 => 121,  338 => 119,  334 => 117,  328 => 115,  326 => 114,  320 => 113,  315 => 111,  311 => 110,  307 => 109,  303 => 108,  300 => 107,  295 => 106,  292 => 105,  290 => 104,  283 => 102,  279 => 100,  275 => 98,  271 => 96,  263 => 93,  255 => 91,  253 => 90,  246 => 88,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  226 => 82,  222 => 81,  219 => 80,  217 => 79,  210 => 77,  207 => 76,  204 => 75,  197 => 70,  195 => 69,  187 => 64,  183 => 63,  172 => 57,  168 => 56,  160 => 53,  157 => 52,  150 => 50,  139 => 47,  134 => 46,  127 => 44,  121 => 43,  104 => 29,  100 => 28,  89 => 21,  83 => 16,  79 => 15,  75 => 14,  67 => 13,  64 => 12,  61 => 11,  54 => 9,  51 => 8,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
