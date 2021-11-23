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

/* multas/verpagos.html.twig */
class __TwigTemplate_0783313b5e8bf3f1447b34fd47cb0723a4257125179216827ea34428a4d1d561 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multas/verpagos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multas/verpagos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "multas/verpagos.html.twig", 1);
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

        echo "Pago";
        
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
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"card-body table-responsive p-0\" >
            
        <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
            <thead>
                <tr>
                    <th  align=\"center\">Monto Pagado</th>
                    <th align=\"center\">Fecha Comprobante</th>
                    <th align=\"center\">Fecha Ingreso</th>
                    <th  align=\"center\">N° Comprobante</th>
                    <th align=\"center\">N° Boleta</th>
                    <th align=\"center\">Tipo Deposito</th>
                    <th align=\"center\">Cta. Cte.</th>
                    <th align=\"center\">Canal</th>
                    <th align=\"center\">Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagos"]) || array_key_exists("pagos", $context) ? $context["pagos"] : (function () { throw new RuntimeError('Variable "pagos" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pago"]) {
            // line 28
            echo "                <tr>
                    <td align=\"right\">\$";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "monto", [], "any", false, false, false, 29), 0, ",", "."), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "fechaPago", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "horaPago", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "fechaRegistro", [], "any", false, false, false, 31), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"right\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "ncomprobante", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td align=\"right\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "boleta", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "pagotipo", [], "any", false, false, false, 34), "nombre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "cuentaCorriente", [], "any", false, false, false, 35), "nombre", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "pagoCanal", [], "any", false, false, false, 36), "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 40, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["img_pagos"]) || array_key_exists("img_pagos", $context) ? $context["img_pagos"] : (function () { throw new RuntimeError('Variable "img_pagos" does not exist.', 40, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "comprobante", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"far fa-file-image\"></i></a>
                            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                // line 42
                echo "                            ";
                if (((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 42, $this->source); })()), "isFinalizado", [], "any", false, false, false, 42)) ||  !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 42, $this->source); })()), "isFinalizado", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                <form method=\"post\" action=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\" onsubmit=\"return confirm('Estas seguro de eliminar este comprobante?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 46))), "html", null, true);
                    echo "\">
                                    <button class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                </form>
                            ";
                }
                // line 50
                echo "                            ";
            }
            // line 51
            echo "                        </div>
                    </td>
                </tr>

            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
            ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 60, $this->source); })()), "isFinalizado", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Agregar pago</a>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Agregar Multa</a>
            ";
        }
        // line 64
        echo "        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "multas/verpagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 64,  236 => 62,  231 => 61,  229 => 60,  223 => 56,  205 => 51,  202 => 50,  195 => 46,  190 => 44,  185 => 43,  182 => 42,  180 => 41,  174 => 40,  170 => 39,  164 => 36,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  138 => 30,  134 => 29,  131 => 28,  114 => 27,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pago{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-header\">
        <h1>Folio: {{contrato.id}}</h1>
    </div>
    <div class=\"card-body table-responsive p-0\" >
            
        <table class=\"table table-head-fixed text-nowrap table-striped table-sm\">
            <thead>
                <tr>
                    <th  align=\"center\">Monto Pagado</th>
                    <th align=\"center\">Fecha Comprobante</th>
                    <th align=\"center\">Fecha Ingreso</th>
                    <th  align=\"center\">N° Comprobante</th>
                    <th align=\"center\">N° Boleta</th>
                    <th align=\"center\">Tipo Deposito</th>
                    <th align=\"center\">Cta. Cte.</th>
                    <th align=\"center\">Canal</th>
                    <th align=\"center\">Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for pago in pagos %}
                <tr>
                    <td align=\"right\">\${{pago.monto|number_format(0,',','.')}}</td>
                    <td align=\"center\">{{pago.fechaPago|date('Y-m-d')}} {{pago.horaPago|date('H:i')}}</td>
                    <td align=\"center\">{{pago.fechaRegistro|date('Y-m-d H:i')}}</td>
                    <td align=\"right\">{{pago.ncomprobante}}</td>
                    <td align=\"right\">{{pago.boleta}}</td>
                    <td>{{pago.pagotipo.nombre}}</td>
                    <td>{{pago.cuentaCorriente.nombre}}</td>
                    <td>{{pago.pagoCanal.nombre}}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"{{path('pago_show',{'id':pago.id})}}\" class=\"btn btn-success\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"{{url_web}}{{img_pagos}}{{pago.comprobante}}\" class=\"btn btn-primary\"><i class=\"far fa-file-image\"></i></a>
                            {% if loop.last %}
                            {% if contrato.isFinalizado is null or not contrato.isFinalizado %}
                                <a href=\"{{ path('pago_edit', {'id': pago.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                <form method=\"post\" action=\"{{ path('pago_delete', {'id': pago.id}) }}\" onsubmit=\"return confirm('Estas seguro de eliminar este comprobante?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pago.id) }}\">
                                    <button class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                </form>
                            {% endif %}
                            {% endif %}
                        </div>
                    </td>
                </tr>

            {% endfor %}
        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
            {% if not contrato.isFinalizado %}
                <a href=\"{{path('pago_new',{'id':contrato.id})}}\" class=\"btn btn-primary\" >Agregar pago</a>
                <a href=\"{{path('pago_new',{'id':contrato.id})}}\" class=\"btn btn-primary\" >Agregar Multa</a>
            {% endif %}
        </div>
    </div>
    
{% endblock %}", "multas/verpagos.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\multas\\verpagos.html.twig");
    }
}
