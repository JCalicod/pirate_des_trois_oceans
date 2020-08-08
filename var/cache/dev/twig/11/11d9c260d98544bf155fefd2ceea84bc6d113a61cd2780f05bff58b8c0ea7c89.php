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

/* authenticated/messaging.html.twig */
class __TwigTemplate_d78b7e23abf70e7d296dc251e5b89dcfcec41c0df0c1975e81b610e459ea9bff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/messaging.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/messaging.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/messaging.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/paginator.css"), "html", null, true);
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
            <div class=\"card no-min-height\">
                <div class=\"card-header\">
                    Messagerie
                </div>
                <div class=\"card-back-msg\">
                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"d-flex justify-content-between\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "receiver", [], "any", false, false, false, 24), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), 'widget');
        echo "
                        </div>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "message", [], "any", false, false, false, 27), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "save", [], "any", false, false, false, 28), 'widget');
        echo "
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

    <div class=\"paginator\">
        Page :
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 35, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 36
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messaging", ["page" => $context["page"]]), "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["page"], (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 36, $this->source); })()))) {
                echo "class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            ";
            // line 37
            if (0 !== twig_compare($context["page"], (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 37, $this->source); })()))) {
                echo "|";
            }
            // line 38
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>

    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "        <div class=\"mt-3\">
                <div class=\"top-card-body-2\">
                    ";
            // line 44
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 44))) {
                // line 45
                echo "                        ";
                $context["alliance"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 45), "alliance", [], "any", false, false, false, 45);
                // line 46
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 46), "isActiveNow", [], "any", false, false, false, 46)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
                    echo "\" alt=\"etat\" class=\"online-state\">";
                } else {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
                    echo "\" alt=\"etat\" class=\"online-state\">";
                }
                echo " ";
                if ((isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 46, $this->source); })())) {
                    echo "<span class=\"font-weight-bold alliance-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 46, $this->source); })()), "abbreviation", [], "any", false, false, false, 46), "html", null, true);
                    echo "]</span>";
                }
                echo " <a href=\"#\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
                echo "</strong></a>
                    ";
            } else {
                // line 48
                echo "                        <strong>Alex' Dalzeel</strong>
                    ";
            }
            // line 50
            echo "                    <span class=\"float-right\">Le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 50), "d/m/"), "html", null, true);
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 50), "Y") - 315), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 50), "H"), "html", null, true);
            echo "h";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 50), "i"), "html", null, true);
            echo "</span>
                </div>
                <div class=\"d-flex\">
                    ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 53))) {
                // line 54
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54)) . ".jpg")), "html", null, true);
                echo "\" alt=\"avatar\" class=\"ship-img\">
                    ";
            } else {
                // line 56
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/tutoriel.jpg"), "html", null, true);
                echo "\" alt=\"avatar\" class=\"ship-img\">
                    ";
            }
            // line 58
            echo "                    <div class=\"msg-look\">
                        <b>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</b><br>
                        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["message"], "getHtmlReader", [], "any", false, false, false, 60)) {
                // line 61
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 61);
                echo "
                        ";
            } else {
                // line 63
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 63), "html", null, true);
                echo "
                        ";
            }
            // line 65
            echo "                    </div>
                </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    <div class=\"paginator\">
        Page :
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 72, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 73
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messaging", ["page" => $context["page"]]), "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["page"], (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 73, $this->source); })()))) {
                echo "class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            ";
            // line 74
            if (0 !== twig_compare($context["page"], (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 74, $this->source); })()))) {
                echo "|";
            }
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/messaging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 76,  321 => 75,  317 => 74,  306 => 73,  302 => 72,  297 => 69,  288 => 65,  282 => 63,  276 => 61,  274 => 60,  270 => 59,  267 => 58,  261 => 56,  255 => 54,  253 => 53,  241 => 50,  237 => 48,  213 => 46,  210 => 45,  208 => 44,  204 => 42,  200 => 41,  196 => 39,  190 => 38,  186 => 37,  175 => 36,  171 => 35,  162 => 29,  158 => 28,  154 => 27,  149 => 25,  145 => 24,  140 => 22,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/paginator.css') }}\">
{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

            <div class=\"card no-min-height\">
                <div class=\"card-header\">
                    Messagerie
                </div>
                <div class=\"card-back-msg\">
                    {{ form_start(form) }}
                        <div class=\"d-flex justify-content-between\">
                            {{ form_widget(form.receiver) }}
                            {{ form_widget(form.title) }}
                        </div>
                        {{ form_widget(form.message) }}
                        {{ form_widget(form.save) }}
                    {{ form_end(form) }}
                </div>
            </div>

    <div class=\"paginator\">
        Page :
        {% for page in range(1, nb_pages) %}
            <a href=\"{{ path('app_messaging', {'page': page}) }}\" {% if page == current_page %}class=\"active\"{% endif %}>{{ page }}</a>
            {% if page != nb_pages %}|{% endif %}
        {% endfor %}
    </div>

    {% for message in messages %}
        <div class=\"mt-3\">
                <div class=\"top-card-body-2\">
                    {% if message.sender is not null %}
                        {% set alliance = message.sender.alliance %}
                        {% if message.sender.isActiveNow %}<img src=\"{{ asset('img/icons/online.png') }}\" alt=\"etat\" class=\"online-state\">{% else %}<img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"etat\" class=\"online-state\">{% endif %} {% if alliance %}<span class=\"font-weight-bold alliance-{{ alliance.color }}\">[{{ alliance.abbreviation }}]</span>{% endif %} <a href=\"#\" target=\"_blank\"><strong>{{ message.sender.username }}</strong></a>
                    {% else %}
                        <strong>Alex' Dalzeel</strong>
                    {% endif %}
                    <span class=\"float-right\">Le {{ message.getMessageDate|date('d/m/') }}{{ message.getMessageDate|date('Y') - 315 }} à {{ message.getMessageDate|date('H') }}h{{ message.getMessageDate|date('i') }}</span>
                </div>
                <div class=\"d-flex\">
                    {% if message.sender is not null %}
                        <img src=\"{{ asset('img/avatars/' ~ message.sender.avatar ~ '.jpg') }}\" alt=\"avatar\" class=\"ship-img\">
                    {% else %}
                        <img src=\"{{ asset('img/avatars/tutoriel.jpg') }}\" alt=\"avatar\" class=\"ship-img\">
                    {% endif %}
                    <div class=\"msg-look\">
                        <b>{{ message.title }}</b><br>
                        {% if message.getHtmlReader %}
                            {{ message.message|raw }}
                        {% else %}
                            {{ message.message }}
                        {% endif %}
                    </div>
                </div>
        </div>
    {% endfor %}

    <div class=\"paginator\">
        Page :
        {% for page in range(1, nb_pages) %}
            <a href=\"{{ path('app_messaging', {'page': page}) }}\" {% if page == current_page %}class=\"active\"{% endif %}>{{ page }}</a>
            {% if page != nb_pages %}|{% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "authenticated/messaging.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\messaging.html.twig");
    }
}
