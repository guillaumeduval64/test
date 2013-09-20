<?php

/* MyAppApBundle:Dashboard:nbContrat.html.twig */
class __TwigTemplate_60bafb8d8647971ae0ea93224fb6f4bd extends Twig_Template
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
        echo "        <table id=\"porte\">
            <tr>
                <td rowspan=\"3\">
                   <h1>C</h1>
                </td>

<td><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContratWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContratWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td><h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContrat"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContrat"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td><h6>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContratWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbContratMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbContrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  47 => 15,  41 => 12,  37 => 11,  31 => 8,  27 => 7,  50 => 15,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
