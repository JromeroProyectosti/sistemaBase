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

/* panel_agendador/calendario.html.twig */
class __TwigTemplate_2d2b8e9e0c1ea4e2546c9662005f2080197f42560bd670a2967eb44380fd084e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/calendario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/calendario.html.twig"));

        // line 1
        echo "

<div class=\"row\">
  
  <div class=\"col-sm-12 col-md-10\">
          <h1>Abogado: ";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["abogado"] ?? null), "nombre", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["abogado"] ?? null), "nombre", [], "any", false, false, false, 6), "")) : ("")), "html", null, true);
        echo "</h1>
          <div id=\"calendar\"> </div>
  
  </div>
</div>

<script>
    \$(function () {
  
      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {
  
          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: \$.trim(\$(this).text()) // use the element's text as the event title
          }
  
          // store the Event Object in the DOM element so we can get to it later
          \$(this).data('eventObject', eventObject)
  
          // make the event draggable using jQuery UI
          \$(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })
  
        })
      }
  
      ini_events(\$('#external-events div.external-event'))
  
      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()
  
      var Calendar = FullCalendar.Calendar;
     
      var calendarEl = document.getElementById('calendar');
  
      
      var calendar = new Calendar(calendarEl, {
        
        plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
        header: {
          left  : 'prev,next today',
          center: 'title',
          right : 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'es',
        navLinks: true,
        'themeSystem': 'bootstrap',
        //Random default events
        events    : [
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 68
            echo "            {
                title          : '";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "status", [], "any", false, false, false, 69), "html", null, true);
            echo " - Compañia: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "cuenta", [], "any", false, false, false, 69), "nombre", [], "any", false, false, false, 69), "html", null, true);
            echo " - Cliente: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "nombreCliente", [], "any", false, false, false, 69), "html", null, true);
            echo "',
                start          : new Date(";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 70), "Y"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 70), "m"), "html", null, true);
            echo "-1,";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 70), "d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 70), "H"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 70), "i"), "html", null, true);
            echo "),
                end            : new Date(";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 71), "Y"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 71), "m"), "html", null, true);
            echo "-1,";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 71), "d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 71), "H"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "fechaAsignado", [], "any", false, false, false, 71), "i") + 30), "html", null, true);
            echo "),
                backgroundColor: '";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, false, false, 72), "color", [], "any", false, false, false, 72), "html", null, true);
            echo "', //red
                borderColor    : '";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "abogado", [], "any", false, false, false, 73), "color", [], "any", false, false, false, 73), "html", null, true);
            echo "', //red
                allDay         : false,
              },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "          
        ],
        editable  : false,
        droppable : false, // this allows things to be dropped onto the calendar !!!
        
      });
  
      calendar.render();
      // \$('#calendar').fullCalendar()
  
      
      
    })
  </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_agendador/calendario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 77,  157 => 73,  153 => 72,  141 => 71,  129 => 70,  121 => 69,  118 => 68,  114 => 67,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"row\">
  
  <div class=\"col-sm-12 col-md-10\">
          <h1>Abogado: {{abogado.nombre|default('')}}</h1>
          <div id=\"calendar\"> </div>
  
  </div>
</div>

<script>
    \$(function () {
  
      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {
  
          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: \$.trim(\$(this).text()) // use the element's text as the event title
          }
  
          // store the Event Object in the DOM element so we can get to it later
          \$(this).data('eventObject', eventObject)
  
          // make the event draggable using jQuery UI
          \$(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })
  
        })
      }
  
      ini_events(\$('#external-events div.external-event'))
  
      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()
  
      var Calendar = FullCalendar.Calendar;
     
      var calendarEl = document.getElementById('calendar');
  
      
      var calendar = new Calendar(calendarEl, {
        
        plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
        header: {
          left  : 'prev,next today',
          center: 'title',
          right : 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'es',
        navLinks: true,
        'themeSystem': 'bootstrap',
        //Random default events
        events    : [
            {% for agenda in agendas %}
            {
                title          : '{{agenda.status}} - Compañia: {{agenda.cuenta.nombre}} - Cliente: {{agenda.nombreCliente}}',
                start          : new Date({{agenda.fechaAsignado|date('Y')}},{{agenda.fechaAsignado|date('m')}}-1,{{agenda.fechaAsignado|date('d')}}, {{agenda.fechaAsignado|date('H')}}, {{agenda.fechaAsignado|date('i')}}),
                end            : new Date({{agenda.fechaAsignado|date('Y')}},{{agenda.fechaAsignado|date('m')}}-1,{{agenda.fechaAsignado|date('d')}}, {{agenda.fechaAsignado|date('H')}}, {{agenda.fechaAsignado|date('i') + 30}}),
                backgroundColor: '{{agenda.abogado.color}}', //red
                borderColor    : '{{agenda.abogado.color}}', //red
                allDay         : false,
              },
            {% endfor %}
          
        ],
        editable  : false,
        droppable : false, // this allows things to be dropped onto the calendar !!!
        
      });
  
      calendar.render();
      // \$('#calendar').fullCalendar()
  
      
      
    })
  </script>", "panel_agendador/calendario.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\calendario.html.twig");
    }
}
