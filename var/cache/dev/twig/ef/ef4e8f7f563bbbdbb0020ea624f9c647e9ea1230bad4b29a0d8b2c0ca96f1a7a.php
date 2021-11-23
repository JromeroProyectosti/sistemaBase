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

/* cobranza/vercobranzas.html.twig */
class __TwigTemplate_745a81b6f602fe5fa53689cefe06f6ef3cde334b799f20b03f07bbdeafd6b30c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/vercobranzas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/vercobranzas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/vercobranzas.html.twig", 1);
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

        echo "Cobranza";
        
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
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"card-body table-responsive p-0\" >
            
        <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
            <thead>
                <tr>
                    <th  align=\"center\">Lote</th>
                    <th> Cobrador</th>
                    <th align=\"center\">Fecha Gestión</th>
                    <th align=\"center\">Función Cobranza</th>
                    <th  align=\"center\">Respuesta</th>
                    <th align=\"center\">Fecha Compromiso</th>
                    <th align=\"center\">Observación</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cobranzas"]) || array_key_exists("cobranzas", $context) ? $context["cobranzas"] : (function () { throw new RuntimeError('Variable "cobranzas" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cobranza"]) {
            // line 26
            echo "                <tr
                ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["cobranza"], "isNulo", [], "any", false, false, false, 27)) {
                // line 28
                echo "                    class=\"table-danger\"
                ";
            }
            // line 30
            echo "                >
                    <td align=\"right\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cobranza"], "contrato", [], "any", false, false, false, 31), "lote", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td align=\"right\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cobranza"], "usuarioRegistro", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], "fechaHora", [], "any", false, false, false, 33), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], "funcion", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], "respuesta", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["cobranza"], "fechaCompromiso", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], "fechaCompromiso", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cobranza"], "observacion", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </span>
                        <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"popover\" title=\"Observación Completa\" data-content=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["cobranza"], "observacion", [], "any", false, false, false, 41);
            echo "\">Ver Más</button>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cobranza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
           
                <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cobranza_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" class=\"btn btn-primary\" >Agregar gestión</a>

        </div>
    </div>
    
    <script>
        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
            \$('.popover-dismiss').popover({
                trigger: 'focus'
              });
            
              \$('[data-toggle=\"popover\"]').popover({
                  template: '<div class=\"popover\" role=\"tooltip\"><div class=\"arrow\"><</div><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>',
              });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/vercobranzas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 52,  170 => 46,  159 => 41,  154 => 39,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  125 => 30,  121 => 28,  119 => 27,  116 => 26,  112 => 25,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cobranza{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: {{contrato.id}}</h1>
    </div>
    <div class=\"card-body table-responsive p-0\" >
            
        <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
            <thead>
                <tr>
                    <th  align=\"center\">Lote</th>
                    <th> Cobrador</th>
                    <th align=\"center\">Fecha Gestión</th>
                    <th align=\"center\">Función Cobranza</th>
                    <th  align=\"center\">Respuesta</th>
                    <th align=\"center\">Fecha Compromiso</th>
                    <th align=\"center\">Observación</th>
                </tr>
            </thead>
            <tbody>
            {% for cobranza in cobranzas %}
                <tr
                {% if cobranza.isNulo %}
                    class=\"table-danger\"
                {% endif %}
                >
                    <td align=\"right\">{{cobranza.contrato.lote}}</td>
                    <td align=\"right\">{{cobranza.usuarioRegistro.nombre}}</td>
                    <td align=\"center\">{{cobranza.fechaHora|date('Y-m-d H:i')}}</td>
                    <td align=\"center\">{{cobranza.funcion}}</td>
                    <td align=\"center\">{{cobranza.respuesta}}</td>
                    <td>{{cobranza.fechaCompromiso ? cobranza.fechaCompromiso|date('Y-m-d'):''}}</td>
                    <td>
                        <span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
                            {{cobranza.observacion}}
                        </span>
                        <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"popover\" title=\"Observación Completa\" data-content=\"{{cobranza.observacion|raw}}\">Ver Más</button>
                    </td>
                </tr>

            {% endfor %}

        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
           
                <a href=\"{{path('cobranza_new',{'id':contrato.id})}}\" class=\"btn btn-primary\" >Agregar gestión</a>

        </div>
    </div>
    
    <script>
        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
            \$('.popover-dismiss').popover({
                trigger: 'focus'
              });
            
              \$('[data-toggle=\"popover\"]').popover({
                  template: '<div class=\"popover\" role=\"tooltip\"><div class=\"arrow\"><</div><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>',
              });
        });
    </script>
{% endblock %}", "cobranza/vercobranzas.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\vercobranzas.html.twig");
    }
}
