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

/* cobradores/_form.html.twig */
class __TwigTemplate_bcbc1ec9d7e776fac6069a6cdcf748306ad36575b781c2c215903d00fc3ab7bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobradores/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobradores/_form.html.twig"));

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
        // line 25
        echo "\t\t\t\t\t</select>
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
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Lotes *</small>
\t\t\t\t\t<select name=\"cboLotes[]\" class=\"select3\" multiple=\"multiple\" data-placeholder=\"Selecciona Lotes\" style=\"width: 100%;\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotes"]) || array_key_exists("lotes", $context) ? $context["lotes"] : (function () { throw new RuntimeError('Variable "lotes" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lote"]) {
            // line 67
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "nombre", [], "any", false, false, false, 68), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 70, $this->source); })()), "usuarioLotes", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["usuarioLote"]) {
            // line 71
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioLote"], "lote", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioLote"], "lote", [], "any", false, false, false, 75), "nombre", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioLote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Status</small>
\t\t\t\t\t<select name=\"cboStatues\" class=\"form-control\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statues"]) || array_key_exists("statues", $context) ? $context["statues"] : (function () { throw new RuntimeError('Variable "statues" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 85
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t";
            // line 86
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "status", [], "any", false, true, false, 86), "id", [], "any", true, true, false, 86)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 87, $this->source); })()), "status", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 87)))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 91), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "}
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t\t
\t\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_documentos"]) || array_key_exists("tipo_documentos", $context) ? $context["tipo_documentos"] : (function () { throw new RuntimeError('Variable "tipo_documentos" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_documento"]) {
            // line 103
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t";
            // line 104
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "tipoDocumento", [], "any", false, true, false, 104), "id", [], "any", true, true, false, 104)) {
                // line 105
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 106
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 106, $this->source); })()), "tipoDocumento", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 106)))) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "nombre", [], "any", false, false, false, 111), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
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
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "username", [], "any", false, false, false, 124), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "password", [], "any", false, false, false, 128), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "passwordAnt", [], "any", false, false, false, 129), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div class=\"card-footer\">
\t\t<button class=\"btn btn-primary\">";
        // line 135
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 135, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t</div>
</div>

    
\t<script>
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t\$('.select3').select2();
\t\t\t
\t\t});
\t</script>
";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cobradores/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 148,  323 => 135,  314 => 129,  310 => 128,  303 => 124,  289 => 112,  280 => 111,  276 => 109,  272 => 107,  270 => 106,  267 => 105,  265 => 104,  260 => 103,  256 => 102,  244 => 92,  235 => 91,  232 => 90,  228 => 88,  225 => 87,  223 => 86,  218 => 85,  214 => 84,  206 => 78,  197 => 75,  189 => 71,  184 => 70,  176 => 68,  171 => 67,  167 => 66,  156 => 58,  148 => 53,  140 => 48,  132 => 43,  125 => 39,  117 => 34,  109 => 29,  103 => 25,  94 => 23,  91 => 22,  85 => 21,  81 => 19,  78 => 18,  73 => 17,  71 => 16,  66 => 15,  62 => 14,  55 => 10,  43 => 1,);
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
\t\t\t\t\t\t{% endfor %}
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
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Lotes *</small>
\t\t\t\t\t<select name=\"cboLotes[]\" class=\"select3\" multiple=\"multiple\" data-placeholder=\"Selecciona Lotes\" style=\"width: 100%;\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t
\t\t\t\t\t\t{% for lote in lotes %}
\t\t\t\t\t\t\t<option value=\"{{lote.id}}\"
\t\t\t\t\t\t\t>{{lote.nombre}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% for usuarioLote in usuario.usuarioLotes %}
\t\t\t\t\t\t\t<option value=\"{{usuarioLote.lote.id}}\"
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t>{{usuarioLote.lote.nombre}}</option>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Status</small>
\t\t\t\t\t<select name=\"cboStatues\" class=\"form-control\" required>
\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t{% for status in statues %}
\t\t\t\t\t\t\t<option value=\"{{status.id}}\"
\t\t\t\t\t\t\t{% if usuario.status.id is defined %}
\t\t\t\t\t\t\t\t{% if usuario.status.id==status.id %}
\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t>{{status.nombre}}</option>
\t\t\t\t\t\t{% endfor %}}
\t\t\t\t\t</select>
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
\t\t\t\$('.select3').select2();
\t\t\t
\t\t});
\t</script>
{{ form_end(form) }}
", "cobradores/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobradores\\_form.html.twig");
    }
}
