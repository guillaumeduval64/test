<?php

/* MyAppApBundle:Comptabilite:voir_menu_total.html.twig */
class __TwigTemplate_52f07cfef82d1007e68ce97e38fa5bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister");
        echo "\">Tout</a> 
<br>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_comptabilite_voirEssence", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "type"), "html", null, true);
            echo "</a> 
<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "   <br>
 <a href=\"#myModalTest\" role=\"button\" class=\"btn\" data- Aucun bill n'a été trouvé.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<br>
 <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/money.png"), "html", null, true);
        echo "\" title=\"Ajouter compta\"/></a>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Comptabilite:voir_menu_total.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  49 => 10,  30 => 4,  25 => 3,  242 => 98,  238 => 97,  230 => 92,  226 => 91,  217 => 85,  213 => 84,  205 => 79,  201 => 78,  197 => 77,  189 => 72,  185 => 71,  181 => 70,  173 => 65,  164 => 59,  160 => 58,  152 => 53,  146 => 49,  140 => 47,  138 => 46,  128 => 42,  114 => 31,  111 => 30,  107 => 27,  97 => 22,  83 => 20,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  60 => 14,  42 => 13,  37 => 11,  31 => 9,  22 => 2,  19 => 1,  43 => 7,  41 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
