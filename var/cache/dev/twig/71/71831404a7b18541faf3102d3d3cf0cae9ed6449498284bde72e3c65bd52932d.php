<?php

/* include/sidebar.html.twig */
class __TwigTemplate_31fc6e79adaa378d384896e635f593f6d52a0c0abfc9d375c06d97dba94904a6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/sidebar.html.twig"));

        // line 1
<<<<<<< HEAD
        echo " <div class=\"sidebar-menu\">
=======
        echo "        <div class=\"sidebar-menu\">
>>>>>>> dev-interface
            <div class=\"sidebar-header\">
                <div class=\"logo\">
                    <a href=\"#\"><img src=\"assets/images/icon/logo.png\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"main-menu\">
                <div class=\"menu-inner\">
                    <nav>
                        <ul class=\"metismenu\" id=\"menu\">
<<<<<<< HEAD
                            <li class=\"active\">
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-dashboard\"></i><span>Dashboard</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"#\">Active Menu Item</a></li>
                                    <li><a href=\"#\">Menuitem 2</a></li>
                                    <li><a href=\"#\">Menuitem 3</a></li>
                                </ul>
                            </li>
                            <li>
=======
                            <li>
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-users\"></i><span>Individus</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"/individu\">Nouveau individu</a></li>
                                    <li class=\"active\"><a href=\"/individu\">List individus</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-home\"></i><span>Foyers</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"/foyer\">Nouveau foyer</a></li>
                                    <li class=\"active\"><a href=\"/foyer\">List foyers</a></li>
                                   
                                </ul>
                            </li>
                           
                            <li>
>>>>>>> dev-interface
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-align-left\"></i>
                                    <span>Multi
                                        level menu</span></a>
                                <ul class=\"collapse\">
                                    <li><a href=\"#\">Item level (1)</a></li>
                                    <li><a href=\"#\">Item level (1)</a></li>
                                    <li><a href=\"#\" aria-expanded=\"true\">Item level (1)</a>
                                        <ul class=\"collapse\">
                                            <li><a href=\"#\">Item level (2)</a></li>
                                            <li><a href=\"#\">Item level (2)</a></li>
                                            <li><a href=\"#\">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Item level (1)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
<<<<<<< HEAD


         <div class=\"offset-area\">
=======
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class=\"main-content\">
            <!-- header area start -->
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
                                <i class=\"ti-search\"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class=\"col-md-6 col-sm-4 clearfix\">
                        <ul class=\"notification-area pull-right\">
                            <li id=\"full-view\"><i class=\"fa fa-desktop\"></i></li>
                            <li id=\"full-view-exit\"><i class=\" fa fa-minus\"></i></li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-bell dropdown-toggle\" data-toggle=\"dropdown\">
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
                                                <img src=\"assets/images/author/author-img1.jpg\" alt=\"image\">
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
                            <h4 class=\"page-title pull-left\">Accueil</h4>
                            <ul class=\"breadcrumbs pull-left\">
                                <li><a href=\"/accueil\">Accueil</a></li>
                                
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

              <div class=\"offset-area\">
>>>>>>> dev-interface
        <div class=\"offset-close\"><i class=\"fa fa-close\"></i></div>
        <ul class=\"nav offset-menu-tab\">
            <li><a class=\"active\" data-toggle=\"tab\" href=\"#activity\">Activity</a></li>
            <li><a data-toggle=\"tab\" href=\"#settings\">Settings</a></li>
        </ul>
        <div class=\"offset-content tab-content\">
            <div id=\"activity\" class=\"tab-pane fade in show active\">
                <div class=\"recent-activity\">
                    <div class=\"timeline-task\">
                        <div class=\"icon bg1\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Rashed sent you an email</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg2\">
                            <i class=\"fa fa-check\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Added</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg2\">
                            <i class=\"fa fa-exclamation-triangle\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>You missed you Password!</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg3\">
                            <i class=\"fa fa-bomb\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Member waiting for you Attention</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id=\"settings\" class=\"tab-pane fade\">
                <div class=\"offset-settings\">
                    <h4>General Settings</h4>
                    <div class=\"settings-list\">
                        <div class=\"s-settings\">
                            <div class=\"s-sw-title\">
                                <h5>Notifications</h5>
                                <div class=\"s-swtich\">
                                    <input type=\"checkbox\" id=\"switch1\" />
                                    <label for=\"switch1\">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class=\"s-settings\">
                            <div class=\"s-sw-title\">
                                <h5>Show recent activity</h5>
                                <div class=\"s-swtich\">
                                    <input type=\"checkbox\" id=\"switch2\" />
                                    <label for=\"switch2\">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source(" <div class=\"sidebar-menu\">
=======
        return new Twig_Source("        <div class=\"sidebar-menu\">
>>>>>>> dev-interface
            <div class=\"sidebar-header\">
                <div class=\"logo\">
                    <a href=\"#\"><img src=\"assets/images/icon/logo.png\" alt=\"logo\"></a>
                </div>
            </div>
            <div class=\"main-menu\">
                <div class=\"menu-inner\">
                    <nav>
                        <ul class=\"metismenu\" id=\"menu\">
<<<<<<< HEAD
                            <li class=\"active\">
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-dashboard\"></i><span>Dashboard</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"#\">Active Menu Item</a></li>
                                    <li><a href=\"#\">Menuitem 2</a></li>
                                    <li><a href=\"#\">Menuitem 3</a></li>
                                </ul>
                            </li>
                            <li>
=======
                            <li>
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-users\"></i><span>Individus</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"/individu\">Nouveau individu</a></li>
                                    <li class=\"active\"><a href=\"/individu\">List individus</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-home\"></i><span>Foyers</span></a>
                                <ul class=\"collapse\">
                                    <li class=\"active\"><a href=\"/foyer\">Nouveau foyer</a></li>
                                    <li class=\"active\"><a href=\"/foyer\">List foyers</a></li>
                                   
                                </ul>
                            </li>
                           
                            <li>
>>>>>>> dev-interface
                                <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"fa fa-align-left\"></i>
                                    <span>Multi
                                        level menu</span></a>
                                <ul class=\"collapse\">
                                    <li><a href=\"#\">Item level (1)</a></li>
                                    <li><a href=\"#\">Item level (1)</a></li>
                                    <li><a href=\"#\" aria-expanded=\"true\">Item level (1)</a>
                                        <ul class=\"collapse\">
                                            <li><a href=\"#\">Item level (2)</a></li>
                                            <li><a href=\"#\">Item level (2)</a></li>
                                            <li><a href=\"#\">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Item level (1)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
<<<<<<< HEAD


         <div class=\"offset-area\">
=======
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class=\"main-content\">
            <!-- header area start -->
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
                                <i class=\"ti-search\"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class=\"col-md-6 col-sm-4 clearfix\">
                        <ul class=\"notification-area pull-right\">
                            <li id=\"full-view\"><i class=\"fa fa-desktop\"></i></li>
                            <li id=\"full-view-exit\"><i class=\" fa fa-minus\"></i></li>
                            <li class=\"dropdown\">
                                <i class=\"fa fa-bell dropdown-toggle\" data-toggle=\"dropdown\">
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
                                                <img src=\"assets/images/author/author-img1.jpg\" alt=\"image\">
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
                            <h4 class=\"page-title pull-left\">Accueil</h4>
                            <ul class=\"breadcrumbs pull-left\">
                                <li><a href=\"/accueil\">Accueil</a></li>
                                
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

              <div class=\"offset-area\">
>>>>>>> dev-interface
        <div class=\"offset-close\"><i class=\"fa fa-close\"></i></div>
        <ul class=\"nav offset-menu-tab\">
            <li><a class=\"active\" data-toggle=\"tab\" href=\"#activity\">Activity</a></li>
            <li><a data-toggle=\"tab\" href=\"#settings\">Settings</a></li>
        </ul>
        <div class=\"offset-content tab-content\">
            <div id=\"activity\" class=\"tab-pane fade in show active\">
                <div class=\"recent-activity\">
                    <div class=\"timeline-task\">
                        <div class=\"icon bg1\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Rashed sent you an email</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg2\">
                            <i class=\"fa fa-check\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Added</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg2\">
                            <i class=\"fa fa-exclamation-triangle\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>You missed you Password!</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class=\"timeline-task\">
                        <div class=\"icon bg3\">
                            <i class=\"fa fa-bomb\"></i>
                        </div>
                        <div class=\"tm-title\">
                            <h4>Member waiting for you Attention</h4>
                            <span class=\"time\"><i class=\"ti-time\"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id=\"settings\" class=\"tab-pane fade\">
                <div class=\"offset-settings\">
                    <h4>General Settings</h4>
                    <div class=\"settings-list\">
                        <div class=\"s-settings\">
                            <div class=\"s-sw-title\">
                                <h5>Notifications</h5>
                                <div class=\"s-swtich\">
                                    <input type=\"checkbox\" id=\"switch1\" />
                                    <label for=\"switch1\">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class=\"s-settings\">
                            <div class=\"s-sw-title\">
                                <h5>Show recent activity</h5>
                                <div class=\"s-swtich\">
                                    <input type=\"checkbox\" id=\"switch2\" />
                                    <label for=\"switch2\">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "include/sidebar.html.twig", "F:\\ProjetHackathon\\Fokontany\\templates\\include\\sidebar.html.twig");
    }
}
