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
        echo "<td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nbEstimation"), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</td>";
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
        return array (  19 => 1,);
    }
}
