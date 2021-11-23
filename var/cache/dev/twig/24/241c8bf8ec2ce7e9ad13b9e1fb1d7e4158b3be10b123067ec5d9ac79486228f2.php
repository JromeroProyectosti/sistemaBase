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
class __TwigTemplate_3a47cf6347b7d7b7f3990cc11b8e2b834590254d003a9760db367b1bf1a981d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validarut()"]]);
        echo "
<div class=\"card\">
    <div class=\"card-body table-responsive pad\">
       
        <h4>Datos Cliente</h4>
        <div class=\"row\">
            <div class=\"col-8\">
                <small class=\"text-muted\">Compañia</small>
                
                    <select name=\"cboCompanias\" class=\"form-control\" onchange=\"javascript:cambiaCompania(this.value)\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 12
            echo "                            <option ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "agenda", [], "any", false, false, false, 12), "cuenta", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)))) {
                // line 13
                echo "                                selected
                            ";
            }
            // line 15
            echo "                            value =\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 15), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </select>
            </div>
        </div>
        <div class=\"row\">
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nombre</small><br>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Rut</small><br>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rut", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut", "autocomplete" => "ÑÖcompletes", "required" => true]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Email</small><br>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sexo *</small>
                <select name=\"cboSexo\" required class=\"form-control\">
                    <option></option>
                    <option value=\"Masculino\" 
                    ";
        // line 42
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 42, $this->source); })()), "sexo", [], "any", false, false, false, 42), "Masculino"))) {
            // line 43
            echo "                        selected
                    ";
        }
        // line 45
        echo "                    >Masculino</option>
                    <option value=\"Femenino\" 
                    ";
        // line 47
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 47, $this->source); })()), "sexo", [], "any", false, false, false, 47), "Femenino"))) {
            // line 48
            echo "                        selected
                    ";
        }
        // line 50
        echo "                    >Femenino</option>
                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nacionalidad</small><br>
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "pais", [], "any", false, false, false, 55), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Region *</small>
                <select name=\"cboRegion\" class=\"form-control\" onchange=\"javascript:getCiudades(this.value)\" required>
                <option></option>
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regiones"]) || array_key_exists("regiones", $context) ? $context["regiones"] : (function () { throw new RuntimeError('Variable "regiones" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 64
            echo "
                <option value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" 
                    ";
            // line 66
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 66, $this->source); })()), "cregion", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
                // line 67
                echo "                    selected
                    ";
            }
            // line 69
            echo "                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "nombre", [], "any", false, false, false, 69), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Ciudad *</small>
                <div id=\"cciudad\"></div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Comuna *</small>
                <div id=\"ccomuna\"></div>
            </div>
            <div class=\"col-sm-12 col-md-6\">
                <small class=\"text-muted\">Dirección</small><br>
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "direccion", [], "any", false, false, false, 83), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono</small><br>
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "telefono", [], "any", false, false, false, 88), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono Recado</small><br>
                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 93), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Estado Civil</small><br>
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "estadoCivil", [], "any", false, false, false, 98), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vivienda</small>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "vivienda", [], "any", false, false, false, 103), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vehiculo</small>
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vehiculo", [], "any", false, false, false, 107), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Situación Laboral</small><br>
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "situacionLaboral", [], "any", false, false, false, 111), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
                
            </div>
           
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Clave única</small>
                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "claveUnica", [], "any", false, false, false, 117), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Reunión</small>
                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "reunion", [], "any", false, false, false, 121), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <h4>Datos Contrato</h4>
        <div class=\"row\">

            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sucursal</small>
                <select name=\"cboSucursal\" id=\"sucursal\" required class=\"form-control sucursal\">
                    <option value=\"\"></option>
                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sucursales"]) || array_key_exists("sucursales", $context) ? $context["sucursales"] : (function () { throw new RuntimeError('Variable "sucursales" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 134
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "id", [], "any", false, false, false, 134), "html", null, true);
            echo "\"
                        ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "sucursal", [], "any", false, true, false, 135), "id", [], "any", true, true, false, 135)) {
                // line 136
                echo "                            
                        
                        ";
                // line 138
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["sucursal"], "id", [], "any", false, false, false, 138), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 138, $this->source); })()), "sucursal", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138)))) {
                    // line 139
                    echo "                        selected
                        ";
                }
                // line 141
                echo "                        ";
            }
            // line 142
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sucursal"], "nombre", [], "any", false, false, false, 142), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Tramitador</small>
                <select name=\"cboTramitador\" id=\"tramitador\" required class=\"form-control tramitador\">
                    <option value=\"\"></option>
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tramitadores"]) || array_key_exists("tramitadores", $context) ? $context["tramitadores"] : (function () { throw new RuntimeError('Variable "tramitadores" does not exist.', 150, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tramitador"]) {
            // line 151
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "\"
                        ";
            // line 152
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tramitador"], "id", [], "any", false, false, false, 152), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 152, $this->source); })()), "tramitador", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152)))) {
                // line 153
                echo "                            selected
                        ";
            }
            // line 155
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tramitador"], "nombre", [], "any", false, false, false, 155), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tramitador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                </select>
            </div>
            
            ";
        // line 160
        if ((isset($context["tienePago"]) || array_key_exists("tienePago", $context) ? $context["tienePago"] : (function () { throw new RuntimeError('Variable "tienePago" does not exist.', 160, $this->source); })())) {
            // line 161
            echo "            <!-- Existen pagos asociados al contrato, no se puede modificar-->
            <div class=\"row alert alert-info col-12 gy-5 p-3\" role=\"alert\">
                <h4><i class=\"icon fas fa-info-circle\"></i> Información</h4> 
                El contrato ya tiene cuotas pagadas, por lo que los siguientes campos se han deshabilitado.
              </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small><br>
                <strong><label for=\"\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 168, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 168), "html", null, true);
            echo "</label></strong>
                ";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 169), 'row', ["label" => false, "attr" => ["class" => "form-control ", "style" => "visibility:hidden"]]);
            echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto contrato *</small><br>
                <strong><label id=\"m-monto-contrato\"></label></strong>
                ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "MontoContrato", [], "any", false, false, false, 174), 'row', ["label" => false, "attr" => ["class" => "form-control monto-contrato number", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <div class=\"row\"><small class=\"text-muted\">Abono *</small><br>
                <strong><label id=\"m-primera-cuota\"></label></strong>
                    ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "isAbono", [], "any", false, false, false, 181), 'row', ["label" => false, "attr" => ["class" => " chk-bono", "style" => "visibility:hidden"]]);
            echo "</div>
                ";
            // line 182
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "primeraCuota", [], "any", false, false, false, 182), 'row', ["label" => false, "attr" => ["class" => "form-control primera-cuota number", "style" => "visibility:hidden"]]);
            echo "
                
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-cuotas\" >Cuotas *</small><br>
                <strong><label for=\"\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 189, $this->source); })()), "cuotas", [], "any", false, false, false, 189), "html", null, true);
            echo "</label></strong>
                ";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "cuotas", [], "any", false, false, false, 190), 'row', ["label" => false, "attr" => ["class" => "form-control cuotas number", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small><br>
                <strong><label id=\"m-valor-cuota\"></label></strong>
                ";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "valorCuota", [], "any", false, false, false, 197), 'row', ["label" => false, "attr" => ["class" => "form-control valor-cuota", "style" => "visibility:hidden"]]);
            echo "
                
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <strong><label for=\"\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 205, $this->source); })()), "diaPago", [], "any", false, false, false, 205), "html", null, true);
            echo "</label></strong>
                
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" style='visibility:hidden'>
                   
                    ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["diasPagos"]) || array_key_exists("diasPagos", $context) ? $context["diasPagos"] : (function () { throw new RuntimeError('Variable "diasPagos" does not exist.', 209, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
                // line 210
                echo "                    <label class=\"btn btn-success 
                    ";
                // line 211
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 211, $this->source); })()), "diaPago", [], "any", false, false, false, 211), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 211)))) {
                    // line 212
                    echo "                    active
                    ";
                }
                // line 214
                echo "                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 215), "html", null, true);
                echo "\" autocomplete=\"off\"
                        ";
                // line 216
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 216, $this->source); })()), "diaPago", [], "any", false, false, false, 216), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 216)))) {
                    // line 217
                    echo "                            checked
                        ";
                }
                // line 219
                echo "                        value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 219), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 219), "html", null, true);
                echo "
                    </label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago''</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\" style='visibility:hidden'> 
                <strong><label for=\"\">";
            // line 227
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 227, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 227), "Y-m"), "html", null, true);
            echo "</label></strong>   
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted \">Vigencia en Meses</small>
                ";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "vigencia", [], "any", false, false, false, 231), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
            echo "
                <strong><label for=\"\">";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 232, $this->source); })()), "vigencia", [], "any", false, false, false, 232), "html", null, true);
            echo "</label></strong>   
            </div>
            ";
        } else {
            // line 235
            echo "            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small>
                ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 237), 'row', ["label" => false, "attr" => ["class" => "form-control nivel-deuda", "autocomplete" => "ÑÖcompletes"]]);
            echo "
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto contrato *</small>
                ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "MontoContrato", [], "any", false, false, false, 241), 'row', ["label" => false, "attr" => ["class" => "form-control monto-contrato number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                <strong><label id=\"m-monto-contrato\"></label></strong>
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <div class=\"row\"><small class=\"text-muted\">Abono *</small>
        
                    ";
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "isAbono", [], "any", false, false, false, 248), 'row', ["label" => false, "attr" => ["class" => " chk-bono"]]);
            echo "</div>
                ";
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "primeraCuota", [], "any", false, false, false, 249), 'row', ["label" => false, "attr" => ["class" => "form-control primera-cuota number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                
                <strong><label id=\"m-primera-cuota\"></label></strong>
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-cuotas\" >Cuotas *</small>
                ";
            // line 256
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "cuotas", [], "any", false, false, false, 256), 'row', ["label" => false, "attr" => ["class" => "form-control cuotas number", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small>
                ";
            // line 261
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "valorCuota", [], "any", false, false, false, 261), 'row', ["label" => false, "attr" => ["class" => "form-control valor-cuota", "required" => true, "autocomplete" => "ÑÖcompletes"]]);
            echo "
                <strong><label id=\"m-valor-cuota\"></label></strong>
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                   
                    ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["diasPagos"]) || array_key_exists("diasPagos", $context) ? $context["diasPagos"] : (function () { throw new RuntimeError('Variable "diasPagos" does not exist.', 271, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
                // line 272
                echo "                    <label class=\"btn btn-success 
                    ";
                // line 273
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 273, $this->source); })()), "diaPago", [], "any", false, false, false, 273), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 273)))) {
                    // line 274
                    echo "                    active
                    ";
                }
                // line 276
                echo "                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
                // line 277
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 277), "html", null, true);
                echo "\" autocomplete=\"off\"
                        ";
                // line 278
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 278, $this->source); })()), "diaPago", [], "any", false, false, false, 278), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 278)))) {
                    // line 279
                    echo "                            checked
                        ";
                }
                // line 281
                echo "                        value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 281), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 281), "html", null, true);
                echo "
                    </label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\">    
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted o\">Vigencia en Meses</small>
                ";
            // line 292
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "vigencia", [], "any", false, false, false, 292), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
            echo "
                <strong><label for=\"\">";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 293, $this->source); })()), "vigencia", [], "any", false, false, false, 293), "html", null, true);
            echo "</label></strong> 
            </div>
            ";
        }
        // line 296
        echo "        </div>

        <hr>

<h4>Estrategia Juridica</h4>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-1\">*
            </Div>
            <div class=\"col-sm-12 col-md-3\">
                <select name=\"cboMateria\" class=\"form-control cbomateria\" placeholder=\"Materias\">
                    <option disabled selected>Materias</option>
                    ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuenta_materias"]) || array_key_exists("cuenta_materias", $context) ? $context["cuenta_materias"] : (function () { throw new RuntimeError('Variable "cuenta_materias" does not exist.', 307, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta_materia"]) {
            // line 308
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cuenta_materia"], "materia", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cuenta_materia"], "materia", [], "any", false, false, false, 308), "nombre", [], "any", false, false, false, 308), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta_materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "                </select>
            </div>    
            <div class=\"col-sm-12 col-md-3 submateria\">
                <select name=\"cboSubMateria\" class=\"form-control cbosubmateria\" onchange=\"javascript:cambiaSubmateria(this.value)\">
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-3 escritos\">
               <select name=\"cboEscritos\" class=\"form-control cboescritos  select2\"  multiple=\"multiple\" data-placeholder=\"Selecciona Escritos\" style=\"width: 100%;\" >
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarEstrategiaJuridica()\"><i class=\"fas fa-plus\"></i></button>

            </div>
            
    
        </div>
        <div  class=\"card-body\" >
            <div id=\"estrategiasJuridicas2\">
            ";
        // line 331
        $context["x"] = 0;
        // line 332
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratoMees"]) || array_key_exists("contratoMees", $context) ? $context["contratoMees"] : (function () { throw new RuntimeError('Variable "contratoMees" does not exist.', 332, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contratoMee"]) {
            // line 333
            echo "            

            <div class=\"row div1";
            // line 335
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 335, $this->source); })()), "html", null, true);
            echo "\"><div class=\"col-sm-12 col-md-1\"><input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
            echo "\" name=\"mee[]\"></Div>
                <div class=\"col-sm-12 col-md-3\">";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 336), "materiaEstrategia", [], "any", false, false, false, 336), "materia", [], "any", false, false, false, 336), "nombre", [], "any", false, false, false, 336), "html", null, true);
            echo "</div>
                <div class=\"col-sm-12 col-md-3\"> ";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 337), "materiaEstrategia", [], "any", false, false, false, 337), "estrategiaJuridica", [], "any", false, false, false, 337), "nombre", [], "any", false, false, false, 337), "html", null, true);
            echo " </div>
                <div class=\"col-sm-12 col-md-3\"> ";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 338), "escritura", [], "any", false, false, false, 338), "nombre", [], "any", false, false, false, 338), "html", null, true);
            echo "</div>
        
                <div class=\"col-sm-12 col-md-1\"><button type=\"button\" class=\"btn btn-danger remove_button\" onclick=\"javascript:borrarItem('1";
            // line 340
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 340, $this->source); })()), "html", null, true);
            echo "')\" ><i class=\"fas fa-trash\"></i></button> </div> 
                
                <div class=\"col-sm-12\"><hr></div>
            
            </div>
             
            ";
            // line 346
            $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 346, $this->source); })()) + 1);
            // line 347
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratoMee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "            </div>
            <div id=\"estrategiasJuridicas\">
             
            </div>
            <div class=\"loading\"></div>
        </div>  

        <hr>

        <h4>Servicios</h4>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-1\">*
                </Div>
                
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" name=\"nombreRol\" class=\"form-control nombre-rol\" placeholder=\"Rol\">
                </div>    
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" name=\"institucionAcreedora\" class=\"form-control institucion\" placeholder=\"Acreedor o Parte\" >
                </div>   
                <div class=\"col-sm-12 col-md-3\">
                    
                    <select name=\"juzgado\" class=\"form-control juzgado\">
                        <option value=\"\">  </option>
                        ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juzgados"]) || array_key_exists("juzgados", $context) ? $context["juzgados"] : (function () { throw new RuntimeError('Variable "juzgados" does not exist.', 372, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juzgado"]) {
            // line 373
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "id", [], "any", false, false, false, 373), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juzgado"], "nombre", [], "any", false, false, false, 373), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juzgado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "                    </select>
                </div>   
                <div class=\"col-sm-12 col-md-1\">

                    <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarRol()\"><i class=\"fas fa-plus\"></i></button>
                </div>
                
        
            </div>
            <div class=\"card-body\" id=\"acreedorVacio\">
       
    </div>
   
        <div class=\"card-body\" id=\"contratoRoles\">
    
        </div>

    
        <div class=\"col-sm-12 col-md-12\">
            <small class=\"text-muted\">Observación</small><br>
            ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "observacion", [], "any", false, false, false, 395), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
        </div>
       
        
        <button class=\"btn btn-primary\">";
        // line 399
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 399, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "fechaPrimeraCuota", [], "any", false, false, false, 402), 'row', ["label" => false, "attr" => ["class" => "form-control", "style" => "visibility:hidden"]]);
        echo "
";
        // line 403
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), 'form_end');
        echo "
<div class=\"row\" id=\"juzgado\">
    
</div>

 

<script>
     \$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\tcambiaAcreedores(";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 414, $this->source); })()), "agenda", [], "any", false, false, false, 414), "cuenta", [], "any", false, false, false, 414), "id", [], "any", false, false, false, 414), "html", null, true);
        echo ");
\t\t});
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
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 458, $this->source); })()), "id", [], "any", false, false, false, 458)]), "html", null, true);
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
        // line 481
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 481, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 481), "Y-m-d"), "html", null, true);
        echo "\",
            \"minDate\":\"";
        // line 482
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 482, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 482), "Y-m-d"), "html", null, true);
        echo "\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        });
        \$.ajax({
            url:\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_ciudad", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 491, $this->source); })()), "cregion", [], "any", false, false, false, 491), "id", [], "any", false, false, false, 491), "ciudad" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 491, $this->source); })()), "cciudad", [], "any", false, false, false, 491), "id", [], "any", false, false, false, 491)]), "html", null, true);
        echo "\",
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
        \$.ajax({
            url:\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_comuna", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 508, $this->source); })()), "cciudad", [], "any", false, false, false, 508), "id", [], "any", false, false, false, 508), "comuna" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 508, $this->source); })()), "ccomuna", [], "any", false, false, false, 508), "id", [], "any", false, false, false, 508)]), "html", null, true);
        echo "\",
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
    function agregarRol(){
        \$.ajax({
            url:\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 547, $this->source); })()), "id", [], "any", false, false, false, 547)]), "html", null, true);
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
            alert(\"Debe ingresar almenos un Servicio\");
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

    \$('.chk-bono').change(function(){
        
        checkAbono();
        recalcula();
    });
    function cambiaCompania(status){
        cambiamateria(status);
        cambiaAcreedores(status);
        \$.ajax({
            url:\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_compania", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 627, $this->source); })()), "id", [], "any", false, false, false, 627)]), "html", null, true);
        echo "\",
            type: \"get\",
            dataType: \"html\",
            data:\"compania=\"+status,
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#status\").html(data);
                //\$(\"#contrato\").html(\"\");

                

                \$.ajax({
                    url:\"/panel_abogado/\"+status+\"/sucursales\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#sucursal\").find('option').remove();
                        \$(\"#sucursal\").append(data);
                        //\$(\"#contrato\").html(\"\");
                    }});
                
                    \$.ajax({
                        url:\"/panel_abogado/\"+status+\"/tramitadores\",
                        type: \"post\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        beforeSend: function(){
                            //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                            
                        },
                        success:function(data){
                            \$(\"#tramitador\").find('option').remove();
                            \$(\"#tramitador\").append(data);
                            //\$(\"#contrato\").html(\"\");
                        }});

            }

        });
    }
    function checkAbono(){
        ";
        // line 686
        if ( !(isset($context["tienePago"]) || array_key_exists("tienePago", $context) ? $context["tienePago"] : (function () { throw new RuntimeError('Variable "tienePago" does not exist.', 686, $this->source); })())) {
            // line 687
            echo "        if(\$('.chk-bono').prop( \"checked\" )){
            \$('.primera-cuota').css(\"visibility\", \"visible\");
            \$('.t-cuotas').html('Cuotas restantes *');
            \$('.t-valor-cuota').html('Valor Cuotas Restantes *');
            \$('.t-mes-pago').html('Mes Segundo Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"startDate\": \"";
            // line 695
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 695, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 695), "Y-m-d"), "html", null, true);
            echo "\",
                \"minDate\":\"";
            // line 696
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 696, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 696), "Y-m-d"), "html", null, true);
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
            // line 714
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 714, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 714), "Y-m-d"), "html", null, true);
            echo "\",
                \"minDate\":\"";
            // line 715
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 715, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 715), "Y-m-d"), "html", null, true);
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
        // line 725
        echo "    }
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

    var mee_val;
    var x=";
        // line 768
        echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 768, $this->source); })()), "html", null, true);
        echo ";
    function cambiaEscritos(valor){
        mee_val=valor;
    }
     function agregarEstrategiaJuridica(){
        

        

         var hayEstrategias=false;
        \$(\".cboescritos option:selected\").each(function() {\t
             mee_val=\$(this).attr('value');
            hayEstrategias=true;
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
                 \$(\"#estrategiasJuridicas2\").empty();
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  1177 => 768,  1132 => 725,  1119 => 715,  1115 => 714,  1094 => 696,  1090 => 695,  1080 => 687,  1078 => 686,  1016 => 627,  933 => 547,  891 => 508,  871 => 491,  859 => 482,  855 => 481,  829 => 458,  782 => 414,  768 => 403,  764 => 402,  758 => 399,  751 => 395,  729 => 375,  718 => 373,  714 => 372,  688 => 348,  682 => 347,  680 => 346,  671 => 340,  666 => 338,  662 => 337,  658 => 336,  652 => 335,  648 => 333,  643 => 332,  641 => 331,  618 => 310,  607 => 308,  603 => 307,  590 => 296,  584 => 293,  580 => 292,  570 => 284,  558 => 281,  554 => 279,  552 => 278,  548 => 277,  545 => 276,  541 => 274,  539 => 273,  536 => 272,  532 => 271,  519 => 261,  511 => 256,  501 => 249,  497 => 248,  487 => 241,  480 => 237,  476 => 235,  470 => 232,  466 => 231,  459 => 227,  452 => 222,  440 => 219,  436 => 217,  434 => 216,  430 => 215,  427 => 214,  423 => 212,  421 => 211,  418 => 210,  414 => 209,  407 => 205,  396 => 197,  386 => 190,  382 => 189,  372 => 182,  368 => 181,  358 => 174,  350 => 169,  346 => 168,  337 => 161,  335 => 160,  330 => 157,  321 => 155,  317 => 153,  315 => 152,  310 => 151,  306 => 150,  298 => 144,  289 => 142,  286 => 141,  282 => 139,  280 => 138,  276 => 136,  274 => 135,  269 => 134,  265 => 133,  250 => 121,  243 => 117,  234 => 111,  227 => 107,  220 => 103,  212 => 98,  204 => 93,  196 => 88,  188 => 83,  174 => 71,  165 => 69,  161 => 67,  159 => 66,  155 => 65,  152 => 64,  148 => 63,  137 => 55,  130 => 50,  126 => 48,  124 => 47,  120 => 45,  116 => 43,  114 => 42,  103 => 34,  95 => 29,  87 => 24,  78 => 17,  67 => 15,  63 => 13,  60 => 12,  56 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'onsubmit':'return validarut()'}}) }}
<div class=\"card\">
    <div class=\"card-body table-responsive pad\">
       
        <h4>Datos Cliente</h4>
        <div class=\"row\">
            <div class=\"col-8\">
                <small class=\"text-muted\">Compañia</small>
                
                    <select name=\"cboCompanias\" class=\"form-control\" onchange=\"javascript:cambiaCompania(this.value)\">
                        {% for compania in companias %}
                            <option {% if compania.id==contrato.agenda.cuenta.id %}
                                selected
                            {% endif %}
                            value =\"{{compania.id}}\" >{{compania.nombre}}</option>
                        {% endfor %}
                    </select>
            </div>
        </div>
        <div class=\"row\">
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nombre</small><br>
                {{form_row(form.nombre,{'label':false,'attr':{'class':'form-control'}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Rut</small><br>
                {{form_row(form.rut,{'label':false,'attr':{'class':'form-control format-rut','autocomplete':\"ÑÖcompletes\",'required':true}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Email</small><br>
                {{form_row(form.email,{'label':false,'attr':{'class':'form-control','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sexo *</small>
                <select name=\"cboSexo\" required class=\"form-control\">
                    <option></option>
                    <option value=\"Masculino\" 
                    {% if contrato.sexo == \"Masculino\" %}
                        selected
                    {% endif %}
                    >Masculino</option>
                    <option value=\"Femenino\" 
                    {% if contrato.sexo == \"Femenino\" %}
                        selected
                    {% endif %}
                    >Femenino</option>
                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Nacionalidad</small><br>
                {{form_row(form.pais,{'label':false,'attr':{'class':'form-control','required':true,}})}}
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Region *</small>
                <select name=\"cboRegion\" class=\"form-control\" onchange=\"javascript:getCiudades(this.value)\" required>
                <option></option>
                {% for region in regiones %}

                <option value=\"{{region.id}}\" 
                    {% if  region.id==contrato.cregion.id %}
                    selected
                    {% endif %}
                >{{region.nombre}}</option>
                {% endfor %}
                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Ciudad *</small>
                <div id=\"cciudad\"></div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Comuna *</small>
                <div id=\"ccomuna\"></div>
            </div>
            <div class=\"col-sm-12 col-md-6\">
                <small class=\"text-muted\">Dirección</small><br>
                {{form_row(form.direccion,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono</small><br>
                {{form_row(form.telefono,{'label':false,'attr':{'class':'form-control','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Teléfono Recado</small><br>
                {{form_row(form.telefonoRecado,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Estado Civil</small><br>
                {{form_row(form.estadoCivil,{'label':false,'attr':{'class':'form-control','required':true}})}}
                
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vivienda</small>
                {{form_row(form.vivienda,{'label':false,'attr':{'class':'form-control'}})}}
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Vehiculo</small>
                {{form_row(form.vehiculo,{'label':false,'attr':{'class':'form-control'}})}}
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Situación Laboral</small><br>
                {{form_row(form.situacionLaboral,{'label':false,'attr':{'class':'form-control','required':true}})}}
                
            </div>
           
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Clave única</small>
                {{form_row(form.claveUnica,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Reunión</small>
                {{form_row(form.reunion,{'label':false,'attr':{'class':'form-control'}})}}
            </div>
        </div>

        <h4>Datos Contrato</h4>
        <div class=\"row\">

            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sucursal</small>
                <select name=\"cboSucursal\" id=\"sucursal\" required class=\"form-control sucursal\">
                    <option value=\"\"></option>
                    {% for sucursal in sucursales %}
                        <option value=\"{{sucursal.id}}\"
                        {% if contrato.sucursal.id is defined %}
                            
                        
                        {% if sucursal.id == contrato.sucursal.id %}
                        selected
                        {% endif %}
                        {% endif %}
                        >{{sucursal.nombre}}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Tramitador</small>
                <select name=\"cboTramitador\" id=\"tramitador\" required class=\"form-control tramitador\">
                    <option value=\"\"></option>
                    {% for tramitador in tramitadores %}
                        <option value=\"{{tramitador.id}}\"
                        {% if tramitador.id == contrato.tramitador.id %}
                            selected
                        {% endif %}
                        >{{tramitador.nombre}}</option>
                    {% endfor %}
                </select>
            </div>
            
            {% if tienePago %}
            <!-- Existen pagos asociados al contrato, no se puede modificar-->
            <div class=\"row alert alert-info col-12 gy-5 p-3\" role=\"alert\">
                <h4><i class=\"icon fas fa-info-circle\"></i> Información</h4> 
                El contrato ya tiene cuotas pagadas, por lo que los siguientes campos se han deshabilitado.
              </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small><br>
                <strong><label for=\"\">{{contrato.montoNivelDeuda}}</label></strong>
                {{form_row(form.montoNivelDeuda,{'label':false,'attr':{'class':'form-control ','style':'visibility:hidden'}})}}
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto contrato *</small><br>
                <strong><label id=\"m-monto-contrato\"></label></strong>
                {{form_row(form.MontoContrato,{'label':false,'attr':{'class':'form-control monto-contrato number','style':'visibility:hidden'}})}}
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <div class=\"row\"><small class=\"text-muted\">Abono *</small><br>
                <strong><label id=\"m-primera-cuota\"></label></strong>
                    {{form_row(form.isAbono,{'label':false,'attr':{'class':' chk-bono','style':'visibility:hidden'}})}}</div>
                {{form_row(form.primeraCuota,{'label':false,'attr':{'class':'form-control primera-cuota number','style':'visibility:hidden'}})}}
                
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-cuotas\" >Cuotas *</small><br>
                <strong><label for=\"\">{{contrato.cuotas}}</label></strong>
                {{form_row(form.cuotas,{'label':false,'attr':{'class':'form-control cuotas number','style':'visibility:hidden'}})}}
                
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small><br>
                <strong><label id=\"m-valor-cuota\"></label></strong>
                {{form_row(form.valorCuota,{'label':false,'attr':{'class':'form-control valor-cuota','style':'visibility:hidden'}})}}
                
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <strong><label for=\"\">{{ contrato.diaPago}}</label></strong>
                
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" style='visibility:hidden'>
                   
                    {% for diasPago in diasPagos %}
                    <label class=\"btn btn-success 
                    {% if contrato.diaPago == diasPago.dias %}
                    active
                    {% endif %}
                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago{{diasPago.dias}}\" autocomplete=\"off\"
                        {% if contrato.diaPago == diasPago.dias %}
                            checked
                        {% endif %}
                        value=\"{{diasPago.dias}}\">{{diasPago.nombre}}
                    </label>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago''</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\" style='visibility:hidden'> 
                <strong><label for=\"\">{{contrato.fechaPrimerPago|date('Y-m')}}</label></strong>   
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted \">Vigencia en Meses</small>
                {{form_row(form.vigencia,{'label':false,'attr':{'class':'form-control','style':'visibility:hidden'}})}}
                <strong><label for=\"\">{{contrato.vigencia}}</label></strong>   
            </div>
            {% else %}
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Monto nivel de deuda</small>
                {{form_row(form.montoNivelDeuda,{'label':false,'attr':{'class':'form-control nivel-deuda','autocomplete':\"ÑÖcompletes\"}})}}
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
                {{form_row(form.cuotas,{'label':false,'attr':{'class':'form-control cuotas number','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
            </div>
            
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted t-valor-cuota\">Valor cuota *</small>
                {{form_row(form.valorCuota,{'label':false,'attr':{'class':'form-control valor-cuota','required':true,'autocomplete':\"ÑÖcompletes\"}})}}
                <strong><label id=\"m-valor-cuota\"></label></strong>
            </div>
            
        
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Días de Pago</small>
                <br>
                <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                   
                    {% for diasPago in diasPagos %}
                    <label class=\"btn btn-success 
                    {% if contrato.diaPago == diasPago.dias %}
                    active
                    {% endif %}
                    \">
                        <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago{{diasPago.dias}}\" autocomplete=\"off\"
                        {% if contrato.diaPago == diasPago.dias %}
                            checked
                        {% endif %}
                        value=\"{{diasPago.dias}}\">{{diasPago.nombre}}
                    </label>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                <input type=\"text\" name=\"txtFechaPago\" class=\"form-control primer-pago\">    
            </div>
            <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted o\">Vigencia en Meses</small>
                {{form_row(form.vigencia,{'label':false,'attr':{'class':'form-control','style':'visibility:hidden'}})}}
                <strong><label for=\"\">{{contrato.vigencia}}</label></strong> 
            </div>
            {% endif %}
        </div>

        <hr>

<h4>Estrategia Juridica</h4>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-1\">*
            </Div>
            <div class=\"col-sm-12 col-md-3\">
                <select name=\"cboMateria\" class=\"form-control cbomateria\" placeholder=\"Materias\">
                    <option disabled selected>Materias</option>
                    {% for cuenta_materia in cuenta_materias %}
                    <option value=\"{{ cuenta_materia.materia.id }}\">{{ cuenta_materia.materia.nombre }}</option>
                    {% endfor %}
                </select>
            </div>    
            <div class=\"col-sm-12 col-md-3 submateria\">
                <select name=\"cboSubMateria\" class=\"form-control cbosubmateria\" onchange=\"javascript:cambiaSubmateria(this.value)\">
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-3 escritos\">
               <select name=\"cboEscritos\" class=\"form-control cboescritos  select2\"  multiple=\"multiple\" data-placeholder=\"Selecciona Escritos\" style=\"width: 100%;\" >
                    <option></option>
                </select>
            </div>   
            <div class=\"col-sm-12 col-md-1\">
                <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarEstrategiaJuridica()\"><i class=\"fas fa-plus\"></i></button>

            </div>
            
    
        </div>
        <div  class=\"card-body\" >
            <div id=\"estrategiasJuridicas2\">
            {% set x=0 %}
            {% for contratoMee in contratoMees %}
            

            <div class=\"row div1{{x}}\"><div class=\"col-sm-12 col-md-1\"><input type=\"hidden\" value=\"{{contratoMee.mee.id}}\" name=\"mee[]\"></Div>
                <div class=\"col-sm-12 col-md-3\">{{contratoMee.mee.materiaEstrategia.materia.nombre}}</div>
                <div class=\"col-sm-12 col-md-3\"> {{ contratoMee.mee.materiaEstrategia.estrategiaJuridica.nombre }} </div>
                <div class=\"col-sm-12 col-md-3\"> {{ contratoMee.mee.escritura.nombre}}</div>
        
                <div class=\"col-sm-12 col-md-1\"><button type=\"button\" class=\"btn btn-danger remove_button\" onclick=\"javascript:borrarItem('1{{x}}')\" ><i class=\"fas fa-trash\"></i></button> </div> 
                
                <div class=\"col-sm-12\"><hr></div>
            
            </div>
             
            {% set x= x+1 %}
            {% endfor %}
            </div>
            <div id=\"estrategiasJuridicas\">
             
            </div>
            <div class=\"loading\"></div>
        </div>  

        <hr>

        <h4>Servicios</h4>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-1\">*
                </Div>
                
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" name=\"nombreRol\" class=\"form-control nombre-rol\" placeholder=\"Rol\">
                </div>    
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" name=\"institucionAcreedora\" class=\"form-control institucion\" placeholder=\"Acreedor o Parte\" >
                </div>   
                <div class=\"col-sm-12 col-md-3\">
                    
                    <select name=\"juzgado\" class=\"form-control juzgado\">
                        <option value=\"\">  </option>
                        {% for juzgado in juzgados %}
                            <option value=\"{{juzgado.id}}\">{{juzgado.nombre}}</option>
                        {% endfor %}
                    </select>
                </div>   
                <div class=\"col-sm-12 col-md-1\">

                    <button type=\"button\" class=\"btn btn-primary btn-agregar\" onclick=\"javascript:agregarRol()\"><i class=\"fas fa-plus\"></i></button>
                </div>
                
        
            </div>
            <div class=\"card-body\" id=\"acreedorVacio\">
       
    </div>
   
        <div class=\"card-body\" id=\"contratoRoles\">
    
        </div>

    
        <div class=\"col-sm-12 col-md-12\">
            <small class=\"text-muted\">Observación</small><br>
            {{form_row(form.observacion,{'label':false,'attr':{'class':'form-control','required':true}})}}
        </div>
       
        
        <button class=\"btn btn-primary\">{{ button_label|default('Guardar') }}</button>
    </div>
</div>
{{form_row(form.fechaPrimeraCuota,{'label':false,'attr':{'class':'form-control','style':'visibility:hidden'}})}}
{{ form_end(form) }}
<div class=\"row\" id=\"juzgado\">
    
</div>

 

<script>
     \$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\tcambiaAcreedores({{contrato.agenda.cuenta.id}});
\t\t});
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
            url:\"{{path('contrato_new_rol',{'id':contrato.id})}}\",
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
            \"startDate\": \"{{contrato.fechaPrimerPago|date('Y-m-d')}}\",
            \"minDate\":\"{{contrato.fechaCreacion|date('Y-m-d')}}\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        });
        \$.ajax({
            url:\"{{path('contrato_ciudad',{'id':contrato.cregion.id,'ciudad':contrato.cciudad.id})}}\",
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
        \$.ajax({
            url:\"{{path('contrato_comuna',{'id':contrato.cciudad.id,'comuna':contrato.ccomuna.id})}}\",
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
    function agregarRol(){
        \$.ajax({
            url:\"{{path('contrato_new_rol',{'id':contrato.id})}}\",
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
            alert(\"Debe ingresar almenos un Servicio\");
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

    \$('.chk-bono').change(function(){
        
        checkAbono();
        recalcula();
    });
    function cambiaCompania(status){
        cambiamateria(status);
        cambiaAcreedores(status);
        \$.ajax({
            url:\"{{path('panel_abogado_compania',{'id':agenda.id})}}\",
            type: \"get\",
            dataType: \"html\",
            data:\"compania=\"+status,
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#status\").html(data);
                //\$(\"#contrato\").html(\"\");

                

                \$.ajax({
                    url:\"/panel_abogado/\"+status+\"/sucursales\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#sucursal\").find('option').remove();
                        \$(\"#sucursal\").append(data);
                        //\$(\"#contrato\").html(\"\");
                    }});
                
                    \$.ajax({
                        url:\"/panel_abogado/\"+status+\"/tramitadores\",
                        type: \"post\",
                        dataType: \"html\",
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        beforeSend: function(){
                            //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                            
                        },
                        success:function(data){
                            \$(\"#tramitador\").find('option').remove();
                            \$(\"#tramitador\").append(data);
                            //\$(\"#contrato\").html(\"\");
                        }});

            }

        });
    }
    function checkAbono(){
        {% if not tienePago %}
        if(\$('.chk-bono').prop( \"checked\" )){
            \$('.primera-cuota').css(\"visibility\", \"visible\");
            \$('.t-cuotas').html('Cuotas restantes *');
            \$('.t-valor-cuota').html('Valor Cuotas Restantes *');
            \$('.t-mes-pago').html('Mes Segundo Pago');
            \$('.primer-pago').daterangepicker({
                \"singleDatePicker\": true,
                \"drops\": \"up\",
                \"startDate\": \"{{contrato.fechaPrimerPago|date('Y-m-d')}}\",
                \"minDate\":\"{{contrato.fechaCreacion|date('Y-m-d')}}\",
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
                \"startDate\": \"{{contrato.fechaPrimerPago|date('Y-m-d')}}\",
                \"minDate\":\"{{contrato.fechaCreacion|date('Y-m-d')}}\",
                \"locale\": {
                    \"format\": \"YYYY-MM-DD\",
                    \"applyLabel\": \"Apply\",
                    \"cancelLabel\": \"Cancel\",
                }
            }, function(start, end, label) {
            });
        }
        {% endif %}
    }
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

    var mee_val;
    var x={{x}};
    function cambiaEscritos(valor){
        mee_val=valor;
    }
     function agregarEstrategiaJuridica(){
        

        

         var hayEstrategias=false;
        \$(\".cboescritos option:selected\").each(function() {\t
             mee_val=\$(this).attr('value');
            hayEstrategias=true;
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
                 \$(\"#estrategiasJuridicas2\").empty();
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

", "contrato/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\_form.html.twig");
    }
}
