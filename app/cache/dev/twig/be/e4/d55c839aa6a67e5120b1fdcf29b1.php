<?php

/* MyAppApBundle:Comptabilite:voir.html.twig */
class __TwigTemplate_bee4d55c839aa6a67e5120b1fdcf29b1 extends Twig_Template
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
        echo "Bill: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "created"), "d/m/Y"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<table>
 <p> Créé le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "created"), "d/m/Y"), "html", null, true);
        echo " par <b>";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "user")), "html", null, true);
        echo "</b></p>
        <br>
        <p><b>Date: </b>
        ";
        // line 11
        if (($this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "date") != null)) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "date"), "d/m/Y"), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 14
            echo "            N/A
        ";
        }
        // line 16
        echo "        <p><b>Id Production: </b>
        ";
        // line 17
        if (($this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "production") != null)) {
            // line 18
            echo "               ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "production"), "id"), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 20
            echo "            N/A
        ";
        }
        // line 22
        echo "

 </p>      
        <p><b>Type: </b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "type"), "type"), "html", null, true);
        echo "</p>
        <p><b>Paiement: </b>";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "paiement")), "html", null, true);
        echo "</p>
        <p><b>Montant: </b>";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "montant"), 2, ",", "."), "html", null, true);
        echo "\$</p>
       <p><b>Note: </b>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "note"), "html", null, true);
        echo "</p>
      <p><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_comptabilite_supprimer", array("id" => $this->getAttribute((isset($context["comptabilite"]) ? $context["comptabilite"] : $this->getContext($context, "comptabilite")), "id"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
        echo "\" title=\"Supprimer bill\"/></a></p>
</table>                 
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Comptabilite:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  78 => 22,  74 => 20,  68 => 18,  66 => 17,  63 => 16,  59 => 14,  53 => 12,  51 => 11,  43 => 8,  39 => 6,  36 => 5,  29 => 2,);
    }
}
