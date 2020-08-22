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

/* authenticated/include/alliance/informations.html.twig */
class __TwigTemplate_cae3d25434d26afaa2e7f324aff0627a97facda7a3ad4d845fa974f49444896a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/informations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/informations.html.twig"));

        // line 1
        echo "<div id=\"informations\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Informations principales
        </div>
        <div class=\"block-content\">
            ";
        // line 7
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 7)->display(twig_array_merge($context, ["title" => "Nom", "value" => twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)]));
        // line 8
        echo "            ";
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 8)->display(twig_array_merge($context, ["title" => "Tag", "value" => (((("<span class='font-weight-bold alliance-" . twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 10, $this->source); })()), "color", [], "any", false, false, false, 10)) . "'>[") . twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 10, $this->source); })()), "abbreviation", [], "any", false, false, false, 10)) . "]</span>")]));
        // line 13
        echo "            ";
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 13)->display(twig_array_merge($context, ["title" => "Chef", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 13, $this->source); })()), "getLeader", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13)]));
        // line 14
        echo "            ";
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 14)->display(twig_array_merge($context, ["title" => "Membres", "value" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 14, $this->source); })()), "getAllianceMembers", [], "any", false, false, false, 14)), "icon" => "arsenal"]));
        // line 15
        echo "            ";
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 15)->display(twig_array_merge($context, ["title" => "Date de création", "value" => (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 15, $this->source); })()), "creation", [], "any", false, false, false, 15), "d/m/") . "") . (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 15, $this->source); })()), "creation", [], "any", false, false, false, 15), "Y") - 315)) . "")]));
        // line 16
        echo "            ";
        $this->loadTemplate("authenticated/include/alliance/block-line.html.twig", "authenticated/include/alliance/informations.html.twig", 16)->display(twig_array_merge($context, ["title" => "", "value" => "<a href='#' data-toggle='modal' data-target='#leave'><span class='text-danger-dark'>Quitter l'Alliance</span></a>"]));
        // line 17
        echo "        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Description
        </div>
        <div class=\"block-content\">
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Code du Pirate
        </div>
        <div class=\"block-content\">
            ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 34, $this->source); })()), "getPirateCode", [], "any", false, false, false, 34)) {
            // line 35
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 35, $this->source); })()), "getPirateCode", [], "any", false, false, false, 35), "html", null, true);
            echo "
            ";
        } else {
            // line 37
            echo "                Le code n'a pas encore été rédigé..
            ";
        }
        // line 39
        echo "        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"leave\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Quitter l'Alliance</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Etes-vous sûr de vouloir quitter l'Alliance ?
                    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 54, $this->source); })()), "leave", [], "array", false, false, false, 54), 'form');
        echo "
                </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/alliance/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  112 => 39,  108 => 37,  102 => 35,  100 => 34,  94 => 31,  85 => 25,  79 => 22,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  58 => 10,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"informations\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Informations principales
        </div>
        <div class=\"block-content\">
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {\"title\": \"Nom\", \"value\": alliance.name} %}
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {
                \"title\": \"Tag\",
                \"value\": \"<span class='font-weight-bold alliance-\" ~ alliance.color ~\"'>[\" ~ alliance.abbreviation ~ \"]</span>\"
            }
            %}
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {\"title\": \"Chef\", \"value\": alliance.getLeader.username} %}
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {\"title\": \"Membres\", \"value\": alliance.getAllianceMembers|length, \"icon\": \"arsenal\"} %}
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {\"title\": \"Date de création\", \"value\": alliance.creation|date('d/m/') ~ \"\" ~ (alliance.creation|date('Y') - 315) ~ \"\"} %}
            {% include \"authenticated/include/alliance/block-line.html.twig\" with {\"title\": \"\", \"value\": \"<a href='#' data-toggle='modal' data-target='#leave'><span class='text-danger-dark'>Quitter l'Alliance</span></a>\"} %}
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Description
        </div>
        <div class=\"block-content\">
            {{ alliance.description }}
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Code du Pirate
        </div>
        <div class=\"block-content\">
            {% if alliance.getPirateCode %}
                {{ alliance.getPirateCode }}
            {% else %}
                Le code n'a pas encore été rédigé..
            {% endif %}
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"leave\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Quitter l'Alliance</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Etes-vous sûr de vouloir quitter l'Alliance ?
                    {{ form(forms['leave']) }}
                </div>
        </div>
    </div>
</div>", "authenticated/include/alliance/informations.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\include\\alliance\\informations.html.twig");
    }
}
