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

/* authenticated/script/trade.html.twig */
class __TwigTemplate_3077d8f4d9fb7596d9918562517a121a250c3979977ecb8c9edfdb5fb588fafc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/trade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/script/trade.html.twig"));

        // line 1
        echo "<script>
    var total = 0;

    var sell = false;
    var buy = false;

    var items = {
        'gun': {
            'price': 100,
            'color': 'red',
            'name': 'Canon',
            'img': '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gun.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'arsenal': {
            'price': 100,
            'color': 'red',
            'name': 'Armement',
            'img': '";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'food': {
            'price': 1,
            'color': 'green',
            'name': 'Nourriture',
            'img': '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/food.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'alcohol': {
            'price': 1,
            'color': 'green',
            'name': 'Alcool',
            'img': '";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/alcohol.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'wood': {
            'price': 50,
            'color': 'brown',
            'name': 'Bois',
            'img': '";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/wood.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'copper': {
            'price': 50,
            'color': 'brown',
            'name': 'Cuir',
            'img': '";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/copper.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'gemstone': {
            'price': 200,
            'color': 'orange',
            'name': 'Pierre Précieuse',
            'img': '";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/gemstone.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'jewellery': {
            'price': 200,
            'color': 'orange',
            'name': 'Bijoux',
            'img': '";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/jewellery.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'stuff': {
            'price': 10,
            'color': 'orange',
            'name': 'Etoffe',
            'img': '";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/stuff.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'fur': {
            'price': 10,
            'color': 'orange',
            'name': 'Fourrure',
            'img': '";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/fur.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'manuscript': {
            'price': 10,
            'color': 'orange',
            'name': 'Manuscrit',
            'img': '";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/manuscript.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
        'spice': {
            'price': 10,
            'color': 'orange',
            'name': 'Epice',
            'img': '";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/spice.png"), "html", null, true);
        echo "',
            'quantity': 0
        },
    };

    function emptyValues() {
        \$.each(items, function(index, value) {
            items[index]['quantity'] = 0;
        });
    }

    function init() {
        emptyValues();
        \$(\"#buyer-choices\").html('');
        \$(\"#seller-choices\").html('');
        total = 0;
        sell = false;
        buy = false;
    }

    var rate = ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trade"]) || array_key_exists("trade", $context) ? $context["trade"] : (function () { throw new RuntimeError('Variable "trade" does not exist.', 109, $this->source); })()), "rate", [], "any", false, false, false, 109), "html", null, true);
        echo ";
    rate = parseFloat(rate / 100);

    // Achat d'un item
    \$( \"#sell-add\" ).click(function() {
        var quantity = \$(\"#sell-quantity\").val();
        if (quantity > 0) {
            buy = true;
            if (sell) {
                emptyValues();
                \$(\"#buyer-choices\").html('');
                \$(\"#seller-choices\").html('');
                total = 0;
                sell = false;
            }
            var object = \$(\"#sell-object\").val();
            items[object]['quantity'] = parseInt(items[object]['quantity']) + parseInt(quantity);
            total = total + Math.round(items[object]['price'] * quantity);

            \$(\"#buyer-choices\").html(\"\" +
                \"<img src='";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "' alt='gold' class='logo'> <span id='total-buyer'>\" + total + \"</span> <b>Pièces d'or</b><br>\" +
                \"<img src='";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "' alt='gold' class='logo'> +<span id='additional-buyer'>\" + Math.round(total / 10 * rate) + \"</span> <b class='orange-text'>Taxe Commerciale</b>\"
            );

            // Si on n'a pas encore ajouté cette ressource
            if (items[object]['quantity'] == quantity) {
                \$(\"#seller-choices\").append(\"<div class='mb-1' id='\"+ object +\"-div'>\" +
                    \"<img src='\" + items[object]['img'] + \"' alt='resource' class='logo'> <span id='\" + object + \"-number'>\" + quantity + \"</span> <b class='\" + items[object]['color'] + \"-text'>\" + items[object]['name'] + \"</b>\" +
                    \"<img src='";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/cross.png"), "html", null, true);
        echo "' alt='delete' class='cross float-right' id='\"+ object +\"-remove-seller'><br></div>\"
                );
            }
            // Si on a déjà ajouté, on modifie juste la valeur
            else {
                \$(\"#\" + object + \"-number\").html(items[object]['quantity']);
            }
            \$(\"#sell-quantity\").val(0);
        }
    });

    // Vente d'un item
    \$( \"#buy-add\" ).click(function() {
        var quantity = \$(\"#buy-quantity\").val();
        if (quantity > 0) {
            sell = true;
            if (buy) {
                emptyValues();
                \$(\"#seller-choices\").html('');
                \$(\"#buyer-choices\").html('');
                total = 0;
                buy = false;
            }
            var object = \$(\"#buy-object\").val();
            items[object]['quantity'] = parseInt(items[object]['quantity']) + parseInt(quantity);
            total = total + Math.round(items[object]['price'] * quantity * rate);

            \$(\"#seller-choices\").html(\"\" +
                \"<img src='";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "' alt='gold' class='logo'> <span id='total-seller'>\" + total + \"</span> <b>Pièces d'or</b><br>\");

            // Si on n'a pas encore ajouté cette ressource
            if (items[object]['quantity'] == quantity) {
                \$(\"#buyer-choices\").append(\"<div class='mb-1' id='\"+ object +\"-div'>\" +
                    \"<img src='\" + items[object]['img'] + \"' alt='resource' class='logo'> <span id='\" + object + \"-number'>\" + quantity + \"</span> <b class='\" + items[object]['color'] + \"-text'>\" + items[object]['name'] + \"</b>\" +
                    \"<img src='";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/cross.png"), "html", null, true);
        echo "' alt='delete' class='cross float-right' id='\"+ object +\"-remove-buyer'><br></div>\"
                );
            }
            // Si on a déjà ajouté, on modifie juste la valeur
            else {
                \$(\"#\" + object + \"-number\").html(items[object]['quantity']);
            }
            \$(\"#buy-quantity\").val(0);
        }
    });

    // Suppression d'un élément
    \$.each(items, function(index, value) {

       \$(\"body\").on('click', \"#\" + index + \"-remove-seller\", function () {
           total = parseInt(total) - Math.round(parseInt(\$(\"#\" + index + \"-number\").text()) * parseInt(items[index]['price']) * rate);
           \$(\"#\" + index + \"-div\").remove();
           items[index]['quantity'] = 0;
           \$(\"#total-buyer\").html(total);
           \$(\"#additional-buyer\").html(Math.round(total / 10 * rate));

           if (total == 0) {
               \$(\"#buyer-choices\").html('');
               buy = false;
           }
       });
    });

    \$.each(items, function(index, value) {

        \$(\"body\").on('click', \"#\" + index + \"-remove-buyer\", function () {
            total = parseInt(total) - Math.round(parseInt(\$(\"#\" + index + \"-number\").text()) * parseInt(items[index]['price']) * rate);
            \$(\"#\" + index + \"-div\").remove();
            items[index]['quantity'] = 0;
            \$(\"#total-seller\").html(total);
            \$(\"#additional-seller\").html(Math.round(total / 10 * rate));

            if (total == 0) {
                \$(\"#seller-choices\").html('');
                sell = false;
            }
        });
    });

    // Validation
    \$(\"#validate-trade\").click(function() {
        if (document.body.style.cursor != 'wait') {
            document.body.style.cursor = 'wait';
            \$.ajax({
                url: \"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trade_validate");
        echo "\",
                type: \"POST\",
                data: {
                    sell: sell,
                    buy: buy,
                    items: items
                },
                dataType: \"html\"
            }).done(function (response) {
                var data = JSON.parse(response);
                var flash = \"<div class='alert alert-\" + data.label + \" '>\";
                if (data.label == 'success') {
                    flash = flash + '<span class=\"fas fa-check\"></span>';
                }
                else if (data.label == 'danger') {
                    flash = flash + '<span class=\"fas fa-times\"></span>';
                }
                flash += data.message + \"</div>\";
                \$(\"#ajax-response\").html(flash);
                var gold = data.gold.replace(/\\B(?=(\\d{3})+(?!\\d))/g, \" \");
                \$(\"#user-gold\").html(gold);
                init();
                document.body.style.cursor = 'initial';
            });
        }
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/script/trade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 220,  266 => 171,  257 => 165,  226 => 137,  216 => 130,  212 => 129,  189 => 109,  166 => 89,  156 => 82,  146 => 75,  136 => 68,  126 => 61,  116 => 54,  106 => 47,  96 => 40,  86 => 33,  76 => 26,  66 => 19,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var total = 0;

    var sell = false;
    var buy = false;

    var items = {
        'gun': {
            'price': 100,
            'color': 'red',
            'name': 'Canon',
            'img': '{{ asset('img/icons/gun.png') }}',
            'quantity': 0
        },
        'arsenal': {
            'price': 100,
            'color': 'red',
            'name': 'Armement',
            'img': '{{ asset('img/icons/arsenal.png') }}',
            'quantity': 0
        },
        'food': {
            'price': 1,
            'color': 'green',
            'name': 'Nourriture',
            'img': '{{ asset('img/icons/food.png') }}',
            'quantity': 0
        },
        'alcohol': {
            'price': 1,
            'color': 'green',
            'name': 'Alcool',
            'img': '{{ asset('img/icons/alcohol.png') }}',
            'quantity': 0
        },
        'wood': {
            'price': 50,
            'color': 'brown',
            'name': 'Bois',
            'img': '{{ asset('img/icons/wood.png') }}',
            'quantity': 0
        },
        'copper': {
            'price': 50,
            'color': 'brown',
            'name': 'Cuir',
            'img': '{{ asset('img/icons/copper.png') }}',
            'quantity': 0
        },
        'gemstone': {
            'price': 200,
            'color': 'orange',
            'name': 'Pierre Précieuse',
            'img': '{{ asset('img/icons/gemstone.png') }}',
            'quantity': 0
        },
        'jewellery': {
            'price': 200,
            'color': 'orange',
            'name': 'Bijoux',
            'img': '{{ asset('img/icons/jewellery.png') }}',
            'quantity': 0
        },
        'stuff': {
            'price': 10,
            'color': 'orange',
            'name': 'Etoffe',
            'img': '{{ asset('img/icons/stuff.png') }}',
            'quantity': 0
        },
        'fur': {
            'price': 10,
            'color': 'orange',
            'name': 'Fourrure',
            'img': '{{ asset('img/icons/fur.png') }}',
            'quantity': 0
        },
        'manuscript': {
            'price': 10,
            'color': 'orange',
            'name': 'Manuscrit',
            'img': '{{ asset('img/icons/manuscript.png') }}',
            'quantity': 0
        },
        'spice': {
            'price': 10,
            'color': 'orange',
            'name': 'Epice',
            'img': '{{ asset('img/icons/spice.png') }}',
            'quantity': 0
        },
    };

    function emptyValues() {
        \$.each(items, function(index, value) {
            items[index]['quantity'] = 0;
        });
    }

    function init() {
        emptyValues();
        \$(\"#buyer-choices\").html('');
        \$(\"#seller-choices\").html('');
        total = 0;
        sell = false;
        buy = false;
    }

    var rate = {{ trade.rate }};
    rate = parseFloat(rate / 100);

    // Achat d'un item
    \$( \"#sell-add\" ).click(function() {
        var quantity = \$(\"#sell-quantity\").val();
        if (quantity > 0) {
            buy = true;
            if (sell) {
                emptyValues();
                \$(\"#buyer-choices\").html('');
                \$(\"#seller-choices\").html('');
                total = 0;
                sell = false;
            }
            var object = \$(\"#sell-object\").val();
            items[object]['quantity'] = parseInt(items[object]['quantity']) + parseInt(quantity);
            total = total + Math.round(items[object]['price'] * quantity);

            \$(\"#buyer-choices\").html(\"\" +
                \"<img src='{{ asset('img/icons/coin.png') }}' alt='gold' class='logo'> <span id='total-buyer'>\" + total + \"</span> <b>Pièces d'or</b><br>\" +
                \"<img src='{{ asset('img/icons/coin.png') }}' alt='gold' class='logo'> +<span id='additional-buyer'>\" + Math.round(total / 10 * rate) + \"</span> <b class='orange-text'>Taxe Commerciale</b>\"
            );

            // Si on n'a pas encore ajouté cette ressource
            if (items[object]['quantity'] == quantity) {
                \$(\"#seller-choices\").append(\"<div class='mb-1' id='\"+ object +\"-div'>\" +
                    \"<img src='\" + items[object]['img'] + \"' alt='resource' class='logo'> <span id='\" + object + \"-number'>\" + quantity + \"</span> <b class='\" + items[object]['color'] + \"-text'>\" + items[object]['name'] + \"</b>\" +
                    \"<img src='{{ asset('img/icons/cross.png') }}' alt='delete' class='cross float-right' id='\"+ object +\"-remove-seller'><br></div>\"
                );
            }
            // Si on a déjà ajouté, on modifie juste la valeur
            else {
                \$(\"#\" + object + \"-number\").html(items[object]['quantity']);
            }
            \$(\"#sell-quantity\").val(0);
        }
    });

    // Vente d'un item
    \$( \"#buy-add\" ).click(function() {
        var quantity = \$(\"#buy-quantity\").val();
        if (quantity > 0) {
            sell = true;
            if (buy) {
                emptyValues();
                \$(\"#seller-choices\").html('');
                \$(\"#buyer-choices\").html('');
                total = 0;
                buy = false;
            }
            var object = \$(\"#buy-object\").val();
            items[object]['quantity'] = parseInt(items[object]['quantity']) + parseInt(quantity);
            total = total + Math.round(items[object]['price'] * quantity * rate);

            \$(\"#seller-choices\").html(\"\" +
                \"<img src='{{ asset('img/icons/coin.png') }}' alt='gold' class='logo'> <span id='total-seller'>\" + total + \"</span> <b>Pièces d'or</b><br>\");

            // Si on n'a pas encore ajouté cette ressource
            if (items[object]['quantity'] == quantity) {
                \$(\"#buyer-choices\").append(\"<div class='mb-1' id='\"+ object +\"-div'>\" +
                    \"<img src='\" + items[object]['img'] + \"' alt='resource' class='logo'> <span id='\" + object + \"-number'>\" + quantity + \"</span> <b class='\" + items[object]['color'] + \"-text'>\" + items[object]['name'] + \"</b>\" +
                    \"<img src='{{ asset('img/icons/cross.png') }}' alt='delete' class='cross float-right' id='\"+ object +\"-remove-buyer'><br></div>\"
                );
            }
            // Si on a déjà ajouté, on modifie juste la valeur
            else {
                \$(\"#\" + object + \"-number\").html(items[object]['quantity']);
            }
            \$(\"#buy-quantity\").val(0);
        }
    });

    // Suppression d'un élément
    \$.each(items, function(index, value) {

       \$(\"body\").on('click', \"#\" + index + \"-remove-seller\", function () {
           total = parseInt(total) - Math.round(parseInt(\$(\"#\" + index + \"-number\").text()) * parseInt(items[index]['price']) * rate);
           \$(\"#\" + index + \"-div\").remove();
           items[index]['quantity'] = 0;
           \$(\"#total-buyer\").html(total);
           \$(\"#additional-buyer\").html(Math.round(total / 10 * rate));

           if (total == 0) {
               \$(\"#buyer-choices\").html('');
               buy = false;
           }
       });
    });

    \$.each(items, function(index, value) {

        \$(\"body\").on('click', \"#\" + index + \"-remove-buyer\", function () {
            total = parseInt(total) - Math.round(parseInt(\$(\"#\" + index + \"-number\").text()) * parseInt(items[index]['price']) * rate);
            \$(\"#\" + index + \"-div\").remove();
            items[index]['quantity'] = 0;
            \$(\"#total-seller\").html(total);
            \$(\"#additional-seller\").html(Math.round(total / 10 * rate));

            if (total == 0) {
                \$(\"#seller-choices\").html('');
                sell = false;
            }
        });
    });

    // Validation
    \$(\"#validate-trade\").click(function() {
        if (document.body.style.cursor != 'wait') {
            document.body.style.cursor = 'wait';
            \$.ajax({
                url: \"{{ path('app_trade_validate') }}\",
                type: \"POST\",
                data: {
                    sell: sell,
                    buy: buy,
                    items: items
                },
                dataType: \"html\"
            }).done(function (response) {
                var data = JSON.parse(response);
                var flash = \"<div class='alert alert-\" + data.label + \" '>\";
                if (data.label == 'success') {
                    flash = flash + '<span class=\"fas fa-check\"></span>';
                }
                else if (data.label == 'danger') {
                    flash = flash + '<span class=\"fas fa-times\"></span>';
                }
                flash += data.message + \"</div>\";
                \$(\"#ajax-response\").html(flash);
                var gold = data.gold.replace(/\\B(?=(\\d{3})+(?!\\d))/g, \" \");
                \$(\"#user-gold\").html(gold);
                init();
                document.body.style.cursor = 'initial';
            });
        }
    });
</script>", "authenticated/script/trade.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\script\\trade.html.twig");
    }
}
