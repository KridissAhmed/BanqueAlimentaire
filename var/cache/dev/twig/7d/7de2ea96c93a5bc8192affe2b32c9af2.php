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

/* backend/error.html.twig */
class __TwigTemplate_6479bfb95ffe7f78a3b7954090b21566 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque Alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
</head>

<body class=\"h-100\">
    
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
    

    <div class=\"login-form-bg h-100\">
        <div class=\"container h-100\">
            <div class=\"row justify-content-center h-100\">
                <div class=\"col-xl-6\">
                    <div class=\"error-content\">
                        <div class=\"card mb-0\">
                            <div class=\"card-body text-center\">
                                <h1 class=\"error-text text-primary\">403</h1>
                                <h4 class=\"mt-4\"><i class=\"fa fa-thumbs-down text-danger\"></i> Bad Request</h4>
                                <p>Your Request resulted in an error.</p>
                                <form class=\"mt-5 mb-5\">
                                    
                                    <div class=\"text-center mb-4 mt-4\"><a  href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">Retour</a>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <!-- <div class=\"error-bg h-100\">
        <div class=\"container h-100\">
            <div class=\"row justify-content-center h-100\">
                <div class=\"col-xl-6\">
                    <div class=\"error-content\">
                        <div class=\"card mb-0\">
                            <div class=\"card-body text-center\">
                                <h1 class=\"error-text text-primary\">400</h1>
                                <h4 class=\"mt-4\"><i class=\"fa fa-thumbs-down text-danger\"></i> Bad Request</h4>
                                <p>Your Request resulted in an error.</p>
                                <form class=\"mt-5 mb-5\">
                                    
                                    <div class=\"text-center mb-4 mt-4\"><a href=\"index.html\" class=\"btn btn-primary\">Go to Homepage</a>
                                    </div>
                                </form>
                                <div class=\"text-center\">
                                    <p>Copyright © Designed by <a href=\"https://themeforest.net/user/digitalheaps\">Digitalheaps</a>, Developed by <a href=\"https://themeforest.net/user/quixlab\">Quixlab</a> 2018</p>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-twitter\"><i class=\"fa fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-google-plus\"><i class=\"fa fa-google-plus\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
</body>
</html>





";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "backend/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 105,  163 => 104,  159 => 103,  155 => 102,  151 => 101,  91 => 44,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque Alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    
</head>

<body class=\"h-100\">
    
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
    

    <div class=\"login-form-bg h-100\">
        <div class=\"container h-100\">
            <div class=\"row justify-content-center h-100\">
                <div class=\"col-xl-6\">
                    <div class=\"error-content\">
                        <div class=\"card mb-0\">
                            <div class=\"card-body text-center\">
                                <h1 class=\"error-text text-primary\">403</h1>
                                <h4 class=\"mt-4\"><i class=\"fa fa-thumbs-down text-danger\"></i> Bad Request</h4>
                                <p>Your Request resulted in an error.</p>
                                <form class=\"mt-5 mb-5\">
                                    
                                    <div class=\"text-center mb-4 mt-4\"><a  href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Retour</a>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <!-- <div class=\"error-bg h-100\">
        <div class=\"container h-100\">
            <div class=\"row justify-content-center h-100\">
                <div class=\"col-xl-6\">
                    <div class=\"error-content\">
                        <div class=\"card mb-0\">
                            <div class=\"card-body text-center\">
                                <h1 class=\"error-text text-primary\">400</h1>
                                <h4 class=\"mt-4\"><i class=\"fa fa-thumbs-down text-danger\"></i> Bad Request</h4>
                                <p>Your Request resulted in an error.</p>
                                <form class=\"mt-5 mb-5\">
                                    
                                    <div class=\"text-center mb-4 mt-4\"><a href=\"index.html\" class=\"btn btn-primary\">Go to Homepage</a>
                                    </div>
                                </form>
                                <div class=\"text-center\">
                                    <p>Copyright © Designed by <a href=\"https://themeforest.net/user/digitalheaps\">Digitalheaps</a>, Developed by <a href=\"https://themeforest.net/user/quixlab\">Quixlab</a> 2018</p>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-twitter\"><i class=\"fa fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"javascript:void()\" class=\"btn btn-google-plus\"><i class=\"fa fa-google-plus\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"{{asset('plugins/common/common.min.js')}}\"></script>
    <script src=\"{{asset('js/custom.min.js')}}\"></script>
    <script src=\"{{asset('js/settings.js')}}\"></script>
    <script src=\"{{asset('js/gleek.js')}}\"></script>
    <script src=\"{{asset('js/styleSwitcher.js')}}\"></script>
</body>
</html>





", "backend/error.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\error.html.twig");
    }
}
