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
        echo "        <table id=\"porte\">
            <tr>
                <td rowspan=\"3\">
                    <h1>E</h1>
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
        return array (  50 => 15,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
