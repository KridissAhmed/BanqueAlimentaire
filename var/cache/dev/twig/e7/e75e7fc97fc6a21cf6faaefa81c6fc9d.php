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

/* security/login.html.twig */
class __TwigTemplate_7d127f9c18dd15e583fb01b3a2aed305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque Alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../assets/images/favicon.png\">
    <!-- <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\"> -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    
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
                    <div class=\"form-input-content\">
                        <div class=\"card login-form mb-0\">
                            <div class=\"card-body pt-5\">
                                <a class=\"text-center\" href=\"index.html\"> <h4>Banque Alimentaire</h4></a>
        
                                <form class=\"mt-5 mb-5 login-input\" method=\"post\">
                                 ";
        // line 47
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "                                     <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageKey", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageData", [], "any", false, false, false, 48), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 50
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "                                    <div class=\"mb-3\">
                                        You are logged in as ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "userIdentifier", [], "any", false, false, false, 52), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                ";
        }
        // line 55
        echo "                                    <div class=\"form-group\">
    <input type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" placeholder=\"Identifiant\"  required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"mot de passe\" required>

                                                    <input type=\"hidden\" name=\"_csrf_token\"
                                                        value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                                    >
                                    </div>
                                    <button class=\"btn login-form__btn submit w-100\">se connecter</button>
                                </form>
                                <p class=\"mt-5 login-form__footer\">vous n'avez pas de compte? <a href=\"page-register.html\" class=\"text-primary\">S'inscrire</a> maintenant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"plugins/common/common.min.js\"></script>
    <script src=\"js/custom.min.js\"></script>
    <script src=\"js/settings.js\"></script>
    <script src=\"js/gleek.js\"></script>
    <script src=\"js/styleSwitcher.js\"></script>
</body>
</html>






 
";
        // line 128
        echo " 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 128,  125 => 62,  116 => 56,  113 => 55,  105 => 52,  102 => 51,  99 => 50,  93 => 48,  91 => 47,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Banque Alimentaire</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../assets/images/favicon.png\">
    <!-- <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\"> -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    
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
                    <div class=\"form-input-content\">
                        <div class=\"card login-form mb-0\">
                            <div class=\"card-body pt-5\">
                                <a class=\"text-center\" href=\"index.html\"> <h4>Banque Alimentaire</h4></a>
        
                                <form class=\"mt-5 mb-5 login-input\" method=\"post\">
                                 {% if error %}
                                     <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                {% if app.user %}
                                    <div class=\"mb-3\">
                                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                    </div>
                                {% endif %}
                                    <div class=\"form-group\">
    <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" placeholder=\"Identifiant\"  required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"mot de passe\" required>

                                                    <input type=\"hidden\" name=\"_csrf_token\"
                                                        value=\"{{ csrf_token('authenticate') }}\"
                                                    >
                                    </div>
                                    <button class=\"btn login-form__btn submit w-100\">se connecter</button>
                                </form>
                                <p class=\"mt-5 login-form__footer\">vous n'avez pas de compte? <a href=\"page-register.html\" class=\"text-primary\">S'inscrire</a> maintenant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"plugins/common/common.min.js\"></script>
    <script src=\"js/custom.min.js\"></script>
    <script src=\"js/settings.js\"></script>
    <script src=\"js/gleek.js\"></script>
    <script src=\"js/styleSwitcher.js\"></script>
</body>
</html>






 
{# <form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputUsername\">Username</label>
    <input type=\"text\" value=\"{{ LAST_EMAIL }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
{#}
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form> #}
 
", "security/login.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\security\\login.html.twig");
    }
}
