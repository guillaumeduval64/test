<?php

/* MyAppApBundle:Production:listerdefinir.html.twig */
class __TwigTemplate_4bb584aca36c95b514da13eb279b937b extends Twig_Template
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
        echo "Production";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
";
        // line 5
        $this->env->loadTemplate("MyAppApBundle:Production:listedefinir.html.twig")->display(array_merge($context, array("pagination" => $this->getContext($context, "pagination"))));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Production:listerdefinir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
