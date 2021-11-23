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

/* terminos/print.html.twig */
class __TwigTemplate_ca72cb9697584853cd51f2325f0615c476c44e0d19c26c96708316e9fd0c5505 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/print.html.twig"));

        // line 1
        echo "<style>
    body{
        font-size:13px;
    }
</style>
<div class=\"page\">
    <div align=\"right\">Nro Folio ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 7, $this->source); })()), "contrato", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
  
  <div align=\"center\"><h4>";
        // line 9
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9)));
        echo " CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
  <p align=\"justify\">En Santiago de Chile a ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 10, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 10), "d-m-Y"), "html", null, true);
        echo ", entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
  empresa de servicios Jur&iacute;dicos con domicilio en casa matriz <strong>Hu&eacute;rfanos 1147, 
  oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
  (&ntilde;a) <strong>";
        // line 13
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 13, $this->source); })()), "contrato", [], "any", false, false, false, 13), "nombre", [], "any", false, false, false, 13)));
        echo "</strong>, C&eacute;dula de identidad N&deg; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 13, $this->source); })()), "contrato", [], "any", false, false, false, 13), "rut", [], "any", false, false, false, 13), "html", null, true);
        echo ", 
  han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, un anexo de contrato, desglosando su contenido en lo siguiente.</p>
  
  <p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrat&oacute; ";
        // line 16
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 16, $this->source); })()), "contrato", [], "any", false, false, false, 16), "agenda", [], "any", false, false, false, 16), "reunion", [], "any", false, false, false, 16));
        echo " los Servicios Profesionales con El 
  Estudio Jur&iacute;dico, el d&iacute;a ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 17, $this->source); })()), "contrato", [], "any", false, false, false, 17), "fechaCreacion", [], "any", false, false, false, 17), "d-m-Y"), "html", null, true);
        echo ", para que &eacute;ste en su representaci&oacute;n, otorgue Asistencia Jur&iacute;dica.</p>
  
  <p align=\"justify\"><strong> SEGUNDO:</strong> Que los honorarios de los servicios profesionales pactados e indicados en el contrato ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 19, $this->source); })()), "contrato", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo " de prestaci&oacute;n de servicios, 
  no se encuentran enteramente pagadas en su totalidad</p> 
  
  <p align=\"justify\"><strong>TERCERO: ";
        // line 22
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 22, $this->source); })()), "contrato", [], "any", false, false, false, 22), "nombre", [], "any", false, false, false, 22)));
        echo "</strong>, por este acto ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22)));
        echo " al contrato anteriormente individualizado.</p>
  
  <p align=\"justify\">Las partes se otorgan el m&aacute;s completo y total finiquito respecto de las prestaciones mutuas, que nada se 
  debe por cualquier concepto y que acepta a su entera satisfacci&oacute;n toda la gesti&oacute;n realizada por el Estudio jur&iacute;dico 
  desisti&eacute;ndose desde ya a cualquier acci&oacute;n que pudiera corresponderle en contra del Estudio Jur&iacute;dico.</p>
  
  <p align=\"justify\"><strong>CUARTO:</strong> Que en virtud de lo se&ntilde;alado en la cl&aacute;usula anterior el Estudio Jur&iacute;dico, 
  hace entrega de la documentaci&oacute;n requerida declarando en este acto recibirla a su entera satisfacci&oacute;n.</p>
  
  <p align=\"justify\"><strong>MONTO CANCELADO:</strong> 
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuotas"]) || array_key_exists("cuotas", $context) ? $context["cuotas"] : (function () { throw new RuntimeError('Variable "cuotas" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 33
            echo "        ";
            if ((null === twig_get_attribute($this->env, $this->source, $context["cuota"], "anular", [], "any", false, false, false, 33))) {
                // line 34
                echo "            \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 34), 0, ",", "."), "html", null, true);
                echo "
        ";
            } else {
                // line 36
                echo "            \$0
        ";
            }
            // line 38
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        \$0
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    .</p>
  
  </div>
  <div class=\"page\">
  <p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
      poder de cada una de las partes.</p>
  
  <table width=\"100%\">
      <tr><td width=\"50%\" align=\"center\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["url_root"]) || array_key_exists("url_root", $context) ? $context["url_root"] : (function () { throw new RuntimeError('Variable "url_root" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "/build/img/firma_contrato.jpg\" width=\"150px\"></td><td></td></tr>
  
      <tr>
          <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
              <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
              <td><p align=\"center\"><strong>";
        // line 54
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 54, $this->source); })()), "contrato", [], "any", false, false, false, 54), "nombre", [], "any", false, false, false, 54));
        echo "</strong></p>
                  <p align=\"center\"><strong>RUT: ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["anexo"]) || array_key_exists("anexo", $context) ? $context["anexo"] : (function () { throw new RuntimeError('Variable "anexo" does not exist.', 55, $this->source); })()), "contrato", [], "any", false, false, false, 55), "rut", [], "any", false, false, false, 55), "html", null, true);
        echo "</strong></p>
                  </td>
  
      </tr>
  </table>
  </div>
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "terminos/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  154 => 54,  146 => 49,  136 => 41,  129 => 39,  124 => 38,  120 => 36,  114 => 34,  111 => 33,  106 => 32,  91 => 22,  85 => 19,  80 => 17,  76 => 16,  68 => 13,  62 => 10,  58 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    body{
        font-size:13px;
    }
</style>
<div class=\"page\">
    <div align=\"right\">Nro Folio {{anexo.id}}-{{anexo.contrato.id}}</div>
  
  <div align=\"center\"><h4>{{status.nombre|upper|special_chars|raw}} CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
  <p align=\"justify\">En Santiago de Chile a {{anexo.fechaCreacion|date(\"d-m-Y\")}}, entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
  empresa de servicios Jur&iacute;dicos con domicilio en casa matriz <strong>Hu&eacute;rfanos 1147, 
  oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
  (&ntilde;a) <strong>{{anexo.contrato.nombre|title|special_chars|raw}}</strong>, C&eacute;dula de identidad N&deg; {{anexo.contrato.rut}}, 
  han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, un anexo de contrato, desglosando su contenido en lo siguiente.</p>
  
  <p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrat&oacute; {{anexo.contrato.agenda.reunion|special_chars|raw}} los Servicios Profesionales con El 
  Estudio Jur&iacute;dico, el d&iacute;a {{anexo.contrato.fechaCreacion|date(\"d-m-Y\")}}, para que &eacute;ste en su representaci&oacute;n, otorgue Asistencia Jur&iacute;dica.</p>
  
  <p align=\"justify\"><strong> SEGUNDO:</strong> Que los honorarios de los servicios profesionales pactados e indicados en el contrato {{anexo.contrato.id}} de prestaci&oacute;n de servicios, 
  no se encuentran enteramente pagadas en su totalidad</p> 
  
  <p align=\"justify\"><strong>TERCERO: {{anexo.contrato.nombre|title|special_chars|raw}}</strong>, por este acto {{status.nombre|upper|special_chars|raw}} al contrato anteriormente individualizado.</p>
  
  <p align=\"justify\">Las partes se otorgan el m&aacute;s completo y total finiquito respecto de las prestaciones mutuas, que nada se 
  debe por cualquier concepto y que acepta a su entera satisfacci&oacute;n toda la gesti&oacute;n realizada por el Estudio jur&iacute;dico 
  desisti&eacute;ndose desde ya a cualquier acci&oacute;n que pudiera corresponderle en contra del Estudio Jur&iacute;dico.</p>
  
  <p align=\"justify\"><strong>CUARTO:</strong> Que en virtud de lo se&ntilde;alado en la cl&aacute;usula anterior el Estudio Jur&iacute;dico, 
  hace entrega de la documentaci&oacute;n requerida declarando en este acto recibirla a su entera satisfacci&oacute;n.</p>
  
  <p align=\"justify\"><strong>MONTO CANCELADO:</strong> 
    {% for cuota in cuotas %}
        {% if cuota.anular is null %}
            \${{cuota.monto|number_format(0, ',', '.')}}
        {% else %}
            \$0
        {% endif %}
    {% else %}
        \$0
    {% endfor %}
    .</p>
  
  </div>
  <div class=\"page\">
  <p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
      poder de cada una de las partes.</p>
  
  <table width=\"100%\">
      <tr><td width=\"50%\" align=\"center\"><img src=\"{{url_root}}/build/img/firma_contrato.jpg\" width=\"150px\"></td><td></td></tr>
  
      <tr>
          <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
              <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
              <td><p align=\"center\"><strong>{{anexo.contrato.nombre|special_chars|raw}}</strong></p>
                  <p align=\"center\"><strong>RUT: {{anexo.contrato.rut}}</strong></p>
                  </td>
  
      </tr>
  </table>
  </div>
  ", "terminos/print.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\terminos\\print.html.twig");
    }
}
