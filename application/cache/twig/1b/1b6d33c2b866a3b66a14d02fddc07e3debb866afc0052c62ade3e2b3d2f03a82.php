<?php

/* session_sample/flash.twig */
class __TwigTemplate_4eb292a35ecabbdd75d75bd19d275a0a6473efec0071ca5cac556d6b252cd2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>Flashdata: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata", array()), "test_sess", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "session_sample/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Flashdata: {{ session.flashdata.test_sess }}</p>", "session_sample/flash.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\session_sample\\flash.twig");
    }
}
