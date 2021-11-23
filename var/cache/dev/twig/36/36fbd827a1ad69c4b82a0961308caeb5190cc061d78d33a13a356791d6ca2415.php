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

/* abogados/_form.html.twig */
class __TwigTemplate_adb3b8b365ee7603e86d8198d69fdd074a4a4886ecf9148c0b5e72727f467c66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abogados/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abogados/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
\t<div class=\"card\">
\t\t<div class=\"card-header\"><h1>Datos abogado</h1></div>
\t\t<div class=\"card-body\">
\t\t\t<section>
\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">";
        // line 9
        echo twig_escape_filter($this->env, ((array_key_exists("nombreCuenta", $context)) ? (_twig_default_filter((isset($context["nombreCuenta"]) || array_key_exists("nombreCuenta", $context) ? $context["nombreCuenta"] : (function () { throw new RuntimeError('Variable "nombreCuenta" does not exist.', 9, $this->source); })()), "Compañia")) : ("Compañia")), "html", null, true);
        echo " *</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) || array_key_exists("cuentas", $context) ? $context["cuentas"] : (function () { throw new RuntimeError('Variable "cuentas" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 14
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 15
            if (array_key_exists("cuentas_sel", $context)) {
                // line 16
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cuentas_sel"]) || array_key_exists("cuentas_sel", $context) ? $context["cuentas_sel"] : (function () { throw new RuntimeError('Variable "cuentas_sel" does not exist.', 16, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["usuarioCuent"]) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioCuent"], "cuenta", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["cuenta"], "id", [], "any", false, false, false, 17)))) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioCuent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cuenta"], "nombre", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nombre", [], "any", false, false, false, 28), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_documentos"]) || array_key_exists("tipo_documentos", $context) ? $context["tipo_documentos"] : (function () { throw new RuntimeError('Variable "tipo_documentos" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_documento"]) {
            // line 36
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 37
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "tipoDocumento", [], "any", false, true, false, 37), "id", [], "any", true, true, false, 37)) {
                // line 38
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 39
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 39, $this->source); })()), "tipoDocumento", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "id", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo_documento"], "nombre", [], "any", false, false, false, 44), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "rut", [], "any", false, false, false, 50), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Rut"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "correo", [], "any", false, false, false, 55), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telefono", [], "any", false, false, false, 59), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "whatsapp", [], "any", false, false, false, 64), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "direccion", [], "any", false, false, false, 69), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "sexo", [], "any", false, false, false, 74), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Color para calendario </small> 
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "color", [], "any", false, false, false, 83), 'row', ["label" => false, "attr" => ["class" => "form-control my-colorpicker1", "novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-square\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<hr>
\t\t\t\t<h1>Datos de Sesión</h1>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "username", [], "any", false, false, false, 101), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "password", [], "any", false, false, false, 105), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "passwordAnt", [], "any", false, false, false, 106), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</section>
\t\t
\t\t\t<section>
\t\t\t\t<hr>
\t\t\t\t<h1>Horario Atención</h1>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\"><h4>Sobre Cupo</h4></div>
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "sobrecupo", [], "any", false, false, false, 117), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\"><h4>Día</h4></div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4>Inicio</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4 >Fin</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4 >Habilitado</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Lunes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "lunesStart", [], "any", false, false, false, 134), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "lunesEnd", [], "any", false, false, false, 137), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "lunes", [], "any", false, false, false, 140), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Martes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "martesStart", [], "any", false, false, false, 146), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "martesEnd", [], "any", false, false, false, 149), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "martes", [], "any", false, false, false, 152), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Miercoles</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "miercolesStart", [], "any", false, false, false, 158), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "miercolesEnd", [], "any", false, false, false, 161), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "miercoles", [], "any", false, false, false, 164), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Jueves</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "juevesStart", [], "any", false, false, false, 170), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "juevesEnd", [], "any", false, false, false, 173), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "jueves", [], "any", false, false, false, 176), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Viernes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "viernesStart", [], "any", false, false, false, 182), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "viernesEnd", [], "any", false, false, false, 185), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "viernes", [], "any", false, false, false, 188), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Sabado</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "sabadoStart", [], "any", false, false, false, 194), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "sabadoEnd", [], "any", false, false, false, 197), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "sabado", [], "any", false, false, false, 200), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Domingo</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "domingoStart", [], "any", false, false, false, 206), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "domingoEnd", [], "any", false, false, false, 209), 'row', ["label" => false]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "domingo", [], "any", false, false, false, 212), 'row', ["label" => false, "attr" => ["data-bootstrap-switch" => ""]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"card-footer\">
\t\t\t<button class=\"btn btn-primary\">";
        // line 218
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 218, $this->source); })()), "Crear")) : ("Crear")), "html", null, true);
        echo "</button>
\t\t</div>
\t</div>

\t

    
\t
\t
\t<script>
\t\t
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t//Colorpicker
\t\t\t\$('.my-colorpicker1').colorpicker();

\t\t\t\$('.my-colorpicker1').on('colorpickerChange', function(event) {
\t\t\t\t\$('.fa-square').css('color', event.color.toString());
\t\t\t});

\t\t\t\$('.fa-square').css('color', '";
        // line 239
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "color", [], "any", true, true, false, 239)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "color", [], "any", false, false, false, 239), "")) : ("")), "html", null, true);
        echo "');
\t\t});

</script>
";
        // line 243
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "abogados/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 243,  447 => 239,  423 => 218,  414 => 212,  408 => 209,  402 => 206,  393 => 200,  387 => 197,  381 => 194,  372 => 188,  366 => 185,  360 => 182,  351 => 176,  345 => 173,  339 => 170,  330 => 164,  324 => 161,  318 => 158,  309 => 152,  303 => 149,  297 => 146,  288 => 140,  282 => 137,  276 => 134,  256 => 117,  242 => 106,  238 => 105,  231 => 101,  210 => 83,  198 => 74,  190 => 69,  182 => 64,  174 => 59,  167 => 55,  159 => 50,  152 => 45,  143 => 44,  139 => 42,  135 => 40,  133 => 39,  130 => 38,  128 => 37,  123 => 36,  119 => 35,  109 => 28,  102 => 23,  93 => 22,  90 => 21,  84 => 20,  80 => 18,  77 => 17,  72 => 16,  70 => 15,  65 => 14,  61 => 13,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
\t<div class=\"card\">
\t\t<div class=\"card-header\"><h1>Datos abogado</h1></div>
\t\t<div class=\"card-body\">
\t\t\t<section>
\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">{{nombreCuenta|default('Compañia')}} *</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<select name=\"cboEmpresa[]\" class=\"select2\" multiple=\"multiple\" data-placeholder=\"Selecciona compañias\" style=\"width: 100%;\" required>
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t{% for cuenta in cuentas %}
\t\t\t\t\t\t\t\t<option value=\"{{cuenta.id}}\"
\t\t\t\t\t\t\t\t{% if cuentas_sel is defined %}
\t\t\t\t\t\t\t\t\t{% for usuarioCuent in cuentas_sel %}
\t\t\t\t\t\t\t\t\t\t{% if usuarioCuent.cuenta.id==cuenta.id %}
\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t>{{cuenta.nombre}}</option>
\t\t\t\t\t\t\t{% endfor %}}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t<small class=\"text-muted\">Nombre</small>
\t\t\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Colaborador *</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<select name=\"cboTipoDocumento\" class=\"form-control\" required>
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t{% for tipo_documento in tipo_documentos %}
\t\t\t\t\t\t\t\t<option value=\"{{tipo_documento.id}}\"
\t\t\t\t\t\t\t\t{% if usuario.tipoDocumento.id is defined %}

\t\t\t\t\t\t\t\t\t\t{% if  usuario.tipoDocumento.id ==tipo_documento.id %}
\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t>{{tipo_documento.nombre}}</option>
\t\t\t\t\t\t\t{% endfor %}}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Rut</small>
\t\t\t\t\t\t{{form_row(form.rut,{'label':false,'attr':{'class':'form-control','placeholder':'Rut'}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t<small class=\"text-muted\">Correo</small>
\t\t\t\t\t\t{{form_row(form.correo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Telefono</small>
\t\t\t\t\t\t{{form_row(form.telefono,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Whatsapp</small>
\t\t\t\t\t\t{{form_row(form.whatsapp,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Dirección</small>
\t\t\t\t\t\t{{form_row(form.direccion,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Sexo</small>
\t\t\t\t\t\t{{form_row(form.sexo,{'label':false,'attr':{'class':'form-control'}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Color para calendario </small> 
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t{{form_row(form.color,{'label':false,'attr':{'class':'form-control my-colorpicker1','novalidate': 'novalidate'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-square\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<hr>
\t\t\t\t<h1>Datos de Sesión</h1>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Usuario</small>
\t\t\t\t\t\t{{form_row(form.username,{'label':false,'attr':{'class':'form-control','placeholder':'Usuario'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<small class=\"text-muted\">Password</small>
\t\t\t\t\t\t{{form_row(form.password,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t\t\t{{form_row(form.passwordAnt,{'label':false, 'attr':{'class':'form-control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</section>
\t\t
\t\t\t<section>
\t\t\t\t<hr>
\t\t\t\t<h1>Horario Atención</h1>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\"><h4>Sobre Cupo</h4></div>
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">{{form_row(form.sobrecupo,{'label':false, 'attr':{'class':'form-control'}})}}</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\"><h4>Día</h4></div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4>Inicio</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4 >Fin</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\"><h4 >Habilitado</h4>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Lunes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.lunesStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.lunesEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.lunes,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Martes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.martesStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.martesEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.martes,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Miercoles</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.miercolesStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.miercolesEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.miercoles,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Jueves</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.juevesStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.juevesEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.jueves,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Viernes</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.viernesStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.viernesEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.viernes,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Sabado</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.sabadoStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.sabadoEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.sabado,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">Domingo</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.domingoStart,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.domingoEnd,{'label':false})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t{{form_row(form.domingo,{'label':false, 'attr':{'data-bootstrap-switch':''}})}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t<div class=\"card-footer\">
\t\t\t<button class=\"btn btn-primary\">{{ button_label|default('Crear') }}</button>
\t\t</div>
\t</div>

\t

    
\t
\t
\t<script>
\t\t
\t\t\$(function () {
\t\t\t//Initialize Select2 Elements
\t\t\t\$('.select2').select2();
\t\t\t//Colorpicker
\t\t\t\$('.my-colorpicker1').colorpicker();

\t\t\t\$('.my-colorpicker1').on('colorpickerChange', function(event) {
\t\t\t\t\$('.fa-square').css('color', event.color.toString());
\t\t\t});

\t\t\t\$('.fa-square').css('color', '{{usuario.color|default(\"\")}}');
\t\t});

</script>
{{ form_end(form) }}
", "abogados/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\abogados\\_form.html.twig");
    }
}
