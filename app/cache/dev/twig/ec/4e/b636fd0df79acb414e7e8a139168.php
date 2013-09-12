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
        echo "<form id=\"form_recherche\" data-provide=\"typeahead\" action=\"";
        echo $this->env->getExtension('routing')->getPath("myapp_client_rechercher");
        echo "\" method=\"post\" >

                            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRecherche"]) ? $context["formRecherche"] : $this->getContext($context, "formRecherche")), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "autocomplete" => "off", "class" => "form_recherche search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />
                <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">Ajouter client</a>
</form>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo " <!-- Modal -->

     ";
        // line 17
        $this->env->loadTemplate("MyAppApBundle:Client:ajouter.html.twig")->display($context);
        // line 18
        echo "
 
<div class=\"loading\"></div>
<div id=\"resultatsRecherche\"> 
    ";
        // line 22
        $this->env->loadTemplate("MyAppApBundle:Client:liste.html.twig")->display($context);
        // line 23
        echo "</div>
<script>
   
        \$(\".loading\").hide();
        \$(\"#form_recherche\").submit(function(){ 
            \$(\".loading\").show();
            var motcle = \$(\"#clientrecherche_motcle\").val();
            var DATA = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 33
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
        return array (  87 => 33,  75 => 23,  73 => 22,  67 => 18,  65 => 17,  61 => 15,  58 => 14,  50 => 9,  45 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
