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

/* desconoce/_ratifica.html.twig */
class __TwigTemplate_f56f7eb8dc44828402f000ef0cbcba05679377dfb114b51dcb6be44f0e3811ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desconoce/_ratifica.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desconoce/_ratifica.html.twig"));

        // line 1
        echo "<p>
    
    <button class=\"btn btn-danger btn-desiste\" type=\"button\">
        Confirma
    </button>
    
    <button class=\"btn btn-success btn-desconoce\" type=\"button\">
        Reconsidera
    </button>
  </p>
  <div id=\"msg\">

  </div>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
      
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desconoce_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "status" => "15"]), "html", null, true);
        echo "\" method=\"post\">
          <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
          <button class=\"btn btn-primary\">Gestionar</button>
      </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desconoce_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "status" => "14"]), "html", null, true);
        echo "\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <script>
    ";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 32, $this->source); })()), "agenda", [], "any", false, false, false, 32), "status", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), 13))) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["multas"]) || array_key_exists("multas", $context) ? $context["multas"] : (function () { throw new RuntimeError('Variable "multas" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["multa"]) {
                // line 34
                echo "            ";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["multa"], "monto", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, $context["multa"], "pagado", [], "any", false, false, false, 34)))) {
                    // line 35
                    echo "
            \$(\".btn-desiste\").addClass(\"disabled\");
            \$(\".btn-desiste\").removeClass(\"btn-desiste\");
            \$(\"#msg\").html('<div class=\"alert alert-danger\" role=\"alert\">Debe multa de \$";
                    // line 38
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["multa"], "monto", [], "any", false, false, false, 38), 0, ",", "."), "html", null, true);
                    echo " </div>');
            ";
                } else {
                    // line 40
                    echo "
            \$(\".btn-desconoce\").addClass(\"disabled\");
            \$(\".btn-desconoce\").removeClass(\"btn-desconoce\");

            ";
                }
                // line 45
                echo "            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['multa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        // line 48
        echo "      \$(\".btn-desconoce\").click(function(){
        \$(\"#collapse2\").show();
        \$(\"#collapse\").hide();
        \$(\".btn-desconoce\").addClass(\"btn-lg\");
        \$(\".btn-desconoce\").removeClass(\"btn-sm\");
        \$(\".btn-desiste\").addClass(\"btn-sm\");
        \$(\".btn-desiste\").removeClass(\"btn-lg\");
        \$(\"#msg\").hide();
      });
      \$(\".btn-desiste\").click(function(){
        \$(\"#collapse2\").hide();
        \$(\"#collapse\").show();
        \$(\"#msg\").show();
        \$(\".btn-desconoce\").addClass(\"btn-sm\");
        \$(\".btn-desconoce\").removeClass(\"btn-lg\");
        \$(\".btn-desiste\").addClass(\"btn-lg\");
        \$(\".btn-desiste\").removeClass(\"btn-sm\");
      });
  </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "desconoce/_ratifica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  116 => 47,  109 => 45,  102 => 40,  97 => 38,  92 => 35,  89 => 34,  84 => 33,  82 => 32,  72 => 25,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    
    <button class=\"btn btn-danger btn-desiste\" type=\"button\">
        Confirma
    </button>
    
    <button class=\"btn btn-success btn-desconoce\" type=\"button\">
        Reconsidera
    </button>
  </p>
  <div id=\"msg\">

  </div>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
      
        <form action=\"{{path('desconoce_edit',{'id':contrato.id,'status':'15'})}}\" method=\"post\">
          <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
          <button class=\"btn btn-primary\">Gestionar</button>
      </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"{{path('desconoce_edit',{'id':contrato.id,'status':'14'})}}\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <script>
    {% if contrato.agenda.status.id==13 %}
        {% for multa in multas %}
            {% if multa.monto > multa.pagado %}

            \$(\".btn-desiste\").addClass(\"disabled\");
            \$(\".btn-desiste\").removeClass(\"btn-desiste\");
            \$(\"#msg\").html('<div class=\"alert alert-danger\" role=\"alert\">Debe multa de \${{multa.monto|number_format(0,',','.')}} </div>');
            {% else %}

            \$(\".btn-desconoce\").addClass(\"disabled\");
            \$(\".btn-desconoce\").removeClass(\"btn-desconoce\");

            {% endif %}
            
        {% endfor %}
    {% endif %}
      \$(\".btn-desconoce\").click(function(){
        \$(\"#collapse2\").show();
        \$(\"#collapse\").hide();
        \$(\".btn-desconoce\").addClass(\"btn-lg\");
        \$(\".btn-desconoce\").removeClass(\"btn-sm\");
        \$(\".btn-desiste\").addClass(\"btn-sm\");
        \$(\".btn-desiste\").removeClass(\"btn-lg\");
        \$(\"#msg\").hide();
      });
      \$(\".btn-desiste\").click(function(){
        \$(\"#collapse2\").hide();
        \$(\"#collapse\").show();
        \$(\"#msg\").show();
        \$(\".btn-desconoce\").addClass(\"btn-sm\");
        \$(\".btn-desconoce\").removeClass(\"btn-lg\");
        \$(\".btn-desiste\").addClass(\"btn-lg\");
        \$(\".btn-desiste\").removeClass(\"btn-sm\");
      });
  </script>", "desconoce/_ratifica.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\desconoce\\_ratifica.html.twig");
    }
}
