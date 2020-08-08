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

/* authenticated/war.html.twig */
class __TwigTemplate_c8bf5d8e8abf7d2d1d8abeb4a20388dcc3dbca0835e89908030e63af85c27049 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/war.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/war.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/war.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/war.css"), "html", null, true);
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card no-min-height\">
                <div class=\"card-header\">
                    Guerre
                </div>
                <div class=\"card-body card-back1\">
                    <div class=\"row\">
                        <div class=\"top-card-body col-12\" style=\"border-bottom: 0;\">
                            <b>Affrontement en mer</b>
                            <div class=\"float-right mr-4\">
                                <form method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_war");
        echo "\">
                                    <select class=\"input-white\" style=\"width: 150px !important;\" id=\"choice\" name=\"choice\">
                                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 31
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" ";
            if (( !(null === (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 31, $this->source); })())) && 0 === twig_compare((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 31)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                    </select>
                                    <input type=\"submit\" name=\"search\" value=\"Rechercher\">
                                </form>
                                <form method=\"post\" action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_war_action");
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row m-0\">
                        <table class=\"ilshenar-table\">
                            <tr style=\"height: 40px;\">
                                <th><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/pa.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"pa\"> Points d'Action <span class=\"ml-3 green-text\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "pa", [], "any", false, false, false, 43), "html", null, true);
        echo "</span></th>
                                <th><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"pa\"> <span class=\"blue-text\">Ordres à l'Equipage</span></th>
                                <th><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"pa\"> <span class=\"red-text\">Consignes aux Canonniers</span></th>
                            </tr>
                            <tr>
                                <td rowspan=\"3\" class=\"war-stats\">
                                    <p>
                                        <span class=\"gold-dark font-weight-bold\">Statistiques du Jour</span><br>
                                        Nombre de Batailles <span class=\"float-right font-weight-bold\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()), "today", [], "array", false, false, false, 51), "battles", [], "array", false, false, false, 51), "html", null, true);
        echo "</span><br>
                                        Navires Coulés <span class=\"float-right font-weight-bold\">";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "today", [], "array", false, false, false, 52), "sunk", [], "array", false, false, false, 52)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "today", [], "array", false, false, false, 52), "sunk", [], "array", false, false, false, 52), "html", null, true);
        } else {
            echo "0";
        }
        echo "</span><br>
                                        Navires Capturés <span class=\"float-right font-weight-bold\">";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "today", [], "array", false, false, false, 53), "captured", [], "array", false, false, false, 53)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "today", [], "array", false, false, false, 53), "captured", [], "array", false, false, false, 53), "html", null, true);
        } else {
            echo "0";
        }
        echo "</span>
                                    </p>
                                    <p>
                                        <span class=\"gold-dark font-weight-bold\">Statistiques de la Veille</span><br>
                                        Nombre de Batailles <span class=\"float-right font-weight-bold\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "yesterday", [], "array", false, false, false, 57), "battles", [], "array", false, false, false, 57), "html", null, true);
        echo "</span><br>
                                        Navires Coulés <span class=\"float-right font-weight-bold\">";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "yesterday", [], "array", false, false, false, 58), "sunk", [], "array", false, false, false, 58)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "yesterday", [], "array", false, false, false, 58), "sunk", [], "array", false, false, false, 58), "html", null, true);
        } else {
            echo "0";
        }
        echo "</span><br>
                                        Navires Capturés <span class=\"float-right font-weight-bold\">";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "yesterday", [], "array", false, false, false, 59), "captured", [], "array", false, false, false, 59)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "yesterday", [], "array", false, false, false, 59), "captured", [], "array", false, false, false, 59), "html", null, true);
        } else {
            echo "0";
        }
        echo "</span>
                                    </p>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"normal\" style=\"width: 25px;\" checked>A l'Abordage !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Attaque normale</span>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"destruction\" style=\"width: 25px;\" checked>Tir Plein Bois
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Destruction du Navire</span>
                                </td>
                            </tr>

                            <tr>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"abordage\" style=\"width: 25px;\">Pas de Quartier !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Priorité à l'abordage</span>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"immobilization\" style=\"width: 25px;\">Tir à Démâter
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Immobilisation du Navire</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"guns\" style=\"width: 25px;\">Feu à Volonté !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Priorité aux Canons</span>
                                </td>
                                <td>
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"massacre\" style=\"width: 25px;\">Tir à Mitraille
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Massacre de l'Equipage</span>
                                </td>
                            </tr>
                        </table>
                        <div class=\"war-avatar-block\">
                            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/search_war.jpg"), "html", null, true);
        echo "\" alt=\"war\" class=\"war-avatar\">
                            <div class=\"text-center font-weight-bold pt-3 alex\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Célèbre Pirate du début du 18ème siècle\" style=\"cursor: crosshair;\">Alex' Dalzeel</span></div>
                        </div>
                    </div>

                    <div class=\"top-card-body target-choice col-12\">
                        <b>Choix des Cibles [";
        // line 124
        echo twig_escape_filter($this->env, (3 + twig_length_filter($this->env, (isset($context["oponents"]) || array_key_exists("oponents", $context) ? $context["oponents"] : (function () { throw new RuntimeError('Variable "oponents" does not exist.', 124, $this->source); })()))), "html", null, true);
        echo "]</b>
                    </div>

                    <div class=\"war-bg-1 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"green-text font-weight-bold\">Pêcheurs</span></td>
                                <td><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"den\"> Village de Pêcheurs</td>
                                <td><span class=\"green-text\">";
        // line 132
        $context["sinner"] = (twig_random($this->env, 2) + 1);
        echo twig_escape_filter($this->env, (isset($context["sinner"]) || array_key_exists("sinner", $context) ? $context["sinner"] : (function () { throw new RuntimeError('Variable "sinner" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "</span> Navires de Pêche à quai</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"sinner\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["sinner"]) || array_key_exists("sinner", $context) ? $context["sinner"] : (function () { throw new RuntimeError('Variable "sinner" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"sinner\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"war-bg-2 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"gold-dark font-weight-bold\">Marchands</span></td>
                                <td><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/ship.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"ship\"> Flotte Marchande</td>
                                <td><span class=\"green-text\">";
        // line 147
        $context["trader"] = (twig_random($this->env, 2) + 1);
        echo twig_escape_filter($this->env, (isset($context["trader"]) || array_key_exists("trader", $context) ? $context["trader"] : (function () { throw new RuntimeError('Variable "trader" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "</span> Navires Marchands au large</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"trader\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["trader"]) || array_key_exists("trader", $context) ? $context["trader"] : (function () { throw new RuntimeError('Variable "trader" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"trader\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"war-bg-1 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"red-text font-weight-bold\">Marine Royale</span></td>
                                <td><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/ship.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"ship\"> Flotte de Guerre</td>
                                <td><span class=\"green-text\">";
        // line 162
        $context["warrior"] = (twig_random($this->env, 2) + 1);
        echo twig_escape_filter($this->env, (isset($context["warrior"]) || array_key_exists("warrior", $context) ? $context["warrior"] : (function () { throw new RuntimeError('Variable "warrior" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "</span> Navires de Guerre au large</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"warrior\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["warrior"]) || array_key_exists("warrior", $context) ? $context["warrior"] : (function () { throw new RuntimeError('Variable "warrior" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"warrior\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>

                    ";
        // line 173
        $context["i"] = 2;
        // line 174
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oponents"]) || array_key_exists("oponents", $context) ? $context["oponents"] : (function () { throw new RuntimeError('Variable "oponents" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["oponent"]) {
            // line 175
            echo "                        <div class=\"war-bg-";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 175, $this->source); })()), "html", null, true);
            echo " p-1\">
                            <table class=\"no-style-table\">
                                <tr>
                                    <td>";
            // line 178
            if (twig_get_attribute($this->env, $this->source, $context["oponent"], "alliance", [], "array", false, false, false, 178)) {
                echo "<span class=\"font-weight-bold alliance-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oponent"], "alliance", [], "array", false, false, false, 178), "color", [], "any", false, false, false, 178), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oponent"], "alliance", [], "array", false, false, false, 178), "abbreviation", [], "any", false, false, false, 178), "html", null, true);
                echo "]</span>";
            }
            echo " <span class=\"pirate-text font-weight-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oponent"], "username", [], "array", false, false, false, 178), "html", null, true);
            echo "</span></td>
                                    <td>
                                        ";
            // line 180
            if (twig_get_attribute($this->env, $this->source, $context["oponent"], "den", [], "array", false, false, false, 180)) {
                // line 181
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
                echo "\" class=\"logo-middle\" alt=\"den\"> Repaire Pirate
                                        ";
            } else {
                // line 183
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/ship.png"), "html", null, true);
                echo "\" class=\"logo-middle\" alt=\"ship\"> Flotte Pirate
                                        ";
            }
            // line 185
            echo "                                    </td>
                                    <td>
                                        ";
            // line 187
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["oponent"], "den", [], "array", false, false, false, 187), true)) {
                // line 188
                echo "                                            ";
                if (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["oponent"], "number", [], "array", false, false, false, 188), 1)) {
                    // line 189
                    echo "                                                <span class=\"green-text\">";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["oponent"], "number", [], "array", false, false, false, 189) - 1), "html", null, true);
                    echo "</span> Navires amarrés à quai
                                            ";
                } else {
                    // line 191
                    echo "                                                Aucun navire amarré à quai
                                            ";
                }
                // line 193
                echo "                                        ";
            } else {
                // line 194
                echo "                                            <span class=\"green-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oponent"], "number", [], "array", false, false, false, 194), "html", null, true);
                echo "</span> Navires au large
                                        ";
            }
            // line 196
            echo "                                    </td>
                                    <td class=\"float-right\">
                                        <label class=\"radio-inline control-label\" for=\"abordage\">
                                            <img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
            echo "\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oponent"], "id", [], "array", false, false, false, 199), "html", null, true);
            echo "\" style=\"width: 22px; margin-top: 13px;\">
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        ";
            // line 206
            if (0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 206, $this->source); })()), 1)) {
                // line 207
                echo "                            ";
                $context["i"] = 2;
                // line 208
                echo "                        ";
            } else {
                // line 209
                echo "                            ";
                $context["i"] = 1;
                // line 210
                echo "                        ";
            }
            // line 211
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oponent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
                <div class=\"war-bg-";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 213, $this->source); })()), "html", null, true);
        echo " p-2\">
                    <input type=\"hidden\" name=\"position\" value=\"";
        // line 214
        if ( !(null === (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 214, $this->source); })()))) {
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 214, $this->source); })()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 214, $this->source); })()), 0, [], "array", false, false, false, 214), "id", [], "any", false, false, false, 214), "html", null, true);
        }
        echo "\">
                    Sélectionnez la cible de votre choix et attaquez. <span class=\"float-right\"><input type=\"submit\" name=\"attack\" value=\"Attaquer\" style=\"margin-top: -5px;\"></span>
                </div>
                </form>
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
        return "authenticated/war.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 214,  516 => 213,  513 => 212,  507 => 211,  504 => 210,  501 => 209,  498 => 208,  495 => 207,  493 => 206,  481 => 199,  476 => 196,  470 => 194,  467 => 193,  463 => 191,  457 => 189,  454 => 188,  452 => 187,  448 => 185,  442 => 183,  436 => 181,  434 => 180,  421 => 178,  414 => 175,  409 => 174,  407 => 173,  397 => 166,  392 => 164,  386 => 162,  382 => 161,  369 => 151,  364 => 149,  358 => 147,  354 => 146,  341 => 136,  336 => 134,  330 => 132,  326 => 131,  316 => 124,  307 => 118,  241 => 59,  233 => 58,  229 => 57,  218 => 53,  210 => 52,  206 => 51,  197 => 45,  193 => 44,  187 => 43,  177 => 36,  172 => 33,  155 => 31,  151 => 30,  146 => 28,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/war.css') }}\">
{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card no-min-height\">
                <div class=\"card-header\">
                    Guerre
                </div>
                <div class=\"card-body card-back1\">
                    <div class=\"row\">
                        <div class=\"top-card-body col-12\" style=\"border-bottom: 0;\">
                            <b>Affrontement en mer</b>
                            <div class=\"float-right mr-4\">
                                <form method=\"post\" action=\"{{ path('app_war') }}\">
                                    <select class=\"input-white\" style=\"width: 150px !important;\" id=\"choice\" name=\"choice\">
                                        {% for land in lands %}
                                            <option value=\"{{ land.id }}\" {% if selected is not null and selected == land.id %}selected{% endif %}>{{ land.id }} - {{ land.name }}</option>
                                        {% endfor %}
                                    </select>
                                    <input type=\"submit\" name=\"search\" value=\"Rechercher\">
                                </form>
                                <form method=\"post\" action=\"{{ path('app_war_action') }}\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row m-0\">
                        <table class=\"ilshenar-table\">
                            <tr style=\"height: 40px;\">
                                <th><img src=\"{{ asset('img/icons/pa.png') }}\" class=\"logo-middle\" alt=\"pa\"> Points d'Action <span class=\"ml-3 green-text\">{{ app.user.pa }}</span></th>
                                <th><img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-middle\" alt=\"pa\"> <span class=\"blue-text\">Ordres à l'Equipage</span></th>
                                <th><img src=\"{{ asset('img/icons/gun.png') }}\" class=\"logo-middle\" alt=\"pa\"> <span class=\"red-text\">Consignes aux Canonniers</span></th>
                            </tr>
                            <tr>
                                <td rowspan=\"3\" class=\"war-stats\">
                                    <p>
                                        <span class=\"gold-dark font-weight-bold\">Statistiques du Jour</span><br>
                                        Nombre de Batailles <span class=\"float-right font-weight-bold\">{{ stats['today']['battles'] }}</span><br>
                                        Navires Coulés <span class=\"float-right font-weight-bold\">{% if stats['today']['sunk'] %}{{ stats['today']['sunk'] }}{% else %}0{% endif %}</span><br>
                                        Navires Capturés <span class=\"float-right font-weight-bold\">{% if stats['today']['captured'] %}{{ stats['today']['captured'] }}{% else %}0{% endif %}</span>
                                    </p>
                                    <p>
                                        <span class=\"gold-dark font-weight-bold\">Statistiques de la Veille</span><br>
                                        Nombre de Batailles <span class=\"float-right font-weight-bold\">{{ stats['yesterday']['battles'] }}</span><br>
                                        Navires Coulés <span class=\"float-right font-weight-bold\">{% if stats['yesterday']['sunk'] %}{{ stats['yesterday']['sunk'] }}{% else %}0{% endif %}</span><br>
                                        Navires Capturés <span class=\"float-right font-weight-bold\">{% if stats['yesterday']['captured'] %}{{ stats['yesterday']['captured'] }}{% else %}0{% endif %}</span>
                                    </p>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"normal\" style=\"width: 25px;\" checked>A l'Abordage !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Attaque normale</span>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"destruction\" style=\"width: 25px;\" checked>Tir Plein Bois
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Destruction du Navire</span>
                                </td>
                            </tr>

                            <tr>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"abordage\" style=\"width: 25px;\">Pas de Quartier !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Priorité à l'abordage</span>
                                </td>
                                <td class=\"bb2\">
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"immobilization\" style=\"width: 25px;\">Tir à Démâter
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Immobilisation du Navire</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"orders\" value=\"guns\" style=\"width: 25px;\">Feu à Volonté !
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Priorité aux Canons</span>
                                </td>
                                <td>
                                    <span class=\"font-weight-bold\">
                                      <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <input type=\"radio\" name=\"instructions\" value=\"massacre\" style=\"width: 25px;\">Tir à Mitraille
                                      </label>
                                    </span><br>
                                    <span class=\"ml-4\">Massacre de l'Equipage</span>
                                </td>
                            </tr>
                        </table>
                        <div class=\"war-avatar-block\">
                            <img src=\"{{ asset('img/avatars/search_war.jpg') }}\" alt=\"war\" class=\"war-avatar\">
                            <div class=\"text-center font-weight-bold pt-3 alex\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Célèbre Pirate du début du 18ème siècle\" style=\"cursor: crosshair;\">Alex' Dalzeel</span></div>
                        </div>
                    </div>

                    <div class=\"top-card-body target-choice col-12\">
                        <b>Choix des Cibles [{{ 3 + oponents|length }}]</b>
                    </div>

                    <div class=\"war-bg-1 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"green-text font-weight-bold\">Pêcheurs</span></td>
                                <td><img src=\"{{ asset('img/icons/den.png') }}\" class=\"logo-middle\" alt=\"den\"> Village de Pêcheurs</td>
                                <td><span class=\"green-text\">{% set sinner = random(2) + 1 %}{{ sinner }}</span> Navires de Pêche à quai</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"sinner\" value=\"{{ sinner }}\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"{{ asset('img/icons/lantern.png') }}\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"sinner\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"war-bg-2 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"gold-dark font-weight-bold\">Marchands</span></td>
                                <td><img src=\"{{ asset('img/icons/ship.png') }}\" class=\"logo-middle\" alt=\"ship\"> Flotte Marchande</td>
                                <td><span class=\"green-text\">{% set trader = random(2) + 1 %}{{ trader }}</span> Navires Marchands au large</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"trader\" value=\"{{ trader }}\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"{{ asset('img/icons/lantern.png') }}\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"trader\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"war-bg-1 p-1\">
                        <table class=\"no-style-table\">
                            <tr>
                                <td><span class=\"red-text font-weight-bold\">Marine Royale</span></td>
                                <td><img src=\"{{ asset('img/icons/ship.png') }}\" class=\"logo-middle\" alt=\"ship\"> Flotte de Guerre</td>
                                <td><span class=\"green-text\">{% set warrior = random(2) + 1 %}{{ warrior }}</span> Navires de Guerre au large</td>
                                <td class=\"float-right\">
                                    <input type=\"hidden\" name=\"warrior\" value=\"{{ warrior }}\">
                                    <label class=\"radio-inline control-label\" for=\"abordage\">
                                        <img src=\"{{ asset('img/icons/lantern.png') }}\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"warrior\" style=\"width: 22px; margin-top: 13px;\">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>

                    {% set i = 2 %}
                    {% for oponent in oponents %}
                        <div class=\"war-bg-{{ i }} p-1\">
                            <table class=\"no-style-table\">
                                <tr>
                                    <td>{% if oponent['alliance'] %}<span class=\"font-weight-bold alliance-{{ oponent['alliance'].color }}\">[{{ oponent['alliance'].abbreviation }}]</span>{% endif %} <span class=\"pirate-text font-weight-bold\">{{ oponent['username'] }}</span></td>
                                    <td>
                                        {% if oponent['den'] %}
                                            <img src=\"{{ asset('img/icons/den.png') }}\" class=\"logo-middle\" alt=\"den\"> Repaire Pirate
                                        {% else %}
                                            <img src=\"{{ asset('img/icons/ship.png') }}\" class=\"logo-middle\" alt=\"ship\"> Flotte Pirate
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if oponent['den'] == true %}
                                            {% if oponent['number'] > 1 %}
                                                <span class=\"green-text\">{{ oponent['number'] - 1 }}</span> Navires amarrés à quai
                                            {% else %}
                                                Aucun navire amarré à quai
                                            {% endif %}
                                        {% else %}
                                            <span class=\"green-text\">{{ oponent['number'] }}</span> Navires au large
                                        {% endif %}
                                    </td>
                                    <td class=\"float-right\">
                                        <label class=\"radio-inline control-label\" for=\"abordage\">
                                            <img src=\"{{ asset('img/icons/lantern.png') }}\" class=\"logo-middle\" alt=\"lantern\" style=\"margin-top: -10px;\"> <input type=\"radio\" name=\"target\" value=\"{{ oponent['id'] }}\" style=\"width: 22px; margin-top: 13px;\">
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        {% if i == 1 %}
                            {% set i = 2 %}
                        {% else %}
                            {% set i = 1 %}
                        {% endif %}
                    {% endfor %}

                <div class=\"war-bg-{{ i }} p-2\">
                    <input type=\"hidden\" name=\"position\" value=\"{% if selected is not null %}{{ selected }}{% else %}{{ lands[0].id }}{% endif %}\">
                    Sélectionnez la cible de votre choix et attaquez. <span class=\"float-right\"><input type=\"submit\" name=\"attack\" value=\"Attaquer\" style=\"margin-top: -5px;\"></span>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

{% endblock %}
", "authenticated/war.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\war.html.twig");
    }
}
