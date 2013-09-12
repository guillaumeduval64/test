<?php

/* MyAppApBundle::layout.html.twig */
class __TwigTemplate_0fc7ab66170cb5638471187fcb7e7190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'content' => array($this, 'block_content'),
            'principalNote' => array($this, 'block_principalNote'),
            'right' => array($this, 'block_right'),
            'billFinal' => array($this, 'block_billFinal'),
            'javascripts' => array($this, 'block_javascripts'),
            'note' => array($this, 'block_note'),
            'bill' => array($this, 'block_bill'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\" type=\"image/png\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery-ui-1.10.1.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery.ui.timepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /><link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/bootstrap-flat-ui/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
 
          <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81c589a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a_jquery-ui-1.10.1_1.js");
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "81c589a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a_bootstrap_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "81c589a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a_jquery.maskedinput_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "81c589a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a_couleurs-stats_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "81c589a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a_date_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        } else {
            // asset "81c589a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81c589a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/81c589a.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        }
        unset($context["asset_url"]);
        // line 27
        echo "            <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>

<script>
    //bootstrap typeahead not working on search, je ne sais pas pk
\$(document).ready(function() {
\$('input.form_recherche').typeahead({
  name: 'accounts',
  local: ['timtrueman', 'JakeHarding', 'vskarich']
    });
});
</script>         



<script>
      google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
      google.setOnLoadCallback(drawChart);
      
    //         ['Semaine', 'P', 'E','C','P'],
    //      ['0',  1170, 460, 100, 460],
    //      ['-1',  660, 1120, 100, 502],
    //      ['-2',  1030, 540, 200, 809]
    //    ]); 
      
      var test = ";
        // line 51
        if (array_key_exists("test", $context)) {
            echo " ";
            echo twig_jsonencode_filter((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
            echo " ";
        }
        echo "; 
      console 
      function drawChart() {
        var data = google.visualization.arrayToDataTable(test);

        var options = {
          title: 'Performance',
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }  
</script>


    </head>
    <body class=\"homepage\">
     <div id=\"statistics\">
        <table>
            <tr>
            <td></td>
                <td>
                    S
                </td>
                <td>
                    M
                </td>
                <td>
                    A
                </td>
            </tr>

            <tr>
                <td>
                    P
                </td>
                    ";
        // line 87
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        // line 88
        echo "            </tr>

            <tr>
                <td>
                    E
                </td>
                ";
        // line 94
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        // line 95
        echo "            </tr>

            <tr>
                <td>
                    S
                </td>
                ";
        // line 101
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        // line 102
        echo "            </tr>

            <tr>
                <td>
                    P
                </td>
                ";
        // line 108
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        // line 109
        echo "            </tr>
        </table>
    </div>
        <div id=\"header-wrapper\">
        <div id=\"test\">
                    <div id=\"recherche\">
                        ";
        // line 115
        $this->displayBlock('recherche', $context, $blocks);
        // line 117
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            echo "                              <div class=\"alert\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                              <strong><img src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/valid.png"), "html", null, true);
            echo "\" title=\"Client\"/>";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </div>

            <div id=\"menu\">

                        <ul>
                                
                                        <li><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/></a></li>
                                   
                                    <li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/></a></li>
                                  
                                        <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/></a></li>
                                 
                                        <li><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>
                                        <!--<li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/></a></li>
                                    
                                        <li><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/></a></li>
                                    
                                
                            
                        </ul>
            </div>
            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">
                       
                    ";
        // line 157
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "                    
                        ";
        // line 165
        $this->displayBlock('principalNote', $context, $blocks);
        // line 168
        echo "                    <div id=\"right\">
                        ";
        // line 169
        $this->displayBlock('right', $context, $blocks);
        // line 171
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 174
        $this->displayBlock('billFinal', $context, $blocks);
        // line 176
        echo "                    </div>

                    ";
        // line 178
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 181
        $this->displayBlock('note', $context, $blocks);
        // line 183
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 185
        echo "                </div>    
                <div id=\"footer\">                            
                    ";
        // line 187
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 188
        echo "                    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en"));
        echo "\">EN</a>
                </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    // line 115
    public function block_recherche($context, array $blocks = array())
    {
        // line 116
        echo "                        ";
    }

    // line 157
    public function block_content($context, array $blocks = array())
    {
        // line 158
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 159
            echo "    <div class=\"flash notice\">
        ";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    ";
    }

    // line 165
    public function block_principalNote($context, array $blocks = array())
    {
        // line 166
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 169
    public function block_right($context, array $blocks = array())
    {
        // line 170
        echo "                        ";
    }

    // line 174
    public function block_billFinal($context, array $blocks = array())
    {
        // line 175
        echo "                        ";
    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 181
    public function block_note($context, array $blocks = array())
    {
        // line 182
        echo "                    ";
    }

    // line 183
    public function block_bill($context, array $blocks = array())
    {
        // line 184
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 184,  483 => 183,  479 => 182,  476 => 181,  471 => 178,  467 => 175,  464 => 174,  460 => 170,  457 => 169,  452 => 166,  449 => 165,  445 => 163,  436 => 160,  433 => 159,  428 => 158,  425 => 157,  421 => 116,  418 => 115,  412 => 4,  400 => 191,  396 => 190,  390 => 188,  388 => 187,  384 => 185,  381 => 183,  379 => 181,  373 => 178,  369 => 176,  367 => 174,  362 => 171,  360 => 169,  357 => 168,  355 => 165,  352 => 164,  350 => 157,  342 => 152,  329 => 144,  322 => 142,  315 => 140,  309 => 139,  302 => 137,  295 => 135,  288 => 133,  281 => 131,  274 => 129,  266 => 123,  255 => 120,  251 => 118,  246 => 117,  244 => 115,  236 => 109,  234 => 108,  226 => 102,  224 => 101,  216 => 95,  214 => 94,  206 => 88,  204 => 87,  161 => 51,  135 => 27,  67 => 20,  63 => 14,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  37 => 5,  33 => 4,  28 => 1,);
    }
}
