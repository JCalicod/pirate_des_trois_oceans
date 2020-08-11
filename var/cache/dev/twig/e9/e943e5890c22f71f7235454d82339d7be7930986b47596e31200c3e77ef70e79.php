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

        // line 1
        echo "<div id=\"lands\" class=\"tab-block\">
    <div class=\"points-row\">
        ";
        // line 3
        $context["find"] = false;
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 5
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", true, true, false, 5) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 5)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 5), 15))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 6), "html", null, true);
                echo " points
                ";
                // line 7
                $context["find"] = true;
                // line 8
                echo "            ";
            }
            // line 9
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 10, $this->source); })()), false)) {
            // line 11
            echo "            0 point
        ";
        }
        // line 13
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-3 lands-block\">
            <div class=\"land d-flex\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lands/15.jpg"), "html", null, true);
        echo "\" alt=\"land\">
                <p class=\"font-weight-bold p-1\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 19, $this->source); })()), 15, [], "array", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 20
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", true, true, false, 20) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 20), 0))) {
                // line 21
                echo "                            <span class=\"font-weight-bold alliance-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "color", [], "any", false, false, false, 21), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "tag", [], "any", false, false, false, 21), "html", null, true);
                echo "]</span><br>
                            <span class=\"green-text\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "points", [], "any", false, false, false, 22), "html", null, true);
                echo " pts</span><br>
                        ";
            }
            // line 24
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </p>
            </div>
        </div>
        <div class=\"col-9 lands-description\">
            Le contrôle d'une ou plusieurs régions par une alliance permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Île aux Forbans et 4% pour les autres régions conquises. A la fin de la journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire...
        </div>
    </div>
        ";
        // line 32
        $context["i"] = 1;
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 34
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 34), 15)) {
                // line 35
                echo "                ";
                if (0 === twig_compare((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 35, $this->source); })()) - 1) % 4), 0)) {
                    // line 36
                    echo "                    <div class=\"points-row row\">
                        <div class=\"col-3\">
                            ";
                    // line 38
                    $context["find"] = false;
                    // line 39
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 39, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 40
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 40) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 40)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 40), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 40, $this->source); })())))) {
                            // line 41
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 41), "html", null, true);
                            echo " points
                                    ";
                            // line 42
                            $context["find"] = true;
                            // line 43
                            echo "                                ";
                        }
                        // line 44
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 45, $this->source); })()), false)) {
                        // line 46
                        echo "                                0 point
                            ";
                    }
                    // line 48
                    echo "                        </div>
                        <div class=\"col-3\">
                            ";
                    // line 50
                    $context["find"] = false;
                    // line 51
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 51, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 52
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", true, true, false, 52) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 52)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 52), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 52, $this->source); })()) + 1)))) {
                            // line 53
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 53), "html", null, true);
                            echo " points
                                    ";
                            // line 54
                            $context["find"] = true;
                            // line 55
                            echo "                                ";
                        }
                        // line 56
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 57, $this->source); })()), false)) {
                        // line 58
                        echo "                                0 point
                            ";
                    }
                    // line 60
                    echo "                        </div>
                        <div class=\"col-3\">
                            ";
                    // line 62
                    $context["find"] = false;
                    // line 63
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 63, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 64
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", true, true, false, 64) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 64)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 64), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 64, $this->source); })()) + 2)))) {
                            // line 65
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 65), "html", null, true);
                            echo " points
                                    ";
                            // line 66
                            $context["find"] = true;
                            // line 67
                            echo "                                ";
                        }
                        // line 68
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 69, $this->source); })()), false)) {
                        // line 70
                        echo "                                ";
                        $context["find"] = false;
                        // line 71
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 71, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                            // line 72
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", true, true, false, 72) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", true, true, false, 72)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "any", false, false, false, 72), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 72, $this->source); })()) + 3)))) {
                                // line 73
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "any", false, false, false, 73), "html", null, true);
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 77
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 77, $this->source); })()), false)) {
                            // line 78
                            echo "                                    0 point
                                ";
                        }
                        // line 80
                        echo "                            ";
                    }
                    // line 81
                    echo "                        </div>
                        <div class=\"col-3\">
                            0 point
                        </div>
                    </div>
                    <div class=\"row\">
                ";
                }
                // line 88
                echo "                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/lands/" . twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 90)) . ".jpg")), "html", null, true);
                echo "\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            ";
                // line 92
                if (-1 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 92, $this->source); })()), 15)) {
                    // line 93
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 93, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 93, $this->source); })()), [], "array", false, false, false, 93));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 94
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 94) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 94), 0))) {
                            // line 95
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 95), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 95), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 96
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 96), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 98
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "                            ";
                } else {
                    // line 100
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 100, $this->source); })()), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 100, $this->source); })()) + 1), [], "array", false, false, false, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                        // line 101
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 101) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "any", false, false, false, 101), 0))) {
                            // line 102
                            echo "                                        <span class=\"font-weight-bold alliance-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 102), "html", null, true);
                            echo "\">[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 102), "html", null, true);
                            echo "]</span><br>
                                        <span class=\"green-text\">";
                            // line 103
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 103), "html", null, true);
                            echo " pts</span><br>
                                    ";
                        }
                        // line 105
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                            ";
                }
                // line 107
                echo "                        </p>
                    </div>
                </div>
                ";
                // line 110
                if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 110, $this->source); })()) % 4), 0)) {
                    // line 111
                    echo "                    </div>
                ";
                }
                // line 113
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 113, $this->source); })()) + 1);
                // line 114
                echo "            ";
            }
            // line 115
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
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
        return array (  383 => 116,  377 => 115,  374 => 114,  371 => 113,  367 => 111,  365 => 110,  360 => 107,  357 => 106,  351 => 105,  346 => 103,  339 => 102,  336 => 101,  331 => 100,  328 => 99,  322 => 98,  317 => 96,  310 => 95,  307 => 94,  302 => 93,  300 => 92,  295 => 90,  291 => 88,  282 => 81,  279 => 80,  275 => 78,  272 => 77,  266 => 76,  263 => 75,  261 => 74,  256 => 73,  253 => 72,  248 => 71,  245 => 70,  242 => 69,  236 => 68,  233 => 67,  231 => 66,  226 => 65,  223 => 64,  218 => 63,  216 => 62,  212 => 60,  208 => 58,  205 => 57,  199 => 56,  196 => 55,  194 => 54,  189 => 53,  186 => 52,  181 => 51,  179 => 50,  175 => 48,  171 => 46,  168 => 45,  162 => 44,  159 => 43,  157 => 42,  152 => 41,  149 => 40,  144 => 39,  142 => 38,  138 => 36,  135 => 35,  132 => 34,  127 => 33,  125 => 32,  116 => 25,  110 => 24,  105 => 22,  98 => 21,  95 => 20,  91 => 19,  86 => 17,  80 => 13,  76 => 11,  73 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"lands\" class=\"tab-block\">
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
                        <div class=\"col-3\">
                            {% set find = false %}
                            {% for land in points %}
                                {% if land.land_id and land.points is defined and land.land_id == i %}
                                    {{ land.points }} points
                                    {% set find = true %}
                                {% endif %}
                            {% endfor %}
                            {% if find == false %}
                                0 point
                            {% endif %}
                        </div>
                        <div class=\"col-3\">
                            {% set find = false %}
                            {% for land in points %}
                                {% if land.land_id is defined and land.points is defined and land.land_id == (i + 1) %}
                                    {{ land.points }} points
                                    {% set find = true %}
                                {% endif %}
                            {% endfor %}
                            {% if find == false %}
                                0 point
                            {% endif %}
                        </div>
                        <div class=\"col-3\">
                            {% set find = false %}
                            {% for land in points %}
                                {% if land.land_id is defined and land.points is defined and land.land_id == (i + 2) %}
                                    {{ land.points }} points
                                    {% set find = true %}
                                {% endif %}
                            {% endfor %}
                            {% if find == false %}
                                {% set find = false %}
                                {% for land in points %}
                                    {% if land.land_id is defined and land.points is defined and land.land_id == (i + 3) %}
                                        {{ land.points }} points
                                        {% set find = true %}
                                    {% endif %}
                                {% endfor %}
                                {% if find == false %}
                                    0 point
                                {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"col-3\">
                            0 point
                        </div>
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
