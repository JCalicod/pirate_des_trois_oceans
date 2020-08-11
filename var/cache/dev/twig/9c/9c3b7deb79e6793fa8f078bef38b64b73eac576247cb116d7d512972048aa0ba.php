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

/* index.html.twig */
class __TwigTemplate_787b9b3416d5d9cba3501886bad3347e06b1f9d623409d5bfa8c4952de4e8f32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger mb-5\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageData", [], "any", false, false, false, 5), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <div class=\"registration-pub mb-4\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pub_registration.png"), "html", null, true);
        echo "\"></a></div>

    <div class=\"row\">
        <div class=\"col-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Le Jeu
                </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                    <form method=\"post\">
                        <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"mb-2\" placeholder=\"Pseudo\" required autofocus><br>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"mb-2\" required=\"required\">
                        <input type=\"submit\" name=\"connection\" value=\"Connexion\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >
                    </form>
                    </p>

                    <hr>

                    <p class=\"card-text\">
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
        echo "\" class=\"mr-2\"> <b>";
        echo twig_escape_filter($this->env, (isset($context["nb_users"]) || array_key_exists("nb_users", $context) ? $context["nb_users"] : (function () { throw new RuntimeError('Variable "nb_users" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</b> joueurs inscrits<br>
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
        echo "\" class=\"mr-2\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logged");
        echo "\" target=\"_blank\"><b>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["logged"]) || array_key_exists("logged", $context) ? $context["logged"] : (function () { throw new RuntimeError('Variable "logged" does not exist.', 32, $this->source); })())), "html", null, true);
        echo "</b></a> joueurs en ligne
                    </p>
                </div>
            </div>
        </div>

        <div class=\"col-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Présentation
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Jeu de pirate gratuit en ligne.</h5>
                    <p class=\"card-text pr-4\">
                        Capitaine d'une bande de pirates écumant les trois océans d'Ilshenar, vous allez sillonner les mers pour devenir un pirate craint et respecté de tous. Abordages sanglants, combats en mer, braconnages, complots en tout genre, chasses aux trésors et soirées mouvementées à la taverne : voilà ce qui vous attend !
                    </p>

                    <p class=\"card-text pr-4\">
                        Gérez votre flotte de guerre au quotidien dans la plus grande tradition de la flibuste. Recrutez un équipage digne de ce nom et partez à l'aventure. Au cours de vos voyages, explorez un monde fascinant et faites-y ce que bon vous semble ! Echangez d'assourdissants coups de canons avec les navires ennemis et partez à l'abordage sabre à la main vous emparer de son trésor. Fondez une puissante alliance ou rejoignez d'autres pirates dans la lutte pour le contrôle du monde...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12 p-0\">
            <div class=\"card\">
                <div class=\"card-header m-0\">
                    Panthéon des héros
                </div>
                <div class=\"card-body backp2 m-0 p-0\">
                    <div class=\"row p-0 m-0\">
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 65, $this->source); })()));
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
            // line 66
            echo "                            <div class=\"col-3 p-0\">
                                <div class=\"ranking\">
                                    <div class=\"ranking-name\">";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["user"], "activity", [], "any", false, false, false, 68)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
                echo "\" alt=\"etat\">";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
                echo "\" alt=\"etat\">";
            }
            echo " <a target=_blank href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "array", false, false, false, 68)]), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "array", false, false, false, 68), "html", null, true);
            echo "</b></a></div>
                                    <div class=\"row p-0 m-0\">
                                        <div class=\"ranking-avatar\"><img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "array", false, false, false, 70)) . ".jpg")), "html", null, true);
            echo "\"></div>
                                        <div class=\"ranking-number\"><img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/numbers/" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71)) . ".png")), "html", null, true);
            echo "\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 76,  202 => 71,  198 => 70,  181 => 68,  177 => 66,  160 => 65,  120 => 32,  114 => 31,  103 => 23,  96 => 19,  80 => 8,  77 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger mb-5\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"registration-pub mb-4\"><a href=\"{{ path('app_signup') }}\"><img src=\"{{ asset('img/pub_registration.png') }}\"></a></div>

    <div class=\"row\">
        <div class=\"col-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Le Jeu
                </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                    <form method=\"post\">
                        <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"mb-2\" placeholder=\"Pseudo\" required autofocus><br>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"mb-2\" required=\"required\">
                        <input type=\"submit\" name=\"connection\" value=\"Connexion\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\"
                        >
                    </form>
                    </p>

                    <hr>

                    <p class=\"card-text\">
                        <img src=\"{{ asset('img/icons/offline.png') }}\" class=\"mr-2\"> <b>{{ nb_users }}</b> joueurs inscrits<br>
                        <img src=\"{{ asset('img/icons/online.png') }}\" class=\"mr-2\"> <a href=\"{{ path('app_logged') }}\" target=\"_blank\"><b>{{ logged|length }}</b></a> joueurs en ligne
                    </p>
                </div>
            </div>
        </div>

        <div class=\"col-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Présentation
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Jeu de pirate gratuit en ligne.</h5>
                    <p class=\"card-text pr-4\">
                        Capitaine d'une bande de pirates écumant les trois océans d'Ilshenar, vous allez sillonner les mers pour devenir un pirate craint et respecté de tous. Abordages sanglants, combats en mer, braconnages, complots en tout genre, chasses aux trésors et soirées mouvementées à la taverne : voilà ce qui vous attend !
                    </p>

                    <p class=\"card-text pr-4\">
                        Gérez votre flotte de guerre au quotidien dans la plus grande tradition de la flibuste. Recrutez un équipage digne de ce nom et partez à l'aventure. Au cours de vos voyages, explorez un monde fascinant et faites-y ce que bon vous semble ! Echangez d'assourdissants coups de canons avec les navires ennemis et partez à l'abordage sabre à la main vous emparer de son trésor. Fondez une puissante alliance ou rejoignez d'autres pirates dans la lutte pour le contrôle du monde...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12 p-0\">
            <div class=\"card\">
                <div class=\"card-header m-0\">
                    Panthéon des héros
                </div>
                <div class=\"card-body backp2 m-0 p-0\">
                    <div class=\"row p-0 m-0\">
                        {% for user in ranking %}
                            <div class=\"col-3 p-0\">
                                <div class=\"ranking\">
                                    <div class=\"ranking-name\">{% if user.activity %}<img src=\"{{ asset('img/icons/online.png') }}\" alt=\"etat\">{% else %}<img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"etat\">{% endif %} <a target=_blank href=\"{{ path('app_profile', {id: user['id']}) }}\"><b>{{ user['username'] }}</b></a></div>
                                    <div class=\"row p-0 m-0\">
                                        <div class=\"ranking-avatar\"><img src=\"{{ asset('img/avatars/' ~ user['avatar'] ~ '.jpg' ) }}\"></div>
                                        <div class=\"ranking-number\"><img src=\"{{ asset('img/numbers/' ~ loop.index ~ '.png' ) }}\"></div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "index.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\index.html.twig");
    }
}
