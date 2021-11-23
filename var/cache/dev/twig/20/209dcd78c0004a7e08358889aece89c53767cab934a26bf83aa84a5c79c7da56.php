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

/* modulo/index.html.twig */
class __TwigTemplate_8c23fd2b50b32ad8f13e46afb73233dcae90efe96724bc8ca9a8afdc3c1f2c97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modulo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modulo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "modulo/index.html.twig", 1);
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

        echo "Modulos";
        
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
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modulo_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-refresh\"></i>Actualizar</a>
    <div class=\"card\">

        <div class=\"card-body\">
        ";
        // line 12
        echo "        <div class=\"navigation\">
            ";
        // line 13
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 13, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 16
        echo "
        </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th
                    
                    >";
        // line 23
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 23, $this->source); })()), "Id", "id");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 23, $this->source); })()), "isSorted", [0 => "id"], "method", false, false, false, 23)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 24, $this->source); })()), "Nombre", "nombre");
        if (twig_get_attribute($this->env, $this->source, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 24, $this->source); })()), "isSorted", [0 => "nombre"], "method", false, false, false, 24)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 25, $this->source); })()), "Descripcion", "descripcion");
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 25, $this->source); })()), "isSorted", [0 => "descripcion"], "method", false, false, false, 25)) {
            echo " <i class=\"fas fa-sort\"></i>";
        }
        echo "</th>
                    <th>Nombre Interno</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "nombre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "descripcion", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td><code>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["modulo"], "modulo", [], "any", false, false, false, 36), "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</code></td>
                    <td>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modulo_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                <tr>
                    <td colspan=\"5\">Sin registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>
        ";
        // line 49
        echo "        <div class=\"navigation\">
            ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 50, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 53
        echo "
        </div>
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "modulo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 53,  190 => 50,  187 => 49,  183 => 46,  174 => 42,  165 => 38,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  145 => 32,  140 => 31,  127 => 25,  120 => 24,  112 => 23,  103 => 16,  101 => 13,  98 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modulos{% endblock %}

{% block body %}
    
    <a href=\"{{ path('modulo_new') }}\" class=\"btn btn-primary\"><i class=\"fas fa-refresh\"></i>Actualizar</a>
    <div class=\"card\">

        <div class=\"card-body\">
        {# display navigation #}
        <div class=\"navigation\">
            {{ knp_pagination_render(modulos,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
            'position': 'centered',
            'rounded': true,
            }) }}
        </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th
                    
                    >{{ knp_pagination_sortable(modulos, 'Id', 'id') }} {% if modulos.isSorted('id') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(modulos, 'Nombre', 'nombre') }}{% if modulos.isSorted('nombre') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>{{ knp_pagination_sortable(modulos, 'Descripcion', 'descripcion') }} {% if modulos.isSorted('descripcion') %} <i class=\"fas fa-sort\"></i>{% endif %}</th>
                    <th>Nombre Interno</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            {% for modulo in modulos %}
                <tr>
                    <td>{{ modulo.id }}</td>
                    <td>{{ modulo.nombre }}</td>
                    <td>{{ modulo.descripcion }}</td>
                    <td><code>{{ modulo.modulo.nombre }}</code></td>
                    <td>
                        <a href=\"{{ path('modulo_edit', {'id': modulo.id}) }}\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">Sin registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {# display navigation #}
        <div class=\"navigation\">
            {{ knp_pagination_render(modulos,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
            'position': 'centered',
            'rounded': true,
            }) }}
        </div>
        </div>
    </div>
    
{% endblock %}
", "modulo/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\modulo\\index.html.twig");
    }
}
