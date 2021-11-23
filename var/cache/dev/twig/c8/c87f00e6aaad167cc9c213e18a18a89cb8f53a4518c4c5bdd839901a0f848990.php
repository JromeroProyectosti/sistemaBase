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

/* contrato/show.html.twig */
class __TwigTemplate_1397b5cae7452175f497f96f90833f9e0d91bf8a8bc52355d9566c0d2d6ad1be extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrato/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contrato";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-8\">
    <div class=\"card\">
        <div class=\"card-body table-responsive pad\">
           
            <h4>Datos Cliente</h4>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nombre</small><br>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 15, $this->source); })()), "nombre", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Rut</small><br>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 19, $this->source); })()), "rut", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Email</small><br>
                   
                    <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>   
                </div>
                
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nacionalidad</small><br>
                    
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 31, $this->source); })()), "pais", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sexo</small><br>
                <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 35, $this->source); })()), "sexo", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>   

                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Región</small><br>
                
                    <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 41, $this->source); })()), "cregion", [], "any", false, false, false, 41), "nombre", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad</small><br>
                
                    <p>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 46, $this->source); })()), "cciudad", [], "any", false, false, false, 46), "nombre", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Comuna</small><br>
                   
                    <p>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 51, $this->source); })()), "ccomuna", [], "any", false, false, false, 51), "nombre", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Dirección</small><br>
                    
                    <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 56, $this->source); })()), "direccion", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono</small><br>
                   
                    <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 61, $this->source); })()), "telefono", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono Recado</small><br>
                   
                    <p>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 66, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 66), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Estado Civil</small><br>
                  
                    <p>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 71, $this->source); })()), "estadoCivil", [], "any", false, false, false, 71), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vivienda</small>
                   
                    <p>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 76, $this->source); })()), "vivienda", [], "any", false, false, false, 76), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vehiculo</small>
                  
                    <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 81, $this->source); })()), "vehiculo", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Situación Laboral</small><br>
                    
                    <p>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 86, $this->source); })()), "situacionLaboral", [], "any", false, false, false, 86), "html", null, true);
        echo "</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Clave única</small>
                    <p>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 91, $this->source); })()), "claveUnica", [], "any", false, false, false, 91), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Reunión</small>
                    <p>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 95, $this->source); })()), "reunion", [], "any", false, false, false, 95), "html", null, true);
        echo "</p>   
                </div>
            </div>
    
            <h4>Datos Contrato</h4>
            <div class=\"row\">
    
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Estrategia Juridica</small>
                    <p>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 104, $this->source); })()), "estrategiaJuridica", [], "any", false, false, false, 104), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Escritura</small>
                    <p>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 108, $this->source); })()), "escritura", [], "any", false, false, false, 108), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Sucursal</small>
                    <p>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 112, $this->source); })()), "sucursal", [], "any", false, false, false, 112), "nombre", [], "any", false, false, false, 112), "html", null, true);
        echo "</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Tramitador</small>
                    <p>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 117, $this->source); })()), "tramitador", [], "any", false, false, false, 117), "nombre", [], "any", false, false, false, 117), "html", null, true);
        echo "</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto nivel de deuda</small>
                    <p>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 122, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 122), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto contrato</small>
                    <p>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 126, $this->source); })()), "MontoContrato", [], "any", false, false, false, 126), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Primera Cuota </small>
                    <p>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 130, $this->source); })()), "primeraCuota", [], "any", false, false, false, 130), "html", null, true);
        echo "</p> 
                 </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Fecha Primera Cuota</small>
                    <p>";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 134, $this->source); })()), "fechaPrimeraCuota", [], "any", false, false, false, 134), "Y-m-d"), "html", null, true);
        echo "</p> 
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Cuotas restantes</small>
                    <p>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 138, $this->source); })()), "cuotas", [], "any", false, false, false, 138), "html", null, true);
        echo "</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Valor cuota</small>
                    <p>";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 143, $this->source); })()), "valorCuota", [], "any", false, false, false, 143), "html", null, true);
        echo "</p>   
                </div>
                
            
                <div class=\"col-sm-12 col-md-12\">
                    <small class=\"text-muted\">Días de Pago</small>
                    <br>
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                       
                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diasPagos"]) || array_key_exists("diasPagos", $context) ? $context["diasPagos"] : (function () { throw new RuntimeError('Variable "diasPagos" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
            // line 153
            echo "                        <label class=\"btn btn-success 
                        ";
            // line 154
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 154, $this->source); })()), "diaPago", [], "any", false, false, false, 154), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 154)))) {
                // line 155
                echo "                        active
                        ";
            }
            // line 157
            echo "                        \">
                            <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 158), "html", null, true);
            echo "\" autocomplete=\"off\"
                            ";
            // line 159
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 159, $this->source); })()), "diaPago", [], "any", false, false, false, 159), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 159)))) {
                // line 160
                echo "                                checked
                            ";
            }
            // line 162
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 162), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 162), "html", null, true);
            echo "
                        </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                    <p>";
        // line 169
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 169, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true);
        echo "</p> 
                </div>
            </div>
            <hr>
            <div class=\"card\">
                <div class=\"card-header\">
                    Roles
                </div>
                <div class=\"card-body\" id=\"contratoRoles\">
            
                </div>
            </div>
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Observación</small>
                <p>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 183, $this->source); })()), "observacion", [], "any", false, false, false, 183), "html", null, true);
        echo "</p>   
                
            </div>
            ";
        // line 186
        if (array_key_exists("metodo", $context)) {
            // line 187
            echo "                
                ";
            // line 188
            if ((0 === twig_compare((isset($context["metodo"]) || array_key_exists("metodo", $context) ? $context["metodo"] : (function () { throw new RuntimeError('Variable "metodo" does not exist.', 188, $this->source); })()), "T"))) {
                // line 189
                echo "                ";
                echo twig_include($this->env, $context, "contrato/_terminar.html.twig", ["button_label" => "Modificar"]);
                echo "
                ";
            }
            // line 191
            echo "            ";
        }
        // line 192
        echo "        </div>

        
    </div>

</div>
<div class=\"col-sm-12 col-md-4\">
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
    
        <!-- Timelime example  -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                <!-- The time line -->
                    <div class=\"timeline\">
                        <!-- timeline time label -->
                        <div class=\"time-label\">
                        <span class=\"bg-red\">";
        // line 210
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 210, $this->source); })()), "fechaCarga", [], "any", false, false, false, 210), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 214, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 215
            echo "                            
                        
                        <div class=\"time-label\">
                            <span class=\"bg-green\">";
            // line 218
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 218), "d-m-Y"), "html", null, true);
            echo "</span>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope bg-blue\"></i>
                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 223
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 223), "h:i"), "html", null, true);
            echo "</span>
                                <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 224), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 224), "html", null, true);
            echo " </h3>

                                <div class=\"timeline-body\">
                                    ";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 227), "html", null, true);
            echo "
                                </div>
                               
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                        <div>
                            <i class=\"fas fa-clock bg-gray\"></i>
                          </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    </div>
</div>
    <script>
        
        \$.ajax({
            url:\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_new_rol", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, false, 248), "mode" => "view"]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contrato/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 248,  468 => 233,  456 => 227,  448 => 224,  444 => 223,  436 => 218,  431 => 215,  427 => 214,  420 => 210,  400 => 192,  397 => 191,  391 => 189,  389 => 188,  386 => 187,  384 => 186,  378 => 183,  361 => 169,  355 => 165,  343 => 162,  339 => 160,  337 => 159,  333 => 158,  330 => 157,  326 => 155,  324 => 154,  321 => 153,  317 => 152,  305 => 143,  297 => 138,  290 => 134,  283 => 130,  276 => 126,  269 => 122,  261 => 117,  253 => 112,  246 => 108,  239 => 104,  227 => 95,  220 => 91,  212 => 86,  204 => 81,  196 => 76,  188 => 71,  180 => 66,  172 => 61,  164 => 56,  156 => 51,  148 => 46,  140 => 41,  131 => 35,  124 => 31,  115 => 25,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrato{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12 col-md-8\">
    <div class=\"card\">
        <div class=\"card-body table-responsive pad\">
           
            <h4>Datos Cliente</h4>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nombre</small><br>
                    <p>{{contrato.nombre}}</p>                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Rut</small><br>
                    <p>{{contrato.rut}}</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Email</small><br>
                   
                    <p>{{contrato.email}}</p>   
                </div>
                
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nacionalidad</small><br>
                    
                    <p>{{contrato.pais}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                <small class=\"text-muted\">Sexo</small><br>
                <p>{{contrato.sexo}}</p>   

                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Región</small><br>
                
                    <p>{{contrato.cregion.nombre}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad</small><br>
                
                    <p>{{contrato.cciudad.nombre}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Comuna</small><br>
                   
                    <p>{{contrato.ccomuna.nombre}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Dirección</small><br>
                    
                    <p>{{contrato.direccion}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono</small><br>
                   
                    <p>{{contrato.telefono}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono Recado</small><br>
                   
                    <p>{{contrato.telefonoRecado}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Estado Civil</small><br>
                  
                    <p>{{contrato.estadoCivil}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vivienda</small>
                   
                    <p>{{contrato.vivienda}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vehiculo</small>
                  
                    <p>{{contrato.vehiculo}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Situación Laboral</small><br>
                    
                    <p>{{contrato.situacionLaboral}}</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Clave única</small>
                    <p>{{contrato.claveUnica}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Reunión</small>
                    <p>{{contrato.reunion}}</p>   
                </div>
            </div>
    
            <h4>Datos Contrato</h4>
            <div class=\"row\">
    
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Estrategia Juridica</small>
                    <p>{{contrato.estrategiaJuridica}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Escritura</small>
                    <p>{{contrato.escritura}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Sucursal</small>
                    <p>{{contrato.sucursal.nombre}}</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Tramitador</small>
                    <p>{{contrato.tramitador.nombre}}</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto nivel de deuda</small>
                    <p>{{contrato.montoNivelDeuda}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto contrato</small>
                    <p>{{contrato.MontoContrato}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Primera Cuota </small>
                    <p>{{contrato.primeraCuota}}</p> 
                 </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Fecha Primera Cuota</small>
                    <p>{{contrato.fechaPrimeraCuota|date('Y-m-d')}}</p> 
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Cuotas restantes</small>
                    <p>{{contrato.cuotas}}</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Valor cuota</small>
                    <p>{{contrato.valorCuota}}</p>   
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
                    <p>{{contrato.fechaPrimerPago|date('Y-m-d')}}</p> 
                </div>
            </div>
            <hr>
            <div class=\"card\">
                <div class=\"card-header\">
                    Roles
                </div>
                <div class=\"card-body\" id=\"contratoRoles\">
            
                </div>
            </div>
            <div class=\"col-sm-12 col-md-12\">
                <small class=\"text-muted\">Observación</small>
                <p>{{contrato.observacion}}</p>   
                
            </div>
            {% if metodo is defined %}
                
                {% if metodo == \"T\" %}
                {{ include('contrato/_terminar.html.twig', {'button_label': 'Modificar'}) }}
                {% endif %}
            {% endif %}
        </div>

        
    </div>

</div>
<div class=\"col-sm-12 col-md-4\">
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
    
        <!-- Timelime example  -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                <!-- The time line -->
                    <div class=\"timeline\">
                        <!-- timeline time label -->
                        <div class=\"time-label\">
                        <span class=\"bg-red\">{{agenda.fechaCarga|date('d-m-Y H:i')}}</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        {% for observacion in agenda.agendaObservacions %}
                            
                        
                        <div class=\"time-label\">
                            <span class=\"bg-green\">{{observacion.fechaRegistro|date('d-m-Y')}}</span>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope bg-blue\"></i>
                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>{{observacion.fechaRegistro|date('h:i')}}</span>
                                <h3 class=\"timeline-header\"><a href=\"#\">{{observacion.status}}</a> {{observacion.usuarioRegistro}} </h3>

                                <div class=\"timeline-body\">
                                    {{observacion.observacion}}
                                </div>
                               
                            </div>
                        </div>
                        {% endfor %}
                        <div>
                            <i class=\"fas fa-clock bg-gray\"></i>
                          </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    </div>
</div>
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
            }
    
        });
    </script>
    

{% endblock %}
", "contrato/show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\show.html.twig");
    }
}
