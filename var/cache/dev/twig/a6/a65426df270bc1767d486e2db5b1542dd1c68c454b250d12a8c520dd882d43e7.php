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

/* usuario/index.html.twig */
class __TwigTemplate_529aa0968b599fd13197fb6e097d443d155ed8c250fa3c23b6c41c5ed355d6ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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

        echo "Usuarios";
        
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
    <div class=\"card\">
        <div class=\"card-header\">
            Listado
        </div>
        <div class=\"card-body\">
        <a href=\"#\" class=\"btn btn-primary\" id=\"btn-agregar\"><i class=\"fas fa-plus\"></i></a>
            <table class=\"table\">
                <thead>
                    <tr>
                        
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 29, $this->source); })()));
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
            // line 30
            echo "                    <tr>
                        
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "username", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "usuarioTipo", [], "any", false, false, false, 36), "nombre", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estado", [], "any", false, false, false, 37)) ? ("Activo") : ("Deshabilitado"));
            echo "</td>
                        <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaActivacion", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaActivacion", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "correo", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        
                        <td>
                            <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"javascript:editar(";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo ")\"><spam class='fas fa-edit'></spam></button>
                                ";
            // line 44
            echo twig_include($this->env, $context, "usuario/_delete_form.html.twig", ["id_usuario" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 44)]);
            echo "
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privilegio_index", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-warning\" > <i class=\"fas fa-share-alt\"></i></a>
                            </div>
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
            // line 50
            echo "                    <tr>
                        <td colspan=\"8\">No hay Usuarios</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
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
    

    <script type=\"text/javascript\">
        
        \$(\"#btn-agregar\").click(function(){
            \$.ajax({
                url:\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_new");
        echo "\",
                type: \"get\",
                success:function(data){
                    \$(\"#controles .modal-body\").html(data);
                    \$('#controles').modal('show');
                }
            });
            
        });

        function editar(id){
            \$.ajax({
                url:\"/usuario/\"+id+\"/edit\",
                type: \"get\",
                success:function(data){
                    \$(\"#controles .modal-body\").html(data);
                    \$('#controles').modal('show');
                }
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 81,  199 => 54,  190 => 50,  172 => 45,  168 => 44,  164 => 43,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  140 => 34,  135 => 32,  131 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Usuarios{% endblock %}

{% block body %}
    
    <div class=\"card\">
        <div class=\"card-header\">
            Listado
        </div>
        <div class=\"card-body\">
        <a href=\"#\" class=\"btn btn-primary\" id=\"btn-agregar\"><i class=\"fas fa-plus\"></i></a>
            <table class=\"table\">
                <thead>
                    <tr>
                        
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
                        
                        <td>{{ usuario.username }}</td>
                        
                        <td>{{ usuario.nombre }}</td>
                
                        <td>{{ usuario.usuarioTipo.nombre }}</td>
                        <td>{{ usuario.estado ? 'Activo' : 'Deshabilitado' }}</td>
                        <td>{{ usuario.fechaActivacion ? usuario.fechaActivacion|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ usuario.correo }}</td>
                        
                        <td>
                            <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"javascript:editar({{usuario.id}})\"><spam class='fas fa-edit'></spam></button>
                                {{ include('usuario/_delete_form.html.twig',{'id_usuario':usuario.id}) }}
                                <a href=\"{{path('privilegio_index',{'id':usuario.id})}}\" class=\"btn btn-warning\" > <i class=\"fas fa-share-alt\"></i></a>
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
    

    <script type=\"text/javascript\">
        
        \$(\"#btn-agregar\").click(function(){
            \$.ajax({
                url:\"{{path('usuario_new')}}\",
                type: \"get\",
                success:function(data){
                    \$(\"#controles .modal-body\").html(data);
                    \$('#controles').modal('show');
                }
            });
            
        });

        function editar(id){
            \$.ajax({
                url:\"/usuario/\"+id+\"/edit\",
                type: \"get\",
                success:function(data){
                    \$(\"#controles .modal-body\").html(data);
                    \$('#controles').modal('show');
                }
            });
        }
    </script>
{% endblock %}
", "usuario/index.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\usuario\\index.html.twig");
    }
}
