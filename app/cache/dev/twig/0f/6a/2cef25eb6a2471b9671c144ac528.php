<?php

/* MyAppApBundle:Client:modifier.html.twig */
class __TwigTemplate_0f6a2cef25eb6a2471b9671c144ac528 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modifier client: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<p><a href=\"";
        echo $this->env->getExtension('routing')->getPath("myapp_client_lister");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/previous.png"), "html", null, true);
        echo "\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\"/></a></p>

";
        // line 8
        if ($this->getContext($context, "message")) {
            // line 9
            echo "<p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\"/></p>
";
        }
        // line 11
        echo "
 <form action=\"\" method=\"POST\" class=\"form-horizontal\">
    <table>
        <tr>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "</td>
        </tr>
        <tr>
                       <td>
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "flag"), 'widget');
        echo "
            </td>
            </tr>
            <tr>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titles"), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "etat"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "</td>
                 <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ancien"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
                 <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>
   </table>
   <br>     
   <table>
        <tr>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>
    </table>
   <br>
   <table>
        <tr>
            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "input-mini")));
        echo "</td>
            <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "input-medium")));
        echo "</td>
               <td>
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "
            </td>
            <td>
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "input-small")));
        echo "
            </td>
            </tr>
               </table>
   <table>
                        <tr>
            <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-small date")));
        echo "</td>
            <td><input type=\"image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter\"/></td>
            </tr>
   </table>

    <h3>Phones:</h3>
    <ul class=\"phones\" data-prototype=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "phones"), "vars"), "prototype"), 'widget'));
        echo "\">
        ";
        // line 69
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "phones"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 70
            echo "
            <li>";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phoneType"), 'row');
            echo "
            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phone"), 'row');
            echo "</li>
            ----------------------------------------------------------
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </ul>   
        <br>
";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
</form>


";
        // line 81
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99471e3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3_phone_1.js");
            // line 84
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      
";
        } else {
            // asset "99471e3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
      
";
        }
        unset($context["asset_url"]);
        // line 87
        echo "

";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 87,  207 => 84,  203 => 81,  196 => 77,  192 => 75,  183 => 72,  179 => 71,  176 => 70,  171 => 69,  167 => 67,  159 => 62,  155 => 61,  146 => 55,  140 => 52,  135 => 50,  131 => 49,  122 => 43,  116 => 40,  112 => 39,  103 => 33,  99 => 32,  92 => 28,  88 => 27,  84 => 26,  78 => 23,  71 => 19,  64 => 15,  58 => 11,  52 => 9,  50 => 8,  40 => 6,  37 => 5,  29 => 3,);
    }
}
