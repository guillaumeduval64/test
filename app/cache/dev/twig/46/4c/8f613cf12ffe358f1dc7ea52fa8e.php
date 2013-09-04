<?php

/* MyAppApBundle:Message:ajouter.html.twig */
class __TwigTemplate_464c8f613cf12ffe358f1dc7ea52fa8e extends Twig_Template
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
        echo "<h1>Ajouter un Message: </h1>";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        if ((isset($context["messageReply"]) ? $context["messageReply"] : $this->getContext($context, "messageReply"))) {
            // line 6
            echo "                    <p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\"/></p>
";
        }
        // line 8
        echo "
<form action=\"\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" />
</form>


";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Message:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 9,  46 => 8,  40 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
