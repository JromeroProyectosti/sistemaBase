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

/* menu/index.html.twig */
class __TwigTemplate_44851b69b43157b7d4da8d3046853df5e3cd138c275cf14857599db0c14bdb3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu/index.html.twig", 1);
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

        echo "Menu index";
        
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
    <div class='card'>
        <div class=\"card-header\">Listado ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menuCabezera"]) || array_key_exists("menuCabezera", $context) ? $context["menuCabezera"] : (function () { throw new RuntimeError('Variable "menuCabezera" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
        <div class=\"card-body\">
              <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["menuCabezera"]) || array_key_exists("menuCabezera", $context) ? $context["menuCabezera"] : (function () { throw new RuntimeError('Variable "menuCabezera" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Orden</th>
                        <th width='20px'>Padre</th>
                        <th>Nombre</th>
                        <th>Modulo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "orden", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        
                        <td></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["menu"], "nombre", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menu"], "nombre", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
            echo "</td>
                    
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "menus", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 35
                echo "                    <tr>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "orden", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                       
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "nombre", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "nombre", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["subMenu"], "nombre", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["subMenu"], "nombre", [], "any", false, false, false, 40), "")) : ("")), "html", null, true);
                echo "</td>
                        <td>
                          
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["subMenu"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                    <tr>
                        <td colspan=\"3\">Sin registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>
        </div>
    </div>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 52,  183 => 48,  178 => 47,  168 => 43,  162 => 40,  158 => 39,  154 => 38,  149 => 36,  146 => 35,  142 => 34,  136 => 31,  130 => 28,  126 => 27,  120 => 24,  117 => 23,  112 => 22,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu index{% endblock %}

{% block body %}
    
    <div class='card'>
        <div class=\"card-header\">Listado {{menuCabezera.nombre}}</div>
        <div class=\"card-body\">
              <a href=\"{{ path('menu_new',{'id':menuCabezera.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Orden</th>
                        <th width='20px'>Padre</th>
                        <th>Nombre</th>
                        <th>Modulo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                {% for menu in menus %}
                    <tr>
                        <td>{{menu.orden}}</td>
                        
                        <td></td>
                        <td>{{ menu.nombre }}</td>
                        <td>{{ menu.nombre|default('')}}</td>
                    
                        <td>
                            <a href=\"{{ path('menu_edit', {'id': menu.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    {% for subMenu in menu.menus %}
                    <tr>
                        <td>{{subMenu.orden}}</td>
                       
                        <td>{{ menu.nombre }}</td>
                        <td>{{ subMenu.nombre }}</td>
                        <td>{{ subMenu.nombre|default('')}}</td>
                        <td>
                          
                            <a href=\"{{ path('menu_edit', {'id': subMenu.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"3\">Sin registros</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

  
{% endblock %}
", "menu/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\menu\\index.html.twig");
    }
}
