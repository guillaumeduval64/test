<?php

/* MyAppApBundle:Rdv:lister.html.twig */
class __TwigTemplate_0f74f4161b1fce81943e7dd8600086d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'content' => array($this, 'block_content'),
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
        echo "Rendez-vous:";
    }

    // line 3
    public function block_recherche($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("MyAppApBundle:Rdv:menu.html.twig")->display(array_merge($context, array("menu" => "2: Rappeler")));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        echo " 
    ";
        // line 7
        $this->env->loadTemplate("MyAppApBundle:Rdv:liste.html.twig")->display(array_merge($context, array("pagination" => (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))));
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Rdv:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 6,  39 => 4,  36 => 3,  30 => 2,);
    }
}
