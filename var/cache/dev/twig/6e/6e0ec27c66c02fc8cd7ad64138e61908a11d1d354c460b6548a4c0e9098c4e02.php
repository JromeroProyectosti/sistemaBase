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

/* mee/new.html.twig */
class __TwigTemplate_e11dcaec1ef79a33e971a2944a17450619e0f5d9ab0c27a7fe76d418cd1c8744 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mee/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mee/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mee/new.html.twig", 1);
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

        echo "New Mee";
        
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
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            Datos Materia
        </div>
        <div class=\"card-body\">
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Nombre</small><br>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 13, $this->source); })()), "materiaEstrategia", [], "any", false, false, false, 13), "materia", [], "any", false, false, false, 13), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Compañia(s)</small><br>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 17, $this->source); })()), "materiaEstrategia", [], "any", false, false, false, 17), "materia", [], "any", false, false, false, 17), "cuentaMaterias", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta_materia"]) {
            // line 18
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cuenta_materia"], "cuenta", [], "any", false, false, false, 18), "nombre", [], "any", false, false, false, 18), "html", null, true);
            echo "<br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta_materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "               
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Sub Materia</small><br>
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 24, $this->source); })()), "materiaEstrategia", [], "any", false, false, false, 24), "estrategiaJuridica", [], "any", false, false, false, 24), "nombre", [], "any", false, false, false, 24), "html", null, true);
        echo "
            </div>
        </div>

    </div>

    ";
        // line 30
        echo twig_include($this->env, $context, "mee/_form.html.twig");
        echo "

    <div class=\"card\">
        <div class=\"card-header\">
            Escrituras
        </div>
        <div class=\"card-body\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mees"]) || array_key_exists("mees", $context) ? $context["mees"] : (function () { throw new RuntimeError('Variable "mees" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mee"]) {
            // line 47
            echo "                    <tr>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mee"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mee"], "escritura", [], "any", false, false, false, 49), "nombre", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <td>
                       <!-- <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materia_estrategia_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mee"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>-->
                       </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                    <tr>
                        <td colspan=\"2\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mee/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 59,  177 => 55,  168 => 51,  163 => 49,  159 => 48,  156 => 47,  151 => 46,  132 => 30,  123 => 24,  117 => 20,  108 => 18,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Mee{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            Datos Materia
        </div>
        <div class=\"card-body\">
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Nombre</small><br>
                {{ mee.materiaEstrategia.materia.nombre}}
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Compañia(s)</small><br>
                {% for cuenta_materia in mee.materiaEstrategia.materia.cuentaMaterias %}
                    {{ cuenta_materia.cuenta.nombre}}<br>
                {% endfor %}
               
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Sub Materia</small><br>
                {{ mee.materiaEstrategia.estrategiaJuridica.nombre}}
            </div>
        </div>

    </div>

    {{ include('mee/_form.html.twig') }}

    <div class=\"card\">
        <div class=\"card-header\">
            Escrituras
        </div>
        <div class=\"card-body\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {% for mee in mees %}
                    <tr>
                        <td>{{ mee.id }}</td>
                        <td>{{mee.escritura.nombre}}</td>
                        <td>
                       <!-- <a href=\"{{ path('materia_estrategia_delete',{'id':mee.id })}}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>-->
                       </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"2\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "mee/new.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\mee\\new.html.twig");
    }
}
