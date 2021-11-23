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

/* mis_datos/index.html.twig */
class __TwigTemplate_ab3c55f60099d0d3c048ac4e7b259869daedf6a91f9a3f5ea6eac62399d8538d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mis_datos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mis_datos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mis_datos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mis Datos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<br>
<br>

<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">
    
            <div class=\"card-body\">
                <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mis_datos_modificar");
        echo "\" method=\"post\">
                <div id=\"mensaje\" class=\"row\">";
        // line 16
        echo ((array_key_exists("mensaje", $context)) ? (_twig_default_filter((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 16, $this->source); })()), "")) : (""));
        echo "</div>
                <div class=\"row\">
                    
                    <div class=\"col-md-4 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Usuario</small>
                        <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misdatos"]) || array_key_exists("misdatos", $context) ? $context["misdatos"] : (function () { throw new RuntimeError('Variable "misdatos" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                        
                    </div>
                    <div class=\"col-md-4 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Cargo</small>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misdatos"]) || array_key_exists("misdatos", $context) ? $context["misdatos"] : (function () { throw new RuntimeError('Variable "misdatos" does not exist.', 26, $this->source); })()), "usuarioTipo", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                    </div>
                    
                    <div class=\"col-md-6 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Nombre</small>
                        <input type=\"text\" class=\"form-control\" name=\"nombre\" aria-describedby=\"nombreHelp\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misdatos"]) || array_key_exists("misdatos", $context) ? $context["misdatos"] : (function () { throw new RuntimeError('Variable "misdatos" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), "html", null, true);
        echo "\" required>
                        
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputCorreo\">Correo</small>
                        <input type=\"email\" class=\"form-control\" name=\"correo\" aria-describedby=\"correoHelp\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misdatos"]) || array_key_exists("misdatos", $context) ? $context["misdatos"] : (function () { throw new RuntimeError('Variable "misdatos" does not exist.', 36, $this->source); })()), "correo", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required>
                        <small id=\"correoHelp\" class=\"form-text text-muted\">El correo servirá para envio de alertas!</small>
                    </div>
                    <div class=\"mx-auto\">
                        <button type=\"submit\" class=\"btn btn-primary\">Modificar datos</button>
                    </div>
                </div>
                
                </form>
            </div>
        </div>
    </div>
    <div class=\"col-md-4 col-sm-12\">
        <div class=\"card\">
    
            <div class=\"card-body\">
                <form action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mis_datos_password");
        echo "\" method=\"post\" onsubmit=\"return validaPassword()\">
                    <div class=\"row\">
                        <div id=\"error\">";
        // line 54
        echo ((array_key_exists("error", $context)) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "")) : (""));
        echo "</div>
                        <div class=\"col-md-6 col-sm-12\">
                            <small class=\"text-muted\" for=\"inputNombre\">Nueva Password</small>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" aria-describedby=\"nombreHelp\" value=\"\" required>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <small class=\"text-muted\" for=\"inputNombre\">Repetir Password</small>
                            <input type=\"password\" class=\"form-control\" name=\"rePassword\" id=\"rePassword\" aria-describedby=\"nombreHelp\" value=\"\" required>
                            
                        </div>
                        <div class=\"mx-auto\"><button type=\"submit\" class=\"btn btn-primary\">Cambiar Password</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validaPassword(){

        if(\$(\"#password\").val()==\"\"){
            
            return false;
        }
        if(\$(\"#password\").val()!=\$(\"#rePassword\").val()){
            \$(\"#error\").html(
               \"<div class='alert alert-danger alert-dismissible fade show' role='alert'>\"+
               \"<strong>Error</strong> Los passwords deben ser iguales!!!\"+
               \"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>\"+
               \"<span aria-hidden='true'>&times;</span></button></div>\"
            );
            return false;
        }
        return true;
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mis_datos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  154 => 52,  135 => 36,  127 => 31,  119 => 26,  111 => 21,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Datos{% endblock %}

{% block body %}

<br>
<br>

<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <div class=\"card\">
    
            <div class=\"card-body\">
                <form action=\"{{path('mis_datos_modificar')}}\" method=\"post\">
                <div id=\"mensaje\" class=\"row\">{{mensaje|default('')|raw}}</div>
                <div class=\"row\">
                    
                    <div class=\"col-md-4 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Usuario</small>
                        <p>{{misdatos.username}}</p>
                        
                    </div>
                    <div class=\"col-md-4 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Cargo</small>
                        <p>{{misdatos.usuarioTipo.nombre}}</p>
                    </div>
                    
                    <div class=\"col-md-6 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputNombre\">Nombre</small>
                        <input type=\"text\" class=\"form-control\" name=\"nombre\" aria-describedby=\"nombreHelp\" value=\"{{misdatos.nombre}}\" required>
                        
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <small class=\"text-muted\" for=\"inputCorreo\">Correo</small>
                        <input type=\"email\" class=\"form-control\" name=\"correo\" aria-describedby=\"correoHelp\" value=\"{{misdatos.correo}}\" required>
                        <small id=\"correoHelp\" class=\"form-text text-muted\">El correo servirá para envio de alertas!</small>
                    </div>
                    <div class=\"mx-auto\">
                        <button type=\"submit\" class=\"btn btn-primary\">Modificar datos</button>
                    </div>
                </div>
                
                </form>
            </div>
        </div>
    </div>
    <div class=\"col-md-4 col-sm-12\">
        <div class=\"card\">
    
            <div class=\"card-body\">
                <form action=\"{{path('mis_datos_password')}}\" method=\"post\" onsubmit=\"return validaPassword()\">
                    <div class=\"row\">
                        <div id=\"error\">{{error|default('')|raw}}</div>
                        <div class=\"col-md-6 col-sm-12\">
                            <small class=\"text-muted\" for=\"inputNombre\">Nueva Password</small>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" aria-describedby=\"nombreHelp\" value=\"\" required>
                        </div>
                        <div class=\"col-md-6 col-sm-12\">
                            <small class=\"text-muted\" for=\"inputNombre\">Repetir Password</small>
                            <input type=\"password\" class=\"form-control\" name=\"rePassword\" id=\"rePassword\" aria-describedby=\"nombreHelp\" value=\"\" required>
                            
                        </div>
                        <div class=\"mx-auto\"><button type=\"submit\" class=\"btn btn-primary\">Cambiar Password</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validaPassword(){

        if(\$(\"#password\").val()==\"\"){
            
            return false;
        }
        if(\$(\"#password\").val()!=\$(\"#rePassword\").val()){
            \$(\"#error\").html(
               \"<div class='alert alert-danger alert-dismissible fade show' role='alert'>\"+
               \"<strong>Error</strong> Los passwords deben ser iguales!!!\"+
               \"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>\"+
               \"<span aria-hidden='true'>&times;</span></button></div>\"
            );
            return false;
        }
        return true;
    }
</script>

{% endblock %}

", "mis_datos/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\mis_datos\\index.html.twig");
    }
}
