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

/* agenda/_resumenagendadores.html.twig */
class __TwigTemplate_df85eac1ad0ee9526927c7f744519b365b1062e3869b54b8803a9088cfba46c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_resumenagendadores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_resumenagendadores.html.twig"));

        // line 1
        echo "<div class=\"card card-outline card-info\">
    <div class=\"card-header\">
      <h3 class=\"card-title\">Resumen por agendador 
          ";
        // line 4
        if ((0 !== twig_compare((isset($context["nombre_status"]) || array_key_exists("nombre_status", $context) ? $context["nombre_status"] : (function () { throw new RuntimeError('Variable "nombre_status" does not exist.', 4, $this->source); })()), ""))) {
            // line 5
            echo "          <strong>en ";
            echo twig_escape_filter($this->env, (isset($context["nombre_status"]) || array_key_exists("nombre_status", $context) ? $context["nombre_status"] : (function () { throw new RuntimeError('Variable "nombre_status" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</strong>
          ";
        }
        // line 7
        echo "        </h3>

      <div class=\"card-tools\">
        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i></button>
      </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendadores"]) || array_key_exists("agendadores", $context) ? $context["agendadores"] : (function () { throw new RuntimeError('Variable "agendadores" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agendador"]) {
            // line 17
            echo "            
        <div class=\"row\">
            <div class=\"col-2\">

            <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agendador"], 0, [], "array", false, false, false, 21), "agendador", [], "any", false, false, false, 21), "nombre", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-9\">
                <div class=\"progress mb-3\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 25
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["agendador"], "valor", [], "any", false, false, false, 25) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "\" aria-valuemin=\"0\"
                    aria-valuemax=\"100\" style=\"width: ";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agendador"], "valor", [], "any", false, false, false, 26) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 26, $this->source); })())) * 100), "html", null, true);
            echo "%\">
                        <span class=\"sr-only\">40% Complete (success)</span>
                    </div>
                </div>
            </div>
            <div class=\"col-1\">
                <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agendador"], "valor", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
            </div>
        </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agendador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agenda/_resumenagendadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  97 => 32,  88 => 26,  84 => 25,  77 => 21,  71 => 17,  67 => 16,  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-outline card-info\">
    <div class=\"card-header\">
      <h3 class=\"card-title\">Resumen por agendador 
          {% if nombre_status != '' %}
          <strong>en {{nombre_status}}</strong>
          {% endif %}
        </h3>

      <div class=\"card-tools\">
        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
        </button>
        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i></button>
      </div>
    </div>
    <div class=\"card-body\">
        {% for agendador in agendadores %}
            
        <div class=\"row\">
            <div class=\"col-2\">

            <p>{{agendador[0].agendador.nombre}}</p>
            </div>
            <div class=\"col-9\">
                <div class=\"progress mb-3\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"{{agendador.valor/total}}\" aria-valuemin=\"0\"
                    aria-valuemax=\"100\" style=\"width: {{agendador.valor/total*100}}%\">
                        <span class=\"sr-only\">40% Complete (success)</span>
                    </div>
                </div>
            </div>
            <div class=\"col-1\">
                <p>{{agendador.valor}}</p>
            </div>
        </div>
    
{% endfor %}
</div>
</div>", "agenda/_resumenagendadores.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\agenda\\_resumenagendadores.html.twig");
    }
}
