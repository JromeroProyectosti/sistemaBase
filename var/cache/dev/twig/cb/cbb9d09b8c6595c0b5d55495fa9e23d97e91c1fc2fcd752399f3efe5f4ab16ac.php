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
class __TwigTemplate_1362871d976ed5fc47ab6dd002409a0c16e737d85ae089acc399ac0685d7dbae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changecomp/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changecomp/index.html.twig"));

        // line 1
        echo "

    ";
        // line 3
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 3, $this->source); })()), "getSesion", [], "any", false, false, false, 3), "usuarioTipo", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), 8))) {
            // line 4
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changecomp_new");
            echo "\" method=\"post\" id=\"frmChange\">
            <select  class=\"form-control changecomp\" name=\"company\" id=\"company\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 7
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\"
                ";
                // line 8
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 8), (isset($context["id_empresa"]) || array_key_exists("id_empresa", $context) ? $context["id_empresa"] : (function () { throw new RuntimeError('Variable "id_empresa" does not exist.', 8, $this->source); })())))) {
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
            echo twig_escape_filter($this->env, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">
        </form> 
    ";
        } else {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 20
                echo "                
                ";
                // line 21
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 21), (isset($context["id_empresa"]) || array_key_exists("id_empresa", $context) ? $context["id_empresa"] : (function () { throw new RuntimeError('Variable "id_empresa" does not exist.', 21, $this->source); })())))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  116 => 27,  113 => 26,  106 => 24,  100 => 22,  98 => 21,  95 => 20,  90 => 19,  84 => 16,  79 => 13,  70 => 11,  66 => 9,  64 => 8,  59 => 7,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

    {% if sesion.getSesion.usuarioTipo.id==8  %}
        <form action=\"{{path('changecomp_new')}}\" method=\"post\" id=\"frmChange\">
            <select  class=\"form-control changecomp\" name=\"company\" id=\"company\">
                {% for empresa in empresas %}
                <option value=\"{{empresa.id}}\"
                {% if empresa.id==id_empresa %}
                    selected
                {% endif %}
                >{{empresa.nombre}}</option>
                {% endfor %}
            </select>
            
        
            <input type=\"hidden\" name=\"route\" value=\"{{route}}\">
        </form> 
    {% else %}
        {% for empresa in empresas %}
                
                {% if empresa.id==id_empresa %}
                  {{empresa.nombre}}
                {% endif %}
               
                {% endfor %}
    {% endif %}
    
<script>
   \$(\"#company\").change(function(){
       \$(\"#frmChange\").submit();
   })
</script>", "changecomp/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\changecomp\\index.html.twig");
    }
}
