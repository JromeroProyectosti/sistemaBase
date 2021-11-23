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

/* cobranza/index.html.twig */
class __TwigTemplate_7b2e6c76735a9c1ca7a2ef56a777ba492e7bdcc5de5e17d326a448464c51c06d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/index.html.twig", 1);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 46, $this->source); })()), "Cliente", "contrato.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 46, $this->source); })()), "isSorted", [0 => "contrato.nombre"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>Cobrador</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 48, $this->source); })()), "Rut", "contrato.rut");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 48, $this->source); })()), "isSorted", [0 => "contrato.rut"], "method", false, false, false, 48)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 49, $this->source); })()), "Fecha Contrato", "contrato.fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 49, $this->source); })()), "isSorted", [0 => "contrato.fechaCreacion"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 50, $this->source); })()), "Vencimiento", "fechaPago");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 50, $this->source); })()), "isSorted", [0 => "fechaPago"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        
                        <th>\$ En Mora</th>
                        
                        <th>Último Pago</th>
                        <th>";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 55, $this->source); })()), "Ultima Respuesta", "contrato.ultimaFuncion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 55, $this->source); })()), "isSorted", [0 => "contrato.ultimaFuncion"], "method", false, false, false, 55)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 56, $this->source); })()), "Fecha Compromiso", "contrato.fechaCompromiso");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 56, $this->source); })()), "isSorted", [0 => "contrato.fechaCompromiso"], "method", false, false, false, 56)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 57, $this->source); })()), "Q. Ges.", "contrato.qMov");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 57, $this->source); })()), "isSorted", [0 => "contrato.qMov"], "method", false, false, false, 57)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        
                        ";
        // line 59
        if (((null === (isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 59, $this->source); })())) ||  !(isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "
                        <th><i class=\"fas fa-traffic-light\"></i></th>
                        
                        
                        ";
        }
        // line 65
        echo "                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
    
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 72
            echo "              
                ";
            // line 73
            $context["contrato"] = twig_get_attribute($this->env, $this->source, $context["cuota"], "contrato", [], "any", false, false, false, 73);
            // line 74
            echo "                ";
            $context["enmora"] = (twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 74) - twig_get_attribute($this->env, $this->source, $context["cuota"], "pagado", [], "any", false, false, false, 74));
            // line 75
            echo "                    <tr>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 77, $this->source); })()), "lote", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 78, $this->source); })()), "sucursal", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 79, $this->source); })()), "nombre", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 81, $this->source); })()), "idLote", [], "any", false, false, false, 81), "usuarioLotes", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["usuarioLote"]) {
                // line 82
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuarioLote"], "usuario", [], "any", false, false, false, 82), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioLote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        </td>
                        <td align=\"center\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 85, $this->source); })()), "rut", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 86, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 86), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td align=\"right\">\$";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->extensions['App\Twig\AppExtension']->montoDeuda(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)), 0, ",", "."), "html", null, true);
            echo "</td>
                        <td align=\"center\">";
            // line 89
            (($this->extensions['App\Twig\AppExtension']->ultimoPago(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->extensions['App\Twig\AppExtension']->ultimoPago(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td align=\"center\">";
            // line 90
            ((twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 90, $this->source); })()), "ultimaFuncion", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 90, $this->source); })()), "ultimaFuncion", [], "any", false, false, false, 90), "html", null, true))) : (print ("")));
            echo "</td>
                        <td align=\"center\">";
            // line 91
            ((twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 91, $this->source); })()), "fechaCompromiso", [], "any", false, false, false, 91)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 91, $this->source); })()), "fechaCompromiso", [], "any", false, false, false, 91), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td align=\"center\">";
            // line 92
            ((twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 92, $this->source); })()), "qMov", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 92, $this->source); })()), "qMov", [], "any", false, false, false, 92), "html", null, true))) : (print ("")));
            echo "
                              
                        </td>
                        
                        ";
            // line 96
            if (((null === (isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 96, $this->source); })())) ||  !(isset($context["finalizado"]) || array_key_exists("finalizado", $context) ? $context["finalizado"] : (function () { throw new RuntimeError('Variable "finalizado" does not exist.', 96, $this->source); })()))) {
                // line 97
                echo "                        <td>
                           ";
                // line 98
                echo $this->extensions['App\Twig\AppExtension']->semaforo(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 98), "Y-m-d"));
                echo "
                        </td>
                        ";
            }
            // line 100
            echo "  
                        <td>
                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cobranza_lote", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vercobranza_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                            <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vercobranza_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\"><i class=\"far fa-eye\"></i></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 118
        echo "           <div class=\"navigation\">
               ";
        // line 119
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 119, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 122
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 133, $this->source); })()), "html", null, true);
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
        return "cobranza/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 133,  403 => 132,  391 => 122,  389 => 119,  386 => 118,  379 => 112,  370 => 108,  361 => 104,  357 => 103,  353 => 102,  349 => 100,  343 => 98,  340 => 97,  338 => 96,  331 => 92,  327 => 91,  323 => 90,  319 => 89,  315 => 88,  311 => 87,  307 => 86,  303 => 85,  300 => 84,  291 => 82,  287 => 81,  282 => 79,  278 => 78,  274 => 77,  270 => 76,  267 => 75,  264 => 74,  262 => 73,  259 => 72,  254 => 71,  246 => 65,  239 => 60,  237 => 59,  228 => 57,  220 => 56,  212 => 55,  200 => 50,  192 => 49,  184 => 48,  175 => 46,  167 => 45,  159 => 44,  151 => 43,  131 => 26,  125 => 23,  120 => 20,  111 => 18,  107 => 16,  105 => 15,  100 => 14,  96 => 13,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

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
                        <th>{{ knp_pagination_sortable(cuotas, 'Cliente', 'contrato.nombre') }} {% if cuotas.isSorted('contrato.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>Cobrador</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Rut', 'contrato.rut') }} {% if cuotas.isSorted('contrato.rut') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Fecha Contrato', 'contrato.fechaCreacion') }} {% if cuotas.isSorted('contrato.fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Vencimiento', 'fechaPago') }} {% if cuotas.isSorted('fechaPago') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        
                        <th>\$ En Mora</th>
                        
                        <th>Último Pago</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Ultima Respuesta', 'contrato.ultimaFuncion') }} {% if cuotas.isSorted('contrato.ultimaFuncion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Fecha Compromiso', 'contrato.fechaCompromiso') }} {% if cuotas.isSorted('contrato.fechaCompromiso') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(cuotas, 'Q. Ges.', 'contrato.qMov') }} {% if cuotas.isSorted('contrato.qMov') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        
                        {% if finalizado is null or not finalizado %}

                        <th><i class=\"fas fa-traffic-light\"></i></th>
                        
                        
                        {% endif %}
                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
    
                {% for cuota in cuotas %}
              
                {% set contrato = cuota.contrato %}
                {% set enmora = cuota.monto - cuota.pagado %}
                    <tr>
                        <td>{{ contrato.id }}</td>
                        <td align=\"center\">{{ contrato.lote }}</td>
                        <td>{{ contrato.sucursal}}</td>
                        <td>{{ contrato.nombre }}</td>
                        <td>
                            {% for usuarioLote in contrato.idLote.usuarioLotes %}
                            {{ usuarioLote.usuario }}
                            {% endfor %}
                        </td>
                        <td align=\"center\">{{ contrato.rut }}</td>
                        <td align=\"center\">{{ contrato.fechaCreacion|date('d-m-Y H:i') }}</td>
                        <td align=\"center\">{{ cuota.fechaPago|date('d-m-Y') }}</td>
                        <td align=\"right\">\${{ montoDeuda(contrato.id)|number_format(0, ',', '.') }}</td>
                        <td align=\"center\">{{ ultimoPago(contrato.id) ? ultimoPago(contrato.id) |date('d-m-Y H:i') : '' }}</td>
                        <td align=\"center\">{{ contrato.ultimaFuncion ? contrato.ultimaFuncion : '' }}</td>
                        <td align=\"center\">{{ contrato.fechaCompromiso ? contrato.fechaCompromiso|date('d-m-Y'):''}}</td>
                        <td align=\"center\">{{ contrato.qMov ? contrato.qMov : '' }}
                              
                        </td>
                        
                        {% if finalizado is null or not finalizado %}
                        <td>
                           {{semaforo(cuota.fechaPago|date('Y-m-d'))|raw}}
                        </td>
                        {% endif %}  
                        <td>
                            <a href=\"{{ path('cobranza_lote', {'id': contrato.id}) }}\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"{{ path('vercobranza_index', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-plus-square\"></i></a>
                            <a href=\"{{ path('vercobranza_view', {'id': contrato.id}) }}\" class=\"btn btn-success btn-sm\"><i class=\"far fa-eye\"></i></a>
                        </td>
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
", "cobranza/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\index.html.twig");
    }
}
