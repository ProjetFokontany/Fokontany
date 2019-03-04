<?php

/* base.html.twig */
class __TwigTemplate_0188acd5acf18a7b7b990b7e64df384a4b829cd378b69a541bc6b5e9cb5b5599 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Fokotany</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>
    <body style=\"background-color: #f5f5f5;\">
   
        <div class=\"container-fluid\">
            
                <div class=\"page-container\">
                     ";
        // line 31
        $this->loadTemplate("include/sidebar.html.twig", "base.html.twig", 31)->display($context);
        // line 32
        echo "
                        <div class=\"main-content-inner\" style=\"margin-bottom:2%;\">                    
                          
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 mt-5\"> 
                                              ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "                                        </div>
                             </div>       
                            

                       </div>
                </div>
                <footer>
                    <div class=\"footer-area\">
                        <p>© Copyright 2018. All right reserved. by <p class=\"text-primary\">E-DEVY</p> </a>.</p>
                    </div>
                </footer>
           
        </div>
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/metisMenu.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.min.css"), "html", null, true);
        echo "\">
        <!-- amchart css -->
        <link rel=\"stylesheet\" href=\"https://www.amcharts.com/lib/3/plugins/export/export.css\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <!-- others css -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/typography.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default-css.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">
    <!-- modernizr css -->
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
                                              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "             <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap 4 js -->
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"assets/js/jquery.slicknav.min.js\"></script>

            <!-- start chart js -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
            <!-- start highcharts js -->
            <script src=\"https://code.highcharts.com/highcharts.js\"></script>
            <!-- start zingchart js -->
            <script src=\"https://cdn.zingchart.com/zingchart.min.js\"></script>
            <script>
                zingchart.MODULESDIR = \"https://cdn.zingchart.com/modules/\";
                ZC.LICENSE = [\"569d52cefae586f634c54f86dc99e6a9\", \"ee6b7db5b51705a13dc2339db3edaf6d\"];
            </script>
            <!-- all line chart activation -->
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/line-chart.js"), "html", null, true);
        echo "\"></script>
            <!-- all pie chart -->
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pie-chart.js"), "html", null, true);
        echo "\"></script>
            <!-- others plugins -->
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 79,  238 => 78,  233 => 76,  228 => 74,  211 => 60,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  189 => 54,  180 => 53,  169 => 38,  160 => 37,  148 => 23,  143 => 21,  139 => 20,  135 => 19,  131 => 18,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  103 => 8,  98 => 7,  89 => 6,  77 => 81,  75 => 53,  60 => 40,  58 => 37,  51 => 32,  49 => 31,  41 => 25,  39 => 6,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Fokotany</title>
        {% block stylesheets %}
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{asset('assets/images/icon/favicon.ico')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/themify-icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/metisMenu.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.carousel.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/slicknav.min.css')}}\">
        <!-- amchart css -->
        <link rel=\"stylesheet\" href=\"https://www.amcharts.com/lib/3/plugins/export/export.css\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <!-- others css -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/typography.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/default-css.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/responsive.css')}}\">
    <!-- modernizr css -->
    <script src=\"{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
        {% endblock %}
    </head>
    <body style=\"background-color: #f5f5f5;\">
   
        <div class=\"container-fluid\">
            
                <div class=\"page-container\">
                     {% include \"include/sidebar.html.twig\" %}

                        <div class=\"main-content-inner\" style=\"margin-bottom:2%;\">                    
                          
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 mt-5\"> 
                                              {% block body %}

                                              {% endblock %}
                                        </div>
                             </div>       
                            

                       </div>
                </div>
                <footer>
                    <div class=\"footer-area\">
                        <p>© Copyright 2018. All right reserved. by <p class=\"text-primary\">E-DEVY</p> </a>.</p>
                    </div>
                </footer>
           
        </div>
        {% block javascripts %}
             <script src=\"{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}\"></script>
            <!-- bootstrap 4 js -->
            <script src=\"{{asset('assets/js/popper.min.js')}}\"></script>
            <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
            <script src=\"{{asset('assets/js/owl.carousel.min.js')}}\"></script>
            <script src=\"{{asset('assets/js/metisMenu.min.js')}}\"></script>
            <script src=\"{{asset('assets/js/jquery.slimscroll.min.js')}}\"></script>
            <script src=\"assets/js/jquery.slicknav.min.js\"></script>

            <!-- start chart js -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
            <!-- start highcharts js -->
            <script src=\"https://code.highcharts.com/highcharts.js\"></script>
            <!-- start zingchart js -->
            <script src=\"https://cdn.zingchart.com/zingchart.min.js\"></script>
            <script>
                zingchart.MODULESDIR = \"https://cdn.zingchart.com/modules/\";
                ZC.LICENSE = [\"569d52cefae586f634c54f86dc99e6a9\", \"ee6b7db5b51705a13dc2339db3edaf6d\"];
            </script>
            <!-- all line chart activation -->
            <script src=\"{{asset('assets/js/line-chart.js')}}\"></script>
            <!-- all pie chart -->
            <script src=\"{{asset('assets/js/pie-chart.js')}}\"></script>
            <!-- others plugins -->
            <script src=\"{{asset('assets/js/plugins.js')}}\"></script>
            <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "F:\\ProjetHackathon\\Fokontany\\templates\\base.html.twig");
    }
}
