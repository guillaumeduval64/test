<?php

/* MyAppApBundle:ContratClient:voir.html.twig */
class __TwigTemplate_43ca0be7aefa5425f9d4ca01e1361f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle:ContratClient:voirLayout.html.twig");

        $this->blocks = array(
            'contrat' => array($this, 'block_contrat'),
            'logo' => array($this, 'block_logo'),
            'travailleurAutonome' => array($this, 'block_travailleurAutonome'),
            'client' => array($this, 'block_client'),
            'service' => array($this, 'block_service'),
            'note' => array($this, 'block_note'),
            'date' => array($this, 'block_date'),
            'signature' => array($this, 'block_signature'),
            'clauses' => array($this, 'block_clauses'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppApBundle:ContratClient:voirLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contrat($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "contratEstimation"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "numero"), "html", null, true);
        echo "</b>
";
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        // line 7
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Ajouter Client\"/>
";
    }

    // line 10
    public function block_travailleurAutonome($context, array $blocks = array())
    {
        // line 11
        echo "
<table>
    <tr><td>Travailleur Autonome:</td></tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Nom:</b></td> 
        <td><b>Prenom:</b></td> 
    </tr>   
    <tr>
        <td>DUVAL</td>
        <td>Guillaume</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Numero: </b></td>
        <td><b>Rue: </b></td>
        <td><b>Ville: </b></td>
        <td><b>Cp: </b></td>
    </tr>
        <td>#2, 100</td>
        <td>Bd Saint-Joseph ouest</td>
        <td>Montreal</td>
        <td>H2T-2P6</td>
    <tr><td></td></tr>
</table>
";
    }

    // line 38
    public function block_client($context, array $blocks = array())
    {
        // line 39
        echo "<table>
    <tr><td>Client:</td></tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Nom:</b></td> 
        <td><b>Prenom:</b></td> 
    </tr>   
    <tr>
        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "nom")), "html", null, true);
        echo "</td>
        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "prenom")), "html", null, true);
        echo "</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Numero: </b></td>
        <td><b>Rue: </b></td>
        <td><b>Ville: </b></td>
        <td><b>Cp: </b></td>
    </tr>
        <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "number"), "html", null, true);
        echo "</td>
        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "street")), "html", null, true);
        echo "</td>
        <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "city"), "city")), "html", null, true);
        echo "</td>
        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "pc")), "html", null, true);
        echo "</td>
    <tr><td></td></tr>
        <tr>
        <td><b>Telephone: </b></td>
        <td><b>Email: </b></td>
    </tr>
        <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "phoneNumber"), "html", null, true);
        echo "</td>
        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "client"), "email"), "html", null, true);
        echo "</td>
    <tr><td></td></tr>
</table>
";
    }

    // line 72
    public function block_service($context, array $blocks = array())
    {
        // line 73
        echo "<h1>Détails ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "contratEstimation")), "html", null, true);
        echo ": </h1>
<table>
";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "contrat"), "clientService"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 76
            echo "<table>
    <tr>
        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "service"), "type"), "html", null, true);
            echo "</td>
        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "prix"), 2, ",", "."), "html", null, true);
            echo " \$</td></tr> 
    <tr> 
        <td>Note:</td>
        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "note")), "html", null, true);
            echo "</td>
    </tr>    
</table>
        <br>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "<table>
    <tr>
\t<td>Aucun Services trouvés</td>
    </tr>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "<table>
        <tr> 
            <td>Total:</td>
            <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "total"), "0", array(), "array"), "1", array(), "array"), 2, ",", "."), "html", null, true);
        echo " \$</td>
        </tr> 
                <tr> 
            <td>Dépôt:</td>
            <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "depot"), 2, ",", "."), "html", null, true);
        echo " \$</td>
        </tr> 
        <tr> 
            <td></td>
            </tr>
                <tr> 
            <td>Balance:</td>
            <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getContext($context, "balance"), 2, ",", "."), "html", null, true);
        echo " \$</td>
        </tr> 
</table>

";
    }

    // line 114
    public function block_note($context, array $blocks = array())
    {
        // line 115
        echo "<h3>Détails additionnels:</h3>
";
        // line 116
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "note")), "html", null, true);
        echo "
";
    }

    // line 118
    public function block_date($context, array $blocks = array())
    {
        // line 119
        echo "<table>
    <tr>
        <td>Date de production: ";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "production"), "dateProd"), "d/m/y"), "html", null, true);
        echo "</td> 
    </tr>
</table>
";
    }

    // line 125
    public function block_signature($context, array $blocks = array())
    {
        // line 126
        echo "<table>
    <tr>
        <td>
            Date signature: ____ / ____ / ________
        </td>
    </tr>
    <tr>
        <td>
            Signature Entrepreneur:
        </td>
    </tr>
    <tr>
        <td>
            Signature client:
        </td>
    </tr>

</table>
";
    }

    // line 145
    public function block_clauses($context, array $blocks = array())
    {
        // line 146
        echo "<p><b>Termes et Conditions du contrat:</b></p>
<p>Devis:L'ensemble des détails des travaux à executer est present sur le devis. Aucuns travaux non-inscrits ne seront effectués.</p>
<p>Défauts non-visibles: Le contrat est effectué aprés une inspection visuelle or advenant des difficultés qui n'auraient pu être décelées lors du devis, une réévaluation sera faite avec le client suite aux défauts apparus.</p>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:ContratClient:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 146,  284 => 145,  262 => 126,  259 => 125,  251 => 121,  247 => 119,  244 => 118,  238 => 116,  235 => 115,  232 => 114,  223 => 108,  213 => 101,  206 => 97,  201 => 94,  190 => 88,  179 => 82,  173 => 79,  169 => 78,  165 => 76,  160 => 75,  154 => 73,  151 => 72,  143 => 67,  139 => 66,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  106 => 48,  102 => 47,  92 => 39,  89 => 38,  60 => 11,  57 => 10,  50 => 7,  47 => 6,  39 => 4,  36 => 3,);
    }
}
