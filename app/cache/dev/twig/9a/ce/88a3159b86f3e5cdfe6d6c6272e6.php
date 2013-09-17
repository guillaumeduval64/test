<?php

/* MyAppApBundle:Message:lister.html.twig */
class __TwigTemplate_9ace88a3159b86f3e5cdfe6d6c6272e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste des Messages</h1>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("myapp_message_ajouter");
        echo "\">Ajouter un Message</a>
<br>
";
        // line 7
        $this->env->loadTemplate("MyAppApBundle:Message:liste.html.twig")->display(array_merge($context, array("messages" => (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")))));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Message:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
