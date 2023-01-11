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

/* backend/detail_commande/new.html.twig */
class __TwigTemplate_7a01412ccdab78c4d7beccc449b74eed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'Js' => [$this, 'block_Js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/detail_commande/new.html.twig", 1);
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
                                <h4 class=\"card-title\">Passer une commande 
                                <span style=\"color:red;\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span>
                        
                                </h4>
                                <div class=\"basic-form\">
                                    
                                     <form method=\"POST\" id =\"formulaire\">
                                      <div id =\"xxx\">
                                      <div class=\"form-row\" id=\"0\" >
                                            <div class=\"form-group col-md-6\">
                                                <label>Article</label>
                                                  <select name=\"article[0]\" class=\"form-control\" id=\"article-select\" required>
                                                  <option value=\"\">--choisissez un produit--</option>
                                                   ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 29
            echo "                                                 <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "libelleArticle", [], "any", false, false, false, 29), "html", null, true);
            echo "</option>
                                                
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                                    </select>
                                              </div>
                                              <div class=\"form-group col-md-6\">
                                                <label>Quantite</label>
                                               <input type=\"number\" name=\"quantite[0]\" class=\"form-control\" required >  
                                             </div>
                                            
                                        
                                        </div>
                         <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Commentaire pour un produit</label>
                                                   
                                                 <input type=\"text\" maxlength=\"50\" name=\"commentaireProduit[0]\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div>
                                      </div>
                                     

                                     

                                      </div>      
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Nombre de beneficiaire</label>
                                                   
                                                 <input type=\"number\" name=\"beneficiaire\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div><div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>date de livraison souhaité</label>
                                                   
                                                 <input type=\"date\" name=\"date\" class=\"form-control\" >
                                                  
                                             </div>
                                                
                                        </div>
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                            <label>Souhaitez vous etre livré</label>
                                                  <select name=\"livrable\" class=\"form-control\" id=\"livrable-select\" required>
                                                     
                                                 <option value=1>Oui</option>
                                                <option value=0>Non</option>

                                                
                                                   
                                                    </select>
                                             </div>
                                                
                                        </div>
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Commentaire </label>
                                                   
                                                 <input type=\"text\"  maxlength=\"50\" name=\"commentaire\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div>
                                        
                                              
                                            
                                        
                                        

                                       
                                        
                                           

                                    </form>
                   <button  class=\"btn mb-1 btn-primary\" onclick=\"add_more_commande()\">ajouter un autre Produit</button>
                   <button  class=\"btn mb-1 btn-primary\" type=\"submit\" form=\"formulaire\">passer la commande</button>

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

    // line 122
    public function block_Js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        // line 123
        echo "
    <script>
    var counter=0;
    function add_more_commande(){
        counter++;
      var  html='<div class=\"form-group col-md-6\">\\
          <label>Article</label>\\
 <select name=\"article['+counter+']\" class=\"form-control\" id=\"article-select\" required>\\
<option value=\"\">--choisissez un produit--</option>\\
 ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo "\\
<option value=";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 133), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "libelleArticle", [], "any", false, false, false, 133), "html", null, true);
            echo "</option>\\
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\\
         </select>\\
      </div>\\
       <div class=\"form-group col-md-6\">\\
   <label>Quantite</label>\\
  <input type=\"number\" name=\"quantite['+counter+']\" class=\"form-control\" required>\\
    </div>'
     var html2 =  ' \\
  <div class=\"form-group col-md-12\">\\
    <label>Commentaire pour le produit</label><input  maxlength=\"50\" type=\"text\" name=\"commentaireProduit['+counter+']\" class=\"form-control\">\\
      </div>    ';
 var container = document.createElement(\"div\");
 container.classList.add('form-row');
  var container2 = document.createElement(\"div\");
 container2.classList.add('form-row');
container.innerHTML += html;
container2.innerHTML += html2;
document.getElementById(\"xxx\").appendChild(container);
document.getElementById(\"xxx\").appendChild(container2);
 
  
    }
    
    </script>
  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backend/detail_commande/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 187,  343 => 183,  339 => 182,  334 => 180,  330 => 179,  325 => 177,  321 => 176,  316 => 174,  312 => 173,  308 => 172,  303 => 170,  298 => 168,  292 => 165,  288 => 164,  284 => 163,  280 => 162,  276 => 161,  247 => 134,  237 => 133,  231 => 132,  220 => 123,  210 => 122,  113 => 32,  101 => 29,  97 => 28,  82 => 16,  69 => 5,  59 => 4,  36 => 1,);
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
                                <h4 class=\"card-title\">Passer une commande 
                                <span style=\"color:red;\">{{erreur}}</span>
                        
                                </h4>
                                <div class=\"basic-form\">
                                    
                                     <form method=\"POST\" id =\"formulaire\">
                                      <div id =\"xxx\">
                                      <div class=\"form-row\" id=\"0\" >
                                            <div class=\"form-group col-md-6\">
                                                <label>Article</label>
                                                  <select name=\"article[0]\" class=\"form-control\" id=\"article-select\" required>
                                                  <option value=\"\">--choisissez un produit--</option>
                                                   {% for a in articles %}
                                                 <option value={{a.id}}>{{a.libelleArticle}}</option>
                                                
                                                   {% endfor %}
                                                    </select>
                                              </div>
                                              <div class=\"form-group col-md-6\">
                                                <label>Quantite</label>
                                               <input type=\"number\" name=\"quantite[0]\" class=\"form-control\" required >  
                                             </div>
                                            
                                        
                                        </div>
                         <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Commentaire pour un produit</label>
                                                   
                                                 <input type=\"text\" maxlength=\"50\" name=\"commentaireProduit[0]\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div>
                                      </div>
                                     

                                     

                                      </div>      
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Nombre de beneficiaire</label>
                                                   
                                                 <input type=\"number\" name=\"beneficiaire\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div><div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>date de livraison souhaité</label>
                                                   
                                                 <input type=\"date\" name=\"date\" class=\"form-control\" >
                                                  
                                             </div>
                                                
                                        </div>
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                            <label>Souhaitez vous etre livré</label>
                                                  <select name=\"livrable\" class=\"form-control\" id=\"livrable-select\" required>
                                                     
                                                 <option value=1>Oui</option>
                                                <option value=0>Non</option>

                                                
                                                   
                                                    </select>
                                             </div>
                                                
                                        </div>
                                        <div class=\"form-row\"   >
                                            <div class=\"form-group col-md-12\">
                                                <label>Commentaire </label>
                                                   
                                                 <input type=\"text\"  maxlength=\"50\" name=\"commentaire\" class=\"form-control\" > 
                                             </div>
                                                
                                        </div>
                                        
                                              
                                            
                                        
                                        

                                       
                                        
                                           

                                    </form>
                   <button  class=\"btn mb-1 btn-primary\" onclick=\"add_more_commande()\">ajouter un autre Produit</button>
                   <button  class=\"btn mb-1 btn-primary\" type=\"submit\" form=\"formulaire\">passer la commande</button>

                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>


   

    {# <a href=\"{{ path('app_utilisateur_index') }}\">back to list</a> #}
{% endblock %}

      {% block Js %}

    <script>
    var counter=0;
    function add_more_commande(){
        counter++;
      var  html='<div class=\"form-group col-md-6\">\\
          <label>Article</label>\\
 <select name=\"article['+counter+']\" class=\"form-control\" id=\"article-select\" required>\\
<option value=\"\">--choisissez un produit--</option>\\
 {% for a in articles %}\\
<option value={{a.id}}>{{a.libelleArticle}}</option>\\
{% endfor %}\\
         </select>\\
      </div>\\
       <div class=\"form-group col-md-6\">\\
   <label>Quantite</label>\\
  <input type=\"number\" name=\"quantite['+counter+']\" class=\"form-control\" required>\\
    </div>'
     var html2 =  ' \\
  <div class=\"form-group col-md-12\">\\
    <label>Commentaire pour le produit</label><input  maxlength=\"50\" type=\"text\" name=\"commentaireProduit['+counter+']\" class=\"form-control\">\\
      </div>    ';
 var container = document.createElement(\"div\");
 container.classList.add('form-row');
  var container2 = document.createElement(\"div\");
 container2.classList.add('form-row');
container.innerHTML += html;
container2.innerHTML += html2;
document.getElementById(\"xxx\").appendChild(container);
document.getElementById(\"xxx\").appendChild(container2);
 
  
    }
    
    </script>
  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"{{asset('plugins/common/common.min.js')}}\"></script>
    <script src=\"{{asset('js/custom.min.js')}}\"></script>
    <script src=\"{{asset('js/settings.js')}}\"></script>
    <script src=\"{{asset('js/gleek.js')}}\"></script>
    <script src=\"{{asset('js/styleSwitcher.js')}}\"></\"></script>

    <!-- Chartjs -->
    <script src=\"{{asset('plugins/chart.js/Chart.bundle.min.js')}}\"></script>
    <!-- Circle progress -->
    <script src=\"{{asset('plugins/circle-progress/circle-progress.min.js')}}\"></script>
    <!-- Datamap -->
    <script src=\"{{asset('plugins/d3v3/index.js')}}\"></script>
    <script src=\"{{asset('plugins/topojson/topojson.min.js')}}\"></script>
    <script src=\"{{asset('plugins/datamaps/datamaps.world.min.js')}}\"></script>
    <!-- Morrisjs -->
    <script src=\"{{asset('plugins/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('plugins/morris/morris.min.js')}}\"></script>
    <!-- Pignose Calender -->
    <script src=\"{{asset('plugins/moment/moment.min.js')}}\"></script>
    <script src=\"{{asset('plugins/pg-calendar/js/pignose.calendar.min.js')}}\"></script>
    <!-- ChartistJS -->
    <script src=\"{{asset('plugins/chartist/js/chartist.min.js')}}\"></script>
    <script src=\"{{asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}\"></script>



    <script src=\"{{asset('js/dashboard/dashboard-1.js')}}\"></script>
        {% endblock %}
", "backend/detail_commande/new.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\detail_commande\\new.html.twig");
    }
}
