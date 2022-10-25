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
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
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
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
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
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
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
                                                <img class=\"float-left mr-3 avatar-img\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
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
                        </li>
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
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
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
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
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.png"), "html", null, true);
        echo "\" height=\"40\" width=\"40\" alt=\"\">
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"page-login.html\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
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

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label\">Dashboard</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Dashboard</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./index.html\">Home 1</a></li>
                            <!-- <li><a href=\"./index-2.html\">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Layouts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./layout-blank.html\">Blank</a></li>
                            <li><a href=\"./layout-one-column.html\">One Column</a></li>
                            <li><a href=\"./layout-two-column.html\">Two column</a></li>
                            <li><a href=\"./layout-compact-nav.html\">Compact Nav</a></li>
                            <li><a href=\"./layout-vertical.html\">Vertical</a></li>
                            <li><a href=\"./layout-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"./layout-boxed.html\">Boxed</a></li>
                            <li><a href=\"./layout-wide.html\">Wide</a></li>
                            
                            
                            <li><a href=\"./layout-fixed-header.html\">Fixed Header</a></li>
                            <li><a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Gestion Utilisateur</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-envelope menu-icon\"></i> <span class=\"nav-text\">Email</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./email-inbox.html\">Inbox</a></li>
                            <li><a href=\"./email-read.html\">Read</a></li>
                            <li><a href=\"./email-compose.html\">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-screen-tablet menu-icon\"></i><span class=\"nav-text\">Apps</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./app-profile.html\">Profile</a></li>
                            <li><a href=\"./app-calender.html\">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-graph menu-icon\"></i> <span class=\"nav-text\">Charts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./chart-flot.html\">Flot</a></li>
                            <li><a href=\"./chart-morris.html\">Morris</a></li>
                            <li><a href=\"./chart-chartjs.html\">Chartjs</a></li>
                            <li><a href=\"./chart-chartist.html\">Chartist</a></li>
                            <li><a href=\"./chart-sparkline.html\">Sparkline</a></li>
                            <li><a href=\"./chart-peity.html\">Peity</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            ";
        // line 298
        $this->displayBlock('body', $context, $blocks);
        // line 299
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
        // line 320
        $this->displayBlock('Js', $context, $blocks);
        // line 352
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 298
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

    // line 320
    public function block_Js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        // line 321
        echo "  <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 350
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
        return array (  520 => 350,  513 => 346,  509 => 345,  504 => 343,  500 => 342,  495 => 340,  491 => 339,  486 => 337,  482 => 336,  478 => 335,  473 => 333,  468 => 331,  462 => 328,  458 => 327,  454 => 326,  450 => 325,  446 => 324,  441 => 321,  431 => 320,  413 => 298,  401 => 352,  399 => 320,  376 => 299,  374 => 298,  260 => 187,  172 => 102,  119 => 52,  114 => 50,  110 => 49,  76 => 18,  72 => 17,  67 => 15,  63 => 14,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
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
                        <img src=\"{{ asset('images/logo-text.png') }}\" alt=\"\">
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
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
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
                        </li>
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
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
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
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
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"{{asset('images/user/1.png')}}\" height=\"40\" width=\"40\" alt=\"\">
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"page-login.html\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
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

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label\">Dashboard</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Dashboard</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./index.html\">Home 1</a></li>
                            <!-- <li><a href=\"./index-2.html\">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Layouts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./layout-blank.html\">Blank</a></li>
                            <li><a href=\"./layout-one-column.html\">One Column</a></li>
                            <li><a href=\"./layout-two-column.html\">Two column</a></li>
                            <li><a href=\"./layout-compact-nav.html\">Compact Nav</a></li>
                            <li><a href=\"./layout-vertical.html\">Vertical</a></li>
                            <li><a href=\"./layout-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"./layout-boxed.html\">Boxed</a></li>
                            <li><a href=\"./layout-wide.html\">Wide</a></li>
                            
                            
                            <li><a href=\"./layout-fixed-header.html\">Fixed Header</a></li>
                            <li><a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Gestion Utilisateur</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-envelope menu-icon\"></i> <span class=\"nav-text\">Email</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./email-inbox.html\">Inbox</a></li>
                            <li><a href=\"./email-read.html\">Read</a></li>
                            <li><a href=\"./email-compose.html\">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-screen-tablet menu-icon\"></i><span class=\"nav-text\">Apps</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./app-profile.html\">Profile</a></li>
                            <li><a href=\"./app-calender.html\">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-graph menu-icon\"></i> <span class=\"nav-text\">Charts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./chart-flot.html\">Flot</a></li>
                            <li><a href=\"./chart-morris.html\">Morris</a></li>
                            <li><a href=\"./chart-chartjs.html\">Chartjs</a></li>
                            <li><a href=\"./chart-chartist.html\">Chartist</a></li>
                            <li><a href=\"./chart-sparkline.html\">Sparkline</a></li>
                            <li><a href=\"./chart-peity.html\">Peity</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

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
