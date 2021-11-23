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

/* cobranza/show.html.twig */
class __TwigTemplate_eb939033844982422a90f7e36cadbcfb11ee5c3c568cf2f065e0bc81879b0c3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/show.html.twig", 1);
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
                    <small class=\"text-muted\">Dirección</small><br>
                    
                    <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 30, $this->source); })()), "direccion", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nacionalidad</small><br>
                    
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 35, $this->source); })()), "pais", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad</small><br>
                
                    <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 40, $this->source); })()), "ciudad", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Comuna</small><br>
                   
                    <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 45, $this->source); })()), "comuna", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono</small><br>
                   
                    <p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 50, $this->source); })()), "telefono", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Teléfono Recado</small><br>
                   
                    <p>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 55, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Estado Civil</small><br>
                  
                    <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 60, $this->source); })()), "estadoCivil", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vivienda</small>
                   
                    <p>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 65, $this->source); })()), "vivienda", [], "any", false, false, false, 65), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Vehiculo</small>
                  
                    <p>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 70, $this->source); })()), "vehiculo", [], "any", false, false, false, 70), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Situación Laboral</small><br>
                    
                    <p>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 75, $this->source); })()), "situacionLaboral", [], "any", false, false, false, 75), "html", null, true);
        echo "</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Clave única</small>
                    <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 80, $this->source); })()), "claveUnica", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Reunión</small>
                    <p>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 84, $this->source); })()), "reunion", [], "any", false, false, false, 84), "html", null, true);
        echo "</p>   
                </div>
            </div>
    
            <h4>Datos Contrato</h4>
            <div class=\"row\">
    
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Estrategia Juridica</small>
                    <p>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 93, $this->source); })()), "estrategiaJuridica", [], "any", false, false, false, 93), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text-muted\">Escritura</small>
                    <p>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 97, $this->source); })()), "escritura", [], "any", false, false, false, 97), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Sucursal</small>
                    <p>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 101, $this->source); })()), "sucursal", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Tramitador</small>
                    <p>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 106, $this->source); })()), "tramitador", [], "any", false, false, false, 106), "nombre", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>   
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto nivel de deuda</small>
                    <p>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 111, $this->source); })()), "montoNivelDeuda", [], "any", false, false, false, 111), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Monto contrato</small>
                    <p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 115, $this->source); })()), "MontoContrato", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Primera Cuota </small>
                    <p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 119, $this->source); })()), "primeraCuota", [], "any", false, false, false, 119), "html", null, true);
        echo "</p> 
                 </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Fecha Primera Cuota</small>
                    <p>";
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 123, $this->source); })()), "fechaPrimeraCuota", [], "any", false, false, false, 123), "Y-m-d"), "html", null, true);
        echo "</p> 
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Cuotas restantes</small>
                    <p>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 127, $this->source); })()), "cuotas", [], "any", false, false, false, 127), "html", null, true);
        echo "</p>   
                </div>
               
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Valor cuota</small>
                    <p>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 132, $this->source); })()), "valorCuota", [], "any", false, false, false, 132), "html", null, true);
        echo "</p>   
                </div>
                
            
                <div class=\"col-sm-12 col-md-12\">
                    <small class=\"text-muted\">Días de Pago</small>
                    <br>
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                       
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diasPagos"]) || array_key_exists("diasPagos", $context) ? $context["diasPagos"] : (function () { throw new RuntimeError('Variable "diasPagos" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["diasPago"]) {
            // line 142
            echo "                        <label class=\"btn btn-success 
                        ";
            // line 143
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 143, $this->source); })()), "diaPago", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 143)))) {
                // line 144
                echo "                        active
                        ";
            }
            // line 146
            echo "                        \">
                            <input type=\"radio\" name=\"chkDiasPago\" id=\"chkDiasPago";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 147), "html", null, true);
            echo "\" autocomplete=\"off\"
                            ";
            // line 148
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 148, $this->source); })()), "diaPago", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 148)))) {
                // line 149
                echo "                                checked
                            ";
            }
            // line 151
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "dias", [], "any", false, false, false, 151), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diasPago"], "nombre", [], "any", false, false, false, 151), "html", null, true);
            echo "
                        </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diasPago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted  t-mes-pago\">Mes Primer Pago</small>
                    <p>";
        // line 158
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 158, $this->source); })()), "fechaPrimerPago", [], "any", false, false, false, 158), "Y-m-d"), "html", null, true);
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
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 172, $this->source); })()), "observacion", [], "any", false, false, false, 172), "html", null, true);
        echo "</p>   
                
            </div>
            ";
        // line 175
        if (array_key_exists("metodo", $context)) {
            // line 176
            echo "                
                ";
            // line 177
            if ((0 === twig_compare((isset($context["metodo"]) || array_key_exists("metodo", $context) ? $context["metodo"] : (function () { throw new RuntimeError('Variable "metodo" does not exist.', 177, $this->source); })()), "T"))) {
                // line 178
                echo "                ";
                echo twig_include($this->env, $context, "cobranza/_terminar.html.twig", ["button_label" => "Modificar"]);
                echo "
                ";
            }
            // line 180
            echo "            ";
        }
        // line 181
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
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 199, $this->source); })()), "fechaCarga", [], "any", false, false, false, 199), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 203, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 204
            echo "                            
                        
                        <div class=\"time-label\">
                            <span class=\"bg-green\">";
            // line 207
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 207), "d-m-Y"), "html", null, true);
            echo "</span>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope bg-blue\"></i>
                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 212
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 212), "h:i"), "html", null, true);
            echo "</span>
                                <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 213), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 213), "html", null, true);
            echo " </h3>

                                <div class=\"timeline-body\">
                                    ";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 216), "html", null, true);
            echo "
                                </div>
                               
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
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
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 222,  439 => 216,  431 => 213,  427 => 212,  419 => 207,  414 => 204,  410 => 203,  403 => 199,  383 => 181,  380 => 180,  374 => 178,  372 => 177,  369 => 176,  367 => 175,  361 => 172,  344 => 158,  338 => 154,  326 => 151,  322 => 149,  320 => 148,  316 => 147,  313 => 146,  309 => 144,  307 => 143,  304 => 142,  300 => 141,  288 => 132,  280 => 127,  273 => 123,  266 => 119,  259 => 115,  252 => 111,  244 => 106,  236 => 101,  229 => 97,  222 => 93,  210 => 84,  203 => 80,  195 => 75,  187 => 70,  179 => 65,  171 => 60,  163 => 55,  155 => 50,  147 => 45,  139 => 40,  131 => 35,  123 => 30,  115 => 25,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <small class=\"text-muted\">Dirección</small><br>
                    
                    <p>{{contrato.direccion}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Nacionalidad</small><br>
                    
                    <p>{{contrato.pais}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad</small><br>
                
                    <p>{{contrato.ciudad}}</p>   
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Comuna</small><br>
                   
                    <p>{{contrato.comuna}}</p>   
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
                {{ include('cobranza/_terminar.html.twig', {'button_label': 'Modificar'}) }}
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
    

{% endblock %}
", "cobranza/show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\show.html.twig");
    }
}
