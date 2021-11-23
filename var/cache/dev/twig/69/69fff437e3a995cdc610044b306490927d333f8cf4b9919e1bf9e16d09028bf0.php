<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* panel_agendador/abogados.html.twig */
class __TwigTemplate_f832fc2f8940f428ac8e61a05fb1233140854289d23bc84ac4621c5f5f8f0f23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/abogados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/abogados.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Monto Deuda</small>
        <input type=\"text\" class=\"form-control monto-deuda\"  name=\"txtMonto\" required value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 4, $this->source); })()), "monto", [], "any", false, false, false, 4), "html", null, true);
        echo "\" autocomplete=\"ÑÖcompletes\">
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Abogado</small>
        <select name=\"cboAbogado\" id=\"cboAbogado\" class=\"form-control\" required onchange=\"javascript:verHoras()\">
            <option ></option>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abogados"]) || array_key_exists("abogados", $context) ? $context["abogados"] : (function () { throw new RuntimeError('Variable "abogados" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["abogado"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abogado"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
                ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["agenda"] ?? null), "abogado", [], "any", false, true, false, 12), "id", [], "any", true, true, false, 12)) {
                // line 13
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["abogado"], "id", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 13, $this->source); })()), "abogado", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)))) {
                    // line 14
                    echo "                        selected
                    ";
                }
                // line 16
                echo "                ";
            }
            // line 17
            echo "                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abogado"], "nombre", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abogado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Reunión</small>
        <select name=\"cboReunion\" id=\"cboReunion\" class=\"form-control\" required>
            <option ></option>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) || array_key_exists("reuniones", $context) ? $context["reuniones"] : (function () { throw new RuntimeError('Variable "reuniones" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 26
            echo "
                <option value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["agenda"] ?? null), "reunion", [], "any", false, true, false, 28), "id", [], "any", true, true, false, 28)) {
                echo " 
                    ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 29, $this->source); })()), "reunion", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["reunion"], "id", [], "any", false, false, false, 29)))) {
                    // line 30
                    echo "                        selected
                    ";
                }
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "nombre", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </select>
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Ciudad Cliente</small>
        <input type=\"text\" class=\"form-control\" name=\"txtCiudad\" required value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 39, $this->source); })()), "ciudadCliente", [], "any", false, false, false, 39), "html", null, true);
        echo "\" autocomplete=\"ÑÖcompletes\">
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Fecha Agendada</small>
        <input type=\"text\" class=\"form-control datepicker\" name=\"txtFechaAgendamiento\" required value=\"";
        // line 43
        echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 43, $this->source); })()), "fechaAsignado", [], "any", false, false, false, 43), "Y-m-d"), ""), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-sm-12 col-md-2\">
        <small class=\"text-muted\">Horas</small>
        <div id=\"horas\">
            <select name=\"cboHora\" id=\"\" required class=\"form-control\">
                <option></option>
            </select>

        </div>
    </div>
    
    <div class=\"col-sm-12 col-md-2\">
        <small class=\"text-muted\">Ver Agenda</small><br>
        <button class=\"btn btn-success\" type=\"button\" onclick=\"javascript:verCalendario()\"><i class=\"far fa-calendar-alt\"></i></button>
    </div>
    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        <textarea name=\"txtObservacion\" class=\"form-control\" cols=\"30\" rows=\"5\" required></textarea>
    </div>
</div>
<button class=\"btn btn-primary\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Gestionar")) : ("Gestionar")), "html", null, true);
        echo "</button>

<script>
    var fecha_cal;
    //verHoras(\$('.datepicker').val());
    verHoras(\"";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 69, $this->source); })()), "fechaAsignado", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true);
        echo "\");
    \$('.datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"drops\": \"up\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
        
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        fecha_cal=start;
        console.log(\"fecha Cal: \"+fecha_cal);
        verHoras();
    });
    \$(\".monto-deuda\").inputmask({
        mask: \"9\",
        repeat:20,
    });
    
    function verCalendario(){
        \$.ajax({
            url:\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_calendario", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\",
            type: \"get\",
            dataType: \"html\",
            data:\"abogado=\"+\$(\"#cboAbogado\").val(),
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){ 
                \$(\"#bodyModal\").html(data);
                \$('#staticBackdrop').modal();

            }
        });
    }
    function verHoras(fecha=null){
        if(fecha == null){
            var fecha= moment(fecha_cal).format(\"YYYY-MM-DD\");
        }else{
            var fecha= moment(fecha).format(\"YYYY-MM-DD\");
            fecha_cal=fecha;
        }
        console.log(\"fecha cal: \"+fecha_cal);
        console.log(\"fecha: \"+fecha);
       if(\$(\"#cboAbogado\").val()>0){
            \$.ajax({
                url:\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_horas");
        echo "\",
                type: \"get\",
                dataType: \"html\",
                data:\"abogado=\"+\$(\"#cboAbogado\").val()+\"&fecha=\"+fecha,
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#horas\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                    
                },
                success:function(data){
                    \$(\"#horas\").html(data);
                }
            });
        }
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_agendador/abogados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 117,  198 => 91,  173 => 69,  165 => 64,  141 => 43,  134 => 39,  128 => 35,  119 => 33,  116 => 32,  112 => 30,  110 => 29,  106 => 28,  102 => 27,  99 => 26,  95 => 25,  87 => 19,  78 => 17,  75 => 16,  71 => 14,  68 => 13,  66 => 12,  61 => 11,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Monto Deuda</small>
        <input type=\"text\" class=\"form-control monto-deuda\"  name=\"txtMonto\" required value=\"{{agenda.monto}}\" autocomplete=\"ÑÖcompletes\">
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Abogado</small>
        <select name=\"cboAbogado\" id=\"cboAbogado\" class=\"form-control\" required onchange=\"javascript:verHoras()\">
            <option ></option>
            {% for abogado in abogados %}
                <option value=\"{{abogado.id}}\"
                {% if agenda.abogado.id is defined %}
                    {% if abogado.id == agenda.abogado.id %}
                        selected
                    {% endif %}
                {% endif %}
                >{{abogado.nombre}}</option>
            {% endfor %}
        </select>
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Reunión</small>
        <select name=\"cboReunion\" id=\"cboReunion\" class=\"form-control\" required>
            <option ></option>
            {% for reunion in reuniones %}

                <option value=\"{{reunion.id}}\"
                    {% if agenda.reunion.id is defined %} 
                    {% if agenda.reunion.id==reunion.id %}
                        selected
                    {% endif %}
                    {% endif %}
                >{{reunion.nombre}}</option>
            {% endfor %}
        </select>
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Ciudad Cliente</small>
        <input type=\"text\" class=\"form-control\" name=\"txtCiudad\" required value=\"{{agenda.ciudadCliente}}\" autocomplete=\"ÑÖcompletes\">
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <small class=\"text-muted\">Fecha Agendada</small>
        <input type=\"text\" class=\"form-control datepicker\" name=\"txtFechaAgendamiento\" required value=\"{{agenda.fechaAsignado|date('Y-m-d')|default('')}}\">
    </div>
    <div class=\"col-sm-12 col-md-2\">
        <small class=\"text-muted\">Horas</small>
        <div id=\"horas\">
            <select name=\"cboHora\" id=\"\" required class=\"form-control\">
                <option></option>
            </select>

        </div>
    </div>
    
    <div class=\"col-sm-12 col-md-2\">
        <small class=\"text-muted\">Ver Agenda</small><br>
        <button class=\"btn btn-success\" type=\"button\" onclick=\"javascript:verCalendario()\"><i class=\"far fa-calendar-alt\"></i></button>
    </div>
    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        <textarea name=\"txtObservacion\" class=\"form-control\" cols=\"30\" rows=\"5\" required></textarea>
    </div>
</div>
<button class=\"btn btn-primary\">{{ button_label|default('Gestionar') }}</button>

<script>
    var fecha_cal;
    //verHoras(\$('.datepicker').val());
    verHoras(\"{{agenda.fechaAsignado|date('Y-m-d')}}\");
    \$('.datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"drops\": \"up\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
        
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        fecha_cal=start;
        console.log(\"fecha Cal: \"+fecha_cal);
        verHoras();
    });
    \$(\".monto-deuda\").inputmask({
        mask: \"9\",
        repeat:20,
    });
    
    function verCalendario(){
        \$.ajax({
            url:\"{{path('panel_agendador_calendario',{'id':agenda.id})}}\",
            type: \"get\",
            dataType: \"html\",
            data:\"abogado=\"+\$(\"#cboAbogado\").val(),
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){ 
                \$(\"#bodyModal\").html(data);
                \$('#staticBackdrop').modal();

            }
        });
    }
    function verHoras(fecha=null){
        if(fecha == null){
            var fecha= moment(fecha_cal).format(\"YYYY-MM-DD\");
        }else{
            var fecha= moment(fecha).format(\"YYYY-MM-DD\");
            fecha_cal=fecha;
        }
        console.log(\"fecha cal: \"+fecha_cal);
        console.log(\"fecha: \"+fecha);
       if(\$(\"#cboAbogado\").val()>0){
            \$.ajax({
                url:\"{{path('panel_agendador_horas')}}\",
                type: \"get\",
                dataType: \"html\",
                data:\"abogado=\"+\$(\"#cboAbogado\").val()+\"&fecha=\"+fecha,
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#horas\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                    
                },
                success:function(data){
                    \$(\"#horas\").html(data);
                }
            });
        }
    }
</script>", "panel_agendador/abogados.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\abogados.html.twig");
    }
}
