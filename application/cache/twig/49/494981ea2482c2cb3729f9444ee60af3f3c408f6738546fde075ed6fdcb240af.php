<?php

/* company/add.twig */
class __TwigTemplate_6648d7687ca00d7213fed33181f79cb30b74ca1a1f4752f39631e09489231d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "company/add.twig", 1);
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
                                <h3 class=\"m-b-xs\">Dodaj Towarzystwo Ubezpieczeniowe</h3>
                                <small>
                                    Wypełnij pola formularza aby dodać nowego Ubezpieczyciela
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
                                Formularz dodawania nowego Ubezpieczyciela do bazy danych
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\" id=\"customer-create\">
                                    <div class=\"form-group\"><label for=\"co_name\" class=\"col-sm-3 control-label\">Ubezpieczyciel <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"co_name\" class=\"form-control\" id=\"co_name\" placeholder=\"np. PZU\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"co_notice\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\" id=\"co_notice\" name=\"co_notice\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"";
        // line 41
        echo twig_escape_filter($this->env, base_url("company/create"), "html", null, true);
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

    // line 57
    public function block_jq_scripts($context, array $blocks = array())
    {
        // line 58
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
        return "company/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 58,  90 => 57,  71 => 41,  32 => 4,  29 => 3,  11 => 1,);
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
                                <h3 class=\"m-b-xs\">Dodaj Towarzystwo Ubezpieczeniowe</h3>
                                <small>
                                    Wypełnij pola formularza aby dodać nowego Ubezpieczyciela
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
                                Formularz dodawania nowego Ubezpieczyciela do bazy danych
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\" id=\"customer-create\">
                                    <div class=\"form-group\"><label for=\"co_name\" class=\"col-sm-3 control-label\">Ubezpieczyciel <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"co_name\" class=\"form-control\" id=\"co_name\" placeholder=\"np. PZU\"></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"co_notice\" class=\"col-sm-3 control-label\">Uwagi</label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Miejsce na notatki\" id=\"co_notice\" name=\"co_notice\"></textarea></div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"{{ base_url('company/create') }}\"><i class=\"fa fa-save\"></i> Zapisz</button>
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
{% endblock %}", "company/add.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\company\\add.twig");
    }
}
