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

/* authenticated/script/recruit.html.twig */
class __TwigTemplate_2fc44f5f84d1c0fab0172ab42682ff58576282c608c468b05e62f69b92ea3173 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/recruit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/recruit.html.twig"));

        // line 1
        echo "<script>
    \$('#enroll_crew_ships').on('input', function() {
        var shipID = \$(this).val();
        var crewData = ";
        // line 4
        echo json_encode((isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 4, $this->source); })()));
        echo ";
        var data = crewData[shipID];

        \$('#seaman-crew').html(data['seaman'].actual + ' / ' + data['seaman'].max);
        \$('#explorer-crew').html(data['explorer'].actual + ' / ' + data['explorer'].max);
        \$('#gunner-crew').html(data['gunner'].actual + ' / ' + data['gunner'].max);
        \$('#cook-crew').html(data['cook'].actual + ' / ' + data['cook'].max);
        \$('#carpenter-crew').html(data['carpenter'].actual + ' / ' + data['carpenter'].max);
        \$('#surgeon-crew').html(data['surgeon'].actual + ' / ' + data['surgeon'].max);

    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/recruit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$('#enroll_crew_ships').on('input', function() {
        var shipID = \$(this).val();
        var crewData = {{ crewData|json_encode()|raw }};
        var data = crewData[shipID];

        \$('#seaman-crew').html(data['seaman'].actual + ' / ' + data['seaman'].max);
        \$('#explorer-crew').html(data['explorer'].actual + ' / ' + data['explorer'].max);
        \$('#gunner-crew').html(data['gunner'].actual + ' / ' + data['gunner'].max);
        \$('#cook-crew').html(data['cook'].actual + ' / ' + data['cook'].max);
        \$('#carpenter-crew').html(data['carpenter'].actual + ' / ' + data['carpenter'].max);
        \$('#surgeon-crew').html(data['surgeon'].actual + ' / ' + data['surgeon'].max);

    });
</script>", "authenticated/script/recruit.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\script\\recruit.html.twig");
    }
}
