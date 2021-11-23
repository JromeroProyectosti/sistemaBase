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

/* menu/_main.html.twig */
class __TwigTemplate_ab54c242738efd1092a2d808a86a90df768ed42ace729c86ee9ea31a824743ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/_main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/_main.html.twig"));

        // line 1
        echo "<!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 7, $this->source); })()), "getSesion", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      ";
        // line 15
        if (array_key_exists("items", $context)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "
              <li class=\"nav-item ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["item"], "raiz1", [], "any", false, false, false, 18);
                echo " \">
              <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"nav-link ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", true, true, false, 19)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 19), "html", null, true);
                }
                echo "\">
                <i class=\"nav-icon ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 20), "html", null, true);
                echo "\"></i>
                <p>
                  ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "
                  ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["item"], "raiz2", [], "any", false, false, false, 23);
                echo "
                </p>
              </a>
              ";
                // line 26
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "raiz1", [], "any", false, false, false, 26), ""))) {
                    // line 27
                    echo "                <ul class=\"nav nav-treeview\">
                ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) || array_key_exists("subitems", $context) ? $context["subitems"] : (function () { throw new RuntimeError('Variable "subitems" does not exist.', 28, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 29
                        echo "                  ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["subitem"], "menuraiz", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["item"], "menuraiz", [], "any", false, false, false, 29)))) {
                            // line 30
                            echo "                    <li class=\"nav-item\">
                      <a href=\"";
                            // line 31
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, false, 31), "html", null, true);
                            echo "\" class=\"nav-link ";
                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "class", [], "any", true, true, false, 31)) {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "class", [], "any", false, false, false, 31), "html", null, true);
                            }
                            echo "\">
                        <i class=\"";
                            // line 32
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "icon", [], "any", false, false, false, 32), "html", null, true);
                            echo " nav-icon\"></i>
                        <p>";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, false, 33), "html", null, true);
                            echo "</p>
                      </a>
                    </li>
                  ";
                        }
                        // line 37
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                </ul>
              ";
                }
                // line 41
                echo "            </li>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      ";
        }
        // line 45
        echo "

          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  152 => 44,  144 => 41,  140 => 39,  133 => 37,  126 => 33,  122 => 32,  114 => 31,  111 => 30,  108 => 29,  104 => 28,  101 => 27,  99 => 26,  93 => 23,  89 => 22,  84 => 20,  76 => 19,  72 => 18,  69 => 17,  64 => 16,  62 => 15,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">{{sesion.getSesion.nombre}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      {% if items is defined %}
        {% for item in items %}

              <li class=\"nav-item {{item.raiz1|raw}} \">
              <a href=\"{{item.url}}\" class=\"nav-link {% if item.class is defined %}{{ item.class }}{% endif %}\">
                <i class=\"nav-icon {{item.icon}}\"></i>
                <p>
                  {{item.title}}
                  {{item.raiz2|raw}}
                </p>
              </a>
              {% if item.raiz1 != '' %}
                <ul class=\"nav nav-treeview\">
                {% for subitem in subitems %}
                  {% if subitem.menuraiz == item.menuraiz %}
                    <li class=\"nav-item\">
                      <a href=\"{{subitem.url}}\" class=\"nav-link {% if subitem.class is defined %}{{ subitem.class }}{% endif %}\">
                        <i class=\"{{subitem.icon}} nav-icon\"></i>
                        <p>{{subitem.title}}</p>
                      </a>
                    </li>
                  {% endif %}

                {% endfor %}
                </ul>
              {% endif %}
            </li>

        {% endfor %}
      {% endif %}


          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->", "menu/_main.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\menu\\_main.html.twig");
    }
}
