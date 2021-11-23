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

/* panel_abogado/contrata.html.twig */
class __TwigTemplate_59e0f69752423d39dc1c53c1e094ae2d6e0c965e588fcfbfc46b713628a07c8e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/contrata.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/contrata.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validarut()"]]);
        echo "
<hr>
<h4>Datos Cliente</h4>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Nombre</small>
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Rut *</small>
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "rut", [], "any", false, false, false, 12), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut", "autocomplete" => "ÑÖcompletes", "required" => true]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Email *</small>
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes", "required" => true]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Sexo *</small>
\t\t<select name=\"cboSexo\" required class=\"form-control\">
            <option></option>
            <option value=\"Masculino\">Masculino</option>
            <option value=\"Femenino\">Femenino</option>
        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Nacionalidad *</small>
\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "pais", [], "any", false, false, false, 28), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Region *</small>
        <select name=\"cboRegion\" class=\"form-control\" onchange=\"javascript:getCiudades(this.value)\">
        <option></option>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regiones"]) || array_key_exists("regiones", $context) ? $context["regiones"] : (function () { throw new RuntimeError('Variable "regiones" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 36
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Ciudad *</small>
\t\t<div id=\"cciudad\"></div>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Comuna *</small>
\t\t<div id=\"ccomuna\"></div>
    </div>
    <div class=\"col-sm-12 col-md-6\">
        <small class=\"text-muted\">Dirección *</small>
\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "direccion", [], "any", false, false, false, 50), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Telefono *</small>
\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "telefono", [], "any", false, false, false, 55), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes", "required" => true]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Telefono recado</small>
\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 59), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Estado Civil *</small>
\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "estadoCivil", [], "any", false, false, false, 63), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Vivienda</small>
\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vivienda", [], "any", false, false, false, 67), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Vehiculo</small>
\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vehiculo", [], "any", false, false, false, 71), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Situación Laboral *</small>
\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "situacionLaboral", [], "any", false, false, false, 75), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Clave única</small>
\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "claveUnica", [], "any", false, false, false, 79), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Reunion</small>
\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "reunion", [], "any", false, false, false, 83), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
    </div>
</div>
<hr>
<h4>Contrato</h4>
<div class=\"row\">

    
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Sucursal *</small>
        <select name=\"cboSucursal\" id=\"sucursal\" required class=\"form-control\">
            <option value=\"\"></option>
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sucursales"]) || array_key_exists("sucursales", $context) ? $context["sucursales"] : (function () { throw new RuntimeError('Variable "sucursales" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 97
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "nombre", [], "any", false, false, false, 97), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Tramitador *</small>
        <select name=\"cboTramitador\" id=\"tramitador\" required class=\"form-control\">
            <option value=\"\"></option>
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tramitadores"]) || array_key_exists("tramitadores", $context) ? $context["tramitadores"] : (function () { throw new RuntimeError('Variable "tramitadores" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tramitador"]) {
            // line 106
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "nombre", [], "any", false, false, false, 106), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tramitador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Monto nivel de deuda</small>
\t\t";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 112), 'row', ["label" => false, "attr" => ["class" => "form-control nivel-deuda", "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Monto contrato *</small>
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "MontoContrato", [], "any", false, false, false, 116), 'row', ["label" => false, "attr" => ["class" => "form-control monto-contrato number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
        <strong><label id=\"m-monto-contrato\"></label></strong>
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <div class=\"row\"><small class=\"text-muted\">Abono *</small>
        
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "isAbono", [], "any", false, false, false, 123), 'row', ["label" => false, "attr" => ["class" => " chk-bono"]]);
        echo "</div>
        
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "primeraCuota", [], "any", false, false, false, 125), 'row', ["label" => false, "attr" => ["class" => "form-control primera-cuota number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
        
        <strong><label id=\"m-primera-cuota\"></label></strong>
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-cuotas\" >Cuotas *</small>
\t\t";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "cuotas", [], "any", false, false, false, 132), 'row', ["label" => false, "attr" => ["class" => "form-control cuotas number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-valor-cuota\">Valor cuota *</small>
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "valorCuota", [], "any", false, false, false, 137), 'row', ["label" => false, "attr" => ["class" => "form-control valor-cuota", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
        <strong><label id=\"m-valor-cuota\"></label></strong>
    </div>
    

    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Dias de Pago *</small>
        <br>
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diasPagos"]) || array_key_exists("diasPagos", $context) ? $context["diasPagos"] : (function () { throw new RuntimeError('Variable "diasPagos" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
            // line 147
            echo "            <label class=\"btn btn-success 
            ";
            // line 148
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 148, $this->source); })()), "diaPago", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 148)))) {
                // line 149
                echo "            active
            ";
            }
            // line 150
            echo "\">
                <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 151), "html", null, true);
            echo "\" autocomplete=\"off\" 
                ";
            // line 152
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 152, $this->source); })()), "diaPago", [], "any", false, false, false, 152), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 152)))) {
                // line 153
                echo "                            checked
                ";
            }
            // line 155
            echo "                 value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 155), "html", null, true);
            echo "\" required>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 155), "html", null, true);
            echo "
            </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "        </div>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-mes-pago\">Mes Primer Pago</small>
        <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\">    
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted  \">Vigencia en Meses</small>
        <p>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 166, $this->source); })()), "vigencia", [], "any", false, false, false, 166), "html", null, true);
        echo "</p>
        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "vigencia", [], "any", false, false, false, 167), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
        echo "

        
    </div>
    
</div>

<hr>

<h4>Estrategia Juridica</h4>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-1\">*
            </Div>
            <div class=\"col-sm-12 col-md-3\">
                <select name=\"cboMateria\" class=\"form-control cbomateria\" placeholder=\"Materias\">
                    <option disabled selected>Selecciona Materias</option>
                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuenta_materias"]) || array_key_exists("cuenta_materias", $context) ? $context["cuenta_materias"] : (function () { throw new RuntimeError('Variable "cuenta_materias" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta_materia"]) {
            // line 184
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cuenta_materia"], "materia", [], "any", false, false, false, 184), "id", [], "any", false, false, false, 184), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cuenta_materia"], "materia", [], "any", false, false, false, 184), "nombre", [], "any", false, false, false, 184), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta_materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                </select>
            </div>    
            <div class=\"col-sm-12 col-md-3 submateria\">
                <select name=\"cboSubMateria\" class=\"form-control cbosubmateria\" onchange=\"javascript:cambiaSubmateria(this.value)\" >
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-3 escritos\">
               <select name=\"cboEscritos\" class=\"form-control cboescritos select2\"  multiple=\"multiple\" data-placeholder=\"Selecciona Escritos\" style=\"width: 100%;\">
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarEstrategiaJuridica()\"><i class=\"fas fa-plus\"></i></button>

            </div>
            
    
        </div>
        <div class=\"card-body\" >
             <div id=\"estrategiasJuridicas\">
             ";
        // line 207
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207))) {
            // line 208
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 208, $this->source); })()), "contratoMees", [], "any", false, false, false, 208));
            foreach ($context['_seq'] as $context["_key"] => $context["contratoMee"]) {
                // line 209
                echo "                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-1\">
                    </Div>
                    <div class=\"col-sm-12 col-md-3\">";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 212), "materiaEstrategia", [], "any", false, false, false, 212), "materia", [], "any", false, false, false, 212), "nombre", [], "any", false, false, false, 212), "html", null, true);
                echo "</div>
                    <div class=\"col-sm-12 col-md-3\"> ";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 213), "materiaEstrategia", [], "any", false, false, false, 213), "estrategiaJuridica", [], "any", false, false, false, 213), "nombre", [], "any", false, false, false, 213), "html", null, true);
                echo " </div>
                    <div class=\"col-sm-12 col-md-3\"> ";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 214), "escritura", [], "any", false, false, false, 214), "nombre", [], "any", false, false, false, 214), "html", null, true);
                echo "</div>
                </div>
                <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratoMee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                
        
             ";
        }
        // line 221
        echo "             </div>
             <div class=\"loading\"></div>
        </div>  

<hr>


<h4>Servicios</h4>

        <div class=\"row\">

            <div class=\"col-sm-12 col-md-1\">*
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <input type=\"text\" name=\"nombreRol\" class=\"form-control nombre-rol\" placeholder=\"Rol\"> 
            </div>    
            <div class=\"col-sm-12 col-md-3\">
                <input type=\"text\" name=\"institucionAcreedora\" class=\"form-control institucion\" placeholder=\"Acreedor o Parte\"> 
            </div>   
            <div class=\"col-sm-12 col-md-3\">
                
                <select name=\"juzgado\" class=\"form-control juzgado\">
                    <option value=\"\"> Seleccione Juzgado </option>
                    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juzgados"]) || array_key_exists("juzgados", $context) ? $context["juzgados"] : (function () { throw new RuntimeError('Variable "juzgados" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juzgado"]) {
            // line 245
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "id", [], "any", false, false, false, 245), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "nombre", [], "any", false, false, false, 245), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juzgado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                </select> 
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                ";
        // line 250
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 250, $this->source); })()), "id", [], "any", false, false, false, 250))) {
            // line 251
            echo "                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarRol()\"><i class=\"fas fa-plus\"></i></button>

                <script>
                    \$.ajax({
                        url:\"";
            // line 255
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_new_rol");
            echo "\",
                        type: \"get\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success:function(data){
                            \$(\"#contratoRoles\").html(data);
                        }
                
                    });
                </script>
                ";
        } else {
            // line 269
            echo "                <script>
                    \$.ajax({
                        url:\"";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "mode" => "view"]), "html", null, true);
            echo "\",

                        type: \"get\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success:function(data){
                            \$(\"#contratoRoles\").html(data);
                            \$('.nombre-rol').val(\"\");
                            \$('.institucion').val(\"\");
                            \$('.juzgado').val(\"\");
                        }
                
                    });
            
                </script>
                ";
        }
        // line 290
        echo "            </div>
            
    
        </div>
    <div class=\"card-body\" id=\"acreedorVacio\">
       
    </div>
    <div class=\"card-body\" id=\"contratoRoles\">
       
    </div>

<!--    
<input type=\"hidden\" id=\"Institucion\" value=\"1\">
-->

    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        
        ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "observacion", [], "any", false, false, false, 308), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
    </div>

";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "fechaPrimeraCuota", [], "any", false, false, false, 311), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
        echo "
";
        // line 312
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312))) {
            // line 313
            echo "<button class=\"btn btn-primary\">Preparar Contrato</button>
";
        }
        // line 315
        echo "<script>
    \$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
            cambiaAcreedores(";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 320, $this->source); })()), "cuenta", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
        echo ");
\t\t});
    \$('.primera-cuota').css(\"visibility\", \"hidden\");
    \$('.cuotas').change(function(){
        recalcula();
    });
    \$('.monto-contrato').change(function(){
        recalcula();
        \$(\"#m-monto-contrato\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
    \$('.primera-cuota').change(function(){
        recalcula();
        \$(\"#m-primera-cuota\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
    \$('.interes').change(function(){
        recalcula();
    });
    function recalcula()
    {
        var _montoContrato=\$('.monto-contrato').val();
        var _primeraCuota=\$('.primera-cuota').val();
        console.log(_montoContrato);
        console.log(_primeraCuota);
        var montoContrato=parseInt( _montoContrato)-parseInt(_primeraCuota);
        console.log(montoContrato);
        var cuotas=parseInt(\$('.cuotas').val());
        var interes=0;
        if(cuotas < 1){
            var valorCuota=0;
        }else{
            var valorCuota=(montoContrato+(montoContrato/100*interes))/cuotas;
        }
        \$('.valor-cuota').val(Math.round(valorCuota));
        \$(\"#m-valor-cuota\").html(\$.number( \$('.valor-cuota').val(), 0, ',', '.' ));
    }
    \$(document).ready(function(){
        const \$escritos = \$(\".cboescritos\");


        \$('.monto-contrato').val('0');
        \$('.cuotas').val('1');
        \$('.primera-cuota').val(0);
        \$(\".fecha-primera-cuota\").val(moment().format('YYYY-MM-DD'));
        \$(\".format-rut\").rut();
        \$(\".number\").inputmask({
            mask: \"9\",
            repeat:20,
        });

        //\$('.monto-contrato').inputmask(\"999.999.999\",{ placeholder:\" \",numericInput: true, clearMaskOnLostFocus: true ,showMaskOnFocus: true});
        
       
        \$('.primer-pago').daterangepicker({
            \"singleDatePicker\": true,
            \"drops\": \"up\",
            \"defaultDate\": \"";
        // line 375
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 375, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 375), "Y-m-d"), "html", null, true);
        echo "\",
            \"minDate\":\"";
        // line 376
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 376, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 376), "Y-m-d"), "html", null, true);
        echo "\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        });

        \$('.cbomateria').on('change',function(){
            \$.ajax({
                url:\"/estrategia_juridica/\"+\$(this).val()+\"/combo\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\".cbosubmateria\").html(data);
                    \$(\".loading\").html('');
                }

            });
        });

    
    });

    var mee_val;
    var x=0;
    function cambiaEscritos(valor){
        mee_val=valor;
       
    }
    function agregarEstrategiaJuridica(){
        
        var hayEstrategias=false;

        \$(\".cboescritos option:selected\").each(function() {\t

            hayEstrategias=true;
            
            mee_val\t=\$(this).attr('value');
            \$.ajax({
                url:\"/mee/\"+mee_val+\"/list\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                        
                        x++;
                        var fieldHTML = '<div class=\"row div'+x+'\"><div class=\"col-sm-12 col-md-1\"><input type=\"hidden\" value=\"'+mee_val+'\" name=\"mee[]\"></Div>';
                        fieldHTML+=data;
                        fieldHTML+='<div class=\"col-sm-12 col-md-1\"><button type=\"button\" class=\"btn btn-danger remove_button\" onclick=\"javascript:borrarItem('+x+')\" ><i class=\"fas fa-trash\"></i></button> </div> <hr></div>';
                        fieldHTML+='<div class=\"col-12\"><hr></div>';

                        \$(\"#estrategiasJuridicas\").append(fieldHTML); // Add field html
                        
                    \$(\".loading\").html(' ');
                    
                }
            });
            \$(\".cbosubmateria\").empty();
            \$(\".cboescritos\").empty();
            \$('.cbomateria').val(0);
            
        });
        
        if(!hayEstrategias){
            alert(\"Debe seleccionar al menos un escrito\");
            \$(\".cbosubmateria\").focus();
        }
    
    }
    function borrarItem(x){
     
        \$('.div'+x).remove(); //Remove field html
        
    }
     function cambiaSubmateria(valor){
        
        \$.ajax({
            url:\"/escritura/\"+valor+\"/combo\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\".cboescritos\").empty()
                \$(\".cboescritos\").append(data);
                \$(\".loading\").html('');
            }

        });
    }
    function agregarRol(){
        \$.ajax({
            url:\"";
        // line 491
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_new_rol");
        echo "\",
            type: \"get\",
            data:\"nombre=\"+\$('.nombre-rol').val()+\"&institucion=\"+\$('.institucion').val()+\"&juzgado=\"+\$('.juzgado').val(),
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".btn-agregar\").attr(\"disabled\", true);
                \$(\"#contratoRoles\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');

            },
            success:function(data){
                \$(\"#contratoRoles\").html(data);
                \$('.nombre-rol').val(\"\");
                \$('.institucion').val(\"\");
                \$('.juzgado').val(\"\");
                \$(\".btn-agregar\").attr(\"disabled\", false);
            }
    
        });
    }
    function eliminarRol(id){
        \$.ajax({
            url:\"/panel_abogado/\"+id+\"/del_rol\",
            type: \"DELETE\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#contratoRoles\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                
            },
            success:function(data){
                \$(\"#contratoRoles\").html(data);
            }
    
        });
    }
    function validarut(){
        \$('button').attr(\"disabled\", true);
        //\$('.primera-cuota,.valor-cuota,.monto-contrato,.nivel-deuda').inputmask('remove');
        if(\$(\"#Institucion\").val()==0){
            alert(\"Debe ingresar almenos una Insitution Acreedora\");
            \$(\".nombre-rol\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }
        if(x==0){
            alert(\"Debe ingresar almenos una Estrategia\");
            \$(\".materia\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }

        if(\$(\".monto-contrato\").val()<=0){
            alert(\"Debe ingresar un monto\");
            \$(\".monto-contrato\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }
        if(\$.validateRut(\$(\".format-rut\").val())) {
            return true;
        }
        alert(\"Rut no valido\");

        \$(\".format-rut\").focus();
        \$('button').attr(\"disabled\", false);
        

        return false;
    }
    \$('.datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"drops\": \"up\",
        \"minDate\": moment().format(\"YYYY-MM-DD\"),
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
        
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        
    });
    
    \$(\".chk-bono\").change(function(){
        
        if(\$(this).prop( \"checked\" )){
            \$('.primera-cuota').css(\"visibility\", \"visible\");
            \$('.t-cuotas').html('Cuotas restantes *');
            \$('.t-valor-cuota').html('Valor Cuotas Restantes *');
            \$('.t-mes-pago').html('Mes Segundo Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"minDate\": \"";
        // line 590
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 590, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 590), "Y-m-d"), "html", null, true);
        echo "\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });

        }else{
            \$('.primera-cuota').css(\"visibility\", \"hidden\");
            \$('.primera-cuota').val(0);
            \$('#m-primera-cuota').html(\"\");
            \$('.t-cuotas').html('Cuotas *');
            \$('.t-valor-cuota').html('Valor Cuotas *');
            \$('.t-mes-pago').html('Mes Primer Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"defaultDate\": \"";
        // line 609
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 609, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 609), "Y-m-d"), "html", null, true);
        echo "\",
                \"minDate\": \"";
        // line 610
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 610, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 610), "Y-m-d"), "html", null, true);
        echo "\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });
        }
        recalcula();
    });
    \$('.primer-pago').inputmask(\"9999-99\");

    function getCiudades(region){
            \$.ajax({
                url:\"/contrato/\"+region+\"/ciudad\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#cciudad\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#cciudad\").html(data);
                }
    
            });
        }
    function getComunas(comuna){
        \$.ajax({
            url:\"/contrato/\"+comuna+\"/comuna\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#ccomuna\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#ccomuna\").html(data);
            }

        });
    }

  function cambiamateria(valor){
        
        \$.ajax({
            url:\"/materia/\"+valor+\"/combo\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\".cbomateria\").empty()
                \$(\".cbomateria\").append(data);
                \$(\".loading\").html('');
                \$(\".cbosubmateria\").empty();
                \$(\".cboescritos\").empty();
                \$(\"#estrategiasJuridicas\").empty();
            }


        });
    }

    function cambiaAcreedores(cuenta){

        if(cuenta == 7){
            \$(\"#acreedorVacio\").html('<input type=\"hidden\" id=\"Institucion\" value=\"1\">');
        }else{
             \$(\"#acreedorVacio\").html('');
        }
        \$.ajax({
                url:\"/juzgado_cuenta/\"+cuenta+\"/combo\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    //\$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\".juzgado\").html(data);
                    //\$(\".loading\").html('');
                }

            });

    }
    
</script>
";
        // line 718
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_abogado/contrata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  994 => 718,  883 => 610,  879 => 609,  857 => 590,  755 => 491,  637 => 376,  633 => 375,  575 => 320,  568 => 315,  564 => 313,  562 => 312,  558 => 311,  552 => 308,  532 => 290,  510 => 271,  506 => 269,  489 => 255,  483 => 251,  481 => 250,  476 => 247,  465 => 245,  461 => 244,  436 => 221,  431 => 218,  421 => 214,  417 => 213,  413 => 212,  408 => 209,  403 => 208,  401 => 207,  378 => 186,  367 => 184,  363 => 183,  344 => 167,  340 => 166,  330 => 158,  318 => 155,  314 => 153,  312 => 152,  308 => 151,  305 => 150,  301 => 149,  299 => 148,  296 => 147,  292 => 146,  280 => 137,  272 => 132,  262 => 125,  257 => 123,  247 => 116,  240 => 112,  234 => 108,  223 => 106,  219 => 105,  211 => 99,  200 => 97,  196 => 96,  180 => 83,  173 => 79,  166 => 75,  159 => 71,  152 => 67,  145 => 63,  138 => 59,  131 => 55,  123 => 50,  109 => 38,  98 => 36,  94 => 35,  84 => 28,  69 => 16,  62 => 12,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr':{'onsubmit':'return validarut()'}})  }}
<hr>
<h4>Datos Cliente</h4>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Nombre</small>
\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Rut *</small>
\t\t{{form_row(form.rut,{'label':false,'attr':{'class':'form-control format-rut','autocomplete':\"ÑÖcompletes\",'required':true}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Email *</small>
\t\t{{form_row(form.email,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\",'required':true}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Sexo *</small>
\t\t<select name=\"cboSexo\" required class=\"form-control\">
            <option></option>
            <option value=\"Masculino\">Masculino</option>
            <option value=\"Femenino\">Femenino</option>
        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Nacionalidad *</small>
\t\t{{form_row(form.pais,{'label':false,'attr':{'class':'form-control','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Region *</small>
        <select name=\"cboRegion\" class=\"form-control\" onchange=\"javascript:getCiudades(this.value)\">
        <option></option>
        {% for region in regiones %}
        <option value=\"{{region.id}}\" >{{region.nombre}}</option>
        {% endfor %}
\t\t</select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Ciudad *</small>
\t\t<div id=\"cciudad\"></div>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Comuna *</small>
\t\t<div id=\"ccomuna\"></div>
    </div>
    <div class=\"col-sm-12 col-md-6\">
        <small class=\"text-muted\">Dirección *</small>
\t\t{{form_row(form.direccion,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Telefono *</small>
\t\t{{form_row(form.telefono,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\",'required':true}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Telefono recado</small>
\t\t{{form_row(form.telefonoRecado,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Estado Civil *</small>
\t\t{{form_row(form.estadoCivil,{'label':false,'attr':{'class':'form-control','required':true}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Vivienda</small>
\t\t{{form_row(form.vivienda,{'label':false,'attr':{'class':'form-control'}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Vehiculo</small>
\t\t{{form_row(form.vehiculo,{'label':false,'attr':{'class':'form-control'}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Situación Laboral *</small>
\t\t{{form_row(form.situacionLaboral,{'label':false,'attr':{'class':'form-control','required':true}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Clave única</small>
\t\t{{form_row(form.claveUnica,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Reunion</small>
\t\t{{form_row(form.reunion,{'label':false,'attr':{'class':'form-control'}})}}
    </div>
</div>
<hr>
<h4>Contrato</h4>
<div class=\"row\">

    
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Sucursal *</small>
        <select name=\"cboSucursal\" id=\"sucursal\" required class=\"form-control\">
            <option value=\"\"></option>
            {% for sucursal in sucursales %}
                <option value=\"{{sucursal.id}}\">{{sucursal.nombre}}</option>
            {% endfor %}
        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Tramitador *</small>
        <select name=\"cboTramitador\" id=\"tramitador\" required class=\"form-control\">
            <option value=\"\"></option>
            {% for tramitador in tramitadores %}
                <option value=\"{{tramitador.id}}\">{{tramitador.nombre}}</option>
            {% endfor %}
        </select>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Monto nivel de deuda</small>
\t\t{{form_row(form.montoNivelDeuda,{'label':false,'attr':{'class':'form-control nivel-deuda','autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted\">Monto contrato *</small>
        {{form_row(form.MontoContrato,{'label':false,'attr':{'class':'form-control monto-contrato number','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
        <strong><label id=\"m-monto-contrato\"></label></strong>
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <div class=\"row\"><small class=\"text-muted\">Abono *</small>
        
        {{form_row(form.isAbono,{'label':false,'attr':{'class':' chk-bono'}})}}</div>
        
        {{form_row(form.primeraCuota,{'label':false,'attr':{'class':'form-control primera-cuota number','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
        
        <strong><label id=\"m-primera-cuota\"></label></strong>
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-cuotas\" >Cuotas *</small>
\t\t{{form_row(form.cuotas,{'label':false,'attr':{'class':'form-control cuotas number','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
    </div>
    
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-valor-cuota\">Valor cuota *</small>
        {{form_row(form.valorCuota,{'label':false,'attr':{'class':'form-control valor-cuota','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
        <strong><label id=\"m-valor-cuota\"></label></strong>
    </div>
    

    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Dias de Pago *</small>
        <br>
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
            {% for diasPago in diasPagos %}
            <label class=\"btn btn-success 
            {% if contrato.diaPago == diasPago.dias %}
            active
            {% endif %}\">
                <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago{{diasPago.dias}}\" autocomplete=\"off\" 
                {% if contrato.diaPago == diasPago.dias %}
                            checked
                {% endif %}
                 value=\"{{diasPago.dias}}\" required>{{diasPago.nombre}}
            </label>
            {% endfor %}
        </div>
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted t-mes-pago\">Mes Primer Pago</small>
        <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\">    
    </div>
    <div class=\"col-sm-12 col-md-3\">
        <small class=\"text-muted  \">Vigencia en Meses</small>
        <p>{{contrato.vigencia}}</p>
        {{form_row(form.vigencia,{'label':false,'attr':{'class':'form-control','style':'visibility:hidden'}})}}

        
    </div>
    
</div>

<hr>

<h4>Estrategia Juridica</h4>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-1\">*
            </Div>
            <div class=\"col-sm-12 col-md-3\">
                <select name=\"cboMateria\" class=\"form-control cbomateria\" placeholder=\"Materias\">
                    <option disabled selected>Selecciona Materias</option>
                    {% for cuenta_materia in cuenta_materias %}
                    <option value=\"{{ cuenta_materia.materia.id }}\">{{ cuenta_materia.materia.nombre }}</option>
                    {% endfor %}
                </select>
            </div>    
            <div class=\"col-sm-12 col-md-3 submateria\">
                <select name=\"cboSubMateria\" class=\"form-control cbosubmateria\" onchange=\"javascript:cambiaSubmateria(this.value)\" >
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-3 escritos\">
               <select name=\"cboEscritos\" class=\"form-control cboescritos select2\"  multiple=\"multiple\" data-placeholder=\"Selecciona Escritos\" style=\"width: 100%;\">
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarEstrategiaJuridica()\"><i class=\"fas fa-plus\"></i></button>

            </div>
            
    
        </div>
        <div class=\"card-body\" >
             <div id=\"estrategiasJuridicas\">
             {% if contrato.id is not null %}
                {% for contratoMee in contrato.contratoMees %}
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-1\">
                    </Div>
                    <div class=\"col-sm-12 col-md-3\">{{contratoMee.mee.materiaEstrategia.materia.nombre}}</div>
                    <div class=\"col-sm-12 col-md-3\"> {{ contratoMee.mee.materiaEstrategia.estrategiaJuridica.nombre }} </div>
                    <div class=\"col-sm-12 col-md-3\"> {{ contratoMee.mee.escritura.nombre}}</div>
                </div>
                <hr>
                {% endfor %}
                
        
             {% endif %}
             </div>
             <div class=\"loading\"></div>
        </div>  

<hr>


<h4>Servicios</h4>

        <div class=\"row\">

            <div class=\"col-sm-12 col-md-1\">*
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <input type=\"text\" name=\"nombreRol\" class=\"form-control nombre-rol\" placeholder=\"Rol\"> 
            </div>    
            <div class=\"col-sm-12 col-md-3\">
                <input type=\"text\" name=\"institucionAcreedora\" class=\"form-control institucion\" placeholder=\"Acreedor o Parte\"> 
            </div>   
            <div class=\"col-sm-12 col-md-3\">
                
                <select name=\"juzgado\" class=\"form-control juzgado\">
                    <option value=\"\"> Seleccione Juzgado </option>
                    {% for juzgado in juzgados %}
                        <option value=\"{{juzgado.id}}\">{{juzgado.nombre}}</option>
                    {% endfor %}
                </select> 
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                {% if contrato.id is null %}
                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarRol()\"><i class=\"fas fa-plus\"></i></button>

                <script>
                    \$.ajax({
                        url:\"{{path('panel_abogado_new_rol')}}\",
                        type: \"get\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success:function(data){
                            \$(\"#contratoRoles\").html(data);
                        }
                
                    });
                </script>
                {% else %}
                <script>
                    \$.ajax({
                        url:\"{{path('contrato_new_rol',{'id':contrato.id,'mode':'view'})}}\",

                        type: \"get\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success:function(data){
                            \$(\"#contratoRoles\").html(data);
                            \$('.nombre-rol').val(\"\");
                            \$('.institucion').val(\"\");
                            \$('.juzgado').val(\"\");
                        }
                
                    });
            
                </script>
                {% endif %}
            </div>
            
    
        </div>
    <div class=\"card-body\" id=\"acreedorVacio\">
       
    </div>
    <div class=\"card-body\" id=\"contratoRoles\">
       
    </div>

<!--    
<input type=\"hidden\" id=\"Institucion\" value=\"1\">
-->

    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        
        {{form_row(form.observacion,{'label':false,'attr':{'class':'form-control','required':true}})}}
    </div>

{{form_row(form.fechaPrimeraCuota,{'label':false,'attr':{'class':'form-control','style':'visibility:hidden'}})}}
{% if contrato.id is null %}
<button class=\"btn btn-primary\">Preparar Contrato</button>
{% endif %}
<script>
    \$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
            cambiaAcreedores({{agenda.cuenta.id}});
\t\t});
    \$('.primera-cuota').css(\"visibility\", \"hidden\");
    \$('.cuotas').change(function(){
        recalcula();
    });
    \$('.monto-contrato').change(function(){
        recalcula();
        \$(\"#m-monto-contrato\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
    \$('.primera-cuota').change(function(){
        recalcula();
        \$(\"#m-primera-cuota\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
    \$('.interes').change(function(){
        recalcula();
    });
    function recalcula()
    {
        var _montoContrato=\$('.monto-contrato').val();
        var _primeraCuota=\$('.primera-cuota').val();
        console.log(_montoContrato);
        console.log(_primeraCuota);
        var montoContrato=parseInt( _montoContrato)-parseInt(_primeraCuota);
        console.log(montoContrato);
        var cuotas=parseInt(\$('.cuotas').val());
        var interes=0;
        if(cuotas < 1){
            var valorCuota=0;
        }else{
            var valorCuota=(montoContrato+(montoContrato/100*interes))/cuotas;
        }
        \$('.valor-cuota').val(Math.round(valorCuota));
        \$(\"#m-valor-cuota\").html(\$.number( \$('.valor-cuota').val(), 0, ',', '.' ));
    }
    \$(document).ready(function(){
        const \$escritos = \$(\".cboescritos\");


        \$('.monto-contrato').val('0');
        \$('.cuotas').val('1');
        \$('.primera-cuota').val(0);
        \$(\".fecha-primera-cuota\").val(moment().format('YYYY-MM-DD'));
        \$(\".format-rut\").rut();
        \$(\".number\").inputmask({
            mask: \"9\",
            repeat:20,
        });

        //\$('.monto-contrato').inputmask(\"999.999.999\",{ placeholder:\" \",numericInput: true, clearMaskOnLostFocus: true ,showMaskOnFocus: true});
        
       
        \$('.primer-pago').daterangepicker({
            \"singleDatePicker\": true,
            \"drops\": \"up\",
            \"defaultDate\": \"{{contrato.fechaCreacion|date('Y-m-d')}}\",
            \"minDate\":\"{{contrato.fechaCreacion|date('Y-m-d')}}\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        });

        \$('.cbomateria').on('change',function(){
            \$.ajax({
                url:\"/estrategia_juridica/\"+\$(this).val()+\"/combo\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\".cbosubmateria\").html(data);
                    \$(\".loading\").html('');
                }

            });
        });

    
    });

    var mee_val;
    var x=0;
    function cambiaEscritos(valor){
        mee_val=valor;
       
    }
    function agregarEstrategiaJuridica(){
        
        var hayEstrategias=false;

        \$(\".cboescritos option:selected\").each(function() {\t

            hayEstrategias=true;
            
            mee_val\t=\$(this).attr('value');
            \$.ajax({
                url:\"/mee/\"+mee_val+\"/list\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                        
                        x++;
                        var fieldHTML = '<div class=\"row div'+x+'\"><div class=\"col-sm-12 col-md-1\"><input type=\"hidden\" value=\"'+mee_val+'\" name=\"mee[]\"></Div>';
                        fieldHTML+=data;
                        fieldHTML+='<div class=\"col-sm-12 col-md-1\"><button type=\"button\" class=\"btn btn-danger remove_button\" onclick=\"javascript:borrarItem('+x+')\" ><i class=\"fas fa-trash\"></i></button> </div> <hr></div>';
                        fieldHTML+='<div class=\"col-12\"><hr></div>';

                        \$(\"#estrategiasJuridicas\").append(fieldHTML); // Add field html
                        
                    \$(\".loading\").html(' ');
                    
                }
            });
            \$(\".cbosubmateria\").empty();
            \$(\".cboescritos\").empty();
            \$('.cbomateria').val(0);
            
        });
        
        if(!hayEstrategias){
            alert(\"Debe seleccionar al menos un escrito\");
            \$(\".cbosubmateria\").focus();
        }
    
    }
    function borrarItem(x){
     
        \$('.div'+x).remove(); //Remove field html
        
    }
     function cambiaSubmateria(valor){
        
        \$.ajax({
            url:\"/escritura/\"+valor+\"/combo\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\".cboescritos\").empty()
                \$(\".cboescritos\").append(data);
                \$(\".loading\").html('');
            }

        });
    }
    function agregarRol(){
        \$.ajax({
            url:\"{{path('panel_abogado_new_rol')}}\",
            type: \"get\",
            data:\"nombre=\"+\$('.nombre-rol').val()+\"&institucion=\"+\$('.institucion').val()+\"&juzgado=\"+\$('.juzgado').val(),
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".btn-agregar\").attr(\"disabled\", true);
                \$(\"#contratoRoles\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');

            },
            success:function(data){
                \$(\"#contratoRoles\").html(data);
                \$('.nombre-rol').val(\"\");
                \$('.institucion').val(\"\");
                \$('.juzgado').val(\"\");
                \$(\".btn-agregar\").attr(\"disabled\", false);
            }
    
        });
    }
    function eliminarRol(id){
        \$.ajax({
            url:\"/panel_abogado/\"+id+\"/del_rol\",
            type: \"DELETE\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#contratoRoles\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                
            },
            success:function(data){
                \$(\"#contratoRoles\").html(data);
            }
    
        });
    }
    function validarut(){
        \$('button').attr(\"disabled\", true);
        //\$('.primera-cuota,.valor-cuota,.monto-contrato,.nivel-deuda').inputmask('remove');
        if(\$(\"#Institucion\").val()==0){
            alert(\"Debe ingresar almenos una Insitution Acreedora\");
            \$(\".nombre-rol\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }
        if(x==0){
            alert(\"Debe ingresar almenos una Estrategia\");
            \$(\".materia\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }

        if(\$(\".monto-contrato\").val()<=0){
            alert(\"Debe ingresar un monto\");
            \$(\".monto-contrato\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
        }
        if(\$.validateRut(\$(\".format-rut\").val())) {
            return true;
        }
        alert(\"Rut no valido\");

        \$(\".format-rut\").focus();
        \$('button').attr(\"disabled\", false);
        

        return false;
    }
    \$('.datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"drops\": \"up\",
        \"minDate\": moment().format(\"YYYY-MM-DD\"),
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
        
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        
    });
    
    \$(\".chk-bono\").change(function(){
        
        if(\$(this).prop( \"checked\" )){
            \$('.primera-cuota').css(\"visibility\", \"visible\");
            \$('.t-cuotas').html('Cuotas restantes *');
            \$('.t-valor-cuota').html('Valor Cuotas Restantes *');
            \$('.t-mes-pago').html('Mes Segundo Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"minDate\": \"{{contrato.fechaCreacion|date('Y-m-d')}}\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });

        }else{
            \$('.primera-cuota').css(\"visibility\", \"hidden\");
            \$('.primera-cuota').val(0);
            \$('#m-primera-cuota').html(\"\");
            \$('.t-cuotas').html('Cuotas *');
            \$('.t-valor-cuota').html('Valor Cuotas *');
            \$('.t-mes-pago').html('Mes Primer Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"defaultDate\": \"{{contrato.fechaCreacion|date('Y-m-d')}}\",
                \"minDate\": \"{{contrato.fechaCreacion|date('Y-m-d')}}\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });
        }
        recalcula();
    });
    \$('.primer-pago').inputmask(\"9999-99\");

    function getCiudades(region){
            \$.ajax({
                url:\"/contrato/\"+region+\"/ciudad\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#cciudad\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#cciudad\").html(data);
                }
    
            });
        }
    function getComunas(comuna){
        \$.ajax({
            url:\"/contrato/\"+comuna+\"/comuna\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#ccomuna\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#ccomuna\").html(data);
            }

        });
    }

  function cambiamateria(valor){
        
        \$.ajax({
            url:\"/materia/\"+valor+\"/combo\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\".cbomateria\").empty()
                \$(\".cbomateria\").append(data);
                \$(\".loading\").html('');
                \$(\".cbosubmateria\").empty();
                \$(\".cboescritos\").empty();
                \$(\"#estrategiasJuridicas\").empty();
            }


        });
    }

    function cambiaAcreedores(cuenta){

        if(cuenta == 7){
            \$(\"#acreedorVacio\").html('<input type=\"hidden\" id=\"Institucion\" value=\"1\">');
        }else{
             \$(\"#acreedorVacio\").html('');
        }
        \$.ajax({
                url:\"/juzgado_cuenta/\"+cuenta+\"/combo\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    //\$(\".loading\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\".juzgado\").html(data);
                    //\$(\".loading\").html('');
                }

            });

    }
    
</script>
{{ form_end(form) }}", "panel_abogado/contrata.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_abogado\\contrata.html.twig");
    }
}
