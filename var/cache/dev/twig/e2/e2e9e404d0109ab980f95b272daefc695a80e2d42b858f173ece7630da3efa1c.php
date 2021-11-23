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

/* reporte/reporte_abogado.html.twig */
class __TwigTemplate_4d195bd89bffd3fdbe54ec620b4c9a6ce741ad5b147ed6f4532cac4b622a22b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporte/reporte_abogado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporte/reporte_abogado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reporte/reporte_abogado.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "")) : ("")), "html", null, true);
        
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
        echo "<section>


    
    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            
            <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporte_abogado");
        echo "\" method=\"get\" id=\"bForm\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <select name=\"bCompania\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 22
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\"
                            ";
            // line 23
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 23)))) {
                // line 24
                echo "                                selected
                            ";
            }
            // line 26
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 26), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre abogado\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <select name=\"bTipofecha\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 35
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 35, $this->source); })()), 0))) {
            // line 36
            echo "                            selected
                        ";
        }
        // line 37
        echo ">Fecha Carga</option>
                        <option value=\"1\" ";
        // line 38
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 38, $this->source); })()), 1))) {
            // line 39
            echo "                        selected
                    ";
        }
        // line 40
        echo ">Fecha Asignado</option>
                        <option value=\"2\" ";
        // line 41
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 41, $this->source); })()), 2))) {
            // line 42
            echo "                        selected
                    ";
        }
        // line 43
        echo ">Fecha Contrato</option>

                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-1\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
           

            </div>
            </form>
        </div>  
        
    </div>
</section>
</form>
<section>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 400px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr >
                        <th scope=\"col\" align=\"right\">Abogado</th>
                        <th scope=\"col\" style=\"text-align: right;\">Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">No Califica AB</th>
                        <th scope=\"col\" style=\"text-align: right;\">No Contrata</th>
                        <th scope=\"col\" style=\"text-align: right;\">Contrata</th>
                        <th scope=\"col\" style=\"text-align: right;\">Ratifica Termino</th>
                        <th scope=\"col\" style=\"text-align: right;\">Efectividad</th>
                        <th scope=\"col\" style=\"text-align: right;\">Honorarios</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 84
        $context["suma_total"] = 0;
        // line 85
        echo "                    ";
        $context["suma_nocalifica"] = 0;
        // line 86
        echo "                    ";
        $context["suma_nocontrata"] = 0;
        // line 87
        echo "                    ";
        $context["suma_contrata"] = 0;
        // line 88
        echo "                    ";
        $context["suma_ratificatermino"] = 0;
        // line 89
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) || array_key_exists("reportes", $context) ? $context["reportes"] : (function () { throw new RuntimeError('Variable "reportes" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 90
            echo "
                    <tr>
                        <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "abogado_nombre", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                        <td  align=\"right\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "nocalifica", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "nocontrata", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "ratificatermino", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 98
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 98) - twig_get_attribute($this->env, $this->source, $context["reporte"], "ratificatermino", [], "any", false, false, false, 98)) * 100) / (((twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 98) - twig_get_attribute($this->env, $this->source, $context["reporte"], "nocalifica", [], "any", false, false, false, 98))) ? ((twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 98) - twig_get_attribute($this->env, $this->source, $context["reporte"], "nocalifica", [], "any", false, false, false, 98))) : (1))), 0, ",", "."), "html", null, true);
            echo "%</td>
                        <td align=\"right\">\$";
            // line 99
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reporte"], "monto", [], "any", false, false, false, 99) / ((twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 99)) ? (twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 99)) : (1))), 0, ",", "."), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            // line 101
            $context["suma_total"] = ((isset($context["suma_total"]) || array_key_exists("suma_total", $context) ? $context["suma_total"] : (function () { throw new RuntimeError('Variable "suma_total" does not exist.', 101, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 101));
            // line 102
            echo "                    ";
            $context["suma_nocalifica"] = ((isset($context["suma_nocalifica"]) || array_key_exists("suma_nocalifica", $context) ? $context["suma_nocalifica"] : (function () { throw new RuntimeError('Variable "suma_nocalifica" does not exist.', 102, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "nocalifica", [], "any", false, false, false, 102));
            // line 103
            echo "                    ";
            $context["suma_nocontrata"] = ((isset($context["suma_nocontrata"]) || array_key_exists("suma_nocontrata", $context) ? $context["suma_nocontrata"] : (function () { throw new RuntimeError('Variable "suma_nocontrata" does not exist.', 103, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "nocontrata", [], "any", false, false, false, 103));
            // line 104
            echo "                    ";
            $context["suma_contrata"] = ((isset($context["suma_contrata"]) || array_key_exists("suma_contrata", $context) ? $context["suma_contrata"] : (function () { throw new RuntimeError('Variable "suma_contrata" does not exist.', 104, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 104));
            // line 105
            echo "                    ";
            $context["suma_ratificatermino"] = ((isset($context["suma_ratificatermino"]) || array_key_exists("suma_ratificatermino", $context) ? $context["suma_ratificatermino"] : (function () { throw new RuntimeError('Variable "suma_ratificatermino" does not exist.', 105, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "ratificatermino", [], "any", false, false, false, 105));
            // line 106
            echo "                    
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                    <tr>
                        <td colspan=\"10\">No hay registros</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                </tbody>
                <tfoot>
                    <tr style=\"text-align: right;\">
                        <th></th>
                        <th>";
        // line 117
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_total"]) || array_key_exists("suma_total", $context) ? $context["suma_total"] : (function () { throw new RuntimeError('Variable "suma_total" does not exist.', 117, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_nocalifica"]) || array_key_exists("suma_nocalifica", $context) ? $context["suma_nocalifica"] : (function () { throw new RuntimeError('Variable "suma_nocalifica" does not exist.', 118, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 119
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_nocontrata"]) || array_key_exists("suma_nocontrata", $context) ? $context["suma_nocontrata"] : (function () { throw new RuntimeError('Variable "suma_nocontrata" does not exist.', 119, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 120
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_contrata"]) || array_key_exists("suma_contrata", $context) ? $context["suma_contrata"] : (function () { throw new RuntimeError('Variable "suma_contrata" does not exist.', 120, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 121
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_ratificatermino"]) || array_key_exists("suma_ratificatermino", $context) ? $context["suma_ratificatermino"] : (function () { throw new RuntimeError('Variable "suma_ratificatermino" does not exist.', 121, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th></th>
                        <th></th>
                    </tr>

                </tfoot>
            </table>
        </div>
    </div>
</section>

<script>
    \$('#bFecha').daterangepicker({
        
        \"drops\": \"down\",
        \"startDate\":\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "\",
        \"endDate\": \"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    
    });
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reporte/reporte_abogado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 137,  338 => 136,  320 => 121,  316 => 120,  312 => 119,  308 => 118,  304 => 117,  297 => 112,  288 => 108,  282 => 106,  279 => 105,  276 => 104,  273 => 103,  270 => 102,  268 => 101,  263 => 99,  259 => 98,  255 => 97,  251 => 96,  247 => 95,  243 => 94,  239 => 93,  235 => 92,  231 => 90,  225 => 89,  222 => 88,  219 => 87,  216 => 86,  213 => 85,  211 => 84,  168 => 43,  164 => 42,  162 => 41,  159 => 40,  155 => 39,  153 => 38,  150 => 37,  146 => 36,  144 => 35,  137 => 31,  132 => 28,  123 => 26,  119 => 24,  117 => 23,  112 => 22,  108 => 21,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('')}}{% endblock %}

{% block body %}
<section>


    
    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            
            <form action=\"{{path('reporte_abogado')}}\" method=\"get\" id=\"bForm\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <select name=\"bCompania\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        {% for compania in companias %}
                            <option value=\"{{compania.id}}\"
                            {% if bCompania==compania.id %}
                                selected
                            {% endif %}
                            >{{compania.nombre}}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre abogado\" value=\"{{bFiltro}}\">
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <select name=\"bTipofecha\" class=\"form-control\">
                        <option value=\"0\" {% if tipoFecha==0 %}
                            selected
                        {% endif %}>Fecha Carga</option>
                        <option value=\"1\" {% if tipoFecha==1 %}
                        selected
                    {% endif %}>Fecha Asignado</option>
                        <option value=\"2\" {% if tipoFecha==2 %}
                        selected
                    {% endif %}>Fecha Contrato</option>

                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-1\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
           

            </div>
            </form>
        </div>  
        
    </div>
</section>
</form>
<section>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 400px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr >
                        <th scope=\"col\" align=\"right\">Abogado</th>
                        <th scope=\"col\" style=\"text-align: right;\">Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">No Califica AB</th>
                        <th scope=\"col\" style=\"text-align: right;\">No Contrata</th>
                        <th scope=\"col\" style=\"text-align: right;\">Contrata</th>
                        <th scope=\"col\" style=\"text-align: right;\">Ratifica Termino</th>
                        <th scope=\"col\" style=\"text-align: right;\">Efectividad</th>
                        <th scope=\"col\" style=\"text-align: right;\">Honorarios</th>
                    </tr>
                </thead>
                <tbody>
                    {% set suma_total=0 %}
                    {% set suma_nocalifica=0 %}
                    {% set suma_nocontrata=0 %}
                    {% set suma_contrata=0 %}
                    {% set suma_ratificatermino=0 %}
                    {% for reporte in reportes %}

                    <tr>
                        <td>{{ reporte.abogado_nombre }}</td>
                        <td align=\"right\">{{ reporte.total}}</td>
                        <td  align=\"right\">{{ reporte.nocalifica}}</td>
                        <td align=\"right\">{{ reporte.nocontrata}}</td>
                        <td align=\"right\">{{ reporte.contrata}}</td>
                        <td align=\"right\">{{ reporte.ratificatermino}}</td>
                        <td align=\"right\">{{ (((reporte.contrata-reporte.ratificatermino)*100)/((reporte.total-reporte.nocalifica)?(reporte.total-reporte.nocalifica):1))|number_format(0,\",\",\".\")}}%</td>
                        <td align=\"right\">\${{(reporte.monto/(reporte.contrata?reporte.contrata:1))|number_format(0,\",\",\".\")}}</td>
                    </tr>
                    {% set suma_total = suma_total + reporte.total %}
                    {% set suma_nocalifica = suma_nocalifica + reporte.nocalifica %}
                    {% set suma_nocontrata = suma_nocontrata + reporte.nocontrata %}
                    {% set suma_contrata = suma_contrata + reporte.contrata %}
                    {% set suma_ratificatermino = suma_ratificatermino + reporte.ratificatermino %}
                    
                    {% else %}
                    <tr>
                        <td colspan=\"10\">No hay registros</td>
                    </tr>
                    {% endfor %}

                </tbody>
                <tfoot>
                    <tr style=\"text-align: right;\">
                        <th></th>
                        <th>{{ suma_total|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_nocalifica|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_nocontrata|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_contrata|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_ratificatermino|number_format(0,\",\",\".\")}}</th>
                        <th></th>
                        <th></th>
                    </tr>

                </tfoot>
            </table>
        </div>
    </div>
</section>

<script>
    \$('#bFecha').daterangepicker({
        
        \"drops\": \"down\",
        \"startDate\":\"{{dateInicio}}\",
        \"endDate\": \"{{dateFin}}\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    
    });
    
</script>
{% endblock %}", "reporte/reporte_abogado.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\reporte\\reporte_abogado.html.twig");
    }
}
