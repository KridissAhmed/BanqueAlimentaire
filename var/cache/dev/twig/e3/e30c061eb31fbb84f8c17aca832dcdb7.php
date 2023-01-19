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

/* backend/famille/index.html.twig */
class __TwigTemplate_ef59eba45f4f4d3d7f95815d516ade45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/famille/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/famille/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/famille/index.html.twig", 1);
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
                 
            </div>

            <div class=\"container-fluid\">
                <div class=\"row\">
                    
                    <!-- /# column -->
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <h4>Familles</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                 <th>Code</th>
                                                <th>Libellé</th>
                                                
                                                <th>Supprimer</th>
                                                <th>Mofifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familles"]) || array_key_exists("familles", $context) ? $context["familles"] : (function () { throw new RuntimeError('Variable "familles" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "                                            <tr>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "codeFamille", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "libelleFamille", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                                
                                                <td>
                                                 <form method=\"post\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 41))), "html", null, true);
            echo "\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">modifier</a>
                                                </td>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    <!-- /# card -->

                                                                             <!-- /# pagination -->
                        <div class=\"card\" >
                            <div class=\"card-body\" >
                                 <div class=\"bootstrap-pagination\">
                                    <nav>
                                        <ul class=\"pagination\">
                                            <li class=\"page-item\">
                                            
                                              ";
        // line 68
        if (((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 68, $this->source); })()) >= 0)) {
            // line 69
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index", ["offset" => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 69, $this->source); })())]), "html", null, true);
            echo "\" class=\"page-link\">Previous</a>
       ";
        }
        // line 71
        echo "                                           
                                            </li>
                                            ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["familles"]) || array_key_exists("familles", $context) ? $context["familles"] : (function () { throw new RuntimeError('Variable "familles" does not exist.', 73, $this->source); })())) > (isset($context["PAGINATOR_PER_PAGE"]) || array_key_exists("PAGINATOR_PER_PAGE", $context) ? $context["PAGINATOR_PER_PAGE"] : (function () { throw new RuntimeError('Variable "PAGINATOR_PER_PAGE" does not exist.', 73, $this->source); })()))) {
            // line 74
            echo "                                            ";
            $context["j"] = 0;
            // line 75
            echo "                                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["familles"]) || array_key_exists("familles", $context) ? $context["familles"] : (function () { throw new RuntimeError('Variable "familles" does not exist.', 75, $this->source); })())), (isset($context["PAGINATOR_PER_PAGE"]) || array_key_exists("PAGINATOR_PER_PAGE", $context) ? $context["PAGINATOR_PER_PAGE"] : (function () { throw new RuntimeError('Variable "PAGINATOR_PER_PAGE" does not exist.', 75, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 76
                echo "                                        ";
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 76, $this->source); })()) + 1);
                // line 77
                echo "                                              
                                           ";
                // line 78
                if ((((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 78, $this->source); })()) < (((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 78, $this->source); })()) / (isset($context["PAGINATOR_PER_PAGE"]) || array_key_exists("PAGINATOR_PER_PAGE", $context) ? $context["PAGINATOR_PER_PAGE"] : (function () { throw new RuntimeError('Variable "PAGINATOR_PER_PAGE" does not exist.', 78, $this->source); })())) + 5)) && ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 78, $this->source); })()) > (((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 78, $this->source); })()) / (isset($context["PAGINATOR_PER_PAGE"]) || array_key_exists("PAGINATOR_PER_PAGE", $context) ? $context["PAGINATOR_PER_PAGE"] : (function () { throw new RuntimeError('Variable "PAGINATOR_PER_PAGE" does not exist.', 78, $this->source); })())) - 5)))) {
                    // line 79
                    echo "
                                             <li class=\"page-item\"><a class=\"page-link\"href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_index", ["offset" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 80, $this->source); })()), "html", null, true);
                    echo "</a>
                                            </li>
                                            ";
                }
                // line 83
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                              ";
        }
        // line 85
        echo "                                            <li class=\"page-item\">";
        if (((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 85, $this->source); })()) < twig_length_filter($this->env, (isset($context["familles"]) || array_key_exists("familles", $context) ? $context["familles"] : (function () { throw new RuntimeError('Variable "familles" does not exist.', 85, $this->source); })())))) {
            // line 86
            echo "           <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_index", ["offset" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 86, $this->source); })())]), "html", null, true);
            echo "\"  class=\"page-link\" >Next</a>
       ";
        }
        // line 88
        echo "                                            </li>
                                        </ul> 
                                        
       
          
                                     </nav>
                                </div>
                            </div>
                        </div>
                        <!-- /#  end pagination -->
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
        return "backend/famille/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 88,  230 => 86,  227 => 85,  224 => 84,  218 => 83,  210 => 80,  207 => 79,  205 => 78,  202 => 77,  199 => 76,  194 => 75,  191 => 74,  189 => 73,  185 => 71,  179 => 69,  177 => 68,  159 => 52,  150 => 49,  139 => 41,  134 => 39,  128 => 36,  124 => 35,  121 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% block title %}Famille index{% endblock %}

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
                                    <h4>Familles</h4>
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                                 <th>Code</th>
                                                <th>Libellé</th>
                                                
                                                <th>Supprimer</th>
                                                <th>Mofifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for f in familles %}
                                            <tr>
                                                <td>{{ f.codeFamille }}</td>
                                                <td>{{ f.libelleFamille }}</td>
                                                
                                                <td>
                                                 <form method=\"post\" action=\"{{ path('app_famille_delete', {'id': f.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ f.id) }}\">
                                                <a class=\"btn mb-1 btn-rounded btn-danger btn-sm\" style=\"color:white;\" href=\"#\" onclick=\"\$(this).closest('form').submit()\">supprimer</a>
                                            </form>
                                                
                                                </td>

                                                
                                                 
                                                <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success btn-sm\" href=\"{{ path('app_famille_edit', {'id': f.id}) }}\">modifier</a>
                                                </td>
                                                {% endfor %}
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                    <!-- /# card -->

                                                                             <!-- /# pagination -->
                        <div class=\"card\" >
                            <div class=\"card-body\" >
                                 <div class=\"bootstrap-pagination\">
                                    <nav>
                                        <ul class=\"pagination\">
                                            <li class=\"page-item\">
                                            
                                              {% if previous >= 0 %}
            <a href=\"{{ path('app_utilisateur_index', {  offset: previous }) }}\" class=\"page-link\">Previous</a>
       {% endif %}
                                           
                                            </li>
                                            {% if familles|length > PAGINATOR_PER_PAGE %}
                                            {% set j = 0 %}
                                              {% for i  in range (0,familles|length, PAGINATOR_PER_PAGE) %}
                                        {% set j = j + 1 %}
                                              
                                           {% if j < ( next / PAGINATOR_PER_PAGE ) + 5   and  j > ( previous / PAGINATOR_PER_PAGE) -5   %}

                                             <li class=\"page-item\"><a class=\"page-link\"href=\"{{ path('app_famille_index', {   offset: i  }) }}\">{{j}}</a>
                                            </li>
                                            {% endif %}
                                              {% endfor %}
                                              {% endif %}
                                            <li class=\"page-item\">{% if next < familles|length %}
           <a href=\"{{ path('app_famille_index', {   offset: next }) }}\"  class=\"page-link\" >Next</a>
       {% endif %}
                                            </li>
                                        </ul> 
                                        
       
          
                                     </nav>
                                </div>
                            </div>
                        </div>
                        <!-- /#  end pagination -->
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

    <a href=\"{{ path('app_utilisateur_new') }}\">Create new</a> #}", "backend/famille/index.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\famille\\index.html.twig");
    }
}
