<?php

/* MyAppApBundle:Client:lister.html.twig */
class __TwigTemplate_4665f7c91fcd1ce6368cac2c9379f539 extends Twig_Template
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
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formRecherche"), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "autocomplete" => "off", "class" => "form_recherche search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />
                </form>
</div>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        echo " 
                <button><a href='#' onclick='overlay()'>Ajouter un client</a></button>

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
        // line 31
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
        return array (  86 => 31,  75 => 22,  73 => 21,  70 => 20,  68 => 19,  59 => 14,  51 => 9,  46 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
