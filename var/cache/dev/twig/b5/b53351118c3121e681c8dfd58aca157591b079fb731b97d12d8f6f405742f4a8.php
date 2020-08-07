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

/* authenticated/ships.html.twig */
class __TwigTemplate_da901e411738276a5a454a77a37ec31ad48bbc92ee002de9eca83d7833e7d26f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/ships.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/ships.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/ships.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ships.css"), "html", null, true);
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
    <div class=\"modal fade\" id=\"transfer\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Transfert d'équipage et / ou de marchandises</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ships_transfer");
        echo "\">
                        <div class=\"head-form\">
                            <div class=\"d-flex\">
                                <div class=\"w-50\">
                                    <p class=\"p-2 font-weight-bold m-0\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"ship\"> NAVIRE SOURCE</p>
                                    <select name=\"source\" class=\"input-white m-2\">
                                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "ships", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 34
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                    </select>
                                </div>
                                <div class=\"w-50\">
                                    <p class=\"p-2 font-weight-bold m-0\">NAVIRE CIBLE <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"ship\"></p>
                                    <select name=\"target\" class=\"input-white m-2 text-right\">
                                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "ships", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 42
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>

                        <table class=\"w-100 mt-3 mb-3\">
                            <tr>
                                <td><span class=\"blue-text\">Matelots</span> <input type=\"number\" min=\"0\" name=\"seaman\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Explorateurs</span> <input type=\"number\" min=\"0\" name=\"explorer\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Canonniers</span> <input type=\"number\" min=\"0\" name=\"gunner\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"blue-text\">Cuisiniers</span> <input type=\"number\" min=\"0\" name=\"cook\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Charpentiers</span> <input type=\"number\" min=\"0\" name=\"carpenter\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Chirurgiens</span> <input type=\"number\" min=\"0\" name=\"surgeon\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"red-text\">Canons</span> <input type=\"number\" min=\"0\" name=\"gun\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"green-text\">Nourriture</span> <input type=\"number\" min=\"0\" name=\"food\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"brown-text\">Bois</span> <input type=\"number\" min=\"0\" name=\"wood\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"red-text\">Armement</span> <input type=\"number\" min=\"0\" name=\"arsenal\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"green-text\">Alcool</span> <input type=\"number\" min=\"0\" name=\"alcohol\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"brown-text\">Cuivre</span> <input type=\"number\" min=\"0\" name=\"copper\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"gold-dark\">Gemmes</span> <input type=\"number\" min=\"0\" name=\"gemstone\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Etoffes</span> <input type=\"number\" min=\"0\" name=\"stuff\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Manuscrits</span> <input type=\"number\" min=\"0\" name=\"manuscript\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"gold-dark\">Bijoux</span> <input type=\"number\" min=\"0\" name=\"jewellery\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Fourrures</span> <input type=\"number\" min=\"0\" name=\"fur\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Epices</span> <input type=\"number\" min=\"0\" name=\"spice\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                        </table>

                        <input type=\"submit\" name=\"transfer\" value=\"Transférer\">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form method=\"post\" action=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ships_action");
        echo "\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card no-min-height\">
                    <div class=\"card-header\">
                        Gestion des Navires
                    </div>
                    <div class=\"card-body card-back1\">
                        <div class=\"row\">
                            <div class=\"top-card-body col-12\">
                                <select class=\"input-white\" name=\"choice\">
                                    <option value=\"repair\">Réparer le Navire et / ou le Repaire</option>
                                    <option value=\"moral\">Remonter le moral de l'équipage</option>
                                    <option value=\"upgrade\">Améliorer le Navire / le Repaire</option>
                                </select> <input type=\"submit\" name=\"action\" value=\"Valider\" class=\"mini-input\">
                                <div class=\"mt-1 ml-3 mini2\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"gold\"> <b>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "gold", [], "any", false, false, false, 105), 0, ".", " "), "html", null, true);
        echo "</b> Pièces d'Or
                                    <a href=\"#\" class=\"float-right mr-3\" data-toggle=\"modal\" data-target=\"#transfer\"><span class=\"mini2\">Transfert de Marchandises et/ou d'Equipage</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 117
            echo "            <div class=\"row mt-3\">
                <div class=\"col-12\">
                    <div class=\"top-card-body-2\">
                        <input type=\"checkbox\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\" name=\"ship[]\"> <label><span><span></span></span></label>
                        ";
            // line 121
            if ($this->extensions['App\Twig\AppExtension']->isInstanceOf($context["ship"], "App\\Entity\\Den")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/den.png"), "html", null, true);
                echo "\" class=\"logo-hudge\" alt=\"ship\">";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
                echo "\" class=\"logo-hudge\" alt=\"ship\">";
            }
            echo " <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 121), "html", null, true);
            echo "</strong> [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "position", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ship"], "position", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
            echo "]
                        <span class=\"ship-level\">Niveau ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 122), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ship_order_move_up", ["id" => twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/up.png"), "html", null, true);
            echo "\" class=\"icon-mini\" alt=\"up\"></a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ship_order_move_down", ["id" => twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/down.png"), "html", null, true);
            echo "\" class=\"icon-mini\" alt=\"down\"></a>
                        <a href=\"#\" style=\"position: absolute; right: 0;\" data-toggle=\"modal\" data-target=\"#rename";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/rename.png"), "html", null, true);
            echo "\" class=\"logo-hudge ml-3 mr-1\" alt=\"rename\" title=\"Renommer\"></a>
                    </div>
                    <div class=\"row no-margin\">
                        <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/ships/" . twig_get_attribute($this->env, $this->source, $context["ship"], "avatar", [], "any", false, false, false, 126)) . ".jpg")), "html", null, true);
            echo "\" alt=\"avatar\" class=\"ship-img\">
                        <div class=\"ship-crew\">
                            <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
            echo "\" class=\"logo-hudge\" alt=\"arsenal\"> <strong>Equipage</strong> <span class=\"float-right\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getCrew", [], "any", false, false, false, 128), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxCrew", [], "any", false, false, false, 128), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Matelots</strong></span> <span class=\"float-right\">";
            // line 129
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "seaman", [], "any", false, false, false, 129), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxSeaman", [], "any", false, false, false, 129), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Explorateurs</strong></span> <span class=\"float-right\">";
            // line 130
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "explorer", [], "any", false, false, false, 130), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxExplorer", [], "any", false, false, false, 130), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Canonniers</strong></span> <span class=\"float-right\">";
            // line 131
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "gunner", [], "any", false, false, false, 131), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxGunner", [], "any", false, false, false, 131), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Cuisiniers</strong></span> <span class=\"float-right\">";
            // line 132
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "cook", [], "any", false, false, false, 132), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxCook", [], "any", false, false, false, 132), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Charpentiers</strong></span> <span class=\"float-right\">";
            // line 133
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "carpenter", [], "any", false, false, false, 133), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxCarpenter", [], "any", false, false, false, 133), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <span class=\"blue-text\"><strong>Chirurgiens</strong></span> <span class=\"float-right\">";
            // line 134
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "surgeon", [], "any", false, false, false, 134), 0, ".", " "), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxSurgeon", [], "any", false, false, false, 134), 0, ".", " "), "html", null, true);
            echo "</span><br>
                        </div>
                        <div class=\"ship-merchandise\">
                            <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/merchandise.png"), "html", null, true);
            echo "\" class=\"logo-big\" alt=\"saber\"> <strong>Marchandise</strong>
                            <span class=\"float-right\">";
            // line 138
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMerchandisesSum", [], "any", false, false, false, 138), 0, ".", " "), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxMerchandises", [], "any", false, false, false, 138), 0, ".", " "), "html", null, true);
            echo "</span><br>
                            <div class=\"row pl-4 pr-4\">
                                <div class=\"left-merchandise\">
                                    <span class=\"red-text\"><strong>Canons</strong></span> <span class=\"float-right\">";
            // line 141
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "gun", [], "any", false, false, false, 141), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"green-text\"><strong>Nourriture</strong></span> <span class=\"float-right\">";
            // line 142
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "food", [], "any", false, false, false, 142), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"brown-text\"><strong>Bois</strong></span> <span class=\"float-right\">";
            // line 143
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "wood", [], "any", false, false, false, 143), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Gemmes</strong></span> <span class=\"float-right\">";
            // line 144
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "gemstone", [], "any", false, false, false, 144), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Etoffes</strong></span> <span class=\"float-right\">";
            // line 145
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "stuff", [], "any", false, false, false, 145), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Manuscrits</strong></span> <span class=\"float-right\">";
            // line 146
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "manuscript", [], "any", false, false, false, 146), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                </div>
                                <div class=\"right-merchandise\">
                                    <span class=\"red-text\"><strong>Armement</strong></span> <span class=\"float-right\">";
            // line 149
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "arsenal", [], "any", false, false, false, 149), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"green-text\"><strong>Alcool</strong></span> <span class=\"float-right\">";
            // line 150
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "alcohol", [], "any", false, false, false, 150), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"brown-text\"><strong>Cuir</strong></span> <span class=\"float-right\">";
            // line 151
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "copper", [], "any", false, false, false, 151), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Bijoux</strong></span> <span class=\"float-right\">";
            // line 152
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "jewellery", [], "any", false, false, false, 152), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Fourrures</strong></span> <span class=\"float-right\">";
            // line 153
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "fur", [], "any", false, false, false, 153), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                    <span class=\"gold-dark\"><strong>Epices</strong></span> <span class=\"float-right\">";
            // line 154
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "spice", [], "any", false, false, false, 154), 0, ".", " "), "html", null, true);
            echo "</span><br>
                                </div>
                            </div>
                        </div>

                        <div class=\"personal-vertical-bar\" title=\"Structure : ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "structure", [], "any", false, false, false, 159), "html", null, true);
            echo "/100\"><div class=\"structure-vertical\" style=\"height: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "structure", [], "any", false, false, false, 159), "html", null, true);
            echo "%;\"></div></div>
                        <div class=\"personal-vertical-bar\" title=\"Moral : ";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "moral", [], "any", false, false, false, 160), "html", null, true);
            echo "/100\"><div class=\"morale-vertical\" style=\"height: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "moral", [], "any", false, false, false, 160), "html", null, true);
            echo "%;\"></div></div>
                        <div class=\"personal-vertical-bar\" title=\"Expérience : ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getXpDisp", [], "any", false, false, false, 161), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxXpDisp", [], "any", false, false, false, 161), "html", null, true);
            echo "\"><div class=\"xp-vertical\" style=\"height: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ship"], "getXpDisp", [], "any", false, false, false, 161) / twig_get_attribute($this->env, $this->source, $context["ship"], "getMaxXpDisp", [], "any", false, false, false, 161)) * 100), "html", null, true);
            echo "%;\"></div></div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "    </form>
    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 168
            echo "        <!-- Rename Modal -->
        <div class=\"modal fade\" id=\"rename";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <form method=\"post\" action=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ship_rename", ["id" => twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Renommer ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 174), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\">
                            <input type=\"text\" name=\"name\" class=\"input-white\" placeholder=\"Nouveau nom de navire\" required=\"required\"><br><br>
                            <input type=\"submit\" name=\"rename\" value=\"Renommer\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/ships.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 180,  495 => 174,  490 => 172,  484 => 169,  481 => 168,  477 => 167,  474 => 166,  459 => 161,  453 => 160,  447 => 159,  439 => 154,  435 => 153,  431 => 152,  427 => 151,  423 => 150,  419 => 149,  413 => 146,  409 => 145,  405 => 144,  401 => 143,  397 => 142,  393 => 141,  385 => 138,  381 => 137,  373 => 134,  367 => 133,  361 => 132,  355 => 131,  349 => 130,  343 => 129,  335 => 128,  330 => 126,  322 => 123,  310 => 122,  292 => 121,  288 => 120,  283 => 117,  279 => 116,  263 => 105,  245 => 90,  197 => 44,  186 => 42,  182 => 41,  177 => 39,  172 => 36,  161 => 34,  157 => 33,  152 => 31,  145 => 27,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/ships.css') }}\">
{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"modal fade\" id=\"transfer\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Transfert d'équipage et / ou de marchandises</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"post\" action=\"{{ path('app_ships_transfer') }}\">
                        <div class=\"head-form\">
                            <div class=\"d-flex\">
                                <div class=\"w-50\">
                                    <p class=\"p-2 font-weight-bold m-0\"><img src=\"{{ asset('img/icons/helm.png') }}\" class=\"logo-big\" alt=\"ship\"> NAVIRE SOURCE</p>
                                    <select name=\"source\" class=\"input-white m-2\">
                                        {% for ship in user.ships %}
                                            <option value=\"{{ ship.id }}\">{{ ship.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"w-50\">
                                    <p class=\"p-2 font-weight-bold m-0\">NAVIRE CIBLE <img src=\"{{ asset('img/icons/helm.png') }}\" class=\"logo-big\" alt=\"ship\"></p>
                                    <select name=\"target\" class=\"input-white m-2 text-right\">
                                        {% for ship in user.ships %}
                                            <option value=\"{{ ship.id }}\">{{ ship.name }}</option>
                                        {% endfor %}

                                    </select>
                                </div>
                            </div>
                        </div>

                        <table class=\"w-100 mt-3 mb-3\">
                            <tr>
                                <td><span class=\"blue-text\">Matelots</span> <input type=\"number\" min=\"0\" name=\"seaman\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Explorateurs</span> <input type=\"number\" min=\"0\" name=\"explorer\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Canonniers</span> <input type=\"number\" min=\"0\" name=\"gunner\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"blue-text\">Cuisiniers</span> <input type=\"number\" min=\"0\" name=\"cook\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Charpentiers</span> <input type=\"number\" min=\"0\" name=\"carpenter\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"blue-text\">Chirurgiens</span> <input type=\"number\" min=\"0\" name=\"surgeon\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"red-text\">Canons</span> <input type=\"number\" min=\"0\" name=\"gun\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"green-text\">Nourriture</span> <input type=\"number\" min=\"0\" name=\"food\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"brown-text\">Bois</span> <input type=\"number\" min=\"0\" name=\"wood\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"red-text\">Armement</span> <input type=\"number\" min=\"0\" name=\"arsenal\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"green-text\">Alcool</span> <input type=\"number\" min=\"0\" name=\"alcohol\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"brown-text\">Cuivre</span> <input type=\"number\" min=\"0\" name=\"copper\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"gold-dark\">Gemmes</span> <input type=\"number\" min=\"0\" name=\"gemstone\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Etoffes</span> <input type=\"number\" min=\"0\" name=\"stuff\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Manuscrits</span> <input type=\"number\" min=\"0\" name=\"manuscript\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                            <tr>
                                <td><span class=\"gold-dark\">Bijoux</span> <input type=\"number\" min=\"0\" name=\"jewellery\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Fourrures</span> <input type=\"number\" min=\"0\" name=\"fur\" value=\"0\" class=\"input-white\"></td>
                                <td><span class=\"gold-dark\">Epices</span> <input type=\"number\" min=\"0\" name=\"spice\" value=\"0\" class=\"input-white\"></td>
                            </tr>
                        </table>

                        <input type=\"submit\" name=\"transfer\" value=\"Transférer\">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form method=\"post\" action=\"{{ path('app_ships_action') }}\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card no-min-height\">
                    <div class=\"card-header\">
                        Gestion des Navires
                    </div>
                    <div class=\"card-body card-back1\">
                        <div class=\"row\">
                            <div class=\"top-card-body col-12\">
                                <select class=\"input-white\" name=\"choice\">
                                    <option value=\"repair\">Réparer le Navire et / ou le Repaire</option>
                                    <option value=\"moral\">Remonter le moral de l'équipage</option>
                                    <option value=\"upgrade\">Améliorer le Navire / le Repaire</option>
                                </select> <input type=\"submit\" name=\"action\" value=\"Valider\" class=\"mini-input\">
                                <div class=\"mt-1 ml-3 mini2\"><img src=\"{{ asset('img/icons/coin.png') }}\" class=\"logo\" alt=\"gold\"> <b>{{ user.gold|number_format(0, '.', ' ') }}</b> Pièces d'Or
                                    <a href=\"#\" class=\"float-right mr-3\" data-toggle=\"modal\" data-target=\"#transfer\"><span class=\"mini2\">Transfert de Marchandises et/ou d'Equipage</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {% for ship in ships %}
            <div class=\"row mt-3\">
                <div class=\"col-12\">
                    <div class=\"top-card-body-2\">
                        <input type=\"checkbox\" value=\"{{ ship.id }}\" name=\"ship[]\"> <label><span><span></span></span></label>
                        {% if ship is instanceof('App\\\\Entity\\\\Den') %}<img src=\"{{ asset('img/icons/den.png') }}\" class=\"logo-hudge\" alt=\"ship\">{% else %}<img src=\"{{ asset('img/icons/helm.png') }}\" class=\"logo-hudge\" alt=\"ship\">{% endif %} <strong>{{ ship.name }}</strong> [{{ ship.position.id }} - {{ ship.position.name }}]
                        <span class=\"ship-level\">Niveau {{ ship.level }}</span> <a href=\"{{ path('app_ship_order_move_up', { id: ship.id }) }}\"><img src=\"{{ asset('img/icons/up.png') }}\" class=\"icon-mini\" alt=\"up\"></a><a href=\"{{ path('app_ship_order_move_down', { id: ship.id }) }}\"><img src=\"{{ asset('img/icons/down.png') }}\" class=\"icon-mini\" alt=\"down\"></a>
                        <a href=\"#\" style=\"position: absolute; right: 0;\" data-toggle=\"modal\" data-target=\"#rename{{ ship.id }}\"><img src=\"{{ asset('img/icons/rename.png') }}\" class=\"logo-hudge ml-3 mr-1\" alt=\"rename\" title=\"Renommer\"></a>
                    </div>
                    <div class=\"row no-margin\">
                        <img src=\"{{ asset('img/ships/' ~ ship.avatar ~ '.jpg' ) }}\" alt=\"avatar\" class=\"ship-img\">
                        <div class=\"ship-crew\">
                            <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-hudge\" alt=\"arsenal\"> <strong>Equipage</strong> <span class=\"float-right\">{{ ship.getCrew|number_format(0, '.', ' ') }}/{{ ship.getMaxCrew|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Matelots</strong></span> <span class=\"float-right\">{{ ship.seaman|number_format(0, '.', ' ') }}/{{ ship.getMaxSeaman|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Explorateurs</strong></span> <span class=\"float-right\">{{ ship.explorer|number_format(0, '.', ' ') }}/{{ ship.getMaxExplorer|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Canonniers</strong></span> <span class=\"float-right\">{{ ship.gunner|number_format(0, '.', ' ') }}/{{ ship.getMaxGunner|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Cuisiniers</strong></span> <span class=\"float-right\">{{ ship.cook|number_format(0, '.', ' ') }}/{{ ship.getMaxCook|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Charpentiers</strong></span> <span class=\"float-right\">{{ ship.carpenter|number_format(0, '.', ' ') }}/{{ ship.getMaxCarpenter|number_format(0, '.', ' ') }}</span><br>
                            <span class=\"blue-text\"><strong>Chirurgiens</strong></span> <span class=\"float-right\">{{ ship.surgeon|number_format(0, '.', ' ') }}/{{ ship.getMaxSurgeon|number_format(0, '.', ' ') }}</span><br>
                        </div>
                        <div class=\"ship-merchandise\">
                            <img src=\"{{ asset('img/icons/merchandise.png') }}\" class=\"logo-big\" alt=\"saber\"> <strong>Marchandise</strong>
                            <span class=\"float-right\">{{ ship.getMerchandisesSum|number_format(0, '.', ' ') }} / {{ ship.getMaxMerchandises|number_format(0, '.', ' ') }}</span><br>
                            <div class=\"row pl-4 pr-4\">
                                <div class=\"left-merchandise\">
                                    <span class=\"red-text\"><strong>Canons</strong></span> <span class=\"float-right\">{{ ship.gun|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"green-text\"><strong>Nourriture</strong></span> <span class=\"float-right\">{{ ship.food|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"brown-text\"><strong>Bois</strong></span> <span class=\"float-right\">{{ ship.wood|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Gemmes</strong></span> <span class=\"float-right\">{{ ship.gemstone|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Etoffes</strong></span> <span class=\"float-right\">{{ ship.stuff|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Manuscrits</strong></span> <span class=\"float-right\">{{ ship.manuscript|number_format(0, '.', ' ') }}</span><br>
                                </div>
                                <div class=\"right-merchandise\">
                                    <span class=\"red-text\"><strong>Armement</strong></span> <span class=\"float-right\">{{ ship.arsenal|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"green-text\"><strong>Alcool</strong></span> <span class=\"float-right\">{{ ship.alcohol|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"brown-text\"><strong>Cuir</strong></span> <span class=\"float-right\">{{ ship.copper|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Bijoux</strong></span> <span class=\"float-right\">{{ ship.jewellery|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Fourrures</strong></span> <span class=\"float-right\">{{ ship.fur|number_format(0, '.', ' ') }}</span><br>
                                    <span class=\"gold-dark\"><strong>Epices</strong></span> <span class=\"float-right\">{{ ship.spice|number_format(0, '.', ' ') }}</span><br>
                                </div>
                            </div>
                        </div>

                        <div class=\"personal-vertical-bar\" title=\"Structure : {{ ship.structure }}/100\"><div class=\"structure-vertical\" style=\"height: {{ ship.structure }}%;\"></div></div>
                        <div class=\"personal-vertical-bar\" title=\"Moral : {{ ship.moral }}/100\"><div class=\"morale-vertical\" style=\"height: {{ ship.moral }}%;\"></div></div>
                        <div class=\"personal-vertical-bar\" title=\"Expérience : {{ ship.getXpDisp }}/{{ ship.getMaxXpDisp }}\"><div class=\"xp-vertical\" style=\"height: {{ ship.getXpDisp / ship.getMaxXpDisp * 100 }}%;\"></div></div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </form>
    {% for ship in ships %}
        <!-- Rename Modal -->
        <div class=\"modal fade\" id=\"rename{{ ship.id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <form method=\"post\" action=\"{{ path('app_ship_rename', {id: ship.id}) }}\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Renommer {{ ship.name }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ ship.id }}\">
                            <input type=\"text\" name=\"name\" class=\"input-white\" placeholder=\"Nouveau nom de navire\" required=\"required\"><br><br>
                            <input type=\"submit\" name=\"rename\" value=\"Renommer\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "authenticated/ships.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\ships.html.twig");
    }
}
