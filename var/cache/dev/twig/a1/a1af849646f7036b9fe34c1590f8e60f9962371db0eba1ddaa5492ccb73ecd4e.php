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

/* materia/_form.html.twig */
class __TwigTemplate_becafd62e3c62afd57bab079f289f1cc73490b611bc992bcbecc68cc6ad4bcd3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), 'row', ["label" => false, "attr" => ["class" => "form-control", "maxlength" => "50"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("nombreCuenta", $context)) ? (_twig_default_filter((isset($context["nombreCuenta"]) || array_key_exists("nombreCuenta", $context) ? $context["nombreCuenta"] : (function () { throw new RuntimeError('Variable "nombreCuenta" does not exist.', 12, $this->source); })()), "Compañia")) : ("Compañia")), "html", null, true);
        echo " *</small>
\t\t\t\t
\t\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 17
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t";
            // line 18
            if (array_key_exists("cuentas_sel", $context)) {
                // line 19
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cuentas_sel"]) || array_key_exists("cuentas_sel", $context) ? $context["cuentas_sel"] : (function () { throw new RuntimeError('Variable "cuentas_sel" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["usuarioCuent"]) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioCuent"], "cuenta", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 20)))) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioCuent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "}
\t\t\t\t\t</select>
\t\t\t\t</div>




            </div>
        </section>
    </div>
    <div class=\"card-footer\">
    <button class=\"btn btn-success\">";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 37, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
    </div>
    <script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "materia/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  121 => 37,  108 => 26,  99 => 25,  96 => 24,  90 => 23,  86 => 21,  83 => 20,  78 => 19,  76 => 18,  71 => 17,  67 => 16,  60 => 12,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control','maxlength':'50'}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">{{nombreCuenta|default('Compañia')}} *</small>
\t\t\t\t
\t\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t{% for cuenta in cuentas %}
\t\t\t\t\t\t\t<option value=\"{{cuenta.id}}\"
\t\t\t\t\t\t\t{% if cuentas_sel is defined %}
\t\t\t\t\t\t\t\t{% for usuarioCuent in cuentas_sel %}
\t\t\t\t\t\t\t\t\t{% if usuarioCuent.cuenta.id==cuenta.id %}
\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t>{{cuenta.nombre}}</option>
\t\t\t\t\t\t{% endfor %}}
\t\t\t\t\t</select>
\t\t\t\t</div>




            </div>
        </section>
    </div>
    <div class=\"card-footer\">
    <button class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>
    </div>
    <script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "materia/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\materia\\_form.html.twig");
    }
}
