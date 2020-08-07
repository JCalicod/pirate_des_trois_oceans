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

/* authenticated/settings.html.twig */
class __TwigTemplate_f8a8ab2cfd9aae0483f016b3efef6bd2db21fcf1dac4c5e6f781d7d37e311958 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/settings.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/settings.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settings.css"), "html", null, true);
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
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
        <div class=\"card no-min-height mb-3\">
            <div class=\"card-header\">
                Modification du profil
            </div>
            <div class=\"card-body card-back1\">
                <div class=\"d-flex\">
                    <div class=\"avatar\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "avatar", [], "any", false, false, false, 25)) . ".jpg")), "html", null, true);
        echo "\" alt=\"avatar\" id=\"avatar-img\"><br>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "avatar", [], "any", false, false, false, 26), 'widget', ["id" => "avatar", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "avatar", [], "any", false, false, false, 26)]);
        echo "
                    </div>
                    <div class=\"content pl-5 pr-5 pt-3\">
                        <label>Ancien mot de passe</label><br>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "old_password", [], "any", false, false, false, 30), 'widget');
        echo "
                        <label>Nouveau mot de passe</label><br>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'widget');
        echo "<br><br>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "save", [], "any", false, false, false, 33), 'widget');
        echo "<br>
                        <span class=\"star\">* Laisser vide pour ne modifier que l'avatar.</span>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

    ";
        // line 41
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["godchildren"]) || array_key_exists("godchildren", $context) ? $context["godchildren"] : (function () { throw new RuntimeError('Variable "godchildren" does not exist.', 41, $this->source); })())), 0)) {
            // line 42
            echo "            <div class=\"card no-min-height mb-3\">
                <div class=\"card-header\">
                    Liste des filleuls
                </div>
                <div class=\"card-body card-back1\">
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["godchildren"]) || array_key_exists("godchildren", $context) ? $context["godchildren"] : (function () { throw new RuntimeError('Variable "godchildren" does not exist.', 47, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["godson"]) {
                // line 48
                echo "                        <div class=\"d-flex godson\">
                            <div class=\"avatar\">
                                <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, $context["godson"], "avatar", [], "any", false, false, false, 50)) . ".jpg")), "html", null, true);
                echo "\" alt=\"avatar\" id=\"avatar\"><br>
                            </div>
                            <div class=\"content d-flex\">
                                <div class=\"w-50\">
                                    <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
                echo "\" alt=\"lantern\" class=\"mini\"> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["godson"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "username", [], "any", false, false, false, 54), "html", null, true);
                echo "</a> - Inscrit le <b>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "registration", [], "any", false, false, false, 54), "d/m/"), "html", null, true);
                echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "registration", [], "any", false, false, false, 54), "Y") - 315), "html", null, true);
                echo "</b><br>
                                    <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
                echo "\" alt=\"gun\" class=\"mini\"> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["godchildren_power"]) || array_key_exists("godchildren_power", $context) ? $context["godchildren_power"] : (function () { throw new RuntimeError('Variable "godchildren_power" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 55), [], "array", false, false, false, 55), 0, ".", " "), "html", null, true);
                echo "<br>
                                    <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
                echo "\" alt=\"coin\" class=\"mini\"> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "gold", [], "any", false, false, false, 56), 0, ".", " "), "html", null, true);
                echo "
                                </div>
                                <div class=\"w-50 d-flex\">
                                    <p class=\"m-auto\">
                                        Dernière apparition<br>
                                        ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["godson"], "getLastConnection", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                                            Le <b>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "getLastConnection", [], "any", false, false, false, 62), "d/m/"), "html", null, true);
                    echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "getLastConnection", [], "any", false, false, false, 62), "Y") - 315), "html", null, true);
                    echo " </b> à <b>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "getLastConnection", [], "any", false, false, false, 62), "H"), "html", null, true);
                    echo "h";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["godson"], "getLastConnection", [], "any", false, false, false, 62), "i"), "html", null, true);
                    echo "</b>
                                        ";
                } else {
                    // line 64
                    echo "                                            <b>Jamais connecté.</b>
                                        ";
                }
                // line 66
                echo "                                    </p>
                                </div>
                            </div>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['godson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $this->loadTemplate("script/display_avatar.html.twig", "authenticated/settings.html.twig", 75)->display($context);
        // line 76
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 76,  287 => 75,  284 => 74,  279 => 71,  261 => 66,  257 => 64,  246 => 62,  244 => 61,  234 => 56,  228 => 55,  217 => 54,  210 => 50,  206 => 48,  189 => 47,  182 => 42,  180 => 41,  175 => 39,  166 => 33,  162 => 32,  157 => 30,  150 => 26,  146 => 25,  135 => 17,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/settings.css') }}\">
{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {{ form_start(form) }}
        <div class=\"card no-min-height mb-3\">
            <div class=\"card-header\">
                Modification du profil
            </div>
            <div class=\"card-body card-back1\">
                <div class=\"d-flex\">
                    <div class=\"avatar\">
                        <img src=\"{{ asset('img/avatars/' ~ user.avatar ~ '.jpg') }}\" alt=\"avatar\" id=\"avatar-img\"><br>
                        {{ form_widget(form.avatar, { 'id': 'avatar', 'value': user.avatar }) }}
                    </div>
                    <div class=\"content pl-5 pr-5 pt-3\">
                        <label>Ancien mot de passe</label><br>
                        {{ form_widget(form.old_password) }}
                        <label>Nouveau mot de passe</label><br>
                        {{ form_widget(form.password) }}<br><br>
                        {{ form_widget(form.save) }}<br>
                        <span class=\"star\">* Laisser vide pour ne modifier que l'avatar.</span>
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(form) }}

    {% if godchildren|length > 0 %}
            <div class=\"card no-min-height mb-3\">
                <div class=\"card-header\">
                    Liste des filleuls
                </div>
                <div class=\"card-body card-back1\">
                    {% for godson in godchildren %}
                        <div class=\"d-flex godson\">
                            <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/' ~ godson.avatar ~ '.jpg') }}\" alt=\"avatar\" id=\"avatar\"><br>
                            </div>
                            <div class=\"content d-flex\">
                                <div class=\"w-50\">
                                    <img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"lantern\" class=\"mini\"> <a href=\"{{ path('app_profile', { id: godson.id }) }}\" target=\"_blank\">{{ godson.username }}</a> - Inscrit le <b>{{ godson.registration|date('d/m/') }}{{ godson.registration|date('Y') - 315 }}</b><br>
                                    <img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"gun\" class=\"mini\"> {{ godchildren_power[loop.index0]|number_format(0, '.', ' ') }}<br>
                                    <img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"coin\" class=\"mini\"> {{ godson.gold|number_format(0, '.', ' ') }}
                                </div>
                                <div class=\"w-50 d-flex\">
                                    <p class=\"m-auto\">
                                        Dernière apparition<br>
                                        {% if godson.getLastConnection %}
                                            Le <b>{{ godson.getLastConnection|date('d/m/') }}{{ godson.getLastConnection|date('Y') - 315 }} </b> à <b>{{ godson.getLastConnection|date('H') }}h{{ godson.getLastConnection|date('i') }}</b>
                                        {% else %}
                                            <b>Jamais connecté.</b>
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
    {% endif %}

    {% include 'script/display_avatar.html.twig' %}

{% endblock %}
", "authenticated/settings.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\settings.html.twig");
    }
}
