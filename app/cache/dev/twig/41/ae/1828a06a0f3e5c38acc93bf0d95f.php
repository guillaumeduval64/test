<?php

/* MyAppApBundle:Contrat:lister.html.twig */
class __TwigTemplate_41ae1828a06a0f3e5c38acc93bf0d95f extends Twig_Template
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
        echo "Liste des contrats: ";
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo "<form id=\"form_recherche\" action=\"";
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_rechercher");
        echo "\" method=\"post\">

                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "class" => "search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />

        
</form>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"loading\"></div>
<div id=\"resultats_recherche\"> 
    ";
        // line 18
        $this->env->loadTemplate("MyAppApBundle:Contrat:liste.html.twig")->display($context);
        // line 19
        echo "        </div>

        <script>
        \$(\".loading\").hide();
        \$(\"#form_recherche\").submit(function(){ 
            \$(\".loading\").show();
            var motcle = \$(\"#contratrecherche_motcle\").val();
            var DATA = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_rechercher");
        echo "\",
                data: DATA,
                cache: false,
                success: function(data){
                   \$('#resultats_recherche').html(data);
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
        return "MyAppApBundle:Contrat:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  68 => 19,  66 => 18,  62 => 16,  59 => 15,  50 => 9,  45 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
