<?php

/* MyAppApBundle:Satisfaction:remerciement.html.twig */
class __TwigTemplate_9b32b3d729f05f4f51fd7708121e3b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/satisfaction.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
 
    </head>
    <body>
                     <div id=\"logoSatisfaction\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>
            </div>
                <div id=\"satisfaction\">
                    <p><b><h2>Merci de votre participation!
                    <br> Et surtout merci de nous avoir choisi..</h2></b></p>
                <p>  Grâce à vous nous pouvons améliorer notre service et répondre au mieux à vos attentes.
                Finalement, sachez que tout tips est laissé à votre discrétion.</p>
                <p>Nous espérons vous revoir bientôt..</p>
                
";
        // line 20
        if (($this->getAttribute($this->getContext($context, "production"), "contratCree") == 1)) {
            // line 21
            echo "                
                <b>Pour recevoir votre facture par mail </b>(remplissez le champ avec votre adresse courriel et envoyer)
                 <br> 
                    <form action=\"\" method=\"post\" ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo ">
                    <div class=\"error\">
                        ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
                    </div>
                <table>
                    <tr>
                        <td>";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
            echo "</td>
                        <td>    
                        ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
            echo "
                        ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
            echo "
                        </td>

                        ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
                <br>
                <td>
                <input type=\"submit\" value=\"Envoyer\" title=\"Envoyer\"/>  
                </td>
                </tr>

                </table>
                </form>               

                            ";
            // line 46
            if ($this->getContext($context, "messageValidation")) {
                // line 47
                echo "<p><b><input type=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "messageValidation"), "html", null, true);
                echo "</b></p>
<p><b><h2>Enfin terminé pour vous :)</h2></b></p>

";
            }
        } else {
            // line 52
            echo "


                <b>Pour recevoir un mail proposant nos services l'an prochain inscrivez votre courriel...</b>
                 <br> 
                    <form action=\"\" method=\"post\" ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo ">
                    <div class=\"error\">
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
                    </div>
                <table>
                    <tr>
                        <td>";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
            echo "</td>
                        <td>    
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
            echo "
                        ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
            echo "
                        </td>

                        ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
                <br>
                <td>
                <input type=\"submit\" value=\"Envoyer\" title=\"Envoyer\"/>  
                </td>
                </tr>

                </table>
                </form>               

                            ";
            // line 79
            if ($this->getContext($context, "messageValidation")) {
                // line 80
                echo "<p><b><input type=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "messageValidation"), "html", null, true);
                echo "</b></p>
<p><b><h2>Enfin terminé pour vous :)</h2></b></p>
";
            }
        }
        // line 84
        echo "                </div>

          
   
             <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_satisfaction_equipe", array("id" => $this->getAttribute($this->getContext($context, "production"), "id"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/pencil.png"), "html", null, true);
        echo "\"  title=\"Modifier\"/></a>  
             </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Satisfaction:remerciement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 4,  175 => 88,  169 => 84,  159 => 80,  157 => 79,  144 => 69,  138 => 66,  134 => 65,  129 => 63,  122 => 59,  117 => 57,  110 => 52,  99 => 47,  97 => 46,  84 => 36,  78 => 33,  74 => 32,  69 => 30,  62 => 26,  57 => 24,  52 => 21,  50 => 20,  38 => 11,  30 => 6,  25 => 4,  20 => 1,);
    }
}
