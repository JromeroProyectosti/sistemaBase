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

/* tramitadores/_form.html.twig */
class __TwigTemplate_78bc34f9a8b511d734078bb28de42a3706877d27dceb8cab889a6da0f52b5bb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tramitadores/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tramitadores/_form.html.twig"));

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
\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t
\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t<option></option>
\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_documentos"]) || array_key_exists("tipo_documentos", $context) ? $context["tipo_documentos"] : (function () { throw new RuntimeError('Variable "tipo_documentos" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_documento"]) {
            // line 32
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
\t\t\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "tipoDocumento", [], "any", false, true, false, 33), "id", [], "any", true, true, false, 33)) {
                // line 34
                echo "
\t\t\t\t\t\t\t\t";
                // line 35
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 35, $this->source); })()), "tipoDocumento", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 35)))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "nombre", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "}
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "rut", [], "any", false, false, false, 46), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Rut"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "correo", [], "any", false, false, false, 51), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "telefono", [], "any", false, false, false, 55), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "whatsapp", [], "any", false, false, false, 60), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "direccion", [], "any", false, false, false, 65), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "sexo", [], "any", false, false, false, 70), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Color para calendario </small> <button class=\"btn\" style=\"background-color: ";
        // line 75
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "color", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "color", [], "any", false, false, false, 75), "")) : ("")), "html", null, true);
        echo ";\"></button>
\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "color", [], "any", false, false, false, 76), 'row', ["label" => false, "attr" => ["class" => "form-control my-colorpicker1", "novalidate" => "novalidate"]]);
        echo "
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
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "username", [], "any", false, false, false, 87), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "passwordAnt", [], "any", false, false, false, 92), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">";
        // line 96
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 96, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t
\t
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t//Colorpicker
\t\t\t\$('.my-colorpicker1').colorpicker()
\t\t
\t\t});
\t</script>
";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tramitadores/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 108,  238 => 96,  231 => 92,  227 => 91,  220 => 87,  206 => 76,  202 => 75,  194 => 70,  186 => 65,  178 => 60,  170 => 55,  163 => 51,  155 => 46,  148 => 41,  139 => 40,  135 => 38,  131 => 36,  129 => 35,  126 => 34,  124 => 33,  119 => 32,  115 => 31,  105 => 24,  98 => 19,  89 => 18,  86 => 17,  80 => 16,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  57 => 9,  50 => 5,  43 => 1,);
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
\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t
\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t<option></option>
\t\t\t\t\t{% for tipo_documento in tipo_documentos %}
\t\t\t\t\t\t<option value=\"{{tipo_documento.id}}\"
\t\t\t\t\t\t{% if usuario.tipoDocumento.id is defined %}

\t\t\t\t\t\t\t\t{% if  usuario.tipoDocumento.id ==tipo_documento.id %}
\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t>{{tipo_documento.nombre}}</option>
\t\t\t\t\t{% endfor %}}
\t\t\t\t</select>
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
\t\t\t
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Color para calendario </small> <button class=\"btn\" style=\"background-color: {{usuario.color|default('')}};\"></button>
\t\t\t\t{{form_row(form.color,{'label':false,'attr':{'class':'form-control my-colorpicker1','novalidate': 'novalidate'}})}}
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
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">{{ button_label|default('Crear') }}</button>
\t
\t
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t//Colorpicker
\t\t\t\$('.my-colorpicker1').colorpicker()
\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "tramitadores/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\tramitadores\\_form.html.twig");
    }
}
