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

/* backend/utilisateur/edit.html.twig */
class __TwigTemplate_7d6b7c01f9bd2038d53fa728b9fdc728 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/utilisateur/edit.html.twig", 1);
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
                                <h4 class=\"card-title\">Utilisateur
                                <span style=\"color:red;\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span></h4>
                                <div class=\"basic-form\">
                                    
                                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                                    <form>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Email</label>
                                                   
                                                 ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Identifiant</label>
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Identifiant", "type" => "text"]]);
        echo "

                                                ";
        // line 32
        echo "                                            </div>
                                        </div>
                                         
                                        
                                        <div class=\"form-group\">
                                            <label>Adresse</label>
                                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
                                            
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Nom de l'association</label>
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nomAssociation", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nomAssociation"]]);
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Telephone</label>
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "telephone"]]);
        echo "
                                        </div>
                                         
                                         <div class=\"form-group\">
                                         <label>Classification</label>
                                          ";
        // line 59
        echo "                                          <div class = \"fff \">
                                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "classifications", [], "any", false, false, false, 60), 'widget');
        echo " 

                                            </div>
                                        </div>
                                         
                                       ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "Confirmer", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "btn mb-1 btn-primary"]]);
        echo "
                                        
                                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
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
        return "backend/utilisateur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 67,  150 => 65,  142 => 60,  139 => 59,  131 => 47,  124 => 43,  116 => 38,  108 => 32,  103 => 29,  96 => 25,  87 => 19,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
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
                                <h4 class=\"card-title\">Utilisateur
                                <span style=\"color:red;\">{{error}}</span></h4>
                                <div class=\"basic-form\">
                                    
                                    {{ form_start(form) }}
                                    <form>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Email</label>
                                                   
                                                 {{ form_widget(form.email, {'attr': {'class': 'form-control'  }}) }}
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Identifiant</label>
                                {{ form_widget(form.username, {'attr': {'class': 'form-control','placeholder':'Identifiant','type':\"text\"}}) }}

                                                {# <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\"> #}
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
                                         
                                       {{ form_widget(form.Confirmer, {'attr': {'class':\"btn mb-1 btn-primary\" }}) }}
                                        
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
", "backend/utilisateur/edit.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\utilisateur\\edit.html.twig");
    }
}
