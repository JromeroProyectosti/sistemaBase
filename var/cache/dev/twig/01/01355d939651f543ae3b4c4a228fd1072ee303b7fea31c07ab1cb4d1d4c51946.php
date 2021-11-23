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

/* cobranza/vercobranza_show.html.twig */
class __TwigTemplate_ce1a757df7fd8968fc2f580cb1085e499a4b1e2a4e39c22ee36d52ae20b1dee5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/vercobranza_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/vercobranza_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/vercobranza_show.html.twig", 1);
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

        echo "Cobranza";
        
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
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Compañia</small><br>
                <label>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 14, $this->source); })()), "agenda", [], "any", false, false, false, 14), "cuenta", [], "any", false, false, false, 14), "nombre", [], "any", false, false, false, 14), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Sucursal</small><br>
                <label>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 18, $this->source); })()), "sucursal", [], "any", false, false, false, 18), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Estado</small><br>
                <label>. </label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Abogado</small><br>
                <label>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 26, $this->source); })()), "agenda", [], "any", false, false, false, 26), "abogado", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Tramitador</small><br>
                <label>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 30, $this->source); })()), "tramitador", [], "any", false, false, false, 30), "nombre", [], "any", false, false, false, 30), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Fecha Contrato</small><br>
                <label>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 34, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Nombre Cliente</small><br>
                <label>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 38, $this->source); })()), "nombre", [], "any", false, false, false, 38), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Rut Cliente</small><br>
                <label>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 42, $this->source); })()), "rut", [], "any", false, false, false, 42), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Teléfono Cliente</small><br>
                <label>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 46, $this->source); })()), "telefono", [], "any", false, false, false, 46), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Teléfono Recado Cliente</small><br>
                <label>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 50, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Correo Cliente</small><br>
                <label>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Dirección Cliente</small><br>
                <label>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 58, $this->source); })()), "direccion", [], "any", false, false, false, 58), "html", null, true);
        echo "</label>
            </div>
        </div>
        <hr>
        <h2>Detalle</h2>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-6\">
                <table class=\"table table-sm table-border\">
                    <tr>
                        <th>N° Cuota</th>
                        <th>Fecha Vcto</th>

                        <th>Valor Cuota</th>
                        <th>Monto Pgdo</th>
                        <th>Saldo</th>
                        <th>Ver Pagos</th>

                    </tr>

                    ";
        // line 77
        $context["total"] = 0;
        // line 78
        echo "                    ";
        $context["total_pagado"] = 0;
        // line 79
        echo "                    ";
        $context["total_deuda"] = 0;
        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 80, $this->source); })()), "detalleCuotas", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 81
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["cuota"], "anular", [], "any", false, false, false, 81)) {
                // line 82
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["cuota"], "isMulta", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "
                    ";
                } else {
                    // line 85
                    echo "                    <tr class=\"table-danger\">
                        <td>
                            ";
                    // line 87
                    if (twig_get_attribute($this->env, $this->source, $context["cuota"], "isMulta", [], "any", false, false, false, 87)) {
                        // line 88
                        echo "                                *
                            ";
                    }
                    // line 90
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "numero", [], "any", false, false, false, 90), 0, ",", "."), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 92), 0, ",", "."), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 94
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 94), 0))) {
                        // line 95
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 95), 0, ",", "."), "html", null, true);
                        echo "
                            ";
                    }
                    // line 97
                    echo "                        </td>
                        <td>
                            ";
                    // line 99
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 99), 0))) {
                        // line 100
                        echo "                                
                            
                                ";
                        // line 102
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 102) - twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 102)), 0, ",", "."), "html", null, true);
                        echo "
                                ";
                        // line 103
                        $context["total_deuda"] = ((isset($context["total_deuda"]) || array_key_exists("total_deuda", $context) ? $context["total_deuda"] : (function () { throw new RuntimeError('Variable "total_deuda" does not exist.', 103, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 103) - twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 103)));
                        // line 104
                        echo "                            ";
                    }
                    // line 105
                    echo "                        </td>
                        <td>
                            ";
                    // line 107
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 107), 0))) {
                        // line 108
                        echo "                            <button class=\"btn btn-success\" onclick=\"javascript:detallePago(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "id", [], "any", false, false, false, 108), "html", null, true);
                        echo ")\"><i class=\"fas fa-eye\"></i></button>
                            ";
                    }
                    // line 110
                    echo "                        </td>
                       
                    </tr>
                    ";
                }
                // line 114
                echo "                    ";
            } else {
                // line 115
                echo "                        <tr>
                            <td>
                                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["cuota"], "isMulta", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                                    *
                                ";
                }
                // line 120
                echo "                                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "numero", [], "any", false, false, false, 120), 0, ",", "."), "html", null, true);
                echo "</td>
                            <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 121), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 122), 0, ",", "."), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 124
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 124), 0))) {
                    // line 125
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 125), 0, ",", "."), "html", null, true);
                    echo "
                                ";
                }
                // line 127
                echo "                            </td>
                            <td>
                                ";
                // line 129
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 129), 0))) {
                    // line 130
                    echo "                                    
                                
                                    ";
                    // line 132
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 132) - twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 132)), 0, ",", "."), "html", null, true);
                    echo "
                                    ";
                    // line 133
                    $context["total_deuda"] = ((isset($context["total_deuda"]) || array_key_exists("total_deuda", $context) ? $context["total_deuda"] : (function () { throw new RuntimeError('Variable "total_deuda" does not exist.', 133, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 133) - twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 133)));
                    // line 134
                    echo "                                ";
                }
                // line 135
                echo "                            </td>
                            <td>
                                ";
                // line 137
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 137), 0))) {
                    // line 138
                    echo "                                <button class=\"btn btn-success\" onclick=\"javascript:detallePago(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "id", [], "any", false, false, false, 138), "html", null, true);
                    echo ")\"><i class=\"fas fa-eye\"></i></button>
                                ";
                }
                // line 140
                echo "                            </td>
                            ";
                // line 141
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 141));
                // line 142
                echo "                            ";
                $context["total_pagado"] = ((isset($context["total_pagado"]) || array_key_exists("total_pagado", $context) ? $context["total_pagado"] : (function () { throw new RuntimeError('Variable "total_pagado" does not exist.', 142, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 142));
                // line 143
                echo "                            
                        </tr>
                    ";
            }
            // line 146
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                    <tr>
                        <th colspan=\"2\">Totales</th>
                        <th>";
        // line 149
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 149, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>
                            ";
        // line 151
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total_pagado"]) || array_key_exists("total_pagado", $context) ? $context["total_pagado"] : (function () { throw new RuntimeError('Variable "total_pagado" does not exist.', 151, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 154
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total_deuda"]) || array_key_exists("total_deuda", $context) ? $context["total_deuda"] : (function () { throw new RuntimeError('Variable "total_deuda" does not exist.', 154, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "
                        </th>
                    </tr>
                </table>
            </div>

            <div class=\"col-sm-12 col-md-6\" id='detallePagos'>

                
            </div>
        </div>
    </div>
</div>

<script>
    function detallePago(cuota){
        \$.ajax({
            url:\"/pago/\"+cuota+\"/detallepagos\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#detallePagos\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#detallePagos\").html(data);
            }

        });
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/vercobranza_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 154,  383 => 151,  378 => 149,  374 => 147,  368 => 146,  363 => 143,  360 => 142,  358 => 141,  355 => 140,  349 => 138,  347 => 137,  343 => 135,  340 => 134,  338 => 133,  334 => 132,  330 => 130,  328 => 129,  324 => 127,  318 => 125,  316 => 124,  311 => 122,  307 => 121,  302 => 120,  298 => 118,  296 => 117,  292 => 115,  289 => 114,  283 => 110,  277 => 108,  275 => 107,  271 => 105,  268 => 104,  266 => 103,  262 => 102,  258 => 100,  256 => 99,  252 => 97,  246 => 95,  244 => 94,  239 => 92,  235 => 91,  230 => 90,  226 => 88,  224 => 87,  220 => 85,  216 => 83,  213 => 82,  210 => 81,  205 => 80,  202 => 79,  199 => 78,  197 => 77,  175 => 58,  168 => 54,  161 => 50,  154 => 46,  147 => 42,  140 => 38,  133 => 34,  126 => 30,  119 => 26,  108 => 18,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cobranza{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: {{contrato.id}}</h1>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Compañia</small><br>
                <label>{{contrato.agenda.cuenta.nombre}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Sucursal</small><br>
                <label>{{contrato.sucursal.nombre}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Estado</small><br>
                <label>. </label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Abogado</small><br>
                <label>{{contrato.agenda.abogado.nombre}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Tramitador</small><br>
                <label>{{contrato.tramitador.nombre}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Fecha Contrato</small><br>
                <label>{{contrato.fechaCreacion|date('Y-m-d')}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Nombre Cliente</small><br>
                <label>{{contrato.nombre}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Rut Cliente</small><br>
                <label>{{contrato.rut}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Teléfono Cliente</small><br>
                <label>{{contrato.telefono}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Teléfono Recado Cliente</small><br>
                <label>{{contrato.telefonoRecado}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Correo Cliente</small><br>
                <label>{{contrato.email}}</label>
            </div>
            <div class=\"col-sm-12 col-md-4\">
                <small class=\"text-muted\">Dirección Cliente</small><br>
                <label>{{contrato.direccion}}</label>
            </div>
        </div>
        <hr>
        <h2>Detalle</h2>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-6\">
                <table class=\"table table-sm table-border\">
                    <tr>
                        <th>N° Cuota</th>
                        <th>Fecha Vcto</th>

                        <th>Valor Cuota</th>
                        <th>Monto Pgdo</th>
                        <th>Saldo</th>
                        <th>Ver Pagos</th>

                    </tr>

                    {% set total=0 %}
                    {% set total_pagado=0 %}
                    {% set total_deuda=0 %}
                {% for cuota in contrato.detalleCuotas %}
                    {% if cuota.anular %}
                    {% if cuota.isMulta %}

                    {% else %}
                    <tr class=\"table-danger\">
                        <td>
                            {% if cuota.isMulta %}
                                *
                            {% endif %}
                            {{cuota.numero|number_format(0,\",\",\".\")}}</td>
                        <td>{{cuota.fechaPago|date('Y-m-d')}}</td>
                        <td>{{cuota.monto|number_format(0,\",\",\".\")}}</td>
                        <td>
                            {% if cuota.pagado>0 %}
                            {{cuota.pagado|number_format(0,\",\",\".\")}}
                            {% endif %}
                        </td>
                        <td>
                            {% if cuota.pagado>0 %}
                                
                            
                                {{(cuota.monto - cuota.pagado)|number_format(0,\",\",\".\")}}
                                {% set total_deuda = total_deuda + (cuota.monto - cuota.pagado)%}
                            {% endif %}
                        </td>
                        <td>
                            {% if cuota.pagado>0 %}
                            <button class=\"btn btn-success\" onclick=\"javascript:detallePago({{cuota.id}})\"><i class=\"fas fa-eye\"></i></button>
                            {% endif %}
                        </td>
                       
                    </tr>
                    {% endif %}
                    {% else %}
                        <tr>
                            <td>
                                {% if cuota.isMulta %}
                                    *
                                {% endif %}
                                {{cuota.numero|number_format(0,\",\",\".\")}}</td>
                            <td>{{cuota.fechaPago|date('Y-m-d')}}</td>
                            <td>{{cuota.monto|number_format(0,\",\",\".\")}}</td>
                            <td>
                                {% if cuota.pagado>0 %}
                                {{cuota.pagado|number_format(0,\",\",\".\")}}
                                {% endif %}
                            </td>
                            <td>
                                {% if cuota.pagado>0 %}
                                    
                                
                                    {{(cuota.monto - cuota.pagado)|number_format(0,\",\",\".\")}}
                                    {% set total_deuda = total_deuda + (cuota.monto - cuota.pagado)%}
                                {% endif %}
                            </td>
                            <td>
                                {% if cuota.pagado>0 %}
                                <button class=\"btn btn-success\" onclick=\"javascript:detallePago({{cuota.id}})\"><i class=\"fas fa-eye\"></i></button>
                                {% endif %}
                            </td>
                            {% set total = total + cuota.monto %}
                            {% set total_pagado = total_pagado + cuota.pagado %}
                            
                        </tr>
                    {% endif %}
                {% endfor %}
                    <tr>
                        <th colspan=\"2\">Totales</th>
                        <th>{{total|number_format(0,\",\",\".\")}}</th>
                        <th>
                            {{total_pagado|number_format(0,\",\",\".\")}}
                        </th>
                        <th>
                            {{total_deuda|number_format(0,\",\",\".\")}}
                        </th>
                    </tr>
                </table>
            </div>

            <div class=\"col-sm-12 col-md-6\" id='detallePagos'>

                
            </div>
        </div>
    </div>
</div>

<script>
    function detallePago(cuota){
        \$.ajax({
            url:\"/pago/\"+cuota+\"/detallepagos\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#detallePagos\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#detallePagos\").html(data);
            }

        });
    }
</script>
{% endblock %}
", "cobranza/vercobranza_show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\vercobranza_show.html.twig");
    }
}
