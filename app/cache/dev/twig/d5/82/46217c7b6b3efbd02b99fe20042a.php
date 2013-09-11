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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "flag"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titles"), 'widget');
        echo "</td>
            </tr>
            <tr>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "etat"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "</td>
             <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ancien"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
             <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'widget', array("attr" => array("class" => "input-small timepicker")));
        echo "</td>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>
   </table>
   <br>     
   <table>
        <tr>
            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>
    </table>
   <br>
   <table>
        <tr>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "input-mini")));
        echo "</td>
            <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "input-medium")));
        echo "</td>
               <td>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "
            </td>
            <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "input-small")));
        echo "
            </td>
            </tr>
               </table>
   <table>
                        <tr>
            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-medium date")));
        echo "</td>
            <td></td>
            </tr>
   </table>
   
    <h3>Phones:</h3>
    <ul class=\"phones\" data-prototype=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "phones"), "vars"), "prototype"), 'widget'));
        echo "\">
        ";
        // line 65
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "phones"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 66
            echo "
            <li>";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phoneType"), 'row');
            echo "
            ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phone"), 'row');
            echo "</li>
            ----------------------------------------------------------
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>

        <br>
   ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " 
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </div>
     </form>   
</div>

";
        // line 83
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99471e3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3_phone_1.js");
            // line 86
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
        return array (  177 => 86,  173 => 83,  161 => 74,  156 => 71,  147 => 68,  143 => 67,  140 => 66,  135 => 65,  131 => 63,  122 => 57,  113 => 51,  107 => 48,  102 => 46,  98 => 45,  89 => 39,  83 => 36,  79 => 35,  70 => 29,  66 => 28,  59 => 24,  55 => 23,  51 => 22,  45 => 19,  38 => 15,  31 => 11,  19 => 1,);
    }
}
