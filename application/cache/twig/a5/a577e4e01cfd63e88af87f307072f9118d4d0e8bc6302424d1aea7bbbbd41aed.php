<?php

/* client/all.twig */
class __TwigTemplate_8572dbba21a448a480c43628f12a0eb7bde4ce9bf0b5d95872ec8e750ae01e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "client/all.twig", 1);
        $this->blocks = array(
            'vendor_stylesheets' => array($this, 'block_vendor_stylesheets'),
            'name' => array($this, 'block_name'),
            'body' => array($this, 'block_body'),
            'vendor_scripts' => array($this, 'block_vendor_scripts'),
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
    public function block_vendor_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("vendor_stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_name($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("name", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    
    <!-- Main content-->
    <section class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"view-header\">
                            <div class=\"header-icon\">
                                <i class=\"pe page-header-icon pe-7s-users\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Klienci</h3>
                                <small>
                                    Tabelaryczny podgląd wszystkich Klientów
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-filled\">
                            <div class=\"panel-heading\">
                                <div class=\"panel-tools\">
                                    <a class=\"panel-toggle\"><i class=\"fa fa-chevron-up\"></i></a>
                                    <a class=\"panel-close\"><i class=\"fa fa-times\"></i></a>
                                </div>
                                Wykaz aktywnych Klientów Agencji
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Imię i nazwisko / Firma</th>
                                                <th>Adres</th>
                                                <th>E-mail</th>
                                                <th>Telefon</th>
                                                <th>Identyfikacja</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th>Zgoda</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 65
            echo "                                            <tr id=\"cl_id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_name", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_address\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_address", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_email\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_email", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_phone\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_phone", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_identity\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "cl_identity", array())), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_notice\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_notice", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_process\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_process", array()), "html", null, true);
            echo "\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_process", array()), "html", null, true);
            echo "</a></td>
                                                <td>
                                                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, base_url(("insurance/all/" . $this->getAttribute($context["client"], "cl_id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                        </tbody>
                                    </table>
                                    
                                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 83
            echo "                                    <div class=\"modal fade\" id=\"modalDELETE-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_name", array()), "html", null, true);
            echo "</h3>
                                                    <h4 class=\"m-t-none text-center\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_identity", array()), "html", null, true);
            echo "</h4>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger submit\" data-url=\"";
            // line 96
            echo twig_escape_filter($this->env, base_url("client/delete"), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
                                </div>

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

    // line 119
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 120
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 124
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $this->displayParentBlock("jq_scripts", $context, $blocks);
        echo "
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystko\"] ],
        \"iDisplayLength\": 6,
        
        \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

        \$('.popup_edit').editable({
            ajaxOptions: {
                dataType: 'json' //assuming json response
            },
            emptytext: 'Brak danych',
            success: function(data, newValue) {
                if(data.status == 0) {
                    return data.msg; //msg will be shown in editable form
                } else {
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
                }
            }
        });
        }
    });
    
    \$('.submit').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = {'cl_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#cl_id-' + id).fadeOut(1000);
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
    }

    public function getTemplateName()
    {
        return "client/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 125,  273 => 124,  267 => 121,  262 => 120,  259 => 119,  240 => 102,  226 => 96,  219 => 92,  215 => 91,  203 => 83,  199 => 82,  194 => 79,  184 => 75,  180 => 74,  169 => 72,  161 => 71,  153 => 70,  145 => 69,  137 => 68,  129 => 67,  121 => 66,  116 => 65,  112 => 64,  60 => 14,  57 => 13,  49 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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

{% block vendor_stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/datatables/datatables.min.css') }}\"/>
{% endblock %}

{% block name %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% endblock %}
    
{% block body %}
    
    <!-- Main content-->
    <section class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"view-header\">
                            <div class=\"header-icon\">
                                <i class=\"pe page-header-icon pe-7s-users\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Klienci</h3>
                                <small>
                                    Tabelaryczny podgląd wszystkich Klientów
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-filled\">
                            <div class=\"panel-heading\">
                                <div class=\"panel-tools\">
                                    <a class=\"panel-toggle\"><i class=\"fa fa-chevron-up\"></i></a>
                                    <a class=\"panel-close\"><i class=\"fa fa-times\"></i></a>
                                </div>
                                Wykaz aktywnych Klientów Agencji
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Imię i nazwisko / Firma</th>
                                                <th>Adres</th>
                                                <th>E-mail</th>
                                                <th>Telefon</th>
                                                <th>Identyfikacja</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th>Zgoda</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for client in clients %}
                                            <tr id=\"cl_id-{{ client.cl_id }}\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_name\">{{ client.cl_name }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_address\">{{ client.cl_address }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_email\">{{ client.cl_email }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_phone\">{{ client.cl_phone }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_identity\">{{ client.cl_identity|capitalize }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_notice\">{{ client.cl_notice }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_process\" data-value=\"{{ client.cl_process }}\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">{{ client.cl_process }}</a></td>
                                                <td>
                                                    <a href=\"{{ base_url('insurance/all/' ~ client.cl_id ) }}\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-{{ client.cl_id }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                    {% for client in clients %}
                                    <div class=\"modal fade\" id=\"modalDELETE-{{ client.cl_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">{{ client.cl_name }}</h3>
                                                    <h4 class=\"m-t-none text-center\">{{ client.cl_identity }}</h4>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger submit\" data-url=\"{{ base_url('client/delete') }}\" data-pk=\"{{ client.cl_id }}\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}

                                </div>

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

{% block vendor_scripts %}
    {{ parent() }}
    <script src=\"{{ base_url('assets/vendor/datatables/datatables.min.js') }}\"></script>
{% endblock %}

{% block jq_scripts %}
    {{ parent() }}
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystko\"] ],
        \"iDisplayLength\": 6,
        
        \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

        \$('.popup_edit').editable({
            ajaxOptions: {
                dataType: 'json' //assuming json response
            },
            emptytext: 'Brak danych',
            success: function(data, newValue) {
                if(data.status == 0) {
                    return data.msg; //msg will be shown in editable form
                } else {
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
                }
            }
        });
        }
    });
    
    \$('.submit').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = {'cl_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#cl_id-' + id).fadeOut(1000);
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
{% endblock %}", "client/all.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\client\\all.twig");
    }
}
