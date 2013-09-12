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
        echo "<div id= \"no-margin\">
<ul class=\"pager\">
  <li>                <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a>
  </li>
<li><b>État: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat"), "html", null, true);
        echo " </b></li>
  <li><a href=\"";
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
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
                </td>
            </tr>
            </table>
                               <h6><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "client" => (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
    <h6>Créé par: ";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    <h6>Service demandés: ";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "service"), "type")), "html", null, true);
        echo "</h6>
<address>
  <b><a href=\"#myModal\"  data-toggle=\"modal\">";
        // line 32
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom")), "html", null, true);
        echo "</a></b><br>
  ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "street"), "html", null, true);
        echo "<br>
  ";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pc")), "html", null, true);
        echo "<br>

";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phones"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 37
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
            // line 40
            echo "
        Aucun Téléphone.

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<br>
<a href=\"mailto:";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email"), "html", null, true);
        echo "</a>
</address>
    
    <pre id=\"note\">Notes: <a rel=\"modal-profile\" href=\"#\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Note Client\"/></a></pre>
                    
";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 51
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
            // line 53
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>

";
    }

    // line 61
    public function block_right($context, array $blocks = array())
    {
        // line 62
        echo "<div >

      <div>  <pre id=\"vertical\">Services<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id")), array("map" => (isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></pre>
</div>
      <div >
<table id=\"tbestimation\">

    
";
        // line 70
        if ((isset($context["clientServices"]) ? $context["clientServices"] : $this->getContext($context, "clientServices"))) {
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientServices"]) ? $context["clientServices"] : $this->getContext($context, "clientServices")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 72
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 79
                if ($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 80
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"/></span></td>
        ";
                } else {
                    // line 82
                    echo "        <td/>
 ";
                }
                // line 84
                echo "        </tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 86
                echo "        <tr>
            <td>Aucun Services trouvés</td>
        </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    </table>
 ";
        }
        // line 93
        echo "
              </div>
              </div>

<div>

             <pre id=\"vertical\">Contrats<a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></pre>

     ";
        // line 101
        if ((isset($context["clientservicestest"]) ? $context["clientservicestest"] : $this->getContext($context, "clientservicestest"))) {
            // line 102
            echo "<table id=\"tbestimation\">
";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientservicestest"]) ? $context["clientservicestest"] : $this->getContext($context, "clientservicestest")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 104
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 105
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 111
                if (($this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "date") != null)) {
                    // line 112
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["co"]) ? $context["co"] : $this->getContext($context, "co")), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 114
                    echo "                <td>N/A</td>
            ";
                }
                // line 116
                echo "                



         </tr>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 122
                echo "    <tr>
        <td>Aucunes contrats trouvées</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "    </table> 
";
        }
        // line 127
        echo "   
        </div>
        
    <div class=\"modal-profile\">
<h2>Ajouter une note:</h2>
    <a class=\"modal-close-profile\" title=\"Close profile window\" href=\"#\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
        echo "\" title=\"Fermer la fenêtre\"/></a>

    <form action=\"\" method=\"post\" ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'enctype');
        echo ">
    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'widget');
        echo "
    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNote"]) ? $context["formNote"] : $this->getContext($context, "formNote")), 'rest');
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
        return array (  389 => 136,  385 => 135,  381 => 134,  376 => 132,  369 => 127,  365 => 126,  356 => 122,  346 => 116,  342 => 114,  336 => 112,  334 => 111,  328 => 110,  323 => 108,  319 => 107,  315 => 106,  311 => 105,  308 => 104,  303 => 103,  300 => 102,  298 => 101,  291 => 99,  283 => 93,  279 => 91,  269 => 86,  263 => 84,  259 => 82,  251 => 80,  249 => 79,  242 => 77,  238 => 76,  234 => 75,  230 => 74,  226 => 73,  223 => 72,  218 => 71,  216 => 70,  205 => 64,  201 => 62,  198 => 61,  192 => 57,  183 => 53,  171 => 51,  166 => 50,  161 => 48,  153 => 45,  150 => 44,  141 => 40,  130 => 37,  125 => 36,  118 => 34,  112 => 33,  106 => 32,  101 => 30,  95 => 29,  89 => 28,  82 => 24,  78 => 23,  72 => 19,  70 => 18,  67 => 17,  64 => 16,  55 => 10,  51 => 9,  46 => 7,  42 => 5,  39 => 4,  31 => 2,);
    }
}
