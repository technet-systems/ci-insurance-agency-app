<?php

/* modal/login_v.twig */
class __TwigTemplate_c77b94e95c45b2ba0f313249415cacd7b542e12c42a3479f1ae99aeecbd6466c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modal_layout_v.twig", "modal/login_v.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modal_layout_v.twig";
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
            <div class=\"back-link\">
                <a href=\"index.html\" class=\"btn btn-accent\">Back to Dashboard</a>
            </div>

            <div class=\"container-center animated slideInDown\">

                <div class=\"view-header\">
                    <div class=\"header-icon\">
                        <i class=\"pe page-header-icon pe-7s-unlock\"></i>
                    </div>
                    <div class=\"header-title\">
                        <h3>Login</h3>
                        <small>
                            Please enter your credentials to login.
                        </small>
                    </div>
                </div>
                
                ";
        // line 29
        echo validation_errors("<div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">", "</div></div>");
        echo "
                
                ";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array()), "error", array()) == true)) {
            // line 32
            echo "                    <div class=\"panel panel-filled panel-c-danger\"><div class=\"panel-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array()), "error", array()), "html", null, true);
            echo "</div></div>
                ";
        }
        // line 34
        echo "                
                <div class=\"panel panel-filled\">
                    <div class=\"panel-body\">
                        ";
        // line 37
        echo form_open();
        echo "
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"username\">Username</label>
                                <input type=\"text\" placeholder=\"example@gmail.com\" title=\"Please enter you username\"value=\"\" name=\"us_email\" id=\"us_email\" class=\"form-control\">
                                <span class=\"help-block small\">Your unique username to app</span>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"password\">Password</label>
                                <input type=\"password\" title=\"Please enter your password\" placeholder=\"******\" value=\"\" name=\"us_pass\" id=\"us_pass\" class=\"form-control\">
                                <span class=\"help-block small\">Your strong password</span>
                            </div>
                            <div>
                                <input type=\"submit\" name=\"submit\" value=\"Login\" class=\"btn btn-accent\" />
                                <a class=\"btn btn-default\" href=\"#\" disabled>Zapomniałem hasła</a>
                            </div>
                        ";
        // line 52
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
        return "modal/login_v.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 52,  76 => 37,  71 => 34,  65 => 32,  63 => 31,  58 => 29,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"modal_layout_v.twig\" %}

{% block body %}
<body class=\"blank\">

    <!-- Wrapper-->
    <div class=\"wrapper\">

        <!-- Main content-->
        <section class=\"content\">
            <div class=\"back-link\">
                <a href=\"index.html\" class=\"btn btn-accent\">Back to Dashboard</a>
            </div>

            <div class=\"container-center animated slideInDown\">

                <div class=\"view-header\">
                    <div class=\"header-icon\">
                        <i class=\"pe page-header-icon pe-7s-unlock\"></i>
                    </div>
                    <div class=\"header-title\">
                        <h3>Login</h3>
                        <small>
                            Please enter your credentials to login.
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
                                <label class=\"control-label\" for=\"username\">Username</label>
                                <input type=\"text\" placeholder=\"example@gmail.com\" title=\"Please enter you username\"value=\"\" name=\"us_email\" id=\"us_email\" class=\"form-control\">
                                <span class=\"help-block small\">Your unique username to app</span>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"password\">Password</label>
                                <input type=\"password\" title=\"Please enter your password\" placeholder=\"******\" value=\"\" name=\"us_pass\" id=\"us_pass\" class=\"form-control\">
                                <span class=\"help-block small\">Your strong password</span>
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
{% endblock %}", "modal/login_v.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\modal\\login_v.twig");
    }
}
