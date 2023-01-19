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

/* backend/detail_commande/show.html.twig */
class __TwigTemplate_096d5b9695dafb04e4cebf44e7b54d9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/show.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/detail_commande/show.html.twig", 1);
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

        echo "Commande";
        
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
                 
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    
                    <!-- /# column -->
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <h4>La commande</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                             <th>code produit</th>
                                                <th>libelle produit</th>
                                                <th>quantite</th>
                                                 <th>famille</th>
                                                <th>sous famille</th>
                                                
                                                
                                                 <th>commentaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 37
            echo "                                            <tr>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 38), "codeArticle", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                               <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 39), "libelleArticle", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "quantite", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 41), "famille", [], "any", false, false, false, 41), "libelleFamille", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 42), "sousFamille", [], "any", false, false, false, 42), "libelleSF", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                             
                                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "commentaire", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                           

                                                
                                                 
                                                ";
            // line 51
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                                            
                                        </tbody>
                                    </table>
                                    <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">Telecharger PDF</a>
                                                </td> 
                                                ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "                                                 <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("csv", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Telecharger VIF</a>
                                                </td> ";
        }
        // line 61
        echo "                                </div>
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
        return "backend/detail_commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 61,  175 => 59,  173 => 58,  168 => 56,  162 => 52,  156 => 51,  148 => 44,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  124 => 37,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Commande{% endblock %}

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
                                    <h4>La commande</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                             <th>code produit</th>
                                                <th>libelle produit</th>
                                                <th>quantite</th>
                                                 <th>famille</th>
                                                <th>sous famille</th>
                                                
                                                
                                                 <th>commentaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for f in details %}
                                            <tr>
                                            <td>{{ f.article.codeArticle  }}</td>
                                               <td>{{ f.article.libelleArticle  }}</td>
                                                <td>{{ f.quantite}}</td>
                                                <td>{{ f.article.famille.libelleFamille }}</td>
                                                <td>{{ f.article.sousFamille.libelleSF}}</td>
                                             
                                                <td>{{ f.commentaire}}</td>
                                           

                                                
                                                 
                                                {# <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"{{ path('app_famille_edit', {'id': f.id}) }}\">modifier</a>
                                                </td> #}
                                                {% endfor %}

                                            
                                        </tbody>
                                    </table>
                                    <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"{{ path('pdf', {'id': commande.id}) }}\">Telecharger PDF</a>
                                                </td> 
                                                {% if is_granted('ROLE_ADMIN') %}
                                                 <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"{{ path('csv', {'id': commande.id}) }}\">Telecharger VIF</a>
                                                </td> {% endif %}
                                </div>
                            </div>
                        </div>
                                    <!-- /# card -->
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

    <a href=\"{{ path('app_utilisateur_new') }}\">Create new</a> #}", "backend/detail_commande/show.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\detail_commande\\show.html.twig");
    }
}
