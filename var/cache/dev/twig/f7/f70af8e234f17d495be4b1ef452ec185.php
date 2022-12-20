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

/* backend/sous_famille/new.html.twig */
class __TwigTemplate_abf7cb5a667b5e3f27931cff2c60a12d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/sous_famille/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/sous_famille/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/sous_famille/new.html.twig", 1);
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
                                <h4 class=\"card-title\">Sous Famille</h4>
                                <div class=\"basic-form\">
                                    
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                    <form>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Code sous famille </label>
                                                   
                                                 ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "codeSF", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        echo "
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Libellé sous famille</label>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "libelleSF", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "type" => "text"]]);
        echo "

                                                ";
        // line 31
        echo "                                            </div>
                                        </div>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>famille </label>
                                                   
                                                 ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "famille", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                             
                                        </div>
                                      
                                          ";
        // line 42
        if (((isset($context["modifier"]) || array_key_exists("modifier", $context) ? $context["modifier"] : (function () { throw new RuntimeError('Variable "modifier" does not exist.', 42, $this->source); })()) == false)) {
            // line 43
            echo "                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">ajouter</button>
                                          ";
        } else {
            // line 45
            echo "                                          <button type=\"submit\" class=\"btn mb-1 btn-primary\">modifier</button>

                                          ";
        }
        // line 48
        echo "                                         
                                       ";
        // line 50
        echo "                                        
                                        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
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
        return "backend/sous_famille/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  134 => 50,  131 => 48,  126 => 45,  122 => 43,  120 => 42,  112 => 37,  104 => 31,  99 => 28,  92 => 24,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
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
                                <h4 class=\"card-title\">Sous Famille</h4>
                                <div class=\"basic-form\">
                                    
                                    {{ form_start(form) }}
                                    <form>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>Code sous famille </label>
                                                   
                                                 {{ form_widget(form.codeSF, {'attr': {'class': 'form-control','type':\"text\"}}) }}
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label>Libellé sous famille</label>
                                {{ form_widget(form.libelleSF, {'attr': {'class': 'form-control', 'type':\"text\"}}) }}

                                                {# <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\"> #}
                                            </div>
                                        </div>
                                         <div class=\"form-row\">
                                            <div class=\"form-group col-md-6\">
                                                <label>famille </label>
                                                   
                                                 {{ form_widget(form.famille, {'attr': {'class': 'form-control'}}) }}
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
", "backend/sous_famille/new.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\sous_famille\\new.html.twig");
    }
}
