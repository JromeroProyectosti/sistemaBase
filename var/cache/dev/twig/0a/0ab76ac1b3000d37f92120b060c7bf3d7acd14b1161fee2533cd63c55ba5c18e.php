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

/* contrato/_terminar.html.twig */
class __TwigTemplate_b9ae11e6cb15e6ec0bb2a11fc0071f40dd627744baa8bf0e6188a4d98bdec59f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_terminar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrato/_terminar.html.twig"));

        // line 1
        echo "<p>
    <button class=\"btn btn-danger btn-desiste\" type=\"button\">
        Desiste
    </button>
    <button class=\"btn btn-danger btn-desconoce\" type=\"button\">
        Desconoce
    </button>
  </p>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_terminar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "status" => "13"]), "html", null, true);
        echo "\" onsubmit=\"return disabledButtons()\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrato_terminar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "status" => "12"]), "html", null, true);
        echo "\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <script>
      \$(\".btn-desconoce\").click(function(){
        \$(\"#collapse2\").show();
        \$(\"#collapse\").hide();
        \$(\".btn-desconoce\").addClass(\"btn-lg\");
        \$(\".btn-desconoce\").removeClass(\"btn-sm\");
        \$(\".btn-desiste\").addClass(\"btn-sm\");
        \$(\".btn-desiste\").removeClass(\"btn-lg\");
      });
      \$(\".btn-desiste\").click(function(){
        \$(\"#collapse2\").hide();
        \$(\"#collapse\").show();
        \$(\".btn-desconoce\").addClass(\"btn-sm\");
        \$(\".btn-desconoce\").removeClass(\"btn-lg\");
        \$(\".btn-desiste\").addClass(\"btn-lg\");
        \$(\".btn-desiste\").removeClass(\"btn-sm\");
      });

     function disabledButtons(){
      \$('button').attr(\"disabled\", true);
        return true;
      };

    
  </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contrato/_terminar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    <button class=\"btn btn-danger btn-desiste\" type=\"button\">
        Desiste
    </button>
    <button class=\"btn btn-danger btn-desconoce\" type=\"button\">
        Desconoce
    </button>
  </p>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
        <form action=\"{{path('contrato_terminar',{'id':contrato.id,'status':'13'})}}\" onsubmit=\"return disabledButtons()\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"{{path('contrato_terminar',{'id':contrato.id,'status':'12'})}}\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\"></textarea>
            <button class=\"btn btn-primary\">Gestionar</button>
        </form>
    </div>
  </div>
  <script>
      \$(\".btn-desconoce\").click(function(){
        \$(\"#collapse2\").show();
        \$(\"#collapse\").hide();
        \$(\".btn-desconoce\").addClass(\"btn-lg\");
        \$(\".btn-desconoce\").removeClass(\"btn-sm\");
        \$(\".btn-desiste\").addClass(\"btn-sm\");
        \$(\".btn-desiste\").removeClass(\"btn-lg\");
      });
      \$(\".btn-desiste\").click(function(){
        \$(\"#collapse2\").hide();
        \$(\"#collapse\").show();
        \$(\".btn-desconoce\").addClass(\"btn-sm\");
        \$(\".btn-desconoce\").removeClass(\"btn-lg\");
        \$(\".btn-desiste\").addClass(\"btn-lg\");
        \$(\".btn-desiste\").removeClass(\"btn-sm\");
      });

     function disabledButtons(){
      \$('button').attr(\"disabled\", true);
        return true;
      };

    
  </script>", "contrato/_terminar.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\_terminar.html.twig");
    }
}
