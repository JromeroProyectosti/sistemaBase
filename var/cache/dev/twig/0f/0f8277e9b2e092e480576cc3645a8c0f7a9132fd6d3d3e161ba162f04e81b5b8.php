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

/* comision/comision_agendador.html.twig */
class __TwigTemplate_b762873c5aedd982d32985d3936747e975af9c2390713c5262543b85798141d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comision/comision_agendador.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comision/comision_agendador.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comision/comision_agendador.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ComisionAgendadorController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comision_agendador");
        echo "\" method=\"get\" id=\"bForm\">
    <input type=\"hidden\" name=\"bStatus\" id=\"bStatus\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 6, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
<section>

<div class=\"row\">
    ";
        // line 10
        $context["total"] = 0;
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resumenes"]) || array_key_exists("resumenes", $context) ? $context["resumenes"] : (function () { throw new RuntimeError('Variable "resumenes" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resumen"]) {
            // line 12
            echo "        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 14), "status", [], "any", false, false, false, 14), "color", [], "any", false, false, false, 14), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 14), "status", [], "any", false, false, false, 14), "icon", [], "any", false, false, false, 14), "html", null, true);
            echo "\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 16), "status", [], "any", false, false, false, 16), "nombre", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
                    <span class=\"info-box-number\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                    ";
            // line 18
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 18, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 18));
            // line 19
            echo "                    ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 19), "status", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), [0 => 10])) {
                // line 20
                echo "                    <a href=\"#\" class=\"small-box-footer\" onclick=\"javascript:buscar(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 20), "status", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
                echo ")\">
                        Ver Más <i class=\"fas fa-arrow-circle-right\"></i>
                    </a>
                    ";
            }
            // line 24
            echo "                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resumen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        if ( !(null === (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\"><i class=\"far fa-flag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Contratados</span>
                    <span class=\"info-box-number\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</span>
                </div>
            <!-- /.info-box-content -->
            </div>
        </div>
    ";
        }
        // line 41
        echo "</div>
</section>


";
        // line 45
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 45, $this->source); })()), "getSesion", [], "any", false, false, false, 45), "usuarioTipo", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), [0 => 3, 1 => 1])) {
            // line 46
            echo "    <section>
        ";
            // line 47
            if ((1 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()), 0))) {
                // line 48
                echo "            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AgendaController::resumenagendadores", ["agendaStatus" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 48, $this->source); })()), "fechainicio" => (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 48, $this->source); })()), "fechafin" => (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 48, $this->source); })()), "compania" => (isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 48, $this->source); })()), "filtro" => (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 48, $this->source); })()), "totalStatus" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "tipoFecha" => 2]));
                echo "
        ";
            }
            // line 50
            echo "    </section>
";
        }
        // line 52
        echo "
<div class=\"card\">
    <div class=\"card-header\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <select name=\"bCompania\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 60
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\"
                            ";
            // line 61
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 61)))) {
                // line 62
                echo "                                selected
                            ";
            }
            // line 64
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 64), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Cliente\" value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
                <div class=\"col-sm-12 col-md-3\">       
                </div>
            </div>
    </div>
</form>
    <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 87, $this->source); })()), "Folio cto.", "contrato.id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 87, $this->source); })()), "isSorted", [0 => "contrato.id"], "method", false, false, false, 87)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 88
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 88, $this->source); })()), "Compañia", "cuenta.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 88, $this->source); })()), "isSorted", [0 => "cuenta.nombre"], "method", false, false, false, 88)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 89
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 89, $this->source); })()), "Canal", "campania");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 89, $this->source); })()), "isSorted", [0 => "campania"], "method", false, false, false, 89)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 90
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 90, $this->source); })()), "Agendador", "agendador.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 90, $this->source); })()), "isSorted", [0 => "agendador.nombre"], "method", false, false, false, 90)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 91, $this->source); })()), "Cliente", "nombreCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 91, $this->source); })()), "isSorted", [0 => "nombreCliente"], "method", false, false, false, 91)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 92
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 92, $this->source); })()), "Fecha cto.", "contrato.fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 92, $this->source); })()), "isSorted", [0 => "contrato.fechaCreacion"], "method", false, false, false, 92)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>

                    <th>Sucursal</th>
                    <th>Reunión</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 100
            echo "                <tr>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "campania", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "agendador", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 106), "nombre", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 107), "fechaCreacion", [], "any", false, false, false, 107), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 108), "sucursal", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 109), "reunion", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </tbody>
        </table>
        <div class=\"card-footer clearfix\">
            ";
        // line 120
        echo "       <div class=\"navigation\">
           ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 121, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 124
        echo "
       </div>
   </div>

<script>
    \$('#bFecha').daterangepicker({
        \"drops\": \"down\",
        \"startDate\":\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "\",
        \"endDate\": \"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    
    });
    function buscar(status){
        \$(\"#bStatus\").val(status);
        \$(\"#bForm\").submit();
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comision/comision_agendador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 132,  377 => 131,  368 => 124,  366 => 121,  363 => 120,  358 => 116,  349 => 112,  341 => 109,  337 => 108,  333 => 107,  329 => 106,  325 => 105,  321 => 104,  317 => 103,  313 => 102,  309 => 101,  306 => 100,  301 => 99,  287 => 92,  279 => 91,  271 => 90,  263 => 89,  255 => 88,  247 => 87,  224 => 66,  215 => 64,  211 => 62,  209 => 61,  204 => 60,  200 => 59,  191 => 52,  187 => 50,  181 => 48,  179 => 47,  176 => 46,  174 => 45,  168 => 41,  159 => 35,  152 => 30,  149 => 29,  139 => 24,  131 => 20,  128 => 19,  126 => 18,  122 => 17,  118 => 16,  111 => 14,  107 => 12,  102 => 11,  100 => 10,  93 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello ComisionAgendadorController!{% endblock %}

{% block body %}
<form action=\"{{path('comision_agendador')}}\" method=\"get\" id=\"bForm\">
    <input type=\"hidden\" name=\"bStatus\" id=\"bStatus\" value=\"{{status|default('')}}\">
<section>

<div class=\"row\">
    {% set total = 0 %}
    {% for resumen in resumenes %}
        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-{{resumen[0].status.color}}\"><i class=\"{{resumen[0].status.icon}}\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">{{resumen[0].status.nombre}}</span>
                    <span class=\"info-box-number\">{{resumen.valor}}</span>
                    {% set total= total + resumen.valor %}
                    {% if resumen[0].status.id not in [10] %}
                    <a href=\"#\" class=\"small-box-footer\" onclick=\"javascript:buscar({{resumen[0].status.id}})\">
                        Ver Más <i class=\"fas fa-arrow-circle-right\"></i>
                    </a>
                    {% endif %}
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    {% endfor %}
    {% if status is not null %}
        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\"><i class=\"far fa-flag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Contratados</span>
                    <span class=\"info-box-number\">{{total}}</span>
                </div>
            <!-- /.info-box-content -->
            </div>
        </div>
    {% endif %}
</div>
</section>


{% if sesion.getSesion.usuarioTipo.id in [3,1]  %}
    <section>
        {% if total>0 %}
            {{ render(controller('App\\\\Controller\\\\AgendaController::resumenagendadores', {'agendaStatus':status,'fechainicio':dateInicio,'fechafin':dateFin,'compania':bCompania,'filtro':bFiltro,'totalStatus':total,'tipoFecha':2})) }}
        {% endif %}
    </section>
{% endif %}

<div class=\"card\">
    <div class=\"card-header\">
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
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Cliente\" value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
                <div class=\"col-sm-12 col-md-3\">       
                </div>
            </div>
    </div>
</form>
    <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Folio cto.', 'contrato.id') }} {% if agendas.isSorted('contrato.id') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Compañia', 'cuenta.nombre') }} {% if agendas.isSorted('cuenta.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Canal', 'campania') }} {% if agendas.isSorted('campania') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Agendador', 'agendador.nombre') }} {% if agendas.isSorted('agendador.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Cliente', 'nombreCliente') }} {% if agendas.isSorted('nombreCliente') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(agendas, 'Fecha cto.', 'contrato.fechaCreacion') }} {% if agendas.isSorted('contrato.fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>

                    <th>Sucursal</th>
                    <th>Reunión</th>
                </tr>
            </thead>
            <tbody>
            {% for agenda in agendas %}
                <tr>
                    <td>{{ agenda.id }}</td>
                    <td>{{ agenda.contrato.id }}</td>
                    <td>{{ agenda.cuenta }}</td>
                    <td>{{ agenda.campania }}</td>
                    <td>{{ agenda.agendador }}</td>
                    <td>{{ agenda.contrato.nombre }}</td>
                    <td>{{ agenda.contrato.fechaCreacion | date('Y-m-d') }}</td>
                    <td>{{ agenda.contrato.sucursal }}</td>
                    <td>{{ agenda.contrato.reunion }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"card-footer clearfix\">
            {# display navigation #}
       <div class=\"navigation\">
           {{ knp_pagination_render(agendas,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
           'position': 'centered',
           'rounded': true,
           }) }}
       </div>
   </div>

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
    function buscar(status){
        \$(\"#bStatus\").val(status);
        \$(\"#bForm\").submit();
    }
</script>

{% endblock %}", "comision/comision_agendador.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\comision\\comision_agendador.html.twig");
    }
}
