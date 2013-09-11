<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_526d215b8dc69d8073e53ab7fd951582 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
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
        return array (  54 => 11,  40 => 7,  22 => 2,  24 => 2,  19 => 1,  541 => 226,  538 => 225,  534 => 224,  531 => 223,  526 => 220,  522 => 217,  519 => 216,  515 => 212,  512 => 211,  507 => 208,  504 => 207,  500 => 205,  491 => 202,  488 => 201,  483 => 200,  480 => 199,  474 => 194,  472 => 193,  470 => 192,  468 => 191,  466 => 190,  462 => 188,  459 => 187,  455 => 140,  452 => 139,  446 => 4,  434 => 233,  430 => 232,  424 => 230,  422 => 229,  418 => 227,  415 => 225,  413 => 223,  407 => 220,  403 => 218,  401 => 216,  396 => 213,  394 => 211,  391 => 210,  389 => 207,  386 => 206,  384 => 199,  380 => 197,  378 => 187,  364 => 176,  351 => 168,  344 => 166,  337 => 164,  331 => 163,  324 => 161,  317 => 159,  310 => 157,  303 => 155,  296 => 153,  288 => 147,  277 => 144,  273 => 142,  268 => 141,  266 => 139,  251 => 126,  249 => 125,  225 => 103,  223 => 102,  209 => 90,  207 => 89,  160 => 49,  136 => 27,  68 => 20,  64 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 8,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 12,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 4,  31 => 4,  28 => 3,);
    }
}
