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

/* materia_estrategia/_form.html.twig */
class __TwigTemplate_7ef4b783bec8209099e55165a288fce8d3ccd3fbb449aa480ed9aa8f920e76e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia_estrategia/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materia_estrategia/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <small class=\"text-muted\">Sub Materia</small>
\t\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "estrategiaJuridica", [], "any", false, false, false, 9), 'row', ["label" => false, "attr" => ["class" => "form-control", "maxlength" => "50"]]);
        echo "
                </div>
                <div class=\"col-sm-6 col-md-6\">
                    <button class=\"btn btn-success\">";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 12, $this->source); })()), "agregar")) : ("agregar")), "html", null, true);
        echo "</button>
                </div>
            </div>

        </section>
    </div>
    <div class=\"foot\">
        
    </div>
</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "materia_estrategia/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  60 => 12,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"card\">
\t<div class=\"card-body\">

\t\t<section>\t
\t\t\t<div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <small class=\"text-muted\">Sub Materia</small>
\t\t\t\t\t{{form_row(form.estrategiaJuridica,{'label':false,'attr':{'class':'form-control','maxlength':'50'}})}}
                </div>
                <div class=\"col-sm-6 col-md-6\">
                    <button class=\"btn btn-success\">{{ button_label|default('agregar') }}</button>
                </div>
            </div>

        </section>
    </div>
    <div class=\"foot\">
        
    </div>
</div>
{{ form_end(form) }}
", "materia_estrategia/_form.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\materia_estrategia\\_form.html.twig");
    }
}
