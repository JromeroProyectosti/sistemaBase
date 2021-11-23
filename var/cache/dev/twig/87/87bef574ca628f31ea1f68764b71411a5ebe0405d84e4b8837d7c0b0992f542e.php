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

/* email/rechazaar.html.twig */
class __TwigTemplate_72dc979a19d21774fa7d5399f25b81e4b248554bdbe67444838feb87952c4fcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pdf/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/rechazaar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/rechazaar.html.twig"));

        $this->parent = $this->loadTemplate("pdf/base.html.twig", "email/rechazaar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 4, $this->source); })()), "tipo", [], "any", false, false, false, 4), "nombre", [], "any", false, false, false, 4), "html", null, true);
        echo " N° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 4, $this->source); })()), "numero", [], "any", false, false, false, 4), "html", null, true);
        echo " ha sido rechazada por el monto  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 4, $this->source); })()), "monto", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

Motivo:
<p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendicion"]) || array_key_exists("rendicion", $context) ? $context["rendicion"] : (function () { throw new RuntimeError('Variable "rendicion" does not exist.', 7, $this->source); })()), "observacionAprecAr", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "email/rechazaar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 7,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pdf/base.html.twig' %}
{% block body %}

<h1>{{rendicion.tipo.nombre}} N° {{rendicion.numero}} ha sido rechazada por el monto  {{rendicion.monto}}</h1>

Motivo:
<p>{{rendicion.observacionAprecAr}}</p>

{% endblock %}", "email/rechazaar.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\email\\rechazaar.html.twig");
    }
}
