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

/* privilegio/index.html.twig */
class __TwigTemplate_d0cc18250d30dc5601c89cf8a7dbcf4ac37ae88d40faf3103d2f06330241b578 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privilegio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privilegio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "privilegio/index.html.twig", 1);
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

        echo "PrivilegioTipousuario index";
        
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
        <p class=\"text-muted\">Privilegios para:</p> <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"row\">
                
            </div>
        <div class=\"card-body\">
            <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privilegio_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-refresh\"></i>Actualizar</button>
                </form>
                <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privilegio_regenerar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-recycle\"></i>Regenerar</button>
                </form>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Descripción</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privilegios"]) || array_key_exists("privilegios", $context) ? $context["privilegios"] : (function () { throw new RuntimeError('Variable "privilegios" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["privilegio"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio"], "moduloPer", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio"], "moduloPer", [], "any", false, false, false, 33), "descripcion", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["acciones"]) || array_key_exists("acciones", $context) ? $context["acciones"] : (function () { throw new RuntimeError('Variable "acciones" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["accion"]) {
                // line 37
                echo "                                <label class=\"btn bg-primary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" autocomplete=\"off\" 
                                    ";
                // line 39
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio"], "accion", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "                                            checked
                                        ";
                }
                // line 42
                echo "                                    onclick=\"javascript:checkAccion('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "')\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "nombre", [], "any", false, false, false, 42), "html", null, true);
                echo "
                                </label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </div>
                        
                            <div id=\"checked";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"checked";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"> 
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    <tr>
                        <td colspan=\"2\">Sin registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilegio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        function checkAccion(accion,privilegio){
            \$.ajax({
                url:\"/privilegio/\"+privilegio+\"/edit\",
                type: \"post\",
                dataType: \"json\",
                data:{\"accion\":accion},
                success:function(data){
                    
                     \$(\".checked\"+privilegio).html(data);
                }

            });

        }
    </script>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "privilegio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 56,  189 => 52,  177 => 47,  173 => 45,  159 => 42,  155 => 40,  153 => 39,  148 => 38,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  128 => 31,  123 => 30,  108 => 18,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PrivilegioTipousuario index{% endblock %}

{% block body %}

    <div class=\"card\">
        <div class=\"card-header\">
        <p class=\"text-muted\">Privilegios para:</p> <h1>{{usuario.nombre}}</h1>
        </div>
        <div class=\"row\">
                
            </div>
        <div class=\"card-body\">
            <form action=\"{{path('privilegio_new',{'id':usuario.id})}}\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-refresh\"></i>Actualizar</button>
                </form>
                <form action=\"{{path('privilegio_regenerar',{'id':usuario.id})}}\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-recycle\"></i>Regenerar</button>
                </form>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Descripción</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                {% for privilegio in privilegios %}
                    <tr>
                        <td>{{ privilegio.moduloPer.nombre }}</td>
                        <td>{{ privilegio.moduloPer.descripcion }}</td>
                        <td>
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            {% for accion in acciones %}
                                <label class=\"btn bg-primary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option{{privilegio.id}}{{accion.id}}\" autocomplete=\"off\" 
                                    {% if accion.id == privilegio.accion.id %}
                                            checked
                                        {% endif %}
                                    onclick=\"javascript:checkAccion('{{accion.id}}','{{privilegio.id}}')\"> {{accion.nombre}}
                                </label>
                            {% endfor %}
                            </div>
                        
                            <div id=\"checked{{privilegio.id}}\" class=\"checked{{privilegio.id}}\"> 
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"2\">Sin registros</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        function checkAccion(accion,privilegio){
            \$.ajax({
                url:\"/privilegio/\"+privilegio+\"/edit\",
                type: \"post\",
                dataType: \"json\",
                data:{\"accion\":accion},
                success:function(data){
                    
                     \$(\".checked\"+privilegio).html(data);
                }

            });

        }
    </script>

    
{% endblock %}
", "privilegio/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\privilegio\\index.html.twig");
    }
}
