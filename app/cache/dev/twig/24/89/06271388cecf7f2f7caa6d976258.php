<?php

/* MyAppApBundle:Contrat:listerEstimation.html.twig */
class __TwigTemplate_248906271388cecf7f2f7caa6d976258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Liste des Estimations: ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("MyAppApBundle:Contrat:listeEstimation.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Contrat:listerEstimation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
