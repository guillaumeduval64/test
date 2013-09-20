<?php

/* MyAppApBundle:Dashboard:nbClient.html.twig */
class __TwigTemplate_4c63378789b50fdb28b8caf19fcbf412 extends Twig_Template
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
        echo "        <table class=\"hovered\">
            <tr>
                <td rowspan=\"3\">
                    <h1>C</h1>
                </td>
<td class=\"currentMatch\"><h6>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClient"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td class=\"currentMatch\"><h6>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClient"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td class=\"currentMatch\"><h6>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td class=\"currentMatch\"><h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientWeek"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
<tr>
<td class=\"currentMatch\"><h6>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
<td class=\"currentMatch\"><h6>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbClientMonth"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h6></td>
</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:nbClient.html.twig";
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
