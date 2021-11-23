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
class __TwigTemplate_d053f2ad716c85f9882987bdd81d45ad2828732371a13a9cbb5efd7c35e56c2a extends Template
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
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contrato_rols"] ?? null));
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
                if ((0 === twig_compare(($context["mode"] ?? null), "edit"))) {
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
        return array (  102 => 32,  91 => 25,  85 => 23,  82 => 22,  75 => 19,  72 => 18,  70 => 17,  63 => 13,  57 => 10,  51 => 7,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrato/contratoRoles.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\contratoRoles.html.twig");
    }
}
