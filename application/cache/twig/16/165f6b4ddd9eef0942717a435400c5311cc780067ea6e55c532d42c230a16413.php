<?php

/* message/sms/add.twig */
class __TwigTemplate_8fdafdecaaaeaad8aea0becf961db0bc8b40968cfbb28d501ce65d8f0fc5b38f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_layout.twig", "message/sms/add.twig", 1);
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
                                <i class=\"pe page-header-icon pe-7s-phone\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Edycja powiadomienia SMS</h3>
                                <small>
                                    Wypełnij pole formularza aby dodać nowy tekst powiadomienia
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
                                Formularz dodawania nowego tekstu wiadomości SMS
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\" id=\"sms-create\">
                                    <div class=\"form-group\"><label for=\"me_header\" class=\"col-sm-3 control-label\">Podpis wiadomości <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"me_header\" class=\"form-control\" id=\"me_header\" placeholder=\"Wpisz podpis SMS\" value='";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "me_header", array()), "html", null, true);
        echo "'></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"me_text\" class=\"col-sm-3 control-label\">Tekst powiadomienia <code>*</code></label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"me_text\" name=\"me_text\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "me_text", array()), "html", null, true);
        echo "</textarea></div>
                                    </div>
                                    <button disabled=\"disabled\" type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"";
        // line 41
        echo twig_escape_filter($this->env, base_url("message/create/sms"), "html", null, true);
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

        var data = \$('#sms-create').serialize();
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
    
    \$('#sms-create').find('input:text, input:password, input:file, select, textarea').on('change keypress', function() {
        \$('#submit').prop(\"disabled\", false);
    });
";
    }

    public function getTemplateName()
    {
        return "message/sms/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 58,  96 => 57,  77 => 41,  72 => 39,  66 => 36,  32 => 4,  29 => 3,  11 => 1,);
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
                                <i class=\"pe page-header-icon pe-7s-phone\"></i>
                            </div>
                            <div class=\"header-title\">
                                <h3 class=\"m-b-xs\">Edycja powiadomienia SMS</h3>
                                <small>
                                    Wypełnij pole formularza aby dodać nowy tekst powiadomienia
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
                                Formularz dodawania nowego tekstu wiadomości SMS
                                <span class=\"help-block\">Pola z <code>*</code> są obowiązkowe</span>
                            </div>
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\" id=\"sms-create\">
                                    <div class=\"form-group\"><label for=\"me_header\" class=\"col-sm-3 control-label\">Podpis wiadomości <code>*</code></label>
                                        <div class=\"col-sm-9\"><input type=\"text\" name=\"me_header\" class=\"form-control\" id=\"me_header\" placeholder=\"Wpisz podpis SMS\" value='{{ message.me_header }}'></div>
                                    </div>
                                    <div class=\"form-group\"><label for=\"me_text\" class=\"col-sm-3 control-label\">Tekst powiadomienia <code>*</code></label>
                                        <div class=\"col-sm-9\"><textarea class=\"form-control vertical\" rows=\"3\" placeholder=\"Wpisz treść wiadomości\" id=\"me_text\" name=\"me_text\">{{ message.me_text }}</textarea></div>
                                    </div>
                                    <button disabled=\"disabled\" type=\"submit\" class=\"btn btn-accent pull-right\" id=\"submit\" data-url=\"{{ base_url('message/create/sms') }}\"><i class=\"fa fa-save\"></i> Zapisz</button>
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

        var data = \$('#sms-create').serialize();
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
    
    \$('#sms-create').find('input:text, input:password, input:file, select, textarea').on('change keypress', function() {
        \$('#submit').prop(\"disabled\", false);
    });
{% endblock %}", "message/sms/add.twig", "D:\\xampp\\htdocs\\ci-insurance-agency-app\\application\\views\\message\\sms\\add.twig");
    }
}
