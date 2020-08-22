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

/* authenticated/include/alliance/log.html.twig */
class __TwigTemplate_6f42b7a2e99afe7ad0c4dba1a5b7209eeb8fbf1745f2fd96d8216d5ed6af845e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/log.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/log.html.twig"));

        // line 1
        echo "<div id=\"log\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Livre de Bord
        </div>
        <div class=\"block-content font-weight-bold\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 8
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "getLogDate", [], "any", false, false, false, 8), "d/m/"), "html", null, true);
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "getLogDate", [], "any", false, false, false, 8), "Y") - 315), "html", null, true);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["log"], "content", [], "any", false, false, false, 8);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/alliance/log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"log\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Livre de Bord
        </div>
        <div class=\"block-content font-weight-bold\">
            {% for log in logs %}
                <p>{{ log.getLogDate|date('d/m/') }}{{ log.getLogDate|date('Y') - 315 }} - {{ log.content|raw }}</p>
            {% endfor %}
        </div>
    </div>
</div>", "authenticated/include/alliance/log.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\include\\alliance\\log.html.twig");
    }
}
