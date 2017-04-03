<?php

/* client/add.twig */
class __TwigTemplate_f9842057d9c303a70579596e8a4c26cbe9868a644e2f9bf5137a64938fa2c791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "client/add.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'jq_scripts' => array($this, 'block_jq_scripts'),
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
                                <form class=\"form-horizontal\" id=\"customer-create\">
                                    <div class=\"form-group\"><label for=\"cl_name\" class=\"col-sm-3 control-label\">Imię i nazwisko / Firma <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_name\" class=\"form-control\" id=\"cl_name\" placeholder=\"np. Jan Kowalski lub nazwa Firmy\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_address\" class=\"col-sm-3 control-label\">Adres <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_address\" class=\"form-control\" id=\"cl_address\" placeholder=\"Adres zamieszkania lub działalności\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_email\" class=\"col-sm-3 control-label\">E-mail</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_email\" class=\"form-control\" id=\"cl_email\" placeholder=\"Aktywny e-mail\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_phone\" class=\"col-sm-3 control-label\">Telefon</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_phone\" class=\"form-control\" id=\"cl_phone\" placeholder=\"Telefon (tylko cyfry bez spacji)\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_identity\" class=\"col-sm-3 control-label\">Identyfikacja</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_identity\" class=\"form-control\" id=\"cl_identity\" placeholder=\"PESEL lub NIP (bez spacji i dla numeru NIP poprzedzić literą N)\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_notice\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\" id=\"cl_notice\" name=\"cl_notice\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"";
        // line 53
        echo twig_escape_filter($this->env, base_url("client/create"), "html", null, true);
        echo "\"><i class=\"fa fa-save\"></i> Zapisz</button>
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

    // line 69
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("jq_scripts", $context, $blocks);
        echo "
    \$('#submit').click(function(e) {
        e.preventDefault();

        var data = \$('#customer-create').serialize();
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
                    
                    \$('#customer-create').find('input:text, input:password, input:file, select, textarea').val('');
                } else {
                /* #TOD-1#
                    var msgs = JSON.stringify(data.msg);
                    msg = msgs.split('\\n');
                    alert(msg[0]);
                */
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
    }

    public function getTemplateName()
    {
        return "client/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 70,  102 => 69,  83 => 53,  32 => 4,  29 => 3,  11 => 1,);
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
                                <form class=\"form-horizontal\" id=\"customer-create\">
                                    <div class=\"form-group\"><label for=\"cl_name\" class=\"col-sm-3 control-label\">Imię i nazwisko / Firma <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_name\" class=\"form-control\" id=\"cl_name\" placeholder=\"np. Jan Kowalski lub nazwa Firmy\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_address\" class=\"col-sm-3 control-label\">Adres <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_address\" class=\"form-control\" id=\"cl_address\" placeholder=\"Adres zamieszkania lub działalności\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_email\" class=\"col-sm-3 control-label\">E-mail</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_email\" class=\"form-control\" id=\"cl_email\" placeholder=\"Aktywny e-mail\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_phone\" class=\"col-sm-3 control-label\">Telefon</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_phone\" class=\"form-control\" id=\"cl_phone\" placeholder=\"Telefon (tylko cyfry bez spacji)\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_identity\" class=\"col-sm-3 control-label\">Identyfikacja</label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"cl_identity\" class=\"form-control\" id=\"cl_identity\" placeholder=\"PESEL lub NIP (bez spacji i dla numeru NIP poprzedzić literą N)\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"cl_notice\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\" id=\"cl_notice\" name=\"cl_notice\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"{{ base_url('client/create') }}\"><i class=\"fa fa-save\"></i> Zapisz</button>
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
    
{% endblock %}

{% block jq_scripts %}
    {{ parent() }}
    \$('#submit').click(function(e) {
        e.preventDefault();

        var data = \$('#customer-create').serialize();
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
                    
                    \$('#customer-create').find('input:text, input:password, input:file, select, textarea').val('');
                } else {
                /* #TOD-1#
                    var msgs = JSON.stringify(data.msg);
                    msg = msgs.split('\\n');
                    alert(msg[0]);
                */
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
{% endblock %}", "client/add.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\client\\add.twig");
    }
}
