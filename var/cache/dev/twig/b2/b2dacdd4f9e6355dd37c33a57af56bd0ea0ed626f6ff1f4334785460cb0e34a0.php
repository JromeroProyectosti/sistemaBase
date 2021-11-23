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

/* terminos/_ratifica.html.twig */
class __TwigTemplate_7ebb6941d8417f0ead6e090f18f5e6c5ad190a84d4d72a8f65e791e27cf93521 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/_ratifica.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terminos/_ratifica.html.twig"));

        // line 1
        echo "<p>
    <button class=\"btn btn-success btn-desiste\" type=\"button\">
        Confirma
    </button>
    <button class=\"btn btn-danger btn-desconoce\" type=\"button\">
        Reconsidera
    </button>
  </p>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
   
        <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desconoce_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "status" => "15"]), "html", null, true);
        echo "\" method=\"post\">
          <textarea name=\"txtObservacion\" class=\"form-control\">

          </textarea>
          <button class=\"btn btn-primary\">Gestionar</button>
      </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\">
  
            </textarea>
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
  </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "terminos/_ratifica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    <button class=\"btn btn-success btn-desiste\" type=\"button\">
        Confirma
    </button>
    <button class=\"btn btn-danger btn-desconoce\" type=\"button\">
        Reconsidera
    </button>
  </p>
  <div class=\"collapse cerrar1\" id=\"collapse\">
    <div class=\"card card-body\">
   
        <form action=\"{{path('desconoce_edit',{'id':contrato.id,'status':'15'})}}\" method=\"post\">
          <textarea name=\"txtObservacion\" class=\"form-control\">

          </textarea>
          <button class=\"btn btn-primary\">Gestionar</button>
      </form>
    </div>
  </div>
  <div class=\"collapse cerrar2\" id=\"collapse2\">
    <div class=\"card card-body\">
        <form action=\"\" method=\"post\">
            <textarea name=\"txtObservacion\" class=\"form-control\">
  
            </textarea>
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
  </script>", "terminos/_ratifica.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\terminos\\_ratifica.html.twig");
    }
}
