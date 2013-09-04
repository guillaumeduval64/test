<?php

/* MyAppApBundle:Contrat:liste.html.twig */
class __TwigTemplate_3606bbabf68584e3b12f0617ed52933f extends Twig_Template
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
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("myapp_contrat_listerEstimation");
        echo "\">Estimation</a></li>
        <li class=\"active\"><a href=\"";
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
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "N.", "c.numero");
        echo "</th>
    <th>";
        // line 13
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date créé", "c.created");
        echo "</th>
    <th>Prénom Nom</th>
    <th>Note au contrat</th>
</tr>

";
        // line 19
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
            // line 20
            echo "<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "numero"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "created"), "d/m/y"), "html", null, true);
            echo "</td>    
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "production"), "client"), "prenom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "production"), "client"), "nom")), "html", null, true);
            echo "</td>
    <td>";
            // line 24
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
        // line 28
        echo "</table>
";
        // line 30
        echo "  <div class=\"navigation\">
    ";
        // line 31
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Contrat:liste.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  120 => 30,  117 => 28,  99 => 24,  93 => 23,  89 => 22,  83 => 21,  76 => 20,  51 => 13,  46 => 12,  38 => 6,  34 => 5,  26 => 2,  20 => 1,  80 => 29,  68 => 19,  66 => 18,  62 => 16,  59 => 19,  50 => 9,  45 => 7,  39 => 5,  36 => 4,  30 => 4,);
    }
}
