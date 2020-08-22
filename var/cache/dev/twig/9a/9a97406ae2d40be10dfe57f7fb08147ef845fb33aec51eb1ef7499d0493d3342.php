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

/* authenticated/script/change-alliance-tab.html.twig */
class __TwigTemplate_e377580a476024781f062d44a1ef53440951cef87f5d88ea749a68cbac5a6221 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/change-alliance-tab.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/change-alliance-tab.html.twig"));

        // line 1
        echo "<script>

    function desactivateOtherTabs(id) {
        \$('.tab').each(function() {
            if (\$(this).attr('id') != id) {
                \$(this).removeClass('active');
            }
        });
    }

    function hideOtherBlocks(id) {
        \$('.tab-block').each(function() {
            if (\$(this).attr('id') != id) {
                \$(this).hide();
            }
        });
    }

    \$('.tab').click(function() {
        var id = \$(this).attr('id');
        \$(this).addClass('active');
        desactivateOtherTabs(id);
        id = id.substr(4);
        \$('#' + id).css('display', 'block');
        hideOtherBlocks(id);
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/change-alliance-tab.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>

    function desactivateOtherTabs(id) {
        \$('.tab').each(function() {
            if (\$(this).attr('id') != id) {
                \$(this).removeClass('active');
            }
        });
    }

    function hideOtherBlocks(id) {
        \$('.tab-block').each(function() {
            if (\$(this).attr('id') != id) {
                \$(this).hide();
            }
        });
    }

    \$('.tab').click(function() {
        var id = \$(this).attr('id');
        \$(this).addClass('active');
        desactivateOtherTabs(id);
        id = id.substr(4);
        \$('#' + id).css('display', 'block');
        hideOtherBlocks(id);
    });

</script>", "authenticated/script/change-alliance-tab.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\authenticated\\script\\change-alliance-tab.html.twig");
    }
}
