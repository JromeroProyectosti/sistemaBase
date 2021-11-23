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

/* administradores/index.html.twig */
class __TwigTemplate_af7ac55a84ab6aaf4347f095390ee917069e4dd03cf5ad71c527e43c3654dc3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administradores/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administradores/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administradores/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
            Listado
        </div>
        <div class=\"card-body\">
        
        ";
        // line 12
        if ((0 === twig_compare((isset($context["modo"]) || array_key_exists("modo", $context) ? $context["modo"] : (function () { throw new RuntimeError('Variable "modo" does not exist.', 12, $this->source); })()), 1))) {
            // line 13
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administradores_new");
            echo "\" class=\"btn btn-primary\" id=\"btn-agregar\"><i class=\"fas fa-plus\"></i></a>
            <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administradores_index", ["modo" => "trash"]);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> Usuarios Eliminados</a>
        ";
        } else {
            // line 16
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administradores_index");
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-trash-restore\"></i> USuarios Activos</a>
        ";
        }
        // line 18
        echo "            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Tipo Usuario</th>
                        <th>Estado</th>
                        <th>Fecha alta</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "usuarioTipo", [], "any", false, false, false, 37), "nombre", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estado", [], "any", false, false, false, 38)) ? ("Activo") : ("Deshabilitado"));
            echo "</td>

                        <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaActivacion", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaActivacion", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "correo", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        
                        <td>
                            <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">
                                ";
            // line 45
            if ((0 === twig_compare((isset($context["modo"]) || array_key_exists("modo", $context) ? $context["modo"] : (function () { throw new RuntimeError('Variable "modo" does not exist.', 45, $this->source); })()), 1))) {
                // line 46
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administradores_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\"><spam class='fas fa-edit'></spam></a>
                                ";
                // line 47
                echo twig_include($this->env, $context, "administradores/_delete_form.html.twig", ["id_usuario" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 47)]);
                echo "
                                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privilegio_index", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-warning\" > <i class=\"fas fa-share-alt\"></i></a>
                                ";
            } else {
                // line 50
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administradores_restore", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-success\"><spam class='fas fa-trash-restore'></spam></a>

                                ";
            }
            // line 53
            echo "                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                    <tr>
                        <td colspan=\"8\">No hay Usuarios</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"navigation\">
                ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 66, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", [], ["position" => "centered", "rounded" => true]);
        // line 69
        echo "
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"controles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
        
          </div>
         
        </div>
      </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administradores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 69,  238 => 66,  231 => 61,  222 => 57,  206 => 53,  199 => 50,  194 => 48,  190 => 47,  185 => 46,  183 => 45,  176 => 41,  172 => 40,  167 => 38,  163 => 37,  159 => 36,  155 => 35,  151 => 34,  148 => 33,  130 => 32,  114 => 18,  108 => 16,  103 => 14,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina}}{% endblock %}

{% block body %}
<div class=\"card\">
        <div class=\"card-header\">
            Listado
        </div>
        <div class=\"card-body\">
        
        {% if modo == 1 %}
        <a href=\"{{path('administradores_new')}}\" class=\"btn btn-primary\" id=\"btn-agregar\"><i class=\"fas fa-plus\"></i></a>
            <a href=\"{{path('administradores_index',{'modo':'trash'})}}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> Usuarios Eliminados</a>
        {% else %}
            <a href=\"{{path('administradores_index')}}\" class=\"btn btn-success\"><i class=\"fas fa-trash-restore\"></i> USuarios Activos</a>
        {% endif %}
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Tipo Usuario</th>
                        <th>Estado</th>
                        <th>Fecha alta</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {% for usuario in usuarios %}
                    <tr>
                        <td>{{ usuario.id }}</td>
                        <td>{{ usuario.username }}</td>
                        <td>{{ usuario.nombre }}</td>
                        <td>{{ usuario.usuarioTipo.nombre }}</td>
                        <td>{{ usuario.estado ? 'Activo' : 'Deshabilitado' }}</td>

                        <td>{{ usuario.fechaActivacion ? usuario.fechaActivacion|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ usuario.correo }}</td>
                        
                        <td>
                            <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">
                                {% if modo == 1 %}
                                <a href=\"{{path('administradores_edit',{'id':usuario.id})}}\" class=\"btn btn-secondary\"><spam class='fas fa-edit'></spam></a>
                                {{ include('administradores/_delete_form.html.twig',{'id_usuario':usuario.id}) }}
                                <a href=\"{{path('privilegio_index',{'id':usuario.id})}}\" class=\"btn btn-warning\" > <i class=\"fas fa-share-alt\"></i></a>
                                {% else %}
                                <a href=\"{{path('administradores_restore',{'id':usuario.id})}}\" class=\"btn btn-success\"><spam class='fas fa-trash-restore'></spam></a>

                                {% endif %}
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\">No hay Usuarios</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <div class=\"navigation\">
                {{ knp_pagination_render(usuarios,'@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',{},{
                'position': 'centered',
                'rounded': true,
                }) }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"controles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
        
          </div>
         
        </div>
      </div>
    </div>
    
{% endblock %}
", "administradores/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\administradores\\index.html.twig");
    }
}
