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

/* panel/aprobaciones/aprobarjf.html.twig */
class __TwigTemplate_4060ab04c48ca2d6a7c0739d9444e74e24f0db096008f68b6cde286d9e8fe9c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/aprobarjf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/aprobarjf.html.twig"));

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
        echo "\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\">Aprobar ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 3, $this->source); })()), "tipo", [], "any", false, false, false, 3), "nombre", [], "any", false, false, false, 3), "html", null, true);
        echo " N° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 3, $this->source); })()), "numero", [], "any", false, false, false, 3), "html", null, true);
        echo " </h5>
\t</div>
\t<div class=\"modal-body\">
        <form id=\"form\" method=\"post\">
            <input type=\"hidden\" name=\"aprueba\" value=\"1\">  
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6 \">
                    <small class=\"text-mute\">Fecha Inicio</small><br>
                    <label>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 11, $this->source); })()), "fechaInicio", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-6 \">
                    <small class=\"text-mute\">Fecha fin</small><br>
                    <label>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 15, $this->source); })()), "fechaFin", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true);
        echo "</label>
                </div>
\t\t        <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación trabajador</small><br>
                    <label>";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 19, $this->source); })()), "observacion", [], "any", false, false, false, 19);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación Jefe área</small>
                    
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <textarea class=\"form-control\" name=\"observacion\">
                    </textarea>
                </div>
            </div>
            <h></h>
            <div class=\"float-rigth\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["ruta_new"]) || array_key_exists("ruta_new", $context) ? $context["ruta_new"] : (function () { throw new RuntimeError('Variable "ruta_new" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Aprobar Solicitud")) : ("Aprobar Solicitud")), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </form>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/aprobaciones/aprobarjf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  93 => 19,  86 => 15,  79 => 11,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\" id=\"agregaModalLabel\">Aprobar {{ rendicion.tipo.nombre }} N° {{ rendicion.numero }} </h5>
\t</div>
\t<div class=\"modal-body\">
        <form id=\"form\" method=\"post\">
            <input type=\"hidden\" name=\"aprueba\" value=\"1\">  
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6 \">
                    <small class=\"text-mute\">Fecha Inicio</small><br>
                    <label>{{rendicion.fechaInicio|date(\"Y-m-d\")}}</label>
                </div>
                <div class=\"col-sm-12 col-md-6 \">
                    <small class=\"text-mute\">Fecha fin</small><br>
                    <label>{{rendicion.fechaFin|date(\"Y-m-d\")}}</label>
                </div>
\t\t        <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación trabajador</small><br>
                    <label>{{rendicion.observacion|raw}}</label>
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación Jefe área</small>
                    
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <textarea class=\"form-control\" name=\"observacion\">
                    </textarea>
                </div>
            </div>
            <h></h>
            <div class=\"float-rigth\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('{{ruta_new}}')\">{{ button_label|default('Aprobar Solicitud') }}</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </form>
\t</div>
{% endblock %}", "panel/aprobaciones/aprobarjf.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel\\aprobaciones\\aprobarjf.html.twig");
    }
}
