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

/* backend/utilisateur/index.html.twig */
class __TwigTemplate_5779a5a99b5e9d0b4c2baeb5338ae735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/utilisateur/index.html.twig", 1);
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

        echo "Utilisateur index";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        echo "\", method=\"post\">
                        <input type=\"text\"   name=\"search\" class=\"form-control\" placeholder=\"recherche par nom\" aria-label=\"Search Dashboard\">
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
                                    <h4>Utilisateurs</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                 <th>Association</th>
                                                <th>Identifiant</th>
                                                
                                                <th>email</th>
                                                <th>Adresse</th>
                                                <th>Telephone</th>
                                                <th>Supprimer</th>
                                                <th>Modifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 48
            echo "                                            <tr>
                                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomAssociation", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresse", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                                 <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                                <td>
                                                 <form method=\"post\" action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 57))), "html", null, true);
            echo "\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">modifier</a>
                                                </td>
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_editmdp", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">modifier mot de passe</a>
                                                </td>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                      
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
        return "backend/utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 70,  203 => 67,  198 => 65,  187 => 57,  182 => 55,  177 => 53,  173 => 52,  169 => 51,  165 => 50,  161 => 49,  158 => 48,  154 => 47,  122 => 17,  112 => 16,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Utilisateur index{% endblock %}
{% block search %}
        <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                                                
                        <form action=\"{{ path('app_user_search') }}\", method=\"post\">
                        <input type=\"text\"   name=\"search\" class=\"form-control\" placeholder=\"recherche par nom\" aria-label=\"Search Dashboard\">
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
                                    <h4>Utilisateurs</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                 <th>Association</th>
                                                <th>Identifiant</th>
                                                
                                                <th>email</th>
                                                <th>Adresse</th>
                                                <th>Telephone</th>
                                                <th>Supprimer</th>
                                                <th>Modifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for utilisateur in utilisateurs %}
                                            <tr>
                                                <td>{{ utilisateur.nomAssociation }}</td>
                                                <td>{{ utilisateur.username }}</td>
                                                <td>{{ utilisateur.email }}</td>
                                                <td>{{ utilisateur.adresse }}</td>
                                                 <td>{{ utilisateur.telephone }}</td>
                                                <td>
                                                 <form method=\"post\" action=\"{{ path('app_utilisateur_delete', {'id': utilisateur.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ utilisateur.id) }}\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\">modifier</a>
                                                </td>
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"{{ path('app_utilisateur_editmdp', {'id': utilisateur.id}) }}\">modifier mot de passe</a>
                                                </td>
                                                {% endfor %}
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                      
                    </div>
                    
                </div>
            </div>
            <!-- #/ container -->
 
{% endblock %}





            {# <h1>Utilisateur index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Password</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>NomAssociation</th>
                <th>Telephone</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td>{{ utilisateur.id }}</td>
                <td>{{ utilisateur.username }}</td>
                <td>{{ utilisateur.roles ? utilisateur.roles|json_encode : '' }}</td>
                <td>{{ utilisateur.password }}</td>
                <td>{{ utilisateur.email }}</td>
                <td>{{ utilisateur.adresse }}</td>
                <td>{{ utilisateur.nomAssociation }}</td>
                <td>{{ utilisateur.telephone }}</td>
                <td>
                    <a href=\"{{ path('app_utilisateur_show', {'id': utilisateur.id}) }}\">show</a>
                    <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_utilisateur_new') }}\">Create new</a> #}", "backend/utilisateur/index.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\utilisateur\\index.html.twig");
    }
}
