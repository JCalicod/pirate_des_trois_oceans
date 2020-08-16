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
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 42, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 43
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 43) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)))) {
                                // line 44
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 44), "html", null, true);
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "
                                ";
                        // line 49
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 49, $this->source); })()), false)) {
                            // line 50
                            echo "                                    0 point
                                ";
                        }
                        // line 52
                        echo "                            </div>
                        ";
                    } else {
                        // line 54
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 55
                        $context["find"] = false;
                        // line 56
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 56, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 56, $this->source); })()) + 1), [], "array", false, false, false, 56));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 57
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 57) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)))) {
                                // line 58
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 58), "html", null, true);
                                echo " points
                                        ";
                                // line 59
                                $context["find"] = true;
                                // line 60
                                echo "                                    ";
                            }
                            // line 61
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 62
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 62, $this->source); })()), false)) {
                            // line 63
                            echo "                                    0 point
                                ";
                        }
                        // line 65
                        echo "                            </div>
                        ";
                    }
                    // line 67
                    echo "
                        ";
                    // line 68
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 68, $this->source); })()) + 1), 15)) {
                        // line 69
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 70
                        $context["find"] = false;
                        // line 71
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 71, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 71, $this->source); })()) + 1), [], "array", false, false, false, 71));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 72
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 72) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)))) {
                                // line 73
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 73), "html", null, true);
                                echo " points
                                        ";
                                // line 74
                                $context["find"] = true;
                                // line 75
                                echo "                                    ";
                            }
                            // line 76
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 77
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 77, $this->source); })()), false)) {
                            // line 78
                            echo "                                    0 point
                                ";
                        }
                        // line 80
                        echo "                            </div>
                        ";
                    } else {
                        // line 82
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 83
                        $context["find"] = false;
                        // line 84
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 84, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 84, $this->source); })()) + 2), [], "array", false, false, false, 84));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 85
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 85) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)))) {
                                // line 86
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 86), "html", null, true);
                                echo " points
                                        ";
                                // line 87
                                $context["find"] = true;
                                // line 88
                                echo "                                    ";
                            }
                            // line 89
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 90, $this->source); })()), false)) {
                            // line 91
                            echo "                                    0 point
                                ";
                        }
                        // line 93
                        echo "                            </div>
                        ";
                    }
                    // line 95
                    echo "
                        ";
                    // line 96
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 96, $this->source); })()) + 2), 15)) {
                        // line 97
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 98
                        $context["find"] = false;
                        // line 99
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 99, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 99, $this->source); })()) + 2), [], "array", false, false, false, 99));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 100
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 100) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)))) {
                                // line 101
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 101), "html", null, true);
                                echo " points
                                        ";
                                // line 102
                                $context["find"] = true;
                                // line 103
                                echo "                                    ";
                            }
                            // line 104
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 105, $this->source); })()), false)) {
                            // line 106
                            echo "                                    0 point
                                ";
                        }
                        // line 108
                        echo "                            </div>
                        ";
                    } else {
                        // line 110
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 111
                        $context["find"] = false;
                        // line 112
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 112, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 112, $this->source); })()) + 3), [], "array", false, false, false, 112));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 113
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 113) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 113), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)))) {
                                // line 114
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 114), "html", null, true);
                                echo " points
                                        ";
                                // line 115
                                $context["find"] = true;
                                // line 116
                                echo "                                    ";
                            }
                            // line 117
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 118, $this->source); })()), false)) {
                            // line 119
                            echo "                                    0 point
                                ";
                        }
                        // line 121
                        echo "                            </div>
                        ";
                    }
                    // line 123
                    echo "
                        ";
                    // line 124
                    if (-1 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 124, $this->source); })()) + 3), 15)) {
                        // line 125
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 126
                        $context["find"] = false;
                        // line 127
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 127, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 127, $this->source); })()) + 3), [], "array", false, false, false, 127));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 128
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 128) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)))) {
                                // line 129
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 129), "html", null, true);
                                echo " points
                                        ";
                                // line 130
                                $context["find"] = true;
                                // line 131
                                echo "                                    ";
                            }
                            // line 132
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 133, $this->source); })()), false)) {
                            // line 134
                            echo "                                    0 point
                                ";
                        }
                        // line 136
                        echo "                            </div>
                        ";
                    } else {
                        // line 138
                        echo "                            <div class=\"col-3\">
                                ";
                        // line 139
                        $context["find"] = false;
                        // line 140
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 140, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()) + 4), [], "array", false, false, false, 140));
                        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                            // line 141
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", true, true, false, 141) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "alliance_id", [], "any", false, false, false, 141), twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)))) {
                                // line 142
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 142), "html", null, true);
                                echo " points
                                        ";
                                // line 143
                                $context["find"] = true;
                                // line 144
                                echo "                                    ";
                            }
                            // line 145
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 146
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 146, $this->source); })()), false)) {
                            // line 147
                            echo "                                    0 point
                                ";
                        }
                        // line 149
                        echo "                            </div>
                        ";
                    }
                    // line 151
                    echo "                    </div>
                    <div class=\"row\">
                ";
                }
                // line 154
                echo "                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/lands/" . twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 156)) . ".jpg")), "html", null, true);
                echo "\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            ";
                // line 158
                if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 158, $this->source); })()), 15)) {
                    // line 159
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 159, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 159, $this->source); })()), [], "array", false, false, false, 159));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 160
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 160) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 160), 0))) {
                            // line 161
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 161), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 161), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 162
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 162), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 164
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    echo "                            ";
                } else {
                    // line 166
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 166, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 166, $this->source); })()) + 1), [], "array", false, false, false, 166));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 167
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 167) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 167), 0))) {
                            // line 168
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 168), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 168), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 169
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 169), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 171
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "                            ";
                }
                // line 173
                echo "                        </p>
                    </div>
                </div>
                ";
                // line 176
                if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 176, $this->source); })()) % 4), 0)) {
                    // line 177
                    echo "                    </div>
                ";
                }
                // line 179
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 179, $this->source); })()) + 1);
                // line 180
                echo "            ";
            }
            // line 181
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
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
        return array (  578 => 182,  572 => 181,  569 => 180,  566 => 179,  562 => 177,  560 => 176,  555 => 173,  552 => 172,  546 => 171,  541 => 169,  534 => 168,  531 => 167,  526 => 166,  523 => 165,  517 => 164,  512 => 162,  505 => 161,  502 => 160,  497 => 159,  495 => 158,  490 => 156,  486 => 154,  481 => 151,  477 => 149,  473 => 147,  470 => 146,  464 => 145,  461 => 144,  459 => 143,  454 => 142,  451 => 141,  446 => 140,  444 => 139,  441 => 138,  437 => 136,  433 => 134,  430 => 133,  424 => 132,  421 => 131,  419 => 130,  414 => 129,  411 => 128,  406 => 127,  404 => 126,  401 => 125,  399 => 124,  396 => 123,  392 => 121,  388 => 119,  385 => 118,  379 => 117,  376 => 116,  374 => 115,  369 => 114,  366 => 113,  361 => 112,  359 => 111,  356 => 110,  352 => 108,  348 => 106,  345 => 105,  339 => 104,  336 => 103,  334 => 102,  329 => 101,  326 => 100,  321 => 99,  319 => 98,  316 => 97,  314 => 96,  311 => 95,  307 => 93,  303 => 91,  300 => 90,  294 => 89,  291 => 88,  289 => 87,  284 => 86,  281 => 85,  276 => 84,  274 => 83,  271 => 82,  267 => 80,  263 => 78,  260 => 77,  254 => 76,  251 => 75,  249 => 74,  244 => 73,  241 => 72,  236 => 71,  234 => 70,  231 => 69,  229 => 68,  226 => 67,  222 => 65,  218 => 63,  215 => 62,  209 => 61,  206 => 60,  204 => 59,  199 => 58,  196 => 57,  191 => 56,  189 => 55,  186 => 54,  182 => 52,  178 => 50,  176 => 49,  173 => 48,  167 => 47,  164 => 46,  162 => 45,  157 => 44,  154 => 43,  149 => 42,  147 => 41,  144 => 40,  142 => 39,  139 => 38,  136 => 37,  133 => 36,  128 => 35,  126 => 34,  117 => 27,  111 => 26,  106 => 24,  99 => 23,  96 => 22,  92 => 21,  87 => 19,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  65 => 10,  63 => 9,  58 => 8,  55 => 7,  50 => 6,  48 => 5,  43 => 2,);
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
