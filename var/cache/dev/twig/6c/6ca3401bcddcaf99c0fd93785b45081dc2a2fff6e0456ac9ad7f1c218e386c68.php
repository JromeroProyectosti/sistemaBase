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

/* clientes/_form.html.twig */
class __TwigTemplate_0810714fff68a2760fcef7158d51c9a4feb854a6e9a63068f8b60541a7c1176c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clientes/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("nombreCuenta", $context)) ? (_twig_default_filter((isset($context["nombreCuenta"]) || array_key_exists("nombreCuenta", $context) ? $context["nombreCuenta"] : (function () { throw new RuntimeError('Variable "nombreCuenta" does not exist.', 5, $this->source); })()), "Compañia")) : ("Compañia")), "html", null, true);
        echo " *</small>
\t\t\t\t
\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t<option></option>
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 10
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
\t\t\t\t\t\t";
            // line 11
            if (array_key_exists("cuentas_sel", $context)) {
                // line 12
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cuentas_sel"]) || array_key_exists("cuentas_sel", $context) ? $context["cuentas_sel"] : (function () { throw new RuntimeError('Variable "cuentas_sel" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["usuarioCuent"]) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioCuent"], "cuenta", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 13)))) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioCuent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "}
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "rut", [], "any", false, false, false, 28), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Rut"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "correo", [], "any", false, false, false, 33), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telefono", [], "any", false, false, false, 37), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "whatsapp", [], "any", false, false, false, 42), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "direccion", [], "any", false, false, false, 47), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "sexo", [], "any", false, false, false, 52), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t<h1>Datos de Sesión</h1>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "username", [], "any", false, false, false, 64), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "passwordAnt", [], "any", false, false, false, 69), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 74, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t
\t\t});
\t</script>
";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "clientes/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  185 => 74,  177 => 69,  173 => 68,  166 => 64,  151 => 52,  143 => 47,  135 => 42,  127 => 37,  120 => 33,  112 => 28,  105 => 24,  98 => 19,  89 => 18,  86 => 17,  80 => 16,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">{{nombreCuenta|default('Compañia')}} *</small>
\t\t\t\t
\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t<option></option>
\t\t\t\t\t{% for cuenta in cuentas %}
\t\t\t\t\t\t<option value=\"{{cuenta.id}}\"
\t\t\t\t\t\t{% if cuentas_sel is defined %}
\t\t\t\t\t\t\t{% for usuarioCuent in cuentas_sel %}
\t\t\t\t\t\t\t\t{% if usuarioCuent.cuenta.id==cuenta.id %}
\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t>{{cuenta.nombre}}</option>
\t\t\t\t\t{% endfor %}}
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t{{form_row(form.rut,{'label':false,'attr':{'class':'form-control','placeholder':'Rut'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t{{form_row(form.correo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t{{form_row(form.telefono,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t{{form_row(form.whatsapp,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t{{form_row(form.direccion,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t{{form_row(form.sexo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t<h1>Datos de Sesión</h1>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t{{form_row(form.username,{'label':false,'attr':{'class':'form-control','placeholder':'Usuario'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t{{form_row(form.password,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t{{form_row(form.passwordAnt,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">{{ button_label|default('Crear') }}</button>
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "clientes/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\clientes\\_form.html.twig");
    }
}
