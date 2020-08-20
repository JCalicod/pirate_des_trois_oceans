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

/* authenticated/home.html.twig */
class __TwigTemplate_8ef2f105b8e8b94f59ef18bbaff8c5f723d65aa752ac3df254a4fc679a4152ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/home.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/home.html.twig", 1);
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
        $context["alliance"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "alliance", [], "any", false, false, false, 12);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("authenticated/alliance-advert.html.twig", "authenticated/home.html.twig", 14)->display(twig_array_merge($context, ["alliance" => (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 14, $this->source); })())]));
        // line 15
        echo "
<div class=\"row\">
    <div class=\"col-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                Carnet de Bord
            </div>
            <div class=\"card-body card-back1\">
                <div class=\"cat\"> <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"coin\">Pièces d'or <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "gold", [], "any", false, false, false, 23), 0, ".", " "), "html", null, true);
        echo "</span></div>
                <div class=\"cat\"> <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/pa.png"), "html", null, true);
        echo "\" alt=\"pa\">Points d'Action <span class=\"float-right font-weight-bold green-text\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "pa", [], "any", false, false, false, 24), "html", null, true);
        echo "</span></div>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messaging");
        echo "\"><div class=\"cat";
        if (1 === twig_compare((isset($context["nb_new_messages"]) || array_key_exists("nb_new_messages", $context) ? $context["nb_new_messages"] : (function () { throw new RuntimeError('Variable "nb_new_messages" does not exist.', 25, $this->source); })()), 0)) {
            echo "gold ";
        }
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/envelope.png"), "html", null, true);
        echo "\" alt=\"envelope\">Messagerie <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, (isset($context["nb_new_messages"]) || array_key_exists("nb_new_messages", $context) ? $context["nb_new_messages"] : (function () { throw new RuntimeError('Variable "nb_new_messages" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</span></div></a>
                <div class=\"cat\"> <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" alt=\"lantern\">Navires <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "ships", [], "any", false, false, false, 26)) - 1), "html", null, true);
        echo "</span></div>
                <div class=\"cat\"> <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" alt=\"saber\">Equipage <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["crew"]) || array_key_exists("crew", $context) ? $context["crew"] : (function () { throw new RuntimeError('Variable "crew" does not exist.', 27, $this->source); })()), 0, ".", " "), "html", null, true);
        echo "</span></div>
                <div class=\"cat\"> <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" alt=\"cannon\">Puissance <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["power"]) || array_key_exists("power", $context) ? $context["power"] : (function () { throw new RuntimeError('Variable "power" does not exist.', 28, $this->source); })()), 0, ".", " "), "html", null, true);
        echo "</span></div>
                <div class=\"cat\"> <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"lantern\">Classement <span class=\"float-right font-weight-bold gold-dark\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 29, $this->source); })()), 0, ".", " "), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["nb_users"]) || array_key_exists("nb_users", $context) ? $context["nb_users"] : (function () { throw new RuntimeError('Variable "nb_users" does not exist.', 29, $this->source); })()), 0, ".", " "), "html", null, true);
        echo "</span></div>
                <div class=\"cat\"> <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/skull.png"), "html", null, true);
        echo "\" alt=\"skull\">Ratio Guerre <span class=\"float-right font-weight-bold\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "victories", [], "any", false, false, false, 30) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "defeats", [], "any", false, false, false, 30)), 0, ".", " "), "html", null, true);
        echo " </span></div>
                <div class=\"cat\"> <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
        echo "\" alt=\"den\">Alliance <span class=\"float-right font-weight-bold\">";
        if ((isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 31, $this->source); })())) {
            echo "<span class=\"font-weight-bold alliance-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 31, $this->source); })()), "abbreviation", [], "any", false, false, false, 31), "html", null, true);
            echo "]</span>";
        } else {
            echo "Aucune";
        }
        echo "</span></div>
                <div class=\"cat-dark-bg text-center\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        echo "\">Modifier mon Profil</a> | <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logged");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["logged"]) || array_key_exists("logged", $context) ? $context["logged"] : (function () { throw new RuntimeError('Variable "logged" does not exist.', 32, $this->source); })())), "html", null, true);
        echo " Connectés</a></div>
            </div>
        </div>
    </div>

    <div class=\"col-8\">
        <div class=\"card\">
            <div class=\"card-header\">
                Repaire du Pirate
            </div>
            <div class=\"card-body p-0\">
                <div class=\"row\">
                    <div class=\"cat-head-bg text-center\">
                        Exploration
                    </div>

                    <div class=\"cat-head-bg text-center\">
                        Braconnage
                    </div>

                    <div class=\"cat-head-bg text-center\">
                        Espionnage
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"cat-body-bg text-center\">
                        ";
        // line 59
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["explorer_positions"]) || array_key_exists("explorer_positions", $context) ? $context["explorer_positions"] : (function () { throw new RuntimeError('Variable "explorer_positions" does not exist.', 59, $this->source); })())), 0)) {
            // line 60
            echo "                            <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
            echo "\">
                                <div class=\"form-group mx-auto pl-3\">
                                    <select name=\"land\" class=\"input-white\">
                                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["explorer_positions"]) || array_key_exists("explorer_positions", $context) ? $context["explorer_positions"] : (function () { throw new RuntimeError('Variable "explorer_positions" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 64
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                    </select>
                                    <input type=\"submit\" name=\"explore\" value=\"Explorer\" class=\"mt-2\">
                                </div>
                            </form>
                        ";
        } else {
            // line 71
            echo "                            <p>Aucun explorateur disponible.</p>
                        ";
        }
        // line 73
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("treasure_hunt");
        echo "\"><span class=\"mini2\">Chasse aux Trésors</span></a>
                    </div>

                    <div class=\"cat-body-bg text-center\">
                        ";
        // line 77
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["explorer_positions"]) || array_key_exists("explorer_positions", $context) ? $context["explorer_positions"] : (function () { throw new RuntimeError('Variable "explorer_positions" does not exist.', 77, $this->source); })())), 0)) {
            // line 78
            echo "                        <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poach");
            echo "\">
                            <div class=\"form-group mx-auto pl-3\">
                                <select name=\"land\" class=\"input-white\">
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["explorer_positions"]) || array_key_exists("explorer_positions", $context) ? $context["explorer_positions"] : (function () { throw new RuntimeError('Variable "explorer_positions" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 82
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "name", [], "any", false, false, false, 82), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                </select>
                                <input type=\"submit\" name=\"poach\" value=\"Chasser\" class=\"mt-2\">
                            </div>
                        </form>
                        ";
        } else {
            // line 89
            echo "                            <p>Aucun explorateur disponible.</p>
                        ";
        }
        // line 91
        echo "                        ";
        // line 92
        echo "                    </div>

                    <div class=\"cat-body-bg text-center\">
                            <div class=\"form-group mx-auto\">
                                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["spyForm"]) || array_key_exists("spyForm", $context) ? $context["spyForm"] : (function () { throw new RuntimeError('Variable "spyForm" does not exist.', 96, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_spy")]);
        echo "

                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["spyForm"]) || array_key_exists("spyForm", $context) ? $context["spyForm"] : (function () { throw new RuntimeError('Variable "spyForm" does not exist.', 98, $this->source); })()), "username", [], "any", false, false, false, 98), 'widget');
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["spyForm"]) || array_key_exists("spyForm", $context) ? $context["spyForm"] : (function () { throw new RuntimeError('Variable "spyForm" does not exist.', 99, $this->source); })()), "spy", [], "any", false, false, false, 99), 'widget');
        echo "

                                ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["spyForm"]) || array_key_exists("spyForm", $context) ? $context["spyForm"] : (function () { throw new RuntimeError('Variable "spyForm" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
                            </div>
                        <p class=\"mini2\">Coût : 15 000 Pièces d'or</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"cat-season\">
                        <span id=\"heure\"></span>
                    </div>

                    <div class=\"cat-avatar\"><div class=\"cat-pseudo\"><a target=_blank href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112)]), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "username", [], "any", false, false, false, 112), "html", null, true);
        echo "</a></div><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "avatar", [], "any", false, false, false, 112)) . ".jpg")), "html", null, true);
        echo "\" alt=\"avatar\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class=\"row mt-5\">
        <div class=\"col-12 p-0\">
            <div class=\"card\">
                <div class=\"card-header m-0\">
                    Cartographie
                </div>
                <div class=\"card-body m-0 p-0\">
                    <div class=\"cartographie-selection d-flex justify-content-between\">
                        ";
        // line 126
        $context["movable"] = false;
        // line 127
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "ships", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 128
            echo "                            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ship"], "seaman", [], "any", false, false, false, 128), 0) &&  !$this->extensions['App\Twig\AppExtension']->isInstanceOf($context["ship"], "App\\Entity\\Den"))) {
                // line 129
                echo "                                ";
                $context["movable"] = true;
                // line 130
                echo "                            ";
            }
            // line 131
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                        ";
        if ((isset($context["movable"]) || array_key_exists("movable", $context) ? $context["movable"] : (function () { throw new RuntimeError('Variable "movable" does not exist.', 132, $this->source); })())) {
            // line 133
            echo "                            <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_travel");
            echo "\">
                                <select class=\"input-white\" name=\"fleet_position\">
                                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movable_fleet"]) || array_key_exists("movable_fleet", $context) ? $context["movable_fleet"] : (function () { throw new RuntimeError('Variable "movable_fleet" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
                // line 136
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pos"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\">Flotte en ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pos"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pos"], "name", [], "any", false, false, false, 136), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "ships", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
                // line 139
                echo "                                        ";
                if ( !$this->extensions['App\Twig\AppExtension']->isInstanceOf($context["ship"], "App\\Entity\\Den")) {
                    // line 140
                    echo "                                            <option value=\"ship";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 140), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 140), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 142
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                                </select>

                                <select name=\"target_position\" class=\"input-white\">
                                    <option value=\"1\">1 - Banquise</option>
                                    <option value=\"2\">2 - Montagnes Blanches</option>
                                    <option value=\"3\">3 - Terres du Nord</option>
                                    <option value=\"4\">4 - Terres Glacées</option>
                                    <option value=\"5\">5 - Forêt Mystique</option>
                                    <option value=\"6\">6 - Ile Volcanique</option>
                                    <option value=\"7\">7 - Marécages</option>
                                    <option value=\"8\">8 - Forêt de Jade</option>
                                    <option value=\"9\">9 - Golfe des Naufragés</option>
                                    <option value=\"10\">10 - Montagnes Grises</option>
                                    <option value=\"11\">11 - Plaines de Drimmor</option>
                                    <option value=\"12\">12 - Monts Lance-Pierre</option>
                                    <option value=\"13\">13 - Forêt Morte</option>
                                    <option value=\"14\">14 - Jungle</option>
                                    <option value=\"15\">15 - Ile aux Forbans</option>
                                    <option value=\"16\">16 - Baie des Tortues</option>
                                    <option value=\"17\">17 - Forêt Tropicale</option>
                                    <option value=\"18\">18 - Désert</option>
                                    <option value=\"19\">19 - Oasis</option>
                                    <option value=\"20\">20 - Terres du Sud</option>
                                    <option value=\"21\">21 - Ile Assaron</option>
                                </select>
                                <input type=\"submit\" name=\"travel\" value=\"Voyager\"> ";
            // line 169
            echo "                            </form>
                        ";
        } else {
            // line 171
            echo "                            <b>Aucun de vos navires ne peut actuellement se déplacer.</b>
                        ";
        }
        // line 173
        echo "                    </div>
                    <div class=\"row m-0\">
                        <div class=\"cartographie-background\" id=\"cartographie-background\">
                            <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
        echo "\" class=\"logo-big den-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["den"]) || array_key_exists("den", $context) ? $context["den"] : (function () { throw new RuntimeError('Variable "den" does not exist.', 176, $this->source); })()), "position", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
        echo "\" alt=\"den\">
                            ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "ships", [], "any", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 178
            echo "                                ";
            if ( !$this->extensions['App\Twig\AppExtension']->isInstanceOf($context["ship"], "App\\Entity\\Den")) {
                // line 179
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/ship.png"), "html", null, true);
                echo "\" class=\"logo-big ship-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "position", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "html", null, true);
                echo "\" alt=\"den\">
                                ";
            }
            // line 181
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                        </div>
                        <div class=\"cartographie-infos\">
                            <div class=\"cat-pseudo text-center p-1\" style=\"border-top: 1px solid #2E1007;\">
                                Navires
                            </div>

                            <div class=\"cartographie-navires\">
                                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pos_order"]) || array_key_exists("pos_order", $context) ? $context["pos_order"] : (function () { throw new RuntimeError('Variable "pos_order" does not exist.', 189, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["arr_value"]) {
            // line 190
            echo "                                    <b>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</b><br>
                                    ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["arr_value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 192
                echo "                                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "<br>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['arr_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                            </div>

                            <div class=\"cat-pseudo text-center p-1\">
                                Légende
                            </div>

                            <div class=\"cartographie-legende\">
                                <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/ship.png"), "html", null, true);
        echo "\" class=\"logo-big mb-2\" alt=\"navires\"> Navires<br>
                                <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
        echo "\" alt=\"repaire\" class=\"logo-big mb-2\"> Repaire<br>
                                <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/treasure.png"), "html", null, true);
        echo "\" alt=\"navires\" class=\"logo-big\"> Indices
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 213
        $this->loadTemplate("authenticated/script/hour.html.twig", "authenticated/home.html.twig", 213)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 213,  558 => 204,  554 => 203,  550 => 202,  541 => 195,  535 => 194,  526 => 192,  522 => 191,  517 => 190,  513 => 189,  504 => 182,  498 => 181,  490 => 179,  487 => 178,  483 => 177,  477 => 176,  472 => 173,  468 => 171,  464 => 169,  437 => 143,  431 => 142,  423 => 140,  420 => 139,  415 => 138,  402 => 136,  398 => 135,  392 => 133,  389 => 132,  383 => 131,  380 => 130,  377 => 129,  374 => 128,  369 => 127,  367 => 126,  346 => 112,  332 => 101,  327 => 99,  323 => 98,  318 => 96,  312 => 92,  310 => 91,  306 => 89,  299 => 84,  286 => 82,  282 => 81,  275 => 78,  273 => 77,  265 => 73,  261 => 71,  254 => 66,  241 => 64,  237 => 63,  230 => 60,  228 => 59,  194 => 32,  180 => 31,  174 => 30,  166 => 29,  160 => 28,  154 => 27,  148 => 26,  136 => 25,  130 => 24,  124 => 23,  114 => 15,  112 => 14,  109 => 13,  107 => 12,  104 => 11,  98 => 10,  83 => 7,  78 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
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

    {% set alliance = app.user.alliance %}

    {% include 'authenticated/alliance-advert.html.twig' with {'alliance': alliance} %}

<div class=\"row\">
    <div class=\"col-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                Carnet de Bord
            </div>
            <div class=\"card-body card-back1\">
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"coin\">Pièces d'or <span class=\"float-right font-weight-bold\">{{ app.user.gold|number_format(0, '.', ' ') }}</span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/pa.png') }}\" alt=\"pa\">Points d'Action <span class=\"float-right font-weight-bold green-text\">{{ app.user.pa }}</span></div>
                    <a href=\"{{ path('app_messaging') }}\"><div class=\"cat{% if nb_new_messages > 0 %}gold {% endif %}\"> <img src=\"{{ asset('img/icons/envelope.png') }}\" alt=\"envelope\">Messagerie <span class=\"float-right font-weight-bold\">{{ nb_new_messages }}</span></div></a>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/helm.png') }}\" alt=\"lantern\">Navires <span class=\"float-right font-weight-bold\">{{ app.user.ships|length - 1 }}</span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/arsenal.png') }}\" alt=\"saber\">Equipage <span class=\"float-right font-weight-bold\">{{ crew|number_format(0, '.', ' ') }}</span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"cannon\">Puissance <span class=\"float-right font-weight-bold\">{{ power|number_format(0, '.', ' ') }}</span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"lantern\">Classement <span class=\"float-right font-weight-bold gold-dark\">{{ ranking|number_format(0, '.', ' ') }} / {{ nb_users|number_format(0, '.', ' ') }}</span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/skull.png') }}\" alt=\"skull\">Ratio Guerre <span class=\"float-right font-weight-bold\">{{ (app.user.victories - app.user.defeats)|number_format(0, '.', ' ') }} </span></div>
                <div class=\"cat\"> <img src=\"{{ asset('img/icons/den.png') }}\" alt=\"den\">Alliance <span class=\"float-right font-weight-bold\">{% if alliance %}<span class=\"font-weight-bold alliance-{{ alliance.color }}\">[{{ alliance.abbreviation }}]</span>{% else %}Aucune{% endif %}</span></div>
                <div class=\"cat-dark-bg text-center\"><a href=\"{{ path('app_settings') }}\">Modifier mon Profil</a> | <a href=\"{{ path('app_logged') }}\" target=\"_blank\">{{ logged|length }} Connectés</a></div>
            </div>
        </div>
    </div>

    <div class=\"col-8\">
        <div class=\"card\">
            <div class=\"card-header\">
                Repaire du Pirate
            </div>
            <div class=\"card-body p-0\">
                <div class=\"row\">
                    <div class=\"cat-head-bg text-center\">
                        Exploration
                    </div>

                    <div class=\"cat-head-bg text-center\">
                        Braconnage
                    </div>

                    <div class=\"cat-head-bg text-center\">
                        Espionnage
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"cat-body-bg text-center\">
                        {% if explorer_positions|length > 0 %}
                            <form method=\"post\" action=\"{{ path('app_explore') }}\">
                                <div class=\"form-group mx-auto pl-3\">
                                    <select name=\"land\" class=\"input-white\">
                                        {% for position in explorer_positions %}
                                            <option value=\"{{ position.id }}\">{{ position.id }} - {{ position.name }}</option>
                                        {% endfor %}
                                    </select>
                                    <input type=\"submit\" name=\"explore\" value=\"Explorer\" class=\"mt-2\">
                                </div>
                            </form>
                        {% else %}
                            <p>Aucun explorateur disponible.</p>
                        {% endif %}
                        <a href=\"{{ path('treasure_hunt') }}\"><span class=\"mini2\">Chasse aux Trésors</span></a>
                    </div>

                    <div class=\"cat-body-bg text-center\">
                        {% if explorer_positions|length > 0 %}
                        <form method=\"post\" action=\"{{ path('app_poach') }}\">
                            <div class=\"form-group mx-auto pl-3\">
                                <select name=\"land\" class=\"input-white\">
                                    {% for position in explorer_positions %}
                                        <option value=\"{{ position.id }}\">{{ position.id }} - {{ position.name }}</option>
                                    {% endfor %}
                                </select>
                                <input type=\"submit\" name=\"poach\" value=\"Chasser\" class=\"mt-2\">
                            </div>
                        </form>
                        {% else %}
                            <p>Aucun explorateur disponible.</p>
                        {% endif %}
                        {#<a href=\"#\"><span class=\"mini2\">Trophées de Chasse</span></a>#}
                    </div>

                    <div class=\"cat-body-bg text-center\">
                            <div class=\"form-group mx-auto\">
                                {{ form_start(spyForm, {'action': path('app_spy')}) }}

                                {{ form_widget(spyForm.username) }}
                                {{ form_widget(spyForm.spy) }}

                                {{ form_end(spyForm) }}
                            </div>
                        <p class=\"mini2\">Coût : 15 000 Pièces d'or</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"cat-season\">
                        <span id=\"heure\"></span>
                    </div>

                    <div class=\"cat-avatar\"><div class=\"cat-pseudo\"><a target=_blank href=\"{{ path('app_profile', {'id': app.user.id}) }}\" target=\"_blank\">{{ app.user.username }}</a></div><img src=\"{{ asset('img/avatars/' ~ app.user.avatar ~ '.jpg') }}\" alt=\"avatar\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class=\"row mt-5\">
        <div class=\"col-12 p-0\">
            <div class=\"card\">
                <div class=\"card-header m-0\">
                    Cartographie
                </div>
                <div class=\"card-body m-0 p-0\">
                    <div class=\"cartographie-selection d-flex justify-content-between\">
                        {% set movable = false %}
                        {% for ship in app.user.ships %}
                            {% if ship.seaman > 0 and ship is not instanceof('App\\\\Entity\\\\Den') %}
                                {% set movable = true %}
                            {% endif %}
                        {% endfor %}
                        {% if movable %}
                            <form method=\"post\" action=\"{{ path('app_travel') }}\">
                                <select class=\"input-white\" name=\"fleet_position\">
                                    {% for pos in movable_fleet %}
                                        <option value=\"{{ pos.id }}\">Flotte en {{ pos.id }}. {{ pos.name }}</option>
                                    {% endfor %}
                                    {% for ship in app.user.ships %}
                                        {% if ship is not instanceof('App\\\\Entity\\\\Den') %}
                                            <option value=\"ship{{ ship.id }}\">{{ ship.name }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>

                                <select name=\"target_position\" class=\"input-white\">
                                    <option value=\"1\">1 - Banquise</option>
                                    <option value=\"2\">2 - Montagnes Blanches</option>
                                    <option value=\"3\">3 - Terres du Nord</option>
                                    <option value=\"4\">4 - Terres Glacées</option>
                                    <option value=\"5\">5 - Forêt Mystique</option>
                                    <option value=\"6\">6 - Ile Volcanique</option>
                                    <option value=\"7\">7 - Marécages</option>
                                    <option value=\"8\">8 - Forêt de Jade</option>
                                    <option value=\"9\">9 - Golfe des Naufragés</option>
                                    <option value=\"10\">10 - Montagnes Grises</option>
                                    <option value=\"11\">11 - Plaines de Drimmor</option>
                                    <option value=\"12\">12 - Monts Lance-Pierre</option>
                                    <option value=\"13\">13 - Forêt Morte</option>
                                    <option value=\"14\">14 - Jungle</option>
                                    <option value=\"15\">15 - Ile aux Forbans</option>
                                    <option value=\"16\">16 - Baie des Tortues</option>
                                    <option value=\"17\">17 - Forêt Tropicale</option>
                                    <option value=\"18\">18 - Désert</option>
                                    <option value=\"19\">19 - Oasis</option>
                                    <option value=\"20\">20 - Terres du Sud</option>
                                    <option value=\"21\">21 - Ile Assaron</option>
                                </select>
                                <input type=\"submit\" name=\"travel\" value=\"Voyager\"> {#<img src=\"{{ asset('img/icons/pa_cost.png') }}\">#}
                            </form>
                        {% else %}
                            <b>Aucun de vos navires ne peut actuellement se déplacer.</b>
                        {% endif %}
                    </div>
                    <div class=\"row m-0\">
                        <div class=\"cartographie-background\" id=\"cartographie-background\">
                            <img src=\"{{ asset('img/icons/den.png') }}\" class=\"logo-big den-{{ den.position.id }}\" alt=\"den\">
                            {% for ship in app.user.ships %}
                                {% if ship is not instanceof('App\\\\Entity\\\\Den') %}
                                    <img src=\"{{ asset('img/icons/ship.png') }}\" class=\"logo-big ship-{{ ship.position.id }}\" alt=\"den\">
                                {% endif %}
                            {% endfor %}
                        </div>
                        <div class=\"cartographie-infos\">
                            <div class=\"cat-pseudo text-center p-1\" style=\"border-top: 1px solid #2E1007;\">
                                Navires
                            </div>

                            <div class=\"cartographie-navires\">
                                {% for key, arr_value in pos_order %}
                                    <b>{{ key }}</b><br>
                                    {% for value in arr_value %}
                                        {{ value }}<br>
                                    {% endfor %}
                                {% endfor %}
                            </div>

                            <div class=\"cat-pseudo text-center p-1\">
                                Légende
                            </div>

                            <div class=\"cartographie-legende\">
                                <img src=\"{{ asset('img/icons/ship.png') }}\" class=\"logo-big mb-2\" alt=\"navires\"> Navires<br>
                                <img src=\"{{ asset('img/icons/den.png') }}\" alt=\"repaire\" class=\"logo-big mb-2\"> Repaire<br>
                                <img src=\"{{ asset('img/icons/treasure.png') }}\" alt=\"navires\" class=\"logo-big\"> Indices
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include 'authenticated/script/hour.html.twig' %}
{% endblock %}", "authenticated/home.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\home.html.twig");
    }
}
