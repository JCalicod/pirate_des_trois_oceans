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

/* authenticated/alliance-advert.html.twig */
class __TwigTemplate_9cba6fcaa2fcde002b85e02f947ecdc4001ea44781c93da28e8dc51a81e59239 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance-advert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/alliance-advert.html.twig"));

        // line 1
        if (((isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 1, $this->source); })()) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 1, $this->source); })()), "advert", [], "any", false, false, false, 1)), 0))) {
            // line 2
            echo "
    <div class=\"card card-advert mb-3\">
        <div class=\"card-header\">
            Annonce du Chef des <span class=\"font-weight-bold alliance-";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 5, $this->source); })()), "color", [], "any", false, false, false, 5), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 5, $this->source); })()), "abbreviation", [], "any", false, false, false, 5), "html", null, true);
            echo "]</span>
        </div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <div class=\"avatar-profile\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 10, $this->source); })()), "getLeader", [], "any", false, false, false, 10), "avatar", [], "any", false, false, false, 10)) . ".jpg")), "html", null, true);
            echo "\" alt=\"Chef\">
                </div>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 12, $this->source); })()), "advert", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/alliance-advert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  60 => 10,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if alliance and alliance.advert|length > 0 %}

    <div class=\"card card-advert mb-3\">
        <div class=\"card-header\">
            Annonce du Chef des <span class=\"font-weight-bold alliance-{{ alliance.color }}\">[{{ alliance.abbreviation }}]</span>
        </div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <div class=\"avatar-profile\">
                    <img src=\"{{ asset('img/avatars/' ~ alliance.getLeader.avatar ~ '.jpg') }}\" alt=\"Chef\">
                </div>
                <p>{{ alliance.advert }}</p>
            </div>
        </div>
    </div>

{% endif %}", "authenticated/alliance-advert.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\alliance-advert.html.twig");
    }
}
