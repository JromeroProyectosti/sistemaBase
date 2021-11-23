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

/* panel/aprobaciones/detallefpr.html.twig */
class __TwigTemplate_46580a3a074f70bb3e6611c88039ca985fcf2dc28064d4be7ae35c62cee6652d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/detallefpr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/detallefpr.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\">Validar ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 3, $this->source); })()), "tipo", [], "any", false, false, false, 3), "nombre", [], "any", false, false, false, 3), "html", null, true);
        echo " N° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 3, $this->source); })()), "numero", [], "any", false, false, false, 3), "html", null, true);
        echo " </h5>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row\">
            <div class=\"col-12\">
                <small class=\"text-muted\">Observación</small><br>
                <label>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 9, $this->source); })()), "observacion", [], "any", false, false, false, 9), "html", null, true);
        echo "</label>
            </div>
                        
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha registro</small><br>
                <label>";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 14, $this->source); })()), "fechaRegistro", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 14, $this->source); })()), "fechaRegistro", [], "any", false, false, false, 14), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha inicio</small><br>
                <label>";
        // line 18
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 18, $this->source); })()), "fechaInicio", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 18, $this->source); })()), "fechaInicio", [], "any", false, false, false, 18), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha fin</small><br>
                <label>";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 22, $this->source); })()), "fechaFin", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 22, $this->source); })()), "fechaFin", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Estado</small><br>
                <label>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 26, $this->source); })()), "estado", [], "any", false, false, false, 26), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Monto</small><br>
                <label>\$";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 30, $this->source); })()), "monto", [], "any", false, false, false, 30)), "html", null, true);
        echo "</label>
            </div>

        </div>
\t\t<form id=\"form\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tBoleta
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tConcepto
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tDescripción
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tMonto
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 58
        $context["total"] = 0;
        // line 59
        echo "\t\t\t\t\t\t";
        $context["i"] = 0;
        // line 60
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 60, $this->source); })()), "rendicionDetalles", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 61
            echo "\t\t\t\t\t\t";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["detalle"], "monto", [], "any", false, false, false, 61));
            // line 62
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" id=\"linea\" checked>
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" name=\"detalle[]\" id=\"detalle";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"aprobado[]\" id=\"aprobado";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "boleta", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "concepto", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "descripcion", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "monto", [], "any", false, false, false, 72)), "html", null, true);
            echo "
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "monto", [], "any", false, false, false, 73), "html", null, true);
            echo "\" id=\"monto";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"observacion[]\" class=\"form-control\" placeholder=\"Observación\">\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            // line 82
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 82, $this->source); })()) + 1);
            // line 83
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Gastos
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"neto\">
\t\t\t\t\t\t\t\t\$";
        // line 96
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 96, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Solicitado
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"solicitado\">
\t\t\t\t\t\t\t\t\$";
        // line 108
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 108, $this->source); })()), "monto", [], "any", false, false, false, 108)), "html", null, true);
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <small id=\"leyenda-total\">
\t\t\t\t\t\t\t\t";
        // line 115
        $context["resta"] = (twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 115, $this->source); })()), "monto", [], "any", false, false, false, 115) - (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 115, $this->source); })()));
        // line 116
        echo "
\t\t\t\t\t\t\t\t";
        // line 117
        if ((0 <= twig_compare((isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 117, $this->source); })()), 0))) {
            // line 118
            echo "\t\t\t\t\t\t\t\tDevolver
\t\t\t\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t\t\t";
            $context["resta"] = ((isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 120, $this->source); })()) *  -1);
            // line 121
            echo "\t\t\t\t\t\t\t\tPagar
\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"total\">

\t\t\t\t\t\t\t\t\$";
        // line 127
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 127, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t</form>
       

    </div>
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["ruta_new"]) || array_key_exists("ruta_new", $context) ? $context["ruta_new"] : (function () { throw new RuntimeError('Variable "ruta_new" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "?aprueba=1')\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 139, $this->source); })()), "Validar Solicitud")) : ("Validar Solicitud")), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
\t</div>

\t<script>
\t\t\$(\"input[id=linea]\").click(function(){
\t\t\tvar total=0;
\t\t\t
\t\t\t\$(\"input[id=linea]\").each(function (index) {  
\t\t\t\t
                    if(\$(this).is(':checked'))
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#aprobado\"+\$(this).val()).val(1);
\t\t\t\t\t\ttotal += eval(\$(\"#monto\"+\$(this).val()).val());
                          
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#aprobado\"+\$(this).val()).val(0);
\t\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$(\"#neto\").html(\"\$\"+numeral(total).format('0,0'));
\t\t\tif((";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 160, $this->source); })()), "monto", [], "any", false, false, false, 160), "html", null, true);
        echo "-total)>=0){
\t\t\t\t\$(\"#total\").html(\"\$\"+numeral(";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 161, $this->source); })()), "monto", [], "any", false, false, false, 161), "html", null, true);
        echo "-total).format('0,0'));
\t\t\t\t\$(\"#leyenda-total\").html(\"Devolver\");
\t\t\t}else{
\t\t\t\t\$(\"#total\").html(\"\$\"+numeral((";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 164, $this->source); })()), "monto", [], "any", false, false, false, 164), "html", null, true);
        echo "-total)*-1).format('0,0'));
\t\t\t\t\$(\"#leyenda-total\").html(\"Pagar\");
\t\t\t}
\t\t\t


\t\t});
\t\t\t
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/aprobaciones/detallefpr.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  329 => 164,  323 => 161,  319 => 160,  293 => 139,  278 => 127,  272 => 123,  268 => 121,  265 => 120,  261 => 118,  259 => 117,  256 => 116,  254 => 115,  244 => 108,  229 => 96,  216 => 85,  209 => 83,  207 => 82,  193 => 73,  189 => 72,  184 => 70,  180 => 69,  176 => 68,  170 => 65,  164 => 64,  160 => 63,  157 => 62,  154 => 61,  149 => 60,  146 => 59,  144 => 58,  113 => 30,  106 => 26,  99 => 22,  92 => 18,  85 => 14,  77 => 9,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\">Validar {{ rendicion.tipo.nombre }} N° {{ rendicion.numero }} </h5>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row\">
            <div class=\"col-12\">
                <small class=\"text-muted\">Observación</small><br>
                <label>{{rendicion.observacion}}</label>
            </div>
                        
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha registro</small><br>
                <label>{{rendicion.fechaRegistro ? rendicion.fechaRegistro|date('Y-m-d H:i:s') : ''}}</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha inicio</small><br>
                <label>{{rendicion.fechaInicio ? rendicion.fechaInicio|date('Y-m-d H:i:s') : ''}}</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Fecha fin</small><br>
                <label>{{rendicion.fechaFin ? rendicion.fechaFin|date('Y-m-d H:i:s') : ''}}</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Estado</small><br>
                <label>{{rendicion.estado}}</label>
            </div>
            <div class=\"col-md-3 col-sm-12\">
                <small class=\"text-muted\">Monto</small><br>
                <label>\${{rendicion.monto|number_format}}</label>
            </div>

        </div>
\t\t<form id=\"form\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tBoleta
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tConcepto
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tDescripción
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tMonto
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% set total=0 %}
\t\t\t\t\t\t{% set i=0 %}
\t\t\t\t\t\t{% for detalle in rendicion.rendicionDetalles %}
\t\t\t\t\t\t{% set total = total + detalle.monto %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" value=\"{{detalle.id}}\" id=\"linea\" checked>
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{detalle.id}}\" name=\"detalle[]\" id=\"detalle{{detalle.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"aprobado[]\" id=\"aprobado{{detalle.id}}\">
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>{{detalle.boleta}}</td>
\t\t\t\t\t\t\t<td>{{detalle.concepto}}</td>
\t\t\t\t\t\t\t<td>{{detalle.descripcion}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{detalle.monto|number_format}}
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{detalle.monto}}\" id=\"monto{{detalle.id}}\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"observacion[]\" class=\"form-control\" placeholder=\"Observación\">\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% set i=i+1 %}

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Gastos
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"neto\">
\t\t\t\t\t\t\t\t\${{total|number_format}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Solicitado
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"solicitado\">
\t\t\t\t\t\t\t\t\${{rendicion.monto|number_format}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <small id=\"leyenda-total\">
\t\t\t\t\t\t\t\t{% set resta=rendicion.monto-total %}

\t\t\t\t\t\t\t\t{% if resta>=0 %}
\t\t\t\t\t\t\t\tDevolver
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set resta=resta*-1 %}
\t\t\t\t\t\t\t\tPagar
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"total\">

\t\t\t\t\t\t\t\t\${{resta|number_format}}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t</form>
       

    </div>
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('{{ruta_new}}?aprueba=1')\">{{ button_label|default('Validar Solicitud') }}</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
\t</div>

\t<script>
\t\t\$(\"input[id=linea]\").click(function(){
\t\t\tvar total=0;
\t\t\t
\t\t\t\$(\"input[id=linea]\").each(function (index) {  
\t\t\t\t
                    if(\$(this).is(':checked'))
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#aprobado\"+\$(this).val()).val(1);
\t\t\t\t\t\ttotal += eval(\$(\"#monto\"+\$(this).val()).val());
                          
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#aprobado\"+\$(this).val()).val(0);
\t\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$(\"#neto\").html(\"\$\"+numeral(total).format('0,0'));
\t\t\tif(({{rendicion.monto}}-total)>=0){
\t\t\t\t\$(\"#total\").html(\"\$\"+numeral({{rendicion.monto}}-total).format('0,0'));
\t\t\t\t\$(\"#leyenda-total\").html(\"Devolver\");
\t\t\t}else{
\t\t\t\t\$(\"#total\").html(\"\$\"+numeral(({{rendicion.monto}}-total)*-1).format('0,0'));
\t\t\t\t\$(\"#leyenda-total\").html(\"Pagar\");
\t\t\t}
\t\t\t


\t\t});
\t\t\t
\t</script>
{% endblock %}", "panel/aprobaciones/detallefpr.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel\\aprobaciones\\detallefpr.html.twig");
    }
}
