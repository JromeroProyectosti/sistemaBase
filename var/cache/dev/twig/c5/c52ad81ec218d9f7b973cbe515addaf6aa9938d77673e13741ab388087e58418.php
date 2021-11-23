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

/* panel_agendador/new.html.twig */
class __TwigTemplate_83527e34f106f4955695d37ee09e04b0efb8119c0cf25c12ea87983c2011c239 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel_agendador/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel_agendador/new.html.twig", 1);
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

        echo twig_escape_filter($this->env, ((array_key_exists("pagina", $context)) ? (_twig_default_filter((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new RuntimeError('Variable "pagina" does not exist.', 3, $this->source); })()), "agenda agendador")) : ("agenda agendador")), "html", null, true);
        
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
    <div class=\"col-sm-12 col-md-8 \">
    <section class=\"sticky-top\">
        <div class=\"card\">
            <div class=\"card-body table-responsive pad\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validarut()"]]);
        echo "
                <h4>Datos Lead</h4>
                <div class=\"row\">
                   
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Compañia</small><br>
                        <label>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 17, $this->source); })()), "cuenta", [], "any", false, false, false, 17), "nombre", [], "any", false, false, false, 17), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Canal</small><br>
                        <label>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 21, $this->source); })()), "campania", [], "any", false, false, false, 21), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Nombre Cliente</small>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nombreCliente", [], "any", false, false, false, 25), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes", "required" => "true"]]);
        echo "
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Rut Cliente</small>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rutCliente", [], "any", false, false, false, 29), 'row', ["label" => false, "attr" => ["class" => "form-control format-rut", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <small class=\"text-muted\">Telefono Cliente</small>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telefonoCliente", [], "any", false, false, false, 33), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes", "required" => "true"]]);
        echo "
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Telefono Recado Cliente</small>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telefonoRecadoCliente", [], "any", false, false, false, 37), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Correo Cliente</small>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emailCliente", [], "any", false, false, false, 41), 'row', ["label" => false, "attr" => ["class" => "form-control", "autocomplete" => "ÑÖcompletes"]]);
        echo "
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <small class=\"text-muted\">Monto Deuda</small>
                        <br>
                        <label>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 46, $this->source); })()), "monto", [], "any", false, false, false, 46), 0, ",", "."), "html", null, true);
        echo "</label>
                    </div>
                    
                    
                    
                </div>
                <br />
                
                ";
        // line 54
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), [0 => 1, 1 => 2, 2 => 3, 3 => 11, 4 => 8, 5 => 4, 6 => 6])) {
            // line 55
            echo "                <h4>Gestion</h4>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-12\">
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statues"]) || array_key_exists("statues", $context) ? $context["statues"] : (function () { throw new RuntimeError('Variable "statues" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 60
                echo "                            <label class=\"btn btn-success 
                            ";
                // line 61
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)))) {
                    // line 62
                    echo "                                active
                            ";
                }
                // line 64
                echo "                            \">
                                <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                ";
                // line 66
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
                    // line 67
                    echo "                                checked
                                ";
                }
                // line 69
                echo "                                value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" onclick=\"javascript:getAbogados(this.value);\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 69), "html", null, true);
                echo "
                            </label>
                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 73, $this->source); })()), "getSesion", [], "any", false, false, false, 73), "usuarioTipo", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), [0 => 3, 1 => 1])) {
                // line 74
                echo "                            <label class=\"btn btn-success\">
                                <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                            
                                onclick=\"javascript:getReasignar(this.value);\"
                                
                                value=\"3\"> Reasignar

                            </label>
                            ";
            }
            // line 83
            echo "                            
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-12\" id=\"abogado\">


                    </div>

                </div>
                ";
        } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 92, $this->source); })()), "getSesion", [], "any", false, false, false, 92), "usuarioTipo", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), [0 => 3, 1 => 1])) {
            // line 93
            echo "                    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), [0 => 8, 1 => 9, 2 => 10])) {
                // line 94
                echo "                    <h4>Gestion</h4>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12\">
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                                <!--<label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReagenda(this.value);\"
                                    
                                    value=\"5\"> Reage|nda

                                </label>-->
                                <label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReasignar(this.value);\"
                                    
                                    value=\"3\"> Reasignar
        
                                </label>
                            </div>
                            
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\" id=\"abogado\">
                            
                        </div>
                    </div>
            
                    ";
            }
            // line 124
            echo "                ";
        }
        // line 125
        echo "                
            ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
                
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
        // line 145
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 145, $this->source); })()), "fechaCarga", [], "any", false, false, false, 145), "d-m-Y H:i"), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 149, $this->source); })()), "agendaObservacions", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["observacion"]) {
            // line 150
            echo "                            
                        
                        <div class=\"time-label\">
                            <span class=\"bg-green\">";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 153), "d-m-Y"), "html", null, true);
            echo "</span>
                        </div>
                        <div>
                            <i class=\"fas fa-envelope bg-blue\"></i>
                            <div class=\"timeline-item\">
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>";
            // line 158
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "fechaRegistro", [], "any", false, false, false, 158), "H:i"), "html", null, true);
            echo "</span>
                                <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "status", [], "any", false, false, false, 159), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "usuarioRegistro", [], "any", false, false, false, 159), "html", null, true);
            echo " </h3>

                                <div class=\"timeline-body\">
                                    ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["observacion"], "observacion", [], "any", false, false, false, 162), "html", null, true);
            echo "
                                </div>
                               
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                        <div>
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

      

        function getAbogados(status){
            
           
            
            if(status==5){
                \$.ajax({
                    url:\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_abogados", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209)]), "html", null, true);
        echo "\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            else{
                \$.ajax({
                    url:\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_engestion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228)]), "html", null, true);
        echo "\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
        }
        function getReagenda(status){
            \$.ajax({
                url:\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_abogados", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, false, 248)]), "html", null, true);
        echo "\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#abogado\").html(data);
                }
    
            });
        }
        function getReasignar(status){
            \$.ajax({
                url:\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panel_agendador_reasignar");
        echo "\",
                type: \"get\",
                dataType: \"html\",
                data: \"agenda=";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agenda"]) || array_key_exists("agenda", $context) ? $context["agenda"] : (function () { throw new RuntimeError('Variable "agenda" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270), "html", null, true);
        echo "\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#abogado\").html(data);
                }
    
            });
        }
        \$(\".format-rut\").rut();

        function validarut(){
            \$('button').attr(\"disabled\", true);
            if(\$(\".format-rut\").val()==\"\") return true;
            if(\$.validateRut(\$(\".format-rut\").val())) {
                return true;
            }
            alert(\"Rut no valido\");
            \$(\".format-rut\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
            
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel_agendador/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 270,  457 => 267,  435 => 248,  412 => 228,  390 => 209,  347 => 168,  335 => 162,  327 => 159,  323 => 158,  315 => 153,  310 => 150,  306 => 149,  299 => 145,  277 => 126,  274 => 125,  271 => 124,  239 => 94,  236 => 93,  234 => 92,  223 => 83,  212 => 74,  209 => 73,  196 => 69,  192 => 67,  190 => 66,  186 => 64,  182 => 62,  180 => 61,  177 => 60,  173 => 59,  167 => 55,  165 => 54,  154 => 46,  146 => 41,  139 => 37,  132 => 33,  125 => 29,  118 => 25,  111 => 21,  104 => 17,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{pagina|default('agenda agendador')}}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12 col-md-8 \">
    <section class=\"sticky-top\">
        <div class=\"card\">
            <div class=\"card-body table-responsive pad\">
                {{ form_start(form,{'attr':{'onsubmit':'return validarut()'}}) }}
                <h4>Datos Lead</h4>
                <div class=\"row\">
                   
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Compañia</small><br>
                        <label>{{agenda.cuenta.nombre}}</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Canal</small><br>
                        <label>{{agenda.campania}}</label>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Nombre Cliente</small>
                        {{ form_row(form.nombreCliente,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\",\"required\":'true'}})}}
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Rut Cliente</small>
                        {{form_row(form.rutCliente,{'label':false,'attr':{'class':'form-control format-rut','autocomplete':\"ÑÖcompletes\"}})}}
                    </div>
                    <div class=\"col-sm-12 col-md-3\">
                        <small class=\"text-muted\">Telefono Cliente</small>
                        {{ form_row(form.telefonoCliente,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\",\"required\":'true'}})}}
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <small class=\"text-muted\">Telefono Recado Cliente</small>
                        {{form_row(form.telefonoRecadoCliente,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <small class=\"text-muted\">Correo Cliente</small>
                        {{ form_row(form.emailCliente,{'label':false,'attr':{'class':'form-control','autocomplete':\"ÑÖcompletes\"}})}}
                    </div>
                    <div class=\"col-sm-12 col-md-2\">
                        <small class=\"text-muted\">Monto Deuda</small>
                        <br>
                        <label>{{agenda.monto|number_format(0, ',', '.')}}</label>
                    </div>
                    
                    
                    
                </div>
                <br />
                
                {% if agenda.status.id in [1,2,3,11,8,4,6]  %}
                <h4>Gestion</h4>
                <div class=\"row\">
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
                                {% endif %}
                                value=\"{{status.id}}\" onclick=\"javascript:getAbogados(this.value);\"> {{status.nombre}}
                            </label>
                            
                            {% endfor %}
                            {% if sesion.getSesion.usuarioTipo.id in [3,1] %}
                            <label class=\"btn btn-success\">
                                <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                            
                                onclick=\"javascript:getReasignar(this.value);\"
                                
                                value=\"3\"> Reasignar

                            </label>
                            {% endif %}
                            
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-12\" id=\"abogado\">


                    </div>

                </div>
                {% elseif sesion.getSesion.usuarioTipo.id in [3,1]  %}
                    {% if agenda.status.id in [8,9,10]  %}
                    <h4>Gestion</h4>
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12\">
                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                                <!--<label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReagenda(this.value);\"
                                    
                                    value=\"5\"> Reage|nda

                                </label>-->
                                <label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"chkStatus\" id=\"chkStatus\" autocomplete=\"off\" 
                                
                                    onclick=\"javascript:getReasignar(this.value);\"
                                    
                                    value=\"3\"> Reasignar
        
                                </label>
                            </div>
                            
                        </div>
                        
                        <div class=\"col-sm-12 col-md-12\" id=\"abogado\">
                            
                        </div>
                    </div>
            
                    {% endif %}
                {% endif %}
                
            {{ form_end(form) }}
                
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
                                <span class=\"time\"><i class=\"fas fa-clock\"></i>{{observacion.fechaRegistro|date('H:i')}}</span>
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

      

        function getAbogados(status){
            
           
            
            if(status==5){
                \$.ajax({
                    url:\"{{path('panel_agendador_abogados',{'id':agenda.id})}}\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
            else{
                \$.ajax({
                    url:\"{{path('panel_agendador_engestion',{'id':agenda.id})}}\",
                    type: \"post\",
                    dataType: \"html\",
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function(){
                        \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                        
                    },
                    success:function(data){
                        \$(\"#abogado\").html(data);
                    }
        
                });
            }
        }
        function getReagenda(status){
            \$.ajax({
                url:\"{{path('panel_agendador_abogados',{'id':agenda.id})}}\",
                type: \"post\",
                dataType: \"html\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#abogado\").html(data);
                }
    
            });
        }
        function getReasignar(status){
            \$.ajax({
                url:\"{{path('panel_agendador_reasignar')}}\",
                type: \"get\",
                dataType: \"html\",
                data: \"agenda={{agenda.id}}\",
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                beforeSend: function(){
                    \$(\"#abogado\").html(' <div class=\"overlay\"><i class=\"fas fa-3x fa-sync-alt fa-spin\"></i><div class=\"text-bold pt-2\">Loading...</div></div>');
                    
                },
                success:function(data){
                    \$(\"#abogado\").html(data);
                }
    
            });
        }
        \$(\".format-rut\").rut();

        function validarut(){
            \$('button').attr(\"disabled\", true);
            if(\$(\".format-rut\").val()==\"\") return true;
            if(\$.validateRut(\$(\".format-rut\").val())) {
                return true;
            }
            alert(\"Rut no valido\");
            \$(\".format-rut\").focus();
            \$('button').attr(\"disabled\", false);
            return false;
            
        }
    </script>

{% endblock %}", "panel_agendador/new.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\panel_agendador\\new.html.twig");
    }
}
