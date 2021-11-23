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

/* panel_abogado/contratoRoles.html.twig */
class __TwigTemplate_b7fe02fbb5b7a54dffe9b906f53b62cb87eb993e99b1bd9c6ab203ffd93d5b49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/contratoRoles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/contratoRoles.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrato_rols"]) || array_key_exists("contrato_rols", $context) ? $context["contrato_rols"] : (function () { throw new RuntimeError('Variable "contrato_rols" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato_rol"]) {
            // line 2
            echo "
    <div class=\"row\">
                
        <div class=\"col-sm-12 col-md-3 border-1\">
            ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "nombreRol", [], "any", false, false, false, 6), "html", null, true);
            echo "
        </div>    
        <div class=\"col-sm-12 col-md-3 border-1\">
           ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "institucionAcreedora", [], "any", false, false, false, 9), "html", null, true);
            echo "
        </div>   
        <div class=\"col-sm-12 col-md-3 border-1\">
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "juzgado", [], "any", false, false, false, 12), "html", null, true);
            echo "
        </div>   
        <div class=\"col-sm-12 col-md-1\">
            
            
            <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol(";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo ")\" ><i class=\"fas fa-minus\"></i></button>
            
        </div>
        

    </div>
    <input type=\"hidden\" id=\"Institucion\" value=\"1\">
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "    <input type=\"hidden\" id=\"Institucion\" value=\"0\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato_rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel_abogado/contratoRoles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  74 => 17,  66 => 12,  60 => 9,  54 => 6,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for contrato_rol in contrato_rols %}

    <div class=\"row\">
                
        <div class=\"col-sm-12 col-md-3 border-1\">
            {{contrato_rol.nombreRol}}
        </div>    
        <div class=\"col-sm-12 col-md-3 border-1\">
           {{contrato_rol.institucionAcreedora}}
        </div>   
        <div class=\"col-sm-12 col-md-3 border-1\">
            {{contrato_rol.juzgado}}
        </div>   
        <div class=\"col-sm-12 col-md-1\">
            
            
            <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol({{contrato_rol.id}})\" ><i class=\"fas fa-minus\"></i></button>
            
        </div>
        

    </div>
    <input type=\"hidden\" id=\"Institucion\" value=\"1\">
    {% else %}
    <input type=\"hidden\" id=\"Institucion\" value=\"0\">
{% endfor %}", "panel_abogado/contratoRoles.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_abogado\\contratoRoles.html.twig");
    }
}
