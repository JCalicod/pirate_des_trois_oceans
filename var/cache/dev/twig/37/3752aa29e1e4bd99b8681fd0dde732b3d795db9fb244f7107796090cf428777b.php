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

/* authenticated/spy.html.twig */
class __TwigTemplate_c17a29ea8e5fe214592b2f342bf2c4d08c2c982a4eb6c8bb883128e9fdedbeb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/spy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/spy.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/spy.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/spy.css"), "html", null, true);
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
        echo "    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Espionnage de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </div>
        <div class=\"card-back-msg\">
            <h1>Informations sur le Joueur</h1>

            <table class=\"mb-3\">
                <thead>
                    <tr>
                        <th><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"coin\"> Fortune</th>
                        <th><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" alt=\"coin\"> Puissance</th>
                        <th><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"coin\"> Classement</th>
                        <th><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/skull.png"), "html", null, true);
        echo "\" alt=\"coin\"> Dernière connexion</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class=\"tr-1\">
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "gold", [], "any", false, false, false, 28), 0, ".", " "), "html", null, true);
        echo "</td>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "getTotalPower", [], "any", false, false, false, 29), 0, ".", " "), "html", null, true);
        echo "</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["nb_users"]) || array_key_exists("nb_users", $context) ? $context["nb_users"] : (function () { throw new RuntimeError('Variable "nb_users" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "getLastConnection", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <h1>Informations sur ses Navires</h1>

            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Niveau</th>
                    <th>Structure</th>
                    <th>Moral</th>
                    <th>Localisation</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 50
        $context["i"] = 1;
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "ships", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 52
            echo "                    <tr class=\"";
            if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 52, $this->source); })()) % 2), 1)) {
                echo "tr-1";
            } else {
                echo "tr-2";
            }
            echo "\">
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "structure", [], "any", false, false, false, 55), "html", null, true);
            echo " / 100</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "moral", [], "any", false, false, false, 56), "html", null, true);
            echo " / 100</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "position", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "position", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            // line 59
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()) + 1);
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/spy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 61,  209 => 60,  207 => 59,  200 => 57,  196 => 56,  192 => 55,  188 => 54,  184 => 53,  175 => 52,  170 => 51,  168 => 50,  146 => 31,  140 => 30,  136 => 29,  132 => 28,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  100 => 11,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/spy.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Espionnage de {{ user.username }}
        </div>
        <div class=\"card-back-msg\">
            <h1>Informations sur le Joueur</h1>

            <table class=\"mb-3\">
                <thead>
                    <tr>
                        <th><img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"coin\"> Fortune</th>
                        <th><img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"coin\"> Puissance</th>
                        <th><img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"coin\"> Classement</th>
                        <th><img src=\"{{ asset('img/icons/skull.png') }}\" alt=\"coin\"> Dernière connexion</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class=\"tr-1\">
                        <td>{{ user.gold|number_format(0, '.', ' ') }}</td>
                        <td>{{ user.getTotalPower|number_format(0, '.', ' ') }}</td>
                        <td>{{ ranking }} / {{ nb_users }}</td>
                        <td>{{ user.getLastConnection|date('d/m/Y') }}</td>
                    </tr>
                </tbody>
            </table>

            <h1>Informations sur ses Navires</h1>

            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Niveau</th>
                    <th>Structure</th>
                    <th>Moral</th>
                    <th>Localisation</th>
                </tr>
                </thead>

                <tbody>
                {% set i = 1 %}
                {% for ship in user.ships %}
                    <tr class=\"{% if i % 2 == 1 %}tr-1{% else %}tr-2{% endif %}\">
                        <td>{{ ship.name }}</td>
                        <td>{{ ship.level }}</td>
                        <td>{{ ship.structure }} / 100</td>
                        <td>{{ ship.moral }} / 100</td>
                        <td>{{ ship.position.id }}. {{ ship.position.name }}</td>
                    </tr>
                    {% set i = i + 1 %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "authenticated/spy.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\spy.html.twig");
    }
}
