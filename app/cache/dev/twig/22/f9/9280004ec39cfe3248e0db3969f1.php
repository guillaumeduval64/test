<?php

/* MyAppApBundle:Rdv:menu.html.twig */
class __TwigTemplate_22f99280004ec39cfe3248e0db3969f1 extends Twig_Template
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
        echo "    <div class=\"nav-bar\">
        <div class=\"nav-bar-inner\">
 
            <span class=\"element\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "menu"), "html", null, true);
        echo "</span>
 
            <span class=\"divider\"></span>
 
            <ul class=\"menu\">
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_listerRien");
        echo "\">Rien</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_lister");
        echo "\">Rappeler</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_listerRdv");
        echo "\">RDV</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_listerDone");
        echo "\">Done</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_listerSeconde");
        echo "\">2nd Service</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("myapp_rdv_listerAnnee");
        echo "\">2013</a></li>
            </ul>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Rdv:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
