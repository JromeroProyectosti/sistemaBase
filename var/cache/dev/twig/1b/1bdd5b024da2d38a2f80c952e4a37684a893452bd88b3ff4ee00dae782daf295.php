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

/* contrato/contratoRoles.html.twig */
class __TwigTemplate_edc645b3c282357f40e601270ecc0406bb9fae4ebb3f47d0c23c62f95d95f424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/contratoRoles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/contratoRoles.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrato_rols"]) || array_key_exists("contrato_rols", $context) ? $context["contrato_rols"] : (function () { throw new RuntimeError('Variable "contrato_rols" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrato_rol"]) {
            // line 3
            echo "
<div class=\"row\">
            
    <div class=\"col-sm-12 col-md-3 border-1\">
        ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "nombreRol", [], "any", false, false, false, 7), "html", null, true);
            echo "
    </div>    
    <div class=\"col-sm-12 col-md-3 border-1\">
       ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "institucionAcreedora", [], "any", false, false, false, 10), "html", null, true);
            echo "
    </div>   
    <div class=\"col-sm-12 col-md-3 border-1\">
        ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "juzgado", [], "any", false, false, false, 13), "html", null, true);
            echo "
    </div>   
    <div class=\"col-sm-12 col-md-1\">
        
       ";
            // line 17
            if (array_key_exists("mode", $context)) {
                // line 18
                echo "           ";
                if ((0 === twig_compare((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 18, $this->source); })()), "edit"))) {
                    // line 19
                    echo "           <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "id", [], "any", false, false, false, 19), "html", null, true);
                    echo ")\" ><i class=\"fas fa-minus\"></i></button>

           ";
                }
                // line 22
                echo "       ";
            } else {
                // line 23
                echo "            <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrato_rol"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo ")\" ><i class=\"fas fa-minus\"></i></button>
        ";
            }
            // line 25
            echo "    </div>
    

</div>

<input type=\"hidden\" id=\"Institucion\" value=\"1\">
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "<input type=\"hidden\" id=\"Institucion\" value=\"0\">
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
        return "contrato/contratoRoles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  97 => 25,  91 => 23,  88 => 22,  81 => 19,  78 => 18,  76 => 17,  69 => 13,  63 => 10,  57 => 7,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for contrato_rol in contrato_rols %}

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
        
       {% if mode is defined %}
           {% if mode == 'edit' %}
           <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol({{contrato_rol.id}})\" ><i class=\"fas fa-minus\"></i></button>

           {% endif %}
       {% else %}
            <button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:eliminarRol({{contrato_rol.id}})\" ><i class=\"fas fa-minus\"></i></button>
        {% endif %}
    </div>
    

</div>

<input type=\"hidden\" id=\"Institucion\" value=\"1\">
{% else %}
<input type=\"hidden\" id=\"Institucion\" value=\"0\">
{% endfor %}", "contrato/contratoRoles.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\contratoRoles.html.twig");
    }
}
