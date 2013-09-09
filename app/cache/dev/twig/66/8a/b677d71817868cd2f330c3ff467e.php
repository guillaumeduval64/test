<?php

/* MyAppApBundle:Contrat:voir.html.twig */
class __TwigTemplate_668ab677d71817868cd2f330c3ff467e extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "contratEstimation"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "numero")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<table>
    <tr>
        <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "client"), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "client"), "prenom")), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_clientContrat_voir", array("id" => $this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "id"))), "html", null, true);
        echo "\"><image src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/barcode.png"), "html", null, true);
        echo "\"></a></td>
</tr>
</table>
";
        // line 12
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 13
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\"/>
";
        }
        // line 15
        echo "

<form action=\"\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">  
    <table>
        <tr>    
            <td>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-small date")));
        echo "            
            </td>
        </tr>
        <tr>    
            <td>
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contratEstimation"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-medium")));
        echo "
            </td>
        </tr>
        <tr>    
            <td>
            <div class=\"input-prepend\">
                <span class=\"add-on\">\$</span>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot"), 'widget', array("attr" => array("placeholder" => "Montant du dépôt", "class" => "input-medium dollars")));
        echo "
            </div>
            </td>
        </tr>
        <tr>    
            <td>
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepot"), 'widget', array("attr" => array("placeholder" => "Date du dépôt", "class" => "input-small date")));
        echo "
            </td>
        </tr>
        <tr>    
            <td>
            <button type=\"submit\" class=\"btn\">Envoyer</button>
            </td>
        </tr>
    </table>
</form>

<table>
<tr><td><h1>Fiche: </h1></td><td>créé le: ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "created"), "d/m/y"), "html", null, true);
        echo "</td></tr>
    <tr>
        <td><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_modifier", array("id" => $this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "production"), "id"))), "html", null, true);
        echo "\">Modifier production</a></td>
    </tr>
<tr><td><br></td></tr>
<tr><td><b>Services:</b></td></tr>

        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "clientService"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 59
            echo "    <tr>
        
        <td>- ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "service"), "type"), "html", null, true);
            echo "</td>
        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "prix"), 2, ",", "."), "html", null, true);
            echo "\$</td>
        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "created"), "d/m/y"), "html", null, true);
            echo "</td>
        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "note"), "html", null, true);
            echo "</td>
        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_supprimerService", array("idd" => $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "id" => $this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
            echo "\" title=\"Supprimer service\"/></a></td>
    </tr>    
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "    <tr>
\t<td>Aucun Services trouvés</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    
    </tr>    
<tr><td><b>Paiements:</b></td></tr>
";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["contrat"]) ? $context["contrat"] : $this->getContext($context, "contrat")), "production"), "comptabilite"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 77
            echo "    <tr>
        <td>créé le: ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "created"), "d/m/y"), "html", null, true);
            echo "</td>
        <td> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "type"), "type"), "html", null, true);
            echo "</td>
        <td> ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "paiement"), "html", null, true);
            echo "</td>
        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "montant"), 2, ",", "."), "html", null, true);
            echo "\$</td>
        <td> ";
            // line 82
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "note")), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_comptabilite_voir", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"))), "html", null, true);
            echo "\">voir</a></td>

    </tr>    
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "    <tr>
\t<td>Aucun Bill trouvés</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
    
    </tr>    
    
    
    
    
</table> 
 <br>
                                              
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Contrat:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 91,  222 => 87,  213 => 83,  209 => 82,  205 => 81,  201 => 80,  197 => 79,  193 => 78,  190 => 77,  185 => 76,  180 => 73,  171 => 69,  161 => 66,  157 => 65,  153 => 64,  149 => 63,  145 => 62,  141 => 61,  137 => 59,  132 => 58,  124 => 53,  119 => 51,  104 => 39,  95 => 33,  85 => 26,  77 => 21,  70 => 17,  66 => 15,  60 => 13,  58 => 12,  50 => 9,  44 => 8,  40 => 6,  37 => 5,  29 => 3,);
    }
}
