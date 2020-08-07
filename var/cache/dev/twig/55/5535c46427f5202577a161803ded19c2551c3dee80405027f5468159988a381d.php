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

/* authenticated/include/tavern-all-messages.html.twig */
class __TwigTemplate_b4d20400593db20e0a4c9b65d6fdf1e5693a7688cd0900b081d42bcac0f0bb34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/tavern-all-messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/tavern-all-messages.html.twig"));

        // line 1
        $context["i"] = 1;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "    <div class=\"message message-";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 3, $this->source); })()), "html", null, true);
            echo " d-flex\">
        <div class=\"left-part\">
            <p class=\"author m-0\">";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "owner", [], "any", false, false, false, 5), "isActiveNow", [], "any", false, false, false, 5)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/online.png"), "html", null, true);
                echo "\" alt=\"etat\" class=\"online-state\">";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/offline.png"), "html", null, true);
                echo "\" alt=\"etat\" class=\"online-state\">";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "owner", [], "any", false, false, false, 5), "username", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>
            Le ";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 6), "d/m/"), "html", null, true);
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 6), "Y") - 315), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 6), "H"), "html", null, true);
            echo "h";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMomentDate", [], "any", false, false, false, 6), "i"), "html", null, true);
            echo "
        </div>
        <div class=\"right-part d-flex\">
            <p class=\"m-auto\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
            // line 12
            if (0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 12, $this->source); })()), 1)) {
                // line 13
                echo "        ";
                $context["i"] = 2;
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        ";
                $context["i"] = 1;
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/tavern-all-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  94 => 15,  91 => 14,  88 => 13,  86 => 12,  80 => 9,  69 => 6,  55 => 5,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set i = 1 %}
{% for message in messages %}
    <div class=\"message message-{{ i }} d-flex\">
        <div class=\"left-part\">
            <p class=\"author m-0\">{% if message.owner.isActiveNow %}<img src=\"{{ asset('img/icons/online.png') }}\" alt=\"etat\" class=\"online-state\">{% else %}<img src=\"{{ asset('img/icons/offline.png') }}\" alt=\"etat\" class=\"online-state\">{% endif %} {{ message.owner.username }}</p>
            Le {{ message.getMomentDate|date('d/m/') }}{{ message.getMomentDate|date('Y') - 315 }} à {{ message.getMomentDate|date('H') }}h{{ message.getMomentDate|date('i') }}
        </div>
        <div class=\"right-part d-flex\">
            <p class=\"m-auto\">{{ message.message }}</p>
        </div>
    </div>
    {% if i == 1 %}
        {% set i = 2 %}
    {% else %}
        {% set i = 1 %}
    {% endif %}
{% endfor %}", "authenticated/include/tavern-all-messages.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\include\\tavern-all-messages.html.twig");
    }
}
