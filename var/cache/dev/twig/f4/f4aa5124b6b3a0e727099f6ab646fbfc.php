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
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
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
            <div class=\"brand-logo\">
                <a href=\"index.html\">
                    <b class=\"logo-abbr\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-compact.png"), "html", null, true);
        echo "\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        Banque Alimentaire
                    </span>
                </a>
            </div>
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
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        ";
        // line 117
        echo "                        ";
        // line 171
        echo "                        ";
        // line 184
        echo "                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                ";
        // line 187
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 188
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "image", [], "any", false, false, false, 188))), "html", null, true);
            echo "\" height=\"40\" width=\"40\" alt=\"\">    
                                            ";
        } else {
            // line 190
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.png"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" alt=\"\">   
                                             ";
        }
        // line 192
        echo "                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        ";
        // line 205
        echo "                                        ";
        // line 206
        echo "                                        ";
        // line 209
        echo "                                         ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 210
            echo "                                          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                    ";
        } else {
            // line 212
            echo "                     <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"icon-key\"></i> <span>Login</span></a></li>
                   ";
        }
        // line 214
        echo "                                       
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
";
        // line 226
        $this->loadTemplate("backend/sidebar.html", "backend/base.html.twig", 226)->display($context);
        // line 227
        echo "      

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            ";
        // line 233
        $this->displayBlock('body', $context, $blocks);
        // line 234
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
        // line 255
        $this->displayBlock('Js', $context, $blocks);
        // line 287
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 233
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

    // line 255
    public function block_Js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        // line 256
        echo "  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>
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
        return array (  372 => 285,  365 => 281,  361 => 280,  356 => 278,  352 => 277,  347 => 275,  343 => 274,  338 => 272,  334 => 271,  330 => 270,  325 => 268,  320 => 266,  314 => 263,  310 => 262,  306 => 261,  302 => 260,  298 => 259,  293 => 256,  283 => 255,  265 => 233,  253 => 287,  251 => 255,  228 => 234,  226 => 233,  218 => 227,  216 => 226,  202 => 214,  196 => 212,  190 => 210,  187 => 209,  185 => 206,  183 => 205,  177 => 192,  171 => 190,  165 => 188,  163 => 187,  158 => 184,  156 => 171,  154 => 117,  114 => 50,  110 => 49,  76 => 18,  72 => 17,  67 => 15,  63 => 14,  58 => 12,  45 => 1,);
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
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
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
            <div class=\"brand-logo\">
                <a href=\"index.html\">
                    <b class=\"logo-abbr\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"{{ asset('images/logo-compact.png') }}\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        Banque Alimentaire
                    </span>
                </a>
            </div>
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
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
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
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <img src=\"{{asset('images/' ~ app.user.image)}}\" height=\"40\" width=\"40\" alt=\"\">    
                                            {% else %}
                            <img src=\"{{asset('images/user/1.png')}}\" height=\"40\" width=\"40\" alt=\"\">   
                                             {% endif %}
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        {# <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Login</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Logout</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                         #}
                                        {# <hr class=\"my-2\"> #}
                                        {# <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li> #}
                                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                          <li><a href=\"{{ path('app_logout') }}\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                    {% else %}
                     <li><a href=\"{{ path('app_login') }}\"><i class=\"icon-key\"></i> <span>Login</span></a></li>
                   {% endif %}
                                       
                                    </ul>
                                </div>
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
    </body>
</html>
", "backend/base.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\base.html.twig");
    }
}
