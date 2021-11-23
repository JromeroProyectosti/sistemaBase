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

/* jefe_abogados/_form.html.twig */
class __TwigTemplate_2a814130f6590ce4422b7c3b2b68e0022a87e5f047a9eca971e8bd90180b9fa3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jefe_abogados/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jefe_abogados/_form.html.twig"));

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
        // line 20
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre *</small>
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut *</small>
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rut", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Rut"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo *</small>
\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "correo", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono *</small>
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "telefono", [], "any", false, false, false, 38), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp *</small>
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "whatsapp", [], "any", false, false, false, 43), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección *</small>
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "direccion", [], "any", false, false, false, 48), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo *</small>
\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "sexo", [], "any", false, false, false, 53), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t
\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t<option></option>
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_documentos"]) || array_key_exists("tipo_documentos", $context) ? $context["tipo_documentos"] : (function () { throw new RuntimeError('Variable "tipo_documentos" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_documento"]) {
            // line 63
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
\t\t\t\t\t\t";
            // line 64
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "tipoDocumento", [], "any", false, true, false, 64), "id", [], "any", true, true, false, 64)) {
                // line 65
                echo "
\t\t\t\t\t\t\t\t";
                // line 66
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 66, $this->source); })()), "tipoDocumento", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 66)))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "nombre", [], "any", false, false, false, 71), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t<h1>Datos de Sesión</h1>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario *</small>
\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "username", [], "any", false, false, false, 84), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Password *</small>
\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "password", [], "any", false, false, false, 88), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "passwordAnt", [], "any", false, false, false, 89), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 93, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jefe_abogados/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 101,  228 => 93,  221 => 89,  217 => 88,  210 => 84,  196 => 72,  187 => 71,  183 => 69,  179 => 67,  177 => 66,  174 => 65,  172 => 64,  167 => 63,  163 => 62,  151 => 53,  143 => 48,  135 => 43,  127 => 38,  120 => 34,  112 => 29,  104 => 24,  98 => 20,  89 => 18,  86 => 17,  80 => 16,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  57 => 9,  50 => 5,  43 => 1,);
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
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<small class=\"text-muted\">Nombre *</small>
\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Rut *</small>
\t\t\t\t{{form_row(form.rut,{'label':false,'attr':{'class':'form-control','placeholder':'Rut'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t<small class=\"text-muted\">Correo *</small>
\t\t\t\t{{form_row(form.correo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Telefono *</small>
\t\t\t\t{{form_row(form.telefono,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Whatsapp *</small>
\t\t\t\t{{form_row(form.whatsapp,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Dirección *</small>
\t\t\t\t{{form_row(form.direccion,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Sexo *</small>
\t\t\t\t{{form_row(form.sexo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t
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
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t<h1>Datos de Sesión</h1>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Usuario *</small>
\t\t\t\t{{form_row(form.username,{'label':false,'attr':{'class':'form-control','placeholder':'Usuario'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Password *</small>
\t\t\t\t{{form_row(form.password,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t{{form_row(form.passwordAnt,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">{{ button_label|default('Crear') }}</button>
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "jefe_abogados/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\jefe_abogados\\_form.html.twig");
    }
}
