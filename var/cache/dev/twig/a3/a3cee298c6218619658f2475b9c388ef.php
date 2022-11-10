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

/* backend/detail_commande/pdf.html.twig */
class __TwigTemplate_1e3be97f82fff83ebd56b3feb40c9365 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/pdf.html.twig"));

        // line 1
        echo " 
                                    <h4>La commande</h4>
                                 
                                    <table  >
                                        <thead>
                                            <tr>
                                                 <th>famille</th>
                                                <th>sous famille</th>
                                                
                                                <th>produit</th>
                                                <th>quantite</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 16
            echo "                                            <tr>
                                                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 17), "sousFamille", [], "any", false, false, false, 17), "famille", [], "any", false, false, false, 17), "libelleFamille", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                                                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 18), "sousFamille", [], "any", false, false, false, 18), "libelleSF", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                                                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 19), "libelleArticle", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                                                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "quantite", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                                           

                                                
                                                 
                                                ";
            // line 27
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                                            
                                        </tbody>
                                    </table>
                                     
                 
            <!-- #/ container -->
 





            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "backend/detail_commande/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  86 => 27,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
                                    <h4>La commande</h4>
                                 
                                    <table  >
                                        <thead>
                                            <tr>
                                                 <th>famille</th>
                                                <th>sous famille</th>
                                                
                                                <th>produit</th>
                                                <th>quantite</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for f in details %}
                                            <tr>
                                                <td>{{ f.article.sousFamille.famille.libelleFamille }}</td>
                                                <td>{{ f.article.sousFamille.libelleSF}}</td>
                                                <td>{{ f.article.libelleArticle  }}</td>
                                                <td>{{ f.quantite}}</td>
                                           

                                                
                                                 
                                                {# <td><a type=\"button\" class=\"btn mb-1 btn-rounded btn-success\" href=\"{{ path('app_famille_edit', {'id': f.id}) }}\">modifier</a>
                                                </td> #}
                                                {% endfor %}

                                            
                                        </tbody>
                                    </table>
                                     
                 
            <!-- #/ container -->
 





            ", "backend/detail_commande/pdf.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\detail_commande\\pdf.html.twig");
    }
}
