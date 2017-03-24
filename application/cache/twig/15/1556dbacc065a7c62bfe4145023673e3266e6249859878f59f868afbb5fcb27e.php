<?php

/* modal/login.twig */
class __TwigTemplate_4b9f1f49e17d5f650a8156c3054ccfeb6fdcb4ee8564d078ff07906318079594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modal_layout.twig", "modal/login.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modal_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body class=\"blank\">

    <!-- Wrapper-->
    <div class=\"wrapper\">

        <!-- Main content-->
        <section class=\"content\">
            <div class=\"container-center animated slideInDown\">

                <div class=\"view-header\">
                    <div class=\"header-icon\">
                        <i class=\"pe page-header-icon pe-7s-unlock\"></i>
                    </div>
                    <div class=\"header-title\">
                        <h3>Logowanie</h3>
                        <small>
                            Proszę o podanie e-maila i hasła do konta
                        </small>
                    </div>
                </div>
                
                ";
        // line 25
        echo validation_errors("<div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">", "</div></div>");
        echo "
                
                ";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array()), "error", array()) == true)) {
            // line 28
            echo "                    <div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array()), "error", array()), "html", null, true);
            echo "</div></div>
                ";
        }
        // line 30
        echo "                
                <div class=\"panel panel-filled\">
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo form_open();
        echo "
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"username\">E-mail</label>
                                <input type=\"text\" placeholder=\"twoj.mail@gmail.com\" value=\"\" name=\"us_email\" id=\"us_email\" class=\"form-control\">
                                <span class=\"help-block small\">Twój unikalny e-mail</span>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"password\">Hasło</label>
                                <input type=\"password\" placeholder=\"******\" value=\"\" name=\"us_pass\" id=\"us_pass\" class=\"form-control\">
                                <span class=\"help-block small\">Twoje mocne hasło</span>
                            </div>
                            <div>
                                <input type=\"submit\" name=\"submit\" value=\"Login\" class=\"btn btn-accent\" />
                                <a class=\"btn btn-default\" href=\"#\" disabled>Zapomniałem hasła</a>
                            </div>
                        ";
        // line 48
        echo form_close();
        echo "
                    </div>
                </div>

            </div>
        </section>
        <!-- End main content-->

    </div>
    <!-- End wrapper-->
";
    }

    public function getTemplateName()
    {
        return "modal/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 48,  72 => 33,  67 => 30,  61 => 28,  59 => 27,  54 => 25,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"modal_layout.twig\" %}

{% block body %}
<body class=\"blank\">

    <!-- Wrapper-->
    <div class=\"wrapper\">

        <!-- Main content-->
        <section class=\"content\">
            <div class=\"container-center animated slideInDown\">

                <div class=\"view-header\">
                    <div class=\"header-icon\">
                        <i class=\"pe page-header-icon pe-7s-unlock\"></i>
                    </div>
                    <div class=\"header-title\">
                        <h3>Logowanie</h3>
                        <small>
                            Proszę o podanie e-maila i hasła do konta
                        </small>
                    </div>
                </div>
                
                {{ validation_errors('<div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">', '</div></div>') | raw}}
                
                {% if session.flashdata.error == TRUE %}
                    <div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">{{ session.flashdata.error }}</div></div>
                {% endif %}
                
                <div class=\"panel panel-filled\">
                    <div class=\"panel-body\">
                        {{ form_open() }}
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"username\">E-mail</label>
                                <input type=\"text\" placeholder=\"twoj.mail@gmail.com\" value=\"\" name=\"us_email\" id=\"us_email\" class=\"form-control\">
                                <span class=\"help-block small\">Twój unikalny e-mail</span>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"password\">Hasło</label>
                                <input type=\"password\" placeholder=\"******\" value=\"\" name=\"us_pass\" id=\"us_pass\" class=\"form-control\">
                                <span class=\"help-block small\">Twoje mocne hasło</span>
                            </div>
                            <div>
                                <input type=\"submit\" name=\"submit\" value=\"Login\" class=\"btn btn-accent\" />
                                <a class=\"btn btn-default\" href=\"#\" disabled>Zapomniałem hasła</a>
                            </div>
                        {{ form_close() }}
                    </div>
                </div>

            </div>
        </section>
        <!-- End main content-->

    </div>
    <!-- End wrapper-->
{% endblock %}", "modal/login.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\modal\\login.twig");
    }
}
