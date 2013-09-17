<?php

/* MyAppApBundle:Estimation:voir.html.twig */
class __TwigTemplate_98ab5cf2ca79db15bf795d498c029303 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom")), "html", null, true);
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo "    <div id= \"no-margin\">
<ul class=\"pager\">
  <li class=\"icon-arrow-left-2\">                <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a>
  </li>
<li><b>État: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat"), "html", null, true);
        echo " </b></li>
  <li class=\"icon-arrow-right-2\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "etat" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a>
</li>
</ul>
</div>
";
    }

    // line 16
    public function block_principalNote($context, array $blocks = array())
    {
        // line 17
        echo "<div class= \"info-client\">
<div class=\"right-map\">
<table id=\"map\">
            <tr>
                <td>
                    ";
        // line 22
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
                </td>
            </tr>
            </table>
            </div>
            <div class=\"client\">
                               <h6><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
    <h6>Créé par: ";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    <h6>Service demandés: ";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "service"), "type")), "html", null, true);
        echo "</h6>
<address>
<b><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom")), "html", null, true);
        echo "</a></b><br>
  ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "street"), "html", null, true);
        echo "<br>
  ";
        // line 35
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pc")), "html", null, true);
        echo "<br>

";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phones"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "phoneType"), "phoneType")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "phone"), "html", null, true);
            echo "
    <br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "
        Aucun Téléphone.

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<br>
<a href=\"mailto:";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email"), "html", null, true);
        echo "</a>
</address>
    </div>
    <pre id=\"note\">Notes: <a rel=\"modal-profile\" href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Note Client\"/></a></pre>
                    
";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 52
            echo "    <span class=\"dateSpan\"><b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "created"), "d/m/y"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "type"), "html", null, true);
            echo "</b></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "note")), "html", null, true);
            echo "<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>

";
    }

    // line 62
    public function block_right($context, array $blocks = array())
    {
        // line 63
        echo "<div >

      <div>  <pre id=\"vertical\">Services<a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id")), array("map" => (isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></pre>
</div>
      <div >
<table id=\"tbestimation\">

    
";
        // line 71
        if ((isset($context["clientServices"]) ? $context["clientServices"] : $this->getContext($context, "clientServices"))) {
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientServices"]) ? $context["clientServices"] : $this->getContext($context, "clientServices")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 73
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 80
                if ($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 81
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"  width=\"100px\" height=\"100px\" /></span></td>
        ";
                } else {
                    // line 83
                    echo "        <td/>
 ";
                }
                // line 85
                echo "        </tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 87
                echo "        <tr>
            <td>Aucun Services trouvés</td>
        </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    </table>
 ";
        }
        // line 94
        echo "
              </div>
              </div>

<div>

             <pre id=\"vertical\">Contrats<a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></pre>

     ";
        // line 102
        if ((isset($context["clientservicestest"]) ? $context["clientservicestest"] : $this->getContext($context, "clientservicestest"))) {
            // line 103
            echo "<table id=\"tbestimation\">
";
            // line 104
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientservicestest"]) ? $context["clientservicestest"] : $this->getContext($context, "clientservicestest")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 105
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 112
                if (($this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "date") != null)) {
                    // line 113
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 115
                    echo "                <td>N/A</td>
            ";
                }
                // line 117
                echo "                



         </tr>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 123
                echo "    <tr>
        <td>Aucunes contrats trouvées</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "    </table> 
";
        }
        // line 128
        echo "   
        </div>
        
    <div class=\"modale-profile\">
<h2>Ajouter une note:</h2>
    <a class=\"modal-close-profile\" title=\"Close profile window\" href=\"#\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
        echo "\" title=\"Fermer la fenêtre\"/></a>

    <form action=\"\" method=\"post\" ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'enctype');
        echo ">
    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'widget');
        echo "
    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'rest');
        echo "
    <input type=\"submit\" />
</form>
        </div>
</table>   
    <script type=\"text/javascript\">
   \$(document).ready(function(){
        \$.Dialog({
            'title'       : 'My dialog title',
            'content'     : 'HTML content',
            'draggable'   : true,
            'overlay'     : true,
            'closeButton' : true,
            'buttonsAlign': 'right',
            'keepOpened'  : false,
            'position'    : {
                'zone'    : 'right'
            },
            'buttons'     : {
                'button1'     : {
                    'action': function(){}
                },
                'button2'     : {
                    'action': function(){}
                }
            }
        });
    });
    </script>
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
        return array (  389 => 137,  385 => 136,  381 => 135,  376 => 133,  369 => 128,  365 => 127,  356 => 123,  346 => 117,  342 => 115,  336 => 113,  334 => 112,  328 => 111,  323 => 109,  319 => 108,  315 => 107,  311 => 106,  308 => 105,  303 => 104,  300 => 103,  298 => 102,  291 => 100,  283 => 94,  279 => 92,  269 => 87,  263 => 85,  259 => 83,  251 => 81,  249 => 80,  242 => 78,  238 => 77,  234 => 76,  230 => 75,  226 => 74,  223 => 73,  218 => 72,  216 => 71,  205 => 65,  201 => 63,  198 => 62,  192 => 58,  183 => 54,  171 => 52,  166 => 51,  161 => 49,  153 => 46,  150 => 45,  141 => 41,  130 => 38,  125 => 37,  118 => 35,  112 => 34,  104 => 33,  99 => 31,  93 => 30,  87 => 29,  78 => 23,  74 => 22,  67 => 17,  64 => 16,  55 => 10,  51 => 9,  46 => 7,  42 => 5,  39 => 4,  31 => 2,);
    }
}
