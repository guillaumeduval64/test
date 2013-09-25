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
        // line 74
        echo "
            <div id=\"menu\">

  <div class=\"page secondary with-sidebar\">
        <div class=\"page-header\" />
 
        <div class=\"page-sidebar bg-color-blueLight\" />
 
                        <ul class=\"bg-color-blueLight\">
                                
                                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/>Client</a></li>
                                   
                                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/>RDV</a></li>
                                   
                                        <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/>Contrat</a></li>
                                  
                                        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/>Production</a></li>
                                 
                                        <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/>Comptabilité</a></li>
                                   
                                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/>Carte</a></li>
                                        <!--<li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/>Messages</a></li>
                                    
                                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/>Dashboard</a></li>
                                    
                                
                            
                        </ul>
                                            ";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        // line 105
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        // line 106
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        // line 107
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        // line 108
        echo "
</div>
        <div class=\"page-region\" />
                       
                    ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "

            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">

                    
                        ";
        // line 130
        $this->displayBlock('principalNote', $context, $blocks);
        // line 133
        echo "                    <div id=\"right\">
                        ";
        // line 134
        $this->displayBlock('right', $context, $blocks);
        // line 136
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 139
        $this->displayBlock('billFinal', $context, $blocks);
        // line 141
        echo "                    </div>

                    ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 146
        $this->displayBlock('note', $context, $blocks);
        // line 148
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 150
        echo "                </div>    
                </div>
                <div>
                                        <div class=\"login\">
                ";
        // line 154
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 155
        echo "                </div>
                <div>
                                    <p>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en"));
        echo "\">EN</a>
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

    // line 65
    public function block_recherche($context, array $blocks = array())
    {
        // line 66
        echo "                        
                            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 68
            echo "                              <div class=\"alert\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                              <strong><img src=\"";
            // line 70
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
        // line 73
        echo "                    ";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 114
            echo "    <div class=\"flash notice\">
        ";
            // line 115
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

    // line 130
    public function block_principalNote($context, array $blocks = array())
    {
        // line 131
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 134
    public function block_right($context, array $blocks = array())
    {
        // line 135
        echo "                        ";
    }

    // line 139
    public function block_billFinal($context, array $blocks = array())
    {
        // line 140
        echo "                        ";
    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 146
    public function block_note($context, array $blocks = array())
    {
        // line 147
        echo "                    ";
    }

    // line 148
    public function block_bill($context, array $blocks = array())
    {
        // line 149
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
        return array (  523 => 149,  520 => 148,  516 => 147,  513 => 146,  508 => 143,  504 => 140,  501 => 139,  497 => 135,  494 => 134,  489 => 131,  486 => 130,  474 => 115,  471 => 114,  466 => 113,  463 => 112,  459 => 73,  448 => 70,  444 => 68,  440 => 67,  437 => 66,  434 => 65,  428 => 4,  419 => 160,  415 => 159,  410 => 157,  406 => 155,  404 => 154,  398 => 150,  395 => 148,  393 => 146,  387 => 143,  383 => 141,  381 => 139,  376 => 136,  371 => 133,  369 => 130,  360 => 124,  352 => 112,  346 => 108,  343 => 107,  340 => 106,  337 => 105,  325 => 99,  318 => 97,  311 => 95,  305 => 94,  298 => 92,  277 => 86,  270 => 84,  258 => 74,  218 => 36,  64 => 21,  60 => 13,  54 => 10,  46 => 8,  37 => 5,  33 => 4,  28 => 1,  378 => 135,  374 => 134,  358 => 120,  354 => 120,  345 => 115,  339 => 113,  335 => 104,  329 => 109,  327 => 108,  321 => 107,  316 => 105,  312 => 104,  308 => 103,  304 => 102,  301 => 101,  296 => 100,  293 => 99,  291 => 90,  284 => 88,  276 => 90,  272 => 88,  262 => 83,  256 => 65,  252 => 79,  244 => 77,  242 => 76,  235 => 74,  231 => 47,  227 => 72,  223 => 71,  219 => 70,  216 => 69,  211 => 68,  209 => 67,  198 => 61,  194 => 59,  191 => 58,  185 => 54,  176 => 50,  164 => 48,  159 => 47,  148 => 41,  145 => 40,  138 => 38,  127 => 35,  122 => 34,  115 => 32,  109 => 31,  101 => 30,  96 => 28,  90 => 27,  84 => 26,  75 => 20,  71 => 19,  61 => 12,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  42 => 7,  39 => 4,  31 => 2,);
    }
}
