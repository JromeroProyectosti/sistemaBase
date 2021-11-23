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

/* menu/_form.html.twig */
class __TwigTemplate_dbedfd2b905322ca11491cf3f40f3e83aab68e1e8f55bfc643d054eaed9d0a4e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Modulo</small> 
            <select name=\"cboModulo\" class=\"form-control modulo\">
                <option></option>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 10
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "modulo", [], "any", false, true, false, 11), "id", [], "any", true, true, false, 11)) {
                // line 12
                echo "                 ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 12, $this->source); })()), "modulo", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["modulo"], "modulo", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)))) {
                    // line 13
                    echo "                    selected
                    ";
                }
                // line 15
                echo "                ";
            }
            // line 16
            echo "                >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["modulo"], "nombre", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </select>
            
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Nombre</small> *
            
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control nombre"]]);
        echo "
            
        </div>
        
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Icono 
            <button type=\"button\" class=\"btn btn-xs btn-success\" data-toggle=\"popover\" title=\"Iconos\" data-content=\"Puedes ver mas iconos en https://fontawesome.com/icons\"><i class=\"fas fa-question\"></i></button>
            
            </small> 
            
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "icono", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "fas fa-question"]]);
        echo "
            
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Men&uacute; Padre</small> 
            
           
            <select name=\"cboPadre\" class=\"form-control\">
            <option></option>
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["padres"]) || array_key_exists("padres", $context) ? $context["padres"] : (function () { throw new RuntimeError('Variable "padres" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["padre"]) {
            // line 44
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["padre"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
            ";
            // line 45
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "dependeDe", [], "any", false, false, false, 45))) {
                // line 46
                echo "             ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 46, $this->source); })()), "dependeDe", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, $context["padre"], "id", [], "any", false, false, false, 46)))) {
                    // line 47
                    echo "                selected
                ";
                }
                // line 49
                echo "            ";
            }
            // line 50
            echo "            >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["padre"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['padre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </select>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Orden</small> 
            
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "orden", [], "any", false, false, false, 57), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
            
        </div>
    </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"row\">
    <button class=\"btn btn-primary\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Ingresar")) : ("Ingresar")), "html", null, true);
        echo "</button>

    <script>

        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
        })

        \$('.modulo').change(function(){
            if(\$(this).val()>0){
                \$('.nombre').val(\$('.modulo option:selected').text());
                \$('.nombre').attr(\"style='visibity:hidden'\");
            }
        });


</script>
";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 81,  166 => 64,  156 => 57,  149 => 52,  140 => 50,  137 => 49,  133 => 47,  130 => 46,  128 => 45,  123 => 44,  119 => 43,  107 => 34,  94 => 24,  86 => 18,  77 => 16,  74 => 15,  70 => 13,  67 => 12,  65 => 11,  60 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form) }}
    
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Modulo</small> 
            <select name=\"cboModulo\" class=\"form-control modulo\">
                <option></option>
                {% for modulo in modulos %}
                <option value=\"{{modulo.id}}\"
                {% if menu.modulo.id is defined %}
                 {% if menu.modulo.id==modulo.modulo.id %}
                    selected
                    {% endif %}
                {% endif %}
                >{{modulo.nombre}}</option>
                {% endfor %}
                </select>
            
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Nombre</small> *
            
            {{ form_row(form.nombre,{'label':false,'attr':{'class':'form-control nombre'}})}}
            
        </div>
        
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Icono 
            <button type=\"button\" class=\"btn btn-xs btn-success\" data-toggle=\"popover\" title=\"Iconos\" data-content=\"Puedes ver mas iconos en https://fontawesome.com/icons\"><i class=\"fas fa-question\"></i></button>
            
            </small> 
            
            {{ form_row(form.icono,{'label':false,'attr':{'class':'form-control','placeholder':'fas fa-question'}})}}
            
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Men&uacute; Padre</small> 
            
           
            <select name=\"cboPadre\" class=\"form-control\">
            <option></option>
            {% for padre in padres %}
            <option value=\"{{padre.id}}\"
            {% if menu.dependeDe is not null %}
             {% if menu.dependeDe.id==padre.id %}
                selected
                {% endif %}
            {% endif %}
            >{{padre.nombre}}</option>
            {% endfor %}
            </select>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <small class=\"text_mute\">Orden</small> 
            
            {{ form_row(form.orden,{'label':false,'attr':{'class':'form-control'}})}}
            
        </div>
    </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"row\">
    <button class=\"btn btn-primary\">{{ button_label|default('Ingresar') }}</button>

    <script>

        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
        })

        \$('.modulo').change(function(){
            if(\$(this).val()>0){
                \$('.nombre').val(\$('.modulo option:selected').text());
                \$('.nombre').attr(\"style='visibity:hidden'\");
            }
        });


</script>
{{ form_end(form) }}
", "menu/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\menu\\_form.html.twig");
    }
}
