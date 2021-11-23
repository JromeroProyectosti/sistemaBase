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

/* baseError.html.twig */
class __TwigTemplate_566bc7b0349b7e8136bf06ca9ab646d3532a9b4f05ffc7bad0fc489df654c21b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseError.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseError.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 3 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/build/adminlte/plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/build/adminlte/dist/css/adminlte.min.css\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition lockscreen\">
<!-- Automatic element centering -->
<div class=\"lockscreen-wrapper\">
  <div class=\"lockscreen-logo\">
    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 23, $this->source); })()), "getEmpresaActual", [], "any", false, false, false, 23), "nombre", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
  </div>
  <!-- User name -->
  <div class=\"lockscreen-name\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 26, $this->source); })()), "getSesion", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class=\"lockscreen-item\">
    <!-- lockscreen image -->
    <div class=\"lockscreen-image\">
      <img src=\"/build/img/empresas/";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sesion"]) || array_key_exists("sesion", $context) ? $context["sesion"] : (function () { throw new RuntimeError('Variable "sesion" does not exist.', 32, $this->source); })()), "getEmpresaActual", [], "any", false, false, false, 32), "logo", [], "any", false, false, false, 32), "html", null, true);
        echo "\" alt=\"User Image\">
    </div>
    <!-- /.lockscreen-image -->

    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
 
  <div class=\"lockscreen-footer text-center\">
    Copyright &copy; 2014-2019 <b><a href=\"http://adminlte.io\" class=\"text-black\">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src=\"/build/adminlte/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"/build/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseError.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  122 => 36,  94 => 39,  92 => 36,  85 => 32,  76 => 26,  68 => 23,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 3 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/build/adminlte/plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/build/adminlte/dist/css/adminlte.min.css\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition lockscreen\">
<!-- Automatic element centering -->
<div class=\"lockscreen-wrapper\">
  <div class=\"lockscreen-logo\">
    <a href=\"{{path('dashboard')}}\">{{sesion.getEmpresaActual.nombre}}</a>
  </div>
  <!-- User name -->
  <div class=\"lockscreen-name\">{{sesion.getSesion.nombre}}</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class=\"lockscreen-item\">
    <!-- lockscreen image -->
    <div class=\"lockscreen-image\">
      <img src=\"/build/img/empresas/{{sesion.getEmpresaActual.logo}}\" alt=\"User Image\">
    </div>
    <!-- /.lockscreen-image -->

    {% block body %}
        
        {% endblock %}
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
 
  <div class=\"lockscreen-footer text-center\">
    Copyright &copy; 2014-2019 <b><a href=\"http://adminlte.io\" class=\"text-black\">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src=\"/build/adminlte/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"/build/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "baseError.html.twig", "D:\\htdocs\\desarrollos_symfony\\micrm\\crm v.2\\templates\\baseError.html.twig");
    }
}
