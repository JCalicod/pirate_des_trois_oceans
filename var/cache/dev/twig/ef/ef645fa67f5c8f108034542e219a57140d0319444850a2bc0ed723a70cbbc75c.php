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

/* authenticated/include/messaging-report.html.twig */
class __TwigTemplate_b6a4178e5e45088b17c7688b1c97fa169d6a4e0506f4420ab6a0b6969f5b6b45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/messaging-report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/messaging-report.html.twig"));

        // line 1
        echo "<table class=\"war-report-table\">
    <tr>
        <td>
            <b>";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 4, $this->source); })()), "save", [], "array", false, false, false, 4), 0, [], "array", false, false, false, 4), "owner", [], "any", false, false, false, 4), "alliance", [], "any", false, false, false, 4)) {
            echo "<span class=\"font-weight-bold alliance-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 4, $this->source); })()), "save", [], "array", false, false, false, 4), 0, [], "array", false, false, false, 4), "owner", [], "any", false, false, false, 4), "alliance", [], "any", false, false, false, 4), "color", [], "any", false, false, false, 4), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 4, $this->source); })()), "save", [], "array", false, false, false, 4), 0, [], "array", false, false, false, 4), "owner", [], "any", false, false, false, 4), "alliance", [], "any", false, false, false, 4), "abbreviation", [], "any", false, false, false, 4), "html", null, true);
            echo "]</span>";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 4, $this->source); })()), "save", [], "array", false, false, false, 4), 0, [], "array", false, false, false, 4), "owner", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
        echo "</b>
            <span class=\"float-right\">
                                    ";
        // line 6
        if ((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    ";
        } else {
            // line 9
            echo "                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    ";
        }
        // line 11
        echo "                                </span>
        </td>
        <td>
            <b>";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 14, $this->source); })()), "save", [], "array", false, false, false, 14), 0, [], "array", false, false, false, 14), "owner", [], "any", false, false, false, 14), "alliance", [], "any", false, false, false, 14)) {
            echo "<span class=\"font-weight-bold alliance-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 14, $this->source); })()), "save", [], "array", false, false, false, 14), 0, [], "array", false, false, false, 14), "owner", [], "any", false, false, false, 14), "alliance", [], "any", false, false, false, 14), "color", [], "any", false, false, false, 14), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 14, $this->source); })()), "save", [], "array", false, false, false, 14), 0, [], "array", false, false, false, 14), "owner", [], "any", false, false, false, 14), "alliance", [], "any", false, false, false, 14), "abbreviation", [], "any", false, false, false, 14), "html", null, true);
            echo "]</span>";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 14, $this->source); })()), "save", [], "array", false, false, false, 14), 0, [], "array", false, false, false, 14), "owner", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</b>
            <span class=\"float-right\">
                                    ";
        // line 16
        if (0 === twig_compare((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 16, $this->source); })()), false)) {
            // line 17
            echo "                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    ";
        } else {
            // line 19
            echo "                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    ";
        }
        // line 21
        echo "                                </span>
        </td>
    </tr>
    <tr>
        <td>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 26, $this->source); })()), "fleet", [], "array", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 27
            echo "                <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</b>
                <span class=\"float-right\">Niveau <b>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 28), "html", null, true);
            echo "</b></span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </td>
        <td>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 32, $this->source); })()), "fleet", [], "array", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 33
            echo "                <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</b>
                <span class=\"float-right\">Niveau <b>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 34), "html", null, true);
            echo "</b></span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </td>
    </tr>
    <tr>
        <td>

            ";
        // line 41
        $context["max"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 41, $this->source); })()), "fleet", [], "array", false, false, false, 41));
        // line 42
        echo "
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 43, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
            echo "\" class=\"helm-logo\" alt=\"helm\"> <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 44, $this->source); })()), "fleet", [], "array", false, false, false, 44), $context["i"], [], "array", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</b><br>
                <div class=\"text-right\">
                    Etat initial : <b>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 46, $this->source); })()), "save", [], "array", false, false, false, 46), $context["i"], [], "array", false, false, false, 46), "structure", [], "any", false, false, false, 46), "html", null, true);
            echo "/100</b><br>
                    Etat final : <b>";
            // line 47
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 47, $this->source); })()), "lost", [], "array", false, false, false, 47), $context["i"], [], "array", false, false, false, 47), "structure", [], "array", false, false, false, 47), 0)) {
                echo "<span class=\"red-text\">";
            }
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 47, $this->source); })()), "save", [], "array", false, false, false, 47), $context["i"], [], "array", false, false, false, 47), "structure", [], "any", false, false, false, 47) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 47, $this->source); })()), "lost", [], "array", false, false, false, 47), $context["i"], [], "array", false, false, false, 47), "structure", [], "array", false, false, false, 47)), "html", null, true);
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 47, $this->source); })()), "lost", [], "array", false, false, false, 47), $context["i"], [], "array", false, false, false, 47), "structure", [], "array", false, false, false, 47), 0)) {
                echo "</span>";
            }
            echo "/100</b><br>
                    ";
            // line 48
            if (0 <= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 48, $this->source); })()), "lost", [], "array", false, false, false, 48), $context["i"], [], "array", false, false, false, 48), "structure", [], "array", false, false, false, 48), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 48, $this->source); })()), "save", [], "array", false, false, false, 48), $context["i"], [], "array", false, false, false, 48), "structure", [], "any", false, false, false, 48))) {
                // line 49
                echo "                        <b class=\"red-text\">Navire coulé</b><br>
                    ";
            } else {
                // line 51
                echo "                        <b class=\"green-text\">+ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 51, $this->source); })()), "gain_xp", [], "array", false, false, false, 51), "html", null, true);
                echo " d'Exp</b><br>
                    ";
            }
            // line 53
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 53, $this->source); })()), "lost", [], "array", false, false, false, 53), $context["i"], [], "array", false, false, false, 53), "seaman", [], "array", false, false, false, 53), 0)) {
                // line 54
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 54, $this->source); })()), "lost", [], "array", false, false, false, 54), $context["i"], [], "array", false, false, false, 54), "seaman", [], "array", false, false, false, 54), "html", null, true);
                echo "</span> Matelots tués</b><br>
                    ";
            }
            // line 56
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 56, $this->source); })()), "lost", [], "array", false, false, false, 56), $context["i"], [], "array", false, false, false, 56), "explorer", [], "array", false, false, false, 56), 0)) {
                // line 57
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 57, $this->source); })()), "lost", [], "array", false, false, false, 57), $context["i"], [], "array", false, false, false, 57), "explorer", [], "array", false, false, false, 57), "html", null, true);
                echo "</span> Explorateurs tués</b><br>
                    ";
            }
            // line 59
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 59, $this->source); })()), "lost", [], "array", false, false, false, 59), $context["i"], [], "array", false, false, false, 59), "gunner", [], "array", false, false, false, 59), 0)) {
                // line 60
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 60, $this->source); })()), "lost", [], "array", false, false, false, 60), $context["i"], [], "array", false, false, false, 60), "gunner", [], "array", false, false, false, 60), "html", null, true);
                echo "</span> Canonniers tués</b><br>
                    ";
            }
            // line 62
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 62, $this->source); })()), "lost", [], "array", false, false, false, 62), $context["i"], [], "array", false, false, false, 62), "cook", [], "array", false, false, false, 62), 0)) {
                // line 63
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 63, $this->source); })()), "lost", [], "array", false, false, false, 63), $context["i"], [], "array", false, false, false, 63), "cook", [], "array", false, false, false, 63), "html", null, true);
                echo "</span> Cuisiniers tués</b><br>
                    ";
            }
            // line 65
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 65, $this->source); })()), "lost", [], "array", false, false, false, 65), $context["i"], [], "array", false, false, false, 65), "carpenter", [], "array", false, false, false, 65), 0)) {
                // line 66
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 66, $this->source); })()), "lost", [], "array", false, false, false, 66), $context["i"], [], "array", false, false, false, 66), "carpenter", [], "array", false, false, false, 66), "html", null, true);
                echo "</span> Charpentiers tués</b><br>
                    ";
            }
            // line 68
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 68, $this->source); })()), "lost", [], "array", false, false, false, 68), $context["i"], [], "array", false, false, false, 68), "surgeon", [], "array", false, false, false, 68), 0)) {
                // line 69
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 69, $this->source); })()), "lost", [], "array", false, false, false, 69), $context["i"], [], "array", false, false, false, 69), "surgeon", [], "array", false, false, false, 69), "html", null, true);
                echo "</span> Chirurgiens tués</b><br>
                    ";
            }
            // line 71
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        if ((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "                <br><br>
                <div class=\"text-right\">
                    Butin de Guerre<br>
                    <b class=\"gold-dark\">";
            // line 77
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theft"]) || array_key_exists("theft", $context) ? $context["theft"] : (function () { throw new RuntimeError('Variable "theft" does not exist.', 77, $this->source); })()), "gold", [], "array", false, false, false, 77), 0, ".", " "), "html", null, true);
            echo "</b> Pièces d'Or<br>
                </div>
            ";
        }
        // line 80
        echo "        </td>
        <td>
            ";
        // line 82
        $context["max"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 82, $this->source); })()), "fleet", [], "array", false, false, false, 82));
        // line 83
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 83, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
            echo "\" class=\"helm-logo\" alt=\"helm\"> <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 84, $this->source); })()), "fleet", [], "array", false, false, false, 84), $context["i"], [], "array", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</b><br>
                <div class=\"text-right\">
                    Etat initial : <b>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 86, $this->source); })()), "save", [], "array", false, false, false, 86), $context["i"], [], "array", false, false, false, 86), "structure", [], "any", false, false, false, 86), "html", null, true);
            echo "/100</b><br>
                    Etat final : <b>";
            // line 87
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 87, $this->source); })()), "save", [], "array", false, false, false, 87), $context["i"], [], "array", false, false, false, 87), "structure", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 87, $this->source); })()), "fleet", [], "array", false, false, false, 87), $context["i"], [], "array", false, false, false, 87), "structure", [], "any", false, false, false, 87))) {
                echo "<span class=\"red-text\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 87, $this->source); })()), "fleet", [], "array", false, false, false, 87), $context["i"], [], "array", false, false, false, 87), "structure", [], "any", false, false, false, 87), "html", null, true);
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 87, $this->source); })()), "save", [], "array", false, false, false, 87), $context["i"], [], "array", false, false, false, 87), "structure", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 87, $this->source); })()), "fleet", [], "array", false, false, false, 87), $context["i"], [], "array", false, false, false, 87), "structure", [], "any", false, false, false, 87))) {
                echo "</span>";
            }
            echo "/100</b><br>
                    ";
            // line 88
            if (0 >= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 88, $this->source); })()), "fleet", [], "array", false, false, false, 88), $context["i"], [], "array", false, false, false, 88), "structure", [], "any", false, false, false, 88), 0)) {
                // line 89
                echo "                        <b class=\"red-text\">Navire coulé</b><br>
                    ";
            }
            // line 91
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 91, $this->source); })()), "fleet", [], "array", false, false, false, 91), $context["i"], [], "array", false, false, false, 91), "seaman", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 91, $this->source); })()), "save", [], "array", false, false, false, 91), $context["i"], [], "array", false, false, false, 91), "seaman", [], "any", false, false, false, 91))) {
                // line 92
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 92, $this->source); })()), "save", [], "array", false, false, false, 92), $context["i"], [], "array", false, false, false, 92), "seaman", [], "any", false, false, false, 92) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 92, $this->source); })()), "fleet", [], "array", false, false, false, 92), $context["i"], [], "array", false, false, false, 92), "seaman", [], "any", false, false, false, 92)), "html", null, true);
                echo "</span> Matelots tués</b><br>
                    ";
            }
            // line 94
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 94, $this->source); })()), "fleet", [], "array", false, false, false, 94), $context["i"], [], "array", false, false, false, 94), "explorer", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 94, $this->source); })()), "save", [], "array", false, false, false, 94), $context["i"], [], "array", false, false, false, 94), "explorer", [], "any", false, false, false, 94))) {
                // line 95
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 95, $this->source); })()), "save", [], "array", false, false, false, 95), $context["i"], [], "array", false, false, false, 95), "explorer", [], "any", false, false, false, 95) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 95, $this->source); })()), "fleet", [], "array", false, false, false, 95), $context["i"], [], "array", false, false, false, 95), "explorer", [], "any", false, false, false, 95)), "html", null, true);
                echo "</span> Explorateurs tués</b><br>
                    ";
            }
            // line 97
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 97, $this->source); })()), "fleet", [], "array", false, false, false, 97), $context["i"], [], "array", false, false, false, 97), "gunner", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 97, $this->source); })()), "save", [], "array", false, false, false, 97), $context["i"], [], "array", false, false, false, 97), "gunner", [], "any", false, false, false, 97))) {
                // line 98
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 98, $this->source); })()), "save", [], "array", false, false, false, 98), $context["i"], [], "array", false, false, false, 98), "gunner", [], "any", false, false, false, 98) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 98, $this->source); })()), "fleet", [], "array", false, false, false, 98), $context["i"], [], "array", false, false, false, 98), "gunner", [], "any", false, false, false, 98)), "html", null, true);
                echo "</span> Canonniers tués</b><br>
                    ";
            }
            // line 100
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 100, $this->source); })()), "fleet", [], "array", false, false, false, 100), $context["i"], [], "array", false, false, false, 100), "cook", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 100, $this->source); })()), "save", [], "array", false, false, false, 100), $context["i"], [], "array", false, false, false, 100), "cook", [], "any", false, false, false, 100))) {
                // line 101
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 101, $this->source); })()), "save", [], "array", false, false, false, 101), $context["i"], [], "array", false, false, false, 101), "cook", [], "any", false, false, false, 101) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 101, $this->source); })()), "fleet", [], "array", false, false, false, 101), $context["i"], [], "array", false, false, false, 101), "cook", [], "any", false, false, false, 101)), "html", null, true);
                echo "</span> Cuisiniers tués</b><br>
                    ";
            }
            // line 103
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 103, $this->source); })()), "fleet", [], "array", false, false, false, 103), $context["i"], [], "array", false, false, false, 103), "carpenter", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 103, $this->source); })()), "save", [], "array", false, false, false, 103), $context["i"], [], "array", false, false, false, 103), "carpenter", [], "any", false, false, false, 103))) {
                // line 104
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 104, $this->source); })()), "save", [], "array", false, false, false, 104), $context["i"], [], "array", false, false, false, 104), "carpenter", [], "any", false, false, false, 104) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 104, $this->source); })()), "fleet", [], "array", false, false, false, 104), $context["i"], [], "array", false, false, false, 104), "carpenter", [], "any", false, false, false, 104)), "html", null, true);
                echo "</span> Charpentiers tués</b><br>
                    ";
            }
            // line 106
            echo "                    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 106, $this->source); })()), "fleet", [], "array", false, false, false, 106), $context["i"], [], "array", false, false, false, 106), "surgeon", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 106, $this->source); })()), "save", [], "array", false, false, false, 106), $context["i"], [], "array", false, false, false, 106), "surgeon", [], "any", false, false, false, 106))) {
                // line 107
                echo "                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 107, $this->source); })()), "save", [], "array", false, false, false, 107), $context["i"], [], "array", false, false, false, 107), "surgeon", [], "any", false, false, false, 107) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 107, $this->source); })()), "fleet", [], "array", false, false, false, 107), $context["i"], [], "array", false, false, false, 107), "surgeon", [], "any", false, false, false, 107)), "html", null, true);
                echo "</span> Chirurgiens tués</b><br>
                    ";
            }
            // line 109
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </td>
    </tr>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/messaging-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 111,  362 => 109,  356 => 107,  353 => 106,  347 => 104,  344 => 103,  338 => 101,  335 => 100,  329 => 98,  326 => 97,  320 => 95,  317 => 94,  311 => 92,  308 => 91,  304 => 89,  302 => 88,  292 => 87,  288 => 86,  280 => 84,  275 => 83,  273 => 82,  269 => 80,  263 => 77,  258 => 74,  255 => 73,  248 => 71,  242 => 69,  239 => 68,  233 => 66,  230 => 65,  224 => 63,  221 => 62,  215 => 60,  212 => 59,  206 => 57,  203 => 56,  197 => 54,  194 => 53,  188 => 51,  184 => 49,  182 => 48,  172 => 47,  168 => 46,  160 => 44,  156 => 43,  153 => 42,  151 => 41,  144 => 36,  136 => 34,  131 => 33,  127 => 32,  123 => 30,  115 => 28,  110 => 27,  106 => 26,  99 => 21,  95 => 19,  91 => 17,  89 => 16,  76 => 14,  71 => 11,  67 => 9,  63 => 7,  61 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"war-report-table\">
    <tr>
        <td>
            <b>{% if attacker['save'][0].owner.alliance %}<span class=\"font-weight-bold alliance-{{ attacker['save'][0].owner.alliance.color }}\">[{{ attacker['save'][0].owner.alliance.abbreviation }}]</span>{% endif %} {{ attacker['save'][0].owner.username }}</b>
            <span class=\"float-right\">
                                    {%  if victory %}
                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    {% else %}
                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    {% endif %}
                                </span>
        </td>
        <td>
            <b>{% if defender['save'][0].owner.alliance %}<span class=\"font-weight-bold alliance-{{ defender['save'][0].owner.alliance.color }}\">[{{ defender['save'][0].owner.alliance.abbreviation }}]</span>{% endif %} {{ defender['save'][0].owner.username }}</b>
            <span class=\"float-right\">
                                    {%  if victory == false %}
                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    {% else %}
                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    {% endif %}
                                </span>
        </td>
    </tr>
    <tr>
        <td>
            {% for ship in attacker['fleet'] %}
                <b>{{ ship.name }}</b>
                <span class=\"float-right\">Niveau <b>{{ ship.level }}</b></span><br>
            {% endfor %}
        </td>
        <td>
            {% for ship in defender['fleet'] %}
                <b>{{ ship.name }}</b>
                <span class=\"float-right\">Niveau <b>{{ ship.level }}</b></span><br>
            {% endfor %}
        </td>
    </tr>
    <tr>
        <td>

            {% set max = attacker['fleet']|length %}

            {% for i in range(0, max - 1) %}
                <img src=\"{{ asset('img/icons/helm.png') }}\" class=\"helm-logo\" alt=\"helm\"> <b>{{ attacker['fleet'][i].name }}</b><br>
                <div class=\"text-right\">
                    Etat initial : <b>{{ attacker['save'][i].structure }}/100</b><br>
                    Etat final : <b>{% if attacker['lost'][i]['structure'] > 0 %}<span class=\"red-text\">{% endif %}{{ attacker['save'][i].structure - attacker['lost'][i]['structure'] }}{% if attacker['lost'][i]['structure'] > 0 %}</span>{% endif %}/100</b><br>
                    {% if attacker['lost'][i]['structure'] >= attacker['save'][i].structure %}
                        <b class=\"red-text\">Navire coulé</b><br>
                    {% else %}
                        <b class=\"green-text\">+ {{ attacker['gain_xp'] }} d'Exp</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['seaman'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['seaman'] }}</span> Matelots tués</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['explorer'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['explorer'] }}</span> Explorateurs tués</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['gunner'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['gunner'] }}</span> Canonniers tués</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['cook'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['cook'] }}</span> Cuisiniers tués</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['carpenter'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['carpenter'] }}</span> Charpentiers tués</b><br>
                    {% endif %}
                    {% if attacker['lost'][i]['surgeon'] > 0 %}
                        <b><span class=\"red-text\">{{ attacker['lost'][i]['surgeon'] }}</span> Chirurgiens tués</b><br>
                    {% endif %}
                </div>
            {% endfor %}
            {% if victory %}
                <br><br>
                <div class=\"text-right\">
                    Butin de Guerre<br>
                    <b class=\"gold-dark\">{{ theft['gold']|number_format(0, '.', ' ') }}</b> Pièces d'Or<br>
                </div>
            {% endif %}
        </td>
        <td>
            {% set max = defender['fleet']|length %}
            {% for i in range(0, max - 1) %}
                <img src=\"{{ asset('img/icons/helm.png') }}\" class=\"helm-logo\" alt=\"helm\"> <b>{{ defender['fleet'][i].name }}</b><br>
                <div class=\"text-right\">
                    Etat initial : <b>{{ defender['save'][i].structure }}/100</b><br>
                    Etat final : <b>{% if defender['save'][i].structure != defender['fleet'][i].structure %}<span class=\"red-text\">{% endif %}{{ defender['fleet'][i].structure }}{% if defender['save'][i].structure != defender['fleet'][i].structure %}</span>{% endif %}/100</b><br>
                    {% if defender['fleet'][i].structure <= 0 %}
                        <b class=\"red-text\">Navire coulé</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].seaman < defender['save'][i].seaman %}
                        <b><span class=\"red-text\">{{ (defender['save'][i].seaman - defender['fleet'][i].seaman) }}</span> Matelots tués</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].explorer < defender['save'][i].explorer %}
                        <b><span class=\"red-text\">{{ (defender['save'][i].explorer - defender['fleet'][i].explorer) }}</span> Explorateurs tués</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].gunner < defender['save'][i].gunner %}
                        <b><span class=\"red-text\">{{ (defender['save'][i].gunner - defender['fleet'][i].gunner) }}</span> Canonniers tués</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].cook < defender['save'][i].cook %}
                        <b><span class=\"red-text\">{{ defender['save'][i].cook - defender['fleet'][i].cook }}</span> Cuisiniers tués</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].carpenter < defender['save'][i].carpenter %}
                        <b><span class=\"red-text\">{{ defender['save'][i].carpenter - defender['fleet'][i].carpenter }}</span> Charpentiers tués</b><br>
                    {% endif %}
                    {% if defender['fleet'][i].surgeon < defender['save'][i].surgeon %}
                        <b><span class=\"red-text\">{{ defender['save'][i].surgeon - defender['fleet'][i].surgeon }}</span> Chirurgiens tués</b><br>
                    {% endif %}
                </div>
            {% endfor %}
        </td>
    </tr>
</table>", "authenticated/include/messaging-report.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\include\\messaging-report.html.twig");
    }
}
