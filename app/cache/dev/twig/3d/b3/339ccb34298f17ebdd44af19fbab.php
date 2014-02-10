<?php

/* MyAppApBundle::layout.html.twig */
class __TwigTemplate_3db3339ccb34298f17ebdd44af19fbab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'previous' => array($this, 'block_previous'),
            'next' => array($this, 'block_next'),
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'page' => array($this, 'block_page'),
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
        <link rel=\"icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\" type=\"image/png\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/modern.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery-ui-1.10.1.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery.ui.timepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/icons.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/component.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/componentt.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/menu/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"shortcut icon\" href=\"../favicon.ico\">
        


";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a283788_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_jquery-ui-1.10.1_1.js");
            // line 33
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

";
            // asset "a283788_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_bootstrap_2.js");
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

";
            // asset "a283788_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_modernizr.custom_3.js");
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

";
            // asset "a283788_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_classie_4.js");
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

";
            // asset "a283788_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_mlpushmenu_5.js");
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

";
            // asset "a283788_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_dialog_6.js");
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

";
            // asset "a283788_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_dropdown_7.js");
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

";
            // asset "a283788_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_jquery.maskedinput_8.js");
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

";
            // asset "a283788_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_couleurs-stats_9.js");
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

";
            // asset "a283788_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788_date_10.js");
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

";
        } else {
            // asset "a283788"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a283788") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a283788.js");
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

";
        }
        unset($context["asset_url"]);
        // line 48
        echo "            <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    </head>
    <body>
    <title>Intranet</title>
<div class=\"container\">
            <!-- Push Wrapper -->
            <div class=\"mp-pusher\" id=\"mp-pusher\">

                <!-- mp-menu -->
                <nav id=\"mp-menu\" class=\"mp-menu\">
                    <div class=\"mp-level\">
                        <h2 class=\"icon icon-world\">Vitres</h2>
                        <ul>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/>Client</a></li>   
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/>RDV</a></li>
                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/>Contrat</a></li>
                         <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/>Production</a></li>
                                        <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/>Comptabilité</a></li>
                                        <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("myapp_map_voir");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/>Carte</a></li>
                                        <!--<li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("myapp_map_journey");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                        <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("myapp_message_liste");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/>Messages</a></li>
                                        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("myapp_front_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/>Dashboard</a></li>
                                <div class=\"mp-level\">
                                    <h2 class=\"icon icon-display\">Devices</h2>
                                    <ul>
                                        <li class=\"icon icon-arrow-left\">
                                            <a class=\"icon icon-phone\" href=\"#\">Mobile Phones</a>
                                            <div class=\"mp-level\">
                                                <h2>Mobile Phones</h2>
                                                <ul>
                                                    <li><a href=\"#\">Super Smart Phone</a></li>
                                                    <li><a href=\"#\">Thin Magic Mobile</a></li>
                                                    <li><a href=\"#\">Performance Crusher</a></li>
                                                    <li><a href=\"#\">Futuristic Experience</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"icon icon-arrow-left\">
                                            <a class=\"icon icon-tv\" href=\"#\">Televisions</a>
                                            <div class=\"mp-level\">
                                                <h2>Televisions</h2>
                                                <ul>
                                                    <li><a href=\"#\">Flat Superscreen</a></li>
                                                    <li><a href=\"#\">Gigantic LED</a></li>
                                                    <li><a href=\"#\">Power Eater</a></li>
                                                    <li><a href=\"#\">3D Experience</a></li>
                                                    <li><a href=\"#\">Classic Comfort</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"icon icon-arrow-left\">
                                            <a class=\"icon icon-camera\" href=\"#\">Cameras</a>
                                            <div class=\"mp-level\">
                                                <h2>Cameras</h2>
                                                <ul>
                                                    <li><a href=\"#\">Smart Shot</a></li>
                                                    <li><a href=\"#\">Power Shooter</a></li>
                                                    <li><a href=\"#\">Easy Photo Maker</a></li>
                                                    <li><a href=\"#\">Super Pixel</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"icon icon-arrow-left\">
                                <a class=\"icon icon-news\" href=\"#\">Magazines</a>
                                <div class=\"mp-level\">
                                    <h2 class=\"icon icon-news\">Magazines</h2>
                                    <ul>
                                        <li><a href=\"#\">National Geographic</a></li>
                                        <li><a href=\"#\">Scientific American</a></li>
                                        <li><a href=\"#\">The Spectator</a></li>
                                        <li><a href=\"#\">The Rambler</a></li>
                                        <li><a href=\"#\">Physics World</a></li>
                                        <li><a href=\"#\">The New Scientist</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"icon icon-arrow-left\">
                                <a class=\"icon icon-shop\" href=\"#\">Store</a>
                                <div class=\"mp-level\">
                                    <h2 class=\"icon icon-shop\">Store</h2>
                                    <ul>
                                        <li class=\"icon icon-arrow-left\">
                                            <a class=\"icon icon-t-shirt\" href=\"#\">Clothes</a>
                                            <div class=\"mp-level\">
                                                <h2 class=\"icon icon-t-shirt\">Clothes</h2>
                                                <ul>
                                                    <li class=\"icon icon-arrow-left\">
                                                        <a class=\"icon icon-female\" href=\"#\">Women's Clothing</a>
                                                        <div class=\"mp-level\">
                                                            <h2>Women's Clothing</h2>
                                                            <ul>
                                                                <li><a href=\"#\">Tops</a></li>
                                                                <li><a href=\"#\">Dresses</a></li>
                                                                <li><a href=\"#\">Trousers</a></li>
                                                                <li><a href=\"#\">Shoes</a></li>
                                                                <li><a href=\"#\">Sale</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class=\"icon icon-arrow-left\">
                                                        <a class=\"icon icon-male\" href=\"#\">Men's Clothing</a>
                                                        <div class=\"mp-level\">
                                                            <h2>Men's Clothing</h2>
                                                            <ul>
                                                                <li><a href=\"#\">Shirts</a></li>
                                                                <li><a href=\"#\">Trousers</a></li>
                                                                <li><a href=\"#\">Shoes</a></li>
                                                                <li><a href=\"#\">Sale</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class=\"icon icon-diamond\" href=\"#\">Jewelry</a>
                                        </li>
                                        <li>
                                            <a class=\"icon icon-music\" href=\"#\">Music</a>
                                        </li>
                                        <li>
                                            <a class=\"icon icon-food\" href=\"#\">Grocery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class=\"icon icon-photo\" href=\"#\">Collections</a></li>
                            <li><a class=\"icon icon-wallet\" href=\"#\">Credits</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /mp-menu -->

                <div class=\"scroller\"><!-- this is for emulating position fixed of the nav -->
                    <div class=\"scroller-inner\">
                        <!-- Top Navigation -->
                        <div class=\"codrops-top clearfix\">
                           <span>";
        // line 188
        $this->displayBlock('previous', $context, $blocks);
        echo "</span>
                           <span>";
        // line 189
        $this->displayBlock('next', $context, $blocks);
        echo "</span>
                        </div>
                        <div class=\"block block-40 clearfix\">
                                <p><a href=\"#\" id=\"trigger\" class=\"menu-trigger\">Menu</a></p>
                            </div>

                        <header class=\"codrops-header\">
                            <h1>";
        // line 196
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
                        </header>
                        <div class=\"content clearfix\">
                            


            <div class=\"page-region\" />
               

    </div>





    <div class=\"container\">
            <header class=\"clearfix\">
                <nav>
                    <a href=\"http://tympanus.net/Blueprints/AnimatedHeader/\" class=\"bp-icon bp-icon-prev\" data-info=\"previous Blueprint\"><span>Previous Blueprint</span></a>
                    <a href=\"http://tympanus.net/Blueprints/ResponsiveIconGrid/\" class=\"bp-icon bp-icon-next\" data-info=\"next Blueprint\"><span>Next Blueprint</span></a>
                    <a href=\"http://tympanus.net/codrops/?p=15656\" class=\"bp-icon bp-icon-drop\" data-info=\"back to the Codrops article\"><span>back to the Codrops article</span></a>
                    <a href=\"http://tympanus.net/codrops/category/blueprints/\" class=\"bp-icon bp-icon-archive\" data-info=\"Blueprints archive\"><span>Go to the archive</span></a>
                </nav>
            </header>   

";
        // line 221
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 222
        echo "
<div id=\"choisir_langue\">
                                   ";
        // line 224
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 225
            echo "                <span><li ";
            if (($this->getContext($context, "locale") == $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route_params"), "method"), array("_locale" => $this->getContext($context, "locale")))), "html", null, true);
            echo "\"><h5 class=\"fg-color-blue\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "locale")), "html", null, true);
            echo "</h5></a>
                </li><span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "</div>

            <div class=\"main\">
                <div id=\"cbp-vm\" class=\"cbp-vm-switcher cbp-vm-view-list\">
                    <div class=\"cbp-vm-options\">
<div class=\"recherche\">
";
        // line 235
        $this->displayBlock('recherche', $context, $blocks);
        // line 237
        echo "</div>
<div class=\"page\">
";
        // line 239
        $this->displayBlock('page', $context, $blocks);
        // line 241
        echo "</div>
</div>
                    ";
        // line 243
        $this->displayBlock('content', $context, $blocks);
        // line 247
        echo "
                    
                        ";
        // line 249
        $this->displayBlock('principalNote', $context, $blocks);
        // line 252
        echo "                    <div id=\"right\">
                        ";
        // line 253
        $this->displayBlock('right', $context, $blocks);
        // line 255
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 258
        $this->displayBlock('billFinal', $context, $blocks);
        // line 260
        echo "                    </div>
                    </div>


                </div>
            </div><!-- /main -->
        </div><!-- /container -->












            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>

                <div id=\"header\">


                    ";
        // line 287
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 290
        $this->displayBlock('note', $context, $blocks);
        // line 292
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 294
        echo "                </div>    
                </div>
                </div>
                </div>
                <div id=\"footer\">
                <div id=\"reserved\">
                                                
                                               
                                    <p>";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
</div>

                        
            </div><!-- /pusher -->
        </div><!-- /container -->

        </div>
        </div>
        </div>

        <script>
            new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
        </script>





    </body>
</html>";
    }

    // line 188
    public function block_previous($context, array $blocks = array())
    {
    }

    // line 189
    public function block_next($context, array $blocks = array())
    {
    }

    // line 196
    public function block_title($context, array $blocks = array())
    {
    }

    // line 235
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 239
    public function block_page($context, array $blocks = array())
    {
    }

    // line 243
    public function block_content($context, array $blocks = array())
    {
        // line 244
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 249
    public function block_principalNote($context, array $blocks = array())
    {
        // line 250
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 253
    public function block_right($context, array $blocks = array())
    {
        // line 254
        echo "                        ";
    }

    // line 258
    public function block_billFinal($context, array $blocks = array())
    {
        // line 259
        echo "                        ";
    }

    // line 287
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 290
    public function block_note($context, array $blocks = array())
    {
        // line 291
        echo "                    ";
    }

    // line 292
    public function block_bill($context, array $blocks = array())
    {
        // line 293
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
        return array (  750 => 293,  747 => 292,  743 => 291,  740 => 290,  735 => 287,  731 => 259,  728 => 258,  724 => 254,  721 => 253,  716 => 250,  713 => 249,  702 => 244,  699 => 243,  694 => 239,  689 => 235,  684 => 196,  679 => 189,  674 => 188,  649 => 302,  639 => 294,  636 => 292,  634 => 290,  628 => 287,  619 => 281,  596 => 260,  594 => 258,  589 => 255,  587 => 253,  584 => 252,  582 => 249,  578 => 247,  576 => 243,  572 => 241,  570 => 239,  566 => 237,  564 => 235,  556 => 229,  545 => 226,  538 => 225,  534 => 224,  530 => 222,  528 => 221,  500 => 196,  490 => 189,  486 => 188,  362 => 69,  356 => 68,  350 => 67,  344 => 66,  338 => 65,  332 => 64,  326 => 63,  320 => 62,  314 => 61,  299 => 48,  88 => 33,  84 => 22,  76 => 17,  71 => 15,  63 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  36 => 4,  94 => 31,  82 => 21,  80 => 20,  73 => 17,  67 => 14,  61 => 13,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  31 => 1,);
    }
}
