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

/* authenticated/script/send_tavern_message.html.twig */
class __TwigTemplate_5d931a52c7e959aa1fecfe17868b0cda399e4b9cd5695413879e33bf45c46501 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/send_tavern_message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/send_tavern_message.html.twig"));

        // line 1
        echo "<script>
    document.getElementById('send-tavern-message').addEventListener('click', sendMessage, false);
    \$(document).on('keypress', function(e) {
        if(e.which == 13) {
            sendMessage();
        }
    });

    function getMessages() {
        \$.ajax({
            url : \"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tavern_refresh");
        echo "\",
            type : \"GET\",
            dataType: \"html\"
        }).done(function (response) {
            \$('#tavern').html(response);
            document.body.style.cursor = 'initial';
        });
    }

    function abordRequests() {
        for (var i = 0; i < requests.length; i++) {
            requests[i].abort();
        }
    }

    function sendMessage() {
        if (document.body.style.cursor != 'wait') {
            abordRequests();
            var message = \$('#tavern-message').val();
            \$('#tavern-message').val('');
            document.body.style.cursor = 'wait';

            \$.ajax({
                url: \"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tavern_send_message");
        echo "\",
                type: \"POST\",
                data: {
                    message: message
                },
                dataType: \"html\"
            }).done(function (response) {
                getMessages();
            });
        }
    };
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/send_tavern_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    document.getElementById('send-tavern-message').addEventListener('click', sendMessage, false);
    \$(document).on('keypress', function(e) {
        if(e.which == 13) {
            sendMessage();
        }
    });

    function getMessages() {
        \$.ajax({
            url : \"{{ path('app_tavern_refresh') }}\",
            type : \"GET\",
            dataType: \"html\"
        }).done(function (response) {
            \$('#tavern').html(response);
            document.body.style.cursor = 'initial';
        });
    }

    function abordRequests() {
        for (var i = 0; i < requests.length; i++) {
            requests[i].abort();
        }
    }

    function sendMessage() {
        if (document.body.style.cursor != 'wait') {
            abordRequests();
            var message = \$('#tavern-message').val();
            \$('#tavern-message').val('');
            document.body.style.cursor = 'wait';

            \$.ajax({
                url: \"{{ path('app_tavern_send_message') }}\",
                type: \"POST\",
                data: {
                    message: message
                },
                dataType: \"html\"
            }).done(function (response) {
                getMessages();
            });
        }
    };
</script>", "authenticated/script/send_tavern_message.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\script\\send_tavern_message.html.twig");
    }
}
