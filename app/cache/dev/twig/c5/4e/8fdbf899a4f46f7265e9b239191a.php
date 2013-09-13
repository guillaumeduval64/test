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
\t\t<td><h6>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionWeek"]) ? $context["nbProductionWeek"] : $this->getContext($context, "nbProductionWeek")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
\t\t<td><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionMonth"]) ? $context["nbProductionMonth"] : $this->getContext($context, "nbProductionMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProduction"]) ? $context["nbProduction"] : $this->getContext($context, "nbProduction")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionObj"]) ? $context["nbProductionObj"] : $this->getContext($context, "nbProductionObj")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
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
        return array (  50 => 15,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
