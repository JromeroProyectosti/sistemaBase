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

/* contrato/edit.html.twig */
class __TwigTemplate_053c7c80ecf25297565d6a66e752637e30a0c4d11693d176bdc09d3032978f28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrato/edit.html.twig", 1);
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

        echo "Edit Contrato";
        
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
        echo "    <div class=\"row\">
        <div class=\"col-sm-12 col-md-8\">
    ";
        // line 8
        echo twig_include($this->env, $context, "contrato/_form.html.twig", ["button_label" => "Modificar"]);
        echo "
        </div>
    <div class=\"col-sm-12 col-md-4\">
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
            ";
        // line 14
        $context["agenda"] = twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 14, $this->source); })()), "agenda", [], "any", false, false, false, 14);
        // line 15
        echo "            <!-- Timelime example  -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    <!-- The time line -->
                        <div class=\"timeline\">
                            <!-- timeline time label -->
                            <div class=\"time-label\">
                            <span class=\"bg-red\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 22, $this->source); })()), "fechaCarga", [], "any", false, false, false, 22), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 26, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 27
            echo "                                
                            
                            <div class=\"time-label\">
                                <span class=\"bg-green\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
            echo "</span>
                            </div>
                            <div>
                                <i class=\"fas fa-envelope bg-blue\"></i>
                                <div class=\"timeline-item\">
                                    <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 35), "h:i"), "html", null, true);
            echo "</span>
                                    <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 36), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 36), "html", null, true);
            echo " </h3>
    
                                    <div class=\"timeline-body\">
                                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                    </div>
                                   
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            <div>
                                <i class=\"fas fa-clock bg-gray\"></i>
                              </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contrato/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  148 => 39,  140 => 36,  136 => 35,  128 => 30,  123 => 27,  119 => 26,  112 => 22,  103 => 15,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Contrato{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-8\">
    {{ include('contrato/_form.html.twig', {'button_label': 'Modificar'}) }}
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
{% endblock %}
", "contrato/edit.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\edit.html.twig");
    }
}
