<?php

/* dashboard/all.twig */
class __TwigTemplate_28f13130a63bc6f9ed60c467cb9bf39eae65456777bb25b4b40b398d7dd22c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "dashboard/all.twig", 1);
        $this->blocks = array(
            'vendor_stylesheets' => array($this, 'block_vendor_stylesheets'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    
    <!-- Main content-->
    <section class=\"content\">
        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"view-header\">
                        <div class=\"header-icon\">
                            <i class=\"pe page-header-icon pe-7s-graph1\"></i>
                        </div>
                        <div class=\"header-title\">
                            <h3 class=\"m-b-xs\">Monitoring</h3>
                            <small>
                                Pozwala na szybki podgląd bieżących spraw agencji
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Liczba Klientów</h4>
                            <h2 class=\"m-b-none text-muted\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["box_client_all"]) ? $context["box_client_all"] : null), "html", null, true);
        echo " 
                            </h2>
                            <div class=\"small c-white\">wszystkich aktywnych</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Liczba Polis</h4>
                            <h2 class=\"m-b-none text-muted\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["box_insurance_all"]) ? $context["box_insurance_all"] : null), "html", null, true);
        echo "
                            </h2>
                            <div class=\"small c-white\">wszystkich aktywnych</div>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix visible-xs\"></div>

                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Wysłane e-maile</h4>
                            <h2 class=\"m-b-none text-muted\" id='box_email_all'>
                                ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["box_email_all"]) ? $context["box_email_all"] : null), "html", null, true);
        echo " 
                            </h2>
                            <div class=\"small c-white\">w bieżącym miesiącu</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Wysłane SMS'y</h4>
                            <h2 class=\"m-b-none text-muted\" id='box_sms_all'>
                                ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["box_sms_all"]) ? $context["box_sms_all"] : null), "html", null, true);
        echo " 
                            </h2>
                            <div class=\"small c-white\">w bieżącym miesiącu</div>
                        </div>
                    </div>
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
                            Wykaz wszystkich Klientów Agencji wraz z ich wszystkimi polisami
                            <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">

                                <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                    <thead>
                                    <tr>
                                        <th>Imię i nazwisko / Firma</th>
                                        <th>Polisa</th>
                                        <th>Ubezpieczyciel</th>
                                        <th>Identyfikator</th>
                                        <th>Wygaśnięcie</th>
                                        <th>Załącznik</th>
                                        <th>Uwagi</th>
                                        <th width=\"150\">Akcja</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["insurances_with_client"]) ? $context["insurances_with_client"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
            // line 114
            echo "                                            ";
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["insurance"], "in_ldate", array()), "-14 day"), "Y-m-d") <= twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 115
                echo "                                            <tr id=\"in_id-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
                echo "\">
                                                <td><a href=\"";
                // line 116
                echo twig_escape_filter($this->env, base_url(("insurance/all/" . $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_name", array()), "html", null, true);
                echo "</a></td>
                                                <td><span class=\"label label-primary\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_pr_name", array()), "html", null, true);
                echo "</span></td>
                                                <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_co_name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_identity", array()), "html", null, true);
                echo "</td>
                                                <td class=\"";
                // line 120
                echo ((((twig_date_format_filter($this->env, $this->getAttribute($context["insurance"], "in_ldate", array()), "U") - twig_date_format_filter($this->env, "now", "U")) >= 604800)) ? ("text-warning") : ("text-danger"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_ldate", array()), "html", null, true);
                echo "</td>
                                                <td><a href=\"";
                // line 121
                echo twig_escape_filter($this->env, base_url(("insurance/read/" . $this->getAttribute($context["insurance"], "in_link", array()))), "html", null, true);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_link_description", array()), "html", null, true);
                echo "\"><i class=\"fa fa-file\"></i></a></td>
                                                <td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_notice", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" ";
                // line 124
                if (($this->getAttribute($context["insurance"], "in_send_sms", array()) == 0)) {
                    echo " data-toggle=\"modal\" ";
                }
                echo " data-target=\"#modalSMS-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["insurance"], "in_send_sms", array()) == 1)) {
                    echo " disabled=\"disabled\" ";
                }
                echo ">SMS</a>
                                                    <a href=\"#\" class=\"btn btn-info btn-xs\" ";
                // line 125
                if (($this->getAttribute($context["insurance"], "in_send_email", array()) == 0)) {
                    echo " data-toggle=\"modal\" ";
                }
                echo " data-target=\"#modalEMAIL-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["insurance"], "in_send_email", array()) == 1)) {
                    echo " disabled=\"disabled\" ";
                }
                echo ">E-mail</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalPHONE-";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
                echo "\">Telefon</a>
                                                    <a href=\"#\" class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
            }
            // line 131
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insurance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                                    </tbody>
                                </table>

                                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["insurances_with_client"]) ? $context["insurances_with_client"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
            // line 136
            echo "                                <div class=\"modal fade\" id=\"modalSMS-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">SMS</h4>
                                                <small>Wyślij wiadomość tekstową do odbiorcy</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        <form class=\"form-horizontal\" id=\"sms-create-";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">
                                                            <div class=\"form-group\"><label for=\"recipient\" class=\"col-sm-3 control-label\">Do </label>
                                                                <div class=\"col-sm-9\"><p class=\"form-control-static\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_name", array()), "html", null, true);
            echo "</p></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_header\" class=\"col-sm-3 control-label\">Podpis <code>*</code></label>
                                                                <div class=\"col-sm-9\"><input type=\"text\" name=\"ou_header\" class=\"form-control\" id=\"ou_header\" placeholder=\"Wpisz podpis SMS\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "me_header", array()), "html", null, true);
            echo "\"></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_text\" class=\"col-sm-3 control-label\">Tekst <code>*</code></label>
                                                                <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"ou_text\" name=\"ou_text\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "me_text", array()), "html", null, true);
            echo "</textarea></div>
                                                            </div>
                                                            
                                                            <input type=\"hidden\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" name=\"ou_in_id\">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent send-sms\" data-dismiss=\"modal\" data-url=\"";
            // line 164
            echo twig_escape_filter($this->env, base_url(("dashboard/send/sms/" . $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_id", array()))), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">Wyślij</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"modal fade\" id=\"modalEMAIL-";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">E-MAIL</h4>
                                                <small>Wyślij wiadomość e-mail do odbiorcy</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        <form class=\"form-horizontal\" id=\"email-create-";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">
                                                            <div class=\"form-group\"><label for=\"recipient\" class=\"col-sm-3 control-label\">Do </label>
                                                                <div class=\"col-sm-9\"><p class=\"form-control-static\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_name", array()), "html", null, true);
            echo "</p></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_header\" class=\"col-sm-3 control-label\">Temat <code>*</code></label>
                                                                <div class=\"col-sm-9\"><input type=\"text\" name=\"ou_header\" class=\"form-control\" id=\"ou_header\" placeholder=\"Wpisz podpis SMS\" value=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "me_header", array()), "html", null, true);
            echo "\"></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_text\" class=\"col-sm-3 control-label\">Tekst <code>*</code></label>
                                                                <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"ou_text\" name=\"ou_text\">";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "me_text", array()), "html", null, true);
            echo "</textarea></div>
                                                            </div>
                                                            
                                                            <input type=\"hidden\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" name=\"ou_in_id\">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent send-email\" data-dismiss=\"modal\" data-url=\"";
            // line 198
            echo twig_escape_filter($this->env, base_url(("dashboard/send/email/" . $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_id", array()))), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\">Wyślij</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            
                                <div class=\"modal fade\" id=\"modalPHONE-";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">TELEFON</h4>
                                                <small>Kliknij na numer telefonu aby zadzwonić</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4 class=\"m-t-none text-center\">";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_name", array()), "html", null, true);
            echo "</h4>
                                                <h1 class=\"text-center\"><a href=\"tel:";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_phone", array()), "html", null, true);
            echo "</a></h1>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent\" data-dismiss=\"modal\">Wykonany</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"modal fade\" id=\"modalDELETE-";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">USUŃ</h4>
                                                <small>Usuwanie powiadomienia o polisie</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4 class=\"m-t-none text-center\">";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["insurance"], "client", array()), "cl_name", array()), "html", null, true);
            echo "</h4>
                                                <h4 class=\"text-center\"><span class=\"label label-primary\">";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_pr_name", array()), "html", null, true);
            echo "</span></h4>
                                                <h4 class=\"m-t-none text-center\">";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_co_name", array()), "html", null, true);
            echo "</h4>
                                                <h4 class=\"m-t-none text-center\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "in_identity", array()), "html", null, true);
            echo "</h4>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button type=\"button\" class=\"btn btn-accent delete_submit\" data-url=\"";
            // line 239
            echo twig_escape_filter($this->env, base_url("dashboard/delete"), "html", null, true);
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
        // line 245
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

    // line 262
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 263
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, base_url("assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, base_url("assets/vendor/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, base_url("assets/vendor/moment/locale/pl.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, base_url("assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 272
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 273
        echo "    ";
        $this->displayParentBlock("jq_scripts", $context, $blocks);
        echo "
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystkie\"] ],
        \"iDisplayLength\": 6,
    });
    
    \$('.send-sms').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = \$('#sms-create-' + id).serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('a[data-target=\"#modalSMS-' + id + '\"]').attr({
                        'disabled': 'disabled',
                        'data-toggle': ''
                    });
                    
                    \$('#box_sms_all').text(function() {
                        var newNumber = parseInt(\$(this).text()) + 1;
                        return newNumber;
                    });
                
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
                    
                    \$('#submit').prop(\"disabled\", true);
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
    
    \$('.send-email').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = \$('#email-create-' + id).serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('a[data-target=\"#modalEMAIL-' + id + '\"]').attr({
                        'disabled': 'disabled',
                        'data-toggle': ''
                    });
                    
                    \$('#box_email_all').text(function() {
                        var newNumber = parseInt(\$(this).text()) + 1;
                        return newNumber;
                    });
                
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
                    
                    \$('#submit').prop(\"disabled\", true);
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
";
    }

    public function getTemplateName()
    {
        return "dashboard/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 273,  512 => 272,  506 => 269,  502 => 268,  498 => 267,  494 => 266,  490 => 265,  486 => 264,  481 => 263,  478 => 262,  459 => 245,  445 => 239,  437 => 234,  433 => 233,  429 => 232,  425 => 231,  414 => 223,  399 => 213,  395 => 212,  384 => 204,  373 => 198,  363 => 191,  357 => 188,  351 => 185,  345 => 182,  340 => 180,  327 => 170,  316 => 164,  306 => 157,  300 => 154,  294 => 151,  288 => 148,  283 => 146,  269 => 136,  265 => 135,  260 => 132,  254 => 131,  247 => 127,  243 => 126,  231 => 125,  219 => 124,  214 => 122,  208 => 121,  202 => 120,  198 => 119,  194 => 118,  190 => 117,  184 => 116,  179 => 115,  176 => 114,  172 => 113,  132 => 76,  118 => 65,  101 => 51,  87 => 40,  56 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
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

{% block body %}
    
    <!-- Main content-->
    <section class=\"content\">
        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"view-header\">
                        <div class=\"header-icon\">
                            <i class=\"pe page-header-icon pe-7s-graph1\"></i>
                        </div>
                        <div class=\"header-title\">
                            <h3 class=\"m-b-xs\">Monitoring</h3>
                            <small>
                                Pozwala na szybki podgląd bieżących spraw agencji
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Liczba Klientów</h4>
                            <h2 class=\"m-b-none text-muted\">
                                {{ box_client_all }} 
                            </h2>
                            <div class=\"small c-white\">wszystkich aktywnych</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Liczba Polis</h4>
                            <h2 class=\"m-b-none text-muted\">
                                {{ box_insurance_all }}
                            </h2>
                            <div class=\"small c-white\">wszystkich aktywnych</div>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix visible-xs\"></div>

                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Wysłane e-maile</h4>
                            <h2 class=\"m-b-none text-muted\" id='box_email_all'>
                                {{ box_email_all }} 
                            </h2>
                            <div class=\"small c-white\">w bieżącym miesiącu</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6\">
                    <div class=\"panel panel-filled\">
                        <div class=\"panel-body text-center\">
                            <h4>Wysłane SMS'y</h4>
                            <h2 class=\"m-b-none text-muted\" id='box_sms_all'>
                                {{ box_sms_all }} 
                            </h2>
                            <div class=\"small c-white\">w bieżącym miesiącu</div>
                        </div>
                    </div>
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
                            Wykaz wszystkich Klientów Agencji wraz z ich wszystkimi polisami
                            <span class=\"help-block\">Użyj pola 'szukaj' dla szybkiej filtracji danych</span>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">

                                <table id=\"tableExample2\" class=\"table table-striped table-hover\">
                                    <thead>
                                    <tr>
                                        <th>Imię i nazwisko / Firma</th>
                                        <th>Polisa</th>
                                        <th>Ubezpieczyciel</th>
                                        <th>Identyfikator</th>
                                        <th>Wygaśnięcie</th>
                                        <th>Załącznik</th>
                                        <th>Uwagi</th>
                                        <th width=\"150\">Akcja</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        {% for insurance in insurances_with_client %}
                                            {% if insurance.in_ldate|date_modify('-14 day')|date('Y-m-d') <= 'now'|date('Y-m-d') %}
                                            <tr id=\"in_id-{{ insurance.in_id }}\">
                                                <td><a href=\"{{ base_url('insurance/all/' ~ insurance.client.cl_id ) }}\">{{ insurance.client.cl_name }}</a></td>
                                                <td><span class=\"label label-primary\">{{ insurance.in_pr_name }}</span></td>
                                                <td>{{ insurance.in_co_name }}</td>
                                                <td>{{ insurance.in_identity }}</td>
                                                <td class=\"{{ insurance.in_ldate|date('U') - 'now'|date('U') >= 604800 ? 'text-warning' : 'text-danger' }}\">{{ insurance.in_ldate }}</td>
                                                <td><a href=\"{{ base_url('insurance/read/' ~ insurance.in_link) }}\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{{ insurance.in_link_description }}\"><i class=\"fa fa-file\"></i></a></td>
                                                <td>{{ insurance.in_notice }}</td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" {% if insurance.in_send_sms == 0 %} data-toggle=\"modal\" {% endif %} data-target=\"#modalSMS-{{ insurance.in_id }}\" {% if insurance.in_send_sms == 1 %} disabled=\"disabled\" {% endif %}>SMS</a>
                                                    <a href=\"#\" class=\"btn btn-info btn-xs\" {% if insurance.in_send_email == 0 %} data-toggle=\"modal\" {% endif %} data-target=\"#modalEMAIL-{{ insurance.in_id }}\" {% if insurance.in_send_email == 1 %} disabled=\"disabled\" {% endif %}>E-mail</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalPHONE-{{ insurance.in_id }}\">Telefon</a>
                                                    <a href=\"#\" class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#modalDELETE-{{ insurance.in_id }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endif %}
                                        {% endfor %}
                                    </tbody>
                                </table>

                                {% for insurance in insurances_with_client %}
                                <div class=\"modal fade\" id=\"modalSMS-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">SMS</h4>
                                                <small>Wyślij wiadomość tekstową do odbiorcy</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        <form class=\"form-horizontal\" id=\"sms-create-{{ insurance.in_id }}\">
                                                            <div class=\"form-group\"><label for=\"recipient\" class=\"col-sm-3 control-label\">Do </label>
                                                                <div class=\"col-sm-9\"><p class=\"form-control-static\">{{ insurance.client.cl_name }}</p></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_header\" class=\"col-sm-3 control-label\">Podpis <code>*</code></label>
                                                                <div class=\"col-sm-9\"><input type=\"text\" name=\"ou_header\" class=\"form-control\" id=\"ou_header\" placeholder=\"Wpisz podpis SMS\" value=\"{{ sms.me_header }}\"></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_text\" class=\"col-sm-3 control-label\">Tekst <code>*</code></label>
                                                                <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"ou_text\" name=\"ou_text\">{{ sms.me_text }}</textarea></div>
                                                            </div>
                                                            
                                                            <input type=\"hidden\" value=\"{{ insurance.in_id }}\" name=\"ou_in_id\">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent send-sms\" data-dismiss=\"modal\" data-url=\"{{ base_url('dashboard/send/sms/' ~ insurance.client.cl_id) }}\" data-pk=\"{{ insurance.in_id }}\">Wyślij</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"modal fade\" id=\"modalEMAIL-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">E-MAIL</h4>
                                                <small>Wyślij wiadomość e-mail do odbiorcy</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        <form class=\"form-horizontal\" id=\"email-create-{{ insurance.in_id }}\">
                                                            <div class=\"form-group\"><label for=\"recipient\" class=\"col-sm-3 control-label\">Do </label>
                                                                <div class=\"col-sm-9\"><p class=\"form-control-static\">{{ insurance.client.cl_name }}</p></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_header\" class=\"col-sm-3 control-label\">Temat <code>*</code></label>
                                                                <div class=\"col-sm-9\"><input type=\"text\" name=\"ou_header\" class=\"form-control\" id=\"ou_header\" placeholder=\"Wpisz podpis SMS\" value=\"{{ email.me_header }}\"></div>
                                                            </div>
                                                            <div class=\"form-group\"><label for=\"ou_text\" class=\"col-sm-3 control-label\">Tekst <code>*</code></label>
                                                                <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"ou_text\" name=\"ou_text\">{{ email.me_text }}</textarea></div>
                                                            </div>
                                                            
                                                            <input type=\"hidden\" value=\"{{ insurance.in_id }}\" name=\"ou_in_id\">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent send-email\" data-dismiss=\"modal\" data-url=\"{{ base_url('dashboard/send/email/' ~ insurance.client.cl_id) }}\" data-pk=\"{{ insurance.in_id }}\">Wyślij</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            
                                <div class=\"modal fade\" id=\"modalPHONE-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">TELEFON</h4>
                                                <small>Kliknij na numer telefonu aby zadzwonić</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4 class=\"m-t-none text-center\">{{ insurance.client.cl_name }}</h4>
                                                <h1 class=\"text-center\"><a href=\"tel:{{ insurance.client.cl_phone }}\">{{ insurance.client.cl_phone }}</a></h1>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button class=\"btn btn-accent\" data-dismiss=\"modal\">Wykonany</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"modal fade\" id=\"modalDELETE-{{ insurance.in_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">USUŃ</h4>
                                                <small>Usuwanie powiadomienia o polisie</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4 class=\"m-t-none text-center\">{{ insurance.client.cl_name }}</h4>
                                                <h4 class=\"text-center\"><span class=\"label label-primary\">{{ insurance.in_pr_name }}</span></h4>
                                                <h4 class=\"m-t-none text-center\">{{ insurance.in_co_name }}</h4>
                                                <h4 class=\"m-t-none text-center\">{{ insurance.in_identity }}</h4>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                <button type=\"button\" class=\"btn btn-accent delete_submit\" data-url=\"{{ base_url('dashboard/delete') }}\" data-pk=\"{{ insurance.in_id }}\" data-dismiss=\"modal\">Usuń</button>
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
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/dependent-dropdown.min.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/dependent-dropdown/js/depdrop_locale_pl.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/moment/moment.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/moment/locale/pl.js') }}\"></script>
    <script src=\"{{ base_url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

{% block jq_scripts %}
    {{ parent() }}
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystkie\"] ],
        \"iDisplayLength\": 6,
    });
    
    \$('.send-sms').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = \$('#sms-create-' + id).serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('a[data-target=\"#modalSMS-' + id + '\"]').attr({
                        'disabled': 'disabled',
                        'data-toggle': ''
                    });
                    
                    \$('#box_sms_all').text(function() {
                        var newNumber = parseInt(\$(this).text()) + 1;
                        return newNumber;
                    });
                
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
                    
                    \$('#submit').prop(\"disabled\", true);
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
    
    \$('.send-email').click(function(e) {
        e.preventDefault();

        var id = \$(this).attr('data-pk');
        var data = \$('#email-create-' + id).serialize();
        var url = \$(this).attr('data-url');

        \$.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                if(data.status == 1) {
                    \$('a[data-target=\"#modalEMAIL-' + id + '\"]').attr({
                        'disabled': 'disabled',
                        'data-toggle': ''
                    });
                    
                    \$('#box_email_all').text(function() {
                        var newNumber = parseInt(\$(this).text()) + 1;
                        return newNumber;
                    });
                
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
                    
                    \$('#submit').prop(\"disabled\", true);
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
{% endblock %}", "dashboard/all.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\dashboard\\all.twig");
    }
}
