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

/* nocontesta/new.html.twig */
class __TwigTemplate_3eaf5df938395548473c7051887a3e7a95ef5815e1c5c927549e61a45c23bd22 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nocontesta/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nocontesta/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nocontesta/new.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "agenda agendador")) : ("agenda agendador")), "html", null, true);
        
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
    <div class=\"col-sm-12 col-md-8 \">
    <section class=\"sticky-top\">
        <div class=\"card\">
            <div class=\"card-body table-responsive pad\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                <h4>Datos Lead</h4>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Campaña</small><br>
                        <label>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 16, $this->source); })()), "campania", [], "any", false, false, false, 16), "html", null, true);
        echo "</label>
                        
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Compañia</small><br>
                        <label>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 21, $this->source); })()), "cuenta", [], "any", false, false, false, 21), "nombre", [], "any", false, false, false, 21), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Nombre Cliente</small>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nombreCliente", [], "any", false, false, false, 25), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Rut Cliente</small>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rutCliente", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut"]]);
        echo "
                    </div>
                   
                    <div class=\"col-sm-12 col-md-3\">
                        <small class=\"text-muted\">Telefono Cliente</small>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telefonoCliente", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Telefono Recado Cliente</small>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "telefonoRecadoCliente", [], "any", false, false, false, 38), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Correo Cliente</small>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "emailCliente", [], "any", false, false, false, 42), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    
                </div>
                <br />
                

                <h1>Reasignar</h1>
                <div class=\"row\">
                    
                    <div class=\"col-sm-12 col-md-9\">
                        <small class=\"text-muted\">Observación</small>
                        <textarea name=\"txtObservacion\" cols=\"10\" rows=\"3\" class=\"form-control\"></textarea>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-9 col-md-3\">
                        <small class=\"text-muted\">Compañia</small>
                        <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required>
                            <option value=\"\"></option>
            
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 64
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\"
                                ";
            // line 65
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 65, $this->source); })()), "cuenta", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)))) {
                // line 66
                echo "                                selected
                                ";
            }
            // line 68
            echo "                                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 68), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </select>
                    </div>
                    <div class=\"col-sm-6 col-md-3\" id=\"agendadores\">
            
            
                    </div>
                    
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-3\">
                        <button class=\"btn btn-primary\">Reasignar</button>
                    </div>
                </div>
                

                
            ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
                
            </div>

        </div>
    </section>
    </div>
    <div class=\"col-sm-12 col-md-4\">
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
        
        <!-- Timelime example  -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                <!-- The time line -->
                    <div class=\"timeline\">
                        <!-- timeline time label -->
                        <div class=\"time-label\">
                        <span class=\"bg-red\">";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 105, $this->source); })()), "fechaCarga", [], "any", false, false, false, 105), "d-m-Y"), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 109, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 110
            echo "                            
                        
                        <div class=\"time-label\">
                            <span class=\"bg-green\">";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 113), "d-m-Y"), "html", null, true);
            echo "</span>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope bg-blue\"></i>
                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 118), "H:i"), "html", null, true);
            echo "</span>
                                <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 119), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 119), "html", null, true);
            echo " </h3>

                                <div class=\"timeline-body\">
                                    ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 122), "html", null, true);
            echo "
                                </div>
                               
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                        <div>
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
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Calendario</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\" id=\"bodyModal\">
          
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>

        function verCalendario(){
            \$.ajax({
                url:\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_calendario", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)]), "html", null, true);
        echo "\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                success:function(data){
                    \$(\"#bodyModal\").html(data);
                    \$('#staticBackdrop').modal();
                }
            });
        }
        function agendadores(id){
        
            
       
            if(id>0){
                \$.ajax({
                    url:\"/agenda/\"+id+\"/agendadores\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#agendadores\").html(data);
                    }
            
                });
            }else{
                \$(\"#agendadores\").html('');
            }
        }
        /*function getAbogados(status){
            if(status==5){
                \$.ajax({
                    url:\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_abogados", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)]), "html", null, true);
        echo "\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            else{
                \$.ajax({
                    url:\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_engestion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216)]), "html", null, true);
        echo "\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            
        }*/
       
        \$(document).ready(function(){
            console.log(\"paso\");
             \$.ajax({
                 url:\"/agenda/";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 235, $this->source); })()), "cuenta", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235), "html", null, true);
        echo "/agendadores\",
                 type: \"get\",
                 data: \"agendador=";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 237, $this->source); })()), "agendador", [], "any", false, false, false, 237), "id", [], "any", false, false, false, 237), "html", null, true);
        echo "\",
                 dataType: \"html\",
                 cache: false,
                 contentType: false,
                 processData: false,
                 async: true,
                 success:function(data){
                     \$(\"#agendadores\").html(data);
                 }
         
             });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nocontesta/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 237,  401 => 235,  379 => 216,  361 => 201,  320 => 163,  283 => 128,  271 => 122,  263 => 119,  259 => 118,  251 => 113,  246 => 110,  242 => 109,  235 => 105,  213 => 86,  195 => 70,  186 => 68,  182 => 66,  180 => 65,  175 => 64,  171 => 63,  147 => 42,  140 => 38,  133 => 34,  125 => 29,  118 => 25,  111 => 21,  103 => 16,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('agenda agendador')}}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12 col-md-8 \">
    <section class=\"sticky-top\">
        <div class=\"card\">
            <div class=\"card-body table-responsive pad\">
                {{ form_start(form) }}
                <h4>Datos Lead</h4>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Campaña</small><br>
                        <label>{{agenda.campania}}</label>
                        
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Compañia</small><br>
                        <label>{{agenda.cuenta.nombre}}</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Nombre Cliente</small>
                        {{ form_row(form.nombreCliente,{'label':false,'attr':{'class':'form-control'}})}}
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Rut Cliente</small>
                        {{form_row(form.rutCliente,{'label':false,'attr':{'class':'form-control format-rut'}})}}
                    </div>
                   
                    <div class=\"col-sm-12 col-md-3\">
                        <small class=\"text-muted\">Telefono Cliente</small>
                        {{ form_row(form.telefonoCliente,{'label':false,'attr':{'class':'form-control'}})}}
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Telefono Recado Cliente</small>
                        {{form_row(form.telefonoRecadoCliente,{'label':false,'attr':{'class':'form-control'}})}}
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Correo Cliente</small>
                        {{ form_row(form.emailCliente,{'label':false,'attr':{'class':'form-control'}})}}
                    </div>
                    
                </div>
                <br />
                

                <h1>Reasignar</h1>
                <div class=\"row\">
                    
                    <div class=\"col-sm-12 col-md-9\">
                        <small class=\"text-muted\">Observación</small>
                        <textarea name=\"txtObservacion\" cols=\"10\" rows=\"3\" class=\"form-control\"></textarea>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-9 col-md-3\">
                        <small class=\"text-muted\">Compañia</small>
                        <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required>
                            <option value=\"\"></option>
            
                            {% for cuenta in cuentas %}
                                <option value=\"{{cuenta.id}}\"
                                {% if cuenta.id == agenda.cuenta.id %}
                                selected
                                {% endif %}
                                >{{cuenta.nombre}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-sm-6 col-md-3\" id=\"agendadores\">
            
            
                    </div>
                    
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-3\">
                        <button class=\"btn btn-primary\">Reasignar</button>
                    </div>
                </div>
                

                
            {{ form_end(form) }}
                
            </div>

        </div>
    </section>
    </div>
    <div class=\"col-sm-12 col-md-4\">
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
        
        <!-- Timelime example  -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                <!-- The time line -->
                    <div class=\"timeline\">
                        <!-- timeline time label -->
                        <div class=\"time-label\">
                        <span class=\"bg-red\">{{agenda.fechaCarga|date('d-m-Y')}}</span>
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
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>{{observacion.fechaRegistro|date('H:i')}}</span>
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
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Calendario</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\" id=\"bodyModal\">
          
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>

        function verCalendario(){
            \$.ajax({
                url:\"{{path('panel_agendador_calendario',{'id':agenda.id})}}\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                success:function(data){
                    \$(\"#bodyModal\").html(data);
                    \$('#staticBackdrop').modal();
                }
            });
        }
        function agendadores(id){
        
            
       
            if(id>0){
                \$.ajax({
                    url:\"/agenda/\"+id+\"/agendadores\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#agendadores\").html(data);
                    }
            
                });
            }else{
                \$(\"#agendadores\").html('');
            }
        }
        /*function getAbogados(status){
            if(status==5){
                \$.ajax({
                    url:\"{{path('panel_agendador_abogados',{'id':agenda.id})}}\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            else{
                \$.ajax({
                    url:\"{{path('panel_agendador_engestion',{'id':agenda.id})}}\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            
        }*/
       
        \$(document).ready(function(){
            console.log(\"paso\");
             \$.ajax({
                 url:\"/agenda/{{agenda.cuenta.id}}/agendadores\",
                 type: \"get\",
                 data: \"agendador={{agenda.agendador.id}}\",
                 dataType: \"html\",
                 cache: false,
                 contentType: false,
                 processData: false,
                 async: true,
                 success:function(data){
                     \$(\"#agendadores\").html(data);
                 }
         
             });
        });
    </script>

{% endblock %}", "nocontesta/new.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\nocontesta\\new.html.twig");
    }
}
