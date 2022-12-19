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

/* backend/sidebar.html */
class __TwigTemplate_97e9bc9c0065b9dc91eaa46229fb9287 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/sidebar.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/sidebar.html"));

        // line 1
        echo "  <!--**********************************
            Sidebar start
        ***********************************-->
        ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                     <li>
                        <a   href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Accueil</span>
                        </a>
         
                    </li>
                   
                
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Utilisateur</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
            echo "\">Ajouter Utilisateur</a></li>
                            <li><a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
            echo "\">Gerer les utilisateurs</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Produit</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            echo "\">Ajouter Produit</a></li>
                            <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">Gerer les produits</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Famille</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_new");
            echo "\">Ajouter famille</a></li>
                            <li><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_famille_index");
            echo "\">Gerer les familles</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Sous Famille</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sous_famille_new");
            echo "\">Ajouter sous famille</a></li>
                            <li><a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sous_famille_index");
            echo "\">Gerer les sous familles</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Classification</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_new");
            echo "\">Ajouter Classification</a></li>
                            <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_index");
            echo "\">Gerer les Classifications</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a  href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            echo "\" aria-expanded=\"false\">
                            <i class=\"icon-notebook menu-icon\"></i><span class=\"nav-text\">Commandes</span>
                        </a>
                        
                    </li>
                   
                    
                    
                </ul>
            </div>
        </div>
        
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 80
            echo "        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                     <li>
                        <a   href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Accueil</span>
                        </a>
         
                    </li>
                   
                
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Commander</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_commande_new");
            echo "\">Ajouter une commande</a></li>
                            <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            echo "\">Mes commandes</a></li>
                            
                        </ul>
                    </li>
                   
                   
                    
                    
                </ul>
            </div>
        </div>
";
        }
        // line 109
        echo "      
        <!--**********************************
            Sidebar end
        ***********************************-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "backend/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 109,  188 => 97,  184 => 96,  169 => 84,  163 => 80,  147 => 67,  139 => 62,  135 => 61,  123 => 52,  119 => 51,  107 => 42,  103 => 41,  91 => 32,  87 => 31,  75 => 22,  71 => 21,  56 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <!--**********************************
            Sidebar start
        ***********************************-->
        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                     <li>
                        <a   href=\"{{ path('app_home') }}\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Accueil</span>
                        </a>
         
                    </li>
                   
                
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Utilisateur</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_utilisateur_new') }}\">Ajouter Utilisateur</a></li>
                            <li><a href=\"{{ path('app_utilisateur_index') }}\">Gerer les utilisateurs</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Produit</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_article_new') }}\">Ajouter Produit</a></li>
                            <li><a href=\"{{ path('app_article_index') }}\">Gerer les produits</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Famille</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_famille_new') }}\">Ajouter famille</a></li>
                            <li><a href=\"{{ path('app_famille_index') }}\">Gerer les familles</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Sous Famille</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_sous_famille_new') }}\">Ajouter sous famille</a></li>
                            <li><a href=\"{{ path('app_sous_famille_index') }}\">Gerer les sous familles</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Classification</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_classification_new') }}\">Ajouter Classification</a></li>
                            <li><a href=\"{{ path('app_classification_index') }}\">Gerer les Classifications</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a  href=\"{{ path('app_commande_index') }}\" aria-expanded=\"false\">
                            <i class=\"icon-notebook menu-icon\"></i><span class=\"nav-text\">Commandes</span>
                        </a>
                        
                    </li>
                   
                    
                    
                </ul>
            </div>
        </div>
        
        {% elseif is_granted('ROLE_USER') %}
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                     <li>
                        <a   href=\"{{ path('app_home') }}\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Accueil</span>
                        </a>
         
                    </li>
                   
                
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Commander</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_detail_commande_new') }}\">Ajouter une commande</a></li>
                            <li><a href=\"{{ path('app_commande_index') }}\">Mes commandes</a></li>
                            
                        </ul>
                    </li>
                   
                   
                    
                    
                </ul>
            </div>
        </div>
{% endif %}
      
        <!--**********************************
            Sidebar end
        ***********************************-->", "backend/sidebar.html", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\sidebar.html");
    }
}
