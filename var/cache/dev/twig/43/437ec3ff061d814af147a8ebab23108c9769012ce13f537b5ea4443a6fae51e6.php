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

/* contrato/firma.html.twig */
class __TwigTemplate_e5e71ab987d6c14f8a7bebfb86d5628e60b8232adacb143ab51d2ac3add5935c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/firma.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/firma.html.twig"));

        // line 1
        echo "<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "/build/img/firma_contrato.jpg\"></td><td></td></tr>

    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
            <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
            <td><p align=\"center\"><strong>";
        // line 10
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 10, $this->source); })()), "nombre", [], "any", false, false, false, 10));
        echo "</strong></p>
                <p align=\"center\"><strong>RUT: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 11, $this->source); })()), "rut", [], "any", false, false, false, 11), "html", null, true);
        echo "</strong></p>
                </td>

    </tr>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contrato/firma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"{{url_web}}/build/img/firma_contrato.jpg\"></td><td></td></tr>

    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
            <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
            <td><p align=\"center\"><strong>{{contrato.nombre|special_chars|raw}}</strong></p>
                <p align=\"center\"><strong>RUT: {{contrato.rut}}</strong></p>
                </td>

    </tr>
</table>", "contrato/firma.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\firma.html.twig");
    }
}
