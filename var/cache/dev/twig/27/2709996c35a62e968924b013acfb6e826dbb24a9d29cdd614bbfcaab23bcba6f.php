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

/* reporte/reporte_agendador.html.twig */
class __TwigTemplate_534a84f9e460c5947735284291d5188058c15873aa0853b508fbf98b802213a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporte/reporte_agendador.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporte/reporte_agendador.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reporte/reporte_agendador.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporte_agendador");
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
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre agendador\" value=\"";
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
                        <th scope=\"col\" align=\"right\">Agendador</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos</th>
                        <th scope=\"col\" style=\"text-align: right;\">Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Contratados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos vs Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos vs Contratos</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 82
        $context["suma_total"] = 0;
        // line 83
        echo "                    
                    ";
        // line 84
        $context["suma_contrata"] = 0;
        // line 85
        echo "                    ";
        $context["suma_agendado"] = 0;
        // line 86
        echo "                    
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) || array_key_exists("reportes", $context) ? $context["reportes"] : (function () { throw new RuntimeError('Variable "reportes" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 88
            echo "
                    <tr>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "agendador_nombre", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                        <td  align=\"right\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "agendado", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 94
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["reporte"], "agendado", [], "any", false, false, false, 94) / ((twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 94)) ? (twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 94)) : (1))) * 100), 0, ",", "."), "html", null, true);
            echo "%</td>
                        <td align=\"right\">";
            // line 95
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 95) / ((twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 95)) ? (twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 95)) : (1))) * 100), 0, ",", "."), "html", null, true);
            echo "%</td>
                    </tr>
                    ";
            // line 97
            $context["suma_total"] = ((isset($context["suma_total"]) || array_key_exists("suma_total", $context) ? $context["suma_total"] : (function () { throw new RuntimeError('Variable "suma_total" does not exist.', 97, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "total", [], "any", false, false, false, 97));
            // line 98
            echo "                    ";
            $context["suma_contrata"] = ((isset($context["suma_contrata"]) || array_key_exists("suma_contrata", $context) ? $context["suma_contrata"] : (function () { throw new RuntimeError('Variable "suma_contrata" does not exist.', 98, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "contrata", [], "any", false, false, false, 98));
            // line 99
            echo "                    ";
            $context["suma_agendado"] = ((isset($context["suma_agendado"]) || array_key_exists("suma_agendado", $context) ? $context["suma_agendado"] : (function () { throw new RuntimeError('Variable "suma_agendado" does not exist.', 99, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["reporte"], "agendado", [], "any", false, false, false, 99));
            // line 100
            echo "                   
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "                    <tr>
                        <td colspan=\"6\">No hay registros</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                </tbody>
                <tfoot>
                    <tr style=\"text-align: right;\">
                        <th></th>
                        <th>";
        // line 111
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_total"]) || array_key_exists("suma_total", $context) ? $context["suma_total"] : (function () { throw new RuntimeError('Variable "suma_total" does not exist.', 111, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 112
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_agendado"]) || array_key_exists("suma_agendado", $context) ? $context["suma_agendado"] : (function () { throw new RuntimeError('Variable "suma_agendado" does not exist.', 112, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</th>
                        <th>";
        // line 113
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["suma_contrata"]) || array_key_exists("suma_contrata", $context) ? $context["suma_contrata"] : (function () { throw new RuntimeError('Variable "suma_contrata" does not exist.', 113, $this->source); })()), 0, ",", "."), "html", null, true);
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
        // line 129
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "\",
        \"endDate\": \"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 130, $this->source); })()), "html", null, true);
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
        return "reporte/reporte_agendador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 130,  313 => 129,  294 => 113,  290 => 112,  286 => 111,  279 => 106,  270 => 102,  264 => 100,  261 => 99,  258 => 98,  256 => 97,  251 => 95,  247 => 94,  243 => 93,  239 => 92,  235 => 91,  231 => 90,  227 => 88,  222 => 87,  219 => 86,  216 => 85,  214 => 84,  211 => 83,  209 => 82,  168 => 43,  164 => 42,  162 => 41,  159 => 40,  155 => 39,  153 => 38,  150 => 37,  146 => 36,  144 => 35,  137 => 31,  132 => 28,  123 => 26,  119 => 24,  117 => 23,  112 => 22,  108 => 21,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            
            <form action=\"{{path('reporte_agendador')}}\" method=\"get\" id=\"bForm\">
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
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre agendador\" value=\"{{bFiltro}}\">
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
                        <th scope=\"col\" align=\"right\">Agendador</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos</th>
                        <th scope=\"col\" style=\"text-align: right;\">Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Contratados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos vs Agendados</th>
                        <th scope=\"col\" style=\"text-align: right;\">Prospectos vs Contratos</th>
                    </tr>
                </thead>
                <tbody>
                    {% set suma_total=0 %}
                    
                    {% set suma_contrata=0 %}
                    {% set suma_agendado=0 %}
                    
                    {% for reporte in reportes %}

                    <tr>
                        <td>{{ reporte.agendador_nombre }}</td>
                        <td align=\"right\">{{ reporte.total}}</td>
                        <td  align=\"right\">{{ reporte.agendado}}</td>
                        <td align=\"right\">{{ reporte.contrata}}</td>
                        <td align=\"right\">{{(reporte.agendado/(reporte.total?reporte.total:1)*100)|number_format(0,\",\",\".\")}}%</td>
                        <td align=\"right\">{{(reporte.contrata/(reporte.total?reporte.total:1)*100)|number_format(0,\",\",\".\")}}%</td>
                    </tr>
                    {% set suma_total = suma_total + reporte.total %}
                    {% set suma_contrata = suma_contrata + reporte.contrata %}
                    {% set suma_agendado = suma_agendado + reporte.agendado %}
                   
                    {% else %}
                    <tr>
                        <td colspan=\"6\">No hay registros</td>
                    </tr>
                    {% endfor %}

                </tbody>
                <tfoot>
                    <tr style=\"text-align: right;\">
                        <th></th>
                        <th>{{ suma_total|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_agendado|number_format(0,\",\",\".\")}}</th>
                        <th>{{ suma_contrata|number_format(0,\",\",\".\")}}</th>
                        
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
{% endblock %}", "reporte/reporte_agendador.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\reporte\\reporte_agendador.html.twig");
    }
}
