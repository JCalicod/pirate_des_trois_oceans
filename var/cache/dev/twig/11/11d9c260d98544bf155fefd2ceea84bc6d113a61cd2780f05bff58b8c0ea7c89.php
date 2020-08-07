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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 7
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
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            <div class=\"card no-min-height\">
                <div class=\"card-header\">
                    Messagerie
                </div>
                <div class=\"card-back-msg\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                        <div class=\"d-flex justify-content-between\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "receiver", [], "any", false, false, false, 19), 'widget');
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), 'widget');
        echo "
                        </div>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), 'widget');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "save", [], "any", false, false, false, 23), 'widget');
        echo "
                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>


    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "        <div class=\"mt-3\">
                <div class=\"top-card-body-2\">
                    ";
            // line 32
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 32))) {
                // line 33
                echo "                        ";
                $context["alliance"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 33), "alliance", [], "any", false, false, false, 33);
                // line 34
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 34), "isActiveNow", [], "any", false, false, false, 34)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
                    echo "\" alt=\"etat\" class=\"online-state\">";
                } else {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
                    echo "\" alt=\"etat\" class=\"online-state\">";
                }
                echo " ";
                if ((isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 34, $this->source); })())) {
                    echo "<span class=\"font-weight-bold alliance-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 34, $this->source); })()), "abbreviation", [], "any", false, false, false, 34), "html", null, true);
                    echo "]</span>";
                }
                echo " <a href=\"#\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
                echo "</strong></a>
                    ";
            } else {
                // line 36
                echo "                        <strong>Alex' Dalzeel</strong>
                    ";
            }
            // line 38
            echo "                    <span class=\"float-right\">Le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 38), "d/m/"), "html", null, true);
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 38), "Y") - 315), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 38), "H"), "html", null, true);
            echo "h";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessageDate", [], "any", false, false, false, 38), "i"), "html", null, true);
            echo "</span>
                </div>
                <div class=\"d-flex\">
                    ";
            // line 41
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 41))) {
                // line 42
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 42), "avatar", [], "any", false, false, false, 42)) . ".jpg")), "html", null, true);
                echo "\" alt=\"avatar\" class=\"ship-img\">
                    ";
            } else {
                // line 44
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/tutoriel.jpg"), "html", null, true);
                echo "\" alt=\"avatar\" class=\"ship-img\">
                    ";
            }
            // line 46
            echo "                    <div class=\"msg-look\">
                        <b>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo "</b><br>
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["message"], "getHtmlReader", [], "any", false, false, false, 48)) {
                // line 49
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 49);
                echo "
                        ";
            } else {
                // line 51
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 51), "html", null, true);
                echo "
                        ";
            }
            // line 53
            echo "                    </div>
                </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  230 => 53,  224 => 51,  218 => 49,  216 => 48,  212 => 47,  209 => 46,  203 => 44,  197 => 42,  195 => 41,  183 => 38,  179 => 36,  155 => 34,  152 => 33,  150 => 32,  146 => 30,  142 => 29,  134 => 24,  130 => 23,  126 => 22,  121 => 20,  117 => 19,  112 => 17,  104 => 11,  98 => 10,  83 => 7,  78 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

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
{% endblock %}
", "authenticated/messaging.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\messaging.html.twig");
    }
}
