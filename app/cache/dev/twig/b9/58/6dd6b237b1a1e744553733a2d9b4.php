<?php

/* MyAppApBundle:Dashboard:nbEstimation.html.twig */
class __TwigTemplate_b9586dd6b237b1a1e744553733a2d9b4 extends Twig_Template
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
        echo "        <table  id=\"\" class=\"hovered\">
            <tr>
                <td class=\"no_bottom_border\" rowspan=\"3\">
                    <h2>E</h2>
                </td>
<td><h6>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimationWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimationWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td><h6>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimationMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimationMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td><h6>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimation"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td><h6>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimation"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbEstimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  36 => 10,  30 => 7,  26 => 6,  51 => 16,  47 => 15,  41 => 12,  27 => 7,  19 => 1,  79 => 15,  77 => 14,  74 => 13,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 13,  42 => 12,  40 => 11,  37 => 11,  31 => 8,);
    }
}
