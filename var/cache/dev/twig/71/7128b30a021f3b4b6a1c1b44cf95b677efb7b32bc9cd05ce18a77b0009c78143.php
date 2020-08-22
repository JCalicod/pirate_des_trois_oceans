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

/* authenticated/trade.html.twig */
class __TwigTemplate_0526b47978597193972a0b75a92fe0eade6f6d8a2e9073ea93b9e85a754b568b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/trade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/trade.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/trade.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/trade.css"), "html", null, true);
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
        echo "    <div id=\"ajax-response\"></div>

    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Commerce
        </div>
        <div class=\"card-back-msg p-0\">
            <div class=\"card-title d-flex justify-content-between\">Transaction de Marchandises <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/treasure.png"), "html", null, true);
        echo "\" alt=\"treasure\"></div>

            <div class=\"trade-display d-flex justify-content-between\">
                <div class=\"buyer d-flex\">
                    <div class=\"avatar\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "avatar", [], "any", false, false, false, 21)) . ".jpg")), "html", null, true);
        echo "\" alt=\"avatar\">
                    </div>
                    <div class=\"content\">
                        <div class=\"d-flex mb-1\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"profile\" class=\"logo\">
                            <div>
                                <b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</b><br>
                                <i>\"Voilà c'que j'vous propose !\"</i>
                            </div>
                        </div>
                        <div id=\"buyer-choices\">
                        </div>
                    </div>
                </div>
                <div class=\"seller d-flex\">
                    <div class=\"content\">
                        <div class=\"d-flex mb-1\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"profile\" class=\"logo\">
                            <div>
                                <b>Marchand</b><br>
                                <i>\"J'accepte votre offre..\"</i>
                            </div>
                        </div>
                        <div id=\"seller-choices\">
                        </div>
                    </div>
                    <div class=\"avatar\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/7.jpg"), "html", null, true);
        echo "\" alt=\"avatar\">
                    </div>
                </div>
            </div>

            <div class=\"trade-inputs d-flex justify-content-between\">
                <div class=\"buyer-inputs d-flex justify-content-between\">
                    <input type=\"number\" min=\"0\" class=\"input-white\" id=\"buy-quantity\" value=\"0\">
                    <select class=\"input-white\" id=\"buy-object\">
                        <option value=\"gun\">Canon</option>
                        <option value=\"arsenal\">Armement</option>
                        <option value=\"food\">Nourriture</option>
                        <option value=\"alcohol\">Alcool</option>
                        <option value=\"wood\">Bois</option>
                        <option value=\"copper\">Cuir</option>
                        <option value=\"gemstone\">Gemme</option>
                        <option value=\"jewellery\">Bijoux</option>
                        <option value=\"stuff\">Etoffe</option>
                        <option value=\"fur\">Fourrure</option>
                        <option value=\"manuscript\">Manuscrit</option>
                        <option value=\"spice\">Epice</option>
                    </select>
                    <button type=\"submit\" id=\"buy-add\">Ajouter</button>
                </div>
                <div class=\"seller-inputs d-flex justify-content-between\">
                    <input type=\"number\" min=\"0\" class=\"input-white\" id=\"sell-quantity\" value=\"0\">
                    <select class=\"input-white\" id=\"sell-object\">
                        <option value=\"gun\">Canon</option>
                        <option value=\"arsenal\">Armement</option>
                        <option value=\"food\">Nourriture</option>
                        <option value=\"alcohol\">Alcool</option>
                        <option value=\"wood\">Bois</option>
                        <option value=\"copper\">Cuir</option>
                        <option value=\"gemstone\">Gemme</option>
                        <option value=\"jewellery\">Bijoux</option>
                        <option value=\"stuff\">Etoffe</option>
                        <option value=\"fur\">Fourrure</option>
                        <option value=\"manuscript\">Manuscrit</option>
                        <option value=\"spice\">Epice</option>
                    </select>
                    <button type=\"submit\" id=\"sell-add\">Ajouter</button>
                </div>
            </div>

            <div class=\"trade-transaction d-flex justify-content-between\">
                <div class=\"buyer-transaction\">
                    <div>
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"gold\" class=\"logo\"> Pièces d'or
                        <div class=\"float-right font-weight-bold\" id=\"user-gold\">";
        // line 96
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "gold", [], "any", false, false, false, 96), 0, ".", " "), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"font-weight-bold green-text mt-2\"><br>Valider la Transaction de Marchandises <button type=\"submit\" id=\"validate-trade\" name=\"trade\" value=\"Valider\" class=\"float-right\">Valider</button></div>
                </div>
                <div class=\"seller-transaction\">
                    <div class=\"font-weight-bold\">
                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"gold\" class=\"logo\"> <span class=\"orange-text\">Taxe Commerciale Totale du Jour</span>
                        <div class=\"float-right\">";
        // line 103
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trade"]) || array_key_exists("trade", $context) ? $context["trade"] : (function () { throw new RuntimeError('Variable "trade" does not exist.', 103, $this->source); })()), "amount", [], "any", false, false, false, 103), 0, ".", " "), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"mt-2\"><span class=\"font-weight-bold\">Taux du Marché à ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trade"]) || array_key_exists("trade", $context) ? $context["trade"] : (function () { throw new RuntimeError('Variable "trade" does not exist.', 105, $this->source); })()), "rate", [], "any", false, false, false, 105), "html", null, true);
        echo "%</span><br><span class=\"font-italic\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trade"]) || array_key_exists("trade", $context) ? $context["trade"] : (function () { throw new RuntimeError('Variable "trade" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "html", null, true);
        echo "</span></div>
                </div>
            </div>

            <div class=\"card-title d-flex justify-content-between\">Caverne aux trésors <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/treasure.png"), "html", null, true);
        echo "\" alt=\"treasure\"></div>
            <div class=\"trade-cave p-3\">Cette fonctionnalité n'est pas encore disponible.</div>
        </div>
    </div>

    ";
        // line 114
        $this->loadTemplate("authenticated/script/trade.html.twig", "authenticated/trade.html.twig", 114)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/trade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 114,  233 => 109,  224 => 105,  219 => 103,  215 => 102,  206 => 96,  202 => 95,  152 => 48,  139 => 38,  125 => 27,  120 => 25,  113 => 21,  105 => 16,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/trade.css') }}\">
{% endblock %}

{% block body %}
    <div id=\"ajax-response\"></div>

    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Commerce
        </div>
        <div class=\"card-back-msg p-0\">
            <div class=\"card-title d-flex justify-content-between\">Transaction de Marchandises <img src=\"{{ asset('img/icons/treasure.png') }}\" alt=\"treasure\"></div>

            <div class=\"trade-display d-flex justify-content-between\">
                <div class=\"buyer d-flex\">
                    <div class=\"avatar\">
                        <img src=\"{{ asset('img/avatars/' ~ app.user.avatar ~ '.jpg') }}\" alt=\"avatar\">
                    </div>
                    <div class=\"content\">
                        <div class=\"d-flex mb-1\">
                            <img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"profile\" class=\"logo\">
                            <div>
                                <b>{{ app.user.username }}</b><br>
                                <i>\"Voilà c'que j'vous propose !\"</i>
                            </div>
                        </div>
                        <div id=\"buyer-choices\">
                        </div>
                    </div>
                </div>
                <div class=\"seller d-flex\">
                    <div class=\"content\">
                        <div class=\"d-flex mb-1\">
                            <img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"profile\" class=\"logo\">
                            <div>
                                <b>Marchand</b><br>
                                <i>\"J'accepte votre offre..\"</i>
                            </div>
                        </div>
                        <div id=\"seller-choices\">
                        </div>
                    </div>
                    <div class=\"avatar\">
                        <img src=\"{{ asset('img/avatars/7.jpg') }}\" alt=\"avatar\">
                    </div>
                </div>
            </div>

            <div class=\"trade-inputs d-flex justify-content-between\">
                <div class=\"buyer-inputs d-flex justify-content-between\">
                    <input type=\"number\" min=\"0\" class=\"input-white\" id=\"buy-quantity\" value=\"0\">
                    <select class=\"input-white\" id=\"buy-object\">
                        <option value=\"gun\">Canon</option>
                        <option value=\"arsenal\">Armement</option>
                        <option value=\"food\">Nourriture</option>
                        <option value=\"alcohol\">Alcool</option>
                        <option value=\"wood\">Bois</option>
                        <option value=\"copper\">Cuir</option>
                        <option value=\"gemstone\">Gemme</option>
                        <option value=\"jewellery\">Bijoux</option>
                        <option value=\"stuff\">Etoffe</option>
                        <option value=\"fur\">Fourrure</option>
                        <option value=\"manuscript\">Manuscrit</option>
                        <option value=\"spice\">Epice</option>
                    </select>
                    <button type=\"submit\" id=\"buy-add\">Ajouter</button>
                </div>
                <div class=\"seller-inputs d-flex justify-content-between\">
                    <input type=\"number\" min=\"0\" class=\"input-white\" id=\"sell-quantity\" value=\"0\">
                    <select class=\"input-white\" id=\"sell-object\">
                        <option value=\"gun\">Canon</option>
                        <option value=\"arsenal\">Armement</option>
                        <option value=\"food\">Nourriture</option>
                        <option value=\"alcohol\">Alcool</option>
                        <option value=\"wood\">Bois</option>
                        <option value=\"copper\">Cuir</option>
                        <option value=\"gemstone\">Gemme</option>
                        <option value=\"jewellery\">Bijoux</option>
                        <option value=\"stuff\">Etoffe</option>
                        <option value=\"fur\">Fourrure</option>
                        <option value=\"manuscript\">Manuscrit</option>
                        <option value=\"spice\">Epice</option>
                    </select>
                    <button type=\"submit\" id=\"sell-add\">Ajouter</button>
                </div>
            </div>

            <div class=\"trade-transaction d-flex justify-content-between\">
                <div class=\"buyer-transaction\">
                    <div>
                        <img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"gold\" class=\"logo\"> Pièces d'or
                        <div class=\"float-right font-weight-bold\" id=\"user-gold\">{{ app.user.gold|number_format(0, '.', ' ') }}</div>
                    </div>
                    <div class=\"font-weight-bold green-text mt-2\"><br>Valider la Transaction de Marchandises <button type=\"submit\" id=\"validate-trade\" name=\"trade\" value=\"Valider\" class=\"float-right\">Valider</button></div>
                </div>
                <div class=\"seller-transaction\">
                    <div class=\"font-weight-bold\">
                        <img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"gold\" class=\"logo\"> <span class=\"orange-text\">Taxe Commerciale Totale du Jour</span>
                        <div class=\"float-right\">{{ trade.amount|number_format(0, '.', ' ') }}</div>
                    </div>
                    <div class=\"mt-2\"><span class=\"font-weight-bold\">Taux du Marché à {{ trade.rate }}%</span><br><span class=\"font-italic\">{{ trade.description }}</span></div>
                </div>
            </div>

            <div class=\"card-title d-flex justify-content-between\">Caverne aux trésors <img src=\"{{ asset('img/icons/treasure.png') }}\" alt=\"treasure\"></div>
            <div class=\"trade-cave p-3\">Cette fonctionnalité n'est pas encore disponible.</div>
        </div>
    </div>

    {% include 'authenticated/script/trade.html.twig' %}
{% endblock %}
", "authenticated/trade.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\trade.html.twig");
    }
}
