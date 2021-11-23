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

/* abogados/edit.html.twig */
class __TwigTemplate_a87c964f64d28d8c03da7b0a05684609887b6feffa8161460f916459b9deeb4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abogados/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abogados/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abogados/edit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 4, $this->source); })()), "Abogados")) : ("Abogados")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 8
        echo twig_include($this->env, $context, "abogados/_form.html.twig", ["button_label" => "Modificar"]);
        echo "

    <section>
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><h1>Agregar fechas no disponibles</h1></div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t<small class=\"text-muted\">Concepto</small>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"txtConcepto\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4 col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Fecha Inicio</small>
\t\t\t\t\t\t<input type=\"text\" name=\"cboFechaInicio\" id=\"cboFechaInicio\" class=\"form-control fechaNoDisponible\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Fecha Fin</small>
\t\t\t\t\t\t<input type=\"text\" name=\"cboFechaFin\"  id=\"cboFechaFin\" class=\"form-control fechaNoDisponible\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Años</small>
\t\t\t\t\t\t<select name=\"cboAnio\" id=\"cboAnios\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") + 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Meses</small>
\t\t\t\t\t\t<select name=\"cboMes\" id=\"cboMes\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Dias</small>
\t\t\t\t\t\t<select name=\"cboDias\" id=\"cboDias\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["dia"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["dia"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-2\">

\t\t\t\t\t\t<small class=\"text-muted\">Hora Inicio</small>
\t\t\t
\t\t\t\t\t\t<div class=\"hora-inicio\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select name=\"cboHoraInicio\"  class=\"form-control horaInicio\" required>
\t\t\t\t\t\t\t\t<option value=\"\">Hora Inicio</option>
\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hora_inicio"]) || array_key_exists("hora_inicio", $context) ? $context["hora_inicio"] : (function () { throw new RuntimeError('Variable "hora_inicio" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hora"]) {
            // line 65
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t>";
            // line 68
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Hora Fin</small>
\t\t\t\t\t\t<div class=\"hora-fin\">
\t\t\t\t\t\t\t<select name=\"cboHoraFin\"  class=\"form-control horaFin\" required>
\t\t\t\t\t\t\t\t<option value=\"\">Hora Fin</option>
\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hora_inicio"]) || array_key_exists("hora_inicio", $context) ? $context["hora_inicio"] : (function () { throw new RuntimeError('Variable "hora_inicio" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hora"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t>";
            // line 84
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-1\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:agregarHora()\"><i class=\"fas fa-plus\"></i></button></div>
\t\t\t\t</div>
\t\t\t\t<div id=\"fechas\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        </section>
        <script>
            \$(function () {
            \$.ajax({
\t\t\t\turl:\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_no_disponible_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\",
\t\t\t\ttype: \"get\",
\t\t\t\tdataType: \"html\",
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tasync: true,
\t\t\t\tsuccess:function(data){
\t\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t\t
\t\t\t\t}
\t\t\t});
\t\t\t\$('#cboFechaInicio').daterangepicker({
\t\t\t\t\"singleDatePicker\": true,
\t\t\t\t\"autoUpdateInput\" : false,
\t\t\t\t\"locale\": {
\t\t\t\t\t\"format\": \"YYYY-MM-DD\",
\t\t\t\t\t\"applyLabel\": \"Apply\",
\t\t\t\t\t\"cancelLabel\": \"Cancelar\",
\t\t\t\t}
\t\t\t});\t
\t
\t\t\t\$(\"#cboFechaInicio\").on('apply.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val(picker.startDate.format(\"YYYY-MM-DD\"));
\t\t\t});
\t\t\t\$(\"#cboFechaInicio\").on('cancel.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val('');
\t\t\t});

\t\t\t\$('#cboFechaFin').daterangepicker({
\t\t\t\t\"singleDatePicker\": true,
\t\t\t\t\"autoUpdateInput\" : false,
\t\t\t\t\"locale\": {
\t\t\t\t\t\"format\": \"YYYY-MM-DD\",
\t\t\t\t\t\"applyLabel\": \"Apply\",
\t\t\t\t\t\"cancelLabel\": \"Cancelar\",
\t\t\t\t}
\t\t\t});\t
\t
\t\t\t\$(\"#cboFechaFin\").on('apply.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val(picker.startDate.format(\"YYYY-MM-DD\"));
\t\t\t});
\t\t\t\$(\"#cboFechaFin\").on('cancel.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val('');
\t\t\t});

\t\t\t
\t\t});

\t\t
\t\tfunction verHoras(fecha){
\t\t\talert(fecha);
\t\t\t\$.ajax({
\t\t\t\turl:\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_horas");
        echo "\",
\t\t\t\ttype: \"get\",
\t\t\t\tdataType: \"html\",
\t\t\t\tdata:\"abogado=\"+";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "html", null, true);
        echo "+\"&fecha=\"+fecha,
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tasync: true,
\t\t\t\tsuccess:function(data){
\t\t\t\t\t\$(\".hora-inicio\").html(data);
\t\t\t\t\t\$(\".hora-fin\").html(data);
\t\t\t\t}
\t\t\t});
\t\t}\t\t\t
\tfunction agregarHora(){
\t\t\$.ajax({
            url:\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_no_disponible_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
        echo "\",
            type: \"get\",
            dataType: \"html\",
            data:\"concepto=\"+\$('#txtConcepto').val()+\"&fecha_inicio=\"+\$('#cboFechaInicio').val()+\"&fecha_fin=\"+\$('#cboFechaFin').val()+\"&horaInicio=\"+\$('.horaInicio').val()+\"&horaFin=\"+\$('.horaFin').val()+\"&anios=\"+\$('#cboAnios').val()+\"&mes=\"+\$('#cboMes').val()+\"&dias=\"+\$('#cboDias').val(),
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){
\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t
            }
        });
\t}
\tfunction eliminaHora(id){
\t\t\$.ajax({
            url:\"/usuario_no_disponible/\"+id+\"/delete\",
            type: \"post\",
            dataType: \"html\",
           cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){
\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t
            }
        });
\t}
        </script>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abogados/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 170,  321 => 157,  315 => 154,  259 => 101,  242 => 86,  234 => 84,  227 => 81,  223 => 80,  211 => 70,  203 => 68,  196 => 65,  192 => 64,  180 => 54,  169 => 52,  165 => 51,  157 => 45,  146 => 43,  142 => 42,  134 => 36,  123 => 34,  119 => 33,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('Abogados')}}{% endblock %}

{% block body %}

    {{ include('abogados/_form.html.twig', {'button_label': 'Modificar'}) }}

    <section>
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><h1>Agregar fechas no disponibles</h1></div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t<small class=\"text-muted\">Concepto</small>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"txtConcepto\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4 col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Fecha Inicio</small>
\t\t\t\t\t\t<input type=\"text\" name=\"cboFechaInicio\" id=\"cboFechaInicio\" class=\"form-control fechaNoDisponible\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Fecha Fin</small>
\t\t\t\t\t\t<input type=\"text\" name=\"cboFechaFin\"  id=\"cboFechaFin\" class=\"form-control fechaNoDisponible\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Años</small>
\t\t\t\t\t\t<select name=\"cboAnio\" id=\"cboAnios\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t{% for anio in \"now\"|date(\"Y\")..\"now\"|date(\"Y\")+4 %}
\t\t\t\t\t\t\t\t<option value=\"{{anio}}\">{{anio}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Meses</small>
\t\t\t\t\t\t<select name=\"cboMes\" id=\"cboMes\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t{% for mes in 1..12 %}
\t\t\t\t\t\t\t\t<option value=\"{{mes}}\">{{mes}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-1\">
\t\t\t\t\t\t<small class=\"text-muted\">Dias</small>
\t\t\t\t\t\t<select name=\"cboDias\" id=\"cboDias\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">Todos</option>
\t\t\t\t\t\t\t{% for dia in 1..31 %}
\t\t\t\t\t\t\t\t<option value=\"{{dia}}\">{{dia}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-2\">

\t\t\t\t\t\t<small class=\"text-muted\">Hora Inicio</small>
\t\t\t
\t\t\t\t\t\t<div class=\"hora-inicio\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select name=\"cboHoraInicio\"  class=\"form-control horaInicio\" required>
\t\t\t\t\t\t\t\t<option value=\"\">Hora Inicio</option>
\t\t\t\t\t\t\t\t{% for hora in hora_inicio %}
\t\t\t\t\t\t\t\t<option value=\"{{hora}}\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t>{{hora}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2  col-md-2\">
\t\t\t\t\t\t<small class=\"text-muted\">Hora Fin</small>
\t\t\t\t\t\t<div class=\"hora-fin\">
\t\t\t\t\t\t\t<select name=\"cboHoraFin\"  class=\"form-control horaFin\" required>
\t\t\t\t\t\t\t\t<option value=\"\">Hora Fin</option>
\t\t\t\t\t\t\t\t{% for hora in hora_inicio %}
\t\t\t\t\t\t\t\t<option value=\"{{hora}}\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t>{{hora}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-1\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:agregarHora()\"><i class=\"fas fa-plus\"></i></button></div>
\t\t\t\t</div>
\t\t\t\t<div id=\"fechas\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        </section>
        <script>
            \$(function () {
            \$.ajax({
\t\t\t\turl:\"{{path('usuario_no_disponible_index',{'id':usuario.id})}}\",
\t\t\t\ttype: \"get\",
\t\t\t\tdataType: \"html\",
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tasync: true,
\t\t\t\tsuccess:function(data){
\t\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t\t
\t\t\t\t}
\t\t\t});
\t\t\t\$('#cboFechaInicio').daterangepicker({
\t\t\t\t\"singleDatePicker\": true,
\t\t\t\t\"autoUpdateInput\" : false,
\t\t\t\t\"locale\": {
\t\t\t\t\t\"format\": \"YYYY-MM-DD\",
\t\t\t\t\t\"applyLabel\": \"Apply\",
\t\t\t\t\t\"cancelLabel\": \"Cancelar\",
\t\t\t\t}
\t\t\t});\t
\t
\t\t\t\$(\"#cboFechaInicio\").on('apply.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val(picker.startDate.format(\"YYYY-MM-DD\"));
\t\t\t});
\t\t\t\$(\"#cboFechaInicio\").on('cancel.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val('');
\t\t\t});

\t\t\t\$('#cboFechaFin').daterangepicker({
\t\t\t\t\"singleDatePicker\": true,
\t\t\t\t\"autoUpdateInput\" : false,
\t\t\t\t\"locale\": {
\t\t\t\t\t\"format\": \"YYYY-MM-DD\",
\t\t\t\t\t\"applyLabel\": \"Apply\",
\t\t\t\t\t\"cancelLabel\": \"Cancelar\",
\t\t\t\t}
\t\t\t});\t
\t
\t\t\t\$(\"#cboFechaFin\").on('apply.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val(picker.startDate.format(\"YYYY-MM-DD\"));
\t\t\t});
\t\t\t\$(\"#cboFechaFin\").on('cancel.daterangepicker',function(ev,picker){
\t\t\t\t\$(this).val('');
\t\t\t});

\t\t\t
\t\t});

\t\t
\t\tfunction verHoras(fecha){
\t\t\talert(fecha);
\t\t\t\$.ajax({
\t\t\t\turl:\"{{path('panel_agendador_horas')}}\",
\t\t\t\ttype: \"get\",
\t\t\t\tdataType: \"html\",
\t\t\t\tdata:\"abogado=\"+{{usuario.id}}+\"&fecha=\"+fecha,
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tasync: true,
\t\t\t\tsuccess:function(data){
\t\t\t\t\t\$(\".hora-inicio\").html(data);
\t\t\t\t\t\$(\".hora-fin\").html(data);
\t\t\t\t}
\t\t\t});
\t\t}\t\t\t
\tfunction agregarHora(){
\t\t\$.ajax({
            url:\"{{path('usuario_no_disponible_new',{'id':usuario.id})}}\",
            type: \"get\",
            dataType: \"html\",
            data:\"concepto=\"+\$('#txtConcepto').val()+\"&fecha_inicio=\"+\$('#cboFechaInicio').val()+\"&fecha_fin=\"+\$('#cboFechaFin').val()+\"&horaInicio=\"+\$('.horaInicio').val()+\"&horaFin=\"+\$('.horaFin').val()+\"&anios=\"+\$('#cboAnios').val()+\"&mes=\"+\$('#cboMes').val()+\"&dias=\"+\$('#cboDias').val(),
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){
\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t
            }
        });
\t}
\tfunction eliminaHora(id){
\t\t\$.ajax({
            url:\"/usuario_no_disponible/\"+id+\"/delete\",
            type: \"post\",
            dataType: \"html\",
           cache: false,
            contentType: false,
            processData: false,
            async: true,
            success:function(data){
\t\t\t\t\$(\"#fechas\").html(data);
\t\t\t\t
            }
        });
\t}
        </script>
    

{% endblock %}
", "abogados/edit.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\abogados\\edit.html.twig");
    }
}
