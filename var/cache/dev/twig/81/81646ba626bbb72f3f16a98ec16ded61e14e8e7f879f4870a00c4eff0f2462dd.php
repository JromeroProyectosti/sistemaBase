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

/* cobranza/lote.html.twig */
class __TwigTemplate_a06efb9091738ecfcfe4c02cb8007b343eadf3268e49b4d729b9039696f4a93d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/lote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobranza/lote.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cobranza/lote.html.twig", 1);
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

        echo "Editar Lote";
        
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
<div class=\"row\">
    <div class=\"col-sm-12  col-md-8\">

        <div class=\"card\">
            <div class=\"card-header\">
                <h1>Folio: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"card-body table-responsive pad\">
                <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cobranza_lote", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-3\">
                            <small class=\"text-muted\">Lote</small><br>
                            <select name=\"cboLotes\" id=\"\" class=\"form-control lotes\">
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotes"]) || array_key_exists("lotes", $context) ? $context["lotes"] : (function () { throw new RuntimeError('Variable "lotes" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lote"]) {
            // line 21
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\"
                                    ";
            // line 22
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["lote"], "id", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 22, $this->source); })()), "idLote", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)))) {
                // line 23
                echo "                                        selected
                                    ";
            }
            // line 25
            echo "                                    >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                            </select>
                            
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <small class=\"text-muted\">Lote</small><br>
                            <div class=\"asociado\"></div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-3\">
                            <button class=\"btn btn-primary\">Modificar</button>
                            
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    \$(\".lotes\").on('change',function(){
        \$.ajax({
            url:\"/cobranza/\"+\$(this).val()+\"/cobrador\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                console.log(data);
                data_array= JSON.parse(data);
                console.log(data_array);
                \$(\".asociado\").html(data_array['nombre']);
                //\$(\"#contrato\").html(\"\");
            }});
        
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cobranza/lote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 27,  125 => 25,  121 => 23,  119 => 22,  114 => 21,  110 => 20,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar Lote{% endblock %}

{% block body %}

<div class=\"row\">
    <div class=\"col-sm-12  col-md-8\">

        <div class=\"card\">
            <div class=\"card-header\">
                <h1>Folio: {{contrato.id}}</h1>
            </div>
            <div class=\"card-body table-responsive pad\">
                <form action=\"{{path('cobranza_lote',{'id':contrato.id}) }}\" method=\"POST\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-3\">
                            <small class=\"text-muted\">Lote</small><br>
                            <select name=\"cboLotes\" id=\"\" class=\"form-control lotes\">
                                {% for lote in lotes %}
                                    <option value=\"{{lote.id}}\"
                                    {% if lote.id == contrato.idLote.id %}
                                        selected
                                    {% endif %}
                                    >{{lote.nombre}}</option>
                                {% endfor %}
                            </select>
                            
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <small class=\"text-muted\">Lote</small><br>
                            <div class=\"asociado\"></div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-3\">
                            <button class=\"btn btn-primary\">Modificar</button>
                            
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    \$(\".lotes\").on('change',function(){
        \$.ajax({
            url:\"/cobranza/\"+\$(this).val()+\"/cobrador\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                //\$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                console.log(data);
                data_array= JSON.parse(data);
                console.log(data_array);
                \$(\".asociado\").html(data_array['nombre']);
                //\$(\"#contrato\").html(\"\");
            }});
        
    })
</script>
{% endblock %}
", "cobranza/lote.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cobranza\\lote.html.twig");
    }
}
