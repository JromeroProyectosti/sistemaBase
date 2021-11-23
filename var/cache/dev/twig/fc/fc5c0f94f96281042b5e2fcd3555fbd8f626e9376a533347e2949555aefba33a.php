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

/* contrato/print_desconoce.html.twig */
class __TwigTemplate_e1fbccf342ffe431c42e4078cc29b1f116e45820d4e7ce16bea1823e1d761202 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/print_desconoce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/print_desconoce.html.twig"));

        // line 1
        echo "<div class=\"page\">
  <div align=\"right\">Nro Folio ";
        // line 2
        echo twig_escape_filter($this->env, ( +(isset($context["FolioAnexo"]) || array_key_exists("FolioAnexo", $context) ? $context["FolioAnexo"] : (function () { throw new RuntimeError('Variable "FolioAnexo" does not exist.', 2, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)), "html", null, true);
        echo "</div>

<div align=\"center\"><h4>+DESCONOCE O DESISTE+ CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
<p align=\"justify\">En Santiago de Chile a {+{contrato.fechaCreacionAnexo|date(\"d-m-Y\")+}}, entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
empresa de servicios Jur&iacute;dicos con domicilio en casa matriz <strong>Hu&eacute;rfanos 1147, 
oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
(&ntilde;a) <strong>";
        // line 8
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8)));
        echo "</strong>, C&eacute;dula de identidad N&deg; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 8, $this->source); })()), "rut", [], "any", false, false, false, 8), "html", null, true);
        echo ", 
han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, un anexo de contrato de contrato, desglosando su contenido en lo siguiente.</p>

<p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrat&oacute; ";
        // line 11
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 11, $this->source); })()), "agenda", [], "any", false, false, false, 11), "reunion", [], "any", false, false, false, 11));
        echo " los Servicios Profesionales con El 
Estudio Jur&iacute;dico, el d&iacute;a ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
        echo ", para que &eacute;ste en su representaci&oacute;n, otorgue Asistencia Jur&iacute;dica.</p>

<p align=\"justify\"><strong> SEGUNDO:</strong> Que los honorarios de los servicios profesionales pactados e indicados en el contrato ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo " de prestaci&oacute;n de servicios, 
no se encuentran enteramnete pagadas en su totalidad</p> 

<p align=\"justify\"><strong>TERCERO: ";
        // line 17
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17)));
        echo "</strong>, por este acto +DESCONOCE O DESISTE+ al contrato anteriormente individualizado.</p>

<p align=\"justify\">Las partes se otorgan el m&aacute;s completo y total finiquito respecto de las prestaciones mutuas, que nada se 
debe por cualquier concepto y que acepta a su entera satisfacci&oacute;n toda la gesti&oacute;n realizada por el Estudio jur&iacute;dico 
desisti&eacute;ndose desde ya a cualquier acci&oacute;n que pudiera corresponderle en contra del Estudio Jur&iacute;dico.</p>

<p align=\"justify\"><strong>CUARTO:</strong> Que en virtud de lo se&ntilde;alado en la cl&aacute;usula anterior el Estudio Jur&iacute;dico, 
hace entrega de la documentaci&oacute;n requerida declarando en este acto recibirla a su entera satisfacci&oacute;n.</p>

<p align=\"justify\"><strong>MONTO CANCELADO:</strong> +si desconoce \$ 0 si desiste después de 10 días \$ 120.000+.</p>

</div>
<div class=\"page\">
<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "/build/img/firma_contrato.jpg\"></td><td></td></tr>

    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
            <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
            <td><p align=\"center\"><strong>";
        // line 39
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 39, $this->source); })()), "nombre", [], "any", false, false, false, 39));
        echo "</strong></p>
                <p align=\"center\"><strong>RUT: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 40, $this->source); })()), "rut", [], "any", false, false, false, 40), "html", null, true);
        echo "</strong></p>
                </td>

    </tr>
</table>
</div>

<style type=\"text/css\">
    .page {
        overflow: hidden;
        page-break-after: always;
    }
    .page:last-of-type {
        page-break-after: auto
    }
</style>

    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contrato/print_desconoce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  106 => 39,  98 => 34,  78 => 17,  72 => 14,  67 => 12,  63 => 11,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page\">
  <div align=\"right\">Nro Folio {{+FolioAnexo+contrato.id}}</div>

<div align=\"center\"><h4>+DESCONOCE O DESISTE+ CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
<p align=\"justify\">En Santiago de Chile a {+{contrato.fechaCreacionAnexo|date(\"d-m-Y\")+}}, entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
empresa de servicios Jur&iacute;dicos con domicilio en casa matriz <strong>Hu&eacute;rfanos 1147, 
oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
(&ntilde;a) <strong>{{contrato.nombre|title|special_chars|raw}}</strong>, C&eacute;dula de identidad N&deg; {{contrato.rut}}, 
han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, un anexo de contrato de contrato, desglosando su contenido en lo siguiente.</p>

<p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrat&oacute; {{contrato.agenda.reunion|special_chars|raw}} los Servicios Profesionales con El 
Estudio Jur&iacute;dico, el d&iacute;a {{contrato.fechaCreacion|date(\"d-m-Y\")}}, para que &eacute;ste en su representaci&oacute;n, otorgue Asistencia Jur&iacute;dica.</p>

<p align=\"justify\"><strong> SEGUNDO:</strong> Que los honorarios de los servicios profesionales pactados e indicados en el contrato {{contrato.id}} de prestaci&oacute;n de servicios, 
no se encuentran enteramnete pagadas en su totalidad</p> 

<p align=\"justify\"><strong>TERCERO: {{contrato.nombre|title|special_chars|raw}}</strong>, por este acto +DESCONOCE O DESISTE+ al contrato anteriormente individualizado.</p>

<p align=\"justify\">Las partes se otorgan el m&aacute;s completo y total finiquito respecto de las prestaciones mutuas, que nada se 
debe por cualquier concepto y que acepta a su entera satisfacci&oacute;n toda la gesti&oacute;n realizada por el Estudio jur&iacute;dico 
desisti&eacute;ndose desde ya a cualquier acci&oacute;n que pudiera corresponderle en contra del Estudio Jur&iacute;dico.</p>

<p align=\"justify\"><strong>CUARTO:</strong> Que en virtud de lo se&ntilde;alado en la cl&aacute;usula anterior el Estudio Jur&iacute;dico, 
hace entrega de la documentaci&oacute;n requerida declarando en este acto recibirla a su entera satisfacci&oacute;n.</p>

<p align=\"justify\"><strong>MONTO CANCELADO:</strong> +si desconoce \$ 0 si desiste después de 10 días \$ 120.000+.</p>

</div>
<div class=\"page\">
<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
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
</table>
</div>

<style type=\"text/css\">
    .page {
        overflow: hidden;
        page-break-after: always;
    }
    .page:last-of-type {
        page-break-after: auto
    }
</style>

    ", "contrato/print_desconoce.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\print_desconoce.html.twig");
    }
}
