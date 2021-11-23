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

/* agenda/_resumenabogados.html.twig */
class __TwigTemplate_e98029430c51640bde256b431b7d6f5080e395b8bddfc1c797bb4e805cfc738d extends Template
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
        // line 1
        echo "<div class=\"card card-outline card-info\">
    <div class=\"card-header\">
      <h3 class=\"card-title\">Resumen por abogado 
        ";
        // line 4
        if ((0 !== twig_compare(($context["nombre_status"] ?? null), ""))) {
            // line 5
            echo "        <strong>en ";
            echo twig_escape_filter($this->env, ($context["nombre_status"] ?? null), "html", null, true);
            echo "</strong>
        ";
        }
        // line 7
        echo "      </h3>

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
        $context['_seq'] = twig_ensure_traversable(($context["agendadores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agendador"]) {
            // line 17
            echo "    
<div class=\"row\">
    <div class=\"col-2\">

    <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["agendador"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "abogado", [], "any", false, false, false, 21), "nombre", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
    </div>
    <div class=\"col-9\">
        <div class=\"progress mb-3\">
            <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 25
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["agendador"], "valor", [], "any", false, false, false, 25) / ($context["total"] ?? null)), "html", null, true);
            echo "\" aria-valuemin=\"0\"
            aria-valuemax=\"100\" style=\"width: ";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["agendador"], "valor", [], "any", false, false, false, 26) / ($context["total"] ?? null)) * 100), "html", null, true);
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
        // line 36
        echo "
</div>
<!-- /.card-body -->
</div>";
    }

    public function getTemplateName()
    {
        return "agenda/_resumenabogados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  91 => 32,  82 => 26,  78 => 25,  71 => 21,  65 => 17,  61 => 16,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agenda/_resumenabogados.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\agenda\\_resumenabogados.html.twig");
    }
}
