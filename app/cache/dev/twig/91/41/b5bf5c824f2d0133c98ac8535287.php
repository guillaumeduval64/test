<?php

/* MyAppApBundle:Map:voirClient.html.twig */
class __TwigTemplate_9141b5bf5c824f2d0133c98ac8535287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  <!DOCTYPE html>
  <html>
      <head>    
           <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />
          <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/map.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
      <script type=\"text/javascript\"
        src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
      </script>
    
      <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
  <script type=\"text/javascript\"> 
    function initialize() {
      // Create the map 
      // No need to specify zoom and center as we fit the map further down.
      var map = new google.maps.Map(document.getElementById(\"map_canvas\"), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        streetViewControl: false
      });
   
      // Define the list of markers.
      // This could be generated server-side with a script creating the array.
          var markers= ";
        // line 22
        echo twig_jsonencode_filter($this->getContext($context, "markers"));
        echo ";
      // Create the markers ad infowindows.
      for (index in markers) addMarker(markers[index]);
         
      
      function addMarker(data) {
           var counter = data.test;
  switch (counter)
  {
  case \"0\":
    image = \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong.png"), "html", null, true);
        echo "\";
    break;

  case \"1\":
    image = \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong1.png"), "html", null, true);
        echo "\";
    break;
  case \"2\":
    image = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong2.png"), "html", null, true);
        echo "\";
    break;
  case \"3\":
    image = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong3.png"), "html", null, true);
        echo "\";
    break;
  case \"4\":
    image = \"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong4.png"), "html", null, true);
        echo "\";
    break;
  case \"5\":
    image = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong5.png"), "html", null, true);
        echo "\";
    break;
  case \"6\":
    image = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong6.png"), "html", null, true);
        echo "\";
    break;
  case \"7\":
    image = \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong7.png"), "html", null, true);
        echo "\";
    break;
  case \"8\":
    image = \"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong8.png"), "html", null, true);
        echo "\";
    break;
  case \"9\":
    image = \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong9.png"), "html", null, true);
        echo "\";
    break;
  case \"10\":
    image = \"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong10.png"), "html", null, true);
        echo "\";
    break;
  default:
    image='http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin|bank-dollar|52B552';
  }
          
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(data.lat, data.lng),
          map: map,
          title: '1',
          icon: image,
          title: data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street+ ' '+'Canada'
        });
      
        // Create the infowindow with two DIV placeholders
        // One for a text string, the other for the StreetView panorama.
        var content = document.createElement(\"DIV\");
        var title = document.createElement(\"DIV\");
        var nomPrenom = data.nom + ' ' + data.prenom + ' ' + data.number + ' ' + data.street;
        var str = new String(nomPrenom);
        var URL = \"http://localhost:81/test/web/app_dev.php/fr/intranet/admin/\"+ data.id+'/estimation';
        title.innerHTML = str.link( URL );
        content.appendChild(title);
        var streetview = document.createElement(\"DIV\");
        streetview.style.width = \"200px\";
        streetview.style.height = \"200px\";
        content.appendChild(streetview);
        var infowindow = new google.maps.InfoWindow({
          content: content
        });

        // Open the infowindow on marker click
        google.maps.event.addListener(marker, \"click\", function() {
          infowindow.open(map, marker);
        });
      
        // Handle the DOM ready event to create the StreetView panorama
        // as it can only be created once the DIV inside the infowindow is loaded in the DOM.
        google.maps.event.addListenerOnce(infowindow, \"domready\", function() {
          var panorama = new google.maps.StreetViewPanorama(streetview, {
              navigationControl: false,
              enableCloseButton: false,
              addressControl: false,
              linksControl: false,
              visible: true,
              position: marker.getPosition()
          });
        });
      }

      // Zoom and center the map to fit the markers
      // This logic could be conbined with the marker creation.
      // Just keeping it separate for code clarity.
      var bounds = new google.maps.LatLngBounds();
      for (index in markers) {
        var data = markers[index];
        bounds.extend(new google.maps.LatLng(data.lat, data.lng));
      }
      map.fitBounds(bounds);
    }
  </script> 
  </head> 
      
      
  <body onload=\"initialize()\">
  <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/icon_gmap/icong.png"), "html", null, true);
        echo "\"/>
  ";
        // line 129
        $this->env->loadTemplate("MyAppApBundle:Map:voir.html.twig")->display($context);
        // line 130
        echo "    
  </body>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Map:voirClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 130,  191 => 129,  187 => 128,  119 => 63,  113 => 60,  107 => 57,  101 => 54,  95 => 51,  89 => 48,  83 => 45,  77 => 42,  71 => 39,  65 => 36,  58 => 32,  45 => 22,  25 => 5,  19 => 1,);
    }
}
