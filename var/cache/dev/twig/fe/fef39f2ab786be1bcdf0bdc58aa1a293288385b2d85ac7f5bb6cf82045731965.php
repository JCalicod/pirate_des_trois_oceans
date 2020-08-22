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

/* authenticated/script/hour.html.twig */
class __TwigTemplate_ed0cb123c9717192d0d5175208c132631dfac6b9df44c22646d95c667f712e23 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/hour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/hour.html.twig"));

        // line 1
        echo "<script>
    function hour() {


        var dt = new Date();
        var month;
        switch(dt.getUTCMonth()) {
            case 0:
                month = 'Janvier';
                break;
            case 1:
                month = 'Février';
                break;
            case 2:
                month = 'Mars';
                break;
            case 3:
                month = 'Avril';
                break;
            case 4:
                month = 'Mai';
                break;
            case 5:
                month = 'Juin';
                break;
            case 6:
                month = 'Juillet';
                break;
            case 7:
                month = 'Août';
                break;
            case 8:
                month = 'Septembre';
                break;
            case 9:
                month = 'Octobre';
                break;
            case 10:
                month = 'Novembre';
                break;
            case 11:
                month = 'Décembre';
                break;
            default:
                month = 'Etrange';
        }
        var time = '<b>' +
            (dt.getHours() < 10 ? ('0' + dt.getHours())  : dt.getHours()) + \":\" +
            (dt.getMinutes() < 10 ? ('0' + dt.getMinutes()) : dt.getMinutes()) + \":\" +
            (dt.getSeconds() < 10 ? ('0' + dt.getSeconds()) : dt.getSeconds()) + '</b> - ' + dt.getUTCDate() + ' ' + month + ' ' + (dt.getUTCFullYear() - 315);
        \$('#heure').html(time);
        setTimeout(hour, '1000');
    }

    hour();
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/hour.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function hour() {


        var dt = new Date();
        var month;
        switch(dt.getUTCMonth()) {
            case 0:
                month = 'Janvier';
                break;
            case 1:
                month = 'Février';
                break;
            case 2:
                month = 'Mars';
                break;
            case 3:
                month = 'Avril';
                break;
            case 4:
                month = 'Mai';
                break;
            case 5:
                month = 'Juin';
                break;
            case 6:
                month = 'Juillet';
                break;
            case 7:
                month = 'Août';
                break;
            case 8:
                month = 'Septembre';
                break;
            case 9:
                month = 'Octobre';
                break;
            case 10:
                month = 'Novembre';
                break;
            case 11:
                month = 'Décembre';
                break;
            default:
                month = 'Etrange';
        }
        var time = '<b>' +
            (dt.getHours() < 10 ? ('0' + dt.getHours())  : dt.getHours()) + \":\" +
            (dt.getMinutes() < 10 ? ('0' + dt.getMinutes()) : dt.getMinutes()) + \":\" +
            (dt.getSeconds() < 10 ? ('0' + dt.getSeconds()) : dt.getSeconds()) + '</b> - ' + dt.getUTCDate() + ' ' + month + ' ' + (dt.getUTCFullYear() - 315);
        \$('#heure').html(time);
        setTimeout(hour, '1000');
    }

    hour();
</script>", "authenticated/script/hour.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\script\\hour.html.twig");
    }
}
