<?php

/* modal_layout_v.twig */
class __TwigTemplate_20cbde9cedcfeb1365e3a8ba3ea4aeb53f6003e8d93fc348fad2304167f12466 extends Twig_Template
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
    <title>LUNA | Responsive Admin Theme</title>

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
        return "modal_layout_v.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  137 => 39,  134 => 38,  128 => 35,  124 => 34,  119 => 33,  116 => 32,  111 => 29,  105 => 25,  101 => 24,  97 => 23,  92 => 22,  89 => 21,  83 => 17,  79 => 16,  74 => 15,  71 => 14,  64 => 42,  62 => 38,  59 => 37,  57 => 32,  53 => 30,  51 => 29,  47 => 27,  45 => 21,  41 => 19,  39 => 14,  24 => 1,);
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
    <title>LUNA | Responsive Admin Theme</title>

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

</html>", "modal_layout_v.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\modal_layout_v.twig");
    }
}
