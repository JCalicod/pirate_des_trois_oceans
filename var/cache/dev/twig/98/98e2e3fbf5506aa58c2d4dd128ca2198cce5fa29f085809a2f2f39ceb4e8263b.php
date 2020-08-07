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

/* authenticated/include/alliance/management.html.twig */
class __TwigTemplate_4fa3686ebb4b96db61e8146bf2f34314ccc09e680c7a5ac163432e823f6a7654 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/management.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/include/alliance/management.html.twig"));

        // line 1
        echo "<div id=\"management\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Gestion des Membres
        </div>
        <div class=\"block-content\">
            ";
        // line 7
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alliance"]) || array_key_exists("alliance", $context) ? $context["alliance"] : (function () { throw new RuntimeError('Variable "alliance" does not exist.', 7, $this->source); })()), "users", [], "any", false, false, false, 7)), 1)) {
            // line 8
            echo "                <div class=\"management-row d-flex justify-content-between\">
                    <div class=\"left-form\">
                        Nommer un nouveau Chef de l'Alliance
                    </div>
                    <div class=\"right-form\">
                        ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 13, $this->source); })()), "updateChief", [], "array", false, false, false, 13), 'form_start');
            echo "
                        <div class=\"d-flex\">
                            <div class=\"input-management\">
                                ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 16, $this->source); })()), "updateChief", [], "array", false, false, false, 16), "chief", [], "any", false, false, false, 16), 'widget');
            echo "
                            </div>
                            <div class=\"validate-management\">
                                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 19, $this->source); })()), "updateChief", [], "array", false, false, false, 19), "save", [], "any", false, false, false, 19), 'widget');
            echo "
                            </div>
                        </div>
                    ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 22, $this->source); })()), "updateChief", [], "array", false, false, false, 22), 'form_end');
            echo "
                    </div>
                </div>
                <div class=\"management-row d-flex justify-content-between mb-0\">
                    <div class=\"left-form\">
                        Exclure un Joueur de l'Alliance
                    </div>
                    <div class=\"right-form\">
                        ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 30, $this->source); })()), "excludeMember", [], "array", false, false, false, 30), 'form_start');
            echo "
                        <div class=\"d-flex\">
                            <div class=\"input-management\">
                                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 33, $this->source); })()), "excludeMember", [], "array", false, false, false, 33), "member", [], "any", false, false, false, 33), 'widget');
            echo "
                            </div>
                            <div class=\"validate-management\">
                                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 36, $this->source); })()), "excludeMember", [], "array", false, false, false, 36), "save", [], "any", false, false, false, 36), 'widget');
            echo "
                            </div>
                        </div>
                        ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 39, $this->source); })()), "excludeMember", [], "array", false, false, false, 39), 'form_end');
            echo "
                    </div>
                </div>
            ";
        } else {
            // line 43
            echo "                Il n'y a actuellement aucun membre sous votre commandement.
            ";
        }
        // line 45
        echo "        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Gestion de l'Alliance
        </div>
        <div class=\"block-content\">
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Présentation de l'Alliance
                </div>
                <div class=\"right-form big\">
                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 58, $this->source); })()), "updatePresentation", [], "array", false, false, false, 58), 'form_start');
        echo "
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 61, $this->source); })()), "updatePresentation", [], "array", false, false, false, 61), "description", [], "any", false, false, false, 61), 'widget');
        echo "
                        </div>
                        <div class=\"validate-management\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 64, $this->source); })()), "updatePresentation", [], "array", false, false, false, 64), "save", [], "any", false, false, false, 64), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 67, $this->source); })()), "updatePresentation", [], "array", false, false, false, 67), 'form_end');
        echo "
                </div>
            </div>
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Code du Pirate
                </div>
                <div class=\"right-form big\">
                    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 75, $this->source); })()), "updatePirateCode", [], "array", false, false, false, 75), 'form_start');
        echo "
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 78, $this->source); })()), "updatePirateCode", [], "array", false, false, false, 78), "pirate_code", [], "any", false, false, false, 78), 'widget');
        echo "
                        </div>
                        <div class=\"validate-management\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 81, $this->source); })()), "updatePirateCode", [], "array", false, false, false, 81), "save", [], "any", false, false, false, 81), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 84, $this->source); })()), "updatePirateCode", [], "array", false, false, false, 84), 'form_end');
        echo "
                </div>
            </div>
            <div class=\"management-row d-flex justify-content-between mb-0\">
                <div class=\"left-form\">
                    Faire une Annonce
                </div>
                <div class=\"right-form big\">
                    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 92, $this->source); })()), "updateAdvert", [], "array", false, false, false, 92), 'form_start');
        echo "
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 95, $this->source); })()), "updateAdvert", [], "array", false, false, false, 95), "advert", [], "any", false, false, false, 95), 'widget');
        echo "
                        </div>
                        <div class=\"validate-management\">
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 98, $this->source); })()), "updateAdvert", [], "array", false, false, false, 98), "save", [], "any", false, false, false, 98), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 101, $this->source); })()), "updateAdvert", [], "array", false, false, false, 101), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/medal.png"), "html", null, true);
        echo "\" alt=\"medal\"> Gestion du Recrutement
        </div>
        <div class=\"block-content\">
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Status et Puissance requise
                </div>
                <div class=\"right-form\">
                    ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 117, $this->source); })()), "updateStatusAndPower", [], "array", false, false, false, 117), 'form_start');
        echo "
                    <div class=\"d-flex\">
                        <div class=\"input-management recruitment\">
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 120, $this->source); })()), "updateStatusAndPower", [], "array", false, false, false, 120), "open", [], "any", false, false, false, 120), 'widget');
        echo "
                        </div>
                        <div class=\"input-management\">
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 123, $this->source); })()), "updateStatusAndPower", [], "array", false, false, false, 123), "required_power", [], "any", false, false, false, 123), 'widget');
        echo "
                        </div>
                        <div class=\"validate-management\">
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 126, $this->source); })()), "updateStatusAndPower", [], "array", false, false, false, 126), "save", [], "any", false, false, false, 126), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 129, $this->source); })()), "updateStatusAndPower", [], "array", false, false, false, 129), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/include/alliance/management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 129,  255 => 126,  249 => 123,  243 => 120,  237 => 117,  226 => 109,  215 => 101,  209 => 98,  203 => 95,  197 => 92,  186 => 84,  180 => 81,  174 => 78,  168 => 75,  157 => 67,  151 => 64,  145 => 61,  139 => 58,  128 => 50,  121 => 45,  117 => 43,  110 => 39,  104 => 36,  98 => 33,  92 => 30,  81 => 22,  75 => 19,  69 => 16,  63 => 13,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"management\" class=\"tab-block\">
    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Gestion des Membres
        </div>
        <div class=\"block-content\">
            {% if alliance.users|length > 1 %}
                <div class=\"management-row d-flex justify-content-between\">
                    <div class=\"left-form\">
                        Nommer un nouveau Chef de l'Alliance
                    </div>
                    <div class=\"right-form\">
                        {{ form_start(forms['updateChief']) }}
                        <div class=\"d-flex\">
                            <div class=\"input-management\">
                                {{ form_widget(forms['updateChief'].chief) }}
                            </div>
                            <div class=\"validate-management\">
                                {{ form_widget(forms['updateChief'].save) }}
                            </div>
                        </div>
                    {{ form_end(forms['updateChief']) }}
                    </div>
                </div>
                <div class=\"management-row d-flex justify-content-between mb-0\">
                    <div class=\"left-form\">
                        Exclure un Joueur de l'Alliance
                    </div>
                    <div class=\"right-form\">
                        {{ form_start(forms['excludeMember']) }}
                        <div class=\"d-flex\">
                            <div class=\"input-management\">
                                {{ form_widget(forms['excludeMember'].member) }}
                            </div>
                            <div class=\"validate-management\">
                                {{ form_widget(forms['excludeMember'].save) }}
                            </div>
                        </div>
                        {{ form_end(forms['excludeMember']) }}
                    </div>
                </div>
            {% else %}
                Il n'y a actuellement aucun membre sous votre commandement.
            {% endif %}
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Gestion de l'Alliance
        </div>
        <div class=\"block-content\">
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Présentation de l'Alliance
                </div>
                <div class=\"right-form big\">
                    {{ form_start(forms['updatePresentation']) }}
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            {{ form_widget(forms['updatePresentation'].description) }}
                        </div>
                        <div class=\"validate-management\">
                            {{ form_widget(forms['updatePresentation'].save) }}
                        </div>
                    </div>
                    {{ form_end(forms['updatePresentation']) }}
                </div>
            </div>
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Code du Pirate
                </div>
                <div class=\"right-form big\">
                    {{ form_start(forms['updatePirateCode']) }}
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            {{ form_widget(forms['updatePirateCode'].pirate_code) }}
                        </div>
                        <div class=\"validate-management\">
                            {{ form_widget(forms['updatePirateCode'].save) }}
                        </div>
                    </div>
                    {{ form_end(forms['updatePirateCode']) }}
                </div>
            </div>
            <div class=\"management-row d-flex justify-content-between mb-0\">
                <div class=\"left-form\">
                    Faire une Annonce
                </div>
                <div class=\"right-form big\">
                    {{ form_start(forms['updateAdvert']) }}
                    <div class=\"d-flex\">
                        <div class=\"input-management\">
                            {{ form_widget(forms['updateAdvert'].advert) }}
                        </div>
                        <div class=\"validate-management\">
                            {{ form_widget(forms['updateAdvert'].save) }}
                        </div>
                    </div>
                    {{ form_end(forms['updateAdvert']) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"block\">
        <div class=\"block-header\">
            <img src=\"{{ asset('img/icons/medal.png') }}\" alt=\"medal\"> Gestion du Recrutement
        </div>
        <div class=\"block-content\">
            <div class=\"management-row d-flex justify-content-between\">
                <div class=\"left-form\">
                    Status et Puissance requise
                </div>
                <div class=\"right-form\">
                    {{ form_start(forms['updateStatusAndPower']) }}
                    <div class=\"d-flex\">
                        <div class=\"input-management recruitment\">
                            {{ form_widget(forms['updateStatusAndPower'].open) }}
                        </div>
                        <div class=\"input-management\">
                            {{ form_widget(forms['updateStatusAndPower'].required_power) }}
                        </div>
                        <div class=\"validate-management\">
                            {{ form_widget(forms['updateStatusAndPower'].save) }}
                        </div>
                    </div>
                    {{ form_end(forms['updateStatusAndPower']) }}
                </div>
            </div>
        </div>
    </div>
</div>", "authenticated/include/alliance/management.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\include\\alliance\\management.html.twig");
    }
}
