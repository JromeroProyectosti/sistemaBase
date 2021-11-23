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
class __TwigTemplate_003b915e8afeb712b2030473e9defd3bcc46daa1b1ed6a0583f4026e7e7a26b7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contrato/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contrato index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["companias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 14
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
                                ";
            // line 15
            if ((0 === twig_compare(($context["bCompania"] ?? null), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 15)))) {
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
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Compañia", "agenda.cuenta");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "agenda.cuenta"], "method", false, false, false, 43)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Folio", "id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "id"], "method", false, false, false, 44)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Cliente", "nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "nombre"], "method", false, false, false, 45)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Agendador", "agenda.agendador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "agenda.agendador"], "method", false, false, false, 46)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Abogado", "agenda.abogado");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "agenda.abogado"], "method", false, false, false, 47)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Tramitador", "tramitador");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "tramitador"], "method", false, false, false, 48)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Sucursal", "sucursal");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "sucursal"], "method", false, false, false, 49)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        <th>";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["contratos"] ?? null), "Fecha Contrato", "fechaCreacion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["contratos"] ?? null), "isSorted", [0 => "fechaCreacion"], "method", false, false, false, 50)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                        ";
        // line 51
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sesion"] ?? null), "getSesion", [], "any", false, false, false, 51), "usuarioTipo", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), [0 => 1, 1 => 4, 2 => 8, 3 => 7])) {
            // line 52
            echo "                        <th>Acciones</th>
                        ";
        }
        // line 54
        echo "                    </tr>
                </thead>
                <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contratos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 58
            echo "                    <tr>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 59), "cuenta", [], "any", false, false, false, 59), "nombre", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "nombre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 62), "agendador", [], "any", false, false, false, 62), "nombre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 63), "abogado", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "tramitador", [], "any", false, false, false, 64), "nombre", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "sucursal", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "fechaCreacion", [], "any", false, false, false, 66), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        ";
            // line 67
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sesion"] ?? null), "getSesion", [], "any", false, false, false, 67), "usuarioTipo", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), [0 => 1, 1 => 3, 2 => 4, 3 => 6, 4 => 8, 5 => 7])) {
                // line 68
                echo "                        <td>
                            
                                
                            ";
                // line 71
                if ((null === twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 71))) {
                    // line 72
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
                } else {
                    // line 74
                    echo "
                                <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["url_web"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["pdf_contrato"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato"], "pdf", [], "any", false, false, false, 75), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-file-pdf\"></i></a>
                            ";
                }
                // line 77
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-edit\"></i></a>
                           
                                ";
                // line 80
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrato"], "agenda", [], "any", false, false, false, 80), "status", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), 14))) {
                    // line 81
                    echo "                                    <a href=\"#\" class=\"btn btn-warning btn-sm\"><i class=\"fas fa-retweet\"></i></a>

                                ";
                } else {
                    // line 84
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_terminar", ["id" => twig_get_attribute($this->env, $this->source, $context["contrato"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>
                                    <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-handshake-slash\"></i></a>-->
                                    
                                ";
                }
                // line 88
                echo "
                        </td>
                        ";
            }
            // line 91
            echo "                    </tr>
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["contratos"] ?? null), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
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
        echo twig_escape_filter($this->env, ($context["dateInicio"] ?? null), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 118
        echo twig_escape_filter($this->env, ($context["dateFin"] ?? null), "html", null, true);
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
        return array (  329 => 118,  325 => 117,  313 => 107,  311 => 104,  308 => 103,  301 => 97,  292 => 93,  286 => 91,  281 => 88,  273 => 84,  268 => 81,  266 => 80,  261 => 78,  256 => 77,  249 => 75,  246 => 74,  240 => 72,  238 => 71,  233 => 68,  231 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  211 => 62,  207 => 61,  203 => 60,  199 => 59,  196 => 58,  191 => 57,  186 => 54,  182 => 52,  180 => 51,  172 => 50,  164 => 49,  156 => 48,  148 => 47,  140 => 46,  132 => 45,  124 => 44,  116 => 43,  91 => 20,  82 => 18,  78 => 16,  76 => 15,  71 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrato/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\index.html.twig");
    }
}
