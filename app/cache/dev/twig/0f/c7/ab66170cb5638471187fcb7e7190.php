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
      google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
      google.setOnLoadCallback(drawChart);
      
    //         ['Semaine', 'P', 'E','C','P'],
    //      ['0',  1170, 460, 100, 460],
    //      ['-1',  660, 1120, 100, 502],
    //      ['-2',  1030, 540, 200, 809]
    //    ]); 
      
      var test = ";
        // line 41
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
    <div id=\"header-wrapper\">
     <div id=\"statistics\">
     <div id=\"b\">
     <div id=\"a\">

                    ";
        // line 63
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        // line 64
        echo "</div>
     <div id=\"a\">
                ";
        // line 66
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        // line 67
        echo "</div>
<div id=\"a\">

                ";
        // line 70
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        // line 71
        echo "
</div>
<div id=\"a\">

                ";
        // line 75
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        // line 76
        echo "    </div>
    </div>
     </div>   
        <div id=\"test\">
                    <div id=\"recherche\">
                        ";
        // line 81
        $this->displayBlock('recherche', $context, $blocks);
        // line 83
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 84
            echo "                              <div class=\"alert\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                              <strong><img src=\"";
            // line 86
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
        // line 89
        echo "                    </div>

            <div id=\"menu\">

                        <ul>
                                
                                        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/></a></li>
                                   
                                    <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/></a></li>
                                  
                                        <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/></a></li>
                                 
                                        <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>
                                        <!--<li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/></a></li>
                                    
                                        <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/></a></li>
                                    
                                
                            
                        </ul>
            </div>
            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">
                       
                    ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "                    
                        ";
        // line 131
        $this->displayBlock('principalNote', $context, $blocks);
        // line 134
        echo "                    <div id=\"right\">
                        ";
        // line 135
        $this->displayBlock('right', $context, $blocks);
        // line 137
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 140
        $this->displayBlock('billFinal', $context, $blocks);
        // line 142
        echo "                    </div>

                    ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 147
        $this->displayBlock('note', $context, $blocks);
        // line 149
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 151
        echo "                </div>    
                <div id=\"footer\">                            
                    ";
        // line 153
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 154
        echo "                    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 157
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

    // line 81
    public function block_recherche($context, array $blocks = array())
    {
        // line 82
        echo "                        ";
    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
        // line 124
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 125
            echo "    <div class=\"flash notice\">
        ";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    ";
    }

    // line 131
    public function block_principalNote($context, array $blocks = array())
    {
        // line 132
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 135
    public function block_right($context, array $blocks = array())
    {
        // line 136
        echo "                        ";
    }

    // line 140
    public function block_billFinal($context, array $blocks = array())
    {
        // line 141
        echo "                        ";
    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 147
    public function block_note($context, array $blocks = array())
    {
        // line 148
        echo "                    ";
    }

    // line 149
    public function block_bill($context, array $blocks = array())
    {
        // line 150
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
        return array (  452 => 150,  449 => 149,  445 => 148,  442 => 147,  437 => 144,  433 => 141,  430 => 140,  426 => 136,  423 => 135,  418 => 132,  415 => 131,  411 => 129,  402 => 126,  399 => 125,  394 => 124,  391 => 123,  387 => 82,  384 => 81,  378 => 4,  366 => 157,  362 => 156,  356 => 154,  354 => 153,  350 => 151,  347 => 149,  345 => 147,  339 => 144,  335 => 142,  333 => 140,  328 => 137,  326 => 135,  323 => 134,  321 => 131,  318 => 130,  316 => 123,  308 => 118,  295 => 110,  288 => 108,  281 => 106,  275 => 105,  268 => 103,  261 => 101,  254 => 99,  247 => 97,  240 => 95,  232 => 89,  221 => 86,  217 => 84,  212 => 83,  210 => 81,  203 => 76,  201 => 75,  195 => 71,  193 => 70,  188 => 67,  186 => 66,  182 => 64,  180 => 63,  151 => 41,  135 => 27,  67 => 20,  63 => 14,  54 => 10,  50 => 9,  37 => 5,  38 => 6,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 8,  42 => 7,  39 => 7,  33 => 4,  31 => 4,  28 => 1,);
    }
}
