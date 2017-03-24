<?php

/* customer/add.twig */
class __TwigTemplate_10156c39e247ba8a7d16c20d5a6afd76b45ccfd86ce535dc0f0d98537cbb3a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "customer/add.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
    <!-- Main content-->
    <section class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"view-header\">
                            <div class=\"header-icon\">
                                <i class=\"pe page-header-icon pe-7s-add-user\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Dodaj Klienta</h3>
                                <small>
                                    Wypełnij pola formularza aby dodać nowego Klienta
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-filled\">
                            <div class=\"panel-heading\">
                                Formularz dodawania nowego Klienta do bazy danych
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\">
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imię i nazwisko / Firma <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"np. Jan Kowalski lub nazwa Firmy\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Adres <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Adres zamieszkania lub działalności\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Telefon</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Główny telefon Klienta\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">E-mail</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Aktywny e-mail\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\"><i class=\"fa fa-save\"></i> Zapisz</button>
                                </form>
                            </div>
                        </div>
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
        return "customer/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base_layout.twig\" %}

{% block body %}
    
    <!-- Main content-->
    <section class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"view-header\">
                            <div class=\"header-icon\">
                                <i class=\"pe page-header-icon pe-7s-add-user\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Dodaj Klienta</h3>
                                <small>
                                    Wypełnij pola formularza aby dodać nowego Klienta
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-filled\">
                            <div class=\"panel-heading\">
                                Formularz dodawania nowego Klienta do bazy danych
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\">
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imię i nazwisko / Firma <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"np. Jan Kowalski lub nazwa Firmy\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Adres <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Adres zamieszkania lub działalności\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Telefon</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Główny telefon Klienta\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">E-mail</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Aktywny e-mail\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\"><i class=\"fa fa-save\"></i> Zapisz</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->
    
{% endblock %}", "customer/add.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\customer\\add.twig");
    }
}
