<?php

/* MyAppApBundle::layout.html.twig */
class __TwigTemplate_3db3339ccb34298f17ebdd44af19fbab extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/modern.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery-ui-1.10.1.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery.ui.timepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
          <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fdde227_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_jquery-ui-1.10.1_1.js");
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_bootstrap_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_dialog_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_dropdown_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_jquery.maskedinput_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_couleurs-stats_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "fdde227_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_date_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        } else {
            // asset "fdde227"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>

    <script type=\"text/javascript\">
  
  function overlay() {
  el = document.getElementById(\"overlay\");
  el.style.visibility = (el.style.visibility == \"visible\") ? \"hidden\" : \"visible\";
}
</script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        }
        unset($context["asset_url"]);
        // line 35
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
        // line 46
        if (array_key_exists("test", $context)) {
            echo " ";
            echo twig_jsonencode_filter($this->getContext($context, "test"));
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
    <body class=\"metrouicss\">
        <div id=\"test\">
                    <div id=\"recherche\" class=\"bg-color-blue\">
                        ";
        // line 64
        $this->displayBlock('recherche', $context, $blocks);
        // line 73
        echo "
            <div id=\"menu\">

  <div class=\"page secondary with-sidebar\">
        <div class=\"page-header\" />
 
        <div class=\"page-sidebar\" />
 
                        <ul>
                                
                                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/>Client</a></li>
                                   
                                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/>RDV</a></li>
                                   
                                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/>Contrat</a></li>
                                  
                                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/>Production</a></li>
                                 
                                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/>Comptabilité</a></li>
                                   
                                        <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/>Carte</a></li>
                                        <!--<li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/>Messages</a></li>
                                    
                                        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/>Dashboard</a></li>
                                    
                                
                            
                        </ul>
                                            ";
        // line 103
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        // line 104
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        // line 105
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        // line 106
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        // line 107
        echo "
</div>
        <div class=\"page-region\" />
                       
                    ";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "

            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">

                    
                        ";
        // line 129
        $this->displayBlock('principalNote', $context, $blocks);
        // line 132
        echo "                    <div id=\"right\">
                        ";
        // line 133
        $this->displayBlock('right', $context, $blocks);
        // line 135
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 138
        $this->displayBlock('billFinal', $context, $blocks);
        // line 140
        echo "                    </div>

                    ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 145
        $this->displayBlock('note', $context, $blocks);
        // line 147
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 149
        echo "                </div>    
                </div>
                <div>
                                        <div class=\"login\">
                ";
        // line 153
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 154
        echo "                </div>
                                    <p>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en"));
        echo "\">EN</a>
</div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    // line 64
    public function block_recherche($context, array $blocks = array())
    {
        // line 65
        echo "                        
                            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "                              <div class=\"alert\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                              <strong><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/valid.png"), "html", null, true);
            echo "\" title=\"Client\"/>";
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "</strong>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    ";
    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        // line 112
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 113
            echo "    <div class=\"flash notice\">
        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 129
    public function block_principalNote($context, array $blocks = array())
    {
        // line 130
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 133
    public function block_right($context, array $blocks = array())
    {
        // line 134
        echo "                        ";
    }

    // line 138
    public function block_billFinal($context, array $blocks = array())
    {
        // line 139
        echo "                        ";
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 145
    public function block_note($context, array $blocks = array())
    {
        // line 146
        echo "                    ";
    }

    // line 147
    public function block_bill($context, array $blocks = array())
    {
        // line 148
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
        return array (  517 => 148,  514 => 147,  510 => 146,  507 => 145,  502 => 142,  498 => 139,  495 => 138,  491 => 134,  488 => 133,  483 => 130,  480 => 129,  468 => 114,  465 => 113,  460 => 112,  457 => 111,  453 => 72,  442 => 69,  438 => 67,  434 => 66,  431 => 65,  428 => 64,  422 => 4,  414 => 158,  410 => 157,  405 => 155,  402 => 154,  400 => 153,  394 => 149,  391 => 147,  389 => 145,  383 => 142,  379 => 140,  377 => 138,  372 => 135,  370 => 133,  367 => 132,  365 => 129,  356 => 123,  350 => 119,  348 => 111,  342 => 107,  339 => 106,  336 => 105,  333 => 104,  331 => 103,  321 => 98,  314 => 96,  307 => 94,  301 => 93,  294 => 91,  287 => 89,  280 => 87,  273 => 85,  266 => 83,  254 => 73,  252 => 64,  227 => 46,  214 => 35,  60 => 20,  56 => 12,  50 => 9,  46 => 8,  42 => 7,  37 => 5,  33 => 4,  28 => 1,);
    }
}
