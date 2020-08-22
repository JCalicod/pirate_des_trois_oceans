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

/* authenticated/alliance.html.twig */
class __TwigTemplate_a4d77dca371938afee4f0cf05f92eaa7ca6653c52bc260ad72fe577073a516fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/alliance.html.twig", 1);
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
    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Créer mon Alliance
        </div>
        <div class=\"card-back-msg d-flex\">
            <div class=\"npc\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/tutoriel.jpg"), "html", null, true);
        echo "\" alt=\"npc\">
            </div>
            <div class=\"create-alliance\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                    <div class=\"d-flex justify-content-between\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'widget');
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "abbreviation", [], "any", false, false, false, 29), 'widget');
        echo "
                    </div>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "color", [], "any", false, false, false, 32), 'widget');
        echo "
                <div class=\"d-flex justify-content-between\">
                    <div class=\"font-weight-bold\"><img class=\"skull\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/skull.png"), "html", null, true);
        echo "\" alt=\"skull\"> Choix de la couleur de l'alliance</div>
                    <div class=\"d-flex\">
                        <div class=\"color green\" id=\"0\"></div>
                        <div class=\"color purple\" id=\"1\"></div>
                        <div class=\"color red\" id=\"2\"></div>
                        <div class=\"color blue\" id=\"3\"></div>
                        <div class=\"color black\" id=\"4\"></div>
                        <div class=\"color yellow\" id=\"5\"></div>
                        <div class=\"color orange\" id=\"6\"></div>
                    </div>
                </div>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"card no-min-height mt-3\">
        <div class=\"card-header\">
            Rejoindre une Alliance
        </div>
        <div class=\"card-back-msg p-3\">
            <table class=\"alliances-list\">
                <thead>
                    <tr>
                        <td>Initiales</td>
                        <td>Nom</td>
                        <td>Chef</td>
                        <td>Membres</td>
                        <td>Puissance requise</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 67
        $context["i"] = 0;
        // line 68
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alliances"]) || array_key_exists("alliances", $context) ? $context["alliances"] : (function () { throw new RuntimeError('Variable "alliances" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alliance"]) {
            // line 69
            echo "                        ";
            $context["chief"] = twig_get_attribute($this->env, $this->source, $context["alliance"], "getLeader", [], "any", false, false, false, 69);
            // line 70
            echo "                        <tr class=\"";
            if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })()) % 2), 0)) {
                echo "list-element-1";
            } else {
                echo "list-element-2";
            }
            echo "\">
                            <td><span class=\"font-weight-bold alliance-";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alliance"], "color", [], "any", false, false, false, 71), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alliance"], "abbreviation", [], "any", false, false, false, 71), "html", null, true);
            echo "]</span></td>
                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alliance"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                            <td><a target=_blank href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chief"]) || array_key_exists("chief", $context) ? $context["chief"] : (function () { throw new RuntimeError('Variable "chief" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chief"]) || array_key_exists("chief", $context) ? $context["chief"] : (function () { throw new RuntimeError('Variable "chief" does not exist.', 73, $this->source); })()), "username", [], "any", false, false, false, 73), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alliance"], "users", [], "any", false, false, false, 74)), "html", null, true);
            echo " / 10</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alliance"], "getRequiredPower", [], "any", false, false, false, 75), 0, ".", " "), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            // line 77
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 77, $this->source); })()) + 1);
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alliance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            </table>

            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["joinForm"]) || array_key_exists("joinForm", $context) ? $context["joinForm"] : (function () { throw new RuntimeError('Variable "joinForm" does not exist.', 82, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alliance_join")]);
        echo "

            <div class=\"row\">
                <div class=\"col-7\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["joinForm"]) || array_key_exists("joinForm", $context) ? $context["joinForm"] : (function () { throw new RuntimeError('Variable "joinForm" does not exist.', 86, $this->source); })()), "alliance", [], "any", false, false, false, 86), 'widget');
        echo "
                </div>
                <div class=\"col-1\"></div>
                <div class=\"col-4\">
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["joinForm"]) || array_key_exists("joinForm", $context) ? $context["joinForm"] : (function () { throw new RuntimeError('Variable "joinForm" does not exist.', 90, $this->source); })()), "save", [], "any", false, false, false, 90), 'widget');
        echo "
                </div>
            </div>
            ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["joinForm"]) || array_key_exists("joinForm", $context) ? $context["joinForm"] : (function () { throw new RuntimeError('Variable "joinForm" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    ";
        // line 97
        $this->loadTemplate("authenticated/script/choose-alliance-color.html.twig", "authenticated/alliance.html.twig", 97)->display($context);
        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/alliance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 98,  293 => 97,  286 => 93,  280 => 90,  273 => 86,  266 => 82,  261 => 79,  255 => 78,  253 => 77,  248 => 75,  244 => 74,  238 => 73,  234 => 72,  228 => 71,  219 => 70,  216 => 69,  211 => 68,  209 => 67,  184 => 45,  170 => 34,  165 => 32,  161 => 31,  156 => 29,  152 => 28,  147 => 26,  141 => 23,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
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

    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Créer mon Alliance
        </div>
        <div class=\"card-back-msg d-flex\">
            <div class=\"npc\">
                <img src=\"{{ asset('img/avatars/tutoriel.jpg') }}\" alt=\"npc\">
            </div>
            <div class=\"create-alliance\">
                {{ form_start(form) }}
                    <div class=\"d-flex justify-content-between\">
                        {{ form_widget(form.name) }}
                        {{ form_widget(form.abbreviation) }}
                    </div>
                {{ form_widget(form.description) }}
                {{ form_widget(form.color) }}
                <div class=\"d-flex justify-content-between\">
                    <div class=\"font-weight-bold\"><img class=\"skull\" src=\"{{ asset('img/icons/skull.png') }}\" alt=\"skull\"> Choix de la couleur de l'alliance</div>
                    <div class=\"d-flex\">
                        <div class=\"color green\" id=\"0\"></div>
                        <div class=\"color purple\" id=\"1\"></div>
                        <div class=\"color red\" id=\"2\"></div>
                        <div class=\"color blue\" id=\"3\"></div>
                        <div class=\"color black\" id=\"4\"></div>
                        <div class=\"color yellow\" id=\"5\"></div>
                        <div class=\"color orange\" id=\"6\"></div>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <div class=\"card no-min-height mt-3\">
        <div class=\"card-header\">
            Rejoindre une Alliance
        </div>
        <div class=\"card-back-msg p-3\">
            <table class=\"alliances-list\">
                <thead>
                    <tr>
                        <td>Initiales</td>
                        <td>Nom</td>
                        <td>Chef</td>
                        <td>Membres</td>
                        <td>Puissance requise</td>
                    </tr>
                </thead>

                <tbody>
                    {% set i = 0 %}
                    {% for alliance in alliances %}
                        {% set chief = alliance.getLeader %}
                        <tr class=\"{% if i % 2 == 0 %}list-element-1{% else %}list-element-2{% endif %}\">
                            <td><span class=\"font-weight-bold alliance-{{ alliance.color }}\">[{{ alliance.abbreviation }}]</span></td>
                            <td>{{ alliance.name }}</td>
                            <td><a target=_blank href=\"{{ path('app_profile', {id: chief.id}) }}\">{{ chief.username }}</a></td>
                            <td>{{ alliance.users|length }} / 10</td>
                            <td>{{ alliance.getRequiredPower|number_format(0, '.', ' ') }}</td>
                        </tr>
                        {% set i = i + 1 %}
                    {% endfor %}
                </tbody>
            </table>

            {{ form_start(joinForm, {'action': path('app_alliance_join')}) }}

            <div class=\"row\">
                <div class=\"col-7\">
                    {{ form_widget(joinForm.alliance) }}
                </div>
                <div class=\"col-1\"></div>
                <div class=\"col-4\">
                    {{ form_widget(joinForm.save) }}
                </div>
            </div>
            {{ form_end(joinForm) }}
        </div>
    </div>

    {% include 'authenticated/script/choose-alliance-color.html.twig' %}

{% endblock %}
", "authenticated/alliance.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\alliance.html.twig");
    }
}
