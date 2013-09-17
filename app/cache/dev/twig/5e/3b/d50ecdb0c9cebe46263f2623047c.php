<?php

/* MyAppApBundle:Production:listedefinir.html.twig */
class __TwigTemplate_5e3bd50ecdb0c9cebe46263f2623047c extends Twig_Template
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
        echo "<div class=\"tabbable tabs-left\">
  <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("myapp_production_booke");
        echo "\">Non booké</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("myapp_production_lister");
        echo "\">Booké</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("myapp_production_termine");
        echo "\">Terminé</a></li>
  </ul>
<div class=\"tab-content\">

<table>
<tr>
";
        // line 12
        echo "    <th>";
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Période", 1 => "p.period"), "method");
        echo "</th>
      <th>";
        // line 13
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Mois", 1 => "p.previsionDateProd"), "method");
        echo "</th>
    <th>";
        // line 14
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Rappel", 1 => "p.dateProd"), "method");
        echo "</th>
    <th>";
        // line 15
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Nom", 1 => "p.client.nom"), "method");
        echo "</th>
    <th>";
        // line 16
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Prénom", 1 => "p.client.prenom"), "method");
        echo "</th>
    <th>";
        // line 17
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Tél.", 1 => "p.client.phoneNumber"), "method");
        echo "</th>
    <th>Note</th>
    <th></th>
</tr>

";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
     <td><b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "period"), "html", null, true);
            echo ":</b></td>
     <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "previsionDateProd"), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "dateProd"), "G:i"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "client"), "nom")), "html", null, true);
            echo "</td> 
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "client"), "prenom")), "html", null, true);
            echo " </td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "client"), "phoneNumber"), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "note")), "html", null, true);
            echo " </td>
        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_modifier", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/pencil.png"), "html", null, true);
            echo "\" alt=\"Stats\"/></a></td>
</tr>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 35
            echo "<p>Aucune production n'a été trouvée.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
";
        // line 39
        echo "<div class=\"navigation\">
    ";
        // line 40
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "render", array(), "method");
        echo "
</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Production:listedefinir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 40,  150 => 39,  147 => 37,  140 => 35,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  87 => 24,  69 => 23,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  40 => 12,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
