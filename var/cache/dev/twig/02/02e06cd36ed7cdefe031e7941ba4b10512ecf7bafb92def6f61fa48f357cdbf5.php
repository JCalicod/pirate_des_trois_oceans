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

/* ranking.html.twig */
class __TwigTemplate_c95fbeb75bf6178f98bc0450845ddd05acdc5eeefc6f3e2773ad717fe0492cf9 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) ? ("authenticated/base.html.twig") : ("base.html.twig")), "ranking.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ranking.css"), "html", null, true);
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
            Classement
        </div>
        <div class=\"card-back-msg\">
            <div class=\"categories d-flex justify-content-center\">
                <div class=\"tab active\" id=\"tab-users\">Classement des Joueurs</div>
                ";
        // line 17
        echo "            </div>
        </div>
    </div>

    <div id=\"informations\" class=\"tab-block\">
        <div class=\"block\">
            <div class=\"block-header text-center\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 24, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 25
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ranking", ["page" => $context["page"]]), "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["page"], (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 25, $this->source); })()))) {
                echo "class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["page"] * (isset($context["items_per_page"]) || array_key_exists("items_per_page", $context) ? $context["items_per_page"] : (function () { throw new RuntimeError('Variable "items_per_page" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "</a>
                    ";
            // line 26
            if (0 !== twig_compare($context["page"], (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 26, $this->source); })()))) {
                echo "|";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            <div class=\"block-content\">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
        echo "\" alt=\"alliance\"> Alliance</th>
                            <th><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"player\"> Joueur</th>
                            <th><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" alt=\"power\"> Puissance</th>
                            <th><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" alt=\"ships\"> Navires</th>
                            <th><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" alt=\"ratio\"> Ratio</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 42, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "                            <tr>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44) + ((isset($context["items_per_page"]) || array_key_exists("items_per_page", $context) ? $context["items_per_page"] : (function () { throw new RuntimeError('Variable "items_per_page" does not exist.', 44, $this->source); })()) * ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 44, $this->source); })()) - 1))), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["user"], "alliance", [], "array", false, false, false, 46)) {
                // line 47
                echo "                                        <span class=\"font-weight-bold alliance-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "alliance", [], "array", false, false, false, 47), "color", [], "any", false, false, false, 47), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "alliance", [], "array", false, false, false, 47), "abbreviation", [], "any", false, false, false, 47), "html", null, true);
                echo "]</span>
                                    ";
            }
            // line 49
            echo "                                </td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "array", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "power", [], "array", false, false, false, 51), 0, ".", " "), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ships", [], "array", false, false, false, 52)) - 1), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ratio", [], "array", false, false, false, 53), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </tbody>
                </table>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ranking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 60,  244 => 59,  240 => 58,  236 => 56,  219 => 53,  215 => 52,  211 => 51,  207 => 50,  204 => 49,  196 => 47,  194 => 46,  189 => 44,  186 => 43,  169 => 42,  162 => 38,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  138 => 28,  132 => 27,  128 => 26,  117 => 25,  113 => 24,  104 => 17,  95 => 9,  85 => 8,  73 => 5,  68 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.user ? 'authenticated/base.html.twig' : 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/ranking.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Classement
        </div>
        <div class=\"card-back-msg\">
            <div class=\"categories d-flex justify-content-center\">
                <div class=\"tab active\" id=\"tab-users\">Classement des Joueurs</div>
                {#<div class=\"tab\" id=\"tab-alliances\">Classement des Alliances</div>#}
            </div>
        </div>
    </div>

    <div id=\"informations\" class=\"tab-block\">
        <div class=\"block\">
            <div class=\"block-header text-center\">
                {% for page in range(1, nb_pages) %}
                    <a href=\"{{ path('app_ranking', {'page': page}) }}\" {% if page == current_page %}class=\"active\"{% endif %}>{{ page * items_per_page }}</a>
                    {% if page != nb_pages %}|{% endif %}
                {% endfor %}
            </div>
            <div class=\"block-content\">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th><img src=\"{{ asset('img/icons/den.png') }}\" alt=\"alliance\"> Alliance</th>
                            <th><img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"player\"> Joueur</th>
                            <th><img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"power\"> Puissance</th>
                            <th><img src=\"{{ asset('img/icons/helm.png') }}\" alt=\"ships\"> Navires</th>
                            <th><img src=\"{{ asset('img/icons/arsenal.png') }}\" alt=\"ratio\"> Ratio</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in ranking %}
                            <tr>
                                <td>{{ loop.index + (items_per_page * (current_page - 1)) }}</td>
                                <td>
                                    {% if user['alliance'] %}
                                        <span class=\"font-weight-bold alliance-{{ user['alliance'].color }}\">[{{ user['alliance'].abbreviation }}]</span>
                                    {% endif %}
                                </td>
                                <td>{{ user['username'] }}</td>
                                <td>{{ user['power']|number_format(0, '.', ' ') }}</td>
                                <td>{{ user['ships']|length - 1 }}</td>
                                <td>{{ user['ratio'] }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                {% for user in ranking %}
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "ranking.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\ranking.html.twig");
    }
}
