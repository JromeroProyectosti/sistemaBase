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

/* contrato/_comunas.html.twig */
class __TwigTemplate_86b8f33d0815412c75029fdc7457ea7d1d344d9af9d82a10b519ea5675c2802d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_comunas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_comunas.html.twig"));

        // line 1
        echo "<select name=\"cboComuna\" class=\"form-control\"  required>
    <option></option>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comunas"]) || array_key_exists("comunas", $context) ? $context["comunas"] : (function () { throw new RuntimeError('Variable "comunas" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comuna"]) {
            // line 4
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comuna"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" 
    ";
            // line 5
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comuna"], "id", [], "any", false, false, false, 5), (isset($context["comuna_def"]) || array_key_exists("comuna_def", $context) ? $context["comuna_def"] : (function () { throw new RuntimeError('Variable "comuna_def" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "        selected
    ";
            }
            // line 8
            echo "    >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comuna"], "nombre", [], "any", false, false, false, 8), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comuna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</select>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contrato/_comunas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  62 => 8,  58 => 6,  56 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select name=\"cboComuna\" class=\"form-control\"  required>
    <option></option>
    {% for comuna in comunas %}
    <option value=\"{{comuna.id}}\" 
    {% if  comuna.id==comuna_def %}
        selected
    {% endif %}
    >{{comuna.nombre}}</option>
    {% endfor %}
</select>", "contrato/_comunas.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\_comunas.html.twig");
    }
}
