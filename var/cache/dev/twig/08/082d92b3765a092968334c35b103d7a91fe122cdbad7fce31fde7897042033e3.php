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

/* administradores/_form.html.twig */
class __TwigTemplate_8df80d938e84da0a1adae17dc6361c761223cf0d417a4b01248435b4afbb9b9f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administradores/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administradores/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

\t
<div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("nombreCuenta", $context)) ? (_twig_default_filter((isset($context["nombreCuenta"]) || array_key_exists("nombreCuenta", $context) ? $context["nombreCuenta"] : (function () { throw new RuntimeError('Variable "nombreCuenta" does not exist.', 10, $this->source); })()), "Compañia")) : ("Compañia")), "html", null, true);
        echo " *</small>
\t\t\t\t
\t\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 15
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t";
            // line 16
            if (array_key_exists("cuentas_sel", $context)) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cuentas_sel"]) || array_key_exists("cuentas_sel", $context) ? $context["cuentas_sel"] : (function () { throw new RuntimeError('Variable "cuentas_sel" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["usuarioCuent"]) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioCuent"], "cuenta", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 18)))) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioCuent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nombre", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control", "maxlength" => "50"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "rut", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Rut"]]);
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "correo", [], "any", false, false, false, 39), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "telefono", [], "any", false, false, false, 43), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "whatsapp", [], "any", false, false, false, 48), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "direccion", [], "any", false, false, false, 53), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "sexo", [], "any", false, false, false, 58), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t\t
\t\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_documentos"]) || array_key_exists("tipo_documentos", $context) ? $context["tipo_documentos"] : (function () { throw new RuntimeError('Variable "tipo_documentos" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_documento"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "tipoDocumento", [], "any", false, true, false, 70), "id", [], "any", true, true, false, 70)) {
                // line 71
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 72
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 72, $this->source); })()), "tipoDocumento", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 72)))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "nombre", [], "any", false, false, false, 77), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Datos de Sesión</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "username", [], "any", false, false, false, 90), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "passwordAnt", [], "any", false, false, false, 95), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div class=\"card-footer\">
\t\t<button class=\"btn btn-primary\">";
        // line 101
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 101, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t</div>
</div>

    
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "administradores/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 113,  237 => 101,  228 => 95,  224 => 94,  217 => 90,  203 => 78,  194 => 77,  190 => 75,  186 => 73,  184 => 72,  181 => 71,  179 => 70,  174 => 69,  170 => 68,  157 => 58,  149 => 53,  141 => 48,  133 => 43,  126 => 39,  118 => 34,  110 => 29,  103 => 24,  94 => 23,  91 => 22,  85 => 21,  81 => 19,  78 => 18,  73 => 17,  71 => 16,  66 => 15,  62 => 14,  55 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

\t
<div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
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
\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control','maxlength':'50'}})}}
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t\t{{form_row(form.rut,{'label':false,'attr':{'class':'form-control','placeholder':'Rut'}})}}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t\t{{form_row(form.correo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t\t{{form_row(form.telefono,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t\t{{form_row(form.whatsapp,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t\t{{form_row(form.direccion,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t\t{{form_row(form.sexo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t\t
\t\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t{% for tipo_documento in tipo_documentos %}
\t\t\t\t\t\t\t<option value=\"{{tipo_documento.id}}\"
\t\t\t\t\t\t\t{% if usuario.tipoDocumento.id is defined %}

\t\t\t\t\t\t\t\t\t{% if  usuario.tipoDocumento.id ==tipo_documento.id %}
\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t>{{tipo_documento.nombre}}</option>
\t\t\t\t\t\t{% endfor %}}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Datos de Sesión</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t\t{{form_row(form.username,{'label':false,'attr':{'class':'form-control','placeholder':'Usuario'}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t\t{{form_row(form.password,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t\t{{form_row(form.passwordAnt,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div class=\"card-footer\">
\t\t<button class=\"btn btn-primary\">{{ button_label|default('Crear') }}</button>
\t</div>
</div>

    
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "administradores/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\administradores\\_form.html.twig");
    }
}
