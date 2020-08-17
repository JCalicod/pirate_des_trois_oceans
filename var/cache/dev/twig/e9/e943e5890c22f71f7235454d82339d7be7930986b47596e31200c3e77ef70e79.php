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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 6, $this->source); })()), 15, [], "array", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 7
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 7) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)))) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 8), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
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
        $context["i"] = 0;
        // line 22
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 22, $this->source); })()), 15, [], "array", false, false, false, 22), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 23
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", true, true, false, 23) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 23), 0))) {
                // line 24
                echo "                            <span class=\"font-weight-bold alliance-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "color", [], "any", false, false, false, 24), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "tag", [], "any", false, false, false, 24), "html", null, true);
                echo "]</span><br>
                            <span class=\"green-text\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 25), "html", null, true);
                echo " pts</span><br>
                        ";
            }
            // line 27
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </p>
            </div>
        </div>
        <div class=\"col-9 lands-description\">
            Le contrôle d'une ou plusieurs régions par une alliance permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Île aux Forbans et 4% pour les autres régions conquises. A la fin de la journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire...
        </div>
    </div>
        ";
        // line 35
        $context["i"] = 1;
        // line 36
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 37
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 37), 15)) {
                // line 38
                echo "                ";
                if (0 === twig_compare((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 38, $this->source); })()) - 1) % 4), 0)) {
                    // line 39
                    echo "                    <div class=\"points-row row\">
                        ";
                    // line 40
                    if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 40, $this->source); })()), 15)) {
                        // line 41
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 42
                        $context["find"] = false;
                        // line 43
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 43, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 44
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 44) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)))) {
                                // line 45
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 45), "html", null, true);
                                echo " points
                                        ";
                                // line 46
                                $context["find"] = true;
                                // line 47
                                echo "                                    ";
                            }
                            // line 48
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "
                                ";
                        // line 50
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 50, $this->source); })()), false)) {
                            // line 51
                            echo "                                    0 point
                                ";
                        }
                        // line 53
                        echo "                            </div>
                        ";
                    } else {
                        // line 55
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 56
                        $context["find"] = false;
                        // line 57
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 57, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 57, $this->source); })()) + 1), [], "array", false, false, false, 57));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 58
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 58) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)))) {
                                // line 59
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 59), "html", null, true);
                                echo " points
                                        ";
                                // line 60
                                $context["find"] = true;
                                // line 61
                                echo "                                    ";
                            }
                            // line 62
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 63
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 63, $this->source); })()), false)) {
                            // line 64
                            echo "                                    0 point
                                ";
                        }
                        // line 66
                        echo "                            </div>
                        ";
                    }
                    // line 68
                    echo "
                        ";
                    // line 69
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 69, $this->source); })()) + 1), 15)) {
                        // line 70
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 71
                        $context["find"] = false;
                        // line 72
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 72, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 72, $this->source); })()) + 1), [], "array", false, false, false, 72));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 73
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 73) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)))) {
                                // line 74
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 74), "html", null, true);
                                echo " points
                                        ";
                                // line 75
                                $context["find"] = true;
                                // line 76
                                echo "                                    ";
                            }
                            // line 77
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 78, $this->source); })()), false)) {
                            // line 79
                            echo "                                    0 point
                                ";
                        }
                        // line 81
                        echo "                            </div>
                        ";
                    } else {
                        // line 83
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 84
                        $context["find"] = false;
                        // line 85
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 85, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 85, $this->source); })()) + 2), [], "array", false, false, false, 85));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 86
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 86) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)))) {
                                // line 87
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 87), "html", null, true);
                                echo " points
                                        ";
                                // line 88
                                $context["find"] = true;
                                // line 89
                                echo "                                    ";
                            }
                            // line 90
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 91, $this->source); })()), false)) {
                            // line 92
                            echo "                                    0 point
                                ";
                        }
                        // line 94
                        echo "                            </div>
                        ";
                    }
                    // line 96
                    echo "
                        ";
                    // line 97
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()) + 2), 15)) {
                        // line 98
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 99
                        $context["find"] = false;
                        // line 100
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 100, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 100, $this->source); })()) + 2), [], "array", false, false, false, 100));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 101
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 101) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)))) {
                                // line 102
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 102), "html", null, true);
                                echo " points
                                        ";
                                // line 103
                                $context["find"] = true;
                                // line 104
                                echo "                                    ";
                            }
                            // line 105
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 106, $this->source); })()), false)) {
                            // line 107
                            echo "                                    0 point
                                ";
                        }
                        // line 109
                        echo "                            </div>
                        ";
                    } else {
                        // line 111
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 112
                        $context["find"] = false;
                        // line 113
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 113, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 113, $this->source); })()) + 3), [], "array", false, false, false, 113));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 114
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 114) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)))) {
                                // line 115
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 115), "html", null, true);
                                echo " points
                                        ";
                                // line 116
                                $context["find"] = true;
                                // line 117
                                echo "                                    ";
                            }
                            // line 118
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 119
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 119, $this->source); })()), false)) {
                            // line 120
                            echo "                                    0 point
                                ";
                        }
                        // line 122
                        echo "                            </div>
                        ";
                    }
                    // line 124
                    echo "
                        ";
                    // line 125
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 125, $this->source); })()) + 3), 15)) {
                        // line 126
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 127
                        $context["find"] = false;
                        // line 128
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 128, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 128, $this->source); })()) + 3), [], "array", false, false, false, 128));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 129
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 129) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)))) {
                                // line 130
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 130), "html", null, true);
                                echo " points
                                        ";
                                // line 131
                                $context["find"] = true;
                                // line 132
                                echo "                                    ";
                            }
                            // line 133
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 134, $this->source); })()), false)) {
                            // line 135
                            echo "                                    0 point
                                ";
                        }
                        // line 137
                        echo "                            </div>
                        ";
                    } else {
                        // line 139
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 140
                        $context["find"] = false;
                        // line 141
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 141, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 141, $this->source); })()) + 4), [], "array", false, false, false, 141));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 142
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 142) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 142), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)))) {
                                // line 143
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 143), "html", null, true);
                                echo " points
                                        ";
                                // line 144
                                $context["find"] = true;
                                // line 145
                                echo "                                    ";
                            }
                            // line 146
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 147
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 147, $this->source); })()), false)) {
                            // line 148
                            echo "                                    0 point
                                ";
                        }
                        // line 150
                        echo "                            </div>
                        ";
                    }
                    // line 152
                    echo "                    </div>
                    <div class=\"row\">
                ";
                }
                // line 155
                echo "                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/lands/" . twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 157)) . ".jpg")), "html", null, true);
                echo "\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            ";
                // line 159
                if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 159, $this->source); })()), 15)) {
                    // line 160
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 160, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 160, $this->source); })()), [], "array", false, false, false, 160), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 161
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 161) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 161), 0))) {
                            // line 162
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 162), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 162), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 163
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 163), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 165
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                            ";
                } else {
                    // line 167
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 167, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 167, $this->source); })()) + 1), [], "array", false, false, false, 167), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 168
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 168) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 168), 0))) {
                            // line 169
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 169), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 169), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 170
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 170), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 172
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "                            ";
                }
                // line 174
                echo "                        </p>
                    </div>
                </div>
                ";
                // line 177
                if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 177, $this->source); })()) % 4), 0)) {
                    // line 178
                    echo "                    </div>
                ";
                }
                // line 180
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 180, $this->source); })()) + 1);
                // line 181
                echo "            ";
            }
            // line 182
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
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
        return array (  581 => 183,  575 => 182,  572 => 181,  569 => 180,  565 => 178,  563 => 177,  558 => 174,  555 => 173,  549 => 172,  544 => 170,  537 => 169,  534 => 168,  529 => 167,  526 => 166,  520 => 165,  515 => 163,  508 => 162,  505 => 161,  500 => 160,  498 => 159,  493 => 157,  489 => 155,  484 => 152,  480 => 150,  476 => 148,  473 => 147,  467 => 146,  464 => 145,  462 => 144,  457 => 143,  454 => 142,  449 => 141,  447 => 140,  444 => 139,  440 => 137,  436 => 135,  433 => 134,  427 => 133,  424 => 132,  422 => 131,  417 => 130,  414 => 129,  409 => 128,  407 => 127,  404 => 126,  402 => 125,  399 => 124,  395 => 122,  391 => 120,  388 => 119,  382 => 118,  379 => 117,  377 => 116,  372 => 115,  369 => 114,  364 => 113,  362 => 112,  359 => 111,  355 => 109,  351 => 107,  348 => 106,  342 => 105,  339 => 104,  337 => 103,  332 => 102,  329 => 101,  324 => 100,  322 => 99,  319 => 98,  317 => 97,  314 => 96,  310 => 94,  306 => 92,  303 => 91,  297 => 90,  294 => 89,  292 => 88,  287 => 87,  284 => 86,  279 => 85,  277 => 84,  274 => 83,  270 => 81,  266 => 79,  263 => 78,  257 => 77,  254 => 76,  252 => 75,  247 => 74,  244 => 73,  239 => 72,  237 => 71,  234 => 70,  232 => 69,  229 => 68,  225 => 66,  221 => 64,  218 => 63,  212 => 62,  209 => 61,  207 => 60,  202 => 59,  199 => 58,  194 => 57,  192 => 56,  189 => 55,  185 => 53,  181 => 51,  179 => 50,  176 => 49,  170 => 48,  167 => 47,  165 => 46,  160 => 45,  157 => 44,  152 => 43,  150 => 42,  147 => 41,  145 => 40,  142 => 39,  139 => 38,  136 => 37,  131 => 36,  129 => 35,  120 => 28,  114 => 27,  109 => 25,  102 => 24,  99 => 23,  94 => 22,  92 => 21,  87 => 19,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  65 => 10,  63 => 9,  58 => 8,  55 => 7,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# A REFACTO => ILLISIBLE ET COMPLIQUE POUR RIEN #}

<div id=\"lands\" class=\"tab-block\">
    <div class=\"points-row\">
        {% set find = false %}
        {% for rank in ranking[15] %}
            {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                {{ rank.points }} points
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
                    {% set i = 0 %}
                    {% for r in ranking[15][:1] %}
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
                                {% for rank in ranking[i] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 1] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 1] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 2] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 2] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 3] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 3] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i + 4] %}
                                    {% if rank.alliance_id is defined and rank.alliance_id == alliance.id %}
                                        {{ rank.points }} points
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
                                {% for rank in ranking[i][:3] %}
                                    {% if rank.points and rank.points > 0 %}
                                        <span class=\"font-weight-bold alliance-{{ rank['color'] }}\">[{{ rank['tag'] }}]</span><br>
                                        <span class=\"green-text\">{{ rank['points'] }} pts</span><br>
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                {% for rank in ranking[i + 1][:3] %}
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
