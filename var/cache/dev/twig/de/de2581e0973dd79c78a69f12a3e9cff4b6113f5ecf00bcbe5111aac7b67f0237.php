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

/* panel/aprobaciones/aprobarar.html.twig */
class __TwigTemplate_575628c6cee916957fcddacc649d6e8ebb33438990a38551f6f3894fb3f27ce9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/aprobarar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/aprobaciones/aprobarar.html.twig"));

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
\t\t        <div class=\"col-sm-6 col-md-4 \">
                    <small class=\"text_mute\">Jefe que aprueba</small>
                </div>
                <div class=\"col-sm-6 col-md-8 \">
                    <label >";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jefe"]) || array_key_exists("jefe", $context) ? $context["jefe"] : (function () { throw new RuntimeError('Variable "jefe" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-6 col-md-4 \">
                    <small class=\"text_mute\">Fecha Aprobación</small>
                    
                </div>
                <div class=\"col-sm-6 col-md-8 \">
                    <label >";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 20, $this->source); })()), "fechaAprec", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación</small>
                    
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <label >";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 27, $this->source); })()), "observacionAprecJefe", [], "any", false, false, false, 27), "html", null, true);
        echo "</label>
                </div>
                 <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text-mute\">Observación</small>
                    <textarea name=\"observacion\" class=\"form-control\"></textarea>
                </div>
            </div>
            <h></h>
            <div class=\"float-rigth\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["ruta_new"]) || array_key_exists("ruta_new", $context) ? $context["ruta_new"] : (function () { throw new RuntimeError('Variable "ruta_new" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 36, $this->source); })()), "Aprobar Solicitud")) : ("Aprobar Solicitud")), "html", null, true);
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
        return "panel/aprobaciones/aprobarar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  101 => 27,  91 => 20,  81 => 13,  66 => 3,  63 => 2,  44 => 1,);
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
\t\t        <div class=\"col-sm-6 col-md-4 \">
                    <small class=\"text_mute\">Jefe que aprueba</small>
                </div>
                <div class=\"col-sm-6 col-md-8 \">
                    <label >{{jefe.nombre}}</label>
                </div>
                <div class=\"col-sm-6 col-md-4 \">
                    <small class=\"text_mute\">Fecha Aprobación</small>
                    
                </div>
                <div class=\"col-sm-6 col-md-8 \">
                    <label >{{rendicion.fechaAprec|date(\"Y-m-d\")}}</label>
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text_mute\">Observación</small>
                    
                </div>
                <div class=\"col-sm-12 col-md-12 \">
                    <label >{{rendicion.observacionAprecJefe}}</label>
                </div>
                 <div class=\"col-sm-12 col-md-12 \">
                    <small class=\"text-mute\">Observación</small>
                    <textarea name=\"observacion\" class=\"form-control\"></textarea>
                </div>
            </div>
            <h></h>
            <div class=\"float-rigth\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:grabarCrear('{{ruta_new}}')\">{{ button_label|default('Aprobar Solicitud') }}</button>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </form>
\t</div>
{% endblock %}", "panel/aprobaciones/aprobarar.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel\\aprobaciones\\aprobarar.html.twig");
    }
}
