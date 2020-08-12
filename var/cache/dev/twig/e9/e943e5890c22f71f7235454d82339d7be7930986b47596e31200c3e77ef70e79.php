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

/* authenticated/include/alliance/lands.html.twig */
class __TwigTemplate_e90a2a704d4f8d98d0d46ff0eedbf22a9a4de5eec19c2f0ab1a594fddbe35944 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/lands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/lands.html.twig"));

        // line 2
        echo "
<div id=\"lands\" class=\"tab-block\">
    <div class=\"points-row\">
        ";
        // line 5
        $context["find"] = false;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 7
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", true, true, false, 7) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 7)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 7), 15))) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 8), "html", null, true);
                echo " points
                ";
                // line 9
                $context["find"] = true;
                // line 10
                echo "            ";
            }
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 12, $this->source); })()), false)) {
            // line 13
            echo "            0 point
        ";
        }
        // line 15
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-3 lands-block\">
            <div class=\"land d-flex\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lands/15.jpg"), "html", null, true);
        echo "\" alt=\"land\">
                <p class=\"font-weight-bold p-1\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 21, $this->source); })()), 15, [], "array", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 22
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", true, true, false, 22) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 22), 0))) {
                // line 23
                echo "                            <span class=\"font-weight-bold alliance-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "color", [], "any", false, false, false, 23), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "tag", [], "any", false, false, false, 23), "html", null, true);
                echo "]</span><br>
                            <span class=\"green-text\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 24), "html", null, true);
                echo " pts</span><br>
                        ";
            }
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </p>
            </div>
        </div>
        <div class=\"col-9 lands-description\">
            Le contrôle d'une ou plusieurs régions par une alliance permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Île aux Forbans et 4% pour les autres régions conquises. A la fin de la journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire...
        </div>
    </div>
        ";
        // line 34
        $context["i"] = 1;
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 36
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 36), 15)) {
                // line 37
                echo "                ";
                if (0 === twig_compare((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 37, $this->source); })()) - 1) % 4), 0)) {
                    // line 38
                    echo "                    <div class=\"points-row row\">
                        ";
                    // line 39
                    if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), 15)) {
                        // line 40
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 41
                        $context["find"] = false;
                        // line 42
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 42, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 43
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 43) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 43)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 43), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })())))) {
                                // line 44
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 44), "html", null, true);
                                echo " points
                                        ";
                                // line 45
                                $context["find"] = true;
                                // line 46
                                echo "                                    ";
                            }
                            // line 47
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 48, $this->source); })()), false)) {
                            // line 49
                            echo "                                    0 point
                                ";
                        }
                        // line 51
                        echo "                            </div>
                        ";
                    } else {
                        // line 53
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 54
                        $context["find"] = false;
                        // line 55
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 55, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 56
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 56) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 56)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 56), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 56, $this->source); })()) + 1)))) {
                                // line 57
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 57), "html", null, true);
                                echo " points
                                        ";
                                // line 58
                                $context["find"] = true;
                                // line 59
                                echo "                                    ";
                            }
                            // line 60
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 61, $this->source); })()), false)) {
                            // line 62
                            echo "                                    0 point
                                ";
                        }
                        // line 64
                        echo "                            </div>
                        ";
                    }
                    // line 66
                    echo "
                        ";
                    // line 67
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 67, $this->source); })()) + 1), 15)) {
                        // line 68
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 69
                        $context["find"] = false;
                        // line 70
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 70, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 71
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 71) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 71)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 71), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 71, $this->source); })()) + 1)))) {
                                // line 72
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 72), "html", null, true);
                                echo " points
                                        ";
                                // line 73
                                $context["find"] = true;
                                // line 74
                                echo "                                    ";
                            }
                            // line 75
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 76, $this->source); })()), false)) {
                            // line 77
                            echo "                                    0 point
                                ";
                        }
                        // line 79
                        echo "                            </div>
                        ";
                    } else {
                        // line 81
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 82
                        $context["find"] = false;
                        // line 83
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 83, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 84
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 84) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 84)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 84), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 84, $this->source); })()) + 2)))) {
                                // line 85
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 85), "html", null, true);
                                echo " points
                                        ";
                                // line 86
                                $context["find"] = true;
                                // line 87
                                echo "                                    ";
                            }
                            // line 88
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 89, $this->source); })()), false)) {
                            // line 90
                            echo "                                    0 point
                                ";
                        }
                        // line 92
                        echo "                            </div>
                        ";
                    }
                    // line 94
                    echo "
                        ";
                    // line 95
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 95, $this->source); })()) + 2), 15)) {
                        // line 96
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 97
                        $context["find"] = false;
                        // line 98
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 98, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 99
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 99) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 99)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 99), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 99, $this->source); })()) + 2)))) {
                                // line 100
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 100), "html", null, true);
                                echo " points
                                        ";
                                // line 101
                                $context["find"] = true;
                                // line 102
                                echo "                                    ";
                            }
                            // line 103
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 104
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 104, $this->source); })()), false)) {
                            // line 105
                            echo "                                    0 point
                                ";
                        }
                        // line 107
                        echo "                            </div>
                        ";
                    } else {
                        // line 109
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 110
                        $context["find"] = false;
                        // line 111
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 111, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 112
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 112) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 112)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 112), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 112, $this->source); })()) + 3)))) {
                                // line 113
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 113), "html", null, true);
                                echo " points
                                        ";
                                // line 114
                                $context["find"] = true;
                                // line 115
                                echo "                                    ";
                            }
                            // line 116
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 117
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 117, $this->source); })()), false)) {
                            // line 118
                            echo "                                    0 point
                                ";
                        }
                        // line 120
                        echo "                            </div>
                        ";
                    }
                    // line 122
                    echo "
                        ";
                    // line 123
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 123, $this->source); })()) + 3), 15)) {
                        // line 124
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 125
                        $context["find"] = false;
                        // line 126
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 126, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 127
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 127) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 127)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 127), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 127, $this->source); })()) + 3)))) {
                                // line 128
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 128), "html", null, true);
                                echo " points
                                        ";
                                // line 129
                                $context["find"] = true;
                                // line 130
                                echo "                                    ";
                            }
                            // line 131
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 132
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 132, $this->source); })()), false)) {
                            // line 133
                            echo "                                    0 point
                                ";
                        }
                        // line 135
                        echo "                            </div>
                        ";
                    } else {
                        // line 137
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 138
                        $context["find"] = false;
                        // line 139
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 139, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                            // line 140
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", true, true, false, 140) && twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", true, true, false, 140)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["position"], "land_id", [], "any", false, false, false, 140), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()) + 4)))) {
                                // line 141
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "points", [], "any", false, false, false, 141), "html", null, true);
                                echo " points
                                        ";
                                // line 142
                                $context["find"] = true;
                                // line 143
                                echo "                                    ";
                            }
                            // line 144
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 145
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 145, $this->source); })()), false)) {
                            // line 146
                            echo "                                    0 point
                                ";
                        }
                        // line 148
                        echo "                            </div>
                        ";
                    }
                    // line 150
                    echo "                    </div>
                    <div class=\"row\">
                ";
                }
                // line 153
                echo "                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/lands/" . twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 155)) . ".jpg")), "html", null, true);
                echo "\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            ";
                // line 157
                if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 157, $this->source); })()), 15)) {
                    // line 158
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 158, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 158, $this->source); })()), [], "array", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 159
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 159) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 159), 0))) {
                            // line 160
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 160), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 160), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 161
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 161), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 163
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    echo "                            ";
                } else {
                    // line 165
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 165, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 165, $this->source); })()) + 1), [], "array", false, false, false, 165));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 166
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 166) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 166), 0))) {
                            // line 167
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 167), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 167), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 168
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 168), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 170
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "                            ";
                }
                // line 172
                echo "                        </p>
                    </div>
                </div>
                ";
                // line 175
                if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 175, $this->source); })()) % 4), 0)) {
                    // line 176
                    echo "                    </div>
                ";
                }
                // line 178
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 178, $this->source); })()) + 1);
                // line 179
                echo "            ";
            }
            // line 180
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/alliance/lands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 181,  570 => 180,  567 => 179,  564 => 178,  560 => 176,  558 => 175,  553 => 172,  550 => 171,  544 => 170,  539 => 168,  532 => 167,  529 => 166,  524 => 165,  521 => 164,  515 => 163,  510 => 161,  503 => 160,  500 => 159,  495 => 158,  493 => 157,  488 => 155,  484 => 153,  479 => 150,  475 => 148,  471 => 146,  468 => 145,  462 => 144,  459 => 143,  457 => 142,  452 => 141,  449 => 140,  444 => 139,  442 => 138,  439 => 137,  435 => 135,  431 => 133,  428 => 132,  422 => 131,  419 => 130,  417 => 129,  412 => 128,  409 => 127,  404 => 126,  402 => 125,  399 => 124,  397 => 123,  394 => 122,  390 => 120,  386 => 118,  383 => 117,  377 => 116,  374 => 115,  372 => 114,  367 => 113,  364 => 112,  359 => 111,  357 => 110,  354 => 109,  350 => 107,  346 => 105,  343 => 104,  337 => 103,  334 => 102,  332 => 101,  327 => 100,  324 => 99,  319 => 98,  317 => 97,  314 => 96,  312 => 95,  309 => 94,  305 => 92,  301 => 90,  298 => 89,  292 => 88,  289 => 87,  287 => 86,  282 => 85,  279 => 84,  274 => 83,  272 => 82,  269 => 81,  265 => 79,  261 => 77,  258 => 76,  252 => 75,  249 => 74,  247 => 73,  242 => 72,  239 => 71,  234 => 70,  232 => 69,  229 => 68,  227 => 67,  224 => 66,  220 => 64,  216 => 62,  213 => 61,  207 => 60,  204 => 59,  202 => 58,  197 => 57,  194 => 56,  189 => 55,  187 => 54,  184 => 53,  180 => 51,  176 => 49,  173 => 48,  167 => 47,  164 => 46,  162 => 45,  157 => 44,  154 => 43,  149 => 42,  147 => 41,  144 => 40,  142 => 39,  139 => 38,  136 => 37,  133 => 36,  128 => 35,  126 => 34,  117 => 27,  111 => 26,  106 => 24,  99 => 23,  96 => 22,  92 => 21,  87 => 19,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  65 => 10,  63 => 9,  58 => 8,  55 => 7,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# A REFACTO => ILLISIBLE ET COMPLIQUE POUR RIEN #}

<div id=\"lands\" class=\"tab-block\">
    <div class=\"points-row\">
        {% set find = false %}
        {% for land in points %}
            {% if land.land_id is defined and land.points is defined and land.land_id == 15 %}
                {{ land.points }} points
                {% set find = true %}
            {% endif %}
        {% endfor %}
        {% if find == false %}
            0 point
        {% endif %}
    </div>
    <div class=\"row\">
        <div class=\"col-3 lands-block\">
            <div class=\"land d-flex\">
                <img src=\"{{ asset('img/lands/15.jpg') }}\" alt=\"land\">
                <p class=\"font-weight-bold p-1\">
                    {% for r in ranking[15] %}
                        {% if r.points is defined and r.points > 0 %}
                            <span class=\"font-weight-bold alliance-{{ r.color }}\">[{{ r.tag }}]</span><br>
                            <span class=\"green-text\">{{ r.points }} pts</span><br>
                        {% endif %}
                    {% endfor %}
                </p>
            </div>
        </div>
        <div class=\"col-9 lands-description\">
            Le contrôle d'une ou plusieurs régions par une alliance permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Île aux Forbans et 4% pour les autres régions conquises. A la fin de la journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire...
        </div>
    </div>
        {% set i = 1 %}
        {% for land in lands %}
            {% if land.id != 15 %}
                {% if (i - 1) % 4 == 0 %}
                    <div class=\"points-row row\">
                        {% if i < 15 %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == i %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == i + 1 %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% endif %}

                        {% if (i + 1) < 15 %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 1) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 2) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% endif %}

                        {% if (i + 2) < 15 %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 2) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 3) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% endif %}

                        {% if (i + 3) < 15 %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 3) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"col-3\">
                                {% set find = false %}
                                {% for position in points %}
                                    {% if position.land_id is defined and position.points is defined and position.land_id == (i + 4) %}
                                        {{ position.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"row\">
                {% endif %}
                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"{{ asset('img/lands/' ~ land.id ~ '.jpg') }}\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            {% if i < 15 %}
                                {% for rank in ranking[i] %}
                                    {% if rank.points and rank.points > 0 %}
                                        <span class=\"font-weight-bold alliance-{{ rank['color'] }}\">[{{ rank['tag'] }}]</span><br>
                                        <span class=\"green-text\">{{ rank['points'] }} pts</span><br>
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                {% for rank in ranking[i + 1] %}
                                    {% if rank.points and rank.points > 0 %}
                                        <span class=\"font-weight-bold alliance-{{ rank['color'] }}\">[{{ rank['tag'] }}]</span><br>
                                        <span class=\"green-text\">{{ rank['points'] }} pts</span><br>
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        </p>
                    </div>
                </div>
                {% if i % 4 == 0 %}
                    </div>
                {% endif %}
                {% set i = i + 1 %}
            {% endif %}
        {% endfor %}
</div>", "authenticated/include/alliance/lands.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\include\\alliance\\lands.html.twig");
    }
}
