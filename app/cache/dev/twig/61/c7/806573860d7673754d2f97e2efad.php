<?php

/* MyAppApBundle:Client:liste.html.twig */
class __TwigTemplate_61c7806573860d7673754d2f97e2efad extends Twig_Template
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
        echo "<table class=\"centrer\">
<tr>
";
        // line 4
        echo "    <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Flag", "c.noticeClient");
        echo "</th>
    <th>";
        // line 5
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Date", "c.created");
        echo "</th>
    <th>";
        // line 6
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Rappel", "c.date");
        echo "</th>
    <th>";
        // line 7
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), $this->env->getExtension('translator')->trans("client.nom"), "c.nom");
        echo "</th>
    <th>";
        // line 8
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), $this->env->getExtension('translator')->trans("client.prenom"), "c.prenom");
        echo "</th>
    <th>Service</th>
    <th>";
        // line 10
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Ville", "a.city");
        echo "</th>
</tr>

";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 15
            echo "<tr ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 16
            if ($this->getAttribute($this->getContext($context, "client"), "flag")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/flamme.png"), "html", null, true);
                echo "\" title=\"Attention\"/>";
            }
            echo "</td>
    <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "created"), "d/m/y"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 18
            if (($this->getAttribute($this->getContext($context, "client"), "date") != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "date"), "d/m/y"), "html", null, true);
            }
            echo "</td>
    <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom"), "html", null, true);
            echo "</td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
";
        // line 27
        echo "<div class=\"pagination\">
   ";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  129 => 27,  126 => 25,  109 => 22,  105 => 21,  101 => 20,  95 => 19,  89 => 18,  83 => 17,  75 => 16,  68 => 15,  51 => 14,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  23 => 4,  19 => 1,);
    }
}
