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

/* cliente_potencial/index.html.twig */
class __TwigTemplate_44383637208f09fcee9942c3d5d52afe118023007a3a711ed244f2859d44bbfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente_potencial/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente_potencial/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente_potencial/index.html.twig", 1);
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

        echo "Clientes potenciales";
        
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
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_potencial_new");
        echo "\" class=\"btn btn-primary\">Crear Manualmente</a>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
        
            <table class=\"table table-head-fixed text-nowrap\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Form Id</th>
                        <th>Leadgen Id</th>
                        <th>Page Id</th>
                        <th>CreatedTime</th>
                        <th>Campos</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes_potenciales"]) || array_key_exists("clientes_potenciales", $context) ? $context["clientes_potenciales"] : (function () { throw new RuntimeError('Variable "clientes_potenciales" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente_potencial"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "formId", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "leadgenId", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "pageId", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "createdTime", [], "any", false, false, false, 33), "U"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "campos", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "campos", [], "any", false, false, false, 34)), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_potencial_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">show</a>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_potencial_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente_potencial"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">edit</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                    <tr>
                        <td colspan=\"7\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente_potencial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer clearfix\">
             ";
        // line 50
        echo "        <div class=\"navigation\">
            ";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["clientes_potenciales"]) || array_key_exists("clientes_potenciales", $context) ? $context["clientes_potenciales"] : (function () { throw new RuntimeError('Variable "clientes_potenciales" does not exist.', 51, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 54
        echo "
        </div>
    </div>
    </div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente_potencial/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  177 => 51,  174 => 50,  168 => 45,  159 => 41,  150 => 37,  146 => 36,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  118 => 28,  113 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clientes potenciales{% endblock %}

{% block body %}
    <a href=\"{{ path('cliente_potencial_new') }}\" class=\"btn btn-primary\">Crear Manualmente</a>
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Listado</h3> 
        </div>
        <!-- /.card-header -->
        <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
        
            <table class=\"table table-head-fixed text-nowrap\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Form Id</th>
                        <th>Leadgen Id</th>
                        <th>Page Id</th>
                        <th>CreatedTime</th>
                        <th>Campos</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for cliente_potencial in clientes_potenciales %}
                    <tr>
                        <td>{{ cliente_potencial.id }}</td>
                        <td>{{ cliente_potencial.formId }}</td>
                        <td>{{ cliente_potencial.leadgenId }}</td>
                        <td>{{ cliente_potencial.pageId }}</td>
                        <td>{{ cliente_potencial.createdTime| date('U') }}</td>
                        <td>{{ cliente_potencial.campos ? cliente_potencial.campos|json_encode : '' }}</td>
                        <td>
                            <a href=\"{{ path('cliente_potencial_show', {'id': cliente_potencial.id}) }}\">show</a>
                            <a href=\"{{ path('cliente_potencial_edit', {'id': cliente_potencial.id}) }}\">edit</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer clearfix\">
             {# display navigation #}
        <div class=\"navigation\">
            {{ knp_pagination_render(clientes_potenciales,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
            'position': 'centered',
            'rounded': true,
            }) }}
        </div>
    </div>
    </div>

    
{% endblock %}
", "cliente_potencial/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\cliente_potencial\\index.html.twig");
    }
}
