<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_decb8a85c766fcd654f87f63540498dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  43 => 8,  40 => 7,  30 => 3,  488 => 186,  485 => 185,  481 => 184,  478 => 183,  473 => 180,  469 => 177,  466 => 176,  462 => 172,  459 => 171,  454 => 168,  451 => 167,  447 => 165,  438 => 162,  435 => 161,  430 => 160,  427 => 159,  423 => 118,  420 => 117,  414 => 4,  402 => 193,  398 => 192,  392 => 190,  390 => 189,  386 => 187,  383 => 185,  381 => 183,  375 => 180,  371 => 178,  369 => 176,  364 => 173,  362 => 171,  359 => 170,  357 => 167,  354 => 166,  352 => 159,  344 => 154,  331 => 146,  324 => 144,  317 => 142,  311 => 141,  304 => 139,  297 => 137,  290 => 135,  283 => 133,  276 => 131,  268 => 125,  257 => 122,  253 => 120,  248 => 119,  246 => 117,  238 => 111,  236 => 110,  228 => 104,  226 => 103,  218 => 97,  216 => 96,  208 => 90,  206 => 89,  159 => 49,  135 => 27,  67 => 20,  63 => 14,  54 => 11,  50 => 9,  46 => 8,  42 => 7,  37 => 5,  33 => 4,  28 => 1,);
    }
}
