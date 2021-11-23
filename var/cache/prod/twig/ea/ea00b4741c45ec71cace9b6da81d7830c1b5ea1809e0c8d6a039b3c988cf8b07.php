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

/* panel_abogado/index.html.twig */
class __TwigTemplate_f110b14ca320032f9679a512784ba3a369811fe35ffa8266f67111d8ea90a303 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "panel_abogado/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter(($context["pagina"] ?? null), "agenda agendador")) : ("agenda agendador")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_index");
        echo "\" method=\"get\" id=\"bForm\">
    <input type=\"hidden\" name=\"bStatus\" id=\"bStatus\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
<section>
    
    <div class=\"row\">
        ";
        // line 12
        $context["total"] = 0;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resumenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["resumen"]) {
            // line 14
            echo "       
        <div class=\"col-sm-6 col-md-3\">
            
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["resumen"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "status", [], "any", false, false, false, 18), "color", [], "any", false, false, false, 18), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["resumen"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "status", [], "any", false, false, false, 18), "icon", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></i></span>
    
                <div class=\"info-box-content\">
                <span class=\"info-box-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["resumen"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "status", [], "any", false, false, false, 21), "nombre", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                <span class=\"info-box-number\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                ";
            // line 23
            $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["resumen"], "valor", [], "any", false, false, false, 23));
            // line 24
            echo "                <a href=\"#\" class=\"small-box-footer\" onclick=\"javascript:buscar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["resumen"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "status", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ")\">
                    Ver Más <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
                </div>

                
                <!-- /.info-box-content -->
            </div>
      
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resumen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        ";
        if ((null === ($context["status"] ?? null))) {
            // line 36
            echo "        <div class=\"col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\"><i class=\"far fa-flag\"></i></span>
    
                <div class=\"info-box-content\">
                <span class=\"info-box-text\">Asignados</span>
                <span class=\"info-box-number\">";
            // line 42
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        ";
        }
        // line 48
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 67
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
                            ";
            // line 68
            if ((0 === twig_compare(($context["bCompania"] ?? null), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 68)))) {
                // line 69
                echo "                                selected
                            ";
            }
            // line 71
            echo "                            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 71), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </select>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <input type=\"text\" class=\"form-control\" name=\"bFiltro\" placeholder=\"Nombre/Email/Telefono\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["bFiltro"] ?? null), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <select name=\"bTipofecha\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 80
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), 0))) {
            // line 81
            echo "                            selected
                        ";
        }
        // line 82
        echo ">Fecha Carga</option>
                        <option value=\"1\" ";
        // line 83
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), 1))) {
            // line 84
            echo "                        selected
                    ";
        }
        // line 85
        echo ">Fecha Asignado</option>
                        <option value=\"2\" ";
        // line 86
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), 2))) {
            // line 87
            echo "                        selected
                    ";
        }
        // line 88
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
        // line 107
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sesion"] ?? null), "getSesion", [], "any", false, false, false, 107), "usuarioTipo", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), [0 => 3, 1 => 1, 2 => 4])) {
            // line 108
            echo "<section>
";
            // line 109
            if ((1 === twig_compare(($context["total"] ?? null), 0))) {
                // line 110
                echo "    


    

   
        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AgendaController::resumenabogados", ["agendaStatus" => ($context["status"] ?? null), "fechainicio" => ($context["dateInicio"] ?? null), "fechafin" => ($context["dateFin"] ?? null), "compania" => ($context["bCompania"] ?? null), "filtro" => ($context["bFiltro"] ?? null), "totalStatus" => ($context["total"] ?? null), "tipoFecha" => ($context["tipoFecha"] ?? null)]));
                echo "
";
            }
            // line 118
            echo "</section>
";
        }
        // line 120
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
        // line 132
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Compañia", "cuenta.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "cuenta.nombre"], "method", false, false, false, 132)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 133
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Canal", "campania");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "campania"], "method", false, false, false, 133)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 134
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Status", "status");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "status"], "method", false, false, false, 134)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Gestionar</th>
                <th>";
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Agendador", "agendador.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "agendador.nombre"], "method", false, false, false, 136)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Reunión", "reunion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "reunion"], "method", false, false, false, 137)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 138
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Abogado", "abogado.nombre");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "abogado.nombre"], "method", false, false, false, 138)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 139
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Nombre", "nombreCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "nombreCliente"], "method", false, false, false, 139)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>";
        // line 140
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["agendas"] ?? null), "Email", "emailCliente");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["agendas"] ?? null), "isSorted", [0 => "emailCliente"], "method", false, false, false, 140)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                <th>Telefono</th>
                <th>Fecha Carga</th>
                <th>Fecha Asignado</th>
                <th>Fecha Contrato</th>
            
            </tr>
        </thead>
        <tbody>
        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agendas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 150
            echo "            <tr>
                <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "contrato", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, false, false, 152), "nombre", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "campania", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "status", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_new", ["id" => twig_get_attribute($this->env, $this->source, $context["agenda"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\" class=\"btn\"><i class=\"far fa-paper-plane\"></i></a></td>
                <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "agendador", [], "any", false, false, false, 156), "nombre", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "reunion", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, false, false, 158), "nombre", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
                <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "nombreCliente", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>
                <td><a href=\"mailto:";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "emailCliente", [], "any", false, false, false, 160), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "emailCliente", [], "any", false, false, false, 160), "html", null, true);
            echo "</a></td>
                <td><a href=\"https://api.whatsapp.com/send?phone=";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "telefonoCliente", [], "any", false, false, false, 161), "html", null, true);
            echo "&text=\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "telefonoCliente", [], "any", false, false, false, 161), "html", null, true);
            echo "</a></td>
                <td>";
            // line 162
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaCarga", [], "any", false, false, false, 162), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 163
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 163), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 164
            ((twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaContrato", [], "any", false, false, false, 164)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaContrato", [], "any", false, false, false, 164), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 167
            echo "            <tr>
                <td colspan=\"10\">No hay Agendas</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "        </tbody>
    </table>
    </div>
        <div class=\"card-footer clearfix\">
             ";
        // line 176
        echo "        <div class=\"navigation\">
            ";
        // line 177
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["agendas"] ?? null), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 180
        echo "
        </div>
    </div>
    </div>
</section>
<script>
    \$('#bFecha').daterangepicker({
        
        \"drops\": \"up\",
        \"startDate\":\"";
        // line 189
        echo twig_escape_filter($this->env, ($context["dateInicio"] ?? null), "html", null, true);
        echo "\",
        \"endDate\": \"";
        // line 190
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
    function buscar(status){
        \$(\"#bStatus\").val(status);
        \$(\"#bForm\").submit();
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "panel_abogado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 190,  458 => 189,  447 => 180,  445 => 177,  442 => 176,  436 => 171,  427 => 167,  419 => 164,  415 => 163,  411 => 162,  405 => 161,  399 => 160,  395 => 159,  391 => 158,  387 => 157,  383 => 156,  379 => 155,  375 => 154,  371 => 153,  367 => 152,  361 => 151,  358 => 150,  353 => 149,  337 => 140,  329 => 139,  321 => 138,  313 => 137,  305 => 136,  296 => 134,  288 => 133,  280 => 132,  266 => 120,  262 => 118,  257 => 116,  249 => 110,  247 => 109,  244 => 108,  242 => 107,  221 => 88,  217 => 87,  215 => 86,  212 => 85,  208 => 84,  206 => 83,  203 => 82,  199 => 81,  197 => 80,  190 => 76,  185 => 73,  176 => 71,  172 => 69,  170 => 68,  165 => 67,  161 => 66,  141 => 48,  132 => 42,  124 => 36,  121 => 35,  103 => 24,  101 => 23,  97 => 22,  93 => 21,  85 => 18,  79 => 14,  74 => 13,  72 => 12,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panel_abogado/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_abogado\\index.html.twig");
    }
}
