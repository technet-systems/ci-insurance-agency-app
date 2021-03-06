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
            'jq_scripts' => array($this, 'block_jq_scripts'),
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
        // line 21
        echo "
    <!-- App styles -->
    ";
        // line 23
        $this->displayBlock('app_stylesheets', $context, $blocks);
        // line 29
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
        // line 48
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null)), "html", null, true);
        echo "
                    <span>";
        // line 49
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
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\" profil-link\">
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, base_url("auth/logout"), "html", null, true);
        echo "\">
                            <span class=\"profile-address\">Wyloguj: ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["us_email"]) ? $context["us_email"] : null), "html", null, true);
        echo "</span>
                            <img src=\"";
        // line 62
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
        // line 79
        echo twig_escape_filter($this->env, base_url("dashboard/monitoring"), "html", null, true);
        echo "\">Monitoring</a>
                </li>

                <li class=\"nav-category\">
                    Praca
                </li>
                
                <li id=\"client-menu\">
                    <a href=\"#client-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Klienci <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"client-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"client-submenu-all\"><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url("client/all"), "html", null, true);
        echo "\">Lista</a></li>
                        <li id=\"client-submenu-add\"><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url("client/add"), "html", null, true);
        echo "\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li id=\"company-menu\">
                    <a href=\"#company-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Ubezpieczyciele <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"company-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"company-submenu-all\"><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, base_url("company/all"), "html", null, true);
        echo "\">Lista</a></li>
                        <li id=\"company-submenu-add\"><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, base_url("company/add"), "html", null, true);
        echo "\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li class=\"nav-category\">
                    Ustawienia
                </li>

                <li id=\"message-menu\">
                    <a href=\"#message-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Przypomnienia <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"message-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"message-submenu-add-email\"><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, base_url("message/add_email"), "html", null, true);
        echo "\">E-mail</a></li>
                        <li id=\"message-submenu-add-sms\"><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, base_url("message/add_sms"), "html", null, true);
        echo "\">SMS</a></li>
                    </ul>
                </li>
                <!--
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
                -->
                <li class=\"nav-info\">
                    <div class=\"m-b-xs\">
                        <span class=\"c-white\">FORMULARZ BŁĘDÓW</span>
                        <p class=\"help-block text-justify\">Jeśli zauważyłeś błąd lub masz pomysł na usprawnienie jakiejś sekcji - napisz mi proszę o tym ;)</p>
                        <form id=\"bug-create\">
                            <textarea class=\"form-control vertical\" rows=\"5\" placeholder=\"Wiadomość od Użytkownika\" name=\"bug_description\"></textarea>
                            <input type=\"hidden\" name=\"url_name\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, current_url(), "html", null, true);
        echo "\"/>
                            <div class=\"m-b-xs\"></div>
                            <button type=\"submit\" class=\"btn btn-default btn-block\" id=\"send-bug\" data-url=\"";
        // line 146
        echo twig_escape_filter($this->env, base_url("dashboard/send_bug"), "html", null, true);
        echo "\">Wyślij</button>
                        </form>
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
        // line 168
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "
<!-- Vendor scripts -->
";
        // line 171
        $this->displayBlock('vendor_scripts', $context, $blocks);
        // line 184
        echo "
<!-- App scripts -->
";
        // line 186
        $this->displayBlock('app_scripts', $context, $blocks);
        // line 189
        echo "
<script>
    \$(document).ready(function () {
        \$('#send-bug').click(function(e) {
        e.preventDefault();

        var data = \$('#bug-create').serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    setTimeout(function(){ // Run toastr notification with success message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"6000\"
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    );
                    
                    \$('#submit').prop(\"disabled\", true);
                } else {
                    setTimeout(function(){ // Run toastr notification with failture message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"6000\"
                        };
                        toastr.warning('<strong>Błąd! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    )
                }
            },
            error: function(data){      
                alert('error');
            }

        });
    });


    ";
        // line 240
        $this->displayBlock('jq_scripts', $context, $blocks);
        // line 243
        echo "    });
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
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap3-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 23
    public function block_app_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/pe-icon-7-stroke.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/helper.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("assets/styles/stroke-icons/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url("assets/styles/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 168
    public function block_body($context, array $blocks = array())
    {
    }

    // line 171
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 172
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/vendor/pacejs/pace.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, base_url("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, base_url("assets/vendor/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, base_url("assets/vendor/sparkline/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, base_url("assets/vendor/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap3-editable/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, base_url("assets/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, base_url("assets/vendor/jquery-validation/localization/messages_pl.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 186
    public function block_app_scripts($context, array $blocks = array())
    {
        // line 187
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/scripts/luna.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 240
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 241
        echo "        
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
        return array (  432 => 241,  429 => 240,  422 => 187,  419 => 186,  413 => 182,  409 => 181,  405 => 180,  401 => 179,  397 => 178,  393 => 177,  389 => 176,  385 => 175,  381 => 174,  377 => 173,  372 => 172,  369 => 171,  364 => 168,  358 => 27,  354 => 26,  350 => 25,  345 => 24,  342 => 23,  336 => 19,  332 => 18,  328 => 17,  324 => 16,  319 => 15,  316 => 14,  307 => 243,  305 => 240,  252 => 189,  250 => 186,  246 => 184,  244 => 171,  240 => 169,  238 => 168,  213 => 146,  208 => 144,  177 => 116,  173 => 115,  157 => 102,  153 => 101,  141 => 92,  137 => 91,  122 => 79,  102 => 62,  98 => 61,  94 => 60,  80 => 49,  76 => 48,  55 => 29,  53 => 23,  49 => 21,  47 => 14,  37 => 11,  25 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/bootstrap3-editable/css/bootstrap-editable.css') }}\"/>
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
                
                <li id=\"client-menu\">
                    <a href=\"#client-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Klienci <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"client-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"client-submenu-all\"><a href=\"{{ base_url('client/all') }}\">Lista</a></li>
                        <li id=\"client-submenu-add\"><a href=\"{{ base_url('client/add') }}\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li id=\"company-menu\">
                    <a href=\"#company-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Ubezpieczyciele <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"company-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"company-submenu-all\"><a href=\"{{ base_url('company/all') }}\">Lista</a></li>
                        <li id=\"company-submenu-add\"><a href=\"{{ base_url('company/add') }}\">Dodaj</a></li>
                    </ul>
                </li>
                
                <li class=\"nav-category\">
                    Ustawienia
                </li>

                <li id=\"message-menu\">
                    <a href=\"#message-submenu\" data-toggle=\"collapse\" aria-expanded=\"false\">
                        Przypomnienia <span class=\"sub-nav-icon\"> <i class=\"stroke-arrow\"></i> </span>
                    </a>
                    <ul id=\"message-submenu\" class=\"nav nav-second collapse\">
                        <li id=\"message-submenu-add-email\"><a href=\"{{ base_url('message/add_email') }}\">E-mail</a></li>
                        <li id=\"message-submenu-add-sms\"><a href=\"{{ base_url('message/add_sms') }}\">SMS</a></li>
                    </ul>
                </li>
                <!--
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
                -->
                <li class=\"nav-info\">
                    <div class=\"m-b-xs\">
                        <span class=\"c-white\">FORMULARZ BŁĘDÓW</span>
                        <p class=\"help-block text-justify\">Jeśli zauważyłeś błąd lub masz pomysł na usprawnienie jakiejś sekcji - napisz mi proszę o tym ;)</p>
                        <form id=\"bug-create\">
                            <textarea class=\"form-control vertical\" rows=\"5\" placeholder=\"Wiadomość od Użytkownika\" name=\"bug_description\"></textarea>
                            <input type=\"hidden\" name=\"url_name\" value=\"{{ current_url() }}\"/>
                            <div class=\"m-b-xs\"></div>
                            <button type=\"submit\" class=\"btn btn-default btn-block\" id=\"send-bug\" data-url=\"{{ base_url('dashboard/send_bug') }}\">Wyślij</button>
                        </form>
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
<script src=\"{{ base_url('assets/vendor/bootstrap3-editable/js/bootstrap-editable.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/jquery-validation/jquery.validate.min.js') }}\"></script>
<script src=\"{{ base_url('assets/vendor/jquery-validation/localization/messages_pl.min.js') }}\"></script>
{% endblock %}

<!-- App scripts -->
{% block app_scripts %}
<script src=\"{{ base_url('assets/scripts/luna.js') }}\"></script>
{% endblock %}

<script>
    \$(document).ready(function () {
        \$('#send-bug').click(function(e) {
        e.preventDefault();

        var data = \$('#bug-create').serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    setTimeout(function(){ // Run toastr notification with success message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"6000\"
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    );
                    
                    \$('#submit').prop(\"disabled\", true);
                } else {
                    setTimeout(function(){ // Run toastr notification with failture message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"6000\"
                        };
                        toastr.warning('<strong>Błąd! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    )
                }
            },
            error: function(data){      
                alert('error');
            }

        });
    });


    {% block jq_scripts %}
        
    {% endblock %}
    });
</script>

</body>

</html>", "base_layout.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\base_layout.twig");
    }
}
