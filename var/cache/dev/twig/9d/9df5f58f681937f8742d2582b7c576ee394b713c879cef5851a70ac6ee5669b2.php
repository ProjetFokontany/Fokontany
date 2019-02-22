<?php

/* security/login.html.twig */
class __TwigTemplate_6fab7fd368aa56253ba696ab52aab5fe1e1eed57f0012d215f8890acbfc904a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login V18</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate/animate.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
</head>
<body style=\"background-color: #666666;\">
\t
\t<div class=\"limiter\">
      \t<div class=\"container-login100\">
\t\t\t<div class=\"\">
                
\t\t\t\t<form class=\"login100-form validate-form\" action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" >
\t\t\t\t\t<span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tFokotany login
\t\t\t\t\t</span>
\t\t\t\t\t
                    ";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t        \t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 43, $this->source); })()), "messageKey", []), "html", null, true);
            echo "
\t\t\t\t\t    </span>
                    ";
        }
        // line 46
        echo "                    
\t\t\t\t\t
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"_username\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new Twig_Error_Runtime('Variable "lastUsername" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" >
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"label-input100\">Password</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-sb-m w-full p-t-3 p-b-32\">
\t\t\t\t\t\t<div class=\"contact100-form-checkbox\">
\t\t\t\t\t\t\t<input class=\"input-checkbox100\" id=\"ckb1\" type=\"checkbox\" name=\"remember-me\" >
\t\t\t\t\t\t\t<label class=\"label-checkbox100\" for=\"ckb1\">
\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotpasword");
        echo "\" class=\"txt1\">
\t\t\t\t\t\t\t\tForgot Password?
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tor sign up using
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"login100-form-social flex-c-m\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary \" style=\"margin-right:5px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t

\t
\t
<!--===============================================================================================-->
\t<script src=\"\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/countdowntime/countdowntime.js\"></script>
<!--===============================================================================================-->
\t<script src=\"js/main.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  211 => 119,  207 => 118,  202 => 116,  197 => 114,  193 => 113,  188 => 111,  143 => 69,  120 => 49,  115 => 46,  109 => 43,  106 => 42,  104 => 41,  96 => 36,  84 => 27,  80 => 26,  75 => 24,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  45 => 12,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login V18</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/animate/animate.css')}}\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/animsition/css/animsition.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/select2/select2.min.css')}}\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/util.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/main.css')}}\">
<!--===============================================================================================-->
</head>
<body style=\"background-color: #666666;\">
\t
\t<div class=\"limiter\">
      \t<div class=\"container-login100\">
\t\t\t<div class=\"\">
                
\t\t\t\t<form class=\"login100-form validate-form\" action=\"{{path('login')}}\" method=\"POST\" >
\t\t\t\t\t<span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tFokotany login
\t\t\t\t\t</span>
\t\t\t\t\t
                    {% if error %}
                        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t        \t{{error.messageKey}}
\t\t\t\t\t    </span>
                    {% endif %}
                    
\t\t\t\t\t
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"_username\" value=\"{{lastUsername}}\" >
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"label-input100\">Password</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-sb-m w-full p-t-3 p-b-32\">
\t\t\t\t\t\t<div class=\"contact100-form-checkbox\">
\t\t\t\t\t\t\t<input class=\"input-checkbox100\" id=\"ckb1\" type=\"checkbox\" name=\"remember-me\" >
\t\t\t\t\t\t\t<label class=\"label-checkbox100\" for=\"ckb1\">
\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{path('forgotpasword')}}\" class=\"txt1\">
\t\t\t\t\t\t\t\tForgot Password?
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tor sign up using
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"login100-form-social flex-c-m\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary \" style=\"margin-right:5px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t

\t
\t
<!--===============================================================================================-->
\t<script src=\"\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets/vendor/animsition/js/animsition.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets/vendor/bootstrap/js/popper.js')}}\"></script>
\t<script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets/vendor/select2/select2.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets/vendor/daterangepicker/moment.min.js')}}\"></script>
\t<script src=\"{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/countdowntime/countdowntime.js\"></script>
<!--===============================================================================================-->
\t<script src=\"js/main.js\"></script>

</body>
</html>", "security/login.html.twig", "D:\\Projet GIT\\Fokontany\\templates\\security\\login.html.twig");
    }
}
