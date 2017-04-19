<?php

/* insurance/allTest.twig */
class __TwigTemplate_b2c494e07c485ef0645f9b33e78a3af2bf1907484e47c57ca92de1be36de4037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "insurance/allTest.twig", 1);
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
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/css/dependent-dropdown.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 9
    public function block_name($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("name", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    
    <!-- Main content-->
    <section class=\"content\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"view-header\">
                            <div class=\"header-icon\">
                                <i class=\"pe page-header-icon pe-7s-user\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_name", array()), "html", null, true);
        echo "</h3>
                                <button class=\"btn btn-sm btn-success pull-right\" data-toggle=\"modal\" data-target=\"#modalADD\">Dodaj polisę</button>
                                <small>
                                    Tabelaryczny podgląd wszystkich polis Klienta
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
                                Wykaz wszystkich polis Klienta
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <!--
                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Nazwa</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"product-table\">
                                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 63
            echo "                                            <tr id=\"pr_id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\" data-title=\"Zmiana danych\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("product/edit"), "html", null, true);
            echo "\" data-name=\"pr_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_name", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\" data-title=\"Zmiana e-mail\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("product/edit"), "html", null, true);
            echo "\" data-name=\"pr_notice\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_notice", array()), "html", null, true);
            echo "</a></td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                        </tbody>
                                    </table>
                                    
                                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            echo "                                    <div class=\"modal fade\" id=\"modalDELETE-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_name", array()), "html", null, true);
            echo "</h3>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger delete_submit\" data-url=\"";
            // line 88
            echo twig_escape_filter($this->env, base_url("product/delete"), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pr_id", array()), "html", null, true);
            echo "\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                    -->
                                    
                                    <div class=\"modal fade\" id=\"modalADD\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">POLISA</h4>
                                                    <small>Dodaj kolejną polisę</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\">

                                                        <div class=\"form-group\"><label for=\"inputPassword3\" class=\"col-sm-4 control-label\">Ubezpieczyciel</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"company\" id=\"co_id\">
                                                                    <option value=\"\">-- Proszę wybrać Ubezpieczyciela --</option>
                                                                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies_with_products"]) ? $context["companies_with_products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company_with_product"]) {
            // line 111
            echo "                                                                        ";
            if ($this->getAttribute($context["company_with_product"], "products", array())) {
                // line 112
                echo "                                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company_with_product"], "co_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company_with_product"], "co_name", array()), "html", null, true);
                echo "</option>
                                                                        ";
            }
            // line 114
            echo "                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company_with_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Polisa</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"product\" id=\"pr_id\">
                                                                    <option value=\"\">-- Proszę wybrać Polisę --</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wariant</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\">
                                                                    <option>OC Pojazdu</option>
                                                                    <option>Ubezpieczenie domu</option>
                                                                    <option>AC Pojazdu</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Email</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"twoj@email.pl\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Identyfikator</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"np. STA 88618\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Podpisanie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wygaśnięcie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wartość</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Całkowita suma\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wygaśnięcie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"file\" id=\"exampleInputFile\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Charakterystyka polisy\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Uwagi</label>
                                                            <div class=\"col-sm-8\">
                                                                <textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Notatki\"></textarea>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\">Dodaj</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

    // line 217
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 218
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 224
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 225
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
    
    \$('#add_submit').click(function(e) {
        e.preventDefault();

        var data = \$('#product-create').serialize();
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
                            \"timeOut\": \"3000\",
                            \"onHidden\": function(){location.reload()},
                            \"onclick\": function(){location.reload()}
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    );

                    \$('#product-table').prepend(
                        '<tr id=\"pr_id-' + data.pr_id + '\"><td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"' + data.pr_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        // line 287
        echo twig_escape_filter($this->env, base_url("product/edit"), "html", null, true);
        echo "\" data-name=\"pr_name\">' + data.pr_name + '</a></td><td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"' + data.pr_id + '\" data-title=\"Zmiana e-mail\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("product/edit"), "html", null, true);
        echo "\" data-name=\"pr_notice\">' + data.pr_notice + '</a></td><td><a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a><a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-' + data.pr_id + '\"><i class=\"fa fa-trash\"></i></a></td></tr>'
                    );

                    \$('#product-create').find('input:text, input:password, input:file, select, textarea').val('');
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
    
    \$('.delete_submit').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = {'pr_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#pr_id-' + id).fadeOut(1000);
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
    
    // Child # 1
    \$(\"#pr_id\").depdrop({
        url: '";
        // line 367
        echo twig_escape_filter($this->env, base_url("insurancetest/get_product"), "html", null, true);
        echo "',
        depends: ['co_id']
    });
    
";
    }

    public function getTemplateName()
    {
        return "insurance/allTest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 367,  429 => 287,  363 => 225,  360 => 224,  354 => 221,  350 => 220,  346 => 219,  341 => 218,  338 => 217,  234 => 115,  228 => 114,  220 => 112,  217 => 111,  213 => 110,  195 => 94,  181 => 88,  174 => 84,  162 => 76,  158 => 75,  153 => 72,  143 => 68,  133 => 65,  125 => 64,  120 => 63,  116 => 62,  78 => 27,  64 => 15,  61 => 14,  53 => 10,  50 => 9,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/dependent-dropdown/css/dependent-dropdown.min.css') }}\"/>
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
                                <i class=\"pe page-header-icon pe-7s-user\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">{{ client.cl_name }}</h3>
                                <button class=\"btn btn-sm btn-success pull-right\" data-toggle=\"modal\" data-target=\"#modalADD\">Dodaj polisę</button>
                                <small>
                                    Tabelaryczny podgląd wszystkich polis Klienta
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
                                Wykaz wszystkich polis Klienta
                                <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">

                                    <!--
                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Nazwa</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"product-table\">
                                            {% for product in products %}
                                            <tr id=\"pr_id-{{ product.pr_id }}\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ product.pr_id }}\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('product/edit') }}\" data-name=\"pr_name\">{{ product.pr_name }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"{{ product.pr_id }}\" data-title=\"Zmiana e-mail\" data-url=\"{{ base_url('product/edit') }}\" data-name=\"pr_notice\">{{ product.pr_notice }}</a></td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-{{ product.pr_id }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                    {% for product in products %}
                                    <div class=\"modal fade\" id=\"modalDELETE-{{ product.pr_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">{{ product.pr_name }}</h3>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger delete_submit\" data-url=\"{{ base_url('product/delete') }}\" data-pk=\"{{ product.pr_id }}\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}
                                    -->
                                    
                                    <div class=\"modal fade\" id=\"modalADD\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">POLISA</h4>
                                                    <small>Dodaj kolejną polisę</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\">

                                                        <div class=\"form-group\"><label for=\"inputPassword3\" class=\"col-sm-4 control-label\">Ubezpieczyciel</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"company\" id=\"co_id\">
                                                                    <option value=\"\">-- Proszę wybrać Ubezpieczyciela --</option>
                                                                    {% for company_with_product in companies_with_products %}
                                                                        {% if company_with_product.products %}
                                                                            <option value=\"{{ company_with_product.co_id }}\">{{ company_with_product.co_name }}</option>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Polisa</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"product\" id=\"pr_id\">
                                                                    <option value=\"\">-- Proszę wybrać Polisę --</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wariant</label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\">
                                                                    <option>OC Pojazdu</option>
                                                                    <option>Ubezpieczenie domu</option>
                                                                    <option>AC Pojazdu</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Email</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"twoj@email.pl\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Identyfikator</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"np. STA 88618\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Podpisanie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wygaśnięcie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wartość</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Całkowita suma\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Wygaśnięcie</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"RRRR-MM-DD\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"file\" id=\"exampleInputFile\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Charakterystyka polisy\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Uwagi</label>
                                                            <div class=\"col-sm-8\">
                                                                <textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Notatki\"></textarea>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\">Dodaj</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js') }}\"></script>
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
    
    \$('#add_submit').click(function(e) {
        e.preventDefault();

        var data = \$('#product-create').serialize();
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
                            \"timeOut\": \"3000\",
                            \"onHidden\": function(){location.reload()},
                            \"onclick\": function(){location.reload()}
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
                    );

                    \$('#product-table').prepend(
                        '<tr id=\"pr_id-' + data.pr_id + '\"><td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"' + data.pr_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('product/edit') }}\" data-name=\"pr_name\">' + data.pr_name + '</a></td><td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"' + data.pr_id + '\" data-title=\"Zmiana e-mail\" data-url=\"{{ base_url('product/edit') }}\" data-name=\"pr_notice\">' + data.pr_notice + '</a></td><td><a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a><a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-' + data.pr_id + '\"><i class=\"fa fa-trash\"></i></a></td></tr>'
                    );

                    \$('#product-create').find('input:text, input:password, input:file, select, textarea').val('');
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
    
    \$('.delete_submit').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = {'pr_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#pr_id-' + id).fadeOut(1000);
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
    
    // Child # 1
    \$(\"#pr_id\").depdrop({
        url: '{{ base_url('insurancetest/get_product') }}',
        depends: ['co_id']
    });
    
{% endblock %}", "insurance/allTest.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\insurance\\allTest.twig");
    }
}
