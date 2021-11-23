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

/* terminos/index.html.twig */
class __TwigTemplate_7c8fa7ca9b91d40d60af9689f85aa92480c83b3c61a3f47fc2f4c80d0b659ed7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terminos/index.html.twig", 1);
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
                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"\">
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
            </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th>";
        // line 42
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 42, $this->source); })()), "Compañia", "agenda.cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 42, $this->source); })()), "isSorted", [0 => "agenda.cuenta"], "method", false, false, false, 42)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 43, $this->source); })()), "Folio", "id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 43, $this->source); })()), "isSorted", [0 => "id"], "method", false, false, false, 43)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 44, $this->source); })()), "Cliente", "nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 44, $this->source); })()), "isSorted", [0 => "nombre"], "method", false, false, false, 44)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 45, $this->source); })()), "Agendador", "agenda.agendador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 45, $this->source); })()), "isSorted", [0 => "agenda.agendador"], "method", false, false, false, 45)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "Abogado", "agenda.abogado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 46, $this->source); })()), "isSorted", [0 => "agenda.abogado"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "Tramitador", "tramitador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 47, $this->source); })()), "isSorted", [0 => "tramitador"], "method", false, false, false, 47)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "Sucursal", "sucursal");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 48, $this->source); })()), "isSorted", [0 => "sucursal"], "method", false, false, false, 48)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "Fecha Contrato", "fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 49, $this->source); })()), "isSorted", [0 => "fechaCreacion"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th align=\"center\">";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "Aviso Termino", "fechaDesiste");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 50, $this->source); })()), "isSorted", [0 => "fechaDesiste"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th align=\"center\">";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "Confirma Termino", "fechaTermino");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 51, $this->source); })()), "isSorted", [0 => "fechaTermino"], "method", false, false, false, 51)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th align=\"center\">";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 52, $this->source); })()), "PDF Anexo", "fechaPdfAnexo");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 52, $this->source); })()), "isSorted", [0 => "fechaPdfAnexo"], "method", false, false, false, 52)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                          
                        ";
        // line 54
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 54, $this->source); })()), "getSesion", [], "any", false, false, false, 54), "usuarioTipo", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), [0 => 1, 1 => 4, 2 => 8, 3 => 7])) {
            // line 55
            echo "                        <th>Acciones</th>
                        ";
        }
        // line 57
        echo "                    </tr>
                </thead>
                <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 61
            echo "                    <tr>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 62), "cuenta", [], "any", false, false, false, 62), "nombre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "nombre", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 65), "agendador", [], "any", false, false, false, 65), "nombre", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 66), "abogado", [], "any", false, false, false, 66), "nombre", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "tramitador", [], "any", false, false, false, 67), "nombre", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "sucursal", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaCreacion", [], "any", false, false, false, 69), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            ((twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaDesiste", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaDesiste", [], "any", false, false, false, 70), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaTermino", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaTermino", [], "any", false, false, false, 71), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 72
            ((twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaPdfAnexo", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaPdfAnexo", [], "any", false, false, false, 72), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        
                        ";
            // line 74
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 74, $this->source); })()), "getSesion", [], "any", false, false, false, 74), "usuarioTipo", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), [0 => 1, 1 => 3, 2 => 4, 3 => 6, 4 => 8, 5 => 7])) {
                // line 75
                echo "                        <td>
                            ";
                // line 76
                if ((null === twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 76))) {
                    // line 77
                    echo "                                <a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-ban\"></i></a>
                            ";
                } else {
                    // line 79
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 79, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["pdf_contrato"]) || array_key_exists("pdf_contrato", $context) ? $context["pdf_contrato"] : (function () { throw new RuntimeError('Variable "pdf_contrato" does not exist.', 79, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 79), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
                }
                // line 81
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terminos_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                            
                            ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contrato"], "contratoAnexos", [], "any", false, false, false, 83));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["anexo"]) {
                    // line 84
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["anexo"], "isDesiste", [], "any", false, false, false, 84) &&  !(null === twig_get_attribute($this->env, $this->source, $context["anexo"], "pdf", [], "any", false, false, false, 84)))) {
                        // line 85
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 85, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, (isset($context["pdf_contrato"]) || array_key_exists("pdf_contrato", $context) ? $context["pdf_contrato"] : (function () { throw new RuntimeError('Variable "pdf_contrato" does not exist.', 85, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anexo"], "pdf", [], "any", false, false, false, 85), "html", null, true);
                        echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                       
                                ";
                    } else {
                        // line 88
                        echo "                                <button onclick=\"javascript:generaPdf('";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terminos_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                        echo "')\" class=\"btn btn-primary btn-sm btn-pdf\"><i class=\"far fa-check-circle\"></i></button>
                                ";
                    }
                    // line 89
                    echo "  
                                
                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 92
                    echo "                                <button onclick=\"javascript:generaPdf('";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terminos_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                    echo "')\" class=\"btn btn-primary btn-sm btn-pdf\"><i class=\"far fa-check-circle\"></i></button>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anexo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                            
                        </td>
                        ";
            }
            // line 97
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "                    <tr>
                        <td colspan=\"16\">No hay contratos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 109
        echo "           <div class=\"navigation\">
               ";
        // line 110
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 110, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 113
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\",
            \"locale\": {
                \"format\": \"YYYY-MM-DD\",
                \"applyLabel\": \"Apply\",
                \"cancelLabel\": \"Cancel\",
            }
        }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        
        });
        /*\$(\".btn-pdf\").click(function(){
            window.setTimeout(function(){window.location.reload();}, 5000);
            
        });*/
        function generaPdf(pag){
            \$('button').attr(\"disabled\", true);
            window.location.href=pag;
            window.setTimeout(function(){window.location.reload();},10000);
            
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "terminos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 124,  406 => 123,  394 => 113,  392 => 110,  389 => 109,  382 => 103,  373 => 99,  367 => 97,  362 => 94,  353 => 92,  346 => 89,  340 => 88,  331 => 85,  328 => 84,  323 => 83,  317 => 81,  309 => 79,  305 => 77,  303 => 76,  300 => 75,  298 => 74,  293 => 72,  289 => 71,  285 => 70,  281 => 69,  277 => 68,  273 => 67,  269 => 66,  265 => 65,  261 => 64,  257 => 63,  253 => 62,  250 => 61,  245 => 60,  240 => 57,  236 => 55,  234 => 54,  225 => 52,  217 => 51,  209 => 50,  201 => 49,  193 => 48,  185 => 47,  177 => 46,  169 => 45,  161 => 44,  153 => 43,  145 => 42,  121 => 20,  112 => 18,  108 => 16,  106 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"\">
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
                        <th>{{ knp_pagination_sortable(contratos, 'Fecha Contrato', 'fechaCreacion') }} {% if contratos.isSorted('fechaCreacion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th align=\"center\">{{ knp_pagination_sortable(contratos, 'Aviso Termino', 'fechaDesiste') }} {% if contratos.isSorted('fechaDesiste') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th align=\"center\">{{ knp_pagination_sortable(contratos, 'Confirma Termino', 'fechaTermino') }} {% if contratos.isSorted('fechaTermino') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                        <th align=\"center\">{{ knp_pagination_sortable(contratos, 'PDF Anexo', 'fechaPdfAnexo') }} {% if contratos.isSorted('fechaPdfAnexo') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                          
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
                        <td>{{ contrato.fechaCreacion|date('d-m-Y H:i') }}</td>
                        <td>{{ contrato.fechaDesiste ? contrato.fechaDesiste|date('d-m-Y H:i'): '' }}</td>
                        <td>{{ contrato.fechaTermino ? contrato.fechaTermino|date('d-m-Y H:i'): '' }}</td>
                        <td>{{ contrato.fechaPdfAnexo ? contrato.fechaPdfAnexo|date('d-m-Y H:i'): '' }}</td>
                        
                        {% if sesion.getSesion.usuarioTipo.id in [1,3,4,6,8,7] %}
                        <td>
                            {% if contrato.pdf is null %}
                                <a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-ban\"></i></a>
                            {% else %}
                                <a href=\"{{url_web}}{{pdf_contrato}}{{contrato.pdf}}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            {% endif %}
                                <a href=\"{{ path('terminos_show', {'id': contrato.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                            
                            {% for anexo in contrato.contratoAnexos %}
                                {% if anexo.isDesiste and anexo.pdf is not null %}
                                <a href=\"{{url_web}}{{pdf_contrato}}{{anexo.pdf}}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                       
                                {% else %}
                                <button onclick=\"javascript:generaPdf('{{ path('terminos_pdf', {'id': contrato.id}) }}')\" class=\"btn btn-primary btn-sm btn-pdf\"><i class=\"far fa-check-circle\"></i></button>
                                {% endif %}  
                                
                            {% else %}
                                <button onclick=\"javascript:generaPdf('{{ path('terminos_pdf', {'id': contrato.id}) }}')\" class=\"btn btn-primary btn-sm btn-pdf\"><i class=\"far fa-check-circle\"></i></button>
                            {% endfor %}
                            
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
        /*\$(\".btn-pdf\").click(function(){
            window.setTimeout(function(){window.location.reload();}, 5000);
            
        });*/
        function generaPdf(pag){
            \$('button').attr(\"disabled\", true);
            window.location.href=pag;
            window.setTimeout(function(){window.location.reload();},10000);
            
        }
    </script>
{% endblock %}
", "terminos/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\terminos\\index.html.twig");
    }
}
