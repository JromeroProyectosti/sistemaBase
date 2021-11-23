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

/* pago/index.html.twig */
class __TwigTemplate_0bc895756ce81da94e1baf6f31779ad1c7f4e98eca747dcfa9d2ff093c94b88e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pago/index.html.twig", 1);
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

        echo "Pagos";
        
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
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <form action=\"\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-3\">
                        <select name=\"bCompania\" class=\"form-control\">
                            <option value=\"0\">Todos</option>
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 14
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
                                ";
            // line 15
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 15)))) {
                // line 16
                echo "                                    selected
                                ";
            }
            // line 18
            echo "                                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                        </select>
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <input type=\"text\" class=\"form-control bFolio\" name=\"bFolio\"  placeholder=\"Folio\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["bFolio"]) || array_key_exists("bFolio", $context) ? $context["bFolio"] : (function () { throw new RuntimeError('Variable "bFolio" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Rut\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\" style=\"display: none;\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                   
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 43, $this->source); })()), "Folio", "contrato.id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 43, $this->source); })()), "isSorted", [0 => "contrato.id"], "method", false, false, false, 43)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 44, $this->source); })()), "Lote", "contrato.lote");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 44, $this->source); })()), "isSorted", [0 => "contrato.lote"], "method", false, false, false, 44)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 45, $this->source); })()), "Sucursal", "contrato.sucursal");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 45, $this->source); })()), "isSorted", [0 => "contrato.sucursal"], "method", false, false, false, 45)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 46, $this->source); })()), "Abogado", "contrato.agenda.abogado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 46, $this->source); })()), "isSorted", [0 => "contrato.agenda.abogado"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 47, $this->source); })()), "Tramitador", "contrato.tramitador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 47, $this->source); })()), "isSorted", [0 => "contrato.tramitador"], "method", false, false, false, 47)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 49, $this->source); })()), "Cliente", "contrato.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 49, $this->source); })()), "isSorted", [0 => "contrato.nombre"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 50, $this->source); })()), "Rut", "contrato.rut");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 50, $this->source); })()), "isSorted", [0 => "contrato.rut"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 51, $this->source); })()), "Fecha Contrato", "contrato.fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 51, $this->source); })()), "isSorted", [0 => "contrato.fechaCreacion"], "method", false, false, false, 51)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 52, $this->source); })()), "Vencimiento", "fechaPago");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 52, $this->source); })()), "isSorted", [0 => "fechaPago"], "method", false, false, false, 52)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>Último Pago</th>
                        ";
        // line 54
        if (((null === (isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 54, $this->source); })())) ||  !(isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "                            
                        <th><i class=\"fas fa-traffic-light\"></i></th>
                        
                        
                        ";
        }
        // line 60
        echo "                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 65
            echo "              
                ";
            // line 66
            $context["contrato"] = twig_get_attribute($this->env, $this->source, $context["cuota"], "contrato", [], "any", false, false, false, 66);
            // line 67
            echo "                    <tr>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 69, $this->source); })()), "lote", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 70, $this->source); })()), "sucursal", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 71, $this->source); })()), "agenda", [], "any", false, false, false, 71), "abogado", [], "any", false, false, false, 71), "nombre", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 72, $this->source); })()), "tramitador", [], "any", false, false, false, 72), "nombre", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 73, $this->source); })()), "nombre", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 74, $this->source); })()), "rut", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 75, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 75), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 76), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 77
            (($this->extensions['App\Twig\AppExtension']->ultimoPago(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['App\Twig\AppExtension']->ultimoPago(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "
                            
                        </td>
                        
                        ";
            // line 81
            if (((null === (isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 81, $this->source); })())) ||  !(isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 81, $this->source); })()))) {
                // line 82
                echo "                        <td>
                           ";
                // line 83
                echo $this->extensions['App\Twig\AppExtension']->semaforo(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 83), "Y-m-d"));
                echo "
                        </td>
                        <td>
                                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verpagos_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                                <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verpagos_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-eye\"></i></a>
                        </td>
                        ";
            } else {
                // line 90
                echo "                        <td>
                            <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verpagos_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                            
                            <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verpagos_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-eye\"></i></a>

                        </td>
                        ";
            }
            // line 97
            echo "                        
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 110
        echo "           <div class=\"navigation\">
               ";
        // line 111
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 111, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 114
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        
        });
        \$(\".bFolio\").change(function(){
            \$(\".bFiltro\").val('');
        });
        \$(\".bFiltro\").change(function(){
            \$(\".bFolio\").val('');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pago/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 125,  373 => 124,  361 => 114,  359 => 111,  356 => 110,  349 => 104,  340 => 100,  333 => 97,  326 => 93,  321 => 91,  318 => 90,  312 => 87,  308 => 86,  302 => 83,  299 => 82,  297 => 81,  290 => 77,  286 => 76,  282 => 75,  278 => 74,  274 => 73,  270 => 72,  266 => 71,  262 => 70,  258 => 69,  254 => 68,  251 => 67,  249 => 66,  246 => 65,  241 => 64,  235 => 60,  228 => 55,  226 => 54,  217 => 52,  209 => 51,  201 => 50,  193 => 49,  184 => 47,  176 => 46,  168 => 45,  160 => 44,  152 => 43,  132 => 26,  126 => 23,  121 => 20,  112 => 18,  108 => 16,  106 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pagos{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            <form action=\"\" method=\"get\">
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
                    <div class=\"col-sm-12 col-md-2\">
                        <input type=\"text\" class=\"form-control bFolio\" name=\"bFolio\"  placeholder=\"Folio\" value=\"{{bFolio}}\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Rut\" value=\"{{bFiltro}}\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\" style=\"display: none;\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                   
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(cuotas, 'Folio', 'contrato.id') }} {% if cuotas.isSorted('contrato.id') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Lote', 'contrato.lote') }} {% if cuotas.isSorted('contrato.lote') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Sucursal', 'contrato.sucursal') }} {% if cuotas.isSorted('contrato.sucursal') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Abogado', 'contrato.agenda.abogado') }} {% if cuotas.isSorted('contrato.agenda.abogado') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Tramitador', 'contrato.tramitador') }} {% if cuotas.isSorted('contrato.tramitador') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        
                        <th>{{ knp_pagination_sortable(cuotas, 'Cliente', 'contrato.nombre') }} {% if cuotas.isSorted('contrato.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Rut', 'contrato.rut') }} {% if cuotas.isSorted('contrato.rut') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Fecha Contrato', 'contrato.fechaCreacion') }} {% if cuotas.isSorted('contrato.fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Vencimiento', 'fechaPago') }} {% if cuotas.isSorted('fechaPago') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>Último Pago</th>
                        {% if finalizado is null or not finalizado %}
                            
                        <th><i class=\"fas fa-traffic-light\"></i></th>
                        
                        
                        {% endif %}
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {% for cuota in cuotas %}
              
                {% set contrato = cuota.contrato %}
                    <tr>
                        <td>{{ contrato.id }}</td>
                        <td align=\"center\">{{ contrato.lote }}</td>
                        <td>{{ contrato.sucursal}}</td>
                        <td>{{ contrato.agenda.abogado.nombre }}</td>
                        <td>{{ contrato.tramitador.nombre }}</td>
                        <td>{{ contrato.nombre }}</td>
                        <td align=\"center\">{{ contrato.rut }}</td>
                        <td align=\"center\">{{ contrato.fechaCreacion|date('d-m-Y H:i') }}</td>
                        <td align=\"center\">{{ cuota.fechaPago|date('d-m-Y') }}</td>
                        <td align=\"center\">{{ ultimoPago(contrato.id) ? ultimoPago(contrato.id) |date('d-m-Y H:i') : '' }}
                            
                        </td>
                        
                        {% if finalizado is null or not finalizado %}
                        <td>
                           {{semaforo(cuota.fechaPago|date('Y-m-d'))|raw}}
                        </td>
                        <td>
                                <a href=\"{{ path('verpagos_index', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                                <a href=\"{{ path('verpagos_view', {'id': contrato.id}) }}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-eye\"></i></a>
                        </td>
                        {% else %}
                        <td>
                            <a href=\"{{ path('verpagos_index', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                            
                            <a href=\"{{ path('verpagos_view', {'id': contrato.id}) }}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-eye\"></i></a>

                        </td>
                        {% endif %}
                        
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                {# display navigation #}
           <div class=\"navigation\">
               {{ knp_pagination_render(cuotas,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
               'position': 'centered',
               'rounded': true,
               }) }}
           </div>
       </div>
            
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
        \$(\".bFolio\").change(function(){
            \$(\".bFiltro\").val('');
        });
        \$(\".bFiltro\").change(function(){
            \$(\".bFolio\").val('');
        });
    </script>
{% endblock %}
", "pago/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pago\\index.html.twig");
    }
}
