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

/* panel/aprobaciones/exito.html.twig */
class __TwigTemplate_1cb32fb78661bdbfbc9bc90915ceb1814e130b22dadd32652e38c140c99b0521 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/exito.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/exito.html.twig"));

        // line 1
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

        // line 2
        echo "\t
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\"><i class=\"fas fa-exclamation-circle\"></i> Solicitud aprobada!!!</h5>
\t</div>
\t<div class=\"modal-body\">
\t<p>Solicitud N° ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 7, $this->source); })()), "numero", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
\t</div>
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:cerrarCrear('";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ruta_index"]) || array_key_exists("ruta_index", $context) ? $context["ruta_index"] : (function () { throw new RuntimeError('Variable "ruta_index" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "')\">Cerrar</button>
\t</div>
\t


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/aprobaciones/exito.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  70 => 7,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
\t
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\"><i class=\"fas fa-exclamation-circle\"></i> Solicitud aprobada!!!</h5>
\t</div>
\t<div class=\"modal-body\">
\t<p>Solicitud N° {{rendicion.numero}}</p>
\t</div>
\t<div class=\"modal-footer\">
\t\t<button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:cerrarCrear('{{ruta_index}}')\">Cerrar</button>
\t</div>
\t


{% endblock %}", "panel/aprobaciones/exito.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel\\aprobaciones\\exito.html.twig");
    }
}
