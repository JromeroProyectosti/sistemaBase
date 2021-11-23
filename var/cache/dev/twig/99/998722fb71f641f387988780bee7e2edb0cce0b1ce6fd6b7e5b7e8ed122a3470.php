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

/* panel_abogado/new.html.twig */
class __TwigTemplate_240c0c78a99b7330d5cabd5e5fdaf2ce380721e088d23e48a2e9bbd8524ebea4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_abogado/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel_abogado/new.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "agenda abogado")) : ("agenda abogado")), "html", null, true);
        
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
        echo "<div class=\"row\">
<div class=\"col-sm-12 col-md-8\">
    <section  class=\"sticky-top\">
    <div class=\"card\">
        <div class=\"card-body table-responsive pad\">
           
            <h4>Datos Lead</h4>
            <div class=\"row\">
               
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <small class=\"text-muted\">Compañia</small>
                            ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), 5))) {
            // line 20
            echo "                                <select name=\"cboCompanias\" class=\"form-control\" onchange=\"javascript:cambiaCompania(this.value)\">
                                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) || array_key_exists("companias", $context) ? $context["companias"] : (function () { throw new RuntimeError('Variable "companias" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["compania"]) {
                // line 22
                echo "                                        <option ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 22, $this->source); })()), "cuenta", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)))) {
                    // line 23
                    echo "                                            selected
                                        ";
                }
                // line 25
                echo "                                        value =\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compania"], "nombre", [], "any", false, false, false, 25), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compania'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                                </select>
                            ";
        } else {
            // line 29
            echo "                            <br>
                            <label>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 30, $this->source); })()), "cuenta", [], "any", false, false, false, 30), "nombre", [], "any", false, false, false, 30), "html", null, true);
            echo "</label>
                            ";
        }
        // line 32
        echo "
                        </div>
                        
                        <div class=\"col-4\" id=\"status\">
                            
                        </div>

                    </div>
                    
                    
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Canal</small><br>
                    <label>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 45, $this->source); })()), "campania", [], "any", false, false, false, 45), "html", null, true);
        echo "</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Nombre Cliente</small><br>
                    <label>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 50, $this->source); })()), "nombreCliente", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Rut Cliente</small><br>
                    <label>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 54, $this->source); })()), "rutCliente", [], "any", false, false, false, 54), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Telefono Cliente</small><br>
                    <label>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 58, $this->source); })()), "telefonoCliente", [], "any", false, false, false, 58), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Telefono Recado Cliente</small><br>
                    <label>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 62, $this->source); })()), "telefonoRecadoCliente", [], "any", false, false, false, 62), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Correo Cliente</small><br>
                    <label>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 66, $this->source); })()), "emailCliente", [], "any", false, false, false, 66), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <small class=\"text-muted\">Monto Deuda</small>
                    <br>
                    <label>";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 71, $this->source); })()), "monto", [], "any", false, false, false, 71), 0, ",", "."), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Abogado</small><br>
                    <label>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 75, $this->source); })()), "abogado", [], "any", false, false, false, 75), "nombre", [], "any", false, false, false, 75), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Reunión</small><br>
                    <label>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 79, $this->source); })()), "reunion", [], "any", false, false, false, 79), "nombre", [], "any", false, false, false, 79), "html", null, true);
        echo "</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad Cliente</small><br>
                    <label>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 83, $this->source); })()), "ciudadCliente", [], "any", false, false, false, 83), "html", null, true);
        echo "</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Fecha</small><br>
                    <label>";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 88, $this->source); })()), "fechaAsignado", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true);
        echo "</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Hora</small><br>
                    <label>";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 93, $this->source); })()), "fechaAsignado", [], "any", false, false, false, 93), "h:i"), "html", null, true);
        echo "</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Estado Agenda</small><br>
                    <label>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 98, $this->source); })()), "status", [], "any", false, false, false, 98), "html", null, true);
        echo "</label>
                    
                </div>
                
            </div>
            <br />
            <h4>Gestion</h4>
           
            <div class=\"row\">
                ";
        // line 107
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 107, $this->source); })()), "status", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), [0 => 4, 1 => 5])) {
            // line 108
            echo "                
                
                <div class=\"col-sm-12 col-md-12\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statues"]) || array_key_exists("statues", $context) ? $context["statues"] : (function () { throw new RuntimeError('Variable "statues" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 113
                echo "                        <label class=\"btn btn-success 
                        ";
                // line 114
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 114, $this->source); })()), "status", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114)))) {
                    // line 115
                    echo "                            active
                        ";
                }
                // line 117
                echo "                        \">
                            <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                            ";
                // line 119
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 119, $this->source); })()), "status", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)))) {
                    // line 120
                    echo "                            checked
                            ";
                } else {
                    // line 122
                    echo "                            onclick=\"javascript:contrata(this.value);\"
                            ";
                }
                // line 124
                echo "                             value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 124), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 124), "html", null, true);
                echo "
                          </label>
                          
                          
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 129, $this->source); })()), "getSesion", [], "any", false, false, false, 129), "usuarioTipo", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), [0 => 3, 1 => 4, 2 => 1])) {
                // line 130
                echo "                          <label class=\"btn btn-success\">
                            <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                        
                            onclick=\"javascript:getReasignar(11);\"
                            
                            value=\"5\"> Reasignar

                        </label>
                          ";
            }
            // line 139
            echo "                        
                      </div>
                </div>
                <form action=\"#\" method=\"post\">
                    <input type=\"hidden\" value=\"5\" name=\"chkStatus\">
                    <div class=\"col-sm-12 col-md-12\" id=\"abogado\">


                    </div>
                </form>
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
(isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 149, $this->source); })()), "status", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), 7))) {
            // line 150
            echo "                <div class=\"col-sm-12 col-md-12\">
                    <button class=\"btn btn-primary\" onclick=\"javascript:contrata(7)\">Ver Contrato</button>
                </div>
                ";
        } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
(isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 153, $this->source); })()), "getSesion", [], "any", false, false, false, 153), "usuarioTipo", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), [0 => 3, 1 => 4, 2 => 1])) {
            // line 154
            echo "                <form action=\"#\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12\">
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                                <label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReasignar(5);\"
                                    
                                    value=\"5\"> Reasignar

                                </label>
                            </div>
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\" id=\"abogado\">
                            

                        </div>
                    </div>
                </form>
                ";
        }
        // line 176
        echo "                <div class=\"col-sm-12 col-md-12\" id=\"contrato\">


                </div>
            </div>
            
            
        </div>

    </div>
    </section>
</div>

    <div class=\"col-sm-12 col-md-4\">
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
            
            <!-- Timelime example  -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    <!-- The time line -->
                        <div class=\"timeline\">
                            <!-- timeline time label -->
                            <div class=\"time-label\">
                            <span class=\"bg-red\">";
        // line 201
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 201, $this->source); })()), "fechaCarga", [], "any", false, false, false, 201), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 205, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 206
            echo "                                
                            
                            <div class=\"time-label\">
                                <span class=\"bg-green\">";
            // line 209
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 209), "d-m-Y"), "html", null, true);
            echo "</span>
                            </div>
                            <div>
                                <i class=\"fas fa-envelope bg-blue\"></i>
                                <div class=\"timeline-item\">
                                    <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 214), "h:i"), "html", null, true);
            echo "</span>
                                    <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 215), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 215), "html", null, true);
            echo " </h3>
    
                                    <div class=\"timeline-body\">
                                        ";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 218), "html", null, true);
            echo "
                                    </div>
                                   
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
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
    <!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Calendario</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\" id=\"bodyModal\">
          
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>

       function contrata(status){
            if(status ==7){
                \$.ajax({
                    url:\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_contrata", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260)]), "html", null, true);
        echo "\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#contrato\").html(data);
                        \$(\"#abogado\").html(\"\");
                    }

                });
            }else if(status==5){
                \$.ajax({
                    url:\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_abogados", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 279, $this->source); })()), "id", [], "any", false, false, false, 279)]), "html", null, true);
        echo "\",
                    type: \"get\",
                    dataType: \"html\",
                    data:\"chkStatus=5\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                        \$(\"#contrato\").html(\"\");
                    }
        
                });
            }else{
                \$.ajax({
                    url:\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_no_contrata", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299)]), "html", null, true);
        echo "\",
                    type: \"get\",
                    dataType: \"html\",
                    data:\"status=\"+status,
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#contrato\").html(data);
                        \$(\"#abogado\").html(\"\");
                    }

                });
                
            }
       }
       function getReasignar(status){
        \$.ajax({
            url:\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_abogados", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 322, $this->source); })()), "id", [], "any", false, false, false, 322)]), "html", null, true);
        echo "\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#abogado\").html(data);
                \$(\"#contrato\").html(\"\");
            }

        });
        
    }
    function cambiaCompania(status){

        cambiamateria(status);
        cambiaAcreedores(status);
        
        \$.ajax({
            url:\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_abogado_compania", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 347, $this->source); })()), "id", [], "any", false, false, false, 347)]), "html", null, true);
        echo "\",
            type: \"get\",
            dataType: \"html\",
            data:\"compania=\"+status,
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#status\").html(data);
                //\$(\"#contrato\").html(\"\");

                

                \$.ajax({
                    url:\"/panel_abogado/\"+status+\"/sucursales\",
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
                        \$(\"#sucursal\").find('option').remove();
                        \$(\"#sucursal\").append(data);
                        //\$(\"#contrato\").html(\"\");
                    }});
                
                    \$.ajax({
                        url:\"/panel_abogado/\"+status+\"/tramitadores\",
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
                            \$(\"#tramitador\").find('option').remove();
                            \$(\"#tramitador\").append(data);
                            //\$(\"#contrato\").html(\"\");
                        }});

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
        return "panel_abogado/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 347,  550 => 322,  524 => 299,  501 => 279,  479 => 260,  441 => 224,  429 => 218,  421 => 215,  417 => 214,  409 => 209,  404 => 206,  400 => 205,  393 => 201,  366 => 176,  342 => 154,  340 => 153,  335 => 150,  333 => 149,  321 => 139,  310 => 130,  307 => 129,  293 => 124,  289 => 122,  285 => 120,  283 => 119,  279 => 117,  275 => 115,  273 => 114,  270 => 113,  266 => 112,  260 => 108,  258 => 107,  246 => 98,  238 => 93,  230 => 88,  222 => 83,  215 => 79,  208 => 75,  201 => 71,  193 => 66,  186 => 62,  179 => 58,  172 => 54,  165 => 50,  157 => 45,  142 => 32,  137 => 30,  134 => 29,  130 => 27,  119 => 25,  115 => 23,  112 => 22,  108 => 21,  105 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('agenda abogado')}}{% endblock %}

{% block body %}
<div class=\"row\">
<div class=\"col-sm-12 col-md-8\">
    <section  class=\"sticky-top\">
    <div class=\"card\">
        <div class=\"card-body table-responsive pad\">
           
            <h4>Datos Lead</h4>
            <div class=\"row\">
               
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <small class=\"text-muted\">Compañia</small>
                            {% if agenda.status.id==5 %}
                                <select name=\"cboCompanias\" class=\"form-control\" onchange=\"javascript:cambiaCompania(this.value)\">
                                    {% for compania in companias %}
                                        <option {% if compania.id==agenda.cuenta.id %}
                                            selected
                                        {% endif %}
                                        value =\"{{compania.id}}\" >{{compania.nombre}}</option>
                                    {% endfor %}
                                </select>
                            {% else %}
                            <br>
                            <label>{{agenda.cuenta.nombre}}</label>
                            {% endif %}

                        </div>
                        
                        <div class=\"col-4\" id=\"status\">
                            
                        </div>

                    </div>
                    
                    
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Canal</small><br>
                    <label>{{agenda.campania}}</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Nombre Cliente</small><br>
                    <label>{{agenda.nombreCliente}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Rut Cliente</small><br>
                    <label>{{agenda.rutCliente}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Telefono Cliente</small><br>
                    <label>{{agenda.telefonoCliente}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Telefono Recado Cliente</small><br>
                    <label>{{agenda.telefonoRecadoCliente}}</label>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <small class=\"text-muted\">Correo Cliente</small><br>
                    <label>{{agenda.emailCliente}}</label>
                </div>
                <div class=\"col-sm-12 col-md-2\">
                    <small class=\"text-muted\">Monto Deuda</small>
                    <br>
                    <label>{{agenda.monto|number_format(0, ',', '.')}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Abogado</small><br>
                    <label>{{agenda.abogado.nombre}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Reunión</small><br>
                    <label>{{agenda.reunion.nombre}}</label>
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Ciudad Cliente</small><br>
                    <label>{{agenda.ciudadCliente}}</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Fecha</small><br>
                    <label>{{agenda.fechaAsignado|date('Y-m-d')}}</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Hora</small><br>
                    <label>{{agenda.fechaAsignado|date('h:i')}}</label>
                    
                </div>
                <div class=\"col-sm-12 col-md-3\">
                    <small class=\"text-muted\">Estado Agenda</small><br>
                    <label>{{agenda.status}}</label>
                    
                </div>
                
            </div>
            <br />
            <h4>Gestion</h4>
           
            <div class=\"row\">
                {% if agenda.status.id in [4,5] %}
                
                
                <div class=\"col-sm-12 col-md-12\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        {% for status in statues %}
                        <label class=\"btn btn-success 
                        {% if status.id==agenda.status.id %}
                            active
                        {% endif %}
                        \">
                            <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                            {% if status.id==agenda.status.id %}
                            checked
                            {% else %}
                            onclick=\"javascript:contrata(this.value);\"
                            {% endif %}
                             value=\"{{status.id}}\"> {{status.nombre}}
                          </label>
                          
                          
                        {% endfor %}
                        {% if sesion.getSesion.usuarioTipo.id in [3,4,1] %}
                          <label class=\"btn btn-success\">
                            <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                        
                            onclick=\"javascript:getReasignar(11);\"
                            
                            value=\"5\"> Reasignar

                        </label>
                          {% endif %}
                        
                      </div>
                </div>
                <form action=\"#\" method=\"post\">
                    <input type=\"hidden\" value=\"5\" name=\"chkStatus\">
                    <div class=\"col-sm-12 col-md-12\" id=\"abogado\">


                    </div>
                </form>
                {% elseif  agenda.status.id == 7 %}
                <div class=\"col-sm-12 col-md-12\">
                    <button class=\"btn btn-primary\" onclick=\"javascript:contrata(7)\">Ver Contrato</button>
                </div>
                {% elseif sesion.getSesion.usuarioTipo.id in [3,4,1] %}
                <form action=\"#\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12\">
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                                <label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReasignar(5);\"
                                    
                                    value=\"5\"> Reasignar

                                </label>
                            </div>
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\" id=\"abogado\">
                            

                        </div>
                    </div>
                </form>
                {% endif %}
                <div class=\"col-sm-12 col-md-12\" id=\"contrato\">


                </div>
            </div>
            
            
        </div>

    </div>
    </section>
</div>

    <div class=\"col-sm-12 col-md-4\">
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
            
            <!-- Timelime example  -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    <!-- The time line -->
                        <div class=\"timeline\">
                            <!-- timeline time label -->
                            <div class=\"time-label\">
                            <span class=\"bg-red\">{{agenda.fechaCarga|date('d-m-Y H:i')}}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            {% for observacion in agenda.agendaObservacions %}
                                
                            
                            <div class=\"time-label\">
                                <span class=\"bg-green\">{{observacion.fechaRegistro|date('d-m-Y')}}</span>
                            </div>
                            <div>
                                <i class=\"fas fa-envelope bg-blue\"></i>
                                <div class=\"timeline-item\">
                                    <span class=\"time\"><i class=\"fas fa-clock\"></i>{{observacion.fechaRegistro|date('h:i')}}</span>
                                    <h3 class=\"timeline-header\"><a href=\"#\">{{observacion.status}}</a> {{observacion.usuarioRegistro}} </h3>
    
                                    <div class=\"timeline-body\">
                                        {{observacion.observacion}}
                                    </div>
                                   
                                </div>
                            </div>
                            {% endfor %}
                            <div>
                                <i class=\"fas fa-clock bg-gray\"></i>
                              </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        </div>
    </div>
    <!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Calendario</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\" id=\"bodyModal\">
          
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>

       function contrata(status){
            if(status ==7){
                \$.ajax({
                    url:\"{{path('panel_abogado_contrata',{'id':agenda.id})}}\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#contrato\").html(data);
                        \$(\"#abogado\").html(\"\");
                    }

                });
            }else if(status==5){
                \$.ajax({
                    url:\"{{path('panel_agendador_abogados',{'id':agenda.id})}}\",
                    type: \"get\",
                    dataType: \"html\",
                    data:\"chkStatus=5\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                        \$(\"#contrato\").html(\"\");
                    }
        
                });
            }else{
                \$.ajax({
                    url:\"{{path('panel_abogado_no_contrata',{'id':agenda.id})}}\",
                    type: \"get\",
                    dataType: \"html\",
                    data:\"status=\"+status,
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#contrato\").html(data);
                        \$(\"#abogado\").html(\"\");
                    }

                });
                
            }
       }
       function getReasignar(status){
        \$.ajax({
            url:\"{{path('panel_agendador_abogados',{'id':agenda.id})}}\",
            type: \"post\",
            dataType: \"html\",
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#contrato\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#abogado\").html(data);
                \$(\"#contrato\").html(\"\");
            }

        });
        
    }
    function cambiaCompania(status){

        cambiamateria(status);
        cambiaAcreedores(status);
        
        \$.ajax({
            url:\"{{path('panel_abogado_compania',{'id':agenda.id})}}\",
            type: \"get\",
            dataType: \"html\",
            data:\"compania=\"+status,
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            beforeSend: function(){
                \$(\"#status\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                
            },
            success:function(data){
                \$(\"#status\").html(data);
                //\$(\"#contrato\").html(\"\");

                

                \$.ajax({
                    url:\"/panel_abogado/\"+status+\"/sucursales\",
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
                        \$(\"#sucursal\").find('option').remove();
                        \$(\"#sucursal\").append(data);
                        //\$(\"#contrato\").html(\"\");
                    }});
                
                    \$.ajax({
                        url:\"/panel_abogado/\"+status+\"/tramitadores\",
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
                            \$(\"#tramitador\").find('option').remove();
                            \$(\"#tramitador\").append(data);
                            //\$(\"#contrato\").html(\"\");
                        }});

            }

        });
    }
    </script>

{% endblock %}", "panel_abogado/new.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_abogado\\new.html.twig");
    }
}
