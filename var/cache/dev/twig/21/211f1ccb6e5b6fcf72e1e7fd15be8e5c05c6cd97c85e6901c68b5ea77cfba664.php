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

/* authenticated/war_report.html.twig */
class __TwigTemplate_5669233ee18b7da28d072299c5beff3de6c91be91ab87fca88a87c00109fcfd1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/war_report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/war_report.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/war_report.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/war_report.css"), "html", null, true);
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
                    Rapport de Guerre
                </div>
                <div class=\"card-body card-back1\">
                    <table class=\"war-report-table\">
                        <tr>
                            <td>
                                <b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 27, $this->source); })()), "save", [], "array", false, false, false, 27), 0, [], "array", false, false, false, 27), "owner", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</b>
                                <span class=\"float-right\">
                                    ";
        // line 29
        if ((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    ";
        } else {
            // line 32
            echo "                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    ";
        }
        // line 34
        echo "                                </span>
                            </td>
                            <td>
                                <b>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 37, $this->source); })()), "save", [], "array", false, false, false, 37), 0, [], "array", false, false, false, 37), "owner", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
        echo "</b>
                                <span class=\"float-right\">
                                    ";
        // line 39
        if (0 === twig_compare((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 39, $this->source); })()), false)) {
            // line 40
            echo "                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    ";
        } else {
            // line 42
            echo "                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    ";
        }
        // line 44
        echo "                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 49, $this->source); })()), "fleet", [], "array", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 50
            echo "                                    <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</b>
                                    <span class=\"float-right\">Niveau <b>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 51), "html", null, true);
            echo "</b></span><br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </td>
                            <td>
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 55, $this->source); })()), "fleet", [], "array", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 56
            echo "                                    <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</b>
                                    <span class=\"float-right\">Niveau <b>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ship"], "level", [], "any", false, false, false, 57), "html", null, true);
            echo "</b></span><br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>

                                ";
        // line 64
        $context["max"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 64, $this->source); })()), "fleet", [], "array", false, false, false, 64));
        // line 65
        echo "
                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 66, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
            echo "\" class=\"helm-logo\" alt=\"helm\"> <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 67, $this->source); })()), "fleet", [], "array", false, false, false, 67), $context["i"], [], "array", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</b><br>
                                    <div class=\"text-right\">
                                        Etat initial : <b>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 69, $this->source); })()), "save", [], "array", false, false, false, 69), $context["i"], [], "array", false, false, false, 69), "structure", [], "any", false, false, false, 69), "html", null, true);
            echo "/100</b><br>
                                        Etat final : <b>";
            // line 70
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 70, $this->source); })()), "lost", [], "array", false, false, false, 70), $context["i"], [], "array", false, false, false, 70), "structure", [], "array", false, false, false, 70), 0)) {
                echo "<span class=\"red-text\">";
            }
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 70, $this->source); })()), "save", [], "array", false, false, false, 70), $context["i"], [], "array", false, false, false, 70), "structure", [], "any", false, false, false, 70) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 70, $this->source); })()), "lost", [], "array", false, false, false, 70), $context["i"], [], "array", false, false, false, 70), "structure", [], "array", false, false, false, 70)), "html", null, true);
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 70, $this->source); })()), "lost", [], "array", false, false, false, 70), $context["i"], [], "array", false, false, false, 70), "structure", [], "array", false, false, false, 70), 0)) {
                echo "</span>";
            }
            echo "/100</b><br>
                                        ";
            // line 71
            if (0 <= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 71, $this->source); })()), "lost", [], "array", false, false, false, 71), $context["i"], [], "array", false, false, false, 71), "structure", [], "array", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 71, $this->source); })()), "save", [], "array", false, false, false, 71), $context["i"], [], "array", false, false, false, 71), "structure", [], "any", false, false, false, 71))) {
                // line 72
                echo "                                            <b class=\"red-text\">Navire coulé</b><br>
                                        ";
            } else {
                // line 74
                echo "                                            <b class=\"green-text\">+ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 74, $this->source); })()), "gain_xp", [], "array", false, false, false, 74), "html", null, true);
                echo " d'Exp</b><br>
                                        ";
            }
            // line 76
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 76, $this->source); })()), "lost", [], "array", false, false, false, 76), $context["i"], [], "array", false, false, false, 76), "seaman", [], "array", false, false, false, 76), 0)) {
                // line 77
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 77, $this->source); })()), "lost", [], "array", false, false, false, 77), $context["i"], [], "array", false, false, false, 77), "seaman", [], "array", false, false, false, 77), "html", null, true);
                echo "</span> Matelots tués</b><br>
                                        ";
            }
            // line 79
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 79, $this->source); })()), "lost", [], "array", false, false, false, 79), $context["i"], [], "array", false, false, false, 79), "explorer", [], "array", false, false, false, 79), 0)) {
                // line 80
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 80, $this->source); })()), "lost", [], "array", false, false, false, 80), $context["i"], [], "array", false, false, false, 80), "explorer", [], "array", false, false, false, 80), "html", null, true);
                echo "</span> Explorateurs tués</b><br>
                                        ";
            }
            // line 82
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 82, $this->source); })()), "lost", [], "array", false, false, false, 82), $context["i"], [], "array", false, false, false, 82), "gunner", [], "array", false, false, false, 82), 0)) {
                // line 83
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 83, $this->source); })()), "lost", [], "array", false, false, false, 83), $context["i"], [], "array", false, false, false, 83), "gunner", [], "array", false, false, false, 83), "html", null, true);
                echo "</span> Canonniers tués</b><br>
                                        ";
            }
            // line 85
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 85, $this->source); })()), "lost", [], "array", false, false, false, 85), $context["i"], [], "array", false, false, false, 85), "cook", [], "array", false, false, false, 85), 0)) {
                // line 86
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 86, $this->source); })()), "lost", [], "array", false, false, false, 86), $context["i"], [], "array", false, false, false, 86), "cook", [], "array", false, false, false, 86), "html", null, true);
                echo "</span> Cuisiniers tués</b><br>
                                        ";
            }
            // line 88
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 88, $this->source); })()), "lost", [], "array", false, false, false, 88), $context["i"], [], "array", false, false, false, 88), "carpenter", [], "array", false, false, false, 88), 0)) {
                // line 89
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 89, $this->source); })()), "lost", [], "array", false, false, false, 89), $context["i"], [], "array", false, false, false, 89), "carpenter", [], "array", false, false, false, 89), "html", null, true);
                echo "</span> Charpentiers tués</b><br>
                                        ";
            }
            // line 91
            echo "                                        ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 91, $this->source); })()), "lost", [], "array", false, false, false, 91), $context["i"], [], "array", false, false, false, 91), "surgeon", [], "array", false, false, false, 91), 0)) {
                // line 92
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attacker"]) || array_key_exists("attacker", $context) ? $context["attacker"] : (function () { throw new RuntimeError('Variable "attacker" does not exist.', 92, $this->source); })()), "lost", [], "array", false, false, false, 92), $context["i"], [], "array", false, false, false, 92), "surgeon", [], "array", false, false, false, 92), "html", null, true);
                echo "</span> Chirurgiens tués</b><br>
                                        ";
            }
            // line 94
            echo "                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                ";
        if ((isset($context["victory"]) || array_key_exists("victory", $context) ? $context["victory"] : (function () { throw new RuntimeError('Variable "victory" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "                                    <br><br>
                                    <div class=\"text-right\">
                                        Butin de Guerre<br>
                                        <b class=\"gold-dark\">";
            // line 100
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theft"]) || array_key_exists("theft", $context) ? $context["theft"] : (function () { throw new RuntimeError('Variable "theft" does not exist.', 100, $this->source); })()), "gold", [], "array", false, false, false, 100), 0, ".", " "), "html", null, true);
            echo "</b> Pièces d'Or<br>
                                    </div>
                                ";
        }
        // line 103
        echo "                            </td>
                            <td>
                                ";
        // line 105
        $context["max"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 105, $this->source); })()), "fleet", [], "array", false, false, false, 105));
        // line 106
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 106, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 107
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/helm.png"), "html", null, true);
            echo "\" class=\"helm-logo\" alt=\"helm\"> <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 107, $this->source); })()), "fleet", [], "array", false, false, false, 107), $context["i"], [], "array", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo "</b><br>
                                    <div class=\"text-right\">
                                        Etat initial : <b>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 109, $this->source); })()), "save", [], "array", false, false, false, 109), $context["i"], [], "array", false, false, false, 109), "structure", [], "any", false, false, false, 109), "html", null, true);
            echo "/100</b><br>
                                        Etat final : <b>";
            // line 110
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 110, $this->source); })()), "save", [], "array", false, false, false, 110), $context["i"], [], "array", false, false, false, 110), "structure", [], "any", false, false, false, 110), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 110, $this->source); })()), "fleet", [], "array", false, false, false, 110), $context["i"], [], "array", false, false, false, 110), "structure", [], "any", false, false, false, 110))) {
                echo "<span class=\"red-text\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 110, $this->source); })()), "fleet", [], "array", false, false, false, 110), $context["i"], [], "array", false, false, false, 110), "structure", [], "any", false, false, false, 110), "html", null, true);
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 110, $this->source); })()), "save", [], "array", false, false, false, 110), $context["i"], [], "array", false, false, false, 110), "structure", [], "any", false, false, false, 110), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 110, $this->source); })()), "fleet", [], "array", false, false, false, 110), $context["i"], [], "array", false, false, false, 110), "structure", [], "any", false, false, false, 110))) {
                echo "</span>";
            }
            echo "/100</b><br>
                                        ";
            // line 111
            if (0 >= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 111, $this->source); })()), "fleet", [], "array", false, false, false, 111), $context["i"], [], "array", false, false, false, 111), "structure", [], "any", false, false, false, 111), 0)) {
                // line 112
                echo "                                            <b class=\"red-text\">Navire coulé</b><br>
                                        ";
            }
            // line 114
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 114, $this->source); })()), "fleet", [], "array", false, false, false, 114), $context["i"], [], "array", false, false, false, 114), "seaman", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 114, $this->source); })()), "save", [], "array", false, false, false, 114), $context["i"], [], "array", false, false, false, 114), "seaman", [], "any", false, false, false, 114))) {
                // line 115
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 115, $this->source); })()), "save", [], "array", false, false, false, 115), $context["i"], [], "array", false, false, false, 115), "seaman", [], "any", false, false, false, 115) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 115, $this->source); })()), "fleet", [], "array", false, false, false, 115), $context["i"], [], "array", false, false, false, 115), "seaman", [], "any", false, false, false, 115)), "html", null, true);
                echo "</span> Matelots tués</b><br>
                                        ";
            }
            // line 117
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 117, $this->source); })()), "fleet", [], "array", false, false, false, 117), $context["i"], [], "array", false, false, false, 117), "explorer", [], "any", false, false, false, 117), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 117, $this->source); })()), "save", [], "array", false, false, false, 117), $context["i"], [], "array", false, false, false, 117), "explorer", [], "any", false, false, false, 117))) {
                // line 118
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 118, $this->source); })()), "save", [], "array", false, false, false, 118), $context["i"], [], "array", false, false, false, 118), "explorer", [], "any", false, false, false, 118) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 118, $this->source); })()), "fleet", [], "array", false, false, false, 118), $context["i"], [], "array", false, false, false, 118), "explorer", [], "any", false, false, false, 118)), "html", null, true);
                echo "</span> Explorateurs tués</b><br>
                                        ";
            }
            // line 120
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 120, $this->source); })()), "fleet", [], "array", false, false, false, 120), $context["i"], [], "array", false, false, false, 120), "gunner", [], "any", false, false, false, 120), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 120, $this->source); })()), "save", [], "array", false, false, false, 120), $context["i"], [], "array", false, false, false, 120), "gunner", [], "any", false, false, false, 120))) {
                // line 121
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 121, $this->source); })()), "save", [], "array", false, false, false, 121), $context["i"], [], "array", false, false, false, 121), "gunner", [], "any", false, false, false, 121) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 121, $this->source); })()), "fleet", [], "array", false, false, false, 121), $context["i"], [], "array", false, false, false, 121), "gunner", [], "any", false, false, false, 121)), "html", null, true);
                echo "</span> Canonniers tués</b><br>
                                        ";
            }
            // line 123
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 123, $this->source); })()), "fleet", [], "array", false, false, false, 123), $context["i"], [], "array", false, false, false, 123), "cook", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 123, $this->source); })()), "save", [], "array", false, false, false, 123), $context["i"], [], "array", false, false, false, 123), "cook", [], "any", false, false, false, 123))) {
                // line 124
                echo "                                        <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 124, $this->source); })()), "save", [], "array", false, false, false, 124), $context["i"], [], "array", false, false, false, 124), "cook", [], "any", false, false, false, 124) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 124, $this->source); })()), "fleet", [], "array", false, false, false, 124), $context["i"], [], "array", false, false, false, 124), "cook", [], "any", false, false, false, 124)), "html", null, true);
                echo "</span> Cuisiniers tués</b><br>
                                        ";
            }
            // line 126
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 126, $this->source); })()), "fleet", [], "array", false, false, false, 126), $context["i"], [], "array", false, false, false, 126), "carpenter", [], "any", false, false, false, 126), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 126, $this->source); })()), "save", [], "array", false, false, false, 126), $context["i"], [], "array", false, false, false, 126), "carpenter", [], "any", false, false, false, 126))) {
                // line 127
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 127, $this->source); })()), "save", [], "array", false, false, false, 127), $context["i"], [], "array", false, false, false, 127), "carpenter", [], "any", false, false, false, 127) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 127, $this->source); })()), "fleet", [], "array", false, false, false, 127), $context["i"], [], "array", false, false, false, 127), "carpenter", [], "any", false, false, false, 127)), "html", null, true);
                echo "</span> Charpentiers tués</b><br>
                                        ";
            }
            // line 129
            echo "                                        ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 129, $this->source); })()), "fleet", [], "array", false, false, false, 129), $context["i"], [], "array", false, false, false, 129), "surgeon", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 129, $this->source); })()), "save", [], "array", false, false, false, 129), $context["i"], [], "array", false, false, false, 129), "surgeon", [], "any", false, false, false, 129))) {
                // line 130
                echo "                                            <b><span class=\"red-text\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 130, $this->source); })()), "save", [], "array", false, false, false, 130), $context["i"], [], "array", false, false, false, 130), "surgeon", [], "any", false, false, false, 130) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defender"]) || array_key_exists("defender", $context) ? $context["defender"] : (function () { throw new RuntimeError('Variable "defender" does not exist.', 130, $this->source); })()), "fleet", [], "array", false, false, false, 130), $context["i"], [], "array", false, false, false, 130), "surgeon", [], "any", false, false, false, 130)), "html", null, true);
                echo "</span> Chirurgiens tués</b><br>
                                        ";
            }
            // line 132
            echo "                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                            </td>
                        </tr>
                    </table>
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
        return "authenticated/war_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 134,  443 => 132,  437 => 130,  434 => 129,  428 => 127,  425 => 126,  419 => 124,  416 => 123,  410 => 121,  407 => 120,  401 => 118,  398 => 117,  392 => 115,  389 => 114,  385 => 112,  383 => 111,  373 => 110,  369 => 109,  361 => 107,  356 => 106,  354 => 105,  350 => 103,  344 => 100,  339 => 97,  336 => 96,  329 => 94,  323 => 92,  320 => 91,  314 => 89,  311 => 88,  305 => 86,  302 => 85,  296 => 83,  293 => 82,  287 => 80,  284 => 79,  278 => 77,  275 => 76,  269 => 74,  265 => 72,  263 => 71,  253 => 70,  249 => 69,  241 => 67,  237 => 66,  234 => 65,  232 => 64,  225 => 59,  217 => 57,  212 => 56,  208 => 55,  204 => 53,  196 => 51,  191 => 50,  187 => 49,  180 => 44,  176 => 42,  172 => 40,  170 => 39,  165 => 37,  160 => 34,  156 => 32,  152 => 30,  150 => 29,  145 => 27,  132 => 16,  126 => 15,  111 => 12,  106 => 11,  101 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/war_report.css') }}\">
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
                    Rapport de Guerre
                </div>
                <div class=\"card-body card-back1\">
                    <table class=\"war-report-table\">
                        <tr>
                            <td>
                                <b>{{ attacker['save'][0].owner.username }}</b>
                                <span class=\"float-right\">
                                    {%  if victory %}
                                        <span class=\"green-text font-weight-bold\">VICTOIRE</span>
                                    {% else %}
                                        <span class=\"red-text font-weight-bold\">DEFAITE</span>
                                    {% endif %}
                                </span>
                            </td>
                            <td>
                                <b>{{ defender['save'][0].owner.username }}</b>
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
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "authenticated/war_report.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\war_report.html.twig");
    }
}
