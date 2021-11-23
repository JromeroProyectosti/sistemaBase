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

/* usuario/_form.html.twig */
class __TwigTemplate_5fc135386bb4466d45b39cd9ae1e53d8e3760c0c99e572b3ffe1d5d3d4c5c80e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["action" => (isset($context["action_form"]) || array_key_exists("action_form", $context) ? $context["action_form"] : (function () { throw new RuntimeError('Variable "action_form" does not exist.', 1, $this->source); })())]);
        echo "
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nombre", [], "any", false, false, false, 5), 'row', ["label" => false, "attr" => ["class" => "form_control", "placeholder" => "Nombre"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "correo", [], "any", false, false, false, 8), 'row', ["label" => false, "attr" => ["class" => "form_control", "placeholder" => "Correo"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<small class=\"text-muted\">Tipo de usuario</small>
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "usuarioTipo", [], "any", false, false, false, 12), 'row', ["label" => false, "attr" => ["class" => "form_control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<small class=\"text-muted\">Activar Usuario</small>
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "estado", [], "any", false, false, false, 16), 'row', ["label" => false, "attr" => ["class" => "form_control", "placeholder" => "Activar"]]);
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), 'row', ["label" => false, "attr" => ["class" => "form_control", "placeholder" => "Usuario"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), 'row', ["label" => false, "attr" => ["class" => "form_control", "placeholder" => "******", "type" => "password", "required" => false]]);
        echo "
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Agregar")) : ("Agregar")), "html", null, true);
        echo "</button>
\t
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "usuario/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 32,  88 => 28,  82 => 25,  70 => 16,  63 => 12,  56 => 8,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'action':action_form}) }}
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{{form_row(form.nombre,{'label':false,'attr':{'class':'form_control','placeholder':'Nombre'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{{form_row(form.correo,{'label':false,'attr':{'class':'form_control','placeholder':'Correo'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<small class=\"text-muted\">Tipo de usuario</small>
\t\t\t\t{{form_row(form.usuarioTipo,{'label':false,'attr':{'class':'form_control'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<small class=\"text-muted\">Activar Usuario</small>
\t\t\t\t{{form_row(form.estado,{'label':false,'attr':{'class':'form_control','placeholder':'Activar'}})}}
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{{form_row(form.username,{'label':false,'attr':{'class':'form_control','placeholder':'Usuario'}})}}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{{form_row(form.password,{'label':false, 'attr':{'class':'form_control', 'placeholder':'******' ,'type':'password','required':false}})}}
\t\t\t</div>
\t\t</div>
\t</section>
    <button class=\"btn btn-primary\">{{ button_label|default('Agregar') }}</button>
\t
{{ form_end(form) }}
", "usuario/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\usuario\\_form.html.twig");
    }
}
