<?php

/* MyAppApBundle:Contrat:ajouter.html.twig */
class __TwigTemplate_018f8b00b670a23ca1942d531f0ca8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Ajouter un contrat";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\">Retour fiche Client</a>

<form action=\"\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
<table><tr><td>
</td>
<td>

\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clientService"), 'row');
        echo "

</td>
</tr></table>
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date de rappel", "class" => "input-small date")));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"image\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Contrat:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  64 => 18,  59 => 16,  52 => 12,  44 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
