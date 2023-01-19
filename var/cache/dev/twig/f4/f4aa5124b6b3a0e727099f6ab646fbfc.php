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

/* backend/base.html.twig */
class __TwigTemplate_f3ca0b6da82efd96bd240c3fa89bb146 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
            'Js' => [$this, 'block_Js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
    <!-- Pignose Calender -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pg-calendar/css/pignose.calendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist/css/chartist.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fy.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>
    <body>
      <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"loader\">
            <svg class=\"circular\" viewBox=\"25 25 50 50\">
                <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"3\" stroke-miterlimit=\"10\" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
             <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banquealimentaire.png"), "html", null, true);
        echo "\" width=\"180\" height=\"70\" alt=\"logo du site\" class=\"mx-1\" />
                </a>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                  ";
        // line 67
        $this->displayBlock('search', $context, $blocks);
        // line 70
        echo "                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        ";
        // line 103
        echo "                        ";
        // line 157
        echo "                        ";
        // line 170
        echo "                        <li class=\"icons dropdown\">
                            <div >
                                 ";
        // line 172
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 173
            echo "                           
                             <span class=\"toggle-icon\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "username", [], "any", false, false, false, 174), "html", null, true);
            echo "
                                            <a href=\"";
            // line 175
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"icon-user\"></i>   se deconnecter </a>
                                     </span>
                                            ";
        } else {
            // line 178
            echo " <span class=\"toggle-icon\">  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"icon-user\"></i>   se connecter </a>
                                     </span>                                             ";
        }
        // line 180
        echo "                            </div>
                             
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
";
        // line 190
        $this->loadTemplate("backend/sidebar.html", "backend/base.html.twig", 190)->display($context);
        // line 191
        echo "      

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            ";
        // line 197
        $this->displayBlock('body', $context, $blocks);
        // line 198
        echo "          
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
          
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
        
        ";
        // line 219
        $this->displayBlock('Js', $context, $blocks);
        // line 265
        echo "    </body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 68
        echo "                   
                      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_Js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        // line 220
        echo "  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>
     <style>
      .h1{
        font-size: 54px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: bolder;
        color: coral;
        text-shadow: 0 0 15px rgba(255,255,255), 0 0 15px rgba(255,255,255);
      }
      .p{
        font-size: 20px;
        color: black;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
    </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backend/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 249,  356 => 245,  352 => 244,  347 => 242,  343 => 241,  338 => 239,  334 => 238,  329 => 236,  325 => 235,  321 => 234,  316 => 232,  311 => 230,  305 => 227,  301 => 226,  297 => 225,  293 => 224,  289 => 223,  284 => 220,  274 => 219,  256 => 197,  245 => 68,  235 => 67,  223 => 265,  221 => 219,  198 => 198,  196 => 197,  188 => 191,  186 => 190,  174 => 180,  168 => 178,  162 => 175,  158 => 174,  155 => 173,  153 => 172,  149 => 170,  147 => 157,  145 => 103,  140 => 70,  138 => 67,  116 => 48,  112 => 47,  80 => 18,  76 => 17,  71 => 15,  67 => 14,  62 => 12,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('images/logo.png')}}\">
    <!-- Pignose Calender -->
    <link href=\"{{ asset('plugins/pg-calendar/css/pignose.calendar.min.css')}}\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/chartist/css/chartist.min.css') }}\" >
    <link rel=\"stylesheet\"  href=\"{{ asset('plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}\">
    <!-- Custom Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/fy.css') }}\" rel=\"stylesheet\">


</head>
    <body>
      <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"loader\">
            <svg class=\"circular\" viewBox=\"25 25 50 50\">
                <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"3\" stroke-miterlimit=\"10\" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
             <a href=\"{{ path('app_home') }}\">
                    <img src=\"{{asset('images/banquealimentaire.png')}}\" width=\"180\" height=\"70\" alt=\"logo du site\" class=\"mx-1\" />
                </a>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                  {% block search %}
                   
                      {% endblock %}
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        {# <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-email-outline\"></i>
                                <span class=\"badge badge-pill gradient-1\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">3 New Messages</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-1\">3</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li class=\"notification-unread\">
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"{{asset('images/avatar/1.jpg')}}\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Saiful Islam</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li> #}
                        {# <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell-outline\"></i>
                                <span class=\"badge badge-pill gradient-2\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu dropdown-notfication\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">2 New Notifications</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-2\">5</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events near you</h6>
                                                    <span class=\"notification-text\">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Started</h6>
                                                    <span class=\"notification-text\">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Ended Successfully</h6>
                                                    <span class=\"notification-text\">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events to Join</h6>
                                                    <span class=\"notification-text\">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li> #}
                        {# <li class=\"icons dropdown d-none d-md-flex\">
                            <a href=\"javascript:void(0)\" class=\"log-user\"  data-toggle=\"dropdown\">
                                <span>English</span>  <i class=\"fa fa-angle-down f-s-14\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"drop-down dropdown-language animated fadeIn  dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li><a href=\"javascript:void()\">English</a></li>
                                        <li><a href=\"javascript:void()\">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> #}
                        <li class=\"icons dropdown\">
                            <div >
                                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                           
                             <span class=\"toggle-icon\">{{app.user.username}}
                                            <a href=\"{{ path('app_logout') }}\"><i class=\"icon-user\"></i>   se deconnecter </a>
                                     </span>
                                            {% else %}
 <span class=\"toggle-icon\">  <a href=\"{{ path('app_login') }}\"><i class=\"icon-user\"></i>   se connecter </a>
                                     </span>                                             {% endif %}
                            </div>
                             
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
{% include 'backend/sidebar.html' %}
      

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            {% block body %}{% endblock %}
          
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
          
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
        
        {% block Js %}
  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"{{asset('plugins/common/common.min.js')}}\"></script>
    <script src=\"{{asset('js/custom.min.js')}}\"></script>
    <script src=\"{{asset('js/settings.js')}}\"></script>
    <script src=\"{{asset('js/gleek.js')}}\"></script>
    <script src=\"{{asset('js/styleSwitcher.js')}}\"></script>

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
     <style>
      .h1{
        font-size: 54px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: bolder;
        color: coral;
        text-shadow: 0 0 15px rgba(255,255,255), 0 0 15px rgba(255,255,255);
      }
      .p{
        font-size: 20px;
        color: black;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
    </style>
        {% endblock %}
    </body>

</html>", "backend/base.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\base.html.twig");
    }
}
