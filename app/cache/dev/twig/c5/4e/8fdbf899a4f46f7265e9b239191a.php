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
        echo "<td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionWeek"]) ? $context["nbProductionWeek"] : $this->getContext($context, "nbProductionWeek")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProductionMonth"]) ? $context["nbProductionMonth"] : $this->getContext($context, "nbProductionMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbProduction"]) ? $context["nbProduction"] : $this->getContext($context, "nbProduction")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
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
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}
