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

/* pago/verpagos.html.twig */
class __TwigTemplate_a95420d1b704af56fe8c7b292c0701354baaf4b3d339ee01604f852d4ef10cb4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/verpagos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pago/verpagos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pago/verpagos.html.twig", 1);
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
            echo "            ";
            $context["isMulta"] = false;
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pago"], "pagoCuotas", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["pagoCuota"]) {
                // line 30
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pagoCuota"], "cuota", [], "any", false, false, false, 30), "isMulta", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                    ";
                    $context["isMulta"] = true;
                    echo "  
                ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagoCuota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            <tr>
                    <td align=\"right\">\$";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "monto", [], "any", false, false, false, 35), 0, ",", "."), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "fechaPago", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "horaPago", [], "any", false, false, false, 36), "H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "fechaRegistro", [], "any", false, false, false, 37), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"right\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "ncomprobante", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td align=\"right\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "boleta", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "pagotipo", [], "any", false, false, false, 40), "nombre", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "cuentaCorriente", [], "any", false, false, false, 41), "nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pago"], "pagoCanal", [], "any", false, false, false, 42), "nombre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            ";
            // line 45
            if ((isset($context["isMulta"]) || array_key_exists("isMulta", $context) ? $context["isMulta"] : (function () { throw new RuntimeError('Variable "isMulta" does not exist.', 45, $this->source); })())) {
                // line 46
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-success\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 47, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["img_pagos"]) || array_key_exists("img_pagos", $context) ? $context["img_pagos"] : (function () { throw new RuntimeError('Variable "img_pagos" does not exist.', 47, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "comprobante", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"far fa-file-image\"></i></a>
                            ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                                ";
                    if (((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 49, $this->source); })()), "isFinalizado", [], "any", false, false, false, 49)) ||  !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 49, $this->source); })()), "isFinalizado", [], "any", false, false, false, 49))) {
                        // line 50
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("multa_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                    <form method=\"post\" action=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("multa_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                        echo "\" onsubmit=\"return confirm('Estas seguro de eliminar este comprobante?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 53))), "html", null, true);
                        echo "\">
                                        <button class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                    </form>
                                ";
                    }
                    // line 57
                    echo "                            ";
                }
                // line 58
                echo "                            ";
            } else {
                // line 59
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" class=\"btn btn-success\"><i class=\"fas fa-eye\"></i></a>
                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["url_web"]) || array_key_exists("url_web", $context) ? $context["url_web"] : (function () { throw new RuntimeError('Variable "url_web" does not exist.', 60, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["img_pagos"]) || array_key_exists("img_pagos", $context) ? $context["img_pagos"] : (function () { throw new RuntimeError('Variable "img_pagos" does not exist.', 60, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pago"], "comprobante", [], "any", false, false, false, 60), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"far fa-file-image\"></i></a>
                                ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                                    ";
                    if (((null === twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 62, $this->source); })()), "isFinalizado", [], "any", false, false, false, 62)) ||  !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 62, $this->source); })()), "isFinalizado", [], "any", false, false, false, 62))) {
                        // line 63
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                        <form method=\"post\" action=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                        echo "\" onsubmit=\"return confirm('Estas seguro de eliminar este comprobante?');\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["pago"], "id", [], "any", false, false, false, 66))), "html", null, true);
                        echo "\">
                                            <button class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                        </form>
                                    ";
                    }
                    // line 70
                    echo "                                ";
                }
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            
                        </div>
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
        // line 78
        echo "
           
            ";
        // line 80
        if ( !(null === (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo "            <tr class=\"table-danger\">
                <td align=\"right\">\$";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 82, $this->source); })()), "monto", [], "any", false, false, false, 82), 0, ",", "."), "html", null, true);
            echo "</td>
                <td align=\"center\"></td>
                <td align=\"center\">";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 84, $this->source); })()), "fechaPago", [], "any", false, false, false, 84), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                <td align=\"right\"></td>
                <td align=\"right\"></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("multa_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"btn btn-success\" alt=\"Pagar Multa\"><i class=\"fas fa-dollar-sign\"></i></a>
                    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("multa_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-success\" alt=\"Editar Multa\"><i class=\"fas fa-edit\"></i></a>
                </td>
            </tr>
            ";
        }
        // line 96
        echo "        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
            ";
        // line 100
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 100, $this->source); })()), "isFinalizado", [], "any", false, false, false, 100) && (null === (isset($context["cuotas_multa"]) || array_key_exists("cuotas_multa", $context) ? $context["cuotas_multa"] : (function () { throw new RuntimeError('Variable "cuotas_multa" does not exist.', 100, $this->source); })())))) {
            // line 101
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pago_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrato"]) || array_key_exists("contrato", $context) ? $context["contrato"] : (function () { throw new RuntimeError('Variable "contrato" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Agregar pago</a>
            ";
        }
        // line 103
        echo "        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pago/verpagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 103,  335 => 101,  333 => 100,  327 => 96,  320 => 92,  316 => 91,  306 => 84,  301 => 82,  298 => 81,  296 => 80,  292 => 78,  273 => 72,  270 => 71,  267 => 70,  260 => 66,  255 => 64,  250 => 63,  247 => 62,  245 => 61,  239 => 60,  234 => 59,  231 => 58,  228 => 57,  221 => 53,  216 => 51,  211 => 50,  208 => 49,  206 => 48,  200 => 47,  195 => 46,  193 => 45,  187 => 42,  183 => 41,  179 => 40,  175 => 39,  171 => 38,  167 => 37,  161 => 36,  157 => 35,  154 => 34,  148 => 33,  142 => 31,  139 => 30,  134 => 29,  131 => 28,  114 => 27,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            {% set isMulta = false %}
            {% for pagoCuota in pago.pagoCuotas %}
                {% if pagoCuota.cuota.isMulta %}
                    {% set isMulta = true %}  
                {% endif %}
            {% endfor %}
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
                            {% if isMulta %}
                            <a href=\"{{path('pago_show',{'id':pago.id})}}\" class=\"btn btn-success\"><i class=\"fas fa-eye\"></i></a>
                            <a href=\"{{url_web}}{{img_pagos}}{{pago.comprobante}}\" class=\"btn btn-primary\"><i class=\"far fa-file-image\"></i></a>
                            {% if loop.last %}
                                {% if contrato.isFinalizado is null or not contrato.isFinalizado %}
                                    <a href=\"{{ path('multa_edit', {'id': pago.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                    <form method=\"post\" action=\"{{ path('multa_delete', {'id': pago.id}) }}\" onsubmit=\"return confirm('Estas seguro de eliminar este comprobante?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pago.id) }}\">
                                        <button class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                    </form>
                                {% endif %}
                            {% endif %}
                            {% else %}
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
                            {% endif %}
                            
                        </div>
                    </td>
                </tr>

            {% endfor %}

           
            {% if cuotas_multa is not null %}
            <tr class=\"table-danger\">
                <td align=\"right\">\${{cuotas_multa.monto|number_format(0,',','.')}}</td>
                <td align=\"center\"></td>
                <td align=\"center\">{{cuotas_multa.fechaPago|date('Y-m-d H:i')}}</td>
                <td align=\"right\"></td>
                <td align=\"right\"></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href=\"{{path('multa_new',{'id':cuotas_multa.id})}}\" class=\"btn btn-success\" alt=\"Pagar Multa\"><i class=\"fas fa-dollar-sign\"></i></a>
                    <a href=\"{{path('multa_edit',{'id':cuotas_multa.id})}}\" class=\"btn btn-success\" alt=\"Editar Multa\"><i class=\"fas fa-edit\"></i></a>
                </td>
            </tr>
            {% endif %}
        </tbody>
        </table>
        </div>
        <div class=\"card-footer\">
            {% if not contrato.isFinalizado and cuotas_multa is null %}
                <a href=\"{{path('pago_new',{'id':contrato.id})}}\" class=\"btn btn-primary\" >Agregar pago</a>
            {% endif %}
        </div>
    </div>
    
{% endblock %}", "pago/verpagos.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\pago\\verpagos.html.twig");
    }
}
