<?php

/* pages/home.html.twig */
class __TwigTemplate_ccc6cacd293d3009195d3e99977eec83236aa3a3030daf97f666a1d244429696 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PagesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

<<<<<<< HEAD
        // line 6
        echo "  <div class=\"header-area\">
                <div class=\"row align-items-center\">
                    <!-- nav and search button -->
                    <div class=\"col-md-6 col-sm-8 clearfix\">
                        <div class=\"nav-btn pull-left\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class=\"search-box pull-left\">
                            <form action=\"#\">
                                <input type=\"text\" name=\"search\" placeholder=\"Search...\" required>
                                <i class=\"fa fa-search\"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class=\"col-md-6 col-sm-4 clearfix\">
                        <ul class=\"notification-area pull-right\">
                            <li id=\"full-view\"><i class=\"fa fa-arrows\"></i></li>
                            <li id=\"full-view-exit\"><i class=\"fa fa-minus-square-o\"></i></li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-bell-o dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span>2</span>
                                </i>
                                <div class=\"dropdown-menu bell-notify-box notify-box\">
                                    <span class=\"notify-title\">You have 3 new notifications <a href=\"#\">view all</a></span>
                                    <div class=\"nofity-list\">
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-key btn-danger\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-comments-smiley btn-info\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-key btn-primary\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-envelope-o dropdown-toggle\" data-toggle=\"dropdown\"><span>3</span></i>
                                <div class=\"dropdown-menu notify-box nt-enveloper-box\">
                                    <span class=\"notify-title\">You have 3 new notifications <a href=\"#\">view all</a></span>
                                    <div class=\"nofity-list\">
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\">
                                                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author/author-img1.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                                            </div>
                                            <div class=\"notify-text\">
                                                <p>Aglae Mayer</p>
                                                <span class=\"msg\">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"settings-btn\">
                                <i class=\"fa fa-gears\"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class=\"page-title-area\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-6\">
                        <div class=\"breadcrumbs-area clearfix\">
                            <h4 class=\"page-title pull-left\">Dashboard</h4>
                            <ul class=\"breadcrumbs pull-left\">
                                <li><a href=\"index.html\">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 clearfix\">
                        <div class=\"user-profile pull-right\">
                            <img class=\"avatar user-thumb\" src=\"assets/images/author/avatar.png\" alt=\"avatar\">
                            <h4 class=\"user-name dropdown-toggle\" data-toggle=\"dropdown\">Kumkum Rai <i class=\"fa fa-angle-down\"></i></h4>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Message</a>
                                <a class=\"dropdown-item\" href=\"#\">Settings</a>
                                <a class=\"dropdown-item\" href=\"#\">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class=\"main-content-inner\">
                <!-- MAIN CONTENT GOES HERE -->
            </div>

            
=======
        echo "  
                <h1>Hello wold</h1>  
>>>>>>> dev-interface
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  133 => 65,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
=======
        return array (  63 => 5,  45 => 3,  15 => 1,);
>>>>>>> dev-interface
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello PagesController!{% endblock %}

<<<<<<< HEAD
{% block body %}
  <div class=\"header-area\">
                <div class=\"row align-items-center\">
                    <!-- nav and search button -->
                    <div class=\"col-md-6 col-sm-8 clearfix\">
                        <div class=\"nav-btn pull-left\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class=\"search-box pull-left\">
                            <form action=\"#\">
                                <input type=\"text\" name=\"search\" placeholder=\"Search...\" required>
                                <i class=\"fa fa-search\"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class=\"col-md-6 col-sm-4 clearfix\">
                        <ul class=\"notification-area pull-right\">
                            <li id=\"full-view\"><i class=\"fa fa-arrows\"></i></li>
                            <li id=\"full-view-exit\"><i class=\"fa fa-minus-square-o\"></i></li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-bell-o dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span>2</span>
                                </i>
                                <div class=\"dropdown-menu bell-notify-box notify-box\">
                                    <span class=\"notify-title\">You have 3 new notifications <a href=\"#\">view all</a></span>
                                    <div class=\"nofity-list\">
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-key btn-danger\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-comments-smiley btn-info\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\"><i class=\"ti-key btn-primary\"></i></div>
                                            <div class=\"notify-text\">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-envelope-o dropdown-toggle\" data-toggle=\"dropdown\"><span>3</span></i>
                                <div class=\"dropdown-menu notify-box nt-enveloper-box\">
                                    <span class=\"notify-title\">You have 3 new notifications <a href=\"#\">view all</a></span>
                                    <div class=\"nofity-list\">
                                        <a href=\"#\" class=\"notify-item\">
                                            <div class=\"notify-thumb\">
                                                <img src=\"{{asset('assets/images/author/author-img1.jpg')}}\" alt=\"image\">
                                            </div>
                                            <div class=\"notify-text\">
                                                <p>Aglae Mayer</p>
                                                <span class=\"msg\">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"settings-btn\">
                                <i class=\"fa fa-gears\"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class=\"page-title-area\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-6\">
                        <div class=\"breadcrumbs-area clearfix\">
                            <h4 class=\"page-title pull-left\">Dashboard</h4>
                            <ul class=\"breadcrumbs pull-left\">
                                <li><a href=\"index.html\">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 clearfix\">
                        <div class=\"user-profile pull-right\">
                            <img class=\"avatar user-thumb\" src=\"assets/images/author/avatar.png\" alt=\"avatar\">
                            <h4 class=\"user-name dropdown-toggle\" data-toggle=\"dropdown\">Kumkum Rai <i class=\"fa fa-angle-down\"></i></h4>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Message</a>
                                <a class=\"dropdown-item\" href=\"#\">Settings</a>
                                <a class=\"dropdown-item\" href=\"#\">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class=\"main-content-inner\">
                <!-- MAIN CONTENT GOES HERE -->
            </div>

            
=======
{% block body %}  
                <h1>Hello wold</h1>  
>>>>>>> dev-interface
{% endblock %}
", "pages/home.html.twig", "F:\\ProjetHackathon\\Fokontany\\templates\\pages\\home.html.twig");
    }
}
