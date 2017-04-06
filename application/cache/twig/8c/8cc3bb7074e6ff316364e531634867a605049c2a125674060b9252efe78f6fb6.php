<?php

/* company/all.twig */
class __TwigTemplate_586cb4498cc24f5547087454d0821e1ba7d72bf5eaf534f417a69cbb50d3b97e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "company/all.twig", 1);
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
                                <h3 class=\"m-b-xs\">Ubezpieczyciele</h3>
                                <small>
                                    Tabelaryczny podgląd wszystkich Towarzystw Ubezpieczeniowych
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
                                Wykaz aktywnych Partnerów Agencji
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Nazwa</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 60
            echo "                                            <tr id=\"co_id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\" data-title=\"Zmiana danych\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("company/edit"), "html", null, true);
            echo "\" data-name=\"co_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_name", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\" data-title=\"Zmiana e-mail\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("company/edit"), "html", null, true);
            echo "\" data-name=\"co_notice\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_notice", array()), "html", null, true);
            echo "</a></td>
                                                <td>
                                                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, base_url(("product/all/" . $this->getAttribute($context["company"], "co_id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                        </tbody>
                                    </table>
                                    
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 73
            echo "                                    <div class=\"modal fade\" id=\"modalDELETE-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_name", array()), "html", null, true);
            echo "</h3>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger submit\" data-url=\"";
            // line 85
            echo twig_escape_filter($this->env, base_url("company/delete"), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "co_id", array()), "html", null, true);
            echo "\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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

    // line 108
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 113
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 114
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
        var data = {'co_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#co_id-' + id).fadeOut(1000);
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
        return "company/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 114,  222 => 113,  216 => 110,  211 => 109,  208 => 108,  189 => 91,  175 => 85,  168 => 81,  156 => 73,  152 => 72,  147 => 69,  137 => 65,  133 => 64,  124 => 62,  116 => 61,  111 => 60,  107 => 59,  60 => 14,  57 => 13,  49 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
                                <h3 class=\"m-b-xs\">Ubezpieczyciele</h3>
                                <small>
                                    Tabelaryczny podgląd wszystkich Towarzystw Ubezpieczeniowych
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
                                Wykaz aktywnych Partnerów Agencji
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Nazwa</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for company in companies %}
                                            <tr id=\"co_id-{{ company.co_id }}\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ company.co_id }}\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('company/edit') }}\" data-name=\"co_name\">{{ company.co_name }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"{{ company.co_id }}\" data-title=\"Zmiana e-mail\" data-url=\"{{ base_url('company/edit') }}\" data-name=\"co_notice\">{{ company.co_notice }}</a></td>
                                                <td>
                                                    <a href=\"{{ base_url('product/all/' ~ company.co_id) }}\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-{{ company.co_id }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                    {% for company in companies %}
                                    <div class=\"modal fade\" id=\"modalDELETE-{{ company.co_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">{{ company.co_name }}</h3>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger submit\" data-url=\"{{ base_url('company/delete') }}\" data-pk=\"{{ company.co_id }}\" data-dismiss=\"modal\">Usuń</button>
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
        var data = {'co_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#co_id-' + id).fadeOut(1000);
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
{% endblock %}", "company/all.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\company\\all.twig");
    }
}
