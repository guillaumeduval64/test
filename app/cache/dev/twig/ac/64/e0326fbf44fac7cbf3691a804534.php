<?php

/* ::forms.html.twig */
class __TwigTemplate_ac64e0326fbf44fac7cbf3691a804534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 13
        echo "

";
        // line 15
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('form_label', $context, $blocks);
        // line 46
        echo "

";
        // line 48
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"control-group";
        echo (((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) ? (" error") : (""));
        echo "\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "

        <div class=\"control-class\">
\t        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "<tr>
    <td>
        <label class=\"input-control checkbox\">
            <input type=\"checkbox\" ";
        // line 20
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
            <span class=\"helper\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "</span>
        </label>
</td>
</tr>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_form_label($context, array $blocks = array())
    {
        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ((!($this->getContext($context, "label") === false))) {
            // line 32
            echo "        ";
            if ((!$this->getContext($context, "compound"))) {
                // line 33
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            if ($this->getContext($context, "required")) {
                // line 36
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            if (twig_test_empty($this->getContext($context, "label"))) {
                // line 39
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
                // line 40
                echo "        ";
            }
            // line 41
            echo "            ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label"))));
            // line 42
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 49
        ob_start();
        // line 50
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  180 => 52,  176 => 51,  171 => 50,  169 => 49,  166 => 48,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  95 => 21,  83 => 20,  78 => 17,  64 => 8,  60 => 7,  54 => 4,  44 => 1,  34 => 29,  29 => 15,  25 => 13,  23 => 1,  26 => 2,  20 => 1,  48 => 9,  35 => 5,  24 => 3,  22 => 2,  19 => 1,  750 => 293,  747 => 292,  743 => 291,  740 => 290,  735 => 287,  731 => 259,  728 => 258,  724 => 254,  721 => 253,  716 => 250,  713 => 249,  702 => 244,  699 => 243,  694 => 239,  689 => 235,  684 => 196,  679 => 189,  674 => 188,  649 => 302,  639 => 294,  636 => 292,  634 => 290,  628 => 287,  619 => 281,  596 => 260,  594 => 258,  589 => 255,  587 => 253,  584 => 252,  582 => 249,  578 => 247,  576 => 243,  572 => 241,  570 => 239,  566 => 237,  564 => 235,  556 => 229,  545 => 226,  538 => 225,  534 => 224,  530 => 222,  528 => 221,  500 => 196,  490 => 189,  486 => 188,  362 => 69,  356 => 68,  350 => 67,  344 => 66,  338 => 65,  332 => 64,  326 => 63,  320 => 62,  314 => 61,  299 => 48,  88 => 33,  84 => 22,  76 => 16,  71 => 15,  63 => 13,  59 => 12,  55 => 11,  49 => 3,  45 => 7,  41 => 8,  36 => 46,  94 => 31,  82 => 21,  80 => 20,  73 => 15,  67 => 14,  61 => 13,  52 => 8,  47 => 2,  43 => 5,  40 => 48,  37 => 3,  31 => 28,);
    }
}
