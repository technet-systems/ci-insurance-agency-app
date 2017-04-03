<?php

/* customer/all.twig */
class __TwigTemplate_05e85fba53e1e71ff5956aecfa814ebfab903cd94b2796b541a9c3eac05454c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "customer/all.twig", 1);
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
            echo "                                            <tr>
                                                <td><a href=\"#\" class=\"cl_name\" data-type=\"text\" data-pk=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_id", array()), "html", null, true);
            echo "\" data-title=\"Zmiana danych\" data-url=\"";
            echo twig_escape_filter($this->env, base_url("client/edit"), "html", null, true);
            echo "\" data-name=\"cl_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_name", array()), "html", null, true);
            echo "</a></td>
                                                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_address", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_email", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_phone", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_identity", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_notice", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cl_process", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#myEDIT\">Edycja</a>
                                                    <a href=\"#\" class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#myARCHIVE\"><i class=\"fa fa-trash\"></i></a>
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
                                    
                                    <div class=\"modal fade\" id=\"myEDIT\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">EDYCJA</h4>
                                                <small>Zmiana danych Klienta</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form class=\"form-horizontal\">
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Imię i nazwisko / Firma</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Jan Kowalski\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Adres</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Zabrze, Nyska 2/2\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Telefon</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"509-533-515\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">E-Mail</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"yes@yes.de\">
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
                                                <button type=\"button\" class=\"btn btn-accent\">Zmień</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class=\"modal fade\" id=\"myARCHIVE\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">ARCHIWUM</h4>
                                                    <small>Przenieś Klienta do archiwum</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h1 class=\"m-t-none text-center\">Jan Kowalski</h1>
                                                    <h4 class=\"text-center\">Zabrze, Nyska 2/2</h4>
                                                    <h4 class=\"m-t-none text-center\">509-533-515</h4>
                                                    <h4 class=\"m-t-none text-center\">yes@yes.de</h4>
                                                    
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\">Archiwizuj</button>
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

    // line 170
    public function block_vendor_scripts($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        $this->displayParentBlock("vendor_scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, base_url("assets/vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 175
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 176
        echo "    ";
        $this->displayParentBlock("jq_scripts", $context, $blocks);
        echo "
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystko\"] ],
        \"iDisplayLength\": 6,
        
        \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
        \$('.cl_name').editable({
            // strona docelowa: http://vitalets.github.io/bootstrap-editable/
            // dla każdego pola utworzyć odrębną klasę i do niej dopisać odpowiednie reguły walidacji
            // is int => http://stackoverflow.com/questions/3885817/how-to-check-that-a-number-is-float-or-integer
            validate: function(value) {
            /*
                A MOŻE TUTAJ ZROBIĆ QUICK AJAXA ABY SPRAWDZIŁ W CI CZY DANE SĄ OK I ZWRóCIŁ ODPOWIEDNI KOMUNIKAT?
            */
                if(\$.trim(value) == '') {
                    return 'Pole nie może być puste';

                }

            }

        });
        }
        
    });
    
    
";
    }

    public function getTemplateName()
    {
        return "customer/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 176,  267 => 175,  261 => 172,  256 => 171,  253 => 170,  160 => 79,  147 => 72,  143 => 71,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  119 => 66,  116 => 65,  112 => 64,  60 => 14,  57 => 13,  49 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
                                            <tr>
                                                <td><a href=\"#\" class=\"cl_name\" data-type=\"text\" data-pk=\"{{ client.cl_id }}\" data-title=\"Zmiana danych\" data-url=\"{{ base_url('client/edit') }}\" data-name=\"cl_name\">{{ client.cl_name }}</a></td>
                                                <td>{{ client.cl_address }}</td>
                                                <td>{{ client.cl_email }}</td>
                                                <td>{{ client.cl_phone }}</td>
                                                <td>{{ client.cl_identity }}</td>
                                                <td>{{ client.cl_notice }}</td>
                                                <td>{{ client.cl_process }}</td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#myEDIT\">Edycja</a>
                                                    <a href=\"#\" class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#myARCHIVE\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                    <div class=\"modal fade\" id=\"myEDIT\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header text-center\">
                                                <h4 class=\"modal-title\">EDYCJA</h4>
                                                <small>Zmiana danych Klienta</small>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form class=\"form-horizontal\">
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Imię i nazwisko / Firma</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Jan Kowalski\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Adres</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Zabrze, Nyska 2/2\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">Telefon</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"509-533-515\">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"form-group\"><label for=\"inputEmail3\" class=\"col-sm-4 control-label\">E-Mail</label>
                                                        <div class=\"col-sm-8\">
                                                            <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"yes@yes.de\">
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
                                                <button type=\"button\" class=\"btn btn-accent\">Zmień</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class=\"modal fade\" id=\"myARCHIVE\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                        <div class=\"modal-dialog modal-sm\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header text-center\">
                                                    <h4 class=\"modal-title\">ARCHIWUM</h4>
                                                    <small>Przenieś Klienta do archiwum</small>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <h1 class=\"m-t-none text-center\">Jan Kowalski</h1>
                                                    <h4 class=\"text-center\">Zabrze, Nyska 2/2</h4>
                                                    <h4 class=\"m-t-none text-center\">509-533-515</h4>
                                                    <h4 class=\"m-t-none text-center\">yes@yes.de</h4>
                                                    
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                                                    <button type=\"button\" class=\"btn btn-accent\">Archiwizuj</button>
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
{% endblock %}

{% block jq_scripts %}
    {{ parent() }}
    \$('#tableExample2').DataTable({
        \"dom\": \"<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>\",
        \"lengthMenu\": [ [6, 25, 50, -1], [6, 25, 50, \"Wszystko\"] ],
        \"iDisplayLength\": 6,
        
        \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
        \$('.cl_name').editable({
            // strona docelowa: http://vitalets.github.io/bootstrap-editable/
            // dla każdego pola utworzyć odrębną klasę i do niej dopisać odpowiednie reguły walidacji
            // is int => http://stackoverflow.com/questions/3885817/how-to-check-that-a-number-is-float-or-integer
            validate: function(value) {
            /*
                A MOŻE TUTAJ ZROBIĆ QUICK AJAXA ABY SPRAWDZIŁ W CI CZY DANE SĄ OK I ZWRóCIŁ ODPOWIEDNI KOMUNIKAT?
            */
                if(\$.trim(value) == '') {
                    return 'Pole nie może być puste';

                }

            }

        });
        }
        
    });
    
    
{% endblock %}", "customer/all.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\customer\\all.twig");
    }
}
