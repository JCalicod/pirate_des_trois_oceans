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

/* authenticated/alliance_board.html.twig */
class __TwigTemplate_fa64cb324192a48ac4f6dc961cd14031e677d749252e7aab9d59a939fba2d273 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "authenticated/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance_board.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance_board.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/alliance_board.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/alliance.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 12
                if (0 === twig_compare($context["label"], "success")) {
                    echo "<span class=\"fas fa-check\"></span>";
                } elseif (0 === twig_compare($context["label"], "danger")) {
                    echo "<span class=\"fas fa-times\"></span>";
                }
                echo " ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"card no-min-height mb-3\">
        <div class=\"card-header\">
            Alliance
        </div>
        <div class=\"card-back-msg\">
            <div class=\"categories d-flex justify-content-center\">
                <div class=\"tab active\" id=\"tab-informations\">Informations</div>
                <div class=\"tab\" id=\"tab-members\">Liste des Membres</div>
                <div class=\"tab\" id=\"tab-lands\">Territoire</div>
                <div class=\"tab\" id=\"tab-log\">Livre de Bord</div>
                ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 27, $this->source); })()), "getChief", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27))) {
            // line 28
            echo "                    <div class=\"tab\" id=\"tab-management\">Gestion</div>
                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>

    ";
        // line 34
        $this->loadTemplate("authenticated/include/alliance/informations.html.twig", "authenticated/alliance_board.html.twig", 34)->display($context);
        // line 35
        echo "    ";
        $this->loadTemplate("authenticated/include/alliance/members.html.twig", "authenticated/alliance_board.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        $this->loadTemplate("authenticated/include/alliance/lands.html.twig", "authenticated/alliance_board.html.twig", 36)->display($context);
        // line 37
        echo "    ";
        $this->loadTemplate("authenticated/include/alliance/log.html.twig", "authenticated/alliance_board.html.twig", 37)->display($context);
        // line 38
        echo "    ";
        $this->loadTemplate("authenticated/include/alliance/management.html.twig", "authenticated/alliance_board.html.twig", 38)->display($context);
        // line 39
        echo "
    ";
        // line 40
        $this->loadTemplate("authenticated/script/change-alliance-tab.html.twig", "authenticated/alliance_board.html.twig", 40)->display($context);
        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/alliance_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  157 => 34,  151 => 30,  147 => 28,  145 => 27,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/alliance.css') }}\">
{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"card no-min-height mb-3\">
        <div class=\"card-header\">
            Alliance
        </div>
        <div class=\"card-back-msg\">
            <div class=\"categories d-flex justify-content-center\">
                <div class=\"tab active\" id=\"tab-informations\">Informations</div>
                <div class=\"tab\" id=\"tab-members\">Liste des Membres</div>
                <div class=\"tab\" id=\"tab-lands\">Territoire</div>
                <div class=\"tab\" id=\"tab-log\">Livre de Bord</div>
                {% if alliance.getChief == app.user %}
                    <div class=\"tab\" id=\"tab-management\">Gestion</div>
                {% endif %}
            </div>
        </div>
    </div>

    {% include 'authenticated/include/alliance/informations.html.twig' %}
    {% include 'authenticated/include/alliance/members.html.twig' %}
    {% include 'authenticated/include/alliance/lands.html.twig' %}
    {% include 'authenticated/include/alliance/log.html.twig' %}
    {% include 'authenticated/include/alliance/management.html.twig' %}

    {% include 'authenticated/script/change-alliance-tab.html.twig' %}

{% endblock %}
", "authenticated/alliance_board.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\alliance_board.html.twig");
    }
}
