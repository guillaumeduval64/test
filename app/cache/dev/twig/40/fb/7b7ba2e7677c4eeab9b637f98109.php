<?php

/* MyAppApBundle:Dashboard:nbClient.html.twig */
class __TwigTemplate_40fb7b7ba2e7677c4eeab9b637f98109 extends Twig_Template
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
        echo "<td id=\"currentMatch\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbClientWeek"]) ? $context["nbClientWeek"] : $this->getContext($context, "nbClientWeek")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td id=\"currentMatch\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbClientMonth"]) ? $context["nbClientMonth"] : $this->getContext($context, "nbClientMonth")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>
<td id=\"currentMatch\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbClient"]) ? $context["nbClient"] : $this->getContext($context, "nbClient")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>";
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
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}
