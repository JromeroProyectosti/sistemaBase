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

/* panel_agendador/reasignar.html.twig */
class __TwigTemplate_4ea5dfabb1333093d60b30e7fb34d5eaf6ae82892d644e42f03befb8774b419c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/reasignar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/reasignar.html.twig"));

        // line 1
        echo "<div class=\"row\">
                    
    <div class=\"col-sm-12 col-md-9\">
        <small class=\"text-muted\">Observación</small>
        <textarea name=\"txtObservacion\" cols=\"10\" rows=\"3\" class=\"form-control\"></textarea>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-9 col-md-4\">
        <small class=\"text-muted\">Compañia</small>
        <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required disabled>
            <option value=\"\"></option>

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 15
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
                ";
            // line 16
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 16, $this->source); })()), "cuenta", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)))) {
                // line 17
                echo "                selected
                ";
            }
            // line 19
            echo "                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 19), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>
    </div>
    <div class=\"col-sm-6 col-md-5\" id=\"agendadores\">


    </div>
    
</div>
<div class=\"col-sm-12 col-md-12\">
    <button class=\"btn btn-primary\">Reasignar</button>
</div>

<script>
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
                    \$(\"#agendadores\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                    
                },
                success:function(data){
                    \$(\"#agendadores\").html(data);
                }
        
            });
        }else{
            \$(\"#agendadores\").html('');
        }
    
    }
    \$(document).ready(function(){
        console.log(\"paso\");
         \$.ajax({
             url:\"/agenda/";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 64, $this->source); })()), "cuenta", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "/agendadores\",
             type: \"get\",
             data: \"agendador=";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 66, $this->source); })()), "agendador", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
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
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_agendador/reasignar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 66,  127 => 64,  82 => 21,  73 => 19,  69 => 17,  67 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
                    
    <div class=\"col-sm-12 col-md-9\">
        <small class=\"text-muted\">Observación</small>
        <textarea name=\"txtObservacion\" cols=\"10\" rows=\"3\" class=\"form-control\"></textarea>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-9 col-md-4\">
        <small class=\"text-muted\">Compañia</small>
        <select name=\"cboCuenta\" class=\"form-control\" onchange=\"javascript:agendadores(this.value)\" required disabled>
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
    <div class=\"col-sm-6 col-md-5\" id=\"agendadores\">


    </div>
    
</div>
<div class=\"col-sm-12 col-md-12\">
    <button class=\"btn btn-primary\">Reasignar</button>
</div>

<script>
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
                    \$(\"#agendadores\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i></div>');
                    
                },
                success:function(data){
                    \$(\"#agendadores\").html(data);
                }
        
            });
        }else{
            \$(\"#agendadores\").html('');
        }
    
    }
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
</script>", "panel_agendador/reasignar.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\reasignar.html.twig");
    }
}
