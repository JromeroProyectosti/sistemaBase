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

/* cobranza/resumen.html.twig */
class __TwigTemplate_1f6221f687b3dd86c0841ea376b7dc486386bba281bd0c83b2cd9e598b0711f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/resumen.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/resumen.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/resumen.html.twig", 1);
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
        echo "    <section>
        <div class=\"alert alert-warning\">
            <h1>Total Registros: <strong>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</strong></h1>
        </div>
    </section>
    <div class=\"card\">
        <div class=\"card-header\">
            <form action=\"\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-3\">
                        <select name=\"bCompania\" class=\"form-control\">
                            <option value=\"0\">Todos</option>
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
            // line 19
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                                ";
            // line 20
            if ((0 === twig_compare((isset($context["bCompania"]) || array_key_exists("bCompania", $context) ? $context["bCompania"] : (function () { throw new RuntimeError('Variable "bCompania" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                                    selected
                                ";
            }
            // line 23
            echo "                                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
                    </div>

                    <div class=\"col-sm-12 col-md-3\">
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                   
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <div class=\"col-md-6 col-sm-12\">

            
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Colaborador</th>
                        <th>Fecha Gestión</th>
                        <th>Q. Ges.</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 53
        $context["total"] = 0;
        // line 54
        echo "                ";
        $context["num"] = 1;
        // line 55
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cobranzas"]) || array_key_exists("cobranzas", $context) ? $context["cobranzas"] : (function () { throw new RuntimeError('Variable "cobranzas" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cobranza"]) {
            // line 56
            echo "              
                
                    <tr>

                        <td>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cobranza"], 0, [], "array", false, false, false, 61), "usuarioRegistro", [], "any", false, false, false, 61), "nombre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cobranza"], 0, [], "array", false, false, false, 62), "fecha", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td align=\"right\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], 1, [], "array", false, false, false, 63), "html", null, true);
            echo "</td>
                        
                        ";
            // line 65
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["cobranza"], 1, [], "array", false, false, false, 65));
            // line 66
            echo "                        ";
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 66, $this->source); })()) + 1);
            // line 67
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                    <tr>
                        <td colspan=\"5\">No hay cobranzas</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cobranza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                
                    <tr>
                    <td colspan=\"3\" align=\"right\">Total:</td>
                    <td  align=\"right\">
                         <strong>";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 77, $this->source); })()), 0, ",", "."), "html", null, true);
        echo "</strong>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                ";
        // line 87
        echo "           <div class=\"navigation\">
               ";
        // line 88
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cobranzas"]) || array_key_exists("cobranzas", $context) ? $context["cobranzas"] : (function () { throw new RuntimeError('Variable "cobranzas" does not exist.', 88, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 91
        echo "
           </div>
       </div>
            
        </div>
    </div>
    <script>
        \$('#bFecha').daterangepicker({
        
            \"drops\": \"down\",
            \"startDate\":\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["dateInicio"]) || array_key_exists("dateInicio", $context) ? $context["dateInicio"] : (function () { throw new RuntimeError('Variable "dateInicio" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\",
            \"endDate\": \"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 102, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 102,  248 => 101,  236 => 91,  234 => 88,  231 => 87,  219 => 77,  213 => 73,  204 => 69,  198 => 67,  195 => 66,  193 => 65,  188 => 63,  184 => 62,  180 => 61,  176 => 60,  170 => 56,  164 => 55,  161 => 54,  159 => 53,  129 => 25,  120 => 23,  116 => 21,  114 => 20,  109 => 19,  105 => 18,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pagos{% endblock %}

{% block body %}
    <section>
        <div class=\"alert alert-warning\">
            <h1>Total Registros: <strong>{{total}}</strong></h1>
        </div>
    </section>
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
                        <input type=\"text\" class=\"form-control\" name=\"bFecha\" id=\"bFecha\"  value=\"\">
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <button class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button>
                    </div>
                   
                </div>
                </form>
        </div>
        <div class=\"card-body table-responsive p-0\" style=\"height: 500px;\">
        
            <div class=\"col-md-6 col-sm-12\">

            
            <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Colaborador</th>
                        <th>Fecha Gestión</th>
                        <th>Q. Ges.</th>
                    </tr>
                </thead>
                <tbody>
                {% set total=0 %}
                {% set num=1 %}
                {% for cobranza in cobranzas %}
              
                
                    <tr>

                        <td>{{ num }}</td>
                        <td>{{cobranza[0].usuarioRegistro.nombre}}</td>
                        <td>{{ cobranza[0].fecha|date(\"Y-m-d\")}}</td>
                        <td align=\"right\">{{ cobranza[1] }}</td>
                        
                        {% set total = total +  cobranza[1] %}
                        {% set num = num + 1 %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No hay cobranzas</td>
                    </tr>
                {% endfor %}
                
                    <tr>
                    <td colspan=\"3\" align=\"right\">Total:</td>
                    <td  align=\"right\">
                         <strong>{{ total|number_format(0,\",\",\".\") }}</strong>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"card-footer clearfix\">
                {# display navigation #}
           <div class=\"navigation\">
               {{ knp_pagination_render(cobranzas,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
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
    </script>
{% endblock %}
", "cobranza/resumen.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\resumen.html.twig");
    }
}
