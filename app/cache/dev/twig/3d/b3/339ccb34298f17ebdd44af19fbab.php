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
            'stat' => array($this, 'block_stat'),
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
        echo "\" type=\"text/css\" media=\"all\" />  
          <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "deecb50_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_jquery-ui-1.10.1_1.js");
            // line 18
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_bootstrap_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_jquery.maskedinput_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_date_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        } else {
            // asset "deecb50"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        }
        unset($context["asset_url"]);
        // line 25
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

<script>


</script>

    </head>
    <body class=\"homepage\">
        <div id=\"header-wrapper\">
        <div id=\"test\">
                    <div id=\"recherche\">
                        ";
        // line 71
        $this->displayBlock('recherche', $context, $blocks);
        // line 73
        echo "                    </div>

            <div id=\"menu\">

                        <ul>
                                
                                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/></a></li>
                                   
                                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/></a></li>
                                  
                                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/></a></li>
                                 
                                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/></a></li>
                                   
                                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>
                                        <!--<li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    
                                        <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/></a></li>
                                    
                                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("myapp_dashboard_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/></a></li>
                                    
                                
                            
                        </ul>
            </div>
            <div id=\"page\">
 ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 102
            echo "                        <div class=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong><img src=\"";
            // line 104
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
        // line 107
        echo "
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">
                       
             
                   


                          <div id=\"stat\">          
                    ";
        // line 119
        $this->displayBlock('stat', $context, $blocks);
        // line 124
        echo "                </div>
                    ";
        // line 125
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "                    
                        ";
        // line 133
        $this->displayBlock('principalNote', $context, $blocks);
        // line 136
        echo "                    <div id=\"right\">
                        ";
        // line 137
        $this->displayBlock('right', $context, $blocks);
        // line 139
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 142
        $this->displayBlock('billFinal', $context, $blocks);
        // line 144
        echo "                    </div>

                    ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 149
        $this->displayBlock('note', $context, $blocks);
        // line 151
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 153
        echo "                </div>    
                <div id=\"footer\">                            
                    ";
        // line 155
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 156
        echo "                    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
                    <a href=\"";
        // line 159
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

    // line 71
    public function block_recherche($context, array $blocks = array())
    {
        // line 72
        echo "                        ";
    }

    // line 119
    public function block_stat($context, array $blocks = array())
    {
        // line 120
        echo "                       

                        
                    ";
    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        // line 126
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 127
            echo "    <div class=\"flash notice\">
        ";
            // line 128
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                    ";
    }

    // line 133
    public function block_principalNote($context, array $blocks = array())
    {
        // line 134
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 137
    public function block_right($context, array $blocks = array())
    {
        // line 138
        echo "                        ";
    }

    // line 142
    public function block_billFinal($context, array $blocks = array())
    {
        // line 143
        echo "                        ";
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 149
    public function block_note($context, array $blocks = array())
    {
        // line 150
        echo "                    ";
    }

    // line 151
    public function block_bill($context, array $blocks = array())
    {
        // line 152
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
        return array (  441 => 152,  438 => 151,  434 => 150,  431 => 149,  426 => 146,  422 => 143,  419 => 142,  415 => 138,  412 => 137,  407 => 134,  404 => 133,  400 => 131,  391 => 128,  388 => 127,  383 => 126,  380 => 125,  373 => 120,  370 => 119,  366 => 72,  363 => 71,  357 => 4,  345 => 159,  341 => 158,  335 => 156,  333 => 155,  329 => 153,  326 => 151,  324 => 149,  318 => 146,  314 => 144,  312 => 142,  307 => 139,  305 => 137,  302 => 136,  300 => 133,  297 => 132,  295 => 125,  292 => 124,  290 => 119,  277 => 109,  273 => 107,  262 => 104,  258 => 102,  254 => 101,  242 => 94,  235 => 92,  228 => 90,  222 => 89,  215 => 87,  208 => 85,  201 => 83,  194 => 81,  187 => 79,  179 => 73,  177 => 71,  146 => 47,  122 => 25,  65 => 18,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  29 => 1,);
    }
}