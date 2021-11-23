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

/* privilegio_tipousuario/index.html.twig */
class __TwigTemplate_6f69d9d44b0d6fa8195fcf9016a3afc9789e36465d071032b54c89b3226c7d76 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privilegio_tipousuario/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privilegio_tipousuario/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "privilegio_tipousuario/index.html.twig", 1);
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
        <div class=\"card-title\">
        <p class=\"text-muted\">Privilegios para:</p> <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuarioTipo"]) || array_key_exists("usuarioTipo", $context) ? $context["usuarioTipo"] : (function () { throw new RuntimeError('Variable "usuarioTipo" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"card-body\">
            <div class=\"col-md-6\">
            ";
        // line 13
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 13, $this->source); })()), "getSesion", [], "any", false, false, false, 13), "usuarioTipo", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), 8))) {
            // line 14
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privilegio_tipousuario_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuarioTipo"]) || array_key_exists("usuarioTipo", $context) ? $context["usuarioTipo"] : (function () { throw new RuntimeError('Variable "usuarioTipo" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <select action=\"#\" class=\"form-control\" name=\"selModulo\" required>
                                <option></option>
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 20
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "nombre", [], "any", false, false, false, 20), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                            </select>
                        </div>
                        <div class=\"col-6\">
                            <button class=\"btn btn-primary\" type=\"submit\">Agregar Modulo</button>
                        </div>
                    </div>
                </form>
            ";
        }
        // line 30
        echo "            </div>
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privilegio_tipousuarios"]) || array_key_exists("privilegio_tipousuarios", $context) ? $context["privilegio_tipousuarios"] : (function () { throw new RuntimeError('Variable "privilegio_tipousuarios" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["privilegio_tipousuario"]) {
            // line 41
            echo "                    <tr>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "moduloPer", [], "any", false, false, false, 42), "nombre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "moduloPer", [], "any", false, false, false, 43), "descripcion", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>
                        
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["acciones"]) || array_key_exists("acciones", $context) ? $context["acciones"] : (function () { throw new RuntimeError('Variable "acciones" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["accion"]) {
                // line 48
                echo "                                <label class=\"btn bg-primary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" autocomplete=\"off\" 
                                    ";
                // line 50
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "accion", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo "                                            checked
                                        ";
                }
                // line 53
                echo "                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 53, $this->source); })()), "getSesion", [], "any", false, false, false, 53), "usuarioTipo", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), 8))) {
                    // line 54
                    echo "                                    onclick=\"javascript:checkAccion('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "')\"
                                    ";
                }
                // line 56
                echo "                                    > ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accion"], "nombre", [], "any", false, false, false, 56), "html", null, true);
                echo "
                                </label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            </div>
                        
                            <div id=\"checked";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\" class=\"checked";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilegio_tipousuario"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\"> 
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                    <tr>
                        <td colspan=\"2\">Sin registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilegio_tipousuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        function checkAccion(accion,privilegio){
            \$.ajax({
                url:\"/privilegio_tipousuario/\"+privilegio+\"/edit\",
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
        return "privilegio_tipousuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 70,  222 => 66,  210 => 61,  206 => 59,  196 => 56,  188 => 54,  185 => 53,  181 => 51,  179 => 50,  174 => 49,  171 => 48,  167 => 47,  160 => 43,  156 => 42,  153 => 41,  148 => 40,  136 => 30,  126 => 22,  115 => 20,  111 => 19,  102 => 14,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PrivilegioTipousuario index{% endblock %}

{% block body %}

    <div class=\"card\">
        <div class=\"card-title\">
        <p class=\"text-muted\">Privilegios para:</p> <h1>{{usuarioTipo.nombre}}</h1>
        </div>
        <div class=\"card-body\">
            <div class=\"col-md-6\">
            {% if sesion.getSesion.usuarioTipo.id==8 %}
                <form action=\"{{ path('privilegio_tipousuario_new',{'id':usuarioTipo.id}) }}\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <select action=\"#\" class=\"form-control\" name=\"selModulo\" required>
                                <option></option>
                                {% for modulo in modulos %}
                                    <option value=\"{{modulo.id}}\">{{modulo.nombre}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col-6\">
                            <button class=\"btn btn-primary\" type=\"submit\">Agregar Modulo</button>
                        </div>
                    </div>
                </form>
            {% endif %}
            </div>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Descripción</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                {% for privilegio_tipousuario in privilegio_tipousuarios %}
                    <tr>
                        <td>{{ privilegio_tipousuario.moduloPer.nombre }}</td>
                        <td>{{ privilegio_tipousuario.moduloPer.descripcion }}</td>
                        <td>
                        
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            {% for accion in acciones %}
                                <label class=\"btn bg-primary active\">
                                    <input type=\"radio\" name=\"options\" id=\"option{{privilegio_tipousuario.id}}{{accion.id}}\" autocomplete=\"off\" 
                                    {% if accion.id == privilegio_tipousuario.accion.id %}
                                            checked
                                        {% endif %}
                                    {% if sesion.getSesion.usuarioTipo.id==8 %}
                                    onclick=\"javascript:checkAccion('{{accion.id}}','{{privilegio_tipousuario.id}}')\"
                                    {% endif %}
                                    > {{accion.nombre}}
                                </label>
                            {% endfor %}
                            </div>
                        
                            <div id=\"checked{{privilegio_tipousuario.id}}\" class=\"checked{{privilegio_tipousuario.id}}\"> 
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
                url:\"/privilegio_tipousuario/\"+privilegio+\"/edit\",
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
", "privilegio_tipousuario/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\privilegio_tipousuario\\index.html.twig");
    }
}
