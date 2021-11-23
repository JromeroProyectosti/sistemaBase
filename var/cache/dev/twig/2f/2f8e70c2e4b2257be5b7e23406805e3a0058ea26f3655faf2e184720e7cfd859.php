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

/* desconoce/index.html.twig */
class __TwigTemplate_74089426b7cd7b52be62fbd1089376c2170e03ae7faf7a166ed7672d001d4eed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desconoce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desconoce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "desconoce/index.html.twig", 1);
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
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Email\" value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        
                    </div>
    
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "Compañia", "agenda.cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "isSorted", [0 => "agenda.cuenta"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "Folio", "id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "isSorted", [0 => "id"], "method", false, false, false, 47)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "Cliente", "nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "isSorted", [0 => "nombre"], "method", false, false, false, 48)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "Agendador", "agenda.agendador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "isSorted", [0 => "agenda.agendador"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "Abogado", "agenda.abogado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "isSorted", [0 => "agenda.abogado"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "Tramitador", "tramitador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "isSorted", [0 => "tramitador"], "method", false, false, false, 51)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 52, $this->source); })()), "Sucursal", "sucursal");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 52, $this->source); })()), "isSorted", [0 => "sucursal"], "method", false, false, false, 52)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        
                        <th>";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 54, $this->source); })()), "Estado", "agenda.status");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 54, $this->source); })()), "isSorted", [0 => "agenda.status"], "method", false, false, false, 54)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>

                        <th>";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 56, $this->source); })()), "Fecha Contrato", "fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 56, $this->source); })()), "isSorted", [0 => "fechaCreacion"], "method", false, false, false, 56)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 57, $this->source); })()), "Aviso Termino", "fechaDesite");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 57, $this->source); })()), "isSorted", [0 => "fechaDesiste"], "method", false, false, false, 57)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                                         
                        ";
        // line 59
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 59, $this->source); })()), "getSesion", [], "any", false, false, false, 59), "usuarioTipo", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), [0 => 1, 1 => 4, 2 => 8, 3 => 7])) {
            // line 60
            echo "                        <th>Acciones</th>
                        ";
        }
        // line 62
        echo "                    </tr>
                </thead>
                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 66
            echo "                    <tr>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 67), "cuenta", [], "any", false, false, false, 67), "nombre", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "nombre", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 70), "agendador", [], "any", false, false, false, 70), "nombre", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 71), "abogado", [], "any", false, false, false, 71), "nombre", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "tramitador", [], "any", false, false, false, 72), "nombre", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "sucursal", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 74), "status", [], "any", false, false, false, 74), "nombre", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaCreacion", [], "any", false, false, false, 75), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            ((twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaDesiste", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaDesiste", [], "any", false, false, false, 76), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                       <td>
                            
                                
                            ";
            // line 80
            if ((null === twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 80))) {
                // line 81
                echo "                            <i class=\"fas fa-file-pdf\"></i>
                            ";
            } else {
                // line 83
                echo "
                                <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 84, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["pdf_contrato"]) || array_key_exists("pdf_contrato", $context) ? $context["pdf_contrato"] : (function () { throw new RuntimeError('Variable "pdf_contrato" does not exist.', 84, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 84), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
            }
            // line 86
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desconoce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desconoce_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                                
                        </td>

                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            echo "                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 103
        echo "           <div class=\"navigation\">
               ";
        // line 104
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 104, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 107
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 118, $this->source); })()), "html", null, true);
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
        return "desconoce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 118,  362 => 117,  350 => 107,  348 => 104,  345 => 103,  338 => 97,  329 => 93,  318 => 87,  313 => 86,  306 => 84,  303 => 83,  299 => 81,  297 => 80,  290 => 76,  286 => 75,  282 => 74,  278 => 73,  274 => 72,  270 => 71,  266 => 70,  262 => 69,  258 => 68,  254 => 67,  251 => 66,  246 => 65,  241 => 62,  237 => 60,  235 => 59,  226 => 57,  218 => 56,  209 => 54,  200 => 52,  192 => 51,  184 => 50,  176 => 49,  168 => 48,  160 => 47,  152 => 46,  126 => 23,  121 => 20,  112 => 18,  108 => 16,  106 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <input type=\"text\" class=\"form-control bFiltro\" name=\"bFiltro\" placeholder=\"Nombre/Email\" value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        
                    </div>
    
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(contratos, 'Compañia', 'agenda.cuenta') }} {% if contratos.isSorted('agenda.cuenta') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Folio', 'id') }} {% if contratos.isSorted('id') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Cliente', 'nombre') }} {% if contratos.isSorted('nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Agendador', 'agenda.agendador') }} {% if contratos.isSorted('agenda.agendador') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Abogado', 'agenda.abogado') }} {% if contratos.isSorted('agenda.abogado') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Tramitador', 'tramitador') }} {% if contratos.isSorted('tramitador') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Sucursal', 'sucursal') }} {% if contratos.isSorted('sucursal') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        
                        <th>{{ knp_pagination_sortable(contratos, 'Estado', 'agenda.status') }} {% if contratos.isSorted('agenda.status') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>

                        <th>{{ knp_pagination_sortable(contratos, 'Fecha Contrato', 'fechaCreacion') }} {% if contratos.isSorted('fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th>{{ knp_pagination_sortable(contratos, 'Aviso Termino', 'fechaDesite') }} {% if contratos.isSorted('fechaDesiste') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                                         
                        {% if sesion.getSesion.usuarioTipo.id in [1,4,8,7] %}
                        <th>Acciones</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                {% for contrato in contratos %}
                    <tr>
                        <td>{{contrato.agenda.cuenta.nombre}}</td>
                        <td>{{ contrato.id }}</td>
                        <td>{{ contrato.nombre }}</td>
                        <td>{{ contrato.agenda.agendador.nombre }}</td>
                        <td>{{ contrato.agenda.abogado.nombre }}</td>
                        <td>{{ contrato.tramitador.nombre }}</td>
                        <td>{{ contrato.sucursal}}</td>
                        <td>{{ contrato.agenda.status.nombre}}</td>
                        <td>{{ contrato.fechaCreacion|date('d-m-Y H:i') }}</td>
                        <td>{{ contrato.fechaDesiste ? contrato.fechaDesiste|date('d-m-Y H:i'): '' }}</td>
                       <td>
                            
                                
                            {% if contrato.pdf is null %}
                            <i class=\"fas fa-file-pdf\"></i>
                            {% else %}

                                <a href=\"{{url_web}}{{pdf_contrato}}{{contrato.pdf}}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            {% endif %}
                                <a href=\"{{ path('desconoce_show', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"{{ path('desconoce_edit', {'id': contrato.id}) }}\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                                
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
    </script>
{% endblock %}
", "desconoce/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\desconoce\\index.html.twig");
    }
}
