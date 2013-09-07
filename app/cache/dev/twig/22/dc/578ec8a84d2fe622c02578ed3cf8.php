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
        echo "<div id= \"no-margin\">
<ul class=\"pager\">
  <li>                <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a>
  </li>
<li><b>État: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "etat"), "html", null, true);
        echo " </b></li>
  <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Next")), "html", null, true);
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
        echo "
";
        // line 18
        $this->env->loadTemplate("MyAppApBundle:Client:ajouter.html.twig")->display($context);
        // line 19
        echo "<div class= \"left-map\">
<table id=\"map\">
            <tr>
                <td>
                    ";
        // line 23
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer($this->getContext($context, "map"));
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "
                </td>
            </tr>
            </table>
                               <h6><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
    <h6>Créé par: ";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    <h6>Service demandés: ";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
        echo "</h6>
<address>
  <b><a href=\"#myModal\"  data-toggle=\"modal\">";
        // line 32
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
        echo "</a></b><br>
  ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "street"), "html", null, true);
        echo "<br>
  ";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "pc"), "html", null, true);
        echo "<br>
  <abbr title=\"Phone\">P:</abbr> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "phoneNumber"), "html", null, true);
        echo "<br>
  <abbr title=\"Cell\">C:</abbr> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "phoneNumberCell"), "html", null, true);
        echo "<br>
  <a href=\"mailto:";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "</a>
</address>
    
    <pre id=\"note\">Notes: <a rel=\"modal-profile\" href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Note Client\"/></a></pre>
                    
";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notes"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 43
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
            // line 45
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>

";
    }

    // line 53
    public function block_right($context, array $blocks = array())
    {
        // line 54
        echo "<div >

      <div>  <pre id=\"vertical\">Services<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute($this->getContext($context, "client"), "id")), array("map" => $this->getContext($context, "map"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></pre>
</div>
      <div >
<table id=\"tbestimation\">

    
";
        // line 62
        if ($this->getContext($context, "clientServices")) {
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientServices"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 64
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute($this->getContext($context, "s"), "id"), "id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 71
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "s", true), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 72
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"/></span></td>
        ";
                } else {
                    // line 74
                    echo "        <td/>
 ";
                }
                // line 76
                echo "        </tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 78
                echo "        <tr>
            <td>Aucun Services trouvés</td>
        </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </table>
 ";
        }
        // line 85
        echo "
              </div>
              </div>

<div>

             <pre id=\"vertical\">Contrats<a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></pre>

     ";
        // line 93
        if ($this->getContext($context, "clientservicestest")) {
            // line 94
            echo "<table id=\"tbestimation\">
";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientservicestest"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 96
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute($this->getContext($context, "co"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 103
                if (($this->getAttribute($this->getContext($context, "co"), "date") != null)) {
                    // line 104
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 106
                    echo "                <td>N/A</td>
            ";
                }
                // line 108
                echo "                



         </tr>       
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
        
    <div class=\"modal-profile\">
<h2>Ajouter une note:</h2>
    <a class=\"modal-close-profile\" title=\"Close profile window\" href=\"#\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
        echo "\" title=\"Fermer la fenêtre\"/></a>

    <form action=\"\" method=\"post\" ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'enctype');
        echo ">
    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'widget');
        echo "
    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'rest');
        echo "
    <input type=\"submit\" />
</form>
        </div>
        
   
</table>   
    
<script type=\"text/javascript\">
\$.fn.center = function () {
        this.css(\"position\",\"absolute\");
        this.css(\"top\", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + \"px\");
        this.css(\"left\", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + \"px\");
        return this;
      }
 
    \$(\".modal-profile\").center();
 
 
    \$('a[rel=\"modal-profile\"]').click(function() {
        \$('.modal-profile').fadeIn(\"slow\");
        \$('.modal-lightsout').fadeTo(\"slow\", .9);
    });
 
    \$('a.modal-close-profile, .modal-lightsout').click(function() {
        \$('.modal-profile').fadeOut(\"slow\");
        \$('.modal-lightsout').fadeOut(\"slow\");
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
        return array (  368 => 128,  364 => 127,  360 => 126,  355 => 124,  348 => 119,  344 => 118,  335 => 114,  325 => 108,  321 => 106,  315 => 104,  313 => 103,  307 => 102,  302 => 100,  298 => 99,  294 => 98,  290 => 97,  287 => 96,  282 => 95,  279 => 94,  277 => 93,  270 => 91,  262 => 85,  258 => 83,  248 => 78,  242 => 76,  238 => 74,  230 => 72,  228 => 71,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  202 => 64,  197 => 63,  195 => 62,  184 => 56,  180 => 54,  177 => 53,  171 => 49,  162 => 45,  150 => 43,  145 => 42,  140 => 40,  132 => 37,  128 => 36,  124 => 35,  118 => 34,  112 => 33,  106 => 32,  101 => 30,  95 => 29,  89 => 28,  82 => 24,  78 => 23,  72 => 19,  70 => 18,  67 => 17,  64 => 16,  55 => 10,  51 => 9,  46 => 7,  42 => 5,  39 => 4,  31 => 2,);
    }
}
