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

/* pago/show.html.twig */
class __TwigTemplate_a8fa13b17d9275672ae5988f4884e00954b17f0faa5c6394412e35b5c4d9b06b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pago/show.html.twig", 1);
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

        echo "Pago";
        
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
        echo "<div class=\"row\">
    <div class=\"col-sm-12  col-md-8\">

        <div class=\"card\">
            <div class=\"card-header\">
                <h1>Folio: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"card-body table-responsive pad\">
            
        
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Monto Pagado (*)</small>
                        <br>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 20, $this->source); })()), "monto", [], "any", false, false, false, 20), 0, ",", "."), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Fecha Comprobante (*)</small>
                        <br>
                        ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 25, $this->source); })()), "fechaPago", [], "any", false, false, false, 25), "Y-m-d H:i"), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Fecha Ingreso Comprobante</small>
                        <br>
                        ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 30, $this->source); })()), "fechaRegistro", [], "any", false, false, false, 30), "Y-m-d H:i"), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">N° Comprobante</small>
                        <br>
                        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 35, $this->source); })()), "ncomprobante", [], "any", false, false, false, 35), "html", null, true);
        echo "
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">N° Boleta</small>
                        <br>
                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 41, $this->source); })()), "boleta", [], "any", false, false, false, 41), "html", null, true);
        echo "
                    
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Tipo Deposito (*)</small>
                        <br>
                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 47, $this->source); })()), "pagoTipo", [], "any", false, false, false, 47), "html", null, true);
        echo "
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Cta. Cte. (*)</small>
                        <br>
                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 53, $this->source); })()), "cuentaCorriente", [], "any", false, false, false, 53), "html", null, true);
        echo "
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Canal (*)</small>
                        <br>
                        ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 59, $this->source); })()), "pagoCanal", [], "any", false, false, false, 59), "html", null, true);
        echo "
                       
                    </div>
                    <div class=\"col-sm-12 col-md-12\">
                        <small class=\"text-muted\">Observación</small>
                        ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 64, $this->source); })()), "observacion", [], "any", false, false, false, 64), "html", null, true);
        echo "
                       
                        
                    </div>
                </div> 
            </div>
            
        </div>
        
    </div>
    
</div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pago/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 64,  167 => 59,  158 => 53,  149 => 47,  140 => 41,  131 => 35,  123 => 30,  115 => 25,  107 => 20,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pago{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12  col-md-8\">

        <div class=\"card\">
            <div class=\"card-header\">
                <h1>Folio: {{contrato.id}}</h1>
            </div>
            <div class=\"card-body table-responsive pad\">
            
        
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Monto Pagado (*)</small>
                        <br>
                        {{pago.monto|number_format(0,\",\",\".\")}}
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Fecha Comprobante (*)</small>
                        <br>
                        {{pago.fechaPago|date('Y-m-d H:i')}}
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Fecha Ingreso Comprobante</small>
                        <br>
                        {{pago.fechaRegistro|date('Y-m-d H:i')}}
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">N° Comprobante</small>
                        <br>
                        {{pago.ncomprobante}}
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">N° Boleta</small>
                        <br>
                        {{pago.boleta}}
                    
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Tipo Deposito (*)</small>
                        <br>
                        {{pago.pagoTipo}}
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Cta. Cte. (*)</small>
                        <br>
                        {{pago.cuentaCorriente}}
                        
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <small class=\"text-muted\">Canal (*)</small>
                        <br>
                        {{pago.pagoCanal}}
                       
                    </div>
                    <div class=\"col-sm-12 col-md-12\">
                        <small class=\"text-muted\">Observación</small>
                        {{pago.observacion}}
                       
                        
                    </div>
                </div> 
            </div>
            
        </div>
        
    </div>
    
</div>   
{% endblock %}
", "pago/show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pago\\show.html.twig");
    }
}
