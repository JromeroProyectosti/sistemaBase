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

/* importacion/newPer.html.twig */
class __TwigTemplate_3cac08f98ca5e78c59fa33bb0b67598daf0f5bce70b0ef71fc59c8675948b991 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "importacion/newPer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "importacion/newPer.html.twig"));

        // line 1
        echo "<div class=\"card\">
    <div class=\"card-header\">Carga Personalizada</div>
    <div class=\"card-body\">
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Compañia</small>
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "cuenta", [], "any", false, false, false, 8), 'row', ["label" => false, "attr" => ["class" => "form-control"], "required" => true]);
        echo "

            </div>
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Archivo</small><br>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13), 'row', ["label" => false, "attr" => ["accept" => ".csv"]]);
        echo "
               
            </div>
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Ver Ejemplo</small><br>
                <h1><a href=\"/build/csv/samples/sample_personalizado.csv\"><i class=\"fas fa-file-csv\"></i></a></h1>
            </div>
        </div>
       
            
            <button class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Importar")) : ("Importar")), "html", null, true);
        echo "</button>
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "importacion/newPer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 23,  63 => 13,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-header\">Carga Personalizada</div>
    <div class=\"card-body\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Compañia</small>
                {{ form_row(form.cuenta,{'label':false,'attr':{'class':'form-control'},'required':true}) }}

            </div>
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Archivo</small><br>
                {{ form_row(form.url,{'label':false,'attr':{'accept':'.csv'}}) }}
               
            </div>
            <div class=\"col-sm-6 col-md-3\">
                <small class=\"text-muted\">Ver Ejemplo</small><br>
                <h1><a href=\"/build/csv/samples/sample_personalizado.csv\"><i class=\"fas fa-file-csv\"></i></a></h1>
            </div>
        </div>
       
            
            <button class=\"btn btn-primary\">{{ button_label|default('Importar') }}</button>
        {{ form_end(form) }}
    </div>
</div>
", "importacion/newPer.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\importacion\\newPer.html.twig");
    }
}
