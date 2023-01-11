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
            'search' => [$this, 'block_search'],
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

        echo "Commandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "        <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                                                
                        <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_search");
        echo "\", method=\"post\">
                        <input type=\"text\"   name=\"search\" class=\"form-control\" placeholder=\"recherche d'association\" aria-label=\"Search Dashboard\">
                        </form>
                      
                    </div>  
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo " 
            <div class=\"row page-titles mx-0\">
               
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
                                                <th>nom d'association</th>
                                                <th>Date</th>
                                                <th>Etat</th>
                                                <th>date souhaité</th>
                                                <th>commentaire</th>
                                                <th>Avec livraison</th>
                                                 ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "                                                <th>supprimer</th>
                                                
                                                <th>Accepter</th>
                                                
                                                ";
        }
        // line 49
        echo "                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 54
            echo "                                            <tr>
                                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Utilisateur", [], "any", false, false, false, 55), "Username", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Utilisateur", [], "any", false, false, false, 56), "nomAssociation", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
            echo "</td>
                                                
                                                ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 59) == true)) {
                // line 60
                echo "                                                <td> Acceptée</td>
                                                ";
            }
            // line 61
            echo " 
                                                ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 62) == false)) {
                // line 63
                echo "                                                <td>En cours de traitement</td>
                                                ";
            }
            // line 64
            echo " 
                                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "datesouhaite", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true);
            echo "</td>
                                                   <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "commentaire", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                                    ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "livrable", [], "any", false, false, false, 67) == true)) {
                // line 68
                echo "                                                <td>Livraison</td>
                                                ";
            }
            // line 69
            echo " 
                                                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "livrable", [], "any", false, false, false, 70) == false)) {
                // line 71
                echo "                                                  <td>Sans Livraison</td>
                                                  ";
            }
            // line 72
            echo " 
                                              
                                                 ";
            // line 74
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 75
                echo "                                                  
                                                <td>
                                                

                                                 <form method=\"post\" action=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('voulez vous supprimer cette commande?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 81))), "html", null, true);
                echo "\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                           
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\">accepter</a>
                                                </td>
                                                 ";
            }
            // line 94
            echo "                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-info\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\">Detail</a>
                                                </td>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        return array (  274 => 98,  265 => 95,  262 => 94,  256 => 91,  243 => 81,  238 => 79,  232 => 75,  230 => 74,  226 => 72,  222 => 71,  220 => 70,  217 => 69,  213 => 68,  211 => 67,  207 => 66,  203 => 65,  200 => 64,  196 => 63,  194 => 62,  191 => 61,  187 => 60,  185 => 59,  180 => 57,  176 => 56,  172 => 55,  169 => 54,  165 => 53,  159 => 49,  152 => 44,  150 => 43,  122 => 17,  112 => 16,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Commandes{% endblock %}
{% block search %}
        <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                                                
                        <form action=\"{{ path('app_commande_search') }}\", method=\"post\">
                        <input type=\"text\"   name=\"search\" class=\"form-control\" placeholder=\"recherche d'association\" aria-label=\"Search Dashboard\">
                        </form>
                      
                    </div>  
 {% endblock %}
{% block body %}
 
            <div class=\"row page-titles mx-0\">
               
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
                                                <th>nom d'association</th>
                                                <th>Date</th>
                                                <th>Etat</th>
                                                <th>date souhaité</th>
                                                <th>commentaire</th>
                                                <th>Avec livraison</th>
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
                                                  <td>{{ c.Utilisateur.nomAssociation }}</td>
                                                <td>{{ c.date|date('d-m-Y')}}</td>
                                                
                                                {% if(c.etat==true) %}
                                                <td> Acceptée</td>
                                                {% endif %} 
                                                {% if(c.etat==false) %}
                                                <td>En cours de traitement</td>
                                                {% endif %} 
                                                <td>{{ c.datesouhaite|date('d-m-Y')}}</td>
                                                   <td>{{ c.commentaire }}</td>
                                                    {% if(c.livrable==true) %}
                                                <td>Livraison</td>
                                                {% endif %} 
                                                {% if(c.livrable==false) %}
                                                  <td>Sans Livraison</td>
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
