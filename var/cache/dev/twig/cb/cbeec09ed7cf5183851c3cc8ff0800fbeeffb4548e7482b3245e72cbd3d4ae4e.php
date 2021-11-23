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

/* materia_estrategia/new.html.twig */
class __TwigTemplate_4cce540f611e1a30540eab803afa520d93bf3e57032bc5d3cb6f352818196024 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia_estrategia/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia_estrategia/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materia_estrategia/new.html.twig", 1);
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

        echo "New MateriaEstrategia";
        
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
        echo "     <div class=\"card\">
        <div class=\"card-header\">
            Datos Materia
        </div>
        <div class=\"card-body\">
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Nombre</small><br>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materia_estrategium"]) || array_key_exists("materia_estrategium", $context) ? $context["materia_estrategium"] : (function () { throw new RuntimeError('Variable "materia_estrategium" does not exist.', 13, $this->source); })()), "materia", [], "any", false, false, false, 13), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Compañia(s)</small><br>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materia_estrategium"]) || array_key_exists("materia_estrategium", $context) ? $context["materia_estrategium"] : (function () { throw new RuntimeError('Variable "materia_estrategium" does not exist.', 17, $this->source); })()), "materia", [], "any", false, false, false, 17), "cuentaMaterias", [], "any", false, false, false, 17));
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
            
        </div>

    </div>
    ";
        // line 26
        echo twig_include($this->env, $context, "materia_estrategia/_form.html.twig");
        echo "
    <div class=\"card\">
        <div class=\"card-header\">
            Sub Materia
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materia_estrategias"]) || array_key_exists("materia_estrategias", $context) ? $context["materia_estrategias"] : (function () { throw new RuntimeError('Variable "materia_estrategias" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materia_estrategium"]) {
            // line 42
            echo "                    <tr>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materia_estrategium"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materia_estrategium"], "estrategiaJuridica", [], "any", false, false, false, 44), "nombre", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materia_estrategia_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["materia_estrategium"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mee_new", ["id" => twig_get_attribute($this->env, $this->source, $context["materia_estrategium"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"  class=\"btn btn-warning\" alt=\"Sub Materias\" > <i class=\"fas fa-share-alt\"></i></a>
                            
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    <tr>
                        <td colspan=\"2\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia_estrategium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "materia_estrategia/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  174 => 52,  164 => 47,  160 => 46,  155 => 44,  151 => 43,  148 => 42,  143 => 41,  125 => 26,  117 => 20,  108 => 18,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New MateriaEstrategia{% endblock %}

{% block body %}
     <div class=\"card\">
        <div class=\"card-header\">
            Datos Materia
        </div>
        <div class=\"card-body\">
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Nombre</small><br>
                {{ materia_estrategium.materia.nombre}}
            </div>
            <div class=\"col-sm-6 col-md-6\">
                <small class=\"text-muted\">Compañia(s)</small><br>
                {% for cuenta_materia in materia_estrategium.materia.cuentaMaterias %}
                    {{ cuenta_materia.cuenta.nombre}}<br>
                {% endfor %}
               
            </div>
            
        </div>

    </div>
    {{ include('materia_estrategia/_form.html.twig') }}
    <div class=\"card\">
        <div class=\"card-header\">
            Sub Materia
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
                {% for materia_estrategium in materia_estrategias %}
                    <tr>
                        <td>{{ materia_estrategium.id }}</td>
                        <td>{{materia_estrategium.estrategiaJuridica.nombre}}</td>
                        <td>
                            <a href=\"{{ path('materia_estrategia_delete',{'id':materia_estrategium.id })}}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                            <a href=\"{{ path('mee_new', {'id': materia_estrategium.id}) }}\"  class=\"btn btn-warning\" alt=\"Sub Materias\" > <i class=\"fas fa-share-alt\"></i></a>
                            
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
", "materia_estrategia/new.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\materia_estrategia\\new.html.twig");
    }
}
