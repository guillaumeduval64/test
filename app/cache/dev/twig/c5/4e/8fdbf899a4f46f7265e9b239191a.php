<?php

/* MyAppApBundle:Dashboard:nbProduction.html.twig */
class __TwigTemplate_c54e8fdbf899a4f46f7265e9b239191a extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["nbProductionObj"]) ? $context["nbProductionObj"] : $this->getContext($context, "nbProductionObj")), "html", null, true);
        }
        echo "><h6>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionWeek"]) ? $context["nbProductionWeek"] : $this->getContext($context, "nbProductionWeek")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionMonth"]) ? $context["nbProductionMonth"] : $this->getContext($context, "nbProductionMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["nbProductionObj"]) ? $context["nbProductionObj"] : $this->getContext($context, "nbProductionObj")), "html", null, true);
        echo "</h6></td>
\t</tr>
\t<tr>
\t\t<td><h6>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionMonth"]) ? $context["nbProductionMonth"] : $this->getContext($context, "nbProductionMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionMonth"]) ? $context["nbProductionMonth"] : $this->getContext($context, "nbProductionMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t</tr>
\t<tr>
\t\t<td><h6>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProduction"]) ? $context["nbProduction"] : $this->getContext($context, "nbProduction")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["difObjectifProd"]) ? $context["difObjectifProd"] : $this->getContext($context, "difObjectifProd")), "html", null, true);
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
        return array (  56 => 15,  52 => 14,  46 => 11,  42 => 10,  34 => 7,  26 => 6,  19 => 1,);
    }
}
