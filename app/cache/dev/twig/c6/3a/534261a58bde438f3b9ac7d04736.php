<?php

/* MyAppUtilisateurBundle::connexion.html.twig */
class __TwigTemplate_c63a534261a58bde438f3b9ac7d04736 extends Twig_Template
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
        echo "<div>
";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 8
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
";
        }
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "MyAppUtilisateurBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  41 => 8,  24 => 3,  22 => 2,  19 => 1,  429 => 155,  426 => 154,  422 => 153,  419 => 152,  414 => 149,  410 => 146,  407 => 145,  403 => 141,  400 => 140,  395 => 137,  392 => 136,  388 => 134,  385 => 133,  378 => 128,  375 => 127,  371 => 79,  368 => 78,  362 => 4,  351 => 162,  347 => 161,  341 => 159,  339 => 158,  335 => 156,  332 => 154,  330 => 152,  324 => 149,  320 => 147,  318 => 145,  313 => 142,  311 => 140,  308 => 139,  306 => 136,  303 => 135,  301 => 133,  298 => 132,  296 => 127,  279 => 115,  272 => 113,  265 => 111,  259 => 110,  251 => 107,  243 => 104,  235 => 101,  227 => 98,  219 => 95,  210 => 88,  201 => 85,  197 => 83,  193 => 82,  189 => 80,  187 => 78,  178 => 72,  147 => 48,  122 => 25,  61 => 13,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 18,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
