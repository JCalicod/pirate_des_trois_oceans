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

/* signup.html.twig */
class __TwigTemplate_e9837094c7ce07c35f1b1246d51aa2f1bc8f7713173edbd39c8b4aca487de384 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "signup.html.twig", 1);
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
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Avatar
                    </div>
                    <div class=\"card-body p-1 m-0 bg-cla\">
                        <div class=\"registration-avatar\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.jpg"), "html", null, true);
        echo "\" id=\"avatar-img\"></div>
                        <div class=\"registration-infos p-1 m-auto\">
                            <p class=\"mb-1\">Image<br>
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "avatar", [], "any", false, false, false, 23), 'widget', ["id" => "avatar"]);
        echo "
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Principal
                    </div>
                    <div class=\"card-body p-0 pt-4 m-0 bg-cla\">
                        <div class=\"row p-0 m-0\">

                            <div class=\"registration-infos p-1 m-auto\">
                                <p class=\"mb-1\">
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), 'label');
        echo "<br>
                                    <span class=\"mini\">Entre 3 et 20 caractères</span><br>
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "username", [], "any", false, false, false, 42), 'widget');
        echo "
                                </p>

                                <p class=\"mb-1\">
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "pass", [], "any", false, false, false, 46), 'label');
        echo "<br>
                                    <span class=\"mini\">3 caractères minimum</span><br>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "pass", [], "any", false, false, false, 48), 'widget');
        echo "
                                </p>

                                <p class=\"mb-1\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "confirm", [], "any", false, false, false, 52), 'label');
        echo "<br>
                                    <span class=\"mini\">Retapez le mot de passe</span><br>
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "confirm", [], "any", false, false, false, 54), 'widget');
        echo "
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Autres
                    </div>

                    <div class=\"card-body p-0 pt-4 m-0 bg-cla\">
                        <div class=\"row p-0 m-0\">
                            <div class=\"registration-infos p-1 m-auto\">
                                <p class=\"mb-1\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email_address", [], "any", false, false, false, 72), 'label');
        echo "<br>
                                    <span class=\"mini\">Entrez une adresse valide</span><br>
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email_address", [], "any", false, false, false, 74), 'widget');
        echo "
                                </p>
                                <p class=\"mb-1\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "godfather", [], "any", false, false, false, 77), 'label');
        echo "<br>
                                    <span class=\"mini\">Optionnel</span><br>
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "godfather", [], "any", false, false, false, 79), 'widget');
        echo "
                                </p>
                                <p class=\"mb-1\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "ship_name", [], "any", false, false, false, 82), 'label');
        echo "<br>
                                    <span class=\"mini\">Entre 3 et 20 caractères</span><br>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "ship_name", [], "any", false, false, false, 84), 'widget');
        echo "
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"den-header mt-4\">
            Ilshenar
        </div>

        <div class=\"den-choice\">
            Choix du repaire : ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "position", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "den-select"]]);
        echo "
        </div>

        <div class=\"ilshenar-map\">
        </div>

        <div class=\"den-choice text-center\">
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "save", [], "any", false, false, false, 105), 'widget');
        echo "
        </div>
    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "

    ";
        // line 109
        $this->loadTemplate("script/display_avatar.html.twig", "signup.html.twig", 109)->display($context);
        // line 110
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 110,  258 => 109,  253 => 107,  248 => 105,  238 => 98,  221 => 84,  216 => 82,  210 => 79,  205 => 77,  199 => 74,  194 => 72,  173 => 54,  168 => 52,  161 => 48,  156 => 46,  149 => 42,  144 => 40,  124 => 23,  118 => 20,  107 => 12,  104 => 11,  98 => 10,  83 => 7,  78 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Avatar
                    </div>
                    <div class=\"card-body p-1 m-0 bg-cla\">
                        <div class=\"registration-avatar\"><img src=\"{{ asset('img/avatars/1.jpg') }}\" id=\"avatar-img\"></div>
                        <div class=\"registration-infos p-1 m-auto\">
                            <p class=\"mb-1\">Image<br>
                                {{ form_widget(form.avatar, { 'id': 'avatar'} ) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Principal
                    </div>
                    <div class=\"card-body p-0 pt-4 m-0 bg-cla\">
                        <div class=\"row p-0 m-0\">

                            <div class=\"registration-infos p-1 m-auto\">
                                <p class=\"mb-1\">
                                    {{ form_label(form.username) }}<br>
                                    <span class=\"mini\">Entre 3 et 20 caractères</span><br>
                                    {{ form_widget(form.username) }}
                                </p>

                                <p class=\"mb-1\">
                                    {{ form_label(form.password.pass) }}<br>
                                    <span class=\"mini\">3 caractères minimum</span><br>
                                    {{ form_widget(form.password.pass) }}
                                </p>

                                <p class=\"mb-1\">
                                    {{ form_label(form.password.confirm) }}<br>
                                    <span class=\"mini\">Retapez le mot de passe</span><br>
                                    {{ form_widget(form.password.confirm) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Autres
                    </div>

                    <div class=\"card-body p-0 pt-4 m-0 bg-cla\">
                        <div class=\"row p-0 m-0\">
                            <div class=\"registration-infos p-1 m-auto\">
                                <p class=\"mb-1\">
                                    {{ form_label(form.email_address) }}<br>
                                    <span class=\"mini\">Entrez une adresse valide</span><br>
                                    {{ form_widget(form.email_address) }}
                                </p>
                                <p class=\"mb-1\">
                                    {{ form_label(form.godfather) }}<br>
                                    <span class=\"mini\">Optionnel</span><br>
                                    {{ form_widget(form.godfather) }}
                                </p>
                                <p class=\"mb-1\">
                                    {{ form_label(form.ship_name) }}<br>
                                    <span class=\"mini\">Entre 3 et 20 caractères</span><br>
                                    {{ form_widget(form.ship_name) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"den-header mt-4\">
            Ilshenar
        </div>

        <div class=\"den-choice\">
            Choix du repaire : {{ form_widget(form.position, { 'attr': { 'class': 'den-select' } } ) }}
        </div>

        <div class=\"ilshenar-map\">
        </div>

        <div class=\"den-choice text-center\">
            {{ form_widget(form.save) }}
        </div>
    {{ form_end(form) }}

    {% include 'script/display_avatar.html.twig' %}

{% endblock %}", "signup.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\signup.html.twig");
    }
}
