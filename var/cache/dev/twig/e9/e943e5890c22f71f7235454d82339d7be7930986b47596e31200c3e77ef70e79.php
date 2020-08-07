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
            if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 5) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 5)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 5), 15))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 6), "html", null, true);
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
        $context["r"] = twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 19, $this->source); })()), 15, [], "array", false, false, false, 19);
        // line 20
        echo "                    ";
        if ((((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 20, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 20, $this->source); })()), "points", [], "array", false, false, false, 20)) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 20, $this->source); })()), "points", [], "array", false, false, false, 20), 0))) {
            // line 21
            echo "                        <span class=\"font-weight-bold alliance-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 21, $this->source); })()), "color", [], "array", false, false, false, 21), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 21, $this->source); })()), "tag", [], "array", false, false, false, 21), "html", null, true);
            echo "]</span><br>
                        <span class=\"green-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 22, $this->source); })()), "points", [], "array", false, false, false, 22), "html", null, true);
            echo " pts</span><br>
                    ";
        }
        // line 24
        echo "                </p>
            </div>
        </div>
        <div class=\"col-9 lands-description\">
            Le contrôle d'une ou plusieurs régions par une alliance permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Île aux Forbans et 4% pour les autres régions conquises. A la fin de la journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire...
        </div>
    </div>
        ";
        // line 31
        $context["i"] = 1;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lands"]) || array_key_exists("lands", $context) ? $context["lands"] : (function () { throw new RuntimeError('Variable "lands" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 33
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 33), 15)) {
                // line 34
                echo "                ";
                if (0 === twig_compare((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 34, $this->source); })()) - 1) % 4), 0)) {
                    // line 35
                    echo "                    <div class=\"points-row row\">
                        <div class=\"col-3\">
                            ";
                    // line 37
                    $context["find"] = false;
                    // line 38
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 38, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 39
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 39) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 39)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 39), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })())))) {
                            // line 40
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 40), "html", null, true);
                            echo " points
                                    ";
                            // line 41
                            $context["find"] = true;
                            // line 42
                            echo "                                ";
                        }
                        // line 43
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 44, $this->source); })()), false)) {
                        // line 45
                        echo "                                0 point
                            ";
                    }
                    // line 47
                    echo "                        </div>
                        <div class=\"col-3\">
                            ";
                    // line 49
                    $context["find"] = false;
                    // line 50
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 50, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 51
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 51) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 51)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 51), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 51, $this->source); })()) + 1)))) {
                            // line 52
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 52), "html", null, true);
                            echo " points
                                    ";
                            // line 53
                            $context["find"] = true;
                            // line 54
                            echo "                                ";
                        }
                        // line 55
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 56, $this->source); })()), false)) {
                        // line 57
                        echo "                                0 point
                            ";
                    }
                    // line 59
                    echo "                        </div>
                        <div class=\"col-3\">
                            ";
                    // line 61
                    $context["find"] = false;
                    // line 62
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 62, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                        // line 63
                        echo "                                ";
                        if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 63) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 63)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 63), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 63, $this->source); })()) + 2)))) {
                            // line 64
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 64), "html", null, true);
                            echo " points
                                    ";
                            // line 65
                            $context["find"] = true;
                            // line 66
                            echo "                                ";
                        }
                        // line 67
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "                            ";
                    if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 68, $this->source); })()), false)) {
                        // line 69
                        echo "                                ";
                        $context["find"] = false;
                        // line 70
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 70, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
                            // line 71
                            echo "                                    ";
                            if (((twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 71) && twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 71)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["land"], "land_id", [], "array", false, false, false, 71), ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 71, $this->source); })()) + 3)))) {
                                // line 72
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["land"], "points", [], "array", false, false, false, 72), "html", null, true);
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "                                ";
                        if (0 === twig_compare((isset($context["find"]) || array_key_exists("find", $context) ? $context["find"] : (function () { throw new RuntimeError('Variable "find" does not exist.', 76, $this->source); })()), false)) {
                            // line 77
                            echo "                                    0 point
                                ";
                        }
                        // line 79
                        echo "                            ";
                    }
                    // line 80
                    echo "                        </div>
                        <div class=\"col-3\">
                            0 point
                        </div>
                    </div>
                    <div class=\"row\">
                ";
                }
                // line 87
                echo "                <div class=\"col-3 lands-block\">
                    <div class=\"land d-flex\">
                        <img src=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/lands/" . twig_get_attribute($this->env, $this->source, $context["land"], "id", [], "any", false, false, false, 89)) . ".jpg")), "html", null, true);
                echo "\" alt=\"land\">
                        <p class=\"font-weight-bold p-1\">
                            ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 91, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 91, $this->source); })()), [], "array", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                    // line 92
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 92) && 1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 92), 0))) {
                        // line 93
                        echo "                                    <span class=\"font-weight-bold alliance-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "color", [], "array", false, false, false, 93), "html", null, true);
                        echo "\">[";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "tag", [], "array", false, false, false, 93), "html", null, true);
                        echo "]</span><br>
                                    <span class=\"green-text\">";
                        // line 94
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "points", [], "array", false, false, false, 94), "html", null, true);
                        echo " pts</span><br>
                                ";
                    }
                    // line 96
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                        </p>
                    </div>
                </div>
                ";
                // line 100
                if (0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 100, $this->source); })()) % 4), 0)) {
                    // line 101
                    echo "                    </div>
                ";
                }
                // line 103
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 103, $this->source); })()) + 1);
                // line 104
                echo "            ";
            }
            // line 105
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        return array (  340 => 106,  334 => 105,  331 => 104,  328 => 103,  324 => 101,  322 => 100,  317 => 97,  311 => 96,  306 => 94,  299 => 93,  296 => 92,  292 => 91,  287 => 89,  283 => 87,  274 => 80,  271 => 79,  267 => 77,  264 => 76,  258 => 75,  255 => 74,  253 => 73,  248 => 72,  245 => 71,  240 => 70,  237 => 69,  234 => 68,  228 => 67,  225 => 66,  223 => 65,  218 => 64,  215 => 63,  210 => 62,  208 => 61,  204 => 59,  200 => 57,  197 => 56,  191 => 55,  188 => 54,  186 => 53,  181 => 52,  178 => 51,  173 => 50,  171 => 49,  167 => 47,  163 => 45,  160 => 44,  154 => 43,  151 => 42,  149 => 41,  144 => 40,  141 => 39,  136 => 38,  134 => 37,  130 => 35,  127 => 34,  124 => 33,  119 => 32,  117 => 31,  108 => 24,  103 => 22,  96 => 21,  93 => 20,  91 => 19,  86 => 17,  80 => 13,  76 => 11,  73 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"lands\" class=\"tab-block\">
    <div class=\"points-row\">
        {% set find = false %}
        {% for land in points %}
            {% if land['land_id'] and land['points'] and land['land_id'] == 15 %}
                {{ land['points'] }} points
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
                    {% set r = ranking[15] %}
                    {% if r and r['points'] and r['points'] > 0 %}
                        <span class=\"font-weight-bold alliance-{{ r['color'] }}\">[{{ r['tag'] }}]</span><br>
                        <span class=\"green-text\">{{ r['points'] }} pts</span><br>
                    {% endif %}
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
                                {% if land['land_id'] and land['points'] and land['land_id'] == i %}
                                    {{ land['points'] }} points
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
                                {% if land['land_id'] and land['points'] and land['land_id'] == (i + 1) %}
                                    {{ land['points'] }} points
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
                                {% if land['land_id'] and land['points'] and land['land_id'] == (i + 2) %}
                                    {{ land['points'] }} points
                                    {% set find = true %}
                                {% endif %}
                            {% endfor %}
                            {% if find == false %}
                                {% set find = false %}
                                {% for land in points %}
                                    {% if land['land_id'] and land['points'] and land['land_id'] == (i + 3) %}
                                        {{ land['points'] }} points
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
                            {% for rank in ranking[i] %}
                                {% if rank['points'] and rank['points'] > 0 %}
                                    <span class=\"font-weight-bold alliance-{{ rank['color'] }}\">[{{ rank['tag'] }}]</span><br>
                                    <span class=\"green-text\">{{ rank['points'] }} pts</span><br>
                                {% endif %}
                            {% endfor %}
                        </p>
                    </div>
                </div>
                {% if i % 4 == 0 %}
                    </div>
                {% endif %}
                {% set i = i + 1 %}
            {% endif %}
        {% endfor %}
</div>", "authenticated/include/alliance/lands.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\include\\alliance\\lands.html.twig");
    }
}
