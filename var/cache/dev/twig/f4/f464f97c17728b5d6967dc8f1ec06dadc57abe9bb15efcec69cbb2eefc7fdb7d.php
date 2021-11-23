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

/* panel_abogado/no_contrata.html.twig */
class __TwigTemplate_e2d759dc2e51672bd31d54c32c224f5ce4a3ff4ef374a3dfa43a928c4c979432 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/no_contrata.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/no_contrata.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_no_contrata", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" method=\"post\" id=\"form-nocontrata\">
    <br>
    <small class=\"text-muted\">Observación</small>
    <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
    <input type=\"hidden\" name=\"hdNoContrata\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Finalizar</button>
</form>
<script>
    \$('#form-nocontrata').on('submit',function(){
        \$('button').attr(\"disabled\", true);
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_abogado/no_contrata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{path('panel_abogado_no_contrata',{'id':agenda.id})}}\" method=\"post\" id=\"form-nocontrata\">
    <br>
    <small class=\"text-muted\">Observación</small>
    <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
    <input type=\"hidden\" name=\"hdNoContrata\" value=\"{{status}}\">
    <button class=\"btn btn-danger\">Finalizar</button>
</form>
<script>
    \$('#form-nocontrata').on('submit',function(){
        \$('button').attr(\"disabled\", true);
    });
</script>", "panel_abogado/no_contrata.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_abogado\\no_contrata.html.twig");
    }
}
