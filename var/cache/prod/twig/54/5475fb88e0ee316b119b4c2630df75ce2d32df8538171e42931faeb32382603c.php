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
class __TwigTemplate_03d44148f761af7ea169ad55afc982bea2463def66d07c767e24ccc612a51cbb extends Template
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
        // line 1
        echo "
  <div align=\"right\">Nro Folio ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "</div>

<div align=\"center\"><h4>CONTRATO DE PRESTACI&Oacute;N DE SERVICIOS</h4></div>
<p align=\"justify\">En Santiago de Chile a ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "fechaCreacion", [], "any", false, false, false, 5), "d-m-Y"), "html", null, true);
        echo ", entre Estudio Jur&iacute;dico Alfaro y Madariaga Spa., rol &uacute;nico tributario 76.638.999-6 
empresa de servicios Jur&iacute;dicos, representada por don <strong>Fernando Cort&eacute;s Salinas</strong>, c&eacute;dula de identidad N&deg; 9.704.412-0, domiciliado  en <strong>Hu&eacute;rfanos 1147, 
oficina 501</strong>, comuna de Santiago, Regi&oacute;n Metropolitana, quien en adelante se denominar&aacute; indistintamente <strong>&quot;Estudio Jur&iacute;dico&quot;</strong> y por la otra don 
(&ntilde;a) <strong>";
        // line 8
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "nombre", [], "any", false, false, false, 8)));
        echo "</strong>, Nacionalidad  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "pais", [], "any", false, false, false, 8), "html", null, true);
        echo ", C&eacute;dula de identidad N&deg; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "rut", [], "any", false, false, false, 8), "html", null, true);
        echo ", Tel&eacute;fono: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "telefono", [], "any", false, false, false, 8), "html", null, true);
        echo ", 
Recado: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "telefonoRecado", [], "any", false, false, false, 9), "html", null, true);
        echo ", Domicilio: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "direccion", [], "any", false, false, false, 9));
        echo ", Comuna: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "comuna", [], "any", false, false, false, 9));
        echo ", Ciudad: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "ciudad", [], "any", false, false, false, 9));
        echo ", Correo electr&oacute;nico: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "email", [], "any", false, false, false, 9));
        echo ", Estado civil: ";
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "estadoCivil", [], "any", false, false, false, 9));
        echo "; 
Situaci&oacute;n laboral: ";
        // line 10
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "situacionLaboral", [], "any", false, false, false, 10));
        echo ", han celebrado con fecha de hoy, de manera libre y espont&aacute;nea, 
un contrato de prestaci&oacute;n de servicios jur&iacute;dicos, desglosando su contenido en las siguientes cl&aacute;usulas.</p>

<p align=\"justify\"><strong>PRIMERO:</strong> El cliente contrata ";
        // line 13
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "agenda", [], "any", false, false, false, 13), "reunion", [], "any", false, false, false, 13));
        echo " los Servicios Profesionales con El 
    Estudio Jur&iacute;dico, quien se compromete a realizar, en su representaci&oacute;n, todas aquellas gestiones judiciales que sean procedentes, en atenci&oacute;n al estado procesal en que se encuentre la(s) causa(s) contratada(s).</p>

<strong>Estrategia Juridica</strong>
<p>";
        // line 17
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "estrategiaJuridica", [], "any", false, false, false, 17));
        echo "</p>

<strong>Acreedores:</strong>
<ul style=\"list-style: none;\">
";
        // line 21
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "contratoRols", [], "any", false, false, false, 21))) {
            // line 22
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "contratoRols", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["contratorol"]) {
                // line 23
                echo "
        <li>- ";
                // line 24
                echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, $context["contratorol"], "institucionAcreedora", [], "any", false, false, false, 24));
                echo " 
            ";
                // line 25
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["contratorol"], "nombreRol", [], "any", false, false, false, 25), ""))) {
                    // line 26
                    echo "                SIN ROL
            ";
                } else {
                    // line 28
                    echo "                ";
                    echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, $context["contratorol"], "nombreRol", [], "any", false, false, false, 28));
                    echo "
            ";
                }
                // line 29
                echo " 

            ";
                // line 31
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["contratorol"], "juzgado", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                del ";
                    echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contratorol"], "juzgado", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32));
                    echo "
            ";
                }
                // line 34
                echo "            </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratorol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 37
            echo "<li>- SIN ROL
";
        }
        // line 39
        echo "</ul>
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

<p align=\"justify\"><strong> SEGUNDO:</strong> Los honorarios de los servicios profesionales son a todo evento y ascienden a la suma de ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "montoContrato", [], "any", false, false, false, 53), 0, ",", "."), "html", null, true);
        echo " pesos.
     Estos valores consideran el costo de la evaluaci&oacute;n, estudio y otros tr&aacute;mites que hayan sido practicados por
      El Estudio Jur&iacute;dico, los cuales se pactan en conformidad de ambas partes, de la siguiente manera:</p> 

      <table border=\"1\"  cellspacing=\"0\" width=\"50%\">




            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "detalleCuotas", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["cuota"]) {
            // line 63
            echo "            <tr>
                <td align=\"right\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "numero", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "fechaPago", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true);
            echo "</td>
                <td align=\"right\">\$";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuota"], "monto", [], "any", false, false, false, 66), 0, ",", "."), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        


      </table>

<p align=\"justify\">El Calendario de pago precedentemente se&ntilde;alado no est&aacute; supeditado a gesti&oacute;n alguna por parte del Estudio Jur&iacute;dico, 
    raz&oacute;n por la cual se debe dar estricto cumplimiento a &eacute;ste en las fechas pactadas para tener vigente la 
    asesor&iacute;a al momento de ser requerida. Se entiende como el inicio del encargo y por lo tanto el derecho a percibir 
    los honorarios el de la fecha de la firma del contrato. En caso de desistimiento o t&eacute;rmino 
    unilateral del contrato por parte del cliente, &eacute;ste deber&aacute; cancelar la suma de \$ 120.000, establecidas en los 
    p&aacute;rrafos precedentes, si &eacute;stas no han sido pagadas en su totalidad. De existir pagos superiores a este valor, 
    este no ser&aacute; restituido al cliente, y se considerar&aacute; como pago de honorarios por los servicios, atenci&oacute;n, y 
    representaci&oacute;n judicial y/o extrajudicial por parte del Estudio, hasta el momento de la terminaci&oacute;n del contrato.</p>

<p align=\"justify\"><strong>TERCERO: De la duraci&oacute;n del contrato:</strong> El Estudio Jur&iacute;dico se compromete a otorgar al cliente el 
    servicio contratado y especificado en la cl&aacute;usula primera, cumpliendo todos los tr&aacute;mites legales que indica la ley, 
    sin perjuicio, de las facultades privativas del respectivo tribunal de establecer plazos acorde con el funcionamiento del mismo 
    seg&uacute;n corresponda. La obligaci&oacute;n del estudio jur&iacute;dico es una obligaci&oacute;n de medios, vale decir, se 
    compromete a actuar diligentemente en todas las gestiones y tr&aacute;mites necesarios del proceso judicial. 
    <strong>El presente contrato tiene un plazo y vigencia de 
        ";
        // line 89
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "agenda", [], "any", false, false, false, 89), "cuenta", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), 7))) {
            // line 90
            echo "        12 meses
        ";
        } else {
            // line 92
            echo "        24 meses 
        ";
        }
        // line 94
        echo "        
        contado desde la firma, que es el tiempo en que durar&aacute;n los 
    servicios contratados.</strong></p>

<p align=\"justify\"><strong>CUARTO: Del estudio y reserva;</strong> Para el adecuado estudio y asesor&iacute;a de lo se&ntilde;alado precedentemente, el 
    cliente se obliga a entregar en un plazo establecido por acuerdo entre cliente y El Estudio Jur&iacute;dico, toda la 
    documentaci&oacute;n y antecedentes necesarios para el cumplimiento de lo cometido.</p>

<p align=\"justify\"><strong>QUINTO:</strong> El cliente se compromete a prestar amplia colaboraci&oacute;n en especial en la entrega de antecedentes, 
    documentos, obtenci&oacute;n de Clave &uacute;nica y otros, al Estudio Jur&iacute;dico.</p>

<p align=\"justify\"><strong>SEXTO: De los Gastos;</strong> El Cliente pagar&aacute; seg&uacute;n sea el caso, los gastos que se originen por la 
    gesti&oacute;n del presente contrato tales como notificaciones, gestiones encargadas a receptores judiciales, sub-inscripciones, 
    gastos de audiencias necesarias, conservadores de bienes ra&iacute;ces y de comercio, C&aacute;mara de comercio, archivero 
    judicial y todas aquellas de similar naturaleza debiendo ser pagados por el cliente al momento en que ellas sean exigibles, 
    no siendo imputables en caso alguno a los honorarios pactados en la cl&aacute;usula segunda del presente contrato.</p>

<p align=\"justify\"><strong>SEPTIMO:</strong> El Estudio Jur&iacute;dico, llevar&aacute; la gesti&oacute;n encomendada con la mayor celeridad y diligencia 
    posible, de manera de obtener &oacute;ptimos resultados para el cliente y cumplir con los Servicios Contratados. </p>

<p align=\"justify\"><strong>OCTAVO:</strong> El Estudio Jur&iacute;dico solamente estar&aacute; autorizado a atender presencialmente, 
    entregar informaci&oacute;n, documentaci&oacute;n, u otro relacionado con la causa contratada al cliente titular de los servicios. 
    Sin perjuicio de lo anterior, el cliente podr&aacute; asignar a una sola persona, a trav&eacute;s de poder simple para estos 
    efectos, qui&eacute;n quedar&aacute; validada para su atenci&oacute;n e informaci&oacute;n, del cual quedar&aacute; registro en 
    carpeta respectiva.</p>
<p align=\"justify\"><strong>NOVENO:</strong> Cl&aacute;usula Penal: El incumplimiento del pago de una o m&aacute;s cuotas pactadas 
    en el Punto Segundo, facultar&aacute; al Estudio Jur&iacute;dico a paralizar inmediatamente las diligencias administrativas o 
    jur&iacute;dicas a favor del cliente o persona que lo represente. Adem&aacute;s dar&aacute; derecho a Estudio Jur&iacute;dico 
    a poner t&eacute;rmino en forma unilateral a la prestaci&oacute;n de los servicios que son objeto del presente 
    contrato, liberando al cliente de la responsabilidad procesal posterior a su cumplimiento; aceptando desde ya la renuncia al 
    mandato judicial en las causas se&ntilde;aladas en la cl&aacute;usula primera. Dar&aacute; adem&aacute;s derecho para exigir el cobro total de lo 
    adeudado como una obligaci&oacute;n pura y simple, sin perjuicio de las dem&aacute;s acciones legales que correspondan. 
    Esta cl&aacute;usula se har&aacute; efectiva si el cliente entra en mora en un plazo igual o superior a 20 d&iacute;as desde la 
    fecha de vencimiento de la cuota pactada.</p>
<p align=\"justify\"><strong>D&Eacute;CIMO:</strong> Para todos los efectos legales, las partes fijan domicilio en la ciudad de Santiago.</p>\t

<p align=\"justify\"><strong>D&Eacute;CIMO PRIMERO:</strong> Para efectos de ser atendido e informado sobre el estado de su(s) causa(s), 
    el cliente deber&aacute; agendar previamente una reuni&oacute;n, a fin de otorgar 
    una atenci&oacute;n expedita y ofrecer a usted un servicio de calidad. </p>

<p align=\"justify\"><strong>D&Eacute;CIMO SEGUNDO:</strong> Se deja constancia que el abogado encargado de la tramitaci&oacute;n de la 
    causa ser&aacute; <strong>";
        // line 135
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 135), "nombre", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 135), "nombre", [], "any", false, false, false, 135), "")) : ("")), "html", null, true);
        echo "</strong>, <strong>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 135), "correo", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 135), "correo", [], "any", false, false, false, 135), "")) : ("")), "html", null, true);
        echo "</strong>, tel&eacute;fono oficina: 
    <strong>";
        // line 136
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 136), "telefono", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 136), "telefono", [], "any", false, false, false, 136), "")) : ("")), "html", null, true);
        echo "</strong>, </strong> celular: <strong>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 136), "whatsapp", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "tramitador", [], "any", false, true, false, 136), "whatsapp", [], "any", false, false, false, 136), "")) : ("")), "html", null, true);
        echo "</strong>, 
    sin perjuicio de la facultad del estudio jur&iacute;dico de asignar un nuevo abogado por motivos de fuerza mayor o 
    redistribuci&oacute;n de cartera. Tambi&eacute;n puede contactarnos a nuestra unidad <strong>SAC</strong> (Servicio de Atenci&oacute;n al Cliente) <strong>(+56 9) 3665 3829.</strong></p>

<p align=\"justify\"><strong>D&Eacute;CIMO TERCERO: Cl&aacute;usula de Consentimiento:</strong> Con la firma del presente contrato el cliente 
    otorga su consentimiento previo, expl&iacute;cito e informado al Estudio Jur&iacute;dico para que realice el 
    tratamiento de los datos personales del cliente con el objeto de dar fiel cumplimiento al contrato de prestaci&oacute;n de 
    servicios pactado, autorizando expresamente al estudio jur&iacute;dico para transferir los datos a empresas de apoyo al giro con la 
    exclusiva finalidad de dar cumplimiento a los servicios contratados en el presente contrato.</p>

<p align=\"justify\"><strong>D&Eacute;CIMO CUARTO:</strong> Se deja constancia que ambas partes acuerdan la celebraci&oacute;n del 
    presente contrato de prestaci&oacute;n de servicios, 
    ";
        // line 148
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "agenda", [], "any", false, false, false, 148), "reunion", [], "any", false, false, false, 148))) {
            // line 149
            echo "        
        
        ";
            // line 151
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "agenda", [], "any", false, false, false, 151), "reunion", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), 1))) {
                // line 152
                echo "        quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
        partes
        ";
            } else {
                // line 155
                echo "        siendo grabada la conversaci&oacute;n
        ";
            }
            // line 157
            echo "    ";
        } else {
            // line 158
            echo "    siendo grabada la conversaci&oacute;n o quedando una copia f&iacute;sica del contrato como medida de resguardo para ambas 
    partes 
    ";
        }
        // line 161
        echo "    .</p>

<p align=\"justify\"><strong>D&Eacute;CIMO QUINTO:</strong> Los pagos pueden ser efectuados de manera presencial en las oficinas 
    de Estudio Jur&iacute;dico a trav&eacute;s de transferencia electr&oacute;nica o dep&oacute;sitos a 
    cualquiera de estas dos cuenta que se mencionan a continuaci&oacute;n.</p>

<ul style=\"list-style:none;\">
<li><strong>External Service Pro Spa.</strong></li> 
<li><strong>Banco Itau</strong></li>
<li><strong>Cuenta Corriente</strong></li>
<li><strong>N&deg; 0220359220</strong></li>
<li><strong>Rut: 77.114.581-7</strong></li>
<li><strong>Mail: recaudacion@asistenciadeudores.cl</strong></li>
<li><strong>Comentarios: ";
        // line 174
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "nombre", [], "any", false, false, false, 174)));
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
        // line 184
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "nombre", [], "any", false, false, false, 184)));
        echo " </strong></li>
</ul>

<p><strong>*Al realizar dep&oacute;sito o transferencia, debe ponerse en contacto con nuestra oficina e informar los datos del 
    dep&oacute;sito o transferencia.</strong></p>

<p align=\"justify\">Enviar comprobante de transferencia o deposito a: <strong>recaudacion@asistenciadeudores.cl</strong> o fotograf&iacute;a del 
    comprobante al <strong>whatsapp (+569) 3171 2340</strong> (puede escribir en el mismo comprobante el nombre del cliente).</p>

<p align=\"justify\">El presente contrato se otorga para ambas partes, con id&eacute;ntico tenor y validez, quedando una copia en 
    poder de cada una de las partes.</p>

<table width=\"100%\">
    <tr><td width=\"50%\" align=\"center\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, ($context["url_web"] ?? null), "html", null, true);
        echo "/build/img/firma_contrato.jpg\"></td><td></td></tr>

    <tr>
        <td><p align=\"center\"><strong>ESTUDIO JURIDICO ALFARO Y MADARIAGA</strong></p>
            <p align=\"center\"><strong>R.U.T.: 76.638.999-6</strong></p>            </td>
            <td><p align=\"center\"><strong>";
        // line 202
        echo $this->extensions['App\Twig\AppExtension']->decode_utf8(twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "nombre", [], "any", false, false, false, 202));
        echo "</strong></p>
                <p align=\"center\"><strong>RUT: ";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "rut", [], "any", false, false, false, 203), "html", null, true);
        echo "</strong></p>
                </td>

    </tr>
</table>

";
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
        return array (  377 => 203,  373 => 202,  365 => 197,  349 => 184,  336 => 174,  321 => 161,  316 => 158,  313 => 157,  309 => 155,  304 => 152,  302 => 151,  298 => 149,  296 => 148,  279 => 136,  273 => 135,  230 => 94,  226 => 92,  222 => 90,  220 => 89,  198 => 69,  189 => 66,  185 => 65,  181 => 64,  178 => 63,  174 => 62,  162 => 53,  146 => 39,  142 => 37,  134 => 34,  128 => 32,  126 => 31,  122 => 29,  116 => 28,  112 => 26,  110 => 25,  106 => 24,  103 => 23,  98 => 22,  96 => 21,  89 => 17,  82 => 13,  76 => 10,  62 => 9,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrato/print.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\print.html.twig");
    }
}
