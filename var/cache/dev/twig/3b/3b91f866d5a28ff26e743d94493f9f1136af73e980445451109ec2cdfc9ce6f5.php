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

/* panel_agendador/engestion.html.twig */
class __TwigTemplate_804a9401f1cc4757e6f40f3df0177b9bc66afcceb58346dfbeda3a6a7ee26c04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/engestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/engestion.html.twig"));

        // line 1
        echo "
    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        <textarea name=\"txtObservacion\" class=\"form-control\" cols=\"30\" rows=\"5\" required></textarea>
    </div>


    <button class=\"btn btn-primary\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 8, $this->source); })()), "Gestionar")) : ("Gestionar")), "html", null, true);
        echo "</button>

<script>
    \$('#datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"timePicker\":true,
        \"timePicker24Hour\": true,
        \"drops\": \"up\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD HH:mm:ss\",
        
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
        return "panel_agendador/engestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div class=\"col-sm-12 col-md-12\">
        <small class=\"text-muted\">Observación</small><br>
        <textarea name=\"txtObservacion\" class=\"form-control\" cols=\"30\" rows=\"5\" required></textarea>
    </div>


    <button class=\"btn btn-primary\">{{ button_label|default('Gestionar') }}</button>

<script>
    \$('#datepicker').daterangepicker({
        \"singleDatePicker\": true,
        \"timePicker\":true,
        \"timePicker24Hour\": true,
        \"drops\": \"up\",
        \"locale\": {
            \"format\": \"YYYY-MM-DD HH:mm:ss\",
        
            \"applyLabel\": \"Apply\",
            \"cancelLabel\": \"Cancel\",
        }
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    
    });
</script>", "panel_agendador/engestion.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\engestion.html.twig");
    }
}
