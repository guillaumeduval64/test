<?php

/* MyAppApBundle:Dashboard:lister.html.twig */
class __TwigTemplate_fda6c3de3eb80330bb3970861e32d866 extends Twig_Template
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
        echo "Tableau de bord:";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<b>Pour l'année:</b>

";
        // line 6
        echo $this->env->getExtension('actions')->renderUri("MyAppApBundle:Dashboard:nbContrat", array());
        // line 7
        echo $this->env->getExtension('actions')->renderUri("MyAppApBundle:Dashboard:nbClient", array());
        // line 8
        echo $this->env->getExtension('actions')->renderUri("MyAppApBundle:Dashboard:nbEstimation", array());
        // line 9
        echo $this->env->getExtension('actions')->renderUri("MyAppApBundle:Dashboard:produitUtilisateur", array());
        // line 10
        echo $this->env->getExtension('actions')->renderUri("MyAppApBundle:Dashboard:produitUtilisateurSemaine", array());
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Dashboard:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
