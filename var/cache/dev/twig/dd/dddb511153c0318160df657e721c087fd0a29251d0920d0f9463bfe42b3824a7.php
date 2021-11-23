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

/* usuario_no_disponible/index.html.twig */
class __TwigTemplate_1ef736125d1ea1275523bb883ae6a6317c99540e7064c0bb8cd79f9e615f00c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario_no_disponible/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario_no_disponible/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Fecha Creacion</th>
                <th>Concepto</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Año</th>
                <th>Mes</th>
                <th>Dia</th>
                <th>HoraInicio</th>
                <th>HoraFin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuario_no_disponibles"]) || array_key_exists("usuario_no_disponibles", $context) ? $context["usuario_no_disponibles"] : (function () { throw new RuntimeError('Variable "usuario_no_disponibles" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuario_no_disponible"]) {
            // line 21
            echo "        
            <tr>
                <td>";
            // line 23
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fecha", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fecha", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
               <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "concepto", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fechaInicio", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fechaInicio", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fechaFin", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "fechaFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 27
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "anio", [], "any", false, false, false, 27), 0))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "anio", [], "any", false, false, false, 27), "html", null, true))) : (print ("*")));
            echo "</td>
                <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "mes", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "mes", [], "any", false, false, false, 28), "html", null, true))) : (print ("*")));
            echo "</td>
                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "dia", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "dia", [], "any", false, false, false, 29), "html", null, true))) : (print ("*")));
            echo "</td>
                <td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "horaInicio", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "horaInicio", [], "any", false, false, false, 30), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "horaFin", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "horaFin", [], "any", false, false, false, 31), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td><button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminaHora(";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario_no_disponible"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo ")\"><i class=\"fas fa-trash\"></i></button></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"12\">Sin Registro</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario_no_disponible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario_no_disponible/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  138 => 35,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 21,  85 => 20,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Fecha Creacion</th>
                <th>Concepto</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Año</th>
                <th>Mes</th>
                <th>Dia</th>
                <th>HoraInicio</th>
                <th>HoraFin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for usuario_no_disponible in usuario_no_disponibles %}
        
            <tr>
                <td>{{usuario_no_disponible.fecha ? usuario_no_disponible.fecha|date('Y-m-d') : ''}}</td>
               <td>{{usuario_no_disponible.concepto}}</td>
                <td>{{ usuario_no_disponible.fechaInicio ? usuario_no_disponible.fechaInicio|date('Y-m-d') : '' }}</td>
                <td>{{ usuario_no_disponible.fechaFin ? usuario_no_disponible.fechaFin|date('Y-m-d') : '' }}</td>
                <td>{{ usuario_no_disponible.anio != 0 ? usuario_no_disponible.anio : '*' }}</td>
                <td>{{ usuario_no_disponible.mes ? usuario_no_disponible.mes : '*' }}</td>
                <td>{{ usuario_no_disponible.dia ? usuario_no_disponible.dia : '*' }}</td>
                <td>{{ usuario_no_disponible.horaInicio ? usuario_no_disponible.horaInicio|date('H:i') : '' }}</td>
                <td>{{ usuario_no_disponible.horaFin ? usuario_no_disponible.horaFin|date('H:i') : '' }}</td>
                <td><button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminaHora({{usuario_no_disponible.id}})\"><i class=\"fas fa-trash\"></i></button></td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"12\">Sin Registro</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "usuario_no_disponible/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\usuario_no_disponible\\index.html.twig");
    }
}
