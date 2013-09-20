<?php

/* MyAppApBundle:Dashboard:nbProduction.html.twig */
class __TwigTemplate_137cd3650d084617afbc6c194125f1ce extends Twig_Template
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
        echo "<table id=\"porte\">
            <tr>
                <td rowspan=\"3\">
                   <h1>P</h1>
    </td>
\t\t<td class=\"currentMatch\" data-nbProductionObj=";
        // line 6
        if (array_key_exists("nbProductionObj", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "nbProductionObj"), "html", null, true);
        }
        echo "><h6>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbProductionWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "nbProductionObj"), "html", null, true);
        echo "</h6></td>
\t</tr>
\t<tr>
\t\t<td><h6>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbProductionMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "nbProductionObjM"), "html", null, true);
        echo "<h6></td>
\t</tr>
\t<tr>
\t\t<td><h6>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbProduction"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "difObjectifProd"), "html", null, true);
        echo "</h6></td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbProduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  44 => 11,  34 => 7,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  31 => 8,  27 => 7,  50 => 14,  46 => 14,  40 => 10,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
