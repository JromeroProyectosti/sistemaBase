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

/* tramitadores/show.html.twig */
class __TwigTemplate_34035f31d86c39e731381a4960e5f88b2f2fe24701e511c022ec86e28b35b7f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tramitadores/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tramitadores/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tramitadores/show.html.twig", 1);
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

        echo "Abogados";
        
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

<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Empresa *</small>
\t\t\t\t<label></label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t<label>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), "html", null, true);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t<label>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 21, $this->source); })()), "rut", [], "any", false, false, false, 21), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t<label>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 26, $this->source); })()), "correo", [], "any", false, false, false, 26), "html", null, true);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t<label>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 30, $this->source); })()), "telefono", [], "any", false, false, false, 30), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t<label>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 35, $this->source); })()), "whatsapp", [], "any", false, false, false, 35), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t<label>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 40, $this->source); })()), "direccion", [], "any", false, false, false, 40), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t<label>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 45, $this->source); })()), "sexo", [], "any", false, false, false, 45), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Categoria</small>
\t\t\t\t<label>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 50, $this->source); })()), "categoria", [], "any", false, false, false, 50), "nombre", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Status</small>
\t\t\t\t<label>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "nombre", [], "any", false, false, false, 55), "html", null, true);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Fecha No Disponible</small>
\t\t\t\t<label>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 59, $this->source); })()), "fechaNoDisponible", [], "any", false, false, false, 59), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
            <div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t<label>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 64, $this->source); })()), "username", [], "any", false, false, false, 64), "html", null, true);
        echo "</label>
\t\t\t\t
\t\t\t</div>
\t\t\t    

        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tramitadores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  170 => 59,  163 => 55,  155 => 50,  147 => 45,  139 => 40,  131 => 35,  123 => 30,  116 => 26,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Abogados{% endblock %}

{% block body %}
    

<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Empresa *</small>
\t\t\t\t<label></label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t<label>{{usuario.nombre}}</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t<label>{{usuario.rut}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t<label>{{usuario.correo}}</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t<label>{{usuario.telefono}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t<label>{{usuario.whatsapp}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t<label>{{usuario.direccion}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t<label>{{usuario.sexo}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Categoria</small>
\t\t\t\t<label>{{usuario.categoria.nombre}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Status</small>
\t\t\t\t<label>{{usuario.status.nombre}}</label>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Fecha No Disponible</small>
\t\t\t\t<label>{{usuario.fechaNoDisponible}}</label>
\t\t\t\t
\t\t\t</div>
            <div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t<label>{{usuario.username}}</label>
\t\t\t\t
\t\t\t</div>
\t\t\t    

        </div>

    </div>
</div>

{% endblock %}
", "tramitadores/show.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\tramitadores\\show.html.twig");
    }
}
