<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backend/utilisateur/editmdp.html.twig */
class __TwigTemplate_7393b7f6f15e50a59a37d7056e94063b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/editmdp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/editmdp.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/utilisateur/editmdp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     <div class=\"row page-titles mx-0\">
                 
            </div>
            <!-- row -->

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Modifier mot de passe de l'utilisateur : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 15, $this->source); })()), "nomAssociation", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
                                <h10 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h10>
                                <div class=\"basic-form\">
                                 <form method=\"POST\" id =\"formulaire\">
                                    <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Nouveau mot de passe</label>
                                                   
                                                 <input type=\"password\" name=\"p\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div><div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Confirmer le nouveau mot de passe</label>
                                                   
                                                 <input type=\"password\" name=\"cp\" class=\"form-control\" >
                                                  
                                             </div>
                                                
                                        </div>
                                   </form>
                    <button  class=\"btn mb-1 btn-primary\" type=\"submit\" form=\"formulaire\">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>


   

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backend/utilisateur/editmdp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  80 => 15,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

 
{% block body %}
     <div class=\"row page-titles mx-0\">
                 
            </div>
            <!-- row -->

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Modifier mot de passe de l'utilisateur : {{u.nomAssociation}}</h4>
                                <h10 class=\"card-title\">{{error}}</h10>
                                <div class=\"basic-form\">
                                 <form method=\"POST\" id =\"formulaire\">
                                    <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Nouveau mot de passe</label>
                                                   
                                                 <input type=\"password\" name=\"p\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div><div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Confirmer le nouveau mot de passe</label>
                                                   
                                                 <input type=\"password\" name=\"cp\" class=\"form-control\" >
                                                  
                                             </div>
                                                
                                        </div>
                                   </form>
                    <button  class=\"btn mb-1 btn-primary\" type=\"submit\" form=\"formulaire\">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>


   

    {# <a href=\"{{ path('app_utilisateur_index') }}\">back to list</a> #}
{% endblock %}
", "backend/utilisateur/editmdp.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\utilisateur\\editmdp.html.twig");
    }
}
