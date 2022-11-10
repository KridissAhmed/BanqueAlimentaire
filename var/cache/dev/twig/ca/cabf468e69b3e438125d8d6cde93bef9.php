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

/* backend/detail_commande/listecommande.html.twig */
class __TwigTemplate_1717efbc3b1864c352dfbf80525282fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/listecommande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/listecommande.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/detail_commande/listecommande.html.twig", 1);
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

        echo "Famille index";
        
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
        echo " 
            <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Commande</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Mes commande</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    
                    <!-- /# column -->
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <h4>Commande</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Utilisateur</th>
                                                <th>Date</th>
                                                <th>Etat</th>
                                                 ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                                                <th>supprimer</th>
                                                
                                                <th>Accepter</th>
                                                
                                                ";
        }
        // line 39
        echo "                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 44
            echo "                                            <tr>
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Utilisateur", [], "any", false, false, false, 45), "Username", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 46), "d-m-Y"), "html", null, true);
            echo "</td>
                                                
                                                ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 48) == true)) {
                // line 49
                echo "                                                <td> Acceptée</td>
                                                ";
            }
            // line 50
            echo " 
                                                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 51) == false)) {
                // line 52
                echo "                                                <td>En cours de traitement</td>
                                                ";
            }
            // line 53
            echo " 
                                                 ";
            // line 54
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 55
                echo "                                                <td>
                                                 <form method=\"post\" action=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('voulez vous supprimer cette commande?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 58))), "html", null, true);
                echo "\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                           
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\">accepter</a>
                                                </td>
                                                 ";
            }
            // line 71
            echo "                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-info\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">Detail</a>
                                                </td>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    <!-- /# card -->
                    </div>
                    
                </div>
            </div>
            <!-- #/ container -->
 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backend/detail_commande/listecommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  198 => 72,  195 => 71,  189 => 68,  176 => 58,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  159 => 52,  157 => 51,  154 => 50,  150 => 49,  148 => 48,  143 => 46,  139 => 45,  136 => 44,  132 => 43,  126 => 39,  119 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Famille index{% endblock %}

{% block body %}
 
            <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Commande</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Mes commande</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    
                    <!-- /# column -->
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <h4>Commande</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Utilisateur</th>
                                                <th>Date</th>
                                                <th>Etat</th>
                                                 {% if is_granted('ROLE_ADMIN') %}
                                                <th>supprimer</th>
                                                
                                                <th>Accepter</th>
                                                
                                                {% endif %}
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for c in commandes %}
                                            <tr>
                                                <td>{{ c.Utilisateur.Username }}</td>
                                                <td>{{ c.date|date('d-m-Y')}}</td>
                                                
                                                {% if(c.etat==true) %}
                                                <td> Acceptée</td>
                                                {% endif %} 
                                                {% if(c.etat==false) %}
                                                <td>En cours de traitement</td>
                                                {% endif %} 
                                                 {% if is_granted('ROLE_ADMIN') %}
                                                <td>
                                                 <form method=\"post\" action=\"{{ path('app_commande_delete', {'id': c.id}) }}\" onsubmit=\"return confirm('voulez vous supprimer cette commande?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ c.id) }}\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                           
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"{{ path('accepter', {'id': c.id}) }}\">accepter</a>
                                                </td>
                                                 {% endif %}
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-info\" href=\"{{ path('detail', {'id': c.id}) }}\">Detail</a>
                                                </td>
                                                {% endfor %}
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    <!-- /# card -->
                    </div>
                    
                </div>
            </div>
            <!-- #/ container -->
 
{% endblock %}





             ", "backend/detail_commande/listecommande.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\detail_commande\\listecommande.html.twig");
    }
}
