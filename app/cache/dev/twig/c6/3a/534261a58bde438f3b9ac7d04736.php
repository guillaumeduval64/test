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
        return array (  48 => 9,  41 => 8,  24 => 3,  22 => 2,  19 => 1,  418 => 144,  415 => 143,  411 => 142,  408 => 141,  403 => 138,  399 => 135,  396 => 134,  392 => 130,  389 => 129,  384 => 126,  381 => 125,  377 => 123,  374 => 122,  367 => 117,  364 => 116,  360 => 71,  357 => 70,  351 => 4,  340 => 151,  336 => 150,  330 => 148,  328 => 147,  324 => 145,  321 => 143,  319 => 141,  313 => 138,  309 => 136,  307 => 134,  302 => 131,  300 => 129,  297 => 128,  295 => 125,  292 => 124,  290 => 122,  287 => 121,  285 => 116,  278 => 111,  269 => 108,  265 => 106,  261 => 105,  254 => 101,  241 => 93,  234 => 91,  227 => 89,  221 => 88,  214 => 86,  207 => 84,  200 => 82,  193 => 80,  186 => 78,  178 => 72,  176 => 70,  146 => 47,  122 => 25,  61 => 13,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 18,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
