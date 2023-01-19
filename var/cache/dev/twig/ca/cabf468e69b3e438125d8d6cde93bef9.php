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
                                                <th>Nom de l’association</th>
                                                <th>Date</th>
                                                <th>État</th>
                                                <th>Date de livraison souhaitée</th>
                                                 <th>Avec livraison</th>
                                                 ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                                                <th>supprimer</th>
                                                
                                                <th>Accepter</th>
                                                
                                                ";
        }
        // line 48
        echo "                                                <th>Détail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 53
            echo "                                            <tr>
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Utilisateur", [], "any", false, false, false, 54), "Username", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Utilisateur", [], "any", false, false, false, 55), "nomAssociation", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "</td>
                                                
                                                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 58) == true)) {
                // line 59
                echo "                                                <td> Acceptée</td>
                                                ";
            }
            // line 60
            echo " 
                                                ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 61) == false)) {
                // line 62
                echo "                                                <td>En cours de traitement</td>
                                                ";
            }
            // line 63
            echo " 
                                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "datesouhaite", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo "</td>
                                                     ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "livrable", [], "any", false, false, false, 65) == true)) {
                // line 66
                echo "                                                <td>A LIVRER</td>
                                                ";
            }
            // line 67
            echo " 
                                                ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "livrable", [], "any", false, false, false, 68) == false)) {
                // line 69
                echo "                                                  <td>Sur Place</td>
                                                  ";
            }
            // line 70
            echo " 
                                              
                                                 ";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                                                  
                                                <td>
                                                

                                                 <form method=\"post\" action=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('voulez vous supprimer cette commande?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 79))), "html", null, true);
                echo "\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                           
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\">accepter</a>
                                                </td>
                                                 ";
            }
            // line 92
            echo "                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-info btn-sm\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\"> Détail </a>
                                                </td>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        return array (  269 => 96,  260 => 93,  257 => 92,  251 => 89,  238 => 79,  233 => 77,  227 => 73,  225 => 72,  221 => 70,  217 => 69,  215 => 68,  212 => 67,  208 => 66,  206 => 65,  202 => 64,  199 => 63,  195 => 62,  193 => 61,  190 => 60,  186 => 59,  184 => 58,  179 => 56,  175 => 55,  171 => 54,  168 => 53,  164 => 52,  158 => 48,  151 => 43,  149 => 42,  122 => 17,  112 => 16,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                                                <th>Nom de l’association</th>
                                                <th>Date</th>
                                                <th>État</th>
                                                <th>Date de livraison souhaitée</th>
                                                 <th>Avec livraison</th>
                                                 {% if is_granted('ROLE_ADMIN') %}
                                                <th>supprimer</th>
                                                
                                                <th>Accepter</th>
                                                
                                                {% endif %}
                                                <th>Détail</th>
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
                                                     {% if(c.livrable==true) %}
                                                <td>A LIVRER</td>
                                                {% endif %} 
                                                {% if(c.livrable==false) %}
                                                  <td>Sur Place</td>
                                                  {% endif %} 
                                              
                                                 {% if is_granted('ROLE_ADMIN') %}
                                                  
                                                <td>
                                                

                                                 <form method=\"post\" action=\"{{ path('app_commande_delete', {'id': c.id}) }}\" onsubmit=\"return confirm('voulez vous supprimer cette commande?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ c.id) }}\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                           
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"{{ path('accepter', {'id': c.id}) }}\">accepter</a>
                                                </td>
                                                 {% endif %}
                                                
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-info btn-sm\" href=\"{{ path('detail', {'id': c.id}) }}\"> Détail </a>
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
