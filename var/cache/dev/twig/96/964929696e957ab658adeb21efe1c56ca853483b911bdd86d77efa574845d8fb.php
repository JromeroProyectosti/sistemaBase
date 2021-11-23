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

/* cobranza/_form.html.twig */
class __TwigTemplate_5e823ba96cf2a921c37912b17814a793f338c5bfbfcd6db9773652f3f3177a63 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "dropzone", "id" => "my-awesome-dropzone"]]);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12  col-md-8\">

            <div class=\"card\">
                <div class=\"card-header\">
                    <h1>Folio: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"card-body table-responsive pad\">
                
            
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Fecha Ingreso (*)</small><br>
                            <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cobranza"]) || array_key_exists("cobranza", $context) ? $context["cobranza"] : (function () { throw new RuntimeError('Variable "cobranza" does not exist.', 15, $this->source); })()), "fechaHora", [], "any", false, false, false, 15), "Y-m-d H:i"), "html", null, true);
        echo "</p>
                            
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Función Cobranza (*)</small>
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "funcion", [], "any", false, false, false, 20), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                                    
                                    
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Respuesta (*)</small>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "respuesta", [], "any", false, false, false, 26), 'row', ["label" => false, "attr" => ["class" => "form-control cbo-respuesta"]]);
        echo "
                        
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <div id=\"compromiso\">
                                <small class=\"text-muted\">Fecha Compromiso (*)</small>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "fechaCompromiso", [], "any", false, false, false, 32), 'row', ["label" => false, "attr" => ["class" => "form-control datetimepicker-compromiso"]]);
        echo "
                            </div>
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\">
                            <small class=\"text-muted\">Observación</small>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "observacion", [], "any", false, false, false, 38), 'row', ["label" => false, "attr" => ["class" => "form-control "]]);
        echo "
                            
                        </div>
                    </div> 
                </div>
                <div class=\"card-footer\">
                    
                    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 45, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
               
                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            
            
        </div>
    </div>   
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "

<script>

    \$('.datetimepicker-compromiso').daterangepicker({
        \"autoUpdateInput\": false,
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });

    \$('.datetimepicker-compromiso').on('apply.daterangepicker', function(ev, picker) {
        \$(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
  
    \$('.datetimepicker-compromiso').on('cancel.daterangepicker', function(ev, picker) {
        \$(this).val('');
    });
    \$('.datetimepicker-ingreso').daterangepicker({
        \"timePicker\": true,
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD hh:mm A\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });  
    \$(\"#compromiso\").hide();
    \$(\".datetimepicker-compromiso\").prop('required',false);
    
    \$(\".cbo-respuesta\").on('change',function(){
        

        \$.ajax({
            method: \"POST\",
            url: \"/cobranza/\"+\$(this).val()+\"/compromiso\",
            data: { name: \"John\", location: \"Boston\" }
          })
            .done(function( msg ) {
              if(msg==\"true\"){
                \$(\"#compromiso\").show();
                \$(\".datetimepicker-compromiso\").prop('required',true);
              }else{
                \$(\"#compromiso\").hide();
                \$(\".datetimepicker-compromiso\").prop('required',false);
                \$(\".datetimepicker-compromiso\").val('');
              }
            });
    })
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  108 => 45,  98 => 38,  89 => 32,  80 => 26,  71 => 20,  63 => 15,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{attr:{'class':'dropzone','id':'my-awesome-dropzone'}}) }}
    <div class=\"row\">
        <div class=\"col-sm-12  col-md-8\">

            <div class=\"card\">
                <div class=\"card-header\">
                    <h1>Folio: {{contrato.id}}</h1>
                </div>
                <div class=\"card-body table-responsive pad\">
                
            
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Fecha Ingreso (*)</small><br>
                            <p>{{cobranza.fechaHora|date(\"Y-m-d H:i\")}}</p>
                            
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Función Cobranza (*)</small>
                            {{form_row(form.funcion,{'label':false,'attr':{'class':'form-control'}})}}
                                    
                                    
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <small class=\"text-muted\">Respuesta (*)</small>
                            {{form_row(form.respuesta,{'label':false,'attr':{'class':'form-control cbo-respuesta'}})}}
                        
                        </div>
                        <div class=\"col-sm-12 col-md-3\">
                            <div id=\"compromiso\">
                                <small class=\"text-muted\">Fecha Compromiso (*)</small>
                                {{form_row(form.fechaCompromiso,{'label':false,'attr':{'class':'form-control datetimepicker-compromiso'}})}}
                            </div>
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\">
                            <small class=\"text-muted\">Observación</small>
                            {{form_row(form.observacion,{'label':false,'attr':{'class':'form-control '}})}}
                            
                        </div>
                    </div> 
                </div>
                <div class=\"card-footer\">
                    
                    <button class=\"btn btn-primary\" type=\"submit\">{{ button_label|default('Guardar') }}</button>
               
                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            
            
        </div>
    </div>   
    {{ form_end(form) }}

<script>

    \$('.datetimepicker-compromiso').daterangepicker({
        \"autoUpdateInput\": false,
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });

    \$('.datetimepicker-compromiso').on('apply.daterangepicker', function(ev, picker) {
        \$(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
  
    \$('.datetimepicker-compromiso').on('cancel.daterangepicker', function(ev, picker) {
        \$(this).val('');
    });
    \$('.datetimepicker-ingreso').daterangepicker({
        \"timePicker\": true,
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD hh:mm A\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });  
    \$(\"#compromiso\").hide();
    \$(\".datetimepicker-compromiso\").prop('required',false);
    
    \$(\".cbo-respuesta\").on('change',function(){
        

        \$.ajax({
            method: \"POST\",
            url: \"/cobranza/\"+\$(this).val()+\"/compromiso\",
            data: { name: \"John\", location: \"Boston\" }
          })
            .done(function( msg ) {
              if(msg==\"true\"){
                \$(\"#compromiso\").show();
                \$(\".datetimepicker-compromiso\").prop('required',true);
              }else{
                \$(\"#compromiso\").hide();
                \$(\".datetimepicker-compromiso\").prop('required',false);
                \$(\".datetimepicker-compromiso\").val('');
              }
            });
    })
</script>", "cobranza/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\_form.html.twig");
    }
}
