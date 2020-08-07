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

/* profile.html.twig */
class __TwigTemplate_86cd2b0e74abe34b9f3e37aa7ee016504871120c549a5d1558c3178561eb629f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Anton|East+Sea+Dokdo|Pacifico|Acme\" rel=\"stylesheet\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/skull.png"), "html", null, true);
        echo "\" />

    <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>

<body>

";
        // line 26
        $context["alliance"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "alliance", [], "any", false, false, false, 26);
        // line 27
        echo "<div class=\"conteneur d-flex\">
    <div class=\"list\">
        <div class=\"list-header\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "isActiveNow", [], "any", false, false, false, 30)) {
            // line 31
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
            echo "\" alt=\"online\">
            ";
        } else {
            // line 33
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
            echo "\" alt=\"offline\">
            ";
        }
        // line 35
        echo "            ";
        if ((isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 35, $this->source); })())) {
            echo "<span class=\"font-weight-bold alliance-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 35, $this->source); })()), "color", [], "any", false, false, false, 35), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 35, $this->source); })()), "abbreviation", [], "any", false, false, false, 35), "html", null, true);
            echo "]</span>";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), "html", null, true);
        echo "
        </div>
        <div class=\"list-body d-flex\">
            <div class=\"avatar\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "avatar", [], "any", false, false, false, 38)) . ".jpg")), "html", null, true);
        echo "\" alt=\"avatar\"></div>
            <div class=\"infos\">
                <div class=\"list-element\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"lantern\" class=\"logo\"> Classement <span class=\"float-right font-weight-bold gold-dark\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 40, $this->source); })()), 0, ".", " "), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["nb_users"]) || array_key_exists("nb_users", $context) ? $context["nb_users"] : (function () { throw new RuntimeError('Variable "nb_users" does not exist.', 40, $this->source); })()), 0, ".", " "), "html", null, true);
        echo "</div>
                <div class=\"list-element\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" alt=\"lantern\" class=\"logo\"> Puissance <span class=\"float-right font-weight-bold gold-dark\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["power"]) || array_key_exists("power", $context) ? $context["power"] : (function () { throw new RuntimeError('Variable "power" does not exist.', 41, $this->source); })()), 0, ".", " "), "html", null, true);
        echo "</div>
                <div class=\"list-element\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" alt=\"lantern\" class=\"logo\"> Navires <span class=\"float-right font-weight-bold gold-dark\">";
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "ships", [], "any", false, false, false, 42)) - 1), "html", null, true);
        echo "</div>
                <div class=\"list-element\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"lantern\" class=\"logo\"> Fortune <span class=\"float-right font-weight-bold gold-dark\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "gold", [], "any", false, false, false, 43), 0, ".", " "), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pirate des trois océans";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 20,  180 => 19,  161 => 17,  140 => 43,  134 => 42,  128 => 41,  120 => 40,  115 => 38,  100 => 35,  94 => 33,  88 => 31,  86 => 30,  81 => 27,  79 => 26,  73 => 22,  71 => 19,  66 => 17,  61 => 15,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Anton|East+Sea+Dokdo|Pacifico|Acme\" rel=\"stylesheet\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/icons/skull.png') }}\" />

    <title>{% block title %}Pirate des trois océans{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
    {% endblock %}
</head>

<body>

{% set alliance = user.alliance %}
<div class=\"conteneur d-flex\">
    <div class=\"list\">
        <div class=\"list-header\">
            {% if user.isActiveNow %}
                <img src=\"{{ asset('img/icons/online.png') }}\" alt=\"online\">
            {% else %}
                <img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"offline\">
            {% endif %}
            {% if alliance %}<span class=\"font-weight-bold alliance-{{ alliance.color }}\">[{{ alliance.abbreviation }}]</span>{% endif %} {{ user.username }}
        </div>
        <div class=\"list-body d-flex\">
            <div class=\"avatar\"><img src=\"{{ asset('img/avatars/' ~ user.avatar ~ '.jpg') }}\" alt=\"avatar\"></div>
            <div class=\"infos\">
                <div class=\"list-element\"><img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"lantern\" class=\"logo\"> Classement <span class=\"float-right font-weight-bold gold-dark\">{{ ranking|number_format(0, '.', ' ') }} / {{ nb_users|number_format(0, '.', ' ') }}</div>
                <div class=\"list-element\"><img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"lantern\" class=\"logo\"> Puissance <span class=\"float-right font-weight-bold gold-dark\">{{ power|number_format(0, '.', ' ') }}</div>
                <div class=\"list-element\"><img src=\"{{ asset('img/icons/helm.png') }}\" alt=\"lantern\" class=\"logo\"> Navires <span class=\"float-right font-weight-bold gold-dark\">{{ user.ships|length  - 1 }}</div>
                <div class=\"list-element\"><img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"lantern\" class=\"logo\"> Fortune <span class=\"float-right font-weight-bold gold-dark\">{{ user.gold|number_format(0, '.', ' ') }}</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
", "profile.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\profile.html.twig");
    }
}
