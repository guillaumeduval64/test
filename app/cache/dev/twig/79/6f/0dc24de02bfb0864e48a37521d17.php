<?php

/* MyAppApBundle:Front:index.html.twig */
class __TwigTemplate_796f0dc24de02bfb0864e48a37521d17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'principalNote' => array($this, 'block_principalNote'),
            'statistics' => array($this, 'block_statistics'),
            'quickAddClient' => array($this, 'block_quickAddClient'),
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
        echo "Dashboard";
    }

    // line 3
    public function block_principalNote($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('statistics', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('quickAddClient', $context, $blocks);
    }

    // line 4
    public function block_statistics($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"stat\">
    <div id=\"tableau_stat\">  ";
        // line 6
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbClient"), array());
        echo "</div>
    <div id=\"tableau_stat\">";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbEstimation"), array());
        echo "</div>
    <div id=\"tableau_stat\">";
        // line 8
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbContrat"), array());
        echo "</div>
    <div id=\"tableau_stat\">";
        // line 9
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Dashboard:nbProduction"), array());
        echo "</div> 
</div>
";
    }

    // line 13
    public function block_quickAddClient($context, array $blocks = array())
    {
        // line 14
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MyAppApBundle:Client:ajouter"), array());
        // line 15
        echo "

";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  77 => 14,  74 => 13,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 13,  42 => 12,  40 => 4,  37 => 3,  31 => 2,);
    }
}
