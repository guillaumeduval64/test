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
            'page' => array($this, 'block_page'),
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

    // line 3
    public function block_recherche($context, array $blocks = array())
    {
        // line 4
        echo "
<form id=\"form_recherche\" data-provide=\"typeahead\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("myapp_client_rechercher");
        echo "\" method=\"post\" >
                            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formRecherche"), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "autocomplete" => "off", "class" => "form_recherche search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />
                </form>


";
    }

    // line 13
    public function block_page($context, array $blocks = array())
    {
        echo " 

                       <span data-view=\"cbp-vm-view-grid\">";
        // line 15
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "</span>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div class=\"loading\"></div>
<div id=\"resultatsRecherche\"> 
    ";
        // line 20
        $this->env->loadTemplate("MyAppApBundle:Client:liste.html.twig")->display($context);
        // line 21
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
        return array (  94 => 31,  82 => 21,  80 => 20,  73 => 17,  67 => 15,  61 => 13,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
