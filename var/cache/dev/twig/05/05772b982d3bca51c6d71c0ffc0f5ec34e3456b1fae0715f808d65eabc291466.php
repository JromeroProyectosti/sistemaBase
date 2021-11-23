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

/* nocontesta/index.html.twig */
class __TwigTemplate_a656f1eafe8b5831dcedf4b970e9c40eb1d4ed17ac2d33a9f1e008afd5b342b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nocontesta/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nocontesta/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nocontesta/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "Reasignar")) : ("Reasignar")), "html", null, true);
        
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
        echo "
    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nocontesta_index");
        echo "\" method=\"get\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-3\">
                    <select name=\"bCompania\" class=\"form-control\">
                        <option value=\"0\">Todos</option>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 18
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                            ";
            // line 19
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 19)))) {
                // line 20
                echo "                                selected
                            ";
            }
            // line 22
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["bFiltro"]) || array_key_exists("bFiltro", $context) ? $context["bFiltro"] : (function () { throw new RuntimeError('Variable "bFiltro" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    
                </div>

            </div>
            </form>
        </div>  
        
    </div>
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
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 52, $this->source); })()), "Compañia", "cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 52, $this->source); })()), "isSorted", [0 => "cuenta"], "method", false, false, false, 52)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 53, $this->source); })()), "Canal", "campania");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 53, $this->source); })()), "isSorted", [0 => "campania"], "method", false, false, false, 53)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 54, $this->source); })()), "Status", "status");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 54, $this->source); })()), "isSorted", [0 => "status"], "method", false, false, false, 54)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Reasignar</th>
                <th>";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 56, $this->source); })()), "Agendador", "agendador.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 56, $this->source); })()), "isSorted", [0 => "agendador.nombre"], "method", false, false, false, 56)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 57, $this->source); })()), "Abogado", "abogado.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 57, $this->source); })()), "isSorted", [0 => "abogado.nombre"], "method", false, false, false, 57)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 58, $this->source); })()), "Nombre", "nombreCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 58, $this->source); })()), "isSorted", [0 => "nombreCliente"], "method", false, false, false, 58)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 59, $this->source); })()), "Email", "emailCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 59, $this->source); })()), "isSorted", [0 => "emailCliente"], "method", false, false, false, 59)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Telefono</th>
                <th>Fecha Carga</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 67
            echo "            <tr>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, false, false, 69), "nombre", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "campania", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "status", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nocontesta_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" class=\"btn\"><i class=\"far fa-paper-plane\"></i></a></td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "agendador", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, true, false, 74), "nombre", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, true, false, 74), "nombre", [], "any", false, false, false, 74), "")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "nombreCliente", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "emailCliente", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "telefonoCliente", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 78), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nocontesta_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
    </table>
    </div>
        <div class=\"card-footer clearfix\">
             ";
        // line 93
        echo "        <div class=\"navigation\">
            ";
        // line 94
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 94, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 97
        echo "
        </div>
    </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nocontesta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 97,  304 => 94,  301 => 93,  295 => 88,  286 => 84,  277 => 80,  272 => 78,  268 => 77,  264 => 76,  260 => 75,  256 => 74,  252 => 73,  248 => 72,  244 => 71,  240 => 70,  236 => 69,  232 => 68,  229 => 67,  224 => 66,  210 => 59,  202 => 58,  194 => 57,  186 => 56,  177 => 54,  169 => 53,  161 => 52,  133 => 27,  128 => 24,  119 => 22,  115 => 20,  113 => 19,  108 => 18,  104 => 17,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('Reasignar')}}{% endblock %}

{% block body %}

    <div class=\"card\">
        <div class=\"card-header\">
            Filtro
        </div>
        <div class=\"card-body\">
            <form action=\"{{path('nocontesta_index')}}\" method=\"get\">
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
                <div class=\"col-sm-12 col-md-3\">
                    <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    
                </div>

            </div>
            </form>
        </div>  
        
    </div>
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
                <th>Reasignar</th>
                <th>{{ knp_pagination_sortable(agendas, 'Agendador', 'agendador.nombre') }} {% if agendas.isSorted('agendador.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Abogado', 'abogado.nombre') }} {% if agendas.isSorted('abogado.nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Nombre', 'nombreCliente') }} {% if agendas.isSorted('nombreCliente') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>{{ knp_pagination_sortable(agendas, 'Email', 'emailCliente') }} {% if agendas.isSorted('emailCliente') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                <th>Telefono</th>
                <th>Fecha Carga</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for agenda in agendas %}
            <tr>
                <td>{{ agenda.id }}</td>
                <td>{{ agenda.cuenta.nombre }}</td>
                <td>{{ agenda.campania }}</td>
                <td>{{ agenda.status }}</td>
                <td align=\"center\"><a href=\"{{path('nocontesta_show',{'id':agenda.id})}}\" class=\"btn\"><i class=\"far fa-paper-plane\"></i></a></td>
                <td>{{ agenda.agendador.nombre }}</td>
                <td>{{ agenda.abogado.nombre|default('') }}</td>
                <td>{{ agenda.nombreCliente }}</td>
                <td>{{ agenda.emailCliente }}</td>
                <td>{{ agenda.telefonoCliente }}</td>
                <td>{{ agenda.fechaCarga ? agenda.fechaCarga|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('nocontesta_show', {'id': agenda.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                </td>
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
    
{% endblock %}
", "nocontesta/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\nocontesta\\index.html.twig");
    }
}
