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

/* contrato/index.html.twig */
class __TwigTemplate_708ba1f3834d5ced93cba51193c3aed23aec1a6ae66f7ca841206751350da23b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrato/index.html.twig", 1);
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

        echo "Contrato index";
        
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
                    <div class=\"col-sm-12 col-md-2\">
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
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control bFecha\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-1\">
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
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 44, $this->source); })()), "Compañia", "agenda.cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 44, $this->source); })()), "isSorted", [0 => "agenda.cuenta"], "method", false, false, false, 44)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 45, $this->source); })()), "Folio", "folio");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 45, $this->source); })()), "isSorted", [0 => "folio"], "method", false, false, false, 45)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "Cliente", "nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "isSorted", [0 => "nombre"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "Agendador", "agenda.agendador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "isSorted", [0 => "agenda.agendador"], "method", false, false, false, 47)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "Abogado", "agenda.abogado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "isSorted", [0 => "agenda.abogado"], "method", false, false, false, 48)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "Tramitador", "tramitador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "isSorted", [0 => "tramitador"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "Sucursal", "sucursal");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "isSorted", [0 => "sucursal"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "Fecha Contrato", "fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "isSorted", [0 => "fechaCreacion"], "method", false, false, false, 51)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        ";
        // line 52
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 52, $this->source); })()), "getSesion", [], "any", false, false, false, 52), "usuarioTipo", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), [0 => 1, 1 => 4, 2 => 8, 3 => 7, 4 => 13])) {
            // line 53
            echo "                        <th>Acciones</th>
                        ";
        }
        // line 55
        echo "                    </tr>
                </thead>
                <tbody>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 59
            echo "                    <tr>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 60), "cuenta", [], "any", false, false, false, 60), "nombre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "folio", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "nombre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 63), "agendador", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 64), "abogado", [], "any", false, false, false, 64), "nombre", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "tramitador", [], "any", false, false, false, 65), "nombre", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "sucursal", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaCreacion", [], "any", false, false, false, 67), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        ";
            // line 68
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 68, $this->source); })()), "getSesion", [], "any", false, false, false, 68), "usuarioTipo", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), [0 => 1, 1 => 3, 2 => 4, 3 => 6, 4 => 8, 5 => 7])) {
                // line 69
                echo "                        <td>
                            
                                
                            ";
                // line 72
                if ((null === twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 72))) {
                    // line 73
                    echo "                               <button type=\"button\" class=\"btn btn-secondary btn-sm\"><i class=\"fas fa-file-pdf\"></i></button>
                            ";
                } else {
                    // line 75
                    echo "
                                <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["pdf_contrato"]) || array_key_exists("pdf_contrato", $context) ? $context["pdf_contrato"] : (function () { throw new RuntimeError('Variable "pdf_contrato" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 76), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
                }
                // line 78
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                           
                                ";
                // line 81
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 81), "status", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), 14))) {
                    // line 82
                    echo "                                    <a href=\"#\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-retweet\"></i></a>

                                ";
                } else {
                    // line 85
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_terminar", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>
                                    <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>-->
                                    
                                ";
                }
                // line 89
                echo "
                        </td>
                        ";
            } else {
                // line 92
                echo "                        <td>
                            ";
                // line 93
                if ((null === twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 93))) {
                    // line 94
                    echo "                                <button type=\"button\" class=\"btn btn-secondary btn-sm\"><i class=\"far fa-file-pdf\"></i></button>
                            ";
                } else {
                    // line 96
                    echo "
                                <a href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 97, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["pdf_contrato"]) || array_key_exists("pdf_contrato", $context) ? $context["pdf_contrato"] : (function () { throw new RuntimeError('Variable "pdf_contrato" does not exist.', 97, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 97), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
                }
                // line 99
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 99, $this->source); })()), "getSesion", [], "any", false, false, false, 99), "usuarioTipo", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), 13))) {
                    // line 100
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                
                            ";
                } else {
                    // line 103
                    echo "                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 103), "status", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), 14))) {
                        // line 104
                        echo "                                    <a href=\"#\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-retweet\"></i></a>

                                ";
                    } else {
                        // line 107
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_terminar", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>
                                    <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>-->
                                    
                                ";
                    }
                    // line 111
                    echo "                            ";
                }
                // line 112
                echo "                        </td>
                        ";
            }
            // line 114
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 126
        echo "           <div class=\"navigation\">
               ";
        // line 127
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 127, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 130
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 141, $this->source); })()), "html", null, true);
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
        \$(\".bFecha\").change(function(){
            \$(\".bFolio\").val('');
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contrato/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 141,  409 => 140,  397 => 130,  395 => 127,  392 => 126,  385 => 120,  376 => 116,  370 => 114,  366 => 112,  363 => 111,  355 => 107,  350 => 104,  347 => 103,  340 => 100,  337 => 99,  330 => 97,  327 => 96,  323 => 94,  321 => 93,  318 => 92,  313 => 89,  305 => 85,  300 => 82,  298 => 81,  293 => 79,  288 => 78,  281 => 76,  278 => 75,  274 => 73,  272 => 72,  267 => 69,  265 => 68,  261 => 67,  257 => 66,  253 => 65,  249 => 64,  245 => 63,  241 => 62,  237 => 61,  233 => 60,  230 => 59,  225 => 58,  220 => 55,  216 => 53,  214 => 52,  206 => 51,  198 => 50,  190 => 49,  182 => 48,  174 => 47,  166 => 46,  158 => 45,  150 => 44,  126 => 23,  121 => 20,  112 => 18,  108 => 16,  106 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrato index{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            <form action=\"\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-2\">
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
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control bFecha\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-1\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                   
    
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(contratos, 'Compañia', 'agenda.cuenta') }} {% if contratos.isSorted('agenda.cuenta') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Folio', 'folio') }} {% if contratos.isSorted('folio') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Cliente', 'nombre') }} {% if contratos.isSorted('nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Agendador', 'agenda.agendador') }} {% if contratos.isSorted('agenda.agendador') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Abogado', 'agenda.abogado') }} {% if contratos.isSorted('agenda.abogado') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Tramitador', 'tramitador') }} {% if contratos.isSorted('tramitador') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Sucursal', 'sucursal') }} {% if contratos.isSorted('sucursal') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Fecha Contrato', 'fechaCreacion') }} {% if contratos.isSorted('fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        {% if sesion.getSesion.usuarioTipo.id in [1,4,8,7,13] %}
                        <th>Acciones</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                {% for contrato in contratos %}
                    <tr>
                        <td>{{contrato.agenda.cuenta.nombre}}</td>
                        <td>{{ contrato.folio }}</td>
                        <td>{{ contrato.nombre }}</td>
                        <td>{{ contrato.agenda.agendador.nombre }}</td>
                        <td>{{ contrato.agenda.abogado.nombre }}</td>
                        <td>{{ contrato.tramitador.nombre }}</td>
                        <td>{{ contrato.sucursal}}</td>
                        <td>{{ contrato.fechaCreacion|date('d-m-Y H:i') }}</td>
                        {% if sesion.getSesion.usuarioTipo.id in [1,3,4,6,8,7] %}
                        <td>
                            
                                
                            {% if contrato.pdf is null %}
                               <button type=\"button\" class=\"btn btn-secondary btn-sm\"><i class=\"fas fa-file-pdf\"></i></button>
                            {% else %}

                                <a href=\"{{url_web}}{{pdf_contrato}}{{contrato.pdf}}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            {% endif %}
                                <a href=\"{{ path('contrato_show', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"{{ path('contrato_edit', {'id': contrato.id}) }}\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                           
                                {% if contrato.agenda.status.id == 14 %}
                                    <a href=\"#\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-retweet\"></i></a>

                                {% else %}
                                    <a href=\"{{ path('contrato_terminar', {'id': contrato.id}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>
                                    <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>-->
                                    
                                {% endif %}

                        </td>
                        {% else %}
                        <td>
                            {% if contrato.pdf is null %}
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\"><i class=\"far fa-file-pdf\"></i></button>
                            {% else %}

                                <a href=\"{{url_web}}{{pdf_contrato}}{{contrato.pdf}}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            {% endif %}
                            {% if sesion.getSesion.usuarioTipo.id == 13 %}
                            <a href=\"{{ path('contrato_show', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                
                            {% else %}
                                {% if contrato.agenda.status.id == 14 %}
                                    <a href=\"#\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-retweet\"></i></a>

                                {% else %}
                                    <a href=\"{{ path('contrato_terminar', {'id': contrato.id}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>
                                    <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>-->
                                    
                                {% endif %}
                            {% endif %}
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
               {{ knp_pagination_render(contratos,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
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
        \$(\".bFecha\").change(function(){
            \$(\".bFolio\").val('');
        });

    </script>
{% endblock %}
", "contrato/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\index.html.twig");
    }
}
