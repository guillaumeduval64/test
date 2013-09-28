<?php

/* MyAppApBundle:ContratClient:voirLayout.html.twig */
class __TwigTemplate_0137ce6848c47478452ff9c116c0c435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/contrat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />       
    </head>
    <body>
       <div id=\"page\">
            <div id=\"header\">
                    <div id=\"contrat\">
                        ";
        // line 12
        $this->displayBlock('contrat', $context, $blocks);
        // line 14
        echo "                    </div>
                    <div id=\"logo\">
                            ";
        // line 16
        $this->displayBlock('logo', $context, $blocks);
        // line 18
        echo "                    </div>

            </div>
            <div id=\"travailleurAutonome\">
                ";
        // line 22
        $this->displayBlock('travailleurAutonome', $context, $blocks);
        // line 24
        echo "            </div>
        
            <div id=\"client\">
                ";
        // line 27
        $this->displayBlock('client', $context, $blocks);
        // line 29
        echo "            </div> 
            <div id=\"service\">
                    ";
        // line 31
        $this->displayBlock('service', $context, $blocks);
        // line 33
        echo "            </div>

            <div id=\"note\">
                    ";
        // line 36
        $this->displayBlock('note', $context, $blocks);
        // line 38
        echo "            </div>
            <div id=\"date\">
                    ";
        // line 40
        $this->displayBlock('date', $context, $blocks);
        // line 42
        echo "            </div>
            <div id=\"signature\">
                    ";
        // line 44
        $this->displayBlock('signature', $context, $blocks);
        // line 46
        echo "            </div>
            <div id=\"clauses\">
                    ";
        // line 48
        $this->displayBlock('clauses', $context, $blocks);
        // line 50
        echo "            </div>
            <div id=\"footer\">
                <p>Tous droits réservés © 2012</p>
            </div>
        </div>
    </body> 
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "contratEstimation"), "html", null, true);
    }

    // line 12
    public function block_contrat($context, array $blocks = array())
    {
        // line 13
        echo "                        ";
    }

    // line 16
    public function block_logo($context, array $blocks = array())
    {
        // line 17
        echo "                            ";
    }

    // line 22
    public function block_travailleurAutonome($context, array $blocks = array())
    {
        // line 23
        echo "                ";
    }

    // line 27
    public function block_client($context, array $blocks = array())
    {
        // line 28
        echo "                ";
    }

    // line 31
    public function block_service($context, array $blocks = array())
    {
        // line 32
        echo "                    ";
    }

    // line 36
    public function block_note($context, array $blocks = array())
    {
        // line 37
        echo "                    ";
    }

    // line 40
    public function block_date($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
    }

    // line 44
    public function block_signature($context, array $blocks = array())
    {
        // line 45
        echo "                    ";
    }

    // line 48
    public function block_clauses($context, array $blocks = array())
    {
        // line 49
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:ContratClient:voirLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  174 => 48,  170 => 45,  167 => 44,  163 => 41,  156 => 37,  153 => 36,  149 => 32,  146 => 31,  142 => 28,  135 => 23,  132 => 22,  128 => 17,  125 => 16,  121 => 13,  112 => 4,  100 => 48,  96 => 46,  94 => 44,  90 => 42,  88 => 40,  84 => 38,  82 => 36,  77 => 33,  75 => 31,  71 => 29,  69 => 27,  64 => 24,  62 => 22,  56 => 18,  54 => 16,  48 => 12,  34 => 4,  29 => 1,  287 => 146,  284 => 145,  262 => 126,  259 => 125,  251 => 121,  247 => 119,  244 => 118,  238 => 116,  235 => 115,  232 => 114,  223 => 108,  213 => 101,  206 => 97,  201 => 94,  190 => 88,  179 => 82,  173 => 79,  169 => 78,  165 => 76,  160 => 40,  154 => 73,  151 => 72,  143 => 67,  139 => 27,  130 => 60,  126 => 59,  122 => 58,  118 => 12,  106 => 48,  102 => 50,  92 => 39,  89 => 38,  60 => 11,  57 => 10,  50 => 14,  47 => 6,  39 => 6,  36 => 3,);
    }
}
