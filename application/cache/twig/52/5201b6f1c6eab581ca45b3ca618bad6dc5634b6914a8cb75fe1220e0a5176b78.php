<?php

/* insurance/all.twig */
class __TwigTemplate_15a5fb5af1a9f3977f1907ad58daae2a162556e6417473d7c83839f18918eca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "insurance/all.twig", 1);
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 10
    public function block_name($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("name", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
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
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_name", array()), "html", null, true);
        echo " | <a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
        echo "\" data-name=\"cl_process\" data-value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_process", array()), "html", null, true);
        echo "\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_process", array()), "html", null, true);
        echo "</a></h3>
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
                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Polisa</th>
                                                <th>Ubezpieczyciel</th>
                                                <th>Identyfikator</th>
                                                <th>Podpisanie</th>
                                                <th>Wygaśnięcie</th>
                                                <th>Załącznik</th>
                                                <th>Opis</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th>Zgoda</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"insurance-table\">
                                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["insurances"]) ? $context["insurances"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
            // line 69
            echo "                                            <tr id=\"in_id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_pr_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_pr_name", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_co_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_co_name", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_identity\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_identity", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"combodate\" data-combodate=\"{'minYear': '1970', 'maxYear': '2100'}\" data-value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_fdate", array()), "html", null, true);
            echo "\" data-format=\"YYYY-MM-DD\" data-viewformat=\"YYYY-MM-DD\" data-template=\"YYYY - MMM - DD\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_fdate\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_fdate", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"combodate\" data-combodate=\"{'minYear': '1970', 'maxYear': '2100'}\" data-value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_ldate", array()), "html", null, true);
            echo "\" data-format=\"YYYY-MM-DD\" data-viewformat=\"YYYY-MM-DD\" data-template=\"YYYY - MMM - DD\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_ldate\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_ldate", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, base_url(("insurance/read/" . $this->getAttribute($context["insurance"], "in_link", array()))), "html", null, true);
            echo "\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_link_description", array()), "html", null, true);
            echo "\"><i class=\"fa fa-file\"></i></a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\"  data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_link_description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_link_description", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_notice\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_notice", array()), "html", null, true);
            echo "</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
            echo "\" data-name=\"in_process\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_process", array()), "html", null, true);
            echo "\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_process", array()), "html", null, true);
            echo "</a></td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modalFILE-";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">Załącznik</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insurance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                        </tbody>
                                    </table>
                                    
                                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["insurances"]) ? $context["insurances"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
            // line 89
            echo "                                    <div class=\"modal fade\" id=\"modalDELETE-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Polisy Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_pr_name", array()), "html", null, true);
            echo "</h3>
                                                    <h4 class=\"m-t-none text-center\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_co_name", array()), "html", null, true);
            echo "</h4>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger delete_submit\" data-url=\"";
            // line 102
            echo twig_escape_filter($this->env, base_url("insurance/delete"), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insurance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                    
                                    <div class=\"modal fade\" id=\"modalADD\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">POLISA</h4>
                                                    <small>Przypisz kolejną polisę</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\" id=\"insurance-create\" enctype=\"multipart/form-data\">

                                                        <div class=\"form-group\"><label for=\"in_co_id\" class=\"col-sm-4 control-label\">Ubezpieczyciel <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"in_co_id\" id=\"in_co_id\">
                                                                    <option value=\"\">-- Proszę wybrać Ubezpieczyciela --</option>
                                                                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies_with_products"]) ? $context["companies_with_products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company_with_product"]) {
            // line 124
            echo "                                                                        ";
            if ($this->getAttribute($context["company_with_product"], "products", array())) {
                // line 125
                echo "                                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company_with_product"], "co_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company_with_product"], "co_name", array()), "html", null, true);
                echo "</option>
                                                                        ";
            }
            // line 127
            echo "                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company_with_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_pr_id\" class=\"col-sm-4 control-label\">Polisa <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"in_pr_id\" id=\"in_pr_id\">
                                                                    <option value=\"\">-- Proszę wybrać Polisę --</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_identity\" class=\"col-sm-4 control-label\">Identyfikator <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_identity\" placeholder=\"np. STA 88618\" name=\"in_identity\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_fdate\" class=\"col-sm-4 control-label\">Podpisanie <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\" id=\"datetimepicker1\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Data rozpoczęcia\" id=\"in_fdate\" name=\"in_fdate\" readonly>
                                                                    <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\" style=\"color:#949ba2;\"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_ldate\" class=\"col-sm-4 control-label\">Wygaśnięcie <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\" id=\"datetimepicker2\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Data zakończenia\" id=\"in_ldate\" name=\"in_ldate\" readonly>
                                                                    <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\" style=\"color:#949ba2;\"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <label class=\"btn btn-accent\" for=\"in_link\">
                                                                    <input id=\"in_link\" style=\"display:none;\" onchange=\"\$('#upload-file-info').html(\$(this).val().substring(0, 40) + '...');\" type=\"file\" name=\"in_link\">
                                                                    <span id=\"upload-file-info\">Załącznik</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link_description\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_link_description\" placeholder=\"Charakterystyka polisy\" name=\"in_link_description\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_notice\" class=\"col-sm-4 control-label\">Uwagi</label>
                                                            <div class=\"col-sm-8\">
                                                                <textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Notatki\" id=\"in_notice\" name=\"in_notice\"></textarea>
                                                            </div>
                                                        </div>

                                                    <!--</form>-->
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\" data-dismiss=\"modal\" id=\"add_submit\" data-url=\"";
        // line 189
        echo twig_escape_filter($this->env, base_url(("insurance/create/" . $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "cl_id", array()))), "html", null, true);
        echo "\">Dodaj</button>
                                                </div>
                                                ";
        // line 191
        echo form_close();
        echo "
                                                
                                            </div>
                                        </div>
                                    </div>
                                              
                                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["insurances"]) ? $context["insurances"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
            // line 198
            echo "                                    <div class=\"modal fade\" id=\"modalFILE-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">ZAŁĄCZNIK</h4>
                                                    <small>Podmień obecny załącznik:</small><br />
                                                    <small><a href=\"";
            // line 204
            echo twig_escape_filter($this->env, base_url(("insurance/read/" . $this->getAttribute($context["insurance"], "in_link", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-file\"></i></a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_link_description", array()), "html", null, true);
            echo "</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\" id=\"file-update-";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">

                                                        <div class=\"form-group\"><label for=\"in_link2-";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <label class=\"btn btn-accent\" for=\"in_link2-";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">
                                                                    <input id=\"in_link2-";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" style=\"display:none;\" onchange=\"\$('#upload-file-info2-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "').html(\$(this).val().substring(0, 40) + '...');\" type=\"file\" name=\"in_link\">
                                                                    <span id=\"upload-file-info2-";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">Załącznik</span>
                                                                </label>

                                                                <input type=\"hidden\" name=\"old_in_link\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_link", array()), "html", null, true);
            echo "\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link_description2\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_link_description2\" placeholder=\"Charakterystyka polisy\" name=\"in_link_description\">
                                                            </div>
                                                        </div>

                                                    <!--</form>-->
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent update_submit\" data-dismiss=\"modal\" data-url=\"";
            // line 230
            echo twig_escape_filter($this->env, base_url(("insurance/update/" . $this->getAttribute($context["insurance"], "in_id", array()))), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">Zmień</button>
                                                </div>
                                                ";
            // line 232
            echo form_close();
            echo "
                                                
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insurance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
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

    // line 255
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 256
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, base_url("assets/vendor/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, base_url("assets/vendor/moment/locale/pl.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 265
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 266
        echo "    ";
        $this->displayParentBlock("jq_scripts", $context, $blocks);
        echo "
    \$('[data-toggle=\"tooltip\"]').tooltip();
    
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

        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: new FormData(\$('#insurance-create')[0]),
            
            // Tell jQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false,

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

                    \$('#insurance-table').prepend(
                    '<tr id=\"in_id-' + data.in_id + '\" role=\"row\" class=\"odd\"><td class=\"sorting_1\"><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        // line 335
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_pr_name\">' + data.in_pr_name + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_co_name\">' + data.in_co_name + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_identity\">' + data.in_identity + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_fdate\">' + data.in_fdate + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_ldate\">' + data.in_ldate + '</a></td><td><a href=\"";
        echo twig_escape_filter($this->env, base_url("insurance/read"), "html", null, true);
        echo "/' + data.in_link + '\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"aa\"><i class=\"fa fa-file\"></i></a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_link_description\">' + data.in_link_description + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-pre-wrapped editable-click\" data-type=\"textarea\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana e-mail\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_notice\">' + data.in_notice + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"select\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana e-mail\" data-url=\"";
        echo twig_escape_filter($this->env, base_url("insurance/edit"), "html", null, true);
        echo "\" data-name=\"in_process\" data-value=\"' + data.in_process + '\">Weryfikuję zgodę</a></td><td><a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a><a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-' + data.in_id + '\"><i class=\"fa fa-trash\"></i></a></td></tr>'
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
    
    \$('.update_submit').click(function(e) {
        e.preventDefault();

        var url = \$(this).attr('data-url');
        var id = \$(this).attr('data-pk');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: new FormData(\$('#file-update-' + id)[0]),
            
            // Tell jQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false,

            success: function (data) {
                if(data.status == 1) {
                    setTimeout(function(){ // Run toastr notification with success message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"1500\",
                            \"onHidden\": function(){location.reload()},
                            \"onclick\": function(){location.reload()}
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
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
        var data = {'in_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#in_id-' + id).fadeOut(1000);
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
    \$(\"#in_pr_id\").depdrop({
        url: '";
        // line 475
        echo twig_escape_filter($this->env, base_url("insurance/get_product"), "html", null, true);
        echo "',
        depends: ['in_co_id']
    });
    
    \$(\"#datetimepicker1\").datetimepicker({
        locale: \"pl\",
        format: 'YYYY-MM-DD',
        ignoreReadonly: true
    });
    
    \$(\"#datetimepicker2\").datetimepicker({
        locale: \"pl\",
        format: 'YYYY-MM-DD',
        ignoreReadonly: true,
        useCurrent: false
    });
    
    \$(\"#datetimepicker1\").on(\"dp.change\", function (e) {
        \$('#datetimepicker2').data(\"DateTimePicker\").minDate(e.date);
    });
    \$(\"#datetimepicker2\").on(\"dp.change\", function (e) {
        \$('#datetimepicker1').data(\"DateTimePicker\").maxDate(e.date);
    });
";
    }

    public function getTemplateName()
    {
        return "insurance/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 475,  607 => 335,  534 => 266,  531 => 265,  525 => 262,  521 => 261,  517 => 260,  513 => 259,  509 => 258,  505 => 257,  500 => 256,  497 => 255,  478 => 238,  466 => 232,  459 => 230,  442 => 216,  436 => 213,  430 => 212,  426 => 211,  421 => 209,  416 => 207,  408 => 204,  398 => 198,  394 => 197,  385 => 191,  380 => 189,  317 => 128,  311 => 127,  303 => 125,  300 => 124,  296 => 123,  279 => 108,  265 => 102,  258 => 98,  254 => 97,  242 => 89,  238 => 88,  233 => 85,  223 => 81,  219 => 80,  208 => 78,  200 => 77,  192 => 76,  186 => 75,  176 => 74,  166 => 73,  158 => 72,  150 => 71,  142 => 70,  137 => 69,  133 => 68,  82 => 28,  68 => 16,  65 => 15,  57 => 11,  54 => 10,  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}\"/>
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
                                <h3 class=\"m-b-xs\">{{ client.cl_name }} | <a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"{{ client.cl_id }}\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_process\" data-value=\"{{ client.cl_process }}\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">{{ client.cl_process }}</a></h3>
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
                                    <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Polisa</th>
                                                <th>Ubezpieczyciel</th>
                                                <th>Identyfikator</th>
                                                <th>Podpisanie</th>
                                                <th>Wygaśnięcie</th>
                                                <th>Załącznik</th>
                                                <th>Opis</th>
                                                <th width=\"150\">Uwagi</th>
                                                <th>Zgoda</th>
                                                <th width=\"150\">Akcja</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"insurance-table\">
                                            {% for insurance in insurances %}
                                            <tr id=\"in_id-{{ insurance.in_id }}\">
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_pr_name\">{{ insurance.in_pr_name }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_co_name\">{{ insurance.in_co_name }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_identity\">{{ insurance.in_identity }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"combodate\" data-combodate=\"{'minYear': '1970', 'maxYear': '2100'}\" data-value=\"{{ insurance.in_fdate }}\" data-format=\"YYYY-MM-DD\" data-viewformat=\"YYYY-MM-DD\" data-template=\"YYYY - MMM - DD\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_fdate\">{{ insurance.in_fdate }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"combodate\" data-combodate=\"{'minYear': '1970', 'maxYear': '2100'}\" data-value=\"{{ insurance.in_ldate }}\" data-format=\"YYYY-MM-DD\" data-viewformat=\"YYYY-MM-DD\" data-template=\"YYYY - MMM - DD\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_ldate\">{{ insurance.in_ldate }}</a></td>
                                                <td><a href=\"{{ base_url('insurance/read/' ~ insurance.in_link) }}\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{{ insurance.in_link_description }}\"><i class=\"fa fa-file\"></i></a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"text\" data-pk=\"{{ insurance.in_id }}\"  data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_link_description\">{{ insurance.in_link_description }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"textarea\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_notice\">{{ insurance.in_notice }}</a></td>
                                                <td><a href=\"#\" class=\"popup_edit\" data-type=\"select\" data-pk=\"{{ insurance.in_id }}\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_process\" data-value=\"{{ insurance.in_process }}\" data-source=\"[{'value':'Jest zgoda', 'text':'Jest zgoda'},{'value':'Brak zgody', 'text':'Brak zgody'}]\">{{ insurance.in_process }}</a></td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modalFILE-{{ insurance.in_id }}\">Załącznik</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-{{ insurance.in_id }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                    {% for insurance in insurances %}
                                    <div class=\"modal fade\" id=\"modalDELETE-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h1 class=\"modal-title\">USUŃ</h1>
                                                    <small>Trwałe usunięcie Polisy Klienta z bazy danych</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h3 class=\"m-t-none text-center\">{{ insurance.in_pr_name }}</h3>
                                                    <h4 class=\"m-t-none text-center\">{{ insurance.in_co_name }}</h4>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-danger delete_submit\" data-url=\"{{ base_url('insurance/delete') }}\" data-pk=\"{{ insurance.in_id }}\" data-dismiss=\"modal\">Usuń</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}
                                    
                                    <div class=\"modal fade\" id=\"modalADD\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">POLISA</h4>
                                                    <small>Przypisz kolejną polisę</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\" id=\"insurance-create\" enctype=\"multipart/form-data\">

                                                        <div class=\"form-group\"><label for=\"in_co_id\" class=\"col-sm-4 control-label\">Ubezpieczyciel <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"in_co_id\" id=\"in_co_id\">
                                                                    <option value=\"\">-- Proszę wybrać Ubezpieczyciela --</option>
                                                                    {% for company_with_product in companies_with_products %}
                                                                        {% if company_with_product.products %}
                                                                            <option value=\"{{ company_with_product.co_id }}\">{{ company_with_product.co_name }}</option>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_pr_id\" class=\"col-sm-4 control-label\">Polisa <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <select class=\"form-control\" name=\"in_pr_id\" id=\"in_pr_id\">
                                                                    <option value=\"\">-- Proszę wybrać Polisę --</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_identity\" class=\"col-sm-4 control-label\">Identyfikator <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_identity\" placeholder=\"np. STA 88618\" name=\"in_identity\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_fdate\" class=\"col-sm-4 control-label\">Podpisanie <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\" id=\"datetimepicker1\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Data rozpoczęcia\" id=\"in_fdate\" name=\"in_fdate\" readonly>
                                                                    <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\" style=\"color:#949ba2;\"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_ldate\" class=\"col-sm-4 control-label\">Wygaśnięcie <code>*</code></label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\" id=\"datetimepicker2\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Data zakończenia\" id=\"in_ldate\" name=\"in_ldate\" readonly>
                                                                    <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\" style=\"color:#949ba2;\"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <label class=\"btn btn-accent\" for=\"in_link\">
                                                                    <input id=\"in_link\" style=\"display:none;\" onchange=\"\$('#upload-file-info').html(\$(this).val().substring(0, 40) + '...');\" type=\"file\" name=\"in_link\">
                                                                    <span id=\"upload-file-info\">Załącznik</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link_description\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_link_description\" placeholder=\"Charakterystyka polisy\" name=\"in_link_description\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_notice\" class=\"col-sm-4 control-label\">Uwagi</label>
                                                            <div class=\"col-sm-8\">
                                                                <textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Notatki\" id=\"in_notice\" name=\"in_notice\"></textarea>
                                                            </div>
                                                        </div>

                                                    <!--</form>-->
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\" data-dismiss=\"modal\" id=\"add_submit\" data-url=\"{{ base_url('insurance/create/' ~ client.cl_id) }}\">Dodaj</button>
                                                </div>
                                                {{ form_close() }}
                                                
                                            </div>
                                        </div>
                                    </div>
                                              
                                    {% for insurance in insurances %}
                                    <div class=\"modal fade\" id=\"modalFILE-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">ZAŁĄCZNIK</h4>
                                                    <small>Podmień obecny załącznik:</small><br />
                                                    <small><a href=\"{{ base_url('insurance/read/' ~ insurance.in_link) }}\" target=\"_blank\"><i class=\"fa fa-file\"></i></a> {{ insurance.in_link_description }}</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <form class=\"form-horizontal\" id=\"file-update-{{ insurance.in_id }}\" enctype=\"multipart/form-data\">

                                                        <div class=\"form-group\"><label for=\"in_link2-{{ insurance.in_id }}\" class=\"col-sm-4 control-label\">Załącznik</label>
                                                            <div class=\"col-sm-8\">
                                                                <label class=\"btn btn-accent\" for=\"in_link2-{{ insurance.in_id }}\">
                                                                    <input id=\"in_link2-{{ insurance.in_id }}\" style=\"display:none;\" onchange=\"\$('#upload-file-info2-{{ insurance.in_id }}').html(\$(this).val().substring(0, 40) + '...');\" type=\"file\" name=\"in_link\">
                                                                    <span id=\"upload-file-info2-{{ insurance.in_id }}\">Załącznik</span>
                                                                </label>

                                                                <input type=\"hidden\" name=\"old_in_link\" value=\"{{ insurance.in_link }}\">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\"><label for=\"in_link_description2\" class=\"col-sm-4 control-label\">Opis załącznika</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control\" id=\"in_link_description2\" placeholder=\"Charakterystyka polisy\" name=\"in_link_description\">
                                                            </div>
                                                        </div>

                                                    <!--</form>-->
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent update_submit\" data-dismiss=\"modal\" data-url=\"{{ base_url('insurance/update/' ~ insurance.in_id) }}\" data-pk=\"{{ insurance.in_id }}\">Zmień</button>
                                                </div>
                                                {{ form_close() }}
                                                
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
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/moment/moment.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/moment/locale/pl.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

{% block jq_scripts %}
    {{ parent() }}
    \$('[data-toggle=\"tooltip\"]').tooltip();
    
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

        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: new FormData(\$('#insurance-create')[0]),
            
            // Tell jQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false,

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

                    \$('#insurance-table').prepend(
                    '<tr id=\"in_id-' + data.in_id + '\" role=\"row\" class=\"odd\"><td class=\"sorting_1\"><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_pr_name\">' + data.in_pr_name + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_co_name\">' + data.in_co_name + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_identity\">' + data.in_identity + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_fdate\">' + data.in_fdate + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_ldate\">' + data.in_ldate + '</a></td><td><a href=\"{{ base_url('insurance/read') }}/' + data.in_link + '\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"aa\"><i class=\"fa fa-file\"></i></a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"text\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_link_description\">' + data.in_link_description + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-pre-wrapped editable-click\" data-type=\"textarea\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana e-mail\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_notice\">' + data.in_notice + '</a></td><td><a href=\"#\" class=\"popup_edit editable editable-click\" data-type=\"select\" data-pk=\"' + data.in_id + '\" data-title=\"Zmiana e-mail\" data-url=\"{{ base_url('insurance/edit') }}\" data-name=\"in_process\" data-value=\"' + data.in_process + '\">Weryfikuję zgodę</a></td><td><a href=\"#\" class=\"btn btn-success btn-xs\">Szczegóły</a><a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-' + data.in_id + '\"><i class=\"fa fa-trash\"></i></a></td></tr>'
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
    
    \$('.update_submit').click(function(e) {
        e.preventDefault();

        var url = \$(this).attr('data-url');
        var id = \$(this).attr('data-pk');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: new FormData(\$('#file-update-' + id)[0]),
            
            // Tell jQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false,

            success: function (data) {
                if(data.status == 1) {
                    setTimeout(function(){ // Run toastr notification with success message
                        toastr.options = {
                            \"positionClass\": \"toast-top-right\",
                            \"closeButton\": true,
                            \"progressBar\": true,
                            \"showEasing\": \"swing\",
                            \"timeOut\": \"1500\",
                            \"onHidden\": function(){location.reload()},
                            \"onclick\": function(){location.reload()}
                        };
                        toastr.success('<strong>Sukces! </strong> <br/><small>' + data.msg + '</small>');
                        },500
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
        var data = {'in_id': id};
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('#in_id-' + id).fadeOut(1000);
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
    \$(\"#in_pr_id\").depdrop({
        url: '{{ base_url('insurance/get_product') }}',
        depends: ['in_co_id']
    });
    
    \$(\"#datetimepicker1\").datetimepicker({
        locale: \"pl\",
        format: 'YYYY-MM-DD',
        ignoreReadonly: true
    });
    
    \$(\"#datetimepicker2\").datetimepicker({
        locale: \"pl\",
        format: 'YYYY-MM-DD',
        ignoreReadonly: true,
        useCurrent: false
    });
    
    \$(\"#datetimepicker1\").on(\"dp.change\", function (e) {
        \$('#datetimepicker2').data(\"DateTimePicker\").minDate(e.date);
    });
    \$(\"#datetimepicker2\").on(\"dp.change\", function (e) {
        \$('#datetimepicker1').data(\"DateTimePicker\").maxDate(e.date);
    });
{% endblock %}", "insurance/all.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\insurance\\all.twig");
    }
}
