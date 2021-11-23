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

/* contrato/print.html.twig */
class __TwigTemplate_d43986e06bf1584dd0718ed4a030c7c3098e3834eca695af06f0a9a8ef7536c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/print.html.twig"));

        // line 1
        echo "<style>
    body{
        font-size:13px;
    }
</style>
<div align=\"right\">Nro Folio ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</div>

<div align=\"center\"><h4>CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
<p align=\"justify\" >En Santiago de Chile a ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 9, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 9), "d-m-Y"), "html", null, true);
        echo ", entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
empresa de servicios Jur&iacute;dicos, representada por don <strong>Fernando Cort&eacute;s Salinas</strong>, c&eacute;dula de identidad N&deg; 9.704.412-0, domiciliado  en <strong>Hu&eacute;rfanos 1147, 
oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
(&ntilde;a) <strong>";
        // line 12
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12)));
        echo "</strong>, Nacionalidad  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "pais", [], "any", false, false, false, 12), "html", null, true);
        echo ", C&eacute;dula de identidad N&deg; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "rut", [], "any", false, false, false, 12), "html", null, true);
        echo ", Tel&eacute;fono: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "telefono", [], "any", false, false, false, 12), "html", null, true);
        echo ", 
Recado: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "telefonoRecado", [], "any", false, false, false, 13), "html", null, true);
        echo ", Domicilio: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "direccion", [], "any", false, false, false, 13));
        echo ", Comuna: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "ccomuna", [], "any", false, false, false, 13), "nombre", [], "any", false, false, false, 13));
        echo ", Ciudad: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "cciudad", [], "any", false, false, false, 13), "nombre", [], "any", false, false, false, 13));
        echo ", Correo electr&oacute;nico: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13));
        echo ", Estado civil: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 13, $this->source); })()), "estadoCivil", [], "any", false, false, false, 13));
        echo "; 
Situaci&oacute;n laboral: ";
        // line 14
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 14, $this->source); })()), "situacionLaboral", [], "any", false, false, false, 14));
        echo ", han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, 
un contrato de prestaci&oacute;n de servicios jur&iacute;dicos, desglosando su contenido en las siguientes cl&aacute;usulas.</p>

<p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrata ";
        // line 17
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 17, $this->source); })()), "agenda", [], "any", false, false, false, 17), "reunion", [], "any", false, false, false, 17));
        echo " los Servicios Profesionales con El 
    Estudio Jur&iacute;dico, quien se compromete a realizar, en su representaci&oacute;n, todas aquellas gestiones judiciales 
    ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 19, $this->source); })()), "agenda", [], "any", false, false, false, 19), "cuenta", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), 7))) {
            echo "en primera instancia ";
        }
        // line 20
        echo "    que sean procedentes, en atenci&oacute;n al estado procesal en que se encuentre la(s) causa(s) contratada(s).</p>

<strong>Estrategia Juridica</strong>
<p>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mees"]) || array_key_exists("mees", $context) ? $context["mees"] : (function () { throw new RuntimeError('Variable "mees" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contratoMee"]) {
            // line 25
            echo "    
";
            // line 26
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 26), "materiaEstrategia", [], "any", false, false, false, 26), "materia", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26));
            echo " ";
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratoMee"], "mee", [], "any", false, false, false, 26), "materiaEstrategia", [], "any", false, false, false, 26), "estrategiaJuridica", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26));
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratoMee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</p>

";
        // line 30
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 30, $this->source); })()), "agenda", [], "any", false, false, false, 30), "cuenta", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), 7))) {
            // line 31
            echo "<strong>Servicios:</strong>
<ul style=\"list-style: none;\">
";
            // line 33
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 33, $this->source); })()), "contratoRols", [], "any", false, false, false, 33))) {
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 34, $this->source); })()), "contratoRols", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["contratorol"]) {
                    // line 35
                    echo "
        <li>- ";
                    // line 36
                    echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, $context["contratorol"], "institucionAcreedora", [], "any", false, false, false, 36));
                    echo " 
            ";
                    // line 37
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["contratorol"], "nombreRol", [], "any", false, false, false, 37), ""))) {
                        // line 38
                        echo "                SIN ROL
            ";
                    } else {
                        // line 40
                        echo "                ";
                        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, $context["contratorol"], "nombreRol", [], "any", false, false, false, 40));
                        echo "
            ";
                    }
                    // line 41
                    echo " 

            ";
                    // line 43
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["contratorol"], "juzgado", [], "any", false, false, false, 43))) {
                        // line 44
                        echo "                del ";
                        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratorol"], "juzgado", [], "any", false, false, false, 44), "nombre", [], "any", false, false, false, 44));
                        echo "
            ";
                    }
                    // line 46
                    echo "            </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratorol'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 49
                echo "<li>- SIN ROL
";
            }
            // line 51
            echo "</ul>
";
        }
        // line 53
        echo "<ul style=\"list-style: none;\">
<li> 
*\tMonitoreo diario de causas a trav&eacute;s de sistema interno del estudio.
</li>
<li>
*\tCompromisos: 
    <ul style=\"list-style:none;\"><li>
        \tCliente se compromete a traer a la brevedad clave &uacute;nica otorgada directamente en la oficina del Registro Civil e Identificaci&oacute;n. 
        </li>
    </ul>
</li>
</ul>

<p align=\"justify\"><strong> SEGUNDO:</strong> Los honorarios de los servicios profesionales son a todo evento y ascienden a la suma de ";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 66, $this->source); })()), "montoContrato", [], "any", false, false, false, 66), 0, ",", "."), "html", null, true);
        echo " pesos.
     Estos valores consideran el costo de la evaluaci&oacute;n, estudio y otros tr&aacute;mites que hayan sido practicados por
      El Estudio Jur&iacute;dico, los cuales se pactan en conformidad de ambas partes, de la siguiente manera:</p> 

      <table border=\"1\"  cellspacing=\"0\" width=\"50%\">




            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 75, $this->source); })()), "detalleCuotas", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 76
            echo "            <tr>
                <td align=\"right\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "numero", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
            echo "</td>
                <td align=\"right\">\$";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 79), 0, ",", "."), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        


      </table>

<p align=\"justify\">El Calendario de pago precedentemente se&ntilde;alado no est&aacute; supeditado a gesti&oacute;n alguna por parte del Estudio Jur&iacute;dico, 
    raz&oacute;n por la cual se debe dar estricto cumplimiento a &eacute;ste en las fechas pactadas para tener vigente la 
    asesor&iacute;a al momento de ser requerida. Se entiende como el inicio del encargo y por lo tanto el derecho a percibir 
    los honorarios el de la fecha de la firma o aceptaci&oacute;n del contrato. En caso de desistimiento o t&eacute;rmino 
    unilateral del contrato por parte del cliente, se establece una cl&aacute;usula penal por la suma de \$ 120.000, en la eventualidad 
    de que los honorarios no hubieran sido pagados en su totalidad. De existir pagos superiores a este valor, 
    este no ser&aacute; restituido al cliente, y se considerar&aacute; como pago de honorarios por los servicios, atenci&oacute;n, y 
    representaci&oacute;n judicial y/o extrajudicial por parte del Estudio, hasta el momento de la terminaci&oacute;n del contrato.</p>

<p align=\"justify\"><strong>TERCERO: De la duraci&oacute;n del contrato:</strong> El Estudio Jur&iacute;dico se compromete a otorgar al cliente el 
    servicio contratado y especificado en la cl&aacute;usula primera, cumpliendo todos los tr&aacute;mites legales que indica la ley en primera 
    instancia, &nbsp;sin perjuicio, &nbsp;de las facultades privativas del respectivo tribunal de establecer plazos acordes con el funcionamiento del 
    mismo seg&uacute;n corresponda. La obligaci&oacute;n del estudio jur&iacute;dico es una obligaci&oacute;n de medios, vale decir, se 
    compromete a actuar diligentemente en todas las gestiones y tr&aacute;mites necesarios del proceso judicial. 
    <strong>El presente contrato tiene un plazo y vigencia de ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 101, $this->source); })()), "agenda", [], "any", false, false, false, 101), "cuenta", [], "any", false, false, false, 101), "vigenciaContratos", [], "any", false, false, false, 101), "html", null, true);
        echo " meses contado desde la aceptación, que es el tiempo en que durar&aacute;n los 
    servicios contratados.</strong></p>

<p align=\"justify\"><strong>CUARTO: Del estudio y reserva;</strong> Para el adecuado estudio y asesor&iacute;a de lo se&ntilde;alado precedentemente, el 
    cliente se obliga a entregar en un plazo establecido por acuerdo entre cliente y El Estudio Jur&iacute;dico, toda la 
    documentaci&oacute;n y antecedentes necesarios para el cumplimiento de lo cometido.</p>

<p align=\"justify\"><strong>QUINTO:</strong> El cliente se compromete a prestar amplia colaboraci&oacute;n en especial en la entrega de antecedentes, 
    documentos, obtenci&oacute;n de Clave &uacute;nica y otros, al Estudio Jur&iacute;dico.</p>

<p align=\"justify\"><strong>SEXTO: De los Gastos;</strong> El Cliente pagar&aacute; seg&uacute;n sea el caso, los gastos que se originen por la 
    gesti&oacute;n del presente contrato tales como notificaciones, gestiones encargadas a Receptores Judiciales, sub-inscripciones, 
    gastos de audiencias necesarias, Conservadores de Bienes Ra&iacute;ces, C&aacute;mara de Comercio, Archivero 
    Judicial y todas aquellas de similar naturaleza debiendo ser pagados por el cliente al momento en que ellas sean exigibles, 
    no siendo imputables en caso alguno a los honorarios pactados en la cl&aacute;usula segunda del presente contrato.</p>

<p align=\"justify\"><strong>SEPTIMO:</strong> El Estudio Jur&iacute;dico, llevar&aacute; la gesti&oacute;n encomendada con la mayor celeridad y diligencia 
    posible, de manera de obtener &oacute;ptimos resultados para el cliente y cumplir con los Servicios Contratados. </p>

<p align=\"justify\"><strong>OCTAVO:</strong> El Estudio Jur&iacute;dico solamente estar&aacute; autorizado a atender presencialmente, 
    entregar informaci&oacute;n, documentaci&oacute;n, u otro relacionado con la causa contratada al cliente titular de los servicios. 
    Sin perjuicio de lo anterior, el cliente podr&aacute; asignar a una sola persona, a trav&eacute;s de poder simple para estos 
    efectos, qui&eacute;n quedar&aacute; validada para su atenci&oacute;n e informaci&oacute;n, del cual quedar&aacute; registro en 
    carpeta respectiva.</p>

<p align=\"justify\"><strong>NOVENO:</strong> El incumplimiento del pago de una o m&aacute;s cuotas pactadas en el Punto Segundo, 
    facultar&aacute; al Estudio Jur&iacute;dico a paralizar inmediatamente las diligencias administrativas o 
    jur&iacute;dicas a favor del cliente o persona que lo represente, retom&aacute;ndose las mismas una vez que 
    se reanude el pago.</p>
    
<p align=\"justify\">El Estudio suspender&aacute; los servicios eximi&eacute;dose de toda responsabilidad por daños materiales o 
    morales que pudiera sufrir el cliente. Esta cl&aacute;usula se har&aacute; efectiva si el cliente entra en mora en 
    un plazo igual o superior a 20 d&iacute;as contados desde la fecha de vencimiento de la cuota pactada y 
    dar&aacute; adem&aacute;s derecho para exigir el cobro total de lo adeudado como una obligaci&oacute;n pura y 
    simple, aceptando desde ya la renuncia al mandato judicial en las causas señaladas en la 
    cl&aacute;usula primera.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO:</strong> Para todos los efectos legales que deriven del presente contrato, las partes fijan su domicilio en la
    ciudad de Santiago y prorrogan su competencia ante sus tribunales de justicia. </p>

<p align=\"justify\"><strong>D&Eacute;CIMO PRIMERO:</strong> Para efectos de ser atendido e informado sobre el estado de su(s) causa(s), 
    el cliente deber&aacute; agendar previamente una reuni&oacute;n, a fin de otorgar una atenci&oacute;n expedita y ofrecer a usted un servicio de calidad. </p>

";
        // line 144
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 144, $this->source); })()), "agenda", [], "any", false, false, false, 144), "cuenta", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), 7))) {
            // line 145
            echo "
<p align=\"justify\"><strong>D&Eacute;CIMO SEGUNDO:</strong> Se informan los medios de contacto del abogado a cargo de su causa, sin perjucio de la facultad 
    del estudio jur&iacute;dico de asignar un nuevo abogado por motivos de fuerza mayor o redistribuci&oacute;n de cartera,
    <strong>abogado.familia@alfaromadariaga.cl</strong>, tel&eacute;fono: <strong>(+56 9) 6526 0962</strong>. 
    Tambi&eacute;n puede contactarnos a nuestra unidad <strong>SAC</strong> (Servicio de Atenci&oacute;n al Cliente) <strong>(+56 9) 3665 3829.</strong>
    Ser&aacute; obligaci&oacute;n del cliente informar cualquier modificaci&oacute;n en sus datos de contacto; tales como n&uacute;mero telef&oacute;nico, 
    direcci&oacute;n o correo electr&oacute;nico.</p>

    ";
        } else {
            // line 154
            echo "
<p align=\"justify\"><strong>D&Eacute;CIMO SEGUNDO:</strong> Se deja constancia que el abogado encargado de la tramitaci&oacute;n de la 
    causa ser&aacute; <strong>";
            // line 156
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 156), "nombre", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 156), "nombre", [], "any", false, false, false, 156), "")) : ("")), "html", null, true);
            echo "</strong>, <strong>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 156), "correo", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 156), "correo", [], "any", false, false, false, 156), "")) : ("")), "html", null, true);
            echo "</strong>, tel&eacute;fono oficina: 
    <strong>";
            // line 157
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 157), "telefono", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 157), "telefono", [], "any", false, false, false, 157), "")) : ("")), "html", null, true);
            echo "</strong>, </strong> celular: <strong>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 157), "whatsapp", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 157), "whatsapp", [], "any", false, false, false, 157), "")) : ("")), "html", null, true);
            echo "</strong>, 
    sin perjuicio de la facultad del estudio jur&iacute;dico de asignar un nuevo abogado por motivos de fuerza mayor o 
    redistribuci&oacute;n de cartera. Tambi&eacute;n puede contactarnos a nuestra unidad <strong>SAC</strong> (Servicio de Atenci&oacute;n al Cliente) <strong>(+56 9) 3665 3829.</strong>
    Asimismo, ser&aacute; obligaci&oacute;n del cliente informar cualquier modificaci&oacute;n en sus datos de contacto; tales como n&uacute;mero telef&oacute;nico, 
    direcci&oacute;n o correo electr&oacute;nico, informando al &aacute;rea de recaudaci&oacute;n cualquier modificaci&oacute;n.</p>

    ";
        }
        // line 164
        echo "
<p align=\"justify\"><strong>D&Eacute;CIMO TERCERO: Cl&aacute;usula de Consentimiento:</strong> Con la firma o aceptaci&oacute;n del presente contrato, 
    el cliente otorga su consentimiento expl&iacute;cito e informado al Estudio Jur&iacute;dico para que realice el 
    tratamiento de los datos personales, autoriz&aacute;ndolo expresamente para transferir los datos a 
    empresas de apoyo al giro con la exclusiva finalidad de dar cumplimiento a los servicios 
    contratados. Asimismo, el cliente autoriza expresamente al Estudio Jur&iacute;dico a utilizar canales de 
    contacto como WhatsApp, mensajer&iacute;a de texto, correo electr&oacute;nico, correspondencia y llamadas telef&oacute;nicas.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO CUARTO:</strong> Se deja constancia que ambas partes acuerdan la celebraci&oacute;n del 
    presente contrato de prestaci&oacute;n de servicios, 
    ";
        // line 174
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 174, $this->source); })()), "agenda", [], "any", false, false, false, 174), "reunion", [], "any", false, false, false, 174))) {
            // line 175
            echo "        
        ";
            // line 176
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 176, $this->source); })()), "agenda", [], "any", false, false, false, 176), "reunion", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), 1))) {
                // line 177
                echo "        quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
        partes
        ";
            } else {
                // line 180
                echo "        siendo grabada la conversaci&oacute;n.
        ";
            }
            // line 182
            echo "    ";
        } else {
            // line 183
            echo "    siendo grabada la conversaci&oacute;n o quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
    partes.
    ";
        }
        // line 186
        echo "    </p>

";
        // line 188
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 188, $this->source); })()), "agenda", [], "any", false, false, false, 188), "cuenta", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188), 7))) {
            // line 189
            echo "
<p align=\"justify\"><strong>D&Eacute;CIMO QUINTO: Tramitaci&oacute;n ante Cortes:</strong> En la eventualidad de tener que recurrir 
    a la Ilustr&iacute;sima Corte de Apelaciones o por la Exelent&iacute;sima Corte   
    Suprema; se informar&aacute; esta situaci&oacute;n al cliente a fin de ofrecer un anexo de contrato para dicha
    gesti&oacute;n ante una nueva instancia judicial. El anexo de contrato mencionado en la presente cl&aacute;usula ser&aacute; opcional
    para el cliente, debiendo el abogado tramitador informar las circuntancias del caso y la viabilidad de la gesti&oacute;n.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO SEXTO:</strong> Los pagos pueden ser efectuados de manera presencial en las oficinas 
    de Estudio Jur&iacute;dico a trav&eacute;s de transferencia electr&oacute;nica o dep&oacute;sitos a 
    cualquiera de estas dos cuenta que se mencionan a continuaci&oacute;n.</p>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco de Chile</strong></li>
<li><strong>Cuenta corriente</strong></li>
<li><strong>N&deg; de cuenta: 800-51698-02</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: ";
            // line 207
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 207, $this->source); })()), "nombre", [], "any", false, false, false, 207)));
            echo " </strong></li>
</ul>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco Estado</strong></li>
<li><strong>Cuenta vista o chequera electr&oacute;nica</strong></li>
<li><strong>N&deg; de cuenta: 291 7 068 468-9</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: ";
            // line 217
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 217, $this->source); })()), "nombre", [], "any", false, false, false, 217)));
            echo " </strong></li>
</ul>

<p><strong>*Al realizar dep&oacute;sito o transferencia, debe ponerse en contacto con nuestra oficina e informar los datos del 
    dep&oacute;sito o transferencia.</strong></p>

<p align=\"justify\">Enviar comprobante de transferencia o dep&oacute;sito a: <strong>recaudacion@asistenciadeudores.cl</strong> o fotograf&iacute;a del comprobante al 
whatsapp (+569) 9255 1072  (puede escribir en el mismo comprobante el nombre del cliente). El Estudio Jur&iacute;dico mantendr&aacute; en su poder por el periodo de 6 meses 
contados desde la firma o aceptaci&oacute;n del contrato de prestaci&oacute;n de servicios, las boletas correspondientes a los pagos realizados por el cliente, siendo 
obligaci&oacute;n de este solicitarlas mes a mes.</p>

";
        } else {
            // line 229
            echo "
<p align=\"justify\"><strong>D&Eacute;CIMO QUINTO:</strong> Los pagos pueden ser efectuados de manera presencial en las oficinas 
    de Estudio Jur&iacute;dico a trav&eacute;s de transferencia electr&oacute;nica o dep&oacute;sitos a 
    cualquiera de estas dos cuenta que se mencionan a continuaci&oacute;n.</p>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco de Chile</strong></li>
<li><strong>Cuenta corriente</strong></li>
<li><strong>N&deg; de cuenta: 800-51698-02</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: ";
            // line 241
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 241, $this->source); })()), "nombre", [], "any", false, false, false, 241)));
            echo " </strong></li>
</ul>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco Estado</strong></li>
<li><strong>Cuenta vista o chequera electr&oacute;nica</strong></li>
<li><strong>N&deg; de cuenta: 291 7 068 468-9</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: ";
            // line 251
            echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 251, $this->source); })()), "nombre", [], "any", false, false, false, 251)));
            echo " </strong></li>
</ul>

<p><strong>*Al realizar dep&oacute;sito o transferencia, debe ponerse en contacto con nuestra oficina e informar los datos del 
    dep&oacute;sito o transferencia.</strong></p>

<p align=\"justify\">Enviar comprobante de transferencia o dep&oacute;sito a: <strong>recaudacion@asistenciadeudores.cl</strong> o fotograf&iacute;a del comprobante al 
whatsapp (+569) 9255 1072  (puede escribir en el mismo comprobante el nombre del cliente). El Estudio Jur&iacute;dico mantendr&aacute; en su poder por el periodo de 6 meses 
contados desde la firma o aceptaci&oacute;n del contrato de prestaci&oacute;n de servicios, las boletas correspondientes a los pagos realizados por el cliente, siendo 
obligaci&oacute;n de este solicitarlas mes a mes.</p>

";
        }
        // line 263
        echo "
</div>
<div class=\"page\">
<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["url_root"]) || array_key_exists("url_root", $context) ? $context["url_root"] : (function () { throw new RuntimeError('Variable "url_root" does not exist.', 270, $this->source); })()), "html", null, true);
        echo "/build/img/firma_contrato.jpg\" width=\"150px\"></td><td></td></tr>
    
    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
        <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
        <td><p align=\"center\"><strong>";
        // line 275
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 275, $this->source); })()), "nombre", [], "any", false, false, false, 275));
        echo "</strong></p>
        <p align=\"center\"><strong>RUT: ";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 276, $this->source); })()), "rut", [], "any", false, false, false, 276), "html", null, true);
        echo "</strong></p>
        </td>
    </tr>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contrato/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 276,  490 => 275,  482 => 270,  473 => 263,  458 => 251,  445 => 241,  431 => 229,  416 => 217,  403 => 207,  383 => 189,  381 => 188,  377 => 186,  372 => 183,  369 => 182,  365 => 180,  360 => 177,  358 => 176,  355 => 175,  353 => 174,  341 => 164,  329 => 157,  323 => 156,  319 => 154,  308 => 145,  306 => 144,  260 => 101,  239 => 82,  230 => 79,  226 => 78,  222 => 77,  219 => 76,  215 => 75,  203 => 66,  188 => 53,  184 => 51,  180 => 49,  172 => 46,  166 => 44,  164 => 43,  160 => 41,  154 => 40,  150 => 38,  148 => 37,  144 => 36,  141 => 35,  136 => 34,  134 => 33,  130 => 31,  128 => 30,  124 => 28,  114 => 26,  111 => 25,  107 => 24,  101 => 20,  97 => 19,  92 => 17,  86 => 14,  72 => 13,  62 => 12,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    body{
        font-size:13px;
    }
</style>
<div align=\"right\">Nro Folio {{contrato.id}}</div>

<div align=\"center\"><h4>CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
<p align=\"justify\" >En Santiago de Chile a {{contrato.fechaCreacion|date(\"d-m-Y\")}}, entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
empresa de servicios Jur&iacute;dicos, representada por don <strong>Fernando Cort&eacute;s Salinas</strong>, c&eacute;dula de identidad N&deg; 9.704.412-0, domiciliado  en <strong>Hu&eacute;rfanos 1147, 
oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
(&ntilde;a) <strong>{{contrato.nombre|title|special_chars|raw}}</strong>, Nacionalidad  {{contrato.pais}}, C&eacute;dula de identidad N&deg; {{contrato.rut}}, Tel&eacute;fono: {{contrato.telefono}}, 
Recado: {{contrato.telefonoRecado}}, Domicilio: {{contrato.direccion|special_chars|raw}}, Comuna: {{contrato.ccomuna.nombre|special_chars|raw}}, Ciudad: {{contrato.cciudad.nombre|special_chars|raw}}, Correo electr&oacute;nico: {{contrato.email|special_chars|raw}}, Estado civil: {{contrato.estadoCivil|special_chars|raw}}; 
Situaci&oacute;n laboral: {{contrato.situacionLaboral|special_chars|raw}}, han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, 
un contrato de prestaci&oacute;n de servicios jur&iacute;dicos, desglosando su contenido en las siguientes cl&aacute;usulas.</p>

<p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrata {{contrato.agenda.reunion|special_chars|raw}} los Servicios Profesionales con El 
    Estudio Jur&iacute;dico, quien se compromete a realizar, en su representaci&oacute;n, todas aquellas gestiones judiciales 
    {% if contrato.agenda.cuenta.id==7 %}en primera instancia {% endif %}
    que sean procedentes, en atenci&oacute;n al estado procesal en que se encuentre la(s) causa(s) contratada(s).</p>

<strong>Estrategia Juridica</strong>
<p>
{% for contratoMee in mees %}
    
{{contratoMee.mee.materiaEstrategia.materia.nombre|special_chars|raw}} {{contratoMee.mee.materiaEstrategia.estrategiaJuridica.nombre|special_chars|raw}}<br>
{% endfor %}
</p>

{% if contrato.agenda.cuenta.id != 7 %}
<strong>Servicios:</strong>
<ul style=\"list-style: none;\">
{% if contrato.contratoRols is not null %}
    {% for contratorol in contrato.contratoRols %}

        <li>- {{contratorol.institucionAcreedora|special_chars|raw}} 
            {% if contratorol.nombreRol == \"\" %}
                SIN ROL
            {% else %}
                {{contratorol.nombreRol|special_chars|raw}}
            {% endif %} 

            {% if contratorol.juzgado is not null %}
                del {{contratorol.juzgado.nombre|special_chars|raw}}
            {% endif %}
            </li>
    {% endfor %}
{% else %}
<li>- SIN ROL
{% endif %}
</ul>
{% endif %}
<ul style=\"list-style: none;\">
<li> 
*\tMonitoreo diario de causas a trav&eacute;s de sistema interno del estudio.
</li>
<li>
*\tCompromisos: 
    <ul style=\"list-style:none;\"><li>
        \tCliente se compromete a traer a la brevedad clave &uacute;nica otorgada directamente en la oficina del Registro Civil e Identificaci&oacute;n. 
        </li>
    </ul>
</li>
</ul>

<p align=\"justify\"><strong> SEGUNDO:</strong> Los honorarios de los servicios profesionales son a todo evento y ascienden a la suma de {{contrato.montoContrato|number_format(0,\",\",\".\")}} pesos.
     Estos valores consideran el costo de la evaluaci&oacute;n, estudio y otros tr&aacute;mites que hayan sido practicados por
      El Estudio Jur&iacute;dico, los cuales se pactan en conformidad de ambas partes, de la siguiente manera:</p> 

      <table border=\"1\"  cellspacing=\"0\" width=\"50%\">




            {% for cuota in contrato.detalleCuotas %}
            <tr>
                <td align=\"right\">{{cuota.numero}}</td>
                <td align=\"center\">{{cuota.fechaPago|date('Y-m-d')}}</td>
                <td align=\"right\">\${{cuota.monto|number_format(0,\",\",\".\")}}</td>
            </tr>
            {% endfor %}
        


      </table>

<p align=\"justify\">El Calendario de pago precedentemente se&ntilde;alado no est&aacute; supeditado a gesti&oacute;n alguna por parte del Estudio Jur&iacute;dico, 
    raz&oacute;n por la cual se debe dar estricto cumplimiento a &eacute;ste en las fechas pactadas para tener vigente la 
    asesor&iacute;a al momento de ser requerida. Se entiende como el inicio del encargo y por lo tanto el derecho a percibir 
    los honorarios el de la fecha de la firma o aceptaci&oacute;n del contrato. En caso de desistimiento o t&eacute;rmino 
    unilateral del contrato por parte del cliente, se establece una cl&aacute;usula penal por la suma de \$ 120.000, en la eventualidad 
    de que los honorarios no hubieran sido pagados en su totalidad. De existir pagos superiores a este valor, 
    este no ser&aacute; restituido al cliente, y se considerar&aacute; como pago de honorarios por los servicios, atenci&oacute;n, y 
    representaci&oacute;n judicial y/o extrajudicial por parte del Estudio, hasta el momento de la terminaci&oacute;n del contrato.</p>

<p align=\"justify\"><strong>TERCERO: De la duraci&oacute;n del contrato:</strong> El Estudio Jur&iacute;dico se compromete a otorgar al cliente el 
    servicio contratado y especificado en la cl&aacute;usula primera, cumpliendo todos los tr&aacute;mites legales que indica la ley en primera 
    instancia, &nbsp;sin perjuicio, &nbsp;de las facultades privativas del respectivo tribunal de establecer plazos acordes con el funcionamiento del 
    mismo seg&uacute;n corresponda. La obligaci&oacute;n del estudio jur&iacute;dico es una obligaci&oacute;n de medios, vale decir, se 
    compromete a actuar diligentemente en todas las gestiones y tr&aacute;mites necesarios del proceso judicial. 
    <strong>El presente contrato tiene un plazo y vigencia de {{ contrato.agenda.cuenta.vigenciaContratos}} meses contado desde la aceptación, que es el tiempo en que durar&aacute;n los 
    servicios contratados.</strong></p>

<p align=\"justify\"><strong>CUARTO: Del estudio y reserva;</strong> Para el adecuado estudio y asesor&iacute;a de lo se&ntilde;alado precedentemente, el 
    cliente se obliga a entregar en un plazo establecido por acuerdo entre cliente y El Estudio Jur&iacute;dico, toda la 
    documentaci&oacute;n y antecedentes necesarios para el cumplimiento de lo cometido.</p>

<p align=\"justify\"><strong>QUINTO:</strong> El cliente se compromete a prestar amplia colaboraci&oacute;n en especial en la entrega de antecedentes, 
    documentos, obtenci&oacute;n de Clave &uacute;nica y otros, al Estudio Jur&iacute;dico.</p>

<p align=\"justify\"><strong>SEXTO: De los Gastos;</strong> El Cliente pagar&aacute; seg&uacute;n sea el caso, los gastos que se originen por la 
    gesti&oacute;n del presente contrato tales como notificaciones, gestiones encargadas a Receptores Judiciales, sub-inscripciones, 
    gastos de audiencias necesarias, Conservadores de Bienes Ra&iacute;ces, C&aacute;mara de Comercio, Archivero 
    Judicial y todas aquellas de similar naturaleza debiendo ser pagados por el cliente al momento en que ellas sean exigibles, 
    no siendo imputables en caso alguno a los honorarios pactados en la cl&aacute;usula segunda del presente contrato.</p>

<p align=\"justify\"><strong>SEPTIMO:</strong> El Estudio Jur&iacute;dico, llevar&aacute; la gesti&oacute;n encomendada con la mayor celeridad y diligencia 
    posible, de manera de obtener &oacute;ptimos resultados para el cliente y cumplir con los Servicios Contratados. </p>

<p align=\"justify\"><strong>OCTAVO:</strong> El Estudio Jur&iacute;dico solamente estar&aacute; autorizado a atender presencialmente, 
    entregar informaci&oacute;n, documentaci&oacute;n, u otro relacionado con la causa contratada al cliente titular de los servicios. 
    Sin perjuicio de lo anterior, el cliente podr&aacute; asignar a una sola persona, a trav&eacute;s de poder simple para estos 
    efectos, qui&eacute;n quedar&aacute; validada para su atenci&oacute;n e informaci&oacute;n, del cual quedar&aacute; registro en 
    carpeta respectiva.</p>

<p align=\"justify\"><strong>NOVENO:</strong> El incumplimiento del pago de una o m&aacute;s cuotas pactadas en el Punto Segundo, 
    facultar&aacute; al Estudio Jur&iacute;dico a paralizar inmediatamente las diligencias administrativas o 
    jur&iacute;dicas a favor del cliente o persona que lo represente, retom&aacute;ndose las mismas una vez que 
    se reanude el pago.</p>
    
<p align=\"justify\">El Estudio suspender&aacute; los servicios eximi&eacute;dose de toda responsabilidad por daños materiales o 
    morales que pudiera sufrir el cliente. Esta cl&aacute;usula se har&aacute; efectiva si el cliente entra en mora en 
    un plazo igual o superior a 20 d&iacute;as contados desde la fecha de vencimiento de la cuota pactada y 
    dar&aacute; adem&aacute;s derecho para exigir el cobro total de lo adeudado como una obligaci&oacute;n pura y 
    simple, aceptando desde ya la renuncia al mandato judicial en las causas señaladas en la 
    cl&aacute;usula primera.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO:</strong> Para todos los efectos legales que deriven del presente contrato, las partes fijan su domicilio en la
    ciudad de Santiago y prorrogan su competencia ante sus tribunales de justicia. </p>

<p align=\"justify\"><strong>D&Eacute;CIMO PRIMERO:</strong> Para efectos de ser atendido e informado sobre el estado de su(s) causa(s), 
    el cliente deber&aacute; agendar previamente una reuni&oacute;n, a fin de otorgar una atenci&oacute;n expedita y ofrecer a usted un servicio de calidad. </p>

{% if contrato.agenda.cuenta.id==7 %}

<p align=\"justify\"><strong>D&Eacute;CIMO SEGUNDO:</strong> Se informan los medios de contacto del abogado a cargo de su causa, sin perjucio de la facultad 
    del estudio jur&iacute;dico de asignar un nuevo abogado por motivos de fuerza mayor o redistribuci&oacute;n de cartera,
    <strong>abogado.familia@alfaromadariaga.cl</strong>, tel&eacute;fono: <strong>(+56 9) 6526 0962</strong>. 
    Tambi&eacute;n puede contactarnos a nuestra unidad <strong>SAC</strong> (Servicio de Atenci&oacute;n al Cliente) <strong>(+56 9) 3665 3829.</strong>
    Ser&aacute; obligaci&oacute;n del cliente informar cualquier modificaci&oacute;n en sus datos de contacto; tales como n&uacute;mero telef&oacute;nico, 
    direcci&oacute;n o correo electr&oacute;nico.</p>

    {% else %}

<p align=\"justify\"><strong>D&Eacute;CIMO SEGUNDO:</strong> Se deja constancia que el abogado encargado de la tramitaci&oacute;n de la 
    causa ser&aacute; <strong>{{contrato.tramitador.nombre|default('')}}</strong>, <strong>{{contrato.tramitador.correo|default('')}}</strong>, tel&eacute;fono oficina: 
    <strong>{{contrato.tramitador.telefono|default('')}}</strong>, </strong> celular: <strong>{{contrato.tramitador.whatsapp|default('')}}</strong>, 
    sin perjuicio de la facultad del estudio jur&iacute;dico de asignar un nuevo abogado por motivos de fuerza mayor o 
    redistribuci&oacute;n de cartera. Tambi&eacute;n puede contactarnos a nuestra unidad <strong>SAC</strong> (Servicio de Atenci&oacute;n al Cliente) <strong>(+56 9) 3665 3829.</strong>
    Asimismo, ser&aacute; obligaci&oacute;n del cliente informar cualquier modificaci&oacute;n en sus datos de contacto; tales como n&uacute;mero telef&oacute;nico, 
    direcci&oacute;n o correo electr&oacute;nico, informando al &aacute;rea de recaudaci&oacute;n cualquier modificaci&oacute;n.</p>

    {% endif %}

<p align=\"justify\"><strong>D&Eacute;CIMO TERCERO: Cl&aacute;usula de Consentimiento:</strong> Con la firma o aceptaci&oacute;n del presente contrato, 
    el cliente otorga su consentimiento expl&iacute;cito e informado al Estudio Jur&iacute;dico para que realice el 
    tratamiento de los datos personales, autoriz&aacute;ndolo expresamente para transferir los datos a 
    empresas de apoyo al giro con la exclusiva finalidad de dar cumplimiento a los servicios 
    contratados. Asimismo, el cliente autoriza expresamente al Estudio Jur&iacute;dico a utilizar canales de 
    contacto como WhatsApp, mensajer&iacute;a de texto, correo electr&oacute;nico, correspondencia y llamadas telef&oacute;nicas.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO CUARTO:</strong> Se deja constancia que ambas partes acuerdan la celebraci&oacute;n del 
    presente contrato de prestaci&oacute;n de servicios, 
    {% if contrato.agenda.reunion is not null %}
        
        {% if contrato.agenda.reunion.id==1 %}
        quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
        partes
        {% else %}
        siendo grabada la conversaci&oacute;n.
        {% endif %}
    {% else %}
    siendo grabada la conversaci&oacute;n o quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
    partes.
    {% endif %}
    </p>

{% if contrato.agenda.cuenta.id==7 %}

<p align=\"justify\"><strong>D&Eacute;CIMO QUINTO: Tramitaci&oacute;n ante Cortes:</strong> En la eventualidad de tener que recurrir 
    a la Ilustr&iacute;sima Corte de Apelaciones o por la Exelent&iacute;sima Corte   
    Suprema; se informar&aacute; esta situaci&oacute;n al cliente a fin de ofrecer un anexo de contrato para dicha
    gesti&oacute;n ante una nueva instancia judicial. El anexo de contrato mencionado en la presente cl&aacute;usula ser&aacute; opcional
    para el cliente, debiendo el abogado tramitador informar las circuntancias del caso y la viabilidad de la gesti&oacute;n.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO SEXTO:</strong> Los pagos pueden ser efectuados de manera presencial en las oficinas 
    de Estudio Jur&iacute;dico a trav&eacute;s de transferencia electr&oacute;nica o dep&oacute;sitos a 
    cualquiera de estas dos cuenta que se mencionan a continuaci&oacute;n.</p>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco de Chile</strong></li>
<li><strong>Cuenta corriente</strong></li>
<li><strong>N&deg; de cuenta: 800-51698-02</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: {{contrato.nombre|title|special_chars|raw}} </strong></li>
</ul>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco Estado</strong></li>
<li><strong>Cuenta vista o chequera electr&oacute;nica</strong></li>
<li><strong>N&deg; de cuenta: 291 7 068 468-9</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: {{contrato.nombre|title|special_chars|raw}} </strong></li>
</ul>

<p><strong>*Al realizar dep&oacute;sito o transferencia, debe ponerse en contacto con nuestra oficina e informar los datos del 
    dep&oacute;sito o transferencia.</strong></p>

<p align=\"justify\">Enviar comprobante de transferencia o dep&oacute;sito a: <strong>recaudacion@asistenciadeudores.cl</strong> o fotograf&iacute;a del comprobante al 
whatsapp (+569) 9255 1072  (puede escribir en el mismo comprobante el nombre del cliente). El Estudio Jur&iacute;dico mantendr&aacute; en su poder por el periodo de 6 meses 
contados desde la firma o aceptaci&oacute;n del contrato de prestaci&oacute;n de servicios, las boletas correspondientes a los pagos realizados por el cliente, siendo 
obligaci&oacute;n de este solicitarlas mes a mes.</p>

{% else %}

<p align=\"justify\"><strong>D&Eacute;CIMO QUINTO:</strong> Los pagos pueden ser efectuados de manera presencial en las oficinas 
    de Estudio Jur&iacute;dico a trav&eacute;s de transferencia electr&oacute;nica o dep&oacute;sitos a 
    cualquiera de estas dos cuenta que se mencionan a continuaci&oacute;n.</p>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco de Chile</strong></li>
<li><strong>Cuenta corriente</strong></li>
<li><strong>N&deg; de cuenta: 800-51698-02</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: {{contrato.nombre|title|special_chars|raw}} </strong></li>
</ul>

<ul style=\"list-style:none;\">
<li><strong>EMPRESA:</strong> Estudio Jur&iacute;dico Alfaro & Madariaga</li>
<li><strong>Rut:</strong> 76.638.999-6</li>
<li><strong>Banco Estado</strong></li>
<li><strong>Cuenta vista o chequera electr&oacute;nica</strong></li>
<li><strong>N&deg; de cuenta: 291 7 068 468-9</strong></li>
<li><strong>Correo:</strong> <a href=\"mailto:recaudacion@asistenciadeudores.cl\">recaudacion@asistenciadeudores.cl</a></li>
<li><strong>Comentarios: {{contrato.nombre|title|special_chars|raw}} </strong></li>
</ul>

<p><strong>*Al realizar dep&oacute;sito o transferencia, debe ponerse en contacto con nuestra oficina e informar los datos del 
    dep&oacute;sito o transferencia.</strong></p>

<p align=\"justify\">Enviar comprobante de transferencia o dep&oacute;sito a: <strong>recaudacion@asistenciadeudores.cl</strong> o fotograf&iacute;a del comprobante al 
whatsapp (+569) 9255 1072  (puede escribir en el mismo comprobante el nombre del cliente). El Estudio Jur&iacute;dico mantendr&aacute; en su poder por el periodo de 6 meses 
contados desde la firma o aceptaci&oacute;n del contrato de prestaci&oacute;n de servicios, las boletas correspondientes a los pagos realizados por el cliente, siendo 
obligaci&oacute;n de este solicitarlas mes a mes.</p>

{% endif %}

</div>
<div class=\"page\">
<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"{{url_root}}/build/img/firma_contrato.jpg\" width=\"150px\"></td><td></td></tr>
    
    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
        <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
        <td><p align=\"center\"><strong>{{contrato.nombre|special_chars|raw}}</strong></p>
        <p align=\"center\"><strong>RUT: {{contrato.rut}}</strong></p>
        </td>
    </tr>
</table>

", "contrato/print.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\print.html.twig");
    }
}
