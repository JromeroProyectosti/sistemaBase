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

/* juzgado_cuenta/combo.html.twig */
class __TwigTemplate_73da4ee0c0f06fd6dbd189b3899eeab2ee4081f48bf6c99abcc7ac8e921efdf3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juzgado_cuenta/combo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juzgado_cuenta/combo.html.twig"));

        // line 1
        echo "<option selected disabled> Seleccione Juzgado </option>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juzgadoCuentas"]) || array_key_exists("juzgadoCuentas", $context) ? $context["juzgadoCuentas"] : (function () { throw new RuntimeError('Variable "juzgadoCuentas" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juzgadoCuenta"]) {
            // line 3
            echo "<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["juzgadoCuenta"], "juzgado", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["juzgadoCuenta"], "juzgado", [], "any", false, false, false, 3), "nombre", [], "any", false, false, false, 3), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juzgadoCuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "juzgado_cuenta/combo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<option selected disabled> Seleccione Juzgado </option>
{% for juzgadoCuenta in juzgadoCuentas %}
<option value=\"{{juzgadoCuenta.juzgado.id}}\">{{juzgadoCuenta.juzgado.nombre}}</option>
{% endfor %}", "juzgado_cuenta/combo.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\juzgado_cuenta\\combo.html.twig");
    }
}
