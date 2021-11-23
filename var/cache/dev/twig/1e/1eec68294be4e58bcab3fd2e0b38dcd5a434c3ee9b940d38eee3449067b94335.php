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

/* agenda/_form.html.twig */
class __TwigTemplate_c1597852925ace504218a3674de01cffdf439d819d1260d443caba417d77cddf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validarut()"]]);
        echo "
    

    <div class=\"row\">
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Nombre Cliente</small>
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nombreCliente", [], "any", false, false, false, 7), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Rut Cliente</small>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "rutCliente", [], "any", false, false, false, 11), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut"]]);
        echo "
        </div>
       
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Email Cliente</small>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "emailCliente", [], "any", false, false, false, 16), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Telefono Cliente</small>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "telefonoCliente", [], "any", false, false, false, 20), 'row', ["label" => false, "attr" => ["class" => "form-control", "required" => true]]);
        echo "
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Telefono Recado Cliente</small>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "telefonoRecadoCliente", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Ciudad Cliente</small>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "ciudadCliente", [], "any", false, false, false, 28), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Canal</small>
            <select class=\"form-control\" name=\"cboCanal\" required>
                <option value=\"\"></option>
                <option value=\"Email contacto\">Email contacto</option>
                <option value=\"Espontaneo\">Espontaneo</option>
                <option value=\"Referencia\">Referencia</option>
                <option value=\"Facebook propio\">Facebook propio</option>
                <option value=\"Carta\">Carta</option>
                <option value=\"Web de asistencia deudores\">Web de asistencia deudores</option>
                <option value=\"Web de cero dicom\">Web de cero dicom</option>
                <option value=\"Databot\">Databot</option>
            </select>
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Compañia</small>
            <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required>
                <option value=\"\"></option>
   
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 50
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </select>
        </div>
        <div class=\"col-sm-6 col-md-3\" id=\"agendadores\">
            
            
        </div>
    </div>
    <button class=\"btn btn-primary\">";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Cargar")) : ("Cargar")), "html", null, true);
        echo "</button>
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

<script>

    \$(\".format-rut\").rut();
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
                beforeSend: function(){
                    \$(\"#agendadores\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#agendadores\").html(data);
                }
        
            });
        }else{
            \$(\"#agendadores\").html('Sin Agendadores');
        }
        
        
    }
    
    function validarut(){

        if(\$(\".format-rut\").val()==\"\") return true;
        if(\$.validateRut(\$(\".format-rut\").val())) {
            return true;
        }
        alert(\"Rut no valido\");
        \$(\".format-rut\").focus();
        return false;
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agenda/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  136 => 59,  127 => 52,  116 => 50,  112 => 49,  88 => 28,  81 => 24,  74 => 20,  67 => 16,  59 => 11,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'onsubmit':'return validarut()'}}) }}
    

    <div class=\"row\">
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Nombre Cliente</small>
            {{form_row(form.nombreCliente,{'label':false,'attr':{'class':'form-control','required':true}})}}
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Rut Cliente</small>
            {{form_row(form.rutCliente,{'label':false,'attr':{'class':'form-control format-rut'}})}}
        </div>
       
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Email Cliente</small>
            {{form_row(form.emailCliente,{'label':false,'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Telefono Cliente</small>
            {{form_row(form.telefonoCliente,{'label':false,'attr':{'class':'form-control','required':true}})}}
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Telefono Recado Cliente</small>
            {{form_row(form.telefonoRecadoCliente,{'label':false,'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Ciudad Cliente</small>
            {{form_row(form.ciudadCliente,{'label':false,'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Canal</small>
            <select class=\"form-control\" name=\"cboCanal\" required>
                <option value=\"\"></option>
                <option value=\"Email contacto\">Email contacto</option>
                <option value=\"Espontaneo\">Espontaneo</option>
                <option value=\"Referencia\">Referencia</option>
                <option value=\"Facebook propio\">Facebook propio</option>
                <option value=\"Carta\">Carta</option>
                <option value=\"Web de asistencia deudores\">Web de asistencia deudores</option>
                <option value=\"Web de cero dicom\">Web de cero dicom</option>
                <option value=\"Databot\">Databot</option>
            </select>
        </div>
        <div class=\"col-sm-6 col-md-3\">
            <small class=\"text-muted\">Compañia</small>
            <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required>
                <option value=\"\"></option>
   
                {% for cuenta in cuentas %}
                    <option value=\"{{cuenta.id}}\">{{cuenta.nombre}}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"col-sm-6 col-md-3\" id=\"agendadores\">
            
            
        </div>
    </div>
    <button class=\"btn btn-primary\">{{ button_label|default('Cargar') }}</button>
{{ form_end(form) }}

<script>

    \$(\".format-rut\").rut();
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
                beforeSend: function(){
                    \$(\"#agendadores\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#agendadores\").html(data);
                }
        
            });
        }else{
            \$(\"#agendadores\").html('Sin Agendadores');
        }
        
        
    }
    
    function validarut(){

        if(\$(\".format-rut\").val()==\"\") return true;
        if(\$.validateRut(\$(\".format-rut\").val())) {
            return true;
        }
        alert(\"Rut no valido\");
        \$(\".format-rut\").focus();
        return false;
    }
</script>", "agenda/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\agenda\\_form.html.twig");
    }
}
