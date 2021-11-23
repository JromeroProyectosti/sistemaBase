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

/* changecomp/index.html.twig */
class __TwigTemplate_848f1f35dbd3ba6eec935d94061e3509d124d7cfbb5a621cca74eed385f9780a extends Template
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
        // line 3
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sesion"] ?? null), "getSesion", [], "any", false, false, false, 3), "usuarioTipo", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), 8))) {
            // line 4
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changecomp_new");
            echo "\" method=\"post\" id=\"frmChange\">
            <select  class=\"form-control changecomp\" name=\"company\" id=\"company\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["empresas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 7
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\"
                ";
                // line 8
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 8), ($context["id_empresa"] ?? null)))) {
                    // line 9
                    echo "                    selected
                ";
                }
                // line 11
                echo "                >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 11), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </select>
            
        
            <input type=\"hidden\" name=\"route\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
            echo "\">
        </form> 
    ";
        } else {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["empresas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 20
                echo "                
                ";
                // line 21
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 21), ($context["id_empresa"] ?? null)))) {
                    // line 22
                    echo "                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 22), "html", null, true);
                    echo "
                ";
                }
                // line 24
                echo "               
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        // line 27
        echo "    
<script>
   \$(\"#company\").change(function(){
       \$(\"#frmChange\").submit();
   })
</script>";
    }

    public function getTemplateName()
    {
        return "changecomp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  107 => 26,  100 => 24,  94 => 22,  92 => 21,  89 => 20,  84 => 19,  78 => 16,  73 => 13,  64 => 11,  60 => 9,  58 => 8,  53 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "changecomp/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\changecomp\\index.html.twig");
    }
}
