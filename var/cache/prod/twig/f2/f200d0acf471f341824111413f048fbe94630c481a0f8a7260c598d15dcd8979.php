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

/* contrato/_form.html.twig */
class __TwigTemplate_ed27ba9ed5f07bec761392e44d6024f59d034d54d591b274e1aa455d6be41c66 extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["onsubmit" => "return validarut()"]]);
        echo "
<div class=\"card\">
    <div class=\"card-body table-responsive pad\">
       
        <h4>Datos Cliente</h4>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nombre</small><br>
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", [], "any", false, false, false, 9), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Rut</small><br>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rut", [], "any", false, false, false, 14), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut", "autocomplete" => "ÑÖcompletes", "required" => true]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Email</small><br>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Dirección</small><br>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "direccion", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nacionalidad</small><br>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pais", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Ciudad</small><br>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ciudad", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Comuna</small><br>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comuna", [], "any", false, false, false, 39), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono</small><br>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono", [], "any", false, false, false, 44), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono Recado</small><br>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoRecado", [], "any", false, false, false, 49), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Estado Civil</small><br>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "estadoCivil", [], "any", false, false, false, 54), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vivienda</small>
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vivienda", [], "any", false, false, false, 59), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vehiculo</small>
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vehiculo", [], "any", false, false, false, 63), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Situación Laboral</small><br>
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "situacionLaboral", [], "any", false, false, false, 67), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
           
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Clave única</small>
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "claveUnica", [], "any", false, false, false, 73), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Reunión</small>
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reunion", [], "any", false, false, false, 77), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <h4>Datos Contrato</h4>
        <div class=\"row\">

            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Estrategia Juridica</small>
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "estrategiaJuridica", [], "any", false, false, false, 86), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Escritura</small>
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "escritura", [], "any", false, false, false, 90), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sucursal</small>
                <select name=\"cboSucursal\" id=\"sucursal\" required class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sucursales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 97
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\"
                        ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "sucursal", [], "any", false, true, false, 98), "id", [], "any", true, true, false, 98)) {
                // line 99
                echo "                            
                        
                        ";
                // line 101
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["sucursal"], "id", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "sucursal", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)))) {
                    // line 102
                    echo "                        selected
                        ";
                }
                // line 104
                echo "                        ";
            }
            // line 105
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "nombre", [], "any", false, false, false, 105), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Tramitador</small>
                <select name=\"cboTramitador\" id=\"tramitador\" required class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tramitadores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tramitador"]) {
            // line 114
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "\"
                        ";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tramitador"], "id", [], "any", false, false, false, 115), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115)))) {
                // line 116
                echo "                            selected
                        ";
            }
            // line 118
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "nombre", [], "any", false, false, false, 118), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tramitador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </select>
            </div>
            
            ";
        // line 123
        if (($context["tienePago"] ?? null)) {
            // line 124
            echo "            <!-- Existen pagos asociados al contrato, no se puede modificar-->
            <div class=\"row alert alert-info col-12 gy-5 p-3\" role=\"alert\">
                <h4><i class=\"icon fas fa-info-circle\"></i> Información</h4> 
                El contrato ya tiene cuotas pagadas, por lo que los siguientes campos se han deshabilitado.
              </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small><br>
                <strong><label for=\"\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "montoNivelDeuda", [], "any", false, false, false, 131), "html", null, true);
            echo "</label></strong>
                ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "montoNivelDeuda", [], "any", false, false, false, 132), 'row', ["label" => false, "attr" => ["class" => "form-control ", "style" => "visibility:hidden"]]);
            echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto contrato *</small><br>
                <strong><label id=\"m-monto-contrato\"></label></strong>
                ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "MontoContrato", [], "any", false, false, false, 137), 'row', ["label" => false, "attr" => ["class" => "form-control monto-contrato number", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <div class=\"row\"><small class=\"text-muted\">Abono *</small><br>
                <strong><label id=\"m-primera-cuota\"></label></strong>
                    ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isAbono", [], "any", false, false, false, 144), 'row', ["label" => false, "attr" => ["class" => " chk-bono", "style" => "visibility:hidden"]]);
            echo "</div>
                ";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "primeraCuota", [], "any", false, false, false, 145), 'row', ["label" => false, "attr" => ["class" => "form-control primera-cuota number", "style" => "visibility:hidden"]]);
            echo "
                
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-cuotas\" >Cuotas *</small><br>
                <strong><label for=\"\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "cuotas", [], "any", false, false, false, 152), "html", null, true);
            echo "</label></strong>
                ";
            // line 153
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cuotas", [], "any", false, false, false, 153), 'row', ["label" => false, "attr" => ["class" => "form-control cuotas number", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small><br>
                <strong><label id=\"m-valor-cuota\"></label></strong>
                ";
            // line 160
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "valorCuota", [], "any", false, false, false, 160), 'row', ["label" => false, "attr" => ["class" => "form-control valor-cuota", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <strong><label for=\"\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "diaPago", [], "any", false, false, false, 168), "html", null, true);
            echo "</label></strong>
                
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" style='visibility:hidden'>
                   
                    ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["diasPagos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
                // line 173
                echo "                    <label class=\"btn btn-success 
                    ";
                // line 174
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "diaPago", [], "any", false, false, false, 174), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 174)))) {
                    // line 175
                    echo "                    active
                    ";
                }
                // line 177
                echo "                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 178), "html", null, true);
                echo "\" autocomplete=\"off\"
                        ";
                // line 179
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "diaPago", [], "any", false, false, false, 179), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 179)))) {
                    // line 180
                    echo "                            checked
                        ";
                }
                // line 182
                echo "                        value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 182), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 182), "html", null, true);
                echo "
                    </label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\" style='visibility:hidden'> 
                <strong><label for=\"\">";
            // line 190
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaPrimerPago", [], "any", false, false, false, 190), "Y-m"), "html", null, true);
            echo "</label></strong>   
            </div>
            ";
        } else {
            // line 193
            echo "            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small>
                ";
            // line 195
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "montoNivelDeuda", [], "any", false, false, false, 195), 'row', ["label" => false, "attr" => ["class" => "form-control nivel-deuda", "autocomplete" => "ÑÖcompletes"]]);
            echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto contrato *</small>
                ";
            // line 199
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "MontoContrato", [], "any", false, false, false, 199), 'row', ["label" => false, "attr" => ["class" => "form-control monto-contrato number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                <strong><label id=\"m-monto-contrato\"></label></strong>
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <div class=\"row\"><small class=\"text-muted\">Abono *</small>
        
                    ";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isAbono", [], "any", false, false, false, 206), 'row', ["label" => false, "attr" => ["class" => " chk-bono"]]);
            echo "</div>
                ";
            // line 207
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "primeraCuota", [], "any", false, false, false, 207), 'row', ["label" => false, "attr" => ["class" => "form-control primera-cuota number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                
                <strong><label id=\"m-primera-cuota\"></label></strong>
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-cuotas\" >Cuotas *</small>
                ";
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cuotas", [], "any", false, false, false, 214), 'row', ["label" => false, "attr" => ["class" => "form-control cuotas number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small>
                ";
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "valorCuota", [], "any", false, false, false, 219), 'row', ["label" => false, "attr" => ["class" => "form-control valor-cuota", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                <strong><label id=\"m-valor-cuota\"></label></strong>
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                   
                    ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["diasPagos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
                // line 230
                echo "                    <label class=\"btn btn-success 
                    ";
                // line 231
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "diaPago", [], "any", false, false, false, 231), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 231)))) {
                    // line 232
                    echo "                    active
                    ";
                }
                // line 234
                echo "                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 235), "html", null, true);
                echo "\" autocomplete=\"off\"
                        ";
                // line 236
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "diaPago", [], "any", false, false, false, 236), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 236)))) {
                    // line 237
                    echo "                            checked
                        ";
                }
                // line 239
                echo "                        value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 239), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 239), "html", null, true);
                echo "
                    </label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\">    
            </div>
            ";
        }
        // line 249
        echo "        </div>
        <hr>
        <div class=\"card\">
            <div class=\"card-header\">
                
                <div class=\"row\">
                    
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" name=\"nombreRol\" class=\"form-control nombre-rol\" placeholder=\"Nombre de rol\">
                    </div>    
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" name=\"institucionAcreedora\" class=\"form-control institucion\" placeholder=\"Institucion Acreedora\" >
                    </div>   
                    <div class=\"col-sm-12 col-md-3\">
                        
                        <select name=\"juzgado\" class=\"form-control juzgado\">
                            <option value=\"\">  </option>
                            ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["juzgados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["juzgado"]) {
            // line 267
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "id", [], "any", false, false, false, 267), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "nombre", [], "any", false, false, false, 267), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juzgado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                        </select>
                    </div>   
                    <div class=\"col-sm-12 col-md-1\">

                        <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarRol()\"><i class=\"fas fa-plus\"></i></button>
                    </div>
                    
            
                </div>
         
            </div>
            <div class=\"card-body\" id=\"contratoRoles\">
        
            </div>
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Observación</small><br>
                ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "observacion", [], "any", false, false, false, 285), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
            </div>
        </div>
        
        <button class=\"btn btn-primary\">";
        // line 289
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechaPrimeraCuota", [], "any", false, false, false, 292), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
        echo "
";
        // line 293
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
<div class=\"row\" id=\"juzgado\">
    
</div>

 

<script>

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
        
    \$(\".format-rut\").rut();
    \$(\"#m-monto-contrato\").html(\$.number( \$('.monto-contrato').val(), 0, ',', '.' ));
    \$(\"#m-primera-cuota\").html(\$.number( \$('.primera-cuota').val(), 0, ',', '.' ));
    \$(\"#m-valor-cuota\").html(\$.number( \$('.valor-cuota').val(), 0, ',', '.' ));
    \$(document).ready(function(){
        checkAbono();
        \$('#controles').modal('show');
        \$.ajax({
            url:\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "id", [], "any", false, false, false, 344)]), "html", null, true);
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
        \$(\".number\").inputmask({
            mask: \"9\",
            repeat:20,
        });

        \$('.primer-pago').daterangepicker({
            \"singleDatePicker\": true,
            \"drops\": \"up\",
            \"startDate\": \"";
        // line 367
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaPrimerPago", [], "any", false, false, false, 367), "Y-m-d"), "html", null, true);
        echo "\",
            \"minDate\":\"";
        // line 368
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaCreacion", [], "any", false, false, false, 368), "Y-m-d"), "html", null, true);
        echo "\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        });
        
    });
    function agregarRol(){
        \$.ajax({
            url:\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "id", [], "any", false, false, false, 380)]), "html", null, true);
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
            url:\"/contrato/\"+id+\"/del_rol\",
            type: \"DELETE\",
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
    }

    function validarut(){
        \$('button').attr(\"disabled\", true);
        if(\$(\"#Institucion\").val()==0){
            alert(\"Debe ingresar almenos una Insitution Acreedora\");
            \$(\".nombre-rol\").focus();
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

    \$('.chk-bono').change(function(){
        
        checkAbono();
        recalcula();
    });

    function checkAbono(){
        ";
        // line 452
        if ( !($context["tienePago"] ?? null)) {
            // line 453
            echo "        if(\$('.chk-bono').prop( \"checked\" )){
            \$('.primera-cuota').css(\"visibility\", \"visible\");
            \$('.t-cuotas').html('Cuotas restantes *');
            \$('.t-valor-cuota').html('Valor Cuotas Restantes *');
            \$('.t-mes-pago').html('Mes Segundo Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"startDate\": \"";
            // line 461
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaPrimerPago", [], "any", false, false, false, 461), "Y-m-d"), "html", null, true);
            echo "\",
                \"minDate\":\"";
            // line 462
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaCreacion", [], "any", false, false, false, 462), "Y-m-d"), "html", null, true);
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
                \"startDate\": \"";
            // line 480
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaPrimerPago", [], "any", false, false, false, 480), "Y-m-d"), "html", null, true);
            echo "\",
                \"minDate\":\"";
            // line 481
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaCreacion", [], "any", false, false, false, 481), "Y-m-d"), "html", null, true);
            echo "\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });
        }
        ";
        }
        // line 491
        echo "    }
    \$('.primer-pago').inputmask(\"9999-99\");
</script>

";
    }

    public function getTemplateName()
    {
        return "contrato/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 491,  773 => 481,  769 => 480,  748 => 462,  744 => 461,  734 => 453,  732 => 452,  657 => 380,  642 => 368,  638 => 367,  612 => 344,  558 => 293,  554 => 292,  548 => 289,  541 => 285,  523 => 269,  512 => 267,  508 => 266,  489 => 249,  480 => 242,  468 => 239,  464 => 237,  462 => 236,  458 => 235,  455 => 234,  451 => 232,  449 => 231,  446 => 230,  442 => 229,  429 => 219,  421 => 214,  411 => 207,  407 => 206,  397 => 199,  390 => 195,  386 => 193,  380 => 190,  373 => 185,  361 => 182,  357 => 180,  355 => 179,  351 => 178,  348 => 177,  344 => 175,  342 => 174,  339 => 173,  335 => 172,  328 => 168,  317 => 160,  307 => 153,  303 => 152,  293 => 145,  289 => 144,  279 => 137,  271 => 132,  267 => 131,  258 => 124,  256 => 123,  251 => 120,  242 => 118,  238 => 116,  236 => 115,  231 => 114,  227 => 113,  219 => 107,  210 => 105,  207 => 104,  203 => 102,  201 => 101,  197 => 99,  195 => 98,  190 => 97,  186 => 96,  177 => 90,  170 => 86,  158 => 77,  151 => 73,  142 => 67,  135 => 63,  128 => 59,  120 => 54,  112 => 49,  104 => 44,  96 => 39,  88 => 34,  80 => 29,  72 => 24,  64 => 19,  56 => 14,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrato/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\_form.html.twig");
    }
}
