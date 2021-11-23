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

/* empresa/index.html.twig */
class __TwigTemplate_ce920f61567f1cac81e16e649028203666dda58d61bb2ce1a32c3a78516a67bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "empresa/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
            <h3 class=\"card-title\">Busqueda</h3>
        </div>
        <div class=\"card-body\">


            <form method=\"post\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <label>Nombre ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ":</label>
                    <input type=\"text\" class=\"form-control\" name=\"txtNombre\" placeholder=\"Nombre\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <!-- Date range -->
                    <div class=\"form-group\">
                        <label>Fecha ingreso:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation\" name=\"txtFechaBusqueda\" autocomplete=\"off\">
                            </div>
                    </div>
                       
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <!-- Date range -->
                    <div class=\"form-group\">
                        <label>Fecha vigencia:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation2\" name=\"txtFechaVigencia\" autocomplete=\"off\">
                            </div>
                    </div>
                       
                </div>
                <div class=\"col-md-2 col-sm-6\">
                    <button class=\"btn btn-secondary\"><i class=\"fas fa-search\"></i></button>
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
            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>

            <table class=\"table table-head-fixed text-nowrap\">
                <thead>
                    <tr>
                    <th>Logo</th>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Rut</th>
                        
                        <th>Fecha Ingreso</th>
                        <th>Fecha ult. mod.</th>
                        <th>Fecha vigencia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 82
            echo "                    <tr><td><img src=\"/build/img/empresas/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "logo", [], "any", false, false, false, 82), "html", null, true);
            echo "\" width='50px'> </td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "rol", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "rut", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                        
                        <td>";
            // line 88
            ((twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaIngreso", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaIngreso", [], "any", false, false, false, 88), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaUltimamodificacion", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaUltimamodificacion", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 90
            ((twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaVigencia", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "fechaVigencia", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_show", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresa_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "                    <tr>
                        <td colspan=\"9\">No hay registro</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tbody>
            </table>
        </div>
    </div>
    
    
    
    <script>
        \$(function () {
            
            
            //Date range picker
   

            \$('#reservation').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            \$('#reservation').on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
            });

            \$('#reservation').on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });
            \$('#reservation').val('";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["rngFechaIngreso"]) || array_key_exists("rngFechaIngreso", $context) ? $context["rngFechaIngreso"] : (function () { throw new RuntimeError('Variable "rngFechaIngreso" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "');




            \$('#reservation2').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            \$('#reservation2').on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
            });

            \$('#reservation2').on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });
            \$('#reservation2').val('";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["rngFechaVigencia"]) || array_key_exists("rngFechaVigencia", $context) ? $context["rngFechaVigencia"] : (function () { throw new RuntimeError('Variable "rngFechaVigencia" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "');

        
        

        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 148,  266 => 129,  236 => 101,  227 => 97,  218 => 93,  214 => 92,  209 => 90,  205 => 89,  201 => 88,  196 => 86,  192 => 85,  188 => 84,  184 => 83,  179 => 82,  174 => 81,  153 => 63,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina}}{% endblock %}

{% block body %}
    
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Busqueda</h3>
        </div>
        <div class=\"card-body\">


            <form method=\"post\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <label>Nombre {{pagina}}:</label>
                    <input type=\"text\" class=\"form-control\" name=\"txtNombre\" placeholder=\"Nombre\" value=\"{{nombre}}\">
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <!-- Date range -->
                    <div class=\"form-group\">
                        <label>Fecha ingreso:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation\" name=\"txtFechaBusqueda\" autocomplete=\"off\">
                            </div>
                    </div>
                       
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <!-- Date range -->
                    <div class=\"form-group\">
                        <label>Fecha vigencia:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                </span>
                                </div>
                                <input type=\"text\" class=\"form-control float-right\" id=\"reservation2\" name=\"txtFechaVigencia\" autocomplete=\"off\">
                            </div>
                    </div>
                       
                </div>
                <div class=\"col-md-2 col-sm-6\">
                    <button class=\"btn btn-secondary\"><i class=\"fas fa-search\"></i></button>
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
            <a href=\"{{ path('empresa_new') }}\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>

            <table class=\"table table-head-fixed text-nowrap\">
                <thead>
                    <tr>
                    <th>Logo</th>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Rut</th>
                        
                        <th>Fecha Ingreso</th>
                        <th>Fecha ult. mod.</th>
                        <th>Fecha vigencia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {% for empresa in empresas %}
                    <tr><td><img src=\"/build/img/empresas/{{empresa.logo}}\" width='50px'> </td>
                        <td>{{ empresa.id }}</td>
                        <td>{{ empresa.nombre }}</td>
                        <td>{{ empresa.rol }}</td>
                        <td>{{ empresa.rut }}</td>
                        
                        <td>{{ empresa.fechaIngreso ? empresa.fechaIngreso|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ empresa.fechaUltimamodificacion ? empresa.fechaUltimamodificacion|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ empresa.fechaVigencia ? empresa.fechaVigencia|date('Y-m-d H:i:s') : '' }}</td>
                        <td>
                            <a href=\"{{ path('empresa_show', {'id': empresa.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"{{ path('empresa_edit', {'id': empresa.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\">No hay registro</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    <script>
        \$(function () {
            
            
            //Date range picker
   

            \$('#reservation').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            \$('#reservation').on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
            });

            \$('#reservation').on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });
            \$('#reservation').val('{{rngFechaIngreso}}');




            \$('#reservation2').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            \$('#reservation2').on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
            });

            \$('#reservation2').on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });
            \$('#reservation2').val('{{rngFechaVigencia}}');

        
        

        })
    </script>
{% endblock %}
", "empresa/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\empresa\\index.html.twig");
    }
}
