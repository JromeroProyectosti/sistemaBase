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

/* pdf/fpr.html.twig */
class __TwigTemplate_c1a3cf11b43de22cc4dc28c30449056a8454e7aed49ae65405f7e7c293a0f776 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pdf/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/fpr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/fpr.html.twig"));

        $this->parent = $this->loadTemplate("pdf/base.html.twig", "pdf/fpr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table width='100%'>
        <tr>
            <td>
                <img src=\"http://rendicion.ulma.cl/build/img/logoUlma.jpg\">
            </td>
            <td width=\"60%\" align=\"center\">
                <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 9, $this->source); })()), "estado", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            </td>
            <td align=\"center\">
                <p>";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rendicion"] ?? null), "tipo", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rendicion"] ?? null), "tipo", [], "any", false, false, false, 12), "Rendicion")) : ("Rendicion")), "html", null, true);
        echo " </p>
                <br>
                <h1> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 14, $this->source); })()), "numero", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
            </td>
        </tr>
    </table>
        <br>
    <table >
        <tr>
            <td width=\"150px\"><small class=\"text-muted\">Trabajador</small></td>
            <td colspan=\"3\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 22, $this->source); })()), "usuario", [], "any", false, false, false, 22), "nombre", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        <tr>
            <td><small class=\"text-muted\">Fecha Registro</small></td>
            <td  colspan=\"3\">";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 25, $this->source); })()), "fechaRegistro", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 25, $this->source); })()), "fechaRegistro", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <td  width=\"150px\"><small class=\"text-muted\">Fecha Inicio</small></td>
            <td width=\"200px\">";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 29, $this->source); })()), "fechaInicio", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 29, $this->source); })()), "fechaInicio", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            <td  width=\"150px\"><small class=\"text-muted\">Fecha Fin</small></td>
            <td>";
        // line 31
        ((twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 31, $this->source); })()), "fechaFin", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 31, $this->source); })()), "fechaInicio", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <td  width=\"150px\"><small class=\"text-muted\">Monto</small></td>
            <td colspan=\"3\">\$";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 35, $this->source); })()), "monto", [], "any", false, false, false, 35)), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table class='table'>
        <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Observación</small><br>
                <label>";
        // line 42
        echo twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 42, $this->source); })()), "observacion", [], "any", false, false, false, 42);
        echo "</label>
            </td>
        </tr>
            
        <tr>
            <td>
                <small class=\"text-muted\">Jefe</small><br>
                <label>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jefe"]) || array_key_exists("jefe", $context) ? $context["jefe"] : (function () { throw new RuntimeError('Variable "jefe" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), "html", null, true);
        echo "</label>
            </td>
            <td colspan=\"3\">
                <small class=\"text-muted\">Nota del Jefe</small><br>
                <label>";
        // line 53
        echo twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 53, $this->source); })()), "observacionAprecJefe", [], "any", false, false, false, 53);
        echo "</label>
            </td>
        </tr>
        ";
        // line 56
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 56, $this->source); })()), "apruebajefe", [], "any", false, false, false, 56), 1))) {
            // line 57
            echo "        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Aprobacion Jefe</small><br>
                <label>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 61, $this->source); })()), "observacionaprecjefe", [], "any", false, false, false, 61), "html", null, true);
            echo "</label>
            </td>
            </tr>
  
        ";
        }
        // line 66
        echo "        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 66, $this->source); })()), "rechazajefe", [], "any", false, false, false, 66), 1))) {
            // line 67
            echo "        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Rechazo Jefe <i class=\"fas fa-info-circle text-danger\"></i></small><br>
                <label>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 71, $this->source); })()), "observacionaprecjefe", [], "any", false, false, false, 71), "html", null, true);
            echo "</label>
            </td>
            </tr>
  
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 77, $this->source); })()), "apruebaar", [], "any", false, false, false, 77), null))) {
            // line 78
            echo "        
        <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Aprobacion Administrador de Fondos</small><br>
                <label>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 82, $this->source); })()), "observacionaprecar", [], "any", false, false, false, 82), "html", null, true);
            echo "</label>
            </td>
        </tr>
  
        ";
        }
        // line 87
        echo "        ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 87, $this->source); })()), "rechazaar", [], "any", false, false, false, 87), null))) {
            // line 88
            echo "        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Rechazo Administrador de Fondos <i class=\"fas fa-info-circle text-danger\"></i></small><br>
                <label>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 92, $this->source); })()), "observacionaprecar", [], "any", false, false, false, 92), "html", null, true);
            echo "</label>
            </td>
            </tr>
  
        ";
        }
        // line 97
        echo "    </table>
    <div class=\"row\">
        


        </div>
        <hr />
        <div class=\"row\" style=\"margin-top: 20px\">
            <div class=\"col-12\">
                
                <h3> Gastos</h3>
            </div>
            <div class=\"col-md-12 col-sm-12\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>
                                Boleta
                            </th>
                            <th>
                                Concepto
                            </th>
                            <th>
                                Descripcion
                            </th>
                            
                            <th>
                                Estado
                            </th>
                            <th>
                                Observación
                            </th>
                            <th>
                                Monto
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 135
        $context["total"] = 0;
        // line 136
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 136, $this->source); })()), "rendicionDetalles", [], "any", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 137
            echo "                        
                        ";
            // line 138
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["detalle"], "aprobado", [], "any", false, false, false, 138), 1))) {
                // line 139
                echo "                        <tr class=\"bg-danger text-light\">
                        ";
            } else {
                // line 141
                echo "                            ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["detalle"], "monto", [], "any", false, false, false, 141));
                // line 142
                echo "                        <tr>
                        ";
            }
            // line 144
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "boleta", [], "any", false, false, false, 144), "html", null, true);
            echo "</td>
                            <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "concepto", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
                            <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "descripcion", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
                            
                            <td>";
            // line 148
            echo ((twig_get_attribute($this->env, $this->source, $context["detalle"], "aprobado", [], "any", false, false, false, 148)) ? ("Aprobado") : ("Rechazado"));
            echo "</td>
                            <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "observacion", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
                            <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "monto", [], "any", false, false, false, 150), "html", null, true);
            echo "</td>
                        </tr>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </tbody>
                    <tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Gastos
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"neto\">
\t\t\t\t\t\t\t\t\$";
        // line 166
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 166, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tTotal Solicitado
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"solicitado\">
\t\t\t\t\t\t\t\t\$";
        // line 178
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 178, $this->source); })()), "monto", [], "any", false, false, false, 178)), "html", null, true);
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td> <small id=\"leyenda-total\">
\t\t\t\t\t\t\t\t";
        // line 185
        $context["resta"] = (twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 185, $this->source); })()), "monto", [], "any", false, false, false, 185) - (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 185, $this->source); })()));
        // line 186
        echo "
\t\t\t\t\t\t\t\t";
        // line 187
        if ((0 <= twig_compare((isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 187, $this->source); })()), 0))) {
            // line 188
            echo "\t\t\t\t\t\t\t\tDevolver
\t\t\t\t\t\t\t\t";
        } else {
            // line 190
            echo "\t\t\t\t\t\t\t\t";
            $context["resta"] = ((isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 190, $this->source); })()) *  -1);
            // line 191
            echo "\t\t\t\t\t\t\t\tPagar
\t\t\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"bg-success\" id=\"total\">

\t\t\t\t\t\t\t\t\$";
        // line 197
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["resta"]) || array_key_exists("resta", $context) ? $context["resta"] : (function () { throw new RuntimeError('Variable "resta" does not exist.', 197, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
                </table>
            </div>
            
            
        </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pdf/fpr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 197,  377 => 193,  373 => 191,  370 => 190,  366 => 188,  364 => 187,  361 => 186,  359 => 185,  349 => 178,  334 => 166,  321 => 155,  310 => 150,  306 => 149,  302 => 148,  297 => 146,  293 => 145,  288 => 144,  284 => 142,  281 => 141,  277 => 139,  275 => 138,  272 => 137,  267 => 136,  265 => 135,  225 => 97,  217 => 92,  211 => 88,  208 => 87,  200 => 82,  194 => 78,  192 => 77,  189 => 76,  181 => 71,  175 => 67,  172 => 66,  164 => 61,  158 => 57,  156 => 56,  150 => 53,  143 => 49,  133 => 42,  123 => 35,  116 => 31,  111 => 29,  104 => 25,  98 => 22,  87 => 14,  82 => 12,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pdf/base.html.twig' %}
{% block body %}
    <table width='100%'>
        <tr>
            <td>
                <img src=\"http://rendicion.ulma.cl/build/img/logoUlma.jpg\">
            </td>
            <td width=\"60%\" align=\"center\">
                <h1>{{rendicion.estado}}</h1>
            </td>
            <td align=\"center\">
                <p>{{rendicion.tipo|default('Rendicion')}} </p>
                <br>
                <h1> {{rendicion.numero}}</h1>
            </td>
        </tr>
    </table>
        <br>
    <table >
        <tr>
            <td width=\"150px\"><small class=\"text-muted\">Trabajador</small></td>
            <td colspan=\"3\">{{rendicion.usuario.nombre}}</td>
        <tr>
            <td><small class=\"text-muted\">Fecha Registro</small></td>
            <td  colspan=\"3\">{{rendicion.fechaRegistro ? rendicion.fechaRegistro|date('Y-m-d') : ''}}</td>
        </tr>
        <tr>
            <td  width=\"150px\"><small class=\"text-muted\">Fecha Inicio</small></td>
            <td width=\"200px\">{{rendicion.fechaInicio ? rendicion.fechaInicio|date('Y-m-d') : ''}}</td>
            <td  width=\"150px\"><small class=\"text-muted\">Fecha Fin</small></td>
            <td>{{rendicion.fechaFin ? rendicion.fechaInicio|date('Y-m-d') : ''}}</td>
        </tr>
        <tr>
            <td  width=\"150px\"><small class=\"text-muted\">Monto</small></td>
            <td colspan=\"3\">\${{rendicion.monto|number_format}}</td>
        </tr>
    </table>
    <table class='table'>
        <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Observación</small><br>
                <label>{{rendicion.observacion|raw}}</label>
            </td>
        </tr>
            
        <tr>
            <td>
                <small class=\"text-muted\">Jefe</small><br>
                <label>{{jefe.nombre}}</label>
            </td>
            <td colspan=\"3\">
                <small class=\"text-muted\">Nota del Jefe</small><br>
                <label>{{rendicion.observacionAprecJefe|raw}}</label>
            </td>
        </tr>
        {% if rendicion.apruebajefe == 1 %}
        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Aprobacion Jefe</small><br>
                <label>{{rendicion.observacionaprecjefe}}</label>
            </td>
            </tr>
  
        {% endif %}
        {% if rendicion.rechazajefe == 1 %}
        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Rechazo Jefe <i class=\"fas fa-info-circle text-danger\"></i></small><br>
                <label>{{rendicion.observacionaprecjefe}}</label>
            </td>
            </tr>
  
        {% endif %}

        {% if rendicion.apruebaar!= null %}
        
        <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Aprobacion Administrador de Fondos</small><br>
                <label>{{rendicion.observacionaprecar}}</label>
            </td>
        </tr>
  
        {% endif %}
        {% if rendicion.rechazaar!= null %}
        
            <tr>
            <td colspan=\"4\">
                <small class=\"text-muted\">Motivo Rechazo Administrador de Fondos <i class=\"fas fa-info-circle text-danger\"></i></small><br>
                <label>{{rendicion.observacionaprecar}}</label>
            </td>
            </tr>
  
        {% endif %}
    </table>
    <div class=\"row\">
        


        </div>
        <hr />
        <div class=\"row\" style=\"margin-top: 20px\">
            <div class=\"col-12\">
                
                <h3> Gastos</h3>
            </div>
            <div class=\"col-md-12 col-sm-12\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>
                                Boleta
                            </th>
                            <th>
                                Concepto
                            </th>
                            <th>
                                Descripcion
                            </th>
                            
                            <th>
                                Estado
                            </th>
                            <th>
                                Observación
                            </th>
                            <th>
                                Monto
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set total=0 %}
                        {% for detalle in rendicion.rendicionDetalles %}
                        
                        {% if detalle.aprobado!=1 %}
                        <tr class=\"bg-danger text-light\">
                        {% else %}
                            {% set total = total + detalle.monto %}
                        <tr>
                        {% endif %}
                            <td>{{detalle.boleta}}</td>
                            <td>{{detalle.concepto}}</td>
                            <td>{{detalle.descripcion}}</td>
                            
                            <td>{{detalle.aprobado? 'Aprobado' : 'Rechazado' }}</td>
                            <td>{{detalle.observacion}}</td>
                            <td>{{detalle.monto}}</td>
                        </tr>


                        {% endfor %}
                    </tbody>
                    <tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">
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
\t\t\t\t\t\t<td colspan=\"4\">
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
\t\t\t\t\t\t<td colspan=\"4\">
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
                </table>
            </div>
            
            
        </div>
    </div>
  {% endblock %}", "pdf/fpr.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pdf\\fpr.html.twig");
    }
}
