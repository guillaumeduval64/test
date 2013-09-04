<?php

/* MyAppApBundle:Comptabilite:lister.html.twig */
class __TwigTemplate_0ce1df67131ddc3d50eff86257ca7640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'billFinal' => array($this, 'block_billFinal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppApBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Comptabilité";
    }

    // line 4
    public function block_billFinal($context, array $blocks = array())
    {
        // line 5
        echo "    
";
        // line 6
        $this->env->loadTemplate("MyAppApBundle:Comptabilite:liste.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Comptabilite:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
