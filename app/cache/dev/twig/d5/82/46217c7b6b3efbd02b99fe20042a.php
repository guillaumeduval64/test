<?php

/* MyAppApBundle:Client:ajouter.html.twig */
class __TwigTemplate_d58246217c7b6b3efbd02b99fe20042a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"ajout_client\">
";
        // line 2
        if ($this->getContext($context, "message")) {
            // line 3
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "
";
        }
        // line 5
        echo "
    <h3>Ajout d'un client:</h3>
  
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("myapp_client_ajouter");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">



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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "etat"), 'widget', array("attr" => array("class" => "span2")));
        echo "</td>
             <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ancien"), 'widget', array("attr" => array("class" => "span2")));
        echo "</td>
             <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget', array("attr" => array("class" => "span2")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'widget', array("attr" => array("class" => "input-small timepicker")));
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "span1")));
        echo "</td>
            <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "span2")));
        echo "</td>
               <td>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "span2")));
        echo "
            </td>
            <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "span1")));
        echo "
            </td>
            </tr>
                        <tr>
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-medium date")));
        echo "</td>
            <td></td>
            </tr>
   </table>
    <h3>Phones:</h3>
    <ul class=\"phones\" data-prototype=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "phones"), "vars"), "prototype"), 'widget'));
        echo "\">
        ";
        // line 62
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "phones"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 63
            echo "
            <li>";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phoneType"), 'row', array("attr" => array("placeholder" => "Phone", "class" => "span2")));
            echo "
            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phone"), 'row');
            echo "</li>
            ----------------------------------------------------------
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </ul>
        <br>
          ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
 
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </form>
</div>

";
        // line 76
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99471e3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3_phone_1.js");
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        
</script>
";
        } else {
            // asset "99471e3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        
</script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 79,  177 => 76,  168 => 70,  164 => 68,  155 => 65,  151 => 64,  148 => 63,  143 => 62,  139 => 60,  131 => 55,  124 => 51,  118 => 48,  113 => 46,  109 => 45,  102 => 41,  96 => 38,  92 => 37,  85 => 33,  81 => 32,  70 => 27,  66 => 26,  60 => 23,  53 => 19,  29 => 5,  24 => 3,  22 => 2,  54 => 15,  44 => 11,  34 => 8,  50 => 14,  46 => 15,  36 => 10,  30 => 7,  26 => 6,  51 => 16,  47 => 15,  41 => 12,  27 => 7,  19 => 1,  79 => 15,  77 => 14,  74 => 28,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 13,  42 => 12,  40 => 10,  37 => 11,  31 => 8,);
    }
}
