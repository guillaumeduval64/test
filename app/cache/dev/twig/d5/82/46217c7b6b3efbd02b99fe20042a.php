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
        echo "<!-- Button to trigger modal -->

 
<!-- Modal -->
<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Ajout d'un client:</h3>
  </div>
  <div class=\"modal-body\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "span1")));
        echo "</td>
            <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "span2")));
        echo "</td>
               <td>
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "span2")));
        echo "
            </td>
            <td>
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "span1")));
        echo "
            </td>
            </tr>
               </table>
   <table>
                        <tr>
            <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-medium date")));
        echo "</td>
            <td></td>
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "phone"), "phoneType"), 'row', array("attr" => array("placeholder" => "Phone", "class" => "span2")));
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
 
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\"></form>
  </div>
</div>

";
        // line 86
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99471e3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99471e3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/99471e3_phone_1.js");
            // line 89
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
        return array (  180 => 89,  176 => 86,  164 => 77,  160 => 75,  151 => 72,  147 => 71,  144 => 70,  139 => 69,  135 => 67,  126 => 61,  117 => 55,  111 => 52,  106 => 50,  102 => 49,  93 => 43,  87 => 40,  83 => 39,  74 => 33,  70 => 32,  63 => 28,  59 => 27,  55 => 26,  49 => 23,  42 => 19,  35 => 15,  19 => 1,);
    }
}
