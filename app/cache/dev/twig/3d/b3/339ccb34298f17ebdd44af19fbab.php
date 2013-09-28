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
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fdde227_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fdde227_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fdde227_jquery-ui-1.10.1_1.js");
            // line 21
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
        // line 36
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
        // line 47
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
        // line 65
        $this->displayBlock('recherche', $context, $blocks);
        // line 73
        echo "                <div class=\"login\">
                ";
        // line 74
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 75
        echo "                </div>

                </div>
            <div id=\"menu\">

  <div class=\"page secondary with-sidebar\">
        <div class=\"page-header\" />
                 <div id=\"choisir_langue\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("site.langue"), "html", null, true);
        echo "
                    <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en"));
        echo "\">EN</a>
                    </div>
        <div class=\"page-sidebar bg-color-blueLight\" />
 
                        <ul class=\"bg-color-blueLight\">
                                
                                        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/>Client</a></li>
                                   
                                    <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/>RDV</a></li>
                                   
                                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/>Contrat</a></li>
                                  
                                        <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/>Production</a></li>
                                 
                                        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/>Comptabilité</a></li>
                                   
                                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/>Carte</a></li>
                                        <!--<li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/>Messages</a></li>
                                    
                                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/>Dashboard</a></li>
                                    
                                
                            
                        </ul>
                                            ";
        // line 110
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        // line 111
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        // line 112
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        // line 113
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        // line 114
        echo "
</div>
        <div class=\"page-region\" />
                       
                    ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "

            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">

                    
                        ";
        // line 136
        $this->displayBlock('principalNote', $context, $blocks);
        // line 139
        echo "                    <div id=\"right\">
                        ";
        // line 140
        $this->displayBlock('right', $context, $blocks);
        // line 142
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 145
        $this->displayBlock('billFinal', $context, $blocks);
        // line 147
        echo "                    </div>

                    ";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 152
        $this->displayBlock('note', $context, $blocks);
        // line 154
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 156
        echo "                </div>    
                </div>
                <div>

                <div>
                                    <p>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>

</div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    // line 65
    public function block_recherche($context, array $blocks = array())
    {
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

    // line 118
    public function block_content($context, array $blocks = array())
    {
        // line 119
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 120
            echo "    <div class=\"flash notice\">
        ";
            // line 121
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

    // line 136
    public function block_principalNote($context, array $blocks = array())
    {
        // line 137
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 140
    public function block_right($context, array $blocks = array())
    {
        // line 141
        echo "                        ";
    }

    // line 145
    public function block_billFinal($context, array $blocks = array())
    {
        // line 146
        echo "                        ";
    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 152
    public function block_note($context, array $blocks = array())
    {
        // line 153
        echo "                    ";
    }

    // line 154
    public function block_bill($context, array $blocks = array())
    {
        // line 155
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
        return array (  527 => 155,  524 => 154,  520 => 153,  517 => 152,  512 => 149,  508 => 146,  505 => 145,  501 => 141,  498 => 140,  493 => 137,  490 => 136,  478 => 121,  475 => 120,  470 => 119,  467 => 118,  463 => 72,  452 => 69,  448 => 67,  444 => 66,  439 => 65,  433 => 4,  424 => 161,  417 => 156,  414 => 154,  412 => 152,  406 => 149,  402 => 147,  400 => 145,  395 => 142,  393 => 140,  390 => 139,  388 => 136,  379 => 130,  373 => 126,  371 => 118,  365 => 114,  362 => 113,  359 => 112,  356 => 111,  354 => 110,  344 => 105,  337 => 103,  330 => 101,  324 => 100,  317 => 98,  310 => 96,  303 => 94,  296 => 92,  289 => 90,  280 => 84,  276 => 83,  272 => 82,  263 => 75,  261 => 74,  258 => 73,  256 => 65,  231 => 47,  218 => 36,  64 => 21,  60 => 13,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  37 => 5,  33 => 4,  28 => 1,);
    }
}
