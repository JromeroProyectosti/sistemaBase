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

/* cobranza/detallepagos.html.twig */
class __TwigTemplate_dcc77c7165b49e380de8457e5a8154015093dbd5c82029a2d7a5633c52ebfdc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/detallepagos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/detallepagos.html.twig"));

        // line 1
        echo "<div class=\"card-body table-responsive p-0\" >
    <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
    <thead>
        <tr>
            <th></th>
            <th>N° Comprobante</th>
            <th>Boleta</th>
            <th>Fecha Comprobante</th>
            <th>Fecha Ingreso</th>
            <th>Monto Boleta</th> 
            <th>Monto Cuota Pagada</th>            
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context["num"] = 1;
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagocuotas"]) || array_key_exists("pagocuotas", $context) ? $context["pagocuotas"] : (function () { throw new RuntimeError('Variable "pagocuotas" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagoCuota"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "pago", [], "any", false, false, false, 19), "ncomprobante", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "pago", [], "any", false, false, false, 20), "boleta", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "pago", [], "any", false, false, false, 21), "fechaPago", [], "any", false, false, false, 21), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "pago", [], "any", false, false, false, 22), "fechaRegistro", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                <td align=\"right\">\$";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "pago", [], "any", false, false, false, 23), "monto", [], "any", false, false, false, 23), 0, ",", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "monto", [], "any", false, false, false, 24), 0, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 25
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 25, $this->source); })()) + 1);
            // line 26
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagoCuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        
    </tbody>
</table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/detallepagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  99 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body table-responsive p-0\" >
    <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
    <thead>
        <tr>
            <th></th>
            <th>N° Comprobante</th>
            <th>Boleta</th>
            <th>Fecha Comprobante</th>
            <th>Fecha Ingreso</th>
            <th>Monto Boleta</th> 
            <th>Monto Cuota Pagada</th>            
        </tr>
    </thead>
    <tbody>
        {% set num=1 %}
        {% for pagoCuota in pagocuotas %}
            <tr>
                <td>{{ num }}</td>
                <td>{{ pagoCuota.pago.ncomprobante}}</td>
                <td>{{ pagoCuota.pago.boleta}}</td>
                <td>{{ pagoCuota.pago.fechaPago|date(\"Y-m-d H:i\")}}</td>
                <td>{{ pagoCuota.pago.fechaRegistro|date(\"Y-m-d H:i\") }}</td>
                <td align=\"right\">\${{ pagoCuota.pago.monto|number_format(0, ',', '.') }}</td>
                <td>{{ pagoCuota.monto|number_format(0,',','.')}}</td>
                {% set num = num + 1 %}
            </tr>
        {% endfor %}
        
    </tbody>
</table>
</div>", "cobranza/detallepagos.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\detallepagos.html.twig");
    }
}
