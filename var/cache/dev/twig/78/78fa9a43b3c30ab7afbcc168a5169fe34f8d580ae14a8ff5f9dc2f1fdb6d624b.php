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

/* authenticated/include/alliance/members.html.twig */
class __TwigTemplate_2071a4e92cc2c2bfc71d9d4a0f79837134da038387fcb6a594c6835d5178f2d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/members.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/members.html.twig"));

        // line 1
        echo "<div id=\"members\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Liste des Membres
        </div>
        <div class=\"block-content\">
            L'alliance <span class='font-weight-bold alliance-";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "color", [], "any", false, false, false, 7), "html", null, true);
        echo "'>[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "abbreviation", [], "any", false, false, false, 7), "html", null, true);
        echo "]</span> possède <b>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "getAllianceMembers", [], "any", false, false, false, 7)), "html", null, true);
        echo "</b> membres.

            <table>
                <thead>
                    <tr>
                        <th><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/lantern.png"), "html", null, true);
        echo "\" alt=\"lantern\"> Joueur</th>
                        <th><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "\" alt=\"gun\"> Puissance</th>
                        <th><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
        echo "\" alt=\"helm\"> Navires</th>
                        <th><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"coin\"> Fortune</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 21, $this->source); })()), "getAllianceMembers", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 22
            echo "                    <tr class=\"";
            if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 22, $this->source); })()) % 2), 0)) {
                echo "tr-1";
            } else {
                echo "tr-2";
            }
            echo "\">
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "user", [], "any", false, false, false, 24), "getTotalPower", [], "any", false, false, false, 24), 0, ".", " "), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "user", [], "any", false, false, false, 25), "ships", [], "any", false, false, false, 25)) - 1), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "user", [], "any", false, false, false, 26), "gold", [], "any", false, false, false, 26), 0, ".", " "), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            // line 28
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 28, $this->source); })()) + 1);
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/alliance/members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  121 => 29,  119 => 28,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  93 => 22,  88 => 21,  86 => 20,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"members\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Liste des Membres
        </div>
        <div class=\"block-content\">
            L'alliance <span class='font-weight-bold alliance-{{ alliance.color}}'>[{{ alliance.abbreviation }}]</span> possède <b>{{ alliance.getAllianceMembers|length }}</b> membres.

            <table>
                <thead>
                    <tr>
                        <th><img src=\"{{ asset('img/icons/lantern.png') }}\" alt=\"lantern\"> Joueur</th>
                        <th><img src=\"{{ asset('img/icons/gun.png') }}\" alt=\"gun\"> Puissance</th>
                        <th><img src=\"{{ asset('img/icons/helm.png') }}\" alt=\"helm\"> Navires</th>
                        <th><img src=\"{{ asset('img/icons/coin.png') }}\" alt=\"coin\"> Fortune</th>
                    </tr>
                </thead>

                <tbody>
                {% set i = 0 %}
                {% for link in alliance.getAllianceMembers %}
                    <tr class=\"{% if i % 2 == 0 %}tr-1{% else %}tr-2{% endif %}\">
                        <td>{{ link.user.username }}</td>
                        <td>{{ link.user.getTotalPower|number_format(0, '.', ' ') }}</td>
                        <td>{{ link.user.ships|length - 1 }}</td>
                        <td>{{ link.user.gold|number_format(0, '.', ' ') }}</td>
                    </tr>
                    {% set i = i + 1 %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>", "authenticated/include/alliance/members.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\include\\alliance\\members.html.twig");
    }
}
