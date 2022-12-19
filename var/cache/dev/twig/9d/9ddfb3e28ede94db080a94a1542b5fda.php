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

/* backend/article/new.html.twig */
class __TwigTemplate_2367aab20046eca5170ebc88db3f894c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/article/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/article/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/article/new.html.twig", 1);
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
                                <h4 class=\"card-title\">Produit</h4>
                                <div class=\"basic-form\">
                                    
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                    <form>
                                    
                                         <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>codeArticle</label>
                                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "codeArticle", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>libelleArticle</label>
                                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "libelleArticle", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>indice</label>
                                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "indice", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>sousFamille</label>
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "sousFamille", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>classification</label>
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "classification", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>Publiable</label>
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "publiable", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            
                                        </div>
                                        </div>
                                      
                                          ";
        // line 64
        if (((isset($context["modifier"]) || array_key_exists("modifier", $context) ? $context["modifier"] : (function () { throw new RuntimeError('Variable "modifier" does not exist.', 64, $this->source); })()) == false)) {
            // line 65
            echo "                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">ajouter</button>
                                          ";
        } else {
            // line 67
            echo "                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">modifier</button>

                                          ";
        }
        // line 70
        echo "                                         
                                       ";
        // line 72
        echo "                                        
                                        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
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
        return "backend/article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 73,  164 => 72,  161 => 70,  156 => 67,  152 => 65,  150 => 64,  142 => 59,  132 => 52,  122 => 45,  112 => 38,  102 => 31,  92 => 24,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
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
                                <h4 class=\"card-title\">Produit</h4>
                                <div class=\"basic-form\">
                                    
                                    {{ form_start(form) }}
                                    <form>
                                    
                                         <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>codeArticle</label>
                                            {{ form_widget(form.codeArticle, {'attr': {'class': 'form-control' }}) }}
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>libelleArticle</label>
                                            {{ form_widget(form.libelleArticle, {'attr': {'class': 'form-control'  }}) }}
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>indice</label>
                                            {{ form_widget(form.indice, {'attr': {'class': 'form-control' }}) }}
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>sousFamille</label>
                                            {{ form_widget(form.sousFamille, {'attr': {'class': 'form-control', }}) }}
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>classification</label>
                                            {{ form_widget(form.classification, {'attr': {'class': 'form-control'  }}) }}
                                            
                                        </div>
                                        </div>
                                        <div class=\"form-row\">
                                         <div class=\"form-group\">
                                            <label>Publiable</label>
                                            {{ form_widget(form.publiable, {'attr': {'class': 'form-control'  }}) }}
                                            
                                        </div>
                                        </div>
                                      
                                          {% if modifier == false%}
                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">ajouter</button>
                                          {% else %}
                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">modifier</button>

                                          {% endif %}
                                         
                                       {# {{ form_widget(form.ajouter, {'attr': {'class':\"btn mb-1 btn-primary\" }}) }} #}
                                        
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

", "backend/article/new.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\article\\new.html.twig");
    }
}
