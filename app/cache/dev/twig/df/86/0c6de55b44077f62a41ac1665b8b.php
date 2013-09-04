<?php

/* MyAppApBundle:Contrat:listeEstimation.html.twig */
class __TwigTemplate_df860c6de55b44077f62a41ac1665b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"tabbable tabs-left\">
  <ul class=\"nav nav-tabs\">
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_listerAnnule");
        echo "\">Annulé</a></li>
        <li class=\"active\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_listerEstimation");
        echo "\">Estimation</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_lister");
        echo "\">Contrat</a></li>
  </ul>
  <div class=\"tab-content\">
<table>
<tr>
";
        // line 12
        echo "    <th>";
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "N.", 1 => "c.numero"), "method");
        echo "</th>
    <th>";
        // line 13
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Date créé", 1 => "c.created"), "method");
        echo "</th>
    <th>";
        // line 14
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Date de rappel", 1 => "c.date"), "method");
        echo "</th>
    <th>";
        // line 15
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Nom", 1 => "c.client.nom"), "method");
        echo "</th>
    <th>";
        // line 16
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "sortable", array(0 => "Note au contrat", 1 => "c.production.note"), "method");
        echo "</th>
</tr>

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "numero"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "created"), "d/m/y"), "html", null, true);
            echo "</td>    
    <td>";
            // line 24
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "date") != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "date"), "d/m/y"), "html", null, true);
            }
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "production"), "client"), "prenom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "production"), "client"), "nom")), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "production"), "note"), "html", null, true);
            echo "</td>
</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
";
        // line 31
        echo "<div class=\"navigation\">
    ";
        // line 32
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "render", array(), "method");
        echo "
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Contrat:listeEstimation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 32,  135 => 31,  132 => 29,  115 => 26,  109 => 25,  103 => 24,  99 => 23,  93 => 22,  86 => 21,  69 => 20,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  46 => 12,  34 => 5,  30 => 4,  26 => 2,  20 => 1,  38 => 6,  35 => 3,  29 => 2,);
    }
}
