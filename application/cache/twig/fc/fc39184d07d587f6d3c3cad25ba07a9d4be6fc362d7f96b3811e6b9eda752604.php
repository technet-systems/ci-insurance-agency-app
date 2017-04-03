<?php

/* modal_layout.twig */
class __TwigTemplate_f16592aa244ae6b968077cdb08a6b2aacd17755f468e2be1ebfa4e8e3a652427 extends Twig_Template
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
        // line 19
        echo "
    <!-- App styles -->
    ";
        // line 21
        $this->displayBlock('app_stylesheets', $context, $blocks);
        // line 27
        echo "</head>

    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
    <!-- Vendor scripts -->
    ";
        // line 32
        $this->displayBlock('vendor_scripts', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('app_scripts', $context, $blocks);
        // line 42
        echo "
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
    ";
    }

    // line 21
    public function block_app_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/pe-icon-7-stroke.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url("assets/styles/pe-icons/helper.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url("assets/styles/stroke-icons/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("assets/styles/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 32
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/vendor/pacejs/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 38
    public function block_app_scripts($context, array $blocks = array())
    {
        // line 39
        echo "    <!-- App scripts -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, base_url("assets/scripts/luna.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "modal_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  144 => 39,  141 => 38,  135 => 35,  131 => 34,  126 => 33,  123 => 32,  118 => 29,  112 => 25,  108 => 24,  104 => 23,  99 => 22,  96 => 21,  90 => 17,  86 => 16,  81 => 15,  78 => 14,  71 => 42,  69 => 38,  66 => 37,  64 => 32,  60 => 30,  58 => 29,  54 => 27,  52 => 21,  48 => 19,  46 => 14,  36 => 11,  24 => 1,);
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
    {% endblock %}

    <!-- App styles -->
    {% block app_stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/pe-icons/pe-icon-7-stroke.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/pe-icons/helper.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/stroke-icons/style.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/styles/style.css') }}\">
    {% endblock %}
</head>

    {% block body %}{% endblock %}

    <!-- Vendor scripts -->
    {% block vendor_scripts %}
    <script src=\"{{ base_url('assets/vendor/pacejs/pace.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    {% endblock %}

    {% block app_scripts %}
    <!-- App scripts -->
    <script src=\"{{ base_url('assets/scripts/luna.js') }}\"></script>
    {% endblock %}

</body>

</html>", "modal_layout.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\modal_layout.twig");
    }
}
