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

/* backend/index.html.twig */
class __TwigTemplate_8538404e408e974422558f22498b9f64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

             
               <div class=\"container-fluid card pt-1 col-11\">
        <div class=\"d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-1 pb-1\">
            <h1 class=\"h1\">L B A</h1>
        </div>

        <div class=\"table-responsive mb-3 text-center\">
           
        </div>
        <div class=\"d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-2 pb-1\">
            <h3 class=\"h3\">Liste des Besoins Alimentaires</h3></br>
            
        </div>
        <div class=\"table-responsive text-center\">
            <p class=\"p\">Application développée par des étudiants de l’école</br>
               d’ingénieur 3IL de Limoges pour le compte</br> de La Banque Alimentaire</br>
               de la Haute Vienne</br></br>
               Cette application permet aux associations</br> partenaires de 
               la BA87 de transmettre la liste des</br> besoins alimentaires de leurs bénéficiaires</br></br>
               N’hésitez pas à nous faire part de vos remarques</br>
               <a href=\"mailto:ba870.commande@banquealimentaire.org?\">ba870.commande@banquealimentaire.org</a></p>
        </div>
    </div>
             

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
 <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

             
               <div class=\"container-fluid card pt-1 col-11\">
        <div class=\"d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-1 pb-1\">
            <h1 class=\"h1\">L B A</h1>
        </div>

        <div class=\"table-responsive mb-3 text-center\">
           
        </div>
        <div class=\"d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-2 pb-1\">
            <h3 class=\"h3\">Liste des Besoins Alimentaires</h3></br>
            
        </div>
        <div class=\"table-responsive text-center\">
            <p class=\"p\">Application développée par des étudiants de l’école</br>
               d’ingénieur 3IL de Limoges pour le compte</br> de La Banque Alimentaire</br>
               de la Haute Vienne</br></br>
               Cette application permet aux associations</br> partenaires de 
               la BA87 de transmettre la liste des</br> besoins alimentaires de leurs bénéficiaires</br></br>
               N’hésitez pas à nous faire part de vos remarques</br>
               <a href=\"mailto:ba870.commande@banquealimentaire.org?\">ba870.commande@banquealimentaire.org</a></p>
        </div>
    </div>
             

{% endblock %}", "backend/index.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\index.html.twig");
    }
}
