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

/* contrato/edit.html.twig */
class __TwigTemplate_60d7a50884795f345d3d4d19ef0dae595c76a8b3d4b584fa6584e1f692ff866e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contrato/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Contrato";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-12 col-md-8\">
    ";
        // line 8
        echo twig_include($this->env, $context, "contrato/_form.html.twig", ["button_label" => "Modificar"]);
        echo "
        </div>
    <div class=\"col-sm-12 col-md-4\">
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
            ";
        // line 14
        $context["agenda"] = twig_get_attribute($this->env, $this->source, ($context["contrato"] ?? null), "agenda", [], "any", false, false, false, 14);
        // line 15
        echo "            <!-- Timelime example  -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    <!-- The time line -->
                        <div class=\"timeline\">
                            <!-- timeline time label -->
                            <div class=\"time-label\">
                            <span class=\"bg-red\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agenda"] ?? null), "fechaCarga", [], "any", false, false, false, 22), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agenda"] ?? null), "agendaObservacions", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 27
            echo "                                
                            
                            <div class=\"time-label\">
                                <span class=\"bg-green\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
            echo "</span>
                            </div>
                            <div>
                                <i class=\"fas fa-envelope bg-blue\"></i>
                                <div class=\"timeline-item\">
                                    <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 35), "h:i"), "html", null, true);
            echo "</span>
                                    <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 36), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 36), "html", null, true);
            echo " </h3>
    
                                    <div class=\"timeline-body\">
                                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                    </div>
                                   
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            <div>
                                <i class=\"fas fa-clock bg-gray\"></i>
                              </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contrato/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  118 => 39,  110 => 36,  106 => 35,  98 => 30,  93 => 27,  89 => 26,  82 => 22,  73 => 15,  71 => 14,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrato/edit.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\contrato\\edit.html.twig");
    }
}
