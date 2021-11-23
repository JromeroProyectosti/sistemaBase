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

/* mee/list.html.twig */
class __TwigTemplate_731901b0923199407fe0d33d70e20b1d5ac23c276762b4e8f56a30ee0dcd753c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mee/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mee/list.html.twig"));

        // line 1
        echo "<div class=\"col-sm-12 col-md-3\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 1, $this->source); })()), "materiaEstrategia", [], "any", false, false, false, 1), "materia", [], "any", false, false, false, 1), "nombre", [], "any", false, false, false, 1), "html", null, true);
        echo "</div>
<div class=\"col-sm-12 col-md-3\"> ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 2, $this->source); })()), "materiaEstrategia", [], "any", false, false, false, 2), "estrategiaJuridica", [], "any", false, false, false, 2), "nombre", [], "any", false, false, false, 2), "html", null, true);
        echo " </div>
        
<div class=\"col-sm-12 col-md-3\"> ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mee"]) || array_key_exists("mee", $context) ? $context["mee"] : (function () { throw new RuntimeError('Variable "mee" does not exist.', 4, $this->source); })()), "escritura", [], "any", false, false, false, 4), "nombre", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mee/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-12 col-md-3\">{{mee.materiaEstrategia.materia.nombre}}</div>
<div class=\"col-sm-12 col-md-3\"> {{ mee.materiaEstrategia.estrategiaJuridica.nombre }} </div>
        
<div class=\"col-sm-12 col-md-3\"> {{ mee.escritura.nombre}}</div>
        ", "mee/list.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\mee\\list.html.twig");
    }
}
