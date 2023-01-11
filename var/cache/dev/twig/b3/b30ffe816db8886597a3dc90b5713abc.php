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

/* backend/utilisateur/new.html.twig */
class __TwigTemplate_bc13efca468899b59046f9fd0e1859d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/utilisateur/new.html.twig", 1);
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
                                <h4 class=\"card-title\">Utilisateur</h4>
                                <div class=\"basic-form\">
                                    
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                    <form>
                                         <div class=\"form-row\">
                                      
                                            <div class=\"form-group col-md-6\">
                                                <label>Email</label>
                                                   
                                                 ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Identifiant</label>
                                                 
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Identifiant", "type" => "text"]]);
        echo "

                                                ";
        // line 33
        echo "                                            </div>
                                        </div>
                                        <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Mot de passe</label>
                                                ";
        // line 39
        echo "                                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "password"]]);
        echo "
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Confirmer mot de passe</label>
                                                ";
        // line 44
        echo "                                             ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "password"]]);
        echo "

                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>Adresse</label>
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
                                            
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Nom de l'association</label>
                                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nomAssociation", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nomAssociation"]]);
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Telephone</label>
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "telephone", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "telephone"]]);
        echo "
                                        </div>
                                         
                                         <div class=\"form-group\">
                                         <label>Classification</label>
                                          ";
        // line 72
        echo "                                          <div class = \"fff \">
                                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "classifications", [], "any", false, false, false, 73), 'widget');
        echo " 

                                            </div>
                                        </div>
                                         
                                       ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Ajouter", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "btn mb-1 btn-primary"]]);
        echo "
                                         ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "

                                    </form>
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
        return "backend/utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 79,  166 => 78,  158 => 73,  155 => 72,  147 => 60,  140 => 56,  132 => 51,  121 => 44,  113 => 39,  106 => 33,  101 => 30,  93 => 25,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
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
                                <h4 class=\"card-title\">Utilisateur</h4>
                                <div class=\"basic-form\">
                                    
                                    {{ form_start(form) }}
                                    <form>
                                         <div class=\"form-row\">
                                      
                                            <div class=\"form-group col-md-6\">
                                                <label>Email</label>
                                                   
                                                 {{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder':'Email' }}) }}
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Identifiant</label>
                                                 
                                {{ form_widget(form.username, {'attr': {'class': 'form-control','placeholder':'Identifiant','type':\"text\"}}) }}

                                                {# <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\"> #}
                                            </div>
                                        </div>
                                        <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Mot de passe</label>
                                                {# <input type=\"password\" class=\"form-control\" placeholder=\"Password\"> #}
                                                {{ form_widget(form.password.first, {'attr': {'class': 'form-control','placeholder':'password' }}) }}
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Confirmer mot de passe</label>
                                                {# <input type=\"password\" class=\"form-control\" placeholder=\"Password\"> #}
                                             {{ form_widget(form.password.second, {'attr': {'class': 'form-control','placeholder':'password' }}) }}

                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>Adresse</label>
                                            {{ form_widget(form.adresse, {'attr': {'class': 'form-control','placeholder':'Adresse' }}) }}
                                            
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Nom de l'association</label>
                                            {{ form_widget(form.nomAssociation, {'attr': {'class': 'form-control','placeholder':'nomAssociation' }}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Telephone</label>
                                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control','placeholder':'telephone' }}) }}
                                        </div>
                                         
                                         <div class=\"form-group\">
                                         <label>Classification</label>
                                          {# {% for c  in classifications %}
                                            <div class=\"form-check mb-3\">
                                                <label class=\"form-check-label\">
                                                    <input name=\"classifications[]\" type=\"checkbox\" class=\"form-check-input\" value=\"{{c.type}}\">{{c.type}}</label>
                                            </div>
                                          
                                          {% endfor %}  #}
                                          <div class = \"fff \">
                                                {{ form_widget(form.classifications  )}} 

                                            </div>
                                        </div>
                                         
                                       {{ form_widget(form.Ajouter, {'attr': {'class':\"btn mb-1 btn-primary\" }}) }}
                                         {{ form_end(form) }}

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>


   

    {# <a href=\"{{ path('app_utilisateur_index') }}\">back to list</a> #}
{% endblock %}
", "backend/utilisateur/new.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\utilisateur\\new.html.twig");
    }
}
