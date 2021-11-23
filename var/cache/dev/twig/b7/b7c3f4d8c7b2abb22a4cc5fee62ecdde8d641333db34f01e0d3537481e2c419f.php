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

/* agenda/_agendadores.html.twig */
class __TwigTemplate_2798c99d8fcf56a8dfa513d816f80f1ce17883253da7ddb1c06f97911bc890f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_agendadores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_agendadores.html.twig"));

        // line 1
        echo "
<small class=\"text-muted\">Agendador</small>
<select name=\"cboAgendador\" class=\"form-control\" required>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendadores"]) || array_key_exists("agendadores", $context) ? $context["agendadores"] : (function () { throw new RuntimeError('Variable "agendadores" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agendador"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agendador"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\"
        
        ";
            // line 7
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["agendador"], "id", [], "any", false, false, false, 7), (isset($context["agendador_id"]) || array_key_exists("agendador_id", $context) ? $context["agendador_id"] : (function () { throw new RuntimeError('Variable "agendador_id" does not exist.', 7, $this->source); })())))) {
                // line 8
                echo "            selected
        ";
            }
            // line 10
            echo "        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agendador"], "nombre", [], "any", false, false, false, 10), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agendador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</select>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agenda/_agendadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  64 => 10,  60 => 8,  58 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<small class=\"text-muted\">Agendador</small>
<select name=\"cboAgendador\" class=\"form-control\" required>
    {% for agendador in agendadores %}
        <option value=\"{{agendador.id}}\"
        
        {% if agendador.id == agendador_id %}
            selected
        {% endif %}
        >{{agendador.nombre}}</option>
    {% endfor %}
</select>", "agenda/_agendadores.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\agenda\\_agendadores.html.twig");
    }
}
