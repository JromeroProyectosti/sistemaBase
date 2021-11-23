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

/* empresa/_form.html.twig */
class __TwigTemplate_3d9a6c1e5536d997eb855d7e09f70236f531b35759298bc2e8d4bde979458c5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/_form.html.twig"));

        // line 1
        echo "
        ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text_mute\">Nombre</small>
                   
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Rut</small>
                   
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "rut", [], "any", false, false, false, 13), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Rol</small>
                   
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "rol", [], "any", false, false, false, 19), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    
                </div>
                
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Logo</small>
                   
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "logo", [], "any", false, false, false, 26), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Fecha vigencia</small>
                   
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "fechaVigencia", [], "any", false, false, false, 32), 'row', ["label" => false, "attr" => ["class" => "form-control datetimepicker-input"]]);
        echo "
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\"> - </small>
                    
               
         
                </div>
            </div>
            <button class=\"btn btn-primary\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

            <script>
               \$('.datetimepicker-input').daterangepicker({
                    \"singleDatePicker\": true,
                    \"locale\": {
                        \"format\": \"YYYY-MM-DD\",
                    
                        \"applyLabel\": \"Apply\",
                        \"cancelLabel\": \"Cancel\",
                    }
                }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                
                });
        
            </script>
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "empresa/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  104 => 42,  91 => 32,  82 => 26,  72 => 19,  63 => 13,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <small class=\"text_mute\">Nombre</small>
                   
                    {{ form_row(form.nombre,{'label':false,'attr':{'class':'form-control'}})}}
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Rut</small>
                   
                    {{ form_row(form.rut,{'label':false,'attr':{'class':'form-control'}})}}
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Rol</small>
                   
                    {{ form_row(form.rol,{'label':false,'attr':{'class':'form-control'}})}}
                    
                </div>
                
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Logo</small>
                   
                    {{ form_row(form.logo,{'label':false,'attr':{'class':'form-control'}})}}
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\">Fecha vigencia</small>
                   
                    {{ form_row(form.fechaVigencia,{'label':false,'attr':{'class':'form-control datetimepicker-input'}})}}
                    
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <small class=\"text_mute\"> - </small>
                    
               
         
                </div>
            </div>
            <button class=\"btn btn-primary\">{{ button_label|default('Guardar') }}</button>

            <script>
               \$('.datetimepicker-input').daterangepicker({
                    \"singleDatePicker\": true,
                    \"locale\": {
                        \"format\": \"YYYY-MM-DD\",
                    
                        \"applyLabel\": \"Apply\",
                        \"cancelLabel\": \"Cancel\",
                    }
                }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                
                });
        
            </script>
        {{ form_end(form) }}
   ", "empresa/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\empresa\\_form.html.twig");
    }
}
