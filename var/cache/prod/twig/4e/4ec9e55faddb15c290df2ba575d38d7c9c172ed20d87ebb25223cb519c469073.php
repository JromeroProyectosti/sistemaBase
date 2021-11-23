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
class __TwigTemplate_a1af82da506fed7b66659e36c42d07b3f37078b372a21c3c2def1303a2e633e8 extends Template
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
        // line 1
        echo "<!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sesion"] ?? null), "getSesion", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                    $context['_seq'] = twig_ensure_traversable(($context["subitems"] ?? null));
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
        return array (  149 => 45,  146 => 44,  138 => 41,  134 => 39,  127 => 37,  120 => 33,  116 => 32,  108 => 31,  105 => 30,  102 => 29,  98 => 28,  95 => 27,  93 => 26,  87 => 23,  83 => 22,  78 => 20,  70 => 19,  66 => 18,  63 => 17,  58 => 16,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/_main.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\menu\\_main.html.twig");
    }
}
