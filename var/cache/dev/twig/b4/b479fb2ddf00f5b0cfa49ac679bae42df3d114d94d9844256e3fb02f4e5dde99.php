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

/* panel_agendador/index.html.twig */
class __TwigTemplate_82b025c6f6d2d9fbb02268507a8adfb9bf636572078b8b1a82baf4b45fa66682 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel_agendador/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "agenda agendador")) : ("agenda agendador")), "html", null, true);
        
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
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_index");
        echo "\" method=\"get\" id=\"bForm\">
    <input type=\"hidden\" name=\"bStatus\" id=\"bStatus\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 7, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
<section>
    
    <div class=\"row\">
        ";
        // line 11
        $context["total"] = 0;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resumenes"]) || array_key_exists("resumenes", $context) ? $context["resumenes"] : (function () { throw new RuntimeError('Variable "resumenes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resumen"]) {
            // line 13
            echo "       
        <div class=\"col-sm-6 col-md-3\">
            
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 17), "status", [], "any", false, false, false, 17), "color", [], "any", false, false, false, 17), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 17), "status", [], "any", false, false, false, 17), "icon", [], "any", false, false, false, 17), "html", null, true);
            echo "\"></i></span>
    
                <div class=\"info-box-content\">
                <span class=\"info-box-text\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 20), "status", [], "any", false, false, false, 20), "nombre", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                <span class=\"info-box-number\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                ";
            // line 22
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 22, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 22));
            // line 23
            echo "                ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 23), "status", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), [0 => 10])) {
                // line 24
                echo "                    
                
                <a href=\"#\" class=\"small-box-footer\" onclick=\"javascript:buscar(";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resumen"], 0, [], "array", false, false, false, 26), "status", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
                echo ")\">
                    Ver Más <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
                ";
            }
            // line 30
            echo "                </div>

                
                <!-- /.info-box-content -->
            </div>
      
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resumen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        if ((null === (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\"><i class=\"far fa-flag\"></i></span>
    
                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Asignados</span>
                <span class=\"info-box-number\">";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        ";
        }
        // line 51
        echo "        
    </div>
    
</section>
<section>


    
    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <select name=\"bCompania\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 70
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                            ";
            // line 71
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 71, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 71)))) {
                // line 72
                echo "                                selected
                            ";
            }
            // line 74
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 74), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <select name=\"bTipofecha\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 83
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 83, $this->source); })()), 0))) {
            // line 84
            echo "                            selected
                        ";
        }
        // line 85
        echo ">Fecha Carga</option>
                        <option value=\"1\" ";
        // line 86
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 86, $this->source); })()), 1))) {
            // line 87
            echo "                        selected
                    ";
        }
        // line 88
        echo ">Fecha Asignado</option>
                        <option value=\"2\" ";
        // line 89
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 89, $this->source); })()), 2))) {
            // line 90
            echo "                        selected
                    ";
        }
        // line 91
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
            
        </div>  
        
    </div>
</section>
</form>
";
        // line 110
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 110, $this->source); })()), "getSesion", [], "any", false, false, false, 110), "usuarioTipo", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110), [0 => 3, 1 => 1])) {
            // line 111
            echo "<section>
    ";
            // line 112
            if ((1 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 112, $this->source); })()), 0))) {
                // line 113
                echo "        
    
        ";
                // line 115
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AgendaController::resumenagendadores", ["agendaStatus" => (isset($context["statuesGroup"]) || array_key_exists("statuesGroup", $context) ? $context["statuesGroup"] : (function () { throw new RuntimeError('Variable "statuesGroup" does not exist.', 115, $this->source); })()), "fechainicio" => (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 115, $this->source); })()), "fechafin" => (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 115, $this->source); })()), "compania" => (isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 115, $this->source); })()), "filtro" => (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 115, $this->source); })()), "totalStatus" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 115, $this->source); })()), "tipoFecha" => (isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 115, $this->source); })())]));
                echo "
        ";
            }
            // line 117
            echo "</section>
";
        }
        // line 119
        echo "<section>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 131
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 131, $this->source); })()), "Compañia", "cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 131, $this->source); })()), "isSorted", [0 => "cuenta"], "method", false, false, false, 131)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 132
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 132, $this->source); })()), "Canal", "campania");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 132, $this->source); })()), "isSorted", [0 => "campania"], "method", false, false, false, 132)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 133
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 133, $this->source); })()), "Status", "status");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 133, $this->source); })()), "isSorted", [0 => "status"], "method", false, false, false, 133)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Gestionar</th>
               <th>";
        // line 135
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 135, $this->source); })()), "Agendador", "agendador.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 135, $this->source); })()), "isSorted", [0 => "agendador.nombre"], "method", false, false, false, 135)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
               <th>";
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 136, $this->source); })()), "Reunión", "reunion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 136, $this->source); })()), "isSorted", [0 => "reunion"], "method", false, false, false, 136)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
               <th>";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 137, $this->source); })()), "Abogado", "abogado.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 137, $this->source); })()), "isSorted", [0 => "abogado.nombre"], "method", false, false, false, 137)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
               <th>";
        // line 138
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 138, $this->source); })()), "Nombre", "nombreCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 138, $this->source); })()), "isSorted", [0 => "nombreCliente"], "method", false, false, false, 138)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 139
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 139, $this->source); })()), "Email", "emailCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 139, $this->source); })()), "isSorted", [0 => "emailCliente"], "method", false, false, false, 139)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Telefono</th>
                <th>";
        // line 141
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 141, $this->source); })()), "Fecha Carga", "fechaCarga");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 141, $this->source); })()), "isSorted", [0 => "fechaCarga"], "method", false, false, false, 141)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 142
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 142, $this->source); })()), "Fecha Asignado", "fechaAsignado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 142, $this->source); })()), "isSorted", [0 => "fechaAsignado"], "method", false, false, false, 142)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 143
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 143, $this->source); })()), "Fecha Contrato", "fechaContrato");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 143, $this->source); })()), "isSorted", [0 => "fechaContrato"], "method", false, false, false, 143)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 148
            echo "            <tr>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
                <td>";
            // line 150
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, true, false, 150), "nombre", [], "any", true, true, false, 150)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, true, false, 150), "nombre", [], "any", false, false, false, 150), "")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "campania", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "status", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_new", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            echo "\" class=\"btn\"><i class=\"far fa-paper-plane\"></i></a></td>
   
                <td>";
            // line 155
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "agendador", [], "any", false, true, false, 155), "nombre", [], "any", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "agendador", [], "any", false, true, false, 155), "nombre", [], "any", false, false, false, 155), "")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 156
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agenda"], "reunion", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["agenda"], "reunion", [], "any", false, false, false, 156), "")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, true, false, 157), "nombre", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, true, false, 157), "nombre", [], "any", false, false, false, 157), "")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "nombreCliente", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
                <td><a href=\"mailto:";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "emailCliente", [], "any", false, false, false, 159), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "emailCliente", [], "any", false, false, false, 159), "html", null, true);
            echo "</a></td>
                <td><a href=\"https://api.whatsapp.com/send?phone=";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "telefonoCliente", [], "any", false, false, false, 160), "html", null, true);
            echo "&text=\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "telefonoCliente", [], "any", false, false, false, 160), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 161
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 161)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 161), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 162
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 162), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 163
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaContrato", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaContrato", [], "any", false, false, false, 163), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
               <!-- <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agenda_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 167)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                    </div>
                </td>-->
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        </tbody>
    </table>
    </div>
        <div class=\"card-footer clearfix\">
             ";
        // line 181
        echo "        <div class=\"navigation\">
            ";
        // line 182
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 182, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 185
        echo "
        </div>
    </div>
    </div>
</section>
<script>
    \$('#bFecha').daterangepicker({
        
        \"drops\": \"up\",
        \"startDate\":\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 194, $this->source); })()), "html", null, true);
        echo "\",
        \"endDate\": \"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 195, $this->source); })()), "html", null, true);
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
        return "panel_agendador/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 195,  522 => 194,  511 => 185,  509 => 182,  506 => 181,  500 => 176,  491 => 172,  481 => 167,  477 => 166,  471 => 163,  467 => 162,  463 => 161,  457 => 160,  451 => 159,  447 => 158,  443 => 157,  439 => 156,  435 => 155,  430 => 153,  426 => 152,  422 => 151,  418 => 150,  414 => 149,  411 => 148,  406 => 147,  395 => 143,  387 => 142,  379 => 141,  370 => 139,  362 => 138,  354 => 137,  346 => 136,  338 => 135,  329 => 133,  321 => 132,  313 => 131,  299 => 119,  295 => 117,  290 => 115,  286 => 113,  284 => 112,  281 => 111,  279 => 110,  258 => 91,  254 => 90,  252 => 89,  249 => 88,  245 => 87,  243 => 86,  240 => 85,  236 => 84,  234 => 83,  227 => 79,  222 => 76,  213 => 74,  209 => 72,  207 => 71,  202 => 70,  198 => 69,  178 => 51,  169 => 45,  161 => 39,  158 => 38,  145 => 30,  138 => 26,  134 => 24,  131 => 23,  129 => 22,  125 => 21,  121 => 20,  113 => 17,  107 => 13,  102 => 12,  100 => 11,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('agenda agendador')}}{% endblock %}

{% block body %}
<form action=\"{{path('panel_agendador_index')}}\" method=\"get\" id=\"bForm\">
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
        {% if status is null %}
        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\"><i class=\"far fa-flag\"></i></span>
    
                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Asignados</span>
                <span class=\"info-box-number\">{{total}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        {% endif %}
        
    </div>
    
</section>
<section>


    
    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            
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
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"{{bFiltro}}\">
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
            
        </div>  
        
    </div>
</section>
</form>
{% if sesion.getSesion.usuarioTipo.id in [3,1]  %}
<section>
    {% if total>0 %}
        
    
        {{ render(controller('App\\\\Controller\\\\AgendaController::resumenagendadores', {'agendaStatus':statuesGroup,'fechainicio':dateInicio,'fechafin':dateFin,'compania':bCompania,'filtro':bFiltro,'totalStatus':total,'tipoFecha':tipoFecha})) }}
        {% endif %}
</section>
{% endif %}
<section>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
        
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
        <thead>
            <tr>
                <th>Id</th>
                <th>{{ knp_pagination_sortable(agendas, 'Compañia', 'cuenta') }} {% if agendas.isSorted('cuenta') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Canal', 'campania') }} {% if agendas.isSorted('campania') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Status', 'status') }} {% if agendas.isSorted('status') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>Gestionar</th>
               <th>{{ knp_pagination_sortable(agendas, 'Agendador', 'agendador.nombre') }} {% if agendas.isSorted('agendador.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
               <th>{{ knp_pagination_sortable(agendas, 'Reunión', 'reunion') }} {% if agendas.isSorted('reunion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
               <th>{{ knp_pagination_sortable(agendas, 'Abogado', 'abogado.nombre') }} {% if agendas.isSorted('abogado.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
               <th>{{ knp_pagination_sortable(agendas, 'Nombre', 'nombreCliente') }} {% if agendas.isSorted('nombreCliente') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Email', 'emailCliente') }} {% if agendas.isSorted('emailCliente') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>Telefono</th>
                <th>{{ knp_pagination_sortable(agendas, 'Fecha Carga', 'fechaCarga') }} {% if agendas.isSorted('fechaCarga') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Fecha Asignado', 'fechaAsignado') }} {% if agendas.isSorted('fechaAsignado') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Fecha Contrato', 'fechaContrato') }} {% if agendas.isSorted('fechaContrato') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
            </tr>
        </thead>
        <tbody>
        {% for agenda in agendas %}
            <tr>
                <td>{{ agenda.id }}</td>
                <td>{{ agenda.cuenta.nombre|default('') }}</td>
                <td>{{ agenda.campania }}</td>
                <td>{{ agenda.status }}</td>
                <td align=\"center\"><a href=\"{{path('panel_agendador_new',{'id':agenda.id})}}\" class=\"btn\"><i class=\"far fa-paper-plane\"></i></a></td>
   
                <td>{{ agenda.agendador.nombre|default('') }}</td>
                <td>{{ agenda.reunion|default('') }}</td>
                <td>{{ agenda.abogado.nombre|default('') }}</td>
                <td>{{ agenda.nombreCliente }}</td>
                <td><a href=\"mailto:{{ agenda.emailCliente }}\">{{ agenda.emailCliente }}</a></td>
                <td><a href=\"https://api.whatsapp.com/send?phone={{ agenda.telefonoCliente }}&text=\" target=\"_blank\">{{ agenda.telefonoCliente }}</a></td>
                  <td>{{ agenda.fechaCarga ? agenda.fechaCarga|date('d-m-Y H:i') : '' }}</td>
                  <td>{{ agenda.fechaAsignado ? agenda.fechaAsignado|date('d-m-Y H:i') : '' }}</td>
                  <td>{{ agenda.fechaContrato ? agenda.fechaContrato|date('d-m-Y H:i') : '' }}</td>
               <!-- <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a href=\"{{ path('agenda_show', {'id': agenda.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('panel_agendador_edit', {'id': agenda.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                    </div>
                </td>-->
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
        <div class=\"card-footer clearfix\">
             {# display navigation #}
        <div class=\"navigation\">
            {{ knp_pagination_render(agendas,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
            'position': 'centered',
            'rounded': true,
            }) }}
        </div>
    </div>
    </div>
</section>
<script>
    \$('#bFecha').daterangepicker({
        
        \"drops\": \"up\",
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
{% endblock %}
", "panel_agendador/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\index.html.twig");
    }
}
