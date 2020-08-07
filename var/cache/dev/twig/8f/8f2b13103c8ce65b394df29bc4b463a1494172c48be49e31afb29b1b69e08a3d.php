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

/* authenticated/include/tavern-message.html.twig */
class __TwigTemplate_e50d7b144bfe0cf8baf2a46bfeffd1c99a60ffa535fe505064f3cb2b012532cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/tavern-message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/tavern-message.html.twig"));

        // line 1
        echo "<div class=\"message message-1 d-flex\">
    <div class=\"left-part\">
        <p class=\"author m-0\">";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 3, $this->source); })()), "owner", [], "any", false, false, false, 3), "isActiveNow", [], "any", false, false, false, 3)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
            echo "\" alt=\"etat\" class=\"online-state\">";
        } else {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
            echo "\" alt=\"etat\" class=\"online-state\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 3, $this->source); })()), "owner", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
        Le ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 4, $this->source); })()), "getMomentDate", [], "any", false, false, false, 4), "d/m/"), "html", null, true);
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 4, $this->source); })()), "getMomentDate", [], "any", false, false, false, 4), "Y") - 315), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 4, $this->source); })()), "getMomentDate", [], "any", false, false, false, 4), "H"), "html", null, true);
        echo "h";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 4, $this->source); })()), "getMomentDate", [], "any", false, false, false, 4), "i"), "html", null, true);
        echo "
    </div>
    <div class=\"right-part d-flex\">
        <p class=\"m-auto\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tavern"]) || array_key_exists("tavern", $context) ? $context["tavern"] : (function () { throw new RuntimeError('Variable "tavern" does not exist.', 7, $this->source); })()), "message", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/tavern-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  61 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"message message-1 d-flex\">
    <div class=\"left-part\">
        <p class=\"author m-0\">{% if tavern.owner.isActiveNow %}<img src=\"{{ asset('img/icons/online.png') }}\" alt=\"etat\" class=\"online-state\">{% else %}<img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"etat\" class=\"online-state\">{% endif %} {{ tavern.owner.username }}</p>
        Le {{ tavern.getMomentDate|date('d/m/') }}{{ tavern.getMomentDate|date('Y') - 315 }} à {{ tavern.getMomentDate|date('H') }}h{{ tavern.getMomentDate|date('i') }}
    </div>
    <div class=\"right-part d-flex\">
        <p class=\"m-auto\">{{ tavern.message }}</p>
    </div>
</div>", "authenticated/include/tavern-message.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\include\\tavern-message.html.twig");
    }
}
