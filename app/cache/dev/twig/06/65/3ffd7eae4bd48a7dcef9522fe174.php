<?php

/* MyAppApBundle:Production:modifier.html.twig */
class __TwigTemplate_06653ffd7eae4bd48a7dcef9522fe174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modifier production: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "client"), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "client"), "prenom")), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<table id=\"modifierProd\">
    <tr>
        <td>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "client"), "id"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\" title=\"Voir Fiche client\"/></a>
        </td>
        <td>
            <a href=\"#myModalTest\" role=\"button\" class=\"btn\" data-toggle=\"modal\"> <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/money.png"), "html", null, true);
        echo "\" title=\"Ajouter compta\"/></a></td>

        <td>
            <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Début\"/></a>
        </td>
<td> 
    <p><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_satisfaction_ajouter", array("id" => $this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "id"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
        echo "\" title=\"Début\"/><a></p>
</td>
    </tr>
</table> 
<p><b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), 0, array(), "array"), "contratEstimation"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), 0, array(), "array"), "numero"), "html", null, true);
        echo "</b></p>
";
        // line 24
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 25
            echo "<p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\" title=\"Ajouté\"/> ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 27
        echo " 
<!-- Modal -->
<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Planning:</h3>
  </div>       
    <div class=\"modal-body\">
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_start", array("id" => $this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formStart"]) ? $context["formStart"] : $this->getContext($context, "formStart")), 'widget');
        echo "
<input type=\"image\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter\" />
            </form>

<table>
    <th></th>
    <th></th>
<th>Début à:</th>
<th>Fin à:</th>
<th>Ne pas tenir compte de cette colonne!</th>
";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["e"]) {
            echo "        
    <tr>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo ":</td> 
        <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "heureD"), "d/m/y"), "html", null, true);
            echo " </td> 
        <td><b>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "heureD"), "H:i"), "html", null, true);
            echo "</b></td>
        <td>
        ";
            // line 52
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "heureF"), "H:i") != "00:00")) {
                echo "  
        <b>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "heureF"), "H:i"), "html", null, true);
                echo "</b>
        ";
            } else {
                // line 55
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_stop", array("id" => $this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "id"), "test" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"))), "html", null, true);
                echo "\">Stop</a> 
        ";
            }
            // line 56
            echo "  
        </td> 
        <td> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "prenom"), "html", null, true);
            echo "</td> 
";
            // line 60
            echo "
    
    </tr> 
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo " 
À définir  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</table>
    </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
    <input type=\"text\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </div>
</div>

<!-- Modal Comptabilite -->
<div id=\"myModalTest\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Ajout d'une facture:</h3>
  </div>       
    <div class=\"modal-body\">
        <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_comptabilite", array("id" => $this->getAttribute((isset($context["production"]) ? $context["production"] : $this->getContext($context, "production")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <table>           
        <tr>
            <td>
";
        // line 85
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 86
            echo "                    <p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\"/></p>
";
        }
        // line 88
        echo "                    </td>
                </tr>

                    <div class=\"error\">
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        </div>

                        <tr>
                            <td>
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paiement"), 'errors');
        echo "
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paiement"), 'widget');
        echo "

                                </td>
                            </tr>
                             <tr>
                            <td>
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("placeholder" => "Date d", "class" => "input-medium date")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label');
        echo "
            ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant"), 'label');
        echo "
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant"), 'errors');
        echo "
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant"), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
            ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bilan"), 'errors');
        echo "
            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bilan"), 'widget');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note"), 'errors');
        echo "
            ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note"), 'widget');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
      ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
                                                    <input type=\"image\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" />
                                                </td>
                                            </tr>
                                    </table>

                                </form>

    </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
    <input type=\"text\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </div>
</div>
     









<form class=\"form-horizontal\" action=\"\" method=\"post\" ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), 'enctype');
        echo ">
    <table id=\"tableauProd\">   
        <tr>
            <td>
                
                    <div class=\"error\">
            ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), 'errors');
        echo "
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                                ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "period"), 'errors');
        echo " 
                    </td>
                    <td>
";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionDateProd"), 'errors');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>
                                ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "period"), 'widget', array("class" => "input-small date"));
        echo " 
                    </td>
                    </tr>
                    <tr>
                    <td>
";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionDateProd"), 'widget');
        echo "                    
                </td>
            </tr>
            <tr>
               <td>
                                ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "dateProd"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-small date")));
        echo "
                </td>
                                    </tr>
                    <tr>
                <td>
                                ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionHeureD"), 'errors');
        echo "
                                ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionHeureD"), 'widget', array("attr" => array("placeholder" => "Début", "class" => "input-mini timepicker")));
        echo "
                </td>
                                    </tr>
                    <tr>
                <td>
                                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionHeureF"), 'errors');
        echo "
                                ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "previsionHeureF"), 'widget', array("attr" => array("placeholder" => "Fin", "class" => "input-mini timepicker")));
        echo "
                </td>
            </tr>
            <tr>
                <td>
                                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "statut"), 'label');
        echo "
                                ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "statut"), 'errors');
        echo "
                                ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "statut"), 'widget');
        echo "
                </td>
                </tr>
                <tr>
                <td>
                                ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "contratCree"), 'label');
        echo "
                                ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "contratCree"), 'errors');
        echo "
                                ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), "contratCree"), 'widget');
        echo "
                </td>
            </tr>

                <tr>
                    <td>
                                ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtat"]) ? $context["formEtat"] : $this->getContext($context, "formEtat")), 'rest');
        echo "  
                            <input type=\"image\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter\" />
                        </td>
                    </tr>
                    
                </table>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Production:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 223,  454 => 222,  445 => 216,  441 => 215,  437 => 214,  429 => 209,  425 => 208,  421 => 207,  413 => 202,  409 => 201,  401 => 196,  397 => 195,  389 => 190,  381 => 185,  373 => 180,  365 => 175,  359 => 172,  350 => 166,  341 => 160,  315 => 137,  311 => 136,  303 => 131,  299 => 130,  290 => 124,  286 => 123,  278 => 118,  274 => 117,  270 => 116,  262 => 111,  258 => 110,  254 => 109,  246 => 104,  237 => 98,  233 => 97,  225 => 92,  219 => 88,  213 => 86,  211 => 85,  202 => 81,  185 => 66,  177 => 63,  169 => 60,  165 => 58,  161 => 56,  155 => 55,  150 => 53,  146 => 52,  141 => 50,  137 => 49,  133 => 48,  125 => 46,  113 => 37,  109 => 36,  103 => 35,  93 => 27,  85 => 25,  83 => 24,  77 => 23,  68 => 19,  62 => 16,  56 => 13,  48 => 10,  42 => 6,  39 => 5,  29 => 3,);
    }
}
