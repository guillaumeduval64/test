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
        echo "<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Ajout d'un client:</h3>
  </div>
         <form action=\"\" method=\"POST\" class=\"form-horizontal\">
  <div class=\"modal-body\">

    <table>
        <tr>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "flag"), 'label');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "flag"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titles"), 'widget');
        echo "</td>
            <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "etat"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "</td>
             <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ancien"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
             <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'widget', array("attr" => array("class" => "input-small timepicker")));
        echo "</td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>
   </table>
   <br>     
   <table>
        <tr>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>
    </table>
   <br>
   <table>
        <tr>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "input-mini")));
        echo "</td>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "input-medium")));
        echo "</td>
               <td>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "
            </td>
            <td>
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "input-small")));
        echo "
            </td>
            </tr>
               </table>
   <table>
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "phones"), "vars"), "prototype"), 'widget'));
        echo "\">
        ";
        // line 63
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "phones"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 64
            echo "
            <li>";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phoneType"), 'row');
            echo "
            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phone"), 'row');
            echo "</li>
            ----------------------------------------------------------
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </ul>

    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <br>
    
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </div>
     </form>   
</div>

";
        // line 82
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99471e3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3_phone_1.js");
            // line 85
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
        return array (  173 => 82,  159 => 71,  155 => 69,  146 => 66,  142 => 65,  139 => 64,  134 => 63,  130 => 61,  121 => 55,  97 => 43,  88 => 37,  69 => 27,  65 => 26,  58 => 22,  54 => 21,  50 => 20,  38 => 15,  19 => 1,  368 => 128,  364 => 127,  360 => 126,  355 => 124,  348 => 119,  344 => 118,  335 => 114,  325 => 108,  321 => 106,  315 => 104,  313 => 103,  307 => 102,  302 => 100,  298 => 99,  294 => 98,  290 => 97,  287 => 96,  282 => 95,  279 => 94,  277 => 93,  270 => 91,  262 => 85,  258 => 83,  248 => 78,  242 => 76,  238 => 74,  230 => 72,  228 => 71,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  202 => 64,  197 => 63,  195 => 62,  184 => 56,  180 => 54,  177 => 85,  171 => 49,  162 => 45,  150 => 43,  145 => 42,  140 => 40,  132 => 37,  128 => 36,  124 => 35,  118 => 34,  112 => 49,  106 => 46,  101 => 44,  95 => 29,  89 => 28,  82 => 34,  78 => 33,  72 => 19,  70 => 18,  67 => 17,  64 => 16,  55 => 10,  51 => 9,  46 => 19,  42 => 5,  39 => 4,  31 => 11,);
    }
}
