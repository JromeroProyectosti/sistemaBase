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

/* panel_agendador/horas.html.twig */
class __TwigTemplate_e830cfb195a27cb39740099ddd84543ada4e9389f6c35e8adcbc97034f09cb26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/horas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/horas.html.twig"));

        // line 1
        echo "<select name=\"cboHoras\"  class=\"form-control horas\" required>
    <option value=\"\">
        ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
    </option>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) || array_key_exists("horarios", $context) ? $context["horarios"] : (function () { throw new RuntimeError('Variable "horarios" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hora"]) {
            // line 6
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "\"
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
                // line 8
                echo "            ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 8), "G:i"), $context["hora"]))) {
                    // line 9
                    echo "                disabled
            ";
                }
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nodisponibles"]) || array_key_exists("nodisponibles", $context) ? $context["nodisponibles"] : (function () { throw new RuntimeError('Variable "nodisponibles" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nodisponible"]) {
                // line 13
                echo "            ";
                if ((0 === twig_compare($context["hora"], $context["nodisponible"]))) {
                    // line 14
                    echo "                disabled
            ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodisponible'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        >";
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
        if ((0 !== twig_compare((isset($context["sobrecupo"]) || array_key_exists("sobrecupo", $context) ? $context["sobrecupo"] : (function () { throw new RuntimeError('Variable "sobrecupo" does not exist.', 19, $this->source); })()), ""))) {
            // line 20
            echo "        <option value=\"00:00\">";
            echo twig_escape_filter($this->env, (isset($context["sobrecupo"]) || array_key_exists("sobrecupo", $context) ? $context["sobrecupo"] : (function () { throw new RuntimeError('Variable "sobrecupo" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</option>
    ";
        }
        // line 22
        echo "</select>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_agendador/horas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  108 => 20,  105 => 19,  96 => 17,  90 => 16,  86 => 14,  83 => 13,  78 => 12,  72 => 11,  68 => 9,  65 => 8,  61 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select name=\"cboHoras\"  class=\"form-control horas\" required>
    <option value=\"\">
        {{mensaje}}
    </option>
    {% for hora in horarios %}
        <option value=\"{{hora}}\"
        {% for agenda in agendas %}
            {% if agenda.fechaAsignado|date(\"G:i\") == hora %}
                disabled
            {% endif %}
        {% endfor %}
        {% for nodisponible in nodisponibles %}
            {% if hora==nodisponible %}
                disabled
            {% endif %}
        {% endfor %}
        >{{hora}}</option>
    {% endfor %}
    {% if sobrecupo!=\"\" %}
        <option value=\"00:00\">{{sobrecupo}}</option>
    {% endif %}
</select>", "panel_agendador/horas.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\horas.html.twig");
    }
}
