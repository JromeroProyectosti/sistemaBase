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

/* pago/_form.html.twig */
class __TwigTemplate_558699d0965b4aa438cdaaaf5333ad8adf94a721c0d1338f2689cd2221ad5795 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/_form.html.twig"));

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
                
                <div class=\"card-footer\">
                    ";
        // line 61
        if (((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 61, $this->source); })()), "isFinalizado", [], "any", false, false, false, 61)) ||  !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 61, $this->source); })()), "isFinalizado", [], "any", false, false, false, 61))) {
            // line 62
            echo "                    <div class=\"row\">
                        <div class=\"col-2\">
                        <button class=\"btn btn-primary btn-guardar\" type=\"submit\" >";
            // line 64
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
            echo "</button>
                        </div>
                        <div class=\"col-10\">
                            <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">
                                Debe subir una imagen para poder ingresar pago.
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 73
        echo "                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            <div class=\"card\">
                <div class=\"card-body table-responsive pad\">
                    <div class=\"dz-default dz-message\">

                        <button class=\"dz-button\" type=\"button\">
                        <div class=\"dropzone-previews\">
                            Arrastra el comprobante aqui o puedes hacer click <strong>aquí</strong> y busca la imagen.
                            <p>Solo acepta <strong>.jpg, .gif y png</strong></p>
                        </div>
                    </button>
                    </div>
                </div>
            </div>
            ";
        // line 91
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 91, $this->source); })()), "comprobante", [], "any", false, false, false, 91))) {
            // line 92
            echo "                
            
                    <div class=\"card\">
                        <div class=\"card-body table-responsive pad\">
                            ";
            // line 96
            if ((0 === twig_compare((isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 96, $this->source); })()), 2))) {
                // line 97
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 97, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["img_pagos"]) || array_key_exists("img_pagos", $context) ? $context["img_pagos"] : (function () { throw new RuntimeError('Variable "img_pagos" does not exist.', 97, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 97, $this->source); })()), "comprobante", [], "any", false, false, false, 97), "html", null, true);
                echo "\">
                            ";
            }
            // line 99
            echo "                        </div>
                    </div>
                ";
        }
        // line 102
        echo "        </div>
    </div>   
    ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "

<script>

    
    \$('.monto').change(function(){

        \$(\"#m-monto\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
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
   
    ";
        // line 140
        if ((0 === twig_compare((isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 140, $this->source); })()), 1))) {
            // line 141
            echo "    \$(\".btn-guardar\").prop(\"disabled\",true);
    \$(\".alert-danger\").show();
    ";
        }
        // line 144
        echo "
    var newName;
    Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
        url: \"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_upload");
        echo "\",
        // The configuration we've talked about above
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFiles: 1,
        previewsContainer: \".dropzone-previews\",
        renameFile: function (file) {
            newName = new Date().getTime() + '_' + file.name;

            return newName;
        },
        // The setting up of the dropzone
        init: function() {
            var myDropzone = this;

            // First change the button to actually tell Dropzone to process the queue.
            this.element.querySelector(\"button[type=submit]\").addEventListener(\"click\", function(e) {
            // Make sure that the form isn't actually being sent.
                ";
        // line 166
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pago"]) || array_key_exists("pago", $context) ? $context["pago"] : (function () { throw new RuntimeError('Variable "pago" does not exist.', 166, $this->source); })()), "comprobante", [], "any", false, false, false, 166))) {
            // line 167
            echo "                    if(newName==null){
                        \$(\"#my-awesome-dropzone\").submit();
                        console.log(\"paso 1\");
                    }else{
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                        console.log(\"paso 2\");
                    }
                ";
        } else {
            // line 177
            echo "                    \$.ajax({
                        method: \"POST\",
                        url: \"/pago/\"+\$('cboTipo').val()+\"/isboucher\",
                    })
                    .done(function( msg ) {
                        console.log(msg['isBoucher']);
                        /*if(msg['isBoucher']){
                            e.preventDefault();
                            e.stopPropagation();
                            myDropzone.processQueue();
                        }else{
                            \$(\"#my-awesome-dropzone\").submit();
                        }*/
                    });
                   
                    console.log(\"paso 3 \");
                ";
        }
        // line 194
        echo "            });

            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on(\"sendingmultiple\", function() {
            // Gets triggered when the form is actually being sent.
            // Hide the success button or the complete form.

            });
            this.on(\"successmultiple\", function(files, response) {
            // Gets triggered when the files have successfully been sent.
            // Redirect user or notify of success
        
            });
            this.on(\"errormultiple\", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                alert(\"Error, la imagen no se puede subir. Intenta bajar el peso de esta\");
            });
            
            this.on(\"success\", function(file, serverResponse) {
                // Called after the file successfully uploaded.
                console.log(serverResponse);
                \$(\"#my-awesome-dropzone\").submit();
            });
            this.on(\"addedfile\", function(file) {

                // Create the remove button
                \$(\".comprobante\").val(newName);
                var removeButton = Dropzone.createElement(\"<button class='btn btn-danger'>Eliminar</button>\");
                
                ";
        // line 225
        if ((0 === twig_compare((isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 225, $this->source); })()), 1))) {
            // line 226
            echo "                \$(\".btn-guardar\").prop(\"disabled\",false);
                \$(\".alert-danger\").hide();
                ";
        }
        // line 229
        echo "                // Capture the Dropzone instance as closure.
                var _this = this;

                // Listen to the click event
                removeButton.addEventListener(\"click\", function(e) {
                    // Make sure the button click doesn't submit the form:
                    e.preventDefault();
                    e.stopPropagation();

                    // Remove the file preview.
                    _this.removeFile(file);
                    \$(\".comprobante\").val('');
                    ";
        // line 241
        if ((0 === twig_compare((isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 241, $this->source); })()), 1))) {
            // line 242
            echo "                    \$(\".btn-guardar\").prop(\"disabled\",true);
                    \$(\".alert-danger\").show();
                    ";
        }
        // line 245
        echo "                    // If you want to the delete the file on the server as well,
                    // you can do the AJAX request here.
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            });


        }

    }

 
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pago/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 245,  366 => 242,  364 => 241,  350 => 229,  345 => 226,  343 => 225,  310 => 194,  291 => 177,  279 => 167,  277 => 166,  255 => 147,  250 => 144,  245 => 141,  243 => 140,  204 => 104,  200 => 102,  195 => 99,  187 => 97,  185 => 96,  179 => 92,  177 => 91,  157 => 73,  145 => 64,  141 => 62,  139 => 61,  129 => 54,  125 => 53,  118 => 49,  111 => 45,  104 => 41,  99 => 39,  92 => 35,  85 => 31,  78 => 27,  63 => 15,  52 => 7,  43 => 1,);
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
                
                <div class=\"card-footer\">
                    {% if contrato.isFinalizado is null or not contrato.isFinalizado %}
                    <div class=\"row\">
                        <div class=\"col-2\">
                        <button class=\"btn btn-primary btn-guardar\" type=\"submit\" >{{ button_label|default('Guardar') }}</button>
                        </div>
                        <div class=\"col-10\">
                            <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">
                                Debe subir una imagen para poder ingresar pago.
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
            
        </div>
        <div class=\"col-sm-12  col-md-4\">
            <div class=\"card\">
                <div class=\"card-body table-responsive pad\">
                    <div class=\"dz-default dz-message\">

                        <button class=\"dz-button\" type=\"button\">
                        <div class=\"dropzone-previews\">
                            Arrastra el comprobante aqui o puedes hacer click <strong>aquí</strong> y busca la imagen.
                            <p>Solo acepta <strong>.jpg, .gif y png</strong></p>
                        </div>
                    </button>
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
        </div>
    </div>   
    {{ form_end(form) }}

<script>

    
    \$('.monto').change(function(){

        \$(\"#m-monto\").html(\$.number( \$(this).val(), 0, ',', '.' ));
    });
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
   
    {% if etapa==1 %}
    \$(\".btn-guardar\").prop(\"disabled\",true);
    \$(\".alert-danger\").show();
    {% endif %}

    var newName;
    Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
        url: \"{{path('pago_upload')}}\",
        // The configuration we've talked about above
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFiles: 1,
        previewsContainer: \".dropzone-previews\",
        renameFile: function (file) {
            newName = new Date().getTime() + '_' + file.name;

            return newName;
        },
        // The setting up of the dropzone
        init: function() {
            var myDropzone = this;

            // First change the button to actually tell Dropzone to process the queue.
            this.element.querySelector(\"button[type=submit]\").addEventListener(\"click\", function(e) {
            // Make sure that the form isn't actually being sent.
                {% if pago.comprobante is not empty %}
                    if(newName==null){
                        \$(\"#my-awesome-dropzone\").submit();
                        console.log(\"paso 1\");
                    }else{
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                        console.log(\"paso 2\");
                    }
                {% else %}
                    \$.ajax({
                        method: \"POST\",
                        url: \"/pago/\"+\$('cboTipo').val()+\"/isboucher\",
                    })
                    .done(function( msg ) {
                        console.log(msg['isBoucher']);
                        /*if(msg['isBoucher']){
                            e.preventDefault();
                            e.stopPropagation();
                            myDropzone.processQueue();
                        }else{
                            \$(\"#my-awesome-dropzone\").submit();
                        }*/
                    });
                   
                    console.log(\"paso 3 \");
                {% endif %}
            });

            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on(\"sendingmultiple\", function() {
            // Gets triggered when the form is actually being sent.
            // Hide the success button or the complete form.

            });
            this.on(\"successmultiple\", function(files, response) {
            // Gets triggered when the files have successfully been sent.
            // Redirect user or notify of success
        
            });
            this.on(\"errormultiple\", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                alert(\"Error, la imagen no se puede subir. Intenta bajar el peso de esta\");
            });
            
            this.on(\"success\", function(file, serverResponse) {
                // Called after the file successfully uploaded.
                console.log(serverResponse);
                \$(\"#my-awesome-dropzone\").submit();
            });
            this.on(\"addedfile\", function(file) {

                // Create the remove button
                \$(\".comprobante\").val(newName);
                var removeButton = Dropzone.createElement(\"<button class='btn btn-danger'>Eliminar</button>\");
                
                {% if etapa==1 %}
                \$(\".btn-guardar\").prop(\"disabled\",false);
                \$(\".alert-danger\").hide();
                {% endif %}
                // Capture the Dropzone instance as closure.
                var _this = this;

                // Listen to the click event
                removeButton.addEventListener(\"click\", function(e) {
                    // Make sure the button click doesn't submit the form:
                    e.preventDefault();
                    e.stopPropagation();

                    // Remove the file preview.
                    _this.removeFile(file);
                    \$(\".comprobante\").val('');
                    {% if etapa==1 %}
                    \$(\".btn-guardar\").prop(\"disabled\",true);
                    \$(\".alert-danger\").show();
                    {% endif %}
                    // If you want to the delete the file on the server as well,
                    // you can do the AJAX request here.
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            });


        }

    }

 
</script>", "pago/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pago\\_form.html.twig");
    }
}
