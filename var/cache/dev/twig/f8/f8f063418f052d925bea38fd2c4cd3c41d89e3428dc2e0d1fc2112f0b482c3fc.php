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

/* pago/_formSBoucher.html.twig */
class __TwigTemplate_7798c69cbe8c308d5f586b2f5b5857c80e11a8fd742b7663c4b340dc8847d6d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/_formSBoucher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/_formSBoucher.html.twig"));

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
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Monto Pagado (*)</small>
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "monto", [], "any", false, false, false, 15), 'row', ["label" => false, "attr" => ["class" => "form-control monto"]]);
        echo "
                            <strong><label id=\"m-monto\"></label></strong>
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Fecha Comprobante (*)</small>
                            <input class=\"form-control datetimepicker-pago\" name=\"fechaPago\">
                                    
                                    
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Fecha Ingreso Comprobante</small>
                            <br>
                            ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">N° Comprobante</small>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "ncomprobante", [], "any", false, false, false, 31), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">N° Boleta</small>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "boleta", [], "any", false, false, false, 35), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Tipo Deposito (*)</small>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pagoTipo", [], "any", false, false, false, 39), 'row', ["label" => false, "attr" => ["class" => "form-control cboTipo", "style" => "display:none"]]);
        echo "
                     
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 41, $this->source); })()), "pagoTipo", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Cta. Cte. (*)</small>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "cuentaCorriente", [], "any", false, false, false, 45), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Canal (*)</small>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "pagoCanal", [], "any", false, false, false, 49), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-sm-12 col-md-12\">
                            <small class=\"text-muted\">Observación</small>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "observacion", [], "any", false, false, false, 53), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "comprobante", [], "any", false, false, false, 54), 'row', ["label" => false, "attr" => ["class" => "form-control comprobante", "style" => "display:none"]]);
        echo "
                            
                        </div>
                    </div> 
                </div>
                ";
        // line 59
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 59, $this->source); })()), "comprobante", [], "any", false, false, false, 59))) {
            // line 60
            echo "                
            
                    <div class=\"card\">
                        <div class=\"card-body table-responsive pad\">
                            ";
            // line 64
            if ((0 === twig_compare((isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 64, $this->source); })()), 2))) {
                // line 65
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 65, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["img_pagos"]) || array_key_exists("img_pagos", $context) ? $context["img_pagos"] : (function () { throw new RuntimeError('Variable "img_pagos" does not exist.', 65, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 65, $this->source); })()), "comprobante", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                            ";
            }
            // line 67
            echo "                        </div>
                    </div>
                ";
        }
        // line 70
        echo "                <div class=\"card-footer\">
                    ";
        // line 71
        if (((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 71, $this->source); })()), "isFinalizado", [], "any", false, false, false, 71)) ||  !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 71, $this->source); })()), "isFinalizado", [], "any", false, false, false, 71))) {
            // line 72
            echo "                    <button class=\"btn btn-primary btn-guardar\" type=\"submit\" >";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 72, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
            echo "</button>
                    ";
        }
        // line 74
        echo "                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            <div class=\"card\">
                <div class=\"card-body table-responsive pad\">
                    
                </div>
            </div>
            
        </div>
    </div>   
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "

<script>

    \$('.datetimepicker-registro').daterangepicker({
        
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });
    \$('.datetimepicker-pago').daterangepicker({
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
    
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pago/_formSBoucher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 87,  171 => 74,  165 => 72,  163 => 71,  160 => 70,  155 => 67,  147 => 65,  145 => 64,  139 => 60,  137 => 59,  129 => 54,  125 => 53,  118 => 49,  111 => 45,  104 => 41,  99 => 39,  92 => 35,  85 => 31,  78 => 27,  63 => 15,  52 => 7,  43 => 1,);
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
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Monto Pagado (*)</small>
                            {{form_row(form.monto,{'label':false,'attr':{'class':'form-control monto'}})}}
                            <strong><label id=\"m-monto\"></label></strong>
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Fecha Comprobante (*)</small>
                            <input class=\"form-control datetimepicker-pago\" name=\"fechaPago\">
                                    
                                    
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Fecha Ingreso Comprobante</small>
                            <br>
                            {{\"now\"|date('Y-m-d')}}
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">N° Comprobante</small>
                            {{form_row(form.ncomprobante,{'label':false,'attr':{'class':'form-control'}})}}
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">N° Boleta</small>
                            {{form_row(form.boleta,{'label':false,'attr':{'class':'form-control'}})}}
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Tipo Deposito (*)</small>
                            {{form_row(form.pagoTipo,{'label':false,'attr':{'class':'form-control cboTipo','style':'display:none'}})}}
                     
                            <p>{{pago.pagoTipo}}</p>
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Cta. Cte. (*)</small>
                            {{form_row(form.cuentaCorriente,{'label':false,'attr':{'class':'form-control'}})}}
                        </div>
                        <div class=\"col-sm-12 col-md-4\">
                            <small class=\"text-muted\">Canal (*)</small>
                            {{form_row(form.pagoCanal,{'label':false,'attr':{'class':'form-control'}})}}
                        </div>
                        <div class=\"col-sm-12 col-md-12\">
                            <small class=\"text-muted\">Observación</small>
                            {{form_row(form.observacion,{'label':false,'attr':{'class':'form-control'}})}}
                            {{form_row(form.comprobante,{'label':false,'attr':{'class':'form-control comprobante','style':'display:none'}})}}
                            
                        </div>
                    </div> 
                </div>
                {% if pago.comprobante is not empty %}
                
            
                    <div class=\"card\">
                        <div class=\"card-body table-responsive pad\">
                            {% if etapa==2 %}
                            <img src=\"{{url_web}}{{img_pagos}}{{pago.comprobante}}\">
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
                <div class=\"card-footer\">
                    {% if contrato.isFinalizado is null or not contrato.isFinalizado %}
                    <button class=\"btn btn-primary btn-guardar\" type=\"submit\" >{{ button_label|default('Guardar') }}</button>
                    {% endif %}
                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            <div class=\"card\">
                <div class=\"card-body table-responsive pad\">
                    
                </div>
            </div>
            
        </div>
    </div>   
    {{ form_end(form) }}

<script>

    \$('.datetimepicker-registro').daterangepicker({
        
        \"singleDatePicker\": true,
        \"locale\": {
            \"format\": \"YYYY-MM-DD\",

            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');

    });
    \$('.datetimepicker-pago').daterangepicker({
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
    
</script>", "pago/_formSBoucher.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pago\\_formSBoucher.html.twig");
    }
}
