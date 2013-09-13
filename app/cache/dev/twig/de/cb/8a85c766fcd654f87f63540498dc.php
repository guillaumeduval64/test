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
        return array (  43 => 8,  40 => 7,  452 => 150,  449 => 149,  445 => 148,  442 => 147,  437 => 144,  433 => 141,  430 => 140,  426 => 136,  423 => 135,  418 => 132,  415 => 131,  411 => 129,  402 => 126,  399 => 125,  394 => 124,  391 => 123,  387 => 82,  384 => 81,  378 => 4,  366 => 157,  362 => 156,  356 => 154,  354 => 153,  350 => 151,  347 => 149,  345 => 147,  339 => 144,  335 => 142,  333 => 140,  328 => 137,  326 => 135,  323 => 134,  321 => 131,  318 => 130,  316 => 123,  308 => 118,  295 => 110,  288 => 108,  281 => 106,  275 => 105,  268 => 103,  261 => 101,  254 => 99,  247 => 97,  240 => 95,  232 => 89,  221 => 86,  217 => 84,  212 => 83,  210 => 81,  203 => 76,  201 => 75,  195 => 71,  193 => 70,  188 => 67,  186 => 66,  182 => 64,  180 => 63,  151 => 41,  135 => 27,  67 => 20,  63 => 14,  54 => 11,  50 => 9,  37 => 5,  38 => 6,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 19,  57 => 12,  53 => 13,  46 => 8,  42 => 7,  39 => 7,  33 => 4,  31 => 4,  28 => 1,);
    }
}
