<?php

/* base_layout.twig */
class __TwigTemplate_219db80b4048d9c1e758f41ccb32610f35a3407fc76b9222592533fd17701292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vendor_stylesheets' => array($this, 'block_vendor_stylesheets'),
            'app_stylesheets' => array($this, 'block_app_stylesheets'),
            'body' => array($this, 'block_body'),
            'vendor_scripts' => array($this, 'block_vendor_scripts'),
            'app_scripts' => array($this, 'block_app_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["app_ver"]) ? $context["app_ver"] : null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (isset($context["app_description"]) ? $context["app_description"] : null), "html", null, true);
        echo "</title>

    <!-- Vendor styles -->
    ";
        // line 14
        $this->displayBlock('vendor_stylesheets', $context, $blocks);
        // line 20
        echo "
    <!-- App styles -->
    ";
        // line 22
        $this->displayBlock('app_stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>

<!-- Wrapper-->
<div class=\"wrapper\">

    <!-- Header-->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <div id=\"mobile-menu\">
                    <div class=\"left-nav-toggle\">
                        <a href=\"#\">
                            <i class=\"stroke-hamburgermenu\"></i>
                        </a>
                    </div>
                </div>
                <a class=\"navbar-brand\" href=\"index.html\">
                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null)), "html", null, true);
        echo "
                    <span>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["app_ver"]) ? $context["app_ver"] : null), "html", null, true);
        echo "</span>
                </a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <div class=\"left-nav-toggle\">
                    <a href=\"\">
                        <i class=\"stroke-hamburgermenu\"></i>
                    </a>
                </div>
                <form class=\"navbar-form navbar-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search data for analysis\" style=\"width: 175px\">
                </form>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\" profil-link\">
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, base_url("auth/logout"), "html", null, true);
        echo "\">
                            <span class=\"profile-address\">Wyloguj: ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["us_email"]) ? $context["us_email"] : null), "html", null, true);
        echo "</span>
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url("assets/images/profile.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class=\"navigation\">
        <nav>
            <ul class=\"nav luna-nav\">
                <li class=\"nav-category\" id=\"dashboard-menu\">
                    Pulpit
                </li>
                <li id=\"dashboard-monitoring-menu\">
                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, base_url("dashboard/monitoring"), "html", null, true);
        echo "\">Monitoring</a>
                </li>

                <li class=\"nav-category\">
                    Praca
                </li>
                <li id=\"customer-menu\">
                    <a href=\"#customer-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Klienci<span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"customer-submenu\" class=\"nav nav-second collapse\">
                        <li><a href=\"customerList.html\">Lista</a></li>
                        <li id=\"customer-add-submenu\"><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url("customer/add"), "html", null, true);
        echo "\">Dodaj</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#insurance\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Polisy<span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"insurance\" class=\"nav nav-second collapse\">
                        <li><a href=\"insuranceList.html\">Lista</a></li>
                        <li><a href=\"insuranceAdd.html\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li class=\"nav-category\">
                    Ustawienia
                </li>

                <li>
                    <a href=\"#reminder\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Przypomnienia <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"reminder\" class=\"nav nav-second collapse\">
                        <li><a href=\"configMail.html\">E-mail</a></li>
                        <li><a href=\"configSMS.html\">SMS</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href=\"#account\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Administrator <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"account\" class=\"nav nav-second collapse\">
                        <li><a href=\"adminPass.html\">Zmiana hasła</a></li>
                    </ul>
                </li>
                                
                <li>
                    <a href=\"#report\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Raporty <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"report\" class=\"nav nav-second collapse\">
                        <li><a href=\"logList.html\"> Logi </a></li>
                    </ul>
                </li>
                <li class=\"nav-info\">
                    <div class=\"m-b-xs\">
                        <span class=\"c-white\">Widok MONITORING</span><p class=\"text-justify\"> W tym widoku mamy ogólny ogląd na dane zapisane w aplikacji oraz listę z polisami klientów, które niebawem się skończą i można w określony sposób Klientom przypomnieć o ich przedłużeniu.</p>
                    </div>
                    <!--
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-call text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Zadzwoń\"></i></a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-mail-open-file text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Wyślij wiadomość\"></i></a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-light text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Zaproponuj poprawkę\"></i></a>
                        </div>
                    </div>
                    -->
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->

";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "
<!-- Vendor scripts -->
";
        // line 163
        $this->displayBlock('vendor_scripts', $context, $blocks);
        // line 173
        echo "
<!-- App scripts -->
";
        // line 175
        $this->displayBlock('app_scripts', $context, $blocks);
        // line 178
        echo "
<script>
    \$(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            \$(\".sparkline\").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            \$(\".sparkline7\").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            \$(\".sparkline1\").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            \$(\".sparkline3\").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            \$(\".sparkline5\").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            \$(\".sparkline6\").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            \$(\".sparkline8\").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline9\").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline10\").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline11\").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline12\").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline13\").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        \$(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: \"#404652\",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ \"#f7af3e\",\"#DE9536\"]
        };

        \$.plot(\$(\"#flot-line-chart\"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function(){
            toastr.options = {
                \"positionClass\": \"toast-top-right\",
                \"closeButton\": true,
                \"progressBar\": true,
                \"showEasing\": \"swing\",
                \"timeOut\": \"6000\"
            };
            toastr.warning('<strong>You entered to LUNA</strong> <br/><small>Premium admin theme with Dark UI style. </small>');
        },1600)


    });
</script>

</body>

</html>";
    }

    // line 14
    public function block_vendor_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, base_url("assets/vendor/fontawesome/css/font-awesome.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("assets/vendor/animate.css/animate.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("assets/vendor/toastr/toastr.min.css"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 22
    public function block_app_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/pe-icon-7-stroke.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/helper.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("assets/styles/stroke-icons/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("assets/styles/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 160
    public function block_body($context, array $blocks = array())
    {
    }

    // line 163
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 164
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/vendor/pacejs/pace.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, base_url("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, base_url("assets/vendor/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, base_url("assets/vendor/sparkline/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 175
    public function block_app_scripts($context, array $blocks = array())
    {
        // line 176
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/scripts/luna.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 176,  456 => 175,  450 => 171,  446 => 170,  442 => 169,  438 => 168,  434 => 167,  430 => 166,  426 => 165,  421 => 164,  418 => 163,  413 => 160,  407 => 26,  403 => 25,  399 => 24,  394 => 23,  391 => 22,  385 => 18,  381 => 17,  377 => 16,  372 => 15,  369 => 14,  223 => 178,  221 => 175,  217 => 173,  215 => 163,  211 => 161,  209 => 160,  139 => 93,  124 => 81,  104 => 64,  100 => 63,  96 => 62,  79 => 48,  75 => 47,  54 => 28,  52 => 22,  48 => 20,  46 => 14,  36 => 11,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>{{ app_name }} {{ app_ver }} | {{ app_description }}</title>

    <!-- Vendor styles -->
    {% block vendor_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/fontawesome/css/font-awesome.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/animate.css/animate.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/bootstrap/css/bootstrap.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/toastr/toastr.min.css') }}\"/>
    {% endblock %}

    <!-- App styles -->
    {% block app_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/pe-icons/pe-icon-7-stroke.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/pe-icons/helper.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/stroke-icons/style.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/style.css') }}\">
    {% endblock %}
</head>

<body>

<!-- Wrapper-->
<div class=\"wrapper\">

    <!-- Header-->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <div id=\"mobile-menu\">
                    <div class=\"left-nav-toggle\">
                        <a href=\"#\">
                            <i class=\"stroke-hamburgermenu\"></i>
                        </a>
                    </div>
                </div>
                <a class=\"navbar-brand\" href=\"index.html\">
                    {{ app_name | upper }}
                    <span>{{ app_ver }}</span>
                </a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <div class=\"left-nav-toggle\">
                    <a href=\"\">
                        <i class=\"stroke-hamburgermenu\"></i>
                    </a>
                </div>
                <form class=\"navbar-form navbar-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search data for analysis\" style=\"width: 175px\">
                </form>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\" profil-link\">
                        <a href=\"{{ base_url('auth/logout') }}\">
                            <span class=\"profile-address\">Wyloguj: {{ us_email }}</span>
                            <img src=\"{{ base_url('assets/images/profile.jpg') }}\" class=\"img-circle\" alt=\"\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class=\"navigation\">
        <nav>
            <ul class=\"nav luna-nav\">
                <li class=\"nav-category\" id=\"dashboard-menu\">
                    Pulpit
                </li>
                <li id=\"dashboard-monitoring-menu\">
                    <a href=\"{{ base_url('dashboard/monitoring') }}\">Monitoring</a>
                </li>

                <li class=\"nav-category\">
                    Praca
                </li>
                <li id=\"customer-menu\">
                    <a href=\"#customer-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Klienci<span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"customer-submenu\" class=\"nav nav-second collapse\">
                        <li><a href=\"customerList.html\">Lista</a></li>
                        <li id=\"customer-add-submenu\"><a href=\"{{ base_url('customer/add') }}\">Dodaj</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#insurance\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Polisy<span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"insurance\" class=\"nav nav-second collapse\">
                        <li><a href=\"insuranceList.html\">Lista</a></li>
                        <li><a href=\"insuranceAdd.html\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li class=\"nav-category\">
                    Ustawienia
                </li>

                <li>
                    <a href=\"#reminder\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Przypomnienia <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"reminder\" class=\"nav nav-second collapse\">
                        <li><a href=\"configMail.html\">E-mail</a></li>
                        <li><a href=\"configSMS.html\">SMS</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href=\"#account\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Administrator <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"account\" class=\"nav nav-second collapse\">
                        <li><a href=\"adminPass.html\">Zmiana hasła</a></li>
                    </ul>
                </li>
                                
                <li>
                    <a href=\"#report\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Raporty <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"report\" class=\"nav nav-second collapse\">
                        <li><a href=\"logList.html\"> Logi </a></li>
                    </ul>
                </li>
                <li class=\"nav-info\">
                    <div class=\"m-b-xs\">
                        <span class=\"c-white\">Widok MONITORING</span><p class=\"text-justify\"> W tym widoku mamy ogólny ogląd na dane zapisane w aplikacji oraz listę z polisami klientów, które niebawem się skończą i można w określony sposób Klientom przypomnieć o ich przedłużeniu.</p>
                    </div>
                    <!--
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-call text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Zadzwoń\"></i></a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-mail-open-file text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Wyślij wiadomość\"></i></a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"#\"><i class=\"pe pe-7s-light text-accent\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Zaproponuj poprawkę\"></i></a>
                        </div>
                    </div>
                    -->
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->

{% block body %}{% endblock %}

<!-- Vendor scripts -->
{% block vendor_scripts %}
<script src=\"{{ base_url('assets/vendor/pacejs/pace.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/toastr/toastr.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/sparkline/index.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/flot/jquery.flot.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/flot/jquery.flot.resize.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/flot/jquery.flot.spline.js') }}\"></script>
{% endblock %}

<!-- App scripts -->
{% block app_scripts %}
<script src=\"{{ base_url('assets/scripts/luna.js') }}\"></script>
{% endblock %}

<script>
    \$(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            \$(\".sparkline\").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            \$(\".sparkline7\").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            \$(\".sparkline1\").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            \$(\".sparkline3\").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            \$(\".sparkline5\").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            \$(\".sparkline6\").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            \$(\".sparkline8\").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline9\").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline10\").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline11\").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline12\").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            \$(\".sparkline13\").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        \$(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: \"#404652\",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ \"#f7af3e\",\"#DE9536\"]
        };

        \$.plot(\$(\"#flot-line-chart\"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function(){
            toastr.options = {
                \"positionClass\": \"toast-top-right\",
                \"closeButton\": true,
                \"progressBar\": true,
                \"showEasing\": \"swing\",
                \"timeOut\": \"6000\"
            };
            toastr.warning('<strong>You entered to LUNA</strong> <br/><small>Premium admin theme with Dark UI style. </small>');
        },1600)


    });
</script>

</body>

</html>", "base_layout.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\base_layout.twig");
    }
}
