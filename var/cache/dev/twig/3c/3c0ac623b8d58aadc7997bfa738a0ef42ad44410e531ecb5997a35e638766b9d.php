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

/* contrato/finalizar.html.twig */
class __TwigTemplate_3f35a966c34bf5d493cca2c0337ef7b020da04b148732ab0e392e5f04b9c4f93 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/finalizar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/finalizar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrato/finalizar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Finalizar";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
  <div class=\"col-sm-12 col-md-8\">
    ";
        // line 8
        echo twig_include($this->env, $context, "contrato/_form.html.twig", ["button_label" => "Finalizar"]);
        echo "

    ";
        // line 10
        echo twig_include($this->env, $context, "contrato/_delete_form.html.twig");
        echo "
  </div>
  <div class=\"col-sm-12 col-md-4\">
      <!-- Main content -->
      <section class=\"content\">
          <div class=\"container-fluid\">
          ";
        // line 16
        $context["agenda"] = twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 16, $this->source); })()), "agenda", [], "any", false, false, false, 16);
        // line 17
        echo "          <!-- Timelime example  -->
              <div class=\"row\">
                  <div class=\"col-md-12\">
                  <!-- The time line -->
                      <div class=\"timeline\">
                          <!-- timeline time label -->
                          <div class=\"time-label\">
                          <span class=\"bg-red\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 24, $this->source); })()), "fechaCarga", [], "any", false, false, false, 24), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 28, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 29
            echo "                              
                          
                          <div class=\"time-label\">
                              <span class=\"bg-green\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true);
            echo "</span>
                          </div>
                          <div>
                              <i class=\"fas fa-envelope bg-blue\"></i>
                              <div class=\"timeline-item\">
                                  <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 37), "h:i"), "html", null, true);
            echo "</span>
                                  <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 38), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 38), "html", null, true);
            echo " </h3>
  
                                  <div class=\"timeline-body\">
                                      ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 41), "html", null, true);
            echo "
                                  </div>
                                 
                              </div>
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                          <div>
                              <i class=\"fas fa-clock bg-gray\"></i>
                            </div>
                      </div>
                      
                  </div>
                  
              </div>
          </div>
      </section>
      </div>
  </div>
    <!-- Modal -->
 <div class=\"modal fade\" id=\"controles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header bg-warning\">
            <h1>Ya falta menos</h1>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <p> finalizar revisa los datos del contrato. Al presionar en <strong>\"Guardar\" </strong>esto generará un usuario cliente...</p>
        </div>
       <div class=\"modal-body\"><button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" aria-label=\"Close\">Cerrar</button></div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contrato/finalizar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 47,  153 => 41,  145 => 38,  141 => 37,  133 => 32,  128 => 29,  124 => 28,  117 => 24,  108 => 17,  106 => 16,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Finalizar{% endblock %}

{% block body %}
<div class=\"row\">
  <div class=\"col-sm-12 col-md-8\">
    {{ include('contrato/_form.html.twig', {'button_label': 'Finalizar'}) }}

    {{ include('contrato/_delete_form.html.twig') }}
  </div>
  <div class=\"col-sm-12 col-md-4\">
      <!-- Main content -->
      <section class=\"content\">
          <div class=\"container-fluid\">
          {% set agenda=contrato.agenda %}
          <!-- Timelime example  -->
              <div class=\"row\">
                  <div class=\"col-md-12\">
                  <!-- The time line -->
                      <div class=\"timeline\">
                          <!-- timeline time label -->
                          <div class=\"time-label\">
                          <span class=\"bg-red\">{{agenda.fechaCarga|date('d-m-Y H:i')}}</span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          {% for observacion in agenda.agendaObservacions %}
                              
                          
                          <div class=\"time-label\">
                              <span class=\"bg-green\">{{observacion.fechaRegistro|date('d-m-Y')}}</span>
                          </div>
                          <div>
                              <i class=\"fas fa-envelope bg-blue\"></i>
                              <div class=\"timeline-item\">
                                  <span class=\"time\"><i class=\"fas fa-clock\"></i>{{observacion.fechaRegistro|date('h:i')}}</span>
                                  <h3 class=\"timeline-header\"><a href=\"#\">{{observacion.status}}</a> {{observacion.usuarioRegistro}} </h3>
  
                                  <div class=\"timeline-body\">
                                      {{observacion.observacion}}
                                  </div>
                                 
                              </div>
                          </div>
                          {% endfor %}
                          <div>
                              <i class=\"fas fa-clock bg-gray\"></i>
                            </div>
                      </div>
                      
                  </div>
                  
              </div>
          </div>
      </section>
      </div>
  </div>
    <!-- Modal -->
 <div class=\"modal fade\" id=\"controles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header bg-warning\">
            <h1>Ya falta menos</h1>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <p> finalizar revisa los datos del contrato. Al presionar en <strong>\"Guardar\" </strong>esto generará un usuario cliente...</p>
        </div>
       <div class=\"modal-body\"><button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" aria-label=\"Close\">Cerrar</button></div>
      </div>
    </div>
  </div>
{% endblock %}
", "contrato/finalizar.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\finalizar.html.twig");
    }
}
