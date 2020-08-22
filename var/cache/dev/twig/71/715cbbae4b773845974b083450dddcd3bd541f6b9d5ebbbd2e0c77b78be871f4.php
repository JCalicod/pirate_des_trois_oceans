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

/* authenticated/tavern.html.twig */
class __TwigTemplate_8fe3745ce1a4ceebfbf70a7192789d431adff02959e8ff37c65faaf0ecc6faa1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/tavern.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/tavern.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/tavern.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tavern.css"), "html", null, true);
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
            Taverne
        </div>
        <div class=\"card-back-msg p-0\">

            <div id=\"tavern\" class=\"tavern\">
                ";
        // line 24
        $context["i"] = 1;
        // line 25
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                    <div class=\"message message-";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 26, $this->source); })()), "html", null, true);
            echo " d-flex\">
                        <div class=\"left-part\">
                            <p class=\"author m-0\">";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "owner", [], "any", false, false, false, 28), "isActiveNow", [], "any", false, false, false, 28)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
                echo "\" alt=\"etat\" class=\"online-state\">";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
                echo "\" alt=\"etat\" class=\"online-state\">";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "owner", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                            Le ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 29), "d/m/"), "html", null, true);
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 29), "Y") - 315), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 29), "H"), "html", null, true);
            echo "h";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 29), "i"), "html", null, true);
            echo "
                        </div>
                        <div class=\"right-part d-flex\">
                            <p class=\"m-auto\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    ";
            // line 35
            if (0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 35, $this->source); })()), 1)) {
                // line 36
                echo "                        ";
                $context["i"] = 2;
                // line 37
                echo "                    ";
            } else {
                // line 38
                echo "                        ";
                $context["i"] = 1;
                // line 39
                echo "                    ";
            }
            // line 40
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>
    </div>

    <div class=\"tavern-send-message d-flex mt-2\">
        <input id=\"tavern-message\" type=\"text\" maxlength=\"68\" name=\"message\" autofocus> <button id=\"send-tavern-message\" type=\"submit\" name=\"send\" value=\"Envoyer\">Envoyer</button>
    </div>

    <div class=\"d-flex justify-content-end\">
        <div class=\"discord mb-3 mt-3\">
            <a href=\"https://discord.gg/G7vvrhh\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/discord.png"), "html", null, true);
        echo "\" alt=\"discord\"> Rejoins notre Discord</a>
        </div>
    </div>

    <div class=\"tavern-rules d-flex mt-2\">
        <div class=\"illustration\"></div>
        <div class=\"rules\">
            <h1>Règlement de la Taverne</h1>

            <p class=\"p-2\">
                Et une bouteille de Rhum, Hic !<br>
                Bienvenue à la taverne des Pirates ! C'est le lieu idéal pour rencontrer d'autres écumeurs des mers, se tenir au courant des dernières rumeurs et surtout boire un coup et s'amuser tous ensemble !
            </p>

            <p class=\"p-2\">
                <b>1.</b> Vous êtes priés de vous comporter avec respect, tout en gardant un vocabulaire correct et compréhensible.<br><br>
                <b>2.</b> Il est interdit de faire de la publicité et de poster des liens externes.<br><br>
                <b>3.</b> Veillez à ne jamais divulguer d'informations personnelles.<br><br>

                Et surtout, amusez-vous !
            </p>
        </div>
    </div>

    ";
        // line 75
        $this->loadTemplate("authenticated/script/refresh-tavern.html.twig", "authenticated/tavern.html.twig", 75)->display($context);
        // line 76
        echo "    ";
        $this->loadTemplate("authenticated/script/send_tavern_message.html.twig", "authenticated/tavern.html.twig", 76)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/tavern.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 76,  245 => 75,  218 => 51,  206 => 41,  200 => 40,  197 => 39,  194 => 38,  191 => 37,  188 => 36,  186 => 35,  180 => 32,  169 => 29,  155 => 28,  149 => 26,  144 => 25,  142 => 24,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/tavern.css') }}\">
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
            Taverne
        </div>
        <div class=\"card-back-msg p-0\">

            <div id=\"tavern\" class=\"tavern\">
                {% set i = 1 %}
                {% for message in messages %}
                    <div class=\"message message-{{ i }} d-flex\">
                        <div class=\"left-part\">
                            <p class=\"author m-0\">{% if message.owner.isActiveNow %}<img src=\"{{ asset('img/icons/online.png') }}\" alt=\"etat\" class=\"online-state\">{% else %}<img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"etat\" class=\"online-state\">{% endif %} {{ message.owner.username }}</p>
                            Le {{ message.getMomentDate|date('d/m/') }}{{ message.getMomentDate|date('Y') - 315 }} à {{ message.getMomentDate|date('H') }}h{{ message.getMomentDate|date('i') }}
                        </div>
                        <div class=\"right-part d-flex\">
                            <p class=\"m-auto\">{{ message.message }}</p>
                        </div>
                    </div>
                    {% if i == 1 %}
                        {% set i = 2 %}
                    {% else %}
                        {% set i = 1 %}
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"tavern-send-message d-flex mt-2\">
        <input id=\"tavern-message\" type=\"text\" maxlength=\"68\" name=\"message\" autofocus> <button id=\"send-tavern-message\" type=\"submit\" name=\"send\" value=\"Envoyer\">Envoyer</button>
    </div>

    <div class=\"d-flex justify-content-end\">
        <div class=\"discord mb-3 mt-3\">
            <a href=\"https://discord.gg/G7vvrhh\"><img src=\"{{ asset('img/icons/discord.png') }}\" alt=\"discord\"> Rejoins notre Discord</a>
        </div>
    </div>

    <div class=\"tavern-rules d-flex mt-2\">
        <div class=\"illustration\"></div>
        <div class=\"rules\">
            <h1>Règlement de la Taverne</h1>

            <p class=\"p-2\">
                Et une bouteille de Rhum, Hic !<br>
                Bienvenue à la taverne des Pirates ! C'est le lieu idéal pour rencontrer d'autres écumeurs des mers, se tenir au courant des dernières rumeurs et surtout boire un coup et s'amuser tous ensemble !
            </p>

            <p class=\"p-2\">
                <b>1.</b> Vous êtes priés de vous comporter avec respect, tout en gardant un vocabulaire correct et compréhensible.<br><br>
                <b>2.</b> Il est interdit de faire de la publicité et de poster des liens externes.<br><br>
                <b>3.</b> Veillez à ne jamais divulguer d'informations personnelles.<br><br>

                Et surtout, amusez-vous !
            </p>
        </div>
    </div>

    {% include 'authenticated/script/refresh-tavern.html.twig' %}
    {% include 'authenticated/script/send_tavern_message.html.twig' %}
{% endblock %}
", "authenticated/tavern.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\tavern.html.twig");
    }
}
