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

/* authenticated/script/choose-alliance-color.html.twig */
class __TwigTemplate_8b27e3eaf7dc42d9087a78aa7c2ec9cb91d0d14319f5ffdbd89cad2b03f193a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/choose-alliance-color.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/choose-alliance-color.html.twig"));

        // line 1
        echo "<script>

    function resetColorsBorder() {
        \$('.color').each(function() {
            \$(this).css('border', '2px solid #100D0B');
        });
    }

    \$('.color').click(function() {
        var id = \$(this).attr('id');
        var radio = \$('#create_alliance_color_' + id);
        radio.prop('checked', 'checked');
        resetColorsBorder();
        \$(this).css('border', '4px solid #100D0B');
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/choose-alliance-color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>

    function resetColorsBorder() {
        \$('.color').each(function() {
            \$(this).css('border', '2px solid #100D0B');
        });
    }

    \$('.color').click(function() {
        var id = \$(this).attr('id');
        var radio = \$('#create_alliance_color_' + id);
        radio.prop('checked', 'checked');
        resetColorsBorder();
        \$(this).css('border', '4px solid #100D0B');
    });

</script>", "authenticated/script/choose-alliance-color.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\script\\choose-alliance-color.html.twig");
    }
}
