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

/* usuario_no_disponible/show.html.twig */
class __TwigTemplate_4a4f4eb3eb9b921661abba9ce0b26c6459721029e93323cacca88ac556f8641d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario_no_disponible/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario_no_disponible/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario_no_disponible/show.html.twig", 1);
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

        echo "UsuarioNoDisponible";
        
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
        echo "    <h1>UsuarioNoDisponible</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 16, $this->source); })()), "fecha", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 16, $this->source); })()), "fecha", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HoraInicio</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 20, $this->source); })()), "horaInicio", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 20, $this->source); })()), "horaInicio", [], "any", false, false, false, 20), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HoraFin</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 24, $this->source); })()), "horaFin", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 24, $this->source); })()), "horaFin", [], "any", false, false, false, 24), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_no_disponible_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_no_disponible_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["usuario_no_disponible"]) || array_key_exists("usuario_no_disponible", $context) ? $context["usuario_no_disponible"] : (function () { throw new RuntimeError('Variable "usuario_no_disponible" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "usuario_no_disponible/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario_no_disponible/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  130 => 31,  125 => 29,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UsuarioNoDisponible{% endblock %}

{% block body %}
    <h1>UsuarioNoDisponible</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario_no_disponible.id }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ usuario_no_disponible.fecha ? usuario_no_disponible.fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HoraInicio</th>
                <td>{{ usuario_no_disponible.horaInicio ? usuario_no_disponible.horaInicio|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>HoraFin</th>
                <td>{{ usuario_no_disponible.horaFin ? usuario_no_disponible.horaFin|date('H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('usuario_no_disponible_index') }}\">back to list</a>

    <a href=\"{{ path('usuario_no_disponible_edit', {'id': usuario_no_disponible.id}) }}\">edit</a>

    {{ include('usuario_no_disponible/_delete_form.html.twig') }}
{% endblock %}
", "usuario_no_disponible/show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\usuario_no_disponible\\show.html.twig");
    }
}
