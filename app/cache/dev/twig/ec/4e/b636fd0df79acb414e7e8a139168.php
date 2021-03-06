<?php

/* MyAppApBundle:Client:lister.html.twig */
class __TwigTemplate_ec4eb636fd0df79acb414e7e8a139168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des clients";
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"recherche\">
<form id=\"form_recherche\" data-provide=\"typeahead\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("myapp_client_rechercher");
        echo "\" method=\"post\" >

                            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRecherche"]) ? $context["formRecherche"] : $this->getContext($context, "formRecherche")), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "autocomplete" => "off", "class" => "form_recherche search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />
                <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">Ajouter client</a>
</form>
</div>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div class=\"loading\"></div>
<div id=\"resultatsRecherche\"> 
    ";
        // line 19
        $this->env->loadTemplate("MyAppApBundle:Client:liste.html.twig")->display($context);
        // line 20
        echo "</div>
     ";
        // line 21
        $this->env->loadTemplate("MyAppApBundle:Client:ajouter.html.twig")->display($context);
        // line 22
        echo "
<script>
   
        \$(\".loading\").hide();
        \$(\"#form_recherche\").submit(function(){ 
            \$(\".loading\").show();
            var motcle = \$(\"#clientrecherche_motcle\").val();
            var DATA = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("myapp_client_rechercher");
        echo "\",
                data: DATA,
                cache: false,
                success: function(data){
                   \$('#resultatsRecherche').html(data);
                   \$(\".loading\").hide();
                }
            });    
            return false;
        });
        
        \$.fn.center = function () {
        this.css(\"position\",\"absolute\");
        this.css(\"top\", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + \"px\");
        this.css(\"left\", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + \"px\");
        return this;
      }
 
    \$(\".modal-profileClient\").center();
 
 
    \$('a[rel=\"modal-profileClient\"]').click(function() {
        \$('.modal-profileClient').fadeIn(\"slow\");
        \$('.modal-lightsoutClient').fadeTo(\"slow\", .9);
    });
 
    \$('a.modal-close-profileClient, .modal-lightsoutClient').click(function() {
        \$('.modal-profileClient').fadeOut(\"slow\");
        \$('.modal-lightsoutClient').fadeOut(\"slow\");
    });
            
</script>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  75 => 22,  73 => 21,  70 => 20,  68 => 19,  61 => 16,  52 => 10,  47 => 8,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
